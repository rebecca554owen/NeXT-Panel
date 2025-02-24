<?php
/**
 * AlipayOpenAgentOfflinepaymentSignErrorResponseModel
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
 * AlipayOpenAgentOfflinepaymentSignErrorResponseModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayOpenAgentOfflinepaymentSignErrorResponseModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayOpenAgentOfflinepaymentSignErrorResponseModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'code' => 'string',
        'links' => 'string',
        'message' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'code' => null,
        'links' => null,
        'message' => null
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
        'code' => 'code',
        'links' => 'links',
        'message' => 'message'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'code' => 'setCode',
        'links' => 'setLinks',
        'message' => 'setMessage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'code' => 'getCode',
        'links' => 'getLinks',
        'message' => 'getMessage'
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

    public const CODE_INVALID_PARAMETER = 'INVALID_PARAMETER';
    public const CODE_INVALID_BATCH_NO = 'INVALID_BATCH_NO';
    public const CODE_BATCH_IS_NOT_EXIST = 'BATCH_IS_NOT_EXIST';
    public const CODE_BATCH_STATUS_IS_FINAL = 'BATCH_STATUS_IS_FINAL';
    public const CODE_SYSTEM_ERROR = 'SYSTEM_ERROR';
    public const CODE_ISV_APP_ORDER_PACKAGE_EMPTY = 'ISV_APP_ORDER_PACKAGE_EMPTY';
    public const CODE_ISV_APP_NO_ORDER_PACKAGE = 'ISV_APP_NO_ORDER_PACKAGE';
    public const CODE_MERCHANT_SIGN_PRODUCT_IN_AUDIT = 'MERCHANT_SIGN_PRODUCT_IN_AUDIT';
    public const CODE_MERCHANT_SIGN_PRODUCT_IN_FORBIDD = 'MERCHANT_SIGN_PRODUCT_IN_FORBIDD';
    public const CODE_NO_APP_PERMISSION = 'NO_APP_PERMISSION';
    public const CODE_FILE_SIZE_OUT_LIMIT = 'FILE_SIZE_OUT_LIMIT';
    public const CODE_FILE_SIZE_MIN_LIMIT = 'FILE_SIZE_MIN_LIMIT';
    public const CODE_FILE_FORMAT_IS_INVALID = 'FILE_FORMAT_IS_INVALID';
    public const CODE_PRE_AUTH_INVALID_AUTH_TICKET = 'PRE_AUTH_INVALID_AUTH_TICKET';
    public const CODE_PRE_AUTH_INVALID_AUTH_TOKEN = 'PRE_AUTH_INVALID_AUTH_TOKEN';
    public const CODE_PRE_AUTH_INVOKE_API_NOT_PERMITTE = 'PRE_AUTH_INVOKE_API_NOT_PERMITTE';
    public const CODE_PRE_AUTH_INVALID_PACKAGE = 'PRE_AUTH_INVALID_PACKAGE';
    public const CODE_PRE_AUTH_INVALID_AUTH_APP_ID = 'PRE_AUTH_INVALID_AUTH_APP_ID';
    public const CODE_MERCHANT_NEED_FACE_CERTIFY = 'MERCHANT_NEED_FACE_CERTIFY';
    public const CODE_MERCHANT_STATE_NOT_SATISFY = 'MERCHANT_STATE_NOT_SATISFY';
    public const CODE_UN_SUPPORT_ACCOUNT_CERTIFY_LEVEL = 'UN_SUPPORT_ACCOUNT_CERTIFY_LEVEL';
    public const CODE_UN_SUPPORT_ACCOUNT_TYPE = 'UN_SUPPORT_ACCOUNT_TYPE';
    public const CODE_ANT_PRODUCT_CONFLICT = 'ANT_PRODUCT_CONFLICT';
    public const CODE_USER_CARD_BALANCE_PAY_CLOSED = 'USER_CARD_BALANCE_PAY_CLOSED';
    public const CODE_CHECK_AGDS_SELLER_ACCESS_FAILED = 'CHECK_AGDS_SELLER_ACCESS_FAILED';
    public const CODE_ANT_PRODUCT_DEPENDENCY_REQUIRED = 'ANT_PRODUCT_DEPENDENCY_REQUIRED';
    public const CODE_ISV_NO_PERMISSION = 'ISV_NO_PERMISSION';
    public const CODE_AGENT_SIGN_IN_AUDIT_BY_SAME_ISV = 'AGENT_SIGN_IN_AUDIT_BY_SAME_ISV';
    public const CODE_AGENT_SIGN_IN_AUDIT_BY_DIFF_ISV = 'AGENT_SIGN_IN_AUDIT_BY_DIFF_ISV';
    public const CODE_AGENT_SIGN_CONFIRM_BY_SAME_ISV = 'AGENT_SIGN_CONFIRM_BY_SAME_ISV';
    public const CODE_AGENT_SIGN_CONFIRM_BY_DIFF_ISV = 'AGENT_SIGN_CONFIRM_BY_DIFF_ISV';
    public const CODE_AGENT_SIGN_VALID_BY_SAME_ISV = 'AGENT_SIGN_VALID_BY_SAME_ISV';
    public const CODE_SHOP_SIGN_BOARD_PIC_RISK = 'SHOP_SIGN_BOARD_PIC_RISK';
    public const CODE_BUSINESS_LICENSE_PIC_RISK = 'BUSINESS_LICENSE_PIC_RISK';
    public const CODE_AGENT_SIGN_PRODUCT_IN_FORBIDDEN = 'AGENT_SIGN_PRODUCT_IN_FORBIDDEN';
    public const CODE_BIZ_ERROR = 'BIZ_ERROR';
    public const CODE_ISV_IDENTITY_NOT_SATISFY = 'ISV_IDENTITY_NOT_SATISFY';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCodeAllowableValues()
    {
        return [
            self::CODE_INVALID_PARAMETER,
            self::CODE_INVALID_BATCH_NO,
            self::CODE_BATCH_IS_NOT_EXIST,
            self::CODE_BATCH_STATUS_IS_FINAL,
            self::CODE_SYSTEM_ERROR,
            self::CODE_ISV_APP_ORDER_PACKAGE_EMPTY,
            self::CODE_ISV_APP_NO_ORDER_PACKAGE,
            self::CODE_MERCHANT_SIGN_PRODUCT_IN_AUDIT,
            self::CODE_MERCHANT_SIGN_PRODUCT_IN_FORBIDD,
            self::CODE_NO_APP_PERMISSION,
            self::CODE_FILE_SIZE_OUT_LIMIT,
            self::CODE_FILE_SIZE_MIN_LIMIT,
            self::CODE_FILE_FORMAT_IS_INVALID,
            self::CODE_PRE_AUTH_INVALID_AUTH_TICKET,
            self::CODE_PRE_AUTH_INVALID_AUTH_TOKEN,
            self::CODE_PRE_AUTH_INVOKE_API_NOT_PERMITTE,
            self::CODE_PRE_AUTH_INVALID_PACKAGE,
            self::CODE_PRE_AUTH_INVALID_AUTH_APP_ID,
            self::CODE_MERCHANT_NEED_FACE_CERTIFY,
            self::CODE_MERCHANT_STATE_NOT_SATISFY,
            self::CODE_UN_SUPPORT_ACCOUNT_CERTIFY_LEVEL,
            self::CODE_UN_SUPPORT_ACCOUNT_TYPE,
            self::CODE_ANT_PRODUCT_CONFLICT,
            self::CODE_USER_CARD_BALANCE_PAY_CLOSED,
            self::CODE_CHECK_AGDS_SELLER_ACCESS_FAILED,
            self::CODE_ANT_PRODUCT_DEPENDENCY_REQUIRED,
            self::CODE_ISV_NO_PERMISSION,
            self::CODE_AGENT_SIGN_IN_AUDIT_BY_SAME_ISV,
            self::CODE_AGENT_SIGN_IN_AUDIT_BY_DIFF_ISV,
            self::CODE_AGENT_SIGN_CONFIRM_BY_SAME_ISV,
            self::CODE_AGENT_SIGN_CONFIRM_BY_DIFF_ISV,
            self::CODE_AGENT_SIGN_VALID_BY_SAME_ISV,
            self::CODE_SHOP_SIGN_BOARD_PIC_RISK,
            self::CODE_BUSINESS_LICENSE_PIC_RISK,
            self::CODE_AGENT_SIGN_PRODUCT_IN_FORBIDDEN,
            self::CODE_BIZ_ERROR,
            self::CODE_ISV_IDENTITY_NOT_SATISFY,
        ];
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
        $this->container['code'] = $data['code'] ?? null;
        $this->container['links'] = $data['links'] ?? null;
        $this->container['message'] = $data['message'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        //if ($this->container['code'] === null) {
        //    $invalidProperties[] = "'code' can't be null";
        //}
        $allowedValues = $this->getCodeAllowableValues();
        if (!is_null($this->container['code']) && !in_array($this->container['code'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'code', must be one of '%s'",
                $this->container['code'],
                implode("', '", $allowedValues)
            );
        }

        //if ($this->container['message'] === null) {
        //    $invalidProperties[] = "'message' can't be null";
        //}
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
     * Gets code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string $code 错误码
     *
     * @return self
     */
    public function setCode($code)
    {
        $allowedValues = $this->getCodeAllowableValues();
        if (!is_null($code) && !in_array($code, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'code', must be one of '%s'",
                    $code,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets links
     *
     * @return string|null
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     *
     * @param string|null $links 解决方案链接
     *
     * @return self
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string $message 错误描述
     *
     * @return self
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

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


