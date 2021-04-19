# Swagger\Client\PropertyTemplatesApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getClaimTemplateFormTemplates**](PropertyTemplatesApi.md#getclaimtemplateformtemplates) | **GET** /v1/property/templates/claims/{claimTemplateId}/forms | Get claim template form templates
[**getClaimTemplateReportTemplates**](PropertyTemplatesApi.md#getclaimtemplatereporttemplates) | **GET** /v1/property/templates/claims/{claimTemplateId}/reports | Get claim template report templates
[**getClaimTemplateRoleTemplates**](PropertyTemplatesApi.md#getclaimtemplateroletemplates) | **GET** /v1/property/templates/claims/{claimTemplateId}/roles | Get claim template role templates
[**getClaimTemplateStatusChangeReasonTemplates**](PropertyTemplatesApi.md#getclaimtemplatestatuschangereasontemplates) | **GET** /v1/property/templates/claims/{claimTemplateId}/status-change-reasons | Get claim template status change reason templates
[**getClaimTemplates**](PropertyTemplatesApi.md#getclaimtemplates) | **GET** /v1/property/templates/claims | Get claim templates
[**getFormTemplates**](PropertyTemplatesApi.md#getformtemplates) | **GET** /v1/property/templates/forms | Get form templates
[**getPerilCauseTemplates**](PropertyTemplatesApi.md#getperilcausetemplates) | **GET** /v1/property/templates/perils/{perilId}/causes | Get peril causes templates
[**getPerilsTemplates**](PropertyTemplatesApi.md#getperilstemplates) | **GET** /v1/property/templates/perils | Get peril templates
[**getPolicyTemplates**](PropertyTemplatesApi.md#getpolicytemplates) | **GET** /v1/property/templates/policies | Get policy templates
[**getReportTemplates**](PropertyTemplatesApi.md#getreporttemplates) | **GET** /v1/property/templates/reports | Get instance report templates
[**getRoleTemplates**](PropertyTemplatesApi.md#getroletemplates) | **GET** /v1/property/templates/roles | Get role templates

# **getClaimTemplateFormTemplates**
> \Swagger\Client\Model\TemplateMetadataResponse[] getClaimTemplateFormTemplates($claim_template_id, $accept_language)

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
    $result = $apiInstance->getClaimTemplateFormTemplates($claim_template_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyTemplatesApi->getClaimTemplateFormTemplates: ', $e->getMessage(), PHP_EOL;
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
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getClaimTemplateReportTemplates**
> \Swagger\Client\Model\TemplateMetadataResponse[] getClaimTemplateReportTemplates($claim_template_id)

Get claim template report templates

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
    $result = $apiInstance->getClaimTemplateReportTemplates($claim_template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyTemplatesApi->getClaimTemplateReportTemplates: ', $e->getMessage(), PHP_EOL;
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
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getClaimTemplateRoleTemplates**
> \Swagger\Client\Model\TemplateMetadataResponse[] getClaimTemplateRoleTemplates($claim_template_id)

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
    $result = $apiInstance->getClaimTemplateRoleTemplates($claim_template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyTemplatesApi->getClaimTemplateRoleTemplates: ', $e->getMessage(), PHP_EOL;
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
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getClaimTemplateStatusChangeReasonTemplates**
> \Swagger\Client\Model\ClaimStatusChangeReasonTemplateResponse[] getClaimTemplateStatusChangeReasonTemplates($claim_template_id, $accept_language)

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
    $result = $apiInstance->getClaimTemplateStatusChangeReasonTemplates($claim_template_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyTemplatesApi->getClaimTemplateStatusChangeReasonTemplates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **claim_template_id** | [**string**](../Model/.md)| The claim template id |
 **accept_language** | **string**| The culture | [optional]

### Return type

[**\Swagger\Client\Model\ClaimStatusChangeReasonTemplateResponse[]**](../Model/ClaimStatusChangeReasonTemplateResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getClaimTemplates**
> \Swagger\Client\Model\TemplateMetadataResponse[] getClaimTemplates()

Get claim templates

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
    $result = $apiInstance->getClaimTemplates();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyTemplatesApi->getClaimTemplates: ', $e->getMessage(), PHP_EOL;
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
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFormTemplates**
> \Swagger\Client\Model\TemplateMetadataResponse[] getFormTemplates($accept_language)

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
    $result = $apiInstance->getFormTemplates($accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyTemplatesApi->getFormTemplates: ', $e->getMessage(), PHP_EOL;
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
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPerilCauseTemplates**
> \Swagger\Client\Model\TemplateMetadataResponse[] getPerilCauseTemplates($peril_id, $accept_language)

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
    $result = $apiInstance->getPerilCauseTemplates($peril_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyTemplatesApi->getPerilCauseTemplates: ', $e->getMessage(), PHP_EOL;
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
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPerilsTemplates**
> \Swagger\Client\Model\TemplateMetadataResponse[] getPerilsTemplates($accept_language)

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
    $result = $apiInstance->getPerilsTemplates($accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyTemplatesApi->getPerilsTemplates: ', $e->getMessage(), PHP_EOL;
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
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPolicyTemplates**
> \Swagger\Client\Model\TemplateMetadataResponse[] getPolicyTemplates()

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
    $result = $apiInstance->getPolicyTemplates();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyTemplatesApi->getPolicyTemplates: ', $e->getMessage(), PHP_EOL;
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
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReportTemplates**
> \Swagger\Client\Model\TemplateMetadataResponse[] getReportTemplates()

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
    $result = $apiInstance->getReportTemplates();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyTemplatesApi->getReportTemplates: ', $e->getMessage(), PHP_EOL;
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
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRoleTemplates**
> \Swagger\Client\Model\TemplateMetadataResponse[] getRoleTemplates()

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
    $result = $apiInstance->getRoleTemplates();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyTemplatesApi->getRoleTemplates: ', $e->getMessage(), PHP_EOL;
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
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

