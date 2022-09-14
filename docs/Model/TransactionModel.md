# # TransactionModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The ID of the entity. | [optional] [readonly]
**created_time** | **\DateTime** | The time when the entity was created. | [optional] [readonly]
**updated_time** | **\DateTime** | The last time when the entity was updated. | [optional] [readonly]
**is_deleted** | **bool** | Indicates if the entity has been deleted. | [optional] [readonly]
**is_enabled** | **bool** | Indicates if the entity is enabled. | [optional] [readonly]
**order** | [**OneOfOrderInfoModel**](OneOfOrderInfoModel.md) | Transaction order. | [optional] [readonly]
**type** | [**OneOfTransactionTypeEnum**](OneOfTransactionTypeEnum.md) | Transaction type. | [optional] [readonly]
**amount** | **float** | Transaction amount. | [optional] [readonly]
**currency** | [**OneOfCurrencyModel**](OneOfCurrencyModel.md) | Transaction currency. | [optional] [readonly]
**payment_method** | [**OneOfPaymentMethodModel**](OneOfPaymentMethodModel.md) | Transaction payment method. | [optional] [readonly]
**mid** | [**OneOfMidModel**](OneOfMidModel.md) | Last mid used for this payment method. | [optional] [readonly]
**card3ds_version** | **string** | For credit card payment: 3DS version used for authentication. | [optional] [readonly]
**card3ds_xid** | **string** | For credit card payment: 3DS transaction identifier. | [optional] [readonly]
**card3ds_cavv** | **string** | For credit card payment: 3DS Cardholder Authentication Verification Value (CAVV). | [optional] [readonly]
**card3ds_eci** | **string** | For credit card payment: 3DS Electronic Commerce Indicator (ECI). | [optional] [readonly]
**status** | [**OneOfTransactionStatusEnum**](OneOfTransactionStatusEnum.md) | Transaction status. | [optional] [readonly]
**original_id** | **string** | Original transaction ID (received from payment gateway). | [optional] [readonly]
**original_status** | **string** | Original transaction status (received from payment gateway). | [optional] [readonly]
**original_status_text** | **string** | Original transaction status text (received from payment gateway). | [optional] [readonly]
**logs** | [**\OpenAPI\Client\Model\TransactionLogModel[]**](TransactionLogModel.md) | Transaction logs. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
