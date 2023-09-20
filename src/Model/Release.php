<?php
/**
 * Release
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
 * Release Class Doc Comment
 *
 * @category Class
 * @description 更新仓库Release
 * @package  Gitee
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Release implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Release';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'tagName' => 'string',
        'targetCommitish' => 'string',
        'prerelease' => 'string',
        'name' => 'string',
        'body' => 'string',
        'author' => 'string',
        'createdAt' => '\DateTime',
        'assets' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'tagName' => null,
        'targetCommitish' => null,
        'prerelease' => null,
        'name' => null,
        'body' => null,
        'author' => null,
        'createdAt' => 'date-time',
        'assets' => null
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
        'tagName' => 'tag_name',
        'targetCommitish' => 'target_commitish',
        'prerelease' => 'prerelease',
        'name' => 'name',
        'body' => 'body',
        'author' => 'author',
        'createdAt' => 'created_at',
        'assets' => 'assets'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'tagName' => 'setTagName',
        'targetCommitish' => 'setTargetCommitish',
        'prerelease' => 'setPrerelease',
        'name' => 'setName',
        'body' => 'setBody',
        'author' => 'setAuthor',
        'createdAt' => 'setCreatedAt',
        'assets' => 'setAssets'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'tagName' => 'getTagName',
        'targetCommitish' => 'getTargetCommitish',
        'prerelease' => 'getPrerelease',
        'name' => 'getName',
        'body' => 'getBody',
        'author' => 'getAuthor',
        'createdAt' => 'getCreatedAt',
        'assets' => 'getAssets'
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
        $this->container['tagName'] = isset($data['tagName']) ? $data['tagName'] : null;
        $this->container['targetCommitish'] = isset($data['targetCommitish']) ? $data['targetCommitish'] : null;
        $this->container['prerelease'] = isset($data['prerelease']) ? $data['prerelease'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
        $this->container['author'] = isset($data['author']) ? $data['author'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['assets'] = isset($data['assets']) ? $data['assets'] : null;
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
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets tagName
     *
     * @return string
     */
    public function getTagName()
    {
        return $this->container['tagName'];
    }

    /**
     * Sets tagName
     *
     * @param string $tagName tagName
     *
     * @return $this
     */
    public function setTagName($tagName)
    {
        $this->container['tagName'] = $tagName;

        return $this;
    }

    /**
     * Gets targetCommitish
     *
     * @return string
     */
    public function getTargetCommitish()
    {
        return $this->container['targetCommitish'];
    }

    /**
     * Sets targetCommitish
     *
     * @param string $targetCommitish targetCommitish
     *
     * @return $this
     */
    public function setTargetCommitish($targetCommitish)
    {
        $this->container['targetCommitish'] = $targetCommitish;

        return $this;
    }

    /**
     * Gets prerelease
     *
     * @return string
     */
    public function getPrerelease()
    {
        return $this->container['prerelease'];
    }

    /**
     * Sets prerelease
     *
     * @param string $prerelease prerelease
     *
     * @return $this
     */
    public function setPrerelease($prerelease)
    {
        $this->container['prerelease'] = $prerelease;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets body
     *
     * @return string
     */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
     * Sets body
     *
     * @param string $body body
     *
     * @return $this
     */
    public function setBody($body)
    {
        $this->container['body'] = $body;

        return $this;
    }

    /**
     * Gets author
     *
     * @return string
     */
    public function getAuthor()
    {
        return $this->container['author'];
    }

    /**
     * Sets author
     *
     * @param string $author author
     *
     * @return $this
     */
    public function setAuthor($author)
    {
        $this->container['author'] = $author;

        return $this;
    }

    /**
     * Gets createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
     * Sets createdAt
     *
     * @param \DateTime $createdAt createdAt
     *
     * @return $this
     */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;

        return $this;
    }

    /**
     * Gets assets
     *
     * @return string
     */
    public function getAssets()
    {
        return $this->container['assets'];
    }

    /**
     * Sets assets
     *
     * @param string $assets assets
     *
     * @return $this
     */
    public function setAssets($assets)
    {
        $this->container['assets'] = $assets;

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


