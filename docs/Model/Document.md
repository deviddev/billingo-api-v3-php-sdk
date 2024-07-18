# Document

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The document&#x27;s unique identifier. | [optional] 
**invoice_number** | **string** | The document&#x27;s invoice number. | [optional] 
**type** | [**\Swagger\Client\Model\DocumentType**](DocumentType.md) |  | [optional] 
**cancelled** | **bool** |  | [optional] 
**block_id** | **int** | DocumentBlock&#x27;s identifier. | [optional] 
**payment_status** | [**\Swagger\Client\Model\PaymentStatus**](PaymentStatus.md) |  | [optional] 
**payment_method** | [**\Swagger\Client\Model\PaymentMethod**](PaymentMethod.md) |  | [optional] 
**gross_total** | **float** | The document&#x27;s gross total price. | [optional] 
**currency** | [**\Swagger\Client\Model\Currency**](Currency.md) |  | [optional] 
**conversion_rate** | **float** |  | [optional] 
**invoice_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**fulfillment_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**due_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**paid_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**organization** | [**\Swagger\Client\Model\DocumentOrganization**](DocumentOrganization.md) |  | [optional] 
**partner** | [**\Swagger\Client\Model\Partner**](Partner.md) |  | [optional] 
**document_partner** | [**\Swagger\Client\Model\DocumentPartner**](DocumentPartner.md) |  | [optional] 
**electronic** | **bool** |  | [optional] 
**comment** | **string** |  | [optional] 
**tags** | **string[]** |  | [optional] 
**notification_status** | [**\Swagger\Client\Model\DocumentNotificationStatus**](DocumentNotificationStatus.md) |  | [optional] 
**language** | [**\Swagger\Client\Model\DocumentLanguage**](DocumentLanguage.md) |  | [optional] 
**items** | [**\Swagger\Client\Model\DocumentItem[]**](DocumentItem.md) |  | [optional] 
**summary** | [**\Swagger\Client\Model\DocumentSummary**](DocumentSummary.md) |  | [optional] 
**settings** | [**\Swagger\Client\Model\DocumentSettings**](DocumentSettings.md) |  | [optional] 
**online_szamla_status** | [**\Swagger\Client\Model\OnlineSzamlaStatusEnum**](OnlineSzamlaStatusEnum.md) |  | [optional] 
**related_documents** | [**\Swagger\Client\Model\DocumentAncestor[]**](DocumentAncestor.md) |  | [optional] 
**discount** | [**\Swagger\Client\Model\Discount**](Discount.md) |  | [optional] 
**correction_type** | [**\Swagger\Client\Model\CorrectionType**](CorrectionType.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

