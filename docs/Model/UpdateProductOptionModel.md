# # UpdateProductOptionModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Product option ID to update, when not specified creates new option. | [optional]
**is_enabled** | **bool** | Enable or disable product option. | [optional]
**name** | **string** | Product option name. |
**currency_code** | **string** | Product option price currency code. |
**price** | **float** | Product option price. | [optional]
**shipping_price_type** | [**\OpenAPI\Client\Model\UpdateProductOptionModelShippingPriceType**](UpdateProductOptionModelShippingPriceType.md) |  | [optional]
**shipping** | **float** | Product option shipping price. | [optional]
**shipping_next_item** | **float** | Shipping price modifier for next items (quantity &gt; 1). | [optional]
**is_selected** | **bool** | Indicates if option is selected as default. | [optional]
**sku** | **string** | Product option SKU. |
**weight** | **float** | Product option weight. | [optional]
**weight_unit_code** | **string** | Product option weight code. | [optional]
**length** | **float** | Product option length. | [optional]
**width** | **float** | Product option width. | [optional]
**height** | **float** | Product option height. | [optional]
**dimension_unit_code** | **string** | Product option dimension code. | [optional]
**attributes** | **string[]** | List of attribute value ID&#39;s. | [optional]
**images** | [**\OpenAPI\Client\Model\UpdateProductOptionImageModel[]**](UpdateProductOptionImageModel.md) | Product option images. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
