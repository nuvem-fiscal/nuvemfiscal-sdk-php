<?php
/**
 * NfcomSefazGCofatGNF
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
 * OpenAPI Generator version: 7.2.0
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
 * NfcomSefazGCofatGNF Class Doc Comment
 *
 * @category Class
 * @description Informação da NF modelo 21/22 referenciada.
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class NfcomSefazGCofatGNF implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NfcomSefazGCofat_GNF';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cnpj' => 'string',
        'mod' => 'int',
        'serie' => 'string',
        'n_nf' => 'int',
        'compet_emis' => 'string',
        'hash115' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'cnpj' => null,
        'mod' => null,
        'serie' => null,
        'n_nf' => null,
        'compet_emis' => null,
        'hash115' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'cnpj' => true,
        'mod' => true,
        'serie' => true,
        'n_nf' => true,
        'compet_emis' => true,
        'hash115' => true
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
        'cnpj' => 'CNPJ',
        'mod' => 'mod',
        'serie' => 'serie',
        'n_nf' => 'nNF',
        'compet_emis' => 'CompetEmis',
        'hash115' => 'hash115'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cnpj' => 'setCnpj',
        'mod' => 'setMod',
        'serie' => 'setSerie',
        'n_nf' => 'setNNf',
        'compet_emis' => 'setCompetEmis',
        'hash115' => 'setHash115'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cnpj' => 'getCnpj',
        'mod' => 'getMod',
        'serie' => 'getSerie',
        'n_nf' => 'getNNf',
        'compet_emis' => 'getCompetEmis',
        'hash115' => 'getHash115'
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
        $this->setIfExists('cnpj', $data ?? [], null);
        $this->setIfExists('mod', $data ?? [], null);
        $this->setIfExists('serie', $data ?? [], null);
        $this->setIfExists('n_nf', $data ?? [], null);
        $this->setIfExists('compet_emis', $data ?? [], null);
        $this->setIfExists('hash115', $data ?? [], null);
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

        if ($this->container['cnpj'] === null) {
            $invalidProperties[] = "'cnpj' can't be null";
        }
        if ($this->container['mod'] === null) {
            $invalidProperties[] = "'mod' can't be null";
        }
        if ($this->container['serie'] === null) {
            $invalidProperties[] = "'serie' can't be null";
        }
        if ((mb_strlen($this->container['serie']) > 3)) {
            $invalidProperties[] = "invalid value for 'serie', the character length must be smaller than or equal to 3.";
        }

        if ((mb_strlen($this->container['serie']) < 3)) {
            $invalidProperties[] = "invalid value for 'serie', the character length must be bigger than or equal to 3.";
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

        if ($this->container['compet_emis'] === null) {
            $invalidProperties[] = "'compet_emis' can't be null";
        }
        if ((mb_strlen($this->container['compet_emis']) > 6)) {
            $invalidProperties[] = "invalid value for 'compet_emis', the character length must be smaller than or equal to 6.";
        }

        if ((mb_strlen($this->container['compet_emis']) < 6)) {
            $invalidProperties[] = "invalid value for 'compet_emis', the character length must be bigger than or equal to 6.";
        }

        if (!is_null($this->container['hash115']) && (mb_strlen($this->container['hash115']) > 44)) {
            $invalidProperties[] = "invalid value for 'hash115', the character length must be smaller than or equal to 44.";
        }

        if (!is_null($this->container['hash115']) && (mb_strlen($this->container['hash115']) < 44)) {
            $invalidProperties[] = "invalid value for 'hash115', the character length must be bigger than or equal to 44.";
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
     * @param string $cnpj CNPJ do Emitente.  Informar o CNPJ do emitente do Documento Fiscal.
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
        $this->container['cnpj'] = $cnpj;

        return $this;
    }

    /**
     * Gets mod
     *
     * @return int
     */
    public function getMod()
    {
        return $this->container['mod'];
    }

    /**
     * Sets mod
     *
     * @param int $mod Modelo do documento.  21 ou 22.
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
     * @return string
     */
    public function getSerie()
    {
        return $this->container['serie'];
    }

    /**
     * Sets serie
     *
     * @param string $serie Serie do documento fiscal.
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
        if (!is_null($serie) && (mb_strlen($serie) > 3)) {
            throw new \InvalidArgumentException('invalid length for $serie when calling NfcomSefazGCofatGNF., must be smaller than or equal to 3.');
        }
        if (!is_null($serie) && (mb_strlen($serie) < 3)) {
            throw new \InvalidArgumentException('invalid length for $serie when calling NfcomSefazGCofatGNF., must be bigger than or equal to 3.');
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
     * @param int $n_nf Número do documento fiscal.
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
            throw new \InvalidArgumentException('invalid value for $n_nf when calling NfcomSefazGCofatGNF., must be smaller than or equal to 999999999.');
        }
        if (!is_null($n_nf) && ($n_nf < 1)) {
            throw new \InvalidArgumentException('invalid value for $n_nf when calling NfcomSefazGCofatGNF., must be bigger than or equal to 1.');
        }

        $this->container['n_nf'] = $n_nf;

        return $this;
    }

    /**
     * Gets compet_emis
     *
     * @return string
     */
    public function getCompetEmis()
    {
        return $this->container['compet_emis'];
    }

    /**
     * Sets compet_emis
     *
     * @param string $compet_emis Ano e mês da emissão da NF (AAAAMM).
     *
     * @return self
     */
    public function setCompetEmis($compet_emis)
    {
        if (is_null($compet_emis)) {
            array_push($this->openAPINullablesSetToNull, 'compet_emis');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('compet_emis', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($compet_emis) && (mb_strlen($compet_emis) > 6)) {
            throw new \InvalidArgumentException('invalid length for $compet_emis when calling NfcomSefazGCofatGNF., must be smaller than or equal to 6.');
        }
        if (!is_null($compet_emis) && (mb_strlen($compet_emis) < 6)) {
            throw new \InvalidArgumentException('invalid length for $compet_emis when calling NfcomSefazGCofatGNF., must be bigger than or equal to 6.');
        }

        $this->container['compet_emis'] = $compet_emis;

        return $this;
    }

    /**
     * Gets hash115
     *
     * @return string|null
     */
    public function getHash115()
    {
        return $this->container['hash115'];
    }

    /**
     * Sets hash115
     *
     * @param string|null $hash115 Hash do registro no arquivo do convênio 115.  Campo poderá ser exigido a critério da UF - campo 36 do arquivo MESTRE DE DOCUMENTO FISCAL (Anexo Único, item 5 do Conv. 115/03).
     *
     * @return self
     */
    public function setHash115($hash115)
    {
        if (is_null($hash115)) {
            array_push($this->openAPINullablesSetToNull, 'hash115');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('hash115', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($hash115) && (mb_strlen($hash115) > 44)) {
            throw new \InvalidArgumentException('invalid length for $hash115 when calling NfcomSefazGCofatGNF., must be smaller than or equal to 44.');
        }
        if (!is_null($hash115) && (mb_strlen($hash115) < 44)) {
            throw new \InvalidArgumentException('invalid length for $hash115 when calling NfcomSefazGCofatGNF., must be bigger than or equal to 44.');
        }

        $this->container['hash115'] = $hash115;

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

