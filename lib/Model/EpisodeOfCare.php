<?php
/**
 * EpisodeOfCare
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
use \Mediator\SatuSehat\Lib\Client\ObjectSerializer;

/**
 * EpisodeOfCare Class Doc Comment
 *
 * @category Class
 * @package  Mediator\SatuSehat\Lib\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EpisodeOfCare extends MediatorResourceBasic 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EpisodeOfCare';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'status' => 'string',
        'type_code' => 'string',
        'period_start' => '\DateTime',
        'period_end' => '\DateTime',
        'identifier' => 'string',
        'suspect_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'status' => null,
        'type_code' => null,
        'period_start' => 'date-time',
        'period_end' => 'date-time',
        'identifier' => null,
        'suspect_id' => null
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
        'status' => 'status',
        'type_code' => 'type_code',
        'period_start' => 'period_start',
        'period_end' => 'period_end',
        'identifier' => 'identifier',
        'suspect_id' => 'suspect_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'status' => 'setStatus',
        'type_code' => 'setTypeCode',
        'period_start' => 'setPeriodStart',
        'period_end' => 'setPeriodEnd',
        'identifier' => 'setIdentifier',
        'suspect_id' => 'setSuspectId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'status' => 'getStatus',
        'type_code' => 'getTypeCode',
        'period_start' => 'getPeriodStart',
        'period_end' => 'getPeriodEnd',
        'identifier' => 'getIdentifier',
        'suspect_id' => 'getSuspectId'
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

    const TYPE_CODE_PLANNED = 'planned';
    const TYPE_CODE_WAITLIST = 'waitlist';
    const TYPE_CODE_ACTIVE = 'active';
    const TYPE_CODE_ONHOLD = 'onhold';
    const TYPE_CODE_FINISHED = 'finished';
    const TYPE_CODE_CANCELLED = 'cancelled';
    const TYPE_CODE_ENTERED_IN_ERROR = 'entered-in-error';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeCodeAllowableValues()
    {
        return [
            self::TYPE_CODE_PLANNED,
            self::TYPE_CODE_WAITLIST,
            self::TYPE_CODE_ACTIVE,
            self::TYPE_CODE_ONHOLD,
            self::TYPE_CODE_FINISHED,
            self::TYPE_CODE_CANCELLED,
            self::TYPE_CODE_ENTERED_IN_ERROR,
        ];
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

        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['type_code'] = isset($data['type_code']) ? $data['type_code'] : null;
        $this->container['period_start'] = isset($data['period_start']) ? $data['period_start'] : null;
        $this->container['period_end'] = isset($data['period_end']) ? $data['period_end'] : null;
        $this->container['identifier'] = isset($data['identifier']) ? $data['identifier'] : null;
        $this->container['suspect_id'] = isset($data['suspect_id']) ? $data['suspect_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        $allowedValues = $this->getTypeCodeAllowableValues();
        if (!is_null($this->container['type_code']) && !in_array($this->container['type_code'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type_code', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

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
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets type_code
     *
     * @return string
     */
    public function getTypeCode()
    {
        return $this->container['type_code'];
    }

    /**
     * Sets type_code
     *
     * @param string $type_code type_code
     *
     * @return $this
     */
    public function setTypeCode($type_code)
    {
        $allowedValues = $this->getTypeCodeAllowableValues();
        if (!is_null($type_code) && !in_array($type_code, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type_code', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type_code'] = $type_code;

        return $this;
    }

    /**
     * Gets period_start
     *
     * @return \DateTime
     */
    public function getPeriodStart()
    {
        return $this->container['period_start'];
    }

    /**
     * Sets period_start
     *
     * @param \DateTime $period_start period_start
     *
     * @return $this
     */
    public function setPeriodStart($period_start)
    {
        $this->container['period_start'] = $period_start;

        return $this;
    }

    /**
     * Gets period_end
     *
     * @return \DateTime
     */
    public function getPeriodEnd()
    {
        return $this->container['period_end'];
    }

    /**
     * Sets period_end
     *
     * @param \DateTime $period_end period_end
     *
     * @return $this
     */
    public function setPeriodEnd($period_end)
    {
        $this->container['period_end'] = $period_end;

        return $this;
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
     * Gets suspect_id
     *
     * @return string
     */
    public function getSuspectId()
    {
        return $this->container['suspect_id'];
    }

    /**
     * Sets suspect_id
     *
     * @param string $suspect_id suspect_id
     *
     * @return $this
     */
    public function setSuspectId($suspect_id)
    {
        $this->container['suspect_id'] = $suspect_id;

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
