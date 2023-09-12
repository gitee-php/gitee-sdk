# Gitee\SearchApi

All URIs are relative to *https://gitee.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getV5SearchIssues**](SearchApi.md#getV5SearchIssues) | **GET** /v5/search/issues | 搜索 Issues
[**getV5SearchRepositories**](SearchApi.md#getV5SearchRepositories) | **GET** /v5/search/repositories | 搜索仓库
[**getV5SearchUsers**](SearchApi.md#getV5SearchUsers) | **GET** /v5/search/users | 搜索用户


# **getV5SearchIssues**
> \Gitee\Model\Issue[] getV5SearchIssues($q, $accessToken, $page, $perPage, $repo, $language, $label, $state, $author, $assignee, $sort, $order)

搜索 Issues

搜索 Issues

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$q = "q_example"; // string | 搜索关键字
$accessToken = "accessToken_example"; // string | 用户授权码
$page = 1; // int | 当前的页码
$perPage = 20; // int | 每页的数量，最大为 100
$repo = "repo_example"; // string | 筛选指定仓库 (path, e.g. oschina/git-osc) 的 issues
$language = "language_example"; // string | 筛选指定语言的 issues
$label = "label_example"; // string | 筛选指定标签的 issues
$state = "state_example"; // string | 筛选指定状态的 issues, open(开启)、closed(完成)、rejected(拒绝)
$author = "author_example"; // string | 筛选指定创建者 (username/login) 的 issues
$assignee = "assignee_example"; // string | 筛选指定负责人 (username/login) 的 issues
$sort = "sort_example"; // string | 排序字段，created_at(创建时间)、last_push_at(更新时间)、notes_count(评论数)，默认为最佳匹配
$order = "desc"; // string | 排序顺序: desc(default)、asc

try {
    $result = $apiInstance->getV5SearchIssues($q, $accessToken, $page, $perPage, $repo, $language, $label, $state, $author, $assignee, $sort, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->getV5SearchIssues: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **q** | **string**| 搜索关键字 |
 **accessToken** | **string**| 用户授权码 | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional] [default to 20]
 **repo** | **string**| 筛选指定仓库 (path, e.g. oschina/git-osc) 的 issues | [optional]
 **language** | **string**| 筛选指定语言的 issues | [optional]
 **label** | **string**| 筛选指定标签的 issues | [optional]
 **state** | **string**| 筛选指定状态的 issues, open(开启)、closed(完成)、rejected(拒绝) | [optional]
 **author** | **string**| 筛选指定创建者 (username/login) 的 issues | [optional]
 **assignee** | **string**| 筛选指定负责人 (username/login) 的 issues | [optional]
 **sort** | **string**| 排序字段，created_at(创建时间)、last_push_at(更新时间)、notes_count(评论数)，默认为最佳匹配 | [optional]
 **order** | **string**| 排序顺序: desc(default)、asc | [optional] [default to desc]

### Return type

[**\Gitee\Model\Issue[]**](../Model/Issue.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5SearchRepositories**
> \Gitee\Model\Project[] getV5SearchRepositories($q, $accessToken, $page, $perPage, $owner, $fork, $language, $sort, $order)

搜索仓库

搜索仓库

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$q = "q_example"; // string | 搜索关键字
$accessToken = "accessToken_example"; // string | 用户授权码
$page = 1; // int | 当前的页码
$perPage = 20; // int | 每页的数量，最大为 100
$owner = "owner_example"; // string | 筛选指定空间地址(企业、组织或个人的地址 path) 的仓库
$fork = true; // bool | 是否搜索含 fork 的仓库，默认：否
$language = "language_example"; // string | 筛选指定语言的仓库
$sort = "sort_example"; // string | 排序字段，last_push_at(更新时间)、stars_count(收藏数)、forks_count(Fork 数)、watches_count(关注数)，默认为最佳匹配
$order = "desc"; // string | 排序顺序: desc(default)、asc

try {
    $result = $apiInstance->getV5SearchRepositories($q, $accessToken, $page, $perPage, $owner, $fork, $language, $sort, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->getV5SearchRepositories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **q** | **string**| 搜索关键字 |
 **accessToken** | **string**| 用户授权码 | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional] [default to 20]
 **owner** | **string**| 筛选指定空间地址(企业、组织或个人的地址 path) 的仓库 | [optional]
 **fork** | **bool**| 是否搜索含 fork 的仓库，默认：否 | [optional]
 **language** | **string**| 筛选指定语言的仓库 | [optional]
 **sort** | **string**| 排序字段，last_push_at(更新时间)、stars_count(收藏数)、forks_count(Fork 数)、watches_count(关注数)，默认为最佳匹配 | [optional]
 **order** | **string**| 排序顺序: desc(default)、asc | [optional] [default to desc]

### Return type

[**\Gitee\Model\Project[]**](../Model/Project.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5SearchUsers**
> \Gitee\Model\User[] getV5SearchUsers($q, $accessToken, $page, $perPage, $sort, $order)

搜索用户

搜索用户

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$q = "q_example"; // string | 搜索关键字
$accessToken = "accessToken_example"; // string | 用户授权码
$page = 1; // int | 当前的页码
$perPage = 20; // int | 每页的数量，最大为 100
$sort = "sort_example"; // string | 排序字段，joined_at(注册时间)，默认为最佳匹配
$order = "desc"; // string | 排序顺序: desc(default)、asc

try {
    $result = $apiInstance->getV5SearchUsers($q, $accessToken, $page, $perPage, $sort, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->getV5SearchUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **q** | **string**| 搜索关键字 |
 **accessToken** | **string**| 用户授权码 | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional] [default to 20]
 **sort** | **string**| 排序字段，joined_at(注册时间)，默认为最佳匹配 | [optional]
 **order** | **string**| 排序顺序: desc(default)、asc | [optional] [default to desc]

### Return type

[**\Gitee\Model\User[]**](../Model/User.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

