<?php
/**
 * RepoCommitWithFiles
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
 * RepoCommitWithFiles Class Doc Comment
 *
 * @category Class
 * @description 仓库的某个提交
 * @package  Gitee
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RepoCommitWithFiles implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RepoCommitWithFiles';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'url' => 'string',
        'sha' => 'string',
        'htmlUrl' => 'string',
        'commentsUrl' => 'string',
        'commit' => 'string',
        'author' => '\Gitee\Model\UserBasic',
        'committer' => '\Gitee\Model\UserBasic',
        'parents' => 'string[]',
        'stats' => 'string',
        'files' => '\Gitee\Model\DiffFile[]',
        'truncated' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'url' => null,
        'sha' => null,
        'htmlUrl' => null,
        'commentsUrl' => null,
        'commit' => null,
        'author' => null,
        'committer' => null,
        'parents' => null,
        'stats' => null,
        'files' => null,
        'truncated' => null
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
        'sha' => 'sha',
        'htmlUrl' => 'html_url',
        'commentsUrl' => 'comments_url',
        'commit' => 'commit',
        'author' => 'author',
        'committer' => 'committer',
        'parents' => 'parents',
        'stats' => 'stats',
        'files' => 'files',
        'truncated' => 'truncated'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'url' => 'setUrl',
        'sha' => 'setSha',
        'htmlUrl' => 'setHtmlUrl',
        'commentsUrl' => 'setCommentsUrl',
        'commit' => 'setCommit',
        'author' => 'setAuthor',
        'committer' => 'setCommitter',
        'parents' => 'setParents',
        'stats' => 'setStats',
        'files' => 'setFiles',
        'truncated' => 'setTruncated'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'url' => 'getUrl',
        'sha' => 'getSha',
        'htmlUrl' => 'getHtmlUrl',
        'commentsUrl' => 'getCommentsUrl',
        'commit' => 'getCommit',
        'author' => 'getAuthor',
        'committer' => 'getCommitter',
        'parents' => 'getParents',
        'stats' => 'getStats',
        'files' => 'getFiles',
        'truncated' => 'getTruncated'
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
        $this->container['sha'] = isset($data['sha']) ? $data['sha'] : null;
        $this->container['htmlUrl'] = isset($data['htmlUrl']) ? $data['htmlUrl'] : null;
        $this->container['commentsUrl'] = isset($data['commentsUrl']) ? $data['commentsUrl'] : null;
        $this->container['commit'] = isset($data['commit']) ? $data['commit'] : null;
        $this->container['author'] = isset($data['author']) ? $data['author'] : null;
        $this->container['committer'] = isset($data['committer']) ? $data['committer'] : null;
        $this->container['parents'] = isset($data['parents']) ? $data['parents'] : null;
        $this->container['stats'] = isset($data['stats']) ? $data['stats'] : null;
        $this->container['files'] = isset($data['files']) ? $data['files'] : null;
        $this->container['truncated'] = isset($data['truncated']) ? $data['truncated'] : null;
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
     * Gets commit
     *
     * @return string
     */
    public function getCommit()
    {
        return $this->container['commit'];
    }

    /**
     * Sets commit
     *
     * @param string $commit commit
     *
     * @return $this
     */
    public function setCommit($commit)
    {
        $this->container['commit'] = $commit;

        return $this;
    }

    /**
     * Gets author
     *
     * @return \Gitee\Model\UserBasic
     */
    public function getAuthor()
    {
        return $this->container['author'];
    }

    /**
     * Sets author
     *
     * @param \Gitee\Model\UserBasic $author author
     *
     * @return $this
     */
    public function setAuthor($author)
    {
        $this->container['author'] = $author;

        return $this;
    }

    /**
     * Gets committer
     *
     * @return \Gitee\Model\UserBasic
     */
    public function getCommitter()
    {
        return $this->container['committer'];
    }

    /**
     * Sets committer
     *
     * @param \Gitee\Model\UserBasic $committer committer
     *
     * @return $this
     */
    public function setCommitter($committer)
    {
        $this->container['committer'] = $committer;

        return $this;
    }

    /**
     * Gets parents
     *
     * @return string[]
     */
    public function getParents()
    {
        return $this->container['parents'];
    }

    /**
     * Sets parents
     *
     * @param string[] $parents parents
     *
     * @return $this
     */
    public function setParents($parents)
    {
        $this->container['parents'] = $parents;

        return $this;
    }

    /**
     * Gets stats
     *
     * @return string
     */
    public function getStats()
    {
        return $this->container['stats'];
    }

    /**
     * Sets stats
     *
     * @param string $stats stats
     *
     * @return $this
     */
    public function setStats($stats)
    {
        $this->container['stats'] = $stats;

        return $this;
    }

    /**
     * Gets files
     *
     * @return \Gitee\Model\DiffFile[]
     */
    public function getFiles()
    {
        return $this->container['files'];
    }

    /**
     * Sets files
     *
     * @param \Gitee\Model\DiffFile[] $files 文件列表
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
     * @param bool $truncated 文件列表是否被截断
     *
     * @return $this
     */
    public function setTruncated($truncated)
    {
        $this->container['truncated'] = $truncated;

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


