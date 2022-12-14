<?php
/**
 * ProductProviderSettingsModelImport
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
 * ProductProviderSettingsModelImport Class Doc Comment
 *
 * @category Class
 * @description Settings for product import.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ProductProviderSettingsModelImport implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ProductProviderSettingsModel_import';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'download_images' => 'bool',
        'flxpoint_price_source' => '\OpenAPI\Client\Model\ProductProviderImportSettingsModelFlxpointPriceSource',
        'price_multiplier' => 'float',
        'update_fields' => '\OpenAPI\Client\Model\ProductProviderImportSettingsModelUpdateFields'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'download_images' => null,
        'flxpoint_price_source' => null,
        'price_multiplier' => 'decimal',
        'update_fields' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'download_images' => false,
		'flxpoint_price_source' => false,
		'price_multiplier' => false,
		'update_fields' => true
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
        'download_images' => 'downloadImages',
        'flxpoint_price_source' => 'flxpointPriceSource',
        'price_multiplier' => 'priceMultiplier',
        'update_fields' => 'updateFields'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'download_images' => 'setDownloadImages',
        'flxpoint_price_source' => 'setFlxpointPriceSource',
        'price_multiplier' => 'setPriceMultiplier',
        'update_fields' => 'setUpdateFields'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'download_images' => 'getDownloadImages',
        'flxpoint_price_source' => 'getFlxpointPriceSource',
        'price_multiplier' => 'getPriceMultiplier',
        'update_fields' => 'getUpdateFields'
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
        $this->setIfExists('download_images', $data ?? [], true);
        $this->setIfExists('flxpoint_price_source', $data ?? [], null);
        $this->setIfExists('price_multiplier', $data ?? [], 1.2);
        $this->setIfExists('update_fields', $data ?? [], null);
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
     * Gets download_images
     *
     * @return bool|null
     */
    public function getDownloadImages()
    {
        return $this->container['download_images'];
    }

    /**
     * Sets download_images
     *
     * @param bool|null $download_images Indicates if images will be downloaded or just linked to original image.
     *
     * @return self
     */
    public function setDownloadImages($download_images)
    {

        if (is_null($download_images)) {
            throw new \InvalidArgumentException('non-nullable download_images cannot be null');
        }

        $this->container['download_images'] = $download_images;

        return $this;
    }

    /**
     * Gets flxpoint_price_source
     *
     * @return \OpenAPI\Client\Model\ProductProviderImportSettingsModelFlxpointPriceSource|null
     */
    public function getFlxpointPriceSource()
    {
        return $this->container['flxpoint_price_source'];
    }

    /**
     * Sets flxpoint_price_source
     *
     * @param \OpenAPI\Client\Model\ProductProviderImportSettingsModelFlxpointPriceSource|null $flxpoint_price_source flxpoint_price_source
     *
     * @return self
     */
    public function setFlxpointPriceSource($flxpoint_price_source)
    {

        if (is_null($flxpoint_price_source)) {
            throw new \InvalidArgumentException('non-nullable flxpoint_price_source cannot be null');
        }

        $this->container['flxpoint_price_source'] = $flxpoint_price_source;

        return $this;
    }

    /**
     * Gets price_multiplier
     *
     * @return float|null
     */
    public function getPriceMultiplier()
    {
        return $this->container['price_multiplier'];
    }

    /**
     * Sets price_multiplier
     *
     * @param float|null $price_multiplier Price multiplier.
     *
     * @return self
     */
    public function setPriceMultiplier($price_multiplier)
    {

        if (is_null($price_multiplier)) {
            throw new \InvalidArgumentException('non-nullable price_multiplier cannot be null');
        }

        $this->container['price_multiplier'] = $price_multiplier;

        return $this;
    }

    /**
     * Gets update_fields
     *
     * @return \OpenAPI\Client\Model\ProductProviderImportSettingsModelUpdateFields|null
     */
    public function getUpdateFields()
    {
        return $this->container['update_fields'];
    }

    /**
     * Sets update_fields
     *
     * @param \OpenAPI\Client\Model\ProductProviderImportSettingsModelUpdateFields|null $update_fields update_fields
     *
     * @return self
     */
    public function setUpdateFields($update_fields)
    {

        if (is_null($update_fields)) {
            array_push($this->openAPINullablesSetToNull, 'update_fields');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('update_fields', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['update_fields'] = $update_fields;

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


