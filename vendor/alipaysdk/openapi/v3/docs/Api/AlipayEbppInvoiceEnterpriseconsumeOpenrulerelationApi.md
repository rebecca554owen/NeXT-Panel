# Alipay\OpenAPISDK\AlipayEbppInvoiceEnterpriseconsumeOpenrulerelationApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**create()**](AlipayEbppInvoiceEnterpriseconsumeOpenrulerelationApi.md#create) | **POST** /v3/alipay/ebpp/invoice/enterpriseconsume/openrulerelation/create | 新增开票规则并绑定费控规则


## `create()`

```php
create($alipayEbppInvoiceEnterpriseconsumeOpenrulerelationCreateModel): \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceEnterpriseconsumeOpenrulerelationCreateResponseModel
```

新增开票规则并绑定费控规则

新增开票规则并自动绑定到费控规则

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayEbppInvoiceEnterpriseconsumeOpenrulerelationApi(
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

$alipayEbppInvoiceEnterpriseconsumeOpenrulerelationCreateModel = new \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceEnterpriseconsumeOpenrulerelationCreateModel(); // \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceEnterpriseconsumeOpenrulerelationCreateModel

try {
    $result = $apiInstance->create($alipayEbppInvoiceEnterpriseconsumeOpenrulerelationCreateModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayEbppInvoiceEnterpriseconsumeOpenrulerelationApi->create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayEbppInvoiceEnterpriseconsumeOpenrulerelationCreateModel** | **\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceEnterpriseconsumeOpenrulerelationCreateModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceEnterpriseconsumeOpenrulerelationCreateResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
