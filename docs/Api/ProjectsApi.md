# Swagger\Client\ProjectsApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**projectsCanceledPost**](ProjectsApi.md#projectsCanceledPost) | **POST** /projects/canceled | Canceled projects
[**projectsCompletedPost**](ProjectsApi.md#projectsCompletedPost) | **POST** /projects/completed | Completed projects
[**projectsOpenPOST**](ProjectsApi.md#projectsOpenPOST) | **POST** /projects/open | Open projects


# **projectsCanceledPost**
> projectsCanceledPost($body)

Canceled projects

Move a project to the canceled projects collection

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-authorizer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');
// Configure API key authorization: api-key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ProjectReference(); // \Swagger\Client\Model\ProjectReference | A reference to the project to be canceled

try {
    $apiInstance->projectsCanceledPost($body);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsCanceledPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ProjectReference**](../Model/ProjectReference.md)| A reference to the project to be canceled |

### Return type

void (empty response body)

### Authorization

[api-authorizer](../../README.md#api-authorizer), [api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectsCompletedPost**
> projectsCompletedPost($body)

Completed projects

Move a project to the completed projects collection

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-authorizer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');
// Configure API key authorization: api-key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ProjectReference(); // \Swagger\Client\Model\ProjectReference | A reference to the project to be completed

try {
    $apiInstance->projectsCompletedPost($body);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsCompletedPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ProjectReference**](../Model/ProjectReference.md)| A reference to the project to be completed |

### Return type

void (empty response body)

### Authorization

[api-authorizer](../../README.md#api-authorizer), [api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectsOpenPOST**
> projectsOpenPOST($body)

Open projects

Move a project back to the open projects collection

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-authorizer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');
// Configure API key authorization: api-key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ProjectReference(); // \Swagger\Client\Model\ProjectReference | A reference to the project to be opened

try {
    $apiInstance->projectsOpenPOST($body);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsOpenPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ProjectReference**](../Model/ProjectReference.md)| A reference to the project to be opened |

### Return type

void (empty response body)

### Authorization

[api-authorizer](../../README.md#api-authorizer), [api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

