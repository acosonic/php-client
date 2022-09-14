# # CartModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**currency** | [**\OpenAPI\Client\Model\CalculatePriceResponseModelCurrency**](CalculatePriceResponseModelCurrency.md) |  | [optional]
**total_item_price** | **float** | Sum of all item prices before discount. | [optional] [readonly]
**total_item_discount** | **float** | Sum of all item discounts. | [optional] [readonly]
**total_item_discounted_price** | **float** | Sum of all item prices after discount. | [optional] [readonly]
**total_shipping** | **float** | Total shipping for all items. | [optional] [readonly]
**shipping_taxable** | **bool** | Indicates if shipping is taxable. | [optional] [readonly]
**shipping_tax_rate** | **float** | Overall sales tax rate for shipping. | [optional] [readonly]
**shipping_tax** | **float** | Amount of sales tax to collect for shipping. | [optional] [readonly]
**total_item_tax** | **float** | Amount of sales tax to collect for all items. | [optional] [readonly]
**total_tax** | **float** | Total sales tax amount. | [optional] [readonly]
**total_without_discount** | **float** | Total order without discount after taxes. | [optional] [readonly]
**total** | **float** | Total order amount after taxes. | [optional] [readonly]
**items** | [**\OpenAPI\Client\Model\CartItemModel[]**](CartItemModel.md) | Cart items. | [optional] [readonly]
**country** | [**\OpenAPI\Client\Model\CartModelCountry**](CartModelCountry.md) |  | [optional]
**state** | [**\OpenAPI\Client\Model\CartModelState**](CartModelState.md) |  | [optional]
**postal_code** | **string** | Postal code used for tax calculation. | [optional] [readonly]
**calculate_tax_error** | **string** | Error message if tax not calculated. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
