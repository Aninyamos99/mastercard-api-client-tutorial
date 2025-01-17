<?php
/**
 * AccountHolderData
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  DigitalEnablementClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * MDES Digital Enablement API
 *
 * These APIs are designed as RPC style stateless web services where each API endpoint represents an operation to be performed.  All request and response payloads are sent in the JSON (JavaScript Object Notation) data-interchange format. Each endpoint in the API specifies the HTTP Method used to access it. All strings in request and response objects are to be UTF-8 encoded.  Each API URI includes the major and minor version of API that it conforms to.  This will allow multiple concurrent versions of the API to be deployed simultaneously. <br><br> **Authentication** <br><br> Mastercard uses OAuth 1.0a with body hash extension for authenticating the API clients. This requires every request that you send to  Mastercard to be signed with an RSA private key. A private-public RSA key pair must be generated consisting of: <br><br> 1. A private key for the OAuth signature for API requests. It is recommended to keep the private key in a password-protected or hardware keystore. <br> 2. A public key is shared with Mastercard during the project setup process through either a certificate signing request (CSR) or the API Key Generator. Mastercard will use the public key to verify the OAuth signature that is provided on every API call.<br>  An OAUTH1.0a signer library is available on [GitHub](https://github.com/Mastercard/oauth1-signer-java) <br><br> **Encryption** <br><br> All communications between Issuer web service and the Mastercard gateway is encrypted using TLS. <br><br> **Additional Encryption of Sensitive Data** <br><br> In addition to the OAuth authentication, when using MDES Digital Enablement Service, any PCI sensitive and all account holder Personally Identifiable Information (PII) data must be encrypted. This requirement applies to the API fields containing encryptedData. Sensitive data is encrypted using a symmetric session (one-time-use) key. The symmetric session key is then wrapped with an RSA Public Key supplied by Mastercard during API setup phase (the Customer Encryption Key). <br>  Java Client Encryption Library available on [GitHub](https://github.com/Mastercard/client-encryption-java)
 *
 * The version of the OpenAPI document: 1.3.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace DigitalEnablementClient\Model;

use \ArrayAccess;
use \DigitalEnablementClient\ObjectSerializer;

/**
 * AccountHolderData Class Doc Comment
 *
 * @category Class
 * @package  DigitalEnablementClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AccountHolderData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'accountHolderData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account_holder_name' => 'string',
        'account_holder_address' => '\DigitalEnablementClient\Model\BillingAddress',
        'consumer_identifier' => 'string',
        'account_holder_email_address' => 'string',
        'account_holder_mobile_phone_number' => '\DigitalEnablementClient\Model\PhoneNumber'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'account_holder_name' => null,
        'account_holder_address' => null,
        'consumer_identifier' => null,
        'account_holder_email_address' => null,
        'account_holder_mobile_phone_number' => null
    ];

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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'account_holder_name' => 'accountHolderName',
        'account_holder_address' => 'accountHolderAddress',
        'consumer_identifier' => 'consumerIdentifier',
        'account_holder_email_address' => 'accountHolderEmailAddress',
        'account_holder_mobile_phone_number' => 'accountHolderMobilePhoneNumber'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_holder_name' => 'setAccountHolderName',
        'account_holder_address' => 'setAccountHolderAddress',
        'consumer_identifier' => 'setConsumerIdentifier',
        'account_holder_email_address' => 'setAccountHolderEmailAddress',
        'account_holder_mobile_phone_number' => 'setAccountHolderMobilePhoneNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_holder_name' => 'getAccountHolderName',
        'account_holder_address' => 'getAccountHolderAddress',
        'consumer_identifier' => 'getConsumerIdentifier',
        'account_holder_email_address' => 'getAccountHolderEmailAddress',
        'account_holder_mobile_phone_number' => 'getAccountHolderMobilePhoneNumber'
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
        $this->container['account_holder_name'] = $data['account_holder_name'] ?? null;
        $this->container['account_holder_address'] = $data['account_holder_address'] ?? null;
        $this->container['consumer_identifier'] = $data['consumer_identifier'] ?? null;
        $this->container['account_holder_email_address'] = $data['account_holder_email_address'] ?? null;
        $this->container['account_holder_mobile_phone_number'] = $data['account_holder_mobile_phone_number'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['account_holder_name']) && (mb_strlen($this->container['account_holder_name']) > 27)) {
            $invalidProperties[] = "invalid value for 'account_holder_name', the character length must be smaller than or equal to 27.";
        }

        if (!is_null($this->container['consumer_identifier']) && (mb_strlen($this->container['consumer_identifier']) > 88)) {
            $invalidProperties[] = "invalid value for 'consumer_identifier', the character length must be smaller than or equal to 88.";
        }

        if (!is_null($this->container['account_holder_email_address']) && (mb_strlen($this->container['account_holder_email_address']) > 320)) {
            $invalidProperties[] = "invalid value for 'account_holder_email_address', the character length must be smaller than or equal to 320.";
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
     * Gets account_holder_name
     *
     * @return string|null
     */
    public function getAccountHolderName()
    {
        return $this->container['account_holder_name'];
    }

    /**
     * Sets account_holder_name
     *
     * @param string|null $account_holder_name **(OPTIONAL)** The name of the cardholder in the format LASTNAME/FIRSTNAME or FIRSTNAME LASTNAME
     *
     * @return self
     */
    public function setAccountHolderName($account_holder_name)
    {
        if (!is_null($account_holder_name) && (mb_strlen($account_holder_name) > 27)) {
            throw new \InvalidArgumentException('invalid length for $account_holder_name when calling AccountHolderData., must be smaller than or equal to 27.');
        }

        $this->container['account_holder_name'] = $account_holder_name;

        return $this;
    }

    /**
     * Gets account_holder_address
     *
     * @return \DigitalEnablementClient\Model\BillingAddress|null
     */
    public function getAccountHolderAddress()
    {
        return $this->container['account_holder_address'];
    }

    /**
     * Sets account_holder_address
     *
     * @param \DigitalEnablementClient\Model\BillingAddress|null $account_holder_address account_holder_address
     *
     * @return self
     */
    public function setAccountHolderAddress($account_holder_address)
    {
        $this->container['account_holder_address'] = $account_holder_address;

        return $this;
    }

    /**
     * Gets consumer_identifier
     *
     * @return string|null
     */
    public function getConsumerIdentifier()
    {
        return $this->container['consumer_identifier'];
    }

    /**
     * Sets consumer_identifier
     *
     * @param string|null $consumer_identifier **(OPTIONAL)** Customer Identifier that may be required in some regions.
     *
     * @return self
     */
    public function setConsumerIdentifier($consumer_identifier)
    {
        if (!is_null($consumer_identifier) && (mb_strlen($consumer_identifier) > 88)) {
            throw new \InvalidArgumentException('invalid length for $consumer_identifier when calling AccountHolderData., must be smaller than or equal to 88.');
        }

        $this->container['consumer_identifier'] = $consumer_identifier;

        return $this;
    }

    /**
     * Gets account_holder_email_address
     *
     * @return string|null
     */
    public function getAccountHolderEmailAddress()
    {
        return $this->container['account_holder_email_address'];
    }

    /**
     * Sets account_holder_email_address
     *
     * @param string|null $account_holder_email_address **(OPTIONAL)** The e-mail address of the Account Holder
     *
     * @return self
     */
    public function setAccountHolderEmailAddress($account_holder_email_address)
    {
        if (!is_null($account_holder_email_address) && (mb_strlen($account_holder_email_address) > 320)) {
            throw new \InvalidArgumentException('invalid length for $account_holder_email_address when calling AccountHolderData., must be smaller than or equal to 320.');
        }

        $this->container['account_holder_email_address'] = $account_holder_email_address;

        return $this;
    }

    /**
     * Gets account_holder_mobile_phone_number
     *
     * @return \DigitalEnablementClient\Model\PhoneNumber|null
     */
    public function getAccountHolderMobilePhoneNumber()
    {
        return $this->container['account_holder_mobile_phone_number'];
    }

    /**
     * Sets account_holder_mobile_phone_number
     *
     * @param \DigitalEnablementClient\Model\PhoneNumber|null $account_holder_mobile_phone_number account_holder_mobile_phone_number
     *
     * @return self
     */
    public function setAccountHolderMobilePhoneNumber($account_holder_mobile_phone_number)
    {
        $this->container['account_holder_mobile_phone_number'] = $account_holder_mobile_phone_number;

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
     * @return mixed|null
     */
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
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


