# # CustomerQueryAllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shop_id** | **string** | Return products from specified shop. If specified CorporationId and OrganizationId are ignored. | [optional]
**corporation_id** | **string** | Return products from specified corporation. Ignored when ShopId is specified. | [optional]
**organization_id** | **string** | Return products from specified organization. Ignored when ShopId or CorporationId is specified. | [optional]
**name** | **string** | Filter customers by name. | [optional]
**email** | **string** | Filter customers by email. | [optional]
**phone_number** | **string** | Filter customers by phone number. | [optional]
**address** | **string** | Filter customers by address. | [optional]
**postal_code** | **string** | Filter customers by postal code. | [optional]
**state** | **string** | Filter customers by state. | [optional]
**include_addresses** | **bool** | Indicates if customer addresses are included with customer profile. | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
