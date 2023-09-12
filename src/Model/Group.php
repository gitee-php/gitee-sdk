<?php
/**
 * Group
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
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 5.4.72
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
 * Group Class Doc Comment
 *
 * @category Class
 * @description 获取一个组织
 * @package  Gitee
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Group implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Group';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'login' => 'string',
        'name' => 'string',
        'url' => 'string',
        'avatarUrl' => 'string',
        'reposUrl' => 'string',
        'eventsUrl' => 'string',
        'membersUrl' => 'string',
        'description' => 'string',
        'followCount' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'login' => null,
        'name' => null,
        'url' => null,
        'avatarUrl' => null,
        'reposUrl' => null,
        'eventsUrl' => null,
        'membersUrl' => null,
        'description' => null,
        'followCount' => null
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
        'login' => 'login',
        'name' => 'name',
        'url' => 'url',
        'avatarUrl' => 'avatar_url',
        'reposUrl' => 'repos_url',
        'eventsUrl' => 'events_url',
        'membersUrl' => 'members_url',
        'description' => 'description',
        'followCount' => 'follow_count'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'login' => 'setLogin',
        'name' => 'setName',
        'url' => 'setUrl',
        'avatarUrl' => 'setAvatarUrl',
        'reposUrl' => 'setReposUrl',
        'eventsUrl' => 'setEventsUrl',
        'membersUrl' => 'setMembersUrl',
        'description' => 'setDescription',
        'followCount' => 'setFollowCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'login' => 'getLogin',
        'name' => 'getName',
        'url' => 'getUrl',
        'avatarUrl' => 'getAvatarUrl',
        'reposUrl' => 'getReposUrl',
        'eventsUrl' => 'getEventsUrl',
        'membersUrl' => 'getMembersUrl',
        'description' => 'getDescription',
        'followCount' => 'getFollowCount'
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
        $this->container['login'] = isset($data['login']) ? $data['login'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['avatarUrl'] = isset($data['avatarUrl']) ? $data['avatarUrl'] : null;
        $this->container['reposUrl'] = isset($data['reposUrl']) ? $data['reposUrl'] : null;
        $this->container['eventsUrl'] = isset($data['eventsUrl']) ? $data['eventsUrl'] : null;
        $this->container['membersUrl'] = isset($data['membersUrl']) ? $data['membersUrl'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['followCount'] = isset($data['followCount']) ? $data['followCount'] : null;
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
     * Gets login
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->container['login'];
    }

    /**
     * Sets login
     *
     * @param string $login login
     *
     * @return $this
     */
    public function setLogin($login)
    {
        $this->container['login'] = $login;

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
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url url
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets avatarUrl
     *
     * @return string
     */
    public function getAvatarUrl()
    {
        return $this->container['avatarUrl'];
    }

    /**
     * Sets avatarUrl
     *
     * @param string $avatarUrl avatarUrl
     *
     * @return $this
     */
    public function setAvatarUrl($avatarUrl)
    {
        $this->container['avatarUrl'] = $avatarUrl;

        return $this;
    }

    /**
     * Gets reposUrl
     *
     * @return string
     */
    public function getReposUrl()
    {
        return $this->container['reposUrl'];
    }

    /**
     * Sets reposUrl
     *
     * @param string $reposUrl reposUrl
     *
     * @return $this
     */
    public function setReposUrl($reposUrl)
    {
        $this->container['reposUrl'] = $reposUrl;

        return $this;
    }

    /**
     * Gets eventsUrl
     *
     * @return string
     */
    public function getEventsUrl()
    {
        return $this->container['eventsUrl'];
    }

    /**
     * Sets eventsUrl
     *
     * @param string $eventsUrl eventsUrl
     *
     * @return $this
     */
    public function setEventsUrl($eventsUrl)
    {
        $this->container['eventsUrl'] = $eventsUrl;

        return $this;
    }

    /**
     * Gets membersUrl
     *
     * @return string
     */
    public function getMembersUrl()
    {
        return $this->container['membersUrl'];
    }

    /**
     * Sets membersUrl
     *
     * @param string $membersUrl membersUrl
     *
     * @return $this
     */
    public function setMembersUrl($membersUrl)
    {
        $this->container['membersUrl'] = $membersUrl;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets followCount
     *
     * @return string
     */
    public function getFollowCount()
    {
        return $this->container['followCount'];
    }

    /**
     * Sets followCount
     *
     * @param string $followCount followCount
     *
     * @return $this
     */
    public function setFollowCount($followCount)
    {
        $this->container['followCount'] = $followCount;

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


