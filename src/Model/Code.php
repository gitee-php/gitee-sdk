<?php
/**
 * Code
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
 * Code Class Doc Comment
 *
 * @category Class
 * @description 获取用户Star的代码片段
 * @package  Gitee
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Code implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Code';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'url' => 'string',
        'forksUrl' => 'string',
        'commitsUrl' => 'string',
        'id' => 'string',
        'description' => 'string',
        'public' => 'bool',
        'owner' => '\Gitee\Model\UserBasic',
        'user' => '\Gitee\Model\UserBasic',
        'files' => 'string',
        'truncated' => 'bool',
        'htmlUrl' => 'string',
        'comments' => 'int',
        'commentsUrl' => 'string',
        'gitPullUrl' => 'string',
        'gitPushUrl' => 'string',
        'createdAt' => '\DateTime',
        'updatedAt' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'url' => null,
        'forksUrl' => null,
        'commitsUrl' => null,
        'id' => null,
        'description' => null,
        'public' => null,
        'owner' => null,
        'user' => null,
        'files' => null,
        'truncated' => null,
        'htmlUrl' => null,
        'comments' => 'int32',
        'commentsUrl' => null,
        'gitPullUrl' => null,
        'gitPushUrl' => null,
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time'
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
        'url' => 'url',
        'forksUrl' => 'forks_url',
        'commitsUrl' => 'commits_url',
        'id' => 'id',
        'description' => 'description',
        'public' => 'public',
        'owner' => 'owner',
        'user' => 'user',
        'files' => 'files',
        'truncated' => 'truncated',
        'htmlUrl' => 'html_url',
        'comments' => 'comments',
        'commentsUrl' => 'comments_url',
        'gitPullUrl' => 'git_pull_url',
        'gitPushUrl' => 'git_push_url',
        'createdAt' => 'created_at',
        'updatedAt' => 'updated_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'url' => 'setUrl',
        'forksUrl' => 'setForksUrl',
        'commitsUrl' => 'setCommitsUrl',
        'id' => 'setId',
        'description' => 'setDescription',
        'public' => 'setPublic',
        'owner' => 'setOwner',
        'user' => 'setUser',
        'files' => 'setFiles',
        'truncated' => 'setTruncated',
        'htmlUrl' => 'setHtmlUrl',
        'comments' => 'setComments',
        'commentsUrl' => 'setCommentsUrl',
        'gitPullUrl' => 'setGitPullUrl',
        'gitPushUrl' => 'setGitPushUrl',
        'createdAt' => 'setCreatedAt',
        'updatedAt' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'url' => 'getUrl',
        'forksUrl' => 'getForksUrl',
        'commitsUrl' => 'getCommitsUrl',
        'id' => 'getId',
        'description' => 'getDescription',
        'public' => 'getPublic',
        'owner' => 'getOwner',
        'user' => 'getUser',
        'files' => 'getFiles',
        'truncated' => 'getTruncated',
        'htmlUrl' => 'getHtmlUrl',
        'comments' => 'getComments',
        'commentsUrl' => 'getCommentsUrl',
        'gitPullUrl' => 'getGitPullUrl',
        'gitPushUrl' => 'getGitPushUrl',
        'createdAt' => 'getCreatedAt',
        'updatedAt' => 'getUpdatedAt'
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
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['forksUrl'] = isset($data['forksUrl']) ? $data['forksUrl'] : null;
        $this->container['commitsUrl'] = isset($data['commitsUrl']) ? $data['commitsUrl'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['public'] = isset($data['public']) ? $data['public'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['files'] = isset($data['files']) ? $data['files'] : null;
        $this->container['truncated'] = isset($data['truncated']) ? $data['truncated'] : null;
        $this->container['htmlUrl'] = isset($data['htmlUrl']) ? $data['htmlUrl'] : null;
        $this->container['comments'] = isset($data['comments']) ? $data['comments'] : null;
        $this->container['commentsUrl'] = isset($data['commentsUrl']) ? $data['commentsUrl'] : null;
        $this->container['gitPullUrl'] = isset($data['gitPullUrl']) ? $data['gitPullUrl'] : null;
        $this->container['gitPushUrl'] = isset($data['gitPushUrl']) ? $data['gitPushUrl'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
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
     * Gets forksUrl
     *
     * @return string
     */
    public function getForksUrl()
    {
        return $this->container['forksUrl'];
    }

    /**
     * Sets forksUrl
     *
     * @param string $forksUrl forksUrl
     *
     * @return $this
     */
    public function setForksUrl($forksUrl)
    {
        $this->container['forksUrl'] = $forksUrl;

        return $this;
    }

    /**
     * Gets commitsUrl
     *
     * @return string
     */
    public function getCommitsUrl()
    {
        return $this->container['commitsUrl'];
    }

    /**
     * Sets commitsUrl
     *
     * @param string $commitsUrl commitsUrl
     *
     * @return $this
     */
    public function setCommitsUrl($commitsUrl)
    {
        $this->container['commitsUrl'] = $commitsUrl;

        return $this;
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
     * Gets public
     *
     * @return bool
     */
    public function getPublic()
    {
        return $this->container['public'];
    }

    /**
     * Sets public
     *
     * @param bool $public public
     *
     * @return $this
     */
    public function setPublic($public)
    {
        $this->container['public'] = $public;

        return $this;
    }

    /**
     * Gets owner
     *
     * @return \Gitee\Model\UserBasic
     */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
     * Sets owner
     *
     * @param \Gitee\Model\UserBasic $owner owner
     *
     * @return $this
     */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;

        return $this;
    }

    /**
     * Gets user
     *
     * @return \Gitee\Model\UserBasic
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param \Gitee\Model\UserBasic $user user
     *
     * @return $this
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

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
     * Gets truncated
     *
     * @return bool
     */
    public function getTruncated()
    {
        return $this->container['truncated'];
    }

    /**
     * Sets truncated
     *
     * @param bool $truncated truncated
     *
     * @return $this
     */
    public function setTruncated($truncated)
    {
        $this->container['truncated'] = $truncated;

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
     * Gets comments
     *
     * @return int
     */
    public function getComments()
    {
        return $this->container['comments'];
    }

    /**
     * Sets comments
     *
     * @param int $comments comments
     *
     * @return $this
     */
    public function setComments($comments)
    {
        $this->container['comments'] = $comments;

        return $this;
    }

    /**
     * Gets commentsUrl
     *
     * @return string
     */
    public function getCommentsUrl()
    {
        return $this->container['commentsUrl'];
    }

    /**
     * Sets commentsUrl
     *
     * @param string $commentsUrl commentsUrl
     *
     * @return $this
     */
    public function setCommentsUrl($commentsUrl)
    {
        $this->container['commentsUrl'] = $commentsUrl;

        return $this;
    }

    /**
     * Gets gitPullUrl
     *
     * @return string
     */
    public function getGitPullUrl()
    {
        return $this->container['gitPullUrl'];
    }

    /**
     * Sets gitPullUrl
     *
     * @param string $gitPullUrl gitPullUrl
     *
     * @return $this
     */
    public function setGitPullUrl($gitPullUrl)
    {
        $this->container['gitPullUrl'] = $gitPullUrl;

        return $this;
    }

    /**
     * Gets gitPushUrl
     *
     * @return string
     */
    public function getGitPushUrl()
    {
        return $this->container['gitPushUrl'];
    }

    /**
     * Sets gitPushUrl
     *
     * @param string $gitPushUrl gitPushUrl
     *
     * @return $this
     */
    public function setGitPushUrl($gitPushUrl)
    {
        $this->container['gitPushUrl'] = $gitPushUrl;

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


