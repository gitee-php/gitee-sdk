# Gitee\IssuesApi

All URIs are relative to *https://gitee.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteV5ReposOwnerRepoIssuesCommentsId**](IssuesApi.md#deleteV5ReposOwnerRepoIssuesCommentsId) | **DELETE** /v5/repos/{owner}/{repo}/issues/comments/{id} | 删除Issue某条评论
[**getV5EnterprisesEnterpriseIssues**](IssuesApi.md#getV5EnterprisesEnterpriseIssues) | **GET** /v5/enterprises/{enterprise}/issues | 获取某个企业的所有Issues
[**getV5EnterprisesEnterpriseIssuesNumber**](IssuesApi.md#getV5EnterprisesEnterpriseIssuesNumber) | **GET** /v5/enterprises/{enterprise}/issues/{number} | 获取企业的某个Issue
[**getV5EnterprisesEnterpriseIssuesNumberComments**](IssuesApi.md#getV5EnterprisesEnterpriseIssuesNumberComments) | **GET** /v5/enterprises/{enterprise}/issues/{number}/comments | 获取企业某个Issue所有评论
[**getV5EnterprisesEnterpriseIssuesNumberLabels**](IssuesApi.md#getV5EnterprisesEnterpriseIssuesNumberLabels) | **GET** /v5/enterprises/{enterprise}/issues/{number}/labels | 获取企业某个Issue所有标签
[**getV5EnterprisesEnterpriseIssuesNumberPullRequests**](IssuesApi.md#getV5EnterprisesEnterpriseIssuesNumberPullRequests) | **GET** /v5/enterprises/{enterprise}/issues/{number}/pull_requests | 获取企业 issue 关联的 Pull Requests
[**getV5Issues**](IssuesApi.md#getV5Issues) | **GET** /v5/issues | 获取当前授权用户的所有Issues
[**getV5OrgsOrgIssues**](IssuesApi.md#getV5OrgsOrgIssues) | **GET** /v5/orgs/{org}/issues | 获取当前用户某个组织的Issues
[**getV5ReposOwnerIssuesNumberOperateLogs**](IssuesApi.md#getV5ReposOwnerIssuesNumberOperateLogs) | **GET** /v5/repos/{owner}/issues/{number}/operate_logs | 获取某个Issue下的操作日志
[**getV5ReposOwnerIssuesNumberPullRequests**](IssuesApi.md#getV5ReposOwnerIssuesNumberPullRequests) | **GET** /v5/repos/{owner}/issues/{number}/pull_requests | 获取 issue 关联的 Pull Requests
[**getV5ReposOwnerRepoIssues**](IssuesApi.md#getV5ReposOwnerRepoIssues) | **GET** /v5/repos/{owner}/{repo}/issues | 仓库的所有Issues
[**getV5ReposOwnerRepoIssuesComments**](IssuesApi.md#getV5ReposOwnerRepoIssuesComments) | **GET** /v5/repos/{owner}/{repo}/issues/comments | 获取仓库所有Issue的评论
[**getV5ReposOwnerRepoIssuesCommentsId**](IssuesApi.md#getV5ReposOwnerRepoIssuesCommentsId) | **GET** /v5/repos/{owner}/{repo}/issues/comments/{id} | 获取仓库Issue某条评论
[**getV5ReposOwnerRepoIssuesNumber**](IssuesApi.md#getV5ReposOwnerRepoIssuesNumber) | **GET** /v5/repos/{owner}/{repo}/issues/{number} | 仓库的某个Issue
[**getV5ReposOwnerRepoIssuesNumberComments**](IssuesApi.md#getV5ReposOwnerRepoIssuesNumberComments) | **GET** /v5/repos/{owner}/{repo}/issues/{number}/comments | 获取仓库某个Issue所有的评论
[**getV5UserIssues**](IssuesApi.md#getV5UserIssues) | **GET** /v5/user/issues | 获取授权用户的所有Issues
[**patchV5EnterprisesEnterpriseIssuesNumber**](IssuesApi.md#patchV5EnterprisesEnterpriseIssuesNumber) | **PATCH** /v5/enterprises/{enterprise}/issues/{number} | 更新企业的某个Issue
[**patchV5ReposOwnerIssuesNumber**](IssuesApi.md#patchV5ReposOwnerIssuesNumber) | **PATCH** /v5/repos/{owner}/issues/{number} | 更新Issue
[**patchV5ReposOwnerRepoIssuesCommentsId**](IssuesApi.md#patchV5ReposOwnerRepoIssuesCommentsId) | **PATCH** /v5/repos/{owner}/{repo}/issues/comments/{id} | 更新Issue某条评论
[**postV5ReposOwnerIssues**](IssuesApi.md#postV5ReposOwnerIssues) | **POST** /v5/repos/{owner}/issues | 创建Issue
[**postV5ReposOwnerRepoIssuesNumberComments**](IssuesApi.md#postV5ReposOwnerRepoIssuesNumberComments) | **POST** /v5/repos/{owner}/{repo}/issues/{number}/comments | 创建某个Issue评论


# **deleteV5ReposOwnerRepoIssuesCommentsId**
> deleteV5ReposOwnerRepoIssuesCommentsId($owner, $repo, $id, $accessToken)

删除Issue某条评论

删除Issue某条评论

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\IssuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$id = 56; // int | 评论的ID
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->deleteV5ReposOwnerRepoIssuesCommentsId($owner, $repo, $id, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling IssuesApi->deleteV5ReposOwnerRepoIssuesCommentsId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **id** | **int**| 评论的ID |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5EnterprisesEnterpriseIssues**
> \Gitee\Model\Issue[] getV5EnterprisesEnterpriseIssues($enterprise, $accessToken, $state, $labels, $sort, $direction, $since, $page, $perPage, $schedule, $deadline, $createdAt, $finishedAt, $milestone, $assignee, $creator, $program)

获取某个企业的所有Issues

获取某个企业的所有Issues

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\IssuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterprise = "enterprise_example"; // string | 企业的路径(path/login)
$accessToken = "accessToken_example"; // string | 用户授权码
$state = "open"; // string | Issue的状态: open（开启的）, progressing(进行中), closed（关闭的）, rejected（拒绝的）。 默认: open
$labels = "labels_example"; // string | 用逗号分开的标签。如: bug,performance
$sort = "created"; // string | 排序依据: 创建时间(created)，更新时间(updated_at)。默认: created_at
$direction = "desc"; // string | 排序方式: 升序(asc)，降序(desc)。默认: desc
$since = "since_example"; // string | 起始的更新时间，要求时间格式为 ISO 8601
$page = 1; // int | 当前的页码
$perPage = 20; // int | 每页的数量，最大为 100
$schedule = "schedule_example"; // string | 计划开始日期，格式：20181006T173008+80-20181007T173008+80（区间），或者 -20181007T173008+80（小于20181007T173008+80），或者 20181006T173008+80-（大于20181006T173008+80），要求时间格式为20181006T173008+80
$deadline = "deadline_example"; // string | 计划截止日期，格式同上
$createdAt = "createdAt_example"; // string | 任务创建时间，格式同上
$finishedAt = "finishedAt_example"; // string | 任务完成时间，即任务最后一次转为已完成状态的时间点。格式同上
$milestone = "milestone_example"; // string | 根据里程碑标题。none为没里程碑的，*为所有带里程碑的
$assignee = "assignee_example"; // string | 用户的username。 none为没指派者, *为所有带有指派者的
$creator = "creator_example"; // string | 创建Issues的用户username
$program = "program_example"; // string | 所属项目名称。none为没所属有项目的，*为所有带所属项目的

try {
    $result = $apiInstance->getV5EnterprisesEnterpriseIssues($enterprise, $accessToken, $state, $labels, $sort, $direction, $since, $page, $perPage, $schedule, $deadline, $createdAt, $finishedAt, $milestone, $assignee, $creator, $program);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuesApi->getV5EnterprisesEnterpriseIssues: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterprise** | **string**| 企业的路径(path/login) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **state** | **string**| Issue的状态: open（开启的）, progressing(进行中), closed（关闭的）, rejected（拒绝的）。 默认: open | [optional] [default to open]
 **labels** | **string**| 用逗号分开的标签。如: bug,performance | [optional]
 **sort** | **string**| 排序依据: 创建时间(created)，更新时间(updated_at)。默认: created_at | [optional] [default to created]
 **direction** | **string**| 排序方式: 升序(asc)，降序(desc)。默认: desc | [optional] [default to desc]
 **since** | **string**| 起始的更新时间，要求时间格式为 ISO 8601 | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional] [default to 20]
 **schedule** | **string**| 计划开始日期，格式：20181006T173008+80-20181007T173008+80（区间），或者 -20181007T173008+80（小于20181007T173008+80），或者 20181006T173008+80-（大于20181006T173008+80），要求时间格式为20181006T173008+80 | [optional]
 **deadline** | **string**| 计划截止日期，格式同上 | [optional]
 **createdAt** | **string**| 任务创建时间，格式同上 | [optional]
 **finishedAt** | **string**| 任务完成时间，即任务最后一次转为已完成状态的时间点。格式同上 | [optional]
 **milestone** | **string**| 根据里程碑标题。none为没里程碑的，*为所有带里程碑的 | [optional]
 **assignee** | **string**| 用户的username。 none为没指派者, *为所有带有指派者的 | [optional]
 **creator** | **string**| 创建Issues的用户username | [optional]
 **program** | **string**| 所属项目名称。none为没所属有项目的，*为所有带所属项目的 | [optional]

### Return type

[**\Gitee\Model\Issue[]**](../Model/Issue.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5EnterprisesEnterpriseIssuesNumber**
> \Gitee\Model\Issue getV5EnterprisesEnterpriseIssuesNumber($enterprise, $number, $accessToken)

获取企业的某个Issue

获取企业的某个Issue

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\IssuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterprise = "enterprise_example"; // string | 企业的路径(path/login)
$number = "number_example"; // string | Issue 编号(区分大小写，无需添加 # 号)
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->getV5EnterprisesEnterpriseIssuesNumber($enterprise, $number, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuesApi->getV5EnterprisesEnterpriseIssuesNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterprise** | **string**| 企业的路径(path/login) |
 **number** | **string**| Issue 编号(区分大小写，无需添加 # 号) |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\Gitee\Model\Issue**](../Model/Issue.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5EnterprisesEnterpriseIssuesNumberComments**
> \Gitee\Model\Note[] getV5EnterprisesEnterpriseIssuesNumberComments($enterprise, $number, $accessToken, $page, $perPage)

获取企业某个Issue所有评论

获取企业某个Issue所有评论

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\IssuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterprise = "enterprise_example"; // string | 企业的路径(path/login)
$number = "number_example"; // string | Issue 编号(区分大小写，无需添加 # 号)
$accessToken = "accessToken_example"; // string | 用户授权码
$page = 1; // int | 当前的页码
$perPage = 20; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getV5EnterprisesEnterpriseIssuesNumberComments($enterprise, $number, $accessToken, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuesApi->getV5EnterprisesEnterpriseIssuesNumberComments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterprise** | **string**| 企业的路径(path/login) |
 **number** | **string**| Issue 编号(区分大小写，无需添加 # 号) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional] [default to 20]

### Return type

[**\Gitee\Model\Note[]**](../Model/Note.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5EnterprisesEnterpriseIssuesNumberLabels**
> \Gitee\Model\Label[] getV5EnterprisesEnterpriseIssuesNumberLabels($enterprise, $number, $accessToken, $page, $perPage)

获取企业某个Issue所有标签

获取企业某个Issue所有标签

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\IssuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterprise = "enterprise_example"; // string | 企业的路径(path/login)
$number = "number_example"; // string | Issue 编号(区分大小写，无需添加 # 号)
$accessToken = "accessToken_example"; // string | 用户授权码
$page = 1; // int | 当前的页码
$perPage = 20; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getV5EnterprisesEnterpriseIssuesNumberLabels($enterprise, $number, $accessToken, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuesApi->getV5EnterprisesEnterpriseIssuesNumberLabels: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterprise** | **string**| 企业的路径(path/login) |
 **number** | **string**| Issue 编号(区分大小写，无需添加 # 号) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional] [default to 20]

### Return type

[**\Gitee\Model\Label[]**](../Model/Label.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5EnterprisesEnterpriseIssuesNumberPullRequests**
> \Gitee\Model\PullRequest[] getV5EnterprisesEnterpriseIssuesNumberPullRequests($enterprise, $number, $accessToken)

获取企业 issue 关联的 Pull Requests

获取企业 issue 关联的 Pull Requests

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\IssuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterprise = "enterprise_example"; // string | 企业的路径(path/login)
$number = "number_example"; // string | Issue 编号(区分大小写，无需添加 # 号)
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->getV5EnterprisesEnterpriseIssuesNumberPullRequests($enterprise, $number, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuesApi->getV5EnterprisesEnterpriseIssuesNumberPullRequests: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterprise** | **string**| 企业的路径(path/login) |
 **number** | **string**| Issue 编号(区分大小写，无需添加 # 号) |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\Gitee\Model\PullRequest[]**](../Model/PullRequest.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5Issues**
> \Gitee\Model\Issue[] getV5Issues($accessToken, $filter, $state, $labels, $sort, $direction, $since, $page, $perPage, $schedule, $deadline, $createdAt, $finishedAt)

获取当前授权用户的所有Issues

获取当前授权用户的所有Issues

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\IssuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accessToken = "accessToken_example"; // string | 用户授权码
$filter = "assigned"; // string | 筛选参数: 授权用户负责的(assigned)，授权用户创建的(created)，包含前两者的(all)。默认: assigned
$state = "open"; // string | Issue的状态: open（开启的）, progressing(进行中), closed（关闭的）, rejected（拒绝的）。 默认: open
$labels = "labels_example"; // string | 用逗号分开的标签。如: bug,performance
$sort = "created"; // string | 排序依据: 创建时间(created)，更新时间(updated_at)。默认: created_at
$direction = "desc"; // string | 排序方式: 升序(asc)，降序(desc)。默认: desc
$since = "since_example"; // string | 起始的更新时间，要求时间格式为 ISO 8601
$page = 1; // int | 当前的页码
$perPage = 20; // int | 每页的数量，最大为 100
$schedule = "schedule_example"; // string | 计划开始日期，格式：20181006T173008+80-20181007T173008+80（区间），或者 -20181007T173008+80（小于20181007T173008+80），或者 20181006T173008+80-（大于20181006T173008+80），要求时间格式为20181006T173008+80
$deadline = "deadline_example"; // string | 计划截止日期，格式同上
$createdAt = "createdAt_example"; // string | 任务创建时间，格式同上
$finishedAt = "finishedAt_example"; // string | 任务完成时间，即任务最后一次转为已完成状态的时间点。格式同上

try {
    $result = $apiInstance->getV5Issues($accessToken, $filter, $state, $labels, $sort, $direction, $since, $page, $perPage, $schedule, $deadline, $createdAt, $finishedAt);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuesApi->getV5Issues: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accessToken** | **string**| 用户授权码 | [optional]
 **filter** | **string**| 筛选参数: 授权用户负责的(assigned)，授权用户创建的(created)，包含前两者的(all)。默认: assigned | [optional] [default to assigned]
 **state** | **string**| Issue的状态: open（开启的）, progressing(进行中), closed（关闭的）, rejected（拒绝的）。 默认: open | [optional] [default to open]
 **labels** | **string**| 用逗号分开的标签。如: bug,performance | [optional]
 **sort** | **string**| 排序依据: 创建时间(created)，更新时间(updated_at)。默认: created_at | [optional] [default to created]
 **direction** | **string**| 排序方式: 升序(asc)，降序(desc)。默认: desc | [optional] [default to desc]
 **since** | **string**| 起始的更新时间，要求时间格式为 ISO 8601 | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional] [default to 20]
 **schedule** | **string**| 计划开始日期，格式：20181006T173008+80-20181007T173008+80（区间），或者 -20181007T173008+80（小于20181007T173008+80），或者 20181006T173008+80-（大于20181006T173008+80），要求时间格式为20181006T173008+80 | [optional]
 **deadline** | **string**| 计划截止日期，格式同上 | [optional]
 **createdAt** | **string**| 任务创建时间，格式同上 | [optional]
 **finishedAt** | **string**| 任务完成时间，即任务最后一次转为已完成状态的时间点。格式同上 | [optional]

### Return type

[**\Gitee\Model\Issue[]**](../Model/Issue.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5OrgsOrgIssues**
> \Gitee\Model\Issue[] getV5OrgsOrgIssues($org, $accessToken, $filter, $state, $labels, $sort, $direction, $since, $page, $perPage, $schedule, $deadline, $createdAt, $finishedAt)

获取当前用户某个组织的Issues

获取当前用户某个组织的Issues

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\IssuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org = "org_example"; // string | 组织的路径(path/login)
$accessToken = "accessToken_example"; // string | 用户授权码
$filter = "assigned"; // string | 筛选参数: 授权用户负责的(assigned)，授权用户创建的(created)，包含前两者的(all)。默认: assigned
$state = "open"; // string | Issue的状态: open（开启的）, progressing(进行中), closed（关闭的）, rejected（拒绝的）。 默认: open
$labels = "labels_example"; // string | 用逗号分开的标签。如: bug,performance
$sort = "created"; // string | 排序依据: 创建时间(created)，更新时间(updated_at)。默认: created_at
$direction = "desc"; // string | 排序方式: 升序(asc)，降序(desc)。默认: desc
$since = "since_example"; // string | 起始的更新时间，要求时间格式为 ISO 8601
$page = 1; // int | 当前的页码
$perPage = 20; // int | 每页的数量，最大为 100
$schedule = "schedule_example"; // string | 计划开始日期，格式：20181006T173008+80-20181007T173008+80（区间），或者 -20181007T173008+80（小于20181007T173008+80），或者 20181006T173008+80-（大于20181006T173008+80），要求时间格式为20181006T173008+80
$deadline = "deadline_example"; // string | 计划截止日期，格式同上
$createdAt = "createdAt_example"; // string | 任务创建时间，格式同上
$finishedAt = "finishedAt_example"; // string | 任务完成时间，即任务最后一次转为已完成状态的时间点。格式同上

try {
    $result = $apiInstance->getV5OrgsOrgIssues($org, $accessToken, $filter, $state, $labels, $sort, $direction, $since, $page, $perPage, $schedule, $deadline, $createdAt, $finishedAt);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuesApi->getV5OrgsOrgIssues: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org** | **string**| 组织的路径(path/login) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **filter** | **string**| 筛选参数: 授权用户负责的(assigned)，授权用户创建的(created)，包含前两者的(all)。默认: assigned | [optional] [default to assigned]
 **state** | **string**| Issue的状态: open（开启的）, progressing(进行中), closed（关闭的）, rejected（拒绝的）。 默认: open | [optional] [default to open]
 **labels** | **string**| 用逗号分开的标签。如: bug,performance | [optional]
 **sort** | **string**| 排序依据: 创建时间(created)，更新时间(updated_at)。默认: created_at | [optional] [default to created]
 **direction** | **string**| 排序方式: 升序(asc)，降序(desc)。默认: desc | [optional] [default to desc]
 **since** | **string**| 起始的更新时间，要求时间格式为 ISO 8601 | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional] [default to 20]
 **schedule** | **string**| 计划开始日期，格式：20181006T173008+80-20181007T173008+80（区间），或者 -20181007T173008+80（小于20181007T173008+80），或者 20181006T173008+80-（大于20181006T173008+80），要求时间格式为20181006T173008+80 | [optional]
 **deadline** | **string**| 计划截止日期，格式同上 | [optional]
 **createdAt** | **string**| 任务创建时间，格式同上 | [optional]
 **finishedAt** | **string**| 任务完成时间，即任务最后一次转为已完成状态的时间点。格式同上 | [optional]

### Return type

[**\Gitee\Model\Issue[]**](../Model/Issue.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5ReposOwnerIssuesNumberOperateLogs**
> \Gitee\Model\OperateLog[] getV5ReposOwnerIssuesNumberOperateLogs($owner, $number, $accessToken, $repo, $sort)

获取某个Issue下的操作日志

获取某个Issue下的操作日志

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\IssuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$number = "number_example"; // string | Issue 编号(区分大小写，无需添加 # 号)
$accessToken = "accessToken_example"; // string | 用户授权码
$repo = "repo_example"; // string | 仓库路径(path)
$sort = "desc"; // string | 按递增(asc)或递减(desc)排序，默认：递减

try {
    $result = $apiInstance->getV5ReposOwnerIssuesNumberOperateLogs($owner, $number, $accessToken, $repo, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuesApi->getV5ReposOwnerIssuesNumberOperateLogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **number** | **string**| Issue 编号(区分大小写，无需添加 # 号) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **repo** | **string**| 仓库路径(path) | [optional]
 **sort** | **string**| 按递增(asc)或递减(desc)排序，默认：递减 | [optional] [default to desc]

### Return type

[**\Gitee\Model\OperateLog[]**](../Model/OperateLog.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5ReposOwnerIssuesNumberPullRequests**
> \Gitee\Model\PullRequest[] getV5ReposOwnerIssuesNumberPullRequests($owner, $number, $accessToken, $repo)

获取 issue 关联的 Pull Requests

获取 issue 关联的 Pull Requests

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\IssuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$number = "number_example"; // string | Issue 编号(区分大小写，无需添加 # 号)
$accessToken = "accessToken_example"; // string | 用户授权码
$repo = "repo_example"; // string | 仓库路径(path)

try {
    $result = $apiInstance->getV5ReposOwnerIssuesNumberPullRequests($owner, $number, $accessToken, $repo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuesApi->getV5ReposOwnerIssuesNumberPullRequests: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **number** | **string**| Issue 编号(区分大小写，无需添加 # 号) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **repo** | **string**| 仓库路径(path) | [optional]

### Return type

[**\Gitee\Model\PullRequest[]**](../Model/PullRequest.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5ReposOwnerRepoIssues**
> \Gitee\Model\Issue[] getV5ReposOwnerRepoIssues($owner, $repo, $accessToken, $state, $labels, $sort, $direction, $since, $page, $perPage, $schedule, $deadline, $createdAt, $finishedAt, $milestone, $assignee, $creator, $program)

仓库的所有Issues

仓库的所有Issues

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\IssuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$accessToken = "accessToken_example"; // string | 用户授权码
$state = "open"; // string | Issue的状态: open（开启的）, progressing(进行中), closed（关闭的）, rejected（拒绝的）。 默认: open
$labels = "labels_example"; // string | 用逗号分开的标签。如: bug,performance
$sort = "created"; // string | 排序依据: 创建时间(created)，更新时间(updated_at)。默认: created_at
$direction = "desc"; // string | 排序方式: 升序(asc)，降序(desc)。默认: desc
$since = "since_example"; // string | 起始的更新时间，要求时间格式为 ISO 8601
$page = 1; // int | 当前的页码
$perPage = 20; // int | 每页的数量，最大为 100
$schedule = "schedule_example"; // string | 计划开始日期，格式：20181006T173008+80-20181007T173008+80（区间），或者 -20181007T173008+80（小于20181007T173008+80），或者 20181006T173008+80-（大于20181006T173008+80），要求时间格式为20181006T173008+80
$deadline = "deadline_example"; // string | 计划截止日期，格式同上
$createdAt = "createdAt_example"; // string | 任务创建时间，格式同上
$finishedAt = "finishedAt_example"; // string | 任务完成时间，即任务最后一次转为已完成状态的时间点。格式同上
$milestone = "milestone_example"; // string | 根据里程碑标题。none为没里程碑的，*为所有带里程碑的
$assignee = "assignee_example"; // string | 用户的username。 none为没指派者, *为所有带有指派者的
$creator = "creator_example"; // string | 创建Issues的用户username
$program = "program_example"; // string | 所属项目名称。none为没有所属项目，*为所有带所属项目的

try {
    $result = $apiInstance->getV5ReposOwnerRepoIssues($owner, $repo, $accessToken, $state, $labels, $sort, $direction, $since, $page, $perPage, $schedule, $deadline, $createdAt, $finishedAt, $milestone, $assignee, $creator, $program);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuesApi->getV5ReposOwnerRepoIssues: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **state** | **string**| Issue的状态: open（开启的）, progressing(进行中), closed（关闭的）, rejected（拒绝的）。 默认: open | [optional] [default to open]
 **labels** | **string**| 用逗号分开的标签。如: bug,performance | [optional]
 **sort** | **string**| 排序依据: 创建时间(created)，更新时间(updated_at)。默认: created_at | [optional] [default to created]
 **direction** | **string**| 排序方式: 升序(asc)，降序(desc)。默认: desc | [optional] [default to desc]
 **since** | **string**| 起始的更新时间，要求时间格式为 ISO 8601 | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional] [default to 20]
 **schedule** | **string**| 计划开始日期，格式：20181006T173008+80-20181007T173008+80（区间），或者 -20181007T173008+80（小于20181007T173008+80），或者 20181006T173008+80-（大于20181006T173008+80），要求时间格式为20181006T173008+80 | [optional]
 **deadline** | **string**| 计划截止日期，格式同上 | [optional]
 **createdAt** | **string**| 任务创建时间，格式同上 | [optional]
 **finishedAt** | **string**| 任务完成时间，即任务最后一次转为已完成状态的时间点。格式同上 | [optional]
 **milestone** | **string**| 根据里程碑标题。none为没里程碑的，*为所有带里程碑的 | [optional]
 **assignee** | **string**| 用户的username。 none为没指派者, *为所有带有指派者的 | [optional]
 **creator** | **string**| 创建Issues的用户username | [optional]
 **program** | **string**| 所属项目名称。none为没有所属项目，*为所有带所属项目的 | [optional]

### Return type

[**\Gitee\Model\Issue[]**](../Model/Issue.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5ReposOwnerRepoIssuesComments**
> \Gitee\Model\Note getV5ReposOwnerRepoIssuesComments($owner, $repo, $accessToken, $sort, $direction, $since, $page, $perPage)

获取仓库所有Issue的评论

获取仓库所有Issue的评论

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\IssuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$accessToken = "accessToken_example"; // string | 用户授权码
$sort = "created"; // string | Either created or updated. Default: created
$direction = "asc"; // string | Either asc or desc. Ignored without the sort parameter.
$since = "since_example"; // string | Only comments updated at or after this time are returned.                                               This is a timestamp in ISO 8601 format: YYYY-MM-DDTHH:MM:SSZ
$page = 1; // int | 当前的页码
$perPage = 20; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getV5ReposOwnerRepoIssuesComments($owner, $repo, $accessToken, $sort, $direction, $since, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuesApi->getV5ReposOwnerRepoIssuesComments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **sort** | **string**| Either created or updated. Default: created | [optional] [default to created]
 **direction** | **string**| Either asc or desc. Ignored without the sort parameter. | [optional] [default to asc]
 **since** | **string**| Only comments updated at or after this time are returned.                                               This is a timestamp in ISO 8601 format: YYYY-MM-DDTHH:MM:SSZ | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional] [default to 20]

### Return type

[**\Gitee\Model\Note**](../Model/Note.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5ReposOwnerRepoIssuesCommentsId**
> \Gitee\Model\Note getV5ReposOwnerRepoIssuesCommentsId($owner, $repo, $id, $accessToken)

获取仓库Issue某条评论

获取仓库Issue某条评论

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\IssuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$id = 56; // int | 评论的ID
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->getV5ReposOwnerRepoIssuesCommentsId($owner, $repo, $id, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuesApi->getV5ReposOwnerRepoIssuesCommentsId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **id** | **int**| 评论的ID |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\Gitee\Model\Note**](../Model/Note.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5ReposOwnerRepoIssuesNumber**
> \Gitee\Model\Issue getV5ReposOwnerRepoIssuesNumber($owner, $repo, $number, $accessToken)

仓库的某个Issue

仓库的某个Issue

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\IssuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$number = "number_example"; // string | Issue 编号(区分大小写，无需添加 # 号)
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->getV5ReposOwnerRepoIssuesNumber($owner, $repo, $number, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuesApi->getV5ReposOwnerRepoIssuesNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **number** | **string**| Issue 编号(区分大小写，无需添加 # 号) |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\Gitee\Model\Issue**](../Model/Issue.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5ReposOwnerRepoIssuesNumberComments**
> \Gitee\Model\Note getV5ReposOwnerRepoIssuesNumberComments($owner, $repo, $number, $accessToken, $since, $page, $perPage, $order)

获取仓库某个Issue所有的评论

获取仓库某个Issue所有的评论

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\IssuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$number = "number_example"; // string | Issue 编号(区分大小写，无需添加 # 号)
$accessToken = "accessToken_example"; // string | 用户授权码
$since = "since_example"; // string | Only comments updated at or after this time are returned.                                               This is a timestamp in ISO 8601 format: YYYY-MM-DDTHH:MM:SSZ
$page = 1; // int | 当前的页码
$perPage = 20; // int | 每页的数量，最大为 100
$order = "asc"; // string | 排序顺序: asc(default),desc

try {
    $result = $apiInstance->getV5ReposOwnerRepoIssuesNumberComments($owner, $repo, $number, $accessToken, $since, $page, $perPage, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuesApi->getV5ReposOwnerRepoIssuesNumberComments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **number** | **string**| Issue 编号(区分大小写，无需添加 # 号) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **since** | **string**| Only comments updated at or after this time are returned.                                               This is a timestamp in ISO 8601 format: YYYY-MM-DDTHH:MM:SSZ | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional] [default to 20]
 **order** | **string**| 排序顺序: asc(default),desc | [optional] [default to asc]

### Return type

[**\Gitee\Model\Note**](../Model/Note.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5UserIssues**
> \Gitee\Model\Issue[] getV5UserIssues($accessToken, $filter, $state, $labels, $sort, $direction, $since, $page, $perPage, $schedule, $deadline, $createdAt, $finishedAt)

获取授权用户的所有Issues

获取授权用户的所有Issues

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\IssuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accessToken = "accessToken_example"; // string | 用户授权码
$filter = "assigned"; // string | 筛选参数: 授权用户负责的(assigned)，授权用户创建的(created)，包含前两者的(all)。默认: assigned
$state = "open"; // string | Issue的状态: open（开启的）, progressing(进行中), closed（关闭的）, rejected（拒绝的）。 默认: open
$labels = "labels_example"; // string | 用逗号分开的标签。如: bug,performance
$sort = "created"; // string | 排序依据: 创建时间(created)，更新时间(updated_at)。默认: created_at
$direction = "desc"; // string | 排序方式: 升序(asc)，降序(desc)。默认: desc
$since = "since_example"; // string | 起始的更新时间，要求时间格式为 ISO 8601
$page = 1; // int | 当前的页码
$perPage = 20; // int | 每页的数量，最大为 100
$schedule = "schedule_example"; // string | 计划开始日期，格式：20181006T173008+80-20181007T173008+80（区间），或者 -20181007T173008+80（小于20181007T173008+80），或者 20181006T173008+80-（大于20181006T173008+80），要求时间格式为20181006T173008+80
$deadline = "deadline_example"; // string | 计划截止日期，格式同上
$createdAt = "createdAt_example"; // string | 任务创建时间，格式同上
$finishedAt = "finishedAt_example"; // string | 任务完成时间，即任务最后一次转为已完成状态的时间点。格式同上

try {
    $result = $apiInstance->getV5UserIssues($accessToken, $filter, $state, $labels, $sort, $direction, $since, $page, $perPage, $schedule, $deadline, $createdAt, $finishedAt);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuesApi->getV5UserIssues: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accessToken** | **string**| 用户授权码 | [optional]
 **filter** | **string**| 筛选参数: 授权用户负责的(assigned)，授权用户创建的(created)，包含前两者的(all)。默认: assigned | [optional] [default to assigned]
 **state** | **string**| Issue的状态: open（开启的）, progressing(进行中), closed（关闭的）, rejected（拒绝的）。 默认: open | [optional] [default to open]
 **labels** | **string**| 用逗号分开的标签。如: bug,performance | [optional]
 **sort** | **string**| 排序依据: 创建时间(created)，更新时间(updated_at)。默认: created_at | [optional] [default to created]
 **direction** | **string**| 排序方式: 升序(asc)，降序(desc)。默认: desc | [optional] [default to desc]
 **since** | **string**| 起始的更新时间，要求时间格式为 ISO 8601 | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional] [default to 20]
 **schedule** | **string**| 计划开始日期，格式：20181006T173008+80-20181007T173008+80（区间），或者 -20181007T173008+80（小于20181007T173008+80），或者 20181006T173008+80-（大于20181006T173008+80），要求时间格式为20181006T173008+80 | [optional]
 **deadline** | **string**| 计划截止日期，格式同上 | [optional]
 **createdAt** | **string**| 任务创建时间，格式同上 | [optional]
 **finishedAt** | **string**| 任务完成时间，即任务最后一次转为已完成状态的时间点。格式同上 | [optional]

### Return type

[**\Gitee\Model\Issue[]**](../Model/Issue.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchV5EnterprisesEnterpriseIssuesNumber**
> \Gitee\Model\Issue patchV5EnterprisesEnterpriseIssuesNumber($enterprise, $number, $accessToken, $title, $state, $body, $assignee, $collaborators, $milestone, $labels, $program, $securityHole, $branch)

更新企业的某个Issue

更新企业的某个Issue

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\IssuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterprise = "enterprise_example"; // string | 企业的路径(path/login)
$number = "number_example"; // string | Issue 编号(区分大小写，无需添加 # 号)
$accessToken = "accessToken_example"; // string | 用户授权码
$title = "title_example"; // string | Issue标题
$state = "state_example"; // string | Issue 状态，open（开启的）、progressing（进行中）、closed（关闭的）
$body = "body_example"; // string | Issue描述
$assignee = "assignee_example"; // string | Issue负责人的个人空间地址
$collaborators = "collaborators_example"; // string | Issue协助者的个人空间地址, 以 , 分隔
$milestone = 56; // int | 里程碑序号
$labels = "labels_example"; // string | 用逗号分开的标签，名称要求长度在 2-20 之间且非特殊字符。如: bug,performance
$program = "program_example"; // string | 项目ID
$securityHole = true; // bool | 是否是私有issue(默认为false)
$branch = "branch_example"; // string | 分支名称，传空串表示取消关联分支

try {
    $result = $apiInstance->patchV5EnterprisesEnterpriseIssuesNumber($enterprise, $number, $accessToken, $title, $state, $body, $assignee, $collaborators, $milestone, $labels, $program, $securityHole, $branch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuesApi->patchV5EnterprisesEnterpriseIssuesNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterprise** | **string**| 企业的路径(path/login) |
 **number** | **string**| Issue 编号(区分大小写，无需添加 # 号) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **title** | **string**| Issue标题 | [optional]
 **state** | **string**| Issue 状态，open（开启的）、progressing（进行中）、closed（关闭的） | [optional]
 **body** | **string**| Issue描述 | [optional]
 **assignee** | **string**| Issue负责人的个人空间地址 | [optional]
 **collaborators** | **string**| Issue协助者的个人空间地址, 以 , 分隔 | [optional]
 **milestone** | **int**| 里程碑序号 | [optional]
 **labels** | **string**| 用逗号分开的标签，名称要求长度在 2-20 之间且非特殊字符。如: bug,performance | [optional]
 **program** | **string**| 项目ID | [optional]
 **securityHole** | **bool**| 是否是私有issue(默认为false) | [optional]
 **branch** | **string**| 分支名称，传空串表示取消关联分支 | [optional]

### Return type

[**\Gitee\Model\Issue**](../Model/Issue.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchV5ReposOwnerIssuesNumber**
> \Gitee\Model\Issue patchV5ReposOwnerIssuesNumber($owner, $number, $accessToken, $repo, $title, $state, $body, $assignee, $collaborators, $milestone, $labels, $program, $securityHole)

更新Issue

更新Issue

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\IssuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$number = "number_example"; // string | Issue 编号(区分大小写，无需添加 # 号)
$accessToken = "accessToken_example"; // string | 用户授权码
$repo = "repo_example"; // string | 仓库路径(path)
$title = "title_example"; // string | Issue标题
$state = "state_example"; // string | Issue 状态，open（开启的）、progressing（进行中）、closed（关闭的）
$body = "body_example"; // string | Issue描述
$assignee = "assignee_example"; // string | Issue负责人的个人空间地址
$collaborators = "collaborators_example"; // string | Issue协助者的个人空间地址, 以 , 分隔
$milestone = 56; // int | 里程碑序号
$labels = "labels_example"; // string | 用逗号分开的标签，名称要求长度在 2-20 之间且非特殊字符。如: bug,performance
$program = "program_example"; // string | 项目ID
$securityHole = true; // bool | 是否是私有issue(默认为false)

try {
    $result = $apiInstance->patchV5ReposOwnerIssuesNumber($owner, $number, $accessToken, $repo, $title, $state, $body, $assignee, $collaborators, $milestone, $labels, $program, $securityHole);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuesApi->patchV5ReposOwnerIssuesNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **number** | **string**| Issue 编号(区分大小写，无需添加 # 号) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **repo** | **string**| 仓库路径(path) | [optional]
 **title** | **string**| Issue标题 | [optional]
 **state** | **string**| Issue 状态，open（开启的）、progressing（进行中）、closed（关闭的） | [optional]
 **body** | **string**| Issue描述 | [optional]
 **assignee** | **string**| Issue负责人的个人空间地址 | [optional]
 **collaborators** | **string**| Issue协助者的个人空间地址, 以 , 分隔 | [optional]
 **milestone** | **int**| 里程碑序号 | [optional]
 **labels** | **string**| 用逗号分开的标签，名称要求长度在 2-20 之间且非特殊字符。如: bug,performance | [optional]
 **program** | **string**| 项目ID | [optional]
 **securityHole** | **bool**| 是否是私有issue(默认为false) | [optional]

### Return type

[**\Gitee\Model\Issue**](../Model/Issue.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchV5ReposOwnerRepoIssuesCommentsId**
> \Gitee\Model\Note patchV5ReposOwnerRepoIssuesCommentsId($owner, $repo, $id, $body, $accessToken)

更新Issue某条评论

更新Issue某条评论

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\IssuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$id = 56; // int | 评论的ID
$body = "body_example"; // string | The contents of the comment.
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->patchV5ReposOwnerRepoIssuesCommentsId($owner, $repo, $id, $body, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuesApi->patchV5ReposOwnerRepoIssuesCommentsId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **id** | **int**| 评论的ID |
 **body** | **string**| The contents of the comment. |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\Gitee\Model\Note**](../Model/Note.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postV5ReposOwnerIssues**
> \Gitee\Model\Issue postV5ReposOwnerIssues($owner, $title, $accessToken, $repo, $issueType, $body, $assignee, $collaborators, $milestone, $labels, $program, $securityHole)

创建Issue

创建Issue

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\IssuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$title = "title_example"; // string | Issue标题
$accessToken = "accessToken_example"; // string | 用户授权码
$repo = "repo_example"; // string | 仓库路径(path)
$issueType = "issueType_example"; // string | 企业自定义任务类型，非企业默认任务类型为“任务”
$body = "body_example"; // string | Issue描述
$assignee = "assignee_example"; // string | Issue负责人的个人空间地址
$collaborators = "collaborators_example"; // string | Issue协助者的个人空间地址, 以 , 分隔
$milestone = 56; // int | 里程碑序号
$labels = "labels_example"; // string | 用逗号分开的标签，名称要求长度在 2-20 之间且非特殊字符。如: bug,performance
$program = "program_example"; // string | 项目ID
$securityHole = true; // bool | 是否是私有issue(默认为false)

try {
    $result = $apiInstance->postV5ReposOwnerIssues($owner, $title, $accessToken, $repo, $issueType, $body, $assignee, $collaborators, $milestone, $labels, $program, $securityHole);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuesApi->postV5ReposOwnerIssues: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **title** | **string**| Issue标题 |
 **accessToken** | **string**| 用户授权码 | [optional]
 **repo** | **string**| 仓库路径(path) | [optional]
 **issueType** | **string**| 企业自定义任务类型，非企业默认任务类型为“任务” | [optional]
 **body** | **string**| Issue描述 | [optional]
 **assignee** | **string**| Issue负责人的个人空间地址 | [optional]
 **collaborators** | **string**| Issue协助者的个人空间地址, 以 , 分隔 | [optional]
 **milestone** | **int**| 里程碑序号 | [optional]
 **labels** | **string**| 用逗号分开的标签，名称要求长度在 2-20 之间且非特殊字符。如: bug,performance | [optional]
 **program** | **string**| 项目ID | [optional]
 **securityHole** | **bool**| 是否是私有issue(默认为false) | [optional]

### Return type

[**\Gitee\Model\Issue**](../Model/Issue.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postV5ReposOwnerRepoIssuesNumberComments**
> \Gitee\Model\Note postV5ReposOwnerRepoIssuesNumberComments($owner, $repo, $number, $body, $accessToken)

创建某个Issue评论

创建某个Issue评论

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\IssuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$number = "number_example"; // string | Issue 编号(区分大小写，无需添加 # 号)
$body = "body_example"; // string | The contents of the comment.
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->postV5ReposOwnerRepoIssuesNumberComments($owner, $repo, $number, $body, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuesApi->postV5ReposOwnerRepoIssuesNumberComments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **number** | **string**| Issue 编号(区分大小写，无需添加 # 号) |
 **body** | **string**| The contents of the comment. |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\Gitee\Model\Note**](../Model/Note.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

