# OpenAPI\Client\ProductApi

All URIs are relative to https://api-stg.domdistrict.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**productGetProduct()**](ProductApi.md#productGetProduct) | **GET** /shop/Product/{idOrSlug} | Returns product by id or slug. [ PRIVATE; SHOP API KEY REQUIRED ] |
| [**productSearchProducts()**](ProductApi.md#productSearchProducts) | **POST** /shop/Product/Search | Search products. [ PRIVATE; SHOP API KEY REQUIRED ] Sort fields: CreatedTime (default), Name, Slug, Shop, Category, GoogleCategory |


## `productGetProduct()`

```php
productGetProduct($id_or_slug): \OpenAPI\Client\Model\ProductModel
```

Returns product by id or slug. [ PRIVATE; SHOP API KEY REQUIRED ]

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_or_slug = 'id_or_slug_example'; // string

try {
    $result = $apiInstance->productGetProduct($id_or_slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productGetProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id_or_slug** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\ProductModel**](../Model/ProductModel.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productSearchProducts()`

```php
productSearchProducts($product_search_query_for_shop): \OpenAPI\Client\Model\SearchResultOfProductInfoModel
```

Search products. [ PRIVATE; SHOP API KEY REQUIRED ] Sort fields: CreatedTime (default), Name, Slug, Shop, Category, GoogleCategory

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_search_query_for_shop = new \OpenAPI\Client\Model\ProductSearchQueryForShop(); // \OpenAPI\Client\Model\ProductSearchQueryForShop

try {
    $result = $apiInstance->productSearchProducts($product_search_query_for_shop);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productSearchProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_search_query_for_shop** | [**\OpenAPI\Client\Model\ProductSearchQueryForShop**](../Model/ProductSearchQueryForShop.md)|  | |

### Return type

[**\OpenAPI\Client\Model\SearchResultOfProductInfoModel**](../Model/SearchResultOfProductInfoModel.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
