<?php
/**
 * BkAgentReqInfo
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
 * BkAgentReqInfo Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class BkAgentReqInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BkAgentReqInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'acqCode' => 'string',
        'deviceType' => 'string',
        'location' => 'string',
        'merchCode' => 'string',
        'serialNum' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'acqCode' => null,
        'deviceType' => null,
        'location' => null,
        'merchCode' => null,
        'serialNum' => null
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
        'acqCode' => 'acq_code',
        'deviceType' => 'device_type',
        'location' => 'location',
        'merchCode' => 'merch_code',
        'serialNum' => 'serial_num'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'acqCode' => 'setAcqCode',
        'deviceType' => 'setDeviceType',
        'location' => 'setLocation',
        'merchCode' => 'setMerchCode',
        'serialNum' => 'setSerialNum'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'acqCode' => 'getAcqCode',
        'deviceType' => 'getDeviceType',
        'location' => 'getLocation',
        'merchCode' => 'getMerchCode',
        'serialNum' => 'getSerialNum'
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
        $this->container['acqCode'] = $data['acqCode'] ?? null;
        $this->container['deviceType'] = $data['deviceType'] ?? null;
        $this->container['location'] = $data['location'] ?? null;
        $this->container['merchCode'] = $data['merchCode'] ?? null;
        $this->container['serialNum'] = $data['serialNum'] ?? null;
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
     * Gets acqCode
     *
     * @return string|null
     */
    public function getAcqCode()
    {
        return $this->container['acqCode'];
    }

    /**
     * Sets acqCode
     *
     * @param string|null $acqCode 收单机构在清算组织登记或分配的机构代码
     *
     * @return self
     */
    public function setAcqCode($acqCode)
    {
        $this->container['acqCode'] = $acqCode;

        return $this;
    }

    /**
     * Gets deviceType
     *
     * @return string|null
     */
    public function getDeviceType()
    {
        return $this->container['deviceType'];
    }

    /**
     * Sets deviceType
     *
     * @param string|null $deviceType 终端设备类型，受理方可参考终端注册时的设备类型填写。
     *
     * @return self
     */
    public function setDeviceType($deviceType)
    {
        $this->container['deviceType'] = $deviceType;

        return $this;
    }

    /**
     * Gets location
     *
     * @return string|null
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param string|null $location 终端设备实时经纬度信息，格式为纬度/经度，+表示北纬、东经，-表示南纬、西经。
     *
     * @return self
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets merchCode
     *
     * @return string|null
     */
    public function getMerchCode()
    {
        return $this->container['merchCode'];
    }

    /**
     * Sets merchCode
     *
     * @param string|null $merchCode 收单机构在清算组织登记的商户编码
     *
     * @return self
     */
    public function setMerchCode($merchCode)
    {
        $this->container['merchCode'] = $merchCode;

        return $this;
    }

    /**
     * Gets serialNum
     *
     * @return string|null
     */
    public function getSerialNum()
    {
        return $this->container['serialNum'];
    }

    /**
     * Sets serialNum
     *
     * @param string|null $serialNum 终端类型填写为 02、 03、04、05、06、08、09 或 10 时，必 须填写终端序列号。
     *
     * @return self
     */
    public function setSerialNum($serialNum)
    {
        $this->container['serialNum'] = $serialNum;

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


