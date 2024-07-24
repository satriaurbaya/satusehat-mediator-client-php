<?php
/**
 * DiagnosticReport
 *
 * PHP version 5
 *
 * @category Class
 * @package  Mediator\SatuSehat\Lib\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Swagger Mediator  SATUSEHAT
 *
 * Spesifikasi API ini merupakan contoh untuk menggunakan **Mediator Interoperabilitas SATUSEHAT** yang secara khusus ditujukan untuk mempercepat dan memudahkan proses interoperabilitas data Rekam Medis Elektronik (RME) antara sistem informasi di Fasilitas Kesehatan (Rumah Sakit, Puskesmas, Klinik, Laboratorium, dll) dengan Platform SATUSEHAT.  Mediator Interoperabilitas SATUSEHAT menyediakan format custom yang disederhanakan dari format HL7 FHIR sebagai perantara antara sistem RME dengan SATUSEHAT beserta sistem informasi kesehatan yang ada ditingkat nasional.
 *
 * OpenAPI spec version: 1.0.1
 *
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.59
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Mediator\SatuSehat\Lib\Client\Model;

use Mediator\SatuSehat\Lib\Client\ObjectSerializer;

/**
 * DiagnosticReport Class Doc Comment
 *
 * @category Class
 * @package  Mediator\SatuSehat\Lib\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DiagnosticReport extends MediatorResourceBasic
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DiagnosticReport';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'identifier' => 'string',
        'code_report' => 'string',
        'issued' => '\DateTime',
        'verifiedby' => 'string',
        'effective_date_time' => '\DateTime',
        'service_request' => 'string',
        'specimen' => 'string',
        'conclusion_text' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'identifier' => null,
        'code_report' => null,
        'issued' => 'date-time',
        'verifiedby' => null,
        'effective_date_time' => 'date-time',
        'service_request' => null,
        'specimen' => null,
        'conclusion_text' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes + parent::swaggerTypes();
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats + parent::swaggerFormats();
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'identifier' => 'identifier',
        'code_report' => 'code_report',
        'issued' => 'issued',
        'verifiedby' => 'verifiedby',
        'effective_date_time' => 'effectiveDateTime',
        'service_request' => 'service_request',
        'specimen' => 'specimen',
        'conclusion_text' => 'conclusion_text'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'identifier' => 'setIdentifier',
        'code_report' => 'setCodeReport',
        'issued' => 'setIssued',
        'verifiedby' => 'setVerifiedby',
        'effective_date_time' => 'setEffectiveDateTime',
        'service_request' => 'setServiceRequest',
        'specimen' => 'setSpecimen',
        'conclusion_text' => 'setConclusionText'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'identifier' => 'getIdentifier',
        'code_report' => 'getCodeReport',
        'issued' => 'getIssued',
        'verifiedby' => 'getVerifiedby',
        'effective_date_time' => 'getEffectiveDateTime',
        'service_request' => 'getServiceRequest',
        'specimen' => 'getSpecimen',
        'conclusion_text' => 'getConclusionText'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return parent::getters() + self::$getters;
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
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->container['identifier'] = isset($data['identifier']) ? $data['identifier'] : null;
        $this->container['code_report'] = isset($data['code_report']) ? $data['code_report'] : null;
        $this->container['issued'] = isset($data['issued']) ? $data['issued'] : null;
        $this->container['verifiedby'] = isset($data['verifiedby']) ? $data['verifiedby'] : null;
        $this->container['effective_date_time'] = isset($data['effective_date_time']) ? $data['effective_date_time'] : null;
        $this->container['service_request'] = isset($data['service_request']) ? $data['service_request'] : null;
        $this->container['specimen'] = isset($data['specimen']) ? $data['specimen'] : null;
        $this->container['conclusion_text'] = isset($data['conclusion_text']) ? $data['conclusion_text'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

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
     * Gets identifier
     *
     * @return string
     */
    public function getIdentifier()
    {
        return $this->container['identifier'];
    }

    /**
     * Sets identifier
     *
     * @param string $identifier identifier
     *
     * @return $this
     */
    public function setIdentifier($identifier)
    {
        $this->container['identifier'] = $identifier;

        return $this;
    }

    /**
     * Gets code_report
     *
     * @return string
     */
    public function getCodeReport()
    {
        return $this->container['code_report'];
    }

    /**
     * Sets code_report
     *
     * @param string $code_report code_report
     *
     * @return $this
     */
    public function setCodeReport($code_report)
    {
        $this->container['code_report'] = $code_report;

        return $this;
    }

    /**
     * Gets issued
     *
     * @return \DateTime
     */
    public function getIssued()
    {
        return $this->container['issued'];
    }

    /**
     * Sets issued
     *
     * @param \DateTime $issued issued
     *
     * @return $this
     */
    public function setIssued($issued)
    {
        $this->container['issued'] = $issued;

        return $this;
    }

    /**
     * Gets verifiedby
     *
     * @return string
     */
    public function getVerifiedby()
    {
        return $this->container['verifiedby'];
    }

    /**
     * Sets verifiedby
     *
     * @param string $verifiedby verifiedby
     *
     * @return $this
     */
    public function setVerifiedby($verifiedby)
    {
        $this->container['verifiedby'] = $verifiedby;

        return $this;
    }

    /**
     * Gets effective_date_time
     *
     * @return \DateTime
     */
    public function getEffectiveDateTime()
    {
        return $this->container['effective_date_time'];
    }

    /**
     * Sets effective_date_time
     *
     * @param \DateTime $effective_date_time effective_date_time
     *
     * @return $this
     */
    public function setEffectiveDateTime($effective_date_time)
    {
        $this->container['effective_date_time'] = $effective_date_time;

        return $this;
    }

    /**
     * Gets service_request
     *
     * @return string
     */
    public function getServiceRequest()
    {
        return $this->container['service_request'];
    }

    /**
     * Sets service_request
     *
     * @param string $service_request service_request
     *
     * @return $this
     */
    public function setServiceRequest($service_request)
    {
        $this->container['service_request'] = $service_request;

        return $this;
    }

    /**
     * Gets specimen
     *
     * @return string
     */
    public function getSpecimen()
    {
        return $this->container['specimen'];
    }

    /**
     * Sets specimen
     *
     * @param string $specimen specimen
     *
     * @return $this
     */
    public function setSpecimen($specimen)
    {
        $this->container['specimen'] = $specimen;

        return $this;
    }

    /**
     * Gets conclusion_text
     *
     * @return string
     */
    public function getConclusionText()
    {
        return $this->container['conclusion_text'];
    }

    /**
     * Sets conclusion_text
     *
     * @param string $conclusion_text conclusion_text
     *
     * @return $this
     */
    public function setConclusionText($conclusion_text)
    {
        $this->container['conclusion_text'] = $conclusion_text;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
