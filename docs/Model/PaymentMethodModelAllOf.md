# # PaymentMethodModelAllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**customer** | [**OneOfCustomerInfoModel**](OneOfCustomerInfoModel.md) | Customer info. | [optional] [readonly]
**type** | [**OneOfPaymentMethodTypeEnum**](OneOfPaymentMethodTypeEnum.md) | Payment method type. | [optional] [readonly]
**is_saved** | **bool** | Indicates if this payment method is saved by customer for future use. | [optional] [readonly]
**credit_card** | [**OneOfPaymentMethodCreditCardModel**](OneOfPaymentMethodCreditCardModel.md) | Information for credit card payment method. | [optional] [readonly]
**token** | **string** | Payment method token. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
