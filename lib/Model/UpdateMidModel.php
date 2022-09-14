<?php
/**
 * UpdateMidModel
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
 * UpdateMidModel Class Doc Comment
 *
 * @category Class
 * @description Contains information for creating/updating shop mid.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UpdateMidModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UpdateMidModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'is_enabled' => 'bool',
        'payment_gateway_id' => 'string',
        'bank_id' => 'string',
        'name' => 'string',
        'number' => 'string',
        'descriptor' => 'string',
        'allow_other_shops' => 'bool',
        'cap' => 'float',
        'remaining' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'is_enabled' => null,
        'payment_gateway_id' => 'guid',
        'bank_id' => 'guid',
        'name' => null,
        'number' => null,
        'descriptor' => null,
        'allow_other_shops' => null,
        'cap' => 'decimal',
        'remaining' => 'decimal'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'is_enabled' => true,
		'payment_gateway_id' => false,
		'bank_id' => false,
		'name' => false,
		'number' => false,
		'descriptor' => false,
		'allow_other_shops' => false,
		'cap' => true,
		'remaining' => true
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
        'is_enabled' => 'isEnabled',
        'payment_gateway_id' => 'paymentGatewayId',
        'bank_id' => 'bankId',
        'name' => 'name',
        'number' => 'number',
        'descriptor' => 'descriptor',
        'allow_other_shops' => 'allowOtherShops',
        'cap' => 'cap',
        'remaining' => 'remaining'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'is_enabled' => 'setIsEnabled',
        'payment_gateway_id' => 'setPaymentGatewayId',
        'bank_id' => 'setBankId',
        'name' => 'setName',
        'number' => 'setNumber',
        'descriptor' => 'setDescriptor',
        'allow_other_shops' => 'setAllowOtherShops',
        'cap' => 'setCap',
        'remaining' => 'setRemaining'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'is_enabled' => 'getIsEnabled',
        'payment_gateway_id' => 'getPaymentGatewayId',
        'bank_id' => 'getBankId',
        'name' => 'getName',
        'number' => 'getNumber',
        'descriptor' => 'getDescriptor',
        'allow_other_shops' => 'getAllowOtherShops',
        'cap' => 'getCap',
        'remaining' => 'getRemaining'
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
        $this->setIfExists('is_enabled', $data ?? [], null);
        $this->setIfExists('payment_gateway_id', $data ?? [], null);
        $this->setIfExists('bank_id', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('number', $data ?? [], null);
        $this->setIfExists('descriptor', $data ?? [], null);
        $this->setIfExists('allow_other_shops', $data ?? [], true);
        $this->setIfExists('cap', $data ?? [], null);
        $this->setIfExists('remaining', $data ?? [], null);
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

        if ($this->container['payment_gateway_id'] === null) {
            $invalidProperties[] = "'payment_gateway_id' can't be null";
        }
        if ((mb_strlen($this->container['payment_gateway_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'payment_gateway_id', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['bank_id'] === null) {
            $invalidProperties[] = "'bank_id' can't be null";
        }
        if ((mb_strlen($this->container['bank_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'bank_id', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) < 1)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['number'] === null) {
            $invalidProperties[] = "'number' can't be null";
        }
        if ((mb_strlen($this->container['number']) < 1)) {
            $invalidProperties[] = "invalid value for 'number', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['descriptor'] === null) {
            $invalidProperties[] = "'descriptor' can't be null";
        }
        if ((mb_strlen($this->container['descriptor']) < 1)) {
            $invalidProperties[] = "invalid value for 'descriptor', the character length must be bigger than or equal to 1.";
        }

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
     * Gets is_enabled
     *
     * @return bool|null
     */
    public function getIsEnabled()
    {
        return $this->container['is_enabled'];
    }

    /**
     * Sets is_enabled
     *
     * @param bool|null $is_enabled Enable or disable shop mid.
     *
     * @return self
     */
    public function setIsEnabled($is_enabled)
    {

        if (is_null($is_enabled)) {
            array_push($this->openAPINullablesSetToNull, 'is_enabled');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('is_enabled', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['is_enabled'] = $is_enabled;

        return $this;
    }

    /**
     * Gets payment_gateway_id
     *
     * @return string
     */
    public function getPaymentGatewayId()
    {
        return $this->container['payment_gateway_id'];
    }

    /**
     * Sets payment_gateway_id
     *
     * @param string $payment_gateway_id Payment gateway ID.
     *
     * @return self
     */
    public function setPaymentGatewayId($payment_gateway_id)
    {

        if ((mb_strlen($payment_gateway_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $payment_gateway_id when calling UpdateMidModel., must be bigger than or equal to 1.');
        }


        if (is_null($payment_gateway_id)) {
            throw new \InvalidArgumentException('non-nullable payment_gateway_id cannot be null');
        }

        $this->container['payment_gateway_id'] = $payment_gateway_id;

        return $this;
    }

    /**
     * Gets bank_id
     *
     * @return string
     */
    public function getBankId()
    {
        return $this->container['bank_id'];
    }

    /**
     * Sets bank_id
     *
     * @param string $bank_id Bank ID.
     *
     * @return self
     */
    public function setBankId($bank_id)
    {

        if ((mb_strlen($bank_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $bank_id when calling UpdateMidModel., must be bigger than or equal to 1.');
        }


        if (is_null($bank_id)) {
            throw new \InvalidArgumentException('non-nullable bank_id cannot be null');
        }

        $this->container['bank_id'] = $bank_id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Mid name.
     *
     * @return self
     */
    public function setName($name)
    {

        if ((mb_strlen($name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $name when calling UpdateMidModel., must be bigger than or equal to 1.');
        }


        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets number
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param string $number Mid number.
     *
     * @return self
     */
    public function setNumber($number)
    {

        if ((mb_strlen($number) < 1)) {
            throw new \InvalidArgumentException('invalid length for $number when calling UpdateMidModel., must be bigger than or equal to 1.');
        }


        if (is_null($number)) {
            throw new \InvalidArgumentException('non-nullable number cannot be null');
        }

        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets descriptor
     *
     * @return string
     */
    public function getDescriptor()
    {
        return $this->container['descriptor'];
    }

    /**
     * Sets descriptor
     *
     * @param string $descriptor Mid descriptor.
     *
     * @return self
     */
    public function setDescriptor($descriptor)
    {

        if ((mb_strlen($descriptor) < 1)) {
            throw new \InvalidArgumentException('invalid length for $descriptor when calling UpdateMidModel., must be bigger than or equal to 1.');
        }


        if (is_null($descriptor)) {
            throw new \InvalidArgumentException('non-nullable descriptor cannot be null');
        }

        $this->container['descriptor'] = $descriptor;

        return $this;
    }

    /**
     * Gets allow_other_shops
     *
     * @return bool|null
     */
    public function getAllowOtherShops()
    {
        return $this->container['allow_other_shops'];
    }

    /**
     * Sets allow_other_shops
     *
     * @param bool|null $allow_other_shops Indicates if this mid can be used in other shops from same organization.
     *
     * @return self
     */
    public function setAllowOtherShops($allow_other_shops)
    {

        if (is_null($allow_other_shops)) {
            throw new \InvalidArgumentException('non-nullable allow_other_shops cannot be null');
        }

        $this->container['allow_other_shops'] = $allow_other_shops;

        return $this;
    }

    /**
     * Gets cap
     *
     * @return float|null
     */
    public function getCap()
    {
        return $this->container['cap'];
    }

    /**
     * Sets cap
     *
     * @param float|null $cap Mid cap amount.
     *
     * @return self
     */
    public function setCap($cap)
    {

        if (is_null($cap)) {
            array_push($this->openAPINullablesSetToNull, 'cap');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('cap', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['cap'] = $cap;

        return $this;
    }

    /**
     * Gets remaining
     *
     * @return float|null
     */
    public function getRemaining()
    {
        return $this->container['remaining'];
    }

    /**
     * Sets remaining
     *
     * @param float|null $remaining Mid remaining amount.
     *
     * @return self
     */
    public function setRemaining($remaining)
    {

        if (is_null($remaining)) {
            array_push($this->openAPINullablesSetToNull, 'remaining');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('remaining', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['remaining'] = $remaining;

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


