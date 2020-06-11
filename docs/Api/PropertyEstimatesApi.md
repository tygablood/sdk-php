# Swagger\Client\PropertyEstimatesApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPropertyEstimate**](PropertyEstimatesApi.md#createPropertyEstimate) | **POST** /property/estimates | Create a new property estimate
[**updatePropertyEstimate**](PropertyEstimatesApi.md#updatePropertyEstimate) | **PUT** /property/estimates/{estimate-id} | Update a property estimate


# **createPropertyEstimate**
> \Swagger\Client\Model\PropertyEstimateResponse createPropertyEstimate($body)

Create a new property estimate

Creates a new property estimate

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

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
$body = new \Swagger\Client\Model\PropertyEstimateRequestCreate(); // \Swagger\Client\Model\PropertyEstimateRequestCreate | 

try {
    $result = $apiInstance->createPropertyEstimate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyEstimatesApi->createPropertyEstimate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\PropertyEstimateRequestCreate**](../Model/PropertyEstimateRequestCreate.md)|  |

### Return type

[**\Swagger\Client\Model\PropertyEstimateResponse**](../Model/PropertyEstimateResponse.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePropertyEstimate**
> \Swagger\Client\Model\PropertyEstimateResponse updatePropertyEstimate($estimate_id, $body)

Update a property estimate

Updates a property estimate

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

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
$estimate_id = "estimate_id_example"; // string | The id of the property estimate to be updated
$body = new \Swagger\Client\Model\PropertyEstimateRequestUpdate(); // \Swagger\Client\Model\PropertyEstimateRequestUpdate | 

try {
    $result = $apiInstance->updatePropertyEstimate($estimate_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyEstimatesApi->updatePropertyEstimate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **estimate_id** | **string**| The id of the property estimate to be updated |
 **body** | [**\Swagger\Client\Model\PropertyEstimateRequestUpdate**](../Model/PropertyEstimateRequestUpdate.md)|  |

### Return type

[**\Swagger\Client\Model\PropertyEstimateResponse**](../Model/PropertyEstimateResponse.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

