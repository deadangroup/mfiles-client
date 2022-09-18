<?php

use Deadan\MFiles\APIHandler;
use Deadan\MFiles\MFilesClient;

$server_url = '';
$username = '';
$password = '';
$vault_guid = '';

$apiHandler = new APIHandler(
    $server_url,
    [
        'debug' => true
    ]
);
$client = new MFilesClient($apiHandler);
$client->authorize(
    $username,
    $password,
    $vault_guid
);

//get all documents
$allDocuments = $client->getAllDocuments();
$documents = $allDocuments->getObjects();

//search documents
$allDocuments = $client->searchResult(['q' => 'TEST', 'limit' => 100]);
$documents = $allDocuments->getObjects();

//get root view items
$response = $client->getRootViewItems();
$items = $response->getItems();

//get items from root view
$viewMfilesID = 1234;
$viewData = $client->getObjectsFromView($viewMfilesID);
$viewObjects = $viewData->getObjects();

//download file contents
$fileID = 1234;
$objectType = '';
$objectID = '';
$objectVersion = 'latest';
$response = $client->downloadFile($fileID, $objectType, $objectID, $objectVersion);
$fileContents = $response->getFile();

//etc
