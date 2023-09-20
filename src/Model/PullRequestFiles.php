<?php
/**
 * PullRequestFiles
 *
 * PHP version 5
 *
 * @category Class
 * @package  Gitee
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Gitee Open API
 *
 * Gitee SDK for PHP
 *
 * OpenAPI spec version: 5.4.73
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.32
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Gitee\Model;

use \ArrayAccess;
use \Gitee\ObjectSerializer;

/**
 * PullRequestFiles Class Doc Comment
 *
 * @category Class
 * @description Pull Request Commit文件列表。最多显示300条diff
 * @package  Gitee
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PullRequestFiles implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PullRequestFiles';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'sha' => 'string',
        'filename' => 'string',
        'status' => 'string',
        'additions' => 'string',
        'deletions' => 'string',
        'blobUrl' => 'string',
        'rawUrl' => 'string',
        'patch' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'sha' => null,
        'filename' => null,
        'status' => null,
        'additions' => null,
        'deletions' => null,
        'blobUrl' => null,
        'rawUrl' => null,
        'patch' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'sha' => 'sha',
        'filename' => 'filename',
        'status' => 'status',
        'additions' => 'additions',
        'deletions' => 'deletions',
        'blobUrl' => 'blob_url',
        'rawUrl' => 'raw_url',
        'patch' => 'patch'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sha' => 'setSha',
        'filename' => 'setFilename',
        'status' => 'setStatus',
        'additions' => 'setAdditions',
        'deletions' => 'setDeletions',
        'blobUrl' => 'setBlobUrl',
        'rawUrl' => 'setRawUrl',
        'patch' => 'setPatch'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sha' => 'getSha',
        'filename' => 'getFilename',
        'status' => 'getStatus',
        'additions' => 'getAdditions',
        'deletions' => 'getDeletions',
        'blobUrl' => 'getBlobUrl',
        'rawUrl' => 'getRawUrl',
        'patch' => 'getPatch'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['sha'] = isset($data['sha']) ? $data['sha'] : null;
        $this->container['filename'] = isset($data['filename']) ? $data['filename'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['additions'] = isset($data['additions']) ? $data['additions'] : null;
        $this->container['deletions'] = isset($data['deletions']) ? $data['deletions'] : null;
        $this->container['blobUrl'] = isset($data['blobUrl']) ? $data['blobUrl'] : null;
        $this->container['rawUrl'] = isset($data['rawUrl']) ? $data['rawUrl'] : null;
        $this->container['patch'] = isset($data['patch']) ? $data['patch'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets sha
     *
     * @return string
     */
    public function getSha()
    {
        return $this->container['sha'];
    }

    /**
     * Sets sha
     *
     * @param string $sha sha
     *
     * @return $this
     */
    public function setSha($sha)
    {
        $this->container['sha'] = $sha;

        return $this;
    }

    /**
     * Gets filename
     *
     * @return string
     */
    public function getFilename()
    {
        return $this->container['filename'];
    }

    /**
     * Sets filename
     *
     * @param string $filename filename
     *
     * @return $this
     */
    public function setFilename($filename)
    {
        $this->container['filename'] = $filename;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets additions
     *
     * @return string
     */
    public function getAdditions()
    {
        return $this->container['additions'];
    }

    /**
     * Sets additions
     *
     * @param string $additions additions
     *
     * @return $this
     */
    public function setAdditions($additions)
    {
        $this->container['additions'] = $additions;

        return $this;
    }

    /**
     * Gets deletions
     *
     * @return string
     */
    public function getDeletions()
    {
        return $this->container['deletions'];
    }

    /**
     * Sets deletions
     *
     * @param string $deletions deletions
     *
     * @return $this
     */
    public function setDeletions($deletions)
    {
        $this->container['deletions'] = $deletions;

        return $this;
    }

    /**
     * Gets blobUrl
     *
     * @return string
     */
    public function getBlobUrl()
    {
        return $this->container['blobUrl'];
    }

    /**
     * Sets blobUrl
     *
     * @param string $blobUrl blobUrl
     *
     * @return $this
     */
    public function setBlobUrl($blobUrl)
    {
        $this->container['blobUrl'] = $blobUrl;

        return $this;
    }

    /**
     * Gets rawUrl
     *
     * @return string
     */
    public function getRawUrl()
    {
        return $this->container['rawUrl'];
    }

    /**
     * Sets rawUrl
     *
     * @param string $rawUrl rawUrl
     *
     * @return $this
     */
    public function setRawUrl($rawUrl)
    {
        $this->container['rawUrl'] = $rawUrl;

        return $this;
    }

    /**
     * Gets patch
     *
     * @return string
     */
    public function getPatch()
    {
        return $this->container['patch'];
    }

    /**
     * Sets patch
     *
     * @param string $patch patch
     *
     * @return $this
     */
    public function setPatch($patch)
    {
        $this->container['patch'] = $patch;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


