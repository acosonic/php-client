# # ProductProviderTaskSearchQuery

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sort** | **string** | Sorting criteria in format \&quot;[+|-]property[,...]\&quot;. | [optional]
**page** | **int** | One-based index of the page to return. | [optional]
**page_size** | **int** | The maximum number of items to return. The maximum value is 50. | [optional]
**max_item_count** | **int** | The maximum number of items to return in non-paged mode. | [optional]
**shop_id** | **string** | Return tasks from specified shop. If specified CorporationId and OrganizationId are ignored. | [optional]
**corporation_id** | **string** | Return tasks from specified corporation. Ignored when ShopId is specified. | [optional]
**organization_id** | **string** | Return tasks from specified organization. Ignored when ShopId or CorporationId is specified. | [optional]
**provider_id** | **string** | Return tasks from specified product prodvider ID. | [optional]
**type** | [**OneOfProductProviderTypeEnum**](OneOfProductProviderTypeEnum.md) | Return tasks from specified product provider type. | [optional]
**status** | [**OneOfProductProviderTaskStatusEnum**](OneOfProductProviderTaskStatusEnum.md) | Returns tasks with specified status. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
