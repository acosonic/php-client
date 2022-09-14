# # PaymentMethodModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The ID of the entity. | [optional] [readonly]
**created_time** | **\DateTime** | The time when the entity was created. | [optional] [readonly]
**updated_time** | **\DateTime** | The last time when the entity was updated. | [optional] [readonly]
**is_deleted** | **bool** | Indicates if the entity has been deleted. | [optional] [readonly]
**is_enabled** | **bool** | Indicates if the entity is enabled. | [optional] [readonly]
**customer** | [**OneOfCustomerInfoModel**](OneOfCustomerInfoModel.md) | Customer info. | [optional] [readonly]
**type** | [**OneOfPaymentMethodTypeEnum**](OneOfPaymentMethodTypeEnum.md) | Payment method type. | [optional] [readonly]
**is_saved** | **bool** | Indicates if this payment method is saved by customer for future use. | [optional] [readonly]
**credit_card** | [**OneOfPaymentMethodCreditCardModel**](OneOfPaymentMethodCreditCardModel.md) | Information for credit card payment method. | [optional] [readonly]
**token** | **string** | Payment method token. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
