# Gitee\EnterprisesApi

All URIs are relative to *https://gitee.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteV5EnterprisesEnterpriseMembersUsername**](EnterprisesApi.md#deleteV5EnterprisesEnterpriseMembersUsername) | **DELETE** /v5/enterprises/{enterprise}/members/{username} | 移除企业成员
[**deleteV5EnterprisesEnterpriseWeekReportsReportIdCommentsId**](EnterprisesApi.md#deleteV5EnterprisesEnterpriseWeekReportsReportIdCommentsId) | **DELETE** /v5/enterprises/{enterprise}/week_reports/{report_id}/comments/{id} | 删除周报某个评论
[**getV5EnterpriseEnterprisePullRequests**](EnterprisesApi.md#getV5EnterpriseEnterprisePullRequests) | **GET** /v5/enterprise/{enterprise}/pull_requests | 企业 Pull Request 列表
[**getV5EnterprisesEnterprise**](EnterprisesApi.md#getV5EnterprisesEnterprise) | **GET** /v5/enterprises/{enterprise} | 获取一个企业
[**getV5EnterprisesEnterpriseMembers**](EnterprisesApi.md#getV5EnterprisesEnterpriseMembers) | **GET** /v5/enterprises/{enterprise}/members | 列出企业的所有成员
[**getV5EnterprisesEnterpriseMembersSearch**](EnterprisesApi.md#getV5EnterprisesEnterpriseMembersSearch) | **GET** /v5/enterprises/{enterprise}/members/search | 获取企业成员信息(通过用户名/邮箱)
[**getV5EnterprisesEnterpriseMembersUsername**](EnterprisesApi.md#getV5EnterprisesEnterpriseMembersUsername) | **GET** /v5/enterprises/{enterprise}/members/{username} | 获取企业的一个成员
[**getV5EnterprisesEnterpriseUsersUsernameWeekReports**](EnterprisesApi.md#getV5EnterprisesEnterpriseUsersUsernameWeekReports) | **GET** /v5/enterprises/{enterprise}/users/{username}/week_reports | 个人周报列表
[**getV5EnterprisesEnterpriseWeekReports**](EnterprisesApi.md#getV5EnterprisesEnterpriseWeekReports) | **GET** /v5/enterprises/{enterprise}/week_reports | 企业成员周报列表
[**getV5EnterprisesEnterpriseWeekReportsId**](EnterprisesApi.md#getV5EnterprisesEnterpriseWeekReportsId) | **GET** /v5/enterprises/{enterprise}/week_reports/{id} | 周报详情
[**getV5EnterprisesEnterpriseWeekReportsIdComments**](EnterprisesApi.md#getV5EnterprisesEnterpriseWeekReportsIdComments) | **GET** /v5/enterprises/{enterprise}/week_reports/{id}/comments | 某个周报评论列表
[**getV5UserEnterprises**](EnterprisesApi.md#getV5UserEnterprises) | **GET** /v5/user/enterprises | 列出授权用户所属的企业
[**patchV5EnterprisesEnterpriseWeekReportId**](EnterprisesApi.md#patchV5EnterprisesEnterpriseWeekReportId) | **PATCH** /v5/enterprises/{enterprise}/week_report/{id} | 编辑周报
[**postV5EnterprisesEnterpriseMembers**](EnterprisesApi.md#postV5EnterprisesEnterpriseMembers) | **POST** /v5/enterprises/{enterprise}/members | 添加或邀请企业成员
[**postV5EnterprisesEnterpriseWeekReport**](EnterprisesApi.md#postV5EnterprisesEnterpriseWeekReport) | **POST** /v5/enterprises/{enterprise}/week_report | 新建周报
[**postV5EnterprisesEnterpriseWeekReportsIdComment**](EnterprisesApi.md#postV5EnterprisesEnterpriseWeekReportsIdComment) | **POST** /v5/enterprises/{enterprise}/week_reports/{id}/comment | 评论周报
[**putV5EnterprisesEnterpriseMembersUsername**](EnterprisesApi.md#putV5EnterprisesEnterpriseMembersUsername) | **PUT** /v5/enterprises/{enterprise}/members/{username} | 修改企业成员权限或备注


# **deleteV5EnterprisesEnterpriseMembersUsername**
> deleteV5EnterprisesEnterpriseMembersUsername($enterprise, $username, $accessToken)

移除企业成员

移除企业成员

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\EnterprisesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterprise = "enterprise_example"; // string | 企业的路径(path/login)
$username = "username_example"; // string | 用户名(username/login)
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->deleteV5EnterprisesEnterpriseMembersUsername($enterprise, $username, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling EnterprisesApi->deleteV5EnterprisesEnterpriseMembersUsername: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterprise** | **string**| 企业的路径(path/login) |
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

# **deleteV5EnterprisesEnterpriseWeekReportsReportIdCommentsId**
> deleteV5EnterprisesEnterpriseWeekReportsReportIdCommentsId($enterprise, $reportId, $id, $accessToken)

删除周报某个评论

删除周报某个评论

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\EnterprisesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterprise = "enterprise_example"; // string | 企业的路径(path/login)
$reportId = 56; // int | 周报ID
$id = 56; // int | 评论ID
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->deleteV5EnterprisesEnterpriseWeekReportsReportIdCommentsId($enterprise, $reportId, $id, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling EnterprisesApi->deleteV5EnterprisesEnterpriseWeekReportsReportIdCommentsId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterprise** | **string**| 企业的路径(path/login) |
 **reportId** | **int**| 周报ID |
 **id** | **int**| 评论ID |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5EnterpriseEnterprisePullRequests**
> \Gitee\Model\PullRequest[] getV5EnterpriseEnterprisePullRequests($enterprise, $accessToken, $issueNumber, $repo, $programId, $state, $head, $base, $sort, $since, $direction, $milestoneNumber, $labels, $page, $perPage)

企业 Pull Request 列表

企业 Pull Request 列表

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\EnterprisesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterprise = "enterprise_example"; // string | 企业的路径(path/login)
$accessToken = "accessToken_example"; // string | 用户授权码
$issueNumber = "issueNumber_example"; // string | 可选。Issue 编号(区分大小写，无需添加 # 号)
$repo = "repo_example"; // string | 可选。仓库路径(path)
$programId = 56; // int | 可选。项目ID
$state = "open"; // string | 可选。Pull Request 状态
$head = "head_example"; // string | 可选。Pull Request 提交的源分支。格式：branch 或者：username:branch
$base = "base_example"; // string | 可选。Pull Request 提交目标分支的名称。
$sort = "created"; // string | 可选。排序字段，默认按创建时间
$since = "since_example"; // string | 可选。起始的更新时间，要求时间格式为 ISO 8601
$direction = "desc"; // string | 可选。升序/降序
$milestoneNumber = 56; // int | 可选。里程碑序号(id)
$labels = "labels_example"; // string | 用逗号分开的标签。如: bug,performance
$page = 1; // int | 当前的页码
$perPage = 20; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getV5EnterpriseEnterprisePullRequests($enterprise, $accessToken, $issueNumber, $repo, $programId, $state, $head, $base, $sort, $since, $direction, $milestoneNumber, $labels, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterprisesApi->getV5EnterpriseEnterprisePullRequests: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterprise** | **string**| 企业的路径(path/login) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **issueNumber** | **string**| 可选。Issue 编号(区分大小写，无需添加 # 号) | [optional]
 **repo** | **string**| 可选。仓库路径(path) | [optional]
 **programId** | **int**| 可选。项目ID | [optional]
 **state** | **string**| 可选。Pull Request 状态 | [optional] [default to open]
 **head** | **string**| 可选。Pull Request 提交的源分支。格式：branch 或者：username:branch | [optional]
 **base** | **string**| 可选。Pull Request 提交目标分支的名称。 | [optional]
 **sort** | **string**| 可选。排序字段，默认按创建时间 | [optional] [default to created]
 **since** | **string**| 可选。起始的更新时间，要求时间格式为 ISO 8601 | [optional]
 **direction** | **string**| 可选。升序/降序 | [optional] [default to desc]
 **milestoneNumber** | **int**| 可选。里程碑序号(id) | [optional]
 **labels** | **string**| 用逗号分开的标签。如: bug,performance | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional] [default to 20]

### Return type

[**\Gitee\Model\PullRequest[]**](../Model/PullRequest.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5EnterprisesEnterprise**
> \Gitee\Model\EnterpriseBasic getV5EnterprisesEnterprise($enterprise, $accessToken)

获取一个企业

获取一个企业

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\EnterprisesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterprise = "enterprise_example"; // string | 企业的路径(path/login)
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->getV5EnterprisesEnterprise($enterprise, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterprisesApi->getV5EnterprisesEnterprise: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterprise** | **string**| 企业的路径(path/login) |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\Gitee\Model\EnterpriseBasic**](../Model/EnterpriseBasic.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5EnterprisesEnterpriseMembers**
> \Gitee\Model\EnterpriseMember[] getV5EnterprisesEnterpriseMembers($enterprise, $accessToken, $role, $page, $perPage)

列出企业的所有成员

列出企业的所有成员

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\EnterprisesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterprise = "enterprise_example"; // string | 企业的路径(path/login)
$accessToken = "accessToken_example"; // string | 用户授权码
$role = "all"; // string | 根据角色筛选成员
$page = 1; // int | 当前的页码
$perPage = 20; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getV5EnterprisesEnterpriseMembers($enterprise, $accessToken, $role, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterprisesApi->getV5EnterprisesEnterpriseMembers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterprise** | **string**| 企业的路径(path/login) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **role** | **string**| 根据角色筛选成员 | [optional] [default to all]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional] [default to 20]

### Return type

[**\Gitee\Model\EnterpriseMember[]**](../Model/EnterpriseMember.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5EnterprisesEnterpriseMembersSearch**
> getV5EnterprisesEnterpriseMembersSearch($enterprise, $queryType, $queryValue, $accessToken)

获取企业成员信息(通过用户名/邮箱)

获取企业成员信息(通过用户名/邮箱)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\EnterprisesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterprise = "enterprise_example"; // string | 企业的路径(path/login)
$queryType = "queryType_example"; // string | 查询类型：username/email
$queryValue = "queryValue_example"; // string | 查询值
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->getV5EnterprisesEnterpriseMembersSearch($enterprise, $queryType, $queryValue, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling EnterprisesApi->getV5EnterprisesEnterpriseMembersSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterprise** | **string**| 企业的路径(path/login) |
 **queryType** | **string**| 查询类型：username/email |
 **queryValue** | **string**| 查询值 |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5EnterprisesEnterpriseMembersUsername**
> \Gitee\Model\EnterpriseMember getV5EnterprisesEnterpriseMembersUsername($enterprise, $username, $accessToken)

获取企业的一个成员

获取企业的一个成员

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\EnterprisesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterprise = "enterprise_example"; // string | 企业的路径(path/login)
$username = "username_example"; // string | 用户名(username/login)
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->getV5EnterprisesEnterpriseMembersUsername($enterprise, $username, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterprisesApi->getV5EnterprisesEnterpriseMembersUsername: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterprise** | **string**| 企业的路径(path/login) |
 **username** | **string**| 用户名(username/login) |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\Gitee\Model\EnterpriseMember**](../Model/EnterpriseMember.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5EnterprisesEnterpriseUsersUsernameWeekReports**
> \Gitee\Model\WeekReport[] getV5EnterprisesEnterpriseUsersUsernameWeekReports($enterprise, $username, $accessToken, $page, $perPage)

个人周报列表

个人周报列表

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\EnterprisesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterprise = "enterprise_example"; // string | 企业的路径(path/login)
$username = "username_example"; // string | 用户名(username/login)
$accessToken = "accessToken_example"; // string | 用户授权码
$page = 1; // int | 当前的页码
$perPage = 20; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getV5EnterprisesEnterpriseUsersUsernameWeekReports($enterprise, $username, $accessToken, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterprisesApi->getV5EnterprisesEnterpriseUsersUsernameWeekReports: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterprise** | **string**| 企业的路径(path/login) |
 **username** | **string**| 用户名(username/login) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional] [default to 20]

### Return type

[**\Gitee\Model\WeekReport[]**](../Model/WeekReport.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5EnterprisesEnterpriseWeekReports**
> \Gitee\Model\WeekReport[] getV5EnterprisesEnterpriseWeekReports($enterprise, $accessToken, $page, $perPage, $username, $year, $weekIndex, $date)

企业成员周报列表

企业成员周报列表

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\EnterprisesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterprise = "enterprise_example"; // string | 企业的路径(path/login)
$accessToken = "accessToken_example"; // string | 用户授权码
$page = 1; // int | 当前的页码
$perPage = 20; // int | 每页的数量，最大为 100
$username = "username_example"; // string | 用户名(username/login)
$year = 56; // int | 周报所属年
$weekIndex = 56; // int | 周报所属周
$date = "date_example"; // string | 周报日期(格式：2019-03-25)

try {
    $result = $apiInstance->getV5EnterprisesEnterpriseWeekReports($enterprise, $accessToken, $page, $perPage, $username, $year, $weekIndex, $date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterprisesApi->getV5EnterprisesEnterpriseWeekReports: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterprise** | **string**| 企业的路径(path/login) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional] [default to 20]
 **username** | **string**| 用户名(username/login) | [optional]
 **year** | **int**| 周报所属年 | [optional]
 **weekIndex** | **int**| 周报所属周 | [optional]
 **date** | **string**| 周报日期(格式：2019-03-25) | [optional]

### Return type

[**\Gitee\Model\WeekReport[]**](../Model/WeekReport.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5EnterprisesEnterpriseWeekReportsId**
> \Gitee\Model\WeekReport getV5EnterprisesEnterpriseWeekReportsId($enterprise, $id, $accessToken)

周报详情

周报详情

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\EnterprisesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterprise = "enterprise_example"; // string | 企业的路径(path/login)
$id = 56; // int | 周报ID
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->getV5EnterprisesEnterpriseWeekReportsId($enterprise, $id, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterprisesApi->getV5EnterprisesEnterpriseWeekReportsId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterprise** | **string**| 企业的路径(path/login) |
 **id** | **int**| 周报ID |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\Gitee\Model\WeekReport**](../Model/WeekReport.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5EnterprisesEnterpriseWeekReportsIdComments**
> \Gitee\Model\Note[] getV5EnterprisesEnterpriseWeekReportsIdComments($enterprise, $id, $accessToken, $page, $perPage)

某个周报评论列表

某个周报评论列表

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\EnterprisesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterprise = "enterprise_example"; // string | 企业的路径(path/login)
$id = 56; // int | 周报ID
$accessToken = "accessToken_example"; // string | 用户授权码
$page = 1; // int | 当前的页码
$perPage = 20; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getV5EnterprisesEnterpriseWeekReportsIdComments($enterprise, $id, $accessToken, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterprisesApi->getV5EnterprisesEnterpriseWeekReportsIdComments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterprise** | **string**| 企业的路径(path/login) |
 **id** | **int**| 周报ID |
 **accessToken** | **string**| 用户授权码 | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional] [default to 20]

### Return type

[**\Gitee\Model\Note[]**](../Model/Note.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5UserEnterprises**
> \Gitee\Model\EnterpriseBasic[] getV5UserEnterprises($accessToken, $page, $perPage, $admin)

列出授权用户所属的企业

列出授权用户所属的企业

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\EnterprisesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accessToken = "accessToken_example"; // string | 用户授权码
$page = 1; // int | 当前的页码
$perPage = 20; // int | 每页的数量，最大为 100
$admin = true; // bool | 只列出授权用户管理的企业

try {
    $result = $apiInstance->getV5UserEnterprises($accessToken, $page, $perPage, $admin);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterprisesApi->getV5UserEnterprises: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accessToken** | **string**| 用户授权码 | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional] [default to 20]
 **admin** | **bool**| 只列出授权用户管理的企业 | [optional] [default to true]

### Return type

[**\Gitee\Model\EnterpriseBasic[]**](../Model/EnterpriseBasic.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchV5EnterprisesEnterpriseWeekReportId**
> \Gitee\Model\WeekReport patchV5EnterprisesEnterpriseWeekReportId($enterprise, $id, $content, $accessToken)

编辑周报

编辑周报

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\EnterprisesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterprise = "enterprise_example"; // string | 企业的路径(path/login)
$id = 56; // int | 周报ID
$content = "content_example"; // string | 周报内容
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->patchV5EnterprisesEnterpriseWeekReportId($enterprise, $id, $content, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterprisesApi->patchV5EnterprisesEnterpriseWeekReportId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterprise** | **string**| 企业的路径(path/login) |
 **id** | **int**| 周报ID |
 **content** | **string**| 周报内容 |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\Gitee\Model\WeekReport**](../Model/WeekReport.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postV5EnterprisesEnterpriseMembers**
> postV5EnterprisesEnterpriseMembers($enterprise, $accessToken, $username, $email, $role, $name)

添加或邀请企业成员

添加或邀请企业成员

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\EnterprisesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterprise = "enterprise_example"; // string | 企业的路径(path/login)
$accessToken = "accessToken_example"; // string | 用户授权码
$username = "username_example"; // string | 需要邀请的用户名(username/login)，username,email至少填写一个
$email = "email_example"; // string | 要添加邮箱地址，若该邮箱未注册则自动创建帐号。username,email至少填写一个
$role = "member"; // string | 企业角色：member => 普通成员, outsourced => 外包成员, admin => 管理员
$name = "name_example"; // string | 企业成员真实姓名（备注）

try {
    $apiInstance->postV5EnterprisesEnterpriseMembers($enterprise, $accessToken, $username, $email, $role, $name);
} catch (Exception $e) {
    echo 'Exception when calling EnterprisesApi->postV5EnterprisesEnterpriseMembers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterprise** | **string**| 企业的路径(path/login) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **username** | **string**| 需要邀请的用户名(username/login)，username,email至少填写一个 | [optional]
 **email** | **string**| 要添加邮箱地址，若该邮箱未注册则自动创建帐号。username,email至少填写一个 | [optional]
 **role** | **string**| 企业角色：member &#x3D;&gt; 普通成员, outsourced &#x3D;&gt; 外包成员, admin &#x3D;&gt; 管理员 | [optional] [default to member]
 **name** | **string**| 企业成员真实姓名（备注） | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postV5EnterprisesEnterpriseWeekReport**
> \Gitee\Model\WeekReport postV5EnterprisesEnterpriseWeekReport($enterprise, $year, $content, $weekIndex, $accessToken, $date)

新建周报

新建周报

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\EnterprisesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterprise = "enterprise_example"; // string | 企业的路径(path/login)
$year = 56; // int | 周报所属年
$content = "content_example"; // string | 周报内容
$weekIndex = 56; // int | 周报所属周
$accessToken = "accessToken_example"; // string | 用户授权码
$date = "date_example"; // string | 周报日期(格式：2019-03-25)

try {
    $result = $apiInstance->postV5EnterprisesEnterpriseWeekReport($enterprise, $year, $content, $weekIndex, $accessToken, $date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterprisesApi->postV5EnterprisesEnterpriseWeekReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterprise** | **string**| 企业的路径(path/login) |
 **year** | **int**| 周报所属年 |
 **content** | **string**| 周报内容 |
 **weekIndex** | **int**| 周报所属周 |
 **accessToken** | **string**| 用户授权码 | [optional]
 **date** | **string**| 周报日期(格式：2019-03-25) | [optional]

### Return type

[**\Gitee\Model\WeekReport**](../Model/WeekReport.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postV5EnterprisesEnterpriseWeekReportsIdComment**
> \Gitee\Model\Note postV5EnterprisesEnterpriseWeekReportsIdComment($enterprise, $id, $body, $accessToken)

评论周报

评论周报

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\EnterprisesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterprise = "enterprise_example"; // string | 企业的路径(path/login)
$id = 56; // int | 周报ID
$body = "body_example"; // string | 评论的内容
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->postV5EnterprisesEnterpriseWeekReportsIdComment($enterprise, $id, $body, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterprisesApi->postV5EnterprisesEnterpriseWeekReportsIdComment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterprise** | **string**| 企业的路径(path/login) |
 **id** | **int**| 周报ID |
 **body** | **string**| 评论的内容 |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\Gitee\Model\Note**](../Model/Note.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putV5EnterprisesEnterpriseMembersUsername**
> \Gitee\Model\EnterpriseMember putV5EnterprisesEnterpriseMembersUsername($enterprise, $username, $accessToken, $role, $active, $name)

修改企业成员权限或备注

修改企业成员权限或备注

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\EnterprisesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterprise = "enterprise_example"; // string | 企业的路径(path/login)
$username = "username_example"; // string | 用户名(username/login)
$accessToken = "accessToken_example"; // string | 用户授权码
$role = "member"; // string | 企业角色：member => 普通成员, outsourced => 外包成员, admin => 管理员
$active = true; // bool | 是否可访问企业资源，默认:是。（若选否则禁止该用户访问企业资源）
$name = "name_example"; // string | 企业成员真实姓名（备注）

try {
    $result = $apiInstance->putV5EnterprisesEnterpriseMembersUsername($enterprise, $username, $accessToken, $role, $active, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterprisesApi->putV5EnterprisesEnterpriseMembersUsername: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterprise** | **string**| 企业的路径(path/login) |
 **username** | **string**| 用户名(username/login) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **role** | **string**| 企业角色：member &#x3D;&gt; 普通成员, outsourced &#x3D;&gt; 外包成员, admin &#x3D;&gt; 管理员 | [optional] [default to member]
 **active** | **bool**| 是否可访问企业资源，默认:是。（若选否则禁止该用户访问企业资源） | [optional] [default to true]
 **name** | **string**| 企业成员真实姓名（备注） | [optional]

### Return type

[**\Gitee\Model\EnterpriseMember**](../Model/EnterpriseMember.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

