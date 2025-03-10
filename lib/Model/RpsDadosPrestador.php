<?php
/**
 * RpsDadosPrestador
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
 * RpsDadosPrestador Class Doc Comment
 *
 * @category Class
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class RpsDadosPrestador implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RpsDadosPrestador';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cpf_cnpj' => 'string',
        'inscricao_municipal' => 'string',
        'nome_razao_social' => 'string',
        'nome_fantasia' => 'string',
        'fone' => 'string',
        'email' => 'string',
        'endereco' => '\NuvemFiscal\Model\EmpresaEndereco',
        'optante_simples_nacional' => 'bool',
        'regime_tributacao' => 'int',
        'regime_especial_tributacao' => 'int',
        'incentivo_fiscal' => 'bool',
        'incentivador_cultural' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'cpf_cnpj' => null,
        'inscricao_municipal' => null,
        'nome_razao_social' => null,
        'nome_fantasia' => null,
        'fone' => null,
        'email' => null,
        'endereco' => null,
        'optante_simples_nacional' => null,
        'regime_tributacao' => null,
        'regime_especial_tributacao' => null,
        'incentivo_fiscal' => null,
        'incentivador_cultural' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'cpf_cnpj' => false,
        'inscricao_municipal' => false,
        'nome_razao_social' => false,
        'nome_fantasia' => false,
        'fone' => false,
        'email' => false,
        'endereco' => false,
        'optante_simples_nacional' => false,
        'regime_tributacao' => false,
        'regime_especial_tributacao' => false,
        'incentivo_fiscal' => false,
        'incentivador_cultural' => false
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
        'cpf_cnpj' => 'cpf_cnpj',
        'inscricao_municipal' => 'inscricao_municipal',
        'nome_razao_social' => 'nome_razao_social',
        'nome_fantasia' => 'nome_fantasia',
        'fone' => 'fone',
        'email' => 'email',
        'endereco' => 'endereco',
        'optante_simples_nacional' => 'optante_simples_nacional',
        'regime_tributacao' => 'regime_tributacao',
        'regime_especial_tributacao' => 'regime_especial_tributacao',
        'incentivo_fiscal' => 'incentivo_fiscal',
        'incentivador_cultural' => 'incentivador_cultural'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cpf_cnpj' => 'setCpfCnpj',
        'inscricao_municipal' => 'setInscricaoMunicipal',
        'nome_razao_social' => 'setNomeRazaoSocial',
        'nome_fantasia' => 'setNomeFantasia',
        'fone' => 'setFone',
        'email' => 'setEmail',
        'endereco' => 'setEndereco',
        'optante_simples_nacional' => 'setOptanteSimplesNacional',
        'regime_tributacao' => 'setRegimeTributacao',
        'regime_especial_tributacao' => 'setRegimeEspecialTributacao',
        'incentivo_fiscal' => 'setIncentivoFiscal',
        'incentivador_cultural' => 'setIncentivadorCultural'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cpf_cnpj' => 'getCpfCnpj',
        'inscricao_municipal' => 'getInscricaoMunicipal',
        'nome_razao_social' => 'getNomeRazaoSocial',
        'nome_fantasia' => 'getNomeFantasia',
        'fone' => 'getFone',
        'email' => 'getEmail',
        'endereco' => 'getEndereco',
        'optante_simples_nacional' => 'getOptanteSimplesNacional',
        'regime_tributacao' => 'getRegimeTributacao',
        'regime_especial_tributacao' => 'getRegimeEspecialTributacao',
        'incentivo_fiscal' => 'getIncentivoFiscal',
        'incentivador_cultural' => 'getIncentivadorCultural'
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
        $this->setIfExists('cpf_cnpj', $data ?? [], null);
        $this->setIfExists('inscricao_municipal', $data ?? [], null);
        $this->setIfExists('nome_razao_social', $data ?? [], null);
        $this->setIfExists('nome_fantasia', $data ?? [], null);
        $this->setIfExists('fone', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('endereco', $data ?? [], null);
        $this->setIfExists('optante_simples_nacional', $data ?? [], null);
        $this->setIfExists('regime_tributacao', $data ?? [], null);
        $this->setIfExists('regime_especial_tributacao', $data ?? [], null);
        $this->setIfExists('incentivo_fiscal', $data ?? [], null);
        $this->setIfExists('incentivador_cultural', $data ?? [], null);
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
     * Gets cpf_cnpj
     *
     * @return string|null
     */
    public function getCpfCnpj()
    {
        return $this->container['cpf_cnpj'];
    }

    /**
     * Sets cpf_cnpj
     *
     * @param string|null $cpf_cnpj cpf_cnpj
     *
     * @return self
     */
    public function setCpfCnpj($cpf_cnpj)
    {
        if (is_null($cpf_cnpj)) {
            throw new \InvalidArgumentException('non-nullable cpf_cnpj cannot be null');
        }
        $this->container['cpf_cnpj'] = $cpf_cnpj;

        return $this;
    }

    /**
     * Gets inscricao_municipal
     *
     * @return string|null
     */
    public function getInscricaoMunicipal()
    {
        return $this->container['inscricao_municipal'];
    }

    /**
     * Sets inscricao_municipal
     *
     * @param string|null $inscricao_municipal inscricao_municipal
     *
     * @return self
     */
    public function setInscricaoMunicipal($inscricao_municipal)
    {
        if (is_null($inscricao_municipal)) {
            throw new \InvalidArgumentException('non-nullable inscricao_municipal cannot be null');
        }
        $this->container['inscricao_municipal'] = $inscricao_municipal;

        return $this;
    }

    /**
     * Gets nome_razao_social
     *
     * @return string|null
     */
    public function getNomeRazaoSocial()
    {
        return $this->container['nome_razao_social'];
    }

    /**
     * Sets nome_razao_social
     *
     * @param string|null $nome_razao_social nome_razao_social
     *
     * @return self
     */
    public function setNomeRazaoSocial($nome_razao_social)
    {
        if (is_null($nome_razao_social)) {
            throw new \InvalidArgumentException('non-nullable nome_razao_social cannot be null');
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
     * @param string|null $nome_fantasia nome_fantasia
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
     * Gets fone
     *
     * @return string|null
     */
    public function getFone()
    {
        return $this->container['fone'];
    }

    /**
     * Sets fone
     *
     * @param string|null $fone fone
     *
     * @return self
     */
    public function setFone($fone)
    {
        if (is_null($fone)) {
            throw new \InvalidArgumentException('non-nullable fone cannot be null');
        }
        $this->container['fone'] = $fone;

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
     * @param string|null $email email
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
     * Gets endereco
     *
     * @return \NuvemFiscal\Model\EmpresaEndereco|null
     */
    public function getEndereco()
    {
        return $this->container['endereco'];
    }

    /**
     * Sets endereco
     *
     * @param \NuvemFiscal\Model\EmpresaEndereco|null $endereco endereco
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
     * Gets optante_simples_nacional
     *
     * @return bool|null
     */
    public function getOptanteSimplesNacional()
    {
        return $this->container['optante_simples_nacional'];
    }

    /**
     * Sets optante_simples_nacional
     *
     * @param bool|null $optante_simples_nacional optante_simples_nacional
     *
     * @return self
     */
    public function setOptanteSimplesNacional($optante_simples_nacional)
    {
        if (is_null($optante_simples_nacional)) {
            throw new \InvalidArgumentException('non-nullable optante_simples_nacional cannot be null');
        }
        $this->container['optante_simples_nacional'] = $optante_simples_nacional;

        return $this;
    }

    /**
     * Gets regime_tributacao
     *
     * @return int|null
     */
    public function getRegimeTributacao()
    {
        return $this->container['regime_tributacao'];
    }

    /**
     * Sets regime_tributacao
     *
     * @param int|null $regime_tributacao regime_tributacao
     *
     * @return self
     */
    public function setRegimeTributacao($regime_tributacao)
    {
        if (is_null($regime_tributacao)) {
            throw new \InvalidArgumentException('non-nullable regime_tributacao cannot be null');
        }
        $this->container['regime_tributacao'] = $regime_tributacao;

        return $this;
    }

    /**
     * Gets regime_especial_tributacao
     *
     * @return int|null
     */
    public function getRegimeEspecialTributacao()
    {
        return $this->container['regime_especial_tributacao'];
    }

    /**
     * Sets regime_especial_tributacao
     *
     * @param int|null $regime_especial_tributacao regime_especial_tributacao
     *
     * @return self
     */
    public function setRegimeEspecialTributacao($regime_especial_tributacao)
    {
        if (is_null($regime_especial_tributacao)) {
            throw new \InvalidArgumentException('non-nullable regime_especial_tributacao cannot be null');
        }
        $this->container['regime_especial_tributacao'] = $regime_especial_tributacao;

        return $this;
    }

    /**
     * Gets incentivo_fiscal
     *
     * @return bool|null
     */
    public function getIncentivoFiscal()
    {
        return $this->container['incentivo_fiscal'];
    }

    /**
     * Sets incentivo_fiscal
     *
     * @param bool|null $incentivo_fiscal incentivo_fiscal
     *
     * @return self
     */
    public function setIncentivoFiscal($incentivo_fiscal)
    {
        if (is_null($incentivo_fiscal)) {
            throw new \InvalidArgumentException('non-nullable incentivo_fiscal cannot be null');
        }
        $this->container['incentivo_fiscal'] = $incentivo_fiscal;

        return $this;
    }

    /**
     * Gets incentivador_cultural
     *
     * @return bool|null
     */
    public function getIncentivadorCultural()
    {
        return $this->container['incentivador_cultural'];
    }

    /**
     * Sets incentivador_cultural
     *
     * @param bool|null $incentivador_cultural incentivador_cultural
     *
     * @return self
     */
    public function setIncentivadorCultural($incentivador_cultural)
    {
        if (is_null($incentivador_cultural)) {
            throw new \InvalidArgumentException('non-nullable incentivador_cultural cannot be null');
        }
        $this->container['incentivador_cultural'] = $incentivador_cultural;

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


