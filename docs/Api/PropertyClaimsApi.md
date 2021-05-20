# OpenAPI\Client\PropertyClaimsApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createClaim()**](PropertyClaimsApi.md#createClaim) | **POST** /v1/property/claims | Create a claim
[**getClaim()**](PropertyClaimsApi.md#getClaim) | **GET** /v1/property/claims/{claimId} | Get claim
[**updateClaim()**](PropertyClaimsApi.md#updateClaim) | **PUT** /v1/property/claims/{claimId} | Update claim


## `createClaim()`

```php
createClaim($claim_create_request): \OpenAPI\Client\Model\ReportResponse
```

Create a claim

ClaimTemplateId must exist in Account's Claim Templates

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PropertyClaimsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$claim_create_request = {"claimManagerEmail":"accountman@email.example","claimNumber":"A1B2C3D4","claimTemplateId":"4965bfc7-6121-4642-98d7-4b8d5f758197","loss":{"firstNoticeOfLoss":"2001-01-01T00:00:00.0000000","lossDate":"2001-01-01T00:00:00.0000000","lossDescription":"Lorem ipsum dolor sit amet, consectetur adipiscing elit","peril":{"causeOfLoss":{"explanation":"Excepteur sint occaecat cupidatat non proident","templateId":"166bd393-00f6-4778-8305-46c907dc5a5a"},"templateId":"213c72b8-79b1-4f59-915d-f0ec1678c45f"},"potentialSubrogation":{"explanation":"Ut enim ad minima veniam, quis nostrum exercitationem ullam"}},"name":"Example Claim Submission","policy":{"applyDeductibleAcrossAllCoverages":false,"beneficiaryStakeholderIds":["0b7aac53-2851-46e5-8e5b-473940be80a7"],"brokerStakeholderId":"536864e6-59af-4607-9fac-d4ca623e7603","country":"US","coverages":[{"applyDepreciation":true,"deductible":{"minimum":500,"percentage":50,"type":"PercentageOfCoveredValuePlusMinimum"},"depreciationIsRecoverable":false,"id":"0142c86c-5bd9-4c98-bbd5-8095172217af","name":"Primary coverage","perItemLimit":50,"perOccurrenceLimit":250,"reserve":50,"type":"PrimaryCoverage"},{"applyDepreciation":true,"deductible":{"minimum":5000,"percentage":null,"type":"SingleValue"},"depreciationIsRecoverable":true,"id":"26d7ba23-0806-4236-937b-e30b1362539f","name":"Generic Subcoverage","parentCoverageId":"0142c86c-5bd9-4c98-bbd5-8095172217af","perItemLimit":75,"perOccurrenceLimit":0,"reserve":999,"type":"Subcoverage"},{"id":"00652498-0246-40af-9516-04641c435254","name":"Sublimit restriction","parentCoverageId":"26d7ba23-0806-4236-937b-e30b1362539f","perItemLimit":2.5,"perOccurrenceLimit":1,"type":"Sublimit"}],"currency":"USD","deductible":{"minimum":500000,"percentage":null,"type":"SingleValue"},"effectiveDate":"2001-01-01T00:00:00.0000000","expirationDate":"2001-12-31T00:00:00.0000000","inceptionDate":"2001-01-01T00:00:00.0000000","insuredStakeholderIds":["0b7aac53-2851-46e5-8e5b-473940be80a7"],"insurerStakeholderId":"55409716-6534-403b-b568-3cf05f41983e","mortgages":[{"id":"4d3152cb-3a09-4726-9d21-2696217df59a","loanNumber":"A1B2C3D4","mortgageeStakeholderId":"0b7aac53-2851-46e5-8e5b-473940be80a7","mortgagorStakeholderId":"55409716-6534-403b-b568-3cf05f41983e"}],"onsiteContactStakeholderId":"0b7aac53-2851-46e5-8e5b-473940be80a7","policyNumber":"A1B2C3D4","policyOwnerStakeholderId":"0b7aac53-2851-46e5-8e5b-473940be80a7","policyTemplateId":"213c72b8-79b1-4f59-915d-f0ec1678c45f","riskAddress":{"city":"Springfield","country":"US","postalCode":55555,"region":"OK","street":"123 Maine St","street2":"c/o Morty","street3":"Apt 321"}},"referenceNumber":"A1B2C3D4","stakeholders":[{"addresses":[{"city":"Springfield","country":"US","postalCode":55555,"region":"OK","street":"123 Maine St","street2":"c/o Morty","street3":"Apt 321","type":"Home"}],"companyStakeholderId":null,"email":"insured@email.example","id":"0b7aac53-2851-46e5-8e5b-473940be80a7","name":"Example Insured","phoneNumbers":[{"number":"212-555-0151","type":"Home"}],"taxId":"A1B2C3D4","title":"Prof.","type":"AdHocIndividual"},{"addresses":[{"city":"Springfield","country":"US","postalCode":55555,"region":"OK","street":"987 Big Business Ln","street2":null,"street3":null,"type":"Work"}],"email":"insurancecompany@email.example","id":"55409716-6534-403b-b568-3cf05f41983e","name":"Insurance Company","phoneNumbers":[{"number":"212-555-0199","type":"Work"}],"taxId":"A1B2C3D4","type":"AdHocCompany"}]}; // \OpenAPI\Client\Model\ClaimCreateRequest | The claim create request

try {
    $result = $apiInstance->createClaim($claim_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyClaimsApi->createClaim: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **claim_create_request** | [**\OpenAPI\Client\Model\ClaimCreateRequest**](../Model/ClaimCreateRequest.md)| The claim create request |

### Return type

[**\OpenAPI\Client\Model\ReportResponse**](../Model/ReportResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getClaim()`

```php
getClaim($claim_id): \OpenAPI\Client\Model\ClaimResponse
```

Get claim

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PropertyClaimsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$claim_id = 'claim_id_example'; // string | The claim id

try {
    $result = $apiInstance->getClaim($claim_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyClaimsApi->getClaim: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **claim_id** | [**string**](../Model/.md)| The claim id |

### Return type

[**\OpenAPI\Client\Model\ClaimResponse**](../Model/ClaimResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateClaim()`

```php
updateClaim($claim_id, $claim_update_request)
```

Update claim

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PropertyClaimsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$claim_id = 'claim_id_example'; // string | The claim id
$claim_update_request = {"claimNumber":"A1B2C3D4","referenceNumber":"A1B2C3D4"}; // \OpenAPI\Client\Model\ClaimUpdateRequest | The update request

try {
    $apiInstance->updateClaim($claim_id, $claim_update_request);
} catch (Exception $e) {
    echo 'Exception when calling PropertyClaimsApi->updateClaim: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **claim_id** | [**string**](../Model/.md)| The claim id |
 **claim_update_request** | [**\OpenAPI\Client\Model\ClaimUpdateRequest**](../Model/ClaimUpdateRequest.md)| The update request |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
