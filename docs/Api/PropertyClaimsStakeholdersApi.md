# Swagger\Client\PropertyClaimsStakeholdersApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createClaimStakeholder**](PropertyClaimsStakeholdersApi.md#createclaimstakeholder) | **POST** /v1/property/claims/{claimId}/stakeholders | Add claim stakeholder
[**getClaimStakeholderById**](PropertyClaimsStakeholdersApi.md#getclaimstakeholderbyid) | **GET** /v1/property/claims/{claimId}/stakeholders/{stakeholderId} | Get claim stakeholder
[**getClaimStakeholders**](PropertyClaimsStakeholdersApi.md#getclaimstakeholders) | **GET** /v1/property/claims/{claimId}/stakeholders | Get claim stakeholders
[**updateClaimStakeholder**](PropertyClaimsStakeholdersApi.md#updateclaimstakeholder) | **PUT** /v1/property/claims/{claimId}/stakeholders/{stakeholderId} | Update claim stakeholder

# **createClaimStakeholder**
> \Swagger\Client\Model\StakeholderResponse createClaimStakeholder($body, $claim_id)

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
$body = new \Swagger\Client\Model\StakeholderCreateRequest(); // \Swagger\Client\Model\StakeholderCreateRequest | The stakeholder create request
$claim_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The claim id

try {
    $result = $apiInstance->createClaimStakeholder($body, $claim_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyClaimsStakeholdersApi->createClaimStakeholder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\StakeholderCreateRequest**](../Model/StakeholderCreateRequest.md)| The stakeholder create request |
 **claim_id** | [**string**](../Model/.md)| The claim id |

### Return type

[**\Swagger\Client\Model\StakeholderResponse**](../Model/StakeholderResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getClaimStakeholderById**
> \Swagger\Client\Model\StakeholderResponse getClaimStakeholderById($claim_id, $stakeholder_id)

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
    $result = $apiInstance->getClaimStakeholderById($claim_id, $stakeholder_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyClaimsStakeholdersApi->getClaimStakeholderById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **claim_id** | [**string**](../Model/.md)| The claim id |
 **stakeholder_id** | [**string**](../Model/.md)| The stakeholder id |

### Return type

[**\Swagger\Client\Model\StakeholderResponse**](../Model/StakeholderResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getClaimStakeholders**
> \Swagger\Client\Model\StakeholderResponse[] getClaimStakeholders($claim_id)

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
    $result = $apiInstance->getClaimStakeholders($claim_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyClaimsStakeholdersApi->getClaimStakeholders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **claim_id** | [**string**](../Model/.md)| The claim id |

### Return type

[**\Swagger\Client\Model\StakeholderResponse[]**](../Model/StakeholderResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateClaimStakeholder**
> \Swagger\Client\Model\StakeholderResponse updateClaimStakeholder($body, $claim_id, $stakeholder_id)

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
$body = new \Swagger\Client\Model\StakeholderUpdateRequest(); // \Swagger\Client\Model\StakeholderUpdateRequest | The stakeholder update request
$claim_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The claim id
$stakeholder_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The stakeholder id

try {
    $result = $apiInstance->updateClaimStakeholder($body, $claim_id, $stakeholder_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyClaimsStakeholdersApi->updateClaimStakeholder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\StakeholderUpdateRequest**](../Model/StakeholderUpdateRequest.md)| The stakeholder update request |
 **claim_id** | [**string**](../Model/.md)| The claim id |
 **stakeholder_id** | [**string**](../Model/.md)| The stakeholder id |

### Return type

[**\Swagger\Client\Model\StakeholderResponse**](../Model/StakeholderResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

