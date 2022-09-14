<?php
/**
 * CategorySearchQueryForCRM
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
 * CategorySearchQueryForCRM Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CategorySearchQueryForCRM implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CategorySearchQueryForCRM';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'sort' => 'string',
        'page' => 'int',
        'page_size' => 'int',
        'max_item_count' => 'int',
        'text' => 'string',
        'created_time' => 'OneOfSearchQueryRangeOfDateOnly',
        'updated_time' => 'OneOfSearchQueryRangeOfDateOnly',
        'deleted_status' => 'OneOfEntitySearchQueryDeletedStatus',
        'enabled_status' => 'OneOfEntitySearchQueryEnabledStatus',
        'category_id' => 'string',
        'parent_id' => 'string',
        'include_attributes' => 'OneOfIncludeEntitiesEnum',
        'include_attribute_values' => 'OneOfIncludeEntitiesEnum'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'sort' => null,
        'page' => 'int32',
        'page_size' => 'int32',
        'max_item_count' => 'int32',
        'text' => null,
        'created_time' => null,
        'updated_time' => null,
        'deleted_status' => null,
        'enabled_status' => null,
        'category_id' => 'guid',
        'parent_id' => 'guid',
        'include_attributes' => null,
        'include_attribute_values' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'sort' => true,
		'page' => true,
		'page_size' => true,
		'max_item_count' => true,
		'text' => true,
		'created_time' => true,
		'updated_time' => true,
		'deleted_status' => true,
		'enabled_status' => true,
		'category_id' => true,
		'parent_id' => true,
		'include_attributes' => true,
		'include_attribute_values' => true
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
        'sort' => 'sort',
        'page' => 'page',
        'page_size' => 'pageSize',
        'max_item_count' => 'maxItemCount',
        'text' => 'text',
        'created_time' => 'createdTime',
        'updated_time' => 'updatedTime',
        'deleted_status' => 'deletedStatus',
        'enabled_status' => 'enabledStatus',
        'category_id' => 'categoryId',
        'parent_id' => 'parentId',
        'include_attributes' => 'includeAttributes',
        'include_attribute_values' => 'includeAttributeValues'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sort' => 'setSort',
        'page' => 'setPage',
        'page_size' => 'setPageSize',
        'max_item_count' => 'setMaxItemCount',
        'text' => 'setText',
        'created_time' => 'setCreatedTime',
        'updated_time' => 'setUpdatedTime',
        'deleted_status' => 'setDeletedStatus',
        'enabled_status' => 'setEnabledStatus',
        'category_id' => 'setCategoryId',
        'parent_id' => 'setParentId',
        'include_attributes' => 'setIncludeAttributes',
        'include_attribute_values' => 'setIncludeAttributeValues'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sort' => 'getSort',
        'page' => 'getPage',
        'page_size' => 'getPageSize',
        'max_item_count' => 'getMaxItemCount',
        'text' => 'getText',
        'created_time' => 'getCreatedTime',
        'updated_time' => 'getUpdatedTime',
        'deleted_status' => 'getDeletedStatus',
        'enabled_status' => 'getEnabledStatus',
        'category_id' => 'getCategoryId',
        'parent_id' => 'getParentId',
        'include_attributes' => 'getIncludeAttributes',
        'include_attribute_values' => 'getIncludeAttributeValues'
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
        $this->setIfExists('sort', $data ?? [], null);
        $this->setIfExists('page', $data ?? [], null);
        $this->setIfExists('page_size', $data ?? [], null);
        $this->setIfExists('max_item_count', $data ?? [], null);
        $this->setIfExists('text', $data ?? [], null);
        $this->setIfExists('created_time', $data ?? [], null);
        $this->setIfExists('updated_time', $data ?? [], null);
        $this->setIfExists('deleted_status', $data ?? [], null);
        $this->setIfExists('enabled_status', $data ?? [], null);
        $this->setIfExists('category_id', $data ?? [], null);
        $this->setIfExists('parent_id', $data ?? [], null);
        $this->setIfExists('include_attributes', $data ?? [], null);
        $this->setIfExists('include_attribute_values', $data ?? [], null);
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

        if (!is_null($this->container['sort']) && (mb_strlen($this->container['sort']) > 200)) {
            $invalidProperties[] = "invalid value for 'sort', the character length must be smaller than or equal to 200.";
        }

        if (!is_null($this->container['sort']) && (mb_strlen($this->container['sort']) < 0)) {
            $invalidProperties[] = "invalid value for 'sort', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['page']) && ($this->container['page'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'page', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['page']) && ($this->container['page'] < 1)) {
            $invalidProperties[] = "invalid value for 'page', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['page_size']) && ($this->container['page_size'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'page_size', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['page_size']) && ($this->container['page_size'] < 1)) {
            $invalidProperties[] = "invalid value for 'page_size', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['max_item_count']) && ($this->container['max_item_count'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'max_item_count', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['max_item_count']) && ($this->container['max_item_count'] < 1)) {
            $invalidProperties[] = "invalid value for 'max_item_count', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['text']) && (mb_strlen($this->container['text']) > 200)) {
            $invalidProperties[] = "invalid value for 'text', the character length must be smaller than or equal to 200.";
        }

        if (!is_null($this->container['text']) && (mb_strlen($this->container['text']) < 0)) {
            $invalidProperties[] = "invalid value for 'text', the character length must be bigger than or equal to 0.";
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
     * Gets sort
     *
     * @return string|null
     */
    public function getSort()
    {
        return $this->container['sort'];
    }

    /**
     * Sets sort
     *
     * @param string|null $sort Sorting criteria in format \"[+|-]property[,...]\".
     *
     * @return self
     */
    public function setSort($sort)
    {
        if (!is_null($sort) && (mb_strlen($sort) > 200)) {
            throw new \InvalidArgumentException('invalid length for $sort when calling CategorySearchQueryForCRM., must be smaller than or equal to 200.');
        }
        if (!is_null($sort) && (mb_strlen($sort) < 0)) {
            throw new \InvalidArgumentException('invalid length for $sort when calling CategorySearchQueryForCRM., must be bigger than or equal to 0.');
        }


        if (is_null($sort)) {
            array_push($this->openAPINullablesSetToNull, 'sort');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('sort', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['sort'] = $sort;

        return $this;
    }

    /**
     * Gets page
     *
     * @return int|null
     */
    public function getPage()
    {
        return $this->container['page'];
    }

    /**
     * Sets page
     *
     * @param int|null $page One-based index of the page to return.
     *
     * @return self
     */
    public function setPage($page)
    {

        if (!is_null($page) && ($page > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $page when calling CategorySearchQueryForCRM., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($page) && ($page < 1)) {
            throw new \InvalidArgumentException('invalid value for $page when calling CategorySearchQueryForCRM., must be bigger than or equal to 1.');
        }


        if (is_null($page)) {
            array_push($this->openAPINullablesSetToNull, 'page');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('page', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['page'] = $page;

        return $this;
    }

    /**
     * Gets page_size
     *
     * @return int|null
     */
    public function getPageSize()
    {
        return $this->container['page_size'];
    }

    /**
     * Sets page_size
     *
     * @param int|null $page_size The maximum number of items to return. The maximum value is 50.
     *
     * @return self
     */
    public function setPageSize($page_size)
    {

        if (!is_null($page_size) && ($page_size > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $page_size when calling CategorySearchQueryForCRM., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($page_size) && ($page_size < 1)) {
            throw new \InvalidArgumentException('invalid value for $page_size when calling CategorySearchQueryForCRM., must be bigger than or equal to 1.');
        }


        if (is_null($page_size)) {
            array_push($this->openAPINullablesSetToNull, 'page_size');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('page_size', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['page_size'] = $page_size;

        return $this;
    }

    /**
     * Gets max_item_count
     *
     * @return int|null
     */
    public function getMaxItemCount()
    {
        return $this->container['max_item_count'];
    }

    /**
     * Sets max_item_count
     *
     * @param int|null $max_item_count The maximum number of items to return in non-paged mode.
     *
     * @return self
     */
    public function setMaxItemCount($max_item_count)
    {

        if (!is_null($max_item_count) && ($max_item_count > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $max_item_count when calling CategorySearchQueryForCRM., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($max_item_count) && ($max_item_count < 1)) {
            throw new \InvalidArgumentException('invalid value for $max_item_count when calling CategorySearchQueryForCRM., must be bigger than or equal to 1.');
        }


        if (is_null($max_item_count)) {
            array_push($this->openAPINullablesSetToNull, 'max_item_count');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('max_item_count', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['max_item_count'] = $max_item_count;

        return $this;
    }

    /**
     * Gets text
     *
     * @return string|null
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     *
     * @param string|null $text Text to search.
     *
     * @return self
     */
    public function setText($text)
    {
        if (!is_null($text) && (mb_strlen($text) > 200)) {
            throw new \InvalidArgumentException('invalid length for $text when calling CategorySearchQueryForCRM., must be smaller than or equal to 200.');
        }
        if (!is_null($text) && (mb_strlen($text) < 0)) {
            throw new \InvalidArgumentException('invalid length for $text when calling CategorySearchQueryForCRM., must be bigger than or equal to 0.');
        }


        if (is_null($text)) {
            array_push($this->openAPINullablesSetToNull, 'text');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('text', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['text'] = $text;

        return $this;
    }

    /**
     * Gets created_time
     *
     * @return OneOfSearchQueryRangeOfDateOnly|null
     */
    public function getCreatedTime()
    {
        return $this->container['created_time'];
    }

    /**
     * Sets created_time
     *
     * @param OneOfSearchQueryRangeOfDateOnly|null $created_time A time range for entry creation time.
     *
     * @return self
     */
    public function setCreatedTime($created_time)
    {

        if (is_null($created_time)) {
            array_push($this->openAPINullablesSetToNull, 'created_time');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('created_time', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['created_time'] = $created_time;

        return $this;
    }

    /**
     * Gets updated_time
     *
     * @return OneOfSearchQueryRangeOfDateOnly|null
     */
    public function getUpdatedTime()
    {
        return $this->container['updated_time'];
    }

    /**
     * Sets updated_time
     *
     * @param OneOfSearchQueryRangeOfDateOnly|null $updated_time A time range for entry last update time.
     *
     * @return self
     */
    public function setUpdatedTime($updated_time)
    {

        if (is_null($updated_time)) {
            array_push($this->openAPINullablesSetToNull, 'updated_time');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('updated_time', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['updated_time'] = $updated_time;

        return $this;
    }

    /**
     * Gets deleted_status
     *
     * @return OneOfEntitySearchQueryDeletedStatus|null
     */
    public function getDeletedStatus()
    {
        return $this->container['deleted_status'];
    }

    /**
     * Sets deleted_status
     *
     * @param OneOfEntitySearchQueryDeletedStatus|null $deleted_status Indicates if to search existing, deleted or all entities.
     *
     * @return self
     */
    public function setDeletedStatus($deleted_status)
    {

        if (is_null($deleted_status)) {
            array_push($this->openAPINullablesSetToNull, 'deleted_status');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('deleted_status', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['deleted_status'] = $deleted_status;

        return $this;
    }

    /**
     * Gets enabled_status
     *
     * @return OneOfEntitySearchQueryEnabledStatus|null
     */
    public function getEnabledStatus()
    {
        return $this->container['enabled_status'];
    }

    /**
     * Sets enabled_status
     *
     * @param OneOfEntitySearchQueryEnabledStatus|null $enabled_status Indicates if to search enabled, disabled or all entities.
     *
     * @return self
     */
    public function setEnabledStatus($enabled_status)
    {

        if (is_null($enabled_status)) {
            array_push($this->openAPINullablesSetToNull, 'enabled_status');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('enabled_status', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['enabled_status'] = $enabled_status;

        return $this;
    }

    /**
     * Gets category_id
     *
     * @return string|null
     */
    public function getCategoryId()
    {
        return $this->container['category_id'];
    }

    /**
     * Sets category_id
     *
     * @param string|null $category_id Returns all categories that belong in specified category tree.
     *
     * @return self
     */
    public function setCategoryId($category_id)
    {

        if (is_null($category_id)) {
            array_push($this->openAPINullablesSetToNull, 'category_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('category_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['category_id'] = $category_id;

        return $this;
    }

    /**
     * Gets parent_id
     *
     * @return string|null
     */
    public function getParentId()
    {
        return $this->container['parent_id'];
    }

    /**
     * Sets parent_id
     *
     * @param string|null $parent_id Returns categories that belong to specific parent.
     *
     * @return self
     */
    public function setParentId($parent_id)
    {

        if (is_null($parent_id)) {
            array_push($this->openAPINullablesSetToNull, 'parent_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('parent_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['parent_id'] = $parent_id;

        return $this;
    }

    /**
     * Gets include_attributes
     *
     * @return OneOfIncludeEntitiesEnum|null
     */
    public function getIncludeAttributes()
    {
        return $this->container['include_attributes'];
    }

    /**
     * Sets include_attributes
     *
     * @param OneOfIncludeEntitiesEnum|null $include_attributes Include attributes with categories.
     *
     * @return self
     */
    public function setIncludeAttributes($include_attributes)
    {

        if (is_null($include_attributes)) {
            array_push($this->openAPINullablesSetToNull, 'include_attributes');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('include_attributes', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['include_attributes'] = $include_attributes;

        return $this;
    }

    /**
     * Gets include_attribute_values
     *
     * @return OneOfIncludeEntitiesEnum|null
     */
    public function getIncludeAttributeValues()
    {
        return $this->container['include_attribute_values'];
    }

    /**
     * Sets include_attribute_values
     *
     * @param OneOfIncludeEntitiesEnum|null $include_attribute_values Include attribute values with category attributes.
     *
     * @return self
     */
    public function setIncludeAttributeValues($include_attribute_values)
    {

        if (is_null($include_attribute_values)) {
            array_push($this->openAPINullablesSetToNull, 'include_attribute_values');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('include_attribute_values', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['include_attribute_values'] = $include_attribute_values;

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


