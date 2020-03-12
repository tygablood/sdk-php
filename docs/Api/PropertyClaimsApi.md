# Swagger\Client\PropertyClaimsApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPropertyClaim**](PropertyClaimsApi.md#createPropertyClaim) | **POST** /property/claims | Create a new property claim
[**updatePropertyClaim**](PropertyClaimsApi.md#updatePropertyClaim) | **PUT** /property/claims/{claim-id} | Update a property claim


# **createPropertyClaim**
> \Swagger\Client\Model\Claim createPropertyClaim($body)

Create a new property claim

Creates a new property claim

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

$apiInstance = new Swagger\Client\Api\PropertyClaimsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\PropertyClaimRequestCreate1(); // \Swagger\Client\Model\PropertyClaimRequestCreate1 | 

try {
    $result = $apiInstance->createPropertyClaim($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyClaimsApi->createPropertyClaim: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\PropertyClaimRequestCreate1**](../Model/PropertyClaimRequestCreate1.md)|  |

### Return type

[**\Swagger\Client\Model\Claim**](../Model/Claim.md)

### Authorization

[api-authorizer](../../README.md#api-authorizer), [api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePropertyClaim**
> \Swagger\Client\Model\Claim updatePropertyClaim($claim_id, $body)

Update a property claim

Updates an existing property claim.

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

$apiInstance = new Swagger\Client\Api\PropertyClaimsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$claim_id = "claim_id_example"; // string | The id of the property claim to be updated
$body = new \Swagger\Client\Model\UpdateClaimRequest(); // \Swagger\Client\Model\UpdateClaimRequest | 

try {
    $result = $apiInstance->updatePropertyClaim($claim_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyClaimsApi->updatePropertyClaim: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **claim_id** | **string**| The id of the property claim to be updated |
 **body** | [**\Swagger\Client\Model\UpdateClaimRequest**](../Model/UpdateClaimRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Claim**](../Model/Claim.md)

### Authorization

[api-authorizer](../../README.md#api-authorizer), [api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

