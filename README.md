# OpenAPIClient-php

The Xactimate One API allows you to integrate your current services and applications directly with Xactimate One. It creates a seamless experience for your company as it manages claims with your internal software by sending and receiving data from the Xactimate One platform.


## Installation & Usage

### Requirements

PHP 7.2 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/xactimate-one/sdk-php.git"
    }
  ],
  "require": {
    "xactimate-one/sdk-php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\HealthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->alive();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HealthApi->alive: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *http://localhost*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*HealthApi* | [**alive**](docs/Api/HealthApi.md#alive) | **GET** /health/alive | Returns \&quot;alive\&quot; if the service is available.
*HealthApi* | [**details**](docs/Api/HealthApi.md#details) | **GET** /health/details | Returns the health details of the service and its dependencies.
*PropertyClaimsApi* | [**createClaim**](docs/Api/PropertyClaimsApi.md#createclaim) | **POST** /v1/property/claims | Create a claim
*PropertyClaimsApi* | [**getClaim**](docs/Api/PropertyClaimsApi.md#getclaim) | **GET** /v1/property/claims/{claimId} | Get claim
*PropertyClaimsApi* | [**updateClaim**](docs/Api/PropertyClaimsApi.md#updateclaim) | **PUT** /v1/property/claims/{claimId} | Update claim
*PropertyClaimsLossApi* | [**getClaimLoss**](docs/Api/PropertyClaimsLossApi.md#getclaimloss) | **GET** /v1/property/claims/{claimId}/loss | Get claim loss
*PropertyClaimsLossApi* | [**updateClaimLoss**](docs/Api/PropertyClaimsLossApi.md#updateclaimloss) | **PUT** /v1/property/claims/{claimId}/loss | Update claim loss
*PropertyClaimsMediaApi* | [**createMedia**](docs/Api/PropertyClaimsMediaApi.md#createmedia) | **POST** /v1/property/claims/{claimId}/media | Create claim media
*PropertyClaimsMediaApi* | [**getMedia**](docs/Api/PropertyClaimsMediaApi.md#getmedia) | **GET** /v1/property/claims/{claimId}/media | Get claim media
*PropertyClaimsMediaApi* | [**getMediaById**](docs/Api/PropertyClaimsMediaApi.md#getmediabyid) | **GET** /v1/property/claims/{claimId}/media/{mediaId} | Get claim media item
*PropertyClaimsMediaApi* | [**updateMedia**](docs/Api/PropertyClaimsMediaApi.md#updatemedia) | **PUT** /v1/property/claims/{claimId}/media/{mediaId} | Update claim media
*PropertyClaimsPolicyApi* | [**getClaimPolicy**](docs/Api/PropertyClaimsPolicyApi.md#getclaimpolicy) | **GET** /v1/property/claims/{claimId}/policy | Get claim policy
*PropertyClaimsPolicyApi* | [**updateClaimPolicy**](docs/Api/PropertyClaimsPolicyApi.md#updateclaimpolicy) | **PUT** /v1/property/claims/{claimId}/policy | Update claim policy
*PropertyClaimsReportsApi* | [**createClaimReport**](docs/Api/PropertyClaimsReportsApi.md#createclaimreport) | **POST** /v1/property/claims/{claimId}/reports | Create a claim report
*PropertyClaimsReportsApi* | [**getClaimReportById**](docs/Api/PropertyClaimsReportsApi.md#getclaimreportbyid) | **GET** /v1/property/claims/{claimId}/reports/{reportId} | Get a specific claim report
*PropertyClaimsReportsApi* | [**getClaimReports**](docs/Api/PropertyClaimsReportsApi.md#getclaimreports) | **GET** /v1/property/claims/{claimId}/reports | Get reports for claim
*PropertyClaimsRolesApi* | [**addClaimManagerByEmail**](docs/Api/PropertyClaimsRolesApi.md#addclaimmanagerbyemail) | **PUT** /v1/property/claims/{claimId}/claim-manager/account-user/{email} | Add claim manager
*PropertyClaimsRolesApi* | [**addRoleByEmail**](docs/Api/PropertyClaimsRolesApi.md#addrolebyemail) | **PUT** /v1/property/claims/{claimId}/roles/{roleId}/account-user/{email} | Add user to role
*PropertyClaimsRolesApi* | [**removeClaimManagerByEmail**](docs/Api/PropertyClaimsRolesApi.md#removeclaimmanagerbyemail) | **DELETE** /v1/property/claims/{claimId}/claim-manager/account-user/{email} | Remove claim manager
*PropertyClaimsRolesApi* | [**removeRoleByEmail**](docs/Api/PropertyClaimsRolesApi.md#removerolebyemail) | **DELETE** /v1/property/claims/{claimId}/roles/{roleId}/account-user/{email} | Remove user from role
*PropertyClaimsStakeholdersApi* | [**createClaimStakeholder**](docs/Api/PropertyClaimsStakeholdersApi.md#createclaimstakeholder) | **POST** /v1/property/claims/{claimId}/stakeholders | Add claim stakeholder
*PropertyClaimsStakeholdersApi* | [**getClaimStakeholderById**](docs/Api/PropertyClaimsStakeholdersApi.md#getclaimstakeholderbyid) | **GET** /v1/property/claims/{claimId}/stakeholders/{stakeholderId} | Get claim stakeholder
*PropertyClaimsStakeholdersApi* | [**getClaimStakeholders**](docs/Api/PropertyClaimsStakeholdersApi.md#getclaimstakeholders) | **GET** /v1/property/claims/{claimId}/stakeholders | Get claim stakeholders
*PropertyClaimsStakeholdersApi* | [**updateClaimStakeholder**](docs/Api/PropertyClaimsStakeholdersApi.md#updateclaimstakeholder) | **PUT** /v1/property/claims/{claimId}/stakeholders/{stakeholderId} | Update claim stakeholder
*PropertyClaimsStatusApi* | [**updateClaimStatus**](docs/Api/PropertyClaimsStatusApi.md#updateclaimstatus) | **PUT** /v1/property/claims/{claimId}/status | Updates status for property claim
*PropertyTemplatesApi* | [**getClaimTemplateFormTemplates**](docs/Api/PropertyTemplatesApi.md#getclaimtemplateformtemplates) | **GET** /v1/property/templates/claims/{claimTemplateId}/forms | Get claim template form templates
*PropertyTemplatesApi* | [**getClaimTemplateReportTemplates**](docs/Api/PropertyTemplatesApi.md#getclaimtemplatereporttemplates) | **GET** /v1/property/templates/claims/{claimTemplateId}/reports | Get claim template report templates
*PropertyTemplatesApi* | [**getClaimTemplateRoleTemplates**](docs/Api/PropertyTemplatesApi.md#getclaimtemplateroletemplates) | **GET** /v1/property/templates/claims/{claimTemplateId}/roles | Get claim template role templates
*PropertyTemplatesApi* | [**getClaimTemplateStatusChangeReasonTemplates**](docs/Api/PropertyTemplatesApi.md#getclaimtemplatestatuschangereasontemplates) | **GET** /v1/property/templates/claims/{claimTemplateId}/status-change-reasons | Get claim template status change reason templates
*PropertyTemplatesApi* | [**getClaimTemplates**](docs/Api/PropertyTemplatesApi.md#getclaimtemplates) | **GET** /v1/property/templates/claims | Get claim templates
*PropertyTemplatesApi* | [**getFormTemplates**](docs/Api/PropertyTemplatesApi.md#getformtemplates) | **GET** /v1/property/templates/forms | Get form templates
*PropertyTemplatesApi* | [**getPerilCauseTemplates**](docs/Api/PropertyTemplatesApi.md#getperilcausetemplates) | **GET** /v1/property/templates/perils/{perilId}/causes | Get peril causes templates
*PropertyTemplatesApi* | [**getPerilsTemplates**](docs/Api/PropertyTemplatesApi.md#getperilstemplates) | **GET** /v1/property/templates/perils | Get peril templates
*PropertyTemplatesApi* | [**getPolicyTemplates**](docs/Api/PropertyTemplatesApi.md#getpolicytemplates) | **GET** /v1/property/templates/policies | Get policy templates
*PropertyTemplatesApi* | [**getReportTemplates**](docs/Api/PropertyTemplatesApi.md#getreporttemplates) | **GET** /v1/property/templates/reports | Get instance report templates
*PropertyTemplatesApi* | [**getRoleTemplates**](docs/Api/PropertyTemplatesApi.md#getroletemplates) | **GET** /v1/property/templates/roles | Get role templates

## Models

- [AccountMetadataResponse](docs/Model/AccountMetadataResponse.md)
- [AdHocCompanyStakeholderCreateRequest](docs/Model/AdHocCompanyStakeholderCreateRequest.md)
- [AdHocCompanyStakeholderUpdateRequest](docs/Model/AdHocCompanyStakeholderUpdateRequest.md)
- [AdHocIndividualStakeholderCreateRequest](docs/Model/AdHocIndividualStakeholderCreateRequest.md)
- [AdHocIndividualStakeholderUpdateRequest](docs/Model/AdHocIndividualStakeholderUpdateRequest.md)
- [Address](docs/Model/Address.md)
- [AddressType](docs/Model/AddressType.md)
- [AddressV1Request](docs/Model/AddressV1Request.md)
- [AddressV1Response](docs/Model/AddressV1Response.md)
- [CauseOfLossCreateRequest](docs/Model/CauseOfLossCreateRequest.md)
- [CauseOfLossResponse](docs/Model/CauseOfLossResponse.md)
- [CauseOfLossUpdateRequest](docs/Model/CauseOfLossUpdateRequest.md)
- [ChileanPolicyUpdateV1Request](docs/Model/ChileanPolicyUpdateV1Request.md)
- [ChileanPolicyV1Response](docs/Model/ChileanPolicyV1Response.md)
- [ChileanPrimaryCoverageV1Response](docs/Model/ChileanPrimaryCoverageV1Response.md)
- [ChileanSubcoverageV1Response](docs/Model/ChileanSubcoverageV1Response.md)
- [ChileanSublimitV1Response](docs/Model/ChileanSublimitV1Response.md)
- [ClaimCreateAdHocCompanyStakeholderCreateRequest](docs/Model/ClaimCreateAdHocCompanyStakeholderCreateRequest.md)
- [ClaimCreateAdHocIndividualStakeholderCreateRequest](docs/Model/ClaimCreateAdHocIndividualStakeholderCreateRequest.md)
- [ClaimCreateRequest](docs/Model/ClaimCreateRequest.md)
- [ClaimCreateStakeholderCreateRequest](docs/Model/ClaimCreateStakeholderCreateRequest.md)
- [ClaimResponse](docs/Model/ClaimResponse.md)
- [ClaimStatusChangeReasonTemplateResponse](docs/Model/ClaimStatusChangeReasonTemplateResponse.md)
- [ClaimStatusChangeRequest](docs/Model/ClaimStatusChangeRequest.md)
- [ClaimStatusType](docs/Model/ClaimStatusType.md)
- [ClaimUpdateRequest](docs/Model/ClaimUpdateRequest.md)
- [CompanyStakeholderResponse](docs/Model/CompanyStakeholderResponse.md)
- [CoverageOrSublimitV1Response](docs/Model/CoverageOrSublimitV1Response.md)
- [CoverageType](docs/Model/CoverageType.md)
- [CoverageV1Response](docs/Model/CoverageV1Response.md)
- [DeductibleType](docs/Model/DeductibleType.md)
- [DeductibleV1Request](docs/Model/DeductibleV1Request.md)
- [DeductibleV1Response](docs/Model/DeductibleV1Response.md)
- [DependencyHealthDetails](docs/Model/DependencyHealthDetails.md)
- [GenericPolicyUpdateV1Request](docs/Model/GenericPolicyUpdateV1Request.md)
- [GenericPolicyV1Response](docs/Model/GenericPolicyV1Response.md)
- [GenericPrimaryCoverageV1Response](docs/Model/GenericPrimaryCoverageV1Response.md)
- [GenericSubcoverageV1Response](docs/Model/GenericSubcoverageV1Response.md)
- [GenericSublimitV1Response](docs/Model/GenericSublimitV1Response.md)
- [IChileanCoverageOrSublimitV1Request](docs/Model/IChileanCoverageOrSublimitV1Request.md)
- [ICoverageOrSublimitV1Request](docs/Model/ICoverageOrSublimitV1Request.md)
- [ICoverageOrSublimitV1RequestIPolicyCreateRequest](docs/Model/ICoverageOrSublimitV1RequestIPolicyCreateRequest.md)
- [ICoverageOrSublimitV1RequestIPolicyUpdateV1Request](docs/Model/ICoverageOrSublimitV1RequestIPolicyUpdateV1Request.md)
- [IGenericCoverageOrSublimitV1Request](docs/Model/IGenericCoverageOrSublimitV1Request.md)
- [IndividualStakeholderResponse](docs/Model/IndividualStakeholderResponse.md)
- [LossCreateRequest](docs/Model/LossCreateRequest.md)
- [LossResponse](docs/Model/LossResponse.md)
- [LossUpdateRequest](docs/Model/LossUpdateRequest.md)
- [MediaCreateRequest](docs/Model/MediaCreateRequest.md)
- [MediaCreatedResponse](docs/Model/MediaCreatedResponse.md)
- [MediaResponse](docs/Model/MediaResponse.md)
- [MediaUpdateRequest](docs/Model/MediaUpdateRequest.md)
- [MediaUpdatedResponse](docs/Model/MediaUpdatedResponse.md)
- [MortgageV1Request](docs/Model/MortgageV1Request.md)
- [MortgageV1Response](docs/Model/MortgageV1Response.md)
- [PerilCreateRequest](docs/Model/PerilCreateRequest.md)
- [PerilResponse](docs/Model/PerilResponse.md)
- [PerilUpdateRequest](docs/Model/PerilUpdateRequest.md)
- [PhoneNumber](docs/Model/PhoneNumber.md)
- [PhoneNumberType](docs/Model/PhoneNumberType.md)
- [PolicyResponse](docs/Model/PolicyResponse.md)
- [PotentialSubrogationCreateRequest](docs/Model/PotentialSubrogationCreateRequest.md)
- [PotentialSubrogationResponse](docs/Model/PotentialSubrogationResponse.md)
- [PotentialSubrogationUpdateRequest](docs/Model/PotentialSubrogationUpdateRequest.md)
- [PrimaryCoverageV1Response](docs/Model/PrimaryCoverageV1Response.md)
- [ProblemDetails](docs/Model/ProblemDetails.md)
- [ReportCreateRequest](docs/Model/ReportCreateRequest.md)
- [ReportResponse](docs/Model/ReportResponse.md)
- [ServiceStatus](docs/Model/ServiceStatus.md)
- [StakeholderCreateRequest](docs/Model/StakeholderCreateRequest.md)
- [StakeholderResponse](docs/Model/StakeholderResponse.md)
- [StakeholderType](docs/Model/StakeholderType.md)
- [StakeholderUpdateRequest](docs/Model/StakeholderUpdateRequest.md)
- [SubcoverageV1Response](docs/Model/SubcoverageV1Response.md)
- [SublimitV1Response](docs/Model/SublimitV1Response.md)
- [TemplateMetadataResponse](docs/Model/TemplateMetadataResponse.md)

## Authorization

### ApiKey

- **Type**: API key
- **API key parameter name**: x-api-key
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `null`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
