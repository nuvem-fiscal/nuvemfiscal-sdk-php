<?php
/**
 * NfeSefazRefNFP
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
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.7.0
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
 * NfeSefazRefNFP Class Doc Comment
 *
 * @category Class
 * @description Grupo com as informações NF de produtor referenciada.
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class NfeSefazRefNFP implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NfeSefazRefNFP';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'c_uf' => 'int',
        'aamm' => 'string',
        'cnpj' => 'string',
        'cpf' => 'string',
        'ie' => 'string',
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
        'cpf' => null,
        'ie' => null,
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
        'c_uf' => true,
        'aamm' => true,
        'cnpj' => true,
        'cpf' => true,
        'ie' => true,
        'mod' => true,
        'serie' => true,
        'n_nf' => true
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
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
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
        'cpf' => 'CPF',
        'ie' => 'IE',
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
        'cpf' => 'setCpf',
        'ie' => 'setIe',
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
        'cpf' => 'getCpf',
        'ie' => 'getIe',
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
        $this->setIfExists('cpf', $data ?? [], null);
        $this->setIfExists('ie', $data ?? [], null);
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
        if (!is_null($this->container['cnpj']) && (mb_strlen($this->container['cnpj']) > 14)) {
            $invalidProperties[] = "invalid value for 'cnpj', the character length must be smaller than or equal to 14.";
        }

        if (!is_null($this->container['cpf']) && (mb_strlen($this->container['cpf']) > 11)) {
            $invalidProperties[] = "invalid value for 'cpf', the character length must be smaller than or equal to 11.";
        }

        if ($this->container['ie'] === null) {
            $invalidProperties[] = "'ie' can't be null";
        }
        if ((mb_strlen($this->container['ie']) > 14)) {
            $invalidProperties[] = "invalid value for 'ie', the character length must be smaller than or equal to 14.";
        }

        if ($this->container['mod'] === null) {
            $invalidProperties[] = "'mod' can't be null";
        }
        if ($this->container['serie'] === null) {
            $invalidProperties[] = "'serie' can't be null";
        }
        if (($this->container['serie'] > 999)) {
            $invalidProperties[] = "invalid value for 'serie', must be smaller than or equal to 999.";
        }

        if (($this->container['serie'] < 0)) {
            $invalidProperties[] = "invalid value for 'serie', must be bigger than or equal to 0.";
        }

        if ($this->container['n_nf'] === null) {
            $invalidProperties[] = "'n_nf' can't be null";
        }
        if (($this->container['n_nf'] > 999999999)) {
            $invalidProperties[] = "invalid value for 'n_nf', must be smaller than or equal to 999999999.";
        }

        if (($this->container['n_nf'] < 1)) {
            $invalidProperties[] = "invalid value for 'n_nf', must be bigger than or equal to 1.";
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
     * @param int $c_uf Código da UF do emitente do Documento FiscalUtilizar a Tabela do IBGE (Anexo IV - Tabela de UF, Município e País).
     *
     * @return self
     */
    public function setCUf($c_uf)
    {
        if (is_null($c_uf)) {
            array_push($this->openAPINullablesSetToNull, 'c_uf');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('c_uf', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
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
     * @param string $aamm AAMM da emissão da NF de produtor.
     *
     * @return self
     */
    public function setAamm($aamm)
    {
        if (is_null($aamm)) {
            array_push($this->openAPINullablesSetToNull, 'aamm');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('aamm', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['aamm'] = $aamm;

        return $this;
    }

    /**
     * Gets cnpj
     *
     * @return string|null
     */
    public function getCnpj()
    {
        return $this->container['cnpj'];
    }

    /**
     * Sets cnpj
     *
     * @param string|null $cnpj CNPJ do emitente da NF de produtor.
     *
     * @return self
     */
    public function setCnpj($cnpj)
    {
        if (is_null($cnpj)) {
            array_push($this->openAPINullablesSetToNull, 'cnpj');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('cnpj', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($cnpj) && (mb_strlen($cnpj) > 14)) {
            throw new \InvalidArgumentException('invalid length for $cnpj when calling NfeSefazRefNFP., must be smaller than or equal to 14.');
        }

        $this->container['cnpj'] = $cnpj;

        return $this;
    }

    /**
     * Gets cpf
     *
     * @return string|null
     */
    public function getCpf()
    {
        return $this->container['cpf'];
    }

    /**
     * Sets cpf
     *
     * @param string|null $cpf CPF do emitente da NF de produtor.
     *
     * @return self
     */
    public function setCpf($cpf)
    {
        if (is_null($cpf)) {
            array_push($this->openAPINullablesSetToNull, 'cpf');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('cpf', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($cpf) && (mb_strlen($cpf) > 11)) {
            throw new \InvalidArgumentException('invalid length for $cpf when calling NfeSefazRefNFP., must be smaller than or equal to 11.');
        }

        $this->container['cpf'] = $cpf;

        return $this;
    }

    /**
     * Gets ie
     *
     * @return string
     */
    public function getIe()
    {
        return $this->container['ie'];
    }

    /**
     * Sets ie
     *
     * @param string $ie IE do emitente da NF de Produtor.
     *
     * @return self
     */
    public function setIe($ie)
    {
        if (is_null($ie)) {
            array_push($this->openAPINullablesSetToNull, 'ie');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ie', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($ie) && (mb_strlen($ie) > 14)) {
            throw new \InvalidArgumentException('invalid length for $ie when calling NfeSefazRefNFP., must be smaller than or equal to 14.');
        }

        $this->container['ie'] = $ie;

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
     * @param string $mod Código do modelo do Documento Fiscal - utilizar 04 para NF de produtor  ou 01 para NF Avulsa.
     *
     * @return self
     */
    public function setMod($mod)
    {
        if (is_null($mod)) {
            array_push($this->openAPINullablesSetToNull, 'mod');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('mod', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
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
     * @param int $serie Série do Documento Fiscal, informar zero se inexistentesérie.
     *
     * @return self
     */
    public function setSerie($serie)
    {
        if (is_null($serie)) {
            array_push($this->openAPINullablesSetToNull, 'serie');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('serie', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($serie) && ($serie > 999)) {
            throw new \InvalidArgumentException('invalid value for $serie when calling NfeSefazRefNFP., must be smaller than or equal to 999.');
        }
        if (!is_null($serie) && ($serie < 0)) {
            throw new \InvalidArgumentException('invalid value for $serie when calling NfeSefazRefNFP., must be bigger than or equal to 0.');
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
     * @param int $n_nf Número do Documento Fiscal - 1 - 999999999.
     *
     * @return self
     */
    public function setNNf($n_nf)
    {
        if (is_null($n_nf)) {
            array_push($this->openAPINullablesSetToNull, 'n_nf');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('n_nf', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($n_nf) && ($n_nf > 999999999)) {
            throw new \InvalidArgumentException('invalid value for $n_nf when calling NfeSefazRefNFP., must be smaller than or equal to 999999999.');
        }
        if (!is_null($n_nf) && ($n_nf < 1)) {
            throw new \InvalidArgumentException('invalid value for $n_nf when calling NfeSefazRefNFP., must be bigger than or equal to 1.');
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


