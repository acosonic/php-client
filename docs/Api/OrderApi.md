# OpenAPI\Client\OrderApi

All URIs are relative to https://api-stg.domdistrict.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**orderBuildCart()**](OrderApi.md#orderBuildCart) | **POST** /shop/Order/BuildCart | Builds cart. [ PRIVATE; SHOP API KEY REQUIRED ] |
| [**orderCalculatePrice()**](OrderApi.md#orderCalculatePrice) | **POST** /shop/Order/CalculatePrice | Calculate product option price. [ PRIVATE; SHOP API KEY REQUIRED ] |
| [**orderCreateOrder()**](OrderApi.md#orderCreateOrder) | **POST** /shop/Order | Create order. [ PRIVATE; SHOP API KEY REQUIRED ] |
| [**orderSearchOrders()**](OrderApi.md#orderSearchOrders) | **POST** /shop/Order/Search | Search orders. [ PRIVATE; CUSTOMER ENTITY ONLY; SHOP API KEY REQUIRED ] Sort fields: CreatedTime (default), Shop, Customer, Type, Status, Affiliate, Number, TotalItemPrice, TotalItemDiscount, TotalItemDiscountedPrice, TotalShipping, ShippingTaxable, ShippingTaxRate, ShippingTax, TotalItemTax, TotalTax, Total |


## `orderBuildCart()`

```php
orderBuildCart($build_cart_model): \OpenAPI\Client\Model\CartModel
```

Builds cart. [ PRIVATE; SHOP API KEY REQUIRED ]

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$build_cart_model = new \OpenAPI\Client\Model\BuildCartModel(); // \OpenAPI\Client\Model\BuildCartModel

try {
    $result = $apiInstance->orderBuildCart($build_cart_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderBuildCart: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **build_cart_model** | [**\OpenAPI\Client\Model\BuildCartModel**](../Model/BuildCartModel.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CartModel**](../Model/CartModel.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderCalculatePrice()`

```php
orderCalculatePrice($calculate_price_model): \OpenAPI\Client\Model\CalculatePriceResponseModel
```

Calculate product option price. [ PRIVATE; SHOP API KEY REQUIRED ]

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$calculate_price_model = new \OpenAPI\Client\Model\CalculatePriceModel(); // \OpenAPI\Client\Model\CalculatePriceModel

try {
    $result = $apiInstance->orderCalculatePrice($calculate_price_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderCalculatePrice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **calculate_price_model** | [**\OpenAPI\Client\Model\CalculatePriceModel**](../Model/CalculatePriceModel.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CalculatePriceResponseModel**](../Model/CalculatePriceResponseModel.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderCreateOrder()`

```php
orderCreateOrder($create_order_model): \OpenAPI\Client\Model\OrderModel
```

Create order. [ PRIVATE; SHOP API KEY REQUIRED ]

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_order_model = new \OpenAPI\Client\Model\CreateOrderModel(); // \OpenAPI\Client\Model\CreateOrderModel

try {
    $result = $apiInstance->orderCreateOrder($create_order_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderCreateOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_order_model** | [**\OpenAPI\Client\Model\CreateOrderModel**](../Model/CreateOrderModel.md)|  | |

### Return type

[**\OpenAPI\Client\Model\OrderModel**](../Model/OrderModel.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderSearchOrders()`

```php
orderSearchOrders($order_search_query_for_shop): \OpenAPI\Client\Model\SearchResultOfOrderInfoModel
```

Search orders. [ PRIVATE; CUSTOMER ENTITY ONLY; SHOP API KEY REQUIRED ] Sort fields: CreatedTime (default), Shop, Customer, Type, Status, Affiliate, Number, TotalItemPrice, TotalItemDiscount, TotalItemDiscountedPrice, TotalShipping, ShippingTaxable, ShippingTaxRate, ShippingTax, TotalItemTax, TotalTax, Total

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_search_query_for_shop = new \OpenAPI\Client\Model\OrderSearchQueryForShop(); // \OpenAPI\Client\Model\OrderSearchQueryForShop

try {
    $result = $apiInstance->orderSearchOrders($order_search_query_for_shop);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderSearchOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_search_query_for_shop** | [**\OpenAPI\Client\Model\OrderSearchQueryForShop**](../Model/OrderSearchQueryForShop.md)|  | |

### Return type

[**\OpenAPI\Client\Model\SearchResultOfOrderInfoModel**](../Model/SearchResultOfOrderInfoModel.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
