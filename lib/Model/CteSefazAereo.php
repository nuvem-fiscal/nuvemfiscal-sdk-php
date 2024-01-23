<?php
/**
 * CteSefazAereo
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
 * CteSefazAereo Class Doc Comment
 *
 * @category Class
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CteSefazAereo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CteSefazAereo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'n_minu' => 'int',
        'n_oca' => 'string',
        'd_prev_aereo' => '\DateTime',
        'nat_carga' => '\NuvemFiscal\Model\CteSefazNatCarga',
        'tarifa' => '\NuvemFiscal\Model\CteSefazTarifa',
        'peri' => '\NuvemFiscal\Model\CteSefazPeri[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'n_minu' => null,
        'n_oca' => null,
        'd_prev_aereo' => 'date',
        'nat_carga' => null,
        'tarifa' => null,
        'peri' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'n_minu' => true,
        'n_oca' => true,
        'd_prev_aereo' => true,
        'nat_carga' => false,
        'tarifa' => false,
        'peri' => false
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
        'n_minu' => 'nMinu',
        'n_oca' => 'nOCA',
        'd_prev_aereo' => 'dPrevAereo',
        'nat_carga' => 'natCarga',
        'tarifa' => 'tarifa',
        'peri' => 'peri'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'n_minu' => 'setNMinu',
        'n_oca' => 'setNOca',
        'd_prev_aereo' => 'setDPrevAereo',
        'nat_carga' => 'setNatCarga',
        'tarifa' => 'setTarifa',
        'peri' => 'setPeri'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'n_minu' => 'getNMinu',
        'n_oca' => 'getNOca',
        'd_prev_aereo' => 'getDPrevAereo',
        'nat_carga' => 'getNatCarga',
        'tarifa' => 'getTarifa',
        'peri' => 'getPeri'
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
        $this->setIfExists('n_minu', $data ?? [], null);
        $this->setIfExists('n_oca', $data ?? [], null);
        $this->setIfExists('d_prev_aereo', $data ?? [], null);
        $this->setIfExists('nat_carga', $data ?? [], null);
        $this->setIfExists('tarifa', $data ?? [], null);
        $this->setIfExists('peri', $data ?? [], null);
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

        if (!is_null($this->container['n_minu']) && ($this->container['n_minu'] > 999999999)) {
            $invalidProperties[] = "invalid value for 'n_minu', must be smaller than or equal to 999999999.";
        }

        if (!is_null($this->container['n_minu']) && ($this->container['n_minu'] < 0)) {
            $invalidProperties[] = "invalid value for 'n_minu', must be bigger than or equal to 0.";
        }

        if ($this->container['d_prev_aereo'] === null) {
            $invalidProperties[] = "'d_prev_aereo' can't be null";
        }
        if ($this->container['nat_carga'] === null) {
            $invalidProperties[] = "'nat_carga' can't be null";
        }
        if ($this->container['tarifa'] === null) {
            $invalidProperties[] = "'tarifa' can't be null";
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
     * Gets n_minu
     *
     * @return int|null
     */
    public function getNMinu()
    {
        return $this->container['n_minu'];
    }

    /**
     * Sets n_minu
     *
     * @param int|null $n_minu Número da Minuta.  Documento que precede o CT-e, assinado pelo expedidor, espécie de pedido de serviço.
     *
     * @return self
     */
    public function setNMinu($n_minu)
    {
        if (is_null($n_minu)) {
            array_push($this->openAPINullablesSetToNull, 'n_minu');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('n_minu', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($n_minu) && ($n_minu > 999999999)) {
            throw new \InvalidArgumentException('invalid value for $n_minu when calling CteSefazAereo., must be smaller than or equal to 999999999.');
        }
        if (!is_null($n_minu) && ($n_minu < 0)) {
            throw new \InvalidArgumentException('invalid value for $n_minu when calling CteSefazAereo., must be bigger than or equal to 0.');
        }

        $this->container['n_minu'] = $n_minu;

        return $this;
    }

    /**
     * Gets n_oca
     *
     * @return string|null
     */
    public function getNOca()
    {
        return $this->container['n_oca'];
    }

    /**
     * Sets n_oca
     *
     * @param string|null $n_oca Número Operacional do Conhecimento Aéreo.  Representa o número de controle comumente utilizado pelo conhecimento aéreo composto por uma sequência numérica de onze dígitos. Os três primeiros dígitos representam um código que os operadores de transporte aéreo associados à IATA possuem. Em seguida um número de série de sete dígitos determinados pelo operador de transporte aéreo. Para finalizar, um dígito verificador, que é um sistema de módulo sete imponderado o qual divide o número de série do conhecimento aéreo por sete e usa o resto como dígito de verificação.
     *
     * @return self
     */
    public function setNOca($n_oca)
    {
        if (is_null($n_oca)) {
            array_push($this->openAPINullablesSetToNull, 'n_oca');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('n_oca', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['n_oca'] = $n_oca;

        return $this;
    }

    /**
     * Gets d_prev_aereo
     *
     * @return \DateTime
     */
    public function getDPrevAereo()
    {
        return $this->container['d_prev_aereo'];
    }

    /**
     * Sets d_prev_aereo
     *
     * @param \DateTime $d_prev_aereo Data prevista da entrega.  Formato AAAA-MM-DD.
     *
     * @return self
     */
    public function setDPrevAereo($d_prev_aereo)
    {
        if (is_null($d_prev_aereo)) {
            array_push($this->openAPINullablesSetToNull, 'd_prev_aereo');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('d_prev_aereo', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['d_prev_aereo'] = $d_prev_aereo;

        return $this;
    }

    /**
     * Gets nat_carga
     *
     * @return \NuvemFiscal\Model\CteSefazNatCarga
     */
    public function getNatCarga()
    {
        return $this->container['nat_carga'];
    }

    /**
     * Sets nat_carga
     *
     * @param \NuvemFiscal\Model\CteSefazNatCarga $nat_carga nat_carga
     *
     * @return self
     */
    public function setNatCarga($nat_carga)
    {
        if (is_null($nat_carga)) {
            throw new \InvalidArgumentException('non-nullable nat_carga cannot be null');
        }
        $this->container['nat_carga'] = $nat_carga;

        return $this;
    }

    /**
     * Gets tarifa
     *
     * @return \NuvemFiscal\Model\CteSefazTarifa
     */
    public function getTarifa()
    {
        return $this->container['tarifa'];
    }

    /**
     * Sets tarifa
     *
     * @param \NuvemFiscal\Model\CteSefazTarifa $tarifa tarifa
     *
     * @return self
     */
    public function setTarifa($tarifa)
    {
        if (is_null($tarifa)) {
            throw new \InvalidArgumentException('non-nullable tarifa cannot be null');
        }
        $this->container['tarifa'] = $tarifa;

        return $this;
    }

    /**
     * Gets peri
     *
     * @return \NuvemFiscal\Model\CteSefazPeri[]|null
     */
    public function getPeri()
    {
        return $this->container['peri'];
    }

    /**
     * Sets peri
     *
     * @param \NuvemFiscal\Model\CteSefazPeri[]|null $peri peri
     *
     * @return self
     */
    public function setPeri($peri)
    {
        if (is_null($peri)) {
            throw new \InvalidArgumentException('non-nullable peri cannot be null');
        }
        $this->container['peri'] = $peri;

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


