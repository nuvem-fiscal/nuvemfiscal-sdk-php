<?php
/**
 * DfeSefazStatus
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
 * DfeSefazStatus Class Doc Comment
 *
 * @category Class
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class DfeSefazStatus implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DfeSefazStatus';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'autorizador' => 'string',
        'ambiente' => 'string',
        'data_hora_consulta' => '\DateTime',
        'codigo_status' => 'int',
        'motivo_status' => 'string',
        'tempo_medio_resposta' => 'int',
        'data_hora_retorno' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'autorizador' => null,
        'ambiente' => null,
        'data_hora_consulta' => 'date-time',
        'codigo_status' => null,
        'motivo_status' => null,
        'tempo_medio_resposta' => null,
        'data_hora_retorno' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'autorizador' => false,
        'ambiente' => false,
        'data_hora_consulta' => false,
        'codigo_status' => false,
        'motivo_status' => false,
        'tempo_medio_resposta' => true,
        'data_hora_retorno' => true
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
        'autorizador' => 'autorizador',
        'ambiente' => 'ambiente',
        'data_hora_consulta' => 'data_hora_consulta',
        'codigo_status' => 'codigo_status',
        'motivo_status' => 'motivo_status',
        'tempo_medio_resposta' => 'tempo_medio_resposta',
        'data_hora_retorno' => 'data_hora_retorno'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'autorizador' => 'setAutorizador',
        'ambiente' => 'setAmbiente',
        'data_hora_consulta' => 'setDataHoraConsulta',
        'codigo_status' => 'setCodigoStatus',
        'motivo_status' => 'setMotivoStatus',
        'tempo_medio_resposta' => 'setTempoMedioResposta',
        'data_hora_retorno' => 'setDataHoraRetorno'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'autorizador' => 'getAutorizador',
        'ambiente' => 'getAmbiente',
        'data_hora_consulta' => 'getDataHoraConsulta',
        'codigo_status' => 'getCodigoStatus',
        'motivo_status' => 'getMotivoStatus',
        'tempo_medio_resposta' => 'getTempoMedioResposta',
        'data_hora_retorno' => 'getDataHoraRetorno'
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

    public const AUTORIZADOR_AM = 'AM';
    public const AUTORIZADOR_BA = 'BA';
    public const AUTORIZADOR_CE = 'CE';
    public const AUTORIZADOR_GO = 'GO';
    public const AUTORIZADOR_MG = 'MG';
    public const AUTORIZADOR_MS = 'MS';
    public const AUTORIZADOR_MT = 'MT';
    public const AUTORIZADOR_PE = 'PE';
    public const AUTORIZADOR_PR = 'PR';
    public const AUTORIZADOR_RS = 'RS';
    public const AUTORIZADOR_SP = 'SP';
    public const AUTORIZADOR_SVAN = 'SVAN';
    public const AUTORIZADOR_SVRS = 'SVRS';
    public const AUTORIZADOR_SVCAN = 'SVCAN';
    public const AUTORIZADOR_SVCRS = 'SVCRS';
    public const AUTORIZADOR_AN = 'AN';
    public const AUTORIZADOR_SVSP = 'SVSP';
    public const AUTORIZADOR_SVCSP = 'SVCSP';
    public const AMBIENTE_HOMOLOGACAO = 'homologacao';
    public const AMBIENTE_PRODUCAO = 'producao';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAutorizadorAllowableValues()
    {
        return [
            self::AUTORIZADOR_AM,
            self::AUTORIZADOR_BA,
            self::AUTORIZADOR_CE,
            self::AUTORIZADOR_GO,
            self::AUTORIZADOR_MG,
            self::AUTORIZADOR_MS,
            self::AUTORIZADOR_MT,
            self::AUTORIZADOR_PE,
            self::AUTORIZADOR_PR,
            self::AUTORIZADOR_RS,
            self::AUTORIZADOR_SP,
            self::AUTORIZADOR_SVAN,
            self::AUTORIZADOR_SVRS,
            self::AUTORIZADOR_SVCAN,
            self::AUTORIZADOR_SVCRS,
            self::AUTORIZADOR_AN,
            self::AUTORIZADOR_SVSP,
            self::AUTORIZADOR_SVCSP,
        ];
    }

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
        $this->setIfExists('autorizador', $data ?? [], null);
        $this->setIfExists('ambiente', $data ?? [], null);
        $this->setIfExists('data_hora_consulta', $data ?? [], null);
        $this->setIfExists('codigo_status', $data ?? [], null);
        $this->setIfExists('motivo_status', $data ?? [], null);
        $this->setIfExists('tempo_medio_resposta', $data ?? [], null);
        $this->setIfExists('data_hora_retorno', $data ?? [], null);
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

        $allowedValues = $this->getAutorizadorAllowableValues();
        if (!is_null($this->container['autorizador']) && !in_array($this->container['autorizador'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'autorizador', must be one of '%s'",
                $this->container['autorizador'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getAmbienteAllowableValues();
        if (!is_null($this->container['ambiente']) && !in_array($this->container['ambiente'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'ambiente', must be one of '%s'",
                $this->container['ambiente'],
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
     * Gets autorizador
     *
     * @return string|null
     */
    public function getAutorizador()
    {
        return $this->container['autorizador'];
    }

    /**
     * Sets autorizador
     *
     * @param string|null $autorizador SEFAZ autorizadora responsável.
     *
     * @return self
     */
    public function setAutorizador($autorizador)
    {
        if (is_null($autorizador)) {
            throw new \InvalidArgumentException('non-nullable autorizador cannot be null');
        }
        $allowedValues = $this->getAutorizadorAllowableValues();
        if (!in_array($autorizador, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'autorizador', must be one of '%s'",
                    $autorizador,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['autorizador'] = $autorizador;

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
     * @param string|null $ambiente Identificação do Ambiente.
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
     * Gets data_hora_consulta
     *
     * @return \DateTime|null
     */
    public function getDataHoraConsulta()
    {
        return $this->container['data_hora_consulta'];
    }

    /**
     * Sets data_hora_consulta
     *
     * @param \DateTime|null $data_hora_consulta Data e hora da consulta.
     *
     * @return self
     */
    public function setDataHoraConsulta($data_hora_consulta)
    {
        if (is_null($data_hora_consulta)) {
            throw new \InvalidArgumentException('non-nullable data_hora_consulta cannot be null');
        }
        $this->container['data_hora_consulta'] = $data_hora_consulta;

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
     * @param int|null $codigo_status Código do status da mensagem enviada.
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
     * @param string|null $motivo_status Descrição literal do status do serviço solicitado.
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
     * Gets tempo_medio_resposta
     *
     * @return int|null
     */
    public function getTempoMedioResposta()
    {
        return $this->container['tempo_medio_resposta'];
    }

    /**
     * Sets tempo_medio_resposta
     *
     * @param int|null $tempo_medio_resposta Tempo médio de resposta do serviço (em segundos) dos últimos 5 minutos.
     *
     * @return self
     */
    public function setTempoMedioResposta($tempo_medio_resposta)
    {
        if (is_null($tempo_medio_resposta)) {
            array_push($this->openAPINullablesSetToNull, 'tempo_medio_resposta');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tempo_medio_resposta', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['tempo_medio_resposta'] = $tempo_medio_resposta;

        return $this;
    }

    /**
     * Gets data_hora_retorno
     *
     * @return \DateTime|null
     */
    public function getDataHoraRetorno()
    {
        return $this->container['data_hora_retorno'];
    }

    /**
     * Sets data_hora_retorno
     *
     * @param \DateTime|null $data_hora_retorno Data e hora prevista para o retorno dos serviços prestados.
     *
     * @return self
     */
    public function setDataHoraRetorno($data_hora_retorno)
    {
        if (is_null($data_hora_retorno)) {
            array_push($this->openAPINullablesSetToNull, 'data_hora_retorno');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('data_hora_retorno', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['data_hora_retorno'] = $data_hora_retorno;

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


