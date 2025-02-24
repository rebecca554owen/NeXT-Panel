# Alipay\OpenAPISDK\AlipayCommerceEcConsumeDetailApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayCommerceEcConsumeDetailApi.md#query) | **POST** /v3/alipay/commerce/ec/consume/detail/query | 企业码账单详情查询


## `query()`

```php
query($alipayCommerceEcConsumeDetailQueryModel): \Alipay\OpenAPISDK\Model\AlipayCommerceEcConsumeDetailQueryResponseModel
```

企业码账单详情查询

用于企业查询企业码账单详情

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayCommerceEcConsumeDetailApi(
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

$alipayCommerceEcConsumeDetailQueryModel = new \Alipay\OpenAPISDK\Model\AlipayCommerceEcConsumeDetailQueryModel(); // \Alipay\OpenAPISDK\Model\AlipayCommerceEcConsumeDetailQueryModel

try {
    $result = $apiInstance->query($alipayCommerceEcConsumeDetailQueryModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayCommerceEcConsumeDetailApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayCommerceEcConsumeDetailQueryModel** | **\Alipay\OpenAPISDK\Model\AlipayCommerceEcConsumeDetailQueryModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayCommerceEcConsumeDetailQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
