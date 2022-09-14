# # UpdateProductModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**is_enabled** | **bool** | Enable or disable product. | [optional]
**category_id** | **string** | Product category ID. | [optional]
**google_category_id** | **int** | Product google category ID. | [optional]
**name** | **string** | Product name. |
**slug** | **string** | Product slug. |
**manufacturer** | **string** | Product manufacturer. | [optional]
**meta_keywords** | **string** | Product meta keywords. | [optional]
**meta_description** | **string** | Product meta description. | [optional]
**canonical** | **string** | Product canonical. | [optional]
**page_type_id** | **int** | Product page type ID. | [optional]
**page_content** | **string** | Product page content. | [optional]
**anchor_links** | **string** | Product anchor links. | [optional]
**intro_text** | **string** | Product intro text. | [optional]
**intro_image** | **string** | Product intro image. | [optional]
**upsell_text** | **string** | Product upsell text. | [optional]
**sweep_text** | **string** | Product sweep text. | [optional]
**enable_comments** | **bool** | Indicates if product comments are enabled. | [optional]
**enable_upsell** | **bool** | Indicates if product upsell is enabled. | [optional]
**enable_intro** | **bool** | Indicates if product intro is enabled. | [optional]
**enable_sweep** | **bool** | Indicates if product sweep is enabled. | [optional]
**tax_code** | **string** | Defines tax code for this product. If not specified tax code from category will be used. | [optional]
**tax_disabled** | **bool** | Indicates if taxes are disabled for this product. | [optional] [default to false]
**attributes** | **string[]** | List of attribute value ID&#39;s. | [optional]
**options** | [**\OpenAPI\Client\Model\UpdateProductOptionModel[]**](UpdateProductOptionModel.md) | Product options. | [optional]
**terms** | [**\OpenAPI\Client\Model\UpdateProductTermModel[]**](UpdateProductTermModel.md) | Product terms. | [optional]
**gifts** | **string[]** | Gift products. | [optional]
**upsells** | **string[]** | Upsell products. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
