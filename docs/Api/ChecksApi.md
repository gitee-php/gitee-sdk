# Gitee\ChecksApi

All URIs are relative to *https://gitee.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getV5ReposOwnerRepoCheckRunsCheckRunId**](ChecksApi.md#getV5ReposOwnerRepoCheckRunsCheckRunId) | **GET** /v5/repos/{owner}/{repo}/check-runs/{check_run_id} | 获取检查项详情
[**getV5ReposOwnerRepoCheckRunsCheckRunIdAnnotations**](ChecksApi.md#getV5ReposOwnerRepoCheckRunsCheckRunIdAnnotations) | **GET** /v5/repos/{owner}/{repo}/check-runs/{check_run_id}/annotations | 获取检查项代码注释
[**getV5ReposOwnerRepoCommitsRefCheckRuns**](ChecksApi.md#getV5ReposOwnerRepoCommitsRefCheckRuns) | **GET** /v5/repos/{owner}/{repo}/commits/{ref}/check-runs | 获取某个提交的检查项
[**patchV5ReposOwnerRepoCheckRunsCheckRunId**](ChecksApi.md#patchV5ReposOwnerRepoCheckRunsCheckRunId) | **PATCH** /v5/repos/{owner}/{repo}/check-runs/{check_run_id} | 更新检查项
[**postV5ReposOwnerRepoCheckRuns**](ChecksApi.md#postV5ReposOwnerRepoCheckRuns) | **POST** /v5/repos/{owner}/{repo}/check-runs | 创建检查项


# **getV5ReposOwnerRepoCheckRunsCheckRunId**
> \Gitee\Model\CheckRun getV5ReposOwnerRepoCheckRunsCheckRunId($owner, $repo, $checkRunId, $accessToken)

获取检查项详情

获取检查项详情

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\ChecksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$checkRunId = 56; // int | 检查项 ID
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->getV5ReposOwnerRepoCheckRunsCheckRunId($owner, $repo, $checkRunId, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChecksApi->getV5ReposOwnerRepoCheckRunsCheckRunId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **checkRunId** | **int**| 检查项 ID |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\Gitee\Model\CheckRun**](../Model/CheckRun.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5ReposOwnerRepoCheckRunsCheckRunIdAnnotations**
> \Gitee\Model\CheckAnnotation getV5ReposOwnerRepoCheckRunsCheckRunIdAnnotations($owner, $repo, $checkRunId, $accessToken, $page, $perPage)

获取检查项代码注释

获取检查项代码注释

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\ChecksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$checkRunId = 56; // int | 检查项 ID
$accessToken = "accessToken_example"; // string | 用户授权码
$page = 1; // int | 当前的页码
$perPage = 20; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getV5ReposOwnerRepoCheckRunsCheckRunIdAnnotations($owner, $repo, $checkRunId, $accessToken, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChecksApi->getV5ReposOwnerRepoCheckRunsCheckRunIdAnnotations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **checkRunId** | **int**| 检查项 ID |
 **accessToken** | **string**| 用户授权码 | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional] [default to 20]

### Return type

[**\Gitee\Model\CheckAnnotation**](../Model/CheckAnnotation.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5ReposOwnerRepoCommitsRefCheckRuns**
> \Gitee\Model\CheckRun getV5ReposOwnerRepoCommitsRefCheckRuns($owner, $repo, $ref, $accessToken, $page, $perPage, $pullRequestId, $checkName, $status, $filter)

获取某个提交的检查项

获取某个提交的检查项

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\ChecksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$ref = "ref_example"; // string | 分支名\\标签名\\sha 值
$accessToken = "accessToken_example"; // string | 用户授权码
$page = 1; // int | 当前的页码
$perPage = 20; // int | 每页的数量，最大为 100
$pullRequestId = 0; // int | 关联 pull request 的 ID
$checkName = "checkName_example"; // string | 检查项名称
$status = "status_example"; // string | 检查项状态
$filter = "latest"; // string | 最新的\\全部

try {
    $result = $apiInstance->getV5ReposOwnerRepoCommitsRefCheckRuns($owner, $repo, $ref, $accessToken, $page, $perPage, $pullRequestId, $checkName, $status, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChecksApi->getV5ReposOwnerRepoCommitsRefCheckRuns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **ref** | **string**| 分支名\\标签名\\sha 值 |
 **accessToken** | **string**| 用户授权码 | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional] [default to 20]
 **pullRequestId** | **int**| 关联 pull request 的 ID | [optional] [default to 0]
 **checkName** | **string**| 检查项名称 | [optional]
 **status** | **string**| 检查项状态 | [optional]
 **filter** | **string**| 最新的\\全部 | [optional] [default to latest]

### Return type

[**\Gitee\Model\CheckRun**](../Model/CheckRun.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchV5ReposOwnerRepoCheckRunsCheckRunId**
> \Gitee\Model\CheckRun patchV5ReposOwnerRepoCheckRunsCheckRunId($owner, $repo, $outputTitle, $outputSummary, $outputAnnotationsPath, $outputAnnotationsStartLine, $outputAnnotationsEndLine, $outputAnnotationsAnnotationLevel, $outputAnnotationsMessage, $outputImagesAlt, $outputImagesImageUrl, $actionsLabel, $actionsDescription, $actionsIdentifier, $checkRunId, $accessToken, $pullRequestId, $detailsUrl, $status, $startedAt, $conclusion, $completedAt, $outputText, $outputAnnotationsStartColumn, $outputAnnotationsEndColumn, $outputAnnotationsTitle, $outputAnnotationsRawDetails, $outputImagesCaption, $name)

更新检查项

更新检查项

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\ChecksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$outputTitle = "outputTitle_example"; // string | 标题
$outputSummary = "outputSummary_example"; // string | 概论
$outputAnnotationsPath = array("outputAnnotationsPath_example"); // string[] | 路径
$outputAnnotationsStartLine = array(56); // int[] | 开始行
$outputAnnotationsEndLine = array(56); // int[] | 结束行
$outputAnnotationsAnnotationLevel = array("outputAnnotationsAnnotationLevel_example"); // string[] | 注释级别
$outputAnnotationsMessage = array("outputAnnotationsMessage_example"); // string[] | 注释信息
$outputImagesAlt = array("outputImagesAlt_example"); // string[] | 注释
$outputImagesImageUrl = array("outputImagesImageUrl_example"); // string[] | URL
$actionsLabel = array("actionsLabel_example"); // string[] | 文本
$actionsDescription = array("actionsDescription_example"); // string[] | 描述
$actionsIdentifier = array("actionsIdentifier_example"); // string[] | 标识
$checkRunId = 56; // int | 检查项 ID
$accessToken = "accessToken_example"; // string | 用户授权码
$pullRequestId = 56; // int | 关联 pull_request 的 ID
$detailsUrl = "detailsUrl_example"; // string | 详情链接
$status = "queued"; // string | 状态
$startedAt = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 开始时间
$conclusion = "conclusion_example"; // string | 结论
$completedAt = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 完成时间
$outputText = "outputText_example"; // string | 详细信息
$outputAnnotationsStartColumn = array(56); // int[] | 开始列
$outputAnnotationsEndColumn = array(56); // int[] | 结束列
$outputAnnotationsTitle = array("outputAnnotationsTitle_example"); // string[] | 标题
$outputAnnotationsRawDetails = array("outputAnnotationsRawDetails_example"); // string[] | 详情内容
$outputImagesCaption = array("outputImagesCaption_example"); // string[] | 描述
$name = "name_example"; // string | 名字

try {
    $result = $apiInstance->patchV5ReposOwnerRepoCheckRunsCheckRunId($owner, $repo, $outputTitle, $outputSummary, $outputAnnotationsPath, $outputAnnotationsStartLine, $outputAnnotationsEndLine, $outputAnnotationsAnnotationLevel, $outputAnnotationsMessage, $outputImagesAlt, $outputImagesImageUrl, $actionsLabel, $actionsDescription, $actionsIdentifier, $checkRunId, $accessToken, $pullRequestId, $detailsUrl, $status, $startedAt, $conclusion, $completedAt, $outputText, $outputAnnotationsStartColumn, $outputAnnotationsEndColumn, $outputAnnotationsTitle, $outputAnnotationsRawDetails, $outputImagesCaption, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChecksApi->patchV5ReposOwnerRepoCheckRunsCheckRunId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **outputTitle** | **string**| 标题 |
 **outputSummary** | **string**| 概论 |
 **outputAnnotationsPath** | [**string[]**](../Model/string.md)| 路径 |
 **outputAnnotationsStartLine** | [**int[]**](../Model/int.md)| 开始行 |
 **outputAnnotationsEndLine** | [**int[]**](../Model/int.md)| 结束行 |
 **outputAnnotationsAnnotationLevel** | [**string[]**](../Model/string.md)| 注释级别 |
 **outputAnnotationsMessage** | [**string[]**](../Model/string.md)| 注释信息 |
 **outputImagesAlt** | [**string[]**](../Model/string.md)| 注释 |
 **outputImagesImageUrl** | [**string[]**](../Model/string.md)| URL |
 **actionsLabel** | [**string[]**](../Model/string.md)| 文本 |
 **actionsDescription** | [**string[]**](../Model/string.md)| 描述 |
 **actionsIdentifier** | [**string[]**](../Model/string.md)| 标识 |
 **checkRunId** | **int**| 检查项 ID |
 **accessToken** | **string**| 用户授权码 | [optional]
 **pullRequestId** | **int**| 关联 pull_request 的 ID | [optional]
 **detailsUrl** | **string**| 详情链接 | [optional]
 **status** | **string**| 状态 | [optional] [default to queued]
 **startedAt** | **\DateTime**| 开始时间 | [optional]
 **conclusion** | **string**| 结论 | [optional]
 **completedAt** | **\DateTime**| 完成时间 | [optional]
 **outputText** | **string**| 详细信息 | [optional]
 **outputAnnotationsStartColumn** | [**int[]**](../Model/int.md)| 开始列 | [optional]
 **outputAnnotationsEndColumn** | [**int[]**](../Model/int.md)| 结束列 | [optional]
 **outputAnnotationsTitle** | [**string[]**](../Model/string.md)| 标题 | [optional]
 **outputAnnotationsRawDetails** | [**string[]**](../Model/string.md)| 详情内容 | [optional]
 **outputImagesCaption** | [**string[]**](../Model/string.md)| 描述 | [optional]
 **name** | **string**| 名字 | [optional]

### Return type

[**\Gitee\Model\CheckRun**](../Model/CheckRun.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postV5ReposOwnerRepoCheckRuns**
> \Gitee\Model\CheckRun postV5ReposOwnerRepoCheckRuns($owner, $repo, $outputTitle, $outputSummary, $outputAnnotationsPath, $outputAnnotationsStartLine, $outputAnnotationsEndLine, $outputAnnotationsAnnotationLevel, $outputAnnotationsMessage, $outputImagesAlt, $outputImagesImageUrl, $actionsLabel, $actionsDescription, $actionsIdentifier, $name, $headSha, $accessToken, $pullRequestId, $detailsUrl, $status, $startedAt, $conclusion, $completedAt, $outputText, $outputAnnotationsStartColumn, $outputAnnotationsEndColumn, $outputAnnotationsTitle, $outputAnnotationsRawDetails, $outputImagesCaption)

创建检查项

创建检查项

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\ChecksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$outputTitle = "outputTitle_example"; // string | 标题
$outputSummary = "outputSummary_example"; // string | 概论
$outputAnnotationsPath = array("outputAnnotationsPath_example"); // string[] | 路径
$outputAnnotationsStartLine = array(56); // int[] | 开始行
$outputAnnotationsEndLine = array(56); // int[] | 结束行
$outputAnnotationsAnnotationLevel = array("outputAnnotationsAnnotationLevel_example"); // string[] | 注释级别
$outputAnnotationsMessage = array("outputAnnotationsMessage_example"); // string[] | 注释信息
$outputImagesAlt = array("outputImagesAlt_example"); // string[] | 注释
$outputImagesImageUrl = array("outputImagesImageUrl_example"); // string[] | URL
$actionsLabel = array("actionsLabel_example"); // string[] | 文本
$actionsDescription = array("actionsDescription_example"); // string[] | 描述
$actionsIdentifier = array("actionsIdentifier_example"); // string[] | 标识
$name = "name_example"; // string | 名字
$headSha = "headSha_example"; // string | 提交的 sha 值（必须是完整的）
$accessToken = "accessToken_example"; // string | 用户授权码
$pullRequestId = 56; // int | PullRequest ID
$detailsUrl = "detailsUrl_example"; // string | 详情链接
$status = "queued"; // string | 状态
$startedAt = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 开始时间
$conclusion = "conclusion_example"; // string | 结论
$completedAt = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 完成时间
$outputText = "outputText_example"; // string | 详细信息
$outputAnnotationsStartColumn = array(56); // int[] | 开始列
$outputAnnotationsEndColumn = array(56); // int[] | 结束列
$outputAnnotationsTitle = array("outputAnnotationsTitle_example"); // string[] | 标题
$outputAnnotationsRawDetails = array("outputAnnotationsRawDetails_example"); // string[] | 详情内容
$outputImagesCaption = array("outputImagesCaption_example"); // string[] | 描述

try {
    $result = $apiInstance->postV5ReposOwnerRepoCheckRuns($owner, $repo, $outputTitle, $outputSummary, $outputAnnotationsPath, $outputAnnotationsStartLine, $outputAnnotationsEndLine, $outputAnnotationsAnnotationLevel, $outputAnnotationsMessage, $outputImagesAlt, $outputImagesImageUrl, $actionsLabel, $actionsDescription, $actionsIdentifier, $name, $headSha, $accessToken, $pullRequestId, $detailsUrl, $status, $startedAt, $conclusion, $completedAt, $outputText, $outputAnnotationsStartColumn, $outputAnnotationsEndColumn, $outputAnnotationsTitle, $outputAnnotationsRawDetails, $outputImagesCaption);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChecksApi->postV5ReposOwnerRepoCheckRuns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **outputTitle** | **string**| 标题 |
 **outputSummary** | **string**| 概论 |
 **outputAnnotationsPath** | [**string[]**](../Model/string.md)| 路径 |
 **outputAnnotationsStartLine** | [**int[]**](../Model/int.md)| 开始行 |
 **outputAnnotationsEndLine** | [**int[]**](../Model/int.md)| 结束行 |
 **outputAnnotationsAnnotationLevel** | [**string[]**](../Model/string.md)| 注释级别 |
 **outputAnnotationsMessage** | [**string[]**](../Model/string.md)| 注释信息 |
 **outputImagesAlt** | [**string[]**](../Model/string.md)| 注释 |
 **outputImagesImageUrl** | [**string[]**](../Model/string.md)| URL |
 **actionsLabel** | [**string[]**](../Model/string.md)| 文本 |
 **actionsDescription** | [**string[]**](../Model/string.md)| 描述 |
 **actionsIdentifier** | [**string[]**](../Model/string.md)| 标识 |
 **name** | **string**| 名字 |
 **headSha** | **string**| 提交的 sha 值（必须是完整的） |
 **accessToken** | **string**| 用户授权码 | [optional]
 **pullRequestId** | **int**| PullRequest ID | [optional]
 **detailsUrl** | **string**| 详情链接 | [optional]
 **status** | **string**| 状态 | [optional] [default to queued]
 **startedAt** | **\DateTime**| 开始时间 | [optional]
 **conclusion** | **string**| 结论 | [optional]
 **completedAt** | **\DateTime**| 完成时间 | [optional]
 **outputText** | **string**| 详细信息 | [optional]
 **outputAnnotationsStartColumn** | [**int[]**](../Model/int.md)| 开始列 | [optional]
 **outputAnnotationsEndColumn** | [**int[]**](../Model/int.md)| 结束列 | [optional]
 **outputAnnotationsTitle** | [**string[]**](../Model/string.md)| 标题 | [optional]
 **outputAnnotationsRawDetails** | [**string[]**](../Model/string.md)| 详情内容 | [optional]
 **outputImagesCaption** | [**string[]**](../Model/string.md)| 描述 | [optional]

### Return type

[**\Gitee\Model\CheckRun**](../Model/CheckRun.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

