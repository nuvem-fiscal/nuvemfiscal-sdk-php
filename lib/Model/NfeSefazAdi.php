<?php
/**
 * NfeSefazAdi
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
 * NfeSefazAdi Class Doc Comment
 *
 * @category Class
 * @description Adições (NT 2011/004).
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class NfeSefazAdi implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NfeSefazAdi';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'n_adicao' => 'int',
        'n_seq_adic' => 'int',
        'c_fabricante' => 'string',
        'v_desc_di' => 'float',
        'n_draw' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'n_adicao' => null,
        'n_seq_adic' => null,
        'c_fabricante' => null,
        'v_desc_di' => null,
        'n_draw' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'n_adicao' => true,
        'n_seq_adic' => true,
        'c_fabricante' => true,
        'v_desc_di' => true,
        'n_draw' => true
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
        'n_adicao' => 'nAdicao',
        'n_seq_adic' => 'nSeqAdic',
        'c_fabricante' => 'cFabricante',
        'v_desc_di' => 'vDescDI',
        'n_draw' => 'nDraw'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'n_adicao' => 'setNAdicao',
        'n_seq_adic' => 'setNSeqAdic',
        'c_fabricante' => 'setCFabricante',
        'v_desc_di' => 'setVDescDi',
        'n_draw' => 'setNDraw'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'n_adicao' => 'getNAdicao',
        'n_seq_adic' => 'getNSeqAdic',
        'c_fabricante' => 'getCFabricante',
        'v_desc_di' => 'getVDescDi',
        'n_draw' => 'getNDraw'
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
        $this->setIfExists('n_adicao', $data ?? [], null);
        $this->setIfExists('n_seq_adic', $data ?? [], null);
        $this->setIfExists('c_fabricante', $data ?? [], null);
        $this->setIfExists('v_desc_di', $data ?? [], null);
        $this->setIfExists('n_draw', $data ?? [], null);
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

        if (!is_null($this->container['n_adicao']) && ($this->container['n_adicao'] > 999)) {
            $invalidProperties[] = "invalid value for 'n_adicao', must be smaller than or equal to 999.";
        }

        if (!is_null($this->container['n_adicao']) && ($this->container['n_adicao'] < 1)) {
            $invalidProperties[] = "invalid value for 'n_adicao', must be bigger than or equal to 1.";
        }

        if ($this->container['n_seq_adic'] === null) {
            $invalidProperties[] = "'n_seq_adic' can't be null";
        }
        if (($this->container['n_seq_adic'] > 99999)) {
            $invalidProperties[] = "invalid value for 'n_seq_adic', must be smaller than or equal to 99999.";
        }

        if (($this->container['n_seq_adic'] < 1)) {
            $invalidProperties[] = "invalid value for 'n_seq_adic', must be bigger than or equal to 1.";
        }

        if ($this->container['c_fabricante'] === null) {
            $invalidProperties[] = "'c_fabricante' can't be null";
        }
        if ((mb_strlen($this->container['c_fabricante']) > 60)) {
            $invalidProperties[] = "invalid value for 'c_fabricante', the character length must be smaller than or equal to 60.";
        }

        if ((mb_strlen($this->container['c_fabricante']) < 1)) {
            $invalidProperties[] = "invalid value for 'c_fabricante', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['v_desc_di']) && ($this->container['v_desc_di'] <= 0)) {
            $invalidProperties[] = "invalid value for 'v_desc_di', must be bigger than 0.";
        }

        if (!is_null($this->container['n_draw']) && (mb_strlen($this->container['n_draw']) > 20)) {
            $invalidProperties[] = "invalid value for 'n_draw', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['n_draw']) && (mb_strlen($this->container['n_draw']) < 1)) {
            $invalidProperties[] = "invalid value for 'n_draw', the character length must be bigger than or equal to 1.";
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
     * Gets n_adicao
     *
     * @return int|null
     */
    public function getNAdicao()
    {
        return $this->container['n_adicao'];
    }

    /**
     * Sets n_adicao
     *
     * @param int|null $n_adicao Número da Adição.
     *
     * @return self
     */
    public function setNAdicao($n_adicao)
    {
        if (is_null($n_adicao)) {
            array_push($this->openAPINullablesSetToNull, 'n_adicao');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('n_adicao', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($n_adicao) && ($n_adicao > 999)) {
            throw new \InvalidArgumentException('invalid value for $n_adicao when calling NfeSefazAdi., must be smaller than or equal to 999.');
        }
        if (!is_null($n_adicao) && ($n_adicao < 1)) {
            throw new \InvalidArgumentException('invalid value for $n_adicao when calling NfeSefazAdi., must be bigger than or equal to 1.');
        }

        $this->container['n_adicao'] = $n_adicao;

        return $this;
    }

    /**
     * Gets n_seq_adic
     *
     * @return int
     */
    public function getNSeqAdic()
    {
        return $this->container['n_seq_adic'];
    }

    /**
     * Sets n_seq_adic
     *
     * @param int $n_seq_adic Número seqüencial do item.
     *
     * @return self
     */
    public function setNSeqAdic($n_seq_adic)
    {
        if (is_null($n_seq_adic)) {
            array_push($this->openAPINullablesSetToNull, 'n_seq_adic');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('n_seq_adic', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($n_seq_adic) && ($n_seq_adic > 99999)) {
            throw new \InvalidArgumentException('invalid value for $n_seq_adic when calling NfeSefazAdi., must be smaller than or equal to 99999.');
        }
        if (!is_null($n_seq_adic) && ($n_seq_adic < 1)) {
            throw new \InvalidArgumentException('invalid value for $n_seq_adic when calling NfeSefazAdi., must be bigger than or equal to 1.');
        }

        $this->container['n_seq_adic'] = $n_seq_adic;

        return $this;
    }

    /**
     * Gets c_fabricante
     *
     * @return string
     */
    public function getCFabricante()
    {
        return $this->container['c_fabricante'];
    }

    /**
     * Sets c_fabricante
     *
     * @param string $c_fabricante Código do fabricante estrangeiro (usado nos sistemas internos de informação do emitente da NF-e).
     *
     * @return self
     */
    public function setCFabricante($c_fabricante)
    {
        if (is_null($c_fabricante)) {
            array_push($this->openAPINullablesSetToNull, 'c_fabricante');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('c_fabricante', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($c_fabricante) && (mb_strlen($c_fabricante) > 60)) {
            throw new \InvalidArgumentException('invalid length for $c_fabricante when calling NfeSefazAdi., must be smaller than or equal to 60.');
        }
        if (!is_null($c_fabricante) && (mb_strlen($c_fabricante) < 1)) {
            throw new \InvalidArgumentException('invalid length for $c_fabricante when calling NfeSefazAdi., must be bigger than or equal to 1.');
        }

        $this->container['c_fabricante'] = $c_fabricante;

        return $this;
    }

    /**
     * Gets v_desc_di
     *
     * @return float|null
     */
    public function getVDescDi()
    {
        return $this->container['v_desc_di'];
    }

    /**
     * Sets v_desc_di
     *
     * @param float|null $v_desc_di Valor do desconto do item.
     *
     * @return self
     */
    public function setVDescDi($v_desc_di)
    {
        if (is_null($v_desc_di)) {
            array_push($this->openAPINullablesSetToNull, 'v_desc_di');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('v_desc_di', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($v_desc_di) && ($v_desc_di <= 0)) {
            throw new \InvalidArgumentException('invalid value for $v_desc_di when calling NfeSefazAdi., must be bigger than 0.');
        }

        $this->container['v_desc_di'] = $v_desc_di;

        return $this;
    }

    /**
     * Gets n_draw
     *
     * @return string|null
     */
    public function getNDraw()
    {
        return $this->container['n_draw'];
    }

    /**
     * Sets n_draw
     *
     * @param string|null $n_draw Número do ato concessório de Drawback.
     *
     * @return self
     */
    public function setNDraw($n_draw)
    {
        if (is_null($n_draw)) {
            array_push($this->openAPINullablesSetToNull, 'n_draw');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('n_draw', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($n_draw) && (mb_strlen($n_draw) > 20)) {
            throw new \InvalidArgumentException('invalid length for $n_draw when calling NfeSefazAdi., must be smaller than or equal to 20.');
        }
        if (!is_null($n_draw) && (mb_strlen($n_draw) < 1)) {
            throw new \InvalidArgumentException('invalid length for $n_draw when calling NfeSefazAdi., must be bigger than or equal to 1.');
        }

        $this->container['n_draw'] = $n_draw;

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


