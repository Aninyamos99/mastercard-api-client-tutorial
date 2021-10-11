"""
    MDES Digital Enablement API

    These APIs are designed as RPC style stateless web services where each API endpoint represents an operation to be performed.  All request and response payloads are sent in the JSON (JavaScript Object Notation) data-interchange format. Each endpoint in the API specifies the HTTP Method used to access it. All strings in request and response objects are to be UTF-8 encoded.  Each API URI includes the major and minor version of API that it conforms to.  This will allow multiple concurrent versions of the API to be deployed simultaneously. <br><br> **Authentication** <br><br> Mastercard uses OAuth 1.0a with body hash extension for authenticating the API clients. This requires every request that you send to  Mastercard to be signed with an RSA private key. A private-public RSA key pair must be generated consisting of: <br><br> 1. A private key for the OAuth signature for API requests. It is recommended to keep the private key in a password-protected or hardware keystore. <br> 2. A public key is shared with Mastercard during the project setup process through either a certificate signing request (CSR) or the API Key Generator. Mastercard will use the public key to verify the OAuth signature that is provided on every API call.<br>  An OAUTH1.0a signer library is available on [GitHub](https://github.com/Mastercard/oauth1-signer-java) <br><br> **Encryption** <br><br> All communications between Issuer web service and the Mastercard gateway is encrypted using TLS. <br><br> **Additional Encryption of Sensitive Data** <br><br> In addition to the OAuth authentication, when using MDES Digital Enablement Service, any PCI sensitive and all account holder Personally Identifiable Information (PII) data must be encrypted. This requirement applies to the API fields containing encryptedData. Sensitive data is encrypted using a symmetric session (one-time-use) key. The symmetric session key is then wrapped with an RSA Public Key supplied by Mastercard during API setup phase (the Customer Encryption Key). <br>  Java Client Encryption Library available on [GitHub](https://github.com/Mastercard/client-encryption-java)   # noqa: E501

    The version of the OpenAPI document: 1.3.0
    Generated by: https://openapi-generator.tech
"""


import re  # noqa: F401
import sys  # noqa: F401

from openapi_client.model_utils import (  # noqa: F401
    ApiTypeError,
    ModelComposed,
    ModelNormal,
    ModelSimple,
    cached_property,
    change_keys_js_to_python,
    convert_js_args_to_python_args,
    date,
    datetime,
    file_type,
    none_type,
    validate_get_composed_info,
)
from ..model_utils import OpenApiModel
from openapi_client.exceptions import ApiAttributeError



class DecisioningData(ModelNormal):
    """NOTE: This class is auto generated by OpenAPI Generator.
    Ref: https://openapi-generator.tech

    Do not edit the class manually.

    Attributes:
      allowed_values (dict): The key is the tuple path to the attribute
          and the for var_name this is (var_name,). The value is a dict
          with a capitalized key describing the allowed value and an allowed
          value. These dicts store the allowed enum values.
      attribute_map (dict): The key is attribute name
          and the value is json key in definition.
      discriminator_value_class_map (dict): A dict to go from the discriminator
          variable value to the discriminator class name.
      validations (dict): The key is the tuple path to the attribute
          and the for var_name this is (var_name,). The value is a dict
          that stores validations for max_length, min_length, max_items,
          min_items, exclusive_maximum, inclusive_maximum, exclusive_minimum,
          inclusive_minimum, and regex.
      additional_properties_type (tuple): A tuple of classes accepted
          as additional properties values.
    """

    allowed_values = {
    }

    validations = {
        ('recommendation',): {
            'max_length': 64,
        },
        ('recommendation_algorithm_version',): {
            'max_length': 16,
        },
        ('device_current_location',): {
            'max_length': 14,
        },
        ('device_ip_address',): {
            'max_length': 15,
        },
        ('mobile_number_suffix',): {
            'max_length': 32,
        },
        ('account_id_hash',): {
            'max_length': 64,
        },
    }

    @cached_property
    def additional_properties_type():
        """
        This must be a method because a model may have properties that are
        of type self, this must run after the class is loaded
        """
        return (bool, date, datetime, dict, float, int, list, str, none_type,)  # noqa: E501

    _nullable = False

    @cached_property
    def openapi_types():
        """
        This must be a method because a model may have properties that are
        of type self, this must run after the class is loaded

        Returns
            openapi_types (dict): The key is attribute name
                and the value is attribute type.
        """
        return {
            'recommendation': (str,),  # noqa: E501
            'recommendation_algorithm_version': (str,),  # noqa: E501
            'device_score': (str,),  # noqa: E501
            'account_score': (str,),  # noqa: E501
            'recommendation_reasons': ([str],),  # noqa: E501
            'device_current_location': (str,),  # noqa: E501
            'device_ip_address': (str,),  # noqa: E501
            'mobile_number_suffix': (str,),  # noqa: E501
            'account_id_hash': (str,),  # noqa: E501
        }

    @cached_property
    def discriminator():
        return None


    attribute_map = {
        'recommendation': 'recommendation',  # noqa: E501
        'recommendation_algorithm_version': 'recommendationAlgorithmVersion',  # noqa: E501
        'device_score': 'deviceScore',  # noqa: E501
        'account_score': 'accountScore',  # noqa: E501
        'recommendation_reasons': 'recommendationReasons',  # noqa: E501
        'device_current_location': 'deviceCurrentLocation',  # noqa: E501
        'device_ip_address': 'deviceIpAddress',  # noqa: E501
        'mobile_number_suffix': 'mobileNumberSuffix',  # noqa: E501
        'account_id_hash': 'accountIdHash',  # noqa: E501
    }

    read_only_vars = {
    }

    _composed_schemas = {}

    @classmethod
    @convert_js_args_to_python_args
    def _from_openapi_data(cls, *args, **kwargs):  # noqa: E501
        """DecisioningData - a model defined in OpenAPI

        Keyword Args:
            _check_type (bool): if True, values for parameters in openapi_types
                                will be type checked and a TypeError will be
                                raised if the wrong type is input.
                                Defaults to True
            _path_to_item (tuple/list): This is a list of keys or values to
                                drill down to the model in received_data
                                when deserializing a response
            _spec_property_naming (bool): True if the variable names in the input data
                                are serialized names, as specified in the OpenAPI document.
                                False if the variable names in the input data
                                are pythonic names, e.g. snake case (default)
            _configuration (Configuration): the instance to use when
                                deserializing a file_type parameter.
                                If passed, type conversion is attempted
                                If omitted no type conversion is done.
            _visited_composed_classes (tuple): This stores a tuple of
                                classes that we have traveled through so that
                                if we see that class again we will not use its
                                discriminator again.
                                When traveling through a discriminator, the
                                composed schema that is
                                is traveled through is added to this set.
                                For example if Animal has a discriminator
                                petType and we pass in "Dog", and the class Dog
                                allOf includes Animal, we move through Animal
                                once using the discriminator, and pick Dog.
                                Then in Dog, we will make an instance of the
                                Animal class but this time we won't travel
                                through its discriminator because we passed in
                                _visited_composed_classes = (Animal,)
            recommendation (str): **(OPTIONAL)** Digitization decision recommended by the Token Requestor. Must be either APPROVED (Recommend a decision of Approved), DECLINED (Recommend a decision of Decline). . [optional]  # noqa: E501
            recommendation_algorithm_version (str): **(OPTIONAL)** Version of the algorithm used by the Token Requestor to determine its recommendation. Must be a value of \"01\". Other values may be supported in the future. . [optional]  # noqa: E501
            device_score (str): **(OPTIONAL)** Score assigned by the Token Requestor for the target device being provisioned. Must be a value from 1 to 5. . [optional]  # noqa: E501
            account_score (str): **(OPTIONAL)** Score assigned by the Token Requestor for the consumer account or relationship. Must be a value from 1 to 5. . [optional]  # noqa: E501
            recommendation_reasons ([str]): **(OPTIONAL)** Code indicating the reasons the Token Requestor is suggesting the digitization decision.  See table here - https://developer.mastercard.com/mdes-digital-enablement/documentation/code-and-formats/#recommendation-reason-codes . [optional]  # noqa: E501
            device_current_location (str): **(OPTIONAL)** Latitude and longitude in the format \"(sign) latitude, (sign) longitude\" with a precision of 2 decimal places.  Ex - \"38.63, -90.25\"  Latitude is between -90 and 90.  Longitude between -180 and 180. Relates to the target device being provisioned. If there is no target device, then this should be the current consumer location, if available. . [optional]  # noqa: E501
            device_ip_address (str): **(OPTIONAL)** The IP address of the device through which the device reaches the internet. This may be a temporary or permanent IP address assigned to a home router, or the IP address of a gateway through which the device connects to a network. IPv4 address format of 4 octets separated by \".\" Ex - 127.0.0.1 Relates to the target device being provisioned. If there is no target device, then this should be the current consumer IP address, if available. . [optional]  # noqa: E501
            mobile_number_suffix (str): **(OPTIONAL)** The last few digits (typically four) of the consumer's mobile phone number as available on file or on the consumer's current device, which may or may not be the mobile number of the target device being provisioned. . [optional]  # noqa: E501
            account_id_hash (str): **(OPTIONAL)** SHA-256 hash of the Cardholder?s account ID with the Token Requestor. Typically expected to be an email address. . [optional]  # noqa: E501
        """

        _check_type = kwargs.pop('_check_type', True)
        _spec_property_naming = kwargs.pop('_spec_property_naming', False)
        _path_to_item = kwargs.pop('_path_to_item', ())
        _configuration = kwargs.pop('_configuration', None)
        _visited_composed_classes = kwargs.pop('_visited_composed_classes', ())

        self = super(OpenApiModel, cls).__new__(cls)

        if args:
            raise ApiTypeError(
                "Invalid positional arguments=%s passed to %s. Remove those invalid positional arguments." % (
                    args,
                    self.__class__.__name__,
                ),
                path_to_item=_path_to_item,
                valid_classes=(self.__class__,),
            )

        self._data_store = {}
        self._check_type = _check_type
        self._spec_property_naming = _spec_property_naming
        self._path_to_item = _path_to_item
        self._configuration = _configuration
        self._visited_composed_classes = _visited_composed_classes + (self.__class__,)

        for var_name, var_value in kwargs.items():
            if var_name not in self.attribute_map and \
                        self._configuration is not None and \
                        self._configuration.discard_unknown_keys and \
                        self.additional_properties_type is None:
                # discard variable.
                continue
            setattr(self, var_name, var_value)
        return self

    required_properties = set([
        '_data_store',
        '_check_type',
        '_spec_property_naming',
        '_path_to_item',
        '_configuration',
        '_visited_composed_classes',
    ])

    @convert_js_args_to_python_args
    def __init__(self, *args, **kwargs):  # noqa: E501
        """DecisioningData - a model defined in OpenAPI

        Keyword Args:
            _check_type (bool): if True, values for parameters in openapi_types
                                will be type checked and a TypeError will be
                                raised if the wrong type is input.
                                Defaults to True
            _path_to_item (tuple/list): This is a list of keys or values to
                                drill down to the model in received_data
                                when deserializing a response
            _spec_property_naming (bool): True if the variable names in the input data
                                are serialized names, as specified in the OpenAPI document.
                                False if the variable names in the input data
                                are pythonic names, e.g. snake case (default)
            _configuration (Configuration): the instance to use when
                                deserializing a file_type parameter.
                                If passed, type conversion is attempted
                                If omitted no type conversion is done.
            _visited_composed_classes (tuple): This stores a tuple of
                                classes that we have traveled through so that
                                if we see that class again we will not use its
                                discriminator again.
                                When traveling through a discriminator, the
                                composed schema that is
                                is traveled through is added to this set.
                                For example if Animal has a discriminator
                                petType and we pass in "Dog", and the class Dog
                                allOf includes Animal, we move through Animal
                                once using the discriminator, and pick Dog.
                                Then in Dog, we will make an instance of the
                                Animal class but this time we won't travel
                                through its discriminator because we passed in
                                _visited_composed_classes = (Animal,)
            recommendation (str): **(OPTIONAL)** Digitization decision recommended by the Token Requestor. Must be either APPROVED (Recommend a decision of Approved), DECLINED (Recommend a decision of Decline). . [optional]  # noqa: E501
            recommendation_algorithm_version (str): **(OPTIONAL)** Version of the algorithm used by the Token Requestor to determine its recommendation. Must be a value of \"01\". Other values may be supported in the future. . [optional]  # noqa: E501
            device_score (str): **(OPTIONAL)** Score assigned by the Token Requestor for the target device being provisioned. Must be a value from 1 to 5. . [optional]  # noqa: E501
            account_score (str): **(OPTIONAL)** Score assigned by the Token Requestor for the consumer account or relationship. Must be a value from 1 to 5. . [optional]  # noqa: E501
            recommendation_reasons ([str]): **(OPTIONAL)** Code indicating the reasons the Token Requestor is suggesting the digitization decision.  See table here - https://developer.mastercard.com/mdes-digital-enablement/documentation/code-and-formats/#recommendation-reason-codes . [optional]  # noqa: E501
            device_current_location (str): **(OPTIONAL)** Latitude and longitude in the format \"(sign) latitude, (sign) longitude\" with a precision of 2 decimal places.  Ex - \"38.63, -90.25\"  Latitude is between -90 and 90.  Longitude between -180 and 180. Relates to the target device being provisioned. If there is no target device, then this should be the current consumer location, if available. . [optional]  # noqa: E501
            device_ip_address (str): **(OPTIONAL)** The IP address of the device through which the device reaches the internet. This may be a temporary or permanent IP address assigned to a home router, or the IP address of a gateway through which the device connects to a network. IPv4 address format of 4 octets separated by \".\" Ex - 127.0.0.1 Relates to the target device being provisioned. If there is no target device, then this should be the current consumer IP address, if available. . [optional]  # noqa: E501
            mobile_number_suffix (str): **(OPTIONAL)** The last few digits (typically four) of the consumer's mobile phone number as available on file or on the consumer's current device, which may or may not be the mobile number of the target device being provisioned. . [optional]  # noqa: E501
            account_id_hash (str): **(OPTIONAL)** SHA-256 hash of the Cardholder?s account ID with the Token Requestor. Typically expected to be an email address. . [optional]  # noqa: E501
        """

        _check_type = kwargs.pop('_check_type', True)
        _spec_property_naming = kwargs.pop('_spec_property_naming', False)
        _path_to_item = kwargs.pop('_path_to_item', ())
        _configuration = kwargs.pop('_configuration', None)
        _visited_composed_classes = kwargs.pop('_visited_composed_classes', ())

        if args:
            raise ApiTypeError(
                "Invalid positional arguments=%s passed to %s. Remove those invalid positional arguments." % (
                    args,
                    self.__class__.__name__,
                ),
                path_to_item=_path_to_item,
                valid_classes=(self.__class__,),
            )

        self._data_store = {}
        self._check_type = _check_type
        self._spec_property_naming = _spec_property_naming
        self._path_to_item = _path_to_item
        self._configuration = _configuration
        self._visited_composed_classes = _visited_composed_classes + (self.__class__,)

        for var_name, var_value in kwargs.items():
            if var_name not in self.attribute_map and \
                        self._configuration is not None and \
                        self._configuration.discard_unknown_keys and \
                        self.additional_properties_type is None:
                # discard variable.
                continue
            setattr(self, var_name, var_value)
            if var_name in self.read_only_vars:
                raise ApiAttributeError(f"`{var_name}` is a read-only attribute. Use `from_openapi_data` to instantiate "
                                     f"class with read only attributes.")
