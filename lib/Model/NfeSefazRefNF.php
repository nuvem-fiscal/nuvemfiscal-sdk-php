<?php
/**
 * NfeSefazRefNF
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
 * NfeSefazRefNF Class Doc Comment
 *
 * @category Class
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class NfeSefazRefNF implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NfeSefazRefNF';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'c_uf' => 'int',
        'aamm' => 'string',
        'cnpj' => 'string',
        'mod' => 'string',
        'serie' => 'int',
        'n_nf' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'c_uf' => null,
        'aamm' => null,
        'cnpj' => null,
        'mod' => null,
        'serie' => null,
        'n_nf' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'c_uf' => false,
		'aamm' => false,
		'cnpj' => false,
		'mod' => false,
		'serie' => false,
		'n_nf' => false
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
        'c_uf' => 'cUF',
        'aamm' => 'AAMM',
        'cnpj' => 'CNPJ',
        'mod' => 'mod',
        'serie' => 'serie',
        'n_nf' => 'nNF'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'c_uf' => 'setCUf',
        'aamm' => 'setAamm',
        'cnpj' => 'setCnpj',
        'mod' => 'setMod',
        'serie' => 'setSerie',
        'n_nf' => 'setNNf'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'c_uf' => 'getCUf',
        'aamm' => 'getAamm',
        'cnpj' => 'getCnpj',
        'mod' => 'getMod',
        'serie' => 'getSerie',
        'n_nf' => 'getNNf'
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
        $this->setIfExists('c_uf', $data ?? [], null);
        $this->setIfExists('aamm', $data ?? [], null);
        $this->setIfExists('cnpj', $data ?? [], null);
        $this->setIfExists('mod', $data ?? [], null);
        $this->setIfExists('serie', $data ?? [], null);
        $this->setIfExists('n_nf', $data ?? [], null);
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

        if ($this->container['c_uf'] === null) {
            $invalidProperties[] = "'c_uf' can't be null";
        }
        if ($this->container['aamm'] === null) {
            $invalidProperties[] = "'aamm' can't be null";
        }
        if ($this->container['cnpj'] === null) {
            $invalidProperties[] = "'cnpj' can't be null";
        }
        if ($this->container['mod'] === null) {
            $invalidProperties[] = "'mod' can't be null";
        }
        if ($this->container['serie'] === null) {
            $invalidProperties[] = "'serie' can't be null";
        }
        if ($this->container['n_nf'] === null) {
            $invalidProperties[] = "'n_nf' can't be null";
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
     * Gets c_uf
     *
     * @return int
     */
    public function getCUf()
    {
        return $this->container['c_uf'];
    }

    /**
     * Sets c_uf
     *
     * @param int $c_uf Código da UF do emitente do Documento Fiscal. Utilizar a Tabela do IBGE.
     *
     * @return self
     */
    public function setCUf($c_uf)
    {

        if (is_null($c_uf)) {
            throw new \InvalidArgumentException('non-nullable c_uf cannot be null');
        }

        $this->container['c_uf'] = $c_uf;

        return $this;
    }

    /**
     * Gets aamm
     *
     * @return string
     */
    public function getAamm()
    {
        return $this->container['aamm'];
    }

    /**
     * Sets aamm
     *
     * @param string $aamm AAMM da emissão.
     *
     * @return self
     */
    public function setAamm($aamm)
    {

        if (is_null($aamm)) {
            throw new \InvalidArgumentException('non-nullable aamm cannot be null');
        }

        $this->container['aamm'] = $aamm;

        return $this;
    }

    /**
     * Gets cnpj
     *
     * @return string
     */
    public function getCnpj()
    {
        return $this->container['cnpj'];
    }

    /**
     * Sets cnpj
     *
     * @param string $cnpj CNPJ do emitente do documento fiscal referenciado.
     *
     * @return self
     */
    public function setCnpj($cnpj)
    {

        if (is_null($cnpj)) {
            throw new \InvalidArgumentException('non-nullable cnpj cannot be null');
        }

        $this->container['cnpj'] = $cnpj;

        return $this;
    }

    /**
     * Gets mod
     *
     * @return string
     */
    public function getMod()
    {
        return $this->container['mod'];
    }

    /**
     * Sets mod
     *
     * @param string $mod Código do modelo do Documento Fiscal. Utilizar 01 para NF modelo 1/1A e 02 para NF modelo 02.
     *
     * @return self
     */
    public function setMod($mod)
    {

        if (is_null($mod)) {
            throw new \InvalidArgumentException('non-nullable mod cannot be null');
        }

        $this->container['mod'] = $mod;

        return $this;
    }

    /**
     * Gets serie
     *
     * @return int
     */
    public function getSerie()
    {
        return $this->container['serie'];
    }

    /**
     * Sets serie
     *
     * @param int $serie Série do Documento Fiscal, informar zero se inexistente.
     *
     * @return self
     */
    public function setSerie($serie)
    {

        if (is_null($serie)) {
            throw new \InvalidArgumentException('non-nullable serie cannot be null');
        }

        $this->container['serie'] = $serie;

        return $this;
    }

    /**
     * Gets n_nf
     *
     * @return int
     */
    public function getNNf()
    {
        return $this->container['n_nf'];
    }

    /**
     * Sets n_nf
     *
     * @param int $n_nf Número do Documento Fiscal.
     *
     * @return self
     */
    public function setNNf($n_nf)
    {

        if (is_null($n_nf)) {
            throw new \InvalidArgumentException('non-nullable n_nf cannot be null');
        }

        $this->container['n_nf'] = $n_nf;

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


