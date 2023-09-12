# Gitee\WebhooksApi

All URIs are relative to *https://gitee.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteV5ReposOwnerRepoHooksId**](WebhooksApi.md#deleteV5ReposOwnerRepoHooksId) | **DELETE** /v5/repos/{owner}/{repo}/hooks/{id} | 删除一个仓库WebHook
[**getV5ReposOwnerRepoHooks**](WebhooksApi.md#getV5ReposOwnerRepoHooks) | **GET** /v5/repos/{owner}/{repo}/hooks | 列出仓库的WebHooks
[**getV5ReposOwnerRepoHooksId**](WebhooksApi.md#getV5ReposOwnerRepoHooksId) | **GET** /v5/repos/{owner}/{repo}/hooks/{id} | 获取仓库单个WebHook
[**patchV5ReposOwnerRepoHooksId**](WebhooksApi.md#patchV5ReposOwnerRepoHooksId) | **PATCH** /v5/repos/{owner}/{repo}/hooks/{id} | 更新一个仓库WebHook
[**postV5ReposOwnerRepoHooks**](WebhooksApi.md#postV5ReposOwnerRepoHooks) | **POST** /v5/repos/{owner}/{repo}/hooks | 创建一个仓库WebHook
[**postV5ReposOwnerRepoHooksIdTests**](WebhooksApi.md#postV5ReposOwnerRepoHooksIdTests) | **POST** /v5/repos/{owner}/{repo}/hooks/{id}/tests | 测试WebHook是否发送成功


# **deleteV5ReposOwnerRepoHooksId**
> deleteV5ReposOwnerRepoHooksId($owner, $repo, $id, $accessToken)

删除一个仓库WebHook

删除一个仓库WebHook

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$id = 56; // int | Webhook的ID
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->deleteV5ReposOwnerRepoHooksId($owner, $repo, $id, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->deleteV5ReposOwnerRepoHooksId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **id** | **int**| Webhook的ID |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5ReposOwnerRepoHooks**
> \Gitee\Model\Hook[] getV5ReposOwnerRepoHooks($owner, $repo, $accessToken, $page, $perPage)

列出仓库的WebHooks

列出仓库的WebHooks

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$accessToken = "accessToken_example"; // string | 用户授权码
$page = 1; // int | 当前的页码
$perPage = 20; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getV5ReposOwnerRepoHooks($owner, $repo, $accessToken, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->getV5ReposOwnerRepoHooks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional] [default to 20]

### Return type

[**\Gitee\Model\Hook[]**](../Model/Hook.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5ReposOwnerRepoHooksId**
> \Gitee\Model\Hook getV5ReposOwnerRepoHooksId($owner, $repo, $id, $accessToken)

获取仓库单个WebHook

获取仓库单个WebHook

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$id = 56; // int | Webhook的ID
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->getV5ReposOwnerRepoHooksId($owner, $repo, $id, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->getV5ReposOwnerRepoHooksId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **id** | **int**| Webhook的ID |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\Gitee\Model\Hook**](../Model/Hook.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchV5ReposOwnerRepoHooksId**
> \Gitee\Model\Hook patchV5ReposOwnerRepoHooksId($owner, $repo, $id, $url, $accessToken, $encryptionType, $password, $pushEvents, $tagPushEvents, $issuesEvents, $noteEvents, $mergeRequestsEvents)

更新一个仓库WebHook

更新一个仓库WebHook

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$id = 56; // int | Webhook的ID
$url = "url_example"; // string | 远程HTTP URL
$accessToken = "accessToken_example"; // string | 用户授权码
$encryptionType = 56; // int | 加密类型: 0: 密码, 1: 签名密钥
$password = "password_example"; // string | 请求URL时会带上该密码，防止URL被恶意请求
$pushEvents = true; // bool | Push代码到仓库
$tagPushEvents = true; // bool | 提交Tag到仓库
$issuesEvents = true; // bool | 创建/关闭Issue
$noteEvents = true; // bool | 评论了Issue/代码等等
$mergeRequestsEvents = true; // bool | 合并请求和合并后

try {
    $result = $apiInstance->patchV5ReposOwnerRepoHooksId($owner, $repo, $id, $url, $accessToken, $encryptionType, $password, $pushEvents, $tagPushEvents, $issuesEvents, $noteEvents, $mergeRequestsEvents);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->patchV5ReposOwnerRepoHooksId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **id** | **int**| Webhook的ID |
 **url** | **string**| 远程HTTP URL |
 **accessToken** | **string**| 用户授权码 | [optional]
 **encryptionType** | **int**| 加密类型: 0: 密码, 1: 签名密钥 | [optional]
 **password** | **string**| 请求URL时会带上该密码，防止URL被恶意请求 | [optional]
 **pushEvents** | **bool**| Push代码到仓库 | [optional] [default to true]
 **tagPushEvents** | **bool**| 提交Tag到仓库 | [optional]
 **issuesEvents** | **bool**| 创建/关闭Issue | [optional]
 **noteEvents** | **bool**| 评论了Issue/代码等等 | [optional]
 **mergeRequestsEvents** | **bool**| 合并请求和合并后 | [optional]

### Return type

[**\Gitee\Model\Hook**](../Model/Hook.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postV5ReposOwnerRepoHooks**
> \Gitee\Model\Hook postV5ReposOwnerRepoHooks($owner, $repo, $url, $accessToken, $encryptionType, $password, $pushEvents, $tagPushEvents, $issuesEvents, $noteEvents, $mergeRequestsEvents)

创建一个仓库WebHook

创建一个仓库WebHook

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$url = "url_example"; // string | 远程HTTP URL
$accessToken = "accessToken_example"; // string | 用户授权码
$encryptionType = 56; // int | 加密类型: 0: 密码, 1: 签名密钥
$password = "password_example"; // string | 请求URL时会带上该密码，防止URL被恶意请求
$pushEvents = true; // bool | Push代码到仓库
$tagPushEvents = true; // bool | 提交Tag到仓库
$issuesEvents = true; // bool | 创建/关闭Issue
$noteEvents = true; // bool | 评论了Issue/代码等等
$mergeRequestsEvents = true; // bool | 合并请求和合并后

try {
    $result = $apiInstance->postV5ReposOwnerRepoHooks($owner, $repo, $url, $accessToken, $encryptionType, $password, $pushEvents, $tagPushEvents, $issuesEvents, $noteEvents, $mergeRequestsEvents);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->postV5ReposOwnerRepoHooks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **url** | **string**| 远程HTTP URL |
 **accessToken** | **string**| 用户授权码 | [optional]
 **encryptionType** | **int**| 加密类型: 0: 密码, 1: 签名密钥 | [optional]
 **password** | **string**| 请求URL时会带上该密码，防止URL被恶意请求 | [optional]
 **pushEvents** | **bool**| Push代码到仓库 | [optional] [default to true]
 **tagPushEvents** | **bool**| 提交Tag到仓库 | [optional]
 **issuesEvents** | **bool**| 创建/关闭Issue | [optional]
 **noteEvents** | **bool**| 评论了Issue/代码等等 | [optional]
 **mergeRequestsEvents** | **bool**| 合并请求和合并后 | [optional]

### Return type

[**\Gitee\Model\Hook**](../Model/Hook.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postV5ReposOwnerRepoHooksIdTests**
> postV5ReposOwnerRepoHooksIdTests($owner, $repo, $id, $accessToken)

测试WebHook是否发送成功

测试WebHook是否发送成功

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$id = 56; // int | Webhook的ID
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->postV5ReposOwnerRepoHooksIdTests($owner, $repo, $id, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->postV5ReposOwnerRepoHooksIdTests: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **id** | **int**| Webhook的ID |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

