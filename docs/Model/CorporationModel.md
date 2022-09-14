# # CorporationModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The ID of the entity. | [optional] [readonly]
**created_time** | **\DateTime** | The time when the entity was created. | [optional] [readonly]
**updated_time** | **\DateTime** | The last time when the entity was updated. | [optional] [readonly]
**is_deleted** | **bool** | Indicates if the entity has been deleted. | [optional] [readonly]
**is_enabled** | **bool** | Indicates if the entity is enabled. | [optional] [readonly]
**name** | **string** | Corporation name. | [optional] [readonly]
**owner_name** | **string** | Corporation owner name. | [optional] [readonly]
**phone_number** | **string** | Corporation phone number. | [optional] [readonly]
**email** | **string** | Corporation email. | [optional] [readonly]
**organization** | [**OneOfOrganizationInfoModel**](OneOfOrganizationInfoModel.md) | Organization | [optional] [readonly]
**settings** | [**OneOfCorporationSettingsModel**](OneOfCorporationSettingsModel.md) | Corporation settings. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
