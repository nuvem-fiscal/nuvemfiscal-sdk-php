<?php
/**
 * DfeContribuinteInfCad
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
 * DfeContribuinteInfCad Class Doc Comment
 *
 * @category Class
 * @description Informações cadastrais do contribuinte consultado.
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class DfeContribuinteInfCad implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DfeContribuinteInfCad';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'ie' => 'string',
        'cnpj' => 'string',
        'cpf' => 'string',
        'uf' => 'string',
        'situacao_cadastral' => 'int',
        'indicador_nfe' => 'int',
        'indicador_cte' => 'int',
        'nome_razao_social' => 'string',
        'nome_fantasia' => 'string',
        'regime_apuracao_icms' => 'string',
        'cnae' => 'string',
        'data_inicio_atividade' => '\DateTime',
        'data_situacao_cadastral' => '\DateTime',
        'data_fim_atividade' => '\DateTime',
        'ie_unica' => 'string',
        'ie_atual' => 'string',
        'endereco' => '\NuvemFiscal\Model\DfeContribuinteEndereco'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'ie' => null,
        'cnpj' => null,
        'cpf' => null,
        'uf' => null,
        'situacao_cadastral' => null,
        'indicador_nfe' => null,
        'indicador_cte' => null,
        'nome_razao_social' => null,
        'nome_fantasia' => null,
        'regime_apuracao_icms' => null,
        'cnae' => null,
        'data_inicio_atividade' => 'date',
        'data_situacao_cadastral' => 'date',
        'data_fim_atividade' => 'date',
        'ie_unica' => null,
        'ie_atual' => null,
        'endereco' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'ie' => true,
        'cnpj' => true,
        'cpf' => true,
        'uf' => true,
        'situacao_cadastral' => true,
        'indicador_nfe' => true,
        'indicador_cte' => true,
        'nome_razao_social' => true,
        'nome_fantasia' => true,
        'regime_apuracao_icms' => true,
        'cnae' => true,
        'data_inicio_atividade' => true,
        'data_situacao_cadastral' => true,
        'data_fim_atividade' => true,
        'ie_unica' => true,
        'ie_atual' => true,
        'endereco' => false
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
        'ie' => 'ie',
        'cnpj' => 'cnpj',
        'cpf' => 'cpf',
        'uf' => 'uf',
        'situacao_cadastral' => 'situacao_cadastral',
        'indicador_nfe' => 'indicador_nfe',
        'indicador_cte' => 'indicador_cte',
        'nome_razao_social' => 'nome_razao_social',
        'nome_fantasia' => 'nome_fantasia',
        'regime_apuracao_icms' => 'regime_apuracao_icms',
        'cnae' => 'cnae',
        'data_inicio_atividade' => 'data_inicio_atividade',
        'data_situacao_cadastral' => 'data_situacao_cadastral',
        'data_fim_atividade' => 'data_fim_atividade',
        'ie_unica' => 'ie_unica',
        'ie_atual' => 'ie_atual',
        'endereco' => 'endereco'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ie' => 'setIe',
        'cnpj' => 'setCnpj',
        'cpf' => 'setCpf',
        'uf' => 'setUf',
        'situacao_cadastral' => 'setSituacaoCadastral',
        'indicador_nfe' => 'setIndicadorNfe',
        'indicador_cte' => 'setIndicadorCte',
        'nome_razao_social' => 'setNomeRazaoSocial',
        'nome_fantasia' => 'setNomeFantasia',
        'regime_apuracao_icms' => 'setRegimeApuracaoIcms',
        'cnae' => 'setCnae',
        'data_inicio_atividade' => 'setDataInicioAtividade',
        'data_situacao_cadastral' => 'setDataSituacaoCadastral',
        'data_fim_atividade' => 'setDataFimAtividade',
        'ie_unica' => 'setIeUnica',
        'ie_atual' => 'setIeAtual',
        'endereco' => 'setEndereco'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ie' => 'getIe',
        'cnpj' => 'getCnpj',
        'cpf' => 'getCpf',
        'uf' => 'getUf',
        'situacao_cadastral' => 'getSituacaoCadastral',
        'indicador_nfe' => 'getIndicadorNfe',
        'indicador_cte' => 'getIndicadorCte',
        'nome_razao_social' => 'getNomeRazaoSocial',
        'nome_fantasia' => 'getNomeFantasia',
        'regime_apuracao_icms' => 'getRegimeApuracaoIcms',
        'cnae' => 'getCnae',
        'data_inicio_atividade' => 'getDataInicioAtividade',
        'data_situacao_cadastral' => 'getDataSituacaoCadastral',
        'data_fim_atividade' => 'getDataFimAtividade',
        'ie_unica' => 'getIeUnica',
        'ie_atual' => 'getIeAtual',
        'endereco' => 'getEndereco'
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
        $this->setIfExists('ie', $data ?? [], null);
        $this->setIfExists('cnpj', $data ?? [], null);
        $this->setIfExists('cpf', $data ?? [], null);
        $this->setIfExists('uf', $data ?? [], null);
        $this->setIfExists('situacao_cadastral', $data ?? [], null);
        $this->setIfExists('indicador_nfe', $data ?? [], null);
        $this->setIfExists('indicador_cte', $data ?? [], null);
        $this->setIfExists('nome_razao_social', $data ?? [], null);
        $this->setIfExists('nome_fantasia', $data ?? [], null);
        $this->setIfExists('regime_apuracao_icms', $data ?? [], null);
        $this->setIfExists('cnae', $data ?? [], null);
        $this->setIfExists('data_inicio_atividade', $data ?? [], null);
        $this->setIfExists('data_situacao_cadastral', $data ?? [], null);
        $this->setIfExists('data_fim_atividade', $data ?? [], null);
        $this->setIfExists('ie_unica', $data ?? [], null);
        $this->setIfExists('ie_atual', $data ?? [], null);
        $this->setIfExists('endereco', $data ?? [], null);
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

        if ($this->container['ie'] === null) {
            $invalidProperties[] = "'ie' can't be null";
        }
        if ($this->container['uf'] === null) {
            $invalidProperties[] = "'uf' can't be null";
        }
        if ($this->container['situacao_cadastral'] === null) {
            $invalidProperties[] = "'situacao_cadastral' can't be null";
        }
        if ($this->container['indicador_nfe'] === null) {
            $invalidProperties[] = "'indicador_nfe' can't be null";
        }
        if ($this->container['indicador_cte'] === null) {
            $invalidProperties[] = "'indicador_cte' can't be null";
        }
        if ($this->container['nome_razao_social'] === null) {
            $invalidProperties[] = "'nome_razao_social' can't be null";
        }
        if ((mb_strlen($this->container['nome_razao_social']) > 60)) {
            $invalidProperties[] = "invalid value for 'nome_razao_social', the character length must be smaller than or equal to 60.";
        }

        if ((mb_strlen($this->container['nome_razao_social']) < 1)) {
            $invalidProperties[] = "invalid value for 'nome_razao_social', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['nome_fantasia']) && (mb_strlen($this->container['nome_fantasia']) > 60)) {
            $invalidProperties[] = "invalid value for 'nome_fantasia', the character length must be smaller than or equal to 60.";
        }

        if (!is_null($this->container['nome_fantasia']) && (mb_strlen($this->container['nome_fantasia']) < 1)) {
            $invalidProperties[] = "invalid value for 'nome_fantasia', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['regime_apuracao_icms']) && (mb_strlen($this->container['regime_apuracao_icms']) > 60)) {
            $invalidProperties[] = "invalid value for 'regime_apuracao_icms', the character length must be smaller than or equal to 60.";
        }

        if (!is_null($this->container['regime_apuracao_icms']) && (mb_strlen($this->container['regime_apuracao_icms']) < 1)) {
            $invalidProperties[] = "invalid value for 'regime_apuracao_icms', the character length must be bigger than or equal to 1.";
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
     * Gets ie
     *
     * @return string
     */
    public function getIe()
    {
        return $this->container['ie'];
    }

    /**
     * Sets ie
     *
     * @param string $ie Número da Inscrição Estadual do contribuinte.
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
     * @param string|null $cnpj Número do CNPJ  do contribuinte.
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
     * @param string|null $cpf Número do CPF do contribuinte.
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
     * @param string $uf Sigla da UF de localização do contribuinte. Em algumas situações, a UF de localização pode ser diferente da UF consultada. Ex. IE de Substituto Tributário.
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
     * Gets situacao_cadastral
     *
     * @return int
     */
    public function getSituacaoCadastral()
    {
        return $this->container['situacao_cadastral'];
    }

    /**
     * Sets situacao_cadastral
     *
     * @param int $situacao_cadastral Situação cadastral do contribuinte:  * 0 - não habilitado  * 1 - habilitado
     *
     * @return self
     */
    public function setSituacaoCadastral($situacao_cadastral)
    {
        if (is_null($situacao_cadastral)) {
            array_push($this->openAPINullablesSetToNull, 'situacao_cadastral');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('situacao_cadastral', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['situacao_cadastral'] = $situacao_cadastral;

        return $this;
    }

    /**
     * Gets indicador_nfe
     *
     * @return int
     */
    public function getIndicadorNfe()
    {
        return $this->container['indicador_nfe'];
    }

    /**
     * Sets indicador_nfe
     *
     * @param int $indicador_nfe Indicador de contribuinte credenciado a emitir NF-e.  * 0 - Não credenciado para emissão da NF-e  * 1 - Credenciado  * 2 - Credenciado com obrigatoriedade para todas operações  * 3 - Credenciado com obrigatoriedade parcial  * 4 - a SEFAZ não fornece a informação  Este indicador significa apenas que o contribuinte é credenciado para emitir NF-e na SEFAZ consultada.
     *
     * @return self
     */
    public function setIndicadorNfe($indicador_nfe)
    {
        if (is_null($indicador_nfe)) {
            array_push($this->openAPINullablesSetToNull, 'indicador_nfe');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('indicador_nfe', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['indicador_nfe'] = $indicador_nfe;

        return $this;
    }

    /**
     * Gets indicador_cte
     *
     * @return int
     */
    public function getIndicadorCte()
    {
        return $this->container['indicador_cte'];
    }

    /**
     * Sets indicador_cte
     *
     * @param int $indicador_cte Indicador de contribuinte credenciado a emitir CT-e.  * 0 - Não credenciado para emissão da CT-e  * 1 - Credenciado  * 2 - Credenciado com obrigatoriedade para todas operações  * 3 - Credenciado com obrigatoriedade parcial  * 4 - a SEFAZ não fornece a informação  Este indicador significa apenas que o contribuinte é credenciado para emitir CT-e na SEFAZ consultada.
     *
     * @return self
     */
    public function setIndicadorCte($indicador_cte)
    {
        if (is_null($indicador_cte)) {
            array_push($this->openAPINullablesSetToNull, 'indicador_cte');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('indicador_cte', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['indicador_cte'] = $indicador_cte;

        return $this;
    }

    /**
     * Gets nome_razao_social
     *
     * @return string
     */
    public function getNomeRazaoSocial()
    {
        return $this->container['nome_razao_social'];
    }

    /**
     * Sets nome_razao_social
     *
     * @param string $nome_razao_social Razão Social ou nome do contribuinte.
     *
     * @return self
     */
    public function setNomeRazaoSocial($nome_razao_social)
    {
        if (is_null($nome_razao_social)) {
            array_push($this->openAPINullablesSetToNull, 'nome_razao_social');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('nome_razao_social', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($nome_razao_social) && (mb_strlen($nome_razao_social) > 60)) {
            throw new \InvalidArgumentException('invalid length for $nome_razao_social when calling DfeContribuinteInfCad., must be smaller than or equal to 60.');
        }
        if (!is_null($nome_razao_social) && (mb_strlen($nome_razao_social) < 1)) {
            throw new \InvalidArgumentException('invalid length for $nome_razao_social when calling DfeContribuinteInfCad., must be bigger than or equal to 1.');
        }

        $this->container['nome_razao_social'] = $nome_razao_social;

        return $this;
    }

    /**
     * Gets nome_fantasia
     *
     * @return string|null
     */
    public function getNomeFantasia()
    {
        return $this->container['nome_fantasia'];
    }

    /**
     * Sets nome_fantasia
     *
     * @param string|null $nome_fantasia Razão Social ou nome do contribuinte.
     *
     * @return self
     */
    public function setNomeFantasia($nome_fantasia)
    {
        if (is_null($nome_fantasia)) {
            array_push($this->openAPINullablesSetToNull, 'nome_fantasia');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('nome_fantasia', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($nome_fantasia) && (mb_strlen($nome_fantasia) > 60)) {
            throw new \InvalidArgumentException('invalid length for $nome_fantasia when calling DfeContribuinteInfCad., must be smaller than or equal to 60.');
        }
        if (!is_null($nome_fantasia) && (mb_strlen($nome_fantasia) < 1)) {
            throw new \InvalidArgumentException('invalid length for $nome_fantasia when calling DfeContribuinteInfCad., must be bigger than or equal to 1.');
        }

        $this->container['nome_fantasia'] = $nome_fantasia;

        return $this;
    }

    /**
     * Gets regime_apuracao_icms
     *
     * @return string|null
     */
    public function getRegimeApuracaoIcms()
    {
        return $this->container['regime_apuracao_icms'];
    }

    /**
     * Sets regime_apuracao_icms
     *
     * @param string|null $regime_apuracao_icms Regime de Apuração do ICMS.
     *
     * @return self
     */
    public function setRegimeApuracaoIcms($regime_apuracao_icms)
    {
        if (is_null($regime_apuracao_icms)) {
            array_push($this->openAPINullablesSetToNull, 'regime_apuracao_icms');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('regime_apuracao_icms', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($regime_apuracao_icms) && (mb_strlen($regime_apuracao_icms) > 60)) {
            throw new \InvalidArgumentException('invalid length for $regime_apuracao_icms when calling DfeContribuinteInfCad., must be smaller than or equal to 60.');
        }
        if (!is_null($regime_apuracao_icms) && (mb_strlen($regime_apuracao_icms) < 1)) {
            throw new \InvalidArgumentException('invalid length for $regime_apuracao_icms when calling DfeContribuinteInfCad., must be bigger than or equal to 1.');
        }

        $this->container['regime_apuracao_icms'] = $regime_apuracao_icms;

        return $this;
    }

    /**
     * Gets cnae
     *
     * @return string|null
     */
    public function getCnae()
    {
        return $this->container['cnae'];
    }

    /**
     * Sets cnae
     *
     * @param string|null $cnae CNAE Fiscal do contribuinte.
     *
     * @return self
     */
    public function setCnae($cnae)
    {
        if (is_null($cnae)) {
            array_push($this->openAPINullablesSetToNull, 'cnae');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('cnae', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['cnae'] = $cnae;

        return $this;
    }

    /**
     * Gets data_inicio_atividade
     *
     * @return \DateTime|null
     */
    public function getDataInicioAtividade()
    {
        return $this->container['data_inicio_atividade'];
    }

    /**
     * Sets data_inicio_atividade
     *
     * @param \DateTime|null $data_inicio_atividade Data de início de atividades do contribuinte.
     *
     * @return self
     */
    public function setDataInicioAtividade($data_inicio_atividade)
    {
        if (is_null($data_inicio_atividade)) {
            array_push($this->openAPINullablesSetToNull, 'data_inicio_atividade');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('data_inicio_atividade', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['data_inicio_atividade'] = $data_inicio_atividade;

        return $this;
    }

    /**
     * Gets data_situacao_cadastral
     *
     * @return \DateTime|null
     */
    public function getDataSituacaoCadastral()
    {
        return $this->container['data_situacao_cadastral'];
    }

    /**
     * Sets data_situacao_cadastral
     *
     * @param \DateTime|null $data_situacao_cadastral Data da última modificação da situação cadastral do contribuinte.
     *
     * @return self
     */
    public function setDataSituacaoCadastral($data_situacao_cadastral)
    {
        if (is_null($data_situacao_cadastral)) {
            array_push($this->openAPINullablesSetToNull, 'data_situacao_cadastral');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('data_situacao_cadastral', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['data_situacao_cadastral'] = $data_situacao_cadastral;

        return $this;
    }

    /**
     * Gets data_fim_atividade
     *
     * @return \DateTime|null
     */
    public function getDataFimAtividade()
    {
        return $this->container['data_fim_atividade'];
    }

    /**
     * Sets data_fim_atividade
     *
     * @param \DateTime|null $data_fim_atividade Data de ocorrência da baixa do contribuinte.
     *
     * @return self
     */
    public function setDataFimAtividade($data_fim_atividade)
    {
        if (is_null($data_fim_atividade)) {
            array_push($this->openAPINullablesSetToNull, 'data_fim_atividade');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('data_fim_atividade', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['data_fim_atividade'] = $data_fim_atividade;

        return $this;
    }

    /**
     * Gets ie_unica
     *
     * @return string|null
     */
    public function getIeUnica()
    {
        return $this->container['ie_unica'];
    }

    /**
     * Sets ie_unica
     *
     * @param string|null $ie_unica Inscrição Estadual Única.
     *
     * @return self
     */
    public function setIeUnica($ie_unica)
    {
        if (is_null($ie_unica)) {
            array_push($this->openAPINullablesSetToNull, 'ie_unica');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ie_unica', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ie_unica'] = $ie_unica;

        return $this;
    }

    /**
     * Gets ie_atual
     *
     * @return string|null
     */
    public function getIeAtual()
    {
        return $this->container['ie_atual'];
    }

    /**
     * Sets ie_atual
     *
     * @param string|null $ie_atual Inscrição Estadual atual.
     *
     * @return self
     */
    public function setIeAtual($ie_atual)
    {
        if (is_null($ie_atual)) {
            array_push($this->openAPINullablesSetToNull, 'ie_atual');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ie_atual', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ie_atual'] = $ie_atual;

        return $this;
    }

    /**
     * Gets endereco
     *
     * @return \NuvemFiscal\Model\DfeContribuinteEndereco|null
     */
    public function getEndereco()
    {
        return $this->container['endereco'];
    }

    /**
     * Sets endereco
     *
     * @param \NuvemFiscal\Model\DfeContribuinteEndereco|null $endereco endereco
     *
     * @return self
     */
    public function setEndereco($endereco)
    {
        if (is_null($endereco)) {
            throw new \InvalidArgumentException('non-nullable endereco cannot be null');
        }
        $this->container['endereco'] = $endereco;

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


