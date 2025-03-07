<?php
/**
 * MdfeSefazInfCTe
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
 * MdfeSefazInfCTe Class Doc Comment
 *
 * @category Class
 * @description Conhecimentos de Tranporte - usar este grupo quando for prestador de serviço de transporte.
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class MdfeSefazInfCTe implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MdfeSefazInfCTe';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'ch_cte' => 'string',
        'seg_cod_barra' => 'string',
        'ind_reentrega' => 'int',
        'inf_unid_transp' => '\NuvemFiscal\Model\MdfeSefazUnidadeTransp[]',
        'peri' => '\NuvemFiscal\Model\MdfeSefazPeri[]',
        'inf_entrega_parcial' => '\NuvemFiscal\Model\MdfeSefazInfEntregaParcial'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'ch_cte' => null,
        'seg_cod_barra' => null,
        'ind_reentrega' => null,
        'inf_unid_transp' => null,
        'peri' => null,
        'inf_entrega_parcial' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'ch_cte' => true,
        'seg_cod_barra' => true,
        'ind_reentrega' => true,
        'inf_unid_transp' => false,
        'peri' => false,
        'inf_entrega_parcial' => false
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
        'ch_cte' => 'chCTe',
        'seg_cod_barra' => 'SegCodBarra',
        'ind_reentrega' => 'indReentrega',
        'inf_unid_transp' => 'infUnidTransp',
        'peri' => 'peri',
        'inf_entrega_parcial' => 'infEntregaParcial'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ch_cte' => 'setChCte',
        'seg_cod_barra' => 'setSegCodBarra',
        'ind_reentrega' => 'setIndReentrega',
        'inf_unid_transp' => 'setInfUnidTransp',
        'peri' => 'setPeri',
        'inf_entrega_parcial' => 'setInfEntregaParcial'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ch_cte' => 'getChCte',
        'seg_cod_barra' => 'getSegCodBarra',
        'ind_reentrega' => 'getIndReentrega',
        'inf_unid_transp' => 'getInfUnidTransp',
        'peri' => 'getPeri',
        'inf_entrega_parcial' => 'getInfEntregaParcial'
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
        $this->setIfExists('ch_cte', $data ?? [], null);
        $this->setIfExists('seg_cod_barra', $data ?? [], null);
        $this->setIfExists('ind_reentrega', $data ?? [], null);
        $this->setIfExists('inf_unid_transp', $data ?? [], null);
        $this->setIfExists('peri', $data ?? [], null);
        $this->setIfExists('inf_entrega_parcial', $data ?? [], null);
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

        if ($this->container['ch_cte'] === null) {
            $invalidProperties[] = "'ch_cte' can't be null";
        }
        if ((mb_strlen($this->container['ch_cte']) > 44)) {
            $invalidProperties[] = "invalid value for 'ch_cte', the character length must be smaller than or equal to 44.";
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
     * Gets ch_cte
     *
     * @return string
     */
    public function getChCte()
    {
        return $this->container['ch_cte'];
    }

    /**
     * Sets ch_cte
     *
     * @param string $ch_cte Conhecimento Eletrônico - Chave de Acesso.
     *
     * @return self
     */
    public function setChCte($ch_cte)
    {
        if (is_null($ch_cte)) {
            array_push($this->openAPINullablesSetToNull, 'ch_cte');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ch_cte', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($ch_cte) && (mb_strlen($ch_cte) > 44)) {
            throw new \InvalidArgumentException('invalid length for $ch_cte when calling MdfeSefazInfCTe., must be smaller than or equal to 44.');
        }

        $this->container['ch_cte'] = $ch_cte;

        return $this;
    }

    /**
     * Gets seg_cod_barra
     *
     * @return string|null
     */
    public function getSegCodBarra()
    {
        return $this->container['seg_cod_barra'];
    }

    /**
     * Sets seg_cod_barra
     *
     * @param string|null $seg_cod_barra Segundo código de barras.
     *
     * @return self
     */
    public function setSegCodBarra($seg_cod_barra)
    {
        if (is_null($seg_cod_barra)) {
            array_push($this->openAPINullablesSetToNull, 'seg_cod_barra');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('seg_cod_barra', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['seg_cod_barra'] = $seg_cod_barra;

        return $this;
    }

    /**
     * Gets ind_reentrega
     *
     * @return int|null
     */
    public function getIndReentrega()
    {
        return $this->container['ind_reentrega'];
    }

    /**
     * Sets ind_reentrega
     *
     * @param int|null $ind_reentrega Indicador de Reentrega.
     *
     * @return self
     */
    public function setIndReentrega($ind_reentrega)
    {
        if (is_null($ind_reentrega)) {
            array_push($this->openAPINullablesSetToNull, 'ind_reentrega');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ind_reentrega', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ind_reentrega'] = $ind_reentrega;

        return $this;
    }

    /**
     * Gets inf_unid_transp
     *
     * @return \NuvemFiscal\Model\MdfeSefazUnidadeTransp[]|null
     */
    public function getInfUnidTransp()
    {
        return $this->container['inf_unid_transp'];
    }

    /**
     * Sets inf_unid_transp
     *
     * @param \NuvemFiscal\Model\MdfeSefazUnidadeTransp[]|null $inf_unid_transp inf_unid_transp
     *
     * @return self
     */
    public function setInfUnidTransp($inf_unid_transp)
    {
        if (is_null($inf_unid_transp)) {
            throw new \InvalidArgumentException('non-nullable inf_unid_transp cannot be null');
        }
        $this->container['inf_unid_transp'] = $inf_unid_transp;

        return $this;
    }

    /**
     * Gets peri
     *
     * @return \NuvemFiscal\Model\MdfeSefazPeri[]|null
     */
    public function getPeri()
    {
        return $this->container['peri'];
    }

    /**
     * Sets peri
     *
     * @param \NuvemFiscal\Model\MdfeSefazPeri[]|null $peri peri
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
     * Gets inf_entrega_parcial
     *
     * @return \NuvemFiscal\Model\MdfeSefazInfEntregaParcial|null
     */
    public function getInfEntregaParcial()
    {
        return $this->container['inf_entrega_parcial'];
    }

    /**
     * Sets inf_entrega_parcial
     *
     * @param \NuvemFiscal\Model\MdfeSefazInfEntregaParcial|null $inf_entrega_parcial inf_entrega_parcial
     *
     * @return self
     */
    public function setInfEntregaParcial($inf_entrega_parcial)
    {
        if (is_null($inf_entrega_parcial)) {
            throw new \InvalidArgumentException('non-nullable inf_entrega_parcial cannot be null');
        }
        $this->container['inf_entrega_parcial'] = $inf_entrega_parcial;

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


