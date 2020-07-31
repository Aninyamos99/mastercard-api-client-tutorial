/**
 * MDES for Merchants
 * The MDES APIs are designed as RPC style stateless web services where each API endpoint represents an operation to be performed.  All request and response payloads are sent in the JSON (JavaScript Object Notation) data-interchange format. Each endpoint in the API specifies the HTTP Method used to access it. All strings in request and response objects are to be UTF-8 encoded.  Each API URI includes the major and minor version of API that it conforms to.  This will allow multiple concurrent versions of the API to be deployed simultaneously. <br> __Authentication__ Mastercard uses OAuth 1.0a with body hash extension for authenticating the API clients. This requires every request that you send to  Mastercard to be signed with an RSA private key. A private-public RSA key pair must be generated consisting of: <br> 1 . A private key for the OAuth signature for API requests. It is recommended to keep the private key in a password-protected or hardware keystore. <br> 2. A public key is shared with Mastercard during the project setup process through either a certificate signing request (CSR) or the API Key Generator. Mastercard will use the public key to verify the OAuth signature that is provided on every API call.<br>  An OAUTH1.0a signer library is available on [GitHub](https://github.com/Mastercard/oauth1-signer-java) <br>  __Encryption__<br>  All communications between Issuer web service and the Mastercard gateway is encrypted using TLS. <br> __Additional Encryption of Sensitive Data__ In addition to the OAuth authentication, when using MDES Digital Enablement Service, any PCI sensitive and all account holder Personally Identifiable Information (PII) data must be encrypted. This requirement applies to the API fields containing encryptedData. Sensitive data is encrypted using a symmetric session (one-time-use) key. The symmetric session key is then wrapped with an RSA Public Key supplied by Mastercard during API setup phase (the Customer Encryption Key). <br>  Java Client Encryption Library available on [GitHub](https://github.com/Mastercard/client-encryption-java) 
 *
 * The version of the OpenAPI document: 1.2.9
 *
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 *
 * OpenAPI Generator version: 4.3.1
 *
 * Do not edit the class manually.
 *
 */

(function(root, factory) {
  if (typeof define === 'function' && define.amd) {
    // AMD.
    define(['expect.js', process.cwd()+'/src/index'], factory);
  } else if (typeof module === 'object' && module.exports) {
    // CommonJS-like environments that support module.exports, like Node.
    factory(require('expect.js'), require(process.cwd()+'/src/index'));
  } else {
    // Browser globals (root is window)
    factory(root.expect, root.MdesForMerchants);
  }
}(this, function(expect, MdesForMerchants) {
  'use strict';

  var instance;

  beforeEach(function() {
    instance = new MdesForMerchants.TokenInfo();
  });

  var getProperty = function(object, getter, property) {
    // Use getter method if present; otherwise, get the property directly.
    if (typeof object[getter] === 'function')
      return object[getter]();
    else
      return object[property];
  }

  var setProperty = function(object, setter, property, value) {
    // Use setter method if present; otherwise, set the property directly.
    if (typeof object[setter] === 'function')
      object[setter](value);
    else
      object[property] = value;
  }

  describe('TokenInfo', function() {
    it('should create an instance of TokenInfo', function() {
      // uncomment below and update the code to test TokenInfo
      //var instance = new MdesForMerchants.TokenInfo();
      //expect(instance).to.be.a(MdesForMerchants.TokenInfo);
    });

    it('should have the property tokenPanSuffix (base name: "tokenPanSuffix")', function() {
      // uncomment below and update the code to test the property tokenPanSuffix
      //var instance = new MdesForMerchants.TokenInfo();
      //expect(instance).to.be();
    });

    it('should have the property accountPanSuffix (base name: "accountPanSuffix")', function() {
      // uncomment below and update the code to test the property accountPanSuffix
      //var instance = new MdesForMerchants.TokenInfo();
      //expect(instance).to.be();
    });

    it('should have the property tokenExpiry (base name: "tokenExpiry")', function() {
      // uncomment below and update the code to test the property tokenExpiry
      //var instance = new MdesForMerchants.TokenInfo();
      //expect(instance).to.be();
    });

    it('should have the property accountPanExpiry (base name: "accountPanExpiry")', function() {
      // uncomment below and update the code to test the property accountPanExpiry
      //var instance = new MdesForMerchants.TokenInfo();
      //expect(instance).to.be();
    });

    it('should have the property dsrpCapable (base name: "dsrpCapable")', function() {
      // uncomment below and update the code to test the property dsrpCapable
      //var instance = new MdesForMerchants.TokenInfo();
      //expect(instance).to.be();
    });

    it('should have the property tokenAssuranceLevel (base name: "tokenAssuranceLevel")', function() {
      // uncomment below and update the code to test the property tokenAssuranceLevel
      //var instance = new MdesForMerchants.TokenInfo();
      //expect(instance).to.be();
    });

    it('should have the property productCategory (base name: "productCategory")', function() {
      // uncomment below and update the code to test the property productCategory
      //var instance = new MdesForMerchants.TokenInfo();
      //expect(instance).to.be();
    });

  });

}));
