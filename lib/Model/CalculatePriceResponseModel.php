<?php
/**
 * CalculatePriceResponseModel
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Domdistrict Shop API
 *
 * BUILD TIME: 2022-09-08 12:31:24  ENVIRONMENT: Staging (//config/appsettings-stg.json)
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.1.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * CalculatePriceResponseModel Class Doc Comment
 *
 * @category Class
 * @description Contains information about calculated product option price.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CalculatePriceResponseModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CalculatePriceResponseModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'product_id' => 'string',
        'product_option_id' => 'string',
        'product_term' => '\OpenAPI\Client\Model\CalculatePriceResponseModelProductTerm',
        'quantity' => 'int',
        'currency' => '\OpenAPI\Client\Model\CalculatePriceResponseModelCurrency',
        'unit_price' => 'float',
        'discount_percent' => 'float',
        'unit_discount' => 'float',
        'unit_discounted_price' => 'float',
        'total_discount' => 'float',
        'total_without_discount' => 'float',
        'total' => 'float',
        'shipping' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'product_id' => 'guid',
        'product_option_id' => 'guid',
        'product_term' => null,
        'quantity' => 'int32',
        'currency' => null,
        'unit_price' => 'decimal',
        'discount_percent' => 'decimal',
        'unit_discount' => 'decimal',
        'unit_discounted_price' => 'decimal',
        'total_discount' => 'decimal',
        'total_without_discount' => 'decimal',
        'total' => 'decimal',
        'shipping' => 'decimal'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'product_id' => false,
		'product_option_id' => false,
		'product_term' => true,
		'quantity' => false,
		'currency' => true,
		'unit_price' => false,
		'discount_percent' => true,
		'unit_discount' => false,
		'unit_discounted_price' => false,
		'total_discount' => false,
		'total_without_discount' => false,
		'total' => false,
		'shipping' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'product_id' => 'productId',
        'product_option_id' => 'productOptionId',
        'product_term' => 'productTerm',
        'quantity' => 'quantity',
        'currency' => 'currency',
        'unit_price' => 'unitPrice',
        'discount_percent' => 'discountPercent',
        'unit_discount' => 'unitDiscount',
        'unit_discounted_price' => 'unitDiscountedPrice',
        'total_discount' => 'totalDiscount',
        'total_without_discount' => 'totalWithoutDiscount',
        'total' => 'total',
        'shipping' => 'shipping'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'product_id' => 'setProductId',
        'product_option_id' => 'setProductOptionId',
        'product_term' => 'setProductTerm',
        'quantity' => 'setQuantity',
        'currency' => 'setCurrency',
        'unit_price' => 'setUnitPrice',
        'discount_percent' => 'setDiscountPercent',
        'unit_discount' => 'setUnitDiscount',
        'unit_discounted_price' => 'setUnitDiscountedPrice',
        'total_discount' => 'setTotalDiscount',
        'total_without_discount' => 'setTotalWithoutDiscount',
        'total' => 'setTotal',
        'shipping' => 'setShipping'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'product_id' => 'getProductId',
        'product_option_id' => 'getProductOptionId',
        'product_term' => 'getProductTerm',
        'quantity' => 'getQuantity',
        'currency' => 'getCurrency',
        'unit_price' => 'getUnitPrice',
        'discount_percent' => 'getDiscountPercent',
        'unit_discount' => 'getUnitDiscount',
        'unit_discounted_price' => 'getUnitDiscountedPrice',
        'total_discount' => 'getTotalDiscount',
        'total_without_discount' => 'getTotalWithoutDiscount',
        'total' => 'getTotal',
        'shipping' => 'getShipping'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('product_id', $data ?? [], null);
        $this->setIfExists('product_option_id', $data ?? [], null);
        $this->setIfExists('product_term', $data ?? [], null);
        $this->setIfExists('quantity', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('unit_price', $data ?? [], null);
        $this->setIfExists('discount_percent', $data ?? [], null);
        $this->setIfExists('unit_discount', $data ?? [], null);
        $this->setIfExists('unit_discounted_price', $data ?? [], null);
        $this->setIfExists('total_discount', $data ?? [], null);
        $this->setIfExists('total_without_discount', $data ?? [], null);
        $this->setIfExists('total', $data ?? [], null);
        $this->setIfExists('shipping', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets product_id
     *
     * @return string|null
     */
    public function getProductId()
    {
        return $this->container['product_id'];
    }

    /**
     * Sets product_id
     *
     * @param string|null $product_id Product ID.
     *
     * @return self
     */
    public function setProductId($product_id)
    {

        if (is_null($product_id)) {
            throw new \InvalidArgumentException('non-nullable product_id cannot be null');
        }

        $this->container['product_id'] = $product_id;

        return $this;
    }

    /**
     * Gets product_option_id
     *
     * @return string|null
     */
    public function getProductOptionId()
    {
        return $this->container['product_option_id'];
    }

    /**
     * Sets product_option_id
     *
     * @param string|null $product_option_id Product option ID.
     *
     * @return self
     */
    public function setProductOptionId($product_option_id)
    {

        if (is_null($product_option_id)) {
            throw new \InvalidArgumentException('non-nullable product_option_id cannot be null');
        }

        $this->container['product_option_id'] = $product_option_id;

        return $this;
    }

    /**
     * Gets product_term
     *
     * @return \OpenAPI\Client\Model\CalculatePriceResponseModelProductTerm|null
     */
    public function getProductTerm()
    {
        return $this->container['product_term'];
    }

    /**
     * Sets product_term
     *
     * @param \OpenAPI\Client\Model\CalculatePriceResponseModelProductTerm|null $product_term product_term
     *
     * @return self
     */
    public function setProductTerm($product_term)
    {

        if (is_null($product_term)) {
            array_push($this->openAPINullablesSetToNull, 'product_term');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('product_term', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['product_term'] = $product_term;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int|null $quantity Quantity.
     *
     * @return self
     */
    public function setQuantity($quantity)
    {

        if (is_null($quantity)) {
            throw new \InvalidArgumentException('non-nullable quantity cannot be null');
        }

        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return \OpenAPI\Client\Model\CalculatePriceResponseModelCurrency|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param \OpenAPI\Client\Model\CalculatePriceResponseModelCurrency|null $currency currency
     *
     * @return self
     */
    public function setCurrency($currency)
    {

        if (is_null($currency)) {
            array_push($this->openAPINullablesSetToNull, 'currency');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('currency', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets unit_price
     *
     * @return float|null
     */
    public function getUnitPrice()
    {
        return $this->container['unit_price'];
    }

    /**
     * Sets unit_price
     *
     * @param float|null $unit_price Single item price before discount.
     *
     * @return self
     */
    public function setUnitPrice($unit_price)
    {

        if (is_null($unit_price)) {
            throw new \InvalidArgumentException('non-nullable unit_price cannot be null');
        }

        $this->container['unit_price'] = $unit_price;

        return $this;
    }

    /**
     * Gets discount_percent
     *
     * @return float|null
     */
    public function getDiscountPercent()
    {
        return $this->container['discount_percent'];
    }

    /**
     * Sets discount_percent
     *
     * @param float|null $discount_percent Discount percent.
     *
     * @return self
     */
    public function setDiscountPercent($discount_percent)
    {

        if (is_null($discount_percent)) {
            array_push($this->openAPINullablesSetToNull, 'discount_percent');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('discount_percent', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['discount_percent'] = $discount_percent;

        return $this;
    }

    /**
     * Gets unit_discount
     *
     * @return float|null
     */
    public function getUnitDiscount()
    {
        return $this->container['unit_discount'];
    }

    /**
     * Sets unit_discount
     *
     * @param float|null $unit_discount Discount per item.
     *
     * @return self
     */
    public function setUnitDiscount($unit_discount)
    {

        if (is_null($unit_discount)) {
            throw new \InvalidArgumentException('non-nullable unit_discount cannot be null');
        }

        $this->container['unit_discount'] = $unit_discount;

        return $this;
    }

    /**
     * Gets unit_discounted_price
     *
     * @return float|null
     */
    public function getUnitDiscountedPrice()
    {
        return $this->container['unit_discounted_price'];
    }

    /**
     * Sets unit_discounted_price
     *
     * @param float|null $unit_discounted_price Single item price after discount.
     *
     * @return self
     */
    public function setUnitDiscountedPrice($unit_discounted_price)
    {

        if (is_null($unit_discounted_price)) {
            throw new \InvalidArgumentException('non-nullable unit_discounted_price cannot be null');
        }

        $this->container['unit_discounted_price'] = $unit_discounted_price;

        return $this;
    }

    /**
     * Gets total_discount
     *
     * @return float|null
     */
    public function getTotalDiscount()
    {
        return $this->container['total_discount'];
    }

    /**
     * Sets total_discount
     *
     * @param float|null $total_discount Total discount.
     *
     * @return self
     */
    public function setTotalDiscount($total_discount)
    {

        if (is_null($total_discount)) {
            throw new \InvalidArgumentException('non-nullable total_discount cannot be null');
        }

        $this->container['total_discount'] = $total_discount;

        return $this;
    }

    /**
     * Gets total_without_discount
     *
     * @return float|null
     */
    public function getTotalWithoutDiscount()
    {
        return $this->container['total_without_discount'];
    }

    /**
     * Sets total_without_discount
     *
     * @param float|null $total_without_discount Total cost without discount.
     *
     * @return self
     */
    public function setTotalWithoutDiscount($total_without_discount)
    {

        if (is_null($total_without_discount)) {
            throw new \InvalidArgumentException('non-nullable total_without_discount cannot be null');
        }

        $this->container['total_without_discount'] = $total_without_discount;

        return $this;
    }

    /**
     * Gets total
     *
     * @return float|null
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param float|null $total Total cost with discount.
     *
     * @return self
     */
    public function setTotal($total)
    {

        if (is_null($total)) {
            throw new \InvalidArgumentException('non-nullable total cannot be null');
        }

        $this->container['total'] = $total;

        return $this;
    }

    /**
     * Gets shipping
     *
     * @return float|null
     */
    public function getShipping()
    {
        return $this->container['shipping'];
    }

    /**
     * Sets shipping
     *
     * @param float|null $shipping Total shipping cost for all items.
     *
     * @return self
     */
    public function setShipping($shipping)
    {

        if (is_null($shipping)) {
            throw new \InvalidArgumentException('non-nullable shipping cannot be null');
        }

        $this->container['shipping'] = $shipping;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


