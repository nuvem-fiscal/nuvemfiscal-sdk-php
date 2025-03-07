<?php
/**
 * NfePedidoEmissao
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
 * NfePedidoEmissao Class Doc Comment
 *
 * @category Class
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class NfePedidoEmissao implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NfePedidoEmissao';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'inf_nfe' => '\NuvemFiscal\Model\NfeSefazInfNFe',
        'inf_nfe_supl' => '\NuvemFiscal\Model\NfeSefazInfNFeSupl',
        'ambiente' => 'string',
        'referencia' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'inf_nfe' => null,
        'inf_nfe_supl' => null,
        'ambiente' => null,
        'referencia' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'inf_nfe' => false,
        'inf_nfe_supl' => false,
        'ambiente' => false,
        'referencia' => true
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
        'inf_nfe' => 'infNFe',
        'inf_nfe_supl' => 'infNFeSupl',
        'ambiente' => 'ambiente',
        'referencia' => 'referencia'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'inf_nfe' => 'setInfNfe',
        'inf_nfe_supl' => 'setInfNfeSupl',
        'ambiente' => 'setAmbiente',
        'referencia' => 'setReferencia'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'inf_nfe' => 'getInfNfe',
        'inf_nfe_supl' => 'getInfNfeSupl',
        'ambiente' => 'getAmbiente',
        'referencia' => 'getReferencia'
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
        $this->setIfExists('inf_nfe', $data ?? [], null);
        $this->setIfExists('inf_nfe_supl', $data ?? [], null);
        $this->setIfExists('ambiente', $data ?? [], null);
        $this->setIfExists('referencia', $data ?? [], null);
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

        if ($this->container['inf_nfe'] === null) {
            $invalidProperties[] = "'inf_nfe' can't be null";
        }
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

        if (!is_null($this->container['referencia']) && (mb_strlen($this->container['referencia']) > 50)) {
            $invalidProperties[] = "invalid value for 'referencia', the character length must be smaller than or equal to 50.";
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
     * Gets inf_nfe
     *
     * @return \NuvemFiscal\Model\NfeSefazInfNFe
     */
    public function getInfNfe()
    {
        return $this->container['inf_nfe'];
    }

    /**
     * Sets inf_nfe
     *
     * @param \NuvemFiscal\Model\NfeSefazInfNFe $inf_nfe inf_nfe
     *
     * @return self
     */
    public function setInfNfe($inf_nfe)
    {
        if (is_null($inf_nfe)) {
            throw new \InvalidArgumentException('non-nullable inf_nfe cannot be null');
        }
        $this->container['inf_nfe'] = $inf_nfe;

        return $this;
    }

    /**
     * Gets inf_nfe_supl
     *
     * @return \NuvemFiscal\Model\NfeSefazInfNFeSupl|null
     */
    public function getInfNfeSupl()
    {
        return $this->container['inf_nfe_supl'];
    }

    /**
     * Sets inf_nfe_supl
     *
     * @param \NuvemFiscal\Model\NfeSefazInfNFeSupl|null $inf_nfe_supl inf_nfe_supl
     *
     * @return self
     */
    public function setInfNfeSupl($inf_nfe_supl)
    {
        if (is_null($inf_nfe_supl)) {
            throw new \InvalidArgumentException('non-nullable inf_nfe_supl cannot be null');
        }
        $this->container['inf_nfe_supl'] = $inf_nfe_supl;

        return $this;
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
        if (is_null($ambiente)) {
            throw new \InvalidArgumentException('non-nullable ambiente cannot be null');
        }
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
        $this->container['ambiente'] = $ambiente;

        return $this;
    }

    /**
     * Gets referencia
     *
     * @return string|null
     */
    public function getReferencia()
    {
        return $this->container['referencia'];
    }

    /**
     * Sets referencia
     *
     * @param string|null $referencia Seu identificador único para este documento. Opcional, ajuda a evitar o envio duplicado de um mesmo documento.
     *
     * @return self
     */
    public function setReferencia($referencia)
    {
        if (is_null($referencia)) {
            array_push($this->openAPINullablesSetToNull, 'referencia');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('referencia', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($referencia) && (mb_strlen($referencia) > 50)) {
            throw new \InvalidArgumentException('invalid length for $referencia when calling NfePedidoEmissao., must be smaller than or equal to 50.');
        }

        $this->container['referencia'] = $referencia;

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


