<?php
/**
 * CteInfCorrecao
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
 * CteInfCorrecao Class Doc Comment
 *
 * @category Class
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CteInfCorrecao implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CteInfCorrecao';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'grupo_alterado' => 'string',
        'campo_alterado' => 'string',
        'valor_alterado' => 'string',
        'numero_item_alterado' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'grupo_alterado' => null,
        'campo_alterado' => null,
        'valor_alterado' => null,
        'numero_item_alterado' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'grupo_alterado' => false,
        'campo_alterado' => false,
        'valor_alterado' => false,
        'numero_item_alterado' => true
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
        'grupo_alterado' => 'grupo_alterado',
        'campo_alterado' => 'campo_alterado',
        'valor_alterado' => 'valor_alterado',
        'numero_item_alterado' => 'numero_item_alterado'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'grupo_alterado' => 'setGrupoAlterado',
        'campo_alterado' => 'setCampoAlterado',
        'valor_alterado' => 'setValorAlterado',
        'numero_item_alterado' => 'setNumeroItemAlterado'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'grupo_alterado' => 'getGrupoAlterado',
        'campo_alterado' => 'getCampoAlterado',
        'valor_alterado' => 'getValorAlterado',
        'numero_item_alterado' => 'getNumeroItemAlterado'
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
        $this->setIfExists('grupo_alterado', $data ?? [], null);
        $this->setIfExists('campo_alterado', $data ?? [], null);
        $this->setIfExists('valor_alterado', $data ?? [], null);
        $this->setIfExists('numero_item_alterado', $data ?? [], null);
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

        if ($this->container['grupo_alterado'] === null) {
            $invalidProperties[] = "'grupo_alterado' can't be null";
        }
        if ((mb_strlen($this->container['grupo_alterado']) > 20)) {
            $invalidProperties[] = "invalid value for 'grupo_alterado', the character length must be smaller than or equal to 20.";
        }

        if ((mb_strlen($this->container['grupo_alterado']) < 1)) {
            $invalidProperties[] = "invalid value for 'grupo_alterado', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['campo_alterado'] === null) {
            $invalidProperties[] = "'campo_alterado' can't be null";
        }
        if ((mb_strlen($this->container['campo_alterado']) > 20)) {
            $invalidProperties[] = "invalid value for 'campo_alterado', the character length must be smaller than or equal to 20.";
        }

        if ((mb_strlen($this->container['campo_alterado']) < 1)) {
            $invalidProperties[] = "invalid value for 'campo_alterado', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['valor_alterado'] === null) {
            $invalidProperties[] = "'valor_alterado' can't be null";
        }
        if ((mb_strlen($this->container['valor_alterado']) > 500)) {
            $invalidProperties[] = "invalid value for 'valor_alterado', the character length must be smaller than or equal to 500.";
        }

        if ((mb_strlen($this->container['valor_alterado']) < 1)) {
            $invalidProperties[] = "invalid value for 'valor_alterado', the character length must be bigger than or equal to 1.";
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
     * Gets grupo_alterado
     *
     * @return string
     */
    public function getGrupoAlterado()
    {
        return $this->container['grupo_alterado'];
    }

    /**
     * Sets grupo_alterado
     *
     * @param string $grupo_alterado Indicar o grupo de informações que pertence o \"campo_alterado\". Ex: ide.
     *
     * @return self
     */
    public function setGrupoAlterado($grupo_alterado)
    {
        if (is_null($grupo_alterado)) {
            throw new \InvalidArgumentException('non-nullable grupo_alterado cannot be null');
        }
        if ((mb_strlen($grupo_alterado) > 20)) {
            throw new \InvalidArgumentException('invalid length for $grupo_alterado when calling CteInfCorrecao., must be smaller than or equal to 20.');
        }
        if ((mb_strlen($grupo_alterado) < 1)) {
            throw new \InvalidArgumentException('invalid length for $grupo_alterado when calling CteInfCorrecao., must be bigger than or equal to 1.');
        }

        $this->container['grupo_alterado'] = $grupo_alterado;

        return $this;
    }

    /**
     * Gets campo_alterado
     *
     * @return string
     */
    public function getCampoAlterado()
    {
        return $this->container['campo_alterado'];
    }

    /**
     * Sets campo_alterado
     *
     * @param string $campo_alterado Nome do campo modificado do CT-e Original.
     *
     * @return self
     */
    public function setCampoAlterado($campo_alterado)
    {
        if (is_null($campo_alterado)) {
            throw new \InvalidArgumentException('non-nullable campo_alterado cannot be null');
        }
        if ((mb_strlen($campo_alterado) > 20)) {
            throw new \InvalidArgumentException('invalid length for $campo_alterado when calling CteInfCorrecao., must be smaller than or equal to 20.');
        }
        if ((mb_strlen($campo_alterado) < 1)) {
            throw new \InvalidArgumentException('invalid length for $campo_alterado when calling CteInfCorrecao., must be bigger than or equal to 1.');
        }

        $this->container['campo_alterado'] = $campo_alterado;

        return $this;
    }

    /**
     * Gets valor_alterado
     *
     * @return string
     */
    public function getValorAlterado()
    {
        return $this->container['valor_alterado'];
    }

    /**
     * Sets valor_alterado
     *
     * @param string $valor_alterado Valor correspondente à alteração.
     *
     * @return self
     */
    public function setValorAlterado($valor_alterado)
    {
        if (is_null($valor_alterado)) {
            throw new \InvalidArgumentException('non-nullable valor_alterado cannot be null');
        }
        if ((mb_strlen($valor_alterado) > 500)) {
            throw new \InvalidArgumentException('invalid length for $valor_alterado when calling CteInfCorrecao., must be smaller than or equal to 500.');
        }
        if ((mb_strlen($valor_alterado) < 1)) {
            throw new \InvalidArgumentException('invalid length for $valor_alterado when calling CteInfCorrecao., must be bigger than or equal to 1.');
        }

        $this->container['valor_alterado'] = $valor_alterado;

        return $this;
    }

    /**
     * Gets numero_item_alterado
     *
     * @return int|null
     */
    public function getNumeroItemAlterado()
    {
        return $this->container['numero_item_alterado'];
    }

    /**
     * Sets numero_item_alterado
     *
     * @param int|null $numero_item_alterado Preencher com o indice do item alterado caso a alteração ocorra em uma lista.  OBS: O indice inicia sempre em 1.
     *
     * @return self
     */
    public function setNumeroItemAlterado($numero_item_alterado)
    {
        if (is_null($numero_item_alterado)) {
            array_push($this->openAPINullablesSetToNull, 'numero_item_alterado');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('numero_item_alterado', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['numero_item_alterado'] = $numero_item_alterado;

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


