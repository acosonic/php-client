# # CustomerProfileModelAllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shop** | [**OneOfShopInfoModel**](OneOfShopInfoModel.md) | Shop. | [optional] [readonly]
**has_password** | **bool** | Indicates if customer has password set. | [optional] [readonly]
**first_name** | **string** | First name | [optional] [readonly]
**last_name** | **string** | Last name | [optional] [readonly]
**full_name** | **string** | First and last name | [optional] [readonly]
**email** | **string** | E-mail address. | [optional] [readonly]
**email_verified** | **bool** | Indicates if customer email is verified. | [optional] [readonly]
**phone_number** | **string** | Phone number. | [optional] [readonly]
**facebook_id** | **string** | Facebook ID. | [optional] [readonly]
**google_id** | **string** | Google ID. | [optional] [readonly]
**photo_path** | **string** | Photo. | [optional] [readonly]
**two_factor_auth** | [**OneOfTwoFactorAuthEnum**](OneOfTwoFactorAuthEnum.md) | Two factor authentication. | [optional] [readonly]
**active_verifications** | [**\OpenAPI\Client\Model\ActiveVerificationModel[]**](ActiveVerificationModel.md) | Active email verification. | [optional] [readonly]
**addresses** | [**\OpenAPI\Client\Model\CustomerAddressModel[]**](CustomerAddressModel.md) | Customer addresses. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
