# Swagger\Client\PropertyClaimsRolesApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1PropertyClaimsClaimIdClaimManagerAccountUserEmailDelete**](PropertyClaimsRolesApi.md#v1propertyclaimsclaimidclaimmanageraccountuseremaildelete) | **DELETE** /v1/property/claims/{claimId}/claim-manager/account-user/{email} | Remove claim manager
[**v1PropertyClaimsClaimIdClaimManagerAccountUserEmailPut**](PropertyClaimsRolesApi.md#v1propertyclaimsclaimidclaimmanageraccountuseremailput) | **PUT** /v1/property/claims/{claimId}/claim-manager/account-user/{email} | Add claim manager
[**v1PropertyClaimsClaimIdRolesRoleIdAccountUserEmailDelete**](PropertyClaimsRolesApi.md#v1propertyclaimsclaimidrolesroleidaccountuseremaildelete) | **DELETE** /v1/property/claims/{claimId}/roles/{roleId}/account-user/{email} | Remove user from role
[**v1PropertyClaimsClaimIdRolesRoleIdAccountUserEmailPut**](PropertyClaimsRolesApi.md#v1propertyclaimsclaimidrolesroleidaccountuseremailput) | **PUT** /v1/property/claims/{claimId}/roles/{roleId}/account-user/{email} | Add user to role

# **v1PropertyClaimsClaimIdClaimManagerAccountUserEmailDelete**
> v1PropertyClaimsClaimIdClaimManagerAccountUserEmailDelete($claim_id, $email)

Remove claim manager

Removes a claims manager by account user email address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\PropertyClaimsRolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$claim_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The claim id
$email = "email_example"; // string | The account user email

try {
    $apiInstance->v1PropertyClaimsClaimIdClaimManagerAccountUserEmailDelete($claim_id, $email);
} catch (Exception $e) {
    echo 'Exception when calling PropertyClaimsRolesApi->v1PropertyClaimsClaimIdClaimManagerAccountUserEmailDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **claim_id** | [**string**](../Model/.md)| The claim id |
 **email** | **string**| The account user email |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1PropertyClaimsClaimIdClaimManagerAccountUserEmailPut**
> v1PropertyClaimsClaimIdClaimManagerAccountUserEmailPut($claim_id, $email)

Add claim manager

Adds a claims manager by account user email address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\PropertyClaimsRolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$claim_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The claim id
$email = "email_example"; // string | The account user email

try {
    $apiInstance->v1PropertyClaimsClaimIdClaimManagerAccountUserEmailPut($claim_id, $email);
} catch (Exception $e) {
    echo 'Exception when calling PropertyClaimsRolesApi->v1PropertyClaimsClaimIdClaimManagerAccountUserEmailPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **claim_id** | [**string**](../Model/.md)| The claim id |
 **email** | **string**| The account user email |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1PropertyClaimsClaimIdRolesRoleIdAccountUserEmailDelete**
> v1PropertyClaimsClaimIdRolesRoleIdAccountUserEmailDelete($claim_id, $role_id, $email)

Remove user from role

Removes a user from a role by account user email address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\PropertyClaimsRolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$claim_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The claim id
$role_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The role id
$email = "email_example"; // string | The account user email

try {
    $apiInstance->v1PropertyClaimsClaimIdRolesRoleIdAccountUserEmailDelete($claim_id, $role_id, $email);
} catch (Exception $e) {
    echo 'Exception when calling PropertyClaimsRolesApi->v1PropertyClaimsClaimIdRolesRoleIdAccountUserEmailDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **claim_id** | [**string**](../Model/.md)| The claim id |
 **role_id** | [**string**](../Model/.md)| The role id |
 **email** | **string**| The account user email |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1PropertyClaimsClaimIdRolesRoleIdAccountUserEmailPut**
> v1PropertyClaimsClaimIdRolesRoleIdAccountUserEmailPut($claim_id, $role_id, $email)

Add user to role

Adds a user to a role by account user email address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\PropertyClaimsRolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$claim_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The claim id
$role_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The role id
$email = "email_example"; // string | The account user email

try {
    $apiInstance->v1PropertyClaimsClaimIdRolesRoleIdAccountUserEmailPut($claim_id, $role_id, $email);
} catch (Exception $e) {
    echo 'Exception when calling PropertyClaimsRolesApi->v1PropertyClaimsClaimIdRolesRoleIdAccountUserEmailPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **claim_id** | [**string**](../Model/.md)| The claim id |
 **role_id** | [**string**](../Model/.md)| The role id |
 **email** | **string**| The account user email |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

