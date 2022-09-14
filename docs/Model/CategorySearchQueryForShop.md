# # CategorySearchQueryForShop

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sort** | **string** | Sorting criteria in format \&quot;[+|-]property[,...]\&quot;. | [optional]
**page** | **int** | One-based index of the page to return. | [optional]
**page_size** | **int** | The maximum number of items to return. The maximum value is 50. | [optional]
**max_item_count** | **int** | The maximum number of items to return in non-paged mode. | [optional]
**text** | **string** | Text to search. | [optional]
**category_id** | **string** | Returns all categories that belong in specified category tree. | [optional]
**parent_id** | **string** | Returns categories that belong to specific parent. | [optional]
**include_attributes** | **bool** | Include attributes with categories. | [optional] [default to false]
**include_attribute_values** | **bool** | Include attribute values with category attributes. | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
