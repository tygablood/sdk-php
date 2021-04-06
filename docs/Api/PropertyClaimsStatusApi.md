# Swagger\Client\PropertyClaimsStatusApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1PropertyClaimsClaimIdStatusPut**](PropertyClaimsStatusApi.md#v1propertyclaimsclaimidstatusput) | **PUT** /v1/property/claims/{claimId}/status | Updates status for property claim

# **v1PropertyClaimsClaimIdStatusPut**
> v1PropertyClaimsClaimIdStatusPut($body, $claim_id)

Updates status for property claim

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\PropertyClaimsStatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ClaimStatusChangeRequest(); // \Swagger\Client\Model\ClaimStatusChangeRequest | The claim status change request
$claim_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The claim id

try {
    $apiInstance->v1PropertyClaimsClaimIdStatusPut($body, $claim_id);
} catch (Exception $e) {
    echo 'Exception when calling PropertyClaimsStatusApi->v1PropertyClaimsClaimIdStatusPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ClaimStatusChangeRequest**](../Model/ClaimStatusChangeRequest.md)| The claim status change request |
 **claim_id** | [**string**](../Model/.md)| The claim id |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/_*+json, application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

