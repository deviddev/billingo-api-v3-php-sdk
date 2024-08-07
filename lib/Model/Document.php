<?php
/**
 * Document
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Billingo API v3
 *
 * This is a Billingo API v3 documentation. Our API based on REST software architectural style. API has resource-oriented URLs, accepts JSON-encoded request bodies and returns JSON-encoded responses. To use this API you have to generate a new API key on our [site](https://app.billingo.hu/api-key). After that, you can test your API key on this page.
 *
 * OpenAPI spec version: 3.0.14
 * Contact: hello@billingo.hu
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.35
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * Document Class Doc Comment
 *
 * @category Class
 * @description Document object representing your invoice. NOTE: partner property is deprecated. Please use document_partner instead.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Document implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Document';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'invoice_number' => 'string',
'type' => '\Swagger\Client\Model\DocumentType',
'cancelled' => 'bool',
'block_id' => 'int',
'payment_status' => '\Swagger\Client\Model\PaymentStatus',
'payment_method' => '\Swagger\Client\Model\PaymentMethod',
'gross_total' => 'float',
'currency' => '\Swagger\Client\Model\Currency',
'conversion_rate' => 'float',
'invoice_date' => '\DateTime',
'fulfillment_date' => '\DateTime',
'due_date' => '\DateTime',
'paid_date' => '\DateTime',
'organization' => '\Swagger\Client\Model\DocumentOrganization',
'partner' => '\Swagger\Client\Model\Partner',
'document_partner' => '\Swagger\Client\Model\DocumentPartner',
'electronic' => 'bool',
'comment' => 'string',
'tags' => 'string[]',
'notification_status' => '\Swagger\Client\Model\DocumentNotificationStatus',
'language' => '\Swagger\Client\Model\DocumentLanguage',
'items' => '\Swagger\Client\Model\DocumentItem[]',
'summary' => '\Swagger\Client\Model\DocumentSummary',
'settings' => '\Swagger\Client\Model\DocumentSettings',
'online_szamla_status' => '\Swagger\Client\Model\OnlineSzamlaStatusEnum',
'related_documents' => '\Swagger\Client\Model\DocumentAncestor[]',
'discount' => '\Swagger\Client\Model\Discount',
'correction_type' => '\Swagger\Client\Model\CorrectionType'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'invoice_number' => null,
'type' => null,
'cancelled' => null,
'block_id' => null,
'payment_status' => null,
'payment_method' => null,
'gross_total' => 'float',
'currency' => null,
'conversion_rate' => 'float',
'invoice_date' => 'date',
'fulfillment_date' => 'date',
'due_date' => 'date',
'paid_date' => 'date',
'organization' => null,
'partner' => null,
'document_partner' => null,
'electronic' => null,
'comment' => null,
'tags' => null,
'notification_status' => null,
'language' => null,
'items' => null,
'summary' => null,
'settings' => null,
'online_szamla_status' => null,
'related_documents' => null,
'discount' => null,
'correction_type' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
'invoice_number' => 'invoice_number',
'type' => 'type',
'cancelled' => 'cancelled',
'block_id' => 'block_id',
'payment_status' => 'payment_status',
'payment_method' => 'payment_method',
'gross_total' => 'gross_total',
'currency' => 'currency',
'conversion_rate' => 'conversion_rate',
'invoice_date' => 'invoice_date',
'fulfillment_date' => 'fulfillment_date',
'due_date' => 'due_date',
'paid_date' => 'paid_date',
'organization' => 'organization',
'partner' => 'partner',
'document_partner' => 'document_partner',
'electronic' => 'electronic',
'comment' => 'comment',
'tags' => 'tags',
'notification_status' => 'notification_status',
'language' => 'language',
'items' => 'items',
'summary' => 'summary',
'settings' => 'settings',
'online_szamla_status' => 'online_szamla_status',
'related_documents' => 'related_documents',
'discount' => 'discount',
'correction_type' => 'correction_type'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'invoice_number' => 'setInvoiceNumber',
'type' => 'setType',
'cancelled' => 'setCancelled',
'block_id' => 'setBlockId',
'payment_status' => 'setPaymentStatus',
'payment_method' => 'setPaymentMethod',
'gross_total' => 'setGrossTotal',
'currency' => 'setCurrency',
'conversion_rate' => 'setConversionRate',
'invoice_date' => 'setInvoiceDate',
'fulfillment_date' => 'setFulfillmentDate',
'due_date' => 'setDueDate',
'paid_date' => 'setPaidDate',
'organization' => 'setOrganization',
'partner' => 'setPartner',
'document_partner' => 'setDocumentPartner',
'electronic' => 'setElectronic',
'comment' => 'setComment',
'tags' => 'setTags',
'notification_status' => 'setNotificationStatus',
'language' => 'setLanguage',
'items' => 'setItems',
'summary' => 'setSummary',
'settings' => 'setSettings',
'online_szamla_status' => 'setOnlineSzamlaStatus',
'related_documents' => 'setRelatedDocuments',
'discount' => 'setDiscount',
'correction_type' => 'setCorrectionType'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'invoice_number' => 'getInvoiceNumber',
'type' => 'getType',
'cancelled' => 'getCancelled',
'block_id' => 'getBlockId',
'payment_status' => 'getPaymentStatus',
'payment_method' => 'getPaymentMethod',
'gross_total' => 'getGrossTotal',
'currency' => 'getCurrency',
'conversion_rate' => 'getConversionRate',
'invoice_date' => 'getInvoiceDate',
'fulfillment_date' => 'getFulfillmentDate',
'due_date' => 'getDueDate',
'paid_date' => 'getPaidDate',
'organization' => 'getOrganization',
'partner' => 'getPartner',
'document_partner' => 'getDocumentPartner',
'electronic' => 'getElectronic',
'comment' => 'getComment',
'tags' => 'getTags',
'notification_status' => 'getNotificationStatus',
'language' => 'getLanguage',
'items' => 'getItems',
'summary' => 'getSummary',
'settings' => 'getSettings',
'online_szamla_status' => 'getOnlineSzamlaStatus',
'related_documents' => 'getRelatedDocuments',
'discount' => 'getDiscount',
'correction_type' => 'getCorrectionType'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['invoice_number'] = isset($data['invoice_number']) ? $data['invoice_number'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['cancelled'] = isset($data['cancelled']) ? $data['cancelled'] : null;
        $this->container['block_id'] = isset($data['block_id']) ? $data['block_id'] : null;
        $this->container['payment_status'] = isset($data['payment_status']) ? $data['payment_status'] : null;
        $this->container['payment_method'] = isset($data['payment_method']) ? $data['payment_method'] : null;
        $this->container['gross_total'] = isset($data['gross_total']) ? $data['gross_total'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['conversion_rate'] = isset($data['conversion_rate']) ? $data['conversion_rate'] : null;
        $this->container['invoice_date'] = isset($data['invoice_date']) ? $data['invoice_date'] : null;
        $this->container['fulfillment_date'] = isset($data['fulfillment_date']) ? $data['fulfillment_date'] : null;
        $this->container['due_date'] = isset($data['due_date']) ? $data['due_date'] : null;
        $this->container['paid_date'] = isset($data['paid_date']) ? $data['paid_date'] : null;
        $this->container['organization'] = isset($data['organization']) ? $data['organization'] : null;
        $this->container['partner'] = isset($data['partner']) ? $data['partner'] : null;
        $this->container['document_partner'] = isset($data['document_partner']) ? $data['document_partner'] : null;
        $this->container['electronic'] = isset($data['electronic']) ? $data['electronic'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['notification_status'] = isset($data['notification_status']) ? $data['notification_status'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
        $this->container['summary'] = isset($data['summary']) ? $data['summary'] : null;
        $this->container['settings'] = isset($data['settings']) ? $data['settings'] : null;
        $this->container['online_szamla_status'] = isset($data['online_szamla_status']) ? $data['online_szamla_status'] : null;
        $this->container['related_documents'] = isset($data['related_documents']) ? $data['related_documents'] : null;
        $this->container['discount'] = isset($data['discount']) ? $data['discount'] : null;
        $this->container['correction_type'] = isset($data['correction_type']) ? $data['correction_type'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id The document's unique identifier.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets invoice_number
     *
     * @return string
     */
    public function getInvoiceNumber()
    {
        return $this->container['invoice_number'];
    }

    /**
     * Sets invoice_number
     *
     * @param string $invoice_number The document's invoice number.
     *
     * @return $this
     */
    public function setInvoiceNumber($invoice_number)
    {
        $this->container['invoice_number'] = $invoice_number;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \Swagger\Client\Model\DocumentType
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \Swagger\Client\Model\DocumentType $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets cancelled
     *
     * @return bool
     */
    public function getCancelled()
    {
        return $this->container['cancelled'];
    }

    /**
     * Sets cancelled
     *
     * @param bool $cancelled cancelled
     *
     * @return $this
     */
    public function setCancelled($cancelled)
    {
        $this->container['cancelled'] = $cancelled;

        return $this;
    }

    /**
     * Gets block_id
     *
     * @return int
     */
    public function getBlockId()
    {
        return $this->container['block_id'];
    }

    /**
     * Sets block_id
     *
     * @param int $block_id DocumentBlock's identifier.
     *
     * @return $this
     */
    public function setBlockId($block_id)
    {
        $this->container['block_id'] = $block_id;

        return $this;
    }

    /**
     * Gets payment_status
     *
     * @return \Swagger\Client\Model\PaymentStatus
     */
    public function getPaymentStatus()
    {
        return $this->container['payment_status'];
    }

    /**
     * Sets payment_status
     *
     * @param \Swagger\Client\Model\PaymentStatus $payment_status payment_status
     *
     * @return $this
     */
    public function setPaymentStatus($payment_status)
    {
        $this->container['payment_status'] = $payment_status;

        return $this;
    }

    /**
     * Gets payment_method
     *
     * @return \Swagger\Client\Model\PaymentMethod
     */
    public function getPaymentMethod()
    {
        return $this->container['payment_method'];
    }

    /**
     * Sets payment_method
     *
     * @param \Swagger\Client\Model\PaymentMethod $payment_method payment_method
     *
     * @return $this
     */
    public function setPaymentMethod($payment_method)
    {
        $this->container['payment_method'] = $payment_method;

        return $this;
    }

    /**
     * Gets gross_total
     *
     * @return float
     */
    public function getGrossTotal()
    {
        return $this->container['gross_total'];
    }

    /**
     * Sets gross_total
     *
     * @param float $gross_total The document's gross total price.
     *
     * @return $this
     */
    public function setGrossTotal($gross_total)
    {
        $this->container['gross_total'] = $gross_total;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return \Swagger\Client\Model\Currency
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param \Swagger\Client\Model\Currency $currency currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets conversion_rate
     *
     * @return float
     */
    public function getConversionRate()
    {
        return $this->container['conversion_rate'];
    }

    /**
     * Sets conversion_rate
     *
     * @param float $conversion_rate conversion_rate
     *
     * @return $this
     */
    public function setConversionRate($conversion_rate)
    {
        $this->container['conversion_rate'] = $conversion_rate;

        return $this;
    }

    /**
     * Gets invoice_date
     *
     * @return \DateTime
     */
    public function getInvoiceDate()
    {
        return $this->container['invoice_date'];
    }

    /**
     * Sets invoice_date
     *
     * @param \DateTime $invoice_date invoice_date
     *
     * @return $this
     */
    public function setInvoiceDate($invoice_date)
    {
        $this->container['invoice_date'] = $invoice_date;

        return $this;
    }

    /**
     * Gets fulfillment_date
     *
     * @return \DateTime
     */
    public function getFulfillmentDate()
    {
        return $this->container['fulfillment_date'];
    }

    /**
     * Sets fulfillment_date
     *
     * @param \DateTime $fulfillment_date fulfillment_date
     *
     * @return $this
     */
    public function setFulfillmentDate($fulfillment_date)
    {
        $this->container['fulfillment_date'] = $fulfillment_date;

        return $this;
    }

    /**
     * Gets due_date
     *
     * @return \DateTime
     */
    public function getDueDate()
    {
        return $this->container['due_date'];
    }

    /**
     * Sets due_date
     *
     * @param \DateTime $due_date due_date
     *
     * @return $this
     */
    public function setDueDate($due_date)
    {
        $this->container['due_date'] = $due_date;

        return $this;
    }

    /**
     * Gets paid_date
     *
     * @return \DateTime
     */
    public function getPaidDate()
    {
        return $this->container['paid_date'];
    }

    /**
     * Sets paid_date
     *
     * @param \DateTime $paid_date paid_date
     *
     * @return $this
     */
    public function setPaidDate($paid_date)
    {
        $this->container['paid_date'] = $paid_date;

        return $this;
    }

    /**
     * Gets organization
     *
     * @return \Swagger\Client\Model\DocumentOrganization
     */
    public function getOrganization()
    {
        return $this->container['organization'];
    }

    /**
     * Sets organization
     *
     * @param \Swagger\Client\Model\DocumentOrganization $organization organization
     *
     * @return $this
     */
    public function setOrganization($organization)
    {
        $this->container['organization'] = $organization;

        return $this;
    }

    /**
     * Gets partner
     *
     * @return \Swagger\Client\Model\Partner
     */
    public function getPartner()
    {
        return $this->container['partner'];
    }

    /**
     * Sets partner
     *
     * @param \Swagger\Client\Model\Partner $partner partner
     *
     * @return $this
     */
    public function setPartner($partner)
    {
        $this->container['partner'] = $partner;

        return $this;
    }

    /**
     * Gets document_partner
     *
     * @return \Swagger\Client\Model\DocumentPartner
     */
    public function getDocumentPartner()
    {
        return $this->container['document_partner'];
    }

    /**
     * Sets document_partner
     *
     * @param \Swagger\Client\Model\DocumentPartner $document_partner document_partner
     *
     * @return $this
     */
    public function setDocumentPartner($document_partner)
    {
        $this->container['document_partner'] = $document_partner;

        return $this;
    }

    /**
     * Gets electronic
     *
     * @return bool
     */
    public function getElectronic()
    {
        return $this->container['electronic'];
    }

    /**
     * Sets electronic
     *
     * @param bool $electronic electronic
     *
     * @return $this
     */
    public function setElectronic($electronic)
    {
        $this->container['electronic'] = $electronic;

        return $this;
    }

    /**
     * Gets comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string $comment comment
     *
     * @return $this
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return string[]
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param string[] $tags tags
     *
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets notification_status
     *
     * @return \Swagger\Client\Model\DocumentNotificationStatus
     */
    public function getNotificationStatus()
    {
        return $this->container['notification_status'];
    }

    /**
     * Sets notification_status
     *
     * @param \Swagger\Client\Model\DocumentNotificationStatus $notification_status notification_status
     *
     * @return $this
     */
    public function setNotificationStatus($notification_status)
    {
        $this->container['notification_status'] = $notification_status;

        return $this;
    }

    /**
     * Gets language
     *
     * @return \Swagger\Client\Model\DocumentLanguage
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param \Swagger\Client\Model\DocumentLanguage $language language
     *
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \Swagger\Client\Model\DocumentItem[]
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \Swagger\Client\Model\DocumentItem[] $items items
     *
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets summary
     *
     * @return \Swagger\Client\Model\DocumentSummary
     */
    public function getSummary()
    {
        return $this->container['summary'];
    }

    /**
     * Sets summary
     *
     * @param \Swagger\Client\Model\DocumentSummary $summary summary
     *
     * @return $this
     */
    public function setSummary($summary)
    {
        $this->container['summary'] = $summary;

        return $this;
    }

    /**
     * Gets settings
     *
     * @return \Swagger\Client\Model\DocumentSettings
     */
    public function getSettings()
    {
        return $this->container['settings'];
    }

    /**
     * Sets settings
     *
     * @param \Swagger\Client\Model\DocumentSettings $settings settings
     *
     * @return $this
     */
    public function setSettings($settings)
    {
        $this->container['settings'] = $settings;

        return $this;
    }

    /**
     * Gets online_szamla_status
     *
     * @return \Swagger\Client\Model\OnlineSzamlaStatusEnum
     */
    public function getOnlineSzamlaStatus()
    {
        return $this->container['online_szamla_status'];
    }

    /**
     * Sets online_szamla_status
     *
     * @param \Swagger\Client\Model\OnlineSzamlaStatusEnum $online_szamla_status online_szamla_status
     *
     * @return $this
     */
    public function setOnlineSzamlaStatus($online_szamla_status)
    {
        $this->container['online_szamla_status'] = $online_szamla_status;

        return $this;
    }

    /**
     * Gets related_documents
     *
     * @return \Swagger\Client\Model\DocumentAncestor[]
     */
    public function getRelatedDocuments()
    {
        return $this->container['related_documents'];
    }

    /**
     * Sets related_documents
     *
     * @param \Swagger\Client\Model\DocumentAncestor[] $related_documents related_documents
     *
     * @return $this
     */
    public function setRelatedDocuments($related_documents)
    {
        $this->container['related_documents'] = $related_documents;

        return $this;
    }

    /**
     * Gets discount
     *
     * @return \Swagger\Client\Model\Discount
     */
    public function getDiscount()
    {
        return $this->container['discount'];
    }

    /**
     * Sets discount
     *
     * @param \Swagger\Client\Model\Discount $discount discount
     *
     * @return $this
     */
    public function setDiscount($discount)
    {
        $this->container['discount'] = $discount;

        return $this;
    }

    /**
     * Gets correction_type
     *
     * @return \Swagger\Client\Model\CorrectionType
     */
    public function getCorrectionType()
    {
        return $this->container['correction_type'];
    }

    /**
     * Sets correction_type
     *
     * @param \Swagger\Client\Model\CorrectionType $correction_type correction_type
     *
     * @return $this
     */
    public function setCorrectionType($correction_type)
    {
        $this->container['correction_type'] = $correction_type;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
