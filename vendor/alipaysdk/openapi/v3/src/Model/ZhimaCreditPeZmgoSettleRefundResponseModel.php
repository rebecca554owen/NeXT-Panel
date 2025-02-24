<?php
/**
 * ZhimaCreditPeZmgoSettleRefundResponseModel
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
 * ZhimaCreditPeZmgoSettleRefundResponseModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ZhimaCreditPeZmgoSettleRefundResponseModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ZhimaCreditPeZmgoSettleRefundResponseModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'failReason' => 'string',
        'outRequestNo' => 'string',
        'refundAmount' => 'string',
        'refundOptNo' => 'string',
        'retry' => 'bool',
        'withholdPlanNo' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'failReason' => null,
        'outRequestNo' => null,
        'refundAmount' => null,
        'refundOptNo' => null,
        'retry' => null,
        'withholdPlanNo' => null
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
        'failReason' => 'fail_reason',
        'outRequestNo' => 'out_request_no',
        'refundAmount' => 'refund_amount',
        'refundOptNo' => 'refund_opt_no',
        'retry' => 'retry',
        'withholdPlanNo' => 'withhold_plan_no'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'failReason' => 'setFailReason',
        'outRequestNo' => 'setOutRequestNo',
        'refundAmount' => 'setRefundAmount',
        'refundOptNo' => 'setRefundOptNo',
        'retry' => 'setRetry',
        'withholdPlanNo' => 'setWithholdPlanNo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'failReason' => 'getFailReason',
        'outRequestNo' => 'getOutRequestNo',
        'refundAmount' => 'getRefundAmount',
        'refundOptNo' => 'getRefundOptNo',
        'retry' => 'getRetry',
        'withholdPlanNo' => 'getWithholdPlanNo'
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
        $this->container['failReason'] = $data['failReason'] ?? null;
        $this->container['outRequestNo'] = $data['outRequestNo'] ?? null;
        $this->container['refundAmount'] = $data['refundAmount'] ?? null;
        $this->container['refundOptNo'] = $data['refundOptNo'] ?? null;
        $this->container['retry'] = $data['retry'] ?? null;
        $this->container['withholdPlanNo'] = $data['withholdPlanNo'] ?? null;
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
     * Gets failReason
     *
     * @return string|null
     */
    public function getFailReason()
    {
        return $this->container['failReason'];
    }

    /**
     * Sets failReason
     *
     * @param string|null $failReason 退款操作错误原因描述
     *
     * @return self
     */
    public function setFailReason($failReason)
    {
        $this->container['failReason'] = $failReason;

        return $this;
    }

    /**
     * Gets outRequestNo
     *
     * @return string|null
     */
    public function getOutRequestNo()
    {
        return $this->container['outRequestNo'];
    }

    /**
     * Sets outRequestNo
     *
     * @param string|null $outRequestNo 外部请求号
     *
     * @return self
     */
    public function setOutRequestNo($outRequestNo)
    {
        $this->container['outRequestNo'] = $outRequestNo;

        return $this;
    }

    /**
     * Gets refundAmount
     *
     * @return string|null
     */
    public function getRefundAmount()
    {
        return $this->container['refundAmount'];
    }

    /**
     * Sets refundAmount
     *
     * @param string|null $refundAmount 本次请求退款金额，单位为：元（人民币），精确到小数点后两位
     *
     * @return self
     */
    public function setRefundAmount($refundAmount)
    {
        $this->container['refundAmount'] = $refundAmount;

        return $this;
    }

    /**
     * Gets refundOptNo
     *
     * @return string|null
     */
    public function getRefundOptNo()
    {
        return $this->container['refundOptNo'];
    }

    /**
     * Sets refundOptNo
     *
     * @param string|null $refundOptNo 芝麻GO退款生成的内部唯一流水，外部商户可以拿这个参数进行对账
     *
     * @return self
     */
    public function setRefundOptNo($refundOptNo)
    {
        $this->container['refundOptNo'] = $refundOptNo;

        return $this;
    }

    /**
     * Gets retry
     *
     * @return bool|null
     */
    public function getRetry()
    {
        return $this->container['retry'];
    }

    /**
     * Sets retry
     *
     * @param bool|null $retry 此字段含义，商家接入时需咨询对接技术。
     *
     * @return self
     */
    public function setRetry($retry)
    {
        $this->container['retry'] = $retry;

        return $this;
    }

    /**
     * Gets withholdPlanNo
     *
     * @return string|null
     */
    public function getWithholdPlanNo()
    {
        return $this->container['withholdPlanNo'];
    }

    /**
     * Sets withholdPlanNo
     *
     * @param string|null $withholdPlanNo 本次退款的扣款计划单号
     *
     * @return self
     */
    public function setWithholdPlanNo($withholdPlanNo)
    {
        $this->container['withholdPlanNo'] = $withholdPlanNo;

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


