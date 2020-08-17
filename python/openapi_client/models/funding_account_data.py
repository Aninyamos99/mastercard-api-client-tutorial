# coding: utf-8

"""
    MDES for Merchants

    The MDES APIs are designed as RPC style stateless web services where each API endpoint represents an operation to be performed.  All request and response payloads are sent in the JSON (JavaScript Object Notation) data-interchange format. Each endpoint in the API specifies the HTTP Method used to access it. All strings in request and response objects are to be UTF-8 encoded.  Each API URI includes the major and minor version of API that it conforms to.  This will allow multiple concurrent versions of the API to be deployed simultaneously. <br> __Authentication__ Mastercard uses OAuth 1.0a with body hash extension for authenticating the API clients. This requires every request that you send to  Mastercard to be signed with an RSA private key. A private-public RSA key pair must be generated consisting of: <br> 1 . A private key for the OAuth signature for API requests. It is recommended to keep the private key in a password-protected or hardware keystore. <br> 2. A public key is shared with Mastercard during the project setup process through either a certificate signing request (CSR) or the API Key Generator. Mastercard will use the public key to verify the OAuth signature that is provided on every API call.<br>  An OAUTH1.0a signer library is available on [GitHub](https://github.com/Mastercard/oauth1-signer-java) <br>  __Encryption__<br>  All communications between Issuer web service and the Mastercard gateway is encrypted using TLS. <br> __Additional Encryption of Sensitive Data__ In addition to the OAuth authentication, when using MDES Digital Enablement Service, any PCI sensitive and all account holder Personally Identifiable Information (PII) data must be encrypted. This requirement applies to the API fields containing encryptedData. Sensitive data is encrypted using a symmetric session (one-time-use) key. The symmetric session key is then wrapped with an RSA Public Key supplied by Mastercard during API setup phase (the Customer Encryption Key). <br>  Java Client Encryption Library available on [GitHub](https://github.com/Mastercard/client-encryption-java)   # noqa: E501

    The version of the OpenAPI document: 1.2.10
    Generated by: https://openapi-generator.tech
"""


import pprint
import re  # noqa: F401

import six

from openapi_client.configuration import Configuration


class FundingAccountData(object):
    """NOTE: This class is auto generated by OpenAPI Generator.
    Ref: https://openapi-generator.tech

    Do not edit the class manually.
    """

    """
    Attributes:
      openapi_types (dict): The key is attribute name
                            and the value is attribute type.
      attribute_map (dict): The key is attribute name
                            and the value is json key in definition.
    """
    openapi_types = {
        'card_account_data': 'CardAccountDataInbound',
        'account_holder_data': 'AccountHolderData',
        'source': 'str'
    }

    attribute_map = {
        'card_account_data': 'cardAccountData',
        'account_holder_data': 'accountHolderData',
        'source': 'source'
    }

    def __init__(self, card_account_data=None, account_holder_data=None, source=None, local_vars_configuration=None):  # noqa: E501
        """FundingAccountData - a model defined in OpenAPI"""  # noqa: E501
        if local_vars_configuration is None:
            local_vars_configuration = Configuration()
        self.local_vars_configuration = local_vars_configuration

        self._card_account_data = None
        self._account_holder_data = None
        self._source = None
        self.discriminator = None

        if card_account_data is not None:
            self.card_account_data = card_account_data
        if account_holder_data is not None:
            self.account_holder_data = account_holder_data
        if source is not None:
            self.source = source

    @property
    def card_account_data(self):
        """Gets the card_account_data of this FundingAccountData.  # noqa: E501


        :return: The card_account_data of this FundingAccountData.  # noqa: E501
        :rtype: CardAccountDataInbound
        """
        return self._card_account_data

    @card_account_data.setter
    def card_account_data(self, card_account_data):
        """Sets the card_account_data of this FundingAccountData.


        :param card_account_data: The card_account_data of this FundingAccountData.  # noqa: E501
        :type: CardAccountDataInbound
        """

        self._card_account_data = card_account_data

    @property
    def account_holder_data(self):
        """Gets the account_holder_data of this FundingAccountData.  # noqa: E501


        :return: The account_holder_data of this FundingAccountData.  # noqa: E501
        :rtype: AccountHolderData
        """
        return self._account_holder_data

    @account_holder_data.setter
    def account_holder_data(self, account_holder_data):
        """Sets the account_holder_data of this FundingAccountData.


        :param account_holder_data: The account_holder_data of this FundingAccountData.  # noqa: E501
        :type: AccountHolderData
        """

        self._account_holder_data = account_holder_data

    @property
    def source(self):
        """Gets the source of this FundingAccountData.  # noqa: E501

        (__Required as minimum for Tokenization__)  The source of the account. Must be one of   * ACCOUNT_ON_FILE   * ACCOUNT_ADDED_MANUALLY   * ACCOUNT_ADDED_VIA_APPLICATION  __Max Length:32__   # noqa: E501

        :return: The source of this FundingAccountData.  # noqa: E501
        :rtype: str
        """
        return self._source

    @source.setter
    def source(self, source):
        """Sets the source of this FundingAccountData.

        (__Required as minimum for Tokenization__)  The source of the account. Must be one of   * ACCOUNT_ON_FILE   * ACCOUNT_ADDED_MANUALLY   * ACCOUNT_ADDED_VIA_APPLICATION  __Max Length:32__   # noqa: E501

        :param source: The source of this FundingAccountData.  # noqa: E501
        :type: str
        """

        self._source = source

    def to_dict(self):
        """Returns the model properties as a dict"""
        result = {}

        for attr, _ in six.iteritems(self.openapi_types):
            value = getattr(self, attr)
            if isinstance(value, list):
                result[attr] = list(map(
                    lambda x: x.to_dict() if hasattr(x, "to_dict") else x,
                    value
                ))
            elif hasattr(value, "to_dict"):
                result[attr] = value.to_dict()
            elif isinstance(value, dict):
                result[attr] = dict(map(
                    lambda item: (item[0], item[1].to_dict())
                    if hasattr(item[1], "to_dict") else item,
                    value.items()
                ))
            else:
                result[attr] = value

        return result

    def to_str(self):
        """Returns the string representation of the model"""
        return pprint.pformat(self.to_dict())

    def __repr__(self):
        """For `print` and `pprint`"""
        return self.to_str()

    def __eq__(self, other):
        """Returns true if both objects are equal"""
        if not isinstance(other, FundingAccountData):
            return False

        return self.to_dict() == other.to_dict()

    def __ne__(self, other):
        """Returns true if both objects are not equal"""
        if not isinstance(other, FundingAccountData):
            return True

        return self.to_dict() != other.to_dict()