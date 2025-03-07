<?php
/**
 * CnpjEndereco
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
 * CnpjEndereco Class Doc Comment
 *
 * @category Class
 * @description Endereço do estabelecimento.
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CnpjEndereco implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CnpjEndereco';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'tipo_logradouro' => 'string',
        'logradouro' => 'string',
        'numero' => 'string',
        'complemento' => 'string',
        'bairro' => 'string',
        'cep' => 'string',
        'uf' => 'string',
        'municipio' => '\NuvemFiscal\Model\CnpjMunicipio'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'tipo_logradouro' => null,
        'logradouro' => null,
        'numero' => null,
        'complemento' => null,
        'bairro' => null,
        'cep' => null,
        'uf' => null,
        'municipio' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'tipo_logradouro' => false,
        'logradouro' => false,
        'numero' => false,
        'complemento' => false,
        'bairro' => false,
        'cep' => false,
        'uf' => false,
        'municipio' => false
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
        'tipo_logradouro' => 'tipo_logradouro',
        'logradouro' => 'logradouro',
        'numero' => 'numero',
        'complemento' => 'complemento',
        'bairro' => 'bairro',
        'cep' => 'cep',
        'uf' => 'uf',
        'municipio' => 'municipio'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'tipo_logradouro' => 'setTipoLogradouro',
        'logradouro' => 'setLogradouro',
        'numero' => 'setNumero',
        'complemento' => 'setComplemento',
        'bairro' => 'setBairro',
        'cep' => 'setCep',
        'uf' => 'setUf',
        'municipio' => 'setMunicipio'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'tipo_logradouro' => 'getTipoLogradouro',
        'logradouro' => 'getLogradouro',
        'numero' => 'getNumero',
        'complemento' => 'getComplemento',
        'bairro' => 'getBairro',
        'cep' => 'getCep',
        'uf' => 'getUf',
        'municipio' => 'getMunicipio'
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
        $this->setIfExists('tipo_logradouro', $data ?? [], null);
        $this->setIfExists('logradouro', $data ?? [], null);
        $this->setIfExists('numero', $data ?? [], null);
        $this->setIfExists('complemento', $data ?? [], null);
        $this->setIfExists('bairro', $data ?? [], null);
        $this->setIfExists('cep', $data ?? [], null);
        $this->setIfExists('uf', $data ?? [], null);
        $this->setIfExists('municipio', $data ?? [], null);
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
     * Gets tipo_logradouro
     *
     * @return string|null
     */
    public function getTipoLogradouro()
    {
        return $this->container['tipo_logradouro'];
    }

    /**
     * Sets tipo_logradouro
     *
     * @param string|null $tipo_logradouro Descrição do tipo de logradouro.
     *
     * @return self
     */
    public function setTipoLogradouro($tipo_logradouro)
    {
        if (is_null($tipo_logradouro)) {
            throw new \InvalidArgumentException('non-nullable tipo_logradouro cannot be null');
        }
        $this->container['tipo_logradouro'] = $tipo_logradouro;

        return $this;
    }

    /**
     * Gets logradouro
     *
     * @return string|null
     */
    public function getLogradouro()
    {
        return $this->container['logradouro'];
    }

    /**
     * Sets logradouro
     *
     * @param string|null $logradouro Nome do logradouro onde se localiza o estabelecimento.
     *
     * @return self
     */
    public function setLogradouro($logradouro)
    {
        if (is_null($logradouro)) {
            throw new \InvalidArgumentException('non-nullable logradouro cannot be null');
        }
        $this->container['logradouro'] = $logradouro;

        return $this;
    }

    /**
     * Gets numero
     *
     * @return string|null
     */
    public function getNumero()
    {
        return $this->container['numero'];
    }

    /**
     * Sets numero
     *
     * @param string|null $numero Número onde se localiza o estabelecimento. Quando não houver  preenchimento do número haverá ‘S/N’.
     *
     * @return self
     */
    public function setNumero($numero)
    {
        if (is_null($numero)) {
            throw new \InvalidArgumentException('non-nullable numero cannot be null');
        }
        $this->container['numero'] = $numero;

        return $this;
    }

    /**
     * Gets complemento
     *
     * @return string|null
     */
    public function getComplemento()
    {
        return $this->container['complemento'];
    }

    /**
     * Sets complemento
     *
     * @param string|null $complemento Complemento para o endereço de localização do estabelecimento.
     *
     * @return self
     */
    public function setComplemento($complemento)
    {
        if (is_null($complemento)) {
            throw new \InvalidArgumentException('non-nullable complemento cannot be null');
        }
        $this->container['complemento'] = $complemento;

        return $this;
    }

    /**
     * Gets bairro
     *
     * @return string|null
     */
    public function getBairro()
    {
        return $this->container['bairro'];
    }

    /**
     * Sets bairro
     *
     * @param string|null $bairro Bairro onde se localiza o estabelecimento.
     *
     * @return self
     */
    public function setBairro($bairro)
    {
        if (is_null($bairro)) {
            throw new \InvalidArgumentException('non-nullable bairro cannot be null');
        }
        $this->container['bairro'] = $bairro;

        return $this;
    }

    /**
     * Gets cep
     *
     * @return string|null
     */
    public function getCep()
    {
        return $this->container['cep'];
    }

    /**
     * Sets cep
     *
     * @param string|null $cep Código de endereçamento postal referente ao logradouro no qual o  estabelecimento esta localizado.
     *
     * @return self
     */
    public function setCep($cep)
    {
        if (is_null($cep)) {
            throw new \InvalidArgumentException('non-nullable cep cannot be null');
        }
        $this->container['cep'] = $cep;

        return $this;
    }

    /**
     * Gets uf
     *
     * @return string|null
     */
    public function getUf()
    {
        return $this->container['uf'];
    }

    /**
     * Sets uf
     *
     * @param string|null $uf Sigla da unidade da federação em que se encontra o estabelecimento.
     *
     * @return self
     */
    public function setUf($uf)
    {
        if (is_null($uf)) {
            throw new \InvalidArgumentException('non-nullable uf cannot be null');
        }
        $this->container['uf'] = $uf;

        return $this;
    }

    /**
     * Gets municipio
     *
     * @return \NuvemFiscal\Model\CnpjMunicipio|null
     */
    public function getMunicipio()
    {
        return $this->container['municipio'];
    }

    /**
     * Sets municipio
     *
     * @param \NuvemFiscal\Model\CnpjMunicipio|null $municipio municipio
     *
     * @return self
     */
    public function setMunicipio($municipio)
    {
        if (is_null($municipio)) {
            throw new \InvalidArgumentException('non-nullable municipio cannot be null');
        }
        $this->container['municipio'] = $municipio;

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


