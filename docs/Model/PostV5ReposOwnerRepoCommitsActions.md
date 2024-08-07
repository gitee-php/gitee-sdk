# PostV5ReposOwnerRepoCommitsActions

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**action** | **string** | 文件操作：&#x60;create&#x60;, &#x60;delete&#x60;, &#x60;move&#x60;, &#x60;update&#x60;, &#x60;chmod&#x60; | 
**path** | **string** | 文件路径 | 
**previousPath** | **string** | 原文件路径，文件重命名 &#x60;move&#x60; 时使用 | [optional] 
**content** | **string** | 文件内容 | [optional] 
**encoding** | **string** | 文件内容编码 &#x60;text&#x60; 或者 &#x60;base64&#x60; | [optional] 
**lastCommitId** | **string** | 文件最近一次提交的 SHA | [optional] 
**executeFilemode** | **bool** | 是否添加文件可执行标志 | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


