<?php
/**
 * MdfeSefazInfUnidTranspVazia
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
 * MdfeSefazInfUnidTranspVazia Class Doc Comment
 *
 * @category Class
 * @description Informações das Undades de Transporte vazias.
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class MdfeSefazInfUnidTranspVazia implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MdfeSefazInfUnidTranspVazia';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id_unid_transp_vazia' => 'string',
        'tp_unid_transp_vazia' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id_unid_transp_vazia' => null,
        'tp_unid_transp_vazia' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id_unid_transp_vazia' => true,
        'tp_unid_transp_vazia' => true
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
        'id_unid_transp_vazia' => 'idUnidTranspVazia',
        'tp_unid_transp_vazia' => 'tpUnidTranspVazia'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id_unid_transp_vazia' => 'setIdUnidTranspVazia',
        'tp_unid_transp_vazia' => 'setTpUnidTranspVazia'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id_unid_transp_vazia' => 'getIdUnidTranspVazia',
        'tp_unid_transp_vazia' => 'getTpUnidTranspVazia'
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
        $this->setIfExists('id_unid_transp_vazia', $data ?? [], null);
        $this->setIfExists('tp_unid_transp_vazia', $data ?? [], null);
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

        if ($this->container['id_unid_transp_vazia'] === null) {
            $invalidProperties[] = "'id_unid_transp_vazia' can't be null";
        }
        if ((mb_strlen($this->container['id_unid_transp_vazia']) > 20)) {
            $invalidProperties[] = "invalid value for 'id_unid_transp_vazia', the character length must be smaller than or equal to 20.";
        }

        if ((mb_strlen($this->container['id_unid_transp_vazia']) < 1)) {
            $invalidProperties[] = "invalid value for 'id_unid_transp_vazia', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['tp_unid_transp_vazia'] === null) {
            $invalidProperties[] = "'tp_unid_transp_vazia' can't be null";
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
     * Gets id_unid_transp_vazia
     *
     * @return string
     */
    public function getIdUnidTranspVazia()
    {
        return $this->container['id_unid_transp_vazia'];
    }

    /**
     * Sets id_unid_transp_vazia
     *
     * @param string $id_unid_transp_vazia Identificação da unidades de transporte vazia.
     *
     * @return self
     */
    public function setIdUnidTranspVazia($id_unid_transp_vazia)
    {
        if (is_null($id_unid_transp_vazia)) {
            array_push($this->openAPINullablesSetToNull, 'id_unid_transp_vazia');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('id_unid_transp_vazia', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($id_unid_transp_vazia) && (mb_strlen($id_unid_transp_vazia) > 20)) {
            throw new \InvalidArgumentException('invalid length for $id_unid_transp_vazia when calling MdfeSefazInfUnidTranspVazia., must be smaller than or equal to 20.');
        }
        if (!is_null($id_unid_transp_vazia) && (mb_strlen($id_unid_transp_vazia) < 1)) {
            throw new \InvalidArgumentException('invalid length for $id_unid_transp_vazia when calling MdfeSefazInfUnidTranspVazia., must be bigger than or equal to 1.');
        }

        $this->container['id_unid_transp_vazia'] = $id_unid_transp_vazia;

        return $this;
    }

    /**
     * Gets tp_unid_transp_vazia
     *
     * @return int
     */
    public function getTpUnidTranspVazia()
    {
        return $this->container['tp_unid_transp_vazia'];
    }

    /**
     * Sets tp_unid_transp_vazia
     *
     * @param int $tp_unid_transp_vazia Tipo da unidade de transporte vazia.  Deve ser preenchido com “1” para Rodoviário Tração do tipo caminhão ou “2” para Rodoviário reboque do tipo carreta.
     *
     * @return self
     */
    public function setTpUnidTranspVazia($tp_unid_transp_vazia)
    {
        if (is_null($tp_unid_transp_vazia)) {
            array_push($this->openAPINullablesSetToNull, 'tp_unid_transp_vazia');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tp_unid_transp_vazia', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['tp_unid_transp_vazia'] = $tp_unid_transp_vazia;

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


