# OpenapiClient::NotifyTokenUpdatedResponseSchema

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**response_host** | **String** | The host that originated the request. Future calls in the same conversation may be routed to this host.  | [optional] 
**response_id** | **String** | Unique identifier for the response.  | [optional] 

## Code Sample

```ruby
require 'OpenapiClient'

instance = OpenapiClient::NotifyTokenUpdatedResponseSchema.new(response_host: site1.mastercard.com,
                                 response_id: 123456)
```


