# # CustomerQuery

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
**name** | **string** | Filter customers by name. | [optional]
**email** | **string** | Filter customers by email. | [optional]
**phone_number** | **string** | Filter customers by phone number. | [optional]
**address** | **string** | Filter customers by address. | [optional]
**postal_code** | **string** | Filter customers by postal code. | [optional]
**state** | **string** | Filter customers by state. | [optional]
**include_addresses** | **bool** | Indicates if customer addresses are included with customer profile. | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
