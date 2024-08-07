# Gitee\EmailsApi

All URIs are relative to *https://gitee.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getV5Emails**](EmailsApi.md#getV5Emails) | **GET** /v5/emails | 获取授权用户的全部邮箱


# **getV5Emails**
> \Gitee\Model\UserEmail[] getV5Emails($accessToken)

获取授权用户的全部邮箱

获取授权用户的全部邮箱

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Gitee\Api\EmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->getV5Emails($accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->getV5Emails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\Gitee\Model\UserEmail[]**](../Model/UserEmail.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

