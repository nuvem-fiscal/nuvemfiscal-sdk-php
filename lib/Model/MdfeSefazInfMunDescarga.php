<?php
/**
 * MdfeSefazInfMunDescarga
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
 * MdfeSefazInfMunDescarga Class Doc Comment
 *
 * @category Class
 * @description Informações dos Municípios de descarregamento.
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class MdfeSefazInfMunDescarga implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MdfeSefazInfMunDescarga';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'c_mun_descarga' => 'string',
        'x_mun_descarga' => 'string',
        'inf_cte' => '\NuvemFiscal\Model\MdfeSefazInfCTe[]',
        'inf_nfe' => '\NuvemFiscal\Model\MdfeSefazInfNFe[]',
        'inf_mdfe_transp' => '\NuvemFiscal\Model\MdfeSefazInfMDFeTransp[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'c_mun_descarga' => null,
        'x_mun_descarga' => null,
        'inf_cte' => null,
        'inf_nfe' => null,
        'inf_mdfe_transp' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'c_mun_descarga' => true,
        'x_mun_descarga' => true,
        'inf_cte' => false,
        'inf_nfe' => false,
        'inf_mdfe_transp' => false
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
        'c_mun_descarga' => 'cMunDescarga',
        'x_mun_descarga' => 'xMunDescarga',
        'inf_cte' => 'infCTe',
        'inf_nfe' => 'infNFe',
        'inf_mdfe_transp' => 'infMDFeTransp'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'c_mun_descarga' => 'setCMunDescarga',
        'x_mun_descarga' => 'setXMunDescarga',
        'inf_cte' => 'setInfCte',
        'inf_nfe' => 'setInfNfe',
        'inf_mdfe_transp' => 'setInfMdfeTransp'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'c_mun_descarga' => 'getCMunDescarga',
        'x_mun_descarga' => 'getXMunDescarga',
        'inf_cte' => 'getInfCte',
        'inf_nfe' => 'getInfNfe',
        'inf_mdfe_transp' => 'getInfMdfeTransp'
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
        $this->setIfExists('c_mun_descarga', $data ?? [], null);
        $this->setIfExists('x_mun_descarga', $data ?? [], null);
        $this->setIfExists('inf_cte', $data ?? [], null);
        $this->setIfExists('inf_nfe', $data ?? [], null);
        $this->setIfExists('inf_mdfe_transp', $data ?? [], null);
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

        if ($this->container['c_mun_descarga'] === null) {
            $invalidProperties[] = "'c_mun_descarga' can't be null";
        }
        if ($this->container['x_mun_descarga'] === null) {
            $invalidProperties[] = "'x_mun_descarga' can't be null";
        }
        if ((mb_strlen($this->container['x_mun_descarga']) > 60)) {
            $invalidProperties[] = "invalid value for 'x_mun_descarga', the character length must be smaller than or equal to 60.";
        }

        if ((mb_strlen($this->container['x_mun_descarga']) < 2)) {
            $invalidProperties[] = "invalid value for 'x_mun_descarga', the character length must be bigger than or equal to 2.";
        }

        if (!is_null($this->container['inf_cte']) && (count($this->container['inf_cte']) > 10000)) {
            $invalidProperties[] = "invalid value for 'inf_cte', number of items must be less than or equal to 10000.";
        }

        if (!is_null($this->container['inf_nfe']) && (count($this->container['inf_nfe']) > 10000)) {
            $invalidProperties[] = "invalid value for 'inf_nfe', number of items must be less than or equal to 10000.";
        }

        if (!is_null($this->container['inf_mdfe_transp']) && (count($this->container['inf_mdfe_transp']) > 10000)) {
            $invalidProperties[] = "invalid value for 'inf_mdfe_transp', number of items must be less than or equal to 10000.";
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
     * Gets c_mun_descarga
     *
     * @return string
     */
    public function getCMunDescarga()
    {
        return $this->container['c_mun_descarga'];
    }

    /**
     * Sets c_mun_descarga
     *
     * @param string $c_mun_descarga Código do Município de Descarregamento.
     *
     * @return self
     */
    public function setCMunDescarga($c_mun_descarga)
    {
        if (is_null($c_mun_descarga)) {
            array_push($this->openAPINullablesSetToNull, 'c_mun_descarga');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('c_mun_descarga', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['c_mun_descarga'] = $c_mun_descarga;

        return $this;
    }

    /**
     * Gets x_mun_descarga
     *
     * @return string
     */
    public function getXMunDescarga()
    {
        return $this->container['x_mun_descarga'];
    }

    /**
     * Sets x_mun_descarga
     *
     * @param string $x_mun_descarga Nome do Município de Descarregamento.
     *
     * @return self
     */
    public function setXMunDescarga($x_mun_descarga)
    {
        if (is_null($x_mun_descarga)) {
            array_push($this->openAPINullablesSetToNull, 'x_mun_descarga');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('x_mun_descarga', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($x_mun_descarga) && (mb_strlen($x_mun_descarga) > 60)) {
            throw new \InvalidArgumentException('invalid length for $x_mun_descarga when calling MdfeSefazInfMunDescarga., must be smaller than or equal to 60.');
        }
        if (!is_null($x_mun_descarga) && (mb_strlen($x_mun_descarga) < 2)) {
            throw new \InvalidArgumentException('invalid length for $x_mun_descarga when calling MdfeSefazInfMunDescarga., must be bigger than or equal to 2.');
        }

        $this->container['x_mun_descarga'] = $x_mun_descarga;

        return $this;
    }

    /**
     * Gets inf_cte
     *
     * @return \NuvemFiscal\Model\MdfeSefazInfCTe[]|null
     */
    public function getInfCte()
    {
        return $this->container['inf_cte'];
    }

    /**
     * Sets inf_cte
     *
     * @param \NuvemFiscal\Model\MdfeSefazInfCTe[]|null $inf_cte inf_cte
     *
     * @return self
     */
    public function setInfCte($inf_cte)
    {
        if (is_null($inf_cte)) {
            throw new \InvalidArgumentException('non-nullable inf_cte cannot be null');
        }

        if ((count($inf_cte) > 10000)) {
            throw new \InvalidArgumentException('invalid value for $inf_cte when calling MdfeSefazInfMunDescarga., number of items must be less than or equal to 10000.');
        }
        $this->container['inf_cte'] = $inf_cte;

        return $this;
    }

    /**
     * Gets inf_nfe
     *
     * @return \NuvemFiscal\Model\MdfeSefazInfNFe[]|null
     */
    public function getInfNfe()
    {
        return $this->container['inf_nfe'];
    }

    /**
     * Sets inf_nfe
     *
     * @param \NuvemFiscal\Model\MdfeSefazInfNFe[]|null $inf_nfe inf_nfe
     *
     * @return self
     */
    public function setInfNfe($inf_nfe)
    {
        if (is_null($inf_nfe)) {
            throw new \InvalidArgumentException('non-nullable inf_nfe cannot be null');
        }

        if ((count($inf_nfe) > 10000)) {
            throw new \InvalidArgumentException('invalid value for $inf_nfe when calling MdfeSefazInfMunDescarga., number of items must be less than or equal to 10000.');
        }
        $this->container['inf_nfe'] = $inf_nfe;

        return $this;
    }

    /**
     * Gets inf_mdfe_transp
     *
     * @return \NuvemFiscal\Model\MdfeSefazInfMDFeTransp[]|null
     */
    public function getInfMdfeTransp()
    {
        return $this->container['inf_mdfe_transp'];
    }

    /**
     * Sets inf_mdfe_transp
     *
     * @param \NuvemFiscal\Model\MdfeSefazInfMDFeTransp[]|null $inf_mdfe_transp inf_mdfe_transp
     *
     * @return self
     */
    public function setInfMdfeTransp($inf_mdfe_transp)
    {
        if (is_null($inf_mdfe_transp)) {
            throw new \InvalidArgumentException('non-nullable inf_mdfe_transp cannot be null');
        }

        if ((count($inf_mdfe_transp) > 10000)) {
            throw new \InvalidArgumentException('invalid value for $inf_mdfe_transp when calling MdfeSefazInfMunDescarga., number of items must be less than or equal to 10000.');
        }
        $this->container['inf_mdfe_transp'] = $inf_mdfe_transp;

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


