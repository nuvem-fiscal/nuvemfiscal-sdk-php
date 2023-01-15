<?php
/**
 * CteSefazInfOutros
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
 * OpenAPI Generator version: 6.2.0
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
 * CteSefazInfOutros Class Doc Comment
 *
 * @category Class
 * @description Informações dos demais documentos.
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CteSefazInfOutros implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CteSefazInfOutros';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'tp_doc' => 'string',
        'desc_outros' => 'string',
        'n_doc' => 'string',
        'd_emi' => '\DateTime',
        'v_doc_fisc' => 'float',
        'd_prev' => '\DateTime',
        'inf_unid_carga' => '\NuvemFiscal\Model\CteSefazUnidCarga[]',
        'inf_unid_transp' => '\NuvemFiscal\Model\CteSefazUnidadeTransp[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'tp_doc' => null,
        'desc_outros' => null,
        'n_doc' => null,
        'd_emi' => 'date',
        'v_doc_fisc' => null,
        'd_prev' => 'date',
        'inf_unid_carga' => null,
        'inf_unid_transp' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'tp_doc' => false,
		'desc_outros' => false,
		'n_doc' => false,
		'd_emi' => false,
		'v_doc_fisc' => false,
		'd_prev' => false,
		'inf_unid_carga' => false,
		'inf_unid_transp' => false
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
        'tp_doc' => 'tpDoc',
        'desc_outros' => 'descOutros',
        'n_doc' => 'nDoc',
        'd_emi' => 'dEmi',
        'v_doc_fisc' => 'vDocFisc',
        'd_prev' => 'dPrev',
        'inf_unid_carga' => 'infUnidCarga',
        'inf_unid_transp' => 'infUnidTransp'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'tp_doc' => 'setTpDoc',
        'desc_outros' => 'setDescOutros',
        'n_doc' => 'setNDoc',
        'd_emi' => 'setDEmi',
        'v_doc_fisc' => 'setVDocFisc',
        'd_prev' => 'setDPrev',
        'inf_unid_carga' => 'setInfUnidCarga',
        'inf_unid_transp' => 'setInfUnidTransp'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'tp_doc' => 'getTpDoc',
        'desc_outros' => 'getDescOutros',
        'n_doc' => 'getNDoc',
        'd_emi' => 'getDEmi',
        'v_doc_fisc' => 'getVDocFisc',
        'd_prev' => 'getDPrev',
        'inf_unid_carga' => 'getInfUnidCarga',
        'inf_unid_transp' => 'getInfUnidTransp'
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
        $this->setIfExists('tp_doc', $data ?? [], null);
        $this->setIfExists('desc_outros', $data ?? [], null);
        $this->setIfExists('n_doc', $data ?? [], null);
        $this->setIfExists('d_emi', $data ?? [], null);
        $this->setIfExists('v_doc_fisc', $data ?? [], null);
        $this->setIfExists('d_prev', $data ?? [], null);
        $this->setIfExists('inf_unid_carga', $data ?? [], null);
        $this->setIfExists('inf_unid_transp', $data ?? [], null);
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

        if ($this->container['tp_doc'] === null) {
            $invalidProperties[] = "'tp_doc' can't be null";
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
     * Gets tp_doc
     *
     * @return string
     */
    public function getTpDoc()
    {
        return $this->container['tp_doc'];
    }

    /**
     * Sets tp_doc
     *
     * @param string $tp_doc Tipo de documento originário.  Preencher com:  * 00 - Declaração  * 10 - Dutoviário  * 59 - CF-e SAT  * 65 - NFC-e  * 99 - Outros
     *
     * @return self
     */
    public function setTpDoc($tp_doc)
    {

        if (is_null($tp_doc)) {
            throw new \InvalidArgumentException('non-nullable tp_doc cannot be null');
        }

        $this->container['tp_doc'] = $tp_doc;

        return $this;
    }

    /**
     * Gets desc_outros
     *
     * @return string|null
     */
    public function getDescOutros()
    {
        return $this->container['desc_outros'];
    }

    /**
     * Sets desc_outros
     *
     * @param string|null $desc_outros Descrição do documento.
     *
     * @return self
     */
    public function setDescOutros($desc_outros)
    {

        if (is_null($desc_outros)) {
            throw new \InvalidArgumentException('non-nullable desc_outros cannot be null');
        }

        $this->container['desc_outros'] = $desc_outros;

        return $this;
    }

    /**
     * Gets n_doc
     *
     * @return string|null
     */
    public function getNDoc()
    {
        return $this->container['n_doc'];
    }

    /**
     * Sets n_doc
     *
     * @param string|null $n_doc Número.
     *
     * @return self
     */
    public function setNDoc($n_doc)
    {

        if (is_null($n_doc)) {
            throw new \InvalidArgumentException('non-nullable n_doc cannot be null');
        }

        $this->container['n_doc'] = $n_doc;

        return $this;
    }

    /**
     * Gets d_emi
     *
     * @return \DateTime|null
     */
    public function getDEmi()
    {
        return $this->container['d_emi'];
    }

    /**
     * Sets d_emi
     *
     * @param \DateTime|null $d_emi Data de Emissão.  Formato AAAA-MM-DD.
     *
     * @return self
     */
    public function setDEmi($d_emi)
    {

        if (is_null($d_emi)) {
            throw new \InvalidArgumentException('non-nullable d_emi cannot be null');
        }

        $this->container['d_emi'] = $d_emi;

        return $this;
    }

    /**
     * Gets v_doc_fisc
     *
     * @return float|null
     */
    public function getVDocFisc()
    {
        return $this->container['v_doc_fisc'];
    }

    /**
     * Sets v_doc_fisc
     *
     * @param float|null $v_doc_fisc Valor do documento.
     *
     * @return self
     */
    public function setVDocFisc($v_doc_fisc)
    {

        if (is_null($v_doc_fisc)) {
            throw new \InvalidArgumentException('non-nullable v_doc_fisc cannot be null');
        }

        $this->container['v_doc_fisc'] = $v_doc_fisc;

        return $this;
    }

    /**
     * Gets d_prev
     *
     * @return \DateTime|null
     */
    public function getDPrev()
    {
        return $this->container['d_prev'];
    }

    /**
     * Sets d_prev
     *
     * @param \DateTime|null $d_prev Data prevista de entrega.  Formato AAAA-MM-DD.
     *
     * @return self
     */
    public function setDPrev($d_prev)
    {

        if (is_null($d_prev)) {
            throw new \InvalidArgumentException('non-nullable d_prev cannot be null');
        }

        $this->container['d_prev'] = $d_prev;

        return $this;
    }

    /**
     * Gets inf_unid_carga
     *
     * @return \NuvemFiscal\Model\CteSefazUnidCarga[]|null
     */
    public function getInfUnidCarga()
    {
        return $this->container['inf_unid_carga'];
    }

    /**
     * Sets inf_unid_carga
     *
     * @param \NuvemFiscal\Model\CteSefazUnidCarga[]|null $inf_unid_carga inf_unid_carga
     *
     * @return self
     */
    public function setInfUnidCarga($inf_unid_carga)
    {

        if (is_null($inf_unid_carga)) {
            throw new \InvalidArgumentException('non-nullable inf_unid_carga cannot be null');
        }

        $this->container['inf_unid_carga'] = $inf_unid_carga;

        return $this;
    }

    /**
     * Gets inf_unid_transp
     *
     * @return \NuvemFiscal\Model\CteSefazUnidadeTransp[]|null
     */
    public function getInfUnidTransp()
    {
        return $this->container['inf_unid_transp'];
    }

    /**
     * Sets inf_unid_transp
     *
     * @param \NuvemFiscal\Model\CteSefazUnidadeTransp[]|null $inf_unid_transp inf_unid_transp
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


