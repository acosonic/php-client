# OpenAPIClient-php

BUILD TIME: 2022-09-08 12:31:24

ENVIRONMENT: Staging (//config/appsettings-stg.json)



## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https:////.git"
    }
  ],
  "require": {
    "/": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to *https://api-stg.domdistrict.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AddressApi* | [**addressCountries**](docs/Api/AddressApi.md#addresscountries) | **GET** /shop/Address/Countries | Returns all countries. [ PRIVATE; SHOP API KEY REQUIRED ]
*AddressApi* | [**addressStates**](docs/Api/AddressApi.md#addressstates) | **GET** /shop/Address/States | Returns all states for specified country. [ PRIVATE; SHOP API KEY REQUIRED ]
*CategoryApi* | [**categoryGetCategory**](docs/Api/CategoryApi.md#categorygetcategory) | **GET** /shop/Category/{idOrSlug} | Returns category by id or slug. [ PRIVATE; SHOP API KEY REQUIRED ]
*CategoryApi* | [**categorySearchCategories**](docs/Api/CategoryApi.md#categorysearchcategories) | **POST** /shop/Category/Search | Search categories. [ PRIVATE; SHOP API KEY REQUIRED ] Sort fields: Name, Slug, Path (default)
*CustomerApi* | [**customerCompletePasswordReset**](docs/Api/CustomerApi.md#customercompletepasswordreset) | **POST** /shop/Customer/CompletePasswordReset | Complete password reset. [ PRIVATE; SHOP API KEY REQUIRED ]
*CustomerApi* | [**customerDeleteCustomer**](docs/Api/CustomerApi.md#customerdeletecustomer) | **DELETE** /shop/Customer | Deletes current customer. [ PRIVATE; CUSTOMER ENTITY ONLY; SHOP API KEY REQUIRED ]
*CustomerApi* | [**customerExternalLogin**](docs/Api/CustomerApi.md#customerexternallogin) | **POST** /shop/Customer/ExternalLogin | Authenticate customer account by retrieving information from external provider. [ PRIVATE; SHOP API KEY REQUIRED ]
*CustomerApi* | [**customerLogin**](docs/Api/CustomerApi.md#customerlogin) | **POST** /shop/Customer/Login | Authenticate customer with email and password. [ PRIVATE; SHOP API KEY REQUIRED ]
*CustomerApi* | [**customerLogout**](docs/Api/CustomerApi.md#customerlogout) | **POST** /shop/Customer/Logout | Logout authenticated customer account from all devices. [ PRIVATE; CUSTOMER ENTITY ONLY; SHOP API KEY REQUIRED ]
*CustomerApi* | [**customerPasswordReset**](docs/Api/CustomerApi.md#customerpasswordreset) | **POST** /shop/Customer/PasswordReset | Initiate a password reset. [ PRIVATE; SHOP API KEY REQUIRED ]
*CustomerApi* | [**customerPhoneLogin**](docs/Api/CustomerApi.md#customerphonelogin) | **POST** /shop/Customer/PhoneLogin | Authenticate customer account by phone. [ PRIVATE; SHOP API KEY REQUIRED ]
*CustomerApi* | [**customerProfile**](docs/Api/CustomerApi.md#customerprofile) | **GET** /shop/Customer/Profile | Returns current customer profile. [ PRIVATE; CUSTOMER ENTITY ONLY; SHOP API KEY REQUIRED ]
*CustomerApi* | [**customerRefreshToken**](docs/Api/CustomerApi.md#customerrefreshtoken) | **GET** /shop/Customer/RefreshToken | Creates a new token for authenticated customer account. [ PRIVATE; CUSTOMER ENTITY ONLY; SHOP API KEY REQUIRED ]
*CustomerApi* | [**customerRegisterEmail**](docs/Api/CustomerApi.md#customerregisteremail) | **POST** /shop/Customer/RegisterEmail | Register new customer account by email. [ PRIVATE; SHOP API KEY REQUIRED ]
*CustomerApi* | [**customerUpdateProfile**](docs/Api/CustomerApi.md#customerupdateprofile) | **POST** /shop/Customer/UpdateProfile | Update customer profile. [ PRIVATE; CUSTOMER ENTITY ONLY; SHOP API KEY REQUIRED ]
*CustomerApi* | [**customerValidateToken**](docs/Api/CustomerApi.md#customervalidatetoken) | **POST** /shop/Customer/ValidateToken | Validate token. [ PRIVATE; SHOP API KEY REQUIRED ]
*CustomerApi* | [**customerVerifyEmail**](docs/Api/CustomerApi.md#customerverifyemail) | **POST** /shop/Customer/VerifyEmail | Verify email. [ PRIVATE; CUSTOMER ENTITY ONLY; SHOP API KEY REQUIRED ]
*CustomerApi* | [**customerVerifyEmailRegistration**](docs/Api/CustomerApi.md#customerverifyemailregistration) | **POST** /shop/Customer/VerifyEmailRegistration | Verify customer account registered by email. [ PRIVATE; SHOP API KEY REQUIRED ]
*CustomerApi* | [**customerVerifyLogin**](docs/Api/CustomerApi.md#customerverifylogin) | **POST** /shop/Customer/VerifyLogin | Verify two factor authentication. [ PRIVATE; SHOP API KEY REQUIRED ]
*CustomerApi* | [**customerVerifyPhone**](docs/Api/CustomerApi.md#customerverifyphone) | **POST** /shop/Customer/VerifyPhone | Verify email. [ PRIVATE; CUSTOMER ENTITY ONLY; SHOP API KEY REQUIRED ]
*CustomerApi* | [**customerVerifyPhoneLogin**](docs/Api/CustomerApi.md#customerverifyphonelogin) | **POST** /shop/Customer/VerifyPhoneLogin | Verify customer account phone authentication. [ PRIVATE; SHOP API KEY REQUIRED ]
*FileApi* | [**fileDownloadFile**](docs/Api/FileApi.md#filedownloadfile) | **GET** /shop/File/{path} | Download file. [ PRIVATE; CUSTOMER ENTITY ONLY ]
*FileApi* | [**fileDownloadPublicFile**](docs/Api/FileApi.md#filedownloadpublicfile) | **GET** /shop/File/public/{path} | Download file. [ PUBLIC ]
*FileApi* | [**fileDownloadTempFile**](docs/Api/FileApi.md#filedownloadtempfile) | **GET** /shop/File/temp/{path} | Download file. [ PUBLIC ]
*FileApi* | [**fileUploadFile**](docs/Api/FileApi.md#fileuploadfile) | **POST** /shop/File | Upload file. [ PRIVATE; CUSTOMER ENTITY ONLY ]
*OrderApi* | [**orderBuildCart**](docs/Api/OrderApi.md#orderbuildcart) | **POST** /shop/Order/BuildCart | Builds cart. [ PRIVATE; SHOP API KEY REQUIRED ]
*OrderApi* | [**orderCalculatePrice**](docs/Api/OrderApi.md#ordercalculateprice) | **POST** /shop/Order/CalculatePrice | Calculate product option price. [ PRIVATE; SHOP API KEY REQUIRED ]
*OrderApi* | [**orderCreateOrder**](docs/Api/OrderApi.md#ordercreateorder) | **POST** /shop/Order | Create order. [ PRIVATE; SHOP API KEY REQUIRED ]
*OrderApi* | [**orderSearchOrders**](docs/Api/OrderApi.md#ordersearchorders) | **POST** /shop/Order/Search | Search orders. [ PRIVATE; CUSTOMER ENTITY ONLY; SHOP API KEY REQUIRED ] Sort fields: CreatedTime (default), Shop, Customer, Type, Status, Affiliate, Number, TotalItemPrice, TotalItemDiscount, TotalItemDiscountedPrice, TotalShipping, ShippingTaxable, ShippingTaxRate, ShippingTax, TotalItemTax, TotalTax, Total
*ProductApi* | [**productGetProduct**](docs/Api/ProductApi.md#productgetproduct) | **GET** /shop/Product/{idOrSlug} | Returns product by id or slug. [ PRIVATE; SHOP API KEY REQUIRED ]
*ProductApi* | [**productSearchProducts**](docs/Api/ProductApi.md#productsearchproducts) | **POST** /shop/Product/Search | Search products. [ PRIVATE; SHOP API KEY REQUIRED ] Sort fields: CreatedTime (default), Name, Slug, Shop, Category, GoogleCategory

## Models

- [ActiveVerificationModel](docs/Model/ActiveVerificationModel.md)
- [ActiveVerificationModelStatus](docs/Model/ActiveVerificationModelStatus.md)
- [ActiveVerificationModelType](docs/Model/ActiveVerificationModelType.md)
- [AddressModel](docs/Model/AddressModel.md)
- [AddressModelCountry](docs/Model/AddressModelCountry.md)
- [AddressModelState](docs/Model/AddressModelState.md)
- [AffiliateInfoModel](docs/Model/AffiliateInfoModel.md)
- [AttributeModel](docs/Model/AttributeModel.md)
- [AttributeSearchQuery](docs/Model/AttributeSearchQuery.md)
- [AttributeSearchQueryAllOf](docs/Model/AttributeSearchQueryAllOf.md)
- [AttributeValueModel](docs/Model/AttributeValueModel.md)
- [BankModel](docs/Model/BankModel.md)
- [BankModelAllOf](docs/Model/BankModelAllOf.md)
- [BankSearchQuery](docs/Model/BankSearchQuery.md)
- [BankSearchQueryAllOf](docs/Model/BankSearchQueryAllOf.md)
- [BuildCartItemModel](docs/Model/BuildCartItemModel.md)
- [BuildCartModel](docs/Model/BuildCartModel.md)
- [CalculatePriceModel](docs/Model/CalculatePriceModel.md)
- [CalculatePriceResponseModel](docs/Model/CalculatePriceResponseModel.md)
- [CalculatePriceResponseModelCurrency](docs/Model/CalculatePriceResponseModelCurrency.md)
- [CalculatePriceResponseModelProductTerm](docs/Model/CalculatePriceResponseModelProductTerm.md)
- [CartItemModel](docs/Model/CartItemModel.md)
- [CartItemModelProduct](docs/Model/CartItemModelProduct.md)
- [CartItemModelProductOption](docs/Model/CartItemModelProductOption.md)
- [CartModel](docs/Model/CartModel.md)
- [CartModelCountry](docs/Model/CartModelCountry.md)
- [CartModelState](docs/Model/CartModelState.md)
- [CategoryModel](docs/Model/CategoryModel.md)
- [CategoryModelAllOf](docs/Model/CategoryModelAllOf.md)
- [CategorySearchQueryForCRM](docs/Model/CategorySearchQueryForCRM.md)
- [CategorySearchQueryForCRMAllOf](docs/Model/CategorySearchQueryForCRMAllOf.md)
- [CategorySearchQueryForShop](docs/Model/CategorySearchQueryForShop.md)
- [CategorySearchQueryForShopAllOf](docs/Model/CategorySearchQueryForShopAllOf.md)
- [CorporationInfoModel](docs/Model/CorporationInfoModel.md)
- [CorporationInfoModelOrganization](docs/Model/CorporationInfoModelOrganization.md)
- [CorporationModel](docs/Model/CorporationModel.md)
- [CorporationModelAllOf](docs/Model/CorporationModelAllOf.md)
- [CorporationSearchQuery](docs/Model/CorporationSearchQuery.md)
- [CorporationSearchQueryAllOf](docs/Model/CorporationSearchQueryAllOf.md)
- [CorporationSettingsModel](docs/Model/CorporationSettingsModel.md)
- [CorporationSettingsModelTaxSettings](docs/Model/CorporationSettingsModelTaxSettings.md)
- [CountryModel](docs/Model/CountryModel.md)
- [CreateOrderCustomerModel](docs/Model/CreateOrderCustomerModel.md)
- [CreateOrderItemModel](docs/Model/CreateOrderItemModel.md)
- [CreateOrderModel](docs/Model/CreateOrderModel.md)
- [CreateOrderModelBillingAddress](docs/Model/CreateOrderModelBillingAddress.md)
- [CreateOrderModelCustomer](docs/Model/CreateOrderModelCustomer.md)
- [CreateOrderModelPaymentMethod](docs/Model/CreateOrderModelPaymentMethod.md)
- [CreateOrderModelShippingAddress](docs/Model/CreateOrderModelShippingAddress.md)
- [CreateOrderPaymentMethodCreditCardModel](docs/Model/CreateOrderPaymentMethodCreditCardModel.md)
- [CreateOrderPaymentMethodModel](docs/Model/CreateOrderPaymentMethodModel.md)
- [CreateOrderPaymentMethodModelCreditCard](docs/Model/CreateOrderPaymentMethodModelCreditCard.md)
- [CreateOrderPaymentMethodModelType](docs/Model/CreateOrderPaymentMethodModelType.md)
- [CreateUserModel](docs/Model/CreateUserModel.md)
- [CreateUserModelOrganizationAddress](docs/Model/CreateUserModelOrganizationAddress.md)
- [CreateUserModelOrganizationSettings](docs/Model/CreateUserModelOrganizationSettings.md)
- [CreateUserModelType](docs/Model/CreateUserModelType.md)
- [CurrencyModel](docs/Model/CurrencyModel.md)
- [CustomerAddressModel](docs/Model/CustomerAddressModel.md)
- [CustomerAddressModelAllOf](docs/Model/CustomerAddressModelAllOf.md)
- [CustomerInfoModel](docs/Model/CustomerInfoModel.md)
- [CustomerProfileModel](docs/Model/CustomerProfileModel.md)
- [CustomerProfileModelAllOf](docs/Model/CustomerProfileModelAllOf.md)
- [CustomerQuery](docs/Model/CustomerQuery.md)
- [CustomerQueryAllOf](docs/Model/CustomerQueryAllOf.md)
- [DimensionUnitModel](docs/Model/DimensionUnitModel.md)
- [EmailData](docs/Model/EmailData.md)
- [EmailRegistrationModel](docs/Model/EmailRegistrationModel.md)
- [EmailRegistrationVerificationModel](docs/Model/EmailRegistrationVerificationModel.md)
- [EntityBaseModel](docs/Model/EntityBaseModel.md)
- [EntityCounts](docs/Model/EntityCounts.md)
- [EntitySearchQuery](docs/Model/EntitySearchQuery.md)
- [EntitySearchQueryAllOf](docs/Model/EntitySearchQueryAllOf.md)
- [EntitySearchQueryDeletedStatus](docs/Model/EntitySearchQueryDeletedStatus.md)
- [EntitySearchQueryEnabledStatus](docs/Model/EntitySearchQueryEnabledStatus.md)
- [ExternalCredentialsModel](docs/Model/ExternalCredentialsModel.md)
- [ExternalCredentialsModelProvider](docs/Model/ExternalCredentialsModelProvider.md)
- [ExternalProviderEnum](docs/Model/ExternalProviderEnum.md)
- [FlxpointAttributeModel](docs/Model/FlxpointAttributeModel.md)
- [FlxpointCategoryModel](docs/Model/FlxpointCategoryModel.md)
- [FlxpointCustomAggregateFieldModel](docs/Model/FlxpointCustomAggregateFieldModel.md)
- [FlxpointCustomFieldModel](docs/Model/FlxpointCustomFieldModel.md)
- [FlxpointDimensionUnitModel](docs/Model/FlxpointDimensionUnitModel.md)
- [FlxpointImageModel](docs/Model/FlxpointImageModel.md)
- [FlxpointInventoryProductModel](docs/Model/FlxpointInventoryProductModel.md)
- [FlxpointInventoryProductModelCategoryOne](docs/Model/FlxpointInventoryProductModelCategoryOne.md)
- [FlxpointInventoryVariantCustomAggregateFieldModel](docs/Model/FlxpointInventoryVariantCustomAggregateFieldModel.md)
- [FlxpointInventoryVariantCustomAggregateFieldModelCustomAggregateField](docs/Model/FlxpointInventoryVariantCustomAggregateFieldModelCustomAggregateField.md)
- [FlxpointInventoryVariantModel](docs/Model/FlxpointInventoryVariantModel.md)
- [FlxpointInventoryVariantModelDimensionUnit](docs/Model/FlxpointInventoryVariantModelDimensionUnit.md)
- [FlxpointInventoryVariantModelParent](docs/Model/FlxpointInventoryVariantModelParent.md)
- [FlxpointInventoryVariantModelWeightUnit](docs/Model/FlxpointInventoryVariantModelWeightUnit.md)
- [FlxpointLinkedProductVariant](docs/Model/FlxpointLinkedProductVariant.md)
- [FlxpointOptionModel](docs/Model/FlxpointOptionModel.md)
- [FlxpointWeightUnitModel](docs/Model/FlxpointWeightUnitModel.md)
- [GoogleCategoryModel](docs/Model/GoogleCategoryModel.md)
- [GoogleCategorySearchQuery](docs/Model/GoogleCategorySearchQuery.md)
- [GoogleCategorySearchQueryAllOf](docs/Model/GoogleCategorySearchQueryAllOf.md)
- [IncludeEntitiesEnum](docs/Model/IncludeEntitiesEnum.md)
- [ItemsModel](docs/Model/ItemsModel.md)
- [LoginResultModelOfCustomerProfileModel](docs/Model/LoginResultModelOfCustomerProfileModel.md)
- [LoginResultModelOfCustomerProfileModelProfile](docs/Model/LoginResultModelOfCustomerProfileModelProfile.md)
- [LoginResultModelOfCustomerProfileModelVerificationStatus](docs/Model/LoginResultModelOfCustomerProfileModelVerificationStatus.md)
- [LoginResultModelOfUserProfileModel](docs/Model/LoginResultModelOfUserProfileModel.md)
- [LoginResultModelOfUserProfileModelProfile](docs/Model/LoginResultModelOfUserProfileModelProfile.md)
- [LoginVerificationModel](docs/Model/LoginVerificationModel.md)
- [MidModel](docs/Model/MidModel.md)
- [MidModelAllOf](docs/Model/MidModelAllOf.md)
- [OrderInfoModel](docs/Model/OrderInfoModel.md)
- [OrderInfoModelAllOf](docs/Model/OrderInfoModelAllOf.md)
- [OrderItemModel](docs/Model/OrderItemModel.md)
- [OrderItemModelAllOf](docs/Model/OrderItemModelAllOf.md)
- [OrderModel](docs/Model/OrderModel.md)
- [OrderModelAllOf](docs/Model/OrderModelAllOf.md)
- [OrderSearchQueryForCRM](docs/Model/OrderSearchQueryForCRM.md)
- [OrderSearchQueryForCRMAllOf](docs/Model/OrderSearchQueryForCRMAllOf.md)
- [OrderSearchQueryForShop](docs/Model/OrderSearchQueryForShop.md)
- [OrderSearchQueryForShopAllOf](docs/Model/OrderSearchQueryForShopAllOf.md)
- [OrderStatusEnum](docs/Model/OrderStatusEnum.md)
- [OrderTypeEnum](docs/Model/OrderTypeEnum.md)
- [OrganizationInfoModel](docs/Model/OrganizationInfoModel.md)
- [OrganizationSettingsModel](docs/Model/OrganizationSettingsModel.md)
- [PageTypeModel](docs/Model/PageTypeModel.md)
- [PaginationQuery](docs/Model/PaginationQuery.md)
- [PaginationQueryAllOf](docs/Model/PaginationQueryAllOf.md)
- [PasswordCredentialsModel](docs/Model/PasswordCredentialsModel.md)
- [PasswordResetCompleteModel](docs/Model/PasswordResetCompleteModel.md)
- [PasswordResetRequestModel](docs/Model/PasswordResetRequestModel.md)
- [PaymentGatewayInfoModel](docs/Model/PaymentGatewayInfoModel.md)
- [PaymentGatewayInfoModelType](docs/Model/PaymentGatewayInfoModelType.md)
- [PaymentGatewayModel](docs/Model/PaymentGatewayModel.md)
- [PaymentGatewayModelAllOf](docs/Model/PaymentGatewayModelAllOf.md)
- [PaymentGatewayNMISettingsModel](docs/Model/PaymentGatewayNMISettingsModel.md)
- [PaymentGatewaySearchQuery](docs/Model/PaymentGatewaySearchQuery.md)
- [PaymentGatewaySearchQueryAllOf](docs/Model/PaymentGatewaySearchQueryAllOf.md)
- [PaymentGatewaySettingsModel](docs/Model/PaymentGatewaySettingsModel.md)
- [PaymentGatewaySettingsModelNmi](docs/Model/PaymentGatewaySettingsModelNmi.md)
- [PaymentGatewayTypeEnum](docs/Model/PaymentGatewayTypeEnum.md)
- [PaymentMethodCreditCardModel](docs/Model/PaymentMethodCreditCardModel.md)
- [PaymentMethodModel](docs/Model/PaymentMethodModel.md)
- [PaymentMethodModelAllOf](docs/Model/PaymentMethodModelAllOf.md)
- [PaymentMethodTypeEnum](docs/Model/PaymentMethodTypeEnum.md)
- [PhoneLoginModel](docs/Model/PhoneLoginModel.md)
- [PhoneLoginVerificationModel](docs/Model/PhoneLoginVerificationModel.md)
- [ProductAttributeModel](docs/Model/ProductAttributeModel.md)
- [ProductImportOptions](docs/Model/ProductImportOptions.md)
- [ProductImportOptionsType](docs/Model/ProductImportOptionsType.md)
- [ProductImportTypeEnum](docs/Model/ProductImportTypeEnum.md)
- [ProductInfoModel](docs/Model/ProductInfoModel.md)
- [ProductInfoModelAllOf](docs/Model/ProductInfoModelAllOf.md)
- [ProductModel](docs/Model/ProductModel.md)
- [ProductModelAllOf](docs/Model/ProductModelAllOf.md)
- [ProductOptionImageModel](docs/Model/ProductOptionImageModel.md)
- [ProductOptionInfoModel](docs/Model/ProductOptionInfoModel.md)
- [ProductOptionInfoModelCurrency](docs/Model/ProductOptionInfoModelCurrency.md)
- [ProductOptionInfoModelDimensionUnit](docs/Model/ProductOptionInfoModelDimensionUnit.md)
- [ProductOptionInfoModelWeightUnit](docs/Model/ProductOptionInfoModelWeightUnit.md)
- [ProductOptionModel](docs/Model/ProductOptionModel.md)
- [ProductOptionModelShippingPriceType](docs/Model/ProductOptionModelShippingPriceType.md)
- [ProductProviderFlxpointPriceSourceEnum](docs/Model/ProductProviderFlxpointPriceSourceEnum.md)
- [ProductProviderFlxpointSettingsModel](docs/Model/ProductProviderFlxpointSettingsModel.md)
- [ProductProviderImportSettingsModel](docs/Model/ProductProviderImportSettingsModel.md)
- [ProductProviderImportSettingsModelFlxpointPriceSource](docs/Model/ProductProviderImportSettingsModelFlxpointPriceSource.md)
- [ProductProviderImportSettingsModelUpdateFields](docs/Model/ProductProviderImportSettingsModelUpdateFields.md)
- [ProductProviderImportUpdateFieldsModel](docs/Model/ProductProviderImportUpdateFieldsModel.md)
- [ProductProviderInfoModel](docs/Model/ProductProviderInfoModel.md)
- [ProductProviderInfoModelType](docs/Model/ProductProviderInfoModelType.md)
- [ProductProviderModel](docs/Model/ProductProviderModel.md)
- [ProductProviderModelAllOf](docs/Model/ProductProviderModelAllOf.md)
- [ProductProviderSearchQuery](docs/Model/ProductProviderSearchQuery.md)
- [ProductProviderSearchQueryAllOf](docs/Model/ProductProviderSearchQueryAllOf.md)
- [ProductProviderSettingsModel](docs/Model/ProductProviderSettingsModel.md)
- [ProductProviderSettingsModelFlxpoint](docs/Model/ProductProviderSettingsModelFlxpoint.md)
- [ProductProviderSettingsModelImport](docs/Model/ProductProviderSettingsModelImport.md)
- [ProductProviderTaskLogModel](docs/Model/ProductProviderTaskLogModel.md)
- [ProductProviderTaskModel](docs/Model/ProductProviderTaskModel.md)
- [ProductProviderTaskModelState](docs/Model/ProductProviderTaskModelState.md)
- [ProductProviderTaskModelStatus](docs/Model/ProductProviderTaskModelStatus.md)
- [ProductProviderTaskSearchQuery](docs/Model/ProductProviderTaskSearchQuery.md)
- [ProductProviderTaskSearchQueryAllOf](docs/Model/ProductProviderTaskSearchQueryAllOf.md)
- [ProductProviderTaskStateModel](docs/Model/ProductProviderTaskStateModel.md)
- [ProductProviderTaskStatusEnum](docs/Model/ProductProviderTaskStatusEnum.md)
- [ProductProviderTypeEnum](docs/Model/ProductProviderTypeEnum.md)
- [ProductSearchQueryForCRM](docs/Model/ProductSearchQueryForCRM.md)
- [ProductSearchQueryForCRMAllOf](docs/Model/ProductSearchQueryForCRMAllOf.md)
- [ProductSearchQueryForShop](docs/Model/ProductSearchQueryForShop.md)
- [ProductSearchQueryForShopAllOf](docs/Model/ProductSearchQueryForShopAllOf.md)
- [ProductTermModel](docs/Model/ProductTermModel.md)
- [ProductTermModelType](docs/Model/ProductTermModelType.md)
- [SearchQueryRangeOfDateOnly](docs/Model/SearchQueryRangeOfDateOnly.md)
- [SearchResultOfAttributeModel](docs/Model/SearchResultOfAttributeModel.md)
- [SearchResultOfBankModel](docs/Model/SearchResultOfBankModel.md)
- [SearchResultOfCategoryModel](docs/Model/SearchResultOfCategoryModel.md)
- [SearchResultOfCorporationModel](docs/Model/SearchResultOfCorporationModel.md)
- [SearchResultOfCustomerProfileModel](docs/Model/SearchResultOfCustomerProfileModel.md)
- [SearchResultOfGoogleCategoryModel](docs/Model/SearchResultOfGoogleCategoryModel.md)
- [SearchResultOfMidModel](docs/Model/SearchResultOfMidModel.md)
- [SearchResultOfOrderInfoModel](docs/Model/SearchResultOfOrderInfoModel.md)
- [SearchResultOfPaymentGatewayModel](docs/Model/SearchResultOfPaymentGatewayModel.md)
- [SearchResultOfProductInfoModel](docs/Model/SearchResultOfProductInfoModel.md)
- [SearchResultOfProductProviderModel](docs/Model/SearchResultOfProductProviderModel.md)
- [SearchResultOfProductProviderTaskLogModel](docs/Model/SearchResultOfProductProviderTaskLogModel.md)
- [SearchResultOfProductProviderTaskModel](docs/Model/SearchResultOfProductProviderTaskModel.md)
- [SearchResultOfShopApiKeyModel](docs/Model/SearchResultOfShopApiKeyModel.md)
- [SearchResultOfShopModel](docs/Model/SearchResultOfShopModel.md)
- [SearchResultOfUserProfileModel](docs/Model/SearchResultOfUserProfileModel.md)
- [ShippingPriceTypeEnum](docs/Model/ShippingPriceTypeEnum.md)
- [ShopApiKeyModel](docs/Model/ShopApiKeyModel.md)
- [ShopApiKeyModelAllOf](docs/Model/ShopApiKeyModelAllOf.md)
- [ShopInfoModel](docs/Model/ShopInfoModel.md)
- [ShopInfoModelCorporation](docs/Model/ShopInfoModelCorporation.md)
- [ShopMidsUsageEnum](docs/Model/ShopMidsUsageEnum.md)
- [ShopModel](docs/Model/ShopModel.md)
- [ShopModelAllOf](docs/Model/ShopModelAllOf.md)
- [ShopSearchQuery](docs/Model/ShopSearchQuery.md)
- [ShopSearchQueryAllOf](docs/Model/ShopSearchQueryAllOf.md)
- [ShopSettingsModel](docs/Model/ShopSettingsModel.md)
- [ShopSettingsModelMidsUsage](docs/Model/ShopSettingsModelMidsUsage.md)
- [SmsData](docs/Model/SmsData.md)
- [SortingQuery](docs/Model/SortingQuery.md)
- [StateModel](docs/Model/StateModel.md)
- [SystemSettingsModel](docs/Model/SystemSettingsModel.md)
- [TaxJarAuthenticationModel](docs/Model/TaxJarAuthenticationModel.md)
- [TaxJarAuthenticationModelEnvironment](docs/Model/TaxJarAuthenticationModelEnvironment.md)
- [TaxJarEnvironmentEnum](docs/Model/TaxJarEnvironmentEnum.md)
- [TaxServiceEnum](docs/Model/TaxServiceEnum.md)
- [TaxSettingsModel](docs/Model/TaxSettingsModel.md)
- [TaxSettingsModelService](docs/Model/TaxSettingsModelService.md)
- [TaxSettingsModelTaxJarAuthentication](docs/Model/TaxSettingsModelTaxJarAuthentication.md)
- [TermTypeEnum](docs/Model/TermTypeEnum.md)
- [TextSearchQuery](docs/Model/TextSearchQuery.md)
- [TextSearchQueryAllOf](docs/Model/TextSearchQueryAllOf.md)
- [TransactionLogModel](docs/Model/TransactionLogModel.md)
- [TransactionModel](docs/Model/TransactionModel.md)
- [TransactionModelAllOf](docs/Model/TransactionModelAllOf.md)
- [TransactionStatusEnum](docs/Model/TransactionStatusEnum.md)
- [TransactionTypeEnum](docs/Model/TransactionTypeEnum.md)
- [TwoFactorAuthEnum](docs/Model/TwoFactorAuthEnum.md)
- [UpdateAddressModel](docs/Model/UpdateAddressModel.md)
- [UpdateAttributeModel](docs/Model/UpdateAttributeModel.md)
- [UpdateAttributeValueModel](docs/Model/UpdateAttributeValueModel.md)
- [UpdateBankModel](docs/Model/UpdateBankModel.md)
- [UpdateCategoryModel](docs/Model/UpdateCategoryModel.md)
- [UpdateCorporationModel](docs/Model/UpdateCorporationModel.md)
- [UpdateCorporationModelSettings](docs/Model/UpdateCorporationModelSettings.md)
- [UpdateCustomerProfileModel](docs/Model/UpdateCustomerProfileModel.md)
- [UpdateCustomerProfileModelTwoFactorAuth](docs/Model/UpdateCustomerProfileModelTwoFactorAuth.md)
- [UpdateMidModel](docs/Model/UpdateMidModel.md)
- [UpdatePaymentGatewayModel](docs/Model/UpdatePaymentGatewayModel.md)
- [UpdatePaymentGatewayModelSettings](docs/Model/UpdatePaymentGatewayModelSettings.md)
- [UpdatePaymentGatewayModelType](docs/Model/UpdatePaymentGatewayModelType.md)
- [UpdateProductModel](docs/Model/UpdateProductModel.md)
- [UpdateProductOptionImageModel](docs/Model/UpdateProductOptionImageModel.md)
- [UpdateProductOptionModel](docs/Model/UpdateProductOptionModel.md)
- [UpdateProductOptionModelShippingPriceType](docs/Model/UpdateProductOptionModelShippingPriceType.md)
- [UpdateProductProviderModel](docs/Model/UpdateProductProviderModel.md)
- [UpdateProductProviderModelSettings](docs/Model/UpdateProductProviderModelSettings.md)
- [UpdateProductProviderModelType](docs/Model/UpdateProductProviderModelType.md)
- [UpdateProductTermModel](docs/Model/UpdateProductTermModel.md)
- [UpdateProductTermModelType](docs/Model/UpdateProductTermModelType.md)
- [UpdateShopApiKeyModel](docs/Model/UpdateShopApiKeyModel.md)
- [UpdateShopModel](docs/Model/UpdateShopModel.md)
- [UpdateShopModelAddress](docs/Model/UpdateShopModelAddress.md)
- [UpdateShopModelSettings](docs/Model/UpdateShopModelSettings.md)
- [UpdateSystemSettingsModel](docs/Model/UpdateSystemSettingsModel.md)
- [UpdateUserProfileModel](docs/Model/UpdateUserProfileModel.md)
- [UserProfileModel](docs/Model/UserProfileModel.md)
- [UserProfileModelAllOf](docs/Model/UserProfileModelAllOf.md)
- [UserQuery](docs/Model/UserQuery.md)
- [UserQueryAllOf](docs/Model/UserQueryAllOf.md)
- [UserTypeEnum](docs/Model/UserTypeEnum.md)
- [ValidateTokenModel](docs/Model/ValidateTokenModel.md)
- [ValidateTokenResponseModel](docs/Model/ValidateTokenResponseModel.md)
- [VerificationResponseModel](docs/Model/VerificationResponseModel.md)
- [VerificationStatusEnum](docs/Model/VerificationStatusEnum.md)
- [VerificationTypeEnum](docs/Model/VerificationTypeEnum.md)
- [WeightUnitModel](docs/Model/WeightUnitModel.md)

## Authorization

### apikey

- **Type**: API key
- **API key parameter name**: X-API-KEY
- **Location**: HTTP header



### bearer

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
