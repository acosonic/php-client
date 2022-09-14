# # OrderSearchQueryForShop

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sort** | **string** | Sorting criteria in format \&quot;[+|-]property[,...]\&quot;. | [optional]
**page** | **int** | One-based index of the page to return. | [optional]
**page_size** | **int** | The maximum number of items to return. The maximum value is 50. | [optional]
**max_item_count** | **int** | The maximum number of items to return in non-paged mode. | [optional]
**text** | **string** | Text to search. | [optional]
**types** | [**\OpenAPI\Client\Model\OrderTypeEnum[]**](OrderTypeEnum.md) | Returns orders having any of the specified order types. | [optional]
**exclude_types** | [**\OpenAPI\Client\Model\OrderTypeEnum[]**](OrderTypeEnum.md) | Exclude orders having any of the specified order types. | [optional]
**statuses** | [**\OpenAPI\Client\Model\OrderStatusEnum[]**](OrderStatusEnum.md) | Returns orders having any of the specified order statuses. | [optional]
**exclude_statuses** | [**\OpenAPI\Client\Model\OrderStatusEnum[]**](OrderStatusEnum.md) | Exclude orders having any of the specified order statuses. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
