# Gitee\GistsApi

All URIs are relative to *https://gitee.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteV5GistsGistIdCommentsId**](GistsApi.md#deleteV5GistsGistIdCommentsId) | **DELETE** /v5/gists/{gist_id}/comments/{id} | 删除代码片段的评论
[**deleteV5GistsId**](GistsApi.md#deleteV5GistsId) | **DELETE** /v5/gists/{id} | 删除指定代码片段
[**deleteV5GistsIdStar**](GistsApi.md#deleteV5GistsIdStar) | **DELETE** /v5/gists/{id}/star | 取消Star代码片段
[**getV5Gists**](GistsApi.md#getV5Gists) | **GET** /v5/gists | 获取代码片段
[**getV5GistsGistIdComments**](GistsApi.md#getV5GistsGistIdComments) | **GET** /v5/gists/{gist_id}/comments | 获取代码片段的评论
[**getV5GistsGistIdCommentsId**](GistsApi.md#getV5GistsGistIdCommentsId) | **GET** /v5/gists/{gist_id}/comments/{id} | 获取单条代码片段的评论
[**getV5GistsId**](GistsApi.md#getV5GistsId) | **GET** /v5/gists/{id} | 获取单条代码片段
[**getV5GistsIdCommits**](GistsApi.md#getV5GistsIdCommits) | **GET** /v5/gists/{id}/commits | 获取代码片段的commit
[**getV5GistsIdForks**](GistsApi.md#getV5GistsIdForks) | **GET** /v5/gists/{id}/forks | 获取 Fork 了指定代码片段的列表
[**getV5GistsIdStar**](GistsApi.md#getV5GistsIdStar) | **GET** /v5/gists/{id}/star | 判断代码片段是否已Star
[**getV5GistsStarred**](GistsApi.md#getV5GistsStarred) | **GET** /v5/gists/starred | 获取用户Star的代码片段
[**patchV5GistsGistIdCommentsId**](GistsApi.md#patchV5GistsGistIdCommentsId) | **PATCH** /v5/gists/{gist_id}/comments/{id} | 修改代码片段的评论
[**patchV5GistsId**](GistsApi.md#patchV5GistsId) | **PATCH** /v5/gists/{id} | 修改代码片段
[**postV5Gists**](GistsApi.md#postV5Gists) | **POST** /v5/gists | 创建代码片段
[**postV5GistsGistIdComments**](GistsApi.md#postV5GistsGistIdComments) | **POST** /v5/gists/{gist_id}/comments | 增加代码片段的评论
[**postV5GistsIdForks**](GistsApi.md#postV5GistsIdForks) | **POST** /v5/gists/{id}/forks | Fork代码片段
[**putV5GistsIdStar**](GistsApi.md#putV5GistsIdStar) | **PUT** /v5/gists/{id}/star | Star代码片段


# **deleteV5GistsGistIdCommentsId**
> deleteV5GistsGistIdCommentsId($gistId, $id, $accessToken)

删除代码片段的评论

删除代码片段的评论

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\GistsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$gistId = "gistId_example"; // string | 代码片段的ID
$id = 56; // int | 评论的ID
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->deleteV5GistsGistIdCommentsId($gistId, $id, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling GistsApi->deleteV5GistsGistIdCommentsId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gistId** | **string**| 代码片段的ID |
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

# **deleteV5GistsId**
> deleteV5GistsId($id, $accessToken)

删除指定代码片段

删除指定代码片段

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\GistsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 代码片段的ID
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->deleteV5GistsId($id, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling GistsApi->deleteV5GistsId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| 代码片段的ID |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteV5GistsIdStar**
> deleteV5GistsIdStar($id, $accessToken)

取消Star代码片段

取消Star代码片段

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\GistsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 代码片段的ID
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->deleteV5GistsIdStar($id, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling GistsApi->deleteV5GistsIdStar: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| 代码片段的ID |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5Gists**
> \Gitee\Model\Code[] getV5Gists($accessToken, $since, $page, $perPage)

获取代码片段

获取代码片段

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\GistsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accessToken = "accessToken_example"; // string | 用户授权码
$since = "since_example"; // string | 起始的更新时间，要求时间格式为 ISO 8601
$page = 1; // int | 当前的页码
$perPage = 20; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getV5Gists($accessToken, $since, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GistsApi->getV5Gists: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accessToken** | **string**| 用户授权码 | [optional]
 **since** | **string**| 起始的更新时间，要求时间格式为 ISO 8601 | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional] [default to 20]

### Return type

[**\Gitee\Model\Code[]**](../Model/Code.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5GistsGistIdComments**
> \Gitee\Model\CodeComment[] getV5GistsGistIdComments($gistId, $accessToken, $page, $perPage)

获取代码片段的评论

获取代码片段的评论

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\GistsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$gistId = "gistId_example"; // string | 代码片段的ID
$accessToken = "accessToken_example"; // string | 用户授权码
$page = 1; // int | 当前的页码
$perPage = 20; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getV5GistsGistIdComments($gistId, $accessToken, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GistsApi->getV5GistsGistIdComments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gistId** | **string**| 代码片段的ID |
 **accessToken** | **string**| 用户授权码 | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional] [default to 20]

### Return type

[**\Gitee\Model\CodeComment[]**](../Model/CodeComment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5GistsGistIdCommentsId**
> \Gitee\Model\CodeComment getV5GistsGistIdCommentsId($gistId, $id, $accessToken)

获取单条代码片段的评论

获取单条代码片段的评论

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\GistsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$gistId = "gistId_example"; // string | 代码片段的ID
$id = 56; // int | 评论的ID
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->getV5GistsGistIdCommentsId($gistId, $id, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GistsApi->getV5GistsGistIdCommentsId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gistId** | **string**| 代码片段的ID |
 **id** | **int**| 评论的ID |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\Gitee\Model\CodeComment**](../Model/CodeComment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5GistsId**
> \Gitee\Model\CodeForksHistory getV5GistsId($id, $accessToken)

获取单条代码片段

获取单条代码片段

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\GistsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 代码片段的ID
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->getV5GistsId($id, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GistsApi->getV5GistsId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| 代码片段的ID |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\Gitee\Model\CodeForksHistory**](../Model/CodeForksHistory.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5GistsIdCommits**
> \Gitee\Model\CodeForksHistory getV5GistsIdCommits($id, $accessToken)

获取代码片段的commit

获取代码片段的commit

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\GistsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 代码片段的ID
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->getV5GistsIdCommits($id, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GistsApi->getV5GistsIdCommits: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| 代码片段的ID |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\Gitee\Model\CodeForksHistory**](../Model/CodeForksHistory.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5GistsIdForks**
> \Gitee\Model\CodeForks getV5GistsIdForks($id, $accessToken, $page, $perPage)

获取 Fork 了指定代码片段的列表

获取 Fork 了指定代码片段的列表

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\GistsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 代码片段的ID
$accessToken = "accessToken_example"; // string | 用户授权码
$page = 1; // int | 当前的页码
$perPage = 20; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getV5GistsIdForks($id, $accessToken, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GistsApi->getV5GistsIdForks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| 代码片段的ID |
 **accessToken** | **string**| 用户授权码 | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional] [default to 20]

### Return type

[**\Gitee\Model\CodeForks**](../Model/CodeForks.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5GistsIdStar**
> getV5GistsIdStar($id, $accessToken)

判断代码片段是否已Star

判断代码片段是否已Star

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\GistsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 代码片段的ID
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->getV5GistsIdStar($id, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling GistsApi->getV5GistsIdStar: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| 代码片段的ID |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5GistsStarred**
> \Gitee\Model\Code[] getV5GistsStarred($accessToken, $since, $page, $perPage)

获取用户Star的代码片段

获取用户Star的代码片段

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\GistsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accessToken = "accessToken_example"; // string | 用户授权码
$since = "since_example"; // string | 起始的更新时间，要求时间格式为 ISO 8601
$page = 1; // int | 当前的页码
$perPage = 20; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getV5GistsStarred($accessToken, $since, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GistsApi->getV5GistsStarred: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accessToken** | **string**| 用户授权码 | [optional]
 **since** | **string**| 起始的更新时间，要求时间格式为 ISO 8601 | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional] [default to 20]

### Return type

[**\Gitee\Model\Code[]**](../Model/Code.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchV5GistsGistIdCommentsId**
> \Gitee\Model\CodeComment patchV5GistsGistIdCommentsId($gistId, $id, $body, $accessToken)

修改代码片段的评论

修改代码片段的评论

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\GistsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$gistId = "gistId_example"; // string | 代码片段的ID
$id = 56; // int | 评论的ID
$body = "body_example"; // string | 评论内容
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->patchV5GistsGistIdCommentsId($gistId, $id, $body, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GistsApi->patchV5GistsGistIdCommentsId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gistId** | **string**| 代码片段的ID |
 **id** | **int**| 评论的ID |
 **body** | **string**| 评论内容 |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\Gitee\Model\CodeComment**](../Model/CodeComment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchV5GistsId**
> \Gitee\Model\CodeForksHistory patchV5GistsId($id, $accessToken, $files, $description)

修改代码片段

修改代码片段

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\GistsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 代码片段的ID
$accessToken = "accessToken_example"; // string | 用户授权码
$files = array("files_example"); // string[] | Hash形式的代码片段文件名以及文件内容。如: { \"file1.txt\": { \"content\": \"String file contents\" } }
$description = "description_example"; // string | 代码片段描述，1~30个字符

try {
    $result = $apiInstance->patchV5GistsId($id, $accessToken, $files, $description);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GistsApi->patchV5GistsId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| 代码片段的ID |
 **accessToken** | **string**| 用户授权码 | [optional]
 **files** | [**string[]**](../Model/string.md)| Hash形式的代码片段文件名以及文件内容。如: { \&quot;file1.txt\&quot;: { \&quot;content\&quot;: \&quot;String file contents\&quot; } } | [optional]
 **description** | **string**| 代码片段描述，1~30个字符 | [optional]

### Return type

[**\Gitee\Model\CodeForksHistory**](../Model/CodeForksHistory.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postV5Gists**
> \Gitee\Model\CodeForksHistory[] postV5Gists($files, $description, $accessToken, $public)

创建代码片段

创建代码片段

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\GistsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$files = array("files_example"); // string[] | Hash形式的代码片段文件名以及文件内容。如: { \"file1.txt\": { \"content\": \"String file contents\" } }
$description = "description_example"; // string | 代码片段描述，1~30个字符
$accessToken = "accessToken_example"; // string | 用户授权码
$public = true; // bool | 公开/私有，默认: 私有

try {
    $result = $apiInstance->postV5Gists($files, $description, $accessToken, $public);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GistsApi->postV5Gists: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**string[]**](../Model/string.md)| Hash形式的代码片段文件名以及文件内容。如: { \&quot;file1.txt\&quot;: { \&quot;content\&quot;: \&quot;String file contents\&quot; } } |
 **description** | **string**| 代码片段描述，1~30个字符 |
 **accessToken** | **string**| 用户授权码 | [optional]
 **public** | **bool**| 公开/私有，默认: 私有 | [optional]

### Return type

[**\Gitee\Model\CodeForksHistory[]**](../Model/CodeForksHistory.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postV5GistsGistIdComments**
> \Gitee\Model\CodeComment postV5GistsGistIdComments($gistId, $body, $accessToken)

增加代码片段的评论

增加代码片段的评论

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\GistsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$gistId = "gistId_example"; // string | 代码片段的ID
$body = "body_example"; // string | 评论内容
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->postV5GistsGistIdComments($gistId, $body, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GistsApi->postV5GistsGistIdComments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gistId** | **string**| 代码片段的ID |
 **body** | **string**| 评论内容 |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\Gitee\Model\CodeComment**](../Model/CodeComment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postV5GistsIdForks**
> postV5GistsIdForks($id, $accessToken)

Fork代码片段

Fork代码片段

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\GistsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 代码片段的ID
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->postV5GistsIdForks($id, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling GistsApi->postV5GistsIdForks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| 代码片段的ID |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putV5GistsIdStar**
> putV5GistsIdStar($id, $accessToken)

Star代码片段

Star代码片段

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\GistsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 代码片段的ID
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->putV5GistsIdStar($id, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling GistsApi->putV5GistsIdStar: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| 代码片段的ID |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

