# OpenAPI\Client\FileApi

All URIs are relative to https://api-stg.domdistrict.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**fileDownloadFile()**](FileApi.md#fileDownloadFile) | **GET** /shop/File/{path} | Download file. [ PRIVATE; CUSTOMER ENTITY ONLY ] |
| [**fileDownloadPublicFile()**](FileApi.md#fileDownloadPublicFile) | **GET** /shop/File/public/{path} | Download file. [ PUBLIC ] |
| [**fileDownloadTempFile()**](FileApi.md#fileDownloadTempFile) | **GET** /shop/File/temp/{path} | Download file. [ PUBLIC ] |
| [**fileUploadFile()**](FileApi.md#fileUploadFile) | **POST** /shop/File | Upload file. [ PRIVATE; CUSTOMER ENTITY ONLY ] |


## `fileDownloadFile()`

```php
fileDownloadFile($path, $width, $height, $signed_url): mixed
```

Download file. [ PRIVATE; CUSTOMER ENTITY ONLY ]

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

// Configure API key authorization: bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$path = 'path_example'; // string | Path to file
$width = 56; // int | Optional, resize image to specified width, if height not specified then resize proportionally
$height = 56; // int | Optional, resize image to specified height, if width not specified then resize proportionally
$signed_url = True; // bool | Optional, if true returns signed url for direct access without resize options

try {
    $result = $apiInstance->fileDownloadFile($path, $width, $height, $signed_url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->fileDownloadFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **path** | **string**| Path to file | |
| **width** | **int**| Optional, resize image to specified width, if height not specified then resize proportionally | [optional] |
| **height** | **int**| Optional, resize image to specified height, if width not specified then resize proportionally | [optional] |
| **signed_url** | **bool**| Optional, if true returns signed url for direct access without resize options | [optional] |

### Return type

**mixed**

### Authorization

[apikey](../../README.md#apikey), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fileDownloadPublicFile()`

```php
fileDownloadPublicFile($path, $width, $height, $signed_url): mixed
```

Download file. [ PUBLIC ]

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

// Configure API key authorization: bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$path = 'path_example'; // string | Path to file
$width = 56; // int | Optional, resize image to specified width, if height not specified then resize proportionally
$height = 56; // int | Optional, resize image to specified height, if width not specified then resize proportionally
$signed_url = True; // bool | Optional, if true returns signed url for direct access without resize options

try {
    $result = $apiInstance->fileDownloadPublicFile($path, $width, $height, $signed_url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->fileDownloadPublicFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **path** | **string**| Path to file | |
| **width** | **int**| Optional, resize image to specified width, if height not specified then resize proportionally | [optional] |
| **height** | **int**| Optional, resize image to specified height, if width not specified then resize proportionally | [optional] |
| **signed_url** | **bool**| Optional, if true returns signed url for direct access without resize options | [optional] |

### Return type

**mixed**

### Authorization

[apikey](../../README.md#apikey), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fileDownloadTempFile()`

```php
fileDownloadTempFile($path, $width, $height, $signed_url): mixed
```

Download file. [ PUBLIC ]

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

// Configure API key authorization: bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$path = 'path_example'; // string | Path to file
$width = 56; // int | Optional, resize image to specified width, if height not specified then resize proportionally
$height = 56; // int | Optional, resize image to specified height, if width not specified then resize proportionally
$signed_url = True; // bool | Optional, if true returns signed url for direct access without resize options

try {
    $result = $apiInstance->fileDownloadTempFile($path, $width, $height, $signed_url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->fileDownloadTempFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **path** | **string**| Path to file | |
| **width** | **int**| Optional, resize image to specified width, if height not specified then resize proportionally | [optional] |
| **height** | **int**| Optional, resize image to specified height, if width not specified then resize proportionally | [optional] |
| **signed_url** | **bool**| Optional, if true returns signed url for direct access without resize options | [optional] |

### Return type

**mixed**

### Authorization

[apikey](../../README.md#apikey), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fileUploadFile()`

```php
fileUploadFile($file): string
```

Upload file. [ PRIVATE; CUSTOMER ENTITY ONLY ]

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

// Configure API key authorization: bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = "/path/to/file.txt"; // \SplFileObject

try {
    $result = $apiInstance->fileUploadFile($file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->fileUploadFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file** | **\SplFileObject****\SplFileObject**|  | [optional] |

### Return type

**string**

### Authorization

[apikey](../../README.md#apikey), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
