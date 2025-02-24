<?php
/**
 * AlipayCommerceEcEnterpriseCreateModel
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
 * AlipayCommerceEcEnterpriseCreateModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayCommerceEcEnterpriseCreateModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayCommerceEcEnterpriseCreateModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'bizScene' => 'string',
        'createFundAccount' => 'bool',
        'createIotGroup' => 'bool',
        'enterpriseAlias' => 'string',
        'enterpriseName' => 'string',
        'groupAppId' => 'string',
        'identity' => 'string',
        'identityName' => 'string',
        'identityOpenId' => 'string',
        'identityType' => 'string',
        'outBizNo' => 'string',
        'signReturnUrl' => 'string',
        'signTerminal' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'bizScene' => null,
        'createFundAccount' => null,
        'createIotGroup' => null,
        'enterpriseAlias' => null,
        'enterpriseName' => null,
        'groupAppId' => null,
        'identity' => null,
        'identityName' => null,
        'identityOpenId' => null,
        'identityType' => null,
        'outBizNo' => null,
        'signReturnUrl' => null,
        'signTerminal' => null
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
        'bizScene' => 'biz_scene',
        'createFundAccount' => 'create_fund_account',
        'createIotGroup' => 'create_iot_group',
        'enterpriseAlias' => 'enterprise_alias',
        'enterpriseName' => 'enterprise_name',
        'groupAppId' => 'group_app_id',
        'identity' => 'identity',
        'identityName' => 'identity_name',
        'identityOpenId' => 'identity_open_id',
        'identityType' => 'identity_type',
        'outBizNo' => 'out_biz_no',
        'signReturnUrl' => 'sign_return_url',
        'signTerminal' => 'sign_terminal'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bizScene' => 'setBizScene',
        'createFundAccount' => 'setCreateFundAccount',
        'createIotGroup' => 'setCreateIotGroup',
        'enterpriseAlias' => 'setEnterpriseAlias',
        'enterpriseName' => 'setEnterpriseName',
        'groupAppId' => 'setGroupAppId',
        'identity' => 'setIdentity',
        'identityName' => 'setIdentityName',
        'identityOpenId' => 'setIdentityOpenId',
        'identityType' => 'setIdentityType',
        'outBizNo' => 'setOutBizNo',
        'signReturnUrl' => 'setSignReturnUrl',
        'signTerminal' => 'setSignTerminal'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bizScene' => 'getBizScene',
        'createFundAccount' => 'getCreateFundAccount',
        'createIotGroup' => 'getCreateIotGroup',
        'enterpriseAlias' => 'getEnterpriseAlias',
        'enterpriseName' => 'getEnterpriseName',
        'groupAppId' => 'getGroupAppId',
        'identity' => 'getIdentity',
        'identityName' => 'getIdentityName',
        'identityOpenId' => 'getIdentityOpenId',
        'identityType' => 'getIdentityType',
        'outBizNo' => 'getOutBizNo',
        'signReturnUrl' => 'getSignReturnUrl',
        'signTerminal' => 'getSignTerminal'
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
        $this->container['bizScene'] = $data['bizScene'] ?? null;
        $this->container['createFundAccount'] = $data['createFundAccount'] ?? null;
        $this->container['createIotGroup'] = $data['createIotGroup'] ?? null;
        $this->container['enterpriseAlias'] = $data['enterpriseAlias'] ?? null;
        $this->container['enterpriseName'] = $data['enterpriseName'] ?? null;
        $this->container['groupAppId'] = $data['groupAppId'] ?? null;
        $this->container['identity'] = $data['identity'] ?? null;
        $this->container['identityName'] = $data['identityName'] ?? null;
        $this->container['identityOpenId'] = $data['identityOpenId'] ?? null;
        $this->container['identityType'] = $data['identityType'] ?? null;
        $this->container['outBizNo'] = $data['outBizNo'] ?? null;
        $this->container['signReturnUrl'] = $data['signReturnUrl'] ?? null;
        $this->container['signTerminal'] = $data['signTerminal'] ?? null;
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
     * Gets bizScene
     *
     * @return string|null
     */
    public function getBizScene()
    {
        return $this->container['bizScene'];
    }

    /**
     * Sets bizScene
     *
     * @param string|null $bizScene 场景码
     *
     * @return self
     */
    public function setBizScene($bizScene)
    {
        $this->container['bizScene'] = $bizScene;

        return $this;
    }

    /**
     * Gets createFundAccount
     *
     * @return bool|null
     */
    public function getCreateFundAccount()
    {
        return $this->container['createFundAccount'];
    }

    /**
     * Sets createFundAccount
     *
     * @param bool|null $createFundAccount 是否设置管理员支付宝为企业出资账户
     *
     * @return self
     */
    public function setCreateFundAccount($createFundAccount)
    {
        $this->container['createFundAccount'] = $createFundAccount;

        return $this;
    }

    /**
     * Gets createIotGroup
     *
     * @return bool|null
     */
    public function getCreateIotGroup()
    {
        return $this->container['createIotGroup'];
    }

    /**
     * Sets createIotGroup
     *
     * @param bool|null $createIotGroup 是否创建企业人脸库，适用于对接团餐刷脸付、门禁刷脸通行等场景
     *
     * @return self
     */
    public function setCreateIotGroup($createIotGroup)
    {
        $this->container['createIotGroup'] = $createIotGroup;

        return $this;
    }

    /**
     * Gets enterpriseAlias
     *
     * @return string|null
     */
    public function getEnterpriseAlias()
    {
        return $this->container['enterpriseAlias'];
    }

    /**
     * Sets enterpriseAlias
     *
     * @param string|null $enterpriseAlias 企业简称
     *
     * @return self
     */
    public function setEnterpriseAlias($enterpriseAlias)
    {
        $this->container['enterpriseAlias'] = $enterpriseAlias;

        return $this;
    }

    /**
     * Gets enterpriseName
     *
     * @return string|null
     */
    public function getEnterpriseName()
    {
        return $this->container['enterpriseName'];
    }

    /**
     * Sets enterpriseName
     *
     * @param string|null $enterpriseName 企业名称
     *
     * @return self
     */
    public function setEnterpriseName($enterpriseName)
    {
        $this->container['enterpriseName'] = $enterpriseName;

        return $this;
    }

    /**
     * Gets groupAppId
     *
     * @return string|null
     */
    public function getGroupAppId()
    {
        return $this->container['groupAppId'];
    }

    /**
     * Sets groupAppId
     *
     * @param string|null $groupAppId 订购【一脸通行开通插件】的小程序appId
     *
     * @return self
     */
    public function setGroupAppId($groupAppId)
    {
        $this->container['groupAppId'] = $groupAppId;

        return $this;
    }

    /**
     * Gets identity
     *
     * @return string|null
     */
    public function getIdentity()
    {
        return $this->container['identity'];
    }

    /**
     * Sets identity
     *
     * @param string|null $identity 管理员身份标识
     *
     * @return self
     */
    public function setIdentity($identity)
    {
        $this->container['identity'] = $identity;

        return $this;
    }

    /**
     * Gets identityName
     *
     * @return string|null
     */
    public function getIdentityName()
    {
        return $this->container['identityName'];
    }

    /**
     * Sets identityName
     *
     * @param string|null $identityName 管理员姓名
     *
     * @return self
     */
    public function setIdentityName($identityName)
    {
        $this->container['identityName'] = $identityName;

        return $this;
    }

    /**
     * Gets identityOpenId
     *
     * @return string|null
     */
    public function getIdentityOpenId()
    {
        return $this->container['identityOpenId'];
    }

    /**
     * Sets identityOpenId
     *
     * @param string|null $identityOpenId 管理员身份openId
     *
     * @return self
     */
    public function setIdentityOpenId($identityOpenId)
    {
        $this->container['identityOpenId'] = $identityOpenId;

        return $this;
    }

    /**
     * Gets identityType
     *
     * @return string|null
     */
    public function getIdentityType()
    {
        return $this->container['identityType'];
    }

    /**
     * Sets identityType
     *
     * @param string|null $identityType 管理员身份类型
     *
     * @return self
     */
    public function setIdentityType($identityType)
    {
        $this->container['identityType'] = $identityType;

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
     * @param string|null $outBizNo 外部业务号
     *
     * @return self
     */
    public function setOutBizNo($outBizNo)
    {
        $this->container['outBizNo'] = $outBizNo;

        return $this;
    }

    /**
     * Gets signReturnUrl
     *
     * @return string|null
     */
    public function getSignReturnUrl()
    {
        return $this->container['signReturnUrl'];
    }

    /**
     * Sets signReturnUrl
     *
     * @param string|null $signReturnUrl 企业码签约后回跳地址
     *
     * @return self
     */
    public function setSignReturnUrl($signReturnUrl)
    {
        $this->container['signReturnUrl'] = $signReturnUrl;

        return $this;
    }

    /**
     * Gets signTerminal
     *
     * @return string|null
     */
    public function getSignTerminal()
    {
        return $this->container['signTerminal'];
    }

    /**
     * Sets signTerminal
     *
     * @param string|null $signTerminal 管理员签约终端类型
     *
     * @return self
     */
    public function setSignTerminal($signTerminal)
    {
        $this->container['signTerminal'] = $signTerminal;

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


