# Gitee\MilestonesApi

All URIs are relative to *https://gitee.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteV5ReposOwnerRepoMilestonesNumber**](MilestonesApi.md#deleteV5ReposOwnerRepoMilestonesNumber) | **DELETE** /v5/repos/{owner}/{repo}/milestones/{number} | 删除仓库单个里程碑
[**getV5ReposOwnerRepoMilestones**](MilestonesApi.md#getV5ReposOwnerRepoMilestones) | **GET** /v5/repos/{owner}/{repo}/milestones | 获取仓库所有里程碑
[**getV5ReposOwnerRepoMilestonesNumber**](MilestonesApi.md#getV5ReposOwnerRepoMilestonesNumber) | **GET** /v5/repos/{owner}/{repo}/milestones/{number} | 获取仓库单个里程碑
[**patchV5ReposOwnerRepoMilestonesNumber**](MilestonesApi.md#patchV5ReposOwnerRepoMilestonesNumber) | **PATCH** /v5/repos/{owner}/{repo}/milestones/{number} | 更新仓库里程碑
[**postV5ReposOwnerRepoMilestones**](MilestonesApi.md#postV5ReposOwnerRepoMilestones) | **POST** /v5/repos/{owner}/{repo}/milestones | 创建仓库里程碑


# **deleteV5ReposOwnerRepoMilestonesNumber**
> deleteV5ReposOwnerRepoMilestonesNumber($owner, $repo, $number, $accessToken)

删除仓库单个里程碑

删除仓库单个里程碑

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\MilestonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$number = 56; // int | 里程碑序号(id)
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->deleteV5ReposOwnerRepoMilestonesNumber($owner, $repo, $number, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling MilestonesApi->deleteV5ReposOwnerRepoMilestonesNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **number** | **int**| 里程碑序号(id) |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5ReposOwnerRepoMilestones**
> \Gitee\Model\Milestone[] getV5ReposOwnerRepoMilestones($owner, $repo, $accessToken, $state, $sort, $direction, $page, $perPage)

获取仓库所有里程碑

获取仓库所有里程碑

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\MilestonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$accessToken = "accessToken_example"; // string | 用户授权码
$state = "open"; // string | 里程碑状态: open, closed, all。默认: open
$sort = "due_on"; // string | 排序方式: due_on
$direction = "direction_example"; // string | 升序(asc)或是降序(desc)。默认: asc
$page = 1; // int | 当前的页码
$perPage = 20; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getV5ReposOwnerRepoMilestones($owner, $repo, $accessToken, $state, $sort, $direction, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MilestonesApi->getV5ReposOwnerRepoMilestones: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **state** | **string**| 里程碑状态: open, closed, all。默认: open | [optional] [default to open]
 **sort** | **string**| 排序方式: due_on | [optional] [default to due_on]
 **direction** | **string**| 升序(asc)或是降序(desc)。默认: asc | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional] [default to 20]

### Return type

[**\Gitee\Model\Milestone[]**](../Model/Milestone.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5ReposOwnerRepoMilestonesNumber**
> \Gitee\Model\Milestone getV5ReposOwnerRepoMilestonesNumber($owner, $repo, $number, $accessToken)

获取仓库单个里程碑

获取仓库单个里程碑

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\MilestonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$number = 56; // int | 里程碑序号(id)
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->getV5ReposOwnerRepoMilestonesNumber($owner, $repo, $number, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MilestonesApi->getV5ReposOwnerRepoMilestonesNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **number** | **int**| 里程碑序号(id) |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\Gitee\Model\Milestone**](../Model/Milestone.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchV5ReposOwnerRepoMilestonesNumber**
> \Gitee\Model\Milestone patchV5ReposOwnerRepoMilestonesNumber($owner, $repo, $number, $title, $dueOn, $accessToken, $state, $description)

更新仓库里程碑

更新仓库里程碑

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\MilestonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$number = 56; // int | 里程碑序号(id)
$title = "title_example"; // string | 里程碑标题
$dueOn = "dueOn_example"; // string | 里程碑的截止日期
$accessToken = "accessToken_example"; // string | 用户授权码
$state = "open"; // string | 里程碑状态: open, closed, all。默认: open
$description = "description_example"; // string | 里程碑具体描述

try {
    $result = $apiInstance->patchV5ReposOwnerRepoMilestonesNumber($owner, $repo, $number, $title, $dueOn, $accessToken, $state, $description);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MilestonesApi->patchV5ReposOwnerRepoMilestonesNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **number** | **int**| 里程碑序号(id) |
 **title** | **string**| 里程碑标题 |
 **dueOn** | **string**| 里程碑的截止日期 |
 **accessToken** | **string**| 用户授权码 | [optional]
 **state** | **string**| 里程碑状态: open, closed, all。默认: open | [optional] [default to open]
 **description** | **string**| 里程碑具体描述 | [optional]

### Return type

[**\Gitee\Model\Milestone**](../Model/Milestone.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postV5ReposOwnerRepoMilestones**
> \Gitee\Model\Milestone postV5ReposOwnerRepoMilestones($owner, $repo, $title, $dueOn, $accessToken, $state, $description)

创建仓库里程碑

创建仓库里程碑

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\MilestonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$title = "title_example"; // string | 里程碑标题
$dueOn = "dueOn_example"; // string | 里程碑的截止日期
$accessToken = "accessToken_example"; // string | 用户授权码
$state = "open"; // string | 里程碑状态: open, closed, all。默认: open
$description = "description_example"; // string | 里程碑具体描述

try {
    $result = $apiInstance->postV5ReposOwnerRepoMilestones($owner, $repo, $title, $dueOn, $accessToken, $state, $description);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MilestonesApi->postV5ReposOwnerRepoMilestones: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **title** | **string**| 里程碑标题 |
 **dueOn** | **string**| 里程碑的截止日期 |
 **accessToken** | **string**| 用户授权码 | [optional]
 **state** | **string**| 里程碑状态: open, closed, all。默认: open | [optional] [default to open]
 **description** | **string**| 里程碑具体描述 | [optional]

### Return type

[**\Gitee\Model\Milestone**](../Model/Milestone.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

