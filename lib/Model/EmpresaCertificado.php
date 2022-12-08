<?php
/**
 * EmpresaCertificado
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * API Nuvem Fiscal
 *
 * API para automação comercial e documentos fiscais.
 *
 * Versão do documento OpenAPI: 1.2.2
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.2.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace NuvemFiscal\Model;

use \ArrayAccess;
use \NuvemFiscal\ObjectSerializer;

/**
 * EmpresaCertificado Class Doc Comment
 *
 * @category Class
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EmpresaCertificado implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EmpresaCertificado';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'serial_number' => 'string',
        'issuer_name' => 'string',
        'not_valid_before' => '\DateTime',
        'not_valid_after' => '\DateTime',
        'thumbprint' => 'string',
        'subject_name' => 'string',
        'cpf_cnpj' => 'string',
        'nome_razao_social' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'serial_number' => null,
        'issuer_name' => null,
        'not_valid_before' => 'date-time',
        'not_valid_after' => 'date-time',
        'thumbprint' => null,
        'subject_name' => null,
        'cpf_cnpj' => null,
        'nome_razao_social' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'serial_number' => false,
		'issuer_name' => false,
		'not_valid_before' => false,
		'not_valid_after' => false,
		'thumbprint' => false,
		'subject_name' => false,
		'cpf_cnpj' => false,
		'nome_razao_social' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'serial_number' => 'serial_number',
        'issuer_name' => 'issuer_name',
        'not_valid_before' => 'not_valid_before',
        'not_valid_after' => 'not_valid_after',
        'thumbprint' => 'thumbprint',
        'subject_name' => 'subject_name',
        'cpf_cnpj' => 'cpf_cnpj',
        'nome_razao_social' => 'nome_razao_social'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'serial_number' => 'setSerialNumber',
        'issuer_name' => 'setIssuerName',
        'not_valid_before' => 'setNotValidBefore',
        'not_valid_after' => 'setNotValidAfter',
        'thumbprint' => 'setThumbprint',
        'subject_name' => 'setSubjectName',
        'cpf_cnpj' => 'setCpfCnpj',
        'nome_razao_social' => 'setNomeRazaoSocial'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'serial_number' => 'getSerialNumber',
        'issuer_name' => 'getIssuerName',
        'not_valid_before' => 'getNotValidBefore',
        'not_valid_after' => 'getNotValidAfter',
        'thumbprint' => 'getThumbprint',
        'subject_name' => 'getSubjectName',
        'cpf_cnpj' => 'getCpfCnpj',
        'nome_razao_social' => 'getNomeRazaoSocial'
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
        return self::$openAPIModelName;
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
        $this->setIfExists('serial_number', $data ?? [], null);
        $this->setIfExists('issuer_name', $data ?? [], null);
        $this->setIfExists('not_valid_before', $data ?? [], null);
        $this->setIfExists('not_valid_after', $data ?? [], null);
        $this->setIfExists('thumbprint', $data ?? [], null);
        $this->setIfExists('subject_name', $data ?? [], null);
        $this->setIfExists('cpf_cnpj', $data ?? [], null);
        $this->setIfExists('nome_razao_social', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
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
     * Gets serial_number
     *
     * @return string|null
     */
    public function getSerialNumber()
    {
        return $this->container['serial_number'];
    }

    /**
     * Sets serial_number
     *
     * @param string|null $serial_number serial_number
     *
     * @return self
     */
    public function setSerialNumber($serial_number)
    {

        if (is_null($serial_number)) {
            throw new \InvalidArgumentException('non-nullable serial_number cannot be null');
        }

        $this->container['serial_number'] = $serial_number;

        return $this;
    }

    /**
     * Gets issuer_name
     *
     * @return string|null
     */
    public function getIssuerName()
    {
        return $this->container['issuer_name'];
    }

    /**
     * Sets issuer_name
     *
     * @param string|null $issuer_name issuer_name
     *
     * @return self
     */
    public function setIssuerName($issuer_name)
    {

        if (is_null($issuer_name)) {
            throw new \InvalidArgumentException('non-nullable issuer_name cannot be null');
        }

        $this->container['issuer_name'] = $issuer_name;

        return $this;
    }

    /**
     * Gets not_valid_before
     *
     * @return \DateTime|null
     */
    public function getNotValidBefore()
    {
        return $this->container['not_valid_before'];
    }

    /**
     * Sets not_valid_before
     *
     * @param \DateTime|null $not_valid_before not_valid_before
     *
     * @return self
     */
    public function setNotValidBefore($not_valid_before)
    {

        if (is_null($not_valid_before)) {
            throw new \InvalidArgumentException('non-nullable not_valid_before cannot be null');
        }

        $this->container['not_valid_before'] = $not_valid_before;

        return $this;
    }

    /**
     * Gets not_valid_after
     *
     * @return \DateTime|null
     */
    public function getNotValidAfter()
    {
        return $this->container['not_valid_after'];
    }

    /**
     * Sets not_valid_after
     *
     * @param \DateTime|null $not_valid_after not_valid_after
     *
     * @return self
     */
    public function setNotValidAfter($not_valid_after)
    {

        if (is_null($not_valid_after)) {
            throw new \InvalidArgumentException('non-nullable not_valid_after cannot be null');
        }

        $this->container['not_valid_after'] = $not_valid_after;

        return $this;
    }

    /**
     * Gets thumbprint
     *
     * @return string|null
     */
    public function getThumbprint()
    {
        return $this->container['thumbprint'];
    }

    /**
     * Sets thumbprint
     *
     * @param string|null $thumbprint thumbprint
     *
     * @return self
     */
    public function setThumbprint($thumbprint)
    {

        if (is_null($thumbprint)) {
            throw new \InvalidArgumentException('non-nullable thumbprint cannot be null');
        }

        $this->container['thumbprint'] = $thumbprint;

        return $this;
    }

    /**
     * Gets subject_name
     *
     * @return string|null
     */
    public function getSubjectName()
    {
        return $this->container['subject_name'];
    }

    /**
     * Sets subject_name
     *
     * @param string|null $subject_name subject_name
     *
     * @return self
     */
    public function setSubjectName($subject_name)
    {

        if (is_null($subject_name)) {
            throw new \InvalidArgumentException('non-nullable subject_name cannot be null');
        }

        $this->container['subject_name'] = $subject_name;

        return $this;
    }

    /**
     * Gets cpf_cnpj
     *
     * @return string|null
     */
    public function getCpfCnpj()
    {
        return $this->container['cpf_cnpj'];
    }

    /**
     * Sets cpf_cnpj
     *
     * @param string|null $cpf_cnpj cpf_cnpj
     *
     * @return self
     */
    public function setCpfCnpj($cpf_cnpj)
    {

        if (is_null($cpf_cnpj)) {
            throw new \InvalidArgumentException('non-nullable cpf_cnpj cannot be null');
        }

        $this->container['cpf_cnpj'] = $cpf_cnpj;

        return $this;
    }

    /**
     * Gets nome_razao_social
     *
     * @return string|null
     */
    public function getNomeRazaoSocial()
    {
        return $this->container['nome_razao_social'];
    }

    /**
     * Sets nome_razao_social
     *
     * @param string|null $nome_razao_social nome_razao_social
     *
     * @return self
     */
    public function setNomeRazaoSocial($nome_razao_social)
    {

        if (is_null($nome_razao_social)) {
            throw new \InvalidArgumentException('non-nullable nome_razao_social cannot be null');
        }

        $this->container['nome_razao_social'] = $nome_razao_social;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


