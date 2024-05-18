<?php
/**
 * NfcomSefazICMSUFDest
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
 * NfcomSefazICMSUFDest Class Doc Comment
 *
 * @category Class
 * @description Informações do ICMS de partilha com a UF destinatária.
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class NfcomSefazICMSUFDest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NfcomSefazICMSUFDest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'c_uf_dest' => 'int',
        'v_bcuf_dest' => 'float',
        'p_fcpuf_dest' => 'float',
        'p_icmsuf_dest' => 'float',
        'v_fcpuf_dest' => 'float',
        'v_icmsuf_dest' => 'float',
        'v_icmsuf_emi' => 'float',
        'c_benef_uf_dest' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'c_uf_dest' => null,
        'v_bcuf_dest' => null,
        'p_fcpuf_dest' => null,
        'p_icmsuf_dest' => null,
        'v_fcpuf_dest' => null,
        'v_icmsuf_dest' => null,
        'v_icmsuf_emi' => null,
        'c_benef_uf_dest' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'c_uf_dest' => true,
        'v_bcuf_dest' => true,
        'p_fcpuf_dest' => true,
        'p_icmsuf_dest' => true,
        'v_fcpuf_dest' => true,
        'v_icmsuf_dest' => true,
        'v_icmsuf_emi' => true,
        'c_benef_uf_dest' => true
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
        'c_uf_dest' => 'cUFDest',
        'v_bcuf_dest' => 'vBCUFDest',
        'p_fcpuf_dest' => 'pFCPUFDest',
        'p_icmsuf_dest' => 'pICMSUFDest',
        'v_fcpuf_dest' => 'vFCPUFDest',
        'v_icmsuf_dest' => 'vICMSUFDest',
        'v_icmsuf_emi' => 'vICMSUFEmi',
        'c_benef_uf_dest' => 'cBenefUFDest'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'c_uf_dest' => 'setCUfDest',
        'v_bcuf_dest' => 'setVBcufDest',
        'p_fcpuf_dest' => 'setPFcpufDest',
        'p_icmsuf_dest' => 'setPIcmsufDest',
        'v_fcpuf_dest' => 'setVFcpufDest',
        'v_icmsuf_dest' => 'setVIcmsufDest',
        'v_icmsuf_emi' => 'setVIcmsufEmi',
        'c_benef_uf_dest' => 'setCBenefUfDest'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'c_uf_dest' => 'getCUfDest',
        'v_bcuf_dest' => 'getVBcufDest',
        'p_fcpuf_dest' => 'getPFcpufDest',
        'p_icmsuf_dest' => 'getPIcmsufDest',
        'v_fcpuf_dest' => 'getVFcpufDest',
        'v_icmsuf_dest' => 'getVIcmsufDest',
        'v_icmsuf_emi' => 'getVIcmsufEmi',
        'c_benef_uf_dest' => 'getCBenefUfDest'
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
        $this->setIfExists('c_uf_dest', $data ?? [], null);
        $this->setIfExists('v_bcuf_dest', $data ?? [], null);
        $this->setIfExists('p_fcpuf_dest', $data ?? [], null);
        $this->setIfExists('p_icmsuf_dest', $data ?? [], null);
        $this->setIfExists('v_fcpuf_dest', $data ?? [], null);
        $this->setIfExists('v_icmsuf_dest', $data ?? [], null);
        $this->setIfExists('v_icmsuf_emi', $data ?? [], null);
        $this->setIfExists('c_benef_uf_dest', $data ?? [], null);
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

        if ($this->container['v_bcuf_dest'] === null) {
            $invalidProperties[] = "'v_bcuf_dest' can't be null";
        }
        if (($this->container['v_bcuf_dest'] < 0)) {
            $invalidProperties[] = "invalid value for 'v_bcuf_dest', must be bigger than or equal to 0.";
        }

        if ($this->container['p_fcpuf_dest'] === null) {
            $invalidProperties[] = "'p_fcpuf_dest' can't be null";
        }
        if (($this->container['p_fcpuf_dest'] < 0)) {
            $invalidProperties[] = "invalid value for 'p_fcpuf_dest', must be bigger than or equal to 0.";
        }

        if ($this->container['p_icmsuf_dest'] === null) {
            $invalidProperties[] = "'p_icmsuf_dest' can't be null";
        }
        if (($this->container['p_icmsuf_dest'] < 0)) {
            $invalidProperties[] = "invalid value for 'p_icmsuf_dest', must be bigger than or equal to 0.";
        }

        if ($this->container['v_fcpuf_dest'] === null) {
            $invalidProperties[] = "'v_fcpuf_dest' can't be null";
        }
        if (($this->container['v_fcpuf_dest'] < 0)) {
            $invalidProperties[] = "invalid value for 'v_fcpuf_dest', must be bigger than or equal to 0.";
        }

        if ($this->container['v_icmsuf_dest'] === null) {
            $invalidProperties[] = "'v_icmsuf_dest' can't be null";
        }
        if (($this->container['v_icmsuf_dest'] < 0)) {
            $invalidProperties[] = "invalid value for 'v_icmsuf_dest', must be bigger than or equal to 0.";
        }

        if ($this->container['v_icmsuf_emi'] === null) {
            $invalidProperties[] = "'v_icmsuf_emi' can't be null";
        }
        if (($this->container['v_icmsuf_emi'] < 0)) {
            $invalidProperties[] = "invalid value for 'v_icmsuf_emi', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['c_benef_uf_dest']) && (mb_strlen($this->container['c_benef_uf_dest']) > 10)) {
            $invalidProperties[] = "invalid value for 'c_benef_uf_dest', the character length must be smaller than or equal to 10.";
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
     * Gets c_uf_dest
     *
     * @return int|null
     */
    public function getCUfDest()
    {
        return $this->container['c_uf_dest'];
    }

    /**
     * Sets c_uf_dest
     *
     * @param int|null $c_uf_dest c_uf_dest
     *
     * @return self
     */
    public function setCUfDest($c_uf_dest)
    {
        if (is_null($c_uf_dest)) {
            array_push($this->openAPINullablesSetToNull, 'c_uf_dest');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('c_uf_dest', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['c_uf_dest'] = $c_uf_dest;

        return $this;
    }

    /**
     * Gets v_bcuf_dest
     *
     * @return float
     */
    public function getVBcufDest()
    {
        return $this->container['v_bcuf_dest'];
    }

    /**
     * Sets v_bcuf_dest
     *
     * @param float $v_bcuf_dest Valor da BC do ICMS na UF de destino.
     *
     * @return self
     */
    public function setVBcufDest($v_bcuf_dest)
    {
        if (is_null($v_bcuf_dest)) {
            array_push($this->openAPINullablesSetToNull, 'v_bcuf_dest');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('v_bcuf_dest', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($v_bcuf_dest) && ($v_bcuf_dest < 0)) {
            throw new \InvalidArgumentException('invalid value for $v_bcuf_dest when calling NfcomSefazICMSUFDest., must be bigger than or equal to 0.');
        }

        $this->container['v_bcuf_dest'] = $v_bcuf_dest;

        return $this;
    }

    /**
     * Gets p_fcpuf_dest
     *
     * @return float
     */
    public function getPFcpufDest()
    {
        return $this->container['p_fcpuf_dest'];
    }

    /**
     * Sets p_fcpuf_dest
     *
     * @param float $p_fcpuf_dest Percentual do ICMS relativo ao Fundo de Combate à pobreza (FCP) na UF de destino.  Alíquota adotada nas operações internas na UF do destinatário.
     *
     * @return self
     */
    public function setPFcpufDest($p_fcpuf_dest)
    {
        if (is_null($p_fcpuf_dest)) {
            array_push($this->openAPINullablesSetToNull, 'p_fcpuf_dest');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('p_fcpuf_dest', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($p_fcpuf_dest) && ($p_fcpuf_dest < 0)) {
            throw new \InvalidArgumentException('invalid value for $p_fcpuf_dest when calling NfcomSefazICMSUFDest., must be bigger than or equal to 0.');
        }

        $this->container['p_fcpuf_dest'] = $p_fcpuf_dest;

        return $this;
    }

    /**
     * Gets p_icmsuf_dest
     *
     * @return float
     */
    public function getPIcmsufDest()
    {
        return $this->container['p_icmsuf_dest'];
    }

    /**
     * Sets p_icmsuf_dest
     *
     * @param float $p_icmsuf_dest Alíquota interna da UF de destino.  Alíquota adotada nas operações internas na UF do destinatário.
     *
     * @return self
     */
    public function setPIcmsufDest($p_icmsuf_dest)
    {
        if (is_null($p_icmsuf_dest)) {
            array_push($this->openAPINullablesSetToNull, 'p_icmsuf_dest');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('p_icmsuf_dest', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($p_icmsuf_dest) && ($p_icmsuf_dest < 0)) {
            throw new \InvalidArgumentException('invalid value for $p_icmsuf_dest when calling NfcomSefazICMSUFDest., must be bigger than or equal to 0.');
        }

        $this->container['p_icmsuf_dest'] = $p_icmsuf_dest;

        return $this;
    }

    /**
     * Gets v_fcpuf_dest
     *
     * @return float
     */
    public function getVFcpufDest()
    {
        return $this->container['v_fcpuf_dest'];
    }

    /**
     * Sets v_fcpuf_dest
     *
     * @param float $v_fcpuf_dest Valor do ICMS relativo ao Fundo de Combate á Pobreza (FCP) da UF de destino.
     *
     * @return self
     */
    public function setVFcpufDest($v_fcpuf_dest)
    {
        if (is_null($v_fcpuf_dest)) {
            array_push($this->openAPINullablesSetToNull, 'v_fcpuf_dest');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('v_fcpuf_dest', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($v_fcpuf_dest) && ($v_fcpuf_dest < 0)) {
            throw new \InvalidArgumentException('invalid value for $v_fcpuf_dest when calling NfcomSefazICMSUFDest., must be bigger than or equal to 0.');
        }

        $this->container['v_fcpuf_dest'] = $v_fcpuf_dest;

        return $this;
    }

    /**
     * Gets v_icmsuf_dest
     *
     * @return float
     */
    public function getVIcmsufDest()
    {
        return $this->container['v_icmsuf_dest'];
    }

    /**
     * Sets v_icmsuf_dest
     *
     * @param float $v_icmsuf_dest Valor do ICMS de partilha para a UF de destino.
     *
     * @return self
     */
    public function setVIcmsufDest($v_icmsuf_dest)
    {
        if (is_null($v_icmsuf_dest)) {
            array_push($this->openAPINullablesSetToNull, 'v_icmsuf_dest');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('v_icmsuf_dest', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($v_icmsuf_dest) && ($v_icmsuf_dest < 0)) {
            throw new \InvalidArgumentException('invalid value for $v_icmsuf_dest when calling NfcomSefazICMSUFDest., must be bigger than or equal to 0.');
        }

        $this->container['v_icmsuf_dest'] = $v_icmsuf_dest;

        return $this;
    }

    /**
     * Gets v_icmsuf_emi
     *
     * @return float
     */
    public function getVIcmsufEmi()
    {
        return $this->container['v_icmsuf_emi'];
    }

    /**
     * Sets v_icmsuf_emi
     *
     * @param float $v_icmsuf_emi Valor do ICMS de partilha para a UF de emissão.
     *
     * @return self
     */
    public function setVIcmsufEmi($v_icmsuf_emi)
    {
        if (is_null($v_icmsuf_emi)) {
            array_push($this->openAPINullablesSetToNull, 'v_icmsuf_emi');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('v_icmsuf_emi', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($v_icmsuf_emi) && ($v_icmsuf_emi < 0)) {
            throw new \InvalidArgumentException('invalid value for $v_icmsuf_emi when calling NfcomSefazICMSUFDest., must be bigger than or equal to 0.');
        }

        $this->container['v_icmsuf_emi'] = $v_icmsuf_emi;

        return $this;
    }

    /**
     * Gets c_benef_uf_dest
     *
     * @return string|null
     */
    public function getCBenefUfDest()
    {
        return $this->container['c_benef_uf_dest'];
    }

    /**
     * Sets c_benef_uf_dest
     *
     * @param string|null $c_benef_uf_dest Código de Benefício Fiscal na UF destino aplicado ao item.  Código de Benefício Fiscal utilizado pela UF, aplicado ao  item.
     *
     * @return self
     */
    public function setCBenefUfDest($c_benef_uf_dest)
    {
        if (is_null($c_benef_uf_dest)) {
            array_push($this->openAPINullablesSetToNull, 'c_benef_uf_dest');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('c_benef_uf_dest', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($c_benef_uf_dest) && (mb_strlen($c_benef_uf_dest) > 10)) {
            throw new \InvalidArgumentException('invalid length for $c_benef_uf_dest when calling NfcomSefazICMSUFDest., must be smaller than or equal to 10.');
        }

        $this->container['c_benef_uf_dest'] = $c_benef_uf_dest;

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


