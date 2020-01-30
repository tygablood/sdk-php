# Swagger\Client\ProjectRolesApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**projectsOpenProjectIdRolesRoleIdRoleUserEmailDelete**](ProjectRolesApi.md#projectsOpenProjectIdRolesRoleIdRoleUserEmailDelete) | **DELETE** /projects/open/{project-id}/roles/{role-id}/{role-user-email} | Remove a project role
[**projectsOpenProjectIdRolesRoleIdRoleUserEmailPut**](ProjectRolesApi.md#projectsOpenProjectIdRolesRoleIdRoleUserEmailPut) | **PUT** /projects/open/{project-id}/roles/{role-id}/{role-user-email} | Assign a project role
[**projectsRolesGet**](ProjectRolesApi.md#projectsRolesGet) | **GET** /projects/roles | Project roles


# **projectsOpenProjectIdRolesRoleIdRoleUserEmailDelete**
> projectsOpenProjectIdRolesRoleIdRoleUserEmailDelete($claim_id, $role_id, $role_user_email)

Remove a project role

Remove a user from a role on a project

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API Key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProjectRolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$claim_id = "5f6a7b8c9d0e1a2a1b2c3d4e"; // string | The id of the project to remove the user from
$role_id = "b8c9d0e1a2a1b2c3d4e5f6a7"; // string | The id of the role on the project from which the user should be removed
$role_user_email = "john.somebody@example.net"; // string | The email of the user to remove from the role

try {
    $apiInstance->projectsOpenProjectIdRolesRoleIdRoleUserEmailDelete($claim_id, $role_id, $role_user_email);
} catch (Exception $e) {
    echo 'Exception when calling ProjectRolesApi->projectsOpenProjectIdRolesRoleIdRoleUserEmailDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **claim_id** | **string**| The id of the project to remove the user from |
 **role_id** | **string**| The id of the role on the project from which the user should be removed |
 **role_user_email** | **string**| The email of the user to remove from the role |

### Return type

void (empty response body)

### Authorization

[API Key](../../README.md#API Key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectsOpenProjectIdRolesRoleIdRoleUserEmailPut**
> projectsOpenProjectIdRolesRoleIdRoleUserEmailPut($project_id, $role_id, $role_user_email)

Assign a project role

Add a user to a role on a project

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API Key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProjectRolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = "5f6a7b8c9d0e1a2a1b2c3d4e"; // string | The id of the project to add the user to
$role_id = "b8c9d0e1a2a1b2c3d4e5f6a7"; // string | The id of the role on the project to which the user should be added
$role_user_email = "john.somebody@example.net"; // string | The email of the user to assign to the role

try {
    $apiInstance->projectsOpenProjectIdRolesRoleIdRoleUserEmailPut($project_id, $role_id, $role_user_email);
} catch (Exception $e) {
    echo 'Exception when calling ProjectRolesApi->projectsOpenProjectIdRolesRoleIdRoleUserEmailPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| The id of the project to add the user to |
 **role_id** | **string**| The id of the role on the project to which the user should be added |
 **role_user_email** | **string**| The email of the user to assign to the role |

### Return type

void (empty response body)

### Authorization

[API Key](../../README.md#API Key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectsRolesGet**
> \Swagger\Client\Model\Roles projectsRolesGet($accept_language, $project_type)

Project roles

Gets a collection of available project roles

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API Key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProjectRolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept_language = "en-US"; // string | The culture to request resources for
$project_type = "project_type_example"; // string | Filter roles by project type

try {
    $result = $apiInstance->projectsRolesGet($accept_language, $project_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectRolesApi->projectsRolesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept_language** | **string**| The culture to request resources for | [optional]
 **project_type** | **string**| Filter roles by project type | [optional]

### Return type

[**\Swagger\Client\Model\Roles**](../Model/Roles.md)

### Authorization

[API Key](../../README.md#API Key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

