# DocumentInsert

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**vendor_id** | **string** |  | [optional] 
**partner_id** | **int** |  | 
**block_id** | **int** |  | 
**bank_account_id** | **int** |  | [optional] 
**type** | [**\Swagger\Client\Model\DocumentInsertType**](DocumentInsertType.md) |  | 
**fulfillment_date** | [**\DateTime**](\DateTime.md) |  | 
**due_date** | [**\DateTime**](\DateTime.md) |  | 
**payment_method** | [**\Swagger\Client\Model\PaymentMethod**](PaymentMethod.md) |  | 
**language** | [**\Swagger\Client\Model\DocumentLanguage**](DocumentLanguage.md) |  | 
**currency** | [**\Swagger\Client\Model\Currency**](Currency.md) |  | 
**conversion_rate** | **float** |  | [optional] 
**electronic** | **bool** |  | [optional] [default to false]
**paid** | **bool** |  | [optional] [default to false]
**items** | [**\Swagger\Client\Model\OneOfDocumentInsertItemsItems[]**](.md) |  | [optional] 
**comment** | **string** |  | [optional] 
**settings** | [**\Swagger\Client\Model\DocumentSettings**](DocumentSettings.md) |  | [optional] 
**advance_invoice** | **int[]** |  | [optional] 
**discount** | [**\Swagger\Client\Model\Discount**](Discount.md) |  | [optional] 
**instant_payment** | **bool** |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

