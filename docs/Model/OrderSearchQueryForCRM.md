# # OrderSearchQueryForCRM

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
**shop_id** | **string** | Return orders from specified shop. If specified CorporationId and OrganizationId are ignored. | [optional]
**corporation_id** | **string** | Return orders from specified corporation. Ignored when ShopId is specified. | [optional]
**organization_id** | **string** | Return orders from specified organization. Ignored when ShopId or CorporationId is specified. | [optional]
**customer_id** | **string** | Return orders from specified customer. | [optional]
**types** | [**\OpenAPI\Client\Model\OrderTypeEnum[]**](OrderTypeEnum.md) | Returns orders having any of the specified order types. | [optional]
**exclude_types** | [**\OpenAPI\Client\Model\OrderTypeEnum[]**](OrderTypeEnum.md) | Exclude orders having any of the specified order types. | [optional]
**statuses** | [**\OpenAPI\Client\Model\OrderStatusEnum[]**](OrderStatusEnum.md) | Returns orders having any of the specified order statuses. | [optional]
**exclude_statuses** | [**\OpenAPI\Client\Model\OrderStatusEnum[]**](OrderStatusEnum.md) | Exclude orders having any of the specified order statuses. | [optional]
**number** | **string** | Filter orders by order number. | [optional]
**product_name** | **string** | Filter orders by product name. | [optional]
**customer_name** | **string** | Filter orders by customer name. | [optional]
**customer_email** | **string** | Filter orders by customer email. | [optional]
**customer_phone_number** | **string** | Filter orders by customer phone number. | [optional]
**address** | **string** | Filter orders by billing or shipping address. | [optional]
**postal_code** | **string** | Filter orders by billing or shipping postal code. | [optional]
**state** | **string** | Filter orders by billing or shipping state. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
