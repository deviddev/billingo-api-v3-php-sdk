<?php
/**
 * CheckTaxNumberMessage
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
 * CheckTaxNumberMessage Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CheckTaxNumberMessage
{
    /**
     * Possible values of this enum
     */
    const EXTERNAL_NAV_SERVICE_UNREACHABLE = 'external_nav_service_unreachable';
const INVALID_TAX_NUMBER = 'invalid_tax_number';
const NO_ONLINE_SZAMLA_SETTINGS = 'no_online_szamla_settings';
const NON_EXIST_TAX_NUMBER = 'non_exist_tax_number';
const VALIDATION_OK = 'validation_ok';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::EXTERNAL_NAV_SERVICE_UNREACHABLE,
self::INVALID_TAX_NUMBER,
self::NO_ONLINE_SZAMLA_SETTINGS,
self::NON_EXIST_TAX_NUMBER,
self::VALIDATION_OK,        ];
    }
}
