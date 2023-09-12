# Gitee\PullRequestsApi

All URIs are relative to *https://gitee.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteV5ReposOwnerRepoPullsCommentsId**](PullRequestsApi.md#deleteV5ReposOwnerRepoPullsCommentsId) | **DELETE** /v5/repos/{owner}/{repo}/pulls/comments/{id} | 删除评论
[**deleteV5ReposOwnerRepoPullsNumberAssignees**](PullRequestsApi.md#deleteV5ReposOwnerRepoPullsNumberAssignees) | **DELETE** /v5/repos/{owner}/{repo}/pulls/{number}/assignees | 取消用户审查 Pull Request
[**deleteV5ReposOwnerRepoPullsNumberLabelsName**](PullRequestsApi.md#deleteV5ReposOwnerRepoPullsNumberLabelsName) | **DELETE** /v5/repos/{owner}/{repo}/pulls/{number}/labels/{name} | 删除 Pull Request 标签
[**deleteV5ReposOwnerRepoPullsNumberTesters**](PullRequestsApi.md#deleteV5ReposOwnerRepoPullsNumberTesters) | **DELETE** /v5/repos/{owner}/{repo}/pulls/{number}/testers | 取消用户测试 Pull Request
[**getV5ReposOwnerRepoPulls**](PullRequestsApi.md#getV5ReposOwnerRepoPulls) | **GET** /v5/repos/{owner}/{repo}/pulls | 获取Pull Request列表
[**getV5ReposOwnerRepoPullsCommentsId**](PullRequestsApi.md#getV5ReposOwnerRepoPullsCommentsId) | **GET** /v5/repos/{owner}/{repo}/pulls/comments/{id} | 获取Pull Request的某个评论
[**getV5ReposOwnerRepoPullsNumber**](PullRequestsApi.md#getV5ReposOwnerRepoPullsNumber) | **GET** /v5/repos/{owner}/{repo}/pulls/{number} | 获取单个Pull Request
[**getV5ReposOwnerRepoPullsNumberComments**](PullRequestsApi.md#getV5ReposOwnerRepoPullsNumberComments) | **GET** /v5/repos/{owner}/{repo}/pulls/{number}/comments | 获取某个Pull Request的所有评论
[**getV5ReposOwnerRepoPullsNumberCommits**](PullRequestsApi.md#getV5ReposOwnerRepoPullsNumberCommits) | **GET** /v5/repos/{owner}/{repo}/pulls/{number}/commits | 获取某Pull Request的所有Commit信息。最多显示250条Commit
[**getV5ReposOwnerRepoPullsNumberFiles**](PullRequestsApi.md#getV5ReposOwnerRepoPullsNumberFiles) | **GET** /v5/repos/{owner}/{repo}/pulls/{number}/files | Pull Request Commit文件列表。最多显示300条diff
[**getV5ReposOwnerRepoPullsNumberIssues**](PullRequestsApi.md#getV5ReposOwnerRepoPullsNumberIssues) | **GET** /v5/repos/{owner}/{repo}/pulls/{number}/issues | 获取 Pull Request 关联的 issues
[**getV5ReposOwnerRepoPullsNumberLabels**](PullRequestsApi.md#getV5ReposOwnerRepoPullsNumberLabels) | **GET** /v5/repos/{owner}/{repo}/pulls/{number}/labels | 获取某个 Pull Request 的所有标签
[**getV5ReposOwnerRepoPullsNumberMerge**](PullRequestsApi.md#getV5ReposOwnerRepoPullsNumberMerge) | **GET** /v5/repos/{owner}/{repo}/pulls/{number}/merge | 判断Pull Request是否已经合并
[**getV5ReposOwnerRepoPullsNumberOperateLogs**](PullRequestsApi.md#getV5ReposOwnerRepoPullsNumberOperateLogs) | **GET** /v5/repos/{owner}/{repo}/pulls/{number}/operate_logs | 获取某个Pull Request的操作日志
[**patchV5ReposOwnerRepoPullsCommentsId**](PullRequestsApi.md#patchV5ReposOwnerRepoPullsCommentsId) | **PATCH** /v5/repos/{owner}/{repo}/pulls/comments/{id} | 编辑评论
[**patchV5ReposOwnerRepoPullsNumber**](PullRequestsApi.md#patchV5ReposOwnerRepoPullsNumber) | **PATCH** /v5/repos/{owner}/{repo}/pulls/{number} | 更新Pull Request信息
[**patchV5ReposOwnerRepoPullsNumberAssignees**](PullRequestsApi.md#patchV5ReposOwnerRepoPullsNumberAssignees) | **PATCH** /v5/repos/{owner}/{repo}/pulls/{number}/assignees | 重置 Pull Request 审查 的状态
[**patchV5ReposOwnerRepoPullsNumberTesters**](PullRequestsApi.md#patchV5ReposOwnerRepoPullsNumberTesters) | **PATCH** /v5/repos/{owner}/{repo}/pulls/{number}/testers | 重置 Pull Request 测试 的状态
[**postV5ReposOwnerRepoPulls**](PullRequestsApi.md#postV5ReposOwnerRepoPulls) | **POST** /v5/repos/{owner}/{repo}/pulls | 创建Pull Request
[**postV5ReposOwnerRepoPullsNumberAssignees**](PullRequestsApi.md#postV5ReposOwnerRepoPullsNumberAssignees) | **POST** /v5/repos/{owner}/{repo}/pulls/{number}/assignees | 指派用户审查 Pull Request
[**postV5ReposOwnerRepoPullsNumberComments**](PullRequestsApi.md#postV5ReposOwnerRepoPullsNumberComments) | **POST** /v5/repos/{owner}/{repo}/pulls/{number}/comments | 提交Pull Request评论
[**postV5ReposOwnerRepoPullsNumberLabels**](PullRequestsApi.md#postV5ReposOwnerRepoPullsNumberLabels) | **POST** /v5/repos/{owner}/{repo}/pulls/{number}/labels | 创建 Pull Request 标签
[**postV5ReposOwnerRepoPullsNumberReview**](PullRequestsApi.md#postV5ReposOwnerRepoPullsNumberReview) | **POST** /v5/repos/{owner}/{repo}/pulls/{number}/review | 处理 Pull Request 审查
[**postV5ReposOwnerRepoPullsNumberTest**](PullRequestsApi.md#postV5ReposOwnerRepoPullsNumberTest) | **POST** /v5/repos/{owner}/{repo}/pulls/{number}/test | 处理 Pull Request 测试
[**postV5ReposOwnerRepoPullsNumberTesters**](PullRequestsApi.md#postV5ReposOwnerRepoPullsNumberTesters) | **POST** /v5/repos/{owner}/{repo}/pulls/{number}/testers | 指派用户测试 Pull Request
[**putV5ReposOwnerRepoPullsNumberLabels**](PullRequestsApi.md#putV5ReposOwnerRepoPullsNumberLabels) | **PUT** /v5/repos/{owner}/{repo}/pulls/{number}/labels | 替换 Pull Request 所有标签
[**putV5ReposOwnerRepoPullsNumberMerge**](PullRequestsApi.md#putV5ReposOwnerRepoPullsNumberMerge) | **PUT** /v5/repos/{owner}/{repo}/pulls/{number}/merge | 合并Pull Request


# **deleteV5ReposOwnerRepoPullsCommentsId**
> deleteV5ReposOwnerRepoPullsCommentsId($owner, $repo, $id, $accessToken)

删除评论

删除评论

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\PullRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$id = 56; // int | 评论的ID
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->deleteV5ReposOwnerRepoPullsCommentsId($owner, $repo, $id, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestsApi->deleteV5ReposOwnerRepoPullsCommentsId: ', $e->getMessage(), PHP_EOL;
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

# **deleteV5ReposOwnerRepoPullsNumberAssignees**
> \Gitee\Model\PullRequest deleteV5ReposOwnerRepoPullsNumberAssignees($owner, $repo, $number, $assignees, $accessToken)

取消用户审查 Pull Request

取消用户审查 Pull Request

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\PullRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$number = 56; // int | 第几个PR，即本仓库PR的序数
$assignees = "assignees_example"; // string | 用户的个人空间地址, 以 , 分隔
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->deleteV5ReposOwnerRepoPullsNumberAssignees($owner, $repo, $number, $assignees, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestsApi->deleteV5ReposOwnerRepoPullsNumberAssignees: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **number** | **int**| 第几个PR，即本仓库PR的序数 |
 **assignees** | **string**| 用户的个人空间地址, 以 , 分隔 |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\Gitee\Model\PullRequest**](../Model/PullRequest.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteV5ReposOwnerRepoPullsNumberLabelsName**
> deleteV5ReposOwnerRepoPullsNumberLabelsName($owner, $repo, $number, $name, $accessToken)

删除 Pull Request 标签

删除 Pull Request 标签

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\PullRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$number = 56; // int | 第几个PR，即本仓库PR的序数
$name = "name_example"; // string | 标签名称(批量删除用英文逗号分隔，如: bug,feature)
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->deleteV5ReposOwnerRepoPullsNumberLabelsName($owner, $repo, $number, $name, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestsApi->deleteV5ReposOwnerRepoPullsNumberLabelsName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **number** | **int**| 第几个PR，即本仓库PR的序数 |
 **name** | **string**| 标签名称(批量删除用英文逗号分隔，如: bug,feature) |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteV5ReposOwnerRepoPullsNumberTesters**
> \Gitee\Model\PullRequest deleteV5ReposOwnerRepoPullsNumberTesters($owner, $repo, $number, $testers, $accessToken)

取消用户测试 Pull Request

取消用户测试 Pull Request

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\PullRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$number = 56; // int | 第几个PR，即本仓库PR的序数
$testers = "testers_example"; // string | 用户的个人空间地址, 以 , 分隔
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->deleteV5ReposOwnerRepoPullsNumberTesters($owner, $repo, $number, $testers, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestsApi->deleteV5ReposOwnerRepoPullsNumberTesters: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **number** | **int**| 第几个PR，即本仓库PR的序数 |
 **testers** | **string**| 用户的个人空间地址, 以 , 分隔 |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\Gitee\Model\PullRequest**](../Model/PullRequest.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5ReposOwnerRepoPulls**
> \Gitee\Model\PullRequest[] getV5ReposOwnerRepoPulls($owner, $repo, $accessToken, $state, $head, $base, $sort, $since, $direction, $milestoneNumber, $labels, $page, $perPage)

获取Pull Request列表

获取Pull Request列表

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\PullRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$accessToken = "accessToken_example"; // string | 用户授权码
$state = "open"; // string | 可选。Pull Request 状态
$head = "head_example"; // string | 可选。Pull Request 提交的源分支。格式：branch 或者：username:branch
$base = "base_example"; // string | 可选。Pull Request 提交目标分支的名称。
$sort = "created"; // string | 可选。排序字段，默认按创建时间
$since = "since_example"; // string | 可选。起始的更新时间，要求时间格式为 ISO 8601
$direction = "desc"; // string | 可选。升序/降序
$milestoneNumber = 56; // int | 可选。里程碑序号(id)
$labels = "labels_example"; // string | 用逗号分开的标签。如: bug,performance
$page = 1; // int | 当前的页码
$perPage = 20; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getV5ReposOwnerRepoPulls($owner, $repo, $accessToken, $state, $head, $base, $sort, $since, $direction, $milestoneNumber, $labels, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestsApi->getV5ReposOwnerRepoPulls: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **state** | **string**| 可选。Pull Request 状态 | [optional] [default to open]
 **head** | **string**| 可选。Pull Request 提交的源分支。格式：branch 或者：username:branch | [optional]
 **base** | **string**| 可选。Pull Request 提交目标分支的名称。 | [optional]
 **sort** | **string**| 可选。排序字段，默认按创建时间 | [optional] [default to created]
 **since** | **string**| 可选。起始的更新时间，要求时间格式为 ISO 8601 | [optional]
 **direction** | **string**| 可选。升序/降序 | [optional] [default to desc]
 **milestoneNumber** | **int**| 可选。里程碑序号(id) | [optional]
 **labels** | **string**| 用逗号分开的标签。如: bug,performance | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional] [default to 20]

### Return type

[**\Gitee\Model\PullRequest[]**](../Model/PullRequest.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5ReposOwnerRepoPullsCommentsId**
> \Gitee\Model\PullRequestComments getV5ReposOwnerRepoPullsCommentsId($owner, $repo, $id, $accessToken)

获取Pull Request的某个评论

获取Pull Request的某个评论

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\PullRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$id = 56; // int | 
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->getV5ReposOwnerRepoPullsCommentsId($owner, $repo, $id, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestsApi->getV5ReposOwnerRepoPullsCommentsId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **id** | **int**|  |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\Gitee\Model\PullRequestComments**](../Model/PullRequestComments.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5ReposOwnerRepoPullsNumber**
> \Gitee\Model\PullRequest getV5ReposOwnerRepoPullsNumber($owner, $repo, $number, $accessToken)

获取单个Pull Request

获取单个Pull Request

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\PullRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$number = 56; // int | 第几个PR，即本仓库PR的序数
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->getV5ReposOwnerRepoPullsNumber($owner, $repo, $number, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestsApi->getV5ReposOwnerRepoPullsNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **number** | **int**| 第几个PR，即本仓库PR的序数 |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\Gitee\Model\PullRequest**](../Model/PullRequest.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5ReposOwnerRepoPullsNumberComments**
> \Gitee\Model\PullRequestComments[] getV5ReposOwnerRepoPullsNumberComments($owner, $repo, $number, $accessToken, $page, $perPage, $direction, $commentType)

获取某个Pull Request的所有评论

获取某个Pull Request的所有评论

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\PullRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$number = 56; // int | 第几个PR，即本仓库PR的序数
$accessToken = "accessToken_example"; // string | 用户授权码
$page = 1; // int | 当前的页码
$perPage = 20; // int | 每页的数量，最大为 100
$direction = "direction_example"; // string | 可选。升序/降序
$commentType = "commentType_example"; // string | 可选。筛选评论类型。代码行评论/pr普通评论

try {
    $result = $apiInstance->getV5ReposOwnerRepoPullsNumberComments($owner, $repo, $number, $accessToken, $page, $perPage, $direction, $commentType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestsApi->getV5ReposOwnerRepoPullsNumberComments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **number** | **int**| 第几个PR，即本仓库PR的序数 |
 **accessToken** | **string**| 用户授权码 | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional] [default to 20]
 **direction** | **string**| 可选。升序/降序 | [optional]
 **commentType** | **string**| 可选。筛选评论类型。代码行评论/pr普通评论 | [optional]

### Return type

[**\Gitee\Model\PullRequestComments[]**](../Model/PullRequestComments.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5ReposOwnerRepoPullsNumberCommits**
> \Gitee\Model\PullRequestCommits[] getV5ReposOwnerRepoPullsNumberCommits($owner, $repo, $number, $accessToken)

获取某Pull Request的所有Commit信息。最多显示250条Commit

获取某Pull Request的所有Commit信息。最多显示250条Commit

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\PullRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$number = 56; // int | 第几个PR，即本仓库PR的序数
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->getV5ReposOwnerRepoPullsNumberCommits($owner, $repo, $number, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestsApi->getV5ReposOwnerRepoPullsNumberCommits: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **number** | **int**| 第几个PR，即本仓库PR的序数 |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\Gitee\Model\PullRequestCommits[]**](../Model/PullRequestCommits.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5ReposOwnerRepoPullsNumberFiles**
> \Gitee\Model\PullRequestFiles[] getV5ReposOwnerRepoPullsNumberFiles($owner, $repo, $number, $accessToken)

Pull Request Commit文件列表。最多显示300条diff

Pull Request Commit文件列表。最多显示300条diff

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\PullRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$number = 56; // int | 第几个PR，即本仓库PR的序数
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->getV5ReposOwnerRepoPullsNumberFiles($owner, $repo, $number, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestsApi->getV5ReposOwnerRepoPullsNumberFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **number** | **int**| 第几个PR，即本仓库PR的序数 |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\Gitee\Model\PullRequestFiles[]**](../Model/PullRequestFiles.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5ReposOwnerRepoPullsNumberIssues**
> \Gitee\Model\Issue[] getV5ReposOwnerRepoPullsNumberIssues($owner, $repo, $number, $accessToken, $page, $perPage)

获取 Pull Request 关联的 issues

获取 Pull Request 关联的 issues

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\PullRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$number = 56; // int | 
$accessToken = "accessToken_example"; // string | 用户授权码
$page = 1; // int | 当前的页码
$perPage = 20; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getV5ReposOwnerRepoPullsNumberIssues($owner, $repo, $number, $accessToken, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestsApi->getV5ReposOwnerRepoPullsNumberIssues: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **number** | **int**|  |
 **accessToken** | **string**| 用户授权码 | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional] [default to 20]

### Return type

[**\Gitee\Model\Issue[]**](../Model/Issue.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5ReposOwnerRepoPullsNumberLabels**
> \Gitee\Model\Label[] getV5ReposOwnerRepoPullsNumberLabels($owner, $repo, $number, $accessToken, $page, $perPage)

获取某个 Pull Request 的所有标签

获取某个 Pull Request 的所有标签

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\PullRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$number = 56; // int | 第几个PR，即本仓库PR的序数
$accessToken = "accessToken_example"; // string | 用户授权码
$page = 1; // int | 当前的页码
$perPage = 20; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getV5ReposOwnerRepoPullsNumberLabels($owner, $repo, $number, $accessToken, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestsApi->getV5ReposOwnerRepoPullsNumberLabels: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **number** | **int**| 第几个PR，即本仓库PR的序数 |
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

# **getV5ReposOwnerRepoPullsNumberMerge**
> getV5ReposOwnerRepoPullsNumberMerge($owner, $repo, $number, $accessToken)

判断Pull Request是否已经合并

判断Pull Request是否已经合并

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\PullRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$number = 56; // int | 第几个PR，即本仓库PR的序数
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->getV5ReposOwnerRepoPullsNumberMerge($owner, $repo, $number, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestsApi->getV5ReposOwnerRepoPullsNumberMerge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **number** | **int**| 第几个PR，即本仓库PR的序数 |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5ReposOwnerRepoPullsNumberOperateLogs**
> \Gitee\Model\OperateLog getV5ReposOwnerRepoPullsNumberOperateLogs($owner, $repo, $number, $accessToken, $sort)

获取某个Pull Request的操作日志

获取某个Pull Request的操作日志

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\PullRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$number = 56; // int | 第几个PR，即本仓库PR的序数
$accessToken = "accessToken_example"; // string | 用户授权码
$sort = "desc"; // string | 按递增(asc)或递减(desc)排序，默认：递减

try {
    $result = $apiInstance->getV5ReposOwnerRepoPullsNumberOperateLogs($owner, $repo, $number, $accessToken, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestsApi->getV5ReposOwnerRepoPullsNumberOperateLogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **number** | **int**| 第几个PR，即本仓库PR的序数 |
 **accessToken** | **string**| 用户授权码 | [optional]
 **sort** | **string**| 按递增(asc)或递减(desc)排序，默认：递减 | [optional] [default to desc]

### Return type

[**\Gitee\Model\OperateLog**](../Model/OperateLog.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchV5ReposOwnerRepoPullsCommentsId**
> \Gitee\Model\PullRequestComments patchV5ReposOwnerRepoPullsCommentsId($owner, $repo, $id, $body, $accessToken)

编辑评论

编辑评论

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\PullRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$id = 56; // int | 评论的ID
$body = "body_example"; // string | 必填。评论内容
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->patchV5ReposOwnerRepoPullsCommentsId($owner, $repo, $id, $body, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestsApi->patchV5ReposOwnerRepoPullsCommentsId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **id** | **int**| 评论的ID |
 **body** | **string**| 必填。评论内容 |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\Gitee\Model\PullRequestComments**](../Model/PullRequestComments.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchV5ReposOwnerRepoPullsNumber**
> \Gitee\Model\PullRequest patchV5ReposOwnerRepoPullsNumber($owner, $repo, $number, $accessToken, $title, $body, $state, $milestoneNumber, $labels, $assigneesNumber, $testersNumber, $refPullRequestNumbers, $draft, $squash)

更新Pull Request信息

更新Pull Request信息

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\PullRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$number = 56; // int | 第几个PR，即本仓库PR的序数
$accessToken = "accessToken_example"; // string | 用户授权码
$title = "title_example"; // string | 可选。Pull Request 标题
$body = "body_example"; // string | 可选。Pull Request 内容
$state = "state_example"; // string | 可选。Pull Request 状态
$milestoneNumber = 56; // int | 可选。里程碑序号(id)
$labels = "labels_example"; // string | 用逗号分开的标签，名称要求长度在 2-20 之间且非特殊字符。如: bug,performance
$assigneesNumber = 56; // int | 可选。最少审查人数
$testersNumber = 56; // int | 可选。最少测试人数
$refPullRequestNumbers = "refPullRequestNumbers_example"; // string | 可选。依赖的当前仓库下的PR编号，置空则清空依赖的PR。如：17,18,19
$draft = true; // bool | 是否设置为草稿
$squash = true; // bool | 接受 Pull Request 时使用扁平化（Squash）合并

try {
    $result = $apiInstance->patchV5ReposOwnerRepoPullsNumber($owner, $repo, $number, $accessToken, $title, $body, $state, $milestoneNumber, $labels, $assigneesNumber, $testersNumber, $refPullRequestNumbers, $draft, $squash);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestsApi->patchV5ReposOwnerRepoPullsNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **number** | **int**| 第几个PR，即本仓库PR的序数 |
 **accessToken** | **string**| 用户授权码 | [optional]
 **title** | **string**| 可选。Pull Request 标题 | [optional]
 **body** | **string**| 可选。Pull Request 内容 | [optional]
 **state** | **string**| 可选。Pull Request 状态 | [optional]
 **milestoneNumber** | **int**| 可选。里程碑序号(id) | [optional]
 **labels** | **string**| 用逗号分开的标签，名称要求长度在 2-20 之间且非特殊字符。如: bug,performance | [optional]
 **assigneesNumber** | **int**| 可选。最少审查人数 | [optional]
 **testersNumber** | **int**| 可选。最少测试人数 | [optional]
 **refPullRequestNumbers** | **string**| 可选。依赖的当前仓库下的PR编号，置空则清空依赖的PR。如：17,18,19 | [optional]
 **draft** | **bool**| 是否设置为草稿 | [optional]
 **squash** | **bool**| 接受 Pull Request 时使用扁平化（Squash）合并 | [optional]

### Return type

[**\Gitee\Model\PullRequest**](../Model/PullRequest.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchV5ReposOwnerRepoPullsNumberAssignees**
> \Gitee\Model\PullRequest patchV5ReposOwnerRepoPullsNumberAssignees($owner, $repo, $number, $accessToken, $resetAll)

重置 Pull Request 审查 的状态

重置 Pull Request 审查 的状态

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\PullRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$number = 56; // int | 第几个PR，即本仓库PR的序数
$accessToken = "accessToken_example"; // string | 用户授权码
$resetAll = true; // bool | 是否重置所有审查人，默认：false，只对管理员生效

try {
    $result = $apiInstance->patchV5ReposOwnerRepoPullsNumberAssignees($owner, $repo, $number, $accessToken, $resetAll);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestsApi->patchV5ReposOwnerRepoPullsNumberAssignees: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **number** | **int**| 第几个PR，即本仓库PR的序数 |
 **accessToken** | **string**| 用户授权码 | [optional]
 **resetAll** | **bool**| 是否重置所有审查人，默认：false，只对管理员生效 | [optional]

### Return type

[**\Gitee\Model\PullRequest**](../Model/PullRequest.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchV5ReposOwnerRepoPullsNumberTesters**
> \Gitee\Model\PullRequest patchV5ReposOwnerRepoPullsNumberTesters($owner, $repo, $number, $accessToken, $resetAll)

重置 Pull Request 测试 的状态

重置 Pull Request 测试 的状态

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\PullRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$number = 56; // int | 第几个PR，即本仓库PR的序数
$accessToken = "accessToken_example"; // string | 用户授权码
$resetAll = true; // bool | 是否重置所有测试人，默认：false，只对管理员生效

try {
    $result = $apiInstance->patchV5ReposOwnerRepoPullsNumberTesters($owner, $repo, $number, $accessToken, $resetAll);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestsApi->patchV5ReposOwnerRepoPullsNumberTesters: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **number** | **int**| 第几个PR，即本仓库PR的序数 |
 **accessToken** | **string**| 用户授权码 | [optional]
 **resetAll** | **bool**| 是否重置所有测试人，默认：false，只对管理员生效 | [optional]

### Return type

[**\Gitee\Model\PullRequest**](../Model/PullRequest.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postV5ReposOwnerRepoPulls**
> \Gitee\Model\PullRequest postV5ReposOwnerRepoPulls($owner, $repo, $title, $head, $base, $accessToken, $body, $milestoneNumber, $labels, $issue, $assignees, $testers, $assigneesNumber, $testersNumber, $refPullRequestNumbers, $pruneSourceBranch, $closeRelatedIssue, $draft, $squash)

创建Pull Request

创建Pull Request

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\PullRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$title = "title_example"; // string | 必填。Pull Request 标题
$head = "head_example"; // string | 必填。Pull Request 提交的源分支。格式：branch 或者：username:branch
$base = "base_example"; // string | 必填。Pull Request 提交目标分支的名称
$accessToken = "accessToken_example"; // string | 用户授权码
$body = "body_example"; // string | 可选。Pull Request 内容
$milestoneNumber = 56; // int | 可选。里程碑序号(id)
$labels = "labels_example"; // string | 用逗号分开的标签，名称要求长度在 2-20 之间且非特殊字符。如: bug,performance
$issue = "issue_example"; // string | 可选。Pull Request的标题和内容可以根据指定的Issue Id自动填充
$assignees = "assignees_example"; // string | 可选。审查人员username，可多个，半角逗号分隔，如：(username1,username2), 注意: 当仓库代码审查设置中已设置【指派审查人员】则此选项无效
$testers = "testers_example"; // string | 可选。测试人员username，可多个，半角逗号分隔，如：(username1,username2), 注意: 当仓库代码审查设置中已设置【指派测试人员】则此选项无效
$assigneesNumber = 56; // int | 可选。最少审查人数
$testersNumber = 56; // int | 可选。最少测试人数
$refPullRequestNumbers = "refPullRequestNumbers_example"; // string | 可选。依赖的当前仓库下的PR编号，置空则清空依赖的PR。如：17,18,19
$pruneSourceBranch = true; // bool | 可选。合并PR后是否删除源分支，默认false（不删除）
$closeRelatedIssue = true; // bool | 可选，合并后是否关闭关联的 Issue，默认根据仓库配置设置
$draft = true; // bool | 是否设置为草稿
$squash = true; // bool | 接受 Pull Request 时使用扁平化（Squash）合并

try {
    $result = $apiInstance->postV5ReposOwnerRepoPulls($owner, $repo, $title, $head, $base, $accessToken, $body, $milestoneNumber, $labels, $issue, $assignees, $testers, $assigneesNumber, $testersNumber, $refPullRequestNumbers, $pruneSourceBranch, $closeRelatedIssue, $draft, $squash);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestsApi->postV5ReposOwnerRepoPulls: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **title** | **string**| 必填。Pull Request 标题 |
 **head** | **string**| 必填。Pull Request 提交的源分支。格式：branch 或者：username:branch |
 **base** | **string**| 必填。Pull Request 提交目标分支的名称 |
 **accessToken** | **string**| 用户授权码 | [optional]
 **body** | **string**| 可选。Pull Request 内容 | [optional]
 **milestoneNumber** | **int**| 可选。里程碑序号(id) | [optional]
 **labels** | **string**| 用逗号分开的标签，名称要求长度在 2-20 之间且非特殊字符。如: bug,performance | [optional]
 **issue** | **string**| 可选。Pull Request的标题和内容可以根据指定的Issue Id自动填充 | [optional]
 **assignees** | **string**| 可选。审查人员username，可多个，半角逗号分隔，如：(username1,username2), 注意: 当仓库代码审查设置中已设置【指派审查人员】则此选项无效 | [optional]
 **testers** | **string**| 可选。测试人员username，可多个，半角逗号分隔，如：(username1,username2), 注意: 当仓库代码审查设置中已设置【指派测试人员】则此选项无效 | [optional]
 **assigneesNumber** | **int**| 可选。最少审查人数 | [optional]
 **testersNumber** | **int**| 可选。最少测试人数 | [optional]
 **refPullRequestNumbers** | **string**| 可选。依赖的当前仓库下的PR编号，置空则清空依赖的PR。如：17,18,19 | [optional]
 **pruneSourceBranch** | **bool**| 可选。合并PR后是否删除源分支，默认false（不删除） | [optional]
 **closeRelatedIssue** | **bool**| 可选，合并后是否关闭关联的 Issue，默认根据仓库配置设置 | [optional]
 **draft** | **bool**| 是否设置为草稿 | [optional]
 **squash** | **bool**| 接受 Pull Request 时使用扁平化（Squash）合并 | [optional]

### Return type

[**\Gitee\Model\PullRequest**](../Model/PullRequest.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postV5ReposOwnerRepoPullsNumberAssignees**
> \Gitee\Model\PullRequest postV5ReposOwnerRepoPullsNumberAssignees($owner, $repo, $number, $assignees, $accessToken)

指派用户审查 Pull Request

指派用户审查 Pull Request

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\PullRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$number = 56; // int | 第几个PR，即本仓库PR的序数
$assignees = "assignees_example"; // string | 用户的个人空间地址, 以 , 分隔
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->postV5ReposOwnerRepoPullsNumberAssignees($owner, $repo, $number, $assignees, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestsApi->postV5ReposOwnerRepoPullsNumberAssignees: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **number** | **int**| 第几个PR，即本仓库PR的序数 |
 **assignees** | **string**| 用户的个人空间地址, 以 , 分隔 |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\Gitee\Model\PullRequest**](../Model/PullRequest.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postV5ReposOwnerRepoPullsNumberComments**
> \Gitee\Model\PullRequestComments postV5ReposOwnerRepoPullsNumberComments($owner, $repo, $number, $body, $accessToken, $commitId, $path, $position)

提交Pull Request评论

提交Pull Request评论

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\PullRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$number = 56; // int | 第几个PR，即本仓库PR的序数
$body = "body_example"; // string | 必填。评论内容
$accessToken = "accessToken_example"; // string | 用户授权码
$commitId = "commitId_example"; // string | 可选。PR代码评论的commit id
$path = "path_example"; // string | 可选。PR代码评论的文件名
$position = 56; // int | 可选。PR代码评论diff中的行数

try {
    $result = $apiInstance->postV5ReposOwnerRepoPullsNumberComments($owner, $repo, $number, $body, $accessToken, $commitId, $path, $position);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestsApi->postV5ReposOwnerRepoPullsNumberComments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **number** | **int**| 第几个PR，即本仓库PR的序数 |
 **body** | **string**| 必填。评论内容 |
 **accessToken** | **string**| 用户授权码 | [optional]
 **commitId** | **string**| 可选。PR代码评论的commit id | [optional]
 **path** | **string**| 可选。PR代码评论的文件名 | [optional]
 **position** | **int**| 可选。PR代码评论diff中的行数 | [optional]

### Return type

[**\Gitee\Model\PullRequestComments**](../Model/PullRequestComments.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postV5ReposOwnerRepoPullsNumberLabels**
> \Gitee\Model\Label postV5ReposOwnerRepoPullsNumberLabels($owner, $repo, $number, $body, $accessToken)

创建 Pull Request 标签

创建 Pull Request 标签  需要在请求的 body 里填上数组，元素为标签的名字。如: [\"performance\", \"bug\"]

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\PullRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$number = 56; // int | 第几个PR，即本仓库PR的序数
$body = array(new \Gitee\Model\string[]()); // string[] | 标签名数组，如: [\"feat\", \"bug\"]
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->postV5ReposOwnerRepoPullsNumberLabels($owner, $repo, $number, $body, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestsApi->postV5ReposOwnerRepoPullsNumberLabels: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **number** | **int**| 第几个PR，即本仓库PR的序数 |
 **body** | **string[]**| 标签名数组，如: [\&quot;feat\&quot;, \&quot;bug\&quot;] |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\Gitee\Model\Label**](../Model/Label.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postV5ReposOwnerRepoPullsNumberReview**
> postV5ReposOwnerRepoPullsNumberReview($owner, $repo, $number, $accessToken, $force)

处理 Pull Request 审查

处理 Pull Request 审查

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\PullRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$number = 56; // int | 第几个PR，即本仓库PR的序数
$accessToken = "accessToken_example"; // string | 用户授权码
$force = true; // bool | 是否强制审查通过（默认否），只对管理员生效

try {
    $apiInstance->postV5ReposOwnerRepoPullsNumberReview($owner, $repo, $number, $accessToken, $force);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestsApi->postV5ReposOwnerRepoPullsNumberReview: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **number** | **int**| 第几个PR，即本仓库PR的序数 |
 **accessToken** | **string**| 用户授权码 | [optional]
 **force** | **bool**| 是否强制审查通过（默认否），只对管理员生效 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postV5ReposOwnerRepoPullsNumberTest**
> postV5ReposOwnerRepoPullsNumberTest($owner, $repo, $number, $accessToken, $force)

处理 Pull Request 测试

处理 Pull Request 测试

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\PullRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$number = 56; // int | 第几个PR，即本仓库PR的序数
$accessToken = "accessToken_example"; // string | 用户授权码
$force = true; // bool | 是否强制测试通过（默认否），只对管理员生效

try {
    $apiInstance->postV5ReposOwnerRepoPullsNumberTest($owner, $repo, $number, $accessToken, $force);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestsApi->postV5ReposOwnerRepoPullsNumberTest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **number** | **int**| 第几个PR，即本仓库PR的序数 |
 **accessToken** | **string**| 用户授权码 | [optional]
 **force** | **bool**| 是否强制测试通过（默认否），只对管理员生效 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postV5ReposOwnerRepoPullsNumberTesters**
> \Gitee\Model\PullRequest postV5ReposOwnerRepoPullsNumberTesters($owner, $repo, $number, $testers, $accessToken)

指派用户测试 Pull Request

指派用户测试 Pull Request

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\PullRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$number = 56; // int | 第几个PR，即本仓库PR的序数
$testers = "testers_example"; // string | 用户的个人空间地址, 以 , 分隔
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->postV5ReposOwnerRepoPullsNumberTesters($owner, $repo, $number, $testers, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestsApi->postV5ReposOwnerRepoPullsNumberTesters: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **number** | **int**| 第几个PR，即本仓库PR的序数 |
 **testers** | **string**| 用户的个人空间地址, 以 , 分隔 |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\Gitee\Model\PullRequest**](../Model/PullRequest.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putV5ReposOwnerRepoPullsNumberLabels**
> \Gitee\Model\Label putV5ReposOwnerRepoPullsNumberLabels($owner, $repo, $number, $body, $accessToken)

替换 Pull Request 所有标签

替换 Pull Request 所有标签  需要在请求的body里填上数组，元素为标签的名字。如: [\"performance\", \"bug\"]

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\PullRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$number = 56; // int | 第几个PR，即本仓库PR的序数
$body = array(new \Gitee\Model\string[]()); // string[] | 标签名数组，如: [\"feat\", \"bug\"]
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->putV5ReposOwnerRepoPullsNumberLabels($owner, $repo, $number, $body, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestsApi->putV5ReposOwnerRepoPullsNumberLabels: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **number** | **int**| 第几个PR，即本仓库PR的序数 |
 **body** | **string[]**| 标签名数组，如: [\&quot;feat\&quot;, \&quot;bug\&quot;] |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\Gitee\Model\Label**](../Model/Label.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putV5ReposOwnerRepoPullsNumberMerge**
> putV5ReposOwnerRepoPullsNumberMerge($owner, $repo, $number, $accessToken, $mergeMethod, $pruneSourceBranch, $title, $description)

合并Pull Request

合并Pull Request

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\PullRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$number = 56; // int | 第几个PR，即本仓库PR的序数
$accessToken = "accessToken_example"; // string | 用户授权码
$mergeMethod = "merge"; // string | 可选。合并PR的方法，merge（合并所有提交）、squash（扁平化分支合并）和rebase（变基并合并）。默认为merge。
$pruneSourceBranch = true; // bool | 可选。合并PR后是否删除源分支，默认false（不删除）
$title = "title_example"; // string | 可选。合并标题，默认为PR的标题
$description = "description_example"; // string | 可选。合并描述，默认为 \"Merge pull request !{pr_id} from {author}/{source_branch}\"，与页面显示的默认一致。

try {
    $apiInstance->putV5ReposOwnerRepoPullsNumberMerge($owner, $repo, $number, $accessToken, $mergeMethod, $pruneSourceBranch, $title, $description);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestsApi->putV5ReposOwnerRepoPullsNumberMerge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **number** | **int**| 第几个PR，即本仓库PR的序数 |
 **accessToken** | **string**| 用户授权码 | [optional]
 **mergeMethod** | **string**| 可选。合并PR的方法，merge（合并所有提交）、squash（扁平化分支合并）和rebase（变基并合并）。默认为merge。 | [optional] [default to merge]
 **pruneSourceBranch** | **bool**| 可选。合并PR后是否删除源分支，默认false（不删除） | [optional]
 **title** | **string**| 可选。合并标题，默认为PR的标题 | [optional]
 **description** | **string**| 可选。合并描述，默认为 \&quot;Merge pull request !{pr_id} from {author}/{source_branch}\&quot;，与页面显示的默认一致。 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

