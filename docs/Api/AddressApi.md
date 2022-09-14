# OpenAPI\Client\AddressApi

All URIs are relative to https://api-stg.domdistrict.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addressCountries()**](AddressApi.md#addressCountries) | **GET** /shop/Address/Countries | Returns all countries. [ PRIVATE; SHOP API KEY REQUIRED ] |
| [**addressStates()**](AddressApi.md#addressStates) | **GET** /shop/Address/States | Returns all states for specified country. [ PRIVATE; SHOP API KEY REQUIRED ] |


## `addressCountries()`

```php
addressCountries($has_states, $include_states, $include_disabled): \OpenAPI\Client\Model\CountryModel[]
```

Returns all countries. [ PRIVATE; SHOP API KEY REQUIRED ]

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$has_states = True; // bool
$include_states = false; // bool
$include_disabled = false; // bool

try {
    $result = $apiInstance->addressCountries($has_states, $include_states, $include_disabled);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressApi->addressCountries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **has_states** | **bool**|  | [optional] |
| **include_states** | **bool**|  | [optional] [default to false] |
| **include_disabled** | **bool**|  | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\CountryModel[]**](../Model/CountryModel.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addressStates()`

```php
addressStates($country_code, $include_disabled): \OpenAPI\Client\Model\StateModel[]
```

Returns all states for specified country. [ PRIVATE; SHOP API KEY REQUIRED ]

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country_code = 'country_code_example'; // string
$include_disabled = false; // bool

try {
    $result = $apiInstance->addressStates($country_code, $include_disabled);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressApi->addressStates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **country_code** | **string**|  | [optional] |
| **include_disabled** | **bool**|  | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\StateModel[]**](../Model/StateModel.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
