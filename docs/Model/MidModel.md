# # MidModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The ID of the entity. | [optional] [readonly]
**created_time** | **\DateTime** | The time when the entity was created. | [optional] [readonly]
**updated_time** | **\DateTime** | The last time when the entity was updated. | [optional] [readonly]
**is_deleted** | **bool** | Indicates if the entity has been deleted. | [optional] [readonly]
**is_enabled** | **bool** | Indicates if the entity is enabled. | [optional] [readonly]
**shop** | [**OneOfShopInfoModel**](OneOfShopInfoModel.md) | Shop. | [optional] [readonly]
**payment_gateway** | [**OneOfPaymentGatewayInfoModel**](OneOfPaymentGatewayInfoModel.md) | Payment gateway. | [optional] [readonly]
**bank** | [**OneOfBankModel**](OneOfBankModel.md) | Bank. | [optional] [readonly]
**name** | **string** | Mid name. | [optional] [readonly]
**number** | **string** | Mid number. | [optional] [readonly]
**descriptor** | **string** | Mid descriptor. | [optional] [readonly]
**allow_other_shops** | **bool** | Indicates if this mid can be used in other shops from same organization. | [optional] [readonly]
**cap** | **float** | Mid cap amount. | [optional] [readonly]
**remaining** | **float** | Mid remaining amount. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
