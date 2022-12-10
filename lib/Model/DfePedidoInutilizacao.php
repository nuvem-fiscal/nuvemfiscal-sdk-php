<?php
/**
 * DfePedidoInutilizacao
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
 * DfePedidoInutilizacao Class Doc Comment
 *
 * @category Class
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class DfePedidoInutilizacao implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DfePedidoInutilizacao';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'ambiente' => 'string',
        'cnpj' => 'string',
        'ano' => 'int',
        'serie' => 'int',
        'numero_inicial' => 'int',
        'numero_final' => 'int',
        'justificativa' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'ambiente' => null,
        'cnpj' => null,
        'ano' => null,
        'serie' => null,
        'numero_inicial' => null,
        'numero_final' => null,
        'justificativa' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'ambiente' => false,
		'cnpj' => false,
		'ano' => false,
		'serie' => false,
		'numero_inicial' => false,
		'numero_final' => false,
		'justificativa' => false
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
        'ambiente' => 'ambiente',
        'cnpj' => 'cnpj',
        'ano' => 'ano',
        'serie' => 'serie',
        'numero_inicial' => 'numero_inicial',
        'numero_final' => 'numero_final',
        'justificativa' => 'justificativa'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ambiente' => 'setAmbiente',
        'cnpj' => 'setCnpj',
        'ano' => 'setAno',
        'serie' => 'setSerie',
        'numero_inicial' => 'setNumeroInicial',
        'numero_final' => 'setNumeroFinal',
        'justificativa' => 'setJustificativa'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ambiente' => 'getAmbiente',
        'cnpj' => 'getCnpj',
        'ano' => 'getAno',
        'serie' => 'getSerie',
        'numero_inicial' => 'getNumeroInicial',
        'numero_final' => 'getNumeroFinal',
        'justificativa' => 'getJustificativa'
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

    public const AMBIENTE_HOMOLOGACAO = 'homologacao';
    public const AMBIENTE_PRODUCAO = 'producao';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAmbienteAllowableValues()
    {
        return [
            self::AMBIENTE_HOMOLOGACAO,
            self::AMBIENTE_PRODUCAO,
        ];
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
        $this->setIfExists('ambiente', $data ?? [], null);
        $this->setIfExists('cnpj', $data ?? [], null);
        $this->setIfExists('ano', $data ?? [], null);
        $this->setIfExists('serie', $data ?? [], null);
        $this->setIfExists('numero_inicial', $data ?? [], null);
        $this->setIfExists('numero_final', $data ?? [], null);
        $this->setIfExists('justificativa', $data ?? [], null);
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

        if ($this->container['ambiente'] === null) {
            $invalidProperties[] = "'ambiente' can't be null";
        }
        $allowedValues = $this->getAmbienteAllowableValues();
        if (!is_null($this->container['ambiente']) && !in_array($this->container['ambiente'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'ambiente', must be one of '%s'",
                $this->container['ambiente'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['cnpj'] === null) {
            $invalidProperties[] = "'cnpj' can't be null";
        }
        if ($this->container['ano'] === null) {
            $invalidProperties[] = "'ano' can't be null";
        }
        if ($this->container['serie'] === null) {
            $invalidProperties[] = "'serie' can't be null";
        }
        if ($this->container['numero_inicial'] === null) {
            $invalidProperties[] = "'numero_inicial' can't be null";
        }
        if ($this->container['numero_final'] === null) {
            $invalidProperties[] = "'numero_final' can't be null";
        }
        if ($this->container['justificativa'] === null) {
            $invalidProperties[] = "'justificativa' can't be null";
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
     * Gets ambiente
     *
     * @return string
     */
    public function getAmbiente()
    {
        return $this->container['ambiente'];
    }

    /**
     * Sets ambiente
     *
     * @param string $ambiente Identificação do Ambiente.
     *
     * @return self
     */
    public function setAmbiente($ambiente)
    {
        $allowedValues = $this->getAmbienteAllowableValues();
        if (!in_array($ambiente, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'ambiente', must be one of '%s'",
                    $ambiente,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($ambiente)) {
            throw new \InvalidArgumentException('non-nullable ambiente cannot be null');
        }

        $this->container['ambiente'] = $ambiente;

        return $this;
    }

    /**
     * Gets cnpj
     *
     * @return string
     */
    public function getCnpj()
    {
        return $this->container['cnpj'];
    }

    /**
     * Sets cnpj
     *
     * @param string $cnpj CNPJ do emitente.
     *
     * @return self
     */
    public function setCnpj($cnpj)
    {

        if (is_null($cnpj)) {
            throw new \InvalidArgumentException('non-nullable cnpj cannot be null');
        }

        $this->container['cnpj'] = $cnpj;

        return $this;
    }

    /**
     * Gets ano
     *
     * @return int
     */
    public function getAno()
    {
        return $this->container['ano'];
    }

    /**
     * Sets ano
     *
     * @param int $ano Ano de inutilização da numeração.
     *
     * @return self
     */
    public function setAno($ano)
    {

        if (is_null($ano)) {
            throw new \InvalidArgumentException('non-nullable ano cannot be null');
        }

        $this->container['ano'] = $ano;

        return $this;
    }

    /**
     * Gets serie
     *
     * @return int
     */
    public function getSerie()
    {
        return $this->container['serie'];
    }

    /**
     * Sets serie
     *
     * @param int $serie Série da NF-e.
     *
     * @return self
     */
    public function setSerie($serie)
    {

        if (is_null($serie)) {
            throw new \InvalidArgumentException('non-nullable serie cannot be null');
        }

        $this->container['serie'] = $serie;

        return $this;
    }

    /**
     * Gets numero_inicial
     *
     * @return int
     */
    public function getNumeroInicial()
    {
        return $this->container['numero_inicial'];
    }

    /**
     * Sets numero_inicial
     *
     * @param int $numero_inicial Número da NF-e inicial.
     *
     * @return self
     */
    public function setNumeroInicial($numero_inicial)
    {

        if (is_null($numero_inicial)) {
            throw new \InvalidArgumentException('non-nullable numero_inicial cannot be null');
        }

        $this->container['numero_inicial'] = $numero_inicial;

        return $this;
    }

    /**
     * Gets numero_final
     *
     * @return int
     */
    public function getNumeroFinal()
    {
        return $this->container['numero_final'];
    }

    /**
     * Sets numero_final
     *
     * @param int $numero_final Número da NF-e final.
     *
     * @return self
     */
    public function setNumeroFinal($numero_final)
    {

        if (is_null($numero_final)) {
            throw new \InvalidArgumentException('non-nullable numero_final cannot be null');
        }

        $this->container['numero_final'] = $numero_final;

        return $this;
    }

    /**
     * Gets justificativa
     *
     * @return string
     */
    public function getJustificativa()
    {
        return $this->container['justificativa'];
    }

    /**
     * Sets justificativa
     *
     * @param string $justificativa Justificativa do pedido de inutilização.
     *
     * @return self
     */
    public function setJustificativa($justificativa)
    {

        if (is_null($justificativa)) {
            throw new \InvalidArgumentException('non-nullable justificativa cannot be null');
        }

        $this->container['justificativa'] = $justificativa;

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


