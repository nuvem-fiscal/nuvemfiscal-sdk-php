<?php
/**
 * NfeSefazIPITrib
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
 * NfeSefazIPITrib Class Doc Comment
 *
 * @category Class
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class NfeSefazIPITrib implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NfeSefazIPITrib';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cst' => 'string',
        'v_bc' => 'float',
        'p_ipi' => 'float',
        'q_unid' => 'float',
        'v_unid' => 'float',
        'v_ipi' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'cst' => null,
        'v_bc' => null,
        'p_ipi' => null,
        'q_unid' => null,
        'v_unid' => null,
        'v_ipi' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'cst' => true,
        'v_bc' => true,
        'p_ipi' => true,
        'q_unid' => true,
        'v_unid' => true,
        'v_ipi' => true
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
        'cst' => 'CST',
        'v_bc' => 'vBC',
        'p_ipi' => 'pIPI',
        'q_unid' => 'qUnid',
        'v_unid' => 'vUnid',
        'v_ipi' => 'vIPI'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cst' => 'setCst',
        'v_bc' => 'setVBc',
        'p_ipi' => 'setPIpi',
        'q_unid' => 'setQUnid',
        'v_unid' => 'setVUnid',
        'v_ipi' => 'setVIpi'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cst' => 'getCst',
        'v_bc' => 'getVBc',
        'p_ipi' => 'getPIpi',
        'q_unid' => 'getQUnid',
        'v_unid' => 'getVUnid',
        'v_ipi' => 'getVIpi'
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
        $this->setIfExists('cst', $data ?? [], null);
        $this->setIfExists('v_bc', $data ?? [], null);
        $this->setIfExists('p_ipi', $data ?? [], null);
        $this->setIfExists('q_unid', $data ?? [], null);
        $this->setIfExists('v_unid', $data ?? [], null);
        $this->setIfExists('v_ipi', $data ?? [], null);
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

        if ($this->container['cst'] === null) {
            $invalidProperties[] = "'cst' can't be null";
        }
        if (!is_null($this->container['v_bc']) && ($this->container['v_bc'] < 0)) {
            $invalidProperties[] = "invalid value for 'v_bc', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['p_ipi']) && ($this->container['p_ipi'] < 0)) {
            $invalidProperties[] = "invalid value for 'p_ipi', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['q_unid']) && ($this->container['q_unid'] < 0)) {
            $invalidProperties[] = "invalid value for 'q_unid', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['v_unid']) && ($this->container['v_unid'] < 0)) {
            $invalidProperties[] = "invalid value for 'v_unid', must be bigger than or equal to 0.";
        }

        if ($this->container['v_ipi'] === null) {
            $invalidProperties[] = "'v_ipi' can't be null";
        }
        if (($this->container['v_ipi'] < 0)) {
            $invalidProperties[] = "invalid value for 'v_ipi', must be bigger than or equal to 0.";
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
     * Gets cst
     *
     * @return string
     */
    public function getCst()
    {
        return $this->container['cst'];
    }

    /**
     * Sets cst
     *
     * @param string $cst Código da Situação Tributária do IPI:  * 00 - Entrada com recuperação de crédito  * 49 - Outras entradas  * 50 - Saída tributada  * 99 - Outras saídas
     *
     * @return self
     */
    public function setCst($cst)
    {
        if (is_null($cst)) {
            array_push($this->openAPINullablesSetToNull, 'cst');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('cst', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['cst'] = $cst;

        return $this;
    }

    /**
     * Gets v_bc
     *
     * @return float|null
     */
    public function getVBc()
    {
        return $this->container['v_bc'];
    }

    /**
     * Sets v_bc
     *
     * @param float|null $v_bc Valor da BC do IPI.
     *
     * @return self
     */
    public function setVBc($v_bc)
    {
        if (is_null($v_bc)) {
            array_push($this->openAPINullablesSetToNull, 'v_bc');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('v_bc', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($v_bc) && ($v_bc < 0)) {
            throw new \InvalidArgumentException('invalid value for $v_bc when calling NfeSefazIPITrib., must be bigger than or equal to 0.');
        }

        $this->container['v_bc'] = $v_bc;

        return $this;
    }

    /**
     * Gets p_ipi
     *
     * @return float|null
     */
    public function getPIpi()
    {
        return $this->container['p_ipi'];
    }

    /**
     * Sets p_ipi
     *
     * @param float|null $p_ipi Alíquota do IPI.
     *
     * @return self
     */
    public function setPIpi($p_ipi)
    {
        if (is_null($p_ipi)) {
            array_push($this->openAPINullablesSetToNull, 'p_ipi');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('p_ipi', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($p_ipi) && ($p_ipi < 0)) {
            throw new \InvalidArgumentException('invalid value for $p_ipi when calling NfeSefazIPITrib., must be bigger than or equal to 0.');
        }

        $this->container['p_ipi'] = $p_ipi;

        return $this;
    }

    /**
     * Gets q_unid
     *
     * @return float|null
     */
    public function getQUnid()
    {
        return $this->container['q_unid'];
    }

    /**
     * Sets q_unid
     *
     * @param float|null $q_unid Quantidade total na unidade padrão para tributação.
     *
     * @return self
     */
    public function setQUnid($q_unid)
    {
        if (is_null($q_unid)) {
            array_push($this->openAPINullablesSetToNull, 'q_unid');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('q_unid', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($q_unid) && ($q_unid < 0)) {
            throw new \InvalidArgumentException('invalid value for $q_unid when calling NfeSefazIPITrib., must be bigger than or equal to 0.');
        }

        $this->container['q_unid'] = $q_unid;

        return $this;
    }

    /**
     * Gets v_unid
     *
     * @return float|null
     */
    public function getVUnid()
    {
        return $this->container['v_unid'];
    }

    /**
     * Sets v_unid
     *
     * @param float|null $v_unid Valor por Unidade Tributável. Informar o valor do imposto Pauta por unidade de medida.
     *
     * @return self
     */
    public function setVUnid($v_unid)
    {
        if (is_null($v_unid)) {
            array_push($this->openAPINullablesSetToNull, 'v_unid');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('v_unid', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($v_unid) && ($v_unid < 0)) {
            throw new \InvalidArgumentException('invalid value for $v_unid when calling NfeSefazIPITrib., must be bigger than or equal to 0.');
        }

        $this->container['v_unid'] = $v_unid;

        return $this;
    }

    /**
     * Gets v_ipi
     *
     * @return float
     */
    public function getVIpi()
    {
        return $this->container['v_ipi'];
    }

    /**
     * Sets v_ipi
     *
     * @param float $v_ipi Valor do IPI.
     *
     * @return self
     */
    public function setVIpi($v_ipi)
    {
        if (is_null($v_ipi)) {
            array_push($this->openAPINullablesSetToNull, 'v_ipi');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('v_ipi', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($v_ipi) && ($v_ipi < 0)) {
            throw new \InvalidArgumentException('invalid value for $v_ipi when calling NfeSefazIPITrib., must be bigger than or equal to 0.');
        }

        $this->container['v_ipi'] = $v_ipi;

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


