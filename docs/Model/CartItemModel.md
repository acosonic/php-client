# # CartItemModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**product** | [**\OpenAPI\Client\Model\CartItemModelProduct**](CartItemModelProduct.md) |  | [optional]
**product_option** | [**\OpenAPI\Client\Model\CartItemModelProductOption**](CartItemModelProductOption.md) |  | [optional]
**product_term** | [**\OpenAPI\Client\Model\CalculatePriceResponseModelProductTerm**](CalculatePriceResponseModelProductTerm.md) |  | [optional]
**quantity** | **int** | Quantity. | [optional] [readonly]
**currency** | [**\OpenAPI\Client\Model\CalculatePriceResponseModelCurrency**](CalculatePriceResponseModelCurrency.md) |  | [optional]
**unit_price** | **float** | Single item price before discount. | [optional] [readonly]
**discount_percent** | **float** | Discount percent. | [optional] [readonly]
**unit_discount** | **float** | Discount per item. | [optional] [readonly]
**unit_discounted_price** | **float** | Single item price after discount. | [optional] [readonly]
**tax_code** | **string** | Product tax code for the item. If omitted, the item will remain fully taxable. | [optional] [readonly]
**tax_disabled** | **bool** | Indicates if sales tax is disabled for this product. | [optional] [readonly]
**taxable_amount** | **float** | Amount of the item to be taxed. | [optional] [readonly]
**tax_rate** | **float** | Overall sales tax rate of the item. | [optional] [readonly]
**tax** | **float** | Amount of sales tax to collect. | [optional] [readonly]
**total_discount** | **float** | Total discount. | [optional] [readonly]
**total_without_discount** | **float** | Total cost without discount after taxes. | [optional] [readonly]
**total** | **float** | Total items cost with discount after taxes. | [optional] [readonly]
**shipping** | **float** | Total shipping cost for all items. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
