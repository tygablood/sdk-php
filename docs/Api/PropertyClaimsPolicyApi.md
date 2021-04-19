# Swagger\Client\PropertyClaimsPolicyApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getClaimPolicy**](PropertyClaimsPolicyApi.md#getclaimpolicy) | **GET** /v1/property/claims/{claimId}/policy | Get claim policy
[**updateClaimPolicy**](PropertyClaimsPolicyApi.md#updateclaimpolicy) | **PUT** /v1/property/claims/{claimId}/policy | Update claim policy

# **getClaimPolicy**
> \Swagger\Client\Model\PolicyResponse getClaimPolicy($claim_id)

Get claim policy

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\PropertyClaimsPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$claim_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The claim id

try {
    $result = $apiInstance->getClaimPolicy($claim_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyClaimsPolicyApi->getClaimPolicy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **claim_id** | [**string**](../Model/.md)| The claim id |

### Return type

[**\Swagger\Client\Model\PolicyResponse**](../Model/PolicyResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateClaimPolicy**
> updateClaimPolicy($body, $claim_id)

Update claim policy

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\PropertyClaimsPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ICoverageOrSublimitV1RequestIPolicyUpdateV1Request(); // \Swagger\Client\Model\ICoverageOrSublimitV1RequestIPolicyUpdateV1Request | The updated policy
$claim_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The claim id

try {
    $apiInstance->updateClaimPolicy($body, $claim_id);
} catch (Exception $e) {
    echo 'Exception when calling PropertyClaimsPolicyApi->updateClaimPolicy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ICoverageOrSublimitV1RequestIPolicyUpdateV1Request**](../Model/ICoverageOrSublimitV1RequestIPolicyUpdateV1Request.md)| The updated policy |
 **claim_id** | [**string**](../Model/.md)| The claim id |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

