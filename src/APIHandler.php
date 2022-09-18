<?php

namespace Herufi\MFiles;

use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Http;

/**
 * Class APIHandler
 *
 * @package Herufi\MFiles
 */
class APIHandler
{
    /**
     * @var null
     */
    private $authToken = null;

    /**
     * @var \Illuminate\Http\Client\PendingRequest
     */
    private $client;

    /**
     * MFilesAPIClient constructor.
     *
     * @param  string  $baseUrl
     * @param  array   $guzzleOptions
     */
    public function __construct(string $baseUrl, array $guzzleOptions = [])
    {
        $newGuzzleOptions = array_merge([
            'exceptions'      => true,
            'base_uri'        => $baseUrl,
            'headers'         => [
                'Content-Type' => 'application/json',
                'Cookie'       => 'ASP.Net_SessionId=0jfn2kzpex1ytbmdh3f1zar'
            ],
            'allow_redirects' => true
        ], $guzzleOptions);

        $this->client = Http::baseUrl($baseUrl)->withOptions($newGuzzleOptions);
    }

    /**
     * @param  string  $authToken
     */
    public function setAuthToken(string $authToken)
    {
        $this->authToken = $authToken;
    }

    /**
     * @param         $uri
     * @param  array  $data
     * @return object
     */
    public function post($uri, array $data = [])
    {
        $this->setTokenInRequest();

        try {
            $response = $this->client->post($uri, $data);
            $this->sendToEmail("POST", $uri, $response);
            return $response->object();
        } catch (\GuzzleHttp\Exception\ClientException $error) {
            $this->sendToEmail("GET", $uri, $error->getResponse()->getBody()->getContents());
            throw new \Exception($error);
        }
    }

    /**
     * @return \Illuminate\Http\Client\PendingRequest
     */
    public function setTokenInRequest()
    {
        if ($this->authToken) {
            $this->client->withHeaders([
                'X-Authentication' => $this->authToken
            ]);
        }

        return $this->client;
    }

    /**
     * @param         $uri
     * @param  array  $data
     * @return \Illuminate\Http\Client\Response
     * @throws \Exception
     */
    public function get($uri, array $data = [])
    {
        try {
            $this->setTokenInRequest();
            $response = $this->client->get($uri, $data);

            $this->sendToEmail("GET", $uri, $response);

            return $response;

        } catch (\GuzzleHttp\Exception\ClientException $error) {
            $this->sendToEmail("GET", $uri, $error->getResponse()->getBody()->getContents());
            throw new \Exception($error);
        }
    }

    /**
     * @return null
     */
    public function getAuthToken()
    {
        return $this->authToken;
    }

    /**
     * @param $method
     * @param $uri
     * @param $response
     */
    public function sendToEmail($method, $uri, $response)
    {
        \Mail::raw('See attached response from server', function (Message $message) use ($method, $uri, $response) {
            $message->subject($method." ".$uri.' : EUCAP MFiles response')
                ->to('tech@deadangroup.com')
                ->attachData($response, "response.txt");
        });
    }
}
