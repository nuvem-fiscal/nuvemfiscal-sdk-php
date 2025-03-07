<?php
/**
 * MdfeNaoEncerrados
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
 * MdfeNaoEncerrados Class Doc Comment
 *
 * @category Class
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class MdfeNaoEncerrados implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MdfeNaoEncerrados';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'tp_amb' => 'int',
        'ver_aplic' => 'string',
        'c_stat' => 'int',
        'x_motivo' => 'string',
        'c_uf' => 'int',
        'inf_mdfe' => '\NuvemFiscal\Model\MdfeNaoEncerrado[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'tp_amb' => null,
        'ver_aplic' => null,
        'c_stat' => null,
        'x_motivo' => null,
        'c_uf' => null,
        'inf_mdfe' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'tp_amb' => true,
        'ver_aplic' => true,
        'c_stat' => true,
        'x_motivo' => true,
        'c_uf' => true,
        'inf_mdfe' => false
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
        'tp_amb' => 'tpAmb',
        'ver_aplic' => 'verAplic',
        'c_stat' => 'cStat',
        'x_motivo' => 'xMotivo',
        'c_uf' => 'cUF',
        'inf_mdfe' => 'infMDFe'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'tp_amb' => 'setTpAmb',
        'ver_aplic' => 'setVerAplic',
        'c_stat' => 'setCStat',
        'x_motivo' => 'setXMotivo',
        'c_uf' => 'setCUf',
        'inf_mdfe' => 'setInfMdfe'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'tp_amb' => 'getTpAmb',
        'ver_aplic' => 'getVerAplic',
        'c_stat' => 'getCStat',
        'x_motivo' => 'getXMotivo',
        'c_uf' => 'getCUf',
        'inf_mdfe' => 'getInfMdfe'
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
        $this->setIfExists('tp_amb', $data ?? [], null);
        $this->setIfExists('ver_aplic', $data ?? [], null);
        $this->setIfExists('c_stat', $data ?? [], null);
        $this->setIfExists('x_motivo', $data ?? [], null);
        $this->setIfExists('c_uf', $data ?? [], null);
        $this->setIfExists('inf_mdfe', $data ?? [], null);
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

        if ($this->container['c_stat'] === null) {
            $invalidProperties[] = "'c_stat' can't be null";
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
     * Gets tp_amb
     *
     * @return int|null
     */
    public function getTpAmb()
    {
        return $this->container['tp_amb'];
    }

    /**
     * Sets tp_amb
     *
     * @param int|null $tp_amb Identificação do Ambiente:  * 1 - Produção  * 2 - Homologação
     *
     * @return self
     */
    public function setTpAmb($tp_amb)
    {
        if (is_null($tp_amb)) {
            array_push($this->openAPINullablesSetToNull, 'tp_amb');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tp_amb', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['tp_amb'] = $tp_amb;

        return $this;
    }

    /**
     * Gets ver_aplic
     *
     * @return string|null
     */
    public function getVerAplic()
    {
        return $this->container['ver_aplic'];
    }

    /**
     * Sets ver_aplic
     *
     * @param string|null $ver_aplic Versão do Aplicativo que processou o MDF-e.
     *
     * @return self
     */
    public function setVerAplic($ver_aplic)
    {
        if (is_null($ver_aplic)) {
            array_push($this->openAPINullablesSetToNull, 'ver_aplic');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ver_aplic', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ver_aplic'] = $ver_aplic;

        return $this;
    }

    /**
     * Gets c_stat
     *
     * @return int
     */
    public function getCStat()
    {
        return $this->container['c_stat'];
    }

    /**
     * Sets c_stat
     *
     * @param int $c_stat Código do status da mensagem enviada.
     *
     * @return self
     */
    public function setCStat($c_stat)
    {
        if (is_null($c_stat)) {
            array_push($this->openAPINullablesSetToNull, 'c_stat');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('c_stat', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['c_stat'] = $c_stat;

        return $this;
    }

    /**
     * Gets x_motivo
     *
     * @return string|null
     */
    public function getXMotivo()
    {
        return $this->container['x_motivo'];
    }

    /**
     * Sets x_motivo
     *
     * @param string|null $x_motivo Descrição literal do status do serviço solicitado.
     *
     * @return self
     */
    public function setXMotivo($x_motivo)
    {
        if (is_null($x_motivo)) {
            array_push($this->openAPINullablesSetToNull, 'x_motivo');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('x_motivo', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['x_motivo'] = $x_motivo;

        return $this;
    }

    /**
     * Gets c_uf
     *
     * @return int|null
     */
    public function getCUf()
    {
        return $this->container['c_uf'];
    }

    /**
     * Sets c_uf
     *
     * @param int|null $c_uf código da UF de atendimento.
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
     * Gets inf_mdfe
     *
     * @return \NuvemFiscal\Model\MdfeNaoEncerrado[]|null
     */
    public function getInfMdfe()
    {
        return $this->container['inf_mdfe'];
    }

    /**
     * Sets inf_mdfe
     *
     * @param \NuvemFiscal\Model\MdfeNaoEncerrado[]|null $inf_mdfe inf_mdfe
     *
     * @return self
     */
    public function setInfMdfe($inf_mdfe)
    {
        if (is_null($inf_mdfe)) {
            throw new \InvalidArgumentException('non-nullable inf_mdfe cannot be null');
        }
        $this->container['inf_mdfe'] = $inf_mdfe;

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


