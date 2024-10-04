<?php

/**
 * Legal Entity Management API
 *
 * The version of the OpenAPI document: 3
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1
 *
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Adyen\Model\LegalEntityManagement;

use \ArrayAccess;
use Adyen\Model\LegalEntityManagement\ObjectSerializer;

/**
 * OnboardingLinkSettings Class Doc Comment
 *
 * @category Class
 * @package  Adyen
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OnboardingLinkSettings implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OnboardingLinkSettings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'acceptedCountries' => 'string[]',
        'allowBankAccountFormatSelection' => 'bool',
        'allowDebugUi' => 'bool',
        'allowIntraRegionCrossBorderPayout' => 'bool',
        'changeLegalEntityType' => 'bool',
        'editPrefilledCountry' => 'bool',
        'hideOnboardingIntroductionIndividual' => 'bool',
        'hideOnboardingIntroductionOrganization' => 'bool',
        'hideOnboardingIntroductionSoleProprietor' => 'bool',
        'hideOnboardingIntroductionTrust' => 'bool',
        'instantBankVerification' => 'bool',
        'requirePciSignEcomMoto' => 'bool',
        'requirePciSignEcommerce' => 'bool',
        'requirePciSignPos' => 'bool',
        'requirePciSignPosMoto' => 'bool',
        'transferInstrumentLimit' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'acceptedCountries' => null,
        'allowBankAccountFormatSelection' => null,
        'allowDebugUi' => null,
        'allowIntraRegionCrossBorderPayout' => null,
        'changeLegalEntityType' => null,
        'editPrefilledCountry' => null,
        'hideOnboardingIntroductionIndividual' => null,
        'hideOnboardingIntroductionOrganization' => null,
        'hideOnboardingIntroductionSoleProprietor' => null,
        'hideOnboardingIntroductionTrust' => null,
        'instantBankVerification' => null,
        'requirePciSignEcomMoto' => null,
        'requirePciSignEcommerce' => null,
        'requirePciSignPos' => null,
        'requirePciSignPosMoto' => null,
        'transferInstrumentLimit' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'acceptedCountries' => false,
        'allowBankAccountFormatSelection' => false,
        'allowDebugUi' => false,
        'allowIntraRegionCrossBorderPayout' => false,
        'changeLegalEntityType' => false,
        'editPrefilledCountry' => false,
        'hideOnboardingIntroductionIndividual' => false,
        'hideOnboardingIntroductionOrganization' => false,
        'hideOnboardingIntroductionSoleProprietor' => false,
        'hideOnboardingIntroductionTrust' => false,
        'instantBankVerification' => false,
        'requirePciSignEcomMoto' => false,
        'requirePciSignEcommerce' => false,
        'requirePciSignPos' => false,
        'requirePciSignPosMoto' => false,
        'transferInstrumentLimit' => true
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
        'acceptedCountries' => 'acceptedCountries',
        'allowBankAccountFormatSelection' => 'allowBankAccountFormatSelection',
        'allowDebugUi' => 'allowDebugUi',
        'allowIntraRegionCrossBorderPayout' => 'allowIntraRegionCrossBorderPayout',
        'changeLegalEntityType' => 'changeLegalEntityType',
        'editPrefilledCountry' => 'editPrefilledCountry',
        'hideOnboardingIntroductionIndividual' => 'hideOnboardingIntroductionIndividual',
        'hideOnboardingIntroductionOrganization' => 'hideOnboardingIntroductionOrganization',
        'hideOnboardingIntroductionSoleProprietor' => 'hideOnboardingIntroductionSoleProprietor',
        'hideOnboardingIntroductionTrust' => 'hideOnboardingIntroductionTrust',
        'instantBankVerification' => 'instantBankVerification',
        'requirePciSignEcomMoto' => 'requirePciSignEcomMoto',
        'requirePciSignEcommerce' => 'requirePciSignEcommerce',
        'requirePciSignPos' => 'requirePciSignPos',
        'requirePciSignPosMoto' => 'requirePciSignPosMoto',
        'transferInstrumentLimit' => 'transferInstrumentLimit'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'acceptedCountries' => 'setAcceptedCountries',
        'allowBankAccountFormatSelection' => 'setAllowBankAccountFormatSelection',
        'allowDebugUi' => 'setAllowDebugUi',
        'allowIntraRegionCrossBorderPayout' => 'setAllowIntraRegionCrossBorderPayout',
        'changeLegalEntityType' => 'setChangeLegalEntityType',
        'editPrefilledCountry' => 'setEditPrefilledCountry',
        'hideOnboardingIntroductionIndividual' => 'setHideOnboardingIntroductionIndividual',
        'hideOnboardingIntroductionOrganization' => 'setHideOnboardingIntroductionOrganization',
        'hideOnboardingIntroductionSoleProprietor' => 'setHideOnboardingIntroductionSoleProprietor',
        'hideOnboardingIntroductionTrust' => 'setHideOnboardingIntroductionTrust',
        'instantBankVerification' => 'setInstantBankVerification',
        'requirePciSignEcomMoto' => 'setRequirePciSignEcomMoto',
        'requirePciSignEcommerce' => 'setRequirePciSignEcommerce',
        'requirePciSignPos' => 'setRequirePciSignPos',
        'requirePciSignPosMoto' => 'setRequirePciSignPosMoto',
        'transferInstrumentLimit' => 'setTransferInstrumentLimit'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'acceptedCountries' => 'getAcceptedCountries',
        'allowBankAccountFormatSelection' => 'getAllowBankAccountFormatSelection',
        'allowDebugUi' => 'getAllowDebugUi',
        'allowIntraRegionCrossBorderPayout' => 'getAllowIntraRegionCrossBorderPayout',
        'changeLegalEntityType' => 'getChangeLegalEntityType',
        'editPrefilledCountry' => 'getEditPrefilledCountry',
        'hideOnboardingIntroductionIndividual' => 'getHideOnboardingIntroductionIndividual',
        'hideOnboardingIntroductionOrganization' => 'getHideOnboardingIntroductionOrganization',
        'hideOnboardingIntroductionSoleProprietor' => 'getHideOnboardingIntroductionSoleProprietor',
        'hideOnboardingIntroductionTrust' => 'getHideOnboardingIntroductionTrust',
        'instantBankVerification' => 'getInstantBankVerification',
        'requirePciSignEcomMoto' => 'getRequirePciSignEcomMoto',
        'requirePciSignEcommerce' => 'getRequirePciSignEcommerce',
        'requirePciSignPos' => 'getRequirePciSignPos',
        'requirePciSignPosMoto' => 'getRequirePciSignPosMoto',
        'transferInstrumentLimit' => 'getTransferInstrumentLimit'
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
        $this->setIfExists('acceptedCountries', $data ?? [], null);
        $this->setIfExists('allowBankAccountFormatSelection', $data ?? [], null);
        $this->setIfExists('allowDebugUi', $data ?? [], null);
        $this->setIfExists('allowIntraRegionCrossBorderPayout', $data ?? [], null);
        $this->setIfExists('changeLegalEntityType', $data ?? [], null);
        $this->setIfExists('editPrefilledCountry', $data ?? [], null);
        $this->setIfExists('hideOnboardingIntroductionIndividual', $data ?? [], null);
        $this->setIfExists('hideOnboardingIntroductionOrganization', $data ?? [], null);
        $this->setIfExists('hideOnboardingIntroductionSoleProprietor', $data ?? [], null);
        $this->setIfExists('hideOnboardingIntroductionTrust', $data ?? [], null);
        $this->setIfExists('instantBankVerification', $data ?? [], null);
        $this->setIfExists('requirePciSignEcomMoto', $data ?? [], null);
        $this->setIfExists('requirePciSignEcommerce', $data ?? [], null);
        $this->setIfExists('requirePciSignPos', $data ?? [], null);
        $this->setIfExists('requirePciSignPosMoto', $data ?? [], null);
        $this->setIfExists('transferInstrumentLimit', $data ?? [], null);
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
     * Gets acceptedCountries
     *
     * @return string[]|null
     */
    public function getAcceptedCountries()
    {
        return $this->container['acceptedCountries'];
    }

    /**
     * Sets acceptedCountries
     *
     * @param string[]|null $acceptedCountries The list of countries the user can choose from in hosted onboarding when `editPrefilledCountry` is allowed.  The value must be in the two-character [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country code format.  The array is empty by default, allowing all [countries and regions supported by hosted onboarding](https://docs.adyen.com/platforms/onboard-users/#hosted-onboarding).
     *
     * @return self
     */
    public function setAcceptedCountries($acceptedCountries)
    {
        $this->container['acceptedCountries'] = $acceptedCountries;

        return $this;
    }

    /**
     * Gets allowBankAccountFormatSelection
     *
     * @return bool|null
     */
    public function getAllowBankAccountFormatSelection()
    {
        return $this->container['allowBankAccountFormatSelection'];
    }

    /**
     * Sets allowBankAccountFormatSelection
     *
     * @param bool|null $allowBankAccountFormatSelection Default value: **false**  Indicates if the user can select the format for their payout account (if applicable).
     *
     * @return self
     */
    public function setAllowBankAccountFormatSelection($allowBankAccountFormatSelection)
    {
        $this->container['allowBankAccountFormatSelection'] = $allowBankAccountFormatSelection;

        return $this;
    }

    /**
     * Gets allowDebugUi
     *
     * @return bool|null
     */
    public function getAllowDebugUi()
    {
        return $this->container['allowDebugUi'];
    }

    /**
     * Sets allowDebugUi
     *
     * @param bool|null $allowDebugUi Default value: **true**  Indicates if the user may press a hidden key combination to open the HO debugging UI.
     *
     * @return self
     */
    public function setAllowDebugUi($allowDebugUi)
    {
        $this->container['allowDebugUi'] = $allowDebugUi;

        return $this;
    }

    /**
     * Gets allowIntraRegionCrossBorderPayout
     *
     * @return bool|null
     */
    public function getAllowIntraRegionCrossBorderPayout()
    {
        return $this->container['allowIntraRegionCrossBorderPayout'];
    }

    /**
     * Sets allowIntraRegionCrossBorderPayout
     *
     * @param bool|null $allowIntraRegionCrossBorderPayout Default value: **false**  Indicates if the user can select a payout account in a different EU/EEA location (including Switzerland and the UK) than the location of their legal entity.
     *
     * @return self
     */
    public function setAllowIntraRegionCrossBorderPayout($allowIntraRegionCrossBorderPayout)
    {
        $this->container['allowIntraRegionCrossBorderPayout'] = $allowIntraRegionCrossBorderPayout;

        return $this;
    }

    /**
     * Gets changeLegalEntityType
     *
     * @return bool|null
     */
    public function getChangeLegalEntityType()
    {
        return $this->container['changeLegalEntityType'];
    }

    /**
     * Sets changeLegalEntityType
     *
     * @param bool|null $changeLegalEntityType Default value: **true**  Indicates if the user can change their legal entity type.
     *
     * @return self
     */
    public function setChangeLegalEntityType($changeLegalEntityType)
    {
        $this->container['changeLegalEntityType'] = $changeLegalEntityType;

        return $this;
    }

    /**
     * Gets editPrefilledCountry
     *
     * @return bool|null
     */
    public function getEditPrefilledCountry()
    {
        return $this->container['editPrefilledCountry'];
    }

    /**
     * Sets editPrefilledCountry
     *
     * @param bool|null $editPrefilledCountry Default value: **true**  Indicates if the user can change the country of their legal entity's address, for example the registered address of an organization.
     *
     * @return self
     */
    public function setEditPrefilledCountry($editPrefilledCountry)
    {
        $this->container['editPrefilledCountry'] = $editPrefilledCountry;

        return $this;
    }

    /**
     * Gets hideOnboardingIntroductionIndividual
     *
     * @return bool|null
     */
    public function getHideOnboardingIntroductionIndividual()
    {
        return $this->container['hideOnboardingIntroductionIndividual'];
    }

    /**
     * Sets hideOnboardingIntroductionIndividual
     *
     * @param bool|null $hideOnboardingIntroductionIndividual Default value: **true**  Indicates whether the introduction screen is hidden for the user of the individual legal entity type. The introduction screen provides brief instructions for the subsequent steps in the hosted onboarding process.
     *
     * @return self
     */
    public function setHideOnboardingIntroductionIndividual($hideOnboardingIntroductionIndividual)
    {
        $this->container['hideOnboardingIntroductionIndividual'] = $hideOnboardingIntroductionIndividual;

        return $this;
    }

    /**
     * Gets hideOnboardingIntroductionOrganization
     *
     * @return bool|null
     */
    public function getHideOnboardingIntroductionOrganization()
    {
        return $this->container['hideOnboardingIntroductionOrganization'];
    }

    /**
     * Sets hideOnboardingIntroductionOrganization
     *
     * @param bool|null $hideOnboardingIntroductionOrganization Default value: **true**  Indicates whether the introduction screen is hidden for the user of the organization legal entity type. The introduction screen provides brief instructions for the subsequent steps in the hosted onboarding process.
     *
     * @return self
     */
    public function setHideOnboardingIntroductionOrganization($hideOnboardingIntroductionOrganization)
    {
        $this->container['hideOnboardingIntroductionOrganization'] = $hideOnboardingIntroductionOrganization;

        return $this;
    }

    /**
     * Gets hideOnboardingIntroductionSoleProprietor
     *
     * @return bool|null
     */
    public function getHideOnboardingIntroductionSoleProprietor()
    {
        return $this->container['hideOnboardingIntroductionSoleProprietor'];
    }

    /**
     * Sets hideOnboardingIntroductionSoleProprietor
     *
     * @param bool|null $hideOnboardingIntroductionSoleProprietor Default value: **true**  Indicates whether the introduction screen is hidden for the user of the sole proprietorship legal entity type. The introduction screen provides brief instructions for the subsequent steps in the hosted onboarding process.
     *
     * @return self
     */
    public function setHideOnboardingIntroductionSoleProprietor($hideOnboardingIntroductionSoleProprietor)
    {
        $this->container['hideOnboardingIntroductionSoleProprietor'] = $hideOnboardingIntroductionSoleProprietor;

        return $this;
    }

    /**
     * Gets hideOnboardingIntroductionTrust
     *
     * @return bool|null
     */
    public function getHideOnboardingIntroductionTrust()
    {
        return $this->container['hideOnboardingIntroductionTrust'];
    }

    /**
     * Sets hideOnboardingIntroductionTrust
     *
     * @param bool|null $hideOnboardingIntroductionTrust Default value: **true**  Indicates whether the introduction screen is hidden for the user of the trust legal entity type. The introduction screen provides brief instructions for the subsequent steps in the hosted onboarding process.
     *
     * @return self
     */
    public function setHideOnboardingIntroductionTrust($hideOnboardingIntroductionTrust)
    {
        $this->container['hideOnboardingIntroductionTrust'] = $hideOnboardingIntroductionTrust;

        return $this;
    }

    /**
     * Gets instantBankVerification
     *
     * @return bool|null
     */
    public function getInstantBankVerification()
    {
        return $this->container['instantBankVerification'];
    }

    /**
     * Sets instantBankVerification
     *
     * @param bool|null $instantBankVerification Default value: **true**  Indicates if the user can initiate the verification process through open banking providers, like Plaid or Tink.
     *
     * @return self
     */
    public function setInstantBankVerification($instantBankVerification)
    {
        $this->container['instantBankVerification'] = $instantBankVerification;

        return $this;
    }

    /**
     * Gets requirePciSignEcomMoto
     *
     * @return bool|null
     */
    public function getRequirePciSignEcomMoto()
    {
        return $this->container['requirePciSignEcomMoto'];
    }

    /**
     * Sets requirePciSignEcomMoto
     *
     * @param bool|null $requirePciSignEcomMoto Default value: **false**  Indicates if the user is required to sign a PCI questionnaires for the **ecomMoto** sales channel type.
     *
     * @return self
     */
    public function setRequirePciSignEcomMoto($requirePciSignEcomMoto)
    {
        $this->container['requirePciSignEcomMoto'] = $requirePciSignEcomMoto;

        return $this;
    }

    /**
     * Gets requirePciSignEcommerce
     *
     * @return bool|null
     */
    public function getRequirePciSignEcommerce()
    {
        return $this->container['requirePciSignEcommerce'];
    }

    /**
     * Sets requirePciSignEcommerce
     *
     * @param bool|null $requirePciSignEcommerce Default value: **false**  Indicates if the user is required to sign a PCI questionnaires for the **eCommerce** sales channel type.
     *
     * @return self
     */
    public function setRequirePciSignEcommerce($requirePciSignEcommerce)
    {
        $this->container['requirePciSignEcommerce'] = $requirePciSignEcommerce;

        return $this;
    }

    /**
     * Gets requirePciSignPos
     *
     * @return bool|null
     */
    public function getRequirePciSignPos()
    {
        return $this->container['requirePciSignPos'];
    }

    /**
     * Sets requirePciSignPos
     *
     * @param bool|null $requirePciSignPos Default value: **false**  Indicates if the user is required to sign a PCI questionnaires for the **pos** sales channel type.
     *
     * @return self
     */
    public function setRequirePciSignPos($requirePciSignPos)
    {
        $this->container['requirePciSignPos'] = $requirePciSignPos;

        return $this;
    }

    /**
     * Gets requirePciSignPosMoto
     *
     * @return bool|null
     */
    public function getRequirePciSignPosMoto()
    {
        return $this->container['requirePciSignPosMoto'];
    }

    /**
     * Sets requirePciSignPosMoto
     *
     * @param bool|null $requirePciSignPosMoto Default value: **false**  Indicates if the user is required to sign a PCI questionnaires for the **posMoto** sales channel type.
     *
     * @return self
     */
    public function setRequirePciSignPosMoto($requirePciSignPosMoto)
    {
        $this->container['requirePciSignPosMoto'] = $requirePciSignPosMoto;

        return $this;
    }

    /**
     * Gets transferInstrumentLimit
     *
     * @return int|null
     */
    public function getTransferInstrumentLimit()
    {
        return $this->container['transferInstrumentLimit'];
    }

    /**
     * Sets transferInstrumentLimit
     *
     * @param int|null $transferInstrumentLimit The maximum number of transfer instruments the user can create.
     *
     * @return self
     */
    public function setTransferInstrumentLimit($transferInstrumentLimit)
    {
        $this->container['transferInstrumentLimit'] = $transferInstrumentLimit;

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
