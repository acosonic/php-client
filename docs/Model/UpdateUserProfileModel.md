# # UpdateUserProfileModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**is_enabled** | **bool** | Enable or disable user. | [optional]
**email** | **string** | Email NOTE: will be updated after verification | [optional]
**email_verified** | **bool** | Indicates if the user email has been verified. | [optional]
**phone_number** | **string** | Phone NOTE: will be updated after verification | [optional]
**phone_number_verified** | **bool** | Indicates if the user phone number has been verified. | [optional]
**first_name** | **string** | First name | [optional]
**last_name** | **string** | Last name | [optional]
**photo_path** | **string** | PhotoPath | [optional]
**two_factor_auth** | [**\OpenAPI\Client\Model\UpdateCustomerProfileModelTwoFactorAuth**](UpdateCustomerProfileModelTwoFactorAuth.md) |  | [optional]
**organization_name** | **string** | Organization name (required for organizations) | [optional]
**organization_owner** | **string** | Organization name (required for organizations) | [optional]
**organization_address** | [**\OpenAPI\Client\Model\CreateUserModelOrganizationAddress**](CreateUserModelOrganizationAddress.md) |  | [optional]
**organization_settings** | [**\OpenAPI\Client\Model\CreateUserModelOrganizationSettings**](CreateUserModelOrganizationSettings.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
