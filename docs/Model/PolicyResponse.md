# # PolicyResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**apply_deductible_across_all_coverages** | **bool** | Does deductible apply across all coverages |
**beneficiary_stakeholder_ids** | **string[]** | List of beneficiary stakeholder ids | [optional]
**broker_stakeholder_id** | **string** | The broker stakeholder id | [optional]
**country** | **string** | The policy country |
**coverages** | [**\OpenAPI\Client\Model\CoverageOrSublimitV1Response[]**](CoverageOrSublimitV1Response.md) | List of coverages | [optional]
**currency** | **string** | The currency of the policy |
**deductible** | [**\OpenAPI\Client\Model\DeductibleV1Response**](DeductibleV1Response.md) |  | [optional]
**effective_date** | [**\DateTime**](\DateTime.md) | The effective date | [optional]
**expiration_date** | [**\DateTime**](\DateTime.md) | The expiration date | [optional]
**id** | **string** | The policy id |
**inception_date** | [**\DateTime**](\DateTime.md) | The inception date | [optional]
**insured_stakeholder_ids** | **string[]** | List of insured stakeholder ids | [optional]
**insurer_stakeholder_id** | **string** | The insurer stakeholder id | [optional]
**mortgages** | [**\OpenAPI\Client\Model\MortgageV1Response[]**](MortgageV1Response.md) | List of mortgages | [optional]
**onsite_contact_stakeholder_id** | **string** | The onsite contact stakeholder id | [optional]
**policy_number** | **string** | The policy number | [optional]
**policy_owner_stakeholder_id** | **string** | The policy owner stakeholder id | [optional]
**risk_address** | [**\OpenAPI\Client\Model\AddressV1Response**](AddressV1Response.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
