# Alipay\OpenAPISDK\AlipayOpenSpIsvRelationApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayOpenSpIsvRelationApi.md#query) | **GET** /v3/alipay/open/sp/isv/relation/query | spcenter服务商推广关系查询


## `query()`

```php
query($commodityId, $pageSize, $pageNum): \Alipay\OpenAPISDK\Model\AlipayOpenSpIsvRelationQueryResponseModel
```

spcenter服务商推广关系查询

用于开发服务商查询已与其达成推广关系的地推服务商信息

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenSpIsvRelationApi(
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

$commodityId = SS010301000000001908; // string | 服务市场商品Code
$pageSize = 10; // string | 每页数量，范围(1-100)。默认：10
$pageNum = 1; // string | 当前页码，从1开始。默认：1

try {
    $result = $apiInstance->query($commodityId, $pageSize, $pageNum);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenSpIsvRelationApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **commodityId** | **string**| 服务市场商品Code | [optional]
 **pageSize** | **string**| 每页数量，范围(1-100)。默认：10 | [optional]
 **pageNum** | **string**| 当前页码，从1开始。默认：1 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenSpIsvRelationQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
