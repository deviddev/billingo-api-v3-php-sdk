# Swagger\Client\DocumentApi

All URIs are relative to *https://api.billingo.hu/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**archiveDocument**](DocumentApi.md#archivedocument) | **PUT** /documents/{id}/archive | Archive a proforma document.
[**cancelDocument**](DocumentApi.md#canceldocument) | **POST** /documents/{id}/cancel | Cancel a document
[**createDocument**](DocumentApi.md#createdocument) | **POST** /documents | Create a document
[**createDocumentFromDraft**](DocumentApi.md#createdocumentfromdraft) | **PUT** /documents/{id} | Converts a draft to an invoice.
[**createDocumentFromProforma**](DocumentApi.md#createdocumentfromproforma) | **POST** /documents/{id}/create-from-proforma | Create a document from proforma.
[**createModificationDocument**](DocumentApi.md#createmodificationdocument) | **POST** /documents/{id}/create-modification-document | Create a modification document.
[**createReceipt**](DocumentApi.md#createreceipt) | **POST** /documents/receipt | Create a receipt
[**createReceiptFromDraft**](DocumentApi.md#createreceiptfromdraft) | **PUT** /documents/receipt/{id} | Converts a draft to a receipt.
[**deleteDocument**](DocumentApi.md#deletedocument) | **DELETE** /documents/{id} | Delete a draft.
[**deletePayment**](DocumentApi.md#deletepayment) | **DELETE** /documents/{id}/payments | Delete all payment history on document
[**documentCopy**](DocumentApi.md#documentcopy) | **POST** /documents/{id}/copy | Copy a document
[**downloadDocument**](DocumentApi.md#downloaddocument) | **GET** /documents/{id}/download | Download a document in PDF format.
[**getDocument**](DocumentApi.md#getdocument) | **GET** /documents/{id} | Retrieve a document
[**getDocumentByVendorId**](DocumentApi.md#getdocumentbyvendorid) | **GET** /documents/vendor/{vendor_id} | Retrieve a document by vendor id
[**getOnlineSzamlaStatus**](DocumentApi.md#getonlineszamlastatus) | **GET** /documents/{id}/online-szamla | Retrieve a document Online Számla status
[**getPayment**](DocumentApi.md#getpayment) | **GET** /documents/{id}/payments | Retrieve a payment histroy
[**getPublicUrl**](DocumentApi.md#getpublicurl) | **GET** /documents/{id}/public-url | Retrieve a document download public url.
[**listDocument**](DocumentApi.md#listdocument) | **GET** /documents | List all documents
[**posPrint**](DocumentApi.md#posprint) | **GET** /documents/{id}/print/pos | Returns a printable POS PDF
[**sendDocument**](DocumentApi.md#senddocument) | **POST** /documents/{id}/send | Send invoice to given email adresses.
[**updatePayment**](DocumentApi.md#updatepayment) | **PUT** /documents/{id}/payments | Update payment history

# **archiveDocument**
> archiveDocument($id)

Archive a proforma document.

Archive an existing proforma document.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $apiInstance->archiveDocument($id);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->archiveDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cancelDocument**
> \Swagger\Client\Model\Document cancelDocument($id, $body)

Cancel a document

Cancel a document. Returns a cancellation document object if the cancellation is succeded.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$body = new \Swagger\Client\Model\DocumentCancellation(); // \Swagger\Client\Model\DocumentCancellation | Comment and notifiable email addresses - comma separated for multiple email addresses

try {
    $result = $apiInstance->cancelDocument($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->cancelDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **body** | [**\Swagger\Client\Model\DocumentCancellation**](../Model/DocumentCancellation.md)| Comment and notifiable email addresses - comma separated for multiple email addresses | [optional]

### Return type

[**\Swagger\Client\Model\Document**](../Model/Document.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createDocument**
> \Swagger\Client\Model\Document createDocument($body)

Create a document

Create a new document. Returns a document object if the create is succeded.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\DocumentInsert(); // \Swagger\Client\Model\DocumentInsert | DocumentInsert object that you would like to store.

try {
    $result = $apiInstance->createDocument($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->createDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\DocumentInsert**](../Model/DocumentInsert.md)| DocumentInsert object that you would like to store. |

### Return type

[**\Swagger\Client\Model\Document**](../Model/Document.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createDocumentFromDraft**
> \Swagger\Client\Model\Document createDocumentFromDraft($body, $id)

Converts a draft to an invoice.

Converts a draft to an invoice. Returns the invoice object if the convert is succeded.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\DocumentInsert(); // \Swagger\Client\Model\DocumentInsert | DocumentInsert object that you would like to store.
$id = 56; // int | 

try {
    $result = $apiInstance->createDocumentFromDraft($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->createDocumentFromDraft: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\DocumentInsert**](../Model/DocumentInsert.md)| DocumentInsert object that you would like to store. |
 **id** | **int**|  |

### Return type

[**\Swagger\Client\Model\Document**](../Model/Document.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createDocumentFromProforma**
> \Swagger\Client\Model\Document createDocumentFromProforma($id, $body)

Create a document from proforma.

Create a new document from proforma. Returns a document object if the create is succeded.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$body = new \Swagger\Client\Model\InvoiceSettings(); // \Swagger\Client\Model\InvoiceSettings | InvoiceSettings object.

try {
    $result = $apiInstance->createDocumentFromProforma($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->createDocumentFromProforma: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **body** | [**\Swagger\Client\Model\InvoiceSettings**](../Model/InvoiceSettings.md)| InvoiceSettings object. | [optional]

### Return type

[**\Swagger\Client\Model\Document**](../Model/Document.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createModificationDocument**
> \Swagger\Client\Model\Document createModificationDocument($body, $id)

Create a modification document.

Create a modification document for the given document. Returns a new document object if the create is successful.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ModificationDocumentInsert(); // \Swagger\Client\Model\ModificationDocumentInsert | ModificationDocumentInsert object that you would like to store.
$id = 56; // int | 

try {
    $result = $apiInstance->createModificationDocument($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->createModificationDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ModificationDocumentInsert**](../Model/ModificationDocumentInsert.md)| ModificationDocumentInsert object that you would like to store. |
 **id** | **int**|  |

### Return type

[**\Swagger\Client\Model\Document**](../Model/Document.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createReceipt**
> \Swagger\Client\Model\Document createReceipt($body)

Create a receipt

Create a new receipt. Returns a document object if the create is succeded.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ReceiptInsert(); // \Swagger\Client\Model\ReceiptInsert | ReceiptInsert object that you would like to store.

try {
    $result = $apiInstance->createReceipt($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->createReceipt: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ReceiptInsert**](../Model/ReceiptInsert.md)| ReceiptInsert object that you would like to store. |

### Return type

[**\Swagger\Client\Model\Document**](../Model/Document.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createReceiptFromDraft**
> \Swagger\Client\Model\Document createReceiptFromDraft($body, $id)

Converts a draft to a receipt.

Converts a draft to a receipt. Returns the receipt object if the convert is succeded.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ReceiptInsert(); // \Swagger\Client\Model\ReceiptInsert | ReceiptInsert object that you would like to store.
$id = 56; // int | 

try {
    $result = $apiInstance->createReceiptFromDraft($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->createReceiptFromDraft: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ReceiptInsert**](../Model/ReceiptInsert.md)| ReceiptInsert object that you would like to store. |
 **id** | **int**|  |

### Return type

[**\Swagger\Client\Model\Document**](../Model/Document.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDocument**
> deleteDocument($id)

Delete a draft.

Delete an existing draft.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $apiInstance->deleteDocument($id);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->deleteDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePayment**
> \Swagger\Client\Model\PaymentHistory[] deletePayment($id)

Delete all payment history on document

Delete all exist payment history on document.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $result = $apiInstance->deletePayment($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->deletePayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Swagger\Client\Model\PaymentHistory[]**](../Model/PaymentHistory.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **documentCopy**
> \Swagger\Client\Model\Document documentCopy($id)

Copy a document

Copy a document. Returns the new document if the copy was succeded.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $result = $apiInstance->documentCopy($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->documentCopy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Swagger\Client\Model\Document**](../Model/Document.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **downloadDocument**
> string downloadDocument($id)

Download a document in PDF format.

Download a document. Returns a document in PDF format.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $result = $apiInstance->downloadDocument($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->downloadDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

**string**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/pdf, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDocument**
> \Swagger\Client\Model\Document getDocument($id)

Retrieve a document

Retrieves the details of an existing document.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $result = $apiInstance->getDocument($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->getDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Swagger\Client\Model\Document**](../Model/Document.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDocumentByVendorId**
> \Swagger\Client\Model\Document getDocumentByVendorId($vendor_id)

Retrieve a document by vendor id

Retrieves the details of an existing document by vendor id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vendor_id = "vendor_id_example"; // string | 

try {
    $result = $apiInstance->getDocumentByVendorId($vendor_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->getDocumentByVendorId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vendor_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\Document**](../Model/Document.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOnlineSzamlaStatus**
> \Swagger\Client\Model\OnlineSzamlaStatus getOnlineSzamlaStatus($id)

Retrieve a document Online Számla status

Retrieves the details of an existing document status.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $result = $apiInstance->getOnlineSzamlaStatus($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->getOnlineSzamlaStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Swagger\Client\Model\OnlineSzamlaStatus**](../Model/OnlineSzamlaStatus.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPayment**
> \Swagger\Client\Model\PaymentHistory[] getPayment($id)

Retrieve a payment histroy

Retrieves the details of payment history an existing document.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $result = $apiInstance->getPayment($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->getPayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Swagger\Client\Model\PaymentHistory[]**](../Model/PaymentHistory.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPublicUrl**
> \Swagger\Client\Model\DocumentPublicUrl getPublicUrl($id)

Retrieve a document download public url.

Retrieves public url to download an existing document.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $result = $apiInstance->getPublicUrl($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->getPublicUrl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Swagger\Client\Model\DocumentPublicUrl**](../Model/DocumentPublicUrl.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listDocument**
> \Swagger\Client\Model\DocumentList listDocument($page, $per_page, $block_id, $partner_id, $payment_method, $payment_status, $start_date, $end_date, $start_number, $end_number, $start_year, $end_year, $type, $query, $paid_start_date, $paid_end_date, $fulfillment_start_date, $fulfillment_end_date, $last_modified_date)

List all documents

Returns a list of your documents. The documents are returned sorted by creation date, with the most recent documents appearing first.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | 
$per_page = 25; // int | 
$block_id = 56; // int | Filter documents by the identifier of your DocumentBlock.
$partner_id = 56; // int | Filter documents by the identifier of your Partner.
$payment_method = new \Swagger\Client\Model\PaymentMethod(); // \Swagger\Client\Model\PaymentMethod | Filter documents by PaymentMethod value.
$payment_status = new \Swagger\Client\Model\PaymentStatus(); // \Swagger\Client\Model\PaymentStatus | Filter documents by PaymentStatus value.
$start_date = new \DateTime("2013-10-20"); // \DateTime | Filter documents by their invoice date.
$end_date = new \DateTime("2013-10-20"); // \DateTime | Filter documents by their invoice date.
$start_number = 56; // int | Starting number of the document, should not contain year or any other formatting. Required if `start_year` given
$end_number = 56; // int | Ending number of the document, should not contain year or any other formatting. Required if `end_year` given
$start_year = 56; // int | Year for `start_number` parameter. Required if `start_number` given.
$end_year = 56; // int | Year for `end_number` parameter. Required if `end_number` given.
$type = new \Swagger\Client\Model\DocumentType(); // \Swagger\Client\Model\DocumentType | Filter documents by type
$query = "query_example"; // string | Filter documents by the given text
$paid_start_date = new \DateTime("2013-10-20"); // \DateTime | Filter documents by their payment date.
$paid_end_date = new \DateTime("2013-10-20"); // \DateTime | Filter documents by their payment date.
$fulfillment_start_date = new \DateTime("2013-10-20"); // \DateTime | Filter documents by their fulfillment date.
$fulfillment_end_date = new \DateTime("2013-10-20"); // \DateTime | Filter documents by their fulfillment date.
$last_modified_date = "last_modified_date_example"; // string | Filter documents by their last modified date.

try {
    $result = $apiInstance->listDocument($page, $per_page, $block_id, $partner_id, $payment_method, $payment_status, $start_date, $end_date, $start_number, $end_number, $start_year, $end_year, $type, $query, $paid_start_date, $paid_end_date, $fulfillment_start_date, $fulfillment_end_date, $last_modified_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->listDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional] [default to 25]
 **block_id** | **int**| Filter documents by the identifier of your DocumentBlock. | [optional]
 **partner_id** | **int**| Filter documents by the identifier of your Partner. | [optional]
 **payment_method** | [**\Swagger\Client\Model\PaymentMethod**](../Model/.md)| Filter documents by PaymentMethod value. | [optional]
 **payment_status** | [**\Swagger\Client\Model\PaymentStatus**](../Model/.md)| Filter documents by PaymentStatus value. | [optional]
 **start_date** | **\DateTime**| Filter documents by their invoice date. | [optional]
 **end_date** | **\DateTime**| Filter documents by their invoice date. | [optional]
 **start_number** | **int**| Starting number of the document, should not contain year or any other formatting. Required if &#x60;start_year&#x60; given | [optional]
 **end_number** | **int**| Ending number of the document, should not contain year or any other formatting. Required if &#x60;end_year&#x60; given | [optional]
 **start_year** | **int**| Year for &#x60;start_number&#x60; parameter. Required if &#x60;start_number&#x60; given. | [optional]
 **end_year** | **int**| Year for &#x60;end_number&#x60; parameter. Required if &#x60;end_number&#x60; given. | [optional]
 **type** | [**\Swagger\Client\Model\DocumentType**](../Model/.md)| Filter documents by type | [optional]
 **query** | **string**| Filter documents by the given text | [optional]
 **paid_start_date** | **\DateTime**| Filter documents by their payment date. | [optional]
 **paid_end_date** | **\DateTime**| Filter documents by their payment date. | [optional]
 **fulfillment_start_date** | **\DateTime**| Filter documents by their fulfillment date. | [optional]
 **fulfillment_end_date** | **\DateTime**| Filter documents by their fulfillment date. | [optional]
 **last_modified_date** | **string**| Filter documents by their last modified date. | [optional]

### Return type

[**\Swagger\Client\Model\DocumentList**](../Model/DocumentList.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **posPrint**
> string posPrint($id, $size)

Returns a printable POS PDF

Returns a printable POS PDF file of a particular document.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$size = 3.4; // float | In which size the POS PDF should be rendered.

try {
    $result = $apiInstance->posPrint($id, $size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->posPrint: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **size** | [**float**](../Model/.md)| In which size the POS PDF should be rendered. |

### Return type

**string**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/pdf, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendDocument**
> \Swagger\Client\Model\SendDocument sendDocument($id, $body)

Send invoice to given email adresses.

Returns a list of emails, where the invoice is sent.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$body = new \Swagger\Client\Model\SendDocument(); // \Swagger\Client\Model\SendDocument | List of email-s where you want to send the invoice.

try {
    $result = $apiInstance->sendDocument($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->sendDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **body** | [**\Swagger\Client\Model\SendDocument**](../Model/SendDocument.md)| List of email-s where you want to send the invoice. | [optional]

### Return type

[**\Swagger\Client\Model\SendDocument**](../Model/SendDocument.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePayment**
> \Swagger\Client\Model\PaymentHistory[] updatePayment($body, $id)

Update payment history

Update payment history an existing document. Returns a payment history object if the update is succeded.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Swagger\Client\Model\PaymentHistory()); // \Swagger\Client\Model\PaymentHistory[] | Payment history object that you would like to update.
$id = 56; // int | 

try {
    $result = $apiInstance->updatePayment($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->updatePayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\PaymentHistory[]**](../Model/PaymentHistory.md)| Payment history object that you would like to update. |
 **id** | **int**|  |

### Return type

[**\Swagger\Client\Model\PaymentHistory[]**](../Model/PaymentHistory.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

