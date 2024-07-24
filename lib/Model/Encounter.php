<?php
/**
 * Encounter
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
 * Encounter Class Doc Comment
 *
 * @category Class
 * @package  Mediator\SatuSehat\Lib\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Encounter extends MediatorResourceBasic
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Encounter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'classification' => 'string',
        'status_akhir' => 'string',
        'period_start' => '\DateTime',
        'perion_in_progress' => '\DateTime',
        'period_end' => '\DateTime',
        'referral_no' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'classification' => null,
        'status_akhir' => null,
        'period_start' => 'date-time',
        'perion_in_progress' => 'date-time',
        'period_end' => 'date-time',
        'referral_no' => null
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
        'classification' => 'classification',
        'status_akhir' => 'status_akhir',
        'period_start' => 'period_start',
        'perion_in_progress' => 'perion_in_progress',
        'period_end' => 'period_end',
        'referral_no' => 'referral_no'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'classification' => 'setClassification',
        'status_akhir' => 'setStatusAkhir',
        'period_start' => 'setPeriodStart',
        'perion_in_progress' => 'setPerionInProgress',
        'period_end' => 'setPeriodEnd',
        'referral_no' => 'setReferralNo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'classification' => 'getClassification',
        'status_akhir' => 'getStatusAkhir',
        'period_start' => 'getPeriodStart',
        'perion_in_progress' => 'getPerionInProgress',
        'period_end' => 'getPeriodEnd',
        'referral_no' => 'getReferralNo'
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

    public const CLASSIFICATION_AMB = 'AMB';
    public const CLASSIFICATION_EMER = 'EMER';
    public const CLASSIFICATION_IMP = 'IMP';
    public const STATUS_AKHIR_PULANG_PAKSA = 'pulang_paksa';
    public const STATUS_AKHIR_DIRUJUK = 'dirujuk';
    public const STATUS_AKHIR_MENINGGAL = 'meninggal';
    public const STATUS_AKHIR_SEMBUH = 'sembuh';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getClassificationAllowableValues()
    {
        return [
            self::CLASSIFICATION_AMB,
            self::CLASSIFICATION_EMER,
            self::CLASSIFICATION_IMP,
        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAkhirAllowableValues()
    {
        return [
            self::STATUS_AKHIR_PULANG_PAKSA,
            self::STATUS_AKHIR_DIRUJUK,
            self::STATUS_AKHIR_MENINGGAL,
            self::STATUS_AKHIR_SEMBUH,
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

        $this->container['classification'] = isset($data['classification']) ? $data['classification'] : null;
        $this->container['status_akhir'] = isset($data['status_akhir']) ? $data['status_akhir'] : null;
        $this->container['period_start'] = isset($data['period_start']) ? $data['period_start'] : null;
        $this->container['perion_in_progress'] = isset($data['perion_in_progress']) ? $data['perion_in_progress'] : null;
        $this->container['period_end'] = isset($data['period_end']) ? $data['period_end'] : null;
        $this->container['referral_no'] = isset($data['referral_no']) ? $data['referral_no'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        $allowedValues = $this->getClassificationAllowableValues();
        if (!is_null($this->container['classification']) && !in_array($this->container['classification'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'classification', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getStatusAkhirAllowableValues();
        if (!is_null($this->container['status_akhir']) && !in_array($this->container['status_akhir'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status_akhir', must be one of '%s'",
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
     * Gets classification
     *
     * @return string
     */
    public function getClassification()
    {
        return $this->container['classification'];
    }

    /**
     * Sets classification
     *
     * @param string $classification classification
     *
     * @return $this
     */
    public function setClassification($classification)
    {
        $allowedValues = $this->getClassificationAllowableValues();
        if (!is_null($classification) && !in_array($classification, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'classification', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['classification'] = $classification;

        return $this;
    }

    /**
     * Gets status_akhir
     *
     * @return string
     */
    public function getStatusAkhir()
    {
        return $this->container['status_akhir'];
    }

    /**
     * Sets status_akhir
     *
     * @param string $status_akhir status_akhir
     *
     * @return $this
     */
    public function setStatusAkhir($status_akhir)
    {
        $allowedValues = $this->getStatusAkhirAllowableValues();
        if (!is_null($status_akhir) && !in_array($status_akhir, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status_akhir', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status_akhir'] = $status_akhir;

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
     * Gets perion_in_progress
     *
     * @return \DateTime
     */
    public function getPerionInProgress()
    {
        return $this->container['perion_in_progress'];
    }

    /**
     * Sets perion_in_progress
     *
     * @param \DateTime $perion_in_progress perion_in_progress
     *
     * @return $this
     */
    public function setPerionInProgress($perion_in_progress)
    {
        $this->container['perion_in_progress'] = $perion_in_progress;

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
     * Gets referral_no
     *
     * @return string
     */
    public function getReferralNo()
    {
        return $this->container['referral_no'];
    }

    /**
     * Sets referral_no
     *
     * @param string $referral_no referral_no
     *
     * @return $this
     */
    public function setReferralNo($referral_no)
    {
        $this->container['referral_no'] = $referral_no;

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
