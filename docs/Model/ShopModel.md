# # ShopModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The ID of the entity. | [optional] [readonly]
**created_time** | **\DateTime** | The time when the entity was created. | [optional] [readonly]
**updated_time** | **\DateTime** | The last time when the entity was updated. | [optional] [readonly]
**is_deleted** | **bool** | Indicates if the entity has been deleted. | [optional] [readonly]
**is_enabled** | **bool** | Indicates if the entity is enabled. | [optional] [readonly]
**name** | **string** | Shop name. | [optional] [readonly]
**domain** | **string** | Shop domain. | [optional] [readonly]
**corporation** | [**OneOfCorporationInfoModel**](OneOfCorporationInfoModel.md) | Corporation. | [optional] [readonly]
**address** | [**OneOfAddressModel**](OneOfAddressModel.md) | Shop address. | [optional]
**settings** | [**OneOfShopSettingsModel**](OneOfShopSettingsModel.md) | Shop settings. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
