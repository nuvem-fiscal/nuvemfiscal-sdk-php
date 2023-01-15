<?php
/**
 * CteSefazInfCTeNorm
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
 * CteSefazInfCTeNorm Class Doc Comment
 *
 * @category Class
 * @description Grupo de informações do CT-e Normal e Substituto.
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CteSefazInfCTeNorm implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CteSefazInfCTeNorm';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'inf_carga' => '\NuvemFiscal\Model\CteSefazInfCarga',
        'inf_doc' => '\NuvemFiscal\Model\CteSefazInfDoc',
        'doc_ant' => '\NuvemFiscal\Model\CteSefazDocAnt',
        'inf_modal' => '\NuvemFiscal\Model\CteSefazInfModal',
        'veic_novos' => '\NuvemFiscal\Model\CteSefazVeicNovos[]',
        'cobr' => '\NuvemFiscal\Model\CteSefazCobr',
        'inf_cte_sub' => '\NuvemFiscal\Model\CteSefazInfCteSub',
        'inf_globalizado' => '\NuvemFiscal\Model\CteSefazInfGlobalizado',
        'inf_serv_vinc' => '\NuvemFiscal\Model\CteSefazInfServVinc'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'inf_carga' => null,
        'inf_doc' => null,
        'doc_ant' => null,
        'inf_modal' => null,
        'veic_novos' => null,
        'cobr' => null,
        'inf_cte_sub' => null,
        'inf_globalizado' => null,
        'inf_serv_vinc' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'inf_carga' => false,
		'inf_doc' => false,
		'doc_ant' => false,
		'inf_modal' => false,
		'veic_novos' => false,
		'cobr' => false,
		'inf_cte_sub' => false,
		'inf_globalizado' => false,
		'inf_serv_vinc' => false
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
        'inf_carga' => 'infCarga',
        'inf_doc' => 'infDoc',
        'doc_ant' => 'docAnt',
        'inf_modal' => 'infModal',
        'veic_novos' => 'veicNovos',
        'cobr' => 'cobr',
        'inf_cte_sub' => 'infCteSub',
        'inf_globalizado' => 'infGlobalizado',
        'inf_serv_vinc' => 'infServVinc'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'inf_carga' => 'setInfCarga',
        'inf_doc' => 'setInfDoc',
        'doc_ant' => 'setDocAnt',
        'inf_modal' => 'setInfModal',
        'veic_novos' => 'setVeicNovos',
        'cobr' => 'setCobr',
        'inf_cte_sub' => 'setInfCteSub',
        'inf_globalizado' => 'setInfGlobalizado',
        'inf_serv_vinc' => 'setInfServVinc'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'inf_carga' => 'getInfCarga',
        'inf_doc' => 'getInfDoc',
        'doc_ant' => 'getDocAnt',
        'inf_modal' => 'getInfModal',
        'veic_novos' => 'getVeicNovos',
        'cobr' => 'getCobr',
        'inf_cte_sub' => 'getInfCteSub',
        'inf_globalizado' => 'getInfGlobalizado',
        'inf_serv_vinc' => 'getInfServVinc'
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
        $this->setIfExists('inf_carga', $data ?? [], null);
        $this->setIfExists('inf_doc', $data ?? [], null);
        $this->setIfExists('doc_ant', $data ?? [], null);
        $this->setIfExists('inf_modal', $data ?? [], null);
        $this->setIfExists('veic_novos', $data ?? [], null);
        $this->setIfExists('cobr', $data ?? [], null);
        $this->setIfExists('inf_cte_sub', $data ?? [], null);
        $this->setIfExists('inf_globalizado', $data ?? [], null);
        $this->setIfExists('inf_serv_vinc', $data ?? [], null);
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

        if ($this->container['inf_carga'] === null) {
            $invalidProperties[] = "'inf_carga' can't be null";
        }
        if ($this->container['inf_modal'] === null) {
            $invalidProperties[] = "'inf_modal' can't be null";
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
     * Gets inf_carga
     *
     * @return \NuvemFiscal\Model\CteSefazInfCarga
     */
    public function getInfCarga()
    {
        return $this->container['inf_carga'];
    }

    /**
     * Sets inf_carga
     *
     * @param \NuvemFiscal\Model\CteSefazInfCarga $inf_carga inf_carga
     *
     * @return self
     */
    public function setInfCarga($inf_carga)
    {

        if (is_null($inf_carga)) {
            throw new \InvalidArgumentException('non-nullable inf_carga cannot be null');
        }

        $this->container['inf_carga'] = $inf_carga;

        return $this;
    }

    /**
     * Gets inf_doc
     *
     * @return \NuvemFiscal\Model\CteSefazInfDoc|null
     */
    public function getInfDoc()
    {
        return $this->container['inf_doc'];
    }

    /**
     * Sets inf_doc
     *
     * @param \NuvemFiscal\Model\CteSefazInfDoc|null $inf_doc inf_doc
     *
     * @return self
     */
    public function setInfDoc($inf_doc)
    {

        if (is_null($inf_doc)) {
            throw new \InvalidArgumentException('non-nullable inf_doc cannot be null');
        }

        $this->container['inf_doc'] = $inf_doc;

        return $this;
    }

    /**
     * Gets doc_ant
     *
     * @return \NuvemFiscal\Model\CteSefazDocAnt|null
     */
    public function getDocAnt()
    {
        return $this->container['doc_ant'];
    }

    /**
     * Sets doc_ant
     *
     * @param \NuvemFiscal\Model\CteSefazDocAnt|null $doc_ant doc_ant
     *
     * @return self
     */
    public function setDocAnt($doc_ant)
    {

        if (is_null($doc_ant)) {
            throw new \InvalidArgumentException('non-nullable doc_ant cannot be null');
        }

        $this->container['doc_ant'] = $doc_ant;

        return $this;
    }

    /**
     * Gets inf_modal
     *
     * @return \NuvemFiscal\Model\CteSefazInfModal
     */
    public function getInfModal()
    {
        return $this->container['inf_modal'];
    }

    /**
     * Sets inf_modal
     *
     * @param \NuvemFiscal\Model\CteSefazInfModal $inf_modal inf_modal
     *
     * @return self
     */
    public function setInfModal($inf_modal)
    {

        if (is_null($inf_modal)) {
            throw new \InvalidArgumentException('non-nullable inf_modal cannot be null');
        }

        $this->container['inf_modal'] = $inf_modal;

        return $this;
    }

    /**
     * Gets veic_novos
     *
     * @return \NuvemFiscal\Model\CteSefazVeicNovos[]|null
     */
    public function getVeicNovos()
    {
        return $this->container['veic_novos'];
    }

    /**
     * Sets veic_novos
     *
     * @param \NuvemFiscal\Model\CteSefazVeicNovos[]|null $veic_novos veic_novos
     *
     * @return self
     */
    public function setVeicNovos($veic_novos)
    {

        if (is_null($veic_novos)) {
            throw new \InvalidArgumentException('non-nullable veic_novos cannot be null');
        }

        $this->container['veic_novos'] = $veic_novos;

        return $this;
    }

    /**
     * Gets cobr
     *
     * @return \NuvemFiscal\Model\CteSefazCobr|null
     */
    public function getCobr()
    {
        return $this->container['cobr'];
    }

    /**
     * Sets cobr
     *
     * @param \NuvemFiscal\Model\CteSefazCobr|null $cobr cobr
     *
     * @return self
     */
    public function setCobr($cobr)
    {

        if (is_null($cobr)) {
            throw new \InvalidArgumentException('non-nullable cobr cannot be null');
        }

        $this->container['cobr'] = $cobr;

        return $this;
    }

    /**
     * Gets inf_cte_sub
     *
     * @return \NuvemFiscal\Model\CteSefazInfCteSub|null
     */
    public function getInfCteSub()
    {
        return $this->container['inf_cte_sub'];
    }

    /**
     * Sets inf_cte_sub
     *
     * @param \NuvemFiscal\Model\CteSefazInfCteSub|null $inf_cte_sub inf_cte_sub
     *
     * @return self
     */
    public function setInfCteSub($inf_cte_sub)
    {

        if (is_null($inf_cte_sub)) {
            throw new \InvalidArgumentException('non-nullable inf_cte_sub cannot be null');
        }

        $this->container['inf_cte_sub'] = $inf_cte_sub;

        return $this;
    }

    /**
     * Gets inf_globalizado
     *
     * @return \NuvemFiscal\Model\CteSefazInfGlobalizado|null
     */
    public function getInfGlobalizado()
    {
        return $this->container['inf_globalizado'];
    }

    /**
     * Sets inf_globalizado
     *
     * @param \NuvemFiscal\Model\CteSefazInfGlobalizado|null $inf_globalizado inf_globalizado
     *
     * @return self
     */
    public function setInfGlobalizado($inf_globalizado)
    {

        if (is_null($inf_globalizado)) {
            throw new \InvalidArgumentException('non-nullable inf_globalizado cannot be null');
        }

        $this->container['inf_globalizado'] = $inf_globalizado;

        return $this;
    }

    /**
     * Gets inf_serv_vinc
     *
     * @return \NuvemFiscal\Model\CteSefazInfServVinc|null
     */
    public function getInfServVinc()
    {
        return $this->container['inf_serv_vinc'];
    }

    /**
     * Sets inf_serv_vinc
     *
     * @param \NuvemFiscal\Model\CteSefazInfServVinc|null $inf_serv_vinc inf_serv_vinc
     *
     * @return self
     */
    public function setInfServVinc($inf_serv_vinc)
    {

        if (is_null($inf_serv_vinc)) {
            throw new \InvalidArgumentException('non-nullable inf_serv_vinc cannot be null');
        }

        $this->container['inf_serv_vinc'] = $inf_serv_vinc;

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


