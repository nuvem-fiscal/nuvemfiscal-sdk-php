<?php
/**
 * DfeContribuinteInfCons
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
 * DfeContribuinteInfCons Class Doc Comment
 *
 * @category Class
 * @description Dados do Resultado do Dados do Pedido de Consulta de cadastro de contribuintes.
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class DfeContribuinteInfCons implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DfeContribuinteInfCons';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'codigo_status' => 'int',
        'motivo_status' => 'string',
        'uf' => 'string',
        'ie' => 'string',
        'cnpj' => 'string',
        'cpf' => 'string',
        'data_consulta' => '\DateTime',
        'uf_atendimento' => 'int',
        'informacoes_cadastrais' => '\NuvemFiscal\Model\DfeContribuinteInfCad[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'codigo_status' => null,
        'motivo_status' => null,
        'uf' => null,
        'ie' => null,
        'cnpj' => null,
        'cpf' => null,
        'data_consulta' => 'date-time',
        'uf_atendimento' => null,
        'informacoes_cadastrais' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'codigo_status' => true,
        'motivo_status' => true,
        'uf' => true,
        'ie' => true,
        'cnpj' => true,
        'cpf' => true,
        'data_consulta' => true,
        'uf_atendimento' => true,
        'informacoes_cadastrais' => false
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
        'codigo_status' => 'codigo_status',
        'motivo_status' => 'motivo_status',
        'uf' => 'uf',
        'ie' => 'ie',
        'cnpj' => 'cnpj',
        'cpf' => 'cpf',
        'data_consulta' => 'data_consulta',
        'uf_atendimento' => 'uf_atendimento',
        'informacoes_cadastrais' => 'informacoes_cadastrais'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'codigo_status' => 'setCodigoStatus',
        'motivo_status' => 'setMotivoStatus',
        'uf' => 'setUf',
        'ie' => 'setIe',
        'cnpj' => 'setCnpj',
        'cpf' => 'setCpf',
        'data_consulta' => 'setDataConsulta',
        'uf_atendimento' => 'setUfAtendimento',
        'informacoes_cadastrais' => 'setInformacoesCadastrais'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'codigo_status' => 'getCodigoStatus',
        'motivo_status' => 'getMotivoStatus',
        'uf' => 'getUf',
        'ie' => 'getIe',
        'cnpj' => 'getCnpj',
        'cpf' => 'getCpf',
        'data_consulta' => 'getDataConsulta',
        'uf_atendimento' => 'getUfAtendimento',
        'informacoes_cadastrais' => 'getInformacoesCadastrais'
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
        $this->setIfExists('codigo_status', $data ?? [], null);
        $this->setIfExists('motivo_status', $data ?? [], null);
        $this->setIfExists('uf', $data ?? [], null);
        $this->setIfExists('ie', $data ?? [], null);
        $this->setIfExists('cnpj', $data ?? [], null);
        $this->setIfExists('cpf', $data ?? [], null);
        $this->setIfExists('data_consulta', $data ?? [], null);
        $this->setIfExists('uf_atendimento', $data ?? [], null);
        $this->setIfExists('informacoes_cadastrais', $data ?? [], null);
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

        if ($this->container['codigo_status'] === null) {
            $invalidProperties[] = "'codigo_status' can't be null";
        }
        if (($this->container['codigo_status'] > 999)) {
            $invalidProperties[] = "invalid value for 'codigo_status', must be smaller than or equal to 999.";
        }

        if (($this->container['codigo_status'] < 0)) {
            $invalidProperties[] = "invalid value for 'codigo_status', must be bigger than or equal to 0.";
        }

        if ($this->container['motivo_status'] === null) {
            $invalidProperties[] = "'motivo_status' can't be null";
        }
        if ((mb_strlen($this->container['motivo_status']) > 255)) {
            $invalidProperties[] = "invalid value for 'motivo_status', the character length must be smaller than or equal to 255.";
        }

        if ((mb_strlen($this->container['motivo_status']) < 1)) {
            $invalidProperties[] = "invalid value for 'motivo_status', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['uf'] === null) {
            $invalidProperties[] = "'uf' can't be null";
        }
        if ($this->container['data_consulta'] === null) {
            $invalidProperties[] = "'data_consulta' can't be null";
        }
        if ($this->container['uf_atendimento'] === null) {
            $invalidProperties[] = "'uf_atendimento' can't be null";
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
     * Gets codigo_status
     *
     * @return int
     */
    public function getCodigoStatus()
    {
        return $this->container['codigo_status'];
    }

    /**
     * Sets codigo_status
     *
     * @param int $codigo_status Código do status da mensagem enviada.
     *
     * @return self
     */
    public function setCodigoStatus($codigo_status)
    {
        if (is_null($codigo_status)) {
            array_push($this->openAPINullablesSetToNull, 'codigo_status');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('codigo_status', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($codigo_status) && ($codigo_status > 999)) {
            throw new \InvalidArgumentException('invalid value for $codigo_status when calling DfeContribuinteInfCons., must be smaller than or equal to 999.');
        }
        if (!is_null($codigo_status) && ($codigo_status < 0)) {
            throw new \InvalidArgumentException('invalid value for $codigo_status when calling DfeContribuinteInfCons., must be bigger than or equal to 0.');
        }

        $this->container['codigo_status'] = $codigo_status;

        return $this;
    }

    /**
     * Gets motivo_status
     *
     * @return string
     */
    public function getMotivoStatus()
    {
        return $this->container['motivo_status'];
    }

    /**
     * Sets motivo_status
     *
     * @param string $motivo_status Descrição literal do status do serviço solicitado.
     *
     * @return self
     */
    public function setMotivoStatus($motivo_status)
    {
        if (is_null($motivo_status)) {
            array_push($this->openAPINullablesSetToNull, 'motivo_status');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('motivo_status', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($motivo_status) && (mb_strlen($motivo_status) > 255)) {
            throw new \InvalidArgumentException('invalid length for $motivo_status when calling DfeContribuinteInfCons., must be smaller than or equal to 255.');
        }
        if (!is_null($motivo_status) && (mb_strlen($motivo_status) < 1)) {
            throw new \InvalidArgumentException('invalid length for $motivo_status when calling DfeContribuinteInfCons., must be bigger than or equal to 1.');
        }

        $this->container['motivo_status'] = $motivo_status;

        return $this;
    }

    /**
     * Gets uf
     *
     * @return string
     */
    public function getUf()
    {
        return $this->container['uf'];
    }

    /**
     * Sets uf
     *
     * @param string $uf sigla da UF consultada, utilizar SU para SUFRAMA.
     *
     * @return self
     */
    public function setUf($uf)
    {
        if (is_null($uf)) {
            array_push($this->openAPINullablesSetToNull, 'uf');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('uf', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['uf'] = $uf;

        return $this;
    }

    /**
     * Gets ie
     *
     * @return string|null
     */
    public function getIe()
    {
        return $this->container['ie'];
    }

    /**
     * Sets ie
     *
     * @param string|null $ie Inscrição Estadual do contribuinte.
     *
     * @return self
     */
    public function setIe($ie)
    {
        if (is_null($ie)) {
            array_push($this->openAPINullablesSetToNull, 'ie');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ie', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ie'] = $ie;

        return $this;
    }

    /**
     * Gets cnpj
     *
     * @return string|null
     */
    public function getCnpj()
    {
        return $this->container['cnpj'];
    }

    /**
     * Sets cnpj
     *
     * @param string|null $cnpj CNPJ do contribuinte.
     *
     * @return self
     */
    public function setCnpj($cnpj)
    {
        if (is_null($cnpj)) {
            array_push($this->openAPINullablesSetToNull, 'cnpj');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('cnpj', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['cnpj'] = $cnpj;

        return $this;
    }

    /**
     * Gets cpf
     *
     * @return string|null
     */
    public function getCpf()
    {
        return $this->container['cpf'];
    }

    /**
     * Sets cpf
     *
     * @param string|null $cpf CPF do contribuinte.
     *
     * @return self
     */
    public function setCpf($cpf)
    {
        if (is_null($cpf)) {
            array_push($this->openAPINullablesSetToNull, 'cpf');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('cpf', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['cpf'] = $cpf;

        return $this;
    }

    /**
     * Gets data_consulta
     *
     * @return \DateTime
     */
    public function getDataConsulta()
    {
        return $this->container['data_consulta'];
    }

    /**
     * Sets data_consulta
     *
     * @param \DateTime $data_consulta Data da Consulta.
     *
     * @return self
     */
    public function setDataConsulta($data_consulta)
    {
        if (is_null($data_consulta)) {
            array_push($this->openAPINullablesSetToNull, 'data_consulta');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('data_consulta', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['data_consulta'] = $data_consulta;

        return $this;
    }

    /**
     * Gets uf_atendimento
     *
     * @return int
     */
    public function getUfAtendimento()
    {
        return $this->container['uf_atendimento'];
    }

    /**
     * Sets uf_atendimento
     *
     * @param int $uf_atendimento código da UF de atendimento.
     *
     * @return self
     */
    public function setUfAtendimento($uf_atendimento)
    {
        if (is_null($uf_atendimento)) {
            array_push($this->openAPINullablesSetToNull, 'uf_atendimento');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('uf_atendimento', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['uf_atendimento'] = $uf_atendimento;

        return $this;
    }

    /**
     * Gets informacoes_cadastrais
     *
     * @return \NuvemFiscal\Model\DfeContribuinteInfCad[]|null
     */
    public function getInformacoesCadastrais()
    {
        return $this->container['informacoes_cadastrais'];
    }

    /**
     * Sets informacoes_cadastrais
     *
     * @param \NuvemFiscal\Model\DfeContribuinteInfCad[]|null $informacoes_cadastrais informacoes_cadastrais
     *
     * @return self
     */
    public function setInformacoesCadastrais($informacoes_cadastrais)
    {
        if (is_null($informacoes_cadastrais)) {
            throw new \InvalidArgumentException('non-nullable informacoes_cadastrais cannot be null');
        }
        $this->container['informacoes_cadastrais'] = $informacoes_cadastrais;

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

