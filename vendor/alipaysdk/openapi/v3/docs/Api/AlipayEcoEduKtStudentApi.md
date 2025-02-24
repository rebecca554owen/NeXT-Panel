# Alipay\OpenAPISDK\AlipayEcoEduKtStudentApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**modify()**](AlipayEcoEduKtStudentApi.md#modify) | **POST** /v3/alipay/eco/edu/kt/student/modify | 学生信息更新


## `modify()`

```php
modify($alipayEcoEduKtStudentModifyModel): \Alipay\OpenAPISDK\Model\AlipayEcoEduKtStudentModifyResponseModel
```

学生信息更新

学生信息更新

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayEcoEduKtStudentApi(
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

$alipayEcoEduKtStudentModifyModel = new \Alipay\OpenAPISDK\Model\AlipayEcoEduKtStudentModifyModel(); // \Alipay\OpenAPISDK\Model\AlipayEcoEduKtStudentModifyModel

try {
    $result = $apiInstance->modify($alipayEcoEduKtStudentModifyModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayEcoEduKtStudentApi->modify: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayEcoEduKtStudentModifyModel** | **\Alipay\OpenAPISDK\Model\AlipayEcoEduKtStudentModifyModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayEcoEduKtStudentModifyResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
