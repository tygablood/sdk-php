# PropertyClaimPolicyInfo

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**policy_holder** | [**\Swagger\Client\Model\PropertyClaimPolicyInfoPolicyHolder**](PropertyClaimPolicyInfoPolicyHolder.md) |  | [optional] 
**policy_type** | **string** | The type of the insurance policy | [optional] 
**policy_number** | **string** | The insurance policy number | [optional] 
**inception_date** | [**\DateTime**](\DateTime.md) | The origination date of the insurance policy | [optional] 
**effective_date** | [**\DateTime**](\DateTime.md) | The date the policy goes into effect | [optional] 
**expiration_date** | [**\DateTime**](\DateTime.md) | The date the policy expires | [optional] 
**mortgagee** | **string** | The name of the mortgage holder. This is required if &#x60;loanNumber&#x60; is provided. | [optional] 
**loan_number** | **string** | The loan number of the mortgage. This is required if &#x60;mortgagee&#39; is provided. | [optional] 
**apply_deductible_to** | **string** | Determines how the deductible values are handled | [optional] 
**apply_limits** | **bool** | Determines if policy limits should be applied | [optional] 
**deductible** | **float** | The policy holder&#39;s financial liability under this policy | [optional] 
**coverages** | [**\Swagger\Client\Model\PropertyClaimPolicyInfoCoverages[]**](PropertyClaimPolicyInfoCoverages.md) | The coverages provided in the policy | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


