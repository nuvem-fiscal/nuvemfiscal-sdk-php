<?php
/**
 * DistribuicaoNfeDocumento
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
 * DistribuicaoNfeDocumento Class Doc Comment
 *
 * @category Class
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class DistribuicaoNfeDocumento implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DistribuicaoNfeDocumento';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'created_at' => '\DateTime',
        'nsu' => 'int',
        'schema' => 'string',
        'tipo_documento' => 'string',
        'chave_acesso' => 'string',
        'resumo' => 'bool',
        'tipo_evento' => 'string',
        'numero_sequencial' => 'int',
        'data_evento' => '\DateTime',
        'data_recebimento' => '\DateTime',
        'numero_protocolo' => 'string',
        'tipo_nfe' => 'int',
        'valor_nfe' => 'float',
        'digest_value' => 'string',
        'emitente_cpf_cnpj' => 'string',
        'emitente_nome_razao_social' => 'string',
        'emitente_inscricao_estadual' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'created_at' => 'date-time',
        'nsu' => null,
        'schema' => null,
        'tipo_documento' => null,
        'chave_acesso' => null,
        'resumo' => null,
        'tipo_evento' => null,
        'numero_sequencial' => null,
        'data_evento' => 'date-time',
        'data_recebimento' => 'date-time',
        'numero_protocolo' => null,
        'tipo_nfe' => null,
        'valor_nfe' => null,
        'digest_value' => null,
        'emitente_cpf_cnpj' => null,
        'emitente_nome_razao_social' => null,
        'emitente_inscricao_estadual' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'created_at' => false,
        'nsu' => true,
        'schema' => false,
        'tipo_documento' => true,
        'chave_acesso' => true,
        'resumo' => true,
        'tipo_evento' => true,
        'numero_sequencial' => true,
        'data_evento' => true,
        'data_recebimento' => true,
        'numero_protocolo' => true,
        'tipo_nfe' => true,
        'valor_nfe' => true,
        'digest_value' => true,
        'emitente_cpf_cnpj' => true,
        'emitente_nome_razao_social' => true,
        'emitente_inscricao_estadual' => true
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
        'id' => 'id',
        'created_at' => 'created_at',
        'nsu' => 'nsu',
        'schema' => 'schema',
        'tipo_documento' => 'tipo_documento',
        'chave_acesso' => 'chave_acesso',
        'resumo' => 'resumo',
        'tipo_evento' => 'tipo_evento',
        'numero_sequencial' => 'numero_sequencial',
        'data_evento' => 'data_evento',
        'data_recebimento' => 'data_recebimento',
        'numero_protocolo' => 'numero_protocolo',
        'tipo_nfe' => 'tipo_nfe',
        'valor_nfe' => 'valor_nfe',
        'digest_value' => 'digest_value',
        'emitente_cpf_cnpj' => 'emitente_cpf_cnpj',
        'emitente_nome_razao_social' => 'emitente_nome_razao_social',
        'emitente_inscricao_estadual' => 'emitente_inscricao_estadual'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'created_at' => 'setCreatedAt',
        'nsu' => 'setNsu',
        'schema' => 'setSchema',
        'tipo_documento' => 'setTipoDocumento',
        'chave_acesso' => 'setChaveAcesso',
        'resumo' => 'setResumo',
        'tipo_evento' => 'setTipoEvento',
        'numero_sequencial' => 'setNumeroSequencial',
        'data_evento' => 'setDataEvento',
        'data_recebimento' => 'setDataRecebimento',
        'numero_protocolo' => 'setNumeroProtocolo',
        'tipo_nfe' => 'setTipoNfe',
        'valor_nfe' => 'setValorNfe',
        'digest_value' => 'setDigestValue',
        'emitente_cpf_cnpj' => 'setEmitenteCpfCnpj',
        'emitente_nome_razao_social' => 'setEmitenteNomeRazaoSocial',
        'emitente_inscricao_estadual' => 'setEmitenteInscricaoEstadual'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'created_at' => 'getCreatedAt',
        'nsu' => 'getNsu',
        'schema' => 'getSchema',
        'tipo_documento' => 'getTipoDocumento',
        'chave_acesso' => 'getChaveAcesso',
        'resumo' => 'getResumo',
        'tipo_evento' => 'getTipoEvento',
        'numero_sequencial' => 'getNumeroSequencial',
        'data_evento' => 'getDataEvento',
        'data_recebimento' => 'getDataRecebimento',
        'numero_protocolo' => 'getNumeroProtocolo',
        'tipo_nfe' => 'getTipoNfe',
        'valor_nfe' => 'getValorNfe',
        'digest_value' => 'getDigestValue',
        'emitente_cpf_cnpj' => 'getEmitenteCpfCnpj',
        'emitente_nome_razao_social' => 'getEmitenteNomeRazaoSocial',
        'emitente_inscricao_estadual' => 'getEmitenteInscricaoEstadual'
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

    public const TIPO_DOCUMENTO_NOTA = 'nota';
    public const TIPO_DOCUMENTO_EVENTO = 'evento';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTipoDocumentoAllowableValues()
    {
        return [
            self::TIPO_DOCUMENTO_NOTA,
            self::TIPO_DOCUMENTO_EVENTO,
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('nsu', $data ?? [], null);
        $this->setIfExists('schema', $data ?? [], null);
        $this->setIfExists('tipo_documento', $data ?? [], null);
        $this->setIfExists('chave_acesso', $data ?? [], null);
        $this->setIfExists('resumo', $data ?? [], null);
        $this->setIfExists('tipo_evento', $data ?? [], null);
        $this->setIfExists('numero_sequencial', $data ?? [], null);
        $this->setIfExists('data_evento', $data ?? [], null);
        $this->setIfExists('data_recebimento', $data ?? [], null);
        $this->setIfExists('numero_protocolo', $data ?? [], null);
        $this->setIfExists('tipo_nfe', $data ?? [], null);
        $this->setIfExists('valor_nfe', $data ?? [], null);
        $this->setIfExists('digest_value', $data ?? [], null);
        $this->setIfExists('emitente_cpf_cnpj', $data ?? [], null);
        $this->setIfExists('emitente_nome_razao_social', $data ?? [], null);
        $this->setIfExists('emitente_inscricao_estadual', $data ?? [], null);
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

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['schema'] === null) {
            $invalidProperties[] = "'schema' can't be null";
        }
        $allowedValues = $this->getTipoDocumentoAllowableValues();
        if (!is_null($this->container['tipo_documento']) && !in_array($this->container['tipo_documento'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'tipo_documento', must be one of '%s'",
                $this->container['tipo_documento'],
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id ID único gerado pela Nuvem Fiscal para identificar o documento.
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
     * Gets created_at
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime|null $created_at Data/hora em que o documento foi criado na Nuvem Fiscal. Representado no formato <a href=\"https://en.wikipedia.org/wiki/ISO_8601\" target=\"blank\">`ISO 8601`</a>.
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        if (is_null($created_at)) {
            throw new \InvalidArgumentException('non-nullable created_at cannot be null');
        }
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets nsu
     *
     * @return int|null
     */
    public function getNsu()
    {
        return $this->container['nsu'];
    }

    /**
     * Sets nsu
     *
     * @param int|null $nsu NSU do documento fiscal.
     *
     * @return self
     */
    public function setNsu($nsu)
    {
        if (is_null($nsu)) {
            array_push($this->openAPINullablesSetToNull, 'nsu');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('nsu', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['nsu'] = $nsu;

        return $this;
    }

    /**
     * Gets schema
     *
     * @return string
     */
    public function getSchema()
    {
        return $this->container['schema'];
    }

    /**
     * Sets schema
     *
     * @param string $schema Identificação do Schema XML que será utilizado para validar o XML existente no conteúdo da tag docZip. Vai identificar o tipo do documento e sua versão. Exemplos: resNFe_v1.00.xsd, procNFe_v3.10.xsd, resEvento_1.00.xsd, procEventoNFe_v1.00.xsd.
     *
     * @return self
     */
    public function setSchema($schema)
    {
        if (is_null($schema)) {
            throw new \InvalidArgumentException('non-nullable schema cannot be null');
        }
        $this->container['schema'] = $schema;

        return $this;
    }

    /**
     * Gets tipo_documento
     *
     * @return string|null
     */
    public function getTipoDocumento()
    {
        return $this->container['tipo_documento'];
    }

    /**
     * Sets tipo_documento
     *
     * @param string|null $tipo_documento Tipo do documento de interesse da pessoa ou empresa.
     *
     * @return self
     */
    public function setTipoDocumento($tipo_documento)
    {
        if (is_null($tipo_documento)) {
            array_push($this->openAPINullablesSetToNull, 'tipo_documento');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tipo_documento', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getTipoDocumentoAllowableValues();
        if (!is_null($tipo_documento) && !in_array($tipo_documento, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'tipo_documento', must be one of '%s'",
                    $tipo_documento,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['tipo_documento'] = $tipo_documento;

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
     * @param string|null $chave_acesso Chave de Acesso da NF-e.
     *
     * @return self
     */
    public function setChaveAcesso($chave_acesso)
    {
        if (is_null($chave_acesso)) {
            array_push($this->openAPINullablesSetToNull, 'chave_acesso');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('chave_acesso', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['chave_acesso'] = $chave_acesso;

        return $this;
    }

    /**
     * Gets resumo
     *
     * @return bool|null
     */
    public function getResumo()
    {
        return $this->container['resumo'];
    }

    /**
     * Sets resumo
     *
     * @param bool|null $resumo Indica se o documento distribuído está em sua forma resumida.
     *
     * @return self
     */
    public function setResumo($resumo)
    {
        if (is_null($resumo)) {
            array_push($this->openAPINullablesSetToNull, 'resumo');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('resumo', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['resumo'] = $resumo;

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
     * @param string|null $tipo_evento Tipo do evento.
     *
     * @return self
     */
    public function setTipoEvento($tipo_evento)
    {
        if (is_null($tipo_evento)) {
            array_push($this->openAPINullablesSetToNull, 'tipo_evento');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tipo_evento', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['tipo_evento'] = $tipo_evento;

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
     * @param int|null $numero_sequencial Número sequencial do evento para o mesmo tipo de evento.
     *
     * @return self
     */
    public function setNumeroSequencial($numero_sequencial)
    {
        if (is_null($numero_sequencial)) {
            array_push($this->openAPINullablesSetToNull, 'numero_sequencial');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('numero_sequencial', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['numero_sequencial'] = $numero_sequencial;

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
     * @param \DateTime|null $data_evento Data e hora do evento.
     *
     * @return self
     */
    public function setDataEvento($data_evento)
    {
        if (is_null($data_evento)) {
            array_push($this->openAPINullablesSetToNull, 'data_evento');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('data_evento', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['data_evento'] = $data_evento;

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
     * @param \DateTime|null $data_recebimento Data e hora de autorização do evento.
     *
     * @return self
     */
    public function setDataRecebimento($data_recebimento)
    {
        if (is_null($data_recebimento)) {
            array_push($this->openAPINullablesSetToNull, 'data_recebimento');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('data_recebimento', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['data_recebimento'] = $data_recebimento;

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
     * @param string|null $numero_protocolo Número do protocolo de autorização.
     *
     * @return self
     */
    public function setNumeroProtocolo($numero_protocolo)
    {
        if (is_null($numero_protocolo)) {
            array_push($this->openAPINullablesSetToNull, 'numero_protocolo');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('numero_protocolo', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['numero_protocolo'] = $numero_protocolo;

        return $this;
    }

    /**
     * Gets tipo_nfe
     *
     * @return int|null
     */
    public function getTipoNfe()
    {
        return $this->container['tipo_nfe'];
    }

    /**
     * Sets tipo_nfe
     *
     * @param int|null $tipo_nfe Tipo da NF-e (0 - entrada; 1 - saída).
     *
     * @return self
     */
    public function setTipoNfe($tipo_nfe)
    {
        if (is_null($tipo_nfe)) {
            array_push($this->openAPINullablesSetToNull, 'tipo_nfe');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tipo_nfe', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['tipo_nfe'] = $tipo_nfe;

        return $this;
    }

    /**
     * Gets valor_nfe
     *
     * @return float|null
     */
    public function getValorNfe()
    {
        return $this->container['valor_nfe'];
    }

    /**
     * Sets valor_nfe
     *
     * @param float|null $valor_nfe Valor total da NF-e.
     *
     * @return self
     */
    public function setValorNfe($valor_nfe)
    {
        if (is_null($valor_nfe)) {
            array_push($this->openAPINullablesSetToNull, 'valor_nfe');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('valor_nfe', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['valor_nfe'] = $valor_nfe;

        return $this;
    }

    /**
     * Gets digest_value
     *
     * @return string|null
     */
    public function getDigestValue()
    {
        return $this->container['digest_value'];
    }

    /**
     * Sets digest_value
     *
     * @param string|null $digest_value Digest Value da NF-e processada. Utilizado para conferir a integridade da NF-e original.
     *
     * @return self
     */
    public function setDigestValue($digest_value)
    {
        if (is_null($digest_value)) {
            array_push($this->openAPINullablesSetToNull, 'digest_value');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('digest_value', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['digest_value'] = $digest_value;

        return $this;
    }

    /**
     * Gets emitente_cpf_cnpj
     *
     * @return string|null
     */
    public function getEmitenteCpfCnpj()
    {
        return $this->container['emitente_cpf_cnpj'];
    }

    /**
     * Sets emitente_cpf_cnpj
     *
     * @param string|null $emitente_cpf_cnpj CPF/CNPJ do emitente.
     *
     * @return self
     */
    public function setEmitenteCpfCnpj($emitente_cpf_cnpj)
    {
        if (is_null($emitente_cpf_cnpj)) {
            array_push($this->openAPINullablesSetToNull, 'emitente_cpf_cnpj');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('emitente_cpf_cnpj', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['emitente_cpf_cnpj'] = $emitente_cpf_cnpj;

        return $this;
    }

    /**
     * Gets emitente_nome_razao_social
     *
     * @return string|null
     */
    public function getEmitenteNomeRazaoSocial()
    {
        return $this->container['emitente_nome_razao_social'];
    }

    /**
     * Sets emitente_nome_razao_social
     *
     * @param string|null $emitente_nome_razao_social Nome ou Razão Social do emitente.
     *
     * @return self
     */
    public function setEmitenteNomeRazaoSocial($emitente_nome_razao_social)
    {
        if (is_null($emitente_nome_razao_social)) {
            array_push($this->openAPINullablesSetToNull, 'emitente_nome_razao_social');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('emitente_nome_razao_social', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['emitente_nome_razao_social'] = $emitente_nome_razao_social;

        return $this;
    }

    /**
     * Gets emitente_inscricao_estadual
     *
     * @return string|null
     */
    public function getEmitenteInscricaoEstadual()
    {
        return $this->container['emitente_inscricao_estadual'];
    }

    /**
     * Sets emitente_inscricao_estadual
     *
     * @param string|null $emitente_inscricao_estadual Inscrição Estadual do emitente.
     *
     * @return self
     */
    public function setEmitenteInscricaoEstadual($emitente_inscricao_estadual)
    {
        if (is_null($emitente_inscricao_estadual)) {
            array_push($this->openAPINullablesSetToNull, 'emitente_inscricao_estadual');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('emitente_inscricao_estadual', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['emitente_inscricao_estadual'] = $emitente_inscricao_estadual;

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


