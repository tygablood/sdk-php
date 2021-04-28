# Swagger\Client\PropertyClaimsApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createClaim**](PropertyClaimsApi.md#createclaim) | **POST** /v1/property/claims | Create a claim
[**getClaim**](PropertyClaimsApi.md#getclaim) | **GET** /v1/property/claims/{claimId} | Get claim
[**updateClaim**](PropertyClaimsApi.md#updateclaim) | **PUT** /v1/property/claims/{claimId} | Update claim

# **createClaim**
> \Swagger\Client\Model\ReportResponse createClaim($body)

Create a claim

ClaimTemplateId must exist in Account's Claim Templates

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\PropertyClaimsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ClaimCreateRequest(); // \Swagger\Client\Model\ClaimCreateRequest | The claim create request

try {
    $result = $apiInstance->createClaim($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyClaimsApi->createClaim: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ClaimCreateRequest**](../Model/ClaimCreateRequest.md)| The claim create request |

### Return type

[**\Swagger\Client\Model\ReportResponse**](../Model/ReportResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getClaim**
> \Swagger\Client\Model\ClaimResponse getClaim($claim_id)

Get claim

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\PropertyClaimsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$claim_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The claim id

try {
    $result = $apiInstance->getClaim($claim_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyClaimsApi->getClaim: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **claim_id** | [**string**](../Model/.md)| The claim id |

### Return type

[**\Swagger\Client\Model\ClaimResponse**](../Model/ClaimResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateClaim**
> updateClaim($body, $claim_id)

Update claim

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\PropertyClaimsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ClaimUpdateRequest(); // \Swagger\Client\Model\ClaimUpdateRequest | The update request
$claim_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The claim id

try {
    $apiInstance->updateClaim($body, $claim_id);
} catch (Exception $e) {
    echo 'Exception when calling PropertyClaimsApi->updateClaim: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ClaimUpdateRequest**](../Model/ClaimUpdateRequest.md)| The update request |
 **claim_id** | [**string**](../Model/.md)| The claim id |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

