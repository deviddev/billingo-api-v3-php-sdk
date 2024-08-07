<?php
/**
 * DocumentType
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
use \Swagger\Client\ObjectSerializer;

/**
 * DocumentType Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DocumentType
{
    /**
     * Possible values of this enum
     */
    const ADVANCE = 'advance';
const CANCELLATION = 'cancellation';
const CERT_OF_COMPLETION = 'cert_of_completion';
const D_CERT_OF_COMPLETION = 'd_cert_of_completion';
const DOSSIER = 'dossier';
const DRAFT = 'draft';
const DRAFT_OFFER = 'draft_offer';
const DRAFT_ORDER_FORM = 'draft_order_form';
const DRAFT_WAYBILL = 'draft_waybill';
const INVOICE = 'invoice';
const MODIFICATION = 'modification';
const OFFER = 'offer';
const ORDER_FORM = 'order_form';
const PROFORMA = 'proforma';
const RECEIPT = 'receipt';
const RECEIPT_CANCELLATION = 'receipt_cancellation';
const WAYBILL = 'waybill';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ADVANCE,
self::CANCELLATION,
self::CERT_OF_COMPLETION,
self::D_CERT_OF_COMPLETION,
self::DOSSIER,
self::DRAFT,
self::DRAFT_OFFER,
self::DRAFT_ORDER_FORM,
self::DRAFT_WAYBILL,
self::INVOICE,
self::MODIFICATION,
self::OFFER,
self::ORDER_FORM,
self::PROFORMA,
self::RECEIPT,
self::RECEIPT_CANCELLATION,
self::WAYBILL,        ];
    }
}
