<?php
/**
 * PullRequest
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
 * PullRequest Class Doc Comment
 *
 * @category Class
 * @description 企业 Pull Request 列表
 * @package  Gitee
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PullRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PullRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'url' => 'string',
        'htmlUrl' => 'string',
        'diffUrl' => 'string',
        'patchUrl' => 'string',
        'issueUrl' => 'string',
        'commitsUrl' => 'string',
        'reviewCommentsUrl' => 'string',
        'reviewCommentUrl' => 'string',
        'commentsUrl' => 'string',
        'number' => 'string',
        'state' => 'string',
        'assigneesNumber' => 'string',
        'testersNumber' => 'string',
        'assignees' => 'string[]',
        'testers' => 'string[]',
        'apiReviewersNumber' => 'string',
        'apiReviewers' => 'string[]',
        'milestone' => '\Gitee\Model\Milestone',
        'labels' => '\Gitee\Model\Label',
        'locked' => 'string',
        'createdAt' => 'string',
        'updatedAt' => 'string',
        'closedAt' => 'string',
        'draft' => 'string',
        'mergedAt' => 'string',
        'mergeable' => 'string',
        'canMergeCheck' => 'string',
        'links' => 'string',
        'user' => 'string',
        'refPullRequests' => '\Gitee\Model\RefPullRequest[]',
        'title' => 'string',
        'body' => 'string',
        'bodyHtml' => 'string',
        'head' => 'string',
        'base' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'url' => null,
        'htmlUrl' => null,
        'diffUrl' => null,
        'patchUrl' => null,
        'issueUrl' => null,
        'commitsUrl' => null,
        'reviewCommentsUrl' => null,
        'reviewCommentUrl' => null,
        'commentsUrl' => null,
        'number' => null,
        'state' => null,
        'assigneesNumber' => null,
        'testersNumber' => null,
        'assignees' => null,
        'testers' => null,
        'apiReviewersNumber' => null,
        'apiReviewers' => null,
        'milestone' => null,
        'labels' => null,
        'locked' => null,
        'createdAt' => null,
        'updatedAt' => null,
        'closedAt' => null,
        'draft' => null,
        'mergedAt' => null,
        'mergeable' => null,
        'canMergeCheck' => null,
        'links' => null,
        'user' => null,
        'refPullRequests' => null,
        'title' => null,
        'body' => null,
        'bodyHtml' => null,
        'head' => null,
        'base' => null
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
        'url' => 'url',
        'htmlUrl' => 'html_url',
        'diffUrl' => 'diff_url',
        'patchUrl' => 'patch_url',
        'issueUrl' => 'issue_url',
        'commitsUrl' => 'commits_url',
        'reviewCommentsUrl' => 'review_comments_url',
        'reviewCommentUrl' => 'review_comment_url',
        'commentsUrl' => 'comments_url',
        'number' => 'number',
        'state' => 'state',
        'assigneesNumber' => 'assignees_number',
        'testersNumber' => 'testers_number',
        'assignees' => 'assignees',
        'testers' => 'testers',
        'apiReviewersNumber' => 'api_reviewers_number',
        'apiReviewers' => 'api_reviewers',
        'milestone' => 'milestone',
        'labels' => 'labels',
        'locked' => 'locked',
        'createdAt' => 'created_at',
        'updatedAt' => 'updated_at',
        'closedAt' => 'closed_at',
        'draft' => 'draft',
        'mergedAt' => 'merged_at',
        'mergeable' => 'mergeable',
        'canMergeCheck' => 'can_merge_check',
        'links' => '_links',
        'user' => 'user',
        'refPullRequests' => 'ref_pull_requests',
        'title' => 'title',
        'body' => 'body',
        'bodyHtml' => 'body_html',
        'head' => 'head',
        'base' => 'base'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'url' => 'setUrl',
        'htmlUrl' => 'setHtmlUrl',
        'diffUrl' => 'setDiffUrl',
        'patchUrl' => 'setPatchUrl',
        'issueUrl' => 'setIssueUrl',
        'commitsUrl' => 'setCommitsUrl',
        'reviewCommentsUrl' => 'setReviewCommentsUrl',
        'reviewCommentUrl' => 'setReviewCommentUrl',
        'commentsUrl' => 'setCommentsUrl',
        'number' => 'setNumber',
        'state' => 'setState',
        'assigneesNumber' => 'setAssigneesNumber',
        'testersNumber' => 'setTestersNumber',
        'assignees' => 'setAssignees',
        'testers' => 'setTesters',
        'apiReviewersNumber' => 'setApiReviewersNumber',
        'apiReviewers' => 'setApiReviewers',
        'milestone' => 'setMilestone',
        'labels' => 'setLabels',
        'locked' => 'setLocked',
        'createdAt' => 'setCreatedAt',
        'updatedAt' => 'setUpdatedAt',
        'closedAt' => 'setClosedAt',
        'draft' => 'setDraft',
        'mergedAt' => 'setMergedAt',
        'mergeable' => 'setMergeable',
        'canMergeCheck' => 'setCanMergeCheck',
        'links' => 'setLinks',
        'user' => 'setUser',
        'refPullRequests' => 'setRefPullRequests',
        'title' => 'setTitle',
        'body' => 'setBody',
        'bodyHtml' => 'setBodyHtml',
        'head' => 'setHead',
        'base' => 'setBase'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'url' => 'getUrl',
        'htmlUrl' => 'getHtmlUrl',
        'diffUrl' => 'getDiffUrl',
        'patchUrl' => 'getPatchUrl',
        'issueUrl' => 'getIssueUrl',
        'commitsUrl' => 'getCommitsUrl',
        'reviewCommentsUrl' => 'getReviewCommentsUrl',
        'reviewCommentUrl' => 'getReviewCommentUrl',
        'commentsUrl' => 'getCommentsUrl',
        'number' => 'getNumber',
        'state' => 'getState',
        'assigneesNumber' => 'getAssigneesNumber',
        'testersNumber' => 'getTestersNumber',
        'assignees' => 'getAssignees',
        'testers' => 'getTesters',
        'apiReviewersNumber' => 'getApiReviewersNumber',
        'apiReviewers' => 'getApiReviewers',
        'milestone' => 'getMilestone',
        'labels' => 'getLabels',
        'locked' => 'getLocked',
        'createdAt' => 'getCreatedAt',
        'updatedAt' => 'getUpdatedAt',
        'closedAt' => 'getClosedAt',
        'draft' => 'getDraft',
        'mergedAt' => 'getMergedAt',
        'mergeable' => 'getMergeable',
        'canMergeCheck' => 'getCanMergeCheck',
        'links' => 'getLinks',
        'user' => 'getUser',
        'refPullRequests' => 'getRefPullRequests',
        'title' => 'getTitle',
        'body' => 'getBody',
        'bodyHtml' => 'getBodyHtml',
        'head' => 'getHead',
        'base' => 'getBase'
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
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['htmlUrl'] = isset($data['htmlUrl']) ? $data['htmlUrl'] : null;
        $this->container['diffUrl'] = isset($data['diffUrl']) ? $data['diffUrl'] : null;
        $this->container['patchUrl'] = isset($data['patchUrl']) ? $data['patchUrl'] : null;
        $this->container['issueUrl'] = isset($data['issueUrl']) ? $data['issueUrl'] : null;
        $this->container['commitsUrl'] = isset($data['commitsUrl']) ? $data['commitsUrl'] : null;
        $this->container['reviewCommentsUrl'] = isset($data['reviewCommentsUrl']) ? $data['reviewCommentsUrl'] : null;
        $this->container['reviewCommentUrl'] = isset($data['reviewCommentUrl']) ? $data['reviewCommentUrl'] : null;
        $this->container['commentsUrl'] = isset($data['commentsUrl']) ? $data['commentsUrl'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['assigneesNumber'] = isset($data['assigneesNumber']) ? $data['assigneesNumber'] : null;
        $this->container['testersNumber'] = isset($data['testersNumber']) ? $data['testersNumber'] : null;
        $this->container['assignees'] = isset($data['assignees']) ? $data['assignees'] : null;
        $this->container['testers'] = isset($data['testers']) ? $data['testers'] : null;
        $this->container['apiReviewersNumber'] = isset($data['apiReviewersNumber']) ? $data['apiReviewersNumber'] : null;
        $this->container['apiReviewers'] = isset($data['apiReviewers']) ? $data['apiReviewers'] : null;
        $this->container['milestone'] = isset($data['milestone']) ? $data['milestone'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['locked'] = isset($data['locked']) ? $data['locked'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['closedAt'] = isset($data['closedAt']) ? $data['closedAt'] : null;
        $this->container['draft'] = isset($data['draft']) ? $data['draft'] : null;
        $this->container['mergedAt'] = isset($data['mergedAt']) ? $data['mergedAt'] : null;
        $this->container['mergeable'] = isset($data['mergeable']) ? $data['mergeable'] : null;
        $this->container['canMergeCheck'] = isset($data['canMergeCheck']) ? $data['canMergeCheck'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['refPullRequests'] = isset($data['refPullRequests']) ? $data['refPullRequests'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
        $this->container['bodyHtml'] = isset($data['bodyHtml']) ? $data['bodyHtml'] : null;
        $this->container['head'] = isset($data['head']) ? $data['head'] : null;
        $this->container['base'] = isset($data['base']) ? $data['base'] : null;
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
     * Gets diffUrl
     *
     * @return string
     */
    public function getDiffUrl()
    {
        return $this->container['diffUrl'];
    }

    /**
     * Sets diffUrl
     *
     * @param string $diffUrl diffUrl
     *
     * @return $this
     */
    public function setDiffUrl($diffUrl)
    {
        $this->container['diffUrl'] = $diffUrl;

        return $this;
    }

    /**
     * Gets patchUrl
     *
     * @return string
     */
    public function getPatchUrl()
    {
        return $this->container['patchUrl'];
    }

    /**
     * Sets patchUrl
     *
     * @param string $patchUrl patchUrl
     *
     * @return $this
     */
    public function setPatchUrl($patchUrl)
    {
        $this->container['patchUrl'] = $patchUrl;

        return $this;
    }

    /**
     * Gets issueUrl
     *
     * @return string
     */
    public function getIssueUrl()
    {
        return $this->container['issueUrl'];
    }

    /**
     * Sets issueUrl
     *
     * @param string $issueUrl issueUrl
     *
     * @return $this
     */
    public function setIssueUrl($issueUrl)
    {
        $this->container['issueUrl'] = $issueUrl;

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
     * Gets reviewCommentsUrl
     *
     * @return string
     */
    public function getReviewCommentsUrl()
    {
        return $this->container['reviewCommentsUrl'];
    }

    /**
     * Sets reviewCommentsUrl
     *
     * @param string $reviewCommentsUrl reviewCommentsUrl
     *
     * @return $this
     */
    public function setReviewCommentsUrl($reviewCommentsUrl)
    {
        $this->container['reviewCommentsUrl'] = $reviewCommentsUrl;

        return $this;
    }

    /**
     * Gets reviewCommentUrl
     *
     * @return string
     */
    public function getReviewCommentUrl()
    {
        return $this->container['reviewCommentUrl'];
    }

    /**
     * Sets reviewCommentUrl
     *
     * @param string $reviewCommentUrl reviewCommentUrl
     *
     * @return $this
     */
    public function setReviewCommentUrl($reviewCommentUrl)
    {
        $this->container['reviewCommentUrl'] = $reviewCommentUrl;

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
     * Gets number
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param string $number number
     *
     * @return $this
     */
    public function setNumber($number)
    {
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state state
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets assigneesNumber
     *
     * @return string
     */
    public function getAssigneesNumber()
    {
        return $this->container['assigneesNumber'];
    }

    /**
     * Sets assigneesNumber
     *
     * @param string $assigneesNumber assigneesNumber
     *
     * @return $this
     */
    public function setAssigneesNumber($assigneesNumber)
    {
        $this->container['assigneesNumber'] = $assigneesNumber;

        return $this;
    }

    /**
     * Gets testersNumber
     *
     * @return string
     */
    public function getTestersNumber()
    {
        return $this->container['testersNumber'];
    }

    /**
     * Sets testersNumber
     *
     * @param string $testersNumber testersNumber
     *
     * @return $this
     */
    public function setTestersNumber($testersNumber)
    {
        $this->container['testersNumber'] = $testersNumber;

        return $this;
    }

    /**
     * Gets assignees
     *
     * @return string[]
     */
    public function getAssignees()
    {
        return $this->container['assignees'];
    }

    /**
     * Sets assignees
     *
     * @param string[] $assignees assignees
     *
     * @return $this
     */
    public function setAssignees($assignees)
    {
        $this->container['assignees'] = $assignees;

        return $this;
    }

    /**
     * Gets testers
     *
     * @return string[]
     */
    public function getTesters()
    {
        return $this->container['testers'];
    }

    /**
     * Sets testers
     *
     * @param string[] $testers testers
     *
     * @return $this
     */
    public function setTesters($testers)
    {
        $this->container['testers'] = $testers;

        return $this;
    }

    /**
     * Gets apiReviewersNumber
     *
     * @return string
     */
    public function getApiReviewersNumber()
    {
        return $this->container['apiReviewersNumber'];
    }

    /**
     * Sets apiReviewersNumber
     *
     * @param string $apiReviewersNumber apiReviewersNumber
     *
     * @return $this
     */
    public function setApiReviewersNumber($apiReviewersNumber)
    {
        $this->container['apiReviewersNumber'] = $apiReviewersNumber;

        return $this;
    }

    /**
     * Gets apiReviewers
     *
     * @return string[]
     */
    public function getApiReviewers()
    {
        return $this->container['apiReviewers'];
    }

    /**
     * Sets apiReviewers
     *
     * @param string[] $apiReviewers apiReviewers
     *
     * @return $this
     */
    public function setApiReviewers($apiReviewers)
    {
        $this->container['apiReviewers'] = $apiReviewers;

        return $this;
    }

    /**
     * Gets milestone
     *
     * @return \Gitee\Model\Milestone
     */
    public function getMilestone()
    {
        return $this->container['milestone'];
    }

    /**
     * Sets milestone
     *
     * @param \Gitee\Model\Milestone $milestone milestone
     *
     * @return $this
     */
    public function setMilestone($milestone)
    {
        $this->container['milestone'] = $milestone;

        return $this;
    }

    /**
     * Gets labels
     *
     * @return \Gitee\Model\Label
     */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
     * Sets labels
     *
     * @param \Gitee\Model\Label $labels labels
     *
     * @return $this
     */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;

        return $this;
    }

    /**
     * Gets locked
     *
     * @return string
     */
    public function getLocked()
    {
        return $this->container['locked'];
    }

    /**
     * Sets locked
     *
     * @param string $locked locked
     *
     * @return $this
     */
    public function setLocked($locked)
    {
        $this->container['locked'] = $locked;

        return $this;
    }

    /**
     * Gets createdAt
     *
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
     * Sets createdAt
     *
     * @param string $createdAt createdAt
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
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
     * Sets updatedAt
     *
     * @param string $updatedAt updatedAt
     *
     * @return $this
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;

        return $this;
    }

    /**
     * Gets closedAt
     *
     * @return string
     */
    public function getClosedAt()
    {
        return $this->container['closedAt'];
    }

    /**
     * Sets closedAt
     *
     * @param string $closedAt closedAt
     *
     * @return $this
     */
    public function setClosedAt($closedAt)
    {
        $this->container['closedAt'] = $closedAt;

        return $this;
    }

    /**
     * Gets draft
     *
     * @return string
     */
    public function getDraft()
    {
        return $this->container['draft'];
    }

    /**
     * Sets draft
     *
     * @param string $draft draft
     *
     * @return $this
     */
    public function setDraft($draft)
    {
        $this->container['draft'] = $draft;

        return $this;
    }

    /**
     * Gets mergedAt
     *
     * @return string
     */
    public function getMergedAt()
    {
        return $this->container['mergedAt'];
    }

    /**
     * Sets mergedAt
     *
     * @param string $mergedAt mergedAt
     *
     * @return $this
     */
    public function setMergedAt($mergedAt)
    {
        $this->container['mergedAt'] = $mergedAt;

        return $this;
    }

    /**
     * Gets mergeable
     *
     * @return string
     */
    public function getMergeable()
    {
        return $this->container['mergeable'];
    }

    /**
     * Sets mergeable
     *
     * @param string $mergeable mergeable
     *
     * @return $this
     */
    public function setMergeable($mergeable)
    {
        $this->container['mergeable'] = $mergeable;

        return $this;
    }

    /**
     * Gets canMergeCheck
     *
     * @return string
     */
    public function getCanMergeCheck()
    {
        return $this->container['canMergeCheck'];
    }

    /**
     * Sets canMergeCheck
     *
     * @param string $canMergeCheck canMergeCheck
     *
     * @return $this
     */
    public function setCanMergeCheck($canMergeCheck)
    {
        $this->container['canMergeCheck'] = $canMergeCheck;

        return $this;
    }

    /**
     * Gets links
     *
     * @return string
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     *
     * @param string $links links
     *
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

        return $this;
    }

    /**
     * Gets user
     *
     * @return string
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param string $user user
     *
     * @return $this
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets refPullRequests
     *
     * @return \Gitee\Model\RefPullRequest[]
     */
    public function getRefPullRequests()
    {
        return $this->container['refPullRequests'];
    }

    /**
     * Sets refPullRequests
     *
     * @param \Gitee\Model\RefPullRequest[] $refPullRequests refPullRequests
     *
     * @return $this
     */
    public function setRefPullRequests($refPullRequests)
    {
        $this->container['refPullRequests'] = $refPullRequests;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

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
     * Gets bodyHtml
     *
     * @return string
     */
    public function getBodyHtml()
    {
        return $this->container['bodyHtml'];
    }

    /**
     * Sets bodyHtml
     *
     * @param string $bodyHtml bodyHtml
     *
     * @return $this
     */
    public function setBodyHtml($bodyHtml)
    {
        $this->container['bodyHtml'] = $bodyHtml;

        return $this;
    }

    /**
     * Gets head
     *
     * @return string
     */
    public function getHead()
    {
        return $this->container['head'];
    }

    /**
     * Sets head
     *
     * @param string $head head
     *
     * @return $this
     */
    public function setHead($head)
    {
        $this->container['head'] = $head;

        return $this;
    }

    /**
     * Gets base
     *
     * @return string
     */
    public function getBase()
    {
        return $this->container['base'];
    }

    /**
     * Sets base
     *
     * @param string $base base
     *
     * @return $this
     */
    public function setBase($base)
    {
        $this->container['base'] = $base;

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


