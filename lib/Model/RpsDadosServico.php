<?php
/**
 * RpsDadosServico
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
 * RpsDadosServico Class Doc Comment
 *
 * @category Class
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class RpsDadosServico implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RpsDadosServico';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'iss_retido' => 'bool',
        'responsavel_retencao' => 'int',
        'item_lista_servico' => 'string',
        'codigo_cnae' => 'string',
        'codigo_tributacao_municipio' => 'string',
        'discriminacao' => 'string',
        'codigo_municipio' => 'string',
        'codigo_pais' => 'string',
        'tipo_tributacao' => 'int',
        'exigibilidade_iss' => 'int',
        'codigo_municipio_incidencia' => 'string',
        'numero_processo' => 'string',
        'unidade' => 'string',
        'quantidade' => 'float',
        'valores' => '\NuvemFiscal\Model\RpsServicoValores'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'iss_retido' => null,
        'responsavel_retencao' => null,
        'item_lista_servico' => null,
        'codigo_cnae' => null,
        'codigo_tributacao_municipio' => null,
        'discriminacao' => null,
        'codigo_municipio' => null,
        'codigo_pais' => null,
        'tipo_tributacao' => null,
        'exigibilidade_iss' => null,
        'codigo_municipio_incidencia' => null,
        'numero_processo' => null,
        'unidade' => null,
        'quantidade' => null,
        'valores' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'iss_retido' => false,
        'responsavel_retencao' => false,
        'item_lista_servico' => false,
        'codigo_cnae' => false,
        'codigo_tributacao_municipio' => false,
        'discriminacao' => false,
        'codigo_municipio' => false,
        'codigo_pais' => false,
        'tipo_tributacao' => false,
        'exigibilidade_iss' => false,
        'codigo_municipio_incidencia' => false,
        'numero_processo' => false,
        'unidade' => false,
        'quantidade' => false,
        'valores' => false
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
        'iss_retido' => 'iss_retido',
        'responsavel_retencao' => 'responsavel_retencao',
        'item_lista_servico' => 'item_lista_servico',
        'codigo_cnae' => 'codigo_cnae',
        'codigo_tributacao_municipio' => 'codigo_tributacao_municipio',
        'discriminacao' => 'discriminacao',
        'codigo_municipio' => 'codigo_municipio',
        'codigo_pais' => 'codigo_pais',
        'tipo_tributacao' => 'tipo_tributacao',
        'exigibilidade_iss' => 'exigibilidade_iss',
        'codigo_municipio_incidencia' => 'codigo_municipio_incidencia',
        'numero_processo' => 'numero_processo',
        'unidade' => 'unidade',
        'quantidade' => 'quantidade',
        'valores' => 'valores'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'iss_retido' => 'setIssRetido',
        'responsavel_retencao' => 'setResponsavelRetencao',
        'item_lista_servico' => 'setItemListaServico',
        'codigo_cnae' => 'setCodigoCnae',
        'codigo_tributacao_municipio' => 'setCodigoTributacaoMunicipio',
        'discriminacao' => 'setDiscriminacao',
        'codigo_municipio' => 'setCodigoMunicipio',
        'codigo_pais' => 'setCodigoPais',
        'tipo_tributacao' => 'setTipoTributacao',
        'exigibilidade_iss' => 'setExigibilidadeIss',
        'codigo_municipio_incidencia' => 'setCodigoMunicipioIncidencia',
        'numero_processo' => 'setNumeroProcesso',
        'unidade' => 'setUnidade',
        'quantidade' => 'setQuantidade',
        'valores' => 'setValores'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'iss_retido' => 'getIssRetido',
        'responsavel_retencao' => 'getResponsavelRetencao',
        'item_lista_servico' => 'getItemListaServico',
        'codigo_cnae' => 'getCodigoCnae',
        'codigo_tributacao_municipio' => 'getCodigoTributacaoMunicipio',
        'discriminacao' => 'getDiscriminacao',
        'codigo_municipio' => 'getCodigoMunicipio',
        'codigo_pais' => 'getCodigoPais',
        'tipo_tributacao' => 'getTipoTributacao',
        'exigibilidade_iss' => 'getExigibilidadeIss',
        'codigo_municipio_incidencia' => 'getCodigoMunicipioIncidencia',
        'numero_processo' => 'getNumeroProcesso',
        'unidade' => 'getUnidade',
        'quantidade' => 'getQuantidade',
        'valores' => 'getValores'
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
        $this->setIfExists('iss_retido', $data ?? [], false);
        $this->setIfExists('responsavel_retencao', $data ?? [], null);
        $this->setIfExists('item_lista_servico', $data ?? [], null);
        $this->setIfExists('codigo_cnae', $data ?? [], null);
        $this->setIfExists('codigo_tributacao_municipio', $data ?? [], null);
        $this->setIfExists('discriminacao', $data ?? [], null);
        $this->setIfExists('codigo_municipio', $data ?? [], null);
        $this->setIfExists('codigo_pais', $data ?? [], null);
        $this->setIfExists('tipo_tributacao', $data ?? [], null);
        $this->setIfExists('exigibilidade_iss', $data ?? [], null);
        $this->setIfExists('codigo_municipio_incidencia', $data ?? [], null);
        $this->setIfExists('numero_processo', $data ?? [], null);
        $this->setIfExists('unidade', $data ?? [], null);
        $this->setIfExists('quantidade', $data ?? [], null);
        $this->setIfExists('valores', $data ?? [], null);
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

        if ($this->container['item_lista_servico'] === null) {
            $invalidProperties[] = "'item_lista_servico' can't be null";
        }
        if ($this->container['discriminacao'] === null) {
            $invalidProperties[] = "'discriminacao' can't be null";
        }
        if ($this->container['valores'] === null) {
            $invalidProperties[] = "'valores' can't be null";
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
     * Gets iss_retido
     *
     * @return bool|null
     */
    public function getIssRetido()
    {
        return $this->container['iss_retido'];
    }

    /**
     * Sets iss_retido
     *
     * @param bool|null $iss_retido Reter ISSQN.
     *
     * @return self
     */
    public function setIssRetido($iss_retido)
    {
        if (is_null($iss_retido)) {
            throw new \InvalidArgumentException('non-nullable iss_retido cannot be null');
        }
        $this->container['iss_retido'] = $iss_retido;

        return $this;
    }

    /**
     * Gets responsavel_retencao
     *
     * @return int|null
     */
    public function getResponsavelRetencao()
    {
        return $this->container['responsavel_retencao'];
    }

    /**
     * Sets responsavel_retencao
     *
     * @param int|null $responsavel_retencao Responsável pela retenção:  * 0 - Prestador;  * 1 - Tomador;  * 2 - Intermediário.
     *
     * @return self
     */
    public function setResponsavelRetencao($responsavel_retencao)
    {
        if (is_null($responsavel_retencao)) {
            throw new \InvalidArgumentException('non-nullable responsavel_retencao cannot be null');
        }
        $this->container['responsavel_retencao'] = $responsavel_retencao;

        return $this;
    }

    /**
     * Gets item_lista_servico
     *
     * @return string
     */
    public function getItemListaServico()
    {
        return $this->container['item_lista_servico'];
    }

    /**
     * Sets item_lista_servico
     *
     * @param string $item_lista_servico Código do item da lista de serviço, geralmente segue a LC116, podendo variar de acordo com a prefeitura.    Você pode encontrar esse dado no portal da prefeitura, em uma nota emitida ou junto ao contador.
     *
     * @return self
     */
    public function setItemListaServico($item_lista_servico)
    {
        if (is_null($item_lista_servico)) {
            throw new \InvalidArgumentException('non-nullable item_lista_servico cannot be null');
        }
        $this->container['item_lista_servico'] = $item_lista_servico;

        return $this;
    }

    /**
     * Gets codigo_cnae
     *
     * @return string|null
     */
    public function getCodigoCnae()
    {
        return $this->container['codigo_cnae'];
    }

    /**
     * Sets codigo_cnae
     *
     * @param string|null $codigo_cnae Código CNAE (Classificação Nacional de Atividades Econômicas).
     *
     * @return self
     */
    public function setCodigoCnae($codigo_cnae)
    {
        if (is_null($codigo_cnae)) {
            throw new \InvalidArgumentException('non-nullable codigo_cnae cannot be null');
        }
        $this->container['codigo_cnae'] = $codigo_cnae;

        return $this;
    }

    /**
     * Gets codigo_tributacao_municipio
     *
     * @return string|null
     */
    public function getCodigoTributacaoMunicipio()
    {
        return $this->container['codigo_tributacao_municipio'];
    }

    /**
     * Sets codigo_tributacao_municipio
     *
     * @param string|null $codigo_tributacao_municipio Código de tributação do município.
     *
     * @return self
     */
    public function setCodigoTributacaoMunicipio($codigo_tributacao_municipio)
    {
        if (is_null($codigo_tributacao_municipio)) {
            throw new \InvalidArgumentException('non-nullable codigo_tributacao_municipio cannot be null');
        }
        $this->container['codigo_tributacao_municipio'] = $codigo_tributacao_municipio;

        return $this;
    }

    /**
     * Gets discriminacao
     *
     * @return string
     */
    public function getDiscriminacao()
    {
        return $this->container['discriminacao'];
    }

    /**
     * Sets discriminacao
     *
     * @param string $discriminacao Detalhamento do serviço prestado.
     *
     * @return self
     */
    public function setDiscriminacao($discriminacao)
    {
        if (is_null($discriminacao)) {
            throw new \InvalidArgumentException('non-nullable discriminacao cannot be null');
        }
        $this->container['discriminacao'] = $discriminacao;

        return $this;
    }

    /**
     * Gets codigo_municipio
     *
     * @return string|null
     */
    public function getCodigoMunicipio()
    {
        return $this->container['codigo_municipio'];
    }

    /**
     * Sets codigo_municipio
     *
     * @param string|null $codigo_municipio Código IBGE do município de prestação do serviço.  Caso não informado, será considerado o município do prestador.
     *
     * @return self
     */
    public function setCodigoMunicipio($codigo_municipio)
    {
        if (is_null($codigo_municipio)) {
            throw new \InvalidArgumentException('non-nullable codigo_municipio cannot be null');
        }
        $this->container['codigo_municipio'] = $codigo_municipio;

        return $this;
    }

    /**
     * Gets codigo_pais
     *
     * @return string|null
     */
    public function getCodigoPais()
    {
        return $this->container['codigo_pais'];
    }

    /**
     * Sets codigo_pais
     *
     * @param string|null $codigo_pais Código do país de prestação do serviço.
     *
     * @return self
     */
    public function setCodigoPais($codigo_pais)
    {
        if (is_null($codigo_pais)) {
            throw new \InvalidArgumentException('non-nullable codigo_pais cannot be null');
        }
        $this->container['codigo_pais'] = $codigo_pais;

        return $this;
    }

    /**
     * Gets tipo_tributacao
     *
     * @return int|null
     */
    public function getTipoTributacao()
    {
        return $this->container['tipo_tributacao'];
    }

    /**
     * Sets tipo_tributacao
     *
     * @param int|null $tipo_tributacao Tipo de Tributação do Serviço:  * 1 - Isento de ISS  * 2 - Imune  * 3 - Não Incidência no Município  * 4 - Não Tributável  * 5 - Retido  * 6 - Tributável Dentro do Município  * 7 - Tributável Fora do Município  * 8 - Tributável Dentro do Município pelo tomador
     *
     * @return self
     */
    public function setTipoTributacao($tipo_tributacao)
    {
        if (is_null($tipo_tributacao)) {
            throw new \InvalidArgumentException('non-nullable tipo_tributacao cannot be null');
        }
        $this->container['tipo_tributacao'] = $tipo_tributacao;

        return $this;
    }

    /**
     * Gets exigibilidade_iss
     *
     * @return int|null
     */
    public function getExigibilidadeIss()
    {
        return $this->container['exigibilidade_iss'];
    }

    /**
     * Sets exigibilidade_iss
     *
     * @param int|null $exigibilidade_iss Exigibilidade do ISS:  * 1 - Exigível  * 2 - Não Incidência  * 3 - Isenção  * 4 - Exportação  * 5 - Imunidade  * 6 - Suspenso por Decisão Judicial  * 7 - Suspenso por Processo Administrativo
     *
     * @return self
     */
    public function setExigibilidadeIss($exigibilidade_iss)
    {
        if (is_null($exigibilidade_iss)) {
            throw new \InvalidArgumentException('non-nullable exigibilidade_iss cannot be null');
        }
        $this->container['exigibilidade_iss'] = $exigibilidade_iss;

        return $this;
    }

    /**
     * Gets codigo_municipio_incidencia
     *
     * @return string|null
     */
    public function getCodigoMunicipioIncidencia()
    {
        return $this->container['codigo_municipio_incidencia'];
    }

    /**
     * Sets codigo_municipio_incidencia
     *
     * @param string|null $codigo_municipio_incidencia Código IBGE do município de incidência do ISSQN.
     *
     * @return self
     */
    public function setCodigoMunicipioIncidencia($codigo_municipio_incidencia)
    {
        if (is_null($codigo_municipio_incidencia)) {
            throw new \InvalidArgumentException('non-nullable codigo_municipio_incidencia cannot be null');
        }
        $this->container['codigo_municipio_incidencia'] = $codigo_municipio_incidencia;

        return $this;
    }

    /**
     * Gets numero_processo
     *
     * @return string|null
     */
    public function getNumeroProcesso()
    {
        return $this->container['numero_processo'];
    }

    /**
     * Sets numero_processo
     *
     * @param string|null $numero_processo Número do Processo de Suspensão da Exigibilidade.
     *
     * @return self
     */
    public function setNumeroProcesso($numero_processo)
    {
        if (is_null($numero_processo)) {
            throw new \InvalidArgumentException('non-nullable numero_processo cannot be null');
        }
        $this->container['numero_processo'] = $numero_processo;

        return $this;
    }

    /**
     * Gets unidade
     *
     * @return string|null
     */
    public function getUnidade()
    {
        return $this->container['unidade'];
    }

    /**
     * Sets unidade
     *
     * @param string|null $unidade Unidade do serviço prestado.
     *
     * @return self
     */
    public function setUnidade($unidade)
    {
        if (is_null($unidade)) {
            throw new \InvalidArgumentException('non-nullable unidade cannot be null');
        }
        $this->container['unidade'] = $unidade;

        return $this;
    }

    /**
     * Gets quantidade
     *
     * @return float|null
     */
    public function getQuantidade()
    {
        return $this->container['quantidade'];
    }

    /**
     * Sets quantidade
     *
     * @param float|null $quantidade Quantidade dos serviços prestados.
     *
     * @return self
     */
    public function setQuantidade($quantidade)
    {
        if (is_null($quantidade)) {
            throw new \InvalidArgumentException('non-nullable quantidade cannot be null');
        }
        $this->container['quantidade'] = $quantidade;

        return $this;
    }

    /**
     * Gets valores
     *
     * @return \NuvemFiscal\Model\RpsServicoValores
     */
    public function getValores()
    {
        return $this->container['valores'];
    }

    /**
     * Sets valores
     *
     * @param \NuvemFiscal\Model\RpsServicoValores $valores valores
     *
     * @return self
     */
    public function setValores($valores)
    {
        if (is_null($valores)) {
            throw new \InvalidArgumentException('non-nullable valores cannot be null');
        }
        $this->container['valores'] = $valores;

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


