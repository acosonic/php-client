# # UserQueryAllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**types** | [**\OpenAPI\Client\Model\UserTypeEnum[]**](UserTypeEnum.md) | Returns users having any of the specified user types. | [optional]
**exclude_types** | [**\OpenAPI\Client\Model\UserTypeEnum[]**](UserTypeEnum.md) | Exclude users having any of the specified user types. | [optional]
**organization_id** | **string** | Return users belonging to specified organization id. NOTE: Admin only option. | [optional]
**role_ids** | **string[]** | Include users having any of the specified roles. | [optional]
**include_caller** | **bool** | Indicates if caller user should be included. | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
