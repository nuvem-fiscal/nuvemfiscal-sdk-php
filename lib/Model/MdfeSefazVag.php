<?php
/**
 * MdfeSefazVag
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
 * OpenAPI Generator version: 6.5.0
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
 * MdfeSefazVag Class Doc Comment
 *
 * @category Class
 * @description informações dos Vagões.
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class MdfeSefazVag implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MdfeSefazVag';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'peso_bc' => 'float',
        'peso_r' => 'float',
        'tp_vag' => 'string',
        'serie' => 'string',
        'n_vag' => 'int',
        'n_seq' => 'int',
        'tu' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'peso_bc' => null,
        'peso_r' => null,
        'tp_vag' => null,
        'serie' => null,
        'n_vag' => null,
        'n_seq' => null,
        'tu' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'peso_bc' => true,
		'peso_r' => true,
		'tp_vag' => true,
		'serie' => true,
		'n_vag' => true,
		'n_seq' => true,
		'tu' => true
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
        'peso_bc' => 'pesoBC',
        'peso_r' => 'pesoR',
        'tp_vag' => 'tpVag',
        'serie' => 'serie',
        'n_vag' => 'nVag',
        'n_seq' => 'nSeq',
        'tu' => 'TU'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'peso_bc' => 'setPesoBc',
        'peso_r' => 'setPesoR',
        'tp_vag' => 'setTpVag',
        'serie' => 'setSerie',
        'n_vag' => 'setNVag',
        'n_seq' => 'setNSeq',
        'tu' => 'setTu'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'peso_bc' => 'getPesoBc',
        'peso_r' => 'getPesoR',
        'tp_vag' => 'getTpVag',
        'serie' => 'getSerie',
        'n_vag' => 'getNVag',
        'n_seq' => 'getNSeq',
        'tu' => 'getTu'
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
        $this->setIfExists('peso_bc', $data ?? [], null);
        $this->setIfExists('peso_r', $data ?? [], null);
        $this->setIfExists('tp_vag', $data ?? [], null);
        $this->setIfExists('serie', $data ?? [], null);
        $this->setIfExists('n_vag', $data ?? [], null);
        $this->setIfExists('n_seq', $data ?? [], null);
        $this->setIfExists('tu', $data ?? [], null);
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

        if ($this->container['peso_bc'] === null) {
            $invalidProperties[] = "'peso_bc' can't be null";
        }
        if ($this->container['peso_r'] === null) {
            $invalidProperties[] = "'peso_r' can't be null";
        }
        if (!is_null($this->container['tp_vag']) && (mb_strlen($this->container['tp_vag']) > 3)) {
            $invalidProperties[] = "invalid value for 'tp_vag', the character length must be smaller than or equal to 3.";
        }

        if ($this->container['serie'] === null) {
            $invalidProperties[] = "'serie' can't be null";
        }
        if ((mb_strlen($this->container['serie']) > 3)) {
            $invalidProperties[] = "invalid value for 'serie', the character length must be smaller than or equal to 3.";
        }

        if ($this->container['n_vag'] === null) {
            $invalidProperties[] = "'n_vag' can't be null";
        }
        if (($this->container['n_vag'] > 99999999)) {
            $invalidProperties[] = "invalid value for 'n_vag', must be smaller than or equal to 99999999.";
        }

        if (($this->container['n_vag'] < 1)) {
            $invalidProperties[] = "invalid value for 'n_vag', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['n_seq']) && ($this->container['n_seq'] > 999)) {
            $invalidProperties[] = "invalid value for 'n_seq', must be smaller than or equal to 999.";
        }

        if (!is_null($this->container['n_seq']) && ($this->container['n_seq'] < 1)) {
            $invalidProperties[] = "invalid value for 'n_seq', must be bigger than or equal to 1.";
        }

        if ($this->container['tu'] === null) {
            $invalidProperties[] = "'tu' can't be null";
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
     * Gets peso_bc
     *
     * @return float
     */
    public function getPesoBc()
    {
        return $this->container['peso_bc'];
    }

    /**
     * Sets peso_bc
     *
     * @param float $peso_bc Peso Base de Cálculo de Frete em Toneladas.
     *
     * @return self
     */
    public function setPesoBc($peso_bc)
    {
        if (is_null($peso_bc)) {
            array_push($this->openAPINullablesSetToNull, 'peso_bc');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('peso_bc', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['peso_bc'] = $peso_bc;

        return $this;
    }

    /**
     * Gets peso_r
     *
     * @return float
     */
    public function getPesoR()
    {
        return $this->container['peso_r'];
    }

    /**
     * Sets peso_r
     *
     * @param float $peso_r Peso Real em Toneladas.
     *
     * @return self
     */
    public function setPesoR($peso_r)
    {
        if (is_null($peso_r)) {
            array_push($this->openAPINullablesSetToNull, 'peso_r');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('peso_r', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['peso_r'] = $peso_r;

        return $this;
    }

    /**
     * Gets tp_vag
     *
     * @return string|null
     */
    public function getTpVag()
    {
        return $this->container['tp_vag'];
    }

    /**
     * Sets tp_vag
     *
     * @param string|null $tp_vag Tipo de Vagão.
     *
     * @return self
     */
    public function setTpVag($tp_vag)
    {
        if (is_null($tp_vag)) {
            array_push($this->openAPINullablesSetToNull, 'tp_vag');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tp_vag', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($tp_vag) && (mb_strlen($tp_vag) > 3)) {
            throw new \InvalidArgumentException('invalid length for $tp_vag when calling MdfeSefazVag., must be smaller than or equal to 3.');
        }

        $this->container['tp_vag'] = $tp_vag;

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
     * @param string $serie Serie de Identificação do vagão.
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
            throw new \InvalidArgumentException('invalid length for $serie when calling MdfeSefazVag., must be smaller than or equal to 3.');
        }

        $this->container['serie'] = $serie;

        return $this;
    }

    /**
     * Gets n_vag
     *
     * @return int
     */
    public function getNVag()
    {
        return $this->container['n_vag'];
    }

    /**
     * Sets n_vag
     *
     * @param int $n_vag Número de Identificação do vagão.
     *
     * @return self
     */
    public function setNVag($n_vag)
    {
        if (is_null($n_vag)) {
            array_push($this->openAPINullablesSetToNull, 'n_vag');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('n_vag', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($n_vag) && ($n_vag > 99999999)) {
            throw new \InvalidArgumentException('invalid value for $n_vag when calling MdfeSefazVag., must be smaller than or equal to 99999999.');
        }
        if (!is_null($n_vag) && ($n_vag < 1)) {
            throw new \InvalidArgumentException('invalid value for $n_vag when calling MdfeSefazVag., must be bigger than or equal to 1.');
        }

        $this->container['n_vag'] = $n_vag;

        return $this;
    }

    /**
     * Gets n_seq
     *
     * @return int|null
     */
    public function getNSeq()
    {
        return $this->container['n_seq'];
    }

    /**
     * Sets n_seq
     *
     * @param int|null $n_seq Sequencia do vagão na composição.
     *
     * @return self
     */
    public function setNSeq($n_seq)
    {
        if (is_null($n_seq)) {
            array_push($this->openAPINullablesSetToNull, 'n_seq');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('n_seq', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($n_seq) && ($n_seq > 999)) {
            throw new \InvalidArgumentException('invalid value for $n_seq when calling MdfeSefazVag., must be smaller than or equal to 999.');
        }
        if (!is_null($n_seq) && ($n_seq < 1)) {
            throw new \InvalidArgumentException('invalid value for $n_seq when calling MdfeSefazVag., must be bigger than or equal to 1.');
        }

        $this->container['n_seq'] = $n_seq;

        return $this;
    }

    /**
     * Gets tu
     *
     * @return float
     */
    public function getTu()
    {
        return $this->container['tu'];
    }

    /**
     * Sets tu
     *
     * @param float $tu Tonelada Útil.  Unidade de peso referente à carga útil (apenas o peso da carga transportada), expressa em toneladas.
     *
     * @return self
     */
    public function setTu($tu)
    {
        if (is_null($tu)) {
            array_push($this->openAPINullablesSetToNull, 'tu');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tu', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['tu'] = $tu;

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


