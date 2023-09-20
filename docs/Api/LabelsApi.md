# Gitee\LabelsApi

All URIs are relative to *https://gitee.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteV5ReposOwnerRepoIssuesNumberLabels**](LabelsApi.md#deleteV5ReposOwnerRepoIssuesNumberLabels) | **DELETE** /v5/repos/{owner}/{repo}/issues/{number}/labels | 删除Issue所有标签
[**deleteV5ReposOwnerRepoIssuesNumberLabelsName**](LabelsApi.md#deleteV5ReposOwnerRepoIssuesNumberLabelsName) | **DELETE** /v5/repos/{owner}/{repo}/issues/{number}/labels/{name} | 删除Issue标签
[**deleteV5ReposOwnerRepoLabelsName**](LabelsApi.md#deleteV5ReposOwnerRepoLabelsName) | **DELETE** /v5/repos/{owner}/{repo}/labels/{name} | 删除一个仓库任务标签
[**deleteV5ReposOwnerRepoProjectLabels**](LabelsApi.md#deleteV5ReposOwnerRepoProjectLabels) | **DELETE** /v5/repos/{owner}/{repo}/project_labels | 删除仓库标签
[**getV5EnterprisesEnterpriseLabels**](LabelsApi.md#getV5EnterprisesEnterpriseLabels) | **GET** /v5/enterprises/{enterprise}/labels | 获取企业所有标签
[**getV5EnterprisesEnterpriseLabelsName**](LabelsApi.md#getV5EnterprisesEnterpriseLabelsName) | **GET** /v5/enterprises/{enterprise}/labels/{name} | 获取企业某个标签
[**getV5ReposOwnerRepoIssuesNumberLabels**](LabelsApi.md#getV5ReposOwnerRepoIssuesNumberLabels) | **GET** /v5/repos/{owner}/{repo}/issues/{number}/labels | 获取仓库任务的所有标签
[**getV5ReposOwnerRepoLabels**](LabelsApi.md#getV5ReposOwnerRepoLabels) | **GET** /v5/repos/{owner}/{repo}/labels | 获取仓库所有任务标签
[**getV5ReposOwnerRepoLabelsName**](LabelsApi.md#getV5ReposOwnerRepoLabelsName) | **GET** /v5/repos/{owner}/{repo}/labels/{name} | 根据标签名称获取单个标签
[**patchV5ReposOwnerRepoLabelsOriginalName**](LabelsApi.md#patchV5ReposOwnerRepoLabelsOriginalName) | **PATCH** /v5/repos/{owner}/{repo}/labels/{original_name} | 更新一个仓库任务标签
[**postV5ReposOwnerRepoIssuesNumberLabels**](LabelsApi.md#postV5ReposOwnerRepoIssuesNumberLabels) | **POST** /v5/repos/{owner}/{repo}/issues/{number}/labels | 创建Issue标签
[**postV5ReposOwnerRepoLabels**](LabelsApi.md#postV5ReposOwnerRepoLabels) | **POST** /v5/repos/{owner}/{repo}/labels | 创建仓库任务标签
[**postV5ReposOwnerRepoProjectLabels**](LabelsApi.md#postV5ReposOwnerRepoProjectLabels) | **POST** /v5/repos/{owner}/{repo}/project_labels | 添加仓库标签
[**putV5ReposOwnerRepoIssuesNumberLabels**](LabelsApi.md#putV5ReposOwnerRepoIssuesNumberLabels) | **PUT** /v5/repos/{owner}/{repo}/issues/{number}/labels | 替换Issue所有标签
[**putV5ReposOwnerRepoProjectLabels**](LabelsApi.md#putV5ReposOwnerRepoProjectLabels) | **PUT** /v5/repos/{owner}/{repo}/project_labels | 替换所有仓库标签


# **deleteV5ReposOwnerRepoIssuesNumberLabels**
> deleteV5ReposOwnerRepoIssuesNumberLabels($owner, $repo, $number, $accessToken)

删除Issue所有标签

删除Issue所有标签

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\LabelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$number = "number_example"; // string | Issue 编号(区分大小写，无需添加 # 号)
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->deleteV5ReposOwnerRepoIssuesNumberLabels($owner, $repo, $number, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling LabelsApi->deleteV5ReposOwnerRepoIssuesNumberLabels: ', $e->getMessage(), PHP_EOL;
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

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteV5ReposOwnerRepoIssuesNumberLabelsName**
> deleteV5ReposOwnerRepoIssuesNumberLabelsName($owner, $repo, $number, $name, $accessToken)

删除Issue标签

删除Issue标签

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\LabelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$number = "number_example"; // string | Issue 编号(区分大小写，无需添加 # 号)
$name = "name_example"; // string | 标签名称(批量删除用英文逗号分隔，如: bug,feature)
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->deleteV5ReposOwnerRepoIssuesNumberLabelsName($owner, $repo, $number, $name, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling LabelsApi->deleteV5ReposOwnerRepoIssuesNumberLabelsName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **number** | **string**| Issue 编号(区分大小写，无需添加 # 号) |
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

# **deleteV5ReposOwnerRepoLabelsName**
> deleteV5ReposOwnerRepoLabelsName($owner, $repo, $name, $accessToken)

删除一个仓库任务标签

删除一个仓库任务标签

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\LabelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$name = "name_example"; // string | 标签名称
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->deleteV5ReposOwnerRepoLabelsName($owner, $repo, $name, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling LabelsApi->deleteV5ReposOwnerRepoLabelsName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **name** | **string**| 标签名称 |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteV5ReposOwnerRepoProjectLabels**
> deleteV5ReposOwnerRepoProjectLabels($owner, $repo, $body, $accessToken)

删除仓库标签

删除仓库标签

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\LabelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$body = array(new \Gitee\Model\string[]()); // string[] | 标签名数组，如: [\"feat\", \"bug\"]
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->deleteV5ReposOwnerRepoProjectLabels($owner, $repo, $body, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling LabelsApi->deleteV5ReposOwnerRepoProjectLabels: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **body** | **string[]**| 标签名数组，如: [\&quot;feat\&quot;, \&quot;bug\&quot;] |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5EnterprisesEnterpriseLabels**
> \Gitee\Model\Label[] getV5EnterprisesEnterpriseLabels($enterprise, $accessToken)

获取企业所有标签

获取企业所有标签

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\LabelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterprise = "enterprise_example"; // string | 企业的路径(path/login)
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->getV5EnterprisesEnterpriseLabels($enterprise, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LabelsApi->getV5EnterprisesEnterpriseLabels: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterprise** | **string**| 企业的路径(path/login) |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\Gitee\Model\Label[]**](../Model/Label.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5EnterprisesEnterpriseLabelsName**
> \Gitee\Model\Label getV5EnterprisesEnterpriseLabelsName($enterprise, $name, $accessToken)

获取企业某个标签

获取企业某个标签

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\LabelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterprise = "enterprise_example"; // string | 企业的路径(path/login)
$name = "name_example"; // string | 标签名称
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->getV5EnterprisesEnterpriseLabelsName($enterprise, $name, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LabelsApi->getV5EnterprisesEnterpriseLabelsName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterprise** | **string**| 企业的路径(path/login) |
 **name** | **string**| 标签名称 |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\Gitee\Model\Label**](../Model/Label.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5ReposOwnerRepoIssuesNumberLabels**
> \Gitee\Model\Label[] getV5ReposOwnerRepoIssuesNumberLabels($owner, $repo, $number, $accessToken)

获取仓库任务的所有标签

获取仓库任务的所有标签

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\LabelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$number = "number_example"; // string | Issue 编号(区分大小写，无需添加 # 号)
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->getV5ReposOwnerRepoIssuesNumberLabels($owner, $repo, $number, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LabelsApi->getV5ReposOwnerRepoIssuesNumberLabels: ', $e->getMessage(), PHP_EOL;
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

[**\Gitee\Model\Label[]**](../Model/Label.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5ReposOwnerRepoLabels**
> \Gitee\Model\Label[] getV5ReposOwnerRepoLabels($owner, $repo, $accessToken)

获取仓库所有任务标签

获取仓库所有任务标签

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\LabelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->getV5ReposOwnerRepoLabels($owner, $repo, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LabelsApi->getV5ReposOwnerRepoLabels: ', $e->getMessage(), PHP_EOL;
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

[**\Gitee\Model\Label[]**](../Model/Label.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5ReposOwnerRepoLabelsName**
> \Gitee\Model\Label getV5ReposOwnerRepoLabelsName($owner, $repo, $name, $accessToken)

根据标签名称获取单个标签

根据标签名称获取单个标签

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\LabelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$name = "name_example"; // string | 标签名称
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->getV5ReposOwnerRepoLabelsName($owner, $repo, $name, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LabelsApi->getV5ReposOwnerRepoLabelsName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **name** | **string**| 标签名称 |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\Gitee\Model\Label**](../Model/Label.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchV5ReposOwnerRepoLabelsOriginalName**
> \Gitee\Model\Label patchV5ReposOwnerRepoLabelsOriginalName($owner, $repo, $originalName, $accessToken, $name, $color)

更新一个仓库任务标签

更新一个仓库任务标签

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\LabelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$originalName = "originalName_example"; // string | 标签原有名称
$accessToken = "accessToken_example"; // string | 用户授权码
$name = "name_example"; // string | 标签新名称
$color = "color_example"; // string | 标签新颜色

try {
    $result = $apiInstance->patchV5ReposOwnerRepoLabelsOriginalName($owner, $repo, $originalName, $accessToken, $name, $color);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LabelsApi->patchV5ReposOwnerRepoLabelsOriginalName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **originalName** | **string**| 标签原有名称 |
 **accessToken** | **string**| 用户授权码 | [optional]
 **name** | **string**| 标签新名称 | [optional]
 **color** | **string**| 标签新颜色 | [optional]

### Return type

[**\Gitee\Model\Label**](../Model/Label.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postV5ReposOwnerRepoIssuesNumberLabels**
> \Gitee\Model\Label postV5ReposOwnerRepoIssuesNumberLabels($owner, $repo, $number, $body, $accessToken)

创建Issue标签

创建Issue标签  需要在请求的body里填上数组，元素为标签的名字。如: [\"performance\", \"bug\"]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\LabelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$number = "number_example"; // string | Issue 编号(区分大小写，无需添加 # 号)
$body = array(new \Gitee\Model\string[]()); // string[] | 标签名数组，如: [\"feat\", \"bug\"]
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->postV5ReposOwnerRepoIssuesNumberLabels($owner, $repo, $number, $body, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LabelsApi->postV5ReposOwnerRepoIssuesNumberLabels: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **number** | **string**| Issue 编号(区分大小写，无需添加 # 号) |
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

# **postV5ReposOwnerRepoLabels**
> \Gitee\Model\Label postV5ReposOwnerRepoLabels($owner, $repo, $name, $color, $accessToken)

创建仓库任务标签

创建仓库任务标签

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\LabelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$name = "name_example"; // string | 标签名称
$color = "color_example"; // string | 标签颜色。为6位的数字，如: 000000
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->postV5ReposOwnerRepoLabels($owner, $repo, $name, $color, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LabelsApi->postV5ReposOwnerRepoLabels: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **name** | **string**| 标签名称 |
 **color** | **string**| 标签颜色。为6位的数字，如: 000000 |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\Gitee\Model\Label**](../Model/Label.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postV5ReposOwnerRepoProjectLabels**
> \Gitee\Model\ProjectLabel postV5ReposOwnerRepoProjectLabels($owner, $repo, $body, $accessToken)

添加仓库标签

添加仓库标签

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\LabelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$body = array(new \Gitee\Model\string[]()); // string[] | 标签名数组，如: [\"feat\", \"bug\"]
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->postV5ReposOwnerRepoProjectLabels($owner, $repo, $body, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LabelsApi->postV5ReposOwnerRepoProjectLabels: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **body** | **string[]**| 标签名数组，如: [\&quot;feat\&quot;, \&quot;bug\&quot;] |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\Gitee\Model\ProjectLabel**](../Model/ProjectLabel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putV5ReposOwnerRepoIssuesNumberLabels**
> \Gitee\Model\Label putV5ReposOwnerRepoIssuesNumberLabels($owner, $repo, $number, $body, $accessToken)

替换Issue所有标签

替换Issue所有标签  需要在请求的body里填上数组，元素为标签的名字。如: [\"performance\", \"bug\"]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\LabelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$number = "number_example"; // string | Issue 编号(区分大小写，无需添加 # 号)
$body = array(new \Gitee\Model\string[]()); // string[] | 标签名数组，如: [\"feat\", \"bug\"]
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->putV5ReposOwnerRepoIssuesNumberLabels($owner, $repo, $number, $body, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LabelsApi->putV5ReposOwnerRepoIssuesNumberLabels: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **number** | **string**| Issue 编号(区分大小写，无需添加 # 号) |
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

# **putV5ReposOwnerRepoProjectLabels**
> \Gitee\Model\ProjectLabel putV5ReposOwnerRepoProjectLabels($owner, $repo, $body, $accessToken)

替换所有仓库标签

替换所有仓库标签

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\LabelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$body = array(new \Gitee\Model\string[]()); // string[] | 标签名数组，如: [\"feat\", \"bug\"]
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->putV5ReposOwnerRepoProjectLabels($owner, $repo, $body, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LabelsApi->putV5ReposOwnerRepoProjectLabels: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **body** | **string[]**| 标签名数组，如: [\&quot;feat\&quot;, \&quot;bug\&quot;] |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\Gitee\Model\ProjectLabel**](../Model/ProjectLabel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

