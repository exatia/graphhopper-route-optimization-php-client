# Swagger\Client\VrpApi

All URIs are relative to *https://graphhopper.com/api/1/vrp*

Method | HTTP request | Description
------------- | ------------- | -------------
[**postVrp**](VrpApi.md#postVrp) | **POST** /optimize | Solves large routing problems


# **postVrp**
> \Swagger\Client\Model\JobId postVrp($key, $body)

Solves large routing problems

This endpoint solves large problems, i.e. traveling salesman or vehicle routing problems, and returns the solution.\n

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\VrpApi();
$key = "key_example"; // string | your API key
$body = new \Swagger\Client\Model\Request(); // \Swagger\Client\Model\Request | Request object that contains the problem to be solved

try { 
    $result = $api_instance->postVrp($key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VrpApi->postVrp: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| your API key | 
 **body** | [**\Swagger\Client\Model\Request**](\Swagger\Client\Model\Request.md)| Request object that contains the problem to be solved | 

### Return type

[**\Swagger\Client\Model\JobId**](JobId.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

