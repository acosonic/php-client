# # OrderModelAllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shop** | [**OneOfShopInfoModel**](OneOfShopInfoModel.md) | Shop info. | [optional] [readonly]
**customer** | [**OneOfCustomerInfoModel**](OneOfCustomerInfoModel.md) | Customer info. | [optional] [readonly]
**type** | [**OneOfOrderTypeEnum**](OneOfOrderTypeEnum.md) | Order type. | [optional] [readonly]
**status** | [**OneOfOrderStatusEnum**](OneOfOrderStatusEnum.md) | Order status. | [optional] [readonly]
**affiliate** | [**OneOfAffiliateInfoModel**](OneOfAffiliateInfoModel.md) | Affiliate info. | [optional] [readonly]
**click_id** | **string** | Click ID. | [optional] [readonly]
**number** | **string** | Order number. | [optional] [readonly]
**billing_address** | [**OneOfAddressModel**](OneOfAddressModel.md) | Order billing address. | [optional] [readonly]
**shipping_address_same_as_billing** | **bool** | Indicates if shipping address is same as billing address. | [optional] [readonly]
**shipping_address** | [**OneOfAddressModel**](OneOfAddressModel.md) | Order shipping address. | [optional] [readonly]
**currency** | [**OneOfCurrencyModel**](OneOfCurrencyModel.md) | Currency. | [optional] [readonly]
**total_item_price** | **float** | Sum of all item prices before discount. | [optional] [readonly]
**total_item_discount** | **float** | Sum of all item discounts. | [optional] [readonly]
**total_item_discounted_price** | **float** | Sum of all item prices after discount. | [optional] [readonly]
**total_shipping** | **float** | Total shipping for all items. | [optional] [readonly]
**shipping_taxable** | **bool** | Indicates if shipping is taxable. | [optional] [readonly]
**shipping_tax_rate** | **float** | Overall sales tax rate for shipping. | [optional] [readonly]
**shipping_tax** | **float** | Amount of sales tax to collect for shipping. | [optional] [readonly]
**total_item_tax** | **float** | Amount of sales tax to collect for all items. | [optional] [readonly]
**total_tax** | **float** | Total sales tax amount. | [optional] [readonly]
**total** | **float** | Total order amount after taxes. | [optional] [readonly]
**items** | [**\OpenAPI\Client\Model\OrderItemModel[]**](OrderItemModel.md) | Order items. | [optional] [readonly]
**transactions** | [**\OpenAPI\Client\Model\TransactionModel[]**](TransactionModel.md) | Order transactions. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
