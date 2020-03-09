# Swagger\Client\ProjectManagersApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**projectsOpenProjectIdProjectManagersProjectManagerEmailDelete**](ProjectManagersApi.md#projectsOpenProjectIdProjectManagersProjectManagerEmailDelete) | **DELETE** /projects/open/{project-id}/project-managers/{project-manager-email} | Remove a project manager
[**projectsOpenProjectManagerPUT**](ProjectManagersApi.md#projectsOpenProjectManagerPUT) | **PUT** /projects/open/{project-id}/project-managers/{project-manager-email} | Assign a project manager


# **projectsOpenProjectIdProjectManagersProjectManagerEmailDelete**
> projectsOpenProjectIdProjectManagersProjectManagerEmailDelete($claim_id, $project_manager_email)

Remove a project manager

Removes a user as a project manager from a project

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

$apiInstance = new Swagger\Client\Api\ProjectManagersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$claim_id = "5f6a7b8c9d0e1a2a1b2c3d4e"; // string | The id of the project
$project_manager_email = "john.somebody@example.net"; // string | The email of the project manager user to remove from the project

try {
    $apiInstance->projectsOpenProjectIdProjectManagersProjectManagerEmailDelete($claim_id, $project_manager_email);
} catch (Exception $e) {
    echo 'Exception when calling ProjectManagersApi->projectsOpenProjectIdProjectManagersProjectManagerEmailDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **claim_id** | **string**| The id of the project |
 **project_manager_email** | **string**| The email of the project manager user to remove from the project |

### Return type

void (empty response body)

### Authorization

[api-authorizer](../../README.md#api-authorizer), [api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectsOpenProjectManagerPUT**
> projectsOpenProjectManagerPUT($claim_id, $project_manager_email)

Assign a project manager

Add a user as a project manager to a project

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

$apiInstance = new Swagger\Client\Api\ProjectManagersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$claim_id = "5f6a7b8c9d0e1a2a1b2c3d4e"; // string | The id of the project
$project_manager_email = "john.somebody@example.net"; // string | The email of the project manager user to add to the project

try {
    $apiInstance->projectsOpenProjectManagerPUT($claim_id, $project_manager_email);
} catch (Exception $e) {
    echo 'Exception when calling ProjectManagersApi->projectsOpenProjectManagerPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **claim_id** | **string**| The id of the project |
 **project_manager_email** | **string**| The email of the project manager user to add to the project |

### Return type

void (empty response body)

### Authorization

[api-authorizer](../../README.md#api-authorizer), [api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

