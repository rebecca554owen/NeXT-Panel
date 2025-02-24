# Alipay\OpenAPISDK\ZolozAuthenticationCustomerFtokenApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](ZolozAuthenticationCustomerFtokenApi.md#query) | **POST** /v3/zoloz/authentication/customer/ftoken/query | 查询刷脸结果信息接口


## `query()`

```php
query($zolozAuthenticationCustomerFtokenQueryModel): \Alipay\OpenAPISDK\Model\ZolozAuthenticationCustomerFtokenQueryResponseModel
```

查询刷脸结果信息接口

查询刷脸结果信息接口

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\ZolozAuthenticationCustomerFtokenApi(
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

$zolozAuthenticationCustomerFtokenQueryModel = new \Alipay\OpenAPISDK\Model\ZolozAuthenticationCustomerFtokenQueryModel(); // \Alipay\OpenAPISDK\Model\ZolozAuthenticationCustomerFtokenQueryModel

try {
    $result = $apiInstance->query($zolozAuthenticationCustomerFtokenQueryModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZolozAuthenticationCustomerFtokenApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **zolozAuthenticationCustomerFtokenQueryModel** | **\Alipay\OpenAPISDK\Model\ZolozAuthenticationCustomerFtokenQueryModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\ZolozAuthenticationCustomerFtokenQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
