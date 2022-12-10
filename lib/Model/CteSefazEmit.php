<?php
/**
 * CteSefazEmit
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
 * CteSefazEmit Class Doc Comment
 *
 * @category Class
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CteSefazEmit implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CteSefazEmit';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cnpj' => 'string',
        'cpf' => 'string',
        'ie' => 'string',
        'iest' => 'string',
        'x_nome' => 'string',
        'x_fant' => 'string',
        'ender_emit' => '\NuvemFiscal\Model\CteSefazEndeEmi',
        'crt' => 'int'
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
        'ie' => null,
        'iest' => null,
        'x_nome' => null,
        'x_fant' => null,
        'ender_emit' => null,
        'crt' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'cnpj' => false,
		'cpf' => false,
		'ie' => false,
		'iest' => false,
		'x_nome' => false,
		'x_fant' => false,
		'ender_emit' => false,
		'crt' => false
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
        'ie' => 'IE',
        'iest' => 'IEST',
        'x_nome' => 'xNome',
        'x_fant' => 'xFant',
        'ender_emit' => 'enderEmit',
        'crt' => 'CRT'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cnpj' => 'setCnpj',
        'cpf' => 'setCpf',
        'ie' => 'setIe',
        'iest' => 'setIest',
        'x_nome' => 'setXNome',
        'x_fant' => 'setXFant',
        'ender_emit' => 'setEnderEmit',
        'crt' => 'setCrt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cnpj' => 'getCnpj',
        'cpf' => 'getCpf',
        'ie' => 'getIe',
        'iest' => 'getIest',
        'x_nome' => 'getXNome',
        'x_fant' => 'getXFant',
        'ender_emit' => 'getEnderEmit',
        'crt' => 'getCrt'
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
        $this->setIfExists('ie', $data ?? [], null);
        $this->setIfExists('iest', $data ?? [], null);
        $this->setIfExists('x_nome', $data ?? [], null);
        $this->setIfExists('x_fant', $data ?? [], null);
        $this->setIfExists('ender_emit', $data ?? [], null);
        $this->setIfExists('crt', $data ?? [], null);
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
     * @param string|null $cnpj CNPJ do emitente.  Informar zeros não significativos.  Obrigatório caso o emitente seja pessoa jurídica.
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
     * @param string|null $cpf CPF do emitente.  Informar zeros não significativos.    Usar com série específica 920-969 para emitente pessoa física com inscrição estadual.  Obrigatorio caso o emitente seja pessoa física.
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
     * @param string|null $ie Inscrição Estadual do Emitente.  A IE do emitente somente ficará sem informação para o caso do Regime Especial da NFF (tpEmis=3).  Caso não seja informado, será utilizado o do cadastro da empresa.
     *
     * @return self
     */
    public function setIe($ie)
    {

        if (is_null($ie)) {
            throw new \InvalidArgumentException('non-nullable ie cannot be null');
        }

        $this->container['ie'] = $ie;

        return $this;
    }

    /**
     * Gets iest
     *
     * @return string|null
     */
    public function getIest()
    {
        return $this->container['iest'];
    }

    /**
     * Sets iest
     *
     * @param string|null $iest Inscrição Estadual do Substituto Tributário.
     *
     * @return self
     */
    public function setIest($iest)
    {

        if (is_null($iest)) {
            throw new \InvalidArgumentException('non-nullable iest cannot be null');
        }

        $this->container['iest'] = $iest;

        return $this;
    }

    /**
     * Gets x_nome
     *
     * @return string|null
     */
    public function getXNome()
    {
        return $this->container['x_nome'];
    }

    /**
     * Sets x_nome
     *
     * @param string|null $x_nome Razão social ou Nome do emitente.  Caso não seja informado, será utilizado o do cadastro da empresa.
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
     * Gets x_fant
     *
     * @return string|null
     */
    public function getXFant()
    {
        return $this->container['x_fant'];
    }

    /**
     * Sets x_fant
     *
     * @param string|null $x_fant Nome fantasia.  Caso não seja informado, será utilizado o do cadastro da empresa.
     *
     * @return self
     */
    public function setXFant($x_fant)
    {

        if (is_null($x_fant)) {
            throw new \InvalidArgumentException('non-nullable x_fant cannot be null');
        }

        $this->container['x_fant'] = $x_fant;

        return $this;
    }

    /**
     * Gets ender_emit
     *
     * @return \NuvemFiscal\Model\CteSefazEndeEmi|null
     */
    public function getEnderEmit()
    {
        return $this->container['ender_emit'];
    }

    /**
     * Sets ender_emit
     *
     * @param \NuvemFiscal\Model\CteSefazEndeEmi|null $ender_emit ender_emit
     *
     * @return self
     */
    public function setEnderEmit($ender_emit)
    {

        if (is_null($ender_emit)) {
            throw new \InvalidArgumentException('non-nullable ender_emit cannot be null');
        }

        $this->container['ender_emit'] = $ender_emit;

        return $this;
    }

    /**
     * Gets crt
     *
     * @return int|null
     */
    public function getCrt()
    {
        return $this->container['crt'];
    }

    /**
     * Sets crt
     *
     * @param int|null $crt Código do Regime Tributário.  Informar: 1=Simples Nacional;   2=Simples Nacional, excesso sublimite de receita bruta;  3=Regime Normal.
     *
     * @return self
     */
    public function setCrt($crt)
    {

        if (is_null($crt)) {
            throw new \InvalidArgumentException('non-nullable crt cannot be null');
        }

        $this->container['crt'] = $crt;

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


