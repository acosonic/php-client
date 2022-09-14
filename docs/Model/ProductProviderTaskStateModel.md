# # ProductProviderTaskStateModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**phase** | **string** | Current phase description. | [optional] [readonly]
**total_products** | **int** | Total products fetched from product provider to process. | [optional] [readonly]
**total_options** | **int** | Total product options fetched from product provider to process. | [optional] [readonly]
**products_processed** | **int** | Products processed. | [optional] [readonly]
**products_remaining** | **int** | Products remaining to process. | [optional] [readonly]
**products_inserted** | **int** | Products inserted. | [optional] [readonly]
**options_inserted** | **int** | Product options inserted. | [optional] [readonly]
**products_updated** | **int** | Products updated. | [optional] [readonly]
**options_updated** | **int** | Product options updated. | [optional] [readonly]
**products_failed** | **int** | Products failed to import. | [optional] [readonly]
**products_archived** | **int** | Products archived. | [optional] [readonly]
**options_archived** | **int** | Product options archived. | [optional] [readonly]
**average_milliseconds_per_product** | **float** | Average time in milliseconds required to process single product. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
