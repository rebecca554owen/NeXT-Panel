# Alipay\OpenAPISDK\AlipayOpenPublicMessageTotalApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**send()**](AlipayOpenPublicMessageTotalApi.md#send) | **POST** /v3/alipay/open/public/message/total/send | 群发消息


## `send()`

```php
send($alipayOpenPublicMessageTotalSendModel): \Alipay\OpenAPISDK\Model\AlipayOpenPublicMessageTotalSendResponseModel
```

群发消息

群发消息

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenPublicMessageTotalApi(
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

$alipayOpenPublicMessageTotalSendModel = new \Alipay\OpenAPISDK\Model\AlipayOpenPublicMessageTotalSendModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenPublicMessageTotalSendModel

try {
    $result = $apiInstance->send($alipayOpenPublicMessageTotalSendModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenPublicMessageTotalApi->send: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenPublicMessageTotalSendModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenPublicMessageTotalSendModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenPublicMessageTotalSendResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
