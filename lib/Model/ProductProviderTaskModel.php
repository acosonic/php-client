<?php
/**
 * ProductProviderTaskModel
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
 * ProductProviderTaskModel Class Doc Comment
 *
 * @category Class
 * @description Contains information about product provider task.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ProductProviderTaskModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ProductProviderTaskModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'started_time_utc' => '\DateTime',
        'finished_time_utc' => '\DateTime',
        'total_seconds' => 'int',
        'estimated_remaining_seconds' => 'int',
        'estimated_finished_time_utc' => '\DateTime',
        'status' => '\OpenAPI\Client\Model\ProductProviderTaskModelStatus',
        'progress' => 'float',
        'state' => '\OpenAPI\Client\Model\ProductProviderTaskModelState',
        'updated_time_utc' => '\DateTime',
        'log_rows' => 'int',
        'logs' => '\OpenAPI\Client\Model\ProductProviderTaskLogModel[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'guid',
        'started_time_utc' => 'date-time',
        'finished_time_utc' => 'date-time',
        'total_seconds' => 'int32',
        'estimated_remaining_seconds' => 'int32',
        'estimated_finished_time_utc' => 'date-time',
        'status' => null,
        'progress' => 'decimal',
        'state' => null,
        'updated_time_utc' => 'date-time',
        'log_rows' => 'int32',
        'logs' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'started_time_utc' => false,
		'finished_time_utc' => true,
		'total_seconds' => true,
		'estimated_remaining_seconds' => true,
		'estimated_finished_time_utc' => true,
		'status' => false,
		'progress' => false,
		'state' => true,
		'updated_time_utc' => true,
		'log_rows' => false,
		'logs' => true
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
        'id' => 'id',
        'started_time_utc' => 'startedTimeUtc',
        'finished_time_utc' => 'finishedTimeUtc',
        'total_seconds' => 'totalSeconds',
        'estimated_remaining_seconds' => 'estimatedRemainingSeconds',
        'estimated_finished_time_utc' => 'estimatedFinishedTimeUtc',
        'status' => 'status',
        'progress' => 'progress',
        'state' => 'state',
        'updated_time_utc' => 'updatedTimeUtc',
        'log_rows' => 'logRows',
        'logs' => 'logs'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'started_time_utc' => 'setStartedTimeUtc',
        'finished_time_utc' => 'setFinishedTimeUtc',
        'total_seconds' => 'setTotalSeconds',
        'estimated_remaining_seconds' => 'setEstimatedRemainingSeconds',
        'estimated_finished_time_utc' => 'setEstimatedFinishedTimeUtc',
        'status' => 'setStatus',
        'progress' => 'setProgress',
        'state' => 'setState',
        'updated_time_utc' => 'setUpdatedTimeUtc',
        'log_rows' => 'setLogRows',
        'logs' => 'setLogs'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'started_time_utc' => 'getStartedTimeUtc',
        'finished_time_utc' => 'getFinishedTimeUtc',
        'total_seconds' => 'getTotalSeconds',
        'estimated_remaining_seconds' => 'getEstimatedRemainingSeconds',
        'estimated_finished_time_utc' => 'getEstimatedFinishedTimeUtc',
        'status' => 'getStatus',
        'progress' => 'getProgress',
        'state' => 'getState',
        'updated_time_utc' => 'getUpdatedTimeUtc',
        'log_rows' => 'getLogRows',
        'logs' => 'getLogs'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('started_time_utc', $data ?? [], null);
        $this->setIfExists('finished_time_utc', $data ?? [], null);
        $this->setIfExists('total_seconds', $data ?? [], null);
        $this->setIfExists('estimated_remaining_seconds', $data ?? [], null);
        $this->setIfExists('estimated_finished_time_utc', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('progress', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('updated_time_utc', $data ?? [], null);
        $this->setIfExists('log_rows', $data ?? [], null);
        $this->setIfExists('logs', $data ?? [], null);
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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id Task ID.
     *
     * @return self
     */
    public function setId($id)
    {

        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets started_time_utc
     *
     * @return \DateTime|null
     */
    public function getStartedTimeUtc()
    {
        return $this->container['started_time_utc'];
    }

    /**
     * Sets started_time_utc
     *
     * @param \DateTime|null $started_time_utc Time task has started.
     *
     * @return self
     */
    public function setStartedTimeUtc($started_time_utc)
    {

        if (is_null($started_time_utc)) {
            throw new \InvalidArgumentException('non-nullable started_time_utc cannot be null');
        }

        $this->container['started_time_utc'] = $started_time_utc;

        return $this;
    }

    /**
     * Gets finished_time_utc
     *
     * @return \DateTime|null
     */
    public function getFinishedTimeUtc()
    {
        return $this->container['finished_time_utc'];
    }

    /**
     * Sets finished_time_utc
     *
     * @param \DateTime|null $finished_time_utc Time task has finished.
     *
     * @return self
     */
    public function setFinishedTimeUtc($finished_time_utc)
    {

        if (is_null($finished_time_utc)) {
            array_push($this->openAPINullablesSetToNull, 'finished_time_utc');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('finished_time_utc', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['finished_time_utc'] = $finished_time_utc;

        return $this;
    }

    /**
     * Gets total_seconds
     *
     * @return int|null
     */
    public function getTotalSeconds()
    {
        return $this->container['total_seconds'];
    }

    /**
     * Sets total_seconds
     *
     * @param int|null $total_seconds Total time elapsed in seconds elapsed from start to finish,  or if task is still running then total time elapsed in seconds since the start of task.
     *
     * @return self
     */
    public function setTotalSeconds($total_seconds)
    {

        if (is_null($total_seconds)) {
            array_push($this->openAPINullablesSetToNull, 'total_seconds');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('total_seconds', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['total_seconds'] = $total_seconds;

        return $this;
    }

    /**
     * Gets estimated_remaining_seconds
     *
     * @return int|null
     */
    public function getEstimatedRemainingSeconds()
    {
        return $this->container['estimated_remaining_seconds'];
    }

    /**
     * Sets estimated_remaining_seconds
     *
     * @param int|null $estimated_remaining_seconds If task is not finished yet this will return estimated number of remaining seconds until task is complete.
     *
     * @return self
     */
    public function setEstimatedRemainingSeconds($estimated_remaining_seconds)
    {

        if (is_null($estimated_remaining_seconds)) {
            array_push($this->openAPINullablesSetToNull, 'estimated_remaining_seconds');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('estimated_remaining_seconds', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['estimated_remaining_seconds'] = $estimated_remaining_seconds;

        return $this;
    }

    /**
     * Gets estimated_finished_time_utc
     *
     * @return \DateTime|null
     */
    public function getEstimatedFinishedTimeUtc()
    {
        return $this->container['estimated_finished_time_utc'];
    }

    /**
     * Sets estimated_finished_time_utc
     *
     * @param \DateTime|null $estimated_finished_time_utc If task is not finished yet this will return estimated UTC time when task will finish.
     *
     * @return self
     */
    public function setEstimatedFinishedTimeUtc($estimated_finished_time_utc)
    {

        if (is_null($estimated_finished_time_utc)) {
            array_push($this->openAPINullablesSetToNull, 'estimated_finished_time_utc');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('estimated_finished_time_utc', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['estimated_finished_time_utc'] = $estimated_finished_time_utc;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \OpenAPI\Client\Model\ProductProviderTaskModelStatus|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \OpenAPI\Client\Model\ProductProviderTaskModelStatus|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {

        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }

        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets progress
     *
     * @return float|null
     */
    public function getProgress()
    {
        return $this->container['progress'];
    }

    /**
     * Sets progress
     *
     * @param float|null $progress Percentage of task progress.
     *
     * @return self
     */
    public function setProgress($progress)
    {

        if (is_null($progress)) {
            throw new \InvalidArgumentException('non-nullable progress cannot be null');
        }

        $this->container['progress'] = $progress;

        return $this;
    }

    /**
     * Gets state
     *
     * @return \OpenAPI\Client\Model\ProductProviderTaskModelState|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \OpenAPI\Client\Model\ProductProviderTaskModelState|null $state state
     *
     * @return self
     */
    public function setState($state)
    {

        if (is_null($state)) {
            array_push($this->openAPINullablesSetToNull, 'state');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('state', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets updated_time_utc
     *
     * @return \DateTime|null
     */
    public function getUpdatedTimeUtc()
    {
        return $this->container['updated_time_utc'];
    }

    /**
     * Sets updated_time_utc
     *
     * @param \DateTime|null $updated_time_utc Time when task was last updated.
     *
     * @return self
     */
    public function setUpdatedTimeUtc($updated_time_utc)
    {

        if (is_null($updated_time_utc)) {
            array_push($this->openAPINullablesSetToNull, 'updated_time_utc');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('updated_time_utc', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['updated_time_utc'] = $updated_time_utc;

        return $this;
    }

    /**
     * Gets log_rows
     *
     * @return int|null
     */
    public function getLogRows()
    {
        return $this->container['log_rows'];
    }

    /**
     * Sets log_rows
     *
     * @param int|null $log_rows Total log rows.
     *
     * @return self
     */
    public function setLogRows($log_rows)
    {

        if (is_null($log_rows)) {
            throw new \InvalidArgumentException('non-nullable log_rows cannot be null');
        }

        $this->container['log_rows'] = $log_rows;

        return $this;
    }

    /**
     * Gets logs
     *
     * @return \OpenAPI\Client\Model\ProductProviderTaskLogModel[]|null
     */
    public function getLogs()
    {
        return $this->container['logs'];
    }

    /**
     * Sets logs
     *
     * @param \OpenAPI\Client\Model\ProductProviderTaskLogModel[]|null $logs Task logs.
     *
     * @return self
     */
    public function setLogs($logs)
    {

        if (is_null($logs)) {
            array_push($this->openAPINullablesSetToNull, 'logs');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('logs', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['logs'] = $logs;

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


