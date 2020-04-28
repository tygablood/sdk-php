<?php
/**
 * PropertyclaimsPolicyInfoCoverages
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
 * OpenAPI spec version: 0.1.11
 * Contact: contact@xactware.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.13
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
 * PropertyclaimsPolicyInfoCoverages Class Doc Comment
 *
 * @category Class
 * @description An insurance coverage
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PropertyclaimsPolicyInfoCoverages implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'propertyclaims_policyInfo_coverages';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'linked_coverage_ref' => 'string',
        'name' => 'string',
        'type' => 'string',
        'policy_limit' => 'float',
        'deductible' => 'float',
        'apply_to' => 'string',
        'itv' => 'float',
        'reserve' => 'float',
        'sublimits' => '\Swagger\Client\Model\PropertyclaimsPolicyInfoSublimits[]',
        'additional_coverages' => '\Swagger\Client\Model\PropertyclaimsPolicyInfoAdditionalCoverages[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'linked_coverage_ref' => 'uri',
        'name' => null,
        'type' => null,
        'policy_limit' => 'currency',
        'deductible' => 'currency',
        'apply_to' => null,
        'itv' => 'percent',
        'reserve' => null,
        'sublimits' => null,
        'additional_coverages' => null
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
        'linked_coverage_ref' => 'linkedCoverageRef',
        'name' => 'name',
        'type' => 'type',
        'policy_limit' => 'policyLimit',
        'deductible' => 'deductible',
        'apply_to' => 'applyTo',
        'itv' => 'itv',
        'reserve' => 'reserve',
        'sublimits' => 'sublimits',
        'additional_coverages' => 'additionalCoverages'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'linked_coverage_ref' => 'setLinkedCoverageRef',
        'name' => 'setName',
        'type' => 'setType',
        'policy_limit' => 'setPolicyLimit',
        'deductible' => 'setDeductible',
        'apply_to' => 'setApplyTo',
        'itv' => 'setItv',
        'reserve' => 'setReserve',
        'sublimits' => 'setSublimits',
        'additional_coverages' => 'setAdditionalCoverages'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'linked_coverage_ref' => 'getLinkedCoverageRef',
        'name' => 'getName',
        'type' => 'getType',
        'policy_limit' => 'getPolicyLimit',
        'deductible' => 'getDeductible',
        'apply_to' => 'getApplyTo',
        'itv' => 'getItv',
        'reserve' => 'getReserve',
        'sublimits' => 'getSublimits',
        'additional_coverages' => 'getAdditionalCoverages'
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

    const TYPE_STRUCTURAL = 'Structural';
    const TYPE_STRUCTURAL_AND_CONTENTS = 'StructuralAndContents';
    const APPLY_TO_ACV = 'ACV';
    const APPLY_TO_RCV = 'RCV';
    const APPLY_TO_BOTH = 'Both';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_STRUCTURAL,
            self::TYPE_STRUCTURAL_AND_CONTENTS,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getApplyToAllowableValues()
    {
        return [
            self::APPLY_TO_ACV,
            self::APPLY_TO_RCV,
            self::APPLY_TO_BOTH,
        ];
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
        $this->container['linked_coverage_ref'] = isset($data['linked_coverage_ref']) ? $data['linked_coverage_ref'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['policy_limit'] = isset($data['policy_limit']) ? $data['policy_limit'] : null;
        $this->container['deductible'] = isset($data['deductible']) ? $data['deductible'] : null;
        $this->container['apply_to'] = isset($data['apply_to']) ? $data['apply_to'] : null;
        $this->container['itv'] = isset($data['itv']) ? $data['itv'] : null;
        $this->container['reserve'] = isset($data['reserve']) ? $data['reserve'] : null;
        $this->container['sublimits'] = isset($data['sublimits']) ? $data['sublimits'] : null;
        $this->container['additional_coverages'] = isset($data['additional_coverages']) ? $data['additional_coverages'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getApplyToAllowableValues();
        if (!is_null($this->container['apply_to']) && !in_array($this->container['apply_to'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'apply_to', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets linked_coverage_ref
     *
     * @return string
     */
    public function getLinkedCoverageRef()
    {
        return $this->container['linked_coverage_ref'];
    }

    /**
     * Sets linked_coverage_ref
     *
     * @param string $linked_coverage_ref 
     *
     * @return $this
     */
    public function setLinkedCoverageRef($linked_coverage_ref)
    {
        $this->container['linked_coverage_ref'] = $linked_coverage_ref;

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
     * @param string $name The name of the coverage
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type The type of coverage provided
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets policy_limit
     *
     * @return float
     */
    public function getPolicyLimit()
    {
        return $this->container['policy_limit'];
    }

    /**
     * Sets policy_limit
     *
     * @param float $policy_limit The maximum value provided under this coverage
     *
     * @return $this
     */
    public function setPolicyLimit($policy_limit)
    {
        $this->container['policy_limit'] = $policy_limit;

        return $this;
    }

    /**
     * Gets deductible
     *
     * @return float
     */
    public function getDeductible()
    {
        return $this->container['deductible'];
    }

    /**
     * Sets deductible
     *
     * @param float $deductible The policy holder's financial liability under this coverage
     *
     * @return $this
     */
    public function setDeductible($deductible)
    {
        $this->container['deductible'] = $deductible;

        return $this;
    }

    /**
     * Gets apply_to
     *
     * @return string
     */
    public function getApplyTo()
    {
        return $this->container['apply_to'];
    }

    /**
     * Sets apply_to
     *
     * @param string $apply_to apply_to
     *
     * @return $this
     */
    public function setApplyTo($apply_to)
    {
        $allowedValues = $this->getApplyToAllowableValues();
        if (!is_null($apply_to) && !in_array($apply_to, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'apply_to', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['apply_to'] = $apply_to;

        return $this;
    }

    /**
     * Gets itv
     *
     * @return float
     */
    public function getItv()
    {
        return $this->container['itv'];
    }

    /**
     * Sets itv
     *
     * @param float $itv Insured to Value
     *
     * @return $this
     */
    public function setItv($itv)
    {
        $this->container['itv'] = $itv;

        return $this;
    }

    /**
     * Gets reserve
     *
     * @return float
     */
    public function getReserve()
    {
        return $this->container['reserve'];
    }

    /**
     * Sets reserve
     *
     * @param float $reserve 
     *
     * @return $this
     */
    public function setReserve($reserve)
    {
        $this->container['reserve'] = $reserve;

        return $this;
    }

    /**
     * Gets sublimits
     *
     * @return \Swagger\Client\Model\PropertyclaimsPolicyInfoSublimits[]
     */
    public function getSublimits()
    {
        return $this->container['sublimits'];
    }

    /**
     * Sets sublimits
     *
     * @param \Swagger\Client\Model\PropertyclaimsPolicyInfoSublimits[] $sublimits Additional sub limits to the coverage
     *
     * @return $this
     */
    public function setSublimits($sublimits)
    {
        $this->container['sublimits'] = $sublimits;

        return $this;
    }

    /**
     * Gets additional_coverages
     *
     * @return \Swagger\Client\Model\PropertyclaimsPolicyInfoAdditionalCoverages[]
     */
    public function getAdditionalCoverages()
    {
        return $this->container['additional_coverages'];
    }

    /**
     * Sets additional_coverages
     *
     * @param \Swagger\Client\Model\PropertyclaimsPolicyInfoAdditionalCoverages[] $additional_coverages Additonal coverages provided to the coverage
     *
     * @return $this
     */
    public function setAdditionalCoverages($additional_coverages)
    {
        $this->container['additional_coverages'] = $additional_coverages;

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


