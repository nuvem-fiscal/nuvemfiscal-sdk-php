<?php
/**
 * CteSefazEntrega
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
 * CteSefazEntrega Class Doc Comment
 *
 * @category Class
 * @description Informações ref. a previsão de entrega.
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CteSefazEntrega implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CteSefazEntrega';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'sem_data' => '\NuvemFiscal\Model\CteSefazSemData',
        'com_data' => '\NuvemFiscal\Model\CteSefazComData',
        'no_periodo' => '\NuvemFiscal\Model\CteSefazNoPeriodo',
        'sem_hora' => '\NuvemFiscal\Model\CteSefazSemHora',
        'com_hora' => '\NuvemFiscal\Model\CteSefazComHora',
        'no_inter' => '\NuvemFiscal\Model\CteSefazNoInter'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'sem_data' => null,
        'com_data' => null,
        'no_periodo' => null,
        'sem_hora' => null,
        'com_hora' => null,
        'no_inter' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'sem_data' => false,
        'com_data' => false,
        'no_periodo' => false,
        'sem_hora' => false,
        'com_hora' => false,
        'no_inter' => false
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
        'sem_data' => 'semData',
        'com_data' => 'comData',
        'no_periodo' => 'noPeriodo',
        'sem_hora' => 'semHora',
        'com_hora' => 'comHora',
        'no_inter' => 'noInter'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sem_data' => 'setSemData',
        'com_data' => 'setComData',
        'no_periodo' => 'setNoPeriodo',
        'sem_hora' => 'setSemHora',
        'com_hora' => 'setComHora',
        'no_inter' => 'setNoInter'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sem_data' => 'getSemData',
        'com_data' => 'getComData',
        'no_periodo' => 'getNoPeriodo',
        'sem_hora' => 'getSemHora',
        'com_hora' => 'getComHora',
        'no_inter' => 'getNoInter'
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
        $this->setIfExists('sem_data', $data ?? [], null);
        $this->setIfExists('com_data', $data ?? [], null);
        $this->setIfExists('no_periodo', $data ?? [], null);
        $this->setIfExists('sem_hora', $data ?? [], null);
        $this->setIfExists('com_hora', $data ?? [], null);
        $this->setIfExists('no_inter', $data ?? [], null);
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
     * Gets sem_data
     *
     * @return \NuvemFiscal\Model\CteSefazSemData|null
     */
    public function getSemData()
    {
        return $this->container['sem_data'];
    }

    /**
     * Sets sem_data
     *
     * @param \NuvemFiscal\Model\CteSefazSemData|null $sem_data sem_data
     *
     * @return self
     */
    public function setSemData($sem_data)
    {
        if (is_null($sem_data)) {
            throw new \InvalidArgumentException('non-nullable sem_data cannot be null');
        }
        $this->container['sem_data'] = $sem_data;

        return $this;
    }

    /**
     * Gets com_data
     *
     * @return \NuvemFiscal\Model\CteSefazComData|null
     */
    public function getComData()
    {
        return $this->container['com_data'];
    }

    /**
     * Sets com_data
     *
     * @param \NuvemFiscal\Model\CteSefazComData|null $com_data com_data
     *
     * @return self
     */
    public function setComData($com_data)
    {
        if (is_null($com_data)) {
            throw new \InvalidArgumentException('non-nullable com_data cannot be null');
        }
        $this->container['com_data'] = $com_data;

        return $this;
    }

    /**
     * Gets no_periodo
     *
     * @return \NuvemFiscal\Model\CteSefazNoPeriodo|null
     */
    public function getNoPeriodo()
    {
        return $this->container['no_periodo'];
    }

    /**
     * Sets no_periodo
     *
     * @param \NuvemFiscal\Model\CteSefazNoPeriodo|null $no_periodo no_periodo
     *
     * @return self
     */
    public function setNoPeriodo($no_periodo)
    {
        if (is_null($no_periodo)) {
            throw new \InvalidArgumentException('non-nullable no_periodo cannot be null');
        }
        $this->container['no_periodo'] = $no_periodo;

        return $this;
    }

    /**
     * Gets sem_hora
     *
     * @return \NuvemFiscal\Model\CteSefazSemHora|null
     */
    public function getSemHora()
    {
        return $this->container['sem_hora'];
    }

    /**
     * Sets sem_hora
     *
     * @param \NuvemFiscal\Model\CteSefazSemHora|null $sem_hora sem_hora
     *
     * @return self
     */
    public function setSemHora($sem_hora)
    {
        if (is_null($sem_hora)) {
            throw new \InvalidArgumentException('non-nullable sem_hora cannot be null');
        }
        $this->container['sem_hora'] = $sem_hora;

        return $this;
    }

    /**
     * Gets com_hora
     *
     * @return \NuvemFiscal\Model\CteSefazComHora|null
     */
    public function getComHora()
    {
        return $this->container['com_hora'];
    }

    /**
     * Sets com_hora
     *
     * @param \NuvemFiscal\Model\CteSefazComHora|null $com_hora com_hora
     *
     * @return self
     */
    public function setComHora($com_hora)
    {
        if (is_null($com_hora)) {
            throw new \InvalidArgumentException('non-nullable com_hora cannot be null');
        }
        $this->container['com_hora'] = $com_hora;

        return $this;
    }

    /**
     * Gets no_inter
     *
     * @return \NuvemFiscal\Model\CteSefazNoInter|null
     */
    public function getNoInter()
    {
        return $this->container['no_inter'];
    }

    /**
     * Sets no_inter
     *
     * @param \NuvemFiscal\Model\CteSefazNoInter|null $no_inter no_inter
     *
     * @return self
     */
    public function setNoInter($no_inter)
    {
        if (is_null($no_inter)) {
            throw new \InvalidArgumentException('non-nullable no_inter cannot be null');
        }
        $this->container['no_inter'] = $no_inter;

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


