# OpenAPI\Client\CategoryApi

All URIs are relative to https://api-stg.domdistrict.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**categoryGetCategory()**](CategoryApi.md#categoryGetCategory) | **GET** /shop/Category/{idOrSlug} | Returns category by id or slug. [ PRIVATE; SHOP API KEY REQUIRED ] |
| [**categorySearchCategories()**](CategoryApi.md#categorySearchCategories) | **POST** /shop/Category/Search | Search categories. [ PRIVATE; SHOP API KEY REQUIRED ] Sort fields: Name, Slug, Path (default) |


## `categoryGetCategory()`

```php
categoryGetCategory($id_or_slug, $include_attributes, $include_attribute_values): \OpenAPI\Client\Model\CategoryModel
```

Returns category by id or slug. [ PRIVATE; SHOP API KEY REQUIRED ]

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_or_slug = 'id_or_slug_example'; // string
$include_attributes = true; // bool
$include_attribute_values = true; // bool

try {
    $result = $apiInstance->categoryGetCategory($id_or_slug, $include_attributes, $include_attribute_values);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryApi->categoryGetCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id_or_slug** | **string**|  | |
| **include_attributes** | **bool**|  | [optional] [default to true] |
| **include_attribute_values** | **bool**|  | [optional] [default to true] |

### Return type

[**\OpenAPI\Client\Model\CategoryModel**](../Model/CategoryModel.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `categorySearchCategories()`

```php
categorySearchCategories($category_search_query_for_shop): \OpenAPI\Client\Model\SearchResultOfCategoryModel
```

Search categories. [ PRIVATE; SHOP API KEY REQUIRED ] Sort fields: Name, Slug, Path (default)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$category_search_query_for_shop = new \OpenAPI\Client\Model\CategorySearchQueryForShop(); // \OpenAPI\Client\Model\CategorySearchQueryForShop

try {
    $result = $apiInstance->categorySearchCategories($category_search_query_for_shop);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryApi->categorySearchCategories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **category_search_query_for_shop** | [**\OpenAPI\Client\Model\CategorySearchQueryForShop**](../Model/CategorySearchQueryForShop.md)|  | |

### Return type

[**\OpenAPI\Client\Model\SearchResultOfCategoryModel**](../Model/SearchResultOfCategoryModel.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
