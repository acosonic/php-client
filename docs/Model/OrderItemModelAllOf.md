# # OrderItemModelAllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**product** | [**OneOfProductInfoModel**](OneOfProductInfoModel.md) | Product. | [optional] [readonly]
**product_option** | [**OneOfProductOptionModel**](OneOfProductOptionModel.md) | Product option. | [optional] [readonly]
**product_term** | [**OneOfProductTermModel**](OneOfProductTermModel.md) | Product term. | [optional] [readonly]
**term_type** | [**OneOfTermTypeEnum**](OneOfTermTypeEnum.md) | Term type. | [optional] [readonly]
**term_count** | **int** | Term count. | [optional] [readonly]
**term_period** | **int** | Term period. | [optional] [readonly]
**quantity** | **int** | Quantity. | [optional] [readonly]
**currency** | [**OneOfCurrencyModel**](OneOfCurrencyModel.md) | Currency. | [optional] [readonly]
**unit_price** | **float** | Single item price before discount. | [optional] [readonly]
**discount_percent** | **float** | Discount percent. | [optional] [readonly]
**unit_discount** | **float** | Discount per item. | [optional] [readonly]
**unit_discounted_price** | **float** | Single item price after discount. | [optional] [readonly]
**tax_code** | **string** | Product tax code for the item. If omitted, the item will remain fully taxable. | [optional] [readonly]
**tax_disabled** | **bool** | Indicates if sales tax is disabled for this product. | [optional] [readonly]
**taxable_amount** | **float** | Amount of the items to be taxed. | [optional] [readonly]
**tax_rate** | **float** | Overall sales tax rate for items. | [optional] [readonly]
**tax** | **float** | Amount of sales tax to collect for items. | [optional] [readonly]
**total** | **float** | Total items cost after taxes. | [optional] [readonly]
**shipping** | **float** | Shipping cost for all items. | [optional] [readonly]
**is_cancelled** | **bool** | Indicates that this order item is cancelled. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
