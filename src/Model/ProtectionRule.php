<?php
/**
 * ProtectionRule
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
 * ProtectionRule Class Doc Comment
 *
 * @category Class
 * @description 删除仓库保护分支策略
 * @package  Gitee
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProtectionRule implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProtectionRule';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'projectId' => 'string',
        'wildcard' => 'string',
        'pushers' => 'string[]',
        'mergers' => 'string[]',
        'contexts' => 'string[]',
        'strict' => 'bool',
        'mode' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'projectId' => null,
        'wildcard' => null,
        'pushers' => null,
        'mergers' => null,
        'contexts' => null,
        'strict' => null,
        'mode' => null
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
        'id' => 'id',
        'projectId' => 'project_id',
        'wildcard' => 'wildcard',
        'pushers' => 'pushers',
        'mergers' => 'mergers',
        'contexts' => 'contexts',
        'strict' => 'strict',
        'mode' => 'mode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'projectId' => 'setProjectId',
        'wildcard' => 'setWildcard',
        'pushers' => 'setPushers',
        'mergers' => 'setMergers',
        'contexts' => 'setContexts',
        'strict' => 'setStrict',
        'mode' => 'setMode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'projectId' => 'getProjectId',
        'wildcard' => 'getWildcard',
        'pushers' => 'getPushers',
        'mergers' => 'getMergers',
        'contexts' => 'getContexts',
        'strict' => 'getStrict',
        'mode' => 'getMode'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['wildcard'] = isset($data['wildcard']) ? $data['wildcard'] : null;
        $this->container['pushers'] = isset($data['pushers']) ? $data['pushers'] : null;
        $this->container['mergers'] = isset($data['mergers']) ? $data['mergers'] : null;
        $this->container['contexts'] = isset($data['contexts']) ? $data['contexts'] : null;
        $this->container['strict'] = isset($data['strict']) ? $data['strict'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets projectId
     *
     * @return string
     */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
     * Sets projectId
     *
     * @param string $projectId projectId
     *
     * @return $this
     */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;

        return $this;
    }

    /**
     * Gets wildcard
     *
     * @return string
     */
    public function getWildcard()
    {
        return $this->container['wildcard'];
    }

    /**
     * Sets wildcard
     *
     * @param string $wildcard wildcard
     *
     * @return $this
     */
    public function setWildcard($wildcard)
    {
        $this->container['wildcard'] = $wildcard;

        return $this;
    }

    /**
     * Gets pushers
     *
     * @return string[]
     */
    public function getPushers()
    {
        return $this->container['pushers'];
    }

    /**
     * Sets pushers
     *
     * @param string[] $pushers pushers
     *
     * @return $this
     */
    public function setPushers($pushers)
    {
        $this->container['pushers'] = $pushers;

        return $this;
    }

    /**
     * Gets mergers
     *
     * @return string[]
     */
    public function getMergers()
    {
        return $this->container['mergers'];
    }

    /**
     * Sets mergers
     *
     * @param string[] $mergers mergers
     *
     * @return $this
     */
    public function setMergers($mergers)
    {
        $this->container['mergers'] = $mergers;

        return $this;
    }

    /**
     * Gets contexts
     *
     * @return string[]
     */
    public function getContexts()
    {
        return $this->container['contexts'];
    }

    /**
     * Sets contexts
     *
     * @param string[] $contexts 检查项列表
     *
     * @return $this
     */
    public function setContexts($contexts)
    {
        $this->container['contexts'] = $contexts;

        return $this;
    }

    /**
     * Gets strict
     *
     * @return bool
     */
    public function getStrict()
    {
        return $this->container['strict'];
    }

    /**
     * Sets strict
     *
     * @param bool $strict 是否严格检查
     *
     * @return $this
     */
    public function setStrict($strict)
    {
        $this->container['strict'] = $strict;

        return $this;
    }

    /**
     * Gets mode
     *
     * @return string
     */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
     * Sets mode
     *
     * @param string $mode 模式 standard: 标准模式, review: 评审模式
     *
     * @return $this
     */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;

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


