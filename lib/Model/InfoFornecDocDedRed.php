<?php
/**
 * InfoFornecDocDedRed
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
 * InfoFornecDocDedRed Class Doc Comment
 *
 * @category Class
 * @description Grupo de informações do Fornecedor em Deduções de Serviços.
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class InfoFornecDocDedRed implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'InfoFornecDocDedRed';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cnpj' => 'string',
        'cpf' => 'string',
        'nif' => 'string',
        'c_nao_nif' => 'int',
        'caepf' => 'string',
        'im' => 'string',
        'x_nome' => 'string',
        'end' => '\NuvemFiscal\Model\Endereco',
        'fone' => 'string',
        'email' => 'string'
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
        'cpf' => null,
        'nif' => null,
        'c_nao_nif' => null,
        'caepf' => null,
        'im' => null,
        'x_nome' => null,
        'end' => null,
        'fone' => null,
        'email' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'cnpj' => false,
		'cpf' => false,
		'nif' => false,
		'c_nao_nif' => false,
		'caepf' => false,
		'im' => false,
		'x_nome' => false,
		'end' => false,
		'fone' => false,
		'email' => false
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
        'cnpj' => 'CNPJ',
        'cpf' => 'CPF',
        'nif' => 'NIF',
        'c_nao_nif' => 'cNaoNIF',
        'caepf' => 'CAEPF',
        'im' => 'IM',
        'x_nome' => 'xNome',
        'end' => 'end',
        'fone' => 'fone',
        'email' => 'email'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cnpj' => 'setCnpj',
        'cpf' => 'setCpf',
        'nif' => 'setNif',
        'c_nao_nif' => 'setCNaoNif',
        'caepf' => 'setCaepf',
        'im' => 'setIm',
        'x_nome' => 'setXNome',
        'end' => 'setEnd',
        'fone' => 'setFone',
        'email' => 'setEmail'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cnpj' => 'getCnpj',
        'cpf' => 'getCpf',
        'nif' => 'getNif',
        'c_nao_nif' => 'getCNaoNif',
        'caepf' => 'getCaepf',
        'im' => 'getIm',
        'x_nome' => 'getXNome',
        'end' => 'getEnd',
        'fone' => 'getFone',
        'email' => 'getEmail'
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
        $this->setIfExists('cpf', $data ?? [], null);
        $this->setIfExists('nif', $data ?? [], null);
        $this->setIfExists('c_nao_nif', $data ?? [], null);
        $this->setIfExists('caepf', $data ?? [], null);
        $this->setIfExists('im', $data ?? [], null);
        $this->setIfExists('x_nome', $data ?? [], null);
        $this->setIfExists('end', $data ?? [], null);
        $this->setIfExists('fone', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
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

        if ($this->container['x_nome'] === null) {
            $invalidProperties[] = "'x_nome' can't be null";
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
     * @param string|null $cnpj Número do CNPJ.
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
     * @param string|null $cpf Número do CPF.
     *
     * @return self
     */
    public function setCpf($cpf)
    {

        if (is_null($cpf)) {
            throw new \InvalidArgumentException('non-nullable cpf cannot be null');
        }

        $this->container['cpf'] = $cpf;

        return $this;
    }

    /**
     * Gets nif
     *
     * @return string|null
     */
    public function getNif()
    {
        return $this->container['nif'];
    }

    /**
     * Sets nif
     *
     * @param string|null $nif Número de Identificação Fiscal fornecido por órgão de administração tributária no exterior.
     *
     * @return self
     */
    public function setNif($nif)
    {

        if (is_null($nif)) {
            throw new \InvalidArgumentException('non-nullable nif cannot be null');
        }

        $this->container['nif'] = $nif;

        return $this;
    }

    /**
     * Gets c_nao_nif
     *
     * @return int|null
     */
    public function getCNaoNif()
    {
        return $this->container['c_nao_nif'];
    }

    /**
     * Sets c_nao_nif
     *
     * @param int|null $c_nao_nif Motivo para não informação do NIF:  * 0 - Não informado na nota de origem  * 1 - Dispensado do NIF  * 2 - Não exigência do NIF
     *
     * @return self
     */
    public function setCNaoNif($c_nao_nif)
    {

        if (is_null($c_nao_nif)) {
            throw new \InvalidArgumentException('non-nullable c_nao_nif cannot be null');
        }

        $this->container['c_nao_nif'] = $c_nao_nif;

        return $this;
    }

    /**
     * Gets caepf
     *
     * @return string|null
     */
    public function getCaepf()
    {
        return $this->container['caepf'];
    }

    /**
     * Sets caepf
     *
     * @param string|null $caepf Número do Cadastro de Atividade Econômica da Pessoa Física (CAEPF).
     *
     * @return self
     */
    public function setCaepf($caepf)
    {

        if (is_null($caepf)) {
            throw new \InvalidArgumentException('non-nullable caepf cannot be null');
        }

        $this->container['caepf'] = $caepf;

        return $this;
    }

    /**
     * Gets im
     *
     * @return string|null
     */
    public function getIm()
    {
        return $this->container['im'];
    }

    /**
     * Sets im
     *
     * @param string|null $im Número da inscrição municipal.
     *
     * @return self
     */
    public function setIm($im)
    {

        if (is_null($im)) {
            throw new \InvalidArgumentException('non-nullable im cannot be null');
        }

        $this->container['im'] = $im;

        return $this;
    }

    /**
     * Gets x_nome
     *
     * @return string
     */
    public function getXNome()
    {
        return $this->container['x_nome'];
    }

    /**
     * Sets x_nome
     *
     * @param string $x_nome Nome/Nome Empresarial.
     *
     * @return self
     */
    public function setXNome($x_nome)
    {

        if (is_null($x_nome)) {
            throw new \InvalidArgumentException('non-nullable x_nome cannot be null');
        }

        $this->container['x_nome'] = $x_nome;

        return $this;
    }

    /**
     * Gets end
     *
     * @return \NuvemFiscal\Model\Endereco|null
     */
    public function getEnd()
    {
        return $this->container['end'];
    }

    /**
     * Sets end
     *
     * @param \NuvemFiscal\Model\Endereco|null $end end
     *
     * @return self
     */
    public function setEnd($end)
    {

        if (is_null($end)) {
            throw new \InvalidArgumentException('non-nullable end cannot be null');
        }

        $this->container['end'] = $end;

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
     * @param string|null $fone Número do telefone do prestador:  Preencher com o Código DDD + número do telefone.  Nas operações com exterior é permitido informar o código do país + código da localidade + número do telefone).
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
     * @param string|null $email * E-mail
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

