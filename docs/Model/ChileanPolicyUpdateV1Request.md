# # ChileanPolicyUpdateV1Request

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**apply_deductible_across_all_coverages** | **bool** |  | [optional]
**beneficiary_stakeholder_ids** | **string[]** |  | [optional]
**broker_stakeholder_id** | **string** |  | [optional]
**country** | **string** |  |
**coverages** | [**\OpenAPI\Client\Model\IChileanCoverageOrSublimitV1Request[]**](IChileanCoverageOrSublimitV1Request.md) |  | [optional]
**currency** | **string** |  | [optional]
**deductible** | [**\OpenAPI\Client\Model\DeductibleV1Request**](DeductibleV1Request.md) |  | [optional]
**effective_date** | [**\DateTime**](\DateTime.md) |  | [optional]
**expiration_date** | [**\DateTime**](\DateTime.md) |  | [optional]
**inception_date** | [**\DateTime**](\DateTime.md) |  | [optional]
**insured_stakeholder_ids** | **string[]** |  | [optional]
**insurer_stakeholder_id** | **string** |  | [optional]
**item_number** | **int** | The item number | [optional]
**mortgages** | [**\OpenAPI\Client\Model\MortgageV1Request[]**](MortgageV1Request.md) |  | [optional]
**onsite_contact_stakeholder_id** | **string** |  | [optional]
**policy_number** | **string** |  | [optional]
**policy_owner_stakeholder_id** | **string** |  | [optional]
**risk_address** | [**\OpenAPI\Client\Model\AddressV1Request**](AddressV1Request.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
