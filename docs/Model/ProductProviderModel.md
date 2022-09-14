# # ProductProviderModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The ID of the entity. | [optional] [readonly]
**created_time** | **\DateTime** | The time when the entity was created. | [optional] [readonly]
**updated_time** | **\DateTime** | The last time when the entity was updated. | [optional] [readonly]
**is_deleted** | **bool** | Indicates if the entity has been deleted. | [optional] [readonly]
**is_enabled** | **bool** | Indicates if the entity is enabled. | [optional] [readonly]
**shop** | [**OneOfShopInfoModel**](OneOfShopInfoModel.md) | Product provider shop. | [optional] [readonly]
**type** | [**OneOfProductProviderTypeEnum**](OneOfProductProviderTypeEnum.md) | Product provider type. | [optional] [readonly]
**name** | **string** | Product provider name. | [optional] [readonly]
**settings** | [**OneOfProductProviderSettingsModel**](OneOfProductProviderSettingsModel.md) | Product provider settings. | [optional] [readonly]
**last_update_time_utc** | **\DateTime** | Last time product import was run. | [optional] [readonly]
**running_task** | [**OneOfProductProviderTaskModel**](OneOfProductProviderTaskModel.md) | Contains information about currently running task. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
