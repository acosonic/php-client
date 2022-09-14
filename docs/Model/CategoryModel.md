# # CategoryModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The ID of the entity. | [optional] [readonly]
**created_time** | **\DateTime** | The time when the entity was created. | [optional] [readonly]
**updated_time** | **\DateTime** | The last time when the entity was updated. | [optional] [readonly]
**is_deleted** | **bool** | Indicates if the entity has been deleted. | [optional] [readonly]
**is_enabled** | **bool** | Indicates if the entity is enabled. | [optional] [readonly]
**name** | **string** | Category name. | [optional] [readonly]
**path** | **string** | Category path. | [optional] [readonly]
**slug** | **string** | Category slug. | [optional] [readonly]
**parent_id** | **string** | Category parent ID. | [optional] [readonly]
**tax_code** | **string** | Defines tax code for all products in this category. | [optional] [readonly]
**tax_disabled** | **bool** | Indicates if taxes are disabled for all products in this category. | [optional] [readonly]
**google_category** | [**OneOfGoogleCategoryModel**](OneOfGoogleCategoryModel.md) | Google category. | [optional]
**attributes** | [**\OpenAPI\Client\Model\AttributeModel[]**](AttributeModel.md) | Category attributes. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
