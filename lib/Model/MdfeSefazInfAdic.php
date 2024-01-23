<?php
/**
 * MdfeSefazInfAdic
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
 * MdfeSefazInfAdic Class Doc Comment
 *
 * @category Class
 * @description Informações Adicionais.
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class MdfeSefazInfAdic implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MdfeSefazInfAdic';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'inf_ad_fisco' => 'string',
        'inf_cpl' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'inf_ad_fisco' => null,
        'inf_cpl' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'inf_ad_fisco' => true,
        'inf_cpl' => true
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
        'inf_ad_fisco' => 'infAdFisco',
        'inf_cpl' => 'infCpl'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'inf_ad_fisco' => 'setInfAdFisco',
        'inf_cpl' => 'setInfCpl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'inf_ad_fisco' => 'getInfAdFisco',
        'inf_cpl' => 'getInfCpl'
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
        $this->setIfExists('inf_ad_fisco', $data ?? [], null);
        $this->setIfExists('inf_cpl', $data ?? [], null);
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

        if (!is_null($this->container['inf_ad_fisco']) && (mb_strlen($this->container['inf_ad_fisco']) > 2000)) {
            $invalidProperties[] = "invalid value for 'inf_ad_fisco', the character length must be smaller than or equal to 2000.";
        }

        if (!is_null($this->container['inf_ad_fisco']) && (mb_strlen($this->container['inf_ad_fisco']) < 1)) {
            $invalidProperties[] = "invalid value for 'inf_ad_fisco', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['inf_cpl']) && (mb_strlen($this->container['inf_cpl']) > 5000)) {
            $invalidProperties[] = "invalid value for 'inf_cpl', the character length must be smaller than or equal to 5000.";
        }

        if (!is_null($this->container['inf_cpl']) && (mb_strlen($this->container['inf_cpl']) < 1)) {
            $invalidProperties[] = "invalid value for 'inf_cpl', the character length must be bigger than or equal to 1.";
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
     * Gets inf_ad_fisco
     *
     * @return string|null
     */
    public function getInfAdFisco()
    {
        return $this->container['inf_ad_fisco'];
    }

    /**
     * Sets inf_ad_fisco
     *
     * @param string|null $inf_ad_fisco Informações adicionais de interesse do Fisco.  Norma referenciada, informações complementares, etc.
     *
     * @return self
     */
    public function setInfAdFisco($inf_ad_fisco)
    {
        if (is_null($inf_ad_fisco)) {
            array_push($this->openAPINullablesSetToNull, 'inf_ad_fisco');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('inf_ad_fisco', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($inf_ad_fisco) && (mb_strlen($inf_ad_fisco) > 2000)) {
            throw new \InvalidArgumentException('invalid length for $inf_ad_fisco when calling MdfeSefazInfAdic., must be smaller than or equal to 2000.');
        }
        if (!is_null($inf_ad_fisco) && (mb_strlen($inf_ad_fisco) < 1)) {
            throw new \InvalidArgumentException('invalid length for $inf_ad_fisco when calling MdfeSefazInfAdic., must be bigger than or equal to 1.');
        }

        $this->container['inf_ad_fisco'] = $inf_ad_fisco;

        return $this;
    }

    /**
     * Gets inf_cpl
     *
     * @return string|null
     */
    public function getInfCpl()
    {
        return $this->container['inf_cpl'];
    }

    /**
     * Sets inf_cpl
     *
     * @param string|null $inf_cpl Informações complementares de interesse do Contribuinte.
     *
     * @return self
     */
    public function setInfCpl($inf_cpl)
    {
        if (is_null($inf_cpl)) {
            array_push($this->openAPINullablesSetToNull, 'inf_cpl');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('inf_cpl', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($inf_cpl) && (mb_strlen($inf_cpl) > 5000)) {
            throw new \InvalidArgumentException('invalid length for $inf_cpl when calling MdfeSefazInfAdic., must be smaller than or equal to 5000.');
        }
        if (!is_null($inf_cpl) && (mb_strlen($inf_cpl) < 1)) {
            throw new \InvalidArgumentException('invalid length for $inf_cpl when calling MdfeSefazInfAdic., must be bigger than or equal to 1.');
        }

        $this->container['inf_cpl'] = $inf_cpl;

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


