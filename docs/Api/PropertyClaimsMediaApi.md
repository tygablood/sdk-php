# Swagger\Client\PropertyClaimsMediaApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createMedia**](PropertyClaimsMediaApi.md#createmedia) | **POST** /v1/property/claims/{claimId}/media | Create claim media
[**getMedia**](PropertyClaimsMediaApi.md#getmedia) | **GET** /v1/property/claims/{claimId}/media | Get claim media
[**getMediaById**](PropertyClaimsMediaApi.md#getmediabyid) | **GET** /v1/property/claims/{claimId}/media/{mediaId} | Get claim media item
[**updateMedia**](PropertyClaimsMediaApi.md#updatemedia) | **PUT** /v1/property/claims/{claimId}/media/{mediaId} | Update claim media

# **createMedia**
> \Swagger\Client\Model\MediaCreatedResponse createMedia($body, $claim_id)

Create claim media

Creates a new media item on a claim.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\PropertyClaimsMediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\MediaCreateRequest(); // \Swagger\Client\Model\MediaCreateRequest | The media create request
$claim_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The claim id

try {
    $result = $apiInstance->createMedia($body, $claim_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyClaimsMediaApi->createMedia: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\MediaCreateRequest**](../Model/MediaCreateRequest.md)| The media create request |
 **claim_id** | [**string**](../Model/.md)| The claim id |

### Return type

[**\Swagger\Client\Model\MediaCreatedResponse**](../Model/MediaCreatedResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMedia**
> \Swagger\Client\Model\MediaResponse[] getMedia($claim_id)

Get claim media

Gets all media items from a claim.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\PropertyClaimsMediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$claim_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The claim id

try {
    $result = $apiInstance->getMedia($claim_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyClaimsMediaApi->getMedia: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **claim_id** | [**string**](../Model/.md)| The claim id |

### Return type

[**\Swagger\Client\Model\MediaResponse[]**](../Model/MediaResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMediaById**
> \Swagger\Client\Model\MediaResponse getMediaById($claim_id, $media_id)

Get claim media item

Gets a claim media item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\PropertyClaimsMediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$claim_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The claim id
$media_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The media id

try {
    $result = $apiInstance->getMediaById($claim_id, $media_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyClaimsMediaApi->getMediaById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **claim_id** | [**string**](../Model/.md)| The claim id |
 **media_id** | [**string**](../Model/.md)| The media id |

### Return type

[**\Swagger\Client\Model\MediaResponse**](../Model/MediaResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateMedia**
> \Swagger\Client\Model\MediaUpdatedResponse updateMedia($body, $claim_id, $media_id)

Update claim media

Updates a claim media item.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\PropertyClaimsMediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\MediaUpdateRequest(); // \Swagger\Client\Model\MediaUpdateRequest | The media update request
$claim_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The claim id
$media_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The media id

try {
    $result = $apiInstance->updateMedia($body, $claim_id, $media_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyClaimsMediaApi->updateMedia: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\MediaUpdateRequest**](../Model/MediaUpdateRequest.md)| The media update request |
 **claim_id** | [**string**](../Model/.md)| The claim id |
 **media_id** | [**string**](../Model/.md)| The media id |

### Return type

[**\Swagger\Client\Model\MediaUpdatedResponse**](../Model/MediaUpdatedResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

