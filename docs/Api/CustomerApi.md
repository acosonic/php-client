# OpenAPI\Client\CustomerApi

All URIs are relative to https://api-stg.domdistrict.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**customerCompletePasswordReset()**](CustomerApi.md#customerCompletePasswordReset) | **POST** /shop/Customer/CompletePasswordReset | Complete password reset. [ PRIVATE; SHOP API KEY REQUIRED ] |
| [**customerDeleteCustomer()**](CustomerApi.md#customerDeleteCustomer) | **DELETE** /shop/Customer | Deletes current customer. [ PRIVATE; CUSTOMER ENTITY ONLY; SHOP API KEY REQUIRED ] |
| [**customerExternalLogin()**](CustomerApi.md#customerExternalLogin) | **POST** /shop/Customer/ExternalLogin | Authenticate customer account by retrieving information from external provider. [ PRIVATE; SHOP API KEY REQUIRED ] |
| [**customerLogin()**](CustomerApi.md#customerLogin) | **POST** /shop/Customer/Login | Authenticate customer with email and password. [ PRIVATE; SHOP API KEY REQUIRED ] |
| [**customerLogout()**](CustomerApi.md#customerLogout) | **POST** /shop/Customer/Logout | Logout authenticated customer account from all devices. [ PRIVATE; CUSTOMER ENTITY ONLY; SHOP API KEY REQUIRED ] |
| [**customerPasswordReset()**](CustomerApi.md#customerPasswordReset) | **POST** /shop/Customer/PasswordReset | Initiate a password reset. [ PRIVATE; SHOP API KEY REQUIRED ] |
| [**customerPhoneLogin()**](CustomerApi.md#customerPhoneLogin) | **POST** /shop/Customer/PhoneLogin | Authenticate customer account by phone. [ PRIVATE; SHOP API KEY REQUIRED ] |
| [**customerProfile()**](CustomerApi.md#customerProfile) | **GET** /shop/Customer/Profile | Returns current customer profile. [ PRIVATE; CUSTOMER ENTITY ONLY; SHOP API KEY REQUIRED ] |
| [**customerRefreshToken()**](CustomerApi.md#customerRefreshToken) | **GET** /shop/Customer/RefreshToken | Creates a new token for authenticated customer account. [ PRIVATE; CUSTOMER ENTITY ONLY; SHOP API KEY REQUIRED ] |
| [**customerRegisterEmail()**](CustomerApi.md#customerRegisterEmail) | **POST** /shop/Customer/RegisterEmail | Register new customer account by email. [ PRIVATE; SHOP API KEY REQUIRED ] |
| [**customerUpdateProfile()**](CustomerApi.md#customerUpdateProfile) | **POST** /shop/Customer/UpdateProfile | Update customer profile. [ PRIVATE; CUSTOMER ENTITY ONLY; SHOP API KEY REQUIRED ] |
| [**customerValidateToken()**](CustomerApi.md#customerValidateToken) | **POST** /shop/Customer/ValidateToken | Validate token. [ PRIVATE; SHOP API KEY REQUIRED ] |
| [**customerVerifyEmail()**](CustomerApi.md#customerVerifyEmail) | **POST** /shop/Customer/VerifyEmail | Verify email. [ PRIVATE; CUSTOMER ENTITY ONLY; SHOP API KEY REQUIRED ] |
| [**customerVerifyEmailRegistration()**](CustomerApi.md#customerVerifyEmailRegistration) | **POST** /shop/Customer/VerifyEmailRegistration | Verify customer account registered by email. [ PRIVATE; SHOP API KEY REQUIRED ] |
| [**customerVerifyLogin()**](CustomerApi.md#customerVerifyLogin) | **POST** /shop/Customer/VerifyLogin | Verify two factor authentication. [ PRIVATE; SHOP API KEY REQUIRED ] |
| [**customerVerifyPhone()**](CustomerApi.md#customerVerifyPhone) | **POST** /shop/Customer/VerifyPhone | Verify email. [ PRIVATE; CUSTOMER ENTITY ONLY; SHOP API KEY REQUIRED ] |
| [**customerVerifyPhoneLogin()**](CustomerApi.md#customerVerifyPhoneLogin) | **POST** /shop/Customer/VerifyPhoneLogin | Verify customer account phone authentication. [ PRIVATE; SHOP API KEY REQUIRED ] |


## `customerCompletePasswordReset()`

```php
customerCompletePasswordReset($password_reset_complete_model): bool
```

Complete password reset. [ PRIVATE; SHOP API KEY REQUIRED ]

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$password_reset_complete_model = new \OpenAPI\Client\Model\PasswordResetCompleteModel(); // \OpenAPI\Client\Model\PasswordResetCompleteModel

try {
    $result = $apiInstance->customerCompletePasswordReset($password_reset_complete_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerCompletePasswordReset: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **password_reset_complete_model** | [**\OpenAPI\Client\Model\PasswordResetCompleteModel**](../Model/PasswordResetCompleteModel.md)|  | |

### Return type

**bool**

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customerDeleteCustomer()`

```php
customerDeleteCustomer($reason): bool
```

Deletes current customer. [ PRIVATE; CUSTOMER ENTITY ONLY; SHOP API KEY REQUIRED ]

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reason = ''; // string

try {
    $result = $apiInstance->customerDeleteCustomer($reason);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerDeleteCustomer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **reason** | **string**|  | [optional] [default to &#39;&#39;] |

### Return type

**bool**

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customerExternalLogin()`

```php
customerExternalLogin($external_credentials_model): \OpenAPI\Client\Model\LoginResultModelOfCustomerProfileModel
```

Authenticate customer account by retrieving information from external provider. [ PRIVATE; SHOP API KEY REQUIRED ]

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$external_credentials_model = new \OpenAPI\Client\Model\ExternalCredentialsModel(); // \OpenAPI\Client\Model\ExternalCredentialsModel

try {
    $result = $apiInstance->customerExternalLogin($external_credentials_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerExternalLogin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **external_credentials_model** | [**\OpenAPI\Client\Model\ExternalCredentialsModel**](../Model/ExternalCredentialsModel.md)|  | |

### Return type

[**\OpenAPI\Client\Model\LoginResultModelOfCustomerProfileModel**](../Model/LoginResultModelOfCustomerProfileModel.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customerLogin()`

```php
customerLogin($password_credentials_model, $send_code): \OpenAPI\Client\Model\LoginResultModelOfCustomerProfileModel
```

Authenticate customer with email and password. [ PRIVATE; SHOP API KEY REQUIRED ]

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$password_credentials_model = new \OpenAPI\Client\Model\PasswordCredentialsModel(); // \OpenAPI\Client\Model\PasswordCredentialsModel
$send_code = true; // bool

try {
    $result = $apiInstance->customerLogin($password_credentials_model, $send_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerLogin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **password_credentials_model** | [**\OpenAPI\Client\Model\PasswordCredentialsModel**](../Model/PasswordCredentialsModel.md)|  | |
| **send_code** | **bool**|  | [optional] [default to true] |

### Return type

[**\OpenAPI\Client\Model\LoginResultModelOfCustomerProfileModel**](../Model/LoginResultModelOfCustomerProfileModel.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customerLogout()`

```php
customerLogout(): bool
```

Logout authenticated customer account from all devices. [ PRIVATE; CUSTOMER ENTITY ONLY; SHOP API KEY REQUIRED ]

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->customerLogout();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerLogout: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**bool**

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customerPasswordReset()`

```php
customerPasswordReset($password_reset_request_model, $send_code): \OpenAPI\Client\Model\VerificationResponseModel
```

Initiate a password reset. [ PRIVATE; SHOP API KEY REQUIRED ]

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$password_reset_request_model = new \OpenAPI\Client\Model\PasswordResetRequestModel(); // \OpenAPI\Client\Model\PasswordResetRequestModel
$send_code = true; // bool

try {
    $result = $apiInstance->customerPasswordReset($password_reset_request_model, $send_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerPasswordReset: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **password_reset_request_model** | [**\OpenAPI\Client\Model\PasswordResetRequestModel**](../Model/PasswordResetRequestModel.md)|  | |
| **send_code** | **bool**|  | [optional] [default to true] |

### Return type

[**\OpenAPI\Client\Model\VerificationResponseModel**](../Model/VerificationResponseModel.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customerPhoneLogin()`

```php
customerPhoneLogin($phone_login_model, $send_code): \OpenAPI\Client\Model\VerificationResponseModel
```

Authenticate customer account by phone. [ PRIVATE; SHOP API KEY REQUIRED ]

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$phone_login_model = new \OpenAPI\Client\Model\PhoneLoginModel(); // \OpenAPI\Client\Model\PhoneLoginModel
$send_code = true; // bool

try {
    $result = $apiInstance->customerPhoneLogin($phone_login_model, $send_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerPhoneLogin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **phone_login_model** | [**\OpenAPI\Client\Model\PhoneLoginModel**](../Model/PhoneLoginModel.md)|  | |
| **send_code** | **bool**|  | [optional] [default to true] |

### Return type

[**\OpenAPI\Client\Model\VerificationResponseModel**](../Model/VerificationResponseModel.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customerProfile()`

```php
customerProfile($include_addresses): \OpenAPI\Client\Model\CustomerProfileModel
```

Returns current customer profile. [ PRIVATE; CUSTOMER ENTITY ONLY; SHOP API KEY REQUIRED ]

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$include_addresses = false; // bool

try {
    $result = $apiInstance->customerProfile($include_addresses);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **include_addresses** | **bool**|  | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\CustomerProfileModel**](../Model/CustomerProfileModel.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customerRefreshToken()`

```php
customerRefreshToken($persistent): \OpenAPI\Client\Model\LoginResultModelOfCustomerProfileModel
```

Creates a new token for authenticated customer account. [ PRIVATE; CUSTOMER ENTITY ONLY; SHOP API KEY REQUIRED ]

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$persistent = false; // bool | Indicates if an authenticated session should be persistent (should not expire).

try {
    $result = $apiInstance->customerRefreshToken($persistent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerRefreshToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **persistent** | **bool**| Indicates if an authenticated session should be persistent (should not expire). | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\LoginResultModelOfCustomerProfileModel**](../Model/LoginResultModelOfCustomerProfileModel.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customerRegisterEmail()`

```php
customerRegisterEmail($email_registration_model, $send_code): \OpenAPI\Client\Model\VerificationResponseModel
```

Register new customer account by email. [ PRIVATE; SHOP API KEY REQUIRED ]

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email_registration_model = new \OpenAPI\Client\Model\EmailRegistrationModel(); // \OpenAPI\Client\Model\EmailRegistrationModel
$send_code = true; // bool

try {
    $result = $apiInstance->customerRegisterEmail($email_registration_model, $send_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerRegisterEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email_registration_model** | [**\OpenAPI\Client\Model\EmailRegistrationModel**](../Model/EmailRegistrationModel.md)|  | |
| **send_code** | **bool**|  | [optional] [default to true] |

### Return type

[**\OpenAPI\Client\Model\VerificationResponseModel**](../Model/VerificationResponseModel.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customerUpdateProfile()`

```php
customerUpdateProfile($update_customer_profile_model, $send_code): \OpenAPI\Client\Model\UpdateCustomerProfileModel
```

Update customer profile. [ PRIVATE; CUSTOMER ENTITY ONLY; SHOP API KEY REQUIRED ]

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$update_customer_profile_model = new \OpenAPI\Client\Model\UpdateCustomerProfileModel(); // \OpenAPI\Client\Model\UpdateCustomerProfileModel
$send_code = true; // bool

try {
    $result = $apiInstance->customerUpdateProfile($update_customer_profile_model, $send_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerUpdateProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **update_customer_profile_model** | [**\OpenAPI\Client\Model\UpdateCustomerProfileModel**](../Model/UpdateCustomerProfileModel.md)|  | |
| **send_code** | **bool**|  | [optional] [default to true] |

### Return type

[**\OpenAPI\Client\Model\UpdateCustomerProfileModel**](../Model/UpdateCustomerProfileModel.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customerValidateToken()`

```php
customerValidateToken($validate_token_model): \OpenAPI\Client\Model\ValidateTokenResponseModel
```

Validate token. [ PRIVATE; SHOP API KEY REQUIRED ]

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$validate_token_model = new \OpenAPI\Client\Model\ValidateTokenModel(); // \OpenAPI\Client\Model\ValidateTokenModel

try {
    $result = $apiInstance->customerValidateToken($validate_token_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerValidateToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **validate_token_model** | [**\OpenAPI\Client\Model\ValidateTokenModel**](../Model/ValidateTokenModel.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ValidateTokenResponseModel**](../Model/ValidateTokenResponseModel.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customerVerifyEmail()`

```php
customerVerifyEmail($code): \OpenAPI\Client\Model\CustomerProfileModel
```

Verify email. [ PRIVATE; CUSTOMER ENTITY ONLY; SHOP API KEY REQUIRED ]

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string

try {
    $result = $apiInstance->customerVerifyEmail($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerVerifyEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CustomerProfileModel**](../Model/CustomerProfileModel.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customerVerifyEmailRegistration()`

```php
customerVerifyEmailRegistration($email_registration_verification_model): \OpenAPI\Client\Model\LoginResultModelOfCustomerProfileModel
```

Verify customer account registered by email. [ PRIVATE; SHOP API KEY REQUIRED ]

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email_registration_verification_model = new \OpenAPI\Client\Model\EmailRegistrationVerificationModel(); // \OpenAPI\Client\Model\EmailRegistrationVerificationModel

try {
    $result = $apiInstance->customerVerifyEmailRegistration($email_registration_verification_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerVerifyEmailRegistration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email_registration_verification_model** | [**\OpenAPI\Client\Model\EmailRegistrationVerificationModel**](../Model/EmailRegistrationVerificationModel.md)|  | |

### Return type

[**\OpenAPI\Client\Model\LoginResultModelOfCustomerProfileModel**](../Model/LoginResultModelOfCustomerProfileModel.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customerVerifyLogin()`

```php
customerVerifyLogin($login_verification_model): \OpenAPI\Client\Model\LoginResultModelOfCustomerProfileModel
```

Verify two factor authentication. [ PRIVATE; SHOP API KEY REQUIRED ]

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$login_verification_model = new \OpenAPI\Client\Model\LoginVerificationModel(); // \OpenAPI\Client\Model\LoginVerificationModel

try {
    $result = $apiInstance->customerVerifyLogin($login_verification_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerVerifyLogin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **login_verification_model** | [**\OpenAPI\Client\Model\LoginVerificationModel**](../Model/LoginVerificationModel.md)|  | |

### Return type

[**\OpenAPI\Client\Model\LoginResultModelOfCustomerProfileModel**](../Model/LoginResultModelOfCustomerProfileModel.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customerVerifyPhone()`

```php
customerVerifyPhone($code): \OpenAPI\Client\Model\CustomerProfileModel
```

Verify email. [ PRIVATE; CUSTOMER ENTITY ONLY; SHOP API KEY REQUIRED ]

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string

try {
    $result = $apiInstance->customerVerifyPhone($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerVerifyPhone: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CustomerProfileModel**](../Model/CustomerProfileModel.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customerVerifyPhoneLogin()`

```php
customerVerifyPhoneLogin($phone_login_verification_model): \OpenAPI\Client\Model\LoginResultModelOfCustomerProfileModel
```

Verify customer account phone authentication. [ PRIVATE; SHOP API KEY REQUIRED ]

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$phone_login_verification_model = new \OpenAPI\Client\Model\PhoneLoginVerificationModel(); // \OpenAPI\Client\Model\PhoneLoginVerificationModel

try {
    $result = $apiInstance->customerVerifyPhoneLogin($phone_login_verification_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerVerifyPhoneLogin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **phone_login_verification_model** | [**\OpenAPI\Client\Model\PhoneLoginVerificationModel**](../Model/PhoneLoginVerificationModel.md)|  | |

### Return type

[**\OpenAPI\Client\Model\LoginResultModelOfCustomerProfileModel**](../Model/LoginResultModelOfCustomerProfileModel.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
