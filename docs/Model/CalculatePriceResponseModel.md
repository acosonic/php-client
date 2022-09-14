# # CalculatePriceResponseModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**product_id** | **string** | Product ID. | [optional] [readonly]
**product_option_id** | **string** | Product option ID. | [optional] [readonly]
**product_term** | [**\OpenAPI\Client\Model\CalculatePriceResponseModelProductTerm**](CalculatePriceResponseModelProductTerm.md) |  | [optional]
**quantity** | **int** | Quantity. | [optional] [readonly]
**currency** | [**\OpenAPI\Client\Model\CalculatePriceResponseModelCurrency**](CalculatePriceResponseModelCurrency.md) |  | [optional]
**unit_price** | **float** | Single item price before discount. | [optional] [readonly]
**discount_percent** | **float** | Discount percent. | [optional] [readonly]
**unit_discount** | **float** | Discount per item. | [optional] [readonly]
**unit_discounted_price** | **float** | Single item price after discount. | [optional] [readonly]
**total_discount** | **float** | Total discount. | [optional] [readonly]
**total_without_discount** | **float** | Total cost without discount. | [optional] [readonly]
**total** | **float** | Total cost with discount. | [optional] [readonly]
**shipping** | **float** | Total shipping cost for all items. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
