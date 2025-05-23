<?php
/**
 * CnpjEmpresa
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
 * CnpjEmpresa Class Doc Comment
 *
 * @category Class
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CnpjEmpresa implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CnpjEmpresa';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cnpj' => 'string',
        'razao_social' => 'string',
        'nome_fantasia' => 'string',
        'data_inicio_atividade' => '\DateTime',
        'matriz' => 'bool',
        'natureza_juridica' => '\NuvemFiscal\Model\CnpjNaturezaJuridica',
        'capital_social' => 'float',
        'porte' => '\NuvemFiscal\Model\CnpjPorteEmpresa',
        'ente_federativo_responsavel' => 'string',
        'situacao_cadastral' => '\NuvemFiscal\Model\CnpjSituacaoCadastral',
        'motivo_situacao_cadastral' => '\NuvemFiscal\Model\CnpjMotivoSituacaoCadastral',
        'nome_da_cidade_no_exterior' => 'string',
        'pais' => '\NuvemFiscal\Model\CnpjPais',
        'atividade_principal' => '\NuvemFiscal\Model\CnpjCnae',
        'atividades_secundarias' => '\NuvemFiscal\Model\CnpjCnaeSecundario[]',
        'endereco' => '\NuvemFiscal\Model\CnpjEndereco',
        'telefones' => '\NuvemFiscal\Model\CnpjTelefone[]',
        'email' => 'string',
        'situacao_especial' => '\NuvemFiscal\Model\CnpjSituacaoEspecial',
        'simples' => '\NuvemFiscal\Model\CnpjOpcaoSimples',
        'simei' => '\NuvemFiscal\Model\CnpjOpcaoSimei',
        'socios' => '\NuvemFiscal\Model\CnpjSocio[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'cnpj' => null,
        'razao_social' => null,
        'nome_fantasia' => null,
        'data_inicio_atividade' => 'date',
        'matriz' => null,
        'natureza_juridica' => null,
        'capital_social' => null,
        'porte' => null,
        'ente_federativo_responsavel' => null,
        'situacao_cadastral' => null,
        'motivo_situacao_cadastral' => null,
        'nome_da_cidade_no_exterior' => null,
        'pais' => null,
        'atividade_principal' => null,
        'atividades_secundarias' => null,
        'endereco' => null,
        'telefones' => null,
        'email' => null,
        'situacao_especial' => null,
        'simples' => null,
        'simei' => null,
        'socios' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'cnpj' => false,
        'razao_social' => false,
        'nome_fantasia' => false,
        'data_inicio_atividade' => false,
        'matriz' => false,
        'natureza_juridica' => false,
        'capital_social' => false,
        'porte' => false,
        'ente_federativo_responsavel' => false,
        'situacao_cadastral' => false,
        'motivo_situacao_cadastral' => false,
        'nome_da_cidade_no_exterior' => false,
        'pais' => false,
        'atividade_principal' => false,
        'atividades_secundarias' => false,
        'endereco' => false,
        'telefones' => false,
        'email' => false,
        'situacao_especial' => false,
        'simples' => false,
        'simei' => false,
        'socios' => false
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
        'cnpj' => 'cnpj',
        'razao_social' => 'razao_social',
        'nome_fantasia' => 'nome_fantasia',
        'data_inicio_atividade' => 'data_inicio_atividade',
        'matriz' => 'matriz',
        'natureza_juridica' => 'natureza_juridica',
        'capital_social' => 'capital_social',
        'porte' => 'porte',
        'ente_federativo_responsavel' => 'ente_federativo_responsavel',
        'situacao_cadastral' => 'situacao_cadastral',
        'motivo_situacao_cadastral' => 'motivo_situacao_cadastral',
        'nome_da_cidade_no_exterior' => 'nome_da_cidade_no_exterior',
        'pais' => 'pais',
        'atividade_principal' => 'atividade_principal',
        'atividades_secundarias' => 'atividades_secundarias',
        'endereco' => 'endereco',
        'telefones' => 'telefones',
        'email' => 'email',
        'situacao_especial' => 'situacao_especial',
        'simples' => 'simples',
        'simei' => 'simei',
        'socios' => 'socios'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cnpj' => 'setCnpj',
        'razao_social' => 'setRazaoSocial',
        'nome_fantasia' => 'setNomeFantasia',
        'data_inicio_atividade' => 'setDataInicioAtividade',
        'matriz' => 'setMatriz',
        'natureza_juridica' => 'setNaturezaJuridica',
        'capital_social' => 'setCapitalSocial',
        'porte' => 'setPorte',
        'ente_federativo_responsavel' => 'setEnteFederativoResponsavel',
        'situacao_cadastral' => 'setSituacaoCadastral',
        'motivo_situacao_cadastral' => 'setMotivoSituacaoCadastral',
        'nome_da_cidade_no_exterior' => 'setNomeDaCidadeNoExterior',
        'pais' => 'setPais',
        'atividade_principal' => 'setAtividadePrincipal',
        'atividades_secundarias' => 'setAtividadesSecundarias',
        'endereco' => 'setEndereco',
        'telefones' => 'setTelefones',
        'email' => 'setEmail',
        'situacao_especial' => 'setSituacaoEspecial',
        'simples' => 'setSimples',
        'simei' => 'setSimei',
        'socios' => 'setSocios'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cnpj' => 'getCnpj',
        'razao_social' => 'getRazaoSocial',
        'nome_fantasia' => 'getNomeFantasia',
        'data_inicio_atividade' => 'getDataInicioAtividade',
        'matriz' => 'getMatriz',
        'natureza_juridica' => 'getNaturezaJuridica',
        'capital_social' => 'getCapitalSocial',
        'porte' => 'getPorte',
        'ente_federativo_responsavel' => 'getEnteFederativoResponsavel',
        'situacao_cadastral' => 'getSituacaoCadastral',
        'motivo_situacao_cadastral' => 'getMotivoSituacaoCadastral',
        'nome_da_cidade_no_exterior' => 'getNomeDaCidadeNoExterior',
        'pais' => 'getPais',
        'atividade_principal' => 'getAtividadePrincipal',
        'atividades_secundarias' => 'getAtividadesSecundarias',
        'endereco' => 'getEndereco',
        'telefones' => 'getTelefones',
        'email' => 'getEmail',
        'situacao_especial' => 'getSituacaoEspecial',
        'simples' => 'getSimples',
        'simei' => 'getSimei',
        'socios' => 'getSocios'
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
        $this->setIfExists('cnpj', $data ?? [], null);
        $this->setIfExists('razao_social', $data ?? [], null);
        $this->setIfExists('nome_fantasia', $data ?? [], null);
        $this->setIfExists('data_inicio_atividade', $data ?? [], null);
        $this->setIfExists('matriz', $data ?? [], null);
        $this->setIfExists('natureza_juridica', $data ?? [], null);
        $this->setIfExists('capital_social', $data ?? [], null);
        $this->setIfExists('porte', $data ?? [], null);
        $this->setIfExists('ente_federativo_responsavel', $data ?? [], null);
        $this->setIfExists('situacao_cadastral', $data ?? [], null);
        $this->setIfExists('motivo_situacao_cadastral', $data ?? [], null);
        $this->setIfExists('nome_da_cidade_no_exterior', $data ?? [], null);
        $this->setIfExists('pais', $data ?? [], null);
        $this->setIfExists('atividade_principal', $data ?? [], null);
        $this->setIfExists('atividades_secundarias', $data ?? [], null);
        $this->setIfExists('endereco', $data ?? [], null);
        $this->setIfExists('telefones', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('situacao_especial', $data ?? [], null);
        $this->setIfExists('simples', $data ?? [], null);
        $this->setIfExists('simei', $data ?? [], null);
        $this->setIfExists('socios', $data ?? [], null);
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
     * @param string|null $cnpj Número de inscrição do CNPJ.
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
     * Gets razao_social
     *
     * @return string|null
     */
    public function getRazaoSocial()
    {
        return $this->container['razao_social'];
    }

    /**
     * Sets razao_social
     *
     * @param string|null $razao_social Nome empresarial da pessoa jurídica.
     *
     * @return self
     */
    public function setRazaoSocial($razao_social)
    {
        if (is_null($razao_social)) {
            throw new \InvalidArgumentException('non-nullable razao_social cannot be null');
        }
        $this->container['razao_social'] = $razao_social;

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
     * @param string|null $nome_fantasia Corresponde ao nome fantasia.
     *
     * @return self
     */
    public function setNomeFantasia($nome_fantasia)
    {
        if (is_null($nome_fantasia)) {
            throw new \InvalidArgumentException('non-nullable nome_fantasia cannot be null');
        }
        $this->container['nome_fantasia'] = $nome_fantasia;

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
     * @param \DateTime|null $data_inicio_atividade Data de início da atividade.
     *
     * @return self
     */
    public function setDataInicioAtividade($data_inicio_atividade)
    {
        if (is_null($data_inicio_atividade)) {
            throw new \InvalidArgumentException('non-nullable data_inicio_atividade cannot be null');
        }
        $this->container['data_inicio_atividade'] = $data_inicio_atividade;

        return $this;
    }

    /**
     * Gets matriz
     *
     * @return bool|null
     */
    public function getMatriz()
    {
        return $this->container['matriz'];
    }

    /**
     * Sets matriz
     *
     * @param bool|null $matriz Indicador de matriz/filial:  * `true` - É matriz  * `false` - É filial
     *
     * @return self
     */
    public function setMatriz($matriz)
    {
        if (is_null($matriz)) {
            throw new \InvalidArgumentException('non-nullable matriz cannot be null');
        }
        $this->container['matriz'] = $matriz;

        return $this;
    }

    /**
     * Gets natureza_juridica
     *
     * @return \NuvemFiscal\Model\CnpjNaturezaJuridica|null
     */
    public function getNaturezaJuridica()
    {
        return $this->container['natureza_juridica'];
    }

    /**
     * Sets natureza_juridica
     *
     * @param \NuvemFiscal\Model\CnpjNaturezaJuridica|null $natureza_juridica natureza_juridica
     *
     * @return self
     */
    public function setNaturezaJuridica($natureza_juridica)
    {
        if (is_null($natureza_juridica)) {
            throw new \InvalidArgumentException('non-nullable natureza_juridica cannot be null');
        }
        $this->container['natureza_juridica'] = $natureza_juridica;

        return $this;
    }

    /**
     * Gets capital_social
     *
     * @return float|null
     */
    public function getCapitalSocial()
    {
        return $this->container['capital_social'];
    }

    /**
     * Sets capital_social
     *
     * @param float|null $capital_social Capital social da empresa.
     *
     * @return self
     */
    public function setCapitalSocial($capital_social)
    {
        if (is_null($capital_social)) {
            throw new \InvalidArgumentException('non-nullable capital_social cannot be null');
        }
        $this->container['capital_social'] = $capital_social;

        return $this;
    }

    /**
     * Gets porte
     *
     * @return \NuvemFiscal\Model\CnpjPorteEmpresa|null
     */
    public function getPorte()
    {
        return $this->container['porte'];
    }

    /**
     * Sets porte
     *
     * @param \NuvemFiscal\Model\CnpjPorteEmpresa|null $porte porte
     *
     * @return self
     */
    public function setPorte($porte)
    {
        if (is_null($porte)) {
            throw new \InvalidArgumentException('non-nullable porte cannot be null');
        }
        $this->container['porte'] = $porte;

        return $this;
    }

    /**
     * Gets ente_federativo_responsavel
     *
     * @return string|null
     */
    public function getEnteFederativoResponsavel()
    {
        return $this->container['ente_federativo_responsavel'];
    }

    /**
     * Sets ente_federativo_responsavel
     *
     * @param string|null $ente_federativo_responsavel O ente federativo responsável é preenchido para os casos de órgãos e  entidades do grupo de natureza jurídica 1XXX. Para as demais naturezas,  este atributo fica em branco.
     *
     * @return self
     */
    public function setEnteFederativoResponsavel($ente_federativo_responsavel)
    {
        if (is_null($ente_federativo_responsavel)) {
            throw new \InvalidArgumentException('non-nullable ente_federativo_responsavel cannot be null');
        }
        $this->container['ente_federativo_responsavel'] = $ente_federativo_responsavel;

        return $this;
    }

    /**
     * Gets situacao_cadastral
     *
     * @return \NuvemFiscal\Model\CnpjSituacaoCadastral|null
     */
    public function getSituacaoCadastral()
    {
        return $this->container['situacao_cadastral'];
    }

    /**
     * Sets situacao_cadastral
     *
     * @param \NuvemFiscal\Model\CnpjSituacaoCadastral|null $situacao_cadastral situacao_cadastral
     *
     * @return self
     */
    public function setSituacaoCadastral($situacao_cadastral)
    {
        if (is_null($situacao_cadastral)) {
            throw new \InvalidArgumentException('non-nullable situacao_cadastral cannot be null');
        }
        $this->container['situacao_cadastral'] = $situacao_cadastral;

        return $this;
    }

    /**
     * Gets motivo_situacao_cadastral
     *
     * @return \NuvemFiscal\Model\CnpjMotivoSituacaoCadastral|null
     */
    public function getMotivoSituacaoCadastral()
    {
        return $this->container['motivo_situacao_cadastral'];
    }

    /**
     * Sets motivo_situacao_cadastral
     *
     * @param \NuvemFiscal\Model\CnpjMotivoSituacaoCadastral|null $motivo_situacao_cadastral motivo_situacao_cadastral
     *
     * @return self
     */
    public function setMotivoSituacaoCadastral($motivo_situacao_cadastral)
    {
        if (is_null($motivo_situacao_cadastral)) {
            throw new \InvalidArgumentException('non-nullable motivo_situacao_cadastral cannot be null');
        }
        $this->container['motivo_situacao_cadastral'] = $motivo_situacao_cadastral;

        return $this;
    }

    /**
     * Gets nome_da_cidade_no_exterior
     *
     * @return string|null
     */
    public function getNomeDaCidadeNoExterior()
    {
        return $this->container['nome_da_cidade_no_exterior'];
    }

    /**
     * Sets nome_da_cidade_no_exterior
     *
     * @param string|null $nome_da_cidade_no_exterior Nome da cidade no exterior.
     *
     * @return self
     */
    public function setNomeDaCidadeNoExterior($nome_da_cidade_no_exterior)
    {
        if (is_null($nome_da_cidade_no_exterior)) {
            throw new \InvalidArgumentException('non-nullable nome_da_cidade_no_exterior cannot be null');
        }
        $this->container['nome_da_cidade_no_exterior'] = $nome_da_cidade_no_exterior;

        return $this;
    }

    /**
     * Gets pais
     *
     * @return \NuvemFiscal\Model\CnpjPais|null
     */
    public function getPais()
    {
        return $this->container['pais'];
    }

    /**
     * Sets pais
     *
     * @param \NuvemFiscal\Model\CnpjPais|null $pais pais
     *
     * @return self
     */
    public function setPais($pais)
    {
        if (is_null($pais)) {
            throw new \InvalidArgumentException('non-nullable pais cannot be null');
        }
        $this->container['pais'] = $pais;

        return $this;
    }

    /**
     * Gets atividade_principal
     *
     * @return \NuvemFiscal\Model\CnpjCnae|null
     */
    public function getAtividadePrincipal()
    {
        return $this->container['atividade_principal'];
    }

    /**
     * Sets atividade_principal
     *
     * @param \NuvemFiscal\Model\CnpjCnae|null $atividade_principal atividade_principal
     *
     * @return self
     */
    public function setAtividadePrincipal($atividade_principal)
    {
        if (is_null($atividade_principal)) {
            throw new \InvalidArgumentException('non-nullable atividade_principal cannot be null');
        }
        $this->container['atividade_principal'] = $atividade_principal;

        return $this;
    }

    /**
     * Gets atividades_secundarias
     *
     * @return \NuvemFiscal\Model\CnpjCnaeSecundario[]|null
     */
    public function getAtividadesSecundarias()
    {
        return $this->container['atividades_secundarias'];
    }

    /**
     * Sets atividades_secundarias
     *
     * @param \NuvemFiscal\Model\CnpjCnaeSecundario[]|null $atividades_secundarias atividades_secundarias
     *
     * @return self
     */
    public function setAtividadesSecundarias($atividades_secundarias)
    {
        if (is_null($atividades_secundarias)) {
            throw new \InvalidArgumentException('non-nullable atividades_secundarias cannot be null');
        }
        $this->container['atividades_secundarias'] = $atividades_secundarias;

        return $this;
    }

    /**
     * Gets endereco
     *
     * @return \NuvemFiscal\Model\CnpjEndereco|null
     */
    public function getEndereco()
    {
        return $this->container['endereco'];
    }

    /**
     * Sets endereco
     *
     * @param \NuvemFiscal\Model\CnpjEndereco|null $endereco endereco
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
     * Gets telefones
     *
     * @return \NuvemFiscal\Model\CnpjTelefone[]|null
     */
    public function getTelefones()
    {
        return $this->container['telefones'];
    }

    /**
     * Sets telefones
     *
     * @param \NuvemFiscal\Model\CnpjTelefone[]|null $telefones telefones
     *
     * @return self
     */
    public function setTelefones($telefones)
    {
        if (is_null($telefones)) {
            throw new \InvalidArgumentException('non-nullable telefones cannot be null');
        }
        $this->container['telefones'] = $telefones;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email E-mail do contribuinte.
     *
     * @return self
     */
    public function setEmail($email)
    {
        if (is_null($email)) {
            throw new \InvalidArgumentException('non-nullable email cannot be null');
        }
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets situacao_especial
     *
     * @return \NuvemFiscal\Model\CnpjSituacaoEspecial|null
     */
    public function getSituacaoEspecial()
    {
        return $this->container['situacao_especial'];
    }

    /**
     * Sets situacao_especial
     *
     * @param \NuvemFiscal\Model\CnpjSituacaoEspecial|null $situacao_especial situacao_especial
     *
     * @return self
     */
    public function setSituacaoEspecial($situacao_especial)
    {
        if (is_null($situacao_especial)) {
            throw new \InvalidArgumentException('non-nullable situacao_especial cannot be null');
        }
        $this->container['situacao_especial'] = $situacao_especial;

        return $this;
    }

    /**
     * Gets simples
     *
     * @return \NuvemFiscal\Model\CnpjOpcaoSimples|null
     */
    public function getSimples()
    {
        return $this->container['simples'];
    }

    /**
     * Sets simples
     *
     * @param \NuvemFiscal\Model\CnpjOpcaoSimples|null $simples simples
     *
     * @return self
     */
    public function setSimples($simples)
    {
        if (is_null($simples)) {
            throw new \InvalidArgumentException('non-nullable simples cannot be null');
        }
        $this->container['simples'] = $simples;

        return $this;
    }

    /**
     * Gets simei
     *
     * @return \NuvemFiscal\Model\CnpjOpcaoSimei|null
     */
    public function getSimei()
    {
        return $this->container['simei'];
    }

    /**
     * Sets simei
     *
     * @param \NuvemFiscal\Model\CnpjOpcaoSimei|null $simei simei
     *
     * @return self
     */
    public function setSimei($simei)
    {
        if (is_null($simei)) {
            throw new \InvalidArgumentException('non-nullable simei cannot be null');
        }
        $this->container['simei'] = $simei;

        return $this;
    }

    /**
     * Gets socios
     *
     * @return \NuvemFiscal\Model\CnpjSocio[]|null
     */
    public function getSocios()
    {
        return $this->container['socios'];
    }

    /**
     * Sets socios
     *
     * @param \NuvemFiscal\Model\CnpjSocio[]|null $socios socios
     *
     * @return self
     */
    public function setSocios($socios)
    {
        if (is_null($socios)) {
            throw new \InvalidArgumentException('non-nullable socios cannot be null');
        }
        $this->container['socios'] = $socios;

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


