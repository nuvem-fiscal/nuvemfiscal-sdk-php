<?php
/**
 * TribTotal
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
 * TribTotal Class Doc Comment
 *
 * @category Class
 * @description Grupo de informações para totais aproximados dos tributos relacionados ao serviço prestado.
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class TribTotal implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TribTotal';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'v_tot_trib' => '\NuvemFiscal\Model\TribTotalMonet',
        'p_tot_trib' => '\NuvemFiscal\Model\TribTotalPercent',
        'ind_tot_trib' => 'int',
        'p_tot_trib_sn' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'v_tot_trib' => null,
        'p_tot_trib' => null,
        'ind_tot_trib' => null,
        'p_tot_trib_sn' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'v_tot_trib' => false,
        'p_tot_trib' => false,
        'ind_tot_trib' => true,
        'p_tot_trib_sn' => true
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
        'v_tot_trib' => 'vTotTrib',
        'p_tot_trib' => 'pTotTrib',
        'ind_tot_trib' => 'indTotTrib',
        'p_tot_trib_sn' => 'pTotTribSN'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'v_tot_trib' => 'setVTotTrib',
        'p_tot_trib' => 'setPTotTrib',
        'ind_tot_trib' => 'setIndTotTrib',
        'p_tot_trib_sn' => 'setPTotTribSn'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'v_tot_trib' => 'getVTotTrib',
        'p_tot_trib' => 'getPTotTrib',
        'ind_tot_trib' => 'getIndTotTrib',
        'p_tot_trib_sn' => 'getPTotTribSn'
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
        $this->setIfExists('v_tot_trib', $data ?? [], null);
        $this->setIfExists('p_tot_trib', $data ?? [], null);
        $this->setIfExists('ind_tot_trib', $data ?? [], null);
        $this->setIfExists('p_tot_trib_sn', $data ?? [], null);
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
     * Gets v_tot_trib
     *
     * @return \NuvemFiscal\Model\TribTotalMonet|null
     */
    public function getVTotTrib()
    {
        return $this->container['v_tot_trib'];
    }

    /**
     * Sets v_tot_trib
     *
     * @param \NuvemFiscal\Model\TribTotalMonet|null $v_tot_trib v_tot_trib
     *
     * @return self
     */
    public function setVTotTrib($v_tot_trib)
    {
        if (is_null($v_tot_trib)) {
            throw new \InvalidArgumentException('non-nullable v_tot_trib cannot be null');
        }
        $this->container['v_tot_trib'] = $v_tot_trib;

        return $this;
    }

    /**
     * Gets p_tot_trib
     *
     * @return \NuvemFiscal\Model\TribTotalPercent|null
     */
    public function getPTotTrib()
    {
        return $this->container['p_tot_trib'];
    }

    /**
     * Sets p_tot_trib
     *
     * @param \NuvemFiscal\Model\TribTotalPercent|null $p_tot_trib p_tot_trib
     *
     * @return self
     */
    public function setPTotTrib($p_tot_trib)
    {
        if (is_null($p_tot_trib)) {
            throw new \InvalidArgumentException('non-nullable p_tot_trib cannot be null');
        }
        $this->container['p_tot_trib'] = $p_tot_trib;

        return $this;
    }

    /**
     * Gets ind_tot_trib
     *
     * @return int|null
     */
    public function getIndTotTrib()
    {
        return $this->container['ind_tot_trib'];
    }

    /**
     * Sets ind_tot_trib
     *
     * @param int|null $ind_tot_trib Indicador de informação de valor total de tributos. Possui valor fixo igual a zero (indTotTrib=0).  Não informar nenhum valor estimado para os Tributos (Decreto 8.264/2014).  * 0 - Não
     *
     * @return self
     */
    public function setIndTotTrib($ind_tot_trib)
    {
        if (is_null($ind_tot_trib)) {
            array_push($this->openAPINullablesSetToNull, 'ind_tot_trib');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ind_tot_trib', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ind_tot_trib'] = $ind_tot_trib;

        return $this;
    }

    /**
     * Gets p_tot_trib_sn
     *
     * @return float|null
     */
    public function getPTotTribSn()
    {
        return $this->container['p_tot_trib_sn'];
    }

    /**
     * Sets p_tot_trib_sn
     *
     * @param float|null $p_tot_trib_sn Valor percentual aproximado do total dos tributos da alíquota do Simples Nacional (%%).
     *
     * @return self
     */
    public function setPTotTribSn($p_tot_trib_sn)
    {
        if (is_null($p_tot_trib_sn)) {
            array_push($this->openAPINullablesSetToNull, 'p_tot_trib_sn');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('p_tot_trib_sn', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['p_tot_trib_sn'] = $p_tot_trib_sn;

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


