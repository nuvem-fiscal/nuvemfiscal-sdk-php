<?php
/**
 * CteSefazICMSUFFim
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
 * CteSefazICMSUFFim Class Doc Comment
 *
 * @category Class
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CteSefazICMSUFFim implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CteSefazICMSUFFim';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'v_bcuf_fim' => 'float',
        'p_fcpuf_fim' => 'float',
        'p_icmsuf_fim' => 'float',
        'p_icms_inter' => 'float',
        'v_fcpuf_fim' => 'float',
        'v_icmsuf_fim' => 'float',
        'v_icmsuf_ini' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'v_bcuf_fim' => null,
        'p_fcpuf_fim' => null,
        'p_icmsuf_fim' => null,
        'p_icms_inter' => null,
        'v_fcpuf_fim' => null,
        'v_icmsuf_fim' => null,
        'v_icmsuf_ini' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'v_bcuf_fim' => false,
		'p_fcpuf_fim' => false,
		'p_icmsuf_fim' => false,
		'p_icms_inter' => false,
		'v_fcpuf_fim' => false,
		'v_icmsuf_fim' => false,
		'v_icmsuf_ini' => false
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
        'v_bcuf_fim' => 'vBCUFFim',
        'p_fcpuf_fim' => 'pFCPUFFim',
        'p_icmsuf_fim' => 'pICMSUFFim',
        'p_icms_inter' => 'pICMSInter',
        'v_fcpuf_fim' => 'vFCPUFFim',
        'v_icmsuf_fim' => 'vICMSUFFim',
        'v_icmsuf_ini' => 'vICMSUFIni'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'v_bcuf_fim' => 'setVBcufFim',
        'p_fcpuf_fim' => 'setPFcpufFim',
        'p_icmsuf_fim' => 'setPIcmsufFim',
        'p_icms_inter' => 'setPIcmsInter',
        'v_fcpuf_fim' => 'setVFcpufFim',
        'v_icmsuf_fim' => 'setVIcmsufFim',
        'v_icmsuf_ini' => 'setVIcmsufIni'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'v_bcuf_fim' => 'getVBcufFim',
        'p_fcpuf_fim' => 'getPFcpufFim',
        'p_icmsuf_fim' => 'getPIcmsufFim',
        'p_icms_inter' => 'getPIcmsInter',
        'v_fcpuf_fim' => 'getVFcpufFim',
        'v_icmsuf_fim' => 'getVIcmsufFim',
        'v_icmsuf_ini' => 'getVIcmsufIni'
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
        $this->setIfExists('v_bcuf_fim', $data ?? [], null);
        $this->setIfExists('p_fcpuf_fim', $data ?? [], null);
        $this->setIfExists('p_icmsuf_fim', $data ?? [], null);
        $this->setIfExists('p_icms_inter', $data ?? [], null);
        $this->setIfExists('v_fcpuf_fim', $data ?? [], null);
        $this->setIfExists('v_icmsuf_fim', $data ?? [], null);
        $this->setIfExists('v_icmsuf_ini', $data ?? [], null);
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

        if ($this->container['v_bcuf_fim'] === null) {
            $invalidProperties[] = "'v_bcuf_fim' can't be null";
        }
        if ($this->container['p_fcpuf_fim'] === null) {
            $invalidProperties[] = "'p_fcpuf_fim' can't be null";
        }
        if ($this->container['p_icmsuf_fim'] === null) {
            $invalidProperties[] = "'p_icmsuf_fim' can't be null";
        }
        if ($this->container['p_icms_inter'] === null) {
            $invalidProperties[] = "'p_icms_inter' can't be null";
        }
        if ($this->container['v_fcpuf_fim'] === null) {
            $invalidProperties[] = "'v_fcpuf_fim' can't be null";
        }
        if ($this->container['v_icmsuf_fim'] === null) {
            $invalidProperties[] = "'v_icmsuf_fim' can't be null";
        }
        if ($this->container['v_icmsuf_ini'] === null) {
            $invalidProperties[] = "'v_icmsuf_ini' can't be null";
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
     * Gets v_bcuf_fim
     *
     * @return float
     */
    public function getVBcufFim()
    {
        return $this->container['v_bcuf_fim'];
    }

    /**
     * Sets v_bcuf_fim
     *
     * @param float $v_bcuf_fim Valor da BC do ICMS na UF de término da prestação do serviço de transporte.
     *
     * @return self
     */
    public function setVBcufFim($v_bcuf_fim)
    {

        if (is_null($v_bcuf_fim)) {
            throw new \InvalidArgumentException('non-nullable v_bcuf_fim cannot be null');
        }

        $this->container['v_bcuf_fim'] = $v_bcuf_fim;

        return $this;
    }

    /**
     * Gets p_fcpuf_fim
     *
     * @return float
     */
    public function getPFcpufFim()
    {
        return $this->container['p_fcpuf_fim'];
    }

    /**
     * Sets p_fcpuf_fim
     *
     * @param float $p_fcpuf_fim Percentual do ICMS relativo ao Fundo de Combate à pobreza (FCP) na UF de término da prestação do serviço de transporte.  Alíquota adotada nas operações internas na UF do destinatário.
     *
     * @return self
     */
    public function setPFcpufFim($p_fcpuf_fim)
    {

        if (is_null($p_fcpuf_fim)) {
            throw new \InvalidArgumentException('non-nullable p_fcpuf_fim cannot be null');
        }

        $this->container['p_fcpuf_fim'] = $p_fcpuf_fim;

        return $this;
    }

    /**
     * Gets p_icmsuf_fim
     *
     * @return float
     */
    public function getPIcmsufFim()
    {
        return $this->container['p_icmsuf_fim'];
    }

    /**
     * Sets p_icmsuf_fim
     *
     * @param float $p_icmsuf_fim Alíquota interna da UF de término da prestação do serviço de transporte.  Alíquota adotada nas operações internas na UF do destinatário.
     *
     * @return self
     */
    public function setPIcmsufFim($p_icmsuf_fim)
    {

        if (is_null($p_icmsuf_fim)) {
            throw new \InvalidArgumentException('non-nullable p_icmsuf_fim cannot be null');
        }

        $this->container['p_icmsuf_fim'] = $p_icmsuf_fim;

        return $this;
    }

    /**
     * Gets p_icms_inter
     *
     * @return float
     */
    public function getPIcmsInter()
    {
        return $this->container['p_icms_inter'];
    }

    /**
     * Sets p_icms_inter
     *
     * @param float $p_icms_inter Alíquota interestadual das UF envolvidas.  Alíquota interestadual das UF envolvidas.
     *
     * @return self
     */
    public function setPIcmsInter($p_icms_inter)
    {

        if (is_null($p_icms_inter)) {
            throw new \InvalidArgumentException('non-nullable p_icms_inter cannot be null');
        }

        $this->container['p_icms_inter'] = $p_icms_inter;

        return $this;
    }

    /**
     * Gets v_fcpuf_fim
     *
     * @return float
     */
    public function getVFcpufFim()
    {
        return $this->container['v_fcpuf_fim'];
    }

    /**
     * Sets v_fcpuf_fim
     *
     * @param float $v_fcpuf_fim Valor do ICMS relativo ao Fundo de Combate á Pobreza (FCP) da UF de término da prestação.
     *
     * @return self
     */
    public function setVFcpufFim($v_fcpuf_fim)
    {

        if (is_null($v_fcpuf_fim)) {
            throw new \InvalidArgumentException('non-nullable v_fcpuf_fim cannot be null');
        }

        $this->container['v_fcpuf_fim'] = $v_fcpuf_fim;

        return $this;
    }

    /**
     * Gets v_icmsuf_fim
     *
     * @return float
     */
    public function getVIcmsufFim()
    {
        return $this->container['v_icmsuf_fim'];
    }

    /**
     * Sets v_icmsuf_fim
     *
     * @param float $v_icmsuf_fim Valor do ICMS de partilha para a UF de término da prestação do serviço de transporte.
     *
     * @return self
     */
    public function setVIcmsufFim($v_icmsuf_fim)
    {

        if (is_null($v_icmsuf_fim)) {
            throw new \InvalidArgumentException('non-nullable v_icmsuf_fim cannot be null');
        }

        $this->container['v_icmsuf_fim'] = $v_icmsuf_fim;

        return $this;
    }

    /**
     * Gets v_icmsuf_ini
     *
     * @return float
     */
    public function getVIcmsufIni()
    {
        return $this->container['v_icmsuf_ini'];
    }

    /**
     * Sets v_icmsuf_ini
     *
     * @param float $v_icmsuf_ini Valor do ICMS de partilha para a UF de início da prestação do serviço de transporte.
     *
     * @return self
     */
    public function setVIcmsufIni($v_icmsuf_ini)
    {

        if (is_null($v_icmsuf_ini)) {
            throw new \InvalidArgumentException('non-nullable v_icmsuf_ini cannot be null');
        }

        $this->container['v_icmsuf_ini'] = $v_icmsuf_ini;

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


