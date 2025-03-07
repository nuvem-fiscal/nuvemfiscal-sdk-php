<?php
/**
 * InfoValores
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
 * InfoValores Class Doc Comment
 *
 * @category Class
 * @description Grupo de informações relativas à valores do serviço prestado.
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class InfoValores implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'InfoValores';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'v_serv_prest' => '\NuvemFiscal\Model\VServPrest',
        'v_desc_cond_incond' => '\NuvemFiscal\Model\VDescCondIncond',
        'v_ded_red' => '\NuvemFiscal\Model\InfoDedRed',
        'trib' => '\NuvemFiscal\Model\InfoTributacao'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'v_serv_prest' => null,
        'v_desc_cond_incond' => null,
        'v_ded_red' => null,
        'trib' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'v_serv_prest' => false,
        'v_desc_cond_incond' => false,
        'v_ded_red' => false,
        'trib' => false
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
        'v_serv_prest' => 'vServPrest',
        'v_desc_cond_incond' => 'vDescCondIncond',
        'v_ded_red' => 'vDedRed',
        'trib' => 'trib'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'v_serv_prest' => 'setVServPrest',
        'v_desc_cond_incond' => 'setVDescCondIncond',
        'v_ded_red' => 'setVDedRed',
        'trib' => 'setTrib'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'v_serv_prest' => 'getVServPrest',
        'v_desc_cond_incond' => 'getVDescCondIncond',
        'v_ded_red' => 'getVDedRed',
        'trib' => 'getTrib'
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
        $this->setIfExists('v_serv_prest', $data ?? [], null);
        $this->setIfExists('v_desc_cond_incond', $data ?? [], null);
        $this->setIfExists('v_ded_red', $data ?? [], null);
        $this->setIfExists('trib', $data ?? [], null);
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

        if ($this->container['v_serv_prest'] === null) {
            $invalidProperties[] = "'v_serv_prest' can't be null";
        }
        if ($this->container['trib'] === null) {
            $invalidProperties[] = "'trib' can't be null";
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
     * Gets v_serv_prest
     *
     * @return \NuvemFiscal\Model\VServPrest
     */
    public function getVServPrest()
    {
        return $this->container['v_serv_prest'];
    }

    /**
     * Sets v_serv_prest
     *
     * @param \NuvemFiscal\Model\VServPrest $v_serv_prest v_serv_prest
     *
     * @return self
     */
    public function setVServPrest($v_serv_prest)
    {
        if (is_null($v_serv_prest)) {
            throw new \InvalidArgumentException('non-nullable v_serv_prest cannot be null');
        }
        $this->container['v_serv_prest'] = $v_serv_prest;

        return $this;
    }

    /**
     * Gets v_desc_cond_incond
     *
     * @return \NuvemFiscal\Model\VDescCondIncond|null
     */
    public function getVDescCondIncond()
    {
        return $this->container['v_desc_cond_incond'];
    }

    /**
     * Sets v_desc_cond_incond
     *
     * @param \NuvemFiscal\Model\VDescCondIncond|null $v_desc_cond_incond v_desc_cond_incond
     *
     * @return self
     */
    public function setVDescCondIncond($v_desc_cond_incond)
    {
        if (is_null($v_desc_cond_incond)) {
            throw new \InvalidArgumentException('non-nullable v_desc_cond_incond cannot be null');
        }
        $this->container['v_desc_cond_incond'] = $v_desc_cond_incond;

        return $this;
    }

    /**
     * Gets v_ded_red
     *
     * @return \NuvemFiscal\Model\InfoDedRed|null
     */
    public function getVDedRed()
    {
        return $this->container['v_ded_red'];
    }

    /**
     * Sets v_ded_red
     *
     * @param \NuvemFiscal\Model\InfoDedRed|null $v_ded_red v_ded_red
     *
     * @return self
     */
    public function setVDedRed($v_ded_red)
    {
        if (is_null($v_ded_red)) {
            throw new \InvalidArgumentException('non-nullable v_ded_red cannot be null');
        }
        $this->container['v_ded_red'] = $v_ded_red;

        return $this;
    }

    /**
     * Gets trib
     *
     * @return \NuvemFiscal\Model\InfoTributacao
     */
    public function getTrib()
    {
        return $this->container['trib'];
    }

    /**
     * Sets trib
     *
     * @param \NuvemFiscal\Model\InfoTributacao $trib trib
     *
     * @return self
     */
    public function setTrib($trib)
    {
        if (is_null($trib)) {
            throw new \InvalidArgumentException('non-nullable trib cannot be null');
        }
        $this->container['trib'] = $trib;

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


