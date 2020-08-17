<?php
/**
 * TransactRequestSchema
 *
 * PHP version 5
 *
 * @category Class
 * @package  DigitalEnablementClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * MDES for Merchants
 *
 * The MDES APIs are designed as RPC style stateless web services where each API endpoint represents an operation to be performed.  All request and response payloads are sent in the JSON (JavaScript Object Notation) data-interchange format. Each endpoint in the API specifies the HTTP Method used to access it. All strings in request and response objects are to be UTF-8 encoded.  Each API URI includes the major and minor version of API that it conforms to.  This will allow multiple concurrent versions of the API to be deployed simultaneously. <br> __Authentication__ Mastercard uses OAuth 1.0a with body hash extension for authenticating the API clients. This requires every request that you send to  Mastercard to be signed with an RSA private key. A private-public RSA key pair must be generated consisting of: <br> 1 . A private key for the OAuth signature for API requests. It is recommended to keep the private key in a password-protected or hardware keystore. <br> 2. A public key is shared with Mastercard during the project setup process through either a certificate signing request (CSR) or the API Key Generator. Mastercard will use the public key to verify the OAuth signature that is provided on every API call.<br>  An OAUTH1.0a signer library is available on [GitHub](https://github.com/Mastercard/oauth1-signer-java) <br>  __Encryption__<br>  All communications between Issuer web service and the Mastercard gateway is encrypted using TLS. <br> __Additional Encryption of Sensitive Data__ In addition to the OAuth authentication, when using MDES Digital Enablement Service, any PCI sensitive and all account holder Personally Identifiable Information (PII) data must be encrypted. This requirement applies to the API fields containing encryptedData. Sensitive data is encrypted using a symmetric session (one-time-use) key. The symmetric session key is then wrapped with an RSA Public Key supplied by Mastercard during API setup phase (the Customer Encryption Key). <br>  Java Client Encryption Library available on [GitHub](https://github.com/Mastercard/client-encryption-java)
 *
 * The version of the OpenAPI document: 1.2.10
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
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
 * TransactRequestSchema Class Doc Comment
 *
 * @category Class
 * @package  DigitalEnablementClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TransactRequestSchema implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TransactRequestSchema';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'response_host' => 'string',
        'request_id' => 'string',
        'token_unique_reference' => 'string',
        'dsrp_type' => 'string',
        'unpredictable_number' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'response_host' => null,
        'request_id' => null,
        'token_unique_reference' => null,
        'dsrp_type' => null,
        'unpredictable_number' => null
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
        'response_host' => 'responseHost',
        'request_id' => 'requestId',
        'token_unique_reference' => 'tokenUniqueReference',
        'dsrp_type' => 'dsrpType',
        'unpredictable_number' => 'unpredictableNumber'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'response_host' => 'setResponseHost',
        'request_id' => 'setRequestId',
        'token_unique_reference' => 'setTokenUniqueReference',
        'dsrp_type' => 'setDsrpType',
        'unpredictable_number' => 'setUnpredictableNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'response_host' => 'getResponseHost',
        'request_id' => 'getRequestId',
        'token_unique_reference' => 'getTokenUniqueReference',
        'dsrp_type' => 'getDsrpType',
        'unpredictable_number' => 'getUnpredictableNumber'
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
        $this->container['response_host'] = isset($data['response_host']) ? $data['response_host'] : null;
        $this->container['request_id'] = isset($data['request_id']) ? $data['request_id'] : null;
        $this->container['token_unique_reference'] = isset($data['token_unique_reference']) ? $data['token_unique_reference'] : null;
        $this->container['dsrp_type'] = isset($data['dsrp_type']) ? $data['dsrp_type'] : null;
        $this->container['unpredictable_number'] = isset($data['unpredictable_number']) ? $data['unpredictable_number'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['request_id'] === null) {
            $invalidProperties[] = "'request_id' can't be null";
        }
        if ($this->container['token_unique_reference'] === null) {
            $invalidProperties[] = "'token_unique_reference' can't be null";
        }
        if ($this->container['dsrp_type'] === null) {
            $invalidProperties[] = "'dsrp_type' can't be null";
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
     * Gets response_host
     *
     * @return string|null
     */
    public function getResponseHost()
    {
        return $this->container['response_host'];
    }

    /**
     * Sets response_host
     *
     * @param string|null $response_host The host that originated the request. Future calls in the same conversation may be routed to this host.
     *
     * @return $this
     */
    public function setResponseHost($response_host)
    {
        $this->container['response_host'] = $response_host;

        return $this;
    }

    /**
     * Gets request_id
     *
     * @return string
     */
    public function getRequestId()
    {
        return $this->container['request_id'];
    }

    /**
     * Sets request_id
     *
     * @param string $request_id Unique identifier for the request.
     *
     * @return $this
     */
    public function setRequestId($request_id)
    {
        $this->container['request_id'] = $request_id;

        return $this;
    }

    /**
     * Gets token_unique_reference
     *
     * @return string
     */
    public function getTokenUniqueReference()
    {
        return $this->container['token_unique_reference'];
    }

    /**
     * Sets token_unique_reference
     *
     * @param string $token_unique_reference Globally unique identifier for the Token, as assigned by MDES.    __Max Length:64__
     *
     * @return $this
     */
    public function setTokenUniqueReference($token_unique_reference)
    {
        $this->container['token_unique_reference'] = $token_unique_reference;

        return $this;
    }

    /**
     * Gets dsrp_type
     *
     * @return string
     */
    public function getDsrpType()
    {
        return $this->container['dsrp_type'];
    }

    /**
     * Sets dsrp_type
     *
     * @param string $dsrp_type What type of DSRP cryptogram to create. Must be either UCAF or M_CHIP.     __Max Length:64__
     *
     * @return $this
     */
    public function setDsrpType($dsrp_type)
    {
        $this->container['dsrp_type'] = $dsrp_type;

        return $this;
    }

    /**
     * Gets unpredictable_number
     *
     * @return string|null
     */
    public function getUnpredictableNumber()
    {
        return $this->container['unpredictable_number'];
    }

    /**
     * Sets unpredictable_number
     *
     * @param string|null $unpredictable_number __CONDITIONAL__<br>HEX Encoded data (case sensitive) provided by the merchant to provide variability and uniqueness to the generation of a cryptogram.  Required if the shouldGenerateUnpredictableNumber flag is not set during on-boarding.<br> __Length:8__
     *
     * @return $this
     */
    public function setUnpredictableNumber($unpredictable_number)
    {
        $this->container['unpredictable_number'] = $unpredictable_number;

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

