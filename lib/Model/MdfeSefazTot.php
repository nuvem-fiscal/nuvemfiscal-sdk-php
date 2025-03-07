<?php
/**
 * MdfeSefazTot
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
 * MdfeSefazTot Class Doc Comment
 *
 * @category Class
 * @description Totalizadores da carga transportada e seus documentos fiscais.
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class MdfeSefazTot implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MdfeSefazTot';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'q_cte' => 'int',
        'q_nfe' => 'int',
        'q_mdfe' => 'int',
        'v_carga' => 'float',
        'c_unid' => 'string',
        'q_carga' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'q_cte' => null,
        'q_nfe' => null,
        'q_mdfe' => null,
        'v_carga' => null,
        'c_unid' => null,
        'q_carga' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'q_cte' => true,
        'q_nfe' => true,
        'q_mdfe' => true,
        'v_carga' => true,
        'c_unid' => true,
        'q_carga' => true
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
        'q_cte' => 'qCTe',
        'q_nfe' => 'qNFe',
        'q_mdfe' => 'qMDFe',
        'v_carga' => 'vCarga',
        'c_unid' => 'cUnid',
        'q_carga' => 'qCarga'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'q_cte' => 'setQCte',
        'q_nfe' => 'setQNfe',
        'q_mdfe' => 'setQMdfe',
        'v_carga' => 'setVCarga',
        'c_unid' => 'setCUnid',
        'q_carga' => 'setQCarga'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'q_cte' => 'getQCte',
        'q_nfe' => 'getQNfe',
        'q_mdfe' => 'getQMdfe',
        'v_carga' => 'getVCarga',
        'c_unid' => 'getCUnid',
        'q_carga' => 'getQCarga'
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
        $this->setIfExists('q_cte', $data ?? [], null);
        $this->setIfExists('q_nfe', $data ?? [], null);
        $this->setIfExists('q_mdfe', $data ?? [], null);
        $this->setIfExists('v_carga', $data ?? [], null);
        $this->setIfExists('c_unid', $data ?? [], null);
        $this->setIfExists('q_carga', $data ?? [], null);
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

        if (!is_null($this->container['q_cte']) && ($this->container['q_cte'] > 999999)) {
            $invalidProperties[] = "invalid value for 'q_cte', must be smaller than or equal to 999999.";
        }

        if (!is_null($this->container['q_cte']) && ($this->container['q_cte'] < 0)) {
            $invalidProperties[] = "invalid value for 'q_cte', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['q_nfe']) && ($this->container['q_nfe'] > 999999)) {
            $invalidProperties[] = "invalid value for 'q_nfe', must be smaller than or equal to 999999.";
        }

        if (!is_null($this->container['q_nfe']) && ($this->container['q_nfe'] < 0)) {
            $invalidProperties[] = "invalid value for 'q_nfe', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['q_mdfe']) && ($this->container['q_mdfe'] > 999999)) {
            $invalidProperties[] = "invalid value for 'q_mdfe', must be smaller than or equal to 999999.";
        }

        if (!is_null($this->container['q_mdfe']) && ($this->container['q_mdfe'] < 0)) {
            $invalidProperties[] = "invalid value for 'q_mdfe', must be bigger than or equal to 0.";
        }

        if ($this->container['v_carga'] === null) {
            $invalidProperties[] = "'v_carga' can't be null";
        }
        if (($this->container['v_carga'] < 0)) {
            $invalidProperties[] = "invalid value for 'v_carga', must be bigger than or equal to 0.";
        }

        if ($this->container['c_unid'] === null) {
            $invalidProperties[] = "'c_unid' can't be null";
        }
        if ($this->container['q_carga'] === null) {
            $invalidProperties[] = "'q_carga' can't be null";
        }
        if (($this->container['q_carga'] < 0)) {
            $invalidProperties[] = "invalid value for 'q_carga', must be bigger than or equal to 0.";
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
     * Gets q_cte
     *
     * @return int|null
     */
    public function getQCte()
    {
        return $this->container['q_cte'];
    }

    /**
     * Sets q_cte
     *
     * @param int|null $q_cte Quantidade total de CT-e relacionados no Manifesto.
     *
     * @return self
     */
    public function setQCte($q_cte)
    {
        if (is_null($q_cte)) {
            array_push($this->openAPINullablesSetToNull, 'q_cte');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('q_cte', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($q_cte) && ($q_cte > 999999)) {
            throw new \InvalidArgumentException('invalid value for $q_cte when calling MdfeSefazTot., must be smaller than or equal to 999999.');
        }
        if (!is_null($q_cte) && ($q_cte < 0)) {
            throw new \InvalidArgumentException('invalid value for $q_cte when calling MdfeSefazTot., must be bigger than or equal to 0.');
        }

        $this->container['q_cte'] = $q_cte;

        return $this;
    }

    /**
     * Gets q_nfe
     *
     * @return int|null
     */
    public function getQNfe()
    {
        return $this->container['q_nfe'];
    }

    /**
     * Sets q_nfe
     *
     * @param int|null $q_nfe Quantidade total de NF-e relacionadas no Manifesto.
     *
     * @return self
     */
    public function setQNfe($q_nfe)
    {
        if (is_null($q_nfe)) {
            array_push($this->openAPINullablesSetToNull, 'q_nfe');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('q_nfe', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($q_nfe) && ($q_nfe > 999999)) {
            throw new \InvalidArgumentException('invalid value for $q_nfe when calling MdfeSefazTot., must be smaller than or equal to 999999.');
        }
        if (!is_null($q_nfe) && ($q_nfe < 0)) {
            throw new \InvalidArgumentException('invalid value for $q_nfe when calling MdfeSefazTot., must be bigger than or equal to 0.');
        }

        $this->container['q_nfe'] = $q_nfe;

        return $this;
    }

    /**
     * Gets q_mdfe
     *
     * @return int|null
     */
    public function getQMdfe()
    {
        return $this->container['q_mdfe'];
    }

    /**
     * Sets q_mdfe
     *
     * @param int|null $q_mdfe Quantidade total de MDF-e relacionados no Manifesto Aquaviário.
     *
     * @return self
     */
    public function setQMdfe($q_mdfe)
    {
        if (is_null($q_mdfe)) {
            array_push($this->openAPINullablesSetToNull, 'q_mdfe');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('q_mdfe', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($q_mdfe) && ($q_mdfe > 999999)) {
            throw new \InvalidArgumentException('invalid value for $q_mdfe when calling MdfeSefazTot., must be smaller than or equal to 999999.');
        }
        if (!is_null($q_mdfe) && ($q_mdfe < 0)) {
            throw new \InvalidArgumentException('invalid value for $q_mdfe when calling MdfeSefazTot., must be bigger than or equal to 0.');
        }

        $this->container['q_mdfe'] = $q_mdfe;

        return $this;
    }

    /**
     * Gets v_carga
     *
     * @return float
     */
    public function getVCarga()
    {
        return $this->container['v_carga'];
    }

    /**
     * Sets v_carga
     *
     * @param float $v_carga Valor total da carga / mercadorias transportadas.
     *
     * @return self
     */
    public function setVCarga($v_carga)
    {
        if (is_null($v_carga)) {
            array_push($this->openAPINullablesSetToNull, 'v_carga');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('v_carga', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($v_carga) && ($v_carga < 0)) {
            throw new \InvalidArgumentException('invalid value for $v_carga when calling MdfeSefazTot., must be bigger than or equal to 0.');
        }

        $this->container['v_carga'] = $v_carga;

        return $this;
    }

    /**
     * Gets c_unid
     *
     * @return string
     */
    public function getCUnid()
    {
        return $this->container['c_unid'];
    }

    /**
     * Sets c_unid
     *
     * @param string $c_unid Código da unidade de medida do Peso Bruto da Carga / Mercadorias transportadas.  * 01 - KG  * 02 - TON
     *
     * @return self
     */
    public function setCUnid($c_unid)
    {
        if (is_null($c_unid)) {
            array_push($this->openAPINullablesSetToNull, 'c_unid');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('c_unid', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['c_unid'] = $c_unid;

        return $this;
    }

    /**
     * Gets q_carga
     *
     * @return float
     */
    public function getQCarga()
    {
        return $this->container['q_carga'];
    }

    /**
     * Sets q_carga
     *
     * @param float $q_carga Peso Bruto Total da Carga / Mercadorias transportadas.
     *
     * @return self
     */
    public function setQCarga($q_carga)
    {
        if (is_null($q_carga)) {
            array_push($this->openAPINullablesSetToNull, 'q_carga');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('q_carga', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($q_carga) && ($q_carga < 0)) {
            throw new \InvalidArgumentException('invalid value for $q_carga when calling MdfeSefazTot., must be bigger than or equal to 0.');
        }

        $this->container['q_carga'] = $q_carga;

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


