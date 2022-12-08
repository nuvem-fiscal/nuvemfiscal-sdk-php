<?php
/**
 * CteSefazEnderFer
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
 * Versão do documento OpenAPI: 1.2.2
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
 * CteSefazEnderFer Class Doc Comment
 *
 * @category Class
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CteSefazEnderFer implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CteSefazEnderFer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'x_lgr' => 'string',
        'nro' => 'string',
        'x_cpl' => 'string',
        'x_bairro' => 'string',
        'c_mun' => 'string',
        'x_mun' => 'string',
        'cep' => 'string',
        'uf' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'x_lgr' => null,
        'nro' => null,
        'x_cpl' => null,
        'x_bairro' => null,
        'c_mun' => null,
        'x_mun' => null,
        'cep' => null,
        'uf' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'x_lgr' => false,
		'nro' => false,
		'x_cpl' => false,
		'x_bairro' => false,
		'c_mun' => false,
		'x_mun' => false,
		'cep' => false,
		'uf' => false
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
        'x_lgr' => 'xLgr',
        'nro' => 'nro',
        'x_cpl' => 'xCpl',
        'x_bairro' => 'xBairro',
        'c_mun' => 'cMun',
        'x_mun' => 'xMun',
        'cep' => 'CEP',
        'uf' => 'UF'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'x_lgr' => 'setXLgr',
        'nro' => 'setNro',
        'x_cpl' => 'setXCpl',
        'x_bairro' => 'setXBairro',
        'c_mun' => 'setCMun',
        'x_mun' => 'setXMun',
        'cep' => 'setCep',
        'uf' => 'setUf'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'x_lgr' => 'getXLgr',
        'nro' => 'getNro',
        'x_cpl' => 'getXCpl',
        'x_bairro' => 'getXBairro',
        'c_mun' => 'getCMun',
        'x_mun' => 'getXMun',
        'cep' => 'getCep',
        'uf' => 'getUf'
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
        $this->setIfExists('x_lgr', $data ?? [], null);
        $this->setIfExists('nro', $data ?? [], null);
        $this->setIfExists('x_cpl', $data ?? [], null);
        $this->setIfExists('x_bairro', $data ?? [], null);
        $this->setIfExists('c_mun', $data ?? [], null);
        $this->setIfExists('x_mun', $data ?? [], null);
        $this->setIfExists('cep', $data ?? [], null);
        $this->setIfExists('uf', $data ?? [], null);
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

        if ($this->container['x_lgr'] === null) {
            $invalidProperties[] = "'x_lgr' can't be null";
        }
        if ($this->container['c_mun'] === null) {
            $invalidProperties[] = "'c_mun' can't be null";
        }
        if ($this->container['x_mun'] === null) {
            $invalidProperties[] = "'x_mun' can't be null";
        }
        if ($this->container['cep'] === null) {
            $invalidProperties[] = "'cep' can't be null";
        }
        if ($this->container['uf'] === null) {
            $invalidProperties[] = "'uf' can't be null";
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
     * Gets x_lgr
     *
     * @return string
     */
    public function getXLgr()
    {
        return $this->container['x_lgr'];
    }

    /**
     * Sets x_lgr
     *
     * @param string $x_lgr Logradouro.
     *
     * @return self
     */
    public function setXLgr($x_lgr)
    {

        if (is_null($x_lgr)) {
            throw new \InvalidArgumentException('non-nullable x_lgr cannot be null');
        }

        $this->container['x_lgr'] = $x_lgr;

        return $this;
    }

    /**
     * Gets nro
     *
     * @return string|null
     */
    public function getNro()
    {
        return $this->container['nro'];
    }

    /**
     * Sets nro
     *
     * @param string|null $nro Número.
     *
     * @return self
     */
    public function setNro($nro)
    {

        if (is_null($nro)) {
            throw new \InvalidArgumentException('non-nullable nro cannot be null');
        }

        $this->container['nro'] = $nro;

        return $this;
    }

    /**
     * Gets x_cpl
     *
     * @return string|null
     */
    public function getXCpl()
    {
        return $this->container['x_cpl'];
    }

    /**
     * Sets x_cpl
     *
     * @param string|null $x_cpl Complemento.
     *
     * @return self
     */
    public function setXCpl($x_cpl)
    {

        if (is_null($x_cpl)) {
            throw new \InvalidArgumentException('non-nullable x_cpl cannot be null');
        }

        $this->container['x_cpl'] = $x_cpl;

        return $this;
    }

    /**
     * Gets x_bairro
     *
     * @return string|null
     */
    public function getXBairro()
    {
        return $this->container['x_bairro'];
    }

    /**
     * Sets x_bairro
     *
     * @param string|null $x_bairro Bairro.
     *
     * @return self
     */
    public function setXBairro($x_bairro)
    {

        if (is_null($x_bairro)) {
            throw new \InvalidArgumentException('non-nullable x_bairro cannot be null');
        }

        $this->container['x_bairro'] = $x_bairro;

        return $this;
    }

    /**
     * Gets c_mun
     *
     * @return string
     */
    public function getCMun()
    {
        return $this->container['c_mun'];
    }

    /**
     * Sets c_mun
     *
     * @param string $c_mun Código do município.  Utilizar a tabela do IBGE       Informar 9999999 para operações com o exterior.
     *
     * @return self
     */
    public function setCMun($c_mun)
    {

        if (is_null($c_mun)) {
            throw new \InvalidArgumentException('non-nullable c_mun cannot be null');
        }

        $this->container['c_mun'] = $c_mun;

        return $this;
    }

    /**
     * Gets x_mun
     *
     * @return string
     */
    public function getXMun()
    {
        return $this->container['x_mun'];
    }

    /**
     * Sets x_mun
     *
     * @param string $x_mun Nome do município.  Informar EXTERIOR para operações com o exterior.
     *
     * @return self
     */
    public function setXMun($x_mun)
    {

        if (is_null($x_mun)) {
            throw new \InvalidArgumentException('non-nullable x_mun cannot be null');
        }

        $this->container['x_mun'] = $x_mun;

        return $this;
    }

    /**
     * Gets cep
     *
     * @return string
     */
    public function getCep()
    {
        return $this->container['cep'];
    }

    /**
     * Sets cep
     *
     * @param string $cep CEP.
     *
     * @return self
     */
    public function setCep($cep)
    {

        if (is_null($cep)) {
            throw new \InvalidArgumentException('non-nullable cep cannot be null');
        }

        $this->container['cep'] = $cep;

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
     * @param string $uf Sigla da UF.  Informar EX para operações com o exterior.
     *
     * @return self
     */
    public function setUf($uf)
    {

        if (is_null($uf)) {
            throw new \InvalidArgumentException('non-nullable uf cannot be null');
        }

        $this->container['uf'] = $uf;

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


