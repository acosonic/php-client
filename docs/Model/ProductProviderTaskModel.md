# # ProductProviderTaskModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Task ID. | [optional] [readonly]
**started_time_utc** | **\DateTime** | Time task has started. | [optional] [readonly]
**finished_time_utc** | **\DateTime** | Time task has finished. | [optional] [readonly]
**total_seconds** | **int** | Total time elapsed in seconds elapsed from start to finish,  or if task is still running then total time elapsed in seconds since the start of task. | [optional] [readonly]
**estimated_remaining_seconds** | **int** | If task is not finished yet this will return estimated number of remaining seconds until task is complete. | [optional] [readonly]
**estimated_finished_time_utc** | **\DateTime** | If task is not finished yet this will return estimated UTC time when task will finish. | [optional] [readonly]
**status** | [**\OpenAPI\Client\Model\ProductProviderTaskModelStatus**](ProductProviderTaskModelStatus.md) |  | [optional]
**progress** | **float** | Percentage of task progress. | [optional] [readonly]
**state** | [**\OpenAPI\Client\Model\ProductProviderTaskModelState**](ProductProviderTaskModelState.md) |  | [optional]
**updated_time_utc** | **\DateTime** | Time when task was last updated. | [optional] [readonly]
**log_rows** | **int** | Total log rows. | [optional] [readonly]
**logs** | [**\OpenAPI\Client\Model\ProductProviderTaskLogModel[]**](ProductProviderTaskLogModel.md) | Task logs. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
