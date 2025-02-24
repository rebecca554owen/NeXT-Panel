<?php
/**
 * TransferDetailResult
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
 * TransferDetailResult Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class TransferDetailResult implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TransferDetailResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account' => 'string',
        'amount' => 'string',
        'fundDesc' => 'string',
        'instructionId' => 'string',
        'memo' => 'string',
        'orderNo' => 'string',
        'serviceFee' => 'string',
        'status' => 'string',
        'subTypeDesc' => 'string',
        'transDt' => 'string',
        'typeDesc' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'account' => null,
        'amount' => null,
        'fundDesc' => null,
        'instructionId' => null,
        'memo' => null,
        'orderNo' => null,
        'serviceFee' => null,
        'status' => null,
        'subTypeDesc' => null,
        'transDt' => null,
        'typeDesc' => null
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
        'account' => 'account',
        'amount' => 'amount',
        'fundDesc' => 'fund_desc',
        'instructionId' => 'instruction_id',
        'memo' => 'memo',
        'orderNo' => 'order_no',
        'serviceFee' => 'service_fee',
        'status' => 'status',
        'subTypeDesc' => 'sub_type_desc',
        'transDt' => 'trans_dt',
        'typeDesc' => 'type_desc'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account' => 'setAccount',
        'amount' => 'setAmount',
        'fundDesc' => 'setFundDesc',
        'instructionId' => 'setInstructionId',
        'memo' => 'setMemo',
        'orderNo' => 'setOrderNo',
        'serviceFee' => 'setServiceFee',
        'status' => 'setStatus',
        'subTypeDesc' => 'setSubTypeDesc',
        'transDt' => 'setTransDt',
        'typeDesc' => 'setTypeDesc'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account' => 'getAccount',
        'amount' => 'getAmount',
        'fundDesc' => 'getFundDesc',
        'instructionId' => 'getInstructionId',
        'memo' => 'getMemo',
        'orderNo' => 'getOrderNo',
        'serviceFee' => 'getServiceFee',
        'status' => 'getStatus',
        'subTypeDesc' => 'getSubTypeDesc',
        'transDt' => 'getTransDt',
        'typeDesc' => 'getTypeDesc'
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
        $this->container['account'] = $data['account'] ?? null;
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['fundDesc'] = $data['fundDesc'] ?? null;
        $this->container['instructionId'] = $data['instructionId'] ?? null;
        $this->container['memo'] = $data['memo'] ?? null;
        $this->container['orderNo'] = $data['orderNo'] ?? null;
        $this->container['serviceFee'] = $data['serviceFee'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['subTypeDesc'] = $data['subTypeDesc'] ?? null;
        $this->container['transDt'] = $data['transDt'] ?? null;
        $this->container['typeDesc'] = $data['typeDesc'] ?? null;
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
     * Gets account
     *
     * @return string|null
     */
    public function getAccount()
    {
        return $this->container['account'];
    }

    /**
     * Sets account
     *
     * @param string|null $account 付款/收款账户。充值记录中是付款账户。提现、转账记录中是收款账户。支付宝名称及账号脱敏；银行账户的户名脱敏，银行账户显示银行名称+银行卡号后四位
     *
     * @return self
     */
    public function setAccount($account)
    {
        $this->container['account'] = $account;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return string|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param string|null $amount 金额
     *
     * @return self
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets fundDesc
     *
     * @return string|null
     */
    public function getFundDesc()
    {
        return $this->container['fundDesc'];
    }

    /**
     * Sets fundDesc
     *
     * @param string|null $fundDesc 资金来源/去向类型。在充值记录中，表示资金来源类型，在转账和提现类型中，表示去向类型
     *
     * @return self
     */
    public function setFundDesc($fundDesc)
    {
        $this->container['fundDesc'] = $fundDesc;

        return $this;
    }

    /**
     * Gets instructionId
     *
     * @return string|null
     */
    public function getInstructionId()
    {
        return $this->container['instructionId'];
    }

    /**
     * Sets instructionId
     *
     * @param string|null $instructionId 银行单据号。对账使用，无需脱敏
     *
     * @return self
     */
    public function setInstructionId($instructionId)
    {
        $this->container['instructionId'] = $instructionId;

        return $this;
    }

    /**
     * Gets memo
     *
     * @return string|null
     */
    public function getMemo()
    {
        return $this->container['memo'];
    }

    /**
     * Sets memo
     *
     * @param string|null $memo 备注信息
     *
     * @return self
     */
    public function setMemo($memo)
    {
        $this->container['memo'] = $memo;

        return $this;
    }

    /**
     * Gets orderNo
     *
     * @return string|null
     */
    public function getOrderNo()
    {
        return $this->container['orderNo'];
    }

    /**
     * Sets orderNo
     *
     * @param string|null $orderNo 业务订单号。该笔业务单据的唯一识别编号
     *
     * @return self
     */
    public function setOrderNo($orderNo)
    {
        $this->container['orderNo'] = $orderNo;

        return $this;
    }

    /**
     * Gets serviceFee
     *
     * @return string|null
     */
    public function getServiceFee()
    {
        return $this->container['serviceFee'];
    }

    /**
     * Sets serviceFee
     *
     * @param string|null $serviceFee 服务费金额
     *
     * @return self
     */
    public function setServiceFee($serviceFee)
    {
        $this->container['serviceFee'] = $serviceFee;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status 资金状态
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets subTypeDesc
     *
     * @return string|null
     */
    public function getSubTypeDesc()
    {
        return $this->container['subTypeDesc'];
    }

    /**
     * Sets subTypeDesc
     *
     * @param string|null $subTypeDesc 子类型。“充值类型”，普通充值、大额充值。“转账类型”，暂无实现。转账至支付宝账户、转账至银行卡、批量转账支付宝账户、批量转账至银行卡、批量付款。“提现类型”，暂无实现。普通提现、批量委托提现。对账使用，无需脱敏
     *
     * @return self
     */
    public function setSubTypeDesc($subTypeDesc)
    {
        $this->container['subTypeDesc'] = $subTypeDesc;

        return $this;
    }

    /**
     * Gets transDt
     *
     * @return string|null
     */
    public function getTransDt()
    {
        return $this->container['transDt'];
    }

    /**
     * Sets transDt
     *
     * @param string|null $transDt 业务发生时间
     *
     * @return self
     */
    public function setTransDt($transDt)
    {
        $this->container['transDt'] = $transDt;

        return $this;
    }

    /**
     * Gets typeDesc
     *
     * @return string|null
     */
    public function getTypeDesc()
    {
        return $this->container['typeDesc'];
    }

    /**
     * Sets typeDesc
     *
     * @param string|null $typeDesc 查询类型描述：充值、转账、提现
     *
     * @return self
     */
    public function setTypeDesc($typeDesc)
    {
        $this->container['typeDesc'] = $typeDesc;

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


