# PullRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**url** | **string** |  | [optional] 
**htmlUrl** | **string** |  | [optional] 
**diffUrl** | **string** |  | [optional] 
**patchUrl** | **string** |  | [optional] 
**issueUrl** | **string** |  | [optional] 
**commitsUrl** | **string** |  | [optional] 
**reviewCommentsUrl** | **string** |  | [optional] 
**reviewCommentUrl** | **string** |  | [optional] 
**commentsUrl** | **string** |  | [optional] 
**number** | **int** |  | [optional] 
**closeRelatedIssue** | **int** |  | [optional] 
**pruneBranch** | **bool** |  | [optional] 
**state** | **string** |  | [optional] 
**assigneesNumber** | **int** |  | [optional] 
**testersNumber** | **int** |  | [optional] 
**assignees** | [**\Gitee\Model\UserAssignee[]**](UserAssignee.md) |  | [optional] 
**testers** | [**\Gitee\Model\UserAssignee[]**](UserAssignee.md) |  | [optional] 
**apiReviewersNumber** | **int** |  | [optional] 
**apiReviewers** | [**\Gitee\Model\UserAssignee[]**](UserAssignee.md) |  | [optional] 
**milestone** | [**\Gitee\Model\Milestone**](Milestone.md) |  | [optional] 
**labels** | [**\Gitee\Model\Label[]**](Label.md) |  | [optional] 
**locked** | **bool** |  | [optional] 
**createdAt** | [**\DateTime**](https://www.php.net/class.datetime) |  | [optional] 
**updatedAt** | [**\DateTime**](https://www.php.net/class.datetime) |  | [optional] 
**closedAt** | [**\DateTime**](https://www.php.net/class.datetime) |  | [optional] 
**draft** | **bool** |  | [optional] 
**mergedAt** | [**\DateTime**](https://www.php.net/class.datetime) |  | [optional] 
**mergeable** | **bool** |  | [optional] 
**canMergeCheck** | **bool** |  | [optional] 
**links** | **string** |  | [optional] 
**user** | [**\Gitee\Model\UserBasic**](UserBasic.md) |  | [optional] 
**refPullRequests** | [**\Gitee\Model\RefPullRequest[]**](RefPullRequest.md) |  | [optional] 
**title** | **string** |  | [optional] 
**body** | **string** |  | [optional] 
**bodyHtml** | **string** |  | [optional] 
**head** | **string** |  | [optional] 
**base** | **string** |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


