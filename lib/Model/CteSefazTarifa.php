<?php
/**
 * CteSefazTarifa
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
 * CteSefazTarifa Class Doc Comment
 *
 * @category Class
 * @description Informações de tarifa.
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CteSefazTarifa implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CteSefazTarifa';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cl' => 'string',
        'c_tar' => 'string',
        'v_tar' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'cl' => null,
        'c_tar' => null,
        'v_tar' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'cl' => true,
        'c_tar' => true,
        'v_tar' => true
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
        'cl' => 'CL',
        'c_tar' => 'cTar',
        'v_tar' => 'vTar'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cl' => 'setCl',
        'c_tar' => 'setCTar',
        'v_tar' => 'setVTar'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cl' => 'getCl',
        'c_tar' => 'getCTar',
        'v_tar' => 'getVTar'
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
        $this->setIfExists('cl', $data ?? [], null);
        $this->setIfExists('c_tar', $data ?? [], null);
        $this->setIfExists('v_tar', $data ?? [], null);
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

        if ($this->container['cl'] === null) {
            $invalidProperties[] = "'cl' can't be null";
        }
        if ((mb_strlen($this->container['cl']) > 1)) {
            $invalidProperties[] = "invalid value for 'cl', the character length must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['c_tar']) && (mb_strlen($this->container['c_tar']) > 4)) {
            $invalidProperties[] = "invalid value for 'c_tar', the character length must be smaller than or equal to 4.";
        }

        if (!is_null($this->container['c_tar']) && (mb_strlen($this->container['c_tar']) < 1)) {
            $invalidProperties[] = "invalid value for 'c_tar', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['v_tar'] === null) {
            $invalidProperties[] = "'v_tar' can't be null";
        }
        if (($this->container['v_tar'] < 0)) {
            $invalidProperties[] = "invalid value for 'v_tar', must be bigger than or equal to 0.";
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
     * Gets cl
     *
     * @return string
     */
    public function getCl()
    {
        return $this->container['cl'];
    }

    /**
     * Sets cl
     *
     * @param string $cl Classe.  Preencher com:  * M - Tarifa Mínima  * G - Tarifa Geral  * E - Tarifa Específica
     *
     * @return self
     */
    public function setCl($cl)
    {
        if (is_null($cl)) {
            array_push($this->openAPINullablesSetToNull, 'cl');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('cl', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($cl) && (mb_strlen($cl) > 1)) {
            throw new \InvalidArgumentException('invalid length for $cl when calling CteSefazTarifa., must be smaller than or equal to 1.');
        }

        $this->container['cl'] = $cl;

        return $this;
    }

    /**
     * Gets c_tar
     *
     * @return string|null
     */
    public function getCTar()
    {
        return $this->container['c_tar'];
    }

    /**
     * Sets c_tar
     *
     * @param string|null $c_tar Código da Tarifa.  Deverão ser incluídos os códigos de três dígitos, correspondentes à tarifa.
     *
     * @return self
     */
    public function setCTar($c_tar)
    {
        if (is_null($c_tar)) {
            array_push($this->openAPINullablesSetToNull, 'c_tar');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('c_tar', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($c_tar) && (mb_strlen($c_tar) > 4)) {
            throw new \InvalidArgumentException('invalid length for $c_tar when calling CteSefazTarifa., must be smaller than or equal to 4.');
        }
        if (!is_null($c_tar) && (mb_strlen($c_tar) < 1)) {
            throw new \InvalidArgumentException('invalid length for $c_tar when calling CteSefazTarifa., must be bigger than or equal to 1.');
        }

        $this->container['c_tar'] = $c_tar;

        return $this;
    }

    /**
     * Gets v_tar
     *
     * @return float
     */
    public function getVTar()
    {
        return $this->container['v_tar'];
    }

    /**
     * Sets v_tar
     *
     * @param float $v_tar Valor da Tarifa.  Valor da tarifa por kg quando for o caso.
     *
     * @return self
     */
    public function setVTar($v_tar)
    {
        if (is_null($v_tar)) {
            array_push($this->openAPINullablesSetToNull, 'v_tar');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('v_tar', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($v_tar) && ($v_tar < 0)) {
            throw new \InvalidArgumentException('invalid value for $v_tar when calling CteSefazTarifa., must be bigger than or equal to 0.');
        }

        $this->container['v_tar'] = $v_tar;

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


