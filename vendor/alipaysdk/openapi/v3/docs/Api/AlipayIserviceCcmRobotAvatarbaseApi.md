# Alipay\OpenAPISDK\AlipayIserviceCcmRobotAvatarbaseApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayIserviceCcmRobotAvatarbaseApi.md#query) | **POST** /v3/alipay/iservice/ccm/robot/avatarbase/query | 虚拟数字人开放接口调用


## `query()`

```php
query($alipayIserviceCcmRobotAvatarbaseQueryModel): \Alipay\OpenAPISDK\Model\AlipayIserviceCcmRobotAvatarbaseQueryResponseModel
```

虚拟数字人开放接口调用

用于与数字人交互

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayIserviceCcmRobotAvatarbaseApi(
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

$alipayIserviceCcmRobotAvatarbaseQueryModel = new \Alipay\OpenAPISDK\Model\AlipayIserviceCcmRobotAvatarbaseQueryModel(); // \Alipay\OpenAPISDK\Model\AlipayIserviceCcmRobotAvatarbaseQueryModel

try {
    $result = $apiInstance->query($alipayIserviceCcmRobotAvatarbaseQueryModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayIserviceCcmRobotAvatarbaseApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayIserviceCcmRobotAvatarbaseQueryModel** | **\Alipay\OpenAPISDK\Model\AlipayIserviceCcmRobotAvatarbaseQueryModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayIserviceCcmRobotAvatarbaseQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
