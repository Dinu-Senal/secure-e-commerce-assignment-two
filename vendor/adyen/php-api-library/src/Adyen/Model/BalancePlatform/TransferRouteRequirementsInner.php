<?php

/**
 * Configuration API
 *
 * The version of the OpenAPI document: 2
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1
 *
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Adyen\Model\BalancePlatform;

use \ArrayAccess;
use Adyen\Model\BalancePlatform\ObjectSerializer;

/**
 * TransferRouteRequirementsInner Class Doc Comment
 *
 * @category Class
 * @package  Adyen
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class TransferRouteRequirementsInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TransferRoute_requirements_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'description' => 'string',
        'requiredAddressFields' => 'string[]',
        'type' => 'string',
        'max' => 'int',
        'min' => 'int',
        'bankAccountIdentificationTypes' => 'string[]',
        'issuingCountryCode' => 'string',
        'issuingCountryCodes' => 'string[]',
        'onlyForCrossBalancePlatform' => 'bool',
        'paymentInstrumentType' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'description' => null,
        'requiredAddressFields' => null,
        'type' => null,
        'max' => 'int64',
        'min' => 'int64',
        'bankAccountIdentificationTypes' => null,
        'issuingCountryCode' => null,
        'issuingCountryCodes' => null,
        'onlyForCrossBalancePlatform' => null,
        'paymentInstrumentType' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'description' => false,
        'requiredAddressFields' => false,
        'type' => false,
        'max' => false,
        'min' => false,
        'bankAccountIdentificationTypes' => false,
        'issuingCountryCode' => false,
        'issuingCountryCodes' => false,
        'onlyForCrossBalancePlatform' => false,
        'paymentInstrumentType' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected $openAPINullablesSetToNull = [];

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
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
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
        'description' => 'description',
        'requiredAddressFields' => 'requiredAddressFields',
        'type' => 'type',
        'max' => 'max',
        'min' => 'min',
        'bankAccountIdentificationTypes' => 'bankAccountIdentificationTypes',
        'issuingCountryCode' => 'issuingCountryCode',
        'issuingCountryCodes' => 'issuingCountryCodes',
        'onlyForCrossBalancePlatform' => 'onlyForCrossBalancePlatform',
        'paymentInstrumentType' => 'paymentInstrumentType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'description' => 'setDescription',
        'requiredAddressFields' => 'setRequiredAddressFields',
        'type' => 'setType',
        'max' => 'setMax',
        'min' => 'setMin',
        'bankAccountIdentificationTypes' => 'setBankAccountIdentificationTypes',
        'issuingCountryCode' => 'setIssuingCountryCode',
        'issuingCountryCodes' => 'setIssuingCountryCodes',
        'onlyForCrossBalancePlatform' => 'setOnlyForCrossBalancePlatform',
        'paymentInstrumentType' => 'setPaymentInstrumentType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'description' => 'getDescription',
        'requiredAddressFields' => 'getRequiredAddressFields',
        'type' => 'getType',
        'max' => 'getMax',
        'min' => 'getMin',
        'bankAccountIdentificationTypes' => 'getBankAccountIdentificationTypes',
        'issuingCountryCode' => 'getIssuingCountryCode',
        'issuingCountryCodes' => 'getIssuingCountryCodes',
        'onlyForCrossBalancePlatform' => 'getOnlyForCrossBalancePlatform',
        'paymentInstrumentType' => 'getPaymentInstrumentType'
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
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('requiredAddressFields', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('max', $data ?? [], null);
        $this->setIfExists('min', $data ?? [], null);
        $this->setIfExists('bankAccountIdentificationTypes', $data ?? [], null);
        $this->setIfExists('issuingCountryCode', $data ?? [], null);
        $this->setIfExists('issuingCountryCodes', $data ?? [], null);
        $this->setIfExists('onlyForCrossBalancePlatform', $data ?? [], null);
        $this->setIfExists('paymentInstrumentType', $data ?? [], null);
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

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
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
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description Specifies the requirements for the payment instrument that need to be included in the request for a particular route.
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets requiredAddressFields
     *
     * @return string[]|null
     */
    public function getRequiredAddressFields()
    {
        return $this->container['requiredAddressFields'];
    }

    /**
     * Sets requiredAddressFields
     *
     * @param string[]|null $requiredAddressFields List of address fields.
     *
     * @return self
     */
    public function setRequiredAddressFields($requiredAddressFields)
    {
        $this->container['requiredAddressFields'] = $requiredAddressFields;

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
     * @param string $type **paymentInstrumentRequirement**
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets max
     *
     * @return int|null
     */
    public function getMax()
    {
        return $this->container['max'];
    }

    /**
     * Sets max
     *
     * @param int|null $max Maximum amount.
     *
     * @return self
     */
    public function setMax($max)
    {
        $this->container['max'] = $max;

        return $this;
    }

    /**
     * Gets min
     *
     * @return int|null
     */
    public function getMin()
    {
        return $this->container['min'];
    }

    /**
     * Sets min
     *
     * @param int|null $min Minimum amount.
     *
     * @return self
     */
    public function setMin($min)
    {
        $this->container['min'] = $min;

        return $this;
    }

    /**
     * Gets bankAccountIdentificationTypes
     *
     * @return string[]|null
     */
    public function getBankAccountIdentificationTypes()
    {
        return $this->container['bankAccountIdentificationTypes'];
    }

    /**
     * Sets bankAccountIdentificationTypes
     *
     * @param string[]|null $bankAccountIdentificationTypes List of bank account identification types: eg.; [iban , numberAndBic]
     *
     * @return self
     */
    public function setBankAccountIdentificationTypes($bankAccountIdentificationTypes)
    {
        $this->container['bankAccountIdentificationTypes'] = $bankAccountIdentificationTypes;

        return $this;
    }

    /**
     * Gets issuingCountryCode
     *
     * @return string|null
     */
    public function getIssuingCountryCode()
    {
        return $this->container['issuingCountryCode'];
    }

    /**
     * Sets issuingCountryCode
     *
     * @param string|null $issuingCountryCode The two-character [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country code where the payment instrument is issued. For example, **NL** or **US**.
     *
     * @return self
     */
    public function setIssuingCountryCode($issuingCountryCode)
    {
        $this->container['issuingCountryCode'] = $issuingCountryCode;

        return $this;
    }

    /**
     * Gets issuingCountryCodes
     *
     * @return string[]|null
     */
    public function getIssuingCountryCodes()
    {
        return $this->container['issuingCountryCodes'];
    }

    /**
     * Sets issuingCountryCodes
     *
     * @param string[]|null $issuingCountryCodes The two-character ISO-3166-1 alpha-2 country code list for payment instruments.
     *
     * @return self
     */
    public function setIssuingCountryCodes($issuingCountryCodes)
    {
        $this->container['issuingCountryCodes'] = $issuingCountryCodes;

        return $this;
    }

    /**
     * Gets onlyForCrossBalancePlatform
     *
     * @return bool|null
     */
    public function getOnlyForCrossBalancePlatform()
    {
        return $this->container['onlyForCrossBalancePlatform'];
    }

    /**
     * Sets onlyForCrossBalancePlatform
     *
     * @param bool|null $onlyForCrossBalancePlatform Specifies if the requirement only applies to transfers to another balance platform.
     *
     * @return self
     */
    public function setOnlyForCrossBalancePlatform($onlyForCrossBalancePlatform)
    {
        $this->container['onlyForCrossBalancePlatform'] = $onlyForCrossBalancePlatform;

        return $this;
    }

    /**
     * Gets paymentInstrumentType
     *
     * @return string|null
     */
    public function getPaymentInstrumentType()
    {
        return $this->container['paymentInstrumentType'];
    }

    /**
     * Sets paymentInstrumentType
     *
     * @param string|null $paymentInstrumentType The type of the payment instrument. For example, \"BankAccount\" or \"Card\".
     *
     * @return self
     */
    public function setPaymentInstrumentType($paymentInstrumentType)
    {
        $this->container['paymentInstrumentType'] = $paymentInstrumentType;

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

    public function toArray(): array
    {
        $array = [];
        foreach (self::$openAPITypes as $propertyName => $propertyType) {
            $propertyValue = $this[$propertyName];
            if ($propertyValue !== null) {
                // Check if the property value is an object and has a toArray() method
                if (is_object($propertyValue) && method_exists($propertyValue, 'toArray')) {
                    $array[$propertyName] = $propertyValue->toArray();
                // Check if it's type datetime
                } elseif ($propertyValue instanceof \DateTime) {
                    $array[$propertyName] = $propertyValue->format(DATE_ATOM);
                // If it's an array type we should check whether it contains objects and if so call toArray method
                } elseif (is_array($propertyValue)) {
                    $array[$propertyName] = array_map(function ($item) {
                        return $item instanceof ModelInterface ? $item->toArray() : $item;
                    }, $propertyValue);
                } else {
                    // Otherwise, directly assign the property value to the array
                    $array[$propertyName] = $propertyValue;
                }
            }
        }
        return $array;
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
}
