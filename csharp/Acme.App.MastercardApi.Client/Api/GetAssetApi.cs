/* 
 * MDES for Merchants
 *
 * The MDES APIs are designed as RPC style stateless web services where each API endpoint represents an operation to be performed.  All request and response payloads are sent in the JSON (JavaScript Object Notation) data-interchange format. Each endpoint in the API specifies the HTTP Method used to access it. All strings in request and response objects are to be UTF-8 encoded.  Each API URI includes the major and minor version of API that it conforms to.  This will allow multiple concurrent versions of the API to be deployed simultaneously. <br> __Authentication__ Mastercard uses OAuth 1.0a with body hash extension for authenticating the API clients. This requires every request that you send to  Mastercard to be signed with an RSA private key. A private-public RSA key pair must be generated consisting of: <br> 1 . A private key for the OAuth signature for API requests. It is recommended to keep the private key in a password-protected or hardware keystore. <br> 2. A public key is shared with Mastercard during the project setup process through either a certificate signing request (CSR) or the API Key Generator. Mastercard will use the public key to verify the OAuth signature that is provided on every API call.<br>  An OAUTH1.0a signer library is available on [GitHub](https://github.com/Mastercard/oauth1-signer-java) <br>  __Encryption__<br>  All communications between Issuer web service and the Mastercard gateway is encrypted using TLS. <br> __Additional Encryption of Sensitive Data__ In addition to the OAuth authentication, when using MDES Digital Enablement Service, any PCI sensitive and all account holder Personally Identifiable Information (PII) data must be encrypted. This requirement applies to the API fields containing encryptedData. Sensitive data is encrypted using a symmetric session (one-time-use) key. The symmetric session key is then wrapped with an RSA Public Key supplied by Mastercard during API setup phase (the Customer Encryption Key). <br>  Java Client Encryption Library available on [GitHub](https://github.com/Mastercard/client-encryption-java) 
 *
 * The version of the OpenAPI document: 1.2.10
 * 
 * Generated by: https://github.com/openapitools/openapi-generator.git
 */

using System;
using System.Collections.Generic;
using System.Collections.ObjectModel;
using System.Linq;
using RestSharp.Portable;
using Acme.App.MastercardApi.Client.Client;
using Acme.App.MastercardApi.Client.Model;

namespace Acme.App.MastercardApi.Client.Api
{
    /// <summary>
    /// Represents a collection of functions to interact with the API endpoints
    /// </summary>
    public interface IGetAssetApi : IApiAccessor
    {
        #region Synchronous Operations
        /// <summary>
        /// Used to retrieve static Assets from the MDES repository.
        /// </summary>
        /// <remarks>
        /// This API is used to retrieve static Assets from MDES’s repository, such as - Card art, MasterCard brand logos, Issuers’ logos, and Terms and Conditions. Every Asset in the repository is referenced using an Asset ID. Once an Asset has been assigned to an Asset ID, the contents of the Asset will not change. If contents do need to change (for example, Issuer has supplied new artwork for a product), they will be updated in the repository and be assigned a new Asset ID.  Different types of Assets are supported in the repository, such as images and text files; and for each type of Asset, multiple formats may be supported. For example, a single image Asset may be supported in various file formats; or variant sizes, allowing the Token Requestor to select the most appropriate format to use for a particular target device. 
        /// </remarks>
        /// <exception cref="Acme.App.MastercardApi.Client.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="assetId">An Asset ID corresponds to an individual Digital Asset. Digital Assets are returned as part of the Product Configuration from the Tokenize Response. The Asset ID itself is supplied as a Get request in the form of https://{INSERT ENVIRONMENT URL HERE}/mdes/assets/static/1/0/asset/{AssetID} - See JSON examples for details.  </param>
        /// <returns>AssetResponseSchema</returns>
        AssetResponseSchema GetAsset (string assetId);

        /// <summary>
        /// Used to retrieve static Assets from the MDES repository.
        /// </summary>
        /// <remarks>
        /// This API is used to retrieve static Assets from MDES’s repository, such as - Card art, MasterCard brand logos, Issuers’ logos, and Terms and Conditions. Every Asset in the repository is referenced using an Asset ID. Once an Asset has been assigned to an Asset ID, the contents of the Asset will not change. If contents do need to change (for example, Issuer has supplied new artwork for a product), they will be updated in the repository and be assigned a new Asset ID.  Different types of Assets are supported in the repository, such as images and text files; and for each type of Asset, multiple formats may be supported. For example, a single image Asset may be supported in various file formats; or variant sizes, allowing the Token Requestor to select the most appropriate format to use for a particular target device. 
        /// </remarks>
        /// <exception cref="Acme.App.MastercardApi.Client.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="assetId">An Asset ID corresponds to an individual Digital Asset. Digital Assets are returned as part of the Product Configuration from the Tokenize Response. The Asset ID itself is supplied as a Get request in the form of https://{INSERT ENVIRONMENT URL HERE}/mdes/assets/static/1/0/asset/{AssetID} - See JSON examples for details.  </param>
        /// <returns>ApiResponse of AssetResponseSchema</returns>
        ApiResponse<AssetResponseSchema> GetAssetWithHttpInfo (string assetId);
        #endregion Synchronous Operations
        #region Asynchronous Operations
        /// <summary>
        /// Used to retrieve static Assets from the MDES repository.
        /// </summary>
        /// <remarks>
        /// This API is used to retrieve static Assets from MDES’s repository, such as - Card art, MasterCard brand logos, Issuers’ logos, and Terms and Conditions. Every Asset in the repository is referenced using an Asset ID. Once an Asset has been assigned to an Asset ID, the contents of the Asset will not change. If contents do need to change (for example, Issuer has supplied new artwork for a product), they will be updated in the repository and be assigned a new Asset ID.  Different types of Assets are supported in the repository, such as images and text files; and for each type of Asset, multiple formats may be supported. For example, a single image Asset may be supported in various file formats; or variant sizes, allowing the Token Requestor to select the most appropriate format to use for a particular target device. 
        /// </remarks>
        /// <exception cref="Acme.App.MastercardApi.Client.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="assetId">An Asset ID corresponds to an individual Digital Asset. Digital Assets are returned as part of the Product Configuration from the Tokenize Response. The Asset ID itself is supplied as a Get request in the form of https://{INSERT ENVIRONMENT URL HERE}/mdes/assets/static/1/0/asset/{AssetID} - See JSON examples for details.  </param>
        /// <returns>Task of AssetResponseSchema</returns>
        System.Threading.Tasks.Task<AssetResponseSchema> GetAssetAsync (string assetId);

        /// <summary>
        /// Used to retrieve static Assets from the MDES repository.
        /// </summary>
        /// <remarks>
        /// This API is used to retrieve static Assets from MDES’s repository, such as - Card art, MasterCard brand logos, Issuers’ logos, and Terms and Conditions. Every Asset in the repository is referenced using an Asset ID. Once an Asset has been assigned to an Asset ID, the contents of the Asset will not change. If contents do need to change (for example, Issuer has supplied new artwork for a product), they will be updated in the repository and be assigned a new Asset ID.  Different types of Assets are supported in the repository, such as images and text files; and for each type of Asset, multiple formats may be supported. For example, a single image Asset may be supported in various file formats; or variant sizes, allowing the Token Requestor to select the most appropriate format to use for a particular target device. 
        /// </remarks>
        /// <exception cref="Acme.App.MastercardApi.Client.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="assetId">An Asset ID corresponds to an individual Digital Asset. Digital Assets are returned as part of the Product Configuration from the Tokenize Response. The Asset ID itself is supplied as a Get request in the form of https://{INSERT ENVIRONMENT URL HERE}/mdes/assets/static/1/0/asset/{AssetID} - See JSON examples for details.  </param>
        /// <returns>Task of ApiResponse (AssetResponseSchema)</returns>
        System.Threading.Tasks.Task<ApiResponse<AssetResponseSchema>> GetAssetAsyncWithHttpInfo (string assetId);
        #endregion Asynchronous Operations
    }

    /// <summary>
    /// Represents a collection of functions to interact with the API endpoints
    /// </summary>
    public partial class GetAssetApi : IGetAssetApi
    {
        private Acme.App.MastercardApi.Client.Client.ExceptionFactory _exceptionFactory = (name, response) => null;

        /// <summary>
        /// Initializes a new instance of the <see cref="GetAssetApi"/> class.
        /// </summary>
        /// <returns></returns>
        public GetAssetApi(String basePath)
        {
            this.Configuration = new Acme.App.MastercardApi.Client.Client.Configuration { BasePath = basePath };

            ExceptionFactory = Acme.App.MastercardApi.Client.Client.Configuration.DefaultExceptionFactory;
        }

        /// <summary>
        /// Initializes a new instance of the <see cref="GetAssetApi"/> class
        /// </summary>
        /// <returns></returns>
        public GetAssetApi()
        {
            this.Configuration = Acme.App.MastercardApi.Client.Client.Configuration.Default;

            ExceptionFactory = Acme.App.MastercardApi.Client.Client.Configuration.DefaultExceptionFactory;
        }

        /// <summary>
        /// Initializes a new instance of the <see cref="GetAssetApi"/> class
        /// using Configuration object
        /// </summary>
        /// <param name="configuration">An instance of Configuration</param>
        /// <returns></returns>
        public GetAssetApi(Acme.App.MastercardApi.Client.Client.Configuration configuration = null)
        {
            if (configuration == null) // use the default one in Configuration
                this.Configuration = Acme.App.MastercardApi.Client.Client.Configuration.Default;
            else
                this.Configuration = configuration;

            ExceptionFactory = Acme.App.MastercardApi.Client.Client.Configuration.DefaultExceptionFactory;
        }

        /// <summary>
        /// Gets the base path of the API client.
        /// </summary>
        /// <value>The base path</value>
        public String GetBasePath()
        {
            return this.Configuration.ApiClient.RestClient.BaseUrl.ToString();
        }

        /// <summary>
        /// Sets the base path of the API client.
        /// </summary>
        /// <value>The base path</value>
        [Obsolete("SetBasePath is deprecated, please do 'Configuration.ApiClient = new ApiClient(\"http://new-path\")' instead.")]
        public void SetBasePath(String basePath)
        {
            // do nothing
        }

        /// <summary>
        /// Gets or sets the configuration object
        /// </summary>
        /// <value>An instance of the Configuration</value>
        public Acme.App.MastercardApi.Client.Client.Configuration Configuration {get; set;}

        /// <summary>
        /// Provides a factory method hook for the creation of exceptions.
        /// </summary>
        public Acme.App.MastercardApi.Client.Client.ExceptionFactory ExceptionFactory
        {
            get
            {
                if (_exceptionFactory != null && _exceptionFactory.GetInvocationList().Length > 1)
                {
                    throw new InvalidOperationException("Multicast delegate for ExceptionFactory is unsupported.");
                }
                return _exceptionFactory;
            }
            set { _exceptionFactory = value; }
        }

        /// <summary>
        /// Gets the default header.
        /// </summary>
        /// <returns>Dictionary of HTTP header</returns>
        [Obsolete("DefaultHeader is deprecated, please use Configuration.DefaultHeader instead.")]
        public IDictionary<String, String> DefaultHeader()
        {
            return new ReadOnlyDictionary<string, string>(this.Configuration.DefaultHeader);
        }

        /// <summary>
        /// Add default header.
        /// </summary>
        /// <param name="key">Header field name.</param>
        /// <param name="value">Header field value.</param>
        /// <returns></returns>
        [Obsolete("AddDefaultHeader is deprecated, please use Configuration.AddDefaultHeader instead.")]
        public void AddDefaultHeader(string key, string value)
        {
            this.Configuration.AddDefaultHeader(key, value);
        }

        /// <summary>
        /// Used to retrieve static Assets from the MDES repository. This API is used to retrieve static Assets from MDES’s repository, such as - Card art, MasterCard brand logos, Issuers’ logos, and Terms and Conditions. Every Asset in the repository is referenced using an Asset ID. Once an Asset has been assigned to an Asset ID, the contents of the Asset will not change. If contents do need to change (for example, Issuer has supplied new artwork for a product), they will be updated in the repository and be assigned a new Asset ID.  Different types of Assets are supported in the repository, such as images and text files; and for each type of Asset, multiple formats may be supported. For example, a single image Asset may be supported in various file formats; or variant sizes, allowing the Token Requestor to select the most appropriate format to use for a particular target device. 
        /// </summary>
        /// <exception cref="Acme.App.MastercardApi.Client.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="assetId">An Asset ID corresponds to an individual Digital Asset. Digital Assets are returned as part of the Product Configuration from the Tokenize Response. The Asset ID itself is supplied as a Get request in the form of https://{INSERT ENVIRONMENT URL HERE}/mdes/assets/static/1/0/asset/{AssetID} - See JSON examples for details.  </param>
        /// <returns>AssetResponseSchema</returns>
        public AssetResponseSchema GetAsset (string assetId)
        {
             ApiResponse<AssetResponseSchema> localVarResponse = GetAssetWithHttpInfo(assetId);
             return localVarResponse.Data;
        }

        /// <summary>
        /// Used to retrieve static Assets from the MDES repository. This API is used to retrieve static Assets from MDES’s repository, such as - Card art, MasterCard brand logos, Issuers’ logos, and Terms and Conditions. Every Asset in the repository is referenced using an Asset ID. Once an Asset has been assigned to an Asset ID, the contents of the Asset will not change. If contents do need to change (for example, Issuer has supplied new artwork for a product), they will be updated in the repository and be assigned a new Asset ID.  Different types of Assets are supported in the repository, such as images and text files; and for each type of Asset, multiple formats may be supported. For example, a single image Asset may be supported in various file formats; or variant sizes, allowing the Token Requestor to select the most appropriate format to use for a particular target device. 
        /// </summary>
        /// <exception cref="Acme.App.MastercardApi.Client.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="assetId">An Asset ID corresponds to an individual Digital Asset. Digital Assets are returned as part of the Product Configuration from the Tokenize Response. The Asset ID itself is supplied as a Get request in the form of https://{INSERT ENVIRONMENT URL HERE}/mdes/assets/static/1/0/asset/{AssetID} - See JSON examples for details.  </param>
        /// <returns>ApiResponse of AssetResponseSchema</returns>
        public ApiResponse<AssetResponseSchema> GetAssetWithHttpInfo (string assetId)
        {
            // verify the required parameter 'assetId' is set
            if (assetId == null)
                throw new ApiException(400, "Missing required parameter 'assetId' when calling GetAssetApi->GetAsset");

            var localVarPath = "./assets/static/1/0/asset/{AssetId}";
            var localVarPathParams = new Dictionary<String, String>();
            var localVarQueryParams = new List<KeyValuePair<String, String>>();
            var localVarHeaderParams = new Dictionary<String, String>(this.Configuration.DefaultHeader);
            var localVarFormParams = new Dictionary<String, String>();
            var localVarFileParams = new Dictionary<String, FileParameter>();
            Object localVarPostBody = null;

            // to determine the Content-Type header
            String[] localVarHttpContentTypes = new String[] {
            };
            String localVarHttpContentType = this.Configuration.ApiClient.SelectHeaderContentType(localVarHttpContentTypes);

            // to determine the Accept header
            String[] localVarHttpHeaderAccepts = new String[] {
                "application/json"
            };
            String localVarHttpHeaderAccept = this.Configuration.ApiClient.SelectHeaderAccept(localVarHttpHeaderAccepts);
            if (localVarHttpHeaderAccept != null)
                localVarHeaderParams.Add("Accept", localVarHttpHeaderAccept);

            if (assetId != null) localVarPathParams.Add("AssetId", this.Configuration.ApiClient.ParameterToString(assetId)); // path parameter


            // make the HTTP request
            IRestResponse localVarResponse = (IRestResponse) this.Configuration.ApiClient.CallApi(localVarPath,
                Method.GET, localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarFileParams,
                localVarPathParams, localVarHttpContentType);

            int localVarStatusCode = (int) localVarResponse.StatusCode;

            if (ExceptionFactory != null)
            {
                Exception exception = ExceptionFactory("GetAsset", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<AssetResponseSchema>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Key, x => string.Join(",", x.Value)),
                (AssetResponseSchema) this.Configuration.ApiClient.Deserialize(localVarResponse, typeof(AssetResponseSchema)));
        }

        /// <summary>
        /// Used to retrieve static Assets from the MDES repository. This API is used to retrieve static Assets from MDES’s repository, such as - Card art, MasterCard brand logos, Issuers’ logos, and Terms and Conditions. Every Asset in the repository is referenced using an Asset ID. Once an Asset has been assigned to an Asset ID, the contents of the Asset will not change. If contents do need to change (for example, Issuer has supplied new artwork for a product), they will be updated in the repository and be assigned a new Asset ID.  Different types of Assets are supported in the repository, such as images and text files; and for each type of Asset, multiple formats may be supported. For example, a single image Asset may be supported in various file formats; or variant sizes, allowing the Token Requestor to select the most appropriate format to use for a particular target device. 
        /// </summary>
        /// <exception cref="Acme.App.MastercardApi.Client.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="assetId">An Asset ID corresponds to an individual Digital Asset. Digital Assets are returned as part of the Product Configuration from the Tokenize Response. The Asset ID itself is supplied as a Get request in the form of https://{INSERT ENVIRONMENT URL HERE}/mdes/assets/static/1/0/asset/{AssetID} - See JSON examples for details.  </param>
        /// <returns>Task of AssetResponseSchema</returns>
        public async System.Threading.Tasks.Task<AssetResponseSchema> GetAssetAsync (string assetId)
        {
             ApiResponse<AssetResponseSchema> localVarResponse = await GetAssetAsyncWithHttpInfo(assetId);
             return localVarResponse.Data;

        }

        /// <summary>
        /// Used to retrieve static Assets from the MDES repository. This API is used to retrieve static Assets from MDES’s repository, such as - Card art, MasterCard brand logos, Issuers’ logos, and Terms and Conditions. Every Asset in the repository is referenced using an Asset ID. Once an Asset has been assigned to an Asset ID, the contents of the Asset will not change. If contents do need to change (for example, Issuer has supplied new artwork for a product), they will be updated in the repository and be assigned a new Asset ID.  Different types of Assets are supported in the repository, such as images and text files; and for each type of Asset, multiple formats may be supported. For example, a single image Asset may be supported in various file formats; or variant sizes, allowing the Token Requestor to select the most appropriate format to use for a particular target device. 
        /// </summary>
        /// <exception cref="Acme.App.MastercardApi.Client.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="assetId">An Asset ID corresponds to an individual Digital Asset. Digital Assets are returned as part of the Product Configuration from the Tokenize Response. The Asset ID itself is supplied as a Get request in the form of https://{INSERT ENVIRONMENT URL HERE}/mdes/assets/static/1/0/asset/{AssetID} - See JSON examples for details.  </param>
        /// <returns>Task of ApiResponse (AssetResponseSchema)</returns>
        public async System.Threading.Tasks.Task<ApiResponse<AssetResponseSchema>> GetAssetAsyncWithHttpInfo (string assetId)
        {
            // verify the required parameter 'assetId' is set
            if (assetId == null)
                throw new ApiException(400, "Missing required parameter 'assetId' when calling GetAssetApi->GetAsset");

            var localVarPath = "./assets/static/1/0/asset/{AssetId}";
            var localVarPathParams = new Dictionary<String, String>();
            var localVarQueryParams = new List<KeyValuePair<String, String>>();
            var localVarHeaderParams = new Dictionary<String, String>(this.Configuration.DefaultHeader);
            var localVarFormParams = new Dictionary<String, String>();
            var localVarFileParams = new Dictionary<String, FileParameter>();
            Object localVarPostBody = null;

            // to determine the Content-Type header
            String[] localVarHttpContentTypes = new String[] {
            };
            String localVarHttpContentType = this.Configuration.ApiClient.SelectHeaderContentType(localVarHttpContentTypes);

            // to determine the Accept header
            String[] localVarHttpHeaderAccepts = new String[] {
                "application/json"
            };
            String localVarHttpHeaderAccept = this.Configuration.ApiClient.SelectHeaderAccept(localVarHttpHeaderAccepts);
            if (localVarHttpHeaderAccept != null)
                localVarHeaderParams.Add("Accept", localVarHttpHeaderAccept);

            if (assetId != null) localVarPathParams.Add("AssetId", this.Configuration.ApiClient.ParameterToString(assetId)); // path parameter


            // make the HTTP request
            IRestResponse localVarResponse = (IRestResponse) await this.Configuration.ApiClient.CallApiAsync(localVarPath,
                Method.GET, localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarFileParams,
                localVarPathParams, localVarHttpContentType);

            int localVarStatusCode = (int) localVarResponse.StatusCode;

            if (ExceptionFactory != null)
            {
                Exception exception = ExceptionFactory("GetAsset", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<AssetResponseSchema>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Key, x => string.Join(",", x.Value)),
                (AssetResponseSchema) this.Configuration.ApiClient.Deserialize(localVarResponse, typeof(AssetResponseSchema)));
        }

    }
}