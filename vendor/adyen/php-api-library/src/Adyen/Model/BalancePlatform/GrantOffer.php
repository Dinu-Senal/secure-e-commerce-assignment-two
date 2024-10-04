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
 * GrantOffer Class Doc Comment
 *
 * @category Class
 * @package  Adyen
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GrantOffer implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GrantOffer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'accountHolderId' => 'string',
        'amount' => '\Adyen\Model\BalancePlatform\Amount',
        'contractType' => 'string',
        'expiresAt' => '\DateTime',
        'fee' => '\Adyen\Model\BalancePlatform\Fee',
        'id' => 'string',
        'repayment' => '\Adyen\Model\BalancePlatform\Repayment',
        'startsAt' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'accountHolderId' => null,
        'amount' => null,
        'contractType' => null,
        'expiresAt' => 'date-time',
        'fee' => null,
        'id' => null,
        'repayment' => null,
        'startsAt' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'accountHolderId' => false,
        'amount' => false,
        'contractType' => false,
        'expiresAt' => false,
        'fee' => false,
        'id' => false,
        'repayment' => false,
        'startsAt' => false
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
        'accountHolderId' => 'accountHolderId',
        'amount' => 'amount',
        'contractType' => 'contractType',
        'expiresAt' => 'expiresAt',
        'fee' => 'fee',
        'id' => 'id',
        'repayment' => 'repayment',
        'startsAt' => 'startsAt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accountHolderId' => 'setAccountHolderId',
        'amount' => 'setAmount',
        'contractType' => 'setContractType',
        'expiresAt' => 'setExpiresAt',
        'fee' => 'setFee',
        'id' => 'setId',
        'repayment' => 'setRepayment',
        'startsAt' => 'setStartsAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accountHolderId' => 'getAccountHolderId',
        'amount' => 'getAmount',
        'contractType' => 'getContractType',
        'expiresAt' => 'getExpiresAt',
        'fee' => 'getFee',
        'id' => 'getId',
        'repayment' => 'getRepayment',
        'startsAt' => 'getStartsAt'
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

    public const CONTRACT_TYPE_CASH_ADVANCE = 'cashAdvance';
    public const CONTRACT_TYPE_LOAN = 'loan';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getContractTypeAllowableValues()
    {
        return [
            self::CONTRACT_TYPE_CASH_ADVANCE,
            self::CONTRACT_TYPE_LOAN,
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
        $this->setIfExists('accountHolderId', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('contractType', $data ?? [], null);
        $this->setIfExists('expiresAt', $data ?? [], null);
        $this->setIfExists('fee', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('repayment', $data ?? [], null);
        $this->setIfExists('startsAt', $data ?? [], null);
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

        if ($this->container['accountHolderId'] === null) {
            $invalidProperties[] = "'accountHolderId' can't be null";
        }
        $allowedValues = $this->getContractTypeAllowableValues();
        if (!is_null($this->container['contractType']) && !in_array($this->container['contractType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'contractType', must be one of '%s'",
                $this->container['contractType'],
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
     * Gets accountHolderId
     *
     * @return string
     */
    public function getAccountHolderId()
    {
        return $this->container['accountHolderId'];
    }

    /**
     * Sets accountHolderId
     *
     * @param string $accountHolderId The identifier of the account holder to which the grant is offered.
     *
     * @return self
     */
    public function setAccountHolderId($accountHolderId)
    {
        $this->container['accountHolderId'] = $accountHolderId;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return \Adyen\Model\BalancePlatform\Amount|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param \Adyen\Model\BalancePlatform\Amount|null $amount amount
     *
     * @return self
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets contractType
     *
     * @return string|null
     */
    public function getContractType()
    {
        return $this->container['contractType'];
    }

    /**
     * Sets contractType
     *
     * @param string|null $contractType The contract type of the grant offer. Possible value: **cashAdvance**, **loan**.
     *
     * @return self
     */
    public function setContractType($contractType)
    {
        $allowedValues = $this->getContractTypeAllowableValues();
        if (!in_array($contractType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'contractType', must be one of '%s'",
                    $contractType,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['contractType'] = $contractType;

        return $this;
    }

    /**
     * Gets expiresAt
     *
     * @return \DateTime|null
     */
    public function getExpiresAt()
    {
        return $this->container['expiresAt'];
    }

    /**
     * Sets expiresAt
     *
     * @param \DateTime|null $expiresAt The end date of the grant offer validity period.
     *
     * @return self
     */
    public function setExpiresAt($expiresAt)
    {
        $this->container['expiresAt'] = $expiresAt;

        return $this;
    }

    /**
     * Gets fee
     *
     * @return \Adyen\Model\BalancePlatform\Fee|null
     */
    public function getFee()
    {
        return $this->container['fee'];
    }

    /**
     * Sets fee
     *
     * @param \Adyen\Model\BalancePlatform\Fee|null $fee fee
     *
     * @return self
     */
    public function setFee($fee)
    {
        $this->container['fee'] = $fee;

        return $this;
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
     * @param string|null $id The unique identifier of the grant offer.
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets repayment
     *
     * @return \Adyen\Model\BalancePlatform\Repayment|null
     */
    public function getRepayment()
    {
        return $this->container['repayment'];
    }

    /**
     * Sets repayment
     *
     * @param \Adyen\Model\BalancePlatform\Repayment|null $repayment repayment
     *
     * @return self
     */
    public function setRepayment($repayment)
    {
        $this->container['repayment'] = $repayment;

        return $this;
    }

    /**
     * Gets startsAt
     *
     * @return \DateTime|null
     */
    public function getStartsAt()
    {
        return $this->container['startsAt'];
    }

    /**
     * Sets startsAt
     *
     * @param \DateTime|null $startsAt The starting date of the grant offer validity period.
     *
     * @return self
     */
    public function setStartsAt($startsAt)
    {
        $this->container['startsAt'] = $startsAt;

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
