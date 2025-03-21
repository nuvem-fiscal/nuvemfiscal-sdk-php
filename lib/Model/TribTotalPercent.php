<?php
/**
 * TribTotalPercent
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
 * TribTotalPercent Class Doc Comment
 *
 * @category Class
 * @description Valor percentual total aproximado dos tributos, em conformidade com o artigo 1o da Lei no 12.741/2012.
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class TribTotalPercent implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TribTotalPercent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'p_tot_trib_fed' => 'float',
        'p_tot_trib_est' => 'float',
        'p_tot_trib_mun' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'p_tot_trib_fed' => null,
        'p_tot_trib_est' => null,
        'p_tot_trib_mun' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'p_tot_trib_fed' => true,
        'p_tot_trib_est' => true,
        'p_tot_trib_mun' => true
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
        'p_tot_trib_fed' => 'pTotTribFed',
        'p_tot_trib_est' => 'pTotTribEst',
        'p_tot_trib_mun' => 'pTotTribMun'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'p_tot_trib_fed' => 'setPTotTribFed',
        'p_tot_trib_est' => 'setPTotTribEst',
        'p_tot_trib_mun' => 'setPTotTribMun'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'p_tot_trib_fed' => 'getPTotTribFed',
        'p_tot_trib_est' => 'getPTotTribEst',
        'p_tot_trib_mun' => 'getPTotTribMun'
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
        $this->setIfExists('p_tot_trib_fed', $data ?? [], null);
        $this->setIfExists('p_tot_trib_est', $data ?? [], null);
        $this->setIfExists('p_tot_trib_mun', $data ?? [], null);
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

        if ($this->container['p_tot_trib_fed'] === null) {
            $invalidProperties[] = "'p_tot_trib_fed' can't be null";
        }
        if (($this->container['p_tot_trib_fed'] < 0)) {
            $invalidProperties[] = "invalid value for 'p_tot_trib_fed', must be bigger than or equal to 0.";
        }

        if ($this->container['p_tot_trib_est'] === null) {
            $invalidProperties[] = "'p_tot_trib_est' can't be null";
        }
        if (($this->container['p_tot_trib_est'] < 0)) {
            $invalidProperties[] = "invalid value for 'p_tot_trib_est', must be bigger than or equal to 0.";
        }

        if ($this->container['p_tot_trib_mun'] === null) {
            $invalidProperties[] = "'p_tot_trib_mun' can't be null";
        }
        if (($this->container['p_tot_trib_mun'] < 0)) {
            $invalidProperties[] = "invalid value for 'p_tot_trib_mun', must be bigger than or equal to 0.";
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
     * Gets p_tot_trib_fed
     *
     * @return float
     */
    public function getPTotTribFed()
    {
        return $this->container['p_tot_trib_fed'];
    }

    /**
     * Sets p_tot_trib_fed
     *
     * @param float $p_tot_trib_fed Valor percentual total aproximado dos tributos federais (%%).
     *
     * @return self
     */
    public function setPTotTribFed($p_tot_trib_fed)
    {
        if (is_null($p_tot_trib_fed)) {
            array_push($this->openAPINullablesSetToNull, 'p_tot_trib_fed');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('p_tot_trib_fed', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($p_tot_trib_fed) && ($p_tot_trib_fed < 0)) {
            throw new \InvalidArgumentException('invalid value for $p_tot_trib_fed when calling TribTotalPercent., must be bigger than or equal to 0.');
        }

        $this->container['p_tot_trib_fed'] = $p_tot_trib_fed;

        return $this;
    }

    /**
     * Gets p_tot_trib_est
     *
     * @return float
     */
    public function getPTotTribEst()
    {
        return $this->container['p_tot_trib_est'];
    }

    /**
     * Sets p_tot_trib_est
     *
     * @param float $p_tot_trib_est Valor percentual total aproximado dos tributos estaduais (%%).
     *
     * @return self
     */
    public function setPTotTribEst($p_tot_trib_est)
    {
        if (is_null($p_tot_trib_est)) {
            array_push($this->openAPINullablesSetToNull, 'p_tot_trib_est');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('p_tot_trib_est', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($p_tot_trib_est) && ($p_tot_trib_est < 0)) {
            throw new \InvalidArgumentException('invalid value for $p_tot_trib_est when calling TribTotalPercent., must be bigger than or equal to 0.');
        }

        $this->container['p_tot_trib_est'] = $p_tot_trib_est;

        return $this;
    }

    /**
     * Gets p_tot_trib_mun
     *
     * @return float
     */
    public function getPTotTribMun()
    {
        return $this->container['p_tot_trib_mun'];
    }

    /**
     * Sets p_tot_trib_mun
     *
     * @param float $p_tot_trib_mun Valor percentual total aproximado dos tributos municipais (%%).
     *
     * @return self
     */
    public function setPTotTribMun($p_tot_trib_mun)
    {
        if (is_null($p_tot_trib_mun)) {
            array_push($this->openAPINullablesSetToNull, 'p_tot_trib_mun');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('p_tot_trib_mun', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($p_tot_trib_mun) && ($p_tot_trib_mun < 0)) {
            throw new \InvalidArgumentException('invalid value for $p_tot_trib_mun when calling TribTotalPercent., must be bigger than or equal to 0.');
        }

        $this->container['p_tot_trib_mun'] = $p_tot_trib_mun;

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


