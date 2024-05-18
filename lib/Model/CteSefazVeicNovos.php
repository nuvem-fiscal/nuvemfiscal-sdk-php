<?php
/**
 * CteSefazVeicNovos
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
 * CteSefazVeicNovos Class Doc Comment
 *
 * @category Class
 * @description informações dos veículos transportados.
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CteSefazVeicNovos implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CteSefazVeicNovos';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'chassi' => 'string',
        'c_cor' => 'string',
        'x_cor' => 'string',
        'c_mod' => 'string',
        'v_unit' => 'float',
        'v_frete' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'chassi' => null,
        'c_cor' => null,
        'x_cor' => null,
        'c_mod' => null,
        'v_unit' => null,
        'v_frete' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'chassi' => true,
        'c_cor' => true,
        'x_cor' => true,
        'c_mod' => true,
        'v_unit' => true,
        'v_frete' => true
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
        'chassi' => 'chassi',
        'c_cor' => 'cCor',
        'x_cor' => 'xCor',
        'c_mod' => 'cMod',
        'v_unit' => 'vUnit',
        'v_frete' => 'vFrete'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'chassi' => 'setChassi',
        'c_cor' => 'setCCor',
        'x_cor' => 'setXCor',
        'c_mod' => 'setCMod',
        'v_unit' => 'setVUnit',
        'v_frete' => 'setVFrete'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'chassi' => 'getChassi',
        'c_cor' => 'getCCor',
        'x_cor' => 'getXCor',
        'c_mod' => 'getCMod',
        'v_unit' => 'getVUnit',
        'v_frete' => 'getVFrete'
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
        $this->setIfExists('chassi', $data ?? [], null);
        $this->setIfExists('c_cor', $data ?? [], null);
        $this->setIfExists('x_cor', $data ?? [], null);
        $this->setIfExists('c_mod', $data ?? [], null);
        $this->setIfExists('v_unit', $data ?? [], null);
        $this->setIfExists('v_frete', $data ?? [], null);
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

        if ($this->container['chassi'] === null) {
            $invalidProperties[] = "'chassi' can't be null";
        }
        if ((mb_strlen($this->container['chassi']) > 17)) {
            $invalidProperties[] = "invalid value for 'chassi', the character length must be smaller than or equal to 17.";
        }

        if ($this->container['c_cor'] === null) {
            $invalidProperties[] = "'c_cor' can't be null";
        }
        if ((mb_strlen($this->container['c_cor']) > 4)) {
            $invalidProperties[] = "invalid value for 'c_cor', the character length must be smaller than or equal to 4.";
        }

        if ((mb_strlen($this->container['c_cor']) < 1)) {
            $invalidProperties[] = "invalid value for 'c_cor', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['x_cor'] === null) {
            $invalidProperties[] = "'x_cor' can't be null";
        }
        if ((mb_strlen($this->container['x_cor']) > 40)) {
            $invalidProperties[] = "invalid value for 'x_cor', the character length must be smaller than or equal to 40.";
        }

        if ((mb_strlen($this->container['x_cor']) < 1)) {
            $invalidProperties[] = "invalid value for 'x_cor', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['c_mod'] === null) {
            $invalidProperties[] = "'c_mod' can't be null";
        }
        if ((mb_strlen($this->container['c_mod']) > 6)) {
            $invalidProperties[] = "invalid value for 'c_mod', the character length must be smaller than or equal to 6.";
        }

        if ((mb_strlen($this->container['c_mod']) < 1)) {
            $invalidProperties[] = "invalid value for 'c_mod', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['v_unit'] === null) {
            $invalidProperties[] = "'v_unit' can't be null";
        }
        if (($this->container['v_unit'] < 0)) {
            $invalidProperties[] = "invalid value for 'v_unit', must be bigger than or equal to 0.";
        }

        if ($this->container['v_frete'] === null) {
            $invalidProperties[] = "'v_frete' can't be null";
        }
        if (($this->container['v_frete'] < 0)) {
            $invalidProperties[] = "invalid value for 'v_frete', must be bigger than or equal to 0.";
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
     * Gets chassi
     *
     * @return string
     */
    public function getChassi()
    {
        return $this->container['chassi'];
    }

    /**
     * Sets chassi
     *
     * @param string $chassi Chassi do veículo.
     *
     * @return self
     */
    public function setChassi($chassi)
    {
        if (is_null($chassi)) {
            array_push($this->openAPINullablesSetToNull, 'chassi');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('chassi', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($chassi) && (mb_strlen($chassi) > 17)) {
            throw new \InvalidArgumentException('invalid length for $chassi when calling CteSefazVeicNovos., must be smaller than or equal to 17.');
        }

        $this->container['chassi'] = $chassi;

        return $this;
    }

    /**
     * Gets c_cor
     *
     * @return string
     */
    public function getCCor()
    {
        return $this->container['c_cor'];
    }

    /**
     * Sets c_cor
     *
     * @param string $c_cor Cor do veículo.  Código de cada montadora.
     *
     * @return self
     */
    public function setCCor($c_cor)
    {
        if (is_null($c_cor)) {
            array_push($this->openAPINullablesSetToNull, 'c_cor');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('c_cor', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($c_cor) && (mb_strlen($c_cor) > 4)) {
            throw new \InvalidArgumentException('invalid length for $c_cor when calling CteSefazVeicNovos., must be smaller than or equal to 4.');
        }
        if (!is_null($c_cor) && (mb_strlen($c_cor) < 1)) {
            throw new \InvalidArgumentException('invalid length for $c_cor when calling CteSefazVeicNovos., must be bigger than or equal to 1.');
        }

        $this->container['c_cor'] = $c_cor;

        return $this;
    }

    /**
     * Gets x_cor
     *
     * @return string
     */
    public function getXCor()
    {
        return $this->container['x_cor'];
    }

    /**
     * Sets x_cor
     *
     * @param string $x_cor Descrição da cor.
     *
     * @return self
     */
    public function setXCor($x_cor)
    {
        if (is_null($x_cor)) {
            array_push($this->openAPINullablesSetToNull, 'x_cor');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('x_cor', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($x_cor) && (mb_strlen($x_cor) > 40)) {
            throw new \InvalidArgumentException('invalid length for $x_cor when calling CteSefazVeicNovos., must be smaller than or equal to 40.');
        }
        if (!is_null($x_cor) && (mb_strlen($x_cor) < 1)) {
            throw new \InvalidArgumentException('invalid length for $x_cor when calling CteSefazVeicNovos., must be bigger than or equal to 1.');
        }

        $this->container['x_cor'] = $x_cor;

        return $this;
    }

    /**
     * Gets c_mod
     *
     * @return string
     */
    public function getCMod()
    {
        return $this->container['c_mod'];
    }

    /**
     * Sets c_mod
     *
     * @param string $c_mod Código Marca Modelo.  Utilizar tabela RENAVAM.
     *
     * @return self
     */
    public function setCMod($c_mod)
    {
        if (is_null($c_mod)) {
            array_push($this->openAPINullablesSetToNull, 'c_mod');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('c_mod', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($c_mod) && (mb_strlen($c_mod) > 6)) {
            throw new \InvalidArgumentException('invalid length for $c_mod when calling CteSefazVeicNovos., must be smaller than or equal to 6.');
        }
        if (!is_null($c_mod) && (mb_strlen($c_mod) < 1)) {
            throw new \InvalidArgumentException('invalid length for $c_mod when calling CteSefazVeicNovos., must be bigger than or equal to 1.');
        }

        $this->container['c_mod'] = $c_mod;

        return $this;
    }

    /**
     * Gets v_unit
     *
     * @return float
     */
    public function getVUnit()
    {
        return $this->container['v_unit'];
    }

    /**
     * Sets v_unit
     *
     * @param float $v_unit Valor Unitário do Veículo.
     *
     * @return self
     */
    public function setVUnit($v_unit)
    {
        if (is_null($v_unit)) {
            array_push($this->openAPINullablesSetToNull, 'v_unit');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('v_unit', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($v_unit) && ($v_unit < 0)) {
            throw new \InvalidArgumentException('invalid value for $v_unit when calling CteSefazVeicNovos., must be bigger than or equal to 0.');
        }

        $this->container['v_unit'] = $v_unit;

        return $this;
    }

    /**
     * Gets v_frete
     *
     * @return float
     */
    public function getVFrete()
    {
        return $this->container['v_frete'];
    }

    /**
     * Sets v_frete
     *
     * @param float $v_frete Frete Unitário.
     *
     * @return self
     */
    public function setVFrete($v_frete)
    {
        if (is_null($v_frete)) {
            array_push($this->openAPINullablesSetToNull, 'v_frete');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('v_frete', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($v_frete) && ($v_frete < 0)) {
            throw new \InvalidArgumentException('invalid value for $v_frete when calling CteSefazVeicNovos., must be bigger than or equal to 0.');
        }

        $this->container['v_frete'] = $v_frete;

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


