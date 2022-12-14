<?php
/**
 * FlxpointCustomFieldModel
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
 * FlxpointCustomFieldModel Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class FlxpointCustomFieldModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FlxpointCustomFieldModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'inventory_parent_id' => 'int',
        'id' => 'int',
        'custom_field_id' => 'int',
        'custom_field_value_id' => 'int',
        'name' => 'string',
        'original_inventory_name' => 'string',
        'value' => 'string',
        'original_inventory_value' => 'string',
        'inventory_variant_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'inventory_parent_id' => 'int32',
        'id' => 'int64',
        'custom_field_id' => 'int32',
        'custom_field_value_id' => 'int32',
        'name' => null,
        'original_inventory_name' => null,
        'value' => null,
        'original_inventory_value' => null,
        'inventory_variant_id' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'inventory_parent_id' => true,
		'id' => true,
		'custom_field_id' => true,
		'custom_field_value_id' => true,
		'name' => true,
		'original_inventory_name' => true,
		'value' => true,
		'original_inventory_value' => true,
		'inventory_variant_id' => true
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
        'inventory_parent_id' => 'inventoryParentId',
        'id' => 'id',
        'custom_field_id' => 'customFieldId',
        'custom_field_value_id' => 'customFieldValueId',
        'name' => 'name',
        'original_inventory_name' => 'originalInventoryName',
        'value' => 'value',
        'original_inventory_value' => 'originalInventoryValue',
        'inventory_variant_id' => 'inventoryVariantId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'inventory_parent_id' => 'setInventoryParentId',
        'id' => 'setId',
        'custom_field_id' => 'setCustomFieldId',
        'custom_field_value_id' => 'setCustomFieldValueId',
        'name' => 'setName',
        'original_inventory_name' => 'setOriginalInventoryName',
        'value' => 'setValue',
        'original_inventory_value' => 'setOriginalInventoryValue',
        'inventory_variant_id' => 'setInventoryVariantId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'inventory_parent_id' => 'getInventoryParentId',
        'id' => 'getId',
        'custom_field_id' => 'getCustomFieldId',
        'custom_field_value_id' => 'getCustomFieldValueId',
        'name' => 'getName',
        'original_inventory_name' => 'getOriginalInventoryName',
        'value' => 'getValue',
        'original_inventory_value' => 'getOriginalInventoryValue',
        'inventory_variant_id' => 'getInventoryVariantId'
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
        $this->setIfExists('inventory_parent_id', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('custom_field_id', $data ?? [], null);
        $this->setIfExists('custom_field_value_id', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('original_inventory_name', $data ?? [], null);
        $this->setIfExists('value', $data ?? [], null);
        $this->setIfExists('original_inventory_value', $data ?? [], null);
        $this->setIfExists('inventory_variant_id', $data ?? [], null);
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
     * Gets inventory_parent_id
     *
     * @return int|null
     */
    public function getInventoryParentId()
    {
        return $this->container['inventory_parent_id'];
    }

    /**
     * Sets inventory_parent_id
     *
     * @param int|null $inventory_parent_id inventory_parent_id
     *
     * @return self
     */
    public function setInventoryParentId($inventory_parent_id)
    {

        if (is_null($inventory_parent_id)) {
            array_push($this->openAPINullablesSetToNull, 'inventory_parent_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('inventory_parent_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['inventory_parent_id'] = $inventory_parent_id;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id id
     *
     * @return self
     */
    public function setId($id)
    {

        if (is_null($id)) {
            array_push($this->openAPINullablesSetToNull, 'id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets custom_field_id
     *
     * @return int|null
     */
    public function getCustomFieldId()
    {
        return $this->container['custom_field_id'];
    }

    /**
     * Sets custom_field_id
     *
     * @param int|null $custom_field_id custom_field_id
     *
     * @return self
     */
    public function setCustomFieldId($custom_field_id)
    {

        if (is_null($custom_field_id)) {
            array_push($this->openAPINullablesSetToNull, 'custom_field_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('custom_field_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['custom_field_id'] = $custom_field_id;

        return $this;
    }

    /**
     * Gets custom_field_value_id
     *
     * @return int|null
     */
    public function getCustomFieldValueId()
    {
        return $this->container['custom_field_value_id'];
    }

    /**
     * Sets custom_field_value_id
     *
     * @param int|null $custom_field_value_id custom_field_value_id
     *
     * @return self
     */
    public function setCustomFieldValueId($custom_field_value_id)
    {

        if (is_null($custom_field_value_id)) {
            array_push($this->openAPINullablesSetToNull, 'custom_field_value_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('custom_field_value_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['custom_field_value_id'] = $custom_field_value_id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {

        if (is_null($name)) {
            array_push($this->openAPINullablesSetToNull, 'name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets original_inventory_name
     *
     * @return string|null
     */
    public function getOriginalInventoryName()
    {
        return $this->container['original_inventory_name'];
    }

    /**
     * Sets original_inventory_name
     *
     * @param string|null $original_inventory_name original_inventory_name
     *
     * @return self
     */
    public function setOriginalInventoryName($original_inventory_name)
    {

        if (is_null($original_inventory_name)) {
            array_push($this->openAPINullablesSetToNull, 'original_inventory_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('original_inventory_name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['original_inventory_name'] = $original_inventory_name;

        return $this;
    }

    /**
     * Gets value
     *
     * @return string|null
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param string|null $value value
     *
     * @return self
     */
    public function setValue($value)
    {

        if (is_null($value)) {
            array_push($this->openAPINullablesSetToNull, 'value');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('value', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets original_inventory_value
     *
     * @return string|null
     */
    public function getOriginalInventoryValue()
    {
        return $this->container['original_inventory_value'];
    }

    /**
     * Sets original_inventory_value
     *
     * @param string|null $original_inventory_value original_inventory_value
     *
     * @return self
     */
    public function setOriginalInventoryValue($original_inventory_value)
    {

        if (is_null($original_inventory_value)) {
            array_push($this->openAPINullablesSetToNull, 'original_inventory_value');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('original_inventory_value', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['original_inventory_value'] = $original_inventory_value;

        return $this;
    }

    /**
     * Gets inventory_variant_id
     *
     * @return int|null
     */
    public function getInventoryVariantId()
    {
        return $this->container['inventory_variant_id'];
    }

    /**
     * Sets inventory_variant_id
     *
     * @param int|null $inventory_variant_id inventory_variant_id
     *
     * @return self
     */
    public function setInventoryVariantId($inventory_variant_id)
    {

        if (is_null($inventory_variant_id)) {
            array_push($this->openAPINullablesSetToNull, 'inventory_variant_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('inventory_variant_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['inventory_variant_id'] = $inventory_variant_id;

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


