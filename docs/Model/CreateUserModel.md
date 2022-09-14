# # CreateUserModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | [**\OpenAPI\Client\Model\CreateUserModelType**](CreateUserModelType.md) |  |
**role_ids** | **string[]** | User role id&#39;s. NOTE: Cannot specify roles for admin account. | [optional]
**email** | **string** | E-mail. |
**email_verified** | **bool** | Indicates if the user email has been verified. | [optional]
**phone_number** | **string** | Phone number. | [optional]
**phone_number_verified** | **bool** | Indicates if the user phone number has been verified. | [optional]
**password** | **string** | Password. | [optional]
**first_name** | **string** | First name | [optional]
**last_name** | **string** | Last name | [optional]
**facebook_id** | **string** | Facebook ID | [optional]
**google_id** | **string** | Google ID | [optional]
**photo_path** | **string** | PhotoPath | [optional]
**organization_name** | **string** | Organization name (required for organizations) |
**organization_owner** | **string** | Organization name (required for organizations) |
**organization_address** | [**\OpenAPI\Client\Model\CreateUserModelOrganizationAddress**](CreateUserModelOrganizationAddress.md) |  | [optional]
**organization_settings** | [**\OpenAPI\Client\Model\CreateUserModelOrganizationSettings**](CreateUserModelOrganizationSettings.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
