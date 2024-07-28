<?php
/**
 * AddressPatient
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
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


use \ArrayAccess;
use Mediator\SatuSehat\Lib\Client\ObjectSerializer;

/**
 * AddressPatient Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AddressPatient implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AddressPatient';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'use' => 'string',
        'country' => 'string',
        'province' => 'string',
        'city' => 'string',
        'district' => 'string',
        'village' => 'string',
        'rt' => 'string',
        'rw' => 'string',
        'postal_code' => 'string',
        'line' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'use' => null,
        'country' => null,
        'province' => null,
        'city' => null,
        'district' => null,
        'village' => null,
        'rt' => null,
        'rw' => null,
        'postal_code' => null,
        'line' => null
    ];

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
        'use' => 'use',
        'country' => 'country',
        'province' => 'province',
        'city' => 'city',
        'district' => 'district',
        'village' => 'village',
        'rt' => 'rt',
        'rw' => 'rw',
        'postal_code' => 'postal_code',
        'line' => 'line'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'use' => 'setUse',
        'country' => 'setCountry',
        'province' => 'setProvince',
        'city' => 'setCity',
        'district' => 'setDistrict',
        'village' => 'setVillage',
        'rt' => 'setRt',
        'rw' => 'setRw',
        'postal_code' => 'setPostalCode',
        'line' => 'setLine'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'use' => 'getUse',
        'country' => 'getCountry',
        'province' => 'getProvince',
        'city' => 'getCity',
        'district' => 'getDistrict',
        'village' => 'getVillage',
        'rt' => 'getRt',
        'rw' => 'getRw',
        'postal_code' => 'getPostalCode',
        'line' => 'getLine'
    ];

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

    public const MODEL_USE_TEMP = 'temp';
    public const MODEL_USE_HOME = 'home';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getUseAllowableValues()
    {
        return [
            self::MODEL_USE_TEMP,
            self::MODEL_USE_HOME,
        ];
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
        $this->container['use'] = isset($data['use']) ? $data['use'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : 'id';
        $this->container['province'] = isset($data['province']) ? $data['province'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['district'] = isset($data['district']) ? $data['district'] : null;
        $this->container['village'] = isset($data['village']) ? $data['village'] : null;
        $this->container['rt'] = isset($data['rt']) ? $data['rt'] : null;
        $this->container['rw'] = isset($data['rw']) ? $data['rw'] : null;
        $this->container['postal_code'] = isset($data['postal_code']) ? $data['postal_code'] : null;
        $this->container['line'] = isset($data['line']) ? $data['line'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getUseAllowableValues();
        if (!is_null($this->container['use']) && !in_array($this->container['use'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'use', must be one of '%s'",
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
     * Gets use
     *
     * @return string
     */
    public function getUse()
    {
        return $this->container['use'];
    }

    /**
     * Sets use
     *
     * @param string $use use
     *
     * @return $this
     */
    public function setUse($use)
    {
        $allowedValues = $this->getUseAllowableValues();
        if (!is_null($use) && !in_array($use, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'use', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['use'] = $use;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string $country country
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets province
     *
     * @return string
     */
    public function getProvince()
    {
        return $this->container['province'];
    }

    /**
     * Sets province
     *
     * @param string $province province
     *
     * @return $this
     */
    public function setProvince($province)
    {
        $this->container['province'] = $province;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city city
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets district
     *
     * @return string
     */
    public function getDistrict()
    {
        return $this->container['district'];
    }

    /**
     * Sets district
     *
     * @param string $district district
     *
     * @return $this
     */
    public function setDistrict($district)
    {
        $this->container['district'] = $district;

        return $this;
    }

    /**
     * Gets village
     *
     * @return string
     */
    public function getVillage()
    {
        return $this->container['village'];
    }

    /**
     * Sets village
     *
     * @param string $village village
     *
     * @return $this
     */
    public function setVillage($village)
    {
        $this->container['village'] = $village;

        return $this;
    }

    /**
     * Gets rt
     *
     * @return string
     */
    public function getRt()
    {
        return $this->container['rt'];
    }

    /**
     * Sets rt
     *
     * @param string $rt rt
     *
     * @return $this
     */
    public function setRt($rt)
    {
        $this->container['rt'] = $rt;

        return $this;
    }

    /**
     * Gets rw
     *
     * @return string
     */
    public function getRw()
    {
        return $this->container['rw'];
    }

    /**
     * Sets rw
     *
     * @param string $rw rw
     *
     * @return $this
     */
    public function setRw($rw)
    {
        $this->container['rw'] = $rw;

        return $this;
    }

    /**
     * Gets postal_code
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     *
     * @param string $postal_code postal_code
     *
     * @return $this
     */
    public function setPostalCode($postal_code)
    {
        $this->container['postal_code'] = $postal_code;

        return $this;
    }

    /**
     * Gets line
     *
     * @return string[]
     */
    public function getLine()
    {
        return $this->container['line'];
    }

    /**
     * Sets line
     *
     * @param string[] $line line
     *
     * @return $this
     */
    public function setLine($line)
    {
        $this->container['line'] = $line;

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
