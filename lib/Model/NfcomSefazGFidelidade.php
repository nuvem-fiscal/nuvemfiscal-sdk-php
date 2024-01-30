<?php
/**
 * NfcomSefazGFidelidade
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
 * NfcomSefazGFidelidade Class Doc Comment
 *
 * @category Class
 * @description Grupo de informações do programa de fidelidade do assinante.
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class NfcomSefazGFidelidade implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NfcomSefazGFidelidade';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'qtd_saldo_pts' => 'string',
        'd_ref_saldo_pts' => '\DateTime',
        'qtd_pts_resg' => 'string',
        'd_ref_resg_pts' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'qtd_saldo_pts' => null,
        'd_ref_saldo_pts' => 'date',
        'qtd_pts_resg' => null,
        'd_ref_resg_pts' => 'date'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'qtd_saldo_pts' => true,
        'd_ref_saldo_pts' => true,
        'qtd_pts_resg' => true,
        'd_ref_resg_pts' => true
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
        'qtd_saldo_pts' => 'qtdSaldoPts',
        'd_ref_saldo_pts' => 'dRefSaldoPts',
        'qtd_pts_resg' => 'qtdPtsResg',
        'd_ref_resg_pts' => 'dRefResgPts'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'qtd_saldo_pts' => 'setQtdSaldoPts',
        'd_ref_saldo_pts' => 'setDRefSaldoPts',
        'qtd_pts_resg' => 'setQtdPtsResg',
        'd_ref_resg_pts' => 'setDRefResgPts'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'qtd_saldo_pts' => 'getQtdSaldoPts',
        'd_ref_saldo_pts' => 'getDRefSaldoPts',
        'qtd_pts_resg' => 'getQtdPtsResg',
        'd_ref_resg_pts' => 'getDRefResgPts'
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
        $this->setIfExists('qtd_saldo_pts', $data ?? [], null);
        $this->setIfExists('d_ref_saldo_pts', $data ?? [], null);
        $this->setIfExists('qtd_pts_resg', $data ?? [], null);
        $this->setIfExists('d_ref_resg_pts', $data ?? [], null);
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

        if ($this->container['qtd_saldo_pts'] === null) {
            $invalidProperties[] = "'qtd_saldo_pts' can't be null";
        }
        if ((mb_strlen($this->container['qtd_saldo_pts']) > 20)) {
            $invalidProperties[] = "invalid value for 'qtd_saldo_pts', the character length must be smaller than or equal to 20.";
        }

        if ((mb_strlen($this->container['qtd_saldo_pts']) < 1)) {
            $invalidProperties[] = "invalid value for 'qtd_saldo_pts', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['d_ref_saldo_pts'] === null) {
            $invalidProperties[] = "'d_ref_saldo_pts' can't be null";
        }
        if ($this->container['qtd_pts_resg'] === null) {
            $invalidProperties[] = "'qtd_pts_resg' can't be null";
        }
        if ((mb_strlen($this->container['qtd_pts_resg']) > 20)) {
            $invalidProperties[] = "invalid value for 'qtd_pts_resg', the character length must be smaller than or equal to 20.";
        }

        if ((mb_strlen($this->container['qtd_pts_resg']) < 1)) {
            $invalidProperties[] = "invalid value for 'qtd_pts_resg', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['d_ref_resg_pts'] === null) {
            $invalidProperties[] = "'d_ref_resg_pts' can't be null";
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
     * Gets qtd_saldo_pts
     *
     * @return string
     */
    public function getQtdSaldoPts()
    {
        return $this->container['qtd_saldo_pts'];
    }

    /**
     * Sets qtd_saldo_pts
     *
     * @param string $qtd_saldo_pts Saldo de pontos do cliente na  data de referência.
     *
     * @return self
     */
    public function setQtdSaldoPts($qtd_saldo_pts)
    {
        if (is_null($qtd_saldo_pts)) {
            array_push($this->openAPINullablesSetToNull, 'qtd_saldo_pts');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('qtd_saldo_pts', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($qtd_saldo_pts) && (mb_strlen($qtd_saldo_pts) > 20)) {
            throw new \InvalidArgumentException('invalid length for $qtd_saldo_pts when calling NfcomSefazGFidelidade., must be smaller than or equal to 20.');
        }
        if (!is_null($qtd_saldo_pts) && (mb_strlen($qtd_saldo_pts) < 1)) {
            throw new \InvalidArgumentException('invalid length for $qtd_saldo_pts when calling NfcomSefazGFidelidade., must be bigger than or equal to 1.');
        }

        $this->container['qtd_saldo_pts'] = $qtd_saldo_pts;

        return $this;
    }

    /**
     * Gets d_ref_saldo_pts
     *
     * @return \DateTime
     */
    public function getDRefSaldoPts()
    {
        return $this->container['d_ref_saldo_pts'];
    }

    /**
     * Sets d_ref_saldo_pts
     *
     * @param \DateTime $d_ref_saldo_pts Data de aferição do saldo de pontos.  Formato AAAA-MM-DD.
     *
     * @return self
     */
    public function setDRefSaldoPts($d_ref_saldo_pts)
    {
        if (is_null($d_ref_saldo_pts)) {
            array_push($this->openAPINullablesSetToNull, 'd_ref_saldo_pts');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('d_ref_saldo_pts', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['d_ref_saldo_pts'] = $d_ref_saldo_pts;

        return $this;
    }

    /**
     * Gets qtd_pts_resg
     *
     * @return string
     */
    public function getQtdPtsResg()
    {
        return $this->container['qtd_pts_resg'];
    }

    /**
     * Sets qtd_pts_resg
     *
     * @param string $qtd_pts_resg Qtd de pontos resgatados na  data de referência.
     *
     * @return self
     */
    public function setQtdPtsResg($qtd_pts_resg)
    {
        if (is_null($qtd_pts_resg)) {
            array_push($this->openAPINullablesSetToNull, 'qtd_pts_resg');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('qtd_pts_resg', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($qtd_pts_resg) && (mb_strlen($qtd_pts_resg) > 20)) {
            throw new \InvalidArgumentException('invalid length for $qtd_pts_resg when calling NfcomSefazGFidelidade., must be smaller than or equal to 20.');
        }
        if (!is_null($qtd_pts_resg) && (mb_strlen($qtd_pts_resg) < 1)) {
            throw new \InvalidArgumentException('invalid length for $qtd_pts_resg when calling NfcomSefazGFidelidade., must be bigger than or equal to 1.');
        }

        $this->container['qtd_pts_resg'] = $qtd_pts_resg;

        return $this;
    }

    /**
     * Gets d_ref_resg_pts
     *
     * @return \DateTime
     */
    public function getDRefResgPts()
    {
        return $this->container['d_ref_resg_pts'];
    }

    /**
     * Sets d_ref_resg_pts
     *
     * @param \DateTime $d_ref_resg_pts Data de resgate dos pontos.  Formato AAAA-MM-DD.
     *
     * @return self
     */
    public function setDRefResgPts($d_ref_resg_pts)
    {
        if (is_null($d_ref_resg_pts)) {
            array_push($this->openAPINullablesSetToNull, 'd_ref_resg_pts');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('d_ref_resg_pts', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['d_ref_resg_pts'] = $d_ref_resg_pts;

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

