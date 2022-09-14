# # ProductSearchQueryForCRMAllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shop_id** | **string** | Return products from specified shop. If specified CorporationId and OrganizationId are ignored. | [optional]
**corporation_id** | **string** | Return products from specified corporation. Ignored when ShopId is specified. | [optional]
**organization_id** | **string** | Return products from specified organization. Ignored when ShopId or CorporationId is specified. | [optional]
**category_id** | **string** | Return products that belong in specified category tree. NOTE: ShopId is required for this option. | [optional]
**google_category_id** | **int** | Return products that belong in specified google category tree. | [optional]
**name** | **string** | Filter products by name. | [optional]
**sku** | **string** | Filter products by SKU. | [optional]
**category** | **string** | Filter products by category name. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
