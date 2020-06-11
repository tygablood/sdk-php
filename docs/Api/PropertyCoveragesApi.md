# Swagger\Client\PropertyCoveragesApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPropertyPolicyCoverageAdditionalCoverages**](PropertyCoveragesApi.md#getPropertyPolicyCoverageAdditionalCoverages) | **GET** /property/policies/coverages/{coverage-id}/additional-coverages | Property policy additional coverages
[**getPropertyPolicyCoverageSublimits**](PropertyCoveragesApi.md#getPropertyPolicyCoverageSublimits) | **GET** /property/policies/coverages/{coverage-id}/sublimits | Property policy sublimits
[**getPropertyPolicyCoverages**](PropertyCoveragesApi.md#getPropertyPolicyCoverages) | **GET** /property/policies/coverages | Property policy coverages


# **getPropertyPolicyCoverageAdditionalCoverages**
> \Swagger\Client\Model\PropertyCoverageAdditionalCoverages getPropertyPolicyCoverageAdditionalCoverages($coverage_id, $accept_language)

Property policy additional coverages

Gets a collection of additional coverages available for a coverage

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\PropertyCoveragesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$coverage_id = "coverage_id_example"; // string | The coverage id
$accept_language = "en-US"; // string | The culture to request resources for

try {
    $result = $apiInstance->getPropertyPolicyCoverageAdditionalCoverages($coverage_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyCoveragesApi->getPropertyPolicyCoverageAdditionalCoverages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **coverage_id** | **string**| The coverage id |
 **accept_language** | **string**| The culture to request resources for | [optional]

### Return type

[**\Swagger\Client\Model\PropertyCoverageAdditionalCoverages**](../Model/PropertyCoverageAdditionalCoverages.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPropertyPolicyCoverageSublimits**
> \Swagger\Client\Model\PropertyCoverageSublimits getPropertyPolicyCoverageSublimits($coverage_id, $accept_language)

Property policy sublimits

Gets a collection of sublimits available for a coverage

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\PropertyCoveragesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$coverage_id = "coverage_id_example"; // string | The coverage id
$accept_language = "en-US"; // string | The culture to request resources for

try {
    $result = $apiInstance->getPropertyPolicyCoverageSublimits($coverage_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyCoveragesApi->getPropertyPolicyCoverageSublimits: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **coverage_id** | **string**| The coverage id |
 **accept_language** | **string**| The culture to request resources for | [optional]

### Return type

[**\Swagger\Client\Model\PropertyCoverageSublimits**](../Model/PropertyCoverageSublimits.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPropertyPolicyCoverages**
> \Swagger\Client\Model\PropertyCoverages getPropertyPolicyCoverages($accept_language)

Property policy coverages

Gets a collection of available coverages

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\PropertyCoveragesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept_language = "en-US"; // string | The culture to request resources for

try {
    $result = $apiInstance->getPropertyPolicyCoverages($accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyCoveragesApi->getPropertyPolicyCoverages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept_language** | **string**| The culture to request resources for | [optional]

### Return type

[**\Swagger\Client\Model\PropertyCoverages**](../Model/PropertyCoverages.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

