<?php
/**
 * PropertyClaimPersonnel
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Xactimate One Customer Api
 *
 * The client claims API provides an integration point for Xactimate clients to create and manage insurance claims within the Xactimate One system.
 *
 * OpenAPI spec version: 0.1.2
 * Contact: contact@xactware.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.12
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
 * PropertyClaimPersonnel Class Doc Comment
 *
 * @category Class
 * @description People and entities related to the claim
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PropertyClaimPersonnel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PropertyClaimPersonnel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'personnel_type' => 'string',
        'name' => 'string',
        'address' => '\Swagger\Client\Model\PropertyClaimPersonnelAddress',
        'phone_numbers' => '\Swagger\Client\Model\PropertyClaimPersonnelPhoneNumbers[]',
        'emails' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'personnel_type' => null,
        'name' => null,
        'address' => null,
        'phone_numbers' => null,
        'emails' => 'email'
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
        'personnel_type' => 'personnelType',
        'name' => 'name',
        'address' => 'address',
        'phone_numbers' => 'phoneNumbers',
        'emails' => 'emails'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'personnel_type' => 'setPersonnelType',
        'name' => 'setName',
        'address' => 'setAddress',
        'phone_numbers' => 'setPhoneNumbers',
        'emails' => 'setEmails'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'personnel_type' => 'getPersonnelType',
        'name' => 'getName',
        'address' => 'getAddress',
        'phone_numbers' => 'getPhoneNumbers',
        'emails' => 'getEmails'
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

    const PERSONNEL_TYPE_CLAIM_REP = 'ClaimRep';
    const PERSONNEL_TYPE_AGENCY = 'Agency';
    const PERSONNEL_TYPE_PROPERTY_CONTACT = 'PropertyContact';
    const PERSONNEL_TYPE_REFERENCE = 'Reference';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPersonnelTypeAllowableValues()
    {
        return [
            self::PERSONNEL_TYPE_CLAIM_REP,
            self::PERSONNEL_TYPE_AGENCY,
            self::PERSONNEL_TYPE_PROPERTY_CONTACT,
            self::PERSONNEL_TYPE_REFERENCE,
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
        $this->container['personnel_type'] = isset($data['personnel_type']) ? $data['personnel_type'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['phone_numbers'] = isset($data['phone_numbers']) ? $data['phone_numbers'] : null;
        $this->container['emails'] = isset($data['emails']) ? $data['emails'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getPersonnelTypeAllowableValues();
        if (!is_null($this->container['personnel_type']) && !in_array($this->container['personnel_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'personnel_type', must be one of '%s'",
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
     * Gets personnel_type
     *
     * @return string
     */
    public function getPersonnelType()
    {
        return $this->container['personnel_type'];
    }

    /**
     * Sets personnel_type
     *
     * @param string $personnel_type The type of contact
     *
     * @return $this
     */
    public function setPersonnelType($personnel_type)
    {
        $allowedValues = $this->getPersonnelTypeAllowableValues();
        if (!is_null($personnel_type) && !in_array($personnel_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'personnel_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['personnel_type'] = $personnel_type;

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
     * @param string $name The personell contact name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets address
     *
     * @return \Swagger\Client\Model\PropertyClaimPersonnelAddress
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \Swagger\Client\Model\PropertyClaimPersonnelAddress $address address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets phone_numbers
     *
     * @return \Swagger\Client\Model\PropertyClaimPersonnelPhoneNumbers[]
     */
    public function getPhoneNumbers()
    {
        return $this->container['phone_numbers'];
    }

    /**
     * Sets phone_numbers
     *
     * @param \Swagger\Client\Model\PropertyClaimPersonnelPhoneNumbers[] $phone_numbers Phone numbers for the contact. The preferred phone number is the first in the list.
     *
     * @return $this
     */
    public function setPhoneNumbers($phone_numbers)
    {
        $this->container['phone_numbers'] = $phone_numbers;

        return $this;
    }

    /**
     * Gets emails
     *
     * @return string[]
     */
    public function getEmails()
    {
        return $this->container['emails'];
    }

    /**
     * Sets emails
     *
     * @param string[] $emails Email addresses for the contact. The preferred address is the first in the list.
     *
     * @return $this
     */
    public function setEmails($emails)
    {
        $this->container['emails'] = $emails;

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


