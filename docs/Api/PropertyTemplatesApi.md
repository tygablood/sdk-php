# Swagger\Client\PropertyTemplatesApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1PropertyTemplatesClaimsClaimTemplateIdFormsGet**](PropertyTemplatesApi.md#v1propertytemplatesclaimsclaimtemplateidformsget) | **GET** /v1/property/templates/claims/{claimTemplateId}/forms | Get claim template form templates
[**v1PropertyTemplatesClaimsClaimTemplateIdReportsGet**](PropertyTemplatesApi.md#v1propertytemplatesclaimsclaimtemplateidreportsget) | **GET** /v1/property/templates/claims/{claimTemplateId}/reports | Gets claim template report templates
[**v1PropertyTemplatesClaimsClaimTemplateIdRolesGet**](PropertyTemplatesApi.md#v1propertytemplatesclaimsclaimtemplateidrolesget) | **GET** /v1/property/templates/claims/{claimTemplateId}/roles | Get claim template role templates
[**v1PropertyTemplatesClaimsClaimTemplateIdStatusChangeReasonsGet**](PropertyTemplatesApi.md#v1propertytemplatesclaimsclaimtemplateidstatuschangereasonsget) | **GET** /v1/property/templates/claims/{claimTemplateId}/status-change-reasons | Get claim template status change reason templates
[**v1PropertyTemplatesClaimsGet**](PropertyTemplatesApi.md#v1propertytemplatesclaimsget) | **GET** /v1/property/templates/claims | Gets claim templates
[**v1PropertyTemplatesFormsGet**](PropertyTemplatesApi.md#v1propertytemplatesformsget) | **GET** /v1/property/templates/forms | Get form templates
[**v1PropertyTemplatesPerilsGet**](PropertyTemplatesApi.md#v1propertytemplatesperilsget) | **GET** /v1/property/templates/perils | Get peril templates
[**v1PropertyTemplatesPerilsPerilIdCausesGet**](PropertyTemplatesApi.md#v1propertytemplatesperilsperilidcausesget) | **GET** /v1/property/templates/perils/{perilId}/causes | Get peril causes templates
[**v1PropertyTemplatesPoliciesGet**](PropertyTemplatesApi.md#v1propertytemplatespoliciesget) | **GET** /v1/property/templates/policies | Get policy templates
[**v1PropertyTemplatesReportsGet**](PropertyTemplatesApi.md#v1propertytemplatesreportsget) | **GET** /v1/property/templates/reports | Get instance report templates
[**v1PropertyTemplatesRoleGet**](PropertyTemplatesApi.md#v1propertytemplatesroleget) | **GET** /v1/property/templates/role | Get role templates

# **v1PropertyTemplatesClaimsClaimTemplateIdFormsGet**
> \Swagger\Client\Model\TemplateMetadataResponse[] v1PropertyTemplatesClaimsClaimTemplateIdFormsGet($claim_template_id, $accept_language)

Get claim template form templates

Gets the report templates available for use with a property claim template.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\PropertyTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$claim_template_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$accept_language = "accept_language_example"; // string | The culture

try {
    $result = $apiInstance->v1PropertyTemplatesClaimsClaimTemplateIdFormsGet($claim_template_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyTemplatesApi->v1PropertyTemplatesClaimsClaimTemplateIdFormsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **claim_template_id** | [**string**](../Model/.md)|  |
 **accept_language** | **string**| The culture | [optional]

### Return type

[**\Swagger\Client\Model\TemplateMetadataResponse[]**](../Model/TemplateMetadataResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1PropertyTemplatesClaimsClaimTemplateIdReportsGet**
> \Swagger\Client\Model\TemplateMetadataResponse[] v1PropertyTemplatesClaimsClaimTemplateIdReportsGet($claim_template_id)

Gets claim template report templates

Gets the report templates available for use with a property claim template.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\PropertyTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$claim_template_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The claim template id

try {
    $result = $apiInstance->v1PropertyTemplatesClaimsClaimTemplateIdReportsGet($claim_template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyTemplatesApi->v1PropertyTemplatesClaimsClaimTemplateIdReportsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **claim_template_id** | [**string**](../Model/.md)| The claim template id |

### Return type

[**\Swagger\Client\Model\TemplateMetadataResponse[]**](../Model/TemplateMetadataResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1PropertyTemplatesClaimsClaimTemplateIdRolesGet**
> \Swagger\Client\Model\TemplateMetadataResponse[] v1PropertyTemplatesClaimsClaimTemplateIdRolesGet($claim_template_id)

Get claim template role templates

Gets role templates available for use with a property claim template.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\PropertyTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$claim_template_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The claim template id

try {
    $result = $apiInstance->v1PropertyTemplatesClaimsClaimTemplateIdRolesGet($claim_template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyTemplatesApi->v1PropertyTemplatesClaimsClaimTemplateIdRolesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **claim_template_id** | [**string**](../Model/.md)| The claim template id |

### Return type

[**\Swagger\Client\Model\TemplateMetadataResponse[]**](../Model/TemplateMetadataResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1PropertyTemplatesClaimsClaimTemplateIdStatusChangeReasonsGet**
> \Swagger\Client\Model\TemplateMetadataResponse[] v1PropertyTemplatesClaimsClaimTemplateIdStatusChangeReasonsGet($claim_template_id, $accept_language)

Get claim template status change reason templates

Gets status change reason templates available for use with a property claim template.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\PropertyTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$claim_template_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The claim template id
$accept_language = "accept_language_example"; // string | The culture

try {
    $result = $apiInstance->v1PropertyTemplatesClaimsClaimTemplateIdStatusChangeReasonsGet($claim_template_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyTemplatesApi->v1PropertyTemplatesClaimsClaimTemplateIdStatusChangeReasonsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **claim_template_id** | [**string**](../Model/.md)| The claim template id |
 **accept_language** | **string**| The culture | [optional]

### Return type

[**\Swagger\Client\Model\TemplateMetadataResponse[]**](../Model/TemplateMetadataResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1PropertyTemplatesClaimsGet**
> \Swagger\Client\Model\TemplateMetadataResponse[] v1PropertyTemplatesClaimsGet()

Gets claim templates

Gets all active claim templates

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\PropertyTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->v1PropertyTemplatesClaimsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyTemplatesApi->v1PropertyTemplatesClaimsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\TemplateMetadataResponse[]**](../Model/TemplateMetadataResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1PropertyTemplatesFormsGet**
> \Swagger\Client\Model\TemplateMetadataResponse[] v1PropertyTemplatesFormsGet($accept_language)

Get form templates

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\PropertyTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept_language = "accept_language_example"; // string | The culture

try {
    $result = $apiInstance->v1PropertyTemplatesFormsGet($accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyTemplatesApi->v1PropertyTemplatesFormsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept_language** | **string**| The culture | [optional]

### Return type

[**\Swagger\Client\Model\TemplateMetadataResponse[]**](../Model/TemplateMetadataResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1PropertyTemplatesPerilsGet**
> \Swagger\Client\Model\TemplateMetadataResponse[] v1PropertyTemplatesPerilsGet($accept_language)

Get peril templates

Gets all peril templates available

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\PropertyTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept_language = "accept_language_example"; // string | The culture

try {
    $result = $apiInstance->v1PropertyTemplatesPerilsGet($accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyTemplatesApi->v1PropertyTemplatesPerilsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept_language** | **string**| The culture | [optional]

### Return type

[**\Swagger\Client\Model\TemplateMetadataResponse[]**](../Model/TemplateMetadataResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1PropertyTemplatesPerilsPerilIdCausesGet**
> \Swagger\Client\Model\TemplateMetadataResponse[] v1PropertyTemplatesPerilsPerilIdCausesGet($peril_id, $accept_language)

Get peril causes templates

Gets all causes templates for the peril

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\PropertyTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$peril_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The peril id
$accept_language = "accept_language_example"; // string | The culture

try {
    $result = $apiInstance->v1PropertyTemplatesPerilsPerilIdCausesGet($peril_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyTemplatesApi->v1PropertyTemplatesPerilsPerilIdCausesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **peril_id** | [**string**](../Model/.md)| The peril id |
 **accept_language** | **string**| The culture | [optional]

### Return type

[**\Swagger\Client\Model\TemplateMetadataResponse[]**](../Model/TemplateMetadataResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1PropertyTemplatesPoliciesGet**
> \Swagger\Client\Model\TemplateMetadataResponse[] v1PropertyTemplatesPoliciesGet()

Get policy templates

Gets all policy templates available

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\PropertyTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->v1PropertyTemplatesPoliciesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyTemplatesApi->v1PropertyTemplatesPoliciesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\TemplateMetadataResponse[]**](../Model/TemplateMetadataResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1PropertyTemplatesReportsGet**
> \Swagger\Client\Model\TemplateMetadataResponse[] v1PropertyTemplatesReportsGet()

Get instance report templates

Gets all report templates available

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\PropertyTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->v1PropertyTemplatesReportsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyTemplatesApi->v1PropertyTemplatesReportsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\TemplateMetadataResponse[]**](../Model/TemplateMetadataResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1PropertyTemplatesRoleGet**
> \Swagger\Client\Model\TemplateMetadataResponse[] v1PropertyTemplatesRoleGet()

Get role templates

Gets all role templates available

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\PropertyTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->v1PropertyTemplatesRoleGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyTemplatesApi->v1PropertyTemplatesRoleGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\TemplateMetadataResponse[]**](../Model/TemplateMetadataResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

