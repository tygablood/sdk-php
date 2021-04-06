# Swagger\Client\PropertyClaimsReportsApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1PropertyClaimsClaimIdReportsGet**](PropertyClaimsReportsApi.md#v1propertyclaimsclaimidreportsget) | **GET** /v1/property/claims/{claimId}/reports | Get reports for claim
[**v1PropertyClaimsClaimIdReportsPost**](PropertyClaimsReportsApi.md#v1propertyclaimsclaimidreportspost) | **POST** /v1/property/claims/{claimId}/reports | Create a claim report
[**v1PropertyClaimsClaimIdReportsReportIdGet**](PropertyClaimsReportsApi.md#v1propertyclaimsclaimidreportsreportidget) | **GET** /v1/property/claims/{claimId}/reports/{reportId} | Get a specific claim report

# **v1PropertyClaimsClaimIdReportsGet**
> \Swagger\Client\Model\ReportResponse[] v1PropertyClaimsClaimIdReportsGet($claim_id)

Get reports for claim

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\PropertyClaimsReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$claim_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The claim id

try {
    $result = $apiInstance->v1PropertyClaimsClaimIdReportsGet($claim_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyClaimsReportsApi->v1PropertyClaimsClaimIdReportsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **claim_id** | [**string**](../Model/.md)| The claim id |

### Return type

[**\Swagger\Client\Model\ReportResponse[]**](../Model/ReportResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1PropertyClaimsClaimIdReportsPost**
> \Swagger\Client\Model\ReportResponse v1PropertyClaimsClaimIdReportsPost($body, $claim_id)

Create a claim report

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\PropertyClaimsReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ReportCreateRequest(); // \Swagger\Client\Model\ReportCreateRequest | The report create request
$claim_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The claim id

try {
    $result = $apiInstance->v1PropertyClaimsClaimIdReportsPost($body, $claim_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyClaimsReportsApi->v1PropertyClaimsClaimIdReportsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ReportCreateRequest**](../Model/ReportCreateRequest.md)| The report create request |
 **claim_id** | [**string**](../Model/.md)| The claim id |

### Return type

[**\Swagger\Client\Model\ReportResponse**](../Model/ReportResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/_*+json, application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1PropertyClaimsClaimIdReportsReportIdGet**
> \Swagger\Client\Model\ReportResponse v1PropertyClaimsClaimIdReportsReportIdGet($claim_id, $report_id)

Get a specific claim report

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\PropertyClaimsReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$claim_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The claim id
$report_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The report id

try {
    $result = $apiInstance->v1PropertyClaimsClaimIdReportsReportIdGet($claim_id, $report_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyClaimsReportsApi->v1PropertyClaimsClaimIdReportsReportIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **claim_id** | [**string**](../Model/.md)| The claim id |
 **report_id** | [**string**](../Model/.md)| The report id |

### Return type

[**\Swagger\Client\Model\ReportResponse**](../Model/ReportResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

