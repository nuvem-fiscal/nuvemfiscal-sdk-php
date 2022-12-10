<?php
/**
 * DfeCancelamento
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
 * DfeCancelamento Class Doc Comment
 *
 * @category Class
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class DfeCancelamento implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DfeCancelamento';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'justificativa' => 'string',
        'id' => 'string',
        'ambiente' => 'string',
        'status' => 'string',
        'autor' => '\NuvemFiscal\Model\DfeAutorEvento',
        'chave_acesso' => 'string',
        'data_evento' => '\DateTime',
        'numero_sequencial' => 'int',
        'data_recebimento' => '\DateTime',
        'codigo_status' => 'int',
        'motivo_status' => 'string',
        'numero_protocolo' => 'string',
        'codigo_mensagem' => 'int',
        'mensagem' => 'string',
        'tipo_evento' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'justificativa' => null,
        'id' => null,
        'ambiente' => null,
        'status' => null,
        'autor' => null,
        'chave_acesso' => null,
        'data_evento' => 'date-time',
        'numero_sequencial' => null,
        'data_recebimento' => 'date-time',
        'codigo_status' => null,
        'motivo_status' => null,
        'numero_protocolo' => null,
        'codigo_mensagem' => null,
        'mensagem' => null,
        'tipo_evento' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'justificativa' => false,
		'id' => false,
		'ambiente' => false,
		'status' => false,
		'autor' => false,
		'chave_acesso' => false,
		'data_evento' => false,
		'numero_sequencial' => false,
		'data_recebimento' => false,
		'codigo_status' => false,
		'motivo_status' => false,
		'numero_protocolo' => false,
		'codigo_mensagem' => false,
		'mensagem' => false,
		'tipo_evento' => false
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
        'justificativa' => 'justificativa',
        'id' => 'id',
        'ambiente' => 'ambiente',
        'status' => 'status',
        'autor' => 'autor',
        'chave_acesso' => 'chave_acesso',
        'data_evento' => 'data_evento',
        'numero_sequencial' => 'numero_sequencial',
        'data_recebimento' => 'data_recebimento',
        'codigo_status' => 'codigo_status',
        'motivo_status' => 'motivo_status',
        'numero_protocolo' => 'numero_protocolo',
        'codigo_mensagem' => 'codigo_mensagem',
        'mensagem' => 'mensagem',
        'tipo_evento' => 'tipo_evento'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'justificativa' => 'setJustificativa',
        'id' => 'setId',
        'ambiente' => 'setAmbiente',
        'status' => 'setStatus',
        'autor' => 'setAutor',
        'chave_acesso' => 'setChaveAcesso',
        'data_evento' => 'setDataEvento',
        'numero_sequencial' => 'setNumeroSequencial',
        'data_recebimento' => 'setDataRecebimento',
        'codigo_status' => 'setCodigoStatus',
        'motivo_status' => 'setMotivoStatus',
        'numero_protocolo' => 'setNumeroProtocolo',
        'codigo_mensagem' => 'setCodigoMensagem',
        'mensagem' => 'setMensagem',
        'tipo_evento' => 'setTipoEvento'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'justificativa' => 'getJustificativa',
        'id' => 'getId',
        'ambiente' => 'getAmbiente',
        'status' => 'getStatus',
        'autor' => 'getAutor',
        'chave_acesso' => 'getChaveAcesso',
        'data_evento' => 'getDataEvento',
        'numero_sequencial' => 'getNumeroSequencial',
        'data_recebimento' => 'getDataRecebimento',
        'codigo_status' => 'getCodigoStatus',
        'motivo_status' => 'getMotivoStatus',
        'numero_protocolo' => 'getNumeroProtocolo',
        'codigo_mensagem' => 'getCodigoMensagem',
        'mensagem' => 'getMensagem',
        'tipo_evento' => 'getTipoEvento'
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
    public const STATUS_PENDENTE = 'pendente';
    public const STATUS_REGISTRADO = 'registrado';
    public const STATUS_REJEITADO = 'rejeitado';
    public const STATUS_ERRO = 'erro';

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
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_PENDENTE,
            self::STATUS_REGISTRADO,
            self::STATUS_REJEITADO,
            self::STATUS_ERRO,
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
        $this->setIfExists('justificativa', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('ambiente', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('autor', $data ?? [], null);
        $this->setIfExists('chave_acesso', $data ?? [], null);
        $this->setIfExists('data_evento', $data ?? [], null);
        $this->setIfExists('numero_sequencial', $data ?? [], null);
        $this->setIfExists('data_recebimento', $data ?? [], null);
        $this->setIfExists('codigo_status', $data ?? [], null);
        $this->setIfExists('motivo_status', $data ?? [], null);
        $this->setIfExists('numero_protocolo', $data ?? [], null);
        $this->setIfExists('codigo_mensagem', $data ?? [], null);
        $this->setIfExists('mensagem', $data ?? [], null);
        $this->setIfExists('tipo_evento', $data ?? [], null);
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

        $allowedValues = $this->getAmbienteAllowableValues();
        if (!is_null($this->container['ambiente']) && !in_array($this->container['ambiente'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'ambiente', must be one of '%s'",
                $this->container['ambiente'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
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
     * Gets justificativa
     *
     * @return string|null
     */
    public function getJustificativa()
    {
        return $this->container['justificativa'];
    }

    /**
     * Sets justificativa
     *
     * @param string|null $justificativa Justificativa do cancelamento.
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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id ID único gerado pela Nuvem Fiscal para este evento.
     *
     * @return self
     */
    public function setId($id)
    {

        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets ambiente
     *
     * @return string|null
     */
    public function getAmbiente()
    {
        return $this->container['ambiente'];
    }

    /**
     * Sets ambiente
     *
     * @param string|null $ambiente Identificação do ambiente.
     *
     * @return self
     */
    public function setAmbiente($ambiente)
    {
        $allowedValues = $this->getAmbienteAllowableValues();
        if (!is_null($ambiente) && !in_array($ambiente, $allowedValues, true)) {
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
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status Status do Evento.
     *
     * @return self
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }

        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets autor
     *
     * @return \NuvemFiscal\Model\DfeAutorEvento|null
     */
    public function getAutor()
    {
        return $this->container['autor'];
    }

    /**
     * Sets autor
     *
     * @param \NuvemFiscal\Model\DfeAutorEvento|null $autor autor
     *
     * @return self
     */
    public function setAutor($autor)
    {

        if (is_null($autor)) {
            throw new \InvalidArgumentException('non-nullable autor cannot be null');
        }

        $this->container['autor'] = $autor;

        return $this;
    }

    /**
     * Gets chave_acesso
     *
     * @return string|null
     */
    public function getChaveAcesso()
    {
        return $this->container['chave_acesso'];
    }

    /**
     * Sets chave_acesso
     *
     * @param string|null $chave_acesso Chave de Acesso do documento vinculado ao evento.
     *
     * @return self
     */
    public function setChaveAcesso($chave_acesso)
    {

        if (is_null($chave_acesso)) {
            throw new \InvalidArgumentException('non-nullable chave_acesso cannot be null');
        }

        $this->container['chave_acesso'] = $chave_acesso;

        return $this;
    }

    /**
     * Gets data_evento
     *
     * @return \DateTime|null
     */
    public function getDataEvento()
    {
        return $this->container['data_evento'];
    }

    /**
     * Sets data_evento
     *
     * @param \DateTime|null $data_evento Data e hora do Evento.
     *
     * @return self
     */
    public function setDataEvento($data_evento)
    {

        if (is_null($data_evento)) {
            throw new \InvalidArgumentException('non-nullable data_evento cannot be null');
        }

        $this->container['data_evento'] = $data_evento;

        return $this;
    }

    /**
     * Gets numero_sequencial
     *
     * @return int|null
     */
    public function getNumeroSequencial()
    {
        return $this->container['numero_sequencial'];
    }

    /**
     * Sets numero_sequencial
     *
     * @param int|null $numero_sequencial Sequencial do evento para o mesmo tipo de evento.
     *
     * @return self
     */
    public function setNumeroSequencial($numero_sequencial)
    {

        if (is_null($numero_sequencial)) {
            throw new \InvalidArgumentException('non-nullable numero_sequencial cannot be null');
        }

        $this->container['numero_sequencial'] = $numero_sequencial;

        return $this;
    }

    /**
     * Gets data_recebimento
     *
     * @return \DateTime|null
     */
    public function getDataRecebimento()
    {
        return $this->container['data_recebimento'];
    }

    /**
     * Sets data_recebimento
     *
     * @param \DateTime|null $data_recebimento Data e hora do recebimento do Evento pela SEFAZ.
     *
     * @return self
     */
    public function setDataRecebimento($data_recebimento)
    {

        if (is_null($data_recebimento)) {
            throw new \InvalidArgumentException('non-nullable data_recebimento cannot be null');
        }

        $this->container['data_recebimento'] = $data_recebimento;

        return $this;
    }

    /**
     * Gets codigo_status
     *
     * @return int|null
     */
    public function getCodigoStatus()
    {
        return $this->container['codigo_status'];
    }

    /**
     * Sets codigo_status
     *
     * @param int|null $codigo_status Código do status de registro do Evento.
     *
     * @return self
     */
    public function setCodigoStatus($codigo_status)
    {

        if (is_null($codigo_status)) {
            throw new \InvalidArgumentException('non-nullable codigo_status cannot be null');
        }

        $this->container['codigo_status'] = $codigo_status;

        return $this;
    }

    /**
     * Gets motivo_status
     *
     * @return string|null
     */
    public function getMotivoStatus()
    {
        return $this->container['motivo_status'];
    }

    /**
     * Sets motivo_status
     *
     * @param string|null $motivo_status Descrição literal do status do registro do Evento.
     *
     * @return self
     */
    public function setMotivoStatus($motivo_status)
    {

        if (is_null($motivo_status)) {
            throw new \InvalidArgumentException('non-nullable motivo_status cannot be null');
        }

        $this->container['motivo_status'] = $motivo_status;

        return $this;
    }

    /**
     * Gets numero_protocolo
     *
     * @return string|null
     */
    public function getNumeroProtocolo()
    {
        return $this->container['numero_protocolo'];
    }

    /**
     * Sets numero_protocolo
     *
     * @param string|null $numero_protocolo Número do Protocolo de registro do Evento.
     *
     * @return self
     */
    public function setNumeroProtocolo($numero_protocolo)
    {

        if (is_null($numero_protocolo)) {
            throw new \InvalidArgumentException('non-nullable numero_protocolo cannot be null');
        }

        $this->container['numero_protocolo'] = $numero_protocolo;

        return $this;
    }

    /**
     * Gets codigo_mensagem
     *
     * @return int|null
     */
    public function getCodigoMensagem()
    {
        return $this->container['codigo_mensagem'];
    }

    /**
     * Sets codigo_mensagem
     *
     * @param int|null $codigo_mensagem Código da Mensagem.
     *
     * @return self
     */
    public function setCodigoMensagem($codigo_mensagem)
    {

        if (is_null($codigo_mensagem)) {
            throw new \InvalidArgumentException('non-nullable codigo_mensagem cannot be null');
        }

        $this->container['codigo_mensagem'] = $codigo_mensagem;

        return $this;
    }

    /**
     * Gets mensagem
     *
     * @return string|null
     */
    public function getMensagem()
    {
        return $this->container['mensagem'];
    }

    /**
     * Sets mensagem
     *
     * @param string|null $mensagem Mensagem da SEFAZ para o emissor.
     *
     * @return self
     */
    public function setMensagem($mensagem)
    {

        if (is_null($mensagem)) {
            throw new \InvalidArgumentException('non-nullable mensagem cannot be null');
        }

        $this->container['mensagem'] = $mensagem;

        return $this;
    }

    /**
     * Gets tipo_evento
     *
     * @return string|null
     */
    public function getTipoEvento()
    {
        return $this->container['tipo_evento'];
    }

    /**
     * Sets tipo_evento
     *
     * @param string|null $tipo_evento tipo_evento
     *
     * @return self
     */
    public function setTipoEvento($tipo_evento)
    {

        if (is_null($tipo_evento)) {
            throw new \InvalidArgumentException('non-nullable tipo_evento cannot be null');
        }

        $this->container['tipo_evento'] = $tipo_evento;

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


