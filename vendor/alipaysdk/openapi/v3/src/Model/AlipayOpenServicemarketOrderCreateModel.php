<?php
/**
 * AlipayOpenServicemarketOrderCreateModel
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
 * AlipayOpenServicemarketOrderCreateModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayOpenServicemarketOrderCreateModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayOpenServicemarketOrderCreateModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'appCategoryIds' => 'string',
        'appDesc' => 'string',
        'appEnglishName' => 'string',
        'appName' => 'string',
        'appOrigin' => 'string',
        'appSlogan' => 'string',
        'marketCode' => 'string',
        'merchandiseId' => 'string',
        'merchantPid' => 'string',
        'miniAppId' => 'string',
        'miniCategoryIds' => 'string',
        'outBizNo' => 'string',
        'serviceEmail' => 'string',
        'servicePhone' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'appCategoryIds' => null,
        'appDesc' => null,
        'appEnglishName' => null,
        'appName' => null,
        'appOrigin' => null,
        'appSlogan' => null,
        'marketCode' => null,
        'merchandiseId' => null,
        'merchantPid' => null,
        'miniAppId' => null,
        'miniCategoryIds' => null,
        'outBizNo' => null,
        'serviceEmail' => null,
        'servicePhone' => null
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
        'appCategoryIds' => 'app_category_ids',
        'appDesc' => 'app_desc',
        'appEnglishName' => 'app_english_name',
        'appName' => 'app_name',
        'appOrigin' => 'app_origin',
        'appSlogan' => 'app_slogan',
        'marketCode' => 'market_code',
        'merchandiseId' => 'merchandise_id',
        'merchantPid' => 'merchant_pid',
        'miniAppId' => 'mini_app_id',
        'miniCategoryIds' => 'mini_category_ids',
        'outBizNo' => 'out_biz_no',
        'serviceEmail' => 'service_email',
        'servicePhone' => 'service_phone'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'appCategoryIds' => 'setAppCategoryIds',
        'appDesc' => 'setAppDesc',
        'appEnglishName' => 'setAppEnglishName',
        'appName' => 'setAppName',
        'appOrigin' => 'setAppOrigin',
        'appSlogan' => 'setAppSlogan',
        'marketCode' => 'setMarketCode',
        'merchandiseId' => 'setMerchandiseId',
        'merchantPid' => 'setMerchantPid',
        'miniAppId' => 'setMiniAppId',
        'miniCategoryIds' => 'setMiniCategoryIds',
        'outBizNo' => 'setOutBizNo',
        'serviceEmail' => 'setServiceEmail',
        'servicePhone' => 'setServicePhone'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'appCategoryIds' => 'getAppCategoryIds',
        'appDesc' => 'getAppDesc',
        'appEnglishName' => 'getAppEnglishName',
        'appName' => 'getAppName',
        'appOrigin' => 'getAppOrigin',
        'appSlogan' => 'getAppSlogan',
        'marketCode' => 'getMarketCode',
        'merchandiseId' => 'getMerchandiseId',
        'merchantPid' => 'getMerchantPid',
        'miniAppId' => 'getMiniAppId',
        'miniCategoryIds' => 'getMiniCategoryIds',
        'outBizNo' => 'getOutBizNo',
        'serviceEmail' => 'getServiceEmail',
        'servicePhone' => 'getServicePhone'
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
        $this->container['appCategoryIds'] = $data['appCategoryIds'] ?? null;
        $this->container['appDesc'] = $data['appDesc'] ?? null;
        $this->container['appEnglishName'] = $data['appEnglishName'] ?? null;
        $this->container['appName'] = $data['appName'] ?? null;
        $this->container['appOrigin'] = $data['appOrigin'] ?? null;
        $this->container['appSlogan'] = $data['appSlogan'] ?? null;
        $this->container['marketCode'] = $data['marketCode'] ?? null;
        $this->container['merchandiseId'] = $data['merchandiseId'] ?? null;
        $this->container['merchantPid'] = $data['merchantPid'] ?? null;
        $this->container['miniAppId'] = $data['miniAppId'] ?? null;
        $this->container['miniCategoryIds'] = $data['miniCategoryIds'] ?? null;
        $this->container['outBizNo'] = $data['outBizNo'] ?? null;
        $this->container['serviceEmail'] = $data['serviceEmail'] ?? null;
        $this->container['servicePhone'] = $data['servicePhone'] ?? null;
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
     * Gets appCategoryIds
     *
     * @return string|null
     */
    public function getAppCategoryIds()
    {
        return $this->container['appCategoryIds'];
    }

    /**
     * Sets appCategoryIds
     *
     * @param string|null $appCategoryIds 11_12;12_13。小程序类目，格式为 第一个一级类目_第一个二级类目;第二个一级类目_第二个二级类目，详细类目可以参考https://docs.alipay.com/isv/10325
     *
     * @return self
     */
    public function setAppCategoryIds($appCategoryIds)
    {
        $this->container['appCategoryIds'] = $appCategoryIds;

        return $this;
    }

    /**
     * Gets appDesc
     *
     * @return string|null
     */
    public function getAppDesc()
    {
        return $this->container['appDesc'];
    }

    /**
     * Sets appDesc
     *
     * @param string|null $appDesc 小程序官方示例Demo，展示已支持的接口能力及组件。
     *
     * @return self
     */
    public function setAppDesc($appDesc)
    {
        $this->container['appDesc'] = $appDesc;

        return $this;
    }

    /**
     * Gets appEnglishName
     *
     * @return string|null
     */
    public function getAppEnglishName()
    {
        return $this->container['appEnglishName'];
    }

    /**
     * Sets appEnglishName
     *
     * @param string|null $appEnglishName 小程序应用英文名称
     *
     * @return self
     */
    public function setAppEnglishName($appEnglishName)
    {
        $this->container['appEnglishName'] = $appEnglishName;

        return $this;
    }

    /**
     * Gets appName
     *
     * @return string|null
     */
    public function getAppName()
    {
        return $this->container['appName'];
    }

    /**
     * Sets appName
     *
     * @param string|null $appName 小程序应用名称
     *
     * @return self
     */
    public function setAppName($appName)
    {
        $this->container['appName'] = $appName;

        return $this;
    }

    /**
     * Gets appOrigin
     *
     * @return string|null
     */
    public function getAppOrigin()
    {
        return $this->container['appOrigin'];
    }

    /**
     * Sets appOrigin
     *
     * @param string|null $appOrigin 来源的业务方，需要申请
     *
     * @return self
     */
    public function setAppOrigin($appOrigin)
    {
        $this->container['appOrigin'] = $appOrigin;

        return $this;
    }

    /**
     * Gets appSlogan
     *
     * @return string|null
     */
    public function getAppSlogan()
    {
        return $this->container['appSlogan'];
    }

    /**
     * Sets appSlogan
     *
     * @param string|null $appSlogan 小程序应用简介，一句话描述小程序功能
     *
     * @return self
     */
    public function setAppSlogan($appSlogan)
    {
        $this->container['appSlogan'] = $appSlogan;

        return $this;
    }

    /**
     * Gets marketCode
     *
     * @return string|null
     */
    public function getMarketCode()
    {
        return $this->container['marketCode'];
    }

    /**
     * Sets marketCode
     *
     * @param string|null $marketCode 订购的服务商品ID所在的市场编码。新接入场景必须传递，具体值请联系产品分配。
     *
     * @return self
     */
    public function setMarketCode($marketCode)
    {
        $this->container['marketCode'] = $marketCode;

        return $this;
    }

    /**
     * Gets merchandiseId
     *
     * @return string|null
     */
    public function getMerchandiseId()
    {
        return $this->container['merchandiseId'];
    }

    /**
     * Sets merchandiseId
     *
     * @param string|null $merchandiseId 订购的服务商品ID
     *
     * @return self
     */
    public function setMerchandiseId($merchandiseId)
    {
        $this->container['merchandiseId'] = $merchandiseId;

        return $this;
    }

    /**
     * Gets merchantPid
     *
     * @return string|null
     */
    public function getMerchantPid()
    {
        return $this->container['merchantPid'];
    }

    /**
     * Sets merchantPid
     *
     * @param string|null $merchantPid 商户PID
     *
     * @return self
     */
    public function setMerchantPid($merchantPid)
    {
        $this->container['merchantPid'] = $merchantPid;

        return $this;
    }

    /**
     * Gets miniAppId
     *
     * @return string|null
     */
    public function getMiniAppId()
    {
        return $this->container['miniAppId'];
    }

    /**
     * Sets miniAppId
     *
     * @param string|null $miniAppId 一二方支持传入appId
     *
     * @return self
     */
    public function setMiniAppId($miniAppId)
    {
        $this->container['miniAppId'] = $miniAppId;

        return $this;
    }

    /**
     * Gets miniCategoryIds
     *
     * @return string|null
     */
    public function getMiniCategoryIds()
    {
        return $this->container['miniCategoryIds'];
    }

    /**
     * Sets miniCategoryIds
     *
     * @param string|null $miniCategoryIds 新小程序前台类目，格式为 第一个一级类目_第一个二级类目;第二个一级类目_第二个二级类目_第二个三级类目，详细类目可以通过 https://docs.open.alipay.com/api_49/alipay.open.mini.category.query接口查询mini_category_list，如果不填默认采用当前小程序应用类目。使用默认应用类目后不需要再次上传营业执照号、营业执照名、营业执照截图、营业执照有效期。使用后不再读取app_category_ids值，老前台类目将废弃
     *
     * @return self
     */
    public function setMiniCategoryIds($miniCategoryIds)
    {
        $this->container['miniCategoryIds'] = $miniCategoryIds;

        return $this;
    }

    /**
     * Gets outBizNo
     *
     * @return string|null
     */
    public function getOutBizNo()
    {
        return $this->container['outBizNo'];
    }

    /**
     * Sets outBizNo
     *
     * @param string|null $outBizNo 比如某种业务标准外部订单号,比如交易外部订单号，代表商户端自己订单号
     *
     * @return self
     */
    public function setOutBizNo($outBizNo)
    {
        $this->container['outBizNo'] = $outBizNo;

        return $this;
    }

    /**
     * Gets serviceEmail
     *
     * @return string|null
     */
    public function getServiceEmail()
    {
        return $this->container['serviceEmail'];
    }

    /**
     * Sets serviceEmail
     *
     * @param string|null $serviceEmail 小程序客服邮箱
     *
     * @return self
     */
    public function setServiceEmail($serviceEmail)
    {
        $this->container['serviceEmail'] = $serviceEmail;

        return $this;
    }

    /**
     * Gets servicePhone
     *
     * @return string|null
     */
    public function getServicePhone()
    {
        return $this->container['servicePhone'];
    }

    /**
     * Sets servicePhone
     *
     * @param string|null $servicePhone 小程序客服电话
     *
     * @return self
     */
    public function setServicePhone($servicePhone)
    {
        $this->container['servicePhone'] = $servicePhone;

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


