# Alipay\OpenAPISDK\AlipayMarketingCampaignCashStatusApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**modify()**](AlipayMarketingCampaignCashStatusApi.md#modify) | **POST** /v3/alipay/marketing/campaign/cash/status/modify | 更改现金活动状态


## `modify()`

```php
modify($alipayMarketingCampaignCashStatusModifyModel): object
```

更改现金活动状态

商户更改现金活动状态，启动/暂停/终止

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayMarketingCampaignCashStatusApi(
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

$alipayMarketingCampaignCashStatusModifyModel = new \Alipay\OpenAPISDK\Model\AlipayMarketingCampaignCashStatusModifyModel(); // \Alipay\OpenAPISDK\Model\AlipayMarketingCampaignCashStatusModifyModel

try {
    $result = $apiInstance->modify($alipayMarketingCampaignCashStatusModifyModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayMarketingCampaignCashStatusApi->modify: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayMarketingCampaignCashStatusModifyModel** | **\Alipay\OpenAPISDK\Model\AlipayMarketingCampaignCashStatusModifyModel**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
