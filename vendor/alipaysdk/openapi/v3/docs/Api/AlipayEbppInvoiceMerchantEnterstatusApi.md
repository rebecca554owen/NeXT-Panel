# Alipay\OpenAPISDK\AlipayEbppInvoiceMerchantEnterstatusApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayEbppInvoiceMerchantEnterstatusApi.md#query) | **GET** /v3/alipay/ebpp/invoice/merchant/enterstatus/query | 商户入驻流程状态查询


## `query()`

```php
query($mShortName, $productCode, $processId): \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceMerchantEnterstatusQueryResponseModel
```

商户入驻流程状态查询

提供给替商户批量入驻的服务商，主动查询入驻流程的状态。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayEbppInvoiceMerchantEnterstatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

// 初始化alipay参数
$alipayConfig = new \Alipay\OpenAPISDK\Util\Model\AlipayConfig();
$alipayConfig->setAppId('app_id');
$alipayConfig->setPrivateKey('private_key');
// 密钥模式
$alipayConfig->setAlipayPublicKey('alipay_public_key');
// 证书模式
// $alipayConfig->setAppCertPath('../appCertPublicKey.crt');
// $alipayConfig->setAlipayPublicCertPath('../alipayCertPublicKey_RSA2.crt');
// $alipayConfig->setRootCertPath('../alipayRootCert.crt');
$alipayConfig->setEncryptKey('encrypt_key');
$alipayConfigUtil = new \Alipay\OpenAPISDK\Util\AlipayConfigUtil($alipayConfig);
$apiInstance->setAlipayConfigUtil($alipayConfigUtil);

$mShortName = MYJF; // string | 商户品牌简称，只能由大写字母、下划线、数字组成，且必须以大写字母开头。
$productCode = STANDARD_INVOICE; // string | 商户门店入驻的产品码,STANDARD_INVOICE:扫码开票，INVOICE_RETURN:企业自建-发票回传，INVOICE_EXPENSE:发票报销，PAYMENT_OPEN:支付即开票，PAY_FEE_OPEN:缴费后开票。
$processId = 1234567; // string | 工单流水号（如果不填则默认查询最近一条工单）

try {
    $result = $apiInstance->query($mShortName, $productCode, $processId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayEbppInvoiceMerchantEnterstatusApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mShortName** | **string**| 商户品牌简称，只能由大写字母、下划线、数字组成，且必须以大写字母开头。 | [optional]
 **productCode** | **string**| 商户门店入驻的产品码,STANDARD_INVOICE:扫码开票，INVOICE_RETURN:企业自建-发票回传，INVOICE_EXPENSE:发票报销，PAYMENT_OPEN:支付即开票，PAY_FEE_OPEN:缴费后开票。 | [optional]
 **processId** | **string**| 工单流水号（如果不填则默认查询最近一条工单） | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceMerchantEnterstatusQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
