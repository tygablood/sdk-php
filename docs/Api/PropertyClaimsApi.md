# Swagger\Client\PropertyClaimsApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPropertyClaim**](PropertyClaimsApi.md#createPropertyClaim) | **POST** /property/claims | Create a new property claim
[**createPropertyClaimReport**](PropertyClaimsApi.md#createPropertyClaimReport) | **POST** /property/claim/{claim-id}/reports | Create a property claim report
[**getPropertyClaimReportById**](PropertyClaimsApi.md#getPropertyClaimReportById) | **GET** /property/claim/{claim-id}/reports/{report-id} | Get a property claim report by id
[**getPropertyClaimReports**](PropertyClaimsApi.md#getPropertyClaimReports) | **GET** /property/claim/{claim-id}/reports | Get property claim reports
[**updatePropertyClaim**](PropertyClaimsApi.md#updatePropertyClaim) | **PUT** /property/claims/{claim-id} | Update a property claim


# **createPropertyClaim**
> \Swagger\Client\Model\PropertyClaimResponse createPropertyClaim($body)

Create a new property claim

Creates a new property claim

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

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
$body = new \Swagger\Client\Model\PropertyClaimRequestCreate(); // \Swagger\Client\Model\PropertyClaimRequestCreate | 

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
 **body** | [**\Swagger\Client\Model\PropertyClaimRequestCreate**](../Model/PropertyClaimRequestCreate.md)|  |

### Return type

[**\Swagger\Client\Model\PropertyClaimResponse**](../Model/PropertyClaimResponse.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createPropertyClaimReport**
> \Swagger\Client\Model\PropertyClaimReportsResponse createPropertyClaimReport($claim_id, $body)

Create a property claim report

Creates a new property claim report.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

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
$claim_id = "claim_id_example"; // string | 
$body = new \Swagger\Client\Model\PropertyClaimReportsRequestCreate(); // \Swagger\Client\Model\PropertyClaimReportsRequestCreate | 

try {
    $result = $apiInstance->createPropertyClaimReport($claim_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyClaimsApi->createPropertyClaimReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **claim_id** | [**string**](../Model/.md)|  |
 **body** | [**\Swagger\Client\Model\PropertyClaimReportsRequestCreate**](../Model/PropertyClaimReportsRequestCreate.md)|  |

### Return type

[**\Swagger\Client\Model\PropertyClaimReportsResponse**](../Model/PropertyClaimReportsResponse.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPropertyClaimReportById**
> \Swagger\Client\Model\PropertyClaimReportsResponse getPropertyClaimReportById($claim_id, $report_id)

Get a property claim report by id

Gets a property claim report by report id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

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
$claim_id = "claim_id_example"; // string | 
$report_id = "report_id_example"; // string | 

try {
    $result = $apiInstance->getPropertyClaimReportById($claim_id, $report_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyClaimsApi->getPropertyClaimReportById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **claim_id** | [**string**](../Model/.md)|  |
 **report_id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\PropertyClaimReportsResponse**](../Model/PropertyClaimReportsResponse.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPropertyClaimReports**
> \Swagger\Client\Model\PropertyClaimReportsResponse[] getPropertyClaimReports($claim_id)

Get property claim reports

Gets all saved reports for a property claim

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

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
$claim_id = "claim_id_example"; // string | 

try {
    $result = $apiInstance->getPropertyClaimReports($claim_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyClaimsApi->getPropertyClaimReports: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **claim_id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\PropertyClaimReportsResponse[]**](../Model/PropertyClaimReportsResponse.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePropertyClaim**
> \Swagger\Client\Model\PropertyClaimResponse updatePropertyClaim($claim_id, $body)

Update a property claim

Updates an existing property claim.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

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
$body = new \Swagger\Client\Model\PropertyClaimRequestUpdate(); // \Swagger\Client\Model\PropertyClaimRequestUpdate | 

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
 **body** | [**\Swagger\Client\Model\PropertyClaimRequestUpdate**](../Model/PropertyClaimRequestUpdate.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\PropertyClaimResponse**](../Model/PropertyClaimResponse.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

