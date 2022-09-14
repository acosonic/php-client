# # CartItemModelProductOption

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Product option ID. | [optional] [readonly]
**is_enabled** | **bool** | Indicates if product option is enabled. | [optional] [readonly]
**name** | **string** | Product option name. | [optional] [readonly]
**currency** | [**\OpenAPI\Client\Model\ProductOptionInfoModelCurrency**](ProductOptionInfoModelCurrency.md) |  | [optional]
**price** | **float** | Product option price. | [optional] [readonly]
**shipping_price_type** | [**\OpenAPI\Client\Model\ProductOptionModelShippingPriceType**](ProductOptionModelShippingPriceType.md) |  | [optional]
**shipping** | **float** | Product option shipping price. | [optional] [readonly]
**shipping_next_item** | **float** | Shipping price modifier for next items (quantity &gt; 1). | [optional] [readonly]
**is_selected** | **bool** | Indicates if option is selected as default. | [optional] [readonly]
**sku** | **string** | Product option SKU. | [optional] [readonly]
**weight** | **float** | Product option wight. | [optional] [readonly]
**weight_unit** | [**\OpenAPI\Client\Model\ProductOptionInfoModelWeightUnit**](ProductOptionInfoModelWeightUnit.md) |  | [optional]
**length** | **float** | Product option length. | [optional] [readonly]
**width** | **float** | Product option width. | [optional] [readonly]
**height** | **float** | Product option height. | [optional] [readonly]
**dimension_unit** | [**\OpenAPI\Client\Model\ProductOptionInfoModelDimensionUnit**](ProductOptionInfoModelDimensionUnit.md) |  | [optional]
**provider_option_id** | **int** | Product option ID from product provider. | [optional] [readonly]
**attributes** | [**\OpenAPI\Client\Model\ProductAttributeModel[]**](ProductAttributeModel.md) | Product option attributes. | [optional] [readonly]
**images** | [**\OpenAPI\Client\Model\ProductOptionImageModel[]**](ProductOptionImageModel.md) | Product option images. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
