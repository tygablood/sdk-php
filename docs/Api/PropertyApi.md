# Swagger\Client\PropertyApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPropertyTemplatesReports**](PropertyApi.md#getPropertyTemplatesReports) | **GET** /property/templates/reports | Get all available report templates
[**propertyTemplatesClaimsClaimTemplateIdReportsGet**](PropertyApi.md#propertyTemplatesClaimsClaimTemplateIdReportsGet) | **GET** /property/templates/claims/{claim-template-id}/reports | Get all report templates for the claim template


# **getPropertyTemplatesReports**
> \Swagger\Client\Model\TemplateMetadata getPropertyTemplatesReports($accept_language)

Get all available report templates

Gets a collection of available templates

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\PropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept_language = "en-US"; // string | The culture to request resources for

try {
    $result = $apiInstance->getPropertyTemplatesReports($accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyApi->getPropertyTemplatesReports: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept_language** | **string**| The culture to request resources for | [optional]

### Return type

[**\Swagger\Client\Model\TemplateMetadata**](../Model/TemplateMetadata.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **propertyTemplatesClaimsClaimTemplateIdReportsGet**
> \Swagger\Client\Model\TemplateMetadata propertyTemplatesClaimsClaimTemplateIdReportsGet($claim_template_id, $accept_language)

Get all report templates for the claim template

Gets a collection of available report templates for the specified claim template id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\PropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$claim_template_id = "claim_template_id_example"; // string | The id of the claim template
$accept_language = "en-US"; // string | The culture to request resources for

try {
    $result = $apiInstance->propertyTemplatesClaimsClaimTemplateIdReportsGet($claim_template_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyApi->propertyTemplatesClaimsClaimTemplateIdReportsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **claim_template_id** | **string**| The id of the claim template |
 **accept_language** | **string**| The culture to request resources for | [optional]

### Return type

[**\Swagger\Client\Model\TemplateMetadata**](../Model/TemplateMetadata.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

