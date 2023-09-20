<?php
/**
 * ProjectBasic
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
 * ProjectBasic Class Doc Comment
 *
 * @category Class
 * @package  Gitee
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProjectBasic implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProjectBasic';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'fullName' => 'string',
        'humanName' => 'string',
        'url' => 'string',
        'namespace' => '\Gitee\Model\NamespaceMini',
        'path' => 'string',
        'name' => 'string',
        'owner' => '\Gitee\Model\UserBasic',
        'assigner' => '\Gitee\Model\UserBasic',
        'description' => 'string',
        'private' => 'bool',
        'public' => 'bool',
        'internal' => 'string',
        'fork' => 'bool',
        'htmlUrl' => 'string',
        'sshUrl' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'fullName' => null,
        'humanName' => null,
        'url' => null,
        'namespace' => null,
        'path' => null,
        'name' => null,
        'owner' => null,
        'assigner' => null,
        'description' => null,
        'private' => null,
        'public' => null,
        'internal' => null,
        'fork' => null,
        'htmlUrl' => null,
        'sshUrl' => null
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
        'fullName' => 'full_name',
        'humanName' => 'human_name',
        'url' => 'url',
        'namespace' => 'namespace',
        'path' => 'path',
        'name' => 'name',
        'owner' => 'owner',
        'assigner' => 'assigner',
        'description' => 'description',
        'private' => 'private',
        'public' => 'public',
        'internal' => 'internal',
        'fork' => 'fork',
        'htmlUrl' => 'html_url',
        'sshUrl' => 'ssh_url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'fullName' => 'setFullName',
        'humanName' => 'setHumanName',
        'url' => 'setUrl',
        'namespace' => 'setNamespace',
        'path' => 'setPath',
        'name' => 'setName',
        'owner' => 'setOwner',
        'assigner' => 'setAssigner',
        'description' => 'setDescription',
        'private' => 'setPrivate',
        'public' => 'setPublic',
        'internal' => 'setInternal',
        'fork' => 'setFork',
        'htmlUrl' => 'setHtmlUrl',
        'sshUrl' => 'setSshUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'fullName' => 'getFullName',
        'humanName' => 'getHumanName',
        'url' => 'getUrl',
        'namespace' => 'getNamespace',
        'path' => 'getPath',
        'name' => 'getName',
        'owner' => 'getOwner',
        'assigner' => 'getAssigner',
        'description' => 'getDescription',
        'private' => 'getPrivate',
        'public' => 'getPublic',
        'internal' => 'getInternal',
        'fork' => 'getFork',
        'htmlUrl' => 'getHtmlUrl',
        'sshUrl' => 'getSshUrl'
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
        $this->container['fullName'] = isset($data['fullName']) ? $data['fullName'] : null;
        $this->container['humanName'] = isset($data['humanName']) ? $data['humanName'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['assigner'] = isset($data['assigner']) ? $data['assigner'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['private'] = isset($data['private']) ? $data['private'] : null;
        $this->container['public'] = isset($data['public']) ? $data['public'] : null;
        $this->container['internal'] = isset($data['internal']) ? $data['internal'] : null;
        $this->container['fork'] = isset($data['fork']) ? $data['fork'] : null;
        $this->container['htmlUrl'] = isset($data['htmlUrl']) ? $data['htmlUrl'] : null;
        $this->container['sshUrl'] = isset($data['sshUrl']) ? $data['sshUrl'] : null;
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
     * Gets fullName
     *
     * @return string
     */
    public function getFullName()
    {
        return $this->container['fullName'];
    }

    /**
     * Sets fullName
     *
     * @param string $fullName fullName
     *
     * @return $this
     */
    public function setFullName($fullName)
    {
        $this->container['fullName'] = $fullName;

        return $this;
    }

    /**
     * Gets humanName
     *
     * @return string
     */
    public function getHumanName()
    {
        return $this->container['humanName'];
    }

    /**
     * Sets humanName
     *
     * @param string $humanName humanName
     *
     * @return $this
     */
    public function setHumanName($humanName)
    {
        $this->container['humanName'] = $humanName;

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
     * Gets namespace
     *
     * @return \Gitee\Model\NamespaceMini
     */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
     * Sets namespace
     *
     * @param \Gitee\Model\NamespaceMini $namespace namespace
     *
     * @return $this
     */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;

        return $this;
    }

    /**
     * Gets path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
     * Sets path
     *
     * @param string $path 仓库路径
     *
     * @return $this
     */
    public function setPath($path)
    {
        $this->container['path'] = $path;

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
     * @param string $name 仓库名称
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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
     * @param \Gitee\Model\UserBasic $owner 仓库拥有者
     *
     * @return $this
     */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;

        return $this;
    }

    /**
     * Gets assigner
     *
     * @return \Gitee\Model\UserBasic
     */
    public function getAssigner()
    {
        return $this->container['assigner'];
    }

    /**
     * Sets assigner
     *
     * @param \Gitee\Model\UserBasic $assigner 仓库负责人
     *
     * @return $this
     */
    public function setAssigner($assigner)
    {
        $this->container['assigner'] = $assigner;

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
     * @param string $description 仓库描述
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets private
     *
     * @return bool
     */
    public function getPrivate()
    {
        return $this->container['private'];
    }

    /**
     * Sets private
     *
     * @param bool $private 是否私有
     *
     * @return $this
     */
    public function setPrivate($private)
    {
        $this->container['private'] = $private;

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
     * @param bool $public 是否公开
     *
     * @return $this
     */
    public function setPublic($public)
    {
        $this->container['public'] = $public;

        return $this;
    }

    /**
     * Gets internal
     *
     * @return string
     */
    public function getInternal()
    {
        return $this->container['internal'];
    }

    /**
     * Sets internal
     *
     * @param string $internal 是否内部开源
     *
     * @return $this
     */
    public function setInternal($internal)
    {
        $this->container['internal'] = $internal;

        return $this;
    }

    /**
     * Gets fork
     *
     * @return bool
     */
    public function getFork()
    {
        return $this->container['fork'];
    }

    /**
     * Sets fork
     *
     * @param bool $fork 是否是fork仓库
     *
     * @return $this
     */
    public function setFork($fork)
    {
        $this->container['fork'] = $fork;

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
     * Gets sshUrl
     *
     * @return string
     */
    public function getSshUrl()
    {
        return $this->container['sshUrl'];
    }

    /**
     * Sets sshUrl
     *
     * @param string $sshUrl sshUrl
     *
     * @return $this
     */
    public function setSshUrl($sshUrl)
    {
        $this->container['sshUrl'] = $sshUrl;

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


