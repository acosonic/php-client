# # UserQuery

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
**types** | [**\OpenAPI\Client\Model\UserTypeEnum[]**](UserTypeEnum.md) | Returns users having any of the specified user types. | [optional]
**exclude_types** | [**\OpenAPI\Client\Model\UserTypeEnum[]**](UserTypeEnum.md) | Exclude users having any of the specified user types. | [optional]
**organization_id** | **string** | Return users belonging to specified organization id. NOTE: Admin only option. | [optional]
**role_ids** | **string[]** | Include users having any of the specified roles. | [optional]
**include_caller** | **bool** | Indicates if caller user should be included. | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
