<?php
/**
 * TransactionModelAllOf
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
 * TransactionModelAllOf Class Doc Comment
 *
 * @category Class
 * @description Contains information about transaction.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class TransactionModelAllOf implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TransactionModel_allOf';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'order' => 'OneOfOrderInfoModel',
        'type' => 'OneOfTransactionTypeEnum',
        'amount' => 'float',
        'currency' => 'OneOfCurrencyModel',
        'payment_method' => 'OneOfPaymentMethodModel',
        'mid' => 'OneOfMidModel',
        'card3ds_version' => 'string',
        'card3ds_xid' => 'string',
        'card3ds_cavv' => 'string',
        'card3ds_eci' => 'string',
        'status' => 'OneOfTransactionStatusEnum',
        'original_id' => 'string',
        'original_status' => 'string',
        'original_status_text' => 'string',
        'logs' => '\OpenAPI\Client\Model\TransactionLogModel[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'order' => null,
        'type' => null,
        'amount' => 'decimal',
        'currency' => null,
        'payment_method' => null,
        'mid' => null,
        'card3ds_version' => null,
        'card3ds_xid' => null,
        'card3ds_cavv' => null,
        'card3ds_eci' => null,
        'status' => null,
        'original_id' => null,
        'original_status' => null,
        'original_status_text' => null,
        'logs' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'order' => true,
		'type' => true,
		'amount' => false,
		'currency' => true,
		'payment_method' => true,
		'mid' => true,
		'card3ds_version' => true,
		'card3ds_xid' => true,
		'card3ds_cavv' => true,
		'card3ds_eci' => true,
		'status' => true,
		'original_id' => true,
		'original_status' => true,
		'original_status_text' => true,
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
        'order' => 'order',
        'type' => 'type',
        'amount' => 'amount',
        'currency' => 'currency',
        'payment_method' => 'paymentMethod',
        'mid' => 'mid',
        'card3ds_version' => 'card3dsVersion',
        'card3ds_xid' => 'card3dsXid',
        'card3ds_cavv' => 'card3dsCavv',
        'card3ds_eci' => 'card3dsEci',
        'status' => 'status',
        'original_id' => 'originalId',
        'original_status' => 'originalStatus',
        'original_status_text' => 'originalStatusText',
        'logs' => 'logs'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'order' => 'setOrder',
        'type' => 'setType',
        'amount' => 'setAmount',
        'currency' => 'setCurrency',
        'payment_method' => 'setPaymentMethod',
        'mid' => 'setMid',
        'card3ds_version' => 'setCard3dsVersion',
        'card3ds_xid' => 'setCard3dsXid',
        'card3ds_cavv' => 'setCard3dsCavv',
        'card3ds_eci' => 'setCard3dsEci',
        'status' => 'setStatus',
        'original_id' => 'setOriginalId',
        'original_status' => 'setOriginalStatus',
        'original_status_text' => 'setOriginalStatusText',
        'logs' => 'setLogs'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'order' => 'getOrder',
        'type' => 'getType',
        'amount' => 'getAmount',
        'currency' => 'getCurrency',
        'payment_method' => 'getPaymentMethod',
        'mid' => 'getMid',
        'card3ds_version' => 'getCard3dsVersion',
        'card3ds_xid' => 'getCard3dsXid',
        'card3ds_cavv' => 'getCard3dsCavv',
        'card3ds_eci' => 'getCard3dsEci',
        'status' => 'getStatus',
        'original_id' => 'getOriginalId',
        'original_status' => 'getOriginalStatus',
        'original_status_text' => 'getOriginalStatusText',
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
        $this->setIfExists('order', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('payment_method', $data ?? [], null);
        $this->setIfExists('mid', $data ?? [], null);
        $this->setIfExists('card3ds_version', $data ?? [], null);
        $this->setIfExists('card3ds_xid', $data ?? [], null);
        $this->setIfExists('card3ds_cavv', $data ?? [], null);
        $this->setIfExists('card3ds_eci', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('original_id', $data ?? [], null);
        $this->setIfExists('original_status', $data ?? [], null);
        $this->setIfExists('original_status_text', $data ?? [], null);
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
     * Gets order
     *
     * @return OneOfOrderInfoModel|null
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param OneOfOrderInfoModel|null $order Transaction order.
     *
     * @return self
     */
    public function setOrder($order)
    {

        if (is_null($order)) {
            array_push($this->openAPINullablesSetToNull, 'order');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('order', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['order'] = $order;

        return $this;
    }

    /**
     * Gets type
     *
     * @return OneOfTransactionTypeEnum|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param OneOfTransactionTypeEnum|null $type Transaction type.
     *
     * @return self
     */
    public function setType($type)
    {

        if (is_null($type)) {
            array_push($this->openAPINullablesSetToNull, 'type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return float|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float|null $amount Transaction amount.
     *
     * @return self
     */
    public function setAmount($amount)
    {

        if (is_null($amount)) {
            throw new \InvalidArgumentException('non-nullable amount cannot be null');
        }

        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return OneOfCurrencyModel|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param OneOfCurrencyModel|null $currency Transaction currency.
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
     * Gets payment_method
     *
     * @return OneOfPaymentMethodModel|null
     */
    public function getPaymentMethod()
    {
        return $this->container['payment_method'];
    }

    /**
     * Sets payment_method
     *
     * @param OneOfPaymentMethodModel|null $payment_method Transaction payment method.
     *
     * @return self
     */
    public function setPaymentMethod($payment_method)
    {

        if (is_null($payment_method)) {
            array_push($this->openAPINullablesSetToNull, 'payment_method');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('payment_method', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['payment_method'] = $payment_method;

        return $this;
    }

    /**
     * Gets mid
     *
     * @return OneOfMidModel|null
     */
    public function getMid()
    {
        return $this->container['mid'];
    }

    /**
     * Sets mid
     *
     * @param OneOfMidModel|null $mid Last mid used for this payment method.
     *
     * @return self
     */
    public function setMid($mid)
    {

        if (is_null($mid)) {
            array_push($this->openAPINullablesSetToNull, 'mid');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('mid', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['mid'] = $mid;

        return $this;
    }

    /**
     * Gets card3ds_version
     *
     * @return string|null
     */
    public function getCard3dsVersion()
    {
        return $this->container['card3ds_version'];
    }

    /**
     * Sets card3ds_version
     *
     * @param string|null $card3ds_version For credit card payment: 3DS version used for authentication.
     *
     * @return self
     */
    public function setCard3dsVersion($card3ds_version)
    {

        if (is_null($card3ds_version)) {
            array_push($this->openAPINullablesSetToNull, 'card3ds_version');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('card3ds_version', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['card3ds_version'] = $card3ds_version;

        return $this;
    }

    /**
     * Gets card3ds_xid
     *
     * @return string|null
     */
    public function getCard3dsXid()
    {
        return $this->container['card3ds_xid'];
    }

    /**
     * Sets card3ds_xid
     *
     * @param string|null $card3ds_xid For credit card payment: 3DS transaction identifier.
     *
     * @return self
     */
    public function setCard3dsXid($card3ds_xid)
    {

        if (is_null($card3ds_xid)) {
            array_push($this->openAPINullablesSetToNull, 'card3ds_xid');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('card3ds_xid', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['card3ds_xid'] = $card3ds_xid;

        return $this;
    }

    /**
     * Gets card3ds_cavv
     *
     * @return string|null
     */
    public function getCard3dsCavv()
    {
        return $this->container['card3ds_cavv'];
    }

    /**
     * Sets card3ds_cavv
     *
     * @param string|null $card3ds_cavv For credit card payment: 3DS Cardholder Authentication Verification Value (CAVV).
     *
     * @return self
     */
    public function setCard3dsCavv($card3ds_cavv)
    {

        if (is_null($card3ds_cavv)) {
            array_push($this->openAPINullablesSetToNull, 'card3ds_cavv');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('card3ds_cavv', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['card3ds_cavv'] = $card3ds_cavv;

        return $this;
    }

    /**
     * Gets card3ds_eci
     *
     * @return string|null
     */
    public function getCard3dsEci()
    {
        return $this->container['card3ds_eci'];
    }

    /**
     * Sets card3ds_eci
     *
     * @param string|null $card3ds_eci For credit card payment: 3DS Electronic Commerce Indicator (ECI).
     *
     * @return self
     */
    public function setCard3dsEci($card3ds_eci)
    {

        if (is_null($card3ds_eci)) {
            array_push($this->openAPINullablesSetToNull, 'card3ds_eci');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('card3ds_eci', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['card3ds_eci'] = $card3ds_eci;

        return $this;
    }

    /**
     * Gets status
     *
     * @return OneOfTransactionStatusEnum|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param OneOfTransactionStatusEnum|null $status Transaction status.
     *
     * @return self
     */
    public function setStatus($status)
    {

        if (is_null($status)) {
            array_push($this->openAPINullablesSetToNull, 'status');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('status', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets original_id
     *
     * @return string|null
     */
    public function getOriginalId()
    {
        return $this->container['original_id'];
    }

    /**
     * Sets original_id
     *
     * @param string|null $original_id Original transaction ID (received from payment gateway).
     *
     * @return self
     */
    public function setOriginalId($original_id)
    {

        if (is_null($original_id)) {
            array_push($this->openAPINullablesSetToNull, 'original_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('original_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['original_id'] = $original_id;

        return $this;
    }

    /**
     * Gets original_status
     *
     * @return string|null
     */
    public function getOriginalStatus()
    {
        return $this->container['original_status'];
    }

    /**
     * Sets original_status
     *
     * @param string|null $original_status Original transaction status (received from payment gateway).
     *
     * @return self
     */
    public function setOriginalStatus($original_status)
    {

        if (is_null($original_status)) {
            array_push($this->openAPINullablesSetToNull, 'original_status');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('original_status', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['original_status'] = $original_status;

        return $this;
    }

    /**
     * Gets original_status_text
     *
     * @return string|null
     */
    public function getOriginalStatusText()
    {
        return $this->container['original_status_text'];
    }

    /**
     * Sets original_status_text
     *
     * @param string|null $original_status_text Original transaction status text (received from payment gateway).
     *
     * @return self
     */
    public function setOriginalStatusText($original_status_text)
    {

        if (is_null($original_status_text)) {
            array_push($this->openAPINullablesSetToNull, 'original_status_text');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('original_status_text', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['original_status_text'] = $original_status_text;

        return $this;
    }

    /**
     * Gets logs
     *
     * @return \OpenAPI\Client\Model\TransactionLogModel[]|null
     */
    public function getLogs()
    {
        return $this->container['logs'];
    }

    /**
     * Sets logs
     *
     * @param \OpenAPI\Client\Model\TransactionLogModel[]|null $logs Transaction logs.
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


