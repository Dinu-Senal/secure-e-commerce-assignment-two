<?php

/**
 * Adyen Payout API
 *
 * The version of the OpenAPI document: 68
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1
 *
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Adyen\Model\Payout;

use \ArrayAccess;
use Adyen\Model\Payout\ObjectSerializer;

/**
 * SubmitRequest Class Doc Comment
 *
 * @category Class
 * @package  Adyen
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SubmitRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SubmitRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'additionalData' => 'array<string,string>',
        'amount' => '\Adyen\Model\Payout\Amount',
        'dateOfBirth' => '\DateTime',
        'entityType' => 'string',
        'fraudOffset' => 'int',
        'merchantAccount' => 'string',
        'nationality' => 'string',
        'recurring' => '\Adyen\Model\Payout\Recurring',
        'reference' => 'string',
        'selectedRecurringDetailReference' => 'string',
        'shopperEmail' => 'string',
        'shopperName' => '\Adyen\Model\Payout\Name',
        'shopperReference' => 'string',
        'shopperStatement' => 'string',
        'socialSecurityNumber' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'additionalData' => null,
        'amount' => null,
        'dateOfBirth' => 'date',
        'entityType' => null,
        'fraudOffset' => 'int32',
        'merchantAccount' => null,
        'nationality' => null,
        'recurring' => null,
        'reference' => null,
        'selectedRecurringDetailReference' => null,
        'shopperEmail' => null,
        'shopperName' => null,
        'shopperReference' => null,
        'shopperStatement' => null,
        'socialSecurityNumber' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'additionalData' => false,
        'amount' => false,
        'dateOfBirth' => false,
        'entityType' => false,
        'fraudOffset' => true,
        'merchantAccount' => false,
        'nationality' => false,
        'recurring' => false,
        'reference' => false,
        'selectedRecurringDetailReference' => false,
        'shopperEmail' => false,
        'shopperName' => false,
        'shopperReference' => false,
        'shopperStatement' => false,
        'socialSecurityNumber' => false
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
        'additionalData' => 'additionalData',
        'amount' => 'amount',
        'dateOfBirth' => 'dateOfBirth',
        'entityType' => 'entityType',
        'fraudOffset' => 'fraudOffset',
        'merchantAccount' => 'merchantAccount',
        'nationality' => 'nationality',
        'recurring' => 'recurring',
        'reference' => 'reference',
        'selectedRecurringDetailReference' => 'selectedRecurringDetailReference',
        'shopperEmail' => 'shopperEmail',
        'shopperName' => 'shopperName',
        'shopperReference' => 'shopperReference',
        'shopperStatement' => 'shopperStatement',
        'socialSecurityNumber' => 'socialSecurityNumber'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'additionalData' => 'setAdditionalData',
        'amount' => 'setAmount',
        'dateOfBirth' => 'setDateOfBirth',
        'entityType' => 'setEntityType',
        'fraudOffset' => 'setFraudOffset',
        'merchantAccount' => 'setMerchantAccount',
        'nationality' => 'setNationality',
        'recurring' => 'setRecurring',
        'reference' => 'setReference',
        'selectedRecurringDetailReference' => 'setSelectedRecurringDetailReference',
        'shopperEmail' => 'setShopperEmail',
        'shopperName' => 'setShopperName',
        'shopperReference' => 'setShopperReference',
        'shopperStatement' => 'setShopperStatement',
        'socialSecurityNumber' => 'setSocialSecurityNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'additionalData' => 'getAdditionalData',
        'amount' => 'getAmount',
        'dateOfBirth' => 'getDateOfBirth',
        'entityType' => 'getEntityType',
        'fraudOffset' => 'getFraudOffset',
        'merchantAccount' => 'getMerchantAccount',
        'nationality' => 'getNationality',
        'recurring' => 'getRecurring',
        'reference' => 'getReference',
        'selectedRecurringDetailReference' => 'getSelectedRecurringDetailReference',
        'shopperEmail' => 'getShopperEmail',
        'shopperName' => 'getShopperName',
        'shopperReference' => 'getShopperReference',
        'shopperStatement' => 'getShopperStatement',
        'socialSecurityNumber' => 'getSocialSecurityNumber'
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

    public const ENTITY_TYPE_NATURAL_PERSON = 'NaturalPerson';
    public const ENTITY_TYPE_COMPANY = 'Company';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEntityTypeAllowableValues()
    {
        return [
            self::ENTITY_TYPE_NATURAL_PERSON,
            self::ENTITY_TYPE_COMPANY,
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
        $this->setIfExists('additionalData', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('dateOfBirth', $data ?? [], null);
        $this->setIfExists('entityType', $data ?? [], null);
        $this->setIfExists('fraudOffset', $data ?? [], null);
        $this->setIfExists('merchantAccount', $data ?? [], null);
        $this->setIfExists('nationality', $data ?? [], null);
        $this->setIfExists('recurring', $data ?? [], null);
        $this->setIfExists('reference', $data ?? [], null);
        $this->setIfExists('selectedRecurringDetailReference', $data ?? [], null);
        $this->setIfExists('shopperEmail', $data ?? [], null);
        $this->setIfExists('shopperName', $data ?? [], null);
        $this->setIfExists('shopperReference', $data ?? [], null);
        $this->setIfExists('shopperStatement', $data ?? [], null);
        $this->setIfExists('socialSecurityNumber', $data ?? [], null);
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

        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        $allowedValues = $this->getEntityTypeAllowableValues();
        if (!is_null($this->container['entityType']) && !in_array($this->container['entityType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'entityType', must be one of '%s'",
                $this->container['entityType'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['merchantAccount'] === null) {
            $invalidProperties[] = "'merchantAccount' can't be null";
        }
        if ($this->container['recurring'] === null) {
            $invalidProperties[] = "'recurring' can't be null";
        }
        if ($this->container['reference'] === null) {
            $invalidProperties[] = "'reference' can't be null";
        }
        if ($this->container['selectedRecurringDetailReference'] === null) {
            $invalidProperties[] = "'selectedRecurringDetailReference' can't be null";
        }
        if ($this->container['shopperEmail'] === null) {
            $invalidProperties[] = "'shopperEmail' can't be null";
        }
        if ($this->container['shopperReference'] === null) {
            $invalidProperties[] = "'shopperReference' can't be null";
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
     * Gets additionalData
     *
     * @return array<string,string>|null
     */
    public function getAdditionalData()
    {
        return $this->container['additionalData'];
    }

    /**
     * Sets additionalData
     *
     * @param array<string,string>|null $additionalData This field contains additional data, which may be required for a particular request.
     *
     * @return self
     */
    public function setAdditionalData($additionalData)
    {
        $this->container['additionalData'] = $additionalData;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return \Adyen\Model\Payout\Amount
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param \Adyen\Model\Payout\Amount $amount amount
     *
     * @return self
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets dateOfBirth
     *
     * @return \DateTime|null
     */
    public function getDateOfBirth()
    {
        return $this->container['dateOfBirth'];
    }

    /**
     * Sets dateOfBirth
     *
     * @param \DateTime|null $dateOfBirth The date of birth. Format: ISO-8601; example: YYYY-MM-DD  For Paysafecard it must be the same as used when registering the Paysafecard account.  > This field is mandatory for natural persons.  > This field is required to update the existing `dateOfBirth` that is associated with this recurring contract.
     *
     * @return self
     */
    public function setDateOfBirth($dateOfBirth)
    {
        $this->container['dateOfBirth'] = $dateOfBirth;

        return $this;
    }

    /**
     * Gets entityType
     *
     * @return string|null
     */
    public function getEntityType()
    {
        return $this->container['entityType'];
    }

    /**
     * Sets entityType
     *
     * @param string|null $entityType The type of the entity the payout is processed for.  Allowed values: * NaturalPerson * Company > This field is required to update the existing `entityType` that is associated with this recurring contract.
     *
     * @return self
     */
    public function setEntityType($entityType)
    {
        $allowedValues = $this->getEntityTypeAllowableValues();
        if (!in_array($entityType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'entityType', must be one of '%s'",
                    $entityType,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['entityType'] = $entityType;

        return $this;
    }

    /**
     * Gets fraudOffset
     *
     * @return int|null
     */
    public function getFraudOffset()
    {
        return $this->container['fraudOffset'];
    }

    /**
     * Sets fraudOffset
     *
     * @param int|null $fraudOffset An integer value that is added to the normal fraud score. The value can be either positive or negative.
     *
     * @return self
     */
    public function setFraudOffset($fraudOffset)
    {
        $this->container['fraudOffset'] = $fraudOffset;

        return $this;
    }

    /**
     * Gets merchantAccount
     *
     * @return string
     */
    public function getMerchantAccount()
    {
        return $this->container['merchantAccount'];
    }

    /**
     * Sets merchantAccount
     *
     * @param string $merchantAccount The merchant account identifier you want to process the transaction request with.
     *
     * @return self
     */
    public function setMerchantAccount($merchantAccount)
    {
        $this->container['merchantAccount'] = $merchantAccount;

        return $this;
    }

    /**
     * Gets nationality
     *
     * @return string|null
     */
    public function getNationality()
    {
        return $this->container['nationality'];
    }

    /**
     * Sets nationality
     *
     * @param string|null $nationality The shopper's nationality.  A valid value is an ISO 2-character country code (e.g. 'NL').  > This field is required to update the existing nationality that is associated with this recurring contract.
     *
     * @return self
     */
    public function setNationality($nationality)
    {
        $this->container['nationality'] = $nationality;

        return $this;
    }

    /**
     * Gets recurring
     *
     * @return \Adyen\Model\Payout\Recurring
     */
    public function getRecurring()
    {
        return $this->container['recurring'];
    }

    /**
     * Sets recurring
     *
     * @param \Adyen\Model\Payout\Recurring $recurring recurring
     *
     * @return self
     */
    public function setRecurring($recurring)
    {
        $this->container['recurring'] = $recurring;

        return $this;
    }

    /**
     * Gets reference
     *
     * @return string
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param string $reference The merchant reference for this payout. This reference will be used in all communication to the merchant about the status of the payout. Although it is a good idea to make sure it is unique, this is not a requirement.
     *
     * @return self
     */
    public function setReference($reference)
    {
        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets selectedRecurringDetailReference
     *
     * @return string
     */
    public function getSelectedRecurringDetailReference()
    {
        return $this->container['selectedRecurringDetailReference'];
    }

    /**
     * Sets selectedRecurringDetailReference
     *
     * @param string $selectedRecurringDetailReference This is the `recurringDetailReference` you want to use for this payout.  You can use the value LATEST to select the most recently used recurring detail.
     *
     * @return self
     */
    public function setSelectedRecurringDetailReference($selectedRecurringDetailReference)
    {
        $this->container['selectedRecurringDetailReference'] = $selectedRecurringDetailReference;

        return $this;
    }

    /**
     * Gets shopperEmail
     *
     * @return string
     */
    public function getShopperEmail()
    {
        return $this->container['shopperEmail'];
    }

    /**
     * Sets shopperEmail
     *
     * @param string $shopperEmail The shopper's email address.
     *
     * @return self
     */
    public function setShopperEmail($shopperEmail)
    {
        $this->container['shopperEmail'] = $shopperEmail;

        return $this;
    }

    /**
     * Gets shopperName
     *
     * @return \Adyen\Model\Payout\Name|null
     */
    public function getShopperName()
    {
        return $this->container['shopperName'];
    }

    /**
     * Sets shopperName
     *
     * @param \Adyen\Model\Payout\Name|null $shopperName shopperName
     *
     * @return self
     */
    public function setShopperName($shopperName)
    {
        $this->container['shopperName'] = $shopperName;

        return $this;
    }

    /**
     * Gets shopperReference
     *
     * @return string
     */
    public function getShopperReference()
    {
        return $this->container['shopperReference'];
    }

    /**
     * Sets shopperReference
     *
     * @param string $shopperReference The shopper's reference for the payout transaction.
     *
     * @return self
     */
    public function setShopperReference($shopperReference)
    {
        $this->container['shopperReference'] = $shopperReference;

        return $this;
    }

    /**
     * Gets shopperStatement
     *
     * @return string|null
     */
    public function getShopperStatement()
    {
        return $this->container['shopperStatement'];
    }

    /**
     * Sets shopperStatement
     *
     * @param string|null $shopperStatement The description of this payout. This description is shown on the bank statement of the shopper (if this is supported by the chosen payment method).
     *
     * @return self
     */
    public function setShopperStatement($shopperStatement)
    {
        $this->container['shopperStatement'] = $shopperStatement;

        return $this;
    }

    /**
     * Gets socialSecurityNumber
     *
     * @return string|null
     */
    public function getSocialSecurityNumber()
    {
        return $this->container['socialSecurityNumber'];
    }

    /**
     * Sets socialSecurityNumber
     *
     * @param string|null $socialSecurityNumber The shopper's social security number.
     *
     * @return self
     */
    public function setSocialSecurityNumber($socialSecurityNumber)
    {
        $this->container['socialSecurityNumber'] = $socialSecurityNumber;

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
