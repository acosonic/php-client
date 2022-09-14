# # UpdateProductTermModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Product term ID to update, when not specified creates new term. | [optional] [readonly]
**is_enabled** | **bool** | Enable or disable product term. | [optional]
**name** | **string** | Product term name. | [optional]
**type** | [**\OpenAPI\Client\Model\UpdateProductTermModelType**](UpdateProductTermModelType.md) |  | [optional]
**shipping_cost** | **float** | Product term shipping cost. | [optional]
**rebate_percent** | **float** | Product term rebate percent. | [optional]
**quantity** | **int** | Product term item quantity. | [optional]
**discount_percent** | **float** | Product term discount percent. | [optional]
**period** | **int** | Product term period. | [optional]
**description** | **string** | Product term description. | [optional] [readonly]
**special_offer** | **bool** | Indicates if this term is special offer. | [optional]
**image_selected** | **string** | Product term image when term is selected. | [optional]
**image_not_selected** | **string** | Product term image when term is not selected. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
