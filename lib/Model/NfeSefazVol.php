<?php
/**
 * NfeSefazVol
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
 * NfeSefazVol Class Doc Comment
 *
 * @category Class
 * @description Dados dos volumes.
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class NfeSefazVol implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NfeSefazVol';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'q_vol' => 'int',
        'esp' => 'string',
        'marca' => 'string',
        'n_vol' => 'string',
        'peso_l' => 'float',
        'peso_b' => 'float',
        'lacres' => '\NuvemFiscal\Model\NfeSefazLacres[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'q_vol' => null,
        'esp' => null,
        'marca' => null,
        'n_vol' => null,
        'peso_l' => null,
        'peso_b' => null,
        'lacres' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'q_vol' => true,
        'esp' => true,
        'marca' => true,
        'n_vol' => true,
        'peso_l' => true,
        'peso_b' => true,
        'lacres' => false
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
        'q_vol' => 'qVol',
        'esp' => 'esp',
        'marca' => 'marca',
        'n_vol' => 'nVol',
        'peso_l' => 'pesoL',
        'peso_b' => 'pesoB',
        'lacres' => 'lacres'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'q_vol' => 'setQVol',
        'esp' => 'setEsp',
        'marca' => 'setMarca',
        'n_vol' => 'setNVol',
        'peso_l' => 'setPesoL',
        'peso_b' => 'setPesoB',
        'lacres' => 'setLacres'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'q_vol' => 'getQVol',
        'esp' => 'getEsp',
        'marca' => 'getMarca',
        'n_vol' => 'getNVol',
        'peso_l' => 'getPesoL',
        'peso_b' => 'getPesoB',
        'lacres' => 'getLacres'
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
        $this->setIfExists('q_vol', $data ?? [], null);
        $this->setIfExists('esp', $data ?? [], null);
        $this->setIfExists('marca', $data ?? [], null);
        $this->setIfExists('n_vol', $data ?? [], null);
        $this->setIfExists('peso_l', $data ?? [], null);
        $this->setIfExists('peso_b', $data ?? [], null);
        $this->setIfExists('lacres', $data ?? [], null);
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

        if (!is_null($this->container['esp']) && (mb_strlen($this->container['esp']) > 60)) {
            $invalidProperties[] = "invalid value for 'esp', the character length must be smaller than or equal to 60.";
        }

        if (!is_null($this->container['esp']) && (mb_strlen($this->container['esp']) < 1)) {
            $invalidProperties[] = "invalid value for 'esp', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['marca']) && (mb_strlen($this->container['marca']) > 60)) {
            $invalidProperties[] = "invalid value for 'marca', the character length must be smaller than or equal to 60.";
        }

        if (!is_null($this->container['marca']) && (mb_strlen($this->container['marca']) < 1)) {
            $invalidProperties[] = "invalid value for 'marca', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['n_vol']) && (mb_strlen($this->container['n_vol']) > 60)) {
            $invalidProperties[] = "invalid value for 'n_vol', the character length must be smaller than or equal to 60.";
        }

        if (!is_null($this->container['n_vol']) && (mb_strlen($this->container['n_vol']) < 1)) {
            $invalidProperties[] = "invalid value for 'n_vol', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['peso_l']) && ($this->container['peso_l'] < 0)) {
            $invalidProperties[] = "invalid value for 'peso_l', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['peso_b']) && ($this->container['peso_b'] < 0)) {
            $invalidProperties[] = "invalid value for 'peso_b', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['lacres']) && (count($this->container['lacres']) > 5000)) {
            $invalidProperties[] = "invalid value for 'lacres', number of items must be less than or equal to 5000.";
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
     * Gets q_vol
     *
     * @return int|null
     */
    public function getQVol()
    {
        return $this->container['q_vol'];
    }

    /**
     * Sets q_vol
     *
     * @param int|null $q_vol Quantidade de volumes transportados.
     *
     * @return self
     */
    public function setQVol($q_vol)
    {
        if (is_null($q_vol)) {
            array_push($this->openAPINullablesSetToNull, 'q_vol');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('q_vol', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['q_vol'] = $q_vol;

        return $this;
    }

    /**
     * Gets esp
     *
     * @return string|null
     */
    public function getEsp()
    {
        return $this->container['esp'];
    }

    /**
     * Sets esp
     *
     * @param string|null $esp Espécie dos volumes transportados.
     *
     * @return self
     */
    public function setEsp($esp)
    {
        if (is_null($esp)) {
            array_push($this->openAPINullablesSetToNull, 'esp');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('esp', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($esp) && (mb_strlen($esp) > 60)) {
            throw new \InvalidArgumentException('invalid length for $esp when calling NfeSefazVol., must be smaller than or equal to 60.');
        }
        if (!is_null($esp) && (mb_strlen($esp) < 1)) {
            throw new \InvalidArgumentException('invalid length for $esp when calling NfeSefazVol., must be bigger than or equal to 1.');
        }

        $this->container['esp'] = $esp;

        return $this;
    }

    /**
     * Gets marca
     *
     * @return string|null
     */
    public function getMarca()
    {
        return $this->container['marca'];
    }

    /**
     * Sets marca
     *
     * @param string|null $marca Marca dos volumes transportados.
     *
     * @return self
     */
    public function setMarca($marca)
    {
        if (is_null($marca)) {
            array_push($this->openAPINullablesSetToNull, 'marca');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('marca', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($marca) && (mb_strlen($marca) > 60)) {
            throw new \InvalidArgumentException('invalid length for $marca when calling NfeSefazVol., must be smaller than or equal to 60.');
        }
        if (!is_null($marca) && (mb_strlen($marca) < 1)) {
            throw new \InvalidArgumentException('invalid length for $marca when calling NfeSefazVol., must be bigger than or equal to 1.');
        }

        $this->container['marca'] = $marca;

        return $this;
    }

    /**
     * Gets n_vol
     *
     * @return string|null
     */
    public function getNVol()
    {
        return $this->container['n_vol'];
    }

    /**
     * Sets n_vol
     *
     * @param string|null $n_vol Numeração dos volumes transportados.
     *
     * @return self
     */
    public function setNVol($n_vol)
    {
        if (is_null($n_vol)) {
            array_push($this->openAPINullablesSetToNull, 'n_vol');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('n_vol', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($n_vol) && (mb_strlen($n_vol) > 60)) {
            throw new \InvalidArgumentException('invalid length for $n_vol when calling NfeSefazVol., must be smaller than or equal to 60.');
        }
        if (!is_null($n_vol) && (mb_strlen($n_vol) < 1)) {
            throw new \InvalidArgumentException('invalid length for $n_vol when calling NfeSefazVol., must be bigger than or equal to 1.');
        }

        $this->container['n_vol'] = $n_vol;

        return $this;
    }

    /**
     * Gets peso_l
     *
     * @return float|null
     */
    public function getPesoL()
    {
        return $this->container['peso_l'];
    }

    /**
     * Sets peso_l
     *
     * @param float|null $peso_l Peso líquido (em kg).
     *
     * @return self
     */
    public function setPesoL($peso_l)
    {
        if (is_null($peso_l)) {
            array_push($this->openAPINullablesSetToNull, 'peso_l');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('peso_l', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($peso_l) && ($peso_l < 0)) {
            throw new \InvalidArgumentException('invalid value for $peso_l when calling NfeSefazVol., must be bigger than or equal to 0.');
        }

        $this->container['peso_l'] = $peso_l;

        return $this;
    }

    /**
     * Gets peso_b
     *
     * @return float|null
     */
    public function getPesoB()
    {
        return $this->container['peso_b'];
    }

    /**
     * Sets peso_b
     *
     * @param float|null $peso_b Peso bruto (em kg).
     *
     * @return self
     */
    public function setPesoB($peso_b)
    {
        if (is_null($peso_b)) {
            array_push($this->openAPINullablesSetToNull, 'peso_b');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('peso_b', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($peso_b) && ($peso_b < 0)) {
            throw new \InvalidArgumentException('invalid value for $peso_b when calling NfeSefazVol., must be bigger than or equal to 0.');
        }

        $this->container['peso_b'] = $peso_b;

        return $this;
    }

    /**
     * Gets lacres
     *
     * @return \NuvemFiscal\Model\NfeSefazLacres[]|null
     */
    public function getLacres()
    {
        return $this->container['lacres'];
    }

    /**
     * Sets lacres
     *
     * @param \NuvemFiscal\Model\NfeSefazLacres[]|null $lacres lacres
     *
     * @return self
     */
    public function setLacres($lacres)
    {
        if (is_null($lacres)) {
            throw new \InvalidArgumentException('non-nullable lacres cannot be null');
        }

        if ((count($lacres) > 5000)) {
            throw new \InvalidArgumentException('invalid value for $lacres when calling NfeSefazVol., number of items must be less than or equal to 5000.');
        }
        $this->container['lacres'] = $lacres;

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


