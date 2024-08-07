<?php
/**
 * UserAssignee
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
 * UserAssignee Class Doc Comment
 *
 * @category Class
 * @package  Gitee
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UserAssignee implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UserAssignee';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'login' => 'string',
        'name' => 'string',
        'avatarUrl' => 'string',
        'url' => 'string',
        'htmlUrl' => 'string',
        'remark' => 'string',
        'followersUrl' => 'string',
        'followingUrl' => 'string',
        'gistsUrl' => 'string',
        'starredUrl' => 'string',
        'subscriptionsUrl' => 'string',
        'organizationsUrl' => 'string',
        'reposUrl' => 'string',
        'eventsUrl' => 'string',
        'receivedEventsUrl' => 'string',
        'type' => 'string',
        'memberRole' => 'string',
        'assignee' => 'bool',
        'codeOwner' => 'bool',
        'accept' => 'bool'
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
        'avatarUrl' => null,
        'url' => null,
        'htmlUrl' => null,
        'remark' => null,
        'followersUrl' => null,
        'followingUrl' => null,
        'gistsUrl' => null,
        'starredUrl' => null,
        'subscriptionsUrl' => null,
        'organizationsUrl' => null,
        'reposUrl' => null,
        'eventsUrl' => null,
        'receivedEventsUrl' => null,
        'type' => null,
        'memberRole' => null,
        'assignee' => null,
        'codeOwner' => null,
        'accept' => null
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
        'avatarUrl' => 'avatar_url',
        'url' => 'url',
        'htmlUrl' => 'html_url',
        'remark' => 'remark',
        'followersUrl' => 'followers_url',
        'followingUrl' => 'following_url',
        'gistsUrl' => 'gists_url',
        'starredUrl' => 'starred_url',
        'subscriptionsUrl' => 'subscriptions_url',
        'organizationsUrl' => 'organizations_url',
        'reposUrl' => 'repos_url',
        'eventsUrl' => 'events_url',
        'receivedEventsUrl' => 'received_events_url',
        'type' => 'type',
        'memberRole' => 'member_role',
        'assignee' => 'assignee',
        'codeOwner' => 'code_owner',
        'accept' => 'accept'
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
        'avatarUrl' => 'setAvatarUrl',
        'url' => 'setUrl',
        'htmlUrl' => 'setHtmlUrl',
        'remark' => 'setRemark',
        'followersUrl' => 'setFollowersUrl',
        'followingUrl' => 'setFollowingUrl',
        'gistsUrl' => 'setGistsUrl',
        'starredUrl' => 'setStarredUrl',
        'subscriptionsUrl' => 'setSubscriptionsUrl',
        'organizationsUrl' => 'setOrganizationsUrl',
        'reposUrl' => 'setReposUrl',
        'eventsUrl' => 'setEventsUrl',
        'receivedEventsUrl' => 'setReceivedEventsUrl',
        'type' => 'setType',
        'memberRole' => 'setMemberRole',
        'assignee' => 'setAssignee',
        'codeOwner' => 'setCodeOwner',
        'accept' => 'setAccept'
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
        'avatarUrl' => 'getAvatarUrl',
        'url' => 'getUrl',
        'htmlUrl' => 'getHtmlUrl',
        'remark' => 'getRemark',
        'followersUrl' => 'getFollowersUrl',
        'followingUrl' => 'getFollowingUrl',
        'gistsUrl' => 'getGistsUrl',
        'starredUrl' => 'getStarredUrl',
        'subscriptionsUrl' => 'getSubscriptionsUrl',
        'organizationsUrl' => 'getOrganizationsUrl',
        'reposUrl' => 'getReposUrl',
        'eventsUrl' => 'getEventsUrl',
        'receivedEventsUrl' => 'getReceivedEventsUrl',
        'type' => 'getType',
        'memberRole' => 'getMemberRole',
        'assignee' => 'getAssignee',
        'codeOwner' => 'getCodeOwner',
        'accept' => 'getAccept'
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
        $this->container['avatarUrl'] = isset($data['avatarUrl']) ? $data['avatarUrl'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['htmlUrl'] = isset($data['htmlUrl']) ? $data['htmlUrl'] : null;
        $this->container['remark'] = isset($data['remark']) ? $data['remark'] : null;
        $this->container['followersUrl'] = isset($data['followersUrl']) ? $data['followersUrl'] : null;
        $this->container['followingUrl'] = isset($data['followingUrl']) ? $data['followingUrl'] : null;
        $this->container['gistsUrl'] = isset($data['gistsUrl']) ? $data['gistsUrl'] : null;
        $this->container['starredUrl'] = isset($data['starredUrl']) ? $data['starredUrl'] : null;
        $this->container['subscriptionsUrl'] = isset($data['subscriptionsUrl']) ? $data['subscriptionsUrl'] : null;
        $this->container['organizationsUrl'] = isset($data['organizationsUrl']) ? $data['organizationsUrl'] : null;
        $this->container['reposUrl'] = isset($data['reposUrl']) ? $data['reposUrl'] : null;
        $this->container['eventsUrl'] = isset($data['eventsUrl']) ? $data['eventsUrl'] : null;
        $this->container['receivedEventsUrl'] = isset($data['receivedEventsUrl']) ? $data['receivedEventsUrl'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['memberRole'] = isset($data['memberRole']) ? $data['memberRole'] : null;
        $this->container['assignee'] = isset($data['assignee']) ? $data['assignee'] : null;
        $this->container['codeOwner'] = isset($data['codeOwner']) ? $data['codeOwner'] : null;
        $this->container['accept'] = isset($data['accept']) ? $data['accept'] : null;
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
     * Gets remark
     *
     * @return string
     */
    public function getRemark()
    {
        return $this->container['remark'];
    }

    /**
     * Sets remark
     *
     * @param string $remark 企业备注名
     *
     * @return $this
     */
    public function setRemark($remark)
    {
        $this->container['remark'] = $remark;

        return $this;
    }

    /**
     * Gets followersUrl
     *
     * @return string
     */
    public function getFollowersUrl()
    {
        return $this->container['followersUrl'];
    }

    /**
     * Sets followersUrl
     *
     * @param string $followersUrl followersUrl
     *
     * @return $this
     */
    public function setFollowersUrl($followersUrl)
    {
        $this->container['followersUrl'] = $followersUrl;

        return $this;
    }

    /**
     * Gets followingUrl
     *
     * @return string
     */
    public function getFollowingUrl()
    {
        return $this->container['followingUrl'];
    }

    /**
     * Sets followingUrl
     *
     * @param string $followingUrl followingUrl
     *
     * @return $this
     */
    public function setFollowingUrl($followingUrl)
    {
        $this->container['followingUrl'] = $followingUrl;

        return $this;
    }

    /**
     * Gets gistsUrl
     *
     * @return string
     */
    public function getGistsUrl()
    {
        return $this->container['gistsUrl'];
    }

    /**
     * Sets gistsUrl
     *
     * @param string $gistsUrl gistsUrl
     *
     * @return $this
     */
    public function setGistsUrl($gistsUrl)
    {
        $this->container['gistsUrl'] = $gistsUrl;

        return $this;
    }

    /**
     * Gets starredUrl
     *
     * @return string
     */
    public function getStarredUrl()
    {
        return $this->container['starredUrl'];
    }

    /**
     * Sets starredUrl
     *
     * @param string $starredUrl starredUrl
     *
     * @return $this
     */
    public function setStarredUrl($starredUrl)
    {
        $this->container['starredUrl'] = $starredUrl;

        return $this;
    }

    /**
     * Gets subscriptionsUrl
     *
     * @return string
     */
    public function getSubscriptionsUrl()
    {
        return $this->container['subscriptionsUrl'];
    }

    /**
     * Sets subscriptionsUrl
     *
     * @param string $subscriptionsUrl subscriptionsUrl
     *
     * @return $this
     */
    public function setSubscriptionsUrl($subscriptionsUrl)
    {
        $this->container['subscriptionsUrl'] = $subscriptionsUrl;

        return $this;
    }

    /**
     * Gets organizationsUrl
     *
     * @return string
     */
    public function getOrganizationsUrl()
    {
        return $this->container['organizationsUrl'];
    }

    /**
     * Sets organizationsUrl
     *
     * @param string $organizationsUrl organizationsUrl
     *
     * @return $this
     */
    public function setOrganizationsUrl($organizationsUrl)
    {
        $this->container['organizationsUrl'] = $organizationsUrl;

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
     * Gets receivedEventsUrl
     *
     * @return string
     */
    public function getReceivedEventsUrl()
    {
        return $this->container['receivedEventsUrl'];
    }

    /**
     * Sets receivedEventsUrl
     *
     * @param string $receivedEventsUrl receivedEventsUrl
     *
     * @return $this
     */
    public function setReceivedEventsUrl($receivedEventsUrl)
    {
        $this->container['receivedEventsUrl'] = $receivedEventsUrl;

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
     * Gets memberRole
     *
     * @return string
     */
    public function getMemberRole()
    {
        return $this->container['memberRole'];
    }

    /**
     * Sets memberRole
     *
     * @param string $memberRole memberRole
     *
     * @return $this
     */
    public function setMemberRole($memberRole)
    {
        $this->container['memberRole'] = $memberRole;

        return $this;
    }

    /**
     * Gets assignee
     *
     * @return bool
     */
    public function getAssignee()
    {
        return $this->container['assignee'];
    }

    /**
     * Sets assignee
     *
     * @param bool $assignee 是否默认指派审查
     *
     * @return $this
     */
    public function setAssignee($assignee)
    {
        $this->container['assignee'] = $assignee;

        return $this;
    }

    /**
     * Gets codeOwner
     *
     * @return bool
     */
    public function getCodeOwner()
    {
        return $this->container['codeOwner'];
    }

    /**
     * Sets codeOwner
     *
     * @param bool $codeOwner 是否CodeOwner指派审查
     *
     * @return $this
     */
    public function setCodeOwner($codeOwner)
    {
        $this->container['codeOwner'] = $codeOwner;

        return $this;
    }

    /**
     * Gets accept
     *
     * @return bool
     */
    public function getAccept()
    {
        return $this->container['accept'];
    }

    /**
     * Sets accept
     *
     * @param bool $accept 是否审查通过
     *
     * @return $this
     */
    public function setAccept($accept)
    {
        $this->container['accept'] = $accept;

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


