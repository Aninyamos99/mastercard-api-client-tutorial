
# Acme.App.MastercardApi.Client.Model.GetTokenRequestSchema

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ResponseHost** | **string** | The host that originated the request. Future calls in the same conversation may be routed to this host.  | [optional] 
**RequestId** | **string** | Unique identifier for the request.  | 
**PaymentAppInstanceId** | **string** | Identifier for the specific Mobile Payment App instance, unique across a given Wallet Identifier. This value cannot be changed after digitization. This field is alphanumeric and additionally web-safe base64 characters per RFC 4648 (minus \&quot;-\&quot;, underscore \&quot;_\&quot;) up to a maximum length of 48, &#x3D; should not be URL encoded. Conditional - not applicable for server-based tokens but required otherwise.     __Max Length:48__  | [optional] 
**TokenUniqueReference** | **string** | The specific Token to be queried.     __Max Length:64__   | 
**IncludeTokenDetail** | **string** | Flag to indicate if the encrypted token should be returned.     __Max Length:5__   | [optional] 

[[Back to Model list]](../README.md#documentation-for-models)
[[Back to API list]](../README.md#documentation-for-api-endpoints)
[[Back to README]](../README.md)

