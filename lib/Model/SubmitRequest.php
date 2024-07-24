<?php
/**
 * SubmitRequest
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

use ArrayAccess;
use Mediator\SatuSehat\Lib\Client\ObjectSerializer;

/**
 * SubmitRequest Class Doc Comment
 *
 * @category Class
 * @package  Mediator\SatuSehat\Lib\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SubmitRequest implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SubmitRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'profile' => 'string[]',
        'organization_id' => 'string',
        'location_id' => 'string',
        'practitioner_nik' => 'string',
        'patient' => '\Mediator\SatuSehat\Lib\Client\Model\PatientBasic',
        'tb_suspect' => '\Mediator\SatuSehat\Lib\Client\Model\TbSuspect',
        'tb_confirm' => '\Mediator\SatuSehat\Lib\Client\Model\TbConfirm',
        'encounter' => '\Mediator\SatuSehat\Lib\Client\Model\Encounter',
        'condition' => '\Mediator\SatuSehat\Lib\Client\Model\Condition[]',
        'observation' => '\Mediator\SatuSehat\Lib\Client\Model\Observation[]',
        'procedure' => '\Mediator\SatuSehat\Lib\Client\Model\Procedure[]',
        'specimen' => '\Mediator\SatuSehat\Lib\Client\Model\Specimen[]',
        'diagnostic_report' => '\Mediator\SatuSehat\Lib\Client\Model\DiagnosticReport[]',
        'service_request' => '\Mediator\SatuSehat\Lib\Client\Model\ServiceRequest[]',
        'episode_of_care' => '\Mediator\SatuSehat\Lib\Client\Model\EpisodeOfCare',
        'medication' => '\Mediator\SatuSehat\Lib\Client\Model\Medication[]',
        'medication_statement' => '\Mediator\SatuSehat\Lib\Client\Model\MedicationStatement[]',
        'immunization' => '\Mediator\SatuSehat\Lib\Client\Model\Immunization[]',
        'questionnaire_response' => '\Mediator\SatuSehat\Lib\Client\Model\QuestionnaireResponse[]',
        'composition' => '\Mediator\SatuSehat\Lib\Client\Model\Composition[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'profile' => null,
        'organization_id' => null,
        'location_id' => null,
        'practitioner_nik' => null,
        'patient' => null,
        'tb_suspect' => null,
        'tb_confirm' => null,
        'encounter' => null,
        'condition' => null,
        'observation' => null,
        'procedure' => null,
        'specimen' => null,
        'diagnostic_report' => null,
        'service_request' => null,
        'episode_of_care' => null,
        'medication' => null,
        'medication_statement' => null,
        'immunization' => null,
        'questionnaire_response' => null,
        'composition' => null
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
        'profile' => 'profile',
        'organization_id' => 'organization_id',
        'location_id' => 'location_id',
        'practitioner_nik' => 'practitioner_nik',
        'patient' => 'patient',
        'tb_suspect' => 'tb_suspect',
        'tb_confirm' => 'tb_confirm',
        'encounter' => 'encounter',
        'condition' => 'condition',
        'observation' => 'observation',
        'procedure' => 'procedure',
        'specimen' => 'specimen',
        'diagnostic_report' => 'diagnostic_report',
        'service_request' => 'service_request',
        'episode_of_care' => 'episode_of_care',
        'medication' => 'medication',
        'medication_statement' => 'medication_statement',
        'immunization' => 'immunization',
        'questionnaire_response' => 'questionnaire_response',
        'composition' => 'composition'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'profile' => 'setProfile',
        'organization_id' => 'setOrganizationId',
        'location_id' => 'setLocationId',
        'practitioner_nik' => 'setPractitionerNik',
        'patient' => 'setPatient',
        'tb_suspect' => 'setTbSuspect',
        'tb_confirm' => 'setTbConfirm',
        'encounter' => 'setEncounter',
        'condition' => 'setCondition',
        'observation' => 'setObservation',
        'procedure' => 'setProcedure',
        'specimen' => 'setSpecimen',
        'diagnostic_report' => 'setDiagnosticReport',
        'service_request' => 'setServiceRequest',
        'episode_of_care' => 'setEpisodeOfCare',
        'medication' => 'setMedication',
        'medication_statement' => 'setMedicationStatement',
        'immunization' => 'setImmunization',
        'questionnaire_response' => 'setQuestionnaireResponse',
        'composition' => 'setComposition'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'profile' => 'getProfile',
        'organization_id' => 'getOrganizationId',
        'location_id' => 'getLocationId',
        'practitioner_nik' => 'getPractitionerNik',
        'patient' => 'getPatient',
        'tb_suspect' => 'getTbSuspect',
        'tb_confirm' => 'getTbConfirm',
        'encounter' => 'getEncounter',
        'condition' => 'getCondition',
        'observation' => 'getObservation',
        'procedure' => 'getProcedure',
        'specimen' => 'getSpecimen',
        'diagnostic_report' => 'getDiagnosticReport',
        'service_request' => 'getServiceRequest',
        'episode_of_care' => 'getEpisodeOfCare',
        'medication' => 'getMedication',
        'medication_statement' => 'getMedicationStatement',
        'immunization' => 'getImmunization',
        'questionnaire_response' => 'getQuestionnaireResponse',
        'composition' => 'getComposition'
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
        $this->container['profile'] = isset($data['profile']) ? $data['profile'] : null;
        $this->container['organization_id'] = isset($data['organization_id']) ? $data['organization_id'] : null;
        $this->container['location_id'] = isset($data['location_id']) ? $data['location_id'] : null;
        $this->container['practitioner_nik'] = isset($data['practitioner_nik']) ? $data['practitioner_nik'] : null;
        $this->container['patient'] = isset($data['patient']) ? $data['patient'] : null;
        $this->container['tb_suspect'] = isset($data['tb_suspect']) ? $data['tb_suspect'] : null;
        $this->container['tb_confirm'] = isset($data['tb_confirm']) ? $data['tb_confirm'] : null;
        $this->container['encounter'] = isset($data['encounter']) ? $data['encounter'] : null;
        $this->container['condition'] = isset($data['condition']) ? $data['condition'] : null;
        $this->container['observation'] = isset($data['observation']) ? $data['observation'] : null;
        $this->container['procedure'] = isset($data['procedure']) ? $data['procedure'] : null;
        $this->container['specimen'] = isset($data['specimen']) ? $data['specimen'] : null;
        $this->container['diagnostic_report'] = isset($data['diagnostic_report']) ? $data['diagnostic_report'] : null;
        $this->container['service_request'] = isset($data['service_request']) ? $data['service_request'] : null;
        $this->container['episode_of_care'] = isset($data['episode_of_care']) ? $data['episode_of_care'] : null;
        $this->container['medication'] = isset($data['medication']) ? $data['medication'] : null;
        $this->container['medication_statement'] = isset($data['medication_statement']) ? $data['medication_statement'] : null;
        $this->container['immunization'] = isset($data['immunization']) ? $data['immunization'] : null;
        $this->container['questionnaire_response'] = isset($data['questionnaire_response']) ? $data['questionnaire_response'] : null;
        $this->container['composition'] = isset($data['composition']) ? $data['composition'] : null;
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
     * Gets profile
     *
     * @return string[]
     */
    public function getProfile()
    {
        return $this->container['profile'];
    }

    /**
     * Sets profile
     *
     * @param string[] $profile profile
     *
     * @return $this
     */
    public function setProfile($profile)
    {
        $this->container['profile'] = $profile;

        return $this;
    }

    /**
     * Gets organization_id
     *
     * @return string
     */
    public function getOrganizationId()
    {
        return $this->container['organization_id'];
    }

    /**
     * Sets organization_id
     *
     * @param string $organization_id organization_id
     *
     * @return $this
     */
    public function setOrganizationId($organization_id)
    {
        $this->container['organization_id'] = $organization_id;

        return $this;
    }

    /**
     * Gets location_id
     *
     * @return string
     */
    public function getLocationId()
    {
        return $this->container['location_id'];
    }

    /**
     * Sets location_id
     *
     * @param string $location_id location_id
     *
     * @return $this
     */
    public function setLocationId($location_id)
    {
        $this->container['location_id'] = $location_id;

        return $this;
    }

    /**
     * Gets practitioner_nik
     *
     * @return string
     */
    public function getPractitionerNik()
    {
        return $this->container['practitioner_nik'];
    }

    /**
     * Sets practitioner_nik
     *
     * @param string $practitioner_nik practitioner_nik
     *
     * @return $this
     */
    public function setPractitionerNik($practitioner_nik)
    {
        $this->container['practitioner_nik'] = $practitioner_nik;

        return $this;
    }

    /**
     * Gets patient
     *
     * @return \Mediator\SatuSehat\Lib\Client\Model\PatientBasic
     */
    public function getPatient()
    {
        return $this->container['patient'];
    }

    /**
     * Sets patient
     *
     * @param \Mediator\SatuSehat\Lib\Client\Model\PatientBasic $patient patient
     *
     * @return $this
     */
    public function setPatient($patient)
    {
        $this->container['patient'] = $patient;

        return $this;
    }

    /**
     * Gets tb_suspect
     *
     * @return \Mediator\SatuSehat\Lib\Client\Model\TbSuspect
     */
    public function getTbSuspect()
    {
        return $this->container['tb_suspect'];
    }

    /**
     * Sets tb_suspect
     *
     * @param \Mediator\SatuSehat\Lib\Client\Model\TbSuspect $tb_suspect tb_suspect
     *
     * @return $this
     */
    public function setTbSuspect($tb_suspect)
    {
        $this->container['tb_suspect'] = $tb_suspect;

        return $this;
    }

    /**
     * Gets tb_confirm
     *
     * @return \Mediator\SatuSehat\Lib\Client\Model\TbConfirm
     */
    public function getTbConfirm()
    {
        return $this->container['tb_confirm'];
    }

    /**
     * Sets tb_confirm
     *
     * @param \Mediator\SatuSehat\Lib\Client\Model\TbConfirm $tb_confirm tb_confirm
     *
     * @return $this
     */
    public function setTbConfirm($tb_confirm)
    {
        $this->container['tb_confirm'] = $tb_confirm;

        return $this;
    }

    /**
     * Gets encounter
     *
     * @return \Mediator\SatuSehat\Lib\Client\Model\Encounter
     */
    public function getEncounter()
    {
        return $this->container['encounter'];
    }

    /**
     * Sets encounter
     *
     * @param \Mediator\SatuSehat\Lib\Client\Model\Encounter $encounter encounter
     *
     * @return $this
     */
    public function setEncounter($encounter)
    {
        $this->container['encounter'] = $encounter;

        return $this;
    }

    /**
     * Gets condition
     *
     * @return \Mediator\SatuSehat\Lib\Client\Model\Condition[]
     */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
     * Sets condition
     *
     * @param \Mediator\SatuSehat\Lib\Client\Model\Condition[] $condition condition
     *
     * @return $this
     */
    public function setCondition($condition)
    {
        $this->container['condition'] = $condition;

        return $this;
    }

    /**
     * Gets observation
     *
     * @return \Mediator\SatuSehat\Lib\Client\Model\Observation[]
     */
    public function getObservation()
    {
        return $this->container['observation'];
    }

    /**
     * Sets observation
     *
     * @param \Mediator\SatuSehat\Lib\Client\Model\Observation[] $observation observation
     *
     * @return $this
     */
    public function setObservation($observation)
    {
        $this->container['observation'] = $observation;

        return $this;
    }

    /**
     * Gets procedure
     *
     * @return \Mediator\SatuSehat\Lib\Client\Model\Procedure[]
     */
    public function getProcedure()
    {
        return $this->container['procedure'];
    }

    /**
     * Sets procedure
     *
     * @param \Mediator\SatuSehat\Lib\Client\Model\Procedure[] $procedure procedure
     *
     * @return $this
     */
    public function setProcedure($procedure)
    {
        $this->container['procedure'] = $procedure;

        return $this;
    }

    /**
     * Gets specimen
     *
     * @return \Mediator\SatuSehat\Lib\Client\Model\Specimen[]
     */
    public function getSpecimen()
    {
        return $this->container['specimen'];
    }

    /**
     * Sets specimen
     *
     * @param \Mediator\SatuSehat\Lib\Client\Model\Specimen[] $specimen specimen
     *
     * @return $this
     */
    public function setSpecimen($specimen)
    {
        $this->container['specimen'] = $specimen;

        return $this;
    }

    /**
     * Gets diagnostic_report
     *
     * @return \Mediator\SatuSehat\Lib\Client\Model\DiagnosticReport[]
     */
    public function getDiagnosticReport()
    {
        return $this->container['diagnostic_report'];
    }

    /**
     * Sets diagnostic_report
     *
     * @param \Mediator\SatuSehat\Lib\Client\Model\DiagnosticReport[] $diagnostic_report diagnostic_report
     *
     * @return $this
     */
    public function setDiagnosticReport($diagnostic_report)
    {
        $this->container['diagnostic_report'] = $diagnostic_report;

        return $this;
    }

    /**
     * Gets service_request
     *
     * @return \Mediator\SatuSehat\Lib\Client\Model\ServiceRequest[]
     */
    public function getServiceRequest()
    {
        return $this->container['service_request'];
    }

    /**
     * Sets service_request
     *
     * @param \Mediator\SatuSehat\Lib\Client\Model\ServiceRequest[] $service_request service_request
     *
     * @return $this
     */
    public function setServiceRequest($service_request)
    {
        $this->container['service_request'] = $service_request;

        return $this;
    }

    /**
     * Gets episode_of_care
     *
     * @return \Mediator\SatuSehat\Lib\Client\Model\EpisodeOfCare
     */
    public function getEpisodeOfCare()
    {
        return $this->container['episode_of_care'];
    }

    /**
     * Sets episode_of_care
     *
     * @param \Mediator\SatuSehat\Lib\Client\Model\EpisodeOfCare $episode_of_care episode_of_care
     *
     * @return $this
     */
    public function setEpisodeOfCare($episode_of_care)
    {
        $this->container['episode_of_care'] = $episode_of_care;

        return $this;
    }

    /**
     * Gets medication
     *
     * @return \Mediator\SatuSehat\Lib\Client\Model\Medication[]
     */
    public function getMedication()
    {
        return $this->container['medication'];
    }

    /**
     * Sets medication
     *
     * @param \Mediator\SatuSehat\Lib\Client\Model\Medication[] $medication medication
     *
     * @return $this
     */
    public function setMedication($medication)
    {
        $this->container['medication'] = $medication;

        return $this;
    }

    /**
     * Gets medication_statement
     *
     * @return \Mediator\SatuSehat\Lib\Client\Model\MedicationStatement[]
     */
    public function getMedicationStatement()
    {
        return $this->container['medication_statement'];
    }

    /**
     * Sets medication_statement
     *
     * @param \Mediator\SatuSehat\Lib\Client\Model\MedicationStatement[] $medication_statement medication_statement
     *
     * @return $this
     */
    public function setMedicationStatement($medication_statement)
    {
        $this->container['medication_statement'] = $medication_statement;

        return $this;
    }

    /**
     * Gets immunization
     *
     * @return \Mediator\SatuSehat\Lib\Client\Model\Immunization[]
     */
    public function getImmunization()
    {
        return $this->container['immunization'];
    }

    /**
     * Sets immunization
     *
     * @param \Mediator\SatuSehat\Lib\Client\Model\Immunization[] $immunization immunization
     *
     * @return $this
     */
    public function setImmunization($immunization)
    {
        $this->container['immunization'] = $immunization;

        return $this;
    }

    /**
     * Gets questionnaire_response
     *
     * @return \Mediator\SatuSehat\Lib\Client\Model\QuestionnaireResponse[]
     */
    public function getQuestionnaireResponse()
    {
        return $this->container['questionnaire_response'];
    }

    /**
     * Sets questionnaire_response
     *
     * @param \Mediator\SatuSehat\Lib\Client\Model\QuestionnaireResponse[] $questionnaire_response questionnaire_response
     *
     * @return $this
     */
    public function setQuestionnaireResponse($questionnaire_response)
    {
        $this->container['questionnaire_response'] = $questionnaire_response;

        return $this;
    }

    /**
     * Gets composition
     *
     * @return \Mediator\SatuSehat\Lib\Client\Model\Composition[]
     */
    public function getComposition()
    {
        return $this->container['composition'];
    }

    /**
     * Sets composition
     *
     * @param \Mediator\SatuSehat\Lib\Client\Model\Composition[] $composition composition
     *
     * @return $this
     */
    public function setComposition($composition)
    {
        $this->container['composition'] = $composition;

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
