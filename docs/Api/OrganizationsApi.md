# Gitee\OrganizationsApi

All URIs are relative to *https://gitee.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteV5OrgsOrgMembershipsUsername**](OrganizationsApi.md#deleteV5OrgsOrgMembershipsUsername) | **DELETE** /v5/orgs/{org}/memberships/{username} | 移除授权用户所管理组织中的成员
[**deleteV5UserMembershipsOrgsOrg**](OrganizationsApi.md#deleteV5UserMembershipsOrgsOrg) | **DELETE** /v5/user/memberships/orgs/{org} | 退出一个组织
[**getV5OrgsOrg**](OrganizationsApi.md#getV5OrgsOrg) | **GET** /v5/orgs/{org} | 获取一个组织
[**getV5OrgsOrgFollowers**](OrganizationsApi.md#getV5OrgsOrgFollowers) | **GET** /v5/orgs/{org}/followers | 列出指定组织的所有关注者
[**getV5OrgsOrgMembers**](OrganizationsApi.md#getV5OrgsOrgMembers) | **GET** /v5/orgs/{org}/members | 列出一个组织的所有成员
[**getV5OrgsOrgMembershipsUsername**](OrganizationsApi.md#getV5OrgsOrgMembershipsUsername) | **GET** /v5/orgs/{org}/memberships/{username} | 获取授权用户所属组织的一个成员
[**getV5UserMembershipsOrgs**](OrganizationsApi.md#getV5UserMembershipsOrgs) | **GET** /v5/user/memberships/orgs | 列出授权用户在所属组织的成员资料
[**getV5UserMembershipsOrgsOrg**](OrganizationsApi.md#getV5UserMembershipsOrgsOrg) | **GET** /v5/user/memberships/orgs/{org} | 获取授权用户在一个组织的成员资料
[**getV5UserOrgs**](OrganizationsApi.md#getV5UserOrgs) | **GET** /v5/user/orgs | 列出授权用户所属的组织
[**getV5UsersUsernameOrgs**](OrganizationsApi.md#getV5UsersUsernameOrgs) | **GET** /v5/users/{username}/orgs | 列出用户所属的组织
[**patchV5OrgsOrg**](OrganizationsApi.md#patchV5OrgsOrg) | **PATCH** /v5/orgs/{org} | 更新授权用户所管理的组织资料
[**patchV5UserMembershipsOrgsOrg**](OrganizationsApi.md#patchV5UserMembershipsOrgsOrg) | **PATCH** /v5/user/memberships/orgs/{org} | 更新授权用户在一个组织的成员资料
[**postV5UsersOrganization**](OrganizationsApi.md#postV5UsersOrganization) | **POST** /v5/users/organization | 创建组织
[**putV5OrgsOrgMembershipsUsername**](OrganizationsApi.md#putV5OrgsOrgMembershipsUsername) | **PUT** /v5/orgs/{org}/memberships/{username} | 增加或更新授权用户所管理组织的成员


# **deleteV5OrgsOrgMembershipsUsername**
> deleteV5OrgsOrgMembershipsUsername($org, $username, $accessToken)

移除授权用户所管理组织中的成员

移除授权用户所管理组织中的成员

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org = "org_example"; // string | 组织的路径(path/login)
$username = "username_example"; // string | 用户名(username/login)
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->deleteV5OrgsOrgMembershipsUsername($org, $username, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->deleteV5OrgsOrgMembershipsUsername: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org** | **string**| 组织的路径(path/login) |
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

# **deleteV5UserMembershipsOrgsOrg**
> deleteV5UserMembershipsOrgsOrg($org, $accessToken)

退出一个组织

退出一个组织

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org = "org_example"; // string | 组织的路径(path/login)
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->deleteV5UserMembershipsOrgsOrg($org, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->deleteV5UserMembershipsOrgsOrg: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org** | **string**| 组织的路径(path/login) |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5OrgsOrg**
> \Gitee\Model\Group getV5OrgsOrg($org, $accessToken)

获取一个组织

获取一个组织

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org = "org_example"; // string | 组织的路径(path/login)
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->getV5OrgsOrg($org, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getV5OrgsOrg: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org** | **string**| 组织的路径(path/login) |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\Gitee\Model\Group**](../Model/Group.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5OrgsOrgFollowers**
> \Gitee\Model\GroupFollowers[] getV5OrgsOrgFollowers($org, $accessToken, $page, $perPage)

列出指定组织的所有关注者

列出指定组织的所有关注者

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org = "org_example"; // string | 组织的路径(path/login)
$accessToken = "accessToken_example"; // string | 用户授权码
$page = 1; // int | 当前的页码
$perPage = 20; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getV5OrgsOrgFollowers($org, $accessToken, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getV5OrgsOrgFollowers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org** | **string**| 组织的路径(path/login) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional] [default to 20]

### Return type

[**\Gitee\Model\GroupFollowers[]**](../Model/GroupFollowers.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5OrgsOrgMembers**
> \Gitee\Model\UserBasic[] getV5OrgsOrgMembers($org, $accessToken, $page, $perPage, $role)

列出一个组织的所有成员

列出一个组织的所有成员

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org = "org_example"; // string | 组织的路径(path/login)
$accessToken = "accessToken_example"; // string | 用户授权码
$page = 1; // int | 当前的页码
$perPage = 20; // int | 每页的数量，最大为 100
$role = "all"; // string | 根据角色筛选成员

try {
    $result = $apiInstance->getV5OrgsOrgMembers($org, $accessToken, $page, $perPage, $role);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getV5OrgsOrgMembers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org** | **string**| 组织的路径(path/login) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional] [default to 20]
 **role** | **string**| 根据角色筛选成员 | [optional] [default to all]

### Return type

[**\Gitee\Model\UserBasic[]**](../Model/UserBasic.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5OrgsOrgMembershipsUsername**
> \Gitee\Model\GroupMember getV5OrgsOrgMembershipsUsername($org, $username, $accessToken)

获取授权用户所属组织的一个成员

获取授权用户所属组织的一个成员

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org = "org_example"; // string | 组织的路径(path/login)
$username = "username_example"; // string | 用户名(username/login)
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->getV5OrgsOrgMembershipsUsername($org, $username, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getV5OrgsOrgMembershipsUsername: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org** | **string**| 组织的路径(path/login) |
 **username** | **string**| 用户名(username/login) |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\Gitee\Model\GroupMember**](../Model/GroupMember.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5UserMembershipsOrgs**
> \Gitee\Model\GroupMember[] getV5UserMembershipsOrgs($accessToken, $active, $page, $perPage)

列出授权用户在所属组织的成员资料

列出授权用户在所属组织的成员资料

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accessToken = "accessToken_example"; // string | 用户授权码
$active = true; // bool | 根据成员是否已激活进行筛选资料，缺省返回所有资料
$page = 1; // int | 当前的页码
$perPage = 20; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getV5UserMembershipsOrgs($accessToken, $active, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getV5UserMembershipsOrgs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accessToken** | **string**| 用户授权码 | [optional]
 **active** | **bool**| 根据成员是否已激活进行筛选资料，缺省返回所有资料 | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional] [default to 20]

### Return type

[**\Gitee\Model\GroupMember[]**](../Model/GroupMember.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5UserMembershipsOrgsOrg**
> \Gitee\Model\GroupMember getV5UserMembershipsOrgsOrg($org, $accessToken)

获取授权用户在一个组织的成员资料

获取授权用户在一个组织的成员资料

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org = "org_example"; // string | 组织的路径(path/login)
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->getV5UserMembershipsOrgsOrg($org, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getV5UserMembershipsOrgsOrg: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org** | **string**| 组织的路径(path/login) |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\Gitee\Model\GroupMember**](../Model/GroupMember.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5UserOrgs**
> \Gitee\Model\Group[] getV5UserOrgs($accessToken, $page, $perPage, $admin)

列出授权用户所属的组织

列出授权用户所属的组织

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accessToken = "accessToken_example"; // string | 用户授权码
$page = 1; // int | 当前的页码
$perPage = 20; // int | 每页的数量，最大为 100
$admin = true; // bool | 只列出授权用户管理的组织

try {
    $result = $apiInstance->getV5UserOrgs($accessToken, $page, $perPage, $admin);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getV5UserOrgs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accessToken** | **string**| 用户授权码 | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional] [default to 20]
 **admin** | **bool**| 只列出授权用户管理的组织 | [optional]

### Return type

[**\Gitee\Model\Group[]**](../Model/Group.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5UsersUsernameOrgs**
> \Gitee\Model\Group[] getV5UsersUsernameOrgs($username, $accessToken, $page, $perPage)

列出用户所属的组织

列出用户所属的组织

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$username = "username_example"; // string | 用户名(username/login)
$accessToken = "accessToken_example"; // string | 用户授权码
$page = 1; // int | 当前的页码
$perPage = 20; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getV5UsersUsernameOrgs($username, $accessToken, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getV5UsersUsernameOrgs: ', $e->getMessage(), PHP_EOL;
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

[**\Gitee\Model\Group[]**](../Model/Group.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchV5OrgsOrg**
> \Gitee\Model\GroupDetail patchV5OrgsOrg($org, $accessToken, $email, $location, $name, $description, $htmlUrl)

更新授权用户所管理的组织资料

更新授权用户所管理的组织资料

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org = "org_example"; // string | 组织的路径(path/login)
$accessToken = "accessToken_example"; // string | 用户授权码
$email = "email_example"; // string | 组织公开的邮箱地址
$location = "location_example"; // string | 组织所在地
$name = "name_example"; // string | 组织名称
$description = "description_example"; // string | 组织简介
$htmlUrl = "htmlUrl_example"; // string | 组织站点

try {
    $result = $apiInstance->patchV5OrgsOrg($org, $accessToken, $email, $location, $name, $description, $htmlUrl);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->patchV5OrgsOrg: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org** | **string**| 组织的路径(path/login) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **email** | **string**| 组织公开的邮箱地址 | [optional]
 **location** | **string**| 组织所在地 | [optional]
 **name** | **string**| 组织名称 | [optional]
 **description** | **string**| 组织简介 | [optional]
 **htmlUrl** | **string**| 组织站点 | [optional]

### Return type

[**\Gitee\Model\GroupDetail**](../Model/GroupDetail.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchV5UserMembershipsOrgsOrg**
> \Gitee\Model\GroupMember patchV5UserMembershipsOrgsOrg($org, $accessToken, $remark)

更新授权用户在一个组织的成员资料

更新授权用户在一个组织的成员资料

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org = "org_example"; // string | 组织的路径(path/login)
$accessToken = "accessToken_example"; // string | 用户授权码
$remark = "remark_example"; // string | 在组织中的备注信息

try {
    $result = $apiInstance->patchV5UserMembershipsOrgsOrg($org, $accessToken, $remark);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->patchV5UserMembershipsOrgsOrg: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org** | **string**| 组织的路径(path/login) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **remark** | **string**| 在组织中的备注信息 | [optional]

### Return type

[**\Gitee\Model\GroupMember**](../Model/GroupMember.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postV5UsersOrganization**
> \Gitee\Model\Group postV5UsersOrganization($name, $org, $accessToken, $description)

创建组织

创建组织

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 组织名称
$org = "org_example"; // string | 组织的路径(path/login)
$accessToken = "accessToken_example"; // string | 用户授权码
$description = "description_example"; // string | 组织描述

try {
    $result = $apiInstance->postV5UsersOrganization($name, $org, $accessToken, $description);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->postV5UsersOrganization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| 组织名称 |
 **org** | **string**| 组织的路径(path/login) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **description** | **string**| 组织描述 | [optional]

### Return type

[**\Gitee\Model\Group**](../Model/Group.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putV5OrgsOrgMembershipsUsername**
> \Gitee\Model\GroupMember putV5OrgsOrgMembershipsUsername($org, $username, $accessToken, $role)

增加或更新授权用户所管理组织的成员

增加或更新授权用户所管理组织的成员

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org = "org_example"; // string | 组织的路径(path/login)
$username = "username_example"; // string | 用户名(username/login)
$accessToken = "accessToken_example"; // string | 用户授权码
$role = "member"; // string | 设置用户在组织的角色

try {
    $result = $apiInstance->putV5OrgsOrgMembershipsUsername($org, $username, $accessToken, $role);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->putV5OrgsOrgMembershipsUsername: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org** | **string**| 组织的路径(path/login) |
 **username** | **string**| 用户名(username/login) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **role** | **string**| 设置用户在组织的角色 | [optional] [default to member]

### Return type

[**\Gitee\Model\GroupMember**](../Model/GroupMember.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

