# Gitee\RepositoriesApi

All URIs are relative to *https://gitee.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteV5ReposOwnerRepo**](RepositoriesApi.md#deleteV5ReposOwnerRepo) | **DELETE** /v5/repos/{owner}/{repo} | 删除一个仓库
[**deleteV5ReposOwnerRepoBaiduStatisticKey**](RepositoriesApi.md#deleteV5ReposOwnerRepoBaiduStatisticKey) | **DELETE** /v5/repos/{owner}/{repo}/baidu_statistic_key | 删除仓库的百度统计 key
[**deleteV5ReposOwnerRepoBranchesBranchProtection**](RepositoriesApi.md#deleteV5ReposOwnerRepoBranchesBranchProtection) | **DELETE** /v5/repos/{owner}/{repo}/branches/{branch}/protection | 取消保护分支的设置
[**deleteV5ReposOwnerRepoBranchesWildcardSetting**](RepositoriesApi.md#deleteV5ReposOwnerRepoBranchesWildcardSetting) | **DELETE** /v5/repos/{owner}/{repo}/branches/{wildcard}/setting | 删除仓库保护分支策略
[**deleteV5ReposOwnerRepoCollaboratorsUsername**](RepositoriesApi.md#deleteV5ReposOwnerRepoCollaboratorsUsername) | **DELETE** /v5/repos/{owner}/{repo}/collaborators/{username} | 移除仓库成员
[**deleteV5ReposOwnerRepoCommentsId**](RepositoriesApi.md#deleteV5ReposOwnerRepoCommentsId) | **DELETE** /v5/repos/{owner}/{repo}/comments/{id} | 删除Commit评论
[**deleteV5ReposOwnerRepoContentsPath**](RepositoriesApi.md#deleteV5ReposOwnerRepoContentsPath) | **DELETE** /v5/repos/{owner}/{repo}/contents/{path} | 删除文件
[**deleteV5ReposOwnerRepoKeysEnableId**](RepositoriesApi.md#deleteV5ReposOwnerRepoKeysEnableId) | **DELETE** /v5/repos/{owner}/{repo}/keys/enable/{id} | 停用仓库公钥
[**deleteV5ReposOwnerRepoKeysId**](RepositoriesApi.md#deleteV5ReposOwnerRepoKeysId) | **DELETE** /v5/repos/{owner}/{repo}/keys/{id} | 删除一个仓库公钥
[**deleteV5ReposOwnerRepoReleasesId**](RepositoriesApi.md#deleteV5ReposOwnerRepoReleasesId) | **DELETE** /v5/repos/{owner}/{repo}/releases/{id} | 删除仓库Release
[**getV5EnterprisesEnterpriseRepos**](RepositoriesApi.md#getV5EnterprisesEnterpriseRepos) | **GET** /v5/enterprises/{enterprise}/repos | 获取企业的所有仓库
[**getV5OrgsOrgRepos**](RepositoriesApi.md#getV5OrgsOrgRepos) | **GET** /v5/orgs/{org}/repos | 获取一个组织的仓库
[**getV5ReposOwnerRepo**](RepositoriesApi.md#getV5ReposOwnerRepo) | **GET** /v5/repos/{owner}/{repo} | 获取用户的某个仓库
[**getV5ReposOwnerRepoBaiduStatisticKey**](RepositoriesApi.md#getV5ReposOwnerRepoBaiduStatisticKey) | **GET** /v5/repos/{owner}/{repo}/baidu_statistic_key | 获取仓库的百度统计 key
[**getV5ReposOwnerRepoBranches**](RepositoriesApi.md#getV5ReposOwnerRepoBranches) | **GET** /v5/repos/{owner}/{repo}/branches | 获取所有分支
[**getV5ReposOwnerRepoBranchesBranch**](RepositoriesApi.md#getV5ReposOwnerRepoBranchesBranch) | **GET** /v5/repos/{owner}/{repo}/branches/{branch} | 获取单个分支
[**getV5ReposOwnerRepoCollaborators**](RepositoriesApi.md#getV5ReposOwnerRepoCollaborators) | **GET** /v5/repos/{owner}/{repo}/collaborators | 获取仓库的所有成员
[**getV5ReposOwnerRepoCollaboratorsUsername**](RepositoriesApi.md#getV5ReposOwnerRepoCollaboratorsUsername) | **GET** /v5/repos/{owner}/{repo}/collaborators/{username} | 判断用户是否为仓库成员
[**getV5ReposOwnerRepoCollaboratorsUsernamePermission**](RepositoriesApi.md#getV5ReposOwnerRepoCollaboratorsUsernamePermission) | **GET** /v5/repos/{owner}/{repo}/collaborators/{username}/permission | 查看仓库成员的权限
[**getV5ReposOwnerRepoComments**](RepositoriesApi.md#getV5ReposOwnerRepoComments) | **GET** /v5/repos/{owner}/{repo}/comments | 获取仓库的Commit评论
[**getV5ReposOwnerRepoCommentsId**](RepositoriesApi.md#getV5ReposOwnerRepoCommentsId) | **GET** /v5/repos/{owner}/{repo}/comments/{id} | 获取仓库的某条Commit评论
[**getV5ReposOwnerRepoCommits**](RepositoriesApi.md#getV5ReposOwnerRepoCommits) | **GET** /v5/repos/{owner}/{repo}/commits | 仓库的所有提交
[**getV5ReposOwnerRepoCommitsRefComments**](RepositoriesApi.md#getV5ReposOwnerRepoCommitsRefComments) | **GET** /v5/repos/{owner}/{repo}/commits/{ref}/comments | 获取单个Commit的评论
[**getV5ReposOwnerRepoCommitsSha**](RepositoriesApi.md#getV5ReposOwnerRepoCommitsSha) | **GET** /v5/repos/{owner}/{repo}/commits/{sha} | 仓库的某个提交
[**getV5ReposOwnerRepoCompareBaseHead**](RepositoriesApi.md#getV5ReposOwnerRepoCompareBaseHead) | **GET** /v5/repos/{owner}/{repo}/compare/{base}...{head} | 两个Commits之间对比的版本差异
[**getV5ReposOwnerRepoContentsPath**](RepositoriesApi.md#getV5ReposOwnerRepoContentsPath) | **GET** /v5/repos/{owner}/{repo}/contents(/{path}) | 获取仓库具体路径下的内容
[**getV5ReposOwnerRepoContributors**](RepositoriesApi.md#getV5ReposOwnerRepoContributors) | **GET** /v5/repos/{owner}/{repo}/contributors | 获取仓库贡献者
[**getV5ReposOwnerRepoForks**](RepositoriesApi.md#getV5ReposOwnerRepoForks) | **GET** /v5/repos/{owner}/{repo}/forks | 查看仓库的Forks
[**getV5ReposOwnerRepoKeys**](RepositoriesApi.md#getV5ReposOwnerRepoKeys) | **GET** /v5/repos/{owner}/{repo}/keys | 获取仓库已部署的公钥
[**getV5ReposOwnerRepoKeysAvailable**](RepositoriesApi.md#getV5ReposOwnerRepoKeysAvailable) | **GET** /v5/repos/{owner}/{repo}/keys/available | 获取仓库可部署的公钥
[**getV5ReposOwnerRepoKeysId**](RepositoriesApi.md#getV5ReposOwnerRepoKeysId) | **GET** /v5/repos/{owner}/{repo}/keys/{id} | 获取仓库的单个公钥
[**getV5ReposOwnerRepoPages**](RepositoriesApi.md#getV5ReposOwnerRepoPages) | **GET** /v5/repos/{owner}/{repo}/pages | 获取Pages信息
[**getV5ReposOwnerRepoPushConfig**](RepositoriesApi.md#getV5ReposOwnerRepoPushConfig) | **GET** /v5/repos/{owner}/{repo}/push_config | 获取仓库推送规则设置
[**getV5ReposOwnerRepoReadme**](RepositoriesApi.md#getV5ReposOwnerRepoReadme) | **GET** /v5/repos/{owner}/{repo}/readme | 获取仓库README
[**getV5ReposOwnerRepoReleases**](RepositoriesApi.md#getV5ReposOwnerRepoReleases) | **GET** /v5/repos/{owner}/{repo}/releases | 获取仓库的所有Releases
[**getV5ReposOwnerRepoReleasesId**](RepositoriesApi.md#getV5ReposOwnerRepoReleasesId) | **GET** /v5/repos/{owner}/{repo}/releases/{id} | 获取仓库的单个Releases
[**getV5ReposOwnerRepoReleasesLatest**](RepositoriesApi.md#getV5ReposOwnerRepoReleasesLatest) | **GET** /v5/repos/{owner}/{repo}/releases/latest | 获取仓库的最后更新的Release
[**getV5ReposOwnerRepoReleasesTagsTag**](RepositoriesApi.md#getV5ReposOwnerRepoReleasesTagsTag) | **GET** /v5/repos/{owner}/{repo}/releases/tags/{tag} | 根据Tag名称获取仓库的Release
[**getV5ReposOwnerRepoTags**](RepositoriesApi.md#getV5ReposOwnerRepoTags) | **GET** /v5/repos/{owner}/{repo}/tags | 列出仓库所有的tags
[**getV5UserRepos**](RepositoriesApi.md#getV5UserRepos) | **GET** /v5/user/repos | 列出授权用户的所有仓库
[**getV5UsersUsernameRepos**](RepositoriesApi.md#getV5UsersUsernameRepos) | **GET** /v5/users/{username}/repos | 获取某个用户的公开仓库
[**patchV5ReposOwnerRepo**](RepositoriesApi.md#patchV5ReposOwnerRepo) | **PATCH** /v5/repos/{owner}/{repo} | 更新仓库设置
[**patchV5ReposOwnerRepoCommentsId**](RepositoriesApi.md#patchV5ReposOwnerRepoCommentsId) | **PATCH** /v5/repos/{owner}/{repo}/comments/{id} | 更新Commit评论
[**patchV5ReposOwnerRepoReleasesId**](RepositoriesApi.md#patchV5ReposOwnerRepoReleasesId) | **PATCH** /v5/repos/{owner}/{repo}/releases/{id} | 更新仓库Release
[**postV5EnterprisesEnterpriseRepos**](RepositoriesApi.md#postV5EnterprisesEnterpriseRepos) | **POST** /v5/enterprises/{enterprise}/repos | 创建企业仓库
[**postV5OrgsOrgRepos**](RepositoriesApi.md#postV5OrgsOrgRepos) | **POST** /v5/orgs/{org}/repos | 创建组织仓库
[**postV5ReposOwnerRepoBaiduStatisticKey**](RepositoriesApi.md#postV5ReposOwnerRepoBaiduStatisticKey) | **POST** /v5/repos/{owner}/{repo}/baidu_statistic_key | 设置/更新仓库的百度统计 key
[**postV5ReposOwnerRepoBranches**](RepositoriesApi.md#postV5ReposOwnerRepoBranches) | **POST** /v5/repos/{owner}/{repo}/branches | 创建分支
[**postV5ReposOwnerRepoCommitsShaComments**](RepositoriesApi.md#postV5ReposOwnerRepoCommitsShaComments) | **POST** /v5/repos/{owner}/{repo}/commits/{sha}/comments | 创建Commit评论
[**postV5ReposOwnerRepoContentsPath**](RepositoriesApi.md#postV5ReposOwnerRepoContentsPath) | **POST** /v5/repos/{owner}/{repo}/contents/{path} | 新建文件
[**postV5ReposOwnerRepoForks**](RepositoriesApi.md#postV5ReposOwnerRepoForks) | **POST** /v5/repos/{owner}/{repo}/forks | Fork一个仓库
[**postV5ReposOwnerRepoKeys**](RepositoriesApi.md#postV5ReposOwnerRepoKeys) | **POST** /v5/repos/{owner}/{repo}/keys | 为仓库添加公钥
[**postV5ReposOwnerRepoOpen**](RepositoriesApi.md#postV5ReposOwnerRepoOpen) | **POST** /v5/repos/{owner}/{repo}/open | 开通Gitee Go
[**postV5ReposOwnerRepoPagesBuilds**](RepositoriesApi.md#postV5ReposOwnerRepoPagesBuilds) | **POST** /v5/repos/{owner}/{repo}/pages/builds | 请求建立Pages
[**postV5ReposOwnerRepoReleases**](RepositoriesApi.md#postV5ReposOwnerRepoReleases) | **POST** /v5/repos/{owner}/{repo}/releases | 创建仓库Release
[**postV5ReposOwnerRepoTags**](RepositoriesApi.md#postV5ReposOwnerRepoTags) | **POST** /v5/repos/{owner}/{repo}/tags | 创建一个仓库的 Tag
[**postV5ReposOwnerRepoTrafficData**](RepositoriesApi.md#postV5ReposOwnerRepoTrafficData) | **POST** /v5/repos/{owner}/{repo}/traffic-data | 获取最近30天的七日以内访问量
[**postV5UserRepos**](RepositoriesApi.md#postV5UserRepos) | **POST** /v5/user/repos | 创建一个仓库
[**putV5ReposOwnerRepoBranchesBranchProtection**](RepositoriesApi.md#putV5ReposOwnerRepoBranchesBranchProtection) | **PUT** /v5/repos/{owner}/{repo}/branches/{branch}/protection | 设置分支保护
[**putV5ReposOwnerRepoBranchesSettingNew**](RepositoriesApi.md#putV5ReposOwnerRepoBranchesSettingNew) | **PUT** /v5/repos/{owner}/{repo}/branches/setting/new | 新建仓库保护分支策略
[**putV5ReposOwnerRepoBranchesWildcardSetting**](RepositoriesApi.md#putV5ReposOwnerRepoBranchesWildcardSetting) | **PUT** /v5/repos/{owner}/{repo}/branches/{wildcard}/setting | 分支保护策略设置
[**putV5ReposOwnerRepoClear**](RepositoriesApi.md#putV5ReposOwnerRepoClear) | **PUT** /v5/repos/{owner}/{repo}/clear | 清空一个仓库
[**putV5ReposOwnerRepoCollaboratorsUsername**](RepositoriesApi.md#putV5ReposOwnerRepoCollaboratorsUsername) | **PUT** /v5/repos/{owner}/{repo}/collaborators/{username} | 添加仓库成员
[**putV5ReposOwnerRepoContentsPath**](RepositoriesApi.md#putV5ReposOwnerRepoContentsPath) | **PUT** /v5/repos/{owner}/{repo}/contents/{path} | 更新文件
[**putV5ReposOwnerRepoKeysEnableId**](RepositoriesApi.md#putV5ReposOwnerRepoKeysEnableId) | **PUT** /v5/repos/{owner}/{repo}/keys/enable/{id} | 启用仓库公钥
[**putV5ReposOwnerRepoPages**](RepositoriesApi.md#putV5ReposOwnerRepoPages) | **PUT** /v5/repos/{owner}/{repo}/pages | 上传设置 Pages SSL 证书和域名
[**putV5ReposOwnerRepoPushConfig**](RepositoriesApi.md#putV5ReposOwnerRepoPushConfig) | **PUT** /v5/repos/{owner}/{repo}/push_config | 修改仓库推送规则设置
[**putV5ReposOwnerRepoReviewer**](RepositoriesApi.md#putV5ReposOwnerRepoReviewer) | **PUT** /v5/repos/{owner}/{repo}/reviewer | 修改代码审查设置


# **deleteV5ReposOwnerRepo**
> deleteV5ReposOwnerRepo($owner, $repo, $accessToken)

删除一个仓库

删除一个仓库

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\RepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->deleteV5ReposOwnerRepo($owner, $repo, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling RepositoriesApi->deleteV5ReposOwnerRepo: ', $e->getMessage(), PHP_EOL;
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

# **deleteV5ReposOwnerRepoBaiduStatisticKey**
> deleteV5ReposOwnerRepoBaiduStatisticKey($owner, $repo, $accessToken)

删除仓库的百度统计 key

删除仓库的百度统计 key

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\RepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->deleteV5ReposOwnerRepoBaiduStatisticKey($owner, $repo, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling RepositoriesApi->deleteV5ReposOwnerRepoBaiduStatisticKey: ', $e->getMessage(), PHP_EOL;
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

# **deleteV5ReposOwnerRepoBranchesBranchProtection**
> deleteV5ReposOwnerRepoBranchesBranchProtection($owner, $repo, $branch, $accessToken)

取消保护分支的设置

取消保护分支的设置

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\RepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$branch = "branch_example"; // string | 分支名称
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->deleteV5ReposOwnerRepoBranchesBranchProtection($owner, $repo, $branch, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling RepositoriesApi->deleteV5ReposOwnerRepoBranchesBranchProtection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **branch** | **string**| 分支名称 |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteV5ReposOwnerRepoBranchesWildcardSetting**
> \Gitee\Model\ProtectionRule deleteV5ReposOwnerRepoBranchesWildcardSetting($owner, $repo, $wildcard, $accessToken)

删除仓库保护分支策略

删除仓库保护分支策略

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\RepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$wildcard = "wildcard_example"; // string | 分支/通配符
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->deleteV5ReposOwnerRepoBranchesWildcardSetting($owner, $repo, $wildcard, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoriesApi->deleteV5ReposOwnerRepoBranchesWildcardSetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **wildcard** | **string**| 分支/通配符 |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\Gitee\Model\ProtectionRule**](../Model/ProtectionRule.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteV5ReposOwnerRepoCollaboratorsUsername**
> deleteV5ReposOwnerRepoCollaboratorsUsername($owner, $repo, $username, $accessToken)

移除仓库成员

移除仓库成员

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\RepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$username = "username_example"; // string | 用户名(username/login)
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->deleteV5ReposOwnerRepoCollaboratorsUsername($owner, $repo, $username, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling RepositoriesApi->deleteV5ReposOwnerRepoCollaboratorsUsername: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
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

# **deleteV5ReposOwnerRepoCommentsId**
> deleteV5ReposOwnerRepoCommentsId($owner, $repo, $id, $accessToken)

删除Commit评论

删除Commit评论

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\RepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$id = 56; // int | 评论的ID
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->deleteV5ReposOwnerRepoCommentsId($owner, $repo, $id, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling RepositoriesApi->deleteV5ReposOwnerRepoCommentsId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
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

# **deleteV5ReposOwnerRepoContentsPath**
> \Gitee\Model\CommitContent deleteV5ReposOwnerRepoContentsPath($owner, $repo, $path, $sha, $message, $accessToken, $branch, $committerName, $committerEmail, $authorName, $authorEmail)

删除文件

删除文件

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\RepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$path = "path_example"; // string | 文件的路径
$sha = "sha_example"; // string | 文件的 Blob SHA，可通过 [获取仓库具体路径下的内容] API 获取
$message = "message_example"; // string | 提交信息
$accessToken = "accessToken_example"; // string | 用户授权码
$branch = "branch_example"; // string | 分支名称。默认为仓库对默认分支
$committerName = "committerName_example"; // string | Committer的名字，默认为当前用户的名字
$committerEmail = "committerEmail_example"; // string | Committer的邮箱，默认为当前用户的邮箱
$authorName = "authorName_example"; // string | Author的名字，默认为当前用户的名字
$authorEmail = "authorEmail_example"; // string | Author的邮箱，默认为当前用户的邮箱

try {
    $result = $apiInstance->deleteV5ReposOwnerRepoContentsPath($owner, $repo, $path, $sha, $message, $accessToken, $branch, $committerName, $committerEmail, $authorName, $authorEmail);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoriesApi->deleteV5ReposOwnerRepoContentsPath: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **path** | **string**| 文件的路径 |
 **sha** | **string**| 文件的 Blob SHA，可通过 [获取仓库具体路径下的内容] API 获取 |
 **message** | **string**| 提交信息 |
 **accessToken** | **string**| 用户授权码 | [optional]
 **branch** | **string**| 分支名称。默认为仓库对默认分支 | [optional]
 **committerName** | **string**| Committer的名字，默认为当前用户的名字 | [optional]
 **committerEmail** | **string**| Committer的邮箱，默认为当前用户的邮箱 | [optional]
 **authorName** | **string**| Author的名字，默认为当前用户的名字 | [optional]
 **authorEmail** | **string**| Author的邮箱，默认为当前用户的邮箱 | [optional]

### Return type

[**\Gitee\Model\CommitContent**](../Model/CommitContent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteV5ReposOwnerRepoKeysEnableId**
> deleteV5ReposOwnerRepoKeysEnableId($owner, $repo, $id, $accessToken)

停用仓库公钥

停用仓库公钥

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\RepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$id = 56; // int | 公钥 ID
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->deleteV5ReposOwnerRepoKeysEnableId($owner, $repo, $id, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling RepositoriesApi->deleteV5ReposOwnerRepoKeysEnableId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
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

# **deleteV5ReposOwnerRepoKeysId**
> deleteV5ReposOwnerRepoKeysId($owner, $repo, $id, $accessToken)

删除一个仓库公钥

删除一个仓库公钥

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\RepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$id = 56; // int | 公钥 ID
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->deleteV5ReposOwnerRepoKeysId($owner, $repo, $id, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling RepositoriesApi->deleteV5ReposOwnerRepoKeysId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
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

# **deleteV5ReposOwnerRepoReleasesId**
> deleteV5ReposOwnerRepoReleasesId($owner, $repo, $id, $accessToken)

删除仓库Release

删除仓库Release

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\RepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$id = 56; // int | 
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->deleteV5ReposOwnerRepoReleasesId($owner, $repo, $id, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling RepositoriesApi->deleteV5ReposOwnerRepoReleasesId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **id** | **int**|  |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5EnterprisesEnterpriseRepos**
> \Gitee\Model\Project getV5EnterprisesEnterpriseRepos($enterprise, $accessToken, $type, $direct, $page, $perPage)

获取企业的所有仓库

获取企业的所有仓库

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\RepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterprise = "enterprise_example"; // string | 企业的路径(path/login)
$accessToken = "accessToken_example"; // string | 用户授权码
$type = "all"; // string | 筛选仓库的类型，可以是 all, public, internal, private。默认: all
$direct = true; // bool | 只获取直属仓库，默认: false
$page = 1; // int | 当前的页码
$perPage = 20; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getV5EnterprisesEnterpriseRepos($enterprise, $accessToken, $type, $direct, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoriesApi->getV5EnterprisesEnterpriseRepos: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterprise** | **string**| 企业的路径(path/login) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **type** | **string**| 筛选仓库的类型，可以是 all, public, internal, private。默认: all | [optional] [default to all]
 **direct** | **bool**| 只获取直属仓库，默认: false | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional] [default to 20]

### Return type

[**\Gitee\Model\Project**](../Model/Project.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5OrgsOrgRepos**
> \Gitee\Model\Project getV5OrgsOrgRepos($org, $accessToken, $type, $page, $perPage)

获取一个组织的仓库

获取一个组织的仓库

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\RepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org = "org_example"; // string | 组织的路径(path/login)
$accessToken = "accessToken_example"; // string | 用户授权码
$type = "all"; // string | 筛选仓库的类型，可以是 all, public, private。默认: all
$page = 1; // int | 当前的页码
$perPage = 20; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getV5OrgsOrgRepos($org, $accessToken, $type, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoriesApi->getV5OrgsOrgRepos: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org** | **string**| 组织的路径(path/login) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **type** | **string**| 筛选仓库的类型，可以是 all, public, private。默认: all | [optional] [default to all]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional] [default to 20]

### Return type

[**\Gitee\Model\Project**](../Model/Project.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5ReposOwnerRepo**
> \Gitee\Model\Project getV5ReposOwnerRepo($owner, $repo, $accessToken)

获取用户的某个仓库

获取用户的某个仓库

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\RepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->getV5ReposOwnerRepo($owner, $repo, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoriesApi->getV5ReposOwnerRepo: ', $e->getMessage(), PHP_EOL;
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

[**\Gitee\Model\Project**](../Model/Project.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5ReposOwnerRepoBaiduStatisticKey**
> getV5ReposOwnerRepoBaiduStatisticKey($owner, $repo, $accessToken)

获取仓库的百度统计 key

获取仓库的百度统计 key

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\RepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->getV5ReposOwnerRepoBaiduStatisticKey($owner, $repo, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling RepositoriesApi->getV5ReposOwnerRepoBaiduStatisticKey: ', $e->getMessage(), PHP_EOL;
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

# **getV5ReposOwnerRepoBranches**
> \Gitee\Model\Branch[] getV5ReposOwnerRepoBranches($owner, $repo, $accessToken)

获取所有分支

获取所有分支

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\RepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->getV5ReposOwnerRepoBranches($owner, $repo, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoriesApi->getV5ReposOwnerRepoBranches: ', $e->getMessage(), PHP_EOL;
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

[**\Gitee\Model\Branch[]**](../Model/Branch.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5ReposOwnerRepoBranchesBranch**
> \Gitee\Model\CompleteBranch getV5ReposOwnerRepoBranchesBranch($owner, $repo, $branch, $accessToken)

获取单个分支

获取单个分支

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\RepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$branch = "branch_example"; // string | 分支名称
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->getV5ReposOwnerRepoBranchesBranch($owner, $repo, $branch, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoriesApi->getV5ReposOwnerRepoBranchesBranch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **branch** | **string**| 分支名称 |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\Gitee\Model\CompleteBranch**](../Model/CompleteBranch.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5ReposOwnerRepoCollaborators**
> \Gitee\Model\ProjectMember getV5ReposOwnerRepoCollaborators($owner, $repo, $accessToken, $page, $perPage)

获取仓库的所有成员

获取仓库的所有成员

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\RepositoriesApi(
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
    $result = $apiInstance->getV5ReposOwnerRepoCollaborators($owner, $repo, $accessToken, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoriesApi->getV5ReposOwnerRepoCollaborators: ', $e->getMessage(), PHP_EOL;
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

[**\Gitee\Model\ProjectMember**](../Model/ProjectMember.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5ReposOwnerRepoCollaboratorsUsername**
> getV5ReposOwnerRepoCollaboratorsUsername($owner, $repo, $username, $accessToken)

判断用户是否为仓库成员

判断用户是否为仓库成员

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\RepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$username = "username_example"; // string | 用户名(username/login)
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->getV5ReposOwnerRepoCollaboratorsUsername($owner, $repo, $username, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling RepositoriesApi->getV5ReposOwnerRepoCollaboratorsUsername: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
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

# **getV5ReposOwnerRepoCollaboratorsUsernamePermission**
> \Gitee\Model\ProjectMemberPermission getV5ReposOwnerRepoCollaboratorsUsernamePermission($owner, $repo, $username, $accessToken)

查看仓库成员的权限

查看仓库成员的权限

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\RepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$username = "username_example"; // string | 用户名(username/login)
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->getV5ReposOwnerRepoCollaboratorsUsernamePermission($owner, $repo, $username, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoriesApi->getV5ReposOwnerRepoCollaboratorsUsernamePermission: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **username** | **string**| 用户名(username/login) |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\Gitee\Model\ProjectMemberPermission**](../Model/ProjectMemberPermission.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5ReposOwnerRepoComments**
> \Gitee\Model\Note getV5ReposOwnerRepoComments($owner, $repo, $accessToken, $page, $perPage, $order)

获取仓库的Commit评论

获取仓库的Commit评论

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\RepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$accessToken = "accessToken_example"; // string | 用户授权码
$page = 1; // int | 当前的页码
$perPage = 20; // int | 每页的数量，最大为 100
$order = "asc"; // string | 排序顺序: asc(default),desc

try {
    $result = $apiInstance->getV5ReposOwnerRepoComments($owner, $repo, $accessToken, $page, $perPage, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoriesApi->getV5ReposOwnerRepoComments: ', $e->getMessage(), PHP_EOL;
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
 **order** | **string**| 排序顺序: asc(default),desc | [optional] [default to asc]

### Return type

[**\Gitee\Model\Note**](../Model/Note.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5ReposOwnerRepoCommentsId**
> \Gitee\Model\Note getV5ReposOwnerRepoCommentsId($owner, $repo, $id, $accessToken)

获取仓库的某条Commit评论

获取仓库的某条Commit评论

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\RepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$id = 56; // int | 评论的ID
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->getV5ReposOwnerRepoCommentsId($owner, $repo, $id, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoriesApi->getV5ReposOwnerRepoCommentsId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **id** | **int**| 评论的ID |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\Gitee\Model\Note**](../Model/Note.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5ReposOwnerRepoCommits**
> \Gitee\Model\RepoCommit[] getV5ReposOwnerRepoCommits($owner, $repo, $accessToken, $sha, $path, $author, $since, $until, $page, $perPage)

仓库的所有提交

仓库的所有提交

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\RepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$accessToken = "accessToken_example"; // string | 用户授权码
$sha = "sha_example"; // string | 提交起始的SHA值或者分支名. 默认: 仓库的默认分支
$path = "path_example"; // string | 包含该文件的提交
$author = "author_example"; // string | 提交作者的邮箱或个人空间地址(username/login)
$since = "since_example"; // string | 提交的起始时间，时间格式为 ISO 8601
$until = "until_example"; // string | 提交的最后时间，时间格式为 ISO 8601
$page = 1; // int | 当前的页码
$perPage = 20; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getV5ReposOwnerRepoCommits($owner, $repo, $accessToken, $sha, $path, $author, $since, $until, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoriesApi->getV5ReposOwnerRepoCommits: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **sha** | **string**| 提交起始的SHA值或者分支名. 默认: 仓库的默认分支 | [optional]
 **path** | **string**| 包含该文件的提交 | [optional]
 **author** | **string**| 提交作者的邮箱或个人空间地址(username/login) | [optional]
 **since** | **string**| 提交的起始时间，时间格式为 ISO 8601 | [optional]
 **until** | **string**| 提交的最后时间，时间格式为 ISO 8601 | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional] [default to 20]

### Return type

[**\Gitee\Model\RepoCommit[]**](../Model/RepoCommit.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5ReposOwnerRepoCommitsRefComments**
> \Gitee\Model\Note getV5ReposOwnerRepoCommitsRefComments($owner, $repo, $ref, $accessToken, $page, $perPage)

获取单个Commit的评论

获取单个Commit的评论

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\RepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$ref = "ref_example"; // string | Commit的Reference
$accessToken = "accessToken_example"; // string | 用户授权码
$page = 1; // int | 当前的页码
$perPage = 20; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getV5ReposOwnerRepoCommitsRefComments($owner, $repo, $ref, $accessToken, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoriesApi->getV5ReposOwnerRepoCommitsRefComments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **ref** | **string**| Commit的Reference |
 **accessToken** | **string**| 用户授权码 | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional] [default to 20]

### Return type

[**\Gitee\Model\Note**](../Model/Note.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5ReposOwnerRepoCommitsSha**
> \Gitee\Model\RepoCommitWithFiles getV5ReposOwnerRepoCommitsSha($owner, $repo, $sha, $accessToken)

仓库的某个提交

仓库的某个提交

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\RepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$sha = "sha_example"; // string | 提交的SHA值或者分支名
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->getV5ReposOwnerRepoCommitsSha($owner, $repo, $sha, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoriesApi->getV5ReposOwnerRepoCommitsSha: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **sha** | **string**| 提交的SHA值或者分支名 |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\Gitee\Model\RepoCommitWithFiles**](../Model/RepoCommitWithFiles.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5ReposOwnerRepoCompareBaseHead**
> \Gitee\Model\Compare getV5ReposOwnerRepoCompareBaseHead($owner, $repo, $base, $head, $accessToken)

两个Commits之间对比的版本差异

两个Commits之间对比的版本差异

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\RepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$base = "base_example"; // string | Commit提交的SHA值或者分支名作为对比起点
$head = "head_example"; // string | Commit提交的SHA值或者分支名作为对比终点
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->getV5ReposOwnerRepoCompareBaseHead($owner, $repo, $base, $head, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoriesApi->getV5ReposOwnerRepoCompareBaseHead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **base** | **string**| Commit提交的SHA值或者分支名作为对比起点 |
 **head** | **string**| Commit提交的SHA值或者分支名作为对比终点 |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\Gitee\Model\Compare**](../Model/Compare.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5ReposOwnerRepoContentsPath**
> \Gitee\Model\Content[] getV5ReposOwnerRepoContentsPath($owner, $repo, $path, $accessToken, $ref)

获取仓库具体路径下的内容

获取仓库具体路径下的内容

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\RepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$path = "path_example"; // string | 文件的路径
$accessToken = "accessToken_example"; // string | 用户授权码
$ref = "ref_example"; // string | 分支、tag或commit。默认: 仓库的默认分支(通常是master)

try {
    $result = $apiInstance->getV5ReposOwnerRepoContentsPath($owner, $repo, $path, $accessToken, $ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoriesApi->getV5ReposOwnerRepoContentsPath: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **path** | **string**| 文件的路径 |
 **accessToken** | **string**| 用户授权码 | [optional]
 **ref** | **string**| 分支、tag或commit。默认: 仓库的默认分支(通常是master) | [optional]

### Return type

[**\Gitee\Model\Content[]**](../Model/Content.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5ReposOwnerRepoContributors**
> \Gitee\Model\Contributor getV5ReposOwnerRepoContributors($owner, $repo, $accessToken, $type)

获取仓库贡献者

获取仓库贡献者

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\RepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$accessToken = "accessToken_example"; // string | 用户授权码
$type = "committers"; // string | 贡献者类型

try {
    $result = $apiInstance->getV5ReposOwnerRepoContributors($owner, $repo, $accessToken, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoriesApi->getV5ReposOwnerRepoContributors: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **type** | **string**| 贡献者类型 | [optional] [default to committers]

### Return type

[**\Gitee\Model\Contributor**](../Model/Contributor.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5ReposOwnerRepoForks**
> \Gitee\Model\Project getV5ReposOwnerRepoForks($owner, $repo, $accessToken, $sort, $page, $perPage)

查看仓库的Forks

查看仓库的Forks

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\RepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$accessToken = "accessToken_example"; // string | 用户授权码
$sort = "newest"; // string | 排序方式: fork的时间(newest, oldest)，star的人数(stargazers)
$page = 1; // int | 当前的页码
$perPage = 20; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getV5ReposOwnerRepoForks($owner, $repo, $accessToken, $sort, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoriesApi->getV5ReposOwnerRepoForks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **sort** | **string**| 排序方式: fork的时间(newest, oldest)，star的人数(stargazers) | [optional] [default to newest]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional] [default to 20]

### Return type

[**\Gitee\Model\Project**](../Model/Project.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5ReposOwnerRepoKeys**
> \Gitee\Model\SSHKey[] getV5ReposOwnerRepoKeys($owner, $repo, $accessToken, $page, $perPage)

获取仓库已部署的公钥

获取仓库已部署的公钥

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\RepositoriesApi(
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
    $result = $apiInstance->getV5ReposOwnerRepoKeys($owner, $repo, $accessToken, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoriesApi->getV5ReposOwnerRepoKeys: ', $e->getMessage(), PHP_EOL;
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

[**\Gitee\Model\SSHKey[]**](../Model/SSHKey.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5ReposOwnerRepoKeysAvailable**
> \Gitee\Model\SSHKeyBasic[] getV5ReposOwnerRepoKeysAvailable($owner, $repo, $accessToken, $page, $perPage)

获取仓库可部署的公钥

获取仓库可部署的公钥

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\RepositoriesApi(
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
    $result = $apiInstance->getV5ReposOwnerRepoKeysAvailable($owner, $repo, $accessToken, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoriesApi->getV5ReposOwnerRepoKeysAvailable: ', $e->getMessage(), PHP_EOL;
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

[**\Gitee\Model\SSHKeyBasic[]**](../Model/SSHKeyBasic.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5ReposOwnerRepoKeysId**
> \Gitee\Model\SSHKey getV5ReposOwnerRepoKeysId($owner, $repo, $id, $accessToken)

获取仓库的单个公钥

获取仓库的单个公钥

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\RepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$id = 56; // int | 公钥 ID
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->getV5ReposOwnerRepoKeysId($owner, $repo, $id, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoriesApi->getV5ReposOwnerRepoKeysId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
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

# **getV5ReposOwnerRepoPages**
> getV5ReposOwnerRepoPages($owner, $repo, $accessToken)

获取Pages信息

获取Pages信息

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\RepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->getV5ReposOwnerRepoPages($owner, $repo, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling RepositoriesApi->getV5ReposOwnerRepoPages: ', $e->getMessage(), PHP_EOL;
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

# **getV5ReposOwnerRepoPushConfig**
> \Gitee\Model\ProjectPushConfig getV5ReposOwnerRepoPushConfig($owner, $repo, $accessToken)

获取仓库推送规则设置

获取仓库推送规则设置

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\RepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->getV5ReposOwnerRepoPushConfig($owner, $repo, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoriesApi->getV5ReposOwnerRepoPushConfig: ', $e->getMessage(), PHP_EOL;
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

[**\Gitee\Model\ProjectPushConfig**](../Model/ProjectPushConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5ReposOwnerRepoReadme**
> \Gitee\Model\Content getV5ReposOwnerRepoReadme($owner, $repo, $accessToken, $ref)

获取仓库README

获取仓库README

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\RepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$accessToken = "accessToken_example"; // string | 用户授权码
$ref = "ref_example"; // string | 分支、tag或commit。默认: 仓库的默认分支(通常是master)

try {
    $result = $apiInstance->getV5ReposOwnerRepoReadme($owner, $repo, $accessToken, $ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoriesApi->getV5ReposOwnerRepoReadme: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **ref** | **string**| 分支、tag或commit。默认: 仓库的默认分支(通常是master) | [optional]

### Return type

[**\Gitee\Model\Content**](../Model/Content.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5ReposOwnerRepoReleases**
> \Gitee\Model\Release[] getV5ReposOwnerRepoReleases($owner, $repo, $accessToken, $page, $perPage, $direction)

获取仓库的所有Releases

获取仓库的所有Releases

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\RepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$accessToken = "accessToken_example"; // string | 用户授权码
$page = 1; // int | 当前的页码
$perPage = 20; // int | 每页的数量，最大为 100
$direction = "direction_example"; // string | 可选。升序/降序。不填为升序

try {
    $result = $apiInstance->getV5ReposOwnerRepoReleases($owner, $repo, $accessToken, $page, $perPage, $direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoriesApi->getV5ReposOwnerRepoReleases: ', $e->getMessage(), PHP_EOL;
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
 **direction** | **string**| 可选。升序/降序。不填为升序 | [optional]

### Return type

[**\Gitee\Model\Release[]**](../Model/Release.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5ReposOwnerRepoReleasesId**
> \Gitee\Model\Release getV5ReposOwnerRepoReleasesId($owner, $repo, $id, $accessToken)

获取仓库的单个Releases

获取仓库的单个Releases

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\RepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$id = 56; // int | 发行版本的ID
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->getV5ReposOwnerRepoReleasesId($owner, $repo, $id, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoriesApi->getV5ReposOwnerRepoReleasesId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **id** | **int**| 发行版本的ID |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\Gitee\Model\Release**](../Model/Release.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5ReposOwnerRepoReleasesLatest**
> \Gitee\Model\Release getV5ReposOwnerRepoReleasesLatest($owner, $repo, $accessToken)

获取仓库的最后更新的Release

获取仓库的最后更新的Release

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\RepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->getV5ReposOwnerRepoReleasesLatest($owner, $repo, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoriesApi->getV5ReposOwnerRepoReleasesLatest: ', $e->getMessage(), PHP_EOL;
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

[**\Gitee\Model\Release**](../Model/Release.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5ReposOwnerRepoReleasesTagsTag**
> \Gitee\Model\Release getV5ReposOwnerRepoReleasesTagsTag($owner, $repo, $tag, $accessToken)

根据Tag名称获取仓库的Release

根据Tag名称获取仓库的Release

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\RepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$tag = "tag_example"; // string | Tag 名称
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->getV5ReposOwnerRepoReleasesTagsTag($owner, $repo, $tag, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoriesApi->getV5ReposOwnerRepoReleasesTagsTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **tag** | **string**| Tag 名称 |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\Gitee\Model\Release**](../Model/Release.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5ReposOwnerRepoTags**
> \Gitee\Model\Tag getV5ReposOwnerRepoTags($owner, $repo, $accessToken)

列出仓库所有的tags

列出仓库所有的tags

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\RepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->getV5ReposOwnerRepoTags($owner, $repo, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoriesApi->getV5ReposOwnerRepoTags: ', $e->getMessage(), PHP_EOL;
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

[**\Gitee\Model\Tag**](../Model/Tag.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5UserRepos**
> \Gitee\Model\Project getV5UserRepos($accessToken, $visibility, $affiliation, $type, $sort, $direction, $q, $page, $perPage)

列出授权用户的所有仓库

列出授权用户的所有仓库

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\RepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accessToken = "accessToken_example"; // string | 用户授权码
$visibility = "visibility_example"; // string | 公开(public)、私有(private)或者所有(all)，默认: 所有(all)
$affiliation = "affiliation_example"; // string | owner(授权用户拥有的仓库)、collaborator(授权用户为仓库成员)、organization_member(授权用户为仓库所在组织并有访问仓库权限)、enterprise_member(授权用户所在企业并有访问仓库权限)、admin(所有有权限的，包括所管理的组织中所有仓库、所管理的企业的所有仓库)。                    可以用逗号分隔符组合。如: owner, organization_member 或 owner, collaborator, organization_member
$type = "type_example"; // string | 筛选用户仓库: 其创建(owner)、个人(personal)、其为成员(member)、公开(public)、私有(private)，不能与 visibility 或 affiliation 参数一并使用，否则会报 422 错误
$sort = "full_name"; // string | 排序方式: 创建时间(created)，更新时间(updated)，最后推送时间(pushed)，仓库所属与名称(full_name)。默认: full_name
$direction = "direction_example"; // string | 如果sort参数为full_name，用升序(asc)。否则降序(desc)
$q = "q_example"; // string | 搜索关键字
$page = 1; // int | 当前的页码
$perPage = 20; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getV5UserRepos($accessToken, $visibility, $affiliation, $type, $sort, $direction, $q, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoriesApi->getV5UserRepos: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accessToken** | **string**| 用户授权码 | [optional]
 **visibility** | **string**| 公开(public)、私有(private)或者所有(all)，默认: 所有(all) | [optional]
 **affiliation** | **string**| owner(授权用户拥有的仓库)、collaborator(授权用户为仓库成员)、organization_member(授权用户为仓库所在组织并有访问仓库权限)、enterprise_member(授权用户所在企业并有访问仓库权限)、admin(所有有权限的，包括所管理的组织中所有仓库、所管理的企业的所有仓库)。                    可以用逗号分隔符组合。如: owner, organization_member 或 owner, collaborator, organization_member | [optional]
 **type** | **string**| 筛选用户仓库: 其创建(owner)、个人(personal)、其为成员(member)、公开(public)、私有(private)，不能与 visibility 或 affiliation 参数一并使用，否则会报 422 错误 | [optional]
 **sort** | **string**| 排序方式: 创建时间(created)，更新时间(updated)，最后推送时间(pushed)，仓库所属与名称(full_name)。默认: full_name | [optional] [default to full_name]
 **direction** | **string**| 如果sort参数为full_name，用升序(asc)。否则降序(desc) | [optional]
 **q** | **string**| 搜索关键字 | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional] [default to 20]

### Return type

[**\Gitee\Model\Project**](../Model/Project.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV5UsersUsernameRepos**
> \Gitee\Model\Project getV5UsersUsernameRepos($username, $accessToken, $type, $sort, $direction, $page, $perPage)

获取某个用户的公开仓库

获取某个用户的公开仓库

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\RepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$username = "username_example"; // string | 用户名(username/login)
$accessToken = "accessToken_example"; // string | 用户授权码
$type = "all"; // string | 用户创建的仓库(owner)，用户个人仓库(personal)，用户为仓库成员(member)，所有(all)。默认: 所有(all)
$sort = "full_name"; // string | 排序方式: 创建时间(created)，更新时间(updated)，最后推送时间(pushed)，仓库所属与名称(full_name)。默认: full_name
$direction = "direction_example"; // string | 如果sort参数为full_name，用升序(asc)。否则降序(desc)
$page = 1; // int | 当前的页码
$perPage = 20; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getV5UsersUsernameRepos($username, $accessToken, $type, $sort, $direction, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoriesApi->getV5UsersUsernameRepos: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | **string**| 用户名(username/login) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **type** | **string**| 用户创建的仓库(owner)，用户个人仓库(personal)，用户为仓库成员(member)，所有(all)。默认: 所有(all) | [optional] [default to all]
 **sort** | **string**| 排序方式: 创建时间(created)，更新时间(updated)，最后推送时间(pushed)，仓库所属与名称(full_name)。默认: full_name | [optional] [default to full_name]
 **direction** | **string**| 如果sort参数为full_name，用升序(asc)。否则降序(desc) | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional] [default to 20]

### Return type

[**\Gitee\Model\Project**](../Model/Project.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchV5ReposOwnerRepo**
> \Gitee\Model\Project patchV5ReposOwnerRepo($owner, $repo, $name, $accessToken, $description, $homepage, $hasIssues, $hasWiki, $canComment, $issueComment, $securityHoleEnabled, $private, $path, $defaultBranch, $pullRequestsEnabled, $onlineEditEnabled, $lightweightPrEnabled, $mergeEnabled, $squashEnabled, $rebaseEnabled, $defaultMergeMethod, $issueTemplateSource)

更新仓库设置

更新仓库设置

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\RepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$name = "name_example"; // string | 仓库名称
$accessToken = "accessToken_example"; // string | 用户授权码
$description = "description_example"; // string | 仓库描述
$homepage = "homepage_example"; // string | 主页(eg: https://gitee.com)
$hasIssues = true; // bool | 允许提Issue与否。默认: 允许(true)
$hasWiki = true; // bool | 提供Wiki与否。默认: 提供(true)
$canComment = true; // bool | 允许用户对仓库进行评论。默认： 允许(true)
$issueComment = true; // bool | 允许对“关闭”状态的 Issue 进行评论。默认: 不允许(false)
$securityHoleEnabled = true; // bool | 这个Issue涉及到安全/隐私问题，提交后不公开此Issue（可见范围：仓库成员, 企业成员）
$private = true; // bool | 仓库公开或私有。
$path = "path_example"; // string | 更新仓库路径
$defaultBranch = "defaultBranch_example"; // string | 更新默认分支
$pullRequestsEnabled = true; // bool | 接受 pull request，协作开发
$onlineEditEnabled = true; // bool | 是否允许仓库文件在线编辑
$lightweightPrEnabled = true; // bool | 是否接受轻量级 pull request
$mergeEnabled = true; // bool | 是否开启 merge 合并方式, 默认为开启
$squashEnabled = true; // bool | 是否开启 squash 合并方式, 默认为开启
$rebaseEnabled = true; // bool | 是否开启 rebase 合并方式, 默认为开启
$defaultMergeMethod = "defaultMergeMethod_example"; // string | 选择默认合并 Pull Request 的方式,分别为 merge squash rebase
$issueTemplateSource = "issueTemplateSource_example"; // string | Issue 模版来源 project: 使用仓库 Issue Template 作为模版； enterprise: 使用企业工作项作为模版

try {
    $result = $apiInstance->patchV5ReposOwnerRepo($owner, $repo, $name, $accessToken, $description, $homepage, $hasIssues, $hasWiki, $canComment, $issueComment, $securityHoleEnabled, $private, $path, $defaultBranch, $pullRequestsEnabled, $onlineEditEnabled, $lightweightPrEnabled, $mergeEnabled, $squashEnabled, $rebaseEnabled, $defaultMergeMethod, $issueTemplateSource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoriesApi->patchV5ReposOwnerRepo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **name** | **string**| 仓库名称 |
 **accessToken** | **string**| 用户授权码 | [optional]
 **description** | **string**| 仓库描述 | [optional]
 **homepage** | **string**| 主页(eg: https://gitee.com) | [optional]
 **hasIssues** | **bool**| 允许提Issue与否。默认: 允许(true) | [optional] [default to true]
 **hasWiki** | **bool**| 提供Wiki与否。默认: 提供(true) | [optional] [default to true]
 **canComment** | **bool**| 允许用户对仓库进行评论。默认： 允许(true) | [optional] [default to true]
 **issueComment** | **bool**| 允许对“关闭”状态的 Issue 进行评论。默认: 不允许(false) | [optional]
 **securityHoleEnabled** | **bool**| 这个Issue涉及到安全/隐私问题，提交后不公开此Issue（可见范围：仓库成员, 企业成员） | [optional]
 **private** | **bool**| 仓库公开或私有。 | [optional]
 **path** | **string**| 更新仓库路径 | [optional]
 **defaultBranch** | **string**| 更新默认分支 | [optional]
 **pullRequestsEnabled** | **bool**| 接受 pull request，协作开发 | [optional]
 **onlineEditEnabled** | **bool**| 是否允许仓库文件在线编辑 | [optional]
 **lightweightPrEnabled** | **bool**| 是否接受轻量级 pull request | [optional]
 **mergeEnabled** | **bool**| 是否开启 merge 合并方式, 默认为开启 | [optional]
 **squashEnabled** | **bool**| 是否开启 squash 合并方式, 默认为开启 | [optional]
 **rebaseEnabled** | **bool**| 是否开启 rebase 合并方式, 默认为开启 | [optional]
 **defaultMergeMethod** | **string**| 选择默认合并 Pull Request 的方式,分别为 merge squash rebase | [optional]
 **issueTemplateSource** | **string**| Issue 模版来源 project: 使用仓库 Issue Template 作为模版； enterprise: 使用企业工作项作为模版 | [optional]

### Return type

[**\Gitee\Model\Project**](../Model/Project.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchV5ReposOwnerRepoCommentsId**
> \Gitee\Model\Note patchV5ReposOwnerRepoCommentsId($owner, $repo, $id, $body, $accessToken)

更新Commit评论

更新Commit评论

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\RepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$id = 56; // int | 评论的ID
$body = "body_example"; // string | 评论的内容
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->patchV5ReposOwnerRepoCommentsId($owner, $repo, $id, $body, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoriesApi->patchV5ReposOwnerRepoCommentsId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **id** | **int**| 评论的ID |
 **body** | **string**| 评论的内容 |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\Gitee\Model\Note**](../Model/Note.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchV5ReposOwnerRepoReleasesId**
> \Gitee\Model\Release patchV5ReposOwnerRepoReleasesId($owner, $repo, $tagName, $name, $body, $id, $accessToken, $prerelease)

更新仓库Release

更新仓库Release

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\RepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$tagName = "tagName_example"; // string | Tag 名称, 提倡以v字母为前缀做为Release名称，例如v1.0或者v2.3.4
$name = "name_example"; // string | Release 名称
$body = "body_example"; // string | Release 描述
$id = 56; // int | 
$accessToken = "accessToken_example"; // string | 用户授权码
$prerelease = true; // bool | 是否为预览版本。默认: false（非预览版本）

try {
    $result = $apiInstance->patchV5ReposOwnerRepoReleasesId($owner, $repo, $tagName, $name, $body, $id, $accessToken, $prerelease);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoriesApi->patchV5ReposOwnerRepoReleasesId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **tagName** | **string**| Tag 名称, 提倡以v字母为前缀做为Release名称，例如v1.0或者v2.3.4 |
 **name** | **string**| Release 名称 |
 **body** | **string**| Release 描述 |
 **id** | **int**|  |
 **accessToken** | **string**| 用户授权码 | [optional]
 **prerelease** | **bool**| 是否为预览版本。默认: false（非预览版本） | [optional]

### Return type

[**\Gitee\Model\Release**](../Model/Release.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postV5EnterprisesEnterpriseRepos**
> \Gitee\Model\Project postV5EnterprisesEnterpriseRepos($name, $enterprise, $accessToken, $description, $homepage, $hasIssues, $hasWiki, $canComment, $autoInit, $gitignoreTemplate, $licenseTemplate, $path, $private, $outsourced, $projectCreator, $members)

创建企业仓库

创建企业仓库

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\RepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 仓库名称
$enterprise = "enterprise_example"; // string | 企业的路径(path/login)
$accessToken = "accessToken_example"; // string | 用户授权码
$description = "description_example"; // string | 仓库描述
$homepage = "homepage_example"; // string | 主页(eg: https://gitee.com)
$hasIssues = true; // bool | 允许提Issue与否。默认: 允许(true)
$hasWiki = true; // bool | 提供Wiki与否。默认: 提供(true)
$canComment = true; // bool | 允许用户对仓库进行评论。默认： 允许(true)
$autoInit = true; // bool | 值为true时则会用README初始化仓库。默认: 不初始化(false)
$gitignoreTemplate = "gitignoreTemplate_example"; // string | Git Ignore模版
$licenseTemplate = "licenseTemplate_example"; // string | License模版
$path = "path_example"; // string | 仓库路径
$private = 0; // int | 仓库开源类型。0(私有), 1(外部开源), 2(内部开源)。默认: 0
$outsourced = true; // bool | 值为true值为外包仓库, false值为内部仓库。默认: 内部仓库(false)
$projectCreator = "projectCreator_example"; // string | 负责人的username
$members = "members_example"; // string | 用逗号分开的仓库成员。如: member1,member2

try {
    $result = $apiInstance->postV5EnterprisesEnterpriseRepos($name, $enterprise, $accessToken, $description, $homepage, $hasIssues, $hasWiki, $canComment, $autoInit, $gitignoreTemplate, $licenseTemplate, $path, $private, $outsourced, $projectCreator, $members);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoriesApi->postV5EnterprisesEnterpriseRepos: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| 仓库名称 |
 **enterprise** | **string**| 企业的路径(path/login) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **description** | **string**| 仓库描述 | [optional]
 **homepage** | **string**| 主页(eg: https://gitee.com) | [optional]
 **hasIssues** | **bool**| 允许提Issue与否。默认: 允许(true) | [optional] [default to true]
 **hasWiki** | **bool**| 提供Wiki与否。默认: 提供(true) | [optional] [default to true]
 **canComment** | **bool**| 允许用户对仓库进行评论。默认： 允许(true) | [optional] [default to true]
 **autoInit** | **bool**| 值为true时则会用README初始化仓库。默认: 不初始化(false) | [optional]
 **gitignoreTemplate** | **string**| Git Ignore模版 | [optional]
 **licenseTemplate** | **string**| License模版 | [optional]
 **path** | **string**| 仓库路径 | [optional]
 **private** | **int**| 仓库开源类型。0(私有), 1(外部开源), 2(内部开源)。默认: 0 | [optional] [default to 0]
 **outsourced** | **bool**| 值为true值为外包仓库, false值为内部仓库。默认: 内部仓库(false) | [optional]
 **projectCreator** | **string**| 负责人的username | [optional]
 **members** | **string**| 用逗号分开的仓库成员。如: member1,member2 | [optional]

### Return type

[**\Gitee\Model\Project**](../Model/Project.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postV5OrgsOrgRepos**
> \Gitee\Model\Project postV5OrgsOrgRepos($name, $org, $accessToken, $description, $homepage, $hasIssues, $hasWiki, $canComment, $public, $private, $autoInit, $gitignoreTemplate, $licenseTemplate, $path)

创建组织仓库

创建组织仓库

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\RepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 仓库名称
$org = "org_example"; // string | 组织的路径(path/login)
$accessToken = "accessToken_example"; // string | 用户授权码
$description = "description_example"; // string | 仓库描述
$homepage = "homepage_example"; // string | 主页(eg: https://gitee.com)
$hasIssues = true; // bool | 允许提Issue与否。默认: 允许(true)
$hasWiki = true; // bool | 提供Wiki与否。默认: 提供(true)
$canComment = true; // bool | 允许用户对仓库进行评论。默认： 允许(true)
$public = 56; // int | 仓库开源类型。0(私有), 1(外部开源), 2(内部开源)，注：与private互斥，以public为主。
$private = true; // bool | 仓库公开或私有。默认: 公开(false)，注：与public互斥，以public为主。
$autoInit = true; // bool | 值为true时则会用README初始化仓库。默认: 不初始化(false)
$gitignoreTemplate = "gitignoreTemplate_example"; // string | Git Ignore模版
$licenseTemplate = "licenseTemplate_example"; // string | License模版
$path = "path_example"; // string | 仓库路径

try {
    $result = $apiInstance->postV5OrgsOrgRepos($name, $org, $accessToken, $description, $homepage, $hasIssues, $hasWiki, $canComment, $public, $private, $autoInit, $gitignoreTemplate, $licenseTemplate, $path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoriesApi->postV5OrgsOrgRepos: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| 仓库名称 |
 **org** | **string**| 组织的路径(path/login) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **description** | **string**| 仓库描述 | [optional]
 **homepage** | **string**| 主页(eg: https://gitee.com) | [optional]
 **hasIssues** | **bool**| 允许提Issue与否。默认: 允许(true) | [optional] [default to true]
 **hasWiki** | **bool**| 提供Wiki与否。默认: 提供(true) | [optional] [default to true]
 **canComment** | **bool**| 允许用户对仓库进行评论。默认： 允许(true) | [optional] [default to true]
 **public** | **int**| 仓库开源类型。0(私有), 1(外部开源), 2(内部开源)，注：与private互斥，以public为主。 | [optional]
 **private** | **bool**| 仓库公开或私有。默认: 公开(false)，注：与public互斥，以public为主。 | [optional]
 **autoInit** | **bool**| 值为true时则会用README初始化仓库。默认: 不初始化(false) | [optional]
 **gitignoreTemplate** | **string**| Git Ignore模版 | [optional]
 **licenseTemplate** | **string**| License模版 | [optional]
 **path** | **string**| 仓库路径 | [optional]

### Return type

[**\Gitee\Model\Project**](../Model/Project.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postV5ReposOwnerRepoBaiduStatisticKey**
> postV5ReposOwnerRepoBaiduStatisticKey($owner, $repo, $accessToken, $key)

设置/更新仓库的百度统计 key

设置/更新仓库的百度统计 key

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\RepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$accessToken = "accessToken_example"; // string | 用户授权码
$key = "key_example"; // string | 通过百度统计页面获取的 hm.js? 后面的 key

try {
    $apiInstance->postV5ReposOwnerRepoBaiduStatisticKey($owner, $repo, $accessToken, $key);
} catch (Exception $e) {
    echo 'Exception when calling RepositoriesApi->postV5ReposOwnerRepoBaiduStatisticKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **key** | **string**| 通过百度统计页面获取的 hm.js? 后面的 key | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postV5ReposOwnerRepoBranches**
> \Gitee\Model\CompleteBranch postV5ReposOwnerRepoBranches($owner, $repo, $refs, $branchName, $accessToken)

创建分支

创建分支

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\RepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$refs = "master"; // string | 起点名称, 默认：master
$branchName = "branchName_example"; // string | 新创建的分支名称
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->postV5ReposOwnerRepoBranches($owner, $repo, $refs, $branchName, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoriesApi->postV5ReposOwnerRepoBranches: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **refs** | **string**| 起点名称, 默认：master | [default to master]
 **branchName** | **string**| 新创建的分支名称 |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\Gitee\Model\CompleteBranch**](../Model/CompleteBranch.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postV5ReposOwnerRepoCommitsShaComments**
> \Gitee\Model\Note postV5ReposOwnerRepoCommitsShaComments($owner, $repo, $sha, $body, $accessToken, $path, $position)

创建Commit评论

创建Commit评论

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\RepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$sha = "sha_example"; // string | 评论的sha值
$body = "body_example"; // string | 评论的内容
$accessToken = "accessToken_example"; // string | 用户授权码
$path = "path_example"; // string | 文件的相对路径
$position = 56; // int | Diff的相对行数

try {
    $result = $apiInstance->postV5ReposOwnerRepoCommitsShaComments($owner, $repo, $sha, $body, $accessToken, $path, $position);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoriesApi->postV5ReposOwnerRepoCommitsShaComments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **sha** | **string**| 评论的sha值 |
 **body** | **string**| 评论的内容 |
 **accessToken** | **string**| 用户授权码 | [optional]
 **path** | **string**| 文件的相对路径 | [optional]
 **position** | **int**| Diff的相对行数 | [optional]

### Return type

[**\Gitee\Model\Note**](../Model/Note.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postV5ReposOwnerRepoContentsPath**
> \Gitee\Model\CommitContent postV5ReposOwnerRepoContentsPath($owner, $repo, $path, $content, $message, $accessToken, $branch, $committerName, $committerEmail, $authorName, $authorEmail)

新建文件

新建文件

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\RepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$path = "path_example"; // string | 文件的路径
$content = "content_example"; // string | 文件内容, 要用 base64 编码
$message = "message_example"; // string | 提交信息
$accessToken = "accessToken_example"; // string | 用户授权码
$branch = "branch_example"; // string | 分支名称。默认为仓库对默认分支
$committerName = "committerName_example"; // string | Committer的名字，默认为当前用户的名字
$committerEmail = "committerEmail_example"; // string | Committer的邮箱，默认为当前用户的邮箱
$authorName = "authorName_example"; // string | Author的名字，默认为当前用户的名字
$authorEmail = "authorEmail_example"; // string | Author的邮箱，默认为当前用户的邮箱

try {
    $result = $apiInstance->postV5ReposOwnerRepoContentsPath($owner, $repo, $path, $content, $message, $accessToken, $branch, $committerName, $committerEmail, $authorName, $authorEmail);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoriesApi->postV5ReposOwnerRepoContentsPath: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **path** | **string**| 文件的路径 |
 **content** | **string**| 文件内容, 要用 base64 编码 |
 **message** | **string**| 提交信息 |
 **accessToken** | **string**| 用户授权码 | [optional]
 **branch** | **string**| 分支名称。默认为仓库对默认分支 | [optional]
 **committerName** | **string**| Committer的名字，默认为当前用户的名字 | [optional]
 **committerEmail** | **string**| Committer的邮箱，默认为当前用户的邮箱 | [optional]
 **authorName** | **string**| Author的名字，默认为当前用户的名字 | [optional]
 **authorEmail** | **string**| Author的邮箱，默认为当前用户的邮箱 | [optional]

### Return type

[**\Gitee\Model\CommitContent**](../Model/CommitContent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postV5ReposOwnerRepoForks**
> \Gitee\Model\Project postV5ReposOwnerRepoForks($owner, $repo, $accessToken, $organization, $name, $path)

Fork一个仓库

Fork一个仓库

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\RepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$accessToken = "accessToken_example"; // string | 用户授权码
$organization = "organization_example"; // string | 组织空间地址，不填写默认Fork到用户个人空间地址
$name = "name_example"; // string | fork 后仓库名称。默认: 源仓库名称
$path = "path_example"; // string | fork 后仓库地址。默认: 源仓库地址

try {
    $result = $apiInstance->postV5ReposOwnerRepoForks($owner, $repo, $accessToken, $organization, $name, $path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoriesApi->postV5ReposOwnerRepoForks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **organization** | **string**| 组织空间地址，不填写默认Fork到用户个人空间地址 | [optional]
 **name** | **string**| fork 后仓库名称。默认: 源仓库名称 | [optional]
 **path** | **string**| fork 后仓库地址。默认: 源仓库地址 | [optional]

### Return type

[**\Gitee\Model\Project**](../Model/Project.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postV5ReposOwnerRepoKeys**
> \Gitee\Model\SSHKey postV5ReposOwnerRepoKeys($owner, $repo, $key, $title, $accessToken)

为仓库添加公钥

为仓库添加公钥

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\RepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$key = "key_example"; // string | 公钥内容
$title = "title_example"; // string | 公钥名称
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->postV5ReposOwnerRepoKeys($owner, $repo, $key, $title, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoriesApi->postV5ReposOwnerRepoKeys: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
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

# **postV5ReposOwnerRepoOpen**
> postV5ReposOwnerRepoOpen($owner, $repo, $accessToken)

开通Gitee Go

开通Gitee Go

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\RepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库path
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->postV5ReposOwnerRepoOpen($owner, $repo, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling RepositoriesApi->postV5ReposOwnerRepoOpen: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库path |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postV5ReposOwnerRepoPagesBuilds**
> postV5ReposOwnerRepoPagesBuilds($owner, $repo, $accessToken)

请求建立Pages

请求建立Pages

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\RepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->postV5ReposOwnerRepoPagesBuilds($owner, $repo, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling RepositoriesApi->postV5ReposOwnerRepoPagesBuilds: ', $e->getMessage(), PHP_EOL;
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

# **postV5ReposOwnerRepoReleases**
> \Gitee\Model\Release postV5ReposOwnerRepoReleases($owner, $repo, $tagName, $name, $body, $targetCommitish, $accessToken, $prerelease)

创建仓库Release

创建仓库Release

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\RepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$tagName = "tagName_example"; // string | Tag 名称, 提倡以v字母为前缀做为Release名称，例如v1.0或者v2.3.4
$name = "name_example"; // string | Release 名称
$body = "body_example"; // string | Release 描述
$targetCommitish = "targetCommitish_example"; // string | 分支名称或者commit SHA, 默认是当前默认分支
$accessToken = "accessToken_example"; // string | 用户授权码
$prerelease = true; // bool | 是否为预览版本。默认: false（非预览版本）

try {
    $result = $apiInstance->postV5ReposOwnerRepoReleases($owner, $repo, $tagName, $name, $body, $targetCommitish, $accessToken, $prerelease);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoriesApi->postV5ReposOwnerRepoReleases: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **tagName** | **string**| Tag 名称, 提倡以v字母为前缀做为Release名称，例如v1.0或者v2.3.4 |
 **name** | **string**| Release 名称 |
 **body** | **string**| Release 描述 |
 **targetCommitish** | **string**| 分支名称或者commit SHA, 默认是当前默认分支 |
 **accessToken** | **string**| 用户授权码 | [optional]
 **prerelease** | **bool**| 是否为预览版本。默认: false（非预览版本） | [optional]

### Return type

[**\Gitee\Model\Release**](../Model/Release.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postV5ReposOwnerRepoTags**
> \Gitee\Model\Tag postV5ReposOwnerRepoTags($owner, $repo, $refs, $tagName, $accessToken, $tagMessage)

创建一个仓库的 Tag

创建一个仓库的 Tag

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\RepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$refs = "master"; // string | 起点名称, 默认：master
$tagName = "tagName_example"; // string | 新创建的标签名称
$accessToken = "accessToken_example"; // string | 用户授权码
$tagMessage = "tagMessage_example"; // string | Tag 描述, 默认为空

try {
    $result = $apiInstance->postV5ReposOwnerRepoTags($owner, $repo, $refs, $tagName, $accessToken, $tagMessage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoriesApi->postV5ReposOwnerRepoTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **refs** | **string**| 起点名称, 默认：master | [default to master]
 **tagName** | **string**| 新创建的标签名称 |
 **accessToken** | **string**| 用户授权码 | [optional]
 **tagMessage** | **string**| Tag 描述, 默认为空 | [optional]

### Return type

[**\Gitee\Model\Tag**](../Model/Tag.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postV5ReposOwnerRepoTrafficData**
> \Gitee\Model\ProjectTrafficData postV5ReposOwnerRepoTrafficData($owner, $repo, $accessToken, $startDay, $endDay)

获取最近30天的七日以内访问量

获取最近30天的七日以内访问量

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\RepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$accessToken = "accessToken_example"; // string | 用户授权码
$startDay = "startDay_example"; // string | 访问量的开始时间，默认今天，格式：yyyy-MM-dd
$endDay = "endDay_example"; // string | 访问量的结束时间，默认七天前，格式：yyyy-MM-dd

try {
    $result = $apiInstance->postV5ReposOwnerRepoTrafficData($owner, $repo, $accessToken, $startDay, $endDay);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoriesApi->postV5ReposOwnerRepoTrafficData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **startDay** | **string**| 访问量的开始时间，默认今天，格式：yyyy-MM-dd | [optional]
 **endDay** | **string**| 访问量的结束时间，默认七天前，格式：yyyy-MM-dd | [optional]

### Return type

[**\Gitee\Model\ProjectTrafficData**](../Model/ProjectTrafficData.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postV5UserRepos**
> \Gitee\Model\Project postV5UserRepos($name, $accessToken, $description, $homepage, $hasIssues, $hasWiki, $canComment, $autoInit, $gitignoreTemplate, $licenseTemplate, $path, $private)

创建一个仓库

创建一个仓库

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\RepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 仓库名称
$accessToken = "accessToken_example"; // string | 用户授权码
$description = "description_example"; // string | 仓库描述
$homepage = "homepage_example"; // string | 主页(eg: https://gitee.com)
$hasIssues = true; // bool | 允许提Issue与否。默认: 允许(true)
$hasWiki = true; // bool | 提供Wiki与否。默认: 提供(true)
$canComment = true; // bool | 允许用户对仓库进行评论。默认： 允许(true)
$autoInit = true; // bool | 值为true时则会用README初始化仓库。默认: 不初始化(false)
$gitignoreTemplate = "gitignoreTemplate_example"; // string | Git Ignore模版
$licenseTemplate = "licenseTemplate_example"; // string | License模版
$path = "path_example"; // string | 仓库路径
$private = true; // bool | 目前仅支持私有

try {
    $result = $apiInstance->postV5UserRepos($name, $accessToken, $description, $homepage, $hasIssues, $hasWiki, $canComment, $autoInit, $gitignoreTemplate, $licenseTemplate, $path, $private);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoriesApi->postV5UserRepos: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| 仓库名称 |
 **accessToken** | **string**| 用户授权码 | [optional]
 **description** | **string**| 仓库描述 | [optional]
 **homepage** | **string**| 主页(eg: https://gitee.com) | [optional]
 **hasIssues** | **bool**| 允许提Issue与否。默认: 允许(true) | [optional] [default to true]
 **hasWiki** | **bool**| 提供Wiki与否。默认: 提供(true) | [optional] [default to true]
 **canComment** | **bool**| 允许用户对仓库进行评论。默认： 允许(true) | [optional] [default to true]
 **autoInit** | **bool**| 值为true时则会用README初始化仓库。默认: 不初始化(false) | [optional]
 **gitignoreTemplate** | **string**| Git Ignore模版 | [optional]
 **licenseTemplate** | **string**| License模版 | [optional]
 **path** | **string**| 仓库路径 | [optional]
 **private** | **bool**| 目前仅支持私有 | [optional] [default to true]

### Return type

[**\Gitee\Model\Project**](../Model/Project.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putV5ReposOwnerRepoBranchesBranchProtection**
> \Gitee\Model\CompleteBranch putV5ReposOwnerRepoBranchesBranchProtection($owner, $repo, $branch, $accessToken)

设置分支保护

设置分支保护

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\RepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$branch = "branch_example"; // string | 分支名称
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->putV5ReposOwnerRepoBranchesBranchProtection($owner, $repo, $branch, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoriesApi->putV5ReposOwnerRepoBranchesBranchProtection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **branch** | **string**| 分支名称 |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\Gitee\Model\CompleteBranch**](../Model/CompleteBranch.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putV5ReposOwnerRepoBranchesSettingNew**
> \Gitee\Model\ProtectionRule putV5ReposOwnerRepoBranchesSettingNew($owner, $repo, $wildcard, $pusher, $merger, $mode, $accessToken)

新建仓库保护分支策略

新建仓库保护分支策略

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\RepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$wildcard = "wildcard_example"; // string | 分支/通配符
$pusher = "admin"; // string | admin: 仓库管理员, none: 禁止任何人合并; 用户: 个人的地址path(多个用户用 ';' 隔开)
$merger = "admin"; // string | admin: 仓库管理员, none: 禁止任何人合并; 用户: 个人的地址path(多个用户用 ';' 隔开)
$mode = "standard"; // string | 模式 standard: 标准模式, review: 评审模式
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->putV5ReposOwnerRepoBranchesSettingNew($owner, $repo, $wildcard, $pusher, $merger, $mode, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoriesApi->putV5ReposOwnerRepoBranchesSettingNew: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **wildcard** | **string**| 分支/通配符 |
 **pusher** | **string**| admin: 仓库管理员, none: 禁止任何人合并; 用户: 个人的地址path(多个用户用 &#39;;&#39; 隔开) | [default to admin]
 **merger** | **string**| admin: 仓库管理员, none: 禁止任何人合并; 用户: 个人的地址path(多个用户用 &#39;;&#39; 隔开) | [default to admin]
 **mode** | **string**| 模式 standard: 标准模式, review: 评审模式 | [default to standard]
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\Gitee\Model\ProtectionRule**](../Model/ProtectionRule.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putV5ReposOwnerRepoBranchesWildcardSetting**
> \Gitee\Model\ProtectionRule putV5ReposOwnerRepoBranchesWildcardSetting($owner, $repo, $wildcard, $pusher, $merger, $mode, $accessToken, $newWildcard)

分支保护策略设置

分支保护策略设置

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\RepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$wildcard = "wildcard_example"; // string | 分支/通配符
$pusher = "admin"; // string | admin: 仓库管理员, none: 禁止任何人合并; 用户: 个人的地址path(多个用户用 ';' 隔开)
$merger = "admin"; // string | admin: 仓库管理员, none: 禁止任何人合并; 用户: 个人的地址path(多个用户用 ';' 隔开)
$mode = "standard"; // string | 模式 standard: 标准模式, review: 评审模式
$accessToken = "accessToken_example"; // string | 用户授权码
$newWildcard = "newWildcard_example"; // string | 新分支/通配符(为空不修改)

try {
    $result = $apiInstance->putV5ReposOwnerRepoBranchesWildcardSetting($owner, $repo, $wildcard, $pusher, $merger, $mode, $accessToken, $newWildcard);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoriesApi->putV5ReposOwnerRepoBranchesWildcardSetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **wildcard** | **string**| 分支/通配符 |
 **pusher** | **string**| admin: 仓库管理员, none: 禁止任何人合并; 用户: 个人的地址path(多个用户用 &#39;;&#39; 隔开) | [default to admin]
 **merger** | **string**| admin: 仓库管理员, none: 禁止任何人合并; 用户: 个人的地址path(多个用户用 &#39;;&#39; 隔开) | [default to admin]
 **mode** | **string**| 模式 standard: 标准模式, review: 评审模式 | [default to standard]
 **accessToken** | **string**| 用户授权码 | [optional]
 **newWildcard** | **string**| 新分支/通配符(为空不修改) | [optional]

### Return type

[**\Gitee\Model\ProtectionRule**](../Model/ProtectionRule.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putV5ReposOwnerRepoClear**
> putV5ReposOwnerRepoClear($owner, $repo, $accessToken)

清空一个仓库

清空一个仓库

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\RepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->putV5ReposOwnerRepoClear($owner, $repo, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling RepositoriesApi->putV5ReposOwnerRepoClear: ', $e->getMessage(), PHP_EOL;
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

# **putV5ReposOwnerRepoCollaboratorsUsername**
> \Gitee\Model\ProjectMember putV5ReposOwnerRepoCollaboratorsUsername($owner, $repo, $username, $permission, $accessToken)

添加仓库成员

添加仓库成员

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\RepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$username = "username_example"; // string | 用户名(username/login)
$permission = "push"; // string | 成员权限: 拉代码(pull)，推代码(push)，管理员(admin)。默认: push
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->putV5ReposOwnerRepoCollaboratorsUsername($owner, $repo, $username, $permission, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoriesApi->putV5ReposOwnerRepoCollaboratorsUsername: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **username** | **string**| 用户名(username/login) |
 **permission** | **string**| 成员权限: 拉代码(pull)，推代码(push)，管理员(admin)。默认: push | [default to push]
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\Gitee\Model\ProjectMember**](../Model/ProjectMember.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putV5ReposOwnerRepoContentsPath**
> \Gitee\Model\CommitContent putV5ReposOwnerRepoContentsPath($owner, $repo, $path, $content, $sha, $message, $accessToken, $branch, $committerName, $committerEmail, $authorName, $authorEmail)

更新文件

更新文件

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\RepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$path = "path_example"; // string | 文件的路径
$content = "content_example"; // string | 文件内容, 要用 base64 编码
$sha = "sha_example"; // string | 文件的 Blob SHA，可通过 [获取仓库具体路径下的内容] API 获取
$message = "message_example"; // string | 提交信息
$accessToken = "accessToken_example"; // string | 用户授权码
$branch = "branch_example"; // string | 分支名称。默认为仓库对默认分支
$committerName = "committerName_example"; // string | Committer的名字，默认为当前用户的名字
$committerEmail = "committerEmail_example"; // string | Committer的邮箱，默认为当前用户的邮箱
$authorName = "authorName_example"; // string | Author的名字，默认为当前用户的名字
$authorEmail = "authorEmail_example"; // string | Author的邮箱，默认为当前用户的邮箱

try {
    $result = $apiInstance->putV5ReposOwnerRepoContentsPath($owner, $repo, $path, $content, $sha, $message, $accessToken, $branch, $committerName, $committerEmail, $authorName, $authorEmail);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoriesApi->putV5ReposOwnerRepoContentsPath: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **path** | **string**| 文件的路径 |
 **content** | **string**| 文件内容, 要用 base64 编码 |
 **sha** | **string**| 文件的 Blob SHA，可通过 [获取仓库具体路径下的内容] API 获取 |
 **message** | **string**| 提交信息 |
 **accessToken** | **string**| 用户授权码 | [optional]
 **branch** | **string**| 分支名称。默认为仓库对默认分支 | [optional]
 **committerName** | **string**| Committer的名字，默认为当前用户的名字 | [optional]
 **committerEmail** | **string**| Committer的邮箱，默认为当前用户的邮箱 | [optional]
 **authorName** | **string**| Author的名字，默认为当前用户的名字 | [optional]
 **authorEmail** | **string**| Author的邮箱，默认为当前用户的邮箱 | [optional]

### Return type

[**\Gitee\Model\CommitContent**](../Model/CommitContent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putV5ReposOwnerRepoKeysEnableId**
> putV5ReposOwnerRepoKeysEnableId($owner, $repo, $id, $accessToken)

启用仓库公钥

启用仓库公钥

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\RepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$id = 56; // int | 公钥 ID
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->putV5ReposOwnerRepoKeysEnableId($owner, $repo, $id, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling RepositoriesApi->putV5ReposOwnerRepoKeysEnableId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **id** | **int**| 公钥 ID |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putV5ReposOwnerRepoPages**
> putV5ReposOwnerRepoPages($owner, $repo, $domain, $accessToken, $sslCertificateCrt, $sslCertificateKey)

上传设置 Pages SSL 证书和域名

上传设置 Pages SSL 证书和域名

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\RepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$domain = "domain_example"; // string | 自定义域名
$accessToken = "accessToken_example"; // string | 用户授权码
$sslCertificateCrt = "sslCertificateCrt_example"; // string | 证书文件内容（需进行BASE64编码）
$sslCertificateKey = "sslCertificateKey_example"; // string | 私钥文件内容（需进行BASE64编码）

try {
    $apiInstance->putV5ReposOwnerRepoPages($owner, $repo, $domain, $accessToken, $sslCertificateCrt, $sslCertificateKey);
} catch (Exception $e) {
    echo 'Exception when calling RepositoriesApi->putV5ReposOwnerRepoPages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **domain** | **string**| 自定义域名 |
 **accessToken** | **string**| 用户授权码 | [optional]
 **sslCertificateCrt** | **string**| 证书文件内容（需进行BASE64编码） | [optional]
 **sslCertificateKey** | **string**| 私钥文件内容（需进行BASE64编码） | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putV5ReposOwnerRepoPushConfig**
> \Gitee\Model\ProjectPushConfig putV5ReposOwnerRepoPushConfig($owner, $repo, $accessToken, $restrictPushOwnCommit, $restrictAuthorEmailSuffix, $authorEmailSuffix, $restrictCommitMessage, $commitMessageRegex, $restrictFileSize, $maxFileSize, $exceptManager)

修改仓库推送规则设置

修改仓库推送规则设置

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\RepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$accessToken = "accessToken_example"; // string | 用户授权码
$restrictPushOwnCommit = true; // bool | 启用只能推送自己的提交（所推送提交中的邮箱必须与推送者所设置的提交邮箱一致）
$restrictAuthorEmailSuffix = true; // bool | 启用只允许指定邮箱域名后缀的提交
$authorEmailSuffix = "authorEmailSuffix_example"; // string | 指定邮箱域名的后缀
$restrictCommitMessage = true; // bool | 启用提交信息正则表达式校验
$commitMessageRegex = "commitMessageRegex_example"; // string | 用于验证提交信息的正则表达式
$restrictFileSize = true; // bool | 启用限制单文件大小
$maxFileSize = 56; // int | 限制单文件大小（MB）
$exceptManager = true; // bool | 仓库管理员不受上述规则限制

try {
    $result = $apiInstance->putV5ReposOwnerRepoPushConfig($owner, $repo, $accessToken, $restrictPushOwnCommit, $restrictAuthorEmailSuffix, $authorEmailSuffix, $restrictCommitMessage, $commitMessageRegex, $restrictFileSize, $maxFileSize, $exceptManager);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoriesApi->putV5ReposOwnerRepoPushConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **restrictPushOwnCommit** | **bool**| 启用只能推送自己的提交（所推送提交中的邮箱必须与推送者所设置的提交邮箱一致） | [optional]
 **restrictAuthorEmailSuffix** | **bool**| 启用只允许指定邮箱域名后缀的提交 | [optional]
 **authorEmailSuffix** | **string**| 指定邮箱域名的后缀 | [optional]
 **restrictCommitMessage** | **bool**| 启用提交信息正则表达式校验 | [optional]
 **commitMessageRegex** | **string**| 用于验证提交信息的正则表达式 | [optional]
 **restrictFileSize** | **bool**| 启用限制单文件大小 | [optional]
 **maxFileSize** | **int**| 限制单文件大小（MB） | [optional]
 **exceptManager** | **bool**| 仓库管理员不受上述规则限制 | [optional]

### Return type

[**\Gitee\Model\ProjectPushConfig**](../Model/ProjectPushConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putV5ReposOwnerRepoReviewer**
> \Gitee\Model\Contributor putV5ReposOwnerRepoReviewer($owner, $repo, $assignees, $testers, $assigneesNumber, $testersNumber, $accessToken)

修改代码审查设置

修改代码审查设置

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\RepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = "owner_example"; // string | 仓库所属空间地址(企业、组织或个人的地址path)
$repo = "repo_example"; // string | 仓库路径(path)
$assignees = "assignees_example"; // string | 审查人员username，可多个，半角逗号分隔，如：(username1,username2)
$testers = "testers_example"; // string | 测试人员username，可多个，半角逗号分隔，如：(username1,username2)
$assigneesNumber = 56; // int | 最少审查人数
$testersNumber = 56; // int | 最少测试人数
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->putV5ReposOwnerRepoReviewer($owner, $repo, $assignees, $testers, $assigneesNumber, $testersNumber, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoriesApi->putV5ReposOwnerRepoReviewer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| 仓库所属空间地址(企业、组织或个人的地址path) |
 **repo** | **string**| 仓库路径(path) |
 **assignees** | **string**| 审查人员username，可多个，半角逗号分隔，如：(username1,username2) |
 **testers** | **string**| 测试人员username，可多个，半角逗号分隔，如：(username1,username2) |
 **assigneesNumber** | **int**| 最少审查人数 |
 **testersNumber** | **int**| 最少测试人数 |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\Gitee\Model\Contributor**](../Model/Contributor.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

