# Swagger\Client\PropertyClaimsStakeholdersApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1PropertyClaimsClaimIdStakeholdersGet**](PropertyClaimsStakeholdersApi.md#v1propertyclaimsclaimidstakeholdersget) | **GET** /v1/property/claims/{claimId}/stakeholders | Get claim stakeholders
[**v1PropertyClaimsClaimIdStakeholdersPost**](PropertyClaimsStakeholdersApi.md#v1propertyclaimsclaimidstakeholderspost) | **POST** /v1/property/claims/{claimId}/stakeholders | Add claim stakeholder
[**v1PropertyClaimsClaimIdStakeholdersStakeholderIdGet**](PropertyClaimsStakeholdersApi.md#v1propertyclaimsclaimidstakeholdersstakeholderidget) | **GET** /v1/property/claims/{claimId}/stakeholders/{stakeholderId} | Get claim stakeholder
[**v1PropertyClaimsClaimIdStakeholdersStakeholderIdPut**](PropertyClaimsStakeholdersApi.md#v1propertyclaimsclaimidstakeholdersstakeholderidput) | **PUT** /v1/property/claims/{claimId}/stakeholders/{stakeholderId} | Update claim stakeholder

# **v1PropertyClaimsClaimIdStakeholdersGet**
> \Swagger\Client\Model\IStakeholderResponse[] v1PropertyClaimsClaimIdStakeholdersGet($claim_id)

Get claim stakeholders

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\PropertyClaimsStakeholdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$claim_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The claim id

try {
    $result = $apiInstance->v1PropertyClaimsClaimIdStakeholdersGet($claim_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyClaimsStakeholdersApi->v1PropertyClaimsClaimIdStakeholdersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **claim_id** | [**string**](../Model/.md)| The claim id |

### Return type

[**\Swagger\Client\Model\IStakeholderResponse[]**](../Model/IStakeholderResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1PropertyClaimsClaimIdStakeholdersPost**
> \Swagger\Client\Model\IStakeholderResponse v1PropertyClaimsClaimIdStakeholdersPost($body, $claim_id)

Add claim stakeholder

Creates a new claim stakeholder.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\PropertyClaimsStakeholdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\IStakeholderCreateRequest(); // \Swagger\Client\Model\IStakeholderCreateRequest | The stakeholder create request
$claim_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The claim id

try {
    $result = $apiInstance->v1PropertyClaimsClaimIdStakeholdersPost($body, $claim_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyClaimsStakeholdersApi->v1PropertyClaimsClaimIdStakeholdersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\IStakeholderCreateRequest**](../Model/IStakeholderCreateRequest.md)| The stakeholder create request |
 **claim_id** | [**string**](../Model/.md)| The claim id |

### Return type

[**\Swagger\Client\Model\IStakeholderResponse**](../Model/IStakeholderResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/_*+json, application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1PropertyClaimsClaimIdStakeholdersStakeholderIdGet**
> \Swagger\Client\Model\IStakeholderResponse v1PropertyClaimsClaimIdStakeholdersStakeholderIdGet($claim_id, $stakeholder_id)

Get claim stakeholder

Gets a claim stakeholder by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\PropertyClaimsStakeholdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$claim_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The claim id
$stakeholder_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The stakeholder id

try {
    $result = $apiInstance->v1PropertyClaimsClaimIdStakeholdersStakeholderIdGet($claim_id, $stakeholder_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyClaimsStakeholdersApi->v1PropertyClaimsClaimIdStakeholdersStakeholderIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **claim_id** | [**string**](../Model/.md)| The claim id |
 **stakeholder_id** | [**string**](../Model/.md)| The stakeholder id |

### Return type

[**\Swagger\Client\Model\IStakeholderResponse**](../Model/IStakeholderResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1PropertyClaimsClaimIdStakeholdersStakeholderIdPut**
> \Swagger\Client\Model\IStakeholderResponse v1PropertyClaimsClaimIdStakeholdersStakeholderIdPut($body, $claim_id, $stakeholder_id)

Update claim stakeholder

Updates a claim stakeholder by id. Attempting to update a stakeholder where the request  type does not match the existing stakeholder is a bad request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\PropertyClaimsStakeholdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\IStakeholderUpdateRequest(); // \Swagger\Client\Model\IStakeholderUpdateRequest | The stakeholder update request
$claim_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The claim id
$stakeholder_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The stakeholder id

try {
    $result = $apiInstance->v1PropertyClaimsClaimIdStakeholdersStakeholderIdPut($body, $claim_id, $stakeholder_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyClaimsStakeholdersApi->v1PropertyClaimsClaimIdStakeholdersStakeholderIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\IStakeholderUpdateRequest**](../Model/IStakeholderUpdateRequest.md)| The stakeholder update request |
 **claim_id** | [**string**](../Model/.md)| The claim id |
 **stakeholder_id** | [**string**](../Model/.md)| The stakeholder id |

### Return type

[**\Swagger\Client\Model\IStakeholderResponse**](../Model/IStakeholderResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/_*+json, application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

