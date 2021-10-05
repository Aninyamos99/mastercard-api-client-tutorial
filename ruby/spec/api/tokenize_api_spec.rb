=begin
# API tests for OpenapiClient::TokenizeApi

=end

require 'spec_helper'
require 'json'

require 'oauth'
require 'mcapi/encryption/openapi_interceptor'

CONFIG = JSON.parse(File.read('config.json'))

## OAuth config
P12 = ''.freeze # TODO
KEY_ALIAS = ''.freeze # TODO
KEY_PASSWORD = ''.freeze # TODO
CONSUMER_KEY = ''.freeze # TODO

BASE_PATH = 'https://sandbox.api.mastercard.com/mdes'.freeze

def create_client(client, config, base_path, p12, key_alias, key_password, consumer_key)
  uri = URI(base_path)
  client.configure do |c|
    c.scheme = uri.scheme
    c.host = uri.host
    c.server_index = nil
  end
  api_client = client::ApiClient.new

  ## Add Field Level Encryption interceptor
  McAPI::Encryption::OpenAPIInterceptor.install_field_level_encryption(api_client, config)

  is = File.binread(p12)
  signing_key = OpenSSL::PKCS12.new(is, key_password).key
  Typhoeus.before {|request|
    authHeader = OAuth.get_authorization_header request.url, request.options[:method],
                                                request.options[:body], consumer_key, signing_key
    request.options[:headers] = request.options[:headers].merge({'Authorization' => authHeader})
  }
  # Uncomment to enable debug
  # api_client.config.debugging = true
  api_client
end

def create_req
  {
    consumerLanguage: "en",
    fundingAccountInfo: {
      encryptedPayload: {
        encryptedData: {
          accountHolderData: {
            accountHolderAddress: {
              city: "St. Louis",
              country: "USA",
              countrySubdivision: "MO",
              line1: "100 1st Street",
              line2: "Apt. 4B",
              postalCode: "61000"
            },
            accountHolderName: "John Doe"
          },
          cardAccountData: {
            accountNumber: "5123456789012345",
            expiryMonth: "09",
            expiryYear: "25",
            securityCode: "123"
          },
          source: "ACCOUNT_ON_FILE"
        }
      }
    },
    requestId: "123456",
    responseHost: "site1.your-server.com",
    taskId: "123456",
    tokenRequestorId: "98765432101",
    tokenType: "CLOUD",
    tokenizationAuthenticationValue: "RHVtbXkgYmFzZSA2NCBkYXRhIC0gdGhpcyBpcyBub3QgYSByZWFsIFRBViBleGFtcGxl"
  }
end

describe 'TokenizeApi' do
  before do
    # run before each test
    @api_client = create_client(OpenapiClient, CONFIG, BASE_PATH, P12, KEY_ALIAS, KEY_PASSWORD, CONSUMER_KEY)
  end

  # unit tests for create_tokenize
  # Used to digitize a card to create a server-based Token. MDES will perform both card availability and eligibility checks to check that this specific card is eligible for digitization. As both availability and eligibility are combined, only a Tokenization Authorization message is sent to the issuer as part of this request to authorize the digitization. No Tokenization Eligibility message is sent. The digitization decision will be one of Approved or Declined.
  # @param [Hash] opts the optional parameters
  # @option opts [TokenizeRequestSchema] :tokenize_request_schema A Tokenize request is used to digitize a PAN.
  # @return [TokenizeResponseSchema]
  describe 'create_tokenize test' do
    it 'should work' do
      api_instance = OpenapiClient::TokenizeApi.new @api_client
      res = api_instance.create_tokenize({tokenize_request_schema: create_req})
      expect(res.decision).to eq('APPROVED')
    end
  end

end
