# Gitee\GitDataApi

All URIs are relative to *https://gitee.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getV5ReposOwnerRepoGitBlobsSha**](GitDataApi.md#getV5ReposOwnerRepoGitBlobsSha) | **GET** /v5/repos/{owner}/{repo}/git/blobs/{sha} | 获取文件Blob
[**getV5ReposOwnerRepoGitGiteeMetrics**](GitDataApi.md#getV5ReposOwnerRepoGitGiteeMetrics) | **GET** /v5/repos/{owner}/{repo}/git/gitee_metrics | 获取 Gitee 指数
[**getV5ReposOwnerRepoGitTreesSha**](GitDataApi.md#getV5ReposOwnerRepoGitTreesSha) | **GET** /v5/repos/{owner}/{repo}/git/trees/{sha} | 获取目录Tree


# **getV5ReposOwnerRepoGitBlobsSha**
> \Gitee\Model\Blob getV5ReposOwnerRepoGitBlobsSha($owner, $repo, $sha, $accessToken)

获取文件Blob

获取文件Blob

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\GitDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$sha = "sha_example"; // string | 文件的 Blob SHA，可通过 [获取仓库具体路径下的内容] API 获取
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->getV5ReposOwnerRepoGitBlobsSha($owner, $repo, $sha, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GitDataApi->getV5ReposOwnerRepoGitBlobsSha: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **sha** | **string**| 文件的 Blob SHA，可通过 [获取仓库具体路径下的内容] API 获取 |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\Gitee\Model\Blob**](../Model/Blob.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5ReposOwnerRepoGitGiteeMetrics**
> \Gitee\Model\GiteeMetrics getV5ReposOwnerRepoGitGiteeMetrics($owner, $repo, $accessToken)

获取 Gitee 指数

获取 Gitee 指数

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\GitDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->getV5ReposOwnerRepoGitGiteeMetrics($owner, $repo, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GitDataApi->getV5ReposOwnerRepoGitGiteeMetrics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\Gitee\Model\GiteeMetrics**](../Model/GiteeMetrics.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5ReposOwnerRepoGitTreesSha**
> \Gitee\Model\Tree getV5ReposOwnerRepoGitTreesSha($owner, $repo, $sha, $accessToken, $recursive)

获取目录Tree

获取目录Tree

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\GitDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$sha = "sha_example"; // string | 可以是分支名(如master)、Commit或者目录Tree的SHA值
$accessToken = "accessToken_example"; // string | 用户授权码
$recursive = 56; // int | 赋值为1递归获取目录

try {
    $result = $apiInstance->getV5ReposOwnerRepoGitTreesSha($owner, $repo, $sha, $accessToken, $recursive);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GitDataApi->getV5ReposOwnerRepoGitTreesSha: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **sha** | **string**| 可以是分支名(如master)、Commit或者目录Tree的SHA值 |
 **accessToken** | **string**| 用户授权码 | [optional]
 **recursive** | **int**| 赋值为1递归获取目录 | [optional]

### Return type

[**\Gitee\Model\Tree**](../Model/Tree.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

