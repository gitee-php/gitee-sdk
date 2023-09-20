# Issue

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**url** | **string** |  | [optional] 
**repositoryUrl** | **string** |  | [optional] 
**labelsUrl** | **string** |  | [optional] 
**commentsUrl** | **string** |  | [optional] 
**htmlUrl** | **string** |  | [optional] 
**parentUrl** | **string** |  | [optional] 
**number** | **string** | 唯一标识 | [optional] 
**parentId** | **int** | 上级 id | [optional] 
**depth** | **int** | 所在层级 | [optional] 
**state** | **string** | 状态 | [optional] 
**title** | **string** | 标题 | [optional] 
**body** | **string** | 描述 | [optional] 
**bodyHtml** | **string** | 描述 html 格式 | [optional] 
**user** | [**\Gitee\Model\UserBasic**](UserBasic.md) | 作者 | [optional] 
**labels** | [**\Gitee\Model\Label**](Label.md) | 标签 | [optional] 
**assignee** | [**\Gitee\Model\UserBasic**](UserBasic.md) | 负责人 | [optional] 
**collaborators** | [**\Gitee\Model\UserBasic**](UserBasic.md) | 协作者 | [optional] 
**repository** | [**\Gitee\Model\Project**](Project.md) | 关联的仓库 | [optional] 
**milestone** | [**\Gitee\Model\Milestone**](Milestone.md) | 关联的里程碑 | [optional] 
**createdAt** | [**\DateTime**](\DateTime.md) | 创建时间 | [optional] 
**updatedAt** | [**\DateTime**](\DateTime.md) | 更新时间 | [optional] 
**planStartedAt** | [**\DateTime**](\DateTime.md) | 计划开始时间 | [optional] 
**deadline** | [**\DateTime**](\DateTime.md) | 结束时间 | [optional] 
**finishedAt** | [**\DateTime**](\DateTime.md) | 完成时间 | [optional] 
**scheduledTime** | **int** | 预计工期 | [optional] 
**comments** | **int** | 评论数量 | [optional] 
**priority** | **int** | 优先级(0: 不指定 1: 不重要 2: 次要 3: 主要 4: 严重) | [optional] 
**issueTypeDetail** | [**\Gitee\Model\IssueType**](IssueType.md) | 任务类型详情 | [optional] 
**program** | [**\Gitee\Model\ProgramBasic**](ProgramBasic.md) | 关联的项目 | [optional] 
**securityHole** | **bool** | 是否为私有issue | [optional] 
**issueStateDetail** | [**\Gitee\Model\IssueState**](IssueState.md) | 任务类型详情 | [optional] 
**branch** | **string** | 关联分支 | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


