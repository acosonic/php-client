# # UserProfileModelAllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**organization** | [**OneOfOrganizationInfoModel**](OneOfOrganizationInfoModel.md) | Organization | [optional] [readonly]
**type** | [**OneOfUserTypeEnum**](OneOfUserTypeEnum.md) | User type. | [optional] [readonly]
**is_admin** | **bool** | Indicates if user is administrator. | [optional] [readonly]
**has_password** | **bool** | Indicates if user has password set. | [optional] [readonly]
**username** | **string** | First name | [optional] [readonly]
**first_name** | **string** | First name | [optional] [readonly]
**last_name** | **string** | Last name | [optional] [readonly]
**full_name** | **string** | First and last name | [optional] [readonly]
**email** | **string** | E-mail address. | [optional] [readonly]
**email_verified** | **bool** | Indicates if user email is verified. | [optional] [readonly]
**phone_number** | **string** | Phone number. | [optional] [readonly]
**facebook_id** | **string** | Facebook ID. | [optional] [readonly]
**google_id** | **string** | Google ID. | [optional] [readonly]
**photo_path** | **string** | Photo. | [optional] [readonly]
**two_factor_auth** | [**OneOfTwoFactorAuthEnum**](OneOfTwoFactorAuthEnum.md) | Two factor authentication. | [optional] [readonly]
**active_verifications** | [**\OpenAPI\Client\Model\ActiveVerificationModel[]**](ActiveVerificationModel.md) | Active email verification. | [optional] [readonly]
**organization_name** | **string** | Organization name. | [optional] [readonly]
**organization_owner** | **string** | Organization name. | [optional] [readonly]
**organization_address** | [**OneOfAddressModel**](OneOfAddressModel.md) | Organization address. | [optional] [readonly]
**organization_settings** | [**OneOfOrganizationSettingsModel**](OneOfOrganizationSettingsModel.md) | Organization settings. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
