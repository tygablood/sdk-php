# Swagger\Client\PropertyEstimatesApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**propertyEstimatesPost**](PropertyEstimatesApi.md#propertyEstimatesPost) | **POST** /property/estimates | Create a new property estimate


# **propertyEstimatesPost**
> \Swagger\Client\Model\PropertyEstimateResponse propertyEstimatesPost($body)

Create a new property estimate

Creates a new property estimate

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-authorizer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');
// Configure API key authorization: api-key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\PropertyEstimatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CreatePropertyEstimateRequest(); // \Swagger\Client\Model\CreatePropertyEstimateRequest | 

try {
    $result = $apiInstance->propertyEstimatesPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyEstimatesApi->propertyEstimatesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CreatePropertyEstimateRequest**](../Model/CreatePropertyEstimateRequest.md)|  |

### Return type

[**\Swagger\Client\Model\PropertyEstimateResponse**](../Model/PropertyEstimateResponse.md)

### Authorization

[api-authorizer](../../README.md#api-authorizer), [api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

