# # ProductModel

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
**meta_keywords** | **string** | Product meta keywords. | [optional] [readonly]
**meta_description** | **string** | Product meta description. | [optional] [readonly]
**canonical** | **string** | Product canonical. | [optional] [readonly]
**page_type** | [**OneOfPageTypeModel**](OneOfPageTypeModel.md) | Product page type. | [optional] [readonly]
**page_content** | **string** | Product page content. | [optional] [readonly]
**anchor_links** | **string** | Product anchor links. | [optional] [readonly]
**intro_text** | **string** | Product intro text. | [optional] [readonly]
**intro_image** | **string** | Product intro image. | [optional] [readonly]
**upsell_text** | **string** | Product upsell text. | [optional] [readonly]
**sweep_text** | **string** | Product sweep text. | [optional] [readonly]
**enable_comments** | **bool** | Indicates if comments are enabled for product. | [optional] [readonly]
**enable_upsell** | **bool** | Indicates if upsell is enabled for product. | [optional] [readonly]
**enable_intro** | **bool** | Indicates if intro is enabled for product. | [optional] [readonly]
**enable_sweep** | **bool** | Indicates if sweep is enabled for product. | [optional] [readonly]
**provider** | [**OneOfProductProviderInfoModel**](OneOfProductProviderInfoModel.md) | Product provider (dropshipping). | [optional] [readonly]
**provider_product_id** | **int** | Product ID from product provider. | [optional] [readonly]
**tax_code** | **string** | Defines tax code for this product. If not specified tax code from category will be used. | [optional] [readonly]
**tax_disabled** | **bool** | Indicates if taxes are disabled for this product. | [optional] [readonly]
**attributes** | [**\OpenAPI\Client\Model\ProductAttributeModel[]**](ProductAttributeModel.md) | Product attributes. | [optional] [readonly]
**options** | [**\OpenAPI\Client\Model\ProductOptionModel[]**](ProductOptionModel.md) | Product options. | [optional] [readonly]
**terms** | [**\OpenAPI\Client\Model\ProductTermModel[]**](ProductTermModel.md) | Product terms. | [optional] [readonly]
**gifts** | [**\OpenAPI\Client\Model\ProductInfoModel[]**](ProductInfoModel.md) | Gift products. | [optional] [readonly]
**upsells** | [**\OpenAPI\Client\Model\ProductInfoModel[]**](ProductInfoModel.md) | Upsell products. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
