<?php
/**
 * MdfeSefazRodo
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
 * MdfeSefazRodo Class Doc Comment
 *
 * @category Class
 * @description Informações do modal Rodoviário.
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class MdfeSefazRodo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MdfeSefazRodo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'inf_antt' => '\NuvemFiscal\Model\MdfeSefazInfANTT',
        'veic_tracao' => '\NuvemFiscal\Model\MdfeSefazVeicTracao',
        'veic_reboque' => '\NuvemFiscal\Model\MdfeSefazVeicReboque[]',
        'cod_ag_porto' => 'string',
        'lac_rodo' => '\NuvemFiscal\Model\MdfeSefazLacRodo[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'inf_antt' => null,
        'veic_tracao' => null,
        'veic_reboque' => null,
        'cod_ag_porto' => null,
        'lac_rodo' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'inf_antt' => false,
        'veic_tracao' => false,
        'veic_reboque' => false,
        'cod_ag_porto' => true,
        'lac_rodo' => false
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
        'inf_antt' => 'infANTT',
        'veic_tracao' => 'veicTracao',
        'veic_reboque' => 'veicReboque',
        'cod_ag_porto' => 'codAgPorto',
        'lac_rodo' => 'lacRodo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'inf_antt' => 'setInfAntt',
        'veic_tracao' => 'setVeicTracao',
        'veic_reboque' => 'setVeicReboque',
        'cod_ag_porto' => 'setCodAgPorto',
        'lac_rodo' => 'setLacRodo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'inf_antt' => 'getInfAntt',
        'veic_tracao' => 'getVeicTracao',
        'veic_reboque' => 'getVeicReboque',
        'cod_ag_porto' => 'getCodAgPorto',
        'lac_rodo' => 'getLacRodo'
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
        $this->setIfExists('inf_antt', $data ?? [], null);
        $this->setIfExists('veic_tracao', $data ?? [], null);
        $this->setIfExists('veic_reboque', $data ?? [], null);
        $this->setIfExists('cod_ag_porto', $data ?? [], null);
        $this->setIfExists('lac_rodo', $data ?? [], null);
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

        if ($this->container['veic_tracao'] === null) {
            $invalidProperties[] = "'veic_tracao' can't be null";
        }
        if (!is_null($this->container['veic_reboque']) && (count($this->container['veic_reboque']) > 3)) {
            $invalidProperties[] = "invalid value for 'veic_reboque', number of items must be less than or equal to 3.";
        }

        if (!is_null($this->container['cod_ag_porto']) && (mb_strlen($this->container['cod_ag_porto']) > 16)) {
            $invalidProperties[] = "invalid value for 'cod_ag_porto', the character length must be smaller than or equal to 16.";
        }

        if (!is_null($this->container['cod_ag_porto']) && (mb_strlen($this->container['cod_ag_porto']) < 0)) {
            $invalidProperties[] = "invalid value for 'cod_ag_porto', the character length must be bigger than or equal to 0.";
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
     * Gets inf_antt
     *
     * @return \NuvemFiscal\Model\MdfeSefazInfANTT|null
     */
    public function getInfAntt()
    {
        return $this->container['inf_antt'];
    }

    /**
     * Sets inf_antt
     *
     * @param \NuvemFiscal\Model\MdfeSefazInfANTT|null $inf_antt inf_antt
     *
     * @return self
     */
    public function setInfAntt($inf_antt)
    {
        if (is_null($inf_antt)) {
            throw new \InvalidArgumentException('non-nullable inf_antt cannot be null');
        }
        $this->container['inf_antt'] = $inf_antt;

        return $this;
    }

    /**
     * Gets veic_tracao
     *
     * @return \NuvemFiscal\Model\MdfeSefazVeicTracao
     */
    public function getVeicTracao()
    {
        return $this->container['veic_tracao'];
    }

    /**
     * Sets veic_tracao
     *
     * @param \NuvemFiscal\Model\MdfeSefazVeicTracao $veic_tracao veic_tracao
     *
     * @return self
     */
    public function setVeicTracao($veic_tracao)
    {
        if (is_null($veic_tracao)) {
            throw new \InvalidArgumentException('non-nullable veic_tracao cannot be null');
        }
        $this->container['veic_tracao'] = $veic_tracao;

        return $this;
    }

    /**
     * Gets veic_reboque
     *
     * @return \NuvemFiscal\Model\MdfeSefazVeicReboque[]|null
     */
    public function getVeicReboque()
    {
        return $this->container['veic_reboque'];
    }

    /**
     * Sets veic_reboque
     *
     * @param \NuvemFiscal\Model\MdfeSefazVeicReboque[]|null $veic_reboque veic_reboque
     *
     * @return self
     */
    public function setVeicReboque($veic_reboque)
    {
        if (is_null($veic_reboque)) {
            throw new \InvalidArgumentException('non-nullable veic_reboque cannot be null');
        }

        if ((count($veic_reboque) > 3)) {
            throw new \InvalidArgumentException('invalid value for $veic_reboque when calling MdfeSefazRodo., number of items must be less than or equal to 3.');
        }
        $this->container['veic_reboque'] = $veic_reboque;

        return $this;
    }

    /**
     * Gets cod_ag_porto
     *
     * @return string|null
     */
    public function getCodAgPorto()
    {
        return $this->container['cod_ag_porto'];
    }

    /**
     * Sets cod_ag_porto
     *
     * @param string|null $cod_ag_porto Código de Agendamento no porto.
     *
     * @return self
     */
    public function setCodAgPorto($cod_ag_porto)
    {
        if (is_null($cod_ag_porto)) {
            array_push($this->openAPINullablesSetToNull, 'cod_ag_porto');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('cod_ag_porto', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($cod_ag_porto) && (mb_strlen($cod_ag_porto) > 16)) {
            throw new \InvalidArgumentException('invalid length for $cod_ag_porto when calling MdfeSefazRodo., must be smaller than or equal to 16.');
        }
        if (!is_null($cod_ag_porto) && (mb_strlen($cod_ag_porto) < 0)) {
            throw new \InvalidArgumentException('invalid length for $cod_ag_porto when calling MdfeSefazRodo., must be bigger than or equal to 0.');
        }

        $this->container['cod_ag_porto'] = $cod_ag_porto;

        return $this;
    }

    /**
     * Gets lac_rodo
     *
     * @return \NuvemFiscal\Model\MdfeSefazLacRodo[]|null
     */
    public function getLacRodo()
    {
        return $this->container['lac_rodo'];
    }

    /**
     * Sets lac_rodo
     *
     * @param \NuvemFiscal\Model\MdfeSefazLacRodo[]|null $lac_rodo lac_rodo
     *
     * @return self
     */
    public function setLacRodo($lac_rodo)
    {
        if (is_null($lac_rodo)) {
            throw new \InvalidArgumentException('non-nullable lac_rodo cannot be null');
        }
        $this->container['lac_rodo'] = $lac_rodo;

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


