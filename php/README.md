# DigitalEnablementClient

These APIs are designed as RPC style stateless web services where each API endpoint represents an operation to be performed.  All request and response payloads are sent in the JSON (JavaScript Object Notation) data-interchange format. Each endpoint in the API specifies the HTTP Method used to access it. All strings in request and response objects are to be UTF-8 encoded.  Each API URI includes the major and minor version of API that it conforms to.  This will allow multiple concurrent versions of the API to be deployed simultaneously.
<br><br>
**Authentication**
<br><br>
Mastercard uses OAuth 1.0a with body hash extension for authenticating the API clients. This requires every request that you send to  Mastercard to be signed with an RSA private key. A private-public RSA key pair must be generated consisting of:
<br><br>
1. A private key for the OAuth signature for API requests. It is recommended to keep the private key in a password-protected or hardware keystore.
<br>
2. A public key is shared with Mastercard during the project setup process through either a certificate signing request (CSR) or the API Key Generator. Mastercard will use the public key to verify the OAuth signature that is provided on every API call.<br>

An OAUTH1.0a signer library is available on [GitHub](https://github.com/Mastercard/oauth1-signer-java)
<br><br>
**Encryption**
<br><br>
All communications between Issuer web service and the Mastercard gateway is encrypted using TLS.
<br><br>
**Additional Encryption of Sensitive Data**
<br><br>
In addition to the OAuth authentication, when using MDES Digital Enablement Service, any PCI sensitive and all account holder Personally Identifiable Information (PII) data must be encrypted. This requirement applies to the API fields containing encryptedData. Sensitive data is encrypted using a symmetric session (one-time-use) key. The symmetric session key is then wrapped with an RSA Public Key supplied by Mastercard during API setup phase (the Customer Encryption Key). <br>

Java Client Encryption Library available on [GitHub](https://github.com/Mastercard/client-encryption-java)



## Installation & Usage

### Requirements

PHP 7.2 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/DigitalEnablementClient/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new DigitalEnablementClient\Api\DeleteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$delete_request_schema = new \DigitalEnablementClient\Model\DeleteRequestSchema(); // \DigitalEnablementClient\Model\DeleteRequestSchema | Contains the details of the request message.

try {
    $result = $apiInstance->deleteDigitization($delete_request_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeleteApi->deleteDigitization: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.mastercard.com/mdes*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DeleteApi* | [**deleteDigitization**](docs/Api/DeleteApi.md#deletedigitization) | **POST** /digitization/static/1/0/delete | Used to delete one or more Tokens. The API is limited to 10 Tokens per request.
*GetAssetApi* | [**getAsset**](docs/Api/GetAssetApi.md#getasset) | **GET** /assets/static/1/0/asset/{AssetId} | Used to retrieve static Assets from the MDES repository.
*GetTaskStatusApi* | [**getTaskStatus**](docs/Api/GetTaskStatusApi.md#gettaskstatus) | **POST** /digitization/static/1/0/getTaskStatus | Used to check the status of any asynchronous task that was previously requested.
*GetTokenApi* | [**getToken**](docs/Api/GetTokenApi.md#gettoken) | **POST** /digitization/static/1/0/getToken | Used to get the status and details of a single given Token.
*NotifyTokenUpdatedApi* | [**notifyTokenUpdateForTokenStateChange**](docs/Api/NotifyTokenUpdatedApi.md#notifytokenupdatefortokenstatechange) | **POST** /digitization/static/1/0/notifyTokenUpdated | Outbound API used by MDES to notify the Token Requestor of significant Token updates, such as when the Token is activated, suspended, unsuspended or deleted; or when information about the Token or its product configuration has changed.
*SearchTokensApi* | [**searchTokens**](docs/Api/SearchTokensApi.md#searchtokens) | **POST** /digitization/static/1/0/searchTokens | Used to get basic token information for all tokens on a specified device, or all tokens mapped to the given Account PAN.
*SuspendApi* | [**createSuspend**](docs/Api/SuspendApi.md#createsuspend) | **POST** /digitization/static/1/0/suspend | Used to temporarily suspend one or more Tokens.
*TokenizeApi* | [**createTokenize**](docs/Api/TokenizeApi.md#createtokenize) | **POST** /digitization/static/1/0/tokenize | 
*TransactApi* | [**createTransact**](docs/Api/TransactApi.md#createtransact) | **POST** /remotetransaction/static/1/0/transact | Used by the Token Requestor to create a Digital Secure Remote Payment (\&quot;DSRP\&quot;) transaction cryptogram using the credentials stored within MDES in order to perform a DSRP transaction.
*UnsuspendApi* | [**createUnsuspend**](docs/Api/UnsuspendApi.md#createunsuspend) | **POST** /digitization/static/1/0/unsuspend | Used to unsuspend one or more previously suspended Tokens. The API is limited to 10 Tokens per request.

## Models

- [AccountHolderData](docs/Model/AccountHolderData.md)
- [AccountHolderDataOutbound](docs/Model/AccountHolderDataOutbound.md)
- [AssetResponseSchema](docs/Model/AssetResponseSchema.md)
- [AuthenticationMethods](docs/Model/AuthenticationMethods.md)
- [BillingAddress](docs/Model/BillingAddress.md)
- [CardAccountDataInbound](docs/Model/CardAccountDataInbound.md)
- [CardAccountDataOutbound](docs/Model/CardAccountDataOutbound.md)
- [DecisioningData](docs/Model/DecisioningData.md)
- [DeleteRequestSchema](docs/Model/DeleteRequestSchema.md)
- [DeleteResponseSchema](docs/Model/DeleteResponseSchema.md)
- [EncryptedPayload](docs/Model/EncryptedPayload.md)
- [EncryptedPayloadTransact](docs/Model/EncryptedPayloadTransact.md)
- [Error](docs/Model/Error.md)
- [ErrorsResponse](docs/Model/ErrorsResponse.md)
- [FundingAccountData](docs/Model/FundingAccountData.md)
- [FundingAccountInfo](docs/Model/FundingAccountInfo.md)
- [FundingAccountInfoEncryptedPayload](docs/Model/FundingAccountInfoEncryptedPayload.md)
- [GatewayError](docs/Model/GatewayError.md)
- [GatewayErrorsResponse](docs/Model/GatewayErrorsResponse.md)
- [GatewayErrorsSchema](docs/Model/GatewayErrorsSchema.md)
- [GetTaskStatusRequestSchema](docs/Model/GetTaskStatusRequestSchema.md)
- [GetTaskStatusResponseSchema](docs/Model/GetTaskStatusResponseSchema.md)
- [GetTokenRequestSchema](docs/Model/GetTokenRequestSchema.md)
- [GetTokenResponseSchema](docs/Model/GetTokenResponseSchema.md)
- [MediaContent](docs/Model/MediaContent.md)
- [NotifyTokenEncryptedPayload](docs/Model/NotifyTokenEncryptedPayload.md)
- [NotifyTokenUpdatedRequestSchema](docs/Model/NotifyTokenUpdatedRequestSchema.md)
- [NotifyTokenUpdatedResponseSchema](docs/Model/NotifyTokenUpdatedResponseSchema.md)
- [PhoneNumber](docs/Model/PhoneNumber.md)
- [ProductConfig](docs/Model/ProductConfig.md)
- [SearchTokensRequestSchema](docs/Model/SearchTokensRequestSchema.md)
- [SearchTokensResponseSchema](docs/Model/SearchTokensResponseSchema.md)
- [SuspendRequestSchema](docs/Model/SuspendRequestSchema.md)
- [SuspendResponseSchema](docs/Model/SuspendResponseSchema.md)
- [Token](docs/Model/Token.md)
- [TokenDetail](docs/Model/TokenDetail.md)
- [TokenDetailData](docs/Model/TokenDetailData.md)
- [TokenDetailDataGetTokenOnly](docs/Model/TokenDetailDataGetTokenOnly.md)
- [TokenDetailDataPAROnly](docs/Model/TokenDetailDataPAROnly.md)
- [TokenDetailGetTokenOnly](docs/Model/TokenDetailGetTokenOnly.md)
- [TokenDetailPAROnly](docs/Model/TokenDetailPAROnly.md)
- [TokenForGetToken](docs/Model/TokenForGetToken.md)
- [TokenForLCM](docs/Model/TokenForLCM.md)
- [TokenForNTU](docs/Model/TokenForNTU.md)
- [TokenInfo](docs/Model/TokenInfo.md)
- [TokenInfoForNTUAndGetToken](docs/Model/TokenInfoForNTUAndGetToken.md)
- [TokenizeRequestSchema](docs/Model/TokenizeRequestSchema.md)
- [TokenizeResponseSchema](docs/Model/TokenizeResponseSchema.md)
- [TransactEncryptedData](docs/Model/TransactEncryptedData.md)
- [TransactError](docs/Model/TransactError.md)
- [TransactRequestSchema](docs/Model/TransactRequestSchema.md)
- [TransactResponseSchema](docs/Model/TransactResponseSchema.md)
- [UnSuspendRequestSchema](docs/Model/UnSuspendRequestSchema.md)
- [UnSuspendResponseSchema](docs/Model/UnSuspendResponseSchema.md)

## Authorization
All endpoints do not require authorization.
## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.3.0`
    - Package version: `1.0.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
