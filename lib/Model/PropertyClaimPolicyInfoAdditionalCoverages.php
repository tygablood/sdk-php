<?php
/**
 * PropertyClaimPolicyInfoAdditionalCoverages
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Xactimate One API
 *
 * # Introduction  The Xactimate One API allows you to integrate your current services and applications directly with Xactimate One. It creates a seamless experience for your company as it manages claims with your internal software by sending and receiving data from the Xactimate One platform.  This API uses a modern <a href=\"https://en.wikipedia.org/wiki/Representational_state_transfer\" target=\"_blank\">REST</a> architectural style that follows <a href=\"https://en.wikipedia.org/wiki/HATEOAS\" target=\"_blank\">HATEOAS</a> principles. It also includes the following features:  - Uses predictable resource-oriented URLs - Accepts JSON-encoded request bodies - Returns JSON-encoded responses - Uses standard HTTP response codes, authentication, and methods/verbs
 *
 * OpenAPI spec version: 0.1.224
 * Contact: contact@xactware.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.18
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * PropertyClaimPolicyInfoAdditionalCoverages Class Doc Comment
 *
 * @category Class
 * @description Additional coverage
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PropertyClaimPolicyInfoAdditionalCoverages implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PropertyClaimPolicyInfo_additionalCoverages';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'linked_additional_coverage_ref' => 'string',
        'name' => 'string',
        'single_class_limit' => 'float',
        'aggregate_class_limit' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'linked_additional_coverage_ref' => 'uri',
        'name' => null,
        'single_class_limit' => 'currency',
        'aggregate_class_limit' => 'currency'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'linked_additional_coverage_ref' => 'linkedAdditionalCoverageRef',
        'name' => 'name',
        'single_class_limit' => 'singleClassLimit',
        'aggregate_class_limit' => 'aggregateClassLimit'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'linked_additional_coverage_ref' => 'setLinkedAdditionalCoverageRef',
        'name' => 'setName',
        'single_class_limit' => 'setSingleClassLimit',
        'aggregate_class_limit' => 'setAggregateClassLimit'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'linked_additional_coverage_ref' => 'getLinkedAdditionalCoverageRef',
        'name' => 'getName',
        'single_class_limit' => 'getSingleClassLimit',
        'aggregate_class_limit' => 'getAggregateClassLimit'
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
        return self::$swaggerModelName;
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
        $this->container['linked_additional_coverage_ref'] = isset($data['linked_additional_coverage_ref']) ? $data['linked_additional_coverage_ref'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['single_class_limit'] = isset($data['single_class_limit']) ? $data['single_class_limit'] : null;
        $this->container['aggregate_class_limit'] = isset($data['aggregate_class_limit']) ? $data['aggregate_class_limit'] : null;
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
     * Gets linked_additional_coverage_ref
     *
     * @return string
     */
    public function getLinkedAdditionalCoverageRef()
    {
        return $this->container['linked_additional_coverage_ref'];
    }

    /**
     * Sets linked_additional_coverage_ref
     *
     * @param string $linked_additional_coverage_ref 
     *
     * @return $this
     */
    public function setLinkedAdditionalCoverageRef($linked_additional_coverage_ref)
    {
        $this->container['linked_additional_coverage_ref'] = $linked_additional_coverage_ref;

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
     * @param string $name The name of the additional coverage
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets single_class_limit
     *
     * @return float
     */
    public function getSingleClassLimit()
    {
        return $this->container['single_class_limit'];
    }

    /**
     * Sets single_class_limit
     *
     * @param float $single_class_limit 
     *
     * @return $this
     */
    public function setSingleClassLimit($single_class_limit)
    {
        $this->container['single_class_limit'] = $single_class_limit;

        return $this;
    }

    /**
     * Gets aggregate_class_limit
     *
     * @return float
     */
    public function getAggregateClassLimit()
    {
        return $this->container['aggregate_class_limit'];
    }

    /**
     * Sets aggregate_class_limit
     *
     * @param float $aggregate_class_limit 
     *
     * @return $this
     */
    public function setAggregateClassLimit($aggregate_class_limit)
    {
        $this->container['aggregate_class_limit'] = $aggregate_class_limit;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


