# # LoginResultModelOfCustomerProfileModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**verification_status** | [**\OpenAPI\Client\Model\LoginResultModelOfCustomerProfileModelVerificationStatus**](LoginResultModelOfCustomerProfileModelVerificationStatus.md) |  | [optional]
**verification_error_message** | **string** | 2FA verification error message. | [optional] [readonly]
**verification_expiration_time** | **\DateTime** | UTC time when 2FA verification expires. | [optional] [readonly]
**profile** | [**\OpenAPI\Client\Model\LoginResultModelOfCustomerProfileModelProfile**](LoginResultModelOfCustomerProfileModelProfile.md) |  | [optional]
**token** | **string** | JWT token. | [optional] [readonly]
**token_expiration_time** | **\DateTime** | UTC time when token expires. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
