# Gitee\MiscellaneousApi

All URIs are relative to *https://gitee.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getV5Emojis**](MiscellaneousApi.md#getV5Emojis) | **GET** /v5/emojis | 列出可使用的 Emoji
[**getV5GitignoreTemplates**](MiscellaneousApi.md#getV5GitignoreTemplates) | **GET** /v5/gitignore/templates | 列出可使用的 .gitignore 模板
[**getV5GitignoreTemplatesName**](MiscellaneousApi.md#getV5GitignoreTemplatesName) | **GET** /v5/gitignore/templates/{name} | 获取一个 .gitignore 模板
[**getV5GitignoreTemplatesNameRaw**](MiscellaneousApi.md#getV5GitignoreTemplatesNameRaw) | **GET** /v5/gitignore/templates/{name}/raw | 获取一个 .gitignore 模板原始文件
[**getV5Licenses**](MiscellaneousApi.md#getV5Licenses) | **GET** /v5/licenses | 列出可使用的开源许可协议
[**getV5LicensesLicense**](MiscellaneousApi.md#getV5LicensesLicense) | **GET** /v5/licenses/{license} | 获取一个开源许可协议
[**getV5LicensesLicenseRaw**](MiscellaneousApi.md#getV5LicensesLicenseRaw) | **GET** /v5/licenses/{license}/raw | 获取一个开源许可协议原始文件
[**getV5ReposOwnerRepoLicense**](MiscellaneousApi.md#getV5ReposOwnerRepoLicense) | **GET** /v5/repos/{owner}/{repo}/license | 获取一个仓库使用的开源许可协议
[**postV5Markdown**](MiscellaneousApi.md#postV5Markdown) | **POST** /v5/markdown | 渲染 Markdown 文本


# **getV5Emojis**
> getV5Emojis($accessToken)

列出可使用的 Emoji

列出可使用的 Emoji

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\MiscellaneousApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->getV5Emojis($accessToken);
} catch (Exception $e) {
    echo 'Exception when calling MiscellaneousApi->getV5Emojis: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5GitignoreTemplates**
> getV5GitignoreTemplates($accessToken)

列出可使用的 .gitignore 模板

列出可使用的 .gitignore 模板

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\MiscellaneousApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->getV5GitignoreTemplates($accessToken);
} catch (Exception $e) {
    echo 'Exception when calling MiscellaneousApi->getV5GitignoreTemplates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5GitignoreTemplatesName**
> getV5GitignoreTemplatesName($name, $accessToken)

获取一个 .gitignore 模板

获取一个 .gitignore 模板

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\MiscellaneousApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | .gitignore 模板名
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->getV5GitignoreTemplatesName($name, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling MiscellaneousApi->getV5GitignoreTemplatesName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| .gitignore 模板名 |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5GitignoreTemplatesNameRaw**
> getV5GitignoreTemplatesNameRaw($name, $accessToken)

获取一个 .gitignore 模板原始文件

获取一个 .gitignore 模板原始文件

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\MiscellaneousApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | .gitignore 模板名
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->getV5GitignoreTemplatesNameRaw($name, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling MiscellaneousApi->getV5GitignoreTemplatesNameRaw: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| .gitignore 模板名 |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5Licenses**
> getV5Licenses($accessToken)

列出可使用的开源许可协议

列出可使用的开源许可协议

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\MiscellaneousApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->getV5Licenses($accessToken);
} catch (Exception $e) {
    echo 'Exception when calling MiscellaneousApi->getV5Licenses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5LicensesLicense**
> getV5LicensesLicense($license, $accessToken)

获取一个开源许可协议

获取一个开源许可协议

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\MiscellaneousApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$license = "license_example"; // string | 协议名称
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->getV5LicensesLicense($license, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling MiscellaneousApi->getV5LicensesLicense: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **license** | **string**| 协议名称 |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5LicensesLicenseRaw**
> getV5LicensesLicenseRaw($license, $accessToken)

获取一个开源许可协议原始文件

获取一个开源许可协议原始文件

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\MiscellaneousApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$license = "license_example"; // string | 协议名称
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->getV5LicensesLicenseRaw($license, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling MiscellaneousApi->getV5LicensesLicenseRaw: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **license** | **string**| 协议名称 |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5ReposOwnerRepoLicense**
> getV5ReposOwnerRepoLicense($owner, $repo, $accessToken)

获取一个仓库使用的开源许可协议

获取一个仓库使用的开源许可协议

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\MiscellaneousApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->getV5ReposOwnerRepoLicense($owner, $repo, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling MiscellaneousApi->getV5ReposOwnerRepoLicense: ', $e->getMessage(), PHP_EOL;
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

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postV5Markdown**
> postV5Markdown($text, $accessToken)

渲染 Markdown 文本

渲染 Markdown 文本

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\MiscellaneousApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$text = "text_example"; // string | Markdown 文本
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->postV5Markdown($text, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling MiscellaneousApi->postV5Markdown: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **text** | **string**| Markdown 文本 |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

