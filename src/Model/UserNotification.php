<?php
/**
 * UserNotification
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
 * OpenAPI spec version: 5.4.85
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.42
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
 * UserNotification Class Doc Comment
 *
 * @category Class
 * @description 获取一条通知
 * @package  Gitee
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UserNotification implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UserNotification';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'content' => 'string',
        'type' => 'string',
        'unread' => 'bool',
        'mute' => 'bool',
        'updatedAt' => '\DateTime',
        'url' => 'string',
        'htmlUrl' => 'string',
        'actor' => '\Gitee\Model\UserBasic',
        'repository' => '\Gitee\Model\ProjectBasic',
        'subject' => '\Gitee\Model\UserNotificationSubject',
        'namespaces' => '\Gitee\Model\UserNotificationNamespace[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'content' => null,
        'type' => null,
        'unread' => null,
        'mute' => null,
        'updatedAt' => 'date-time',
        'url' => null,
        'htmlUrl' => null,
        'actor' => null,
        'repository' => null,
        'subject' => null,
        'namespaces' => null
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
        'content' => 'content',
        'type' => 'type',
        'unread' => 'unread',
        'mute' => 'mute',
        'updatedAt' => 'updated_at',
        'url' => 'url',
        'htmlUrl' => 'html_url',
        'actor' => 'actor',
        'repository' => 'repository',
        'subject' => 'subject',
        'namespaces' => 'namespaces'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'content' => 'setContent',
        'type' => 'setType',
        'unread' => 'setUnread',
        'mute' => 'setMute',
        'updatedAt' => 'setUpdatedAt',
        'url' => 'setUrl',
        'htmlUrl' => 'setHtmlUrl',
        'actor' => 'setActor',
        'repository' => 'setRepository',
        'subject' => 'setSubject',
        'namespaces' => 'setNamespaces'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'content' => 'getContent',
        'type' => 'getType',
        'unread' => 'getUnread',
        'mute' => 'getMute',
        'updatedAt' => 'getUpdatedAt',
        'url' => 'getUrl',
        'htmlUrl' => 'getHtmlUrl',
        'actor' => 'getActor',
        'repository' => 'getRepository',
        'subject' => 'getSubject',
        'namespaces' => 'getNamespaces'
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
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['unread'] = isset($data['unread']) ? $data['unread'] : null;
        $this->container['mute'] = isset($data['mute']) ? $data['mute'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['htmlUrl'] = isset($data['htmlUrl']) ? $data['htmlUrl'] : null;
        $this->container['actor'] = isset($data['actor']) ? $data['actor'] : null;
        $this->container['repository'] = isset($data['repository']) ? $data['repository'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['namespaces'] = isset($data['namespaces']) ? $data['namespaces'] : null;
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
     * Gets content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     *
     * @param string $content content
     *
     * @return $this
     */
    public function setContent($content)
    {
        $this->container['content'] = $content;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets unread
     *
     * @return bool
     */
    public function getUnread()
    {
        return $this->container['unread'];
    }

    /**
     * Sets unread
     *
     * @param bool $unread unread
     *
     * @return $this
     */
    public function setUnread($unread)
    {
        $this->container['unread'] = $unread;

        return $this;
    }

    /**
     * Gets mute
     *
     * @return bool
     */
    public function getMute()
    {
        return $this->container['mute'];
    }

    /**
     * Sets mute
     *
     * @param bool $mute mute
     *
     * @return $this
     */
    public function setMute($mute)
    {
        $this->container['mute'] = $mute;

        return $this;
    }

    /**
     * Gets updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
     * Sets updatedAt
     *
     * @param \DateTime $updatedAt updatedAt
     *
     * @return $this
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;

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
     * Gets htmlUrl
     *
     * @return string
     */
    public function getHtmlUrl()
    {
        return $this->container['htmlUrl'];
    }

    /**
     * Sets htmlUrl
     *
     * @param string $htmlUrl htmlUrl
     *
     * @return $this
     */
    public function setHtmlUrl($htmlUrl)
    {
        $this->container['htmlUrl'] = $htmlUrl;

        return $this;
    }

    /**
     * Gets actor
     *
     * @return \Gitee\Model\UserBasic
     */
    public function getActor()
    {
        return $this->container['actor'];
    }

    /**
     * Sets actor
     *
     * @param \Gitee\Model\UserBasic $actor 通知发送者
     *
     * @return $this
     */
    public function setActor($actor)
    {
        $this->container['actor'] = $actor;

        return $this;
    }

    /**
     * Gets repository
     *
     * @return \Gitee\Model\ProjectBasic
     */
    public function getRepository()
    {
        return $this->container['repository'];
    }

    /**
     * Sets repository
     *
     * @param \Gitee\Model\ProjectBasic $repository repository
     *
     * @return $this
     */
    public function setRepository($repository)
    {
        $this->container['repository'] = $repository;

        return $this;
    }

    /**
     * Gets subject
     *
     * @return \Gitee\Model\UserNotificationSubject
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param \Gitee\Model\UserNotificationSubject $subject 通知直接关联对象
     *
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets namespaces
     *
     * @return \Gitee\Model\UserNotificationNamespace[]
     */
    public function getNamespaces()
    {
        return $this->container['namespaces'];
    }

    /**
     * Sets namespaces
     *
     * @param \Gitee\Model\UserNotificationNamespace[] $namespaces 通知次级关联对象
     *
     * @return $this
     */
    public function setNamespaces($namespaces)
    {
        $this->container['namespaces'] = $namespaces;

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


