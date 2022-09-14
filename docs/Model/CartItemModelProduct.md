# # CartItemModelProduct

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The ID of the entity. | [optional] [readonly]
**created_time** | **\DateTime** | The time when the entity was created. | [optional] [readonly]
**updated_time** | **\DateTime** | The last time when the entity was updated. | [optional] [readonly]
**is_deleted** | **bool** | Indicates if the entity has been deleted. | [optional] [readonly]
**is_enabled** | **bool** | Indicates if the entity is enabled. | [optional] [readonly]
**shop** | [**OneOfShopInfoModel**](OneOfShopInfoModel.md) | Product shop. | [optional] [readonly]
**category** | [**OneOfCategoryModel**](OneOfCategoryModel.md) | Product category. | [optional] [readonly]
**google_category** | [**OneOfGoogleCategoryModel**](OneOfGoogleCategoryModel.md) | Product google category. | [optional] [readonly]
**name** | **string** | Product name. | [optional] [readonly]
**slug** | **string** | Product slug. | [optional] [readonly]
**manufacturer** | **string** | Product manufacturer. | [optional] [readonly]
**intro_image** | **string** | Product intro image. | [optional] [readonly]
**option** | [**OneOfProductOptionInfoModel**](OneOfProductOptionInfoModel.md) | First default product option. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
