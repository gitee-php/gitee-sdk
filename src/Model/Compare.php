<?php
/**
 * Compare
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
 * Compare Class Doc Comment
 *
 * @category Class
 * @description 两个Commits之间对比的版本差异
 * @package  Gitee
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Compare implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Compare';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'baseCommit' => 'string',
        'mergeBaseCommit' => 'string',
        'commits' => 'string',
        'files' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'baseCommit' => null,
        'mergeBaseCommit' => null,
        'commits' => null,
        'files' => null
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
        'baseCommit' => 'base_commit',
        'mergeBaseCommit' => 'merge_base_commit',
        'commits' => 'commits',
        'files' => 'files'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'baseCommit' => 'setBaseCommit',
        'mergeBaseCommit' => 'setMergeBaseCommit',
        'commits' => 'setCommits',
        'files' => 'setFiles'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'baseCommit' => 'getBaseCommit',
        'mergeBaseCommit' => 'getMergeBaseCommit',
        'commits' => 'getCommits',
        'files' => 'getFiles'
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
        $this->container['baseCommit'] = isset($data['baseCommit']) ? $data['baseCommit'] : null;
        $this->container['mergeBaseCommit'] = isset($data['mergeBaseCommit']) ? $data['mergeBaseCommit'] : null;
        $this->container['commits'] = isset($data['commits']) ? $data['commits'] : null;
        $this->container['files'] = isset($data['files']) ? $data['files'] : null;
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
     * Gets baseCommit
     *
     * @return string
     */
    public function getBaseCommit()
    {
        return $this->container['baseCommit'];
    }

    /**
     * Sets baseCommit
     *
     * @param string $baseCommit baseCommit
     *
     * @return $this
     */
    public function setBaseCommit($baseCommit)
    {
        $this->container['baseCommit'] = $baseCommit;

        return $this;
    }

    /**
     * Gets mergeBaseCommit
     *
     * @return string
     */
    public function getMergeBaseCommit()
    {
        return $this->container['mergeBaseCommit'];
    }

    /**
     * Sets mergeBaseCommit
     *
     * @param string $mergeBaseCommit mergeBaseCommit
     *
     * @return $this
     */
    public function setMergeBaseCommit($mergeBaseCommit)
    {
        $this->container['mergeBaseCommit'] = $mergeBaseCommit;

        return $this;
    }

    /**
     * Gets commits
     *
     * @return string
     */
    public function getCommits()
    {
        return $this->container['commits'];
    }

    /**
     * Sets commits
     *
     * @param string $commits commits
     *
     * @return $this
     */
    public function setCommits($commits)
    {
        $this->container['commits'] = $commits;

        return $this;
    }

    /**
     * Gets files
     *
     * @return string
     */
    public function getFiles()
    {
        return $this->container['files'];
    }

    /**
     * Sets files
     *
     * @param string $files files
     *
     * @return $this
     */
    public function setFiles($files)
    {
        $this->container['files'] = $files;

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


