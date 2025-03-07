<?php
/**
 * NfeSefazArma
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
 * NfeSefazArma Class Doc Comment
 *
 * @category Class
 * @description Armamentos.
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class NfeSefazArma implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NfeSefazArma';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'tp_arma' => 'int',
        'n_serie' => 'string',
        'n_cano' => 'string',
        'descr' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'tp_arma' => null,
        'n_serie' => null,
        'n_cano' => null,
        'descr' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'tp_arma' => true,
        'n_serie' => true,
        'n_cano' => true,
        'descr' => true
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
        'tp_arma' => 'tpArma',
        'n_serie' => 'nSerie',
        'n_cano' => 'nCano',
        'descr' => 'descr'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'tp_arma' => 'setTpArma',
        'n_serie' => 'setNSerie',
        'n_cano' => 'setNCano',
        'descr' => 'setDescr'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'tp_arma' => 'getTpArma',
        'n_serie' => 'getNSerie',
        'n_cano' => 'getNCano',
        'descr' => 'getDescr'
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
        $this->setIfExists('tp_arma', $data ?? [], null);
        $this->setIfExists('n_serie', $data ?? [], null);
        $this->setIfExists('n_cano', $data ?? [], null);
        $this->setIfExists('descr', $data ?? [], null);
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

        if ($this->container['tp_arma'] === null) {
            $invalidProperties[] = "'tp_arma' can't be null";
        }
        if ($this->container['n_serie'] === null) {
            $invalidProperties[] = "'n_serie' can't be null";
        }
        if ((mb_strlen($this->container['n_serie']) > 15)) {
            $invalidProperties[] = "invalid value for 'n_serie', the character length must be smaller than or equal to 15.";
        }

        if ((mb_strlen($this->container['n_serie']) < 1)) {
            $invalidProperties[] = "invalid value for 'n_serie', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['n_cano'] === null) {
            $invalidProperties[] = "'n_cano' can't be null";
        }
        if ((mb_strlen($this->container['n_cano']) > 15)) {
            $invalidProperties[] = "invalid value for 'n_cano', the character length must be smaller than or equal to 15.";
        }

        if ((mb_strlen($this->container['n_cano']) < 1)) {
            $invalidProperties[] = "invalid value for 'n_cano', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['descr'] === null) {
            $invalidProperties[] = "'descr' can't be null";
        }
        if ((mb_strlen($this->container['descr']) > 256)) {
            $invalidProperties[] = "invalid value for 'descr', the character length must be smaller than or equal to 256.";
        }

        if ((mb_strlen($this->container['descr']) < 1)) {
            $invalidProperties[] = "invalid value for 'descr', the character length must be bigger than or equal to 1.";
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
     * Gets tp_arma
     *
     * @return int
     */
    public function getTpArma()
    {
        return $this->container['tp_arma'];
    }

    /**
     * Sets tp_arma
     *
     * @param int $tp_arma Indicador do tipo de arma de fogo (0 - Uso permitido; 1 - Uso restrito).
     *
     * @return self
     */
    public function setTpArma($tp_arma)
    {
        if (is_null($tp_arma)) {
            array_push($this->openAPINullablesSetToNull, 'tp_arma');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tp_arma', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['tp_arma'] = $tp_arma;

        return $this;
    }

    /**
     * Gets n_serie
     *
     * @return string
     */
    public function getNSerie()
    {
        return $this->container['n_serie'];
    }

    /**
     * Sets n_serie
     *
     * @param string $n_serie Número de série da arma.
     *
     * @return self
     */
    public function setNSerie($n_serie)
    {
        if (is_null($n_serie)) {
            array_push($this->openAPINullablesSetToNull, 'n_serie');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('n_serie', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($n_serie) && (mb_strlen($n_serie) > 15)) {
            throw new \InvalidArgumentException('invalid length for $n_serie when calling NfeSefazArma., must be smaller than or equal to 15.');
        }
        if (!is_null($n_serie) && (mb_strlen($n_serie) < 1)) {
            throw new \InvalidArgumentException('invalid length for $n_serie when calling NfeSefazArma., must be bigger than or equal to 1.');
        }

        $this->container['n_serie'] = $n_serie;

        return $this;
    }

    /**
     * Gets n_cano
     *
     * @return string
     */
    public function getNCano()
    {
        return $this->container['n_cano'];
    }

    /**
     * Sets n_cano
     *
     * @param string $n_cano Número de série do cano.
     *
     * @return self
     */
    public function setNCano($n_cano)
    {
        if (is_null($n_cano)) {
            array_push($this->openAPINullablesSetToNull, 'n_cano');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('n_cano', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($n_cano) && (mb_strlen($n_cano) > 15)) {
            throw new \InvalidArgumentException('invalid length for $n_cano when calling NfeSefazArma., must be smaller than or equal to 15.');
        }
        if (!is_null($n_cano) && (mb_strlen($n_cano) < 1)) {
            throw new \InvalidArgumentException('invalid length for $n_cano when calling NfeSefazArma., must be bigger than or equal to 1.');
        }

        $this->container['n_cano'] = $n_cano;

        return $this;
    }

    /**
     * Gets descr
     *
     * @return string
     */
    public function getDescr()
    {
        return $this->container['descr'];
    }

    /**
     * Sets descr
     *
     * @param string $descr Descrição completa da arma, compreendendo: calibre, marca, capacidade, tipo de funcionamento, comprimento e demais elementos que permitam a sua perfeita identificação.
     *
     * @return self
     */
    public function setDescr($descr)
    {
        if (is_null($descr)) {
            array_push($this->openAPINullablesSetToNull, 'descr');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('descr', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($descr) && (mb_strlen($descr) > 256)) {
            throw new \InvalidArgumentException('invalid length for $descr when calling NfeSefazArma., must be smaller than or equal to 256.');
        }
        if (!is_null($descr) && (mb_strlen($descr) < 1)) {
            throw new \InvalidArgumentException('invalid length for $descr when calling NfeSefazArma., must be bigger than or equal to 1.');
        }

        $this->container['descr'] = $descr;

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


