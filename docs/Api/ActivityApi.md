# Gitee\ActivityApi

All URIs are relative to *https://gitee.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteV5UserStarredOwnerRepo**](ActivityApi.md#deleteV5UserStarredOwnerRepo) | **DELETE** /v5/user/starred/{owner}/{repo} | 取消 star 一个仓库
[**deleteV5UserSubscriptionsOwnerRepo**](ActivityApi.md#deleteV5UserSubscriptionsOwnerRepo) | **DELETE** /v5/user/subscriptions/{owner}/{repo} | 取消 watch 一个仓库
[**getV5NetworksOwnerRepoEvents**](ActivityApi.md#getV5NetworksOwnerRepoEvents) | **GET** /v5/networks/{owner}/{repo}/events | 列出仓库的所有公开动态
[**getV5NotificationsCount**](ActivityApi.md#getV5NotificationsCount) | **GET** /v5/notifications/count | 获取授权用户的通知数
[**getV5NotificationsMessages**](ActivityApi.md#getV5NotificationsMessages) | **GET** /v5/notifications/messages | 列出授权用户的所有私信
[**getV5NotificationsMessagesId**](ActivityApi.md#getV5NotificationsMessagesId) | **GET** /v5/notifications/messages/{id} | 获取一条私信
[**getV5NotificationsThreads**](ActivityApi.md#getV5NotificationsThreads) | **GET** /v5/notifications/threads | 列出授权用户的所有通知
[**getV5NotificationsThreadsId**](ActivityApi.md#getV5NotificationsThreadsId) | **GET** /v5/notifications/threads/{id} | 获取一条通知
[**getV5OrgsOrgEvents**](ActivityApi.md#getV5OrgsOrgEvents) | **GET** /v5/orgs/{org}/events | 列出组织的公开动态
[**getV5ReposOwnerRepoEvents**](ActivityApi.md#getV5ReposOwnerRepoEvents) | **GET** /v5/repos/{owner}/{repo}/events | 列出仓库的所有动态
[**getV5ReposOwnerRepoNotifications**](ActivityApi.md#getV5ReposOwnerRepoNotifications) | **GET** /v5/repos/{owner}/{repo}/notifications | 列出一个仓库里的通知
[**getV5ReposOwnerRepoStargazers**](ActivityApi.md#getV5ReposOwnerRepoStargazers) | **GET** /v5/repos/{owner}/{repo}/stargazers | 列出 star 了仓库的用户
[**getV5ReposOwnerRepoSubscribers**](ActivityApi.md#getV5ReposOwnerRepoSubscribers) | **GET** /v5/repos/{owner}/{repo}/subscribers | 列出 watch 了仓库的用户
[**getV5UserStarred**](ActivityApi.md#getV5UserStarred) | **GET** /v5/user/starred | 列出授权用户 star 了的仓库
[**getV5UserStarredOwnerRepo**](ActivityApi.md#getV5UserStarredOwnerRepo) | **GET** /v5/user/starred/{owner}/{repo} | 检查授权用户是否 star 了一个仓库
[**getV5UserSubscriptions**](ActivityApi.md#getV5UserSubscriptions) | **GET** /v5/user/subscriptions | 列出授权用户 watch 了的仓库
[**getV5UserSubscriptionsOwnerRepo**](ActivityApi.md#getV5UserSubscriptionsOwnerRepo) | **GET** /v5/user/subscriptions/{owner}/{repo} | 检查授权用户是否 watch 了一个仓库
[**getV5UsersUsernameEvents**](ActivityApi.md#getV5UsersUsernameEvents) | **GET** /v5/users/{username}/events | 列出用户的动态
[**getV5UsersUsernameEventsOrgsOrg**](ActivityApi.md#getV5UsersUsernameEventsOrgsOrg) | **GET** /v5/users/{username}/events/orgs/{org} | 列出用户所属组织的动态
[**getV5UsersUsernameEventsPublic**](ActivityApi.md#getV5UsersUsernameEventsPublic) | **GET** /v5/users/{username}/events/public | 列出用户的公开动态
[**getV5UsersUsernameReceivedEvents**](ActivityApi.md#getV5UsersUsernameReceivedEvents) | **GET** /v5/users/{username}/received_events | 列出一个用户收到的动态
[**getV5UsersUsernameReceivedEventsPublic**](ActivityApi.md#getV5UsersUsernameReceivedEventsPublic) | **GET** /v5/users/{username}/received_events/public | 列出一个用户收到的公开动态
[**getV5UsersUsernameStarred**](ActivityApi.md#getV5UsersUsernameStarred) | **GET** /v5/users/{username}/starred | 列出用户 star 了的仓库
[**getV5UsersUsernameSubscriptions**](ActivityApi.md#getV5UsersUsernameSubscriptions) | **GET** /v5/users/{username}/subscriptions | 列出用户 watch 了的仓库
[**patchV5NotificationsMessagesId**](ActivityApi.md#patchV5NotificationsMessagesId) | **PATCH** /v5/notifications/messages/{id} | 标记一条私信为已读
[**patchV5NotificationsThreadsId**](ActivityApi.md#patchV5NotificationsThreadsId) | **PATCH** /v5/notifications/threads/{id} | 标记一条通知为已读
[**postV5NotificationsMessages**](ActivityApi.md#postV5NotificationsMessages) | **POST** /v5/notifications/messages | 发送私信给指定用户
[**putV5NotificationsMessages**](ActivityApi.md#putV5NotificationsMessages) | **PUT** /v5/notifications/messages | 标记所有私信为已读
[**putV5NotificationsThreads**](ActivityApi.md#putV5NotificationsThreads) | **PUT** /v5/notifications/threads | 标记所有通知为已读
[**putV5ReposOwnerRepoNotifications**](ActivityApi.md#putV5ReposOwnerRepoNotifications) | **PUT** /v5/repos/{owner}/{repo}/notifications | 标记一个仓库里的通知为已读
[**putV5UserStarredOwnerRepo**](ActivityApi.md#putV5UserStarredOwnerRepo) | **PUT** /v5/user/starred/{owner}/{repo} | star 一个仓库
[**putV5UserSubscriptionsOwnerRepo**](ActivityApi.md#putV5UserSubscriptionsOwnerRepo) | **PUT** /v5/user/subscriptions/{owner}/{repo} | watch 一个仓库


# **deleteV5UserStarredOwnerRepo**
> deleteV5UserStarredOwnerRepo($owner, $repo, $accessToken)

取消 star 一个仓库

取消 star 一个仓库

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->deleteV5UserStarredOwnerRepo($owner, $repo, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->deleteV5UserStarredOwnerRepo: ', $e->getMessage(), PHP_EOL;
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

# **deleteV5UserSubscriptionsOwnerRepo**
> deleteV5UserSubscriptionsOwnerRepo($owner, $repo, $accessToken)

取消 watch 一个仓库

取消 watch 一个仓库

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->deleteV5UserSubscriptionsOwnerRepo($owner, $repo, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->deleteV5UserSubscriptionsOwnerRepo: ', $e->getMessage(), PHP_EOL;
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

# **getV5NetworksOwnerRepoEvents**
> \Gitee\Model\Event[] getV5NetworksOwnerRepoEvents($owner, $repo, $accessToken, $prevId, $limit)

列出仓库的所有公开动态

列出仓库的所有公开动态

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$accessToken = "accessToken_example"; // string | 用户授权码
$prevId = 56; // int | 滚动列表的最后一条记录的id
$limit = 20; // int | 滚动列表每页的数量，最大为 100

try {
    $result = $apiInstance->getV5NetworksOwnerRepoEvents($owner, $repo, $accessToken, $prevId, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->getV5NetworksOwnerRepoEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **prevId** | **int**| 滚动列表的最后一条记录的id | [optional]
 **limit** | **int**| 滚动列表每页的数量，最大为 100 | [optional] [default to 20]

### Return type

[**\Gitee\Model\Event[]**](../Model/Event.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5NotificationsCount**
> \Gitee\Model\UserNotificationCount getV5NotificationsCount($accessToken, $unread)

获取授权用户的通知数

获取授权用户的通知数

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accessToken = "accessToken_example"; // string | 用户授权码
$unread = true; // bool | 是否只获取未读消息，默认：否

try {
    $result = $apiInstance->getV5NotificationsCount($accessToken, $unread);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->getV5NotificationsCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accessToken** | **string**| 用户授权码 | [optional]
 **unread** | **bool**| 是否只获取未读消息，默认：否 | [optional]

### Return type

[**\Gitee\Model\UserNotificationCount**](../Model/UserNotificationCount.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5NotificationsMessages**
> \Gitee\Model\UserMessageList[] getV5NotificationsMessages($accessToken, $unread, $since, $before, $ids, $page, $perPage)

列出授权用户的所有私信

列出授权用户的所有私信

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accessToken = "accessToken_example"; // string | 用户授权码
$unread = true; // bool | 是否只显示未读私信，默认：否
$since = "since_example"; // string | 只获取在给定时间后更新的私信，要求时间格式为 ISO 8601
$before = "before_example"; // string | 只获取在给定时间前更新的私信，要求时间格式为 ISO 8601
$ids = "ids_example"; // string | 指定一组私信 ID，以 , 分隔
$page = 1; // int | 当前的页码
$perPage = 20; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getV5NotificationsMessages($accessToken, $unread, $since, $before, $ids, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->getV5NotificationsMessages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accessToken** | **string**| 用户授权码 | [optional]
 **unread** | **bool**| 是否只显示未读私信，默认：否 | [optional]
 **since** | **string**| 只获取在给定时间后更新的私信，要求时间格式为 ISO 8601 | [optional]
 **before** | **string**| 只获取在给定时间前更新的私信，要求时间格式为 ISO 8601 | [optional]
 **ids** | **string**| 指定一组私信 ID，以 , 分隔 | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional] [default to 20]

### Return type

[**\Gitee\Model\UserMessageList[]**](../Model/UserMessageList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5NotificationsMessagesId**
> \Gitee\Model\UserMessage getV5NotificationsMessagesId($id, $accessToken)

获取一条私信

获取一条私信

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 私信的 ID
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->getV5NotificationsMessagesId($id, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->getV5NotificationsMessagesId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| 私信的 ID |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\Gitee\Model\UserMessage**](../Model/UserMessage.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5NotificationsThreads**
> \Gitee\Model\UserNotificationList[] getV5NotificationsThreads($accessToken, $unread, $participating, $type, $since, $before, $ids, $page, $perPage)

列出授权用户的所有通知

列出授权用户的所有通知

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accessToken = "accessToken_example"; // string | 用户授权码
$unread = true; // bool | 是否只获取未读消息，默认：否
$participating = true; // bool | 是否只获取自己直接参与的消息，默认：否
$type = "all"; // string | 筛选指定类型的通知，all：所有，event：事件通知，referer：@ 通知
$since = "since_example"; // string | 只获取在给定时间后更新的消息，要求时间格式为 ISO 8601
$before = "before_example"; // string | 只获取在给定时间前更新的消息，要求时间格式为 ISO 8601
$ids = "ids_example"; // string | 指定一组通知 ID，以 , 分隔
$page = 1; // int | 当前的页码
$perPage = 20; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getV5NotificationsThreads($accessToken, $unread, $participating, $type, $since, $before, $ids, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->getV5NotificationsThreads: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accessToken** | **string**| 用户授权码 | [optional]
 **unread** | **bool**| 是否只获取未读消息，默认：否 | [optional]
 **participating** | **bool**| 是否只获取自己直接参与的消息，默认：否 | [optional]
 **type** | **string**| 筛选指定类型的通知，all：所有，event：事件通知，referer：@ 通知 | [optional] [default to all]
 **since** | **string**| 只获取在给定时间后更新的消息，要求时间格式为 ISO 8601 | [optional]
 **before** | **string**| 只获取在给定时间前更新的消息，要求时间格式为 ISO 8601 | [optional]
 **ids** | **string**| 指定一组通知 ID，以 , 分隔 | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional] [default to 20]

### Return type

[**\Gitee\Model\UserNotificationList[]**](../Model/UserNotificationList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5NotificationsThreadsId**
> \Gitee\Model\UserNotification getV5NotificationsThreadsId($id, $accessToken)

获取一条通知

获取一条通知

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 通知的 ID
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->getV5NotificationsThreadsId($id, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->getV5NotificationsThreadsId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| 通知的 ID |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\Gitee\Model\UserNotification**](../Model/UserNotification.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5OrgsOrgEvents**
> \Gitee\Model\Event[] getV5OrgsOrgEvents($org, $accessToken, $prevId, $limit)

列出组织的公开动态

列出组织的公开动态

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org = "org_example"; // string | 组织的路径(path/login)
$accessToken = "accessToken_example"; // string | 用户授权码
$prevId = 56; // int | 滚动列表的最后一条记录的id
$limit = 20; // int | 滚动列表每页的数量，最大为 100

try {
    $result = $apiInstance->getV5OrgsOrgEvents($org, $accessToken, $prevId, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->getV5OrgsOrgEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org** | **string**| 组织的路径(path/login) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **prevId** | **int**| 滚动列表的最后一条记录的id | [optional]
 **limit** | **int**| 滚动列表每页的数量，最大为 100 | [optional] [default to 20]

### Return type

[**\Gitee\Model\Event[]**](../Model/Event.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5ReposOwnerRepoEvents**
> \Gitee\Model\Event[] getV5ReposOwnerRepoEvents($owner, $repo, $accessToken, $prevId, $limit)

列出仓库的所有动态

列出仓库的所有动态

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$accessToken = "accessToken_example"; // string | 用户授权码
$prevId = 56; // int | 滚动列表的最后一条记录的id
$limit = 20; // int | 滚动列表每页的数量，最大为 100

try {
    $result = $apiInstance->getV5ReposOwnerRepoEvents($owner, $repo, $accessToken, $prevId, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->getV5ReposOwnerRepoEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **prevId** | **int**| 滚动列表的最后一条记录的id | [optional]
 **limit** | **int**| 滚动列表每页的数量，最大为 100 | [optional] [default to 20]

### Return type

[**\Gitee\Model\Event[]**](../Model/Event.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5ReposOwnerRepoNotifications**
> \Gitee\Model\UserNotificationList[] getV5ReposOwnerRepoNotifications($owner, $repo, $accessToken, $unread, $participating, $type, $since, $before, $ids, $page, $perPage)

列出一个仓库里的通知

列出一个仓库里的通知

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$accessToken = "accessToken_example"; // string | 用户授权码
$unread = true; // bool | 是否只获取未读消息，默认：否
$participating = true; // bool | 是否只获取自己直接参与的消息，默认：否
$type = "all"; // string | 筛选指定类型的通知，all：所有，event：事件通知，referer：@ 通知
$since = "since_example"; // string | 只获取在给定时间后更新的消息，要求时间格式为 ISO 8601
$before = "before_example"; // string | 只获取在给定时间前更新的消息，要求时间格式为 ISO 8601
$ids = "ids_example"; // string | 指定一组通知 ID，以 , 分隔
$page = 1; // int | 当前的页码
$perPage = 20; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getV5ReposOwnerRepoNotifications($owner, $repo, $accessToken, $unread, $participating, $type, $since, $before, $ids, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->getV5ReposOwnerRepoNotifications: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **unread** | **bool**| 是否只获取未读消息，默认：否 | [optional]
 **participating** | **bool**| 是否只获取自己直接参与的消息，默认：否 | [optional]
 **type** | **string**| 筛选指定类型的通知，all：所有，event：事件通知，referer：@ 通知 | [optional] [default to all]
 **since** | **string**| 只获取在给定时间后更新的消息，要求时间格式为 ISO 8601 | [optional]
 **before** | **string**| 只获取在给定时间前更新的消息，要求时间格式为 ISO 8601 | [optional]
 **ids** | **string**| 指定一组通知 ID，以 , 分隔 | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional] [default to 20]

### Return type

[**\Gitee\Model\UserNotificationList[]**](../Model/UserNotificationList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5ReposOwnerRepoStargazers**
> \Gitee\Model\ProjectStargazers[] getV5ReposOwnerRepoStargazers($owner, $repo, $accessToken, $page, $perPage)

列出 star 了仓库的用户

列出 star 了仓库的用户

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\ActivityApi(
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
    $result = $apiInstance->getV5ReposOwnerRepoStargazers($owner, $repo, $accessToken, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->getV5ReposOwnerRepoStargazers: ', $e->getMessage(), PHP_EOL;
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

[**\Gitee\Model\ProjectStargazers[]**](../Model/ProjectStargazers.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5ReposOwnerRepoSubscribers**
> \Gitee\Model\ProjectWatchers[] getV5ReposOwnerRepoSubscribers($owner, $repo, $accessToken, $page, $perPage)

列出 watch 了仓库的用户

列出 watch 了仓库的用户

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\ActivityApi(
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
    $result = $apiInstance->getV5ReposOwnerRepoSubscribers($owner, $repo, $accessToken, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->getV5ReposOwnerRepoSubscribers: ', $e->getMessage(), PHP_EOL;
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

[**\Gitee\Model\ProjectWatchers[]**](../Model/ProjectWatchers.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5UserStarred**
> \Gitee\Model\Project[] getV5UserStarred($accessToken, $sort, $direction, $page, $perPage)

列出授权用户 star 了的仓库

列出授权用户 star 了的仓库

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accessToken = "accessToken_example"; // string | 用户授权码
$sort = "created"; // string | 根据仓库创建时间(created)或最后推送时间(updated)进行排序，默认：创建时间
$direction = "desc"; // string | 按递增(asc)或递减(desc)排序，默认：递减
$page = 1; // int | 当前的页码
$perPage = 20; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getV5UserStarred($accessToken, $sort, $direction, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->getV5UserStarred: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accessToken** | **string**| 用户授权码 | [optional]
 **sort** | **string**| 根据仓库创建时间(created)或最后推送时间(updated)进行排序，默认：创建时间 | [optional] [default to created]
 **direction** | **string**| 按递增(asc)或递减(desc)排序，默认：递减 | [optional] [default to desc]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional] [default to 20]

### Return type

[**\Gitee\Model\Project[]**](../Model/Project.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5UserStarredOwnerRepo**
> getV5UserStarredOwnerRepo($owner, $repo, $accessToken)

检查授权用户是否 star 了一个仓库

检查授权用户是否 star 了一个仓库

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->getV5UserStarredOwnerRepo($owner, $repo, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->getV5UserStarredOwnerRepo: ', $e->getMessage(), PHP_EOL;
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

# **getV5UserSubscriptions**
> \Gitee\Model\Project[] getV5UserSubscriptions($accessToken, $sort, $direction, $page, $perPage)

列出授权用户 watch 了的仓库

列出授权用户 watch 了的仓库

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accessToken = "accessToken_example"; // string | 用户授权码
$sort = "created"; // string | 根据仓库创建时间(created)或最后推送时间(updated)进行排序，默认：创建时间
$direction = "desc"; // string | 按递增(asc)或递减(desc)排序，默认：递减
$page = 1; // int | 当前的页码
$perPage = 20; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getV5UserSubscriptions($accessToken, $sort, $direction, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->getV5UserSubscriptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accessToken** | **string**| 用户授权码 | [optional]
 **sort** | **string**| 根据仓库创建时间(created)或最后推送时间(updated)进行排序，默认：创建时间 | [optional] [default to created]
 **direction** | **string**| 按递增(asc)或递减(desc)排序，默认：递减 | [optional] [default to desc]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional] [default to 20]

### Return type

[**\Gitee\Model\Project[]**](../Model/Project.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5UserSubscriptionsOwnerRepo**
> getV5UserSubscriptionsOwnerRepo($owner, $repo, $accessToken)

检查授权用户是否 watch 了一个仓库

检查授权用户是否 watch 了一个仓库

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->getV5UserSubscriptionsOwnerRepo($owner, $repo, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->getV5UserSubscriptionsOwnerRepo: ', $e->getMessage(), PHP_EOL;
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

# **getV5UsersUsernameEvents**
> \Gitee\Model\Event[] getV5UsersUsernameEvents($username, $accessToken, $prevId, $limit)

列出用户的动态

列出用户的动态

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$username = "username_example"; // string | 用户名(username/login)
$accessToken = "accessToken_example"; // string | 用户授权码
$prevId = 56; // int | 滚动列表的最后一条记录的id
$limit = 20; // int | 滚动列表每页的数量，最大为 100

try {
    $result = $apiInstance->getV5UsersUsernameEvents($username, $accessToken, $prevId, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->getV5UsersUsernameEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | **string**| 用户名(username/login) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **prevId** | **int**| 滚动列表的最后一条记录的id | [optional]
 **limit** | **int**| 滚动列表每页的数量，最大为 100 | [optional] [default to 20]

### Return type

[**\Gitee\Model\Event[]**](../Model/Event.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5UsersUsernameEventsOrgsOrg**
> \Gitee\Model\Event[] getV5UsersUsernameEventsOrgsOrg($username, $org, $accessToken, $prevId, $limit)

列出用户所属组织的动态

列出用户所属组织的动态

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$username = "username_example"; // string | 用户名(username/login)
$org = "org_example"; // string | 组织的路径(path/login)
$accessToken = "accessToken_example"; // string | 用户授权码
$prevId = 56; // int | 滚动列表的最后一条记录的id
$limit = 20; // int | 滚动列表每页的数量，最大为 100

try {
    $result = $apiInstance->getV5UsersUsernameEventsOrgsOrg($username, $org, $accessToken, $prevId, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->getV5UsersUsernameEventsOrgsOrg: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | **string**| 用户名(username/login) |
 **org** | **string**| 组织的路径(path/login) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **prevId** | **int**| 滚动列表的最后一条记录的id | [optional]
 **limit** | **int**| 滚动列表每页的数量，最大为 100 | [optional] [default to 20]

### Return type

[**\Gitee\Model\Event[]**](../Model/Event.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5UsersUsernameEventsPublic**
> \Gitee\Model\Event[] getV5UsersUsernameEventsPublic($username, $accessToken, $prevId, $limit)

列出用户的公开动态

列出用户的公开动态

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$username = "username_example"; // string | 用户名(username/login)
$accessToken = "accessToken_example"; // string | 用户授权码
$prevId = 56; // int | 滚动列表的最后一条记录的id
$limit = 20; // int | 滚动列表每页的数量，最大为 100

try {
    $result = $apiInstance->getV5UsersUsernameEventsPublic($username, $accessToken, $prevId, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->getV5UsersUsernameEventsPublic: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | **string**| 用户名(username/login) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **prevId** | **int**| 滚动列表的最后一条记录的id | [optional]
 **limit** | **int**| 滚动列表每页的数量，最大为 100 | [optional] [default to 20]

### Return type

[**\Gitee\Model\Event[]**](../Model/Event.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5UsersUsernameReceivedEvents**
> \Gitee\Model\Event[] getV5UsersUsernameReceivedEvents($username, $accessToken, $prevId, $limit)

列出一个用户收到的动态

列出一个用户收到的动态

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$username = "username_example"; // string | 用户名(username/login)
$accessToken = "accessToken_example"; // string | 用户授权码
$prevId = 56; // int | 滚动列表的最后一条记录的id
$limit = 20; // int | 滚动列表每页的数量，最大为 100

try {
    $result = $apiInstance->getV5UsersUsernameReceivedEvents($username, $accessToken, $prevId, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->getV5UsersUsernameReceivedEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | **string**| 用户名(username/login) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **prevId** | **int**| 滚动列表的最后一条记录的id | [optional]
 **limit** | **int**| 滚动列表每页的数量，最大为 100 | [optional] [default to 20]

### Return type

[**\Gitee\Model\Event[]**](../Model/Event.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5UsersUsernameReceivedEventsPublic**
> \Gitee\Model\Event[] getV5UsersUsernameReceivedEventsPublic($username, $accessToken, $prevId, $limit)

列出一个用户收到的公开动态

列出一个用户收到的公开动态

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$username = "username_example"; // string | 用户名(username/login)
$accessToken = "accessToken_example"; // string | 用户授权码
$prevId = 56; // int | 滚动列表的最后一条记录的id
$limit = 20; // int | 滚动列表每页的数量，最大为 100

try {
    $result = $apiInstance->getV5UsersUsernameReceivedEventsPublic($username, $accessToken, $prevId, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->getV5UsersUsernameReceivedEventsPublic: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | **string**| 用户名(username/login) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **prevId** | **int**| 滚动列表的最后一条记录的id | [optional]
 **limit** | **int**| 滚动列表每页的数量，最大为 100 | [optional] [default to 20]

### Return type

[**\Gitee\Model\Event[]**](../Model/Event.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5UsersUsernameStarred**
> \Gitee\Model\Project[] getV5UsersUsernameStarred($username, $accessToken, $prevId, $limit, $sort, $direction)

列出用户 star 了的仓库

列出用户 star 了的仓库

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$username = "username_example"; // string | 用户名(username/login)
$accessToken = "accessToken_example"; // string | 用户授权码
$prevId = 56; // int | 滚动列表的最后一条记录的id
$limit = 20; // int | 滚动列表每页的数量，最大为 100
$sort = "created"; // string | 根据仓库创建时间(created)或最后推送时间(updated)进行排序，默认：创建时间
$direction = "desc"; // string | 按递增(asc)或递减(desc)排序，默认：递减

try {
    $result = $apiInstance->getV5UsersUsernameStarred($username, $accessToken, $prevId, $limit, $sort, $direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->getV5UsersUsernameStarred: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | **string**| 用户名(username/login) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **prevId** | **int**| 滚动列表的最后一条记录的id | [optional]
 **limit** | **int**| 滚动列表每页的数量，最大为 100 | [optional] [default to 20]
 **sort** | **string**| 根据仓库创建时间(created)或最后推送时间(updated)进行排序，默认：创建时间 | [optional] [default to created]
 **direction** | **string**| 按递增(asc)或递减(desc)排序，默认：递减 | [optional] [default to desc]

### Return type

[**\Gitee\Model\Project[]**](../Model/Project.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5UsersUsernameSubscriptions**
> \Gitee\Model\Project[] getV5UsersUsernameSubscriptions($username, $accessToken, $prevId, $limit, $sort, $direction)

列出用户 watch 了的仓库

列出用户 watch 了的仓库

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$username = "username_example"; // string | 用户名(username/login)
$accessToken = "accessToken_example"; // string | 用户授权码
$prevId = 56; // int | 滚动列表的最后一条记录的id
$limit = 20; // int | 滚动列表每页的数量，最大为 100
$sort = "created"; // string | 根据仓库创建时间(created)或最后推送时间(updated)进行排序，默认：创建时间
$direction = "desc"; // string | 按递增(asc)或递减(desc)排序，默认：递减

try {
    $result = $apiInstance->getV5UsersUsernameSubscriptions($username, $accessToken, $prevId, $limit, $sort, $direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->getV5UsersUsernameSubscriptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | **string**| 用户名(username/login) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **prevId** | **int**| 滚动列表的最后一条记录的id | [optional]
 **limit** | **int**| 滚动列表每页的数量，最大为 100 | [optional] [default to 20]
 **sort** | **string**| 根据仓库创建时间(created)或最后推送时间(updated)进行排序，默认：创建时间 | [optional] [default to created]
 **direction** | **string**| 按递增(asc)或递减(desc)排序，默认：递减 | [optional] [default to desc]

### Return type

[**\Gitee\Model\Project[]**](../Model/Project.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchV5NotificationsMessagesId**
> patchV5NotificationsMessagesId($id, $accessToken)

标记一条私信为已读

标记一条私信为已读

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 私信的 ID
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->patchV5NotificationsMessagesId($id, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->patchV5NotificationsMessagesId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| 私信的 ID |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchV5NotificationsThreadsId**
> patchV5NotificationsThreadsId($id, $accessToken)

标记一条通知为已读

标记一条通知为已读

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 通知的 ID
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->patchV5NotificationsThreadsId($id, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->patchV5NotificationsThreadsId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| 通知的 ID |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postV5NotificationsMessages**
> \Gitee\Model\UserMessage postV5NotificationsMessages($username, $content, $accessToken)

发送私信给指定用户

发送私信给指定用户

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$username = "username_example"; // string | 用户名(username/login)
$content = "content_example"; // string | 私信内容
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->postV5NotificationsMessages($username, $content, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->postV5NotificationsMessages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | **string**| 用户名(username/login) |
 **content** | **string**| 私信内容 |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\Gitee\Model\UserMessage**](../Model/UserMessage.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putV5NotificationsMessages**
> putV5NotificationsMessages($accessToken, $ids)

标记所有私信为已读

标记所有私信为已读

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accessToken = "accessToken_example"; // string | 用户授权码
$ids = "ids_example"; // string | 指定一组私信 ID，以 , 分隔

try {
    $apiInstance->putV5NotificationsMessages($accessToken, $ids);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->putV5NotificationsMessages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accessToken** | **string**| 用户授权码 | [optional]
 **ids** | **string**| 指定一组私信 ID，以 , 分隔 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putV5NotificationsThreads**
> putV5NotificationsThreads($accessToken, $ids)

标记所有通知为已读

标记所有通知为已读

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accessToken = "accessToken_example"; // string | 用户授权码
$ids = "ids_example"; // string | 指定一组通知 ID，以 , 分隔

try {
    $apiInstance->putV5NotificationsThreads($accessToken, $ids);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->putV5NotificationsThreads: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accessToken** | **string**| 用户授权码 | [optional]
 **ids** | **string**| 指定一组通知 ID，以 , 分隔 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putV5ReposOwnerRepoNotifications**
> putV5ReposOwnerRepoNotifications($owner, $repo, $accessToken, $ids)

标记一个仓库里的通知为已读

标记一个仓库里的通知为已读

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$accessToken = "accessToken_example"; // string | 用户授权码
$ids = "ids_example"; // string | 指定一组通知 ID，以 , 分隔

try {
    $apiInstance->putV5ReposOwnerRepoNotifications($owner, $repo, $accessToken, $ids);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->putV5ReposOwnerRepoNotifications: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **ids** | **string**| 指定一组通知 ID，以 , 分隔 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putV5UserStarredOwnerRepo**
> putV5UserStarredOwnerRepo($owner, $repo, $accessToken)

star 一个仓库

star 一个仓库

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->putV5UserStarredOwnerRepo($owner, $repo, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->putV5UserStarredOwnerRepo: ', $e->getMessage(), PHP_EOL;
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

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putV5UserSubscriptionsOwnerRepo**
> putV5UserSubscriptionsOwnerRepo($owner, $repo, $watchType, $accessToken)

watch 一个仓库

watch 一个仓库

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$watchType = "watching"; // string | watch策略, watching: 关注所有动态, ignoring: 关注但不提醒动态
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->putV5UserSubscriptionsOwnerRepo($owner, $repo, $watchType, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->putV5UserSubscriptionsOwnerRepo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **watchType** | **string**| watch策略, watching: 关注所有动态, ignoring: 关注但不提醒动态 | [default to watching]
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

