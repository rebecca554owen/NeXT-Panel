<?php
/**
 * PaidOuterCardCycleInfoDTO
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
 * PaidOuterCardCycleInfoDTO Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PaidOuterCardCycleInfoDTO implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaidOuterCardCycleInfoDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'alipayDeductAgreement' => 'string',
        'alipayDeductProductCode' => 'string',
        'alipayDeductScene' => 'string',
        'closeReason' => 'string',
        'cycleType' => 'string',
        'openStatus' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'alipayDeductAgreement' => null,
        'alipayDeductProductCode' => null,
        'alipayDeductScene' => null,
        'closeReason' => null,
        'cycleType' => null,
        'openStatus' => null
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
        'alipayDeductAgreement' => 'alipay_deduct_agreement',
        'alipayDeductProductCode' => 'alipay_deduct_product_code',
        'alipayDeductScene' => 'alipay_deduct_scene',
        'closeReason' => 'close_reason',
        'cycleType' => 'cycle_type',
        'openStatus' => 'open_status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'alipayDeductAgreement' => 'setAlipayDeductAgreement',
        'alipayDeductProductCode' => 'setAlipayDeductProductCode',
        'alipayDeductScene' => 'setAlipayDeductScene',
        'closeReason' => 'setCloseReason',
        'cycleType' => 'setCycleType',
        'openStatus' => 'setOpenStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'alipayDeductAgreement' => 'getAlipayDeductAgreement',
        'alipayDeductProductCode' => 'getAlipayDeductProductCode',
        'alipayDeductScene' => 'getAlipayDeductScene',
        'closeReason' => 'getCloseReason',
        'cycleType' => 'getCycleType',
        'openStatus' => 'getOpenStatus'
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
        $this->container['alipayDeductAgreement'] = $data['alipayDeductAgreement'] ?? null;
        $this->container['alipayDeductProductCode'] = $data['alipayDeductProductCode'] ?? null;
        $this->container['alipayDeductScene'] = $data['alipayDeductScene'] ?? null;
        $this->container['closeReason'] = $data['closeReason'] ?? null;
        $this->container['cycleType'] = $data['cycleType'] ?? null;
        $this->container['openStatus'] = $data['openStatus'] ?? null;
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
     * Gets alipayDeductAgreement
     *
     * @return string|null
     */
    public function getAlipayDeductAgreement()
    {
        return $this->container['alipayDeductAgreement'];
    }

    /**
     * Sets alipayDeductAgreement
     *
     * @param string|null $alipayDeductAgreement 支付宝用户签约协议号
     *
     * @return self
     */
    public function setAlipayDeductAgreement($alipayDeductAgreement)
    {
        $this->container['alipayDeductAgreement'] = $alipayDeductAgreement;

        return $this;
    }

    /**
     * Gets alipayDeductProductCode
     *
     * @return string|null
     */
    public function getAlipayDeductProductCode()
    {
        return $this->container['alipayDeductProductCode'];
    }

    /**
     * Sets alipayDeductProductCode
     *
     * @param string|null $alipayDeductProductCode 支付宝代扣产品码
     *
     * @return self
     */
    public function setAlipayDeductProductCode($alipayDeductProductCode)
    {
        $this->container['alipayDeductProductCode'] = $alipayDeductProductCode;

        return $this;
    }

    /**
     * Gets alipayDeductScene
     *
     * @return string|null
     */
    public function getAlipayDeductScene()
    {
        return $this->container['alipayDeductScene'];
    }

    /**
     * Sets alipayDeductScene
     *
     * @param string|null $alipayDeductScene 支付宝代扣场景码
     *
     * @return self
     */
    public function setAlipayDeductScene($alipayDeductScene)
    {
        $this->container['alipayDeductScene'] = $alipayDeductScene;

        return $this;
    }

    /**
     * Gets closeReason
     *
     * @return string|null
     */
    public function getCloseReason()
    {
        return $this->container['closeReason'];
    }

    /**
     * Sets closeReason
     *
     * @param string|null $closeReason 关闭连续购买原因。
     *
     * @return self
     */
    public function setCloseReason($closeReason)
    {
        $this->container['closeReason'] = $closeReason;

        return $this;
    }

    /**
     * Gets cycleType
     *
     * @return string|null
     */
    public function getCycleType()
    {
        return $this->container['cycleType'];
    }

    /**
     * Sets cycleType
     *
     * @param string|null $cycleType 用户开通连续购买类型。
     *
     * @return self
     */
    public function setCycleType($cycleType)
    {
        $this->container['cycleType'] = $cycleType;

        return $this;
    }

    /**
     * Gets openStatus
     *
     * @return string|null
     */
    public function getOpenStatus()
    {
        return $this->container['openStatus'];
    }

    /**
     * Sets openStatus
     *
     * @param string|null $openStatus 开通连续购买状态。
     *
     * @return self
     */
    public function setOpenStatus($openStatus)
    {
        $this->container['openStatus'] = $openStatus;

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


