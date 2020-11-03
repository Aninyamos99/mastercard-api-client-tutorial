# ErrorsResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**error_code** | **str** | __CONDITIONAL__&lt;br&gt; Returned in the event of an error and contains the reason the operation failed. Only use if errors object is not present. &lt;br&gt; __Max Length: 32__  | [optional] 
**error_description** | **str** | __CONDITIONAL__&lt;br&gt; Returned in the event of an error and contains a description of why the operation failed. Only use if errors object is not present. &lt;br&gt; __Max Length: 32__   | [optional] 
**response_host** | **str** | The MasterCard host that originated the request. Future calls in the same conversation may be routed to this host.   | [optional] 
**response_id** | **str** | Unique identifier for the response.  | [optional] 
**errors** | [**Error**](Error.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


