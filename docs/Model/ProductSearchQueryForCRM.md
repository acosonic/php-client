# # ProductSearchQueryForCRM

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sort** | **string** | Sorting criteria in format \&quot;[+|-]property[,...]\&quot;. | [optional]
**page** | **int** | One-based index of the page to return. | [optional]
**page_size** | **int** | The maximum number of items to return. The maximum value is 50. | [optional]
**max_item_count** | **int** | The maximum number of items to return in non-paged mode. | [optional]
**text** | **string** | Text to search. | [optional]
**created_time** | [**OneOfSearchQueryRangeOfDateOnly**](OneOfSearchQueryRangeOfDateOnly.md) | A time range for entry creation time. | [optional]
**updated_time** | [**OneOfSearchQueryRangeOfDateOnly**](OneOfSearchQueryRangeOfDateOnly.md) | A time range for entry last update time. | [optional]
**deleted_status** | [**OneOfEntitySearchQueryDeletedStatus**](OneOfEntitySearchQueryDeletedStatus.md) | Indicates if to search existing, deleted or all entities. | [optional]
**enabled_status** | [**OneOfEntitySearchQueryEnabledStatus**](OneOfEntitySearchQueryEnabledStatus.md) | Indicates if to search enabled, disabled or all entities. | [optional]
**shop_id** | **string** | Return products from specified shop. If specified CorporationId and OrganizationId are ignored. | [optional]
**corporation_id** | **string** | Return products from specified corporation. Ignored when ShopId is specified. | [optional]
**organization_id** | **string** | Return products from specified organization. Ignored when ShopId or CorporationId is specified. | [optional]
**category_id** | **string** | Return products that belong in specified category tree. NOTE: ShopId is required for this option. | [optional]
**google_category_id** | **int** | Return products that belong in specified google category tree. | [optional]
**name** | **string** | Filter products by name. | [optional]
**sku** | **string** | Filter products by SKU. | [optional]
**category** | **string** | Filter products by category name. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
