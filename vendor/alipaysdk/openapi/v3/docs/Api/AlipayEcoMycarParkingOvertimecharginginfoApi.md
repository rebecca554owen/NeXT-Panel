# Alipay\OpenAPISDK\AlipayEcoMycarParkingOvertimecharginginfoApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**sync()**](AlipayEcoMycarParkingOvertimecharginginfoApi.md#sync) | **POST** /v3/alipay/eco/mycar/parking/overtimecharginginfo/sync | 车辆停车超时重计费接口


## `sync()`

```php
sync($alipayEcoMycarParkingOvertimecharginginfoSyncModel): object
```

车辆停车超时重计费接口

上传车辆在停车场超时出场后的重新计费信息，将停车动作推进到计费状态，上传信息通过该接口提交到支付宝，支付宝返回对应的信息

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayEcoMycarParkingOvertimecharginginfoApi(
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

$alipayEcoMycarParkingOvertimecharginginfoSyncModel = new \Alipay\OpenAPISDK\Model\AlipayEcoMycarParkingOvertimecharginginfoSyncModel(); // \Alipay\OpenAPISDK\Model\AlipayEcoMycarParkingOvertimecharginginfoSyncModel

try {
    $result = $apiInstance->sync($alipayEcoMycarParkingOvertimecharginginfoSyncModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayEcoMycarParkingOvertimecharginginfoApi->sync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayEcoMycarParkingOvertimecharginginfoSyncModel** | **\Alipay\OpenAPISDK\Model\AlipayEcoMycarParkingOvertimecharginginfoSyncModel**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
