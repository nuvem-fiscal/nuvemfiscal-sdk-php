<?php
/**
 * CteSefazFluxo
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
 * CteSefazFluxo Class Doc Comment
 *
 * @category Class
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CteSefazFluxo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CteSefazFluxo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'x_orig' => 'string',
        'pass' => '\NuvemFiscal\Model\CteSefazPass[]',
        'x_dest' => 'string',
        'x_rota' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'x_orig' => null,
        'pass' => null,
        'x_dest' => null,
        'x_rota' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'x_orig' => false,
		'pass' => false,
		'x_dest' => false,
		'x_rota' => false
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
        'x_orig' => 'xOrig',
        'pass' => 'pass',
        'x_dest' => 'xDest',
        'x_rota' => 'xRota'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'x_orig' => 'setXOrig',
        'pass' => 'setPass',
        'x_dest' => 'setXDest',
        'x_rota' => 'setXRota'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'x_orig' => 'getXOrig',
        'pass' => 'getPass',
        'x_dest' => 'getXDest',
        'x_rota' => 'getXRota'
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
        $this->setIfExists('x_orig', $data ?? [], null);
        $this->setIfExists('pass', $data ?? [], null);
        $this->setIfExists('x_dest', $data ?? [], null);
        $this->setIfExists('x_rota', $data ?? [], null);
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
     * Gets x_orig
     *
     * @return string|null
     */
    public function getXOrig()
    {
        return $this->container['x_orig'];
    }

    /**
     * Sets x_orig
     *
     * @param string|null $x_orig Sigla ou código interno da Filial/Porto/Estação/ Aeroporto de Origem.  Observações para o modal aéreo:                - Preenchimento obrigatório para o modal aéreo.                - O código de três letras IATA do aeroporto de partida deverá ser incluído como primeira anotação. Quando não for possível, utilizar a sigla OACI.
     *
     * @return self
     */
    public function setXOrig($x_orig)
    {

        if (is_null($x_orig)) {
            throw new \InvalidArgumentException('non-nullable x_orig cannot be null');
        }

        $this->container['x_orig'] = $x_orig;

        return $this;
    }

    /**
     * Gets pass
     *
     * @return \NuvemFiscal\Model\CteSefazPass[]|null
     */
    public function getPass()
    {
        return $this->container['pass'];
    }

    /**
     * Sets pass
     *
     * @param \NuvemFiscal\Model\CteSefazPass[]|null $pass pass
     *
     * @return self
     */
    public function setPass($pass)
    {

        if (is_null($pass)) {
            throw new \InvalidArgumentException('non-nullable pass cannot be null');
        }

        $this->container['pass'] = $pass;

        return $this;
    }

    /**
     * Gets x_dest
     *
     * @return string|null
     */
    public function getXDest()
    {
        return $this->container['x_dest'];
    }

    /**
     * Sets x_dest
     *
     * @param string|null $x_dest Sigla ou código interno da Filial/Porto/Estação/Aeroporto de Destino.  Observações para o modal aéreo:                - Preenchimento obrigatório para o modal aéreo.                - Deverá ser incluído o código de três letras IATA do aeroporto de destino. Quando não for possível, utilizar a sigla OACI.
     *
     * @return self
     */
    public function setXDest($x_dest)
    {

        if (is_null($x_dest)) {
            throw new \InvalidArgumentException('non-nullable x_dest cannot be null');
        }

        $this->container['x_dest'] = $x_dest;

        return $this;
    }

    /**
     * Gets x_rota
     *
     * @return string|null
     */
    public function getXRota()
    {
        return $this->container['x_rota'];
    }

    /**
     * Sets x_rota
     *
     * @param string|null $x_rota Código da Rota de Entrega.
     *
     * @return self
     */
    public function setXRota($x_rota)
    {

        if (is_null($x_rota)) {
            throw new \InvalidArgumentException('non-nullable x_rota cannot be null');
        }

        $this->container['x_rota'] = $x_rota;

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


