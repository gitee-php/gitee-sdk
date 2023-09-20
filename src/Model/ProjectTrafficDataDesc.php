<?php
/**
 * ProjectTrafficDataDesc
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
 * ProjectTrafficDataDesc Class Doc Comment
 *
 * @category Class
 * @package  Gitee
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProjectTrafficDataDesc implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProjectTrafficDataDesc';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'bucket' => 'int',
        'ip' => 'int',
        'pull' => 'int',
        'push' => 'int',
        'downloadZip' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'bucket' => 'int32',
        'ip' => 'int32',
        'pull' => 'int32',
        'push' => 'int32',
        'downloadZip' => 'int32'
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
        'bucket' => 'bucket',
        'ip' => 'ip',
        'pull' => 'pull',
        'push' => 'push',
        'downloadZip' => 'download_zip'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bucket' => 'setBucket',
        'ip' => 'setIp',
        'pull' => 'setPull',
        'push' => 'setPush',
        'downloadZip' => 'setDownloadZip'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bucket' => 'getBucket',
        'ip' => 'getIp',
        'pull' => 'getPull',
        'push' => 'getPush',
        'downloadZip' => 'getDownloadZip'
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
        $this->container['bucket'] = isset($data['bucket']) ? $data['bucket'] : null;
        $this->container['ip'] = isset($data['ip']) ? $data['ip'] : null;
        $this->container['pull'] = isset($data['pull']) ? $data['pull'] : null;
        $this->container['push'] = isset($data['push']) ? $data['push'] : null;
        $this->container['downloadZip'] = isset($data['downloadZip']) ? $data['downloadZip'] : null;
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
     * Gets bucket
     *
     * @return int
     */
    public function getBucket()
    {
        return $this->container['bucket'];
    }

    /**
     * Sets bucket
     *
     * @param int $bucket 日期,10位日期时间戳
     *
     * @return $this
     */
    public function setBucket($bucket)
    {
        $this->container['bucket'] = $bucket;

        return $this;
    }

    /**
     * Gets ip
     *
     * @return int
     */
    public function getIp()
    {
        return $this->container['ip'];
    }

    /**
     * Sets ip
     *
     * @param int $ip 浏览次数
     *
     * @return $this
     */
    public function setIp($ip)
    {
        $this->container['ip'] = $ip;

        return $this;
    }

    /**
     * Gets pull
     *
     * @return int
     */
    public function getPull()
    {
        return $this->container['pull'];
    }

    /**
     * Sets pull
     *
     * @param int $pull 拉取次数
     *
     * @return $this
     */
    public function setPull($pull)
    {
        $this->container['pull'] = $pull;

        return $this;
    }

    /**
     * Gets push
     *
     * @return int
     */
    public function getPush()
    {
        return $this->container['push'];
    }

    /**
     * Sets push
     *
     * @param int $push 推送次数
     *
     * @return $this
     */
    public function setPush($push)
    {
        $this->container['push'] = $push;

        return $this;
    }

    /**
     * Gets downloadZip
     *
     * @return int
     */
    public function getDownloadZip()
    {
        return $this->container['downloadZip'];
    }

    /**
     * Sets downloadZip
     *
     * @param int $downloadZip 每天的ZIP包下载次数
     *
     * @return $this
     */
    public function setDownloadZip($downloadZip)
    {
        $this->container['downloadZip'] = $downloadZip;

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


