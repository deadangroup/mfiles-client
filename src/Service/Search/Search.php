<?php

namespace Herufi\MFiles\Service\Search;

use DateTime;
use Herufi\MFiles\Model\MFilesFile;
use Herufi\MFiles\Model\Object\MFilesObject;
use Herufi\MFiles\Model\Object\MFilesObjVer;
use Herufi\MFiles\Service\MFilesGetService;
use Herufi\MFiles\Service\MFilesRequestInterface;
use Herufi\MFiles\Service\MFilesResponseInterface;
use Herufi\MFiles\Service\Search\Request\SearchRequest;
use Herufi\MFiles\Service\Search\Response\SearchResponse;
use stdClass;

/**
 * Class Search
 *
 * @package Herufi\MFiles\Service\Search
 */
class Search extends MFilesGetService
{
    /**
     *
     */
    const URI = '/REST/objects?';

    /**
     * Return the service URI.
     * Follow the rules from RFC 3986 http://tools.ietf.org/html/rfc3986#section-5.2.
     *
     * @param  MFilesRequestInterface|null  $request
     *
     * @return string
     */
    public function getUri($request = null): string
    {
        /* @var SearchRequest $request */
        return self::URI.$request->getSearchRequest();
    }

    /**
     * Transform an Request to POST parameters.
     *
     * @param  MFilesRequestInterface  $request
     *
     * @return array
     */
    public function getRequestOptions(MFilesRequestInterface $request = null): array
    {
        return [

        ];
    }

    /**
     * Transform an JSON response to a Response object.
     *
     * @param $response
     *
     * @return MFilesResponseInterface
     */
    protected function parseResponse($response): MFilesResponseInterface
    {
        $objects = $this->parseItems($response->Items);

        $searchResponse = new SearchResponse();
        $searchResponse->setObjects($objects);
        $searchResponse->setMoreResults($response->MoreResults);

        return $searchResponse;
    }

    /**
     * Parse JSON to object items.
     *
     * @param  array  $items
     *
     * @return array
     */
    protected function parseItems(array $items)
    {
        $objects = [];

        foreach ($items as $item) {
            array_push($objects, $this->parseItem($item));
        }

        return $objects;
    }

    /**
     * Parse object item JSON to object item.
     *
     * @param  \stdClass  $item
     *
     * @return MFilesObject
     */
    protected function parseItem(stdClass $item)
    {
        $object = new MFilesObject();

        $object->setTitle($item->Title);
        $object->setEscapedTitleWithId($item->EscapedTitleWithID);
        $object->setDisplayId(intval($item->DisplayID));
        $object->setClass($item->Class);
        $object->setCheckedOutAtUTC(new DateTime($item->CheckedOutAtUtc));
        $object->setCheckedOutAt(new DateTime($item->CheckedOutAt));
        $object->setLastModifiedUTC(new DateTime($item->LastModifiedUtc));
        $object->setLastModified(new DateTime($item->LastModified));
        $object->setObjectCheckedOut($item->ObjectCheckedOut);
        $object->setObjectCheckedOutToThisUser($item->ObjectCheckedOutToThisUser);
        $object->setCreatedUTC(new DateTime($item->CreatedUtc));
        $object->setCreated(new DateTime($item->Created));
        $object->setVisibleAfterOperation($item->VisibleAfterOperation);
        $object->setPathInIdView($item->PathInIDView);
        $object->setLastModifiedDisplayValue(DateTime::createFromFormat("d/m/Y H:i",$item->LastModifiedDisplayValue));
        $object->setCheckedOutAtDisplayValue(DateTime::createFromFormat("d/m/Y H:i",$item->CheckedOutAtDisplayValue));
        $object->setCreatedDisplayValue(DateTime::createFromFormat("d/m/Y H:i",$item->CreatedDisplayValue));
        $object->setObjectVersionFlags($item->ObjectVersionFlags);
        $object->setScore($item->Score);
        $object->setLastAccessedByMe(new DateTime($item->LastAccessedByMe));
        $object->setAccessedByMeUTC(new DateTime($item->AccessedByMeUtc));
        $object->setAccessedByMe(new DateTime($item->AccessedByMe));
        $object->setObjectGUID($item->ObjectGUID);
        $object->setCheckedOutTo($item->CheckedOutTo);
        $object->setSingleFile($item->SingleFile);
        $object->setThisVersionLatestToThisUser($item->ThisVersionLatestToThisUser);

        $object->setObjVer($this->parseObjVer($item->ObjVer));
        $object->setFiles($this->parseFiles($item->Files));

        return $object;
    }

    /**
     * Parse ObjVer JSON to object item.
     *
     * @param  \stdClass  $item
     *
     * @return MFilesObjVer
     */
    protected function parseObjVer(stdClass $item)
    {
        $object = new MFilesObjVer();

        $object->setVersion($item->Version);
        $object->setID($item->ID);
        $object->setType($item->Type);

        return $object;
    }

    /**
     * Parse Files JSON to object items.
     *
     * @param  array  $files
     *
     * @return array
     */
    protected function parseFiles(array $files)
    {
        $newFiles = [];
        foreach ($files as $file) {
            array_push($newFiles, $this->parseFile($file));
        }

        return $newFiles;
    }

    /**
     * Parse File JSON to object item.
     *
     * @param  \stdClass  $item
     *
     * @return MFilesFile
     */
    protected function parseFile(stdClass $item)
    {
        $object = new MFilesFile();

        $object->setId($item->ID);
        $object->setName($item->Name);
        $object->setEscapedName($item->EscapedName);
        $object->setExtension($item->Extension);
        $object->setSize($item->Size);
        $object->setLastModified(new DateTime($item->LastModified));
        $object->setChangeTimeUTC(new DateTime($item->ChangeTimeUtc));
        $object->setChangeTime(new DateTime($item->ChangeTime));
        $object->setCreatedUTC(new DateTime($item->CreatedUtc));
        $object->setCreatedDisplayValue(DateTime::createFromFormat("d/m/Y H:i", $item->CreatedDisplayValue));
        $object->setLastModifiedDisplayValue(DateTime::createFromFormat("d/m/Y H:i", $item->LastModifiedDisplayValue));
        $object->setFileGUID($item->FileGUID);
        $object->setVersion($item->Version);

        return $object;
    }
}
