<?php
/**
 * CteSefazTrafMut
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
 * Versão do documento OpenAPI: 1.2.2
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
 * CteSefazTrafMut Class Doc Comment
 *
 * @category Class
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CteSefazTrafMut implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CteSefazTrafMut';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'resp_fat' => 'int',
        'ferr_emi' => 'int',
        'v_frete' => 'float',
        'ch_cte_ferro_origem' => 'string',
        'ferro_env' => '\NuvemFiscal\Model\CteSefazFerroEnv[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'resp_fat' => null,
        'ferr_emi' => null,
        'v_frete' => null,
        'ch_cte_ferro_origem' => null,
        'ferro_env' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'resp_fat' => false,
		'ferr_emi' => false,
		'v_frete' => false,
		'ch_cte_ferro_origem' => false,
		'ferro_env' => false
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
        'resp_fat' => 'respFat',
        'ferr_emi' => 'ferrEmi',
        'v_frete' => 'vFrete',
        'ch_cte_ferro_origem' => 'chCTeFerroOrigem',
        'ferro_env' => 'ferroEnv'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'resp_fat' => 'setRespFat',
        'ferr_emi' => 'setFerrEmi',
        'v_frete' => 'setVFrete',
        'ch_cte_ferro_origem' => 'setChCteFerroOrigem',
        'ferro_env' => 'setFerroEnv'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'resp_fat' => 'getRespFat',
        'ferr_emi' => 'getFerrEmi',
        'v_frete' => 'getVFrete',
        'ch_cte_ferro_origem' => 'getChCteFerroOrigem',
        'ferro_env' => 'getFerroEnv'
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
        $this->setIfExists('resp_fat', $data ?? [], null);
        $this->setIfExists('ferr_emi', $data ?? [], null);
        $this->setIfExists('v_frete', $data ?? [], null);
        $this->setIfExists('ch_cte_ferro_origem', $data ?? [], null);
        $this->setIfExists('ferro_env', $data ?? [], null);
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

        if ($this->container['resp_fat'] === null) {
            $invalidProperties[] = "'resp_fat' can't be null";
        }
        if ($this->container['ferr_emi'] === null) {
            $invalidProperties[] = "'ferr_emi' can't be null";
        }
        if ($this->container['v_frete'] === null) {
            $invalidProperties[] = "'v_frete' can't be null";
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
     * Gets resp_fat
     *
     * @return int
     */
    public function getRespFat()
    {
        return $this->container['resp_fat'];
    }

    /**
     * Sets resp_fat
     *
     * @param int $resp_fat Responsável pelo Faturamento.  Preencher com:            1-Ferrovia de origem;            2-Ferrovia de destino.
     *
     * @return self
     */
    public function setRespFat($resp_fat)
    {

        if (is_null($resp_fat)) {
            throw new \InvalidArgumentException('non-nullable resp_fat cannot be null');
        }

        $this->container['resp_fat'] = $resp_fat;

        return $this;
    }

    /**
     * Gets ferr_emi
     *
     * @return int
     */
    public function getFerrEmi()
    {
        return $this->container['ferr_emi'];
    }

    /**
     * Sets ferr_emi
     *
     * @param int $ferr_emi Ferrovia Emitente do CTe.  Preencher com:            1-Ferrovia de origem;            2-Ferrovia de destino.
     *
     * @return self
     */
    public function setFerrEmi($ferr_emi)
    {

        if (is_null($ferr_emi)) {
            throw new \InvalidArgumentException('non-nullable ferr_emi cannot be null');
        }

        $this->container['ferr_emi'] = $ferr_emi;

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
     * @param float $v_frete Valor do Frete do Tráfego Mútuo.
     *
     * @return self
     */
    public function setVFrete($v_frete)
    {

        if (is_null($v_frete)) {
            throw new \InvalidArgumentException('non-nullable v_frete cannot be null');
        }

        $this->container['v_frete'] = $v_frete;

        return $this;
    }

    /**
     * Gets ch_cte_ferro_origem
     *
     * @return string|null
     */
    public function getChCteFerroOrigem()
    {
        return $this->container['ch_cte_ferro_origem'];
    }

    /**
     * Sets ch_cte_ferro_origem
     *
     * @param string|null $ch_cte_ferro_origem Chave de acesso do CT-e emitido pelo ferrovia de origem.
     *
     * @return self
     */
    public function setChCteFerroOrigem($ch_cte_ferro_origem)
    {

        if (is_null($ch_cte_ferro_origem)) {
            throw new \InvalidArgumentException('non-nullable ch_cte_ferro_origem cannot be null');
        }

        $this->container['ch_cte_ferro_origem'] = $ch_cte_ferro_origem;

        return $this;
    }

    /**
     * Gets ferro_env
     *
     * @return \NuvemFiscal\Model\CteSefazFerroEnv[]|null
     */
    public function getFerroEnv()
    {
        return $this->container['ferro_env'];
    }

    /**
     * Sets ferro_env
     *
     * @param \NuvemFiscal\Model\CteSefazFerroEnv[]|null $ferro_env Informações das Ferrovias Envolvidas.
     *
     * @return self
     */
    public function setFerroEnv($ferro_env)
    {

        if (is_null($ferro_env)) {
            throw new \InvalidArgumentException('non-nullable ferro_env cannot be null');
        }

        $this->container['ferro_env'] = $ferro_env;

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


