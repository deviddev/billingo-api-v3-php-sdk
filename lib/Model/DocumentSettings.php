<?php
/**
 * DocumentSettings
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
 * DocumentSettings Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DocumentSettings implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DocumentSettings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'mediated_service' => 'bool',
'without_financial_fulfillment' => 'bool',
'online_payment' => '\Swagger\Client\Model\OnlinePayment',
'round' => '\Swagger\Client\Model\Round',
'no_send_onlineszamla_by_user' => 'bool',
'order_number' => 'string',
'place_id' => 'int',
'instant_payment' => 'bool',
'selected_type' => '\Swagger\Client\Model\DocumentType'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'mediated_service' => null,
'without_financial_fulfillment' => null,
'online_payment' => null,
'round' => null,
'no_send_onlineszamla_by_user' => null,
'order_number' => null,
'place_id' => null,
'instant_payment' => null,
'selected_type' => null    ];

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
        'mediated_service' => 'mediated_service',
'without_financial_fulfillment' => 'without_financial_fulfillment',
'online_payment' => 'online_payment',
'round' => 'round',
'no_send_onlineszamla_by_user' => 'no_send_onlineszamla_by_user',
'order_number' => 'order_number',
'place_id' => 'place_id',
'instant_payment' => 'instant_payment',
'selected_type' => 'selected_type'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'mediated_service' => 'setMediatedService',
'without_financial_fulfillment' => 'setWithoutFinancialFulfillment',
'online_payment' => 'setOnlinePayment',
'round' => 'setRound',
'no_send_onlineszamla_by_user' => 'setNoSendOnlineszamlaByUser',
'order_number' => 'setOrderNumber',
'place_id' => 'setPlaceId',
'instant_payment' => 'setInstantPayment',
'selected_type' => 'setSelectedType'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'mediated_service' => 'getMediatedService',
'without_financial_fulfillment' => 'getWithoutFinancialFulfillment',
'online_payment' => 'getOnlinePayment',
'round' => 'getRound',
'no_send_onlineszamla_by_user' => 'getNoSendOnlineszamlaByUser',
'order_number' => 'getOrderNumber',
'place_id' => 'getPlaceId',
'instant_payment' => 'getInstantPayment',
'selected_type' => 'getSelectedType'    ];

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
        $this->container['mediated_service'] = isset($data['mediated_service']) ? $data['mediated_service'] : false;
        $this->container['without_financial_fulfillment'] = isset($data['without_financial_fulfillment']) ? $data['without_financial_fulfillment'] : false;
        $this->container['online_payment'] = isset($data['online_payment']) ? $data['online_payment'] : null;
        $this->container['round'] = isset($data['round']) ? $data['round'] : null;
        $this->container['no_send_onlineszamla_by_user'] = isset($data['no_send_onlineszamla_by_user']) ? $data['no_send_onlineszamla_by_user'] : null;
        $this->container['order_number'] = isset($data['order_number']) ? $data['order_number'] : null;
        $this->container['place_id'] = isset($data['place_id']) ? $data['place_id'] : null;
        $this->container['instant_payment'] = isset($data['instant_payment']) ? $data['instant_payment'] : null;
        $this->container['selected_type'] = isset($data['selected_type']) ? $data['selected_type'] : null;
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
     * Gets mediated_service
     *
     * @return bool
     */
    public function getMediatedService()
    {
        return $this->container['mediated_service'];
    }

    /**
     * Sets mediated_service
     *
     * @param bool $mediated_service mediated_service
     *
     * @return $this
     */
    public function setMediatedService($mediated_service)
    {
        $this->container['mediated_service'] = $mediated_service;

        return $this;
    }

    /**
     * Gets without_financial_fulfillment
     *
     * @return bool
     */
    public function getWithoutFinancialFulfillment()
    {
        return $this->container['without_financial_fulfillment'];
    }

    /**
     * Sets without_financial_fulfillment
     *
     * @param bool $without_financial_fulfillment without_financial_fulfillment
     *
     * @return $this
     */
    public function setWithoutFinancialFulfillment($without_financial_fulfillment)
    {
        $this->container['without_financial_fulfillment'] = $without_financial_fulfillment;

        return $this;
    }

    /**
     * Gets online_payment
     *
     * @return \Swagger\Client\Model\OnlinePayment
     */
    public function getOnlinePayment()
    {
        return $this->container['online_payment'];
    }

    /**
     * Sets online_payment
     *
     * @param \Swagger\Client\Model\OnlinePayment $online_payment online_payment
     *
     * @return $this
     */
    public function setOnlinePayment($online_payment)
    {
        $this->container['online_payment'] = $online_payment;

        return $this;
    }

    /**
     * Gets round
     *
     * @return \Swagger\Client\Model\Round
     */
    public function getRound()
    {
        return $this->container['round'];
    }

    /**
     * Sets round
     *
     * @param \Swagger\Client\Model\Round $round round
     *
     * @return $this
     */
    public function setRound($round)
    {
        $this->container['round'] = $round;

        return $this;
    }

    /**
     * Gets no_send_onlineszamla_by_user
     *
     * @return bool
     */
    public function getNoSendOnlineszamlaByUser()
    {
        return $this->container['no_send_onlineszamla_by_user'];
    }

    /**
     * Sets no_send_onlineszamla_by_user
     *
     * @param bool $no_send_onlineszamla_by_user no_send_onlineszamla_by_user
     *
     * @return $this
     */
    public function setNoSendOnlineszamlaByUser($no_send_onlineszamla_by_user)
    {
        $this->container['no_send_onlineszamla_by_user'] = $no_send_onlineszamla_by_user;

        return $this;
    }

    /**
     * Gets order_number
     *
     * @return string
     */
    public function getOrderNumber()
    {
        return $this->container['order_number'];
    }

    /**
     * Sets order_number
     *
     * @param string $order_number order_number
     *
     * @return $this
     */
    public function setOrderNumber($order_number)
    {
        $this->container['order_number'] = $order_number;

        return $this;
    }

    /**
     * Gets place_id
     *
     * @return int
     */
    public function getPlaceId()
    {
        return $this->container['place_id'];
    }

    /**
     * Sets place_id
     *
     * @param int $place_id place_id
     *
     * @return $this
     */
    public function setPlaceId($place_id)
    {
        $this->container['place_id'] = $place_id;

        return $this;
    }

    /**
     * Gets instant_payment
     *
     * @return bool
     */
    public function getInstantPayment()
    {
        return $this->container['instant_payment'];
    }

    /**
     * Sets instant_payment
     *
     * @param bool $instant_payment instant_payment
     *
     * @return $this
     */
    public function setInstantPayment($instant_payment)
    {
        $this->container['instant_payment'] = $instant_payment;

        return $this;
    }

    /**
     * Gets selected_type
     *
     * @return \Swagger\Client\Model\DocumentType
     */
    public function getSelectedType()
    {
        return $this->container['selected_type'];
    }

    /**
     * Sets selected_type
     *
     * @param \Swagger\Client\Model\DocumentType $selected_type selected_type
     *
     * @return $this
     */
    public function setSelectedType($selected_type)
    {
        $this->container['selected_type'] = $selected_type;

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
