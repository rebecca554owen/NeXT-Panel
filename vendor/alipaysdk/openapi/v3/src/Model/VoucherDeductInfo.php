<?php
/**
 * VoucherDeductInfo
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * 支付宝开放平台API
 *
 * 支付宝开放平台v3协议文档
 *
 * The version of the OpenAPI document: 2024-05-20
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Alipay\OpenAPISDK\Model;

use \ArrayAccess;
use \Alipay\OpenAPISDK\ObjectSerializer;

/**
 * VoucherDeductInfo Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class VoucherDeductInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'VoucherDeductInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'customerDefineVoucherInfo' => '\Alipay\OpenAPISDK\Model\CustomerDefineVoucherInfo',
        'discountVoucherInfo' => '\Alipay\OpenAPISDK\Model\DiscountVoucherInfo',
        'exchangeVoucherInfo' => '\Alipay\OpenAPISDK\Model\ExchangeVoucherInfo',
        'fixVoucherInfo' => '\Alipay\OpenAPISDK\Model\FixVoucherInfo',
        'specialVoucherInfo' => '\Alipay\OpenAPISDK\Model\SpecialVoucherInfo',
        'voucherType' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'customerDefineVoucherInfo' => null,
        'discountVoucherInfo' => null,
        'exchangeVoucherInfo' => null,
        'fixVoucherInfo' => null,
        'specialVoucherInfo' => null,
        'voucherType' => null
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
        'customerDefineVoucherInfo' => 'customer_define_voucher_info',
        'discountVoucherInfo' => 'discount_voucher_info',
        'exchangeVoucherInfo' => 'exchange_voucher_info',
        'fixVoucherInfo' => 'fix_voucher_info',
        'specialVoucherInfo' => 'special_voucher_info',
        'voucherType' => 'voucher_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'customerDefineVoucherInfo' => 'setCustomerDefineVoucherInfo',
        'discountVoucherInfo' => 'setDiscountVoucherInfo',
        'exchangeVoucherInfo' => 'setExchangeVoucherInfo',
        'fixVoucherInfo' => 'setFixVoucherInfo',
        'specialVoucherInfo' => 'setSpecialVoucherInfo',
        'voucherType' => 'setVoucherType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'customerDefineVoucherInfo' => 'getCustomerDefineVoucherInfo',
        'discountVoucherInfo' => 'getDiscountVoucherInfo',
        'exchangeVoucherInfo' => 'getExchangeVoucherInfo',
        'fixVoucherInfo' => 'getFixVoucherInfo',
        'specialVoucherInfo' => 'getSpecialVoucherInfo',
        'voucherType' => 'getVoucherType'
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
        $this->container['customerDefineVoucherInfo'] = $data['customerDefineVoucherInfo'] ?? null;
        $this->container['discountVoucherInfo'] = $data['discountVoucherInfo'] ?? null;
        $this->container['exchangeVoucherInfo'] = $data['exchangeVoucherInfo'] ?? null;
        $this->container['fixVoucherInfo'] = $data['fixVoucherInfo'] ?? null;
        $this->container['specialVoucherInfo'] = $data['specialVoucherInfo'] ?? null;
        $this->container['voucherType'] = $data['voucherType'] ?? null;
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
     * Gets customerDefineVoucherInfo
     *
     * @return \Alipay\OpenAPISDK\Model\CustomerDefineVoucherInfo|null
     */
    public function getCustomerDefineVoucherInfo()
    {
        return $this->container['customerDefineVoucherInfo'];
    }

    /**
     * Sets customerDefineVoucherInfo
     *
     * @param \Alipay\OpenAPISDK\Model\CustomerDefineVoucherInfo|null $customerDefineVoucherInfo customerDefineVoucherInfo
     *
     * @return self
     */
    public function setCustomerDefineVoucherInfo($customerDefineVoucherInfo)
    {
        $this->container['customerDefineVoucherInfo'] = $customerDefineVoucherInfo;

        return $this;
    }

    /**
     * Gets discountVoucherInfo
     *
     * @return \Alipay\OpenAPISDK\Model\DiscountVoucherInfo|null
     */
    public function getDiscountVoucherInfo()
    {
        return $this->container['discountVoucherInfo'];
    }

    /**
     * Sets discountVoucherInfo
     *
     * @param \Alipay\OpenAPISDK\Model\DiscountVoucherInfo|null $discountVoucherInfo discountVoucherInfo
     *
     * @return self
     */
    public function setDiscountVoucherInfo($discountVoucherInfo)
    {
        $this->container['discountVoucherInfo'] = $discountVoucherInfo;

        return $this;
    }

    /**
     * Gets exchangeVoucherInfo
     *
     * @return \Alipay\OpenAPISDK\Model\ExchangeVoucherInfo|null
     */
    public function getExchangeVoucherInfo()
    {
        return $this->container['exchangeVoucherInfo'];
    }

    /**
     * Sets exchangeVoucherInfo
     *
     * @param \Alipay\OpenAPISDK\Model\ExchangeVoucherInfo|null $exchangeVoucherInfo exchangeVoucherInfo
     *
     * @return self
     */
    public function setExchangeVoucherInfo($exchangeVoucherInfo)
    {
        $this->container['exchangeVoucherInfo'] = $exchangeVoucherInfo;

        return $this;
    }

    /**
     * Gets fixVoucherInfo
     *
     * @return \Alipay\OpenAPISDK\Model\FixVoucherInfo|null
     */
    public function getFixVoucherInfo()
    {
        return $this->container['fixVoucherInfo'];
    }

    /**
     * Sets fixVoucherInfo
     *
     * @param \Alipay\OpenAPISDK\Model\FixVoucherInfo|null $fixVoucherInfo fixVoucherInfo
     *
     * @return self
     */
    public function setFixVoucherInfo($fixVoucherInfo)
    {
        $this->container['fixVoucherInfo'] = $fixVoucherInfo;

        return $this;
    }

    /**
     * Gets specialVoucherInfo
     *
     * @return \Alipay\OpenAPISDK\Model\SpecialVoucherInfo|null
     */
    public function getSpecialVoucherInfo()
    {
        return $this->container['specialVoucherInfo'];
    }

    /**
     * Sets specialVoucherInfo
     *
     * @param \Alipay\OpenAPISDK\Model\SpecialVoucherInfo|null $specialVoucherInfo specialVoucherInfo
     *
     * @return self
     */
    public function setSpecialVoucherInfo($specialVoucherInfo)
    {
        $this->container['specialVoucherInfo'] = $specialVoucherInfo;

        return $this;
    }

    /**
     * Gets voucherType
     *
     * @return string|null
     */
    public function getVoucherType()
    {
        return $this->container['voucherType'];
    }

    /**
     * Sets voucherType
     *
     * @param string|null $voucherType 券类型。
     *
     * @return self
     */
    public function setVoucherType($voucherType)
    {
        $this->container['voucherType'] = $voucherType;

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


