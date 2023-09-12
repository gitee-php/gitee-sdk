# Gitee\UsersApi

All URIs are relative to *https://gitee.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteV5UserFollowingUsername**](UsersApi.md#deleteV5UserFollowingUsername) | **DELETE** /v5/user/following/{username} | 取消关注一个用户
[**deleteV5UserKeysId**](UsersApi.md#deleteV5UserKeysId) | **DELETE** /v5/user/keys/{id} | 删除一个公钥
[**getV5User**](UsersApi.md#getV5User) | **GET** /v5/user | 获取授权用户的资料
[**getV5UserFollowers**](UsersApi.md#getV5UserFollowers) | **GET** /v5/user/followers | 列出授权用户的关注者
[**getV5UserFollowing**](UsersApi.md#getV5UserFollowing) | **GET** /v5/user/following | 列出授权用户正关注的用户
[**getV5UserFollowingUsername**](UsersApi.md#getV5UserFollowingUsername) | **GET** /v5/user/following/{username} | 检查授权用户是否关注了一个用户
[**getV5UserKeys**](UsersApi.md#getV5UserKeys) | **GET** /v5/user/keys | 列出授权用户的所有公钥
[**getV5UserKeysId**](UsersApi.md#getV5UserKeysId) | **GET** /v5/user/keys/{id} | 获取一个公钥
[**getV5UserNamespace**](UsersApi.md#getV5UserNamespace) | **GET** /v5/user/namespace | 获取授权用户的一个 Namespace
[**getV5UserNamespaces**](UsersApi.md#getV5UserNamespaces) | **GET** /v5/user/namespaces | 列出授权用户所有的 Namespace
[**getV5UsersUsername**](UsersApi.md#getV5UsersUsername) | **GET** /v5/users/{username} | 获取一个用户
[**getV5UsersUsernameFollowers**](UsersApi.md#getV5UsersUsernameFollowers) | **GET** /v5/users/{username}/followers | 列出指定用户的关注者
[**getV5UsersUsernameFollowing**](UsersApi.md#getV5UsersUsernameFollowing) | **GET** /v5/users/{username}/following | 列出指定用户正在关注的用户
[**getV5UsersUsernameFollowingTargetUser**](UsersApi.md#getV5UsersUsernameFollowingTargetUser) | **GET** /v5/users/{username}/following/{target_user} | 检查指定用户是否关注目标用户
[**getV5UsersUsernameKeys**](UsersApi.md#getV5UsersUsernameKeys) | **GET** /v5/users/{username}/keys | 列出指定用户的所有公钥
[**patchV5User**](UsersApi.md#patchV5User) | **PATCH** /v5/user | 更新授权用户的资料
[**postV5UserKeys**](UsersApi.md#postV5UserKeys) | **POST** /v5/user/keys | 添加一个公钥
[**putV5UserFollowingUsername**](UsersApi.md#putV5UserFollowingUsername) | **PUT** /v5/user/following/{username} | 关注一个用户


# **deleteV5UserFollowingUsername**
> deleteV5UserFollowingUsername($username, $accessToken)

取消关注一个用户

取消关注一个用户

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$username = "username_example"; // string | 用户名(username/login)
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->deleteV5UserFollowingUsername($username, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->deleteV5UserFollowingUsername: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | **string**| 用户名(username/login) |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteV5UserKeysId**
> deleteV5UserKeysId($id, $accessToken)

删除一个公钥

删除一个公钥

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | 公钥 ID
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->deleteV5UserKeysId($id, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->deleteV5UserKeysId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| 公钥 ID |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5User**
> \Gitee\Model\UserDetail getV5User($accessToken)

获取授权用户的资料

获取授权用户的资料

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->getV5User($accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getV5User: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\Gitee\Model\UserDetail**](../Model/UserDetail.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5UserFollowers**
> \Gitee\Model\UserBasic[] getV5UserFollowers($accessToken, $page, $perPage)

列出授权用户的关注者

列出授权用户的关注者

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accessToken = "accessToken_example"; // string | 用户授权码
$page = 1; // int | 当前的页码
$perPage = 20; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getV5UserFollowers($accessToken, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getV5UserFollowers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accessToken** | **string**| 用户授权码 | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional] [default to 20]

### Return type

[**\Gitee\Model\UserBasic[]**](../Model/UserBasic.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5UserFollowing**
> \Gitee\Model\UserBasic[] getV5UserFollowing($accessToken, $page, $perPage)

列出授权用户正关注的用户

列出授权用户正关注的用户

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accessToken = "accessToken_example"; // string | 用户授权码
$page = 1; // int | 当前的页码
$perPage = 20; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getV5UserFollowing($accessToken, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getV5UserFollowing: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accessToken** | **string**| 用户授权码 | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional] [default to 20]

### Return type

[**\Gitee\Model\UserBasic[]**](../Model/UserBasic.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5UserFollowingUsername**
> getV5UserFollowingUsername($username, $accessToken)

检查授权用户是否关注了一个用户

检查授权用户是否关注了一个用户

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$username = "username_example"; // string | 用户名(username/login)
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->getV5UserFollowingUsername($username, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getV5UserFollowingUsername: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | **string**| 用户名(username/login) |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5UserKeys**
> \Gitee\Model\SSHKey[] getV5UserKeys($accessToken, $page, $perPage)

列出授权用户的所有公钥

列出授权用户的所有公钥

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accessToken = "accessToken_example"; // string | 用户授权码
$page = 1; // int | 当前的页码
$perPage = 20; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getV5UserKeys($accessToken, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getV5UserKeys: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accessToken** | **string**| 用户授权码 | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional] [default to 20]

### Return type

[**\Gitee\Model\SSHKey[]**](../Model/SSHKey.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5UserKeysId**
> \Gitee\Model\SSHKey getV5UserKeysId($id, $accessToken)

获取一个公钥

获取一个公钥

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | 公钥 ID
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->getV5UserKeysId($id, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getV5UserKeysId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| 公钥 ID |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\Gitee\Model\SSHKey**](../Model/SSHKey.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5UserNamespace**
> \Gitee\Model\ModelNamespace[] getV5UserNamespace($path, $accessToken)

获取授权用户的一个 Namespace

获取授权用户的一个 Namespace

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = "path_example"; // string | Namespace path
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->getV5UserNamespace($path, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getV5UserNamespace: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| Namespace path |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\Gitee\Model\ModelNamespace[]**](../Model/ModelNamespace.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5UserNamespaces**
> \Gitee\Model\ModelNamespace[] getV5UserNamespaces($accessToken, $mode)

列出授权用户所有的 Namespace

列出授权用户所有的 Namespace

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accessToken = "accessToken_example"; // string | 用户授权码
$mode = "mode_example"; // string | 参与方式: project(所有参与仓库的namepsce)、intrant(所加入的namespace)、all(包含前两者)，默认(intrant)

try {
    $result = $apiInstance->getV5UserNamespaces($accessToken, $mode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getV5UserNamespaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accessToken** | **string**| 用户授权码 | [optional]
 **mode** | **string**| 参与方式: project(所有参与仓库的namepsce)、intrant(所加入的namespace)、all(包含前两者)，默认(intrant) | [optional]

### Return type

[**\Gitee\Model\ModelNamespace[]**](../Model/ModelNamespace.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5UsersUsername**
> \Gitee\Model\UserInfo getV5UsersUsername($username, $accessToken)

获取一个用户

获取一个用户

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$username = "username_example"; // string | 用户名(username/login)
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->getV5UsersUsername($username, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getV5UsersUsername: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | **string**| 用户名(username/login) |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\Gitee\Model\UserInfo**](../Model/UserInfo.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5UsersUsernameFollowers**
> \Gitee\Model\UserBasic[] getV5UsersUsernameFollowers($username, $accessToken, $page, $perPage)

列出指定用户的关注者

列出指定用户的关注者

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$username = "username_example"; // string | 用户名(username/login)
$accessToken = "accessToken_example"; // string | 用户授权码
$page = 1; // int | 当前的页码
$perPage = 20; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getV5UsersUsernameFollowers($username, $accessToken, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getV5UsersUsernameFollowers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | **string**| 用户名(username/login) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional] [default to 20]

### Return type

[**\Gitee\Model\UserBasic[]**](../Model/UserBasic.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5UsersUsernameFollowing**
> \Gitee\Model\UserBasic[] getV5UsersUsernameFollowing($username, $accessToken, $page, $perPage)

列出指定用户正在关注的用户

列出指定用户正在关注的用户

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$username = "username_example"; // string | 用户名(username/login)
$accessToken = "accessToken_example"; // string | 用户授权码
$page = 1; // int | 当前的页码
$perPage = 20; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getV5UsersUsernameFollowing($username, $accessToken, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getV5UsersUsernameFollowing: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | **string**| 用户名(username/login) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional] [default to 20]

### Return type

[**\Gitee\Model\UserBasic[]**](../Model/UserBasic.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5UsersUsernameFollowingTargetUser**
> getV5UsersUsernameFollowingTargetUser($username, $targetUser, $accessToken)

检查指定用户是否关注目标用户

检查指定用户是否关注目标用户

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$username = "username_example"; // string | 用户名(username/login)
$targetUser = "targetUser_example"; // string | 目标用户的用户名(username/login)
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->getV5UsersUsernameFollowingTargetUser($username, $targetUser, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getV5UsersUsernameFollowingTargetUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | **string**| 用户名(username/login) |
 **targetUser** | **string**| 目标用户的用户名(username/login) |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5UsersUsernameKeys**
> \Gitee\Model\SSHKeyBasic[] getV5UsersUsernameKeys($username, $accessToken, $page, $perPage)

列出指定用户的所有公钥

列出指定用户的所有公钥

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$username = "username_example"; // string | 用户名(username/login)
$accessToken = "accessToken_example"; // string | 用户授权码
$page = 1; // int | 当前的页码
$perPage = 20; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getV5UsersUsernameKeys($username, $accessToken, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getV5UsersUsernameKeys: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | **string**| 用户名(username/login) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional] [default to 20]

### Return type

[**\Gitee\Model\SSHKeyBasic[]**](../Model/SSHKeyBasic.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchV5User**
> \Gitee\Model\User patchV5User($accessToken, $name, $blog, $weibo, $bio)

更新授权用户的资料

更新授权用户的资料

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accessToken = "accessToken_example"; // string | 用户授权码
$name = "name_example"; // string | 昵称
$blog = "blog_example"; // string | 微博链接
$weibo = "weibo_example"; // string | 博客站点
$bio = "bio_example"; // string | 自我介绍

try {
    $result = $apiInstance->patchV5User($accessToken, $name, $blog, $weibo, $bio);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->patchV5User: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accessToken** | **string**| 用户授权码 | [optional]
 **name** | **string**| 昵称 | [optional]
 **blog** | **string**| 微博链接 | [optional]
 **weibo** | **string**| 博客站点 | [optional]
 **bio** | **string**| 自我介绍 | [optional]

### Return type

[**\Gitee\Model\User**](../Model/User.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postV5UserKeys**
> \Gitee\Model\SSHKey postV5UserKeys($key, $title, $accessToken)

添加一个公钥

添加一个公钥

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = "key_example"; // string | 公钥内容
$title = "title_example"; // string | 公钥名称
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->postV5UserKeys($key, $title, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->postV5UserKeys: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| 公钥内容 |
 **title** | **string**| 公钥名称 |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\Gitee\Model\SSHKey**](../Model/SSHKey.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putV5UserFollowingUsername**
> putV5UserFollowingUsername($username, $accessToken)

关注一个用户

关注一个用户

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$username = "username_example"; // string | 用户名(username/login)
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->putV5UserFollowingUsername($username, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->putV5UserFollowingUsername: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | **string**| 用户名(username/login) |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

