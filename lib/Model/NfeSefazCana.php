<?php
/**
 * NfeSefazCana
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
 * NfeSefazCana Class Doc Comment
 *
 * @category Class
 * @description Informações de registro aquisições de cana.
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class NfeSefazCana implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NfeSefazCana';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'safra' => 'string',
        'ref' => 'string',
        'for_dia' => '\NuvemFiscal\Model\NfeSefazForDia[]',
        'q_tot_mes' => 'float',
        'q_tot_ant' => 'float',
        'q_tot_ger' => 'float',
        'deduc' => '\NuvemFiscal\Model\NfeSefazDeduc[]',
        'v_for' => 'float',
        'v_tot_ded' => 'float',
        'v_liq_for' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'safra' => null,
        'ref' => null,
        'for_dia' => null,
        'q_tot_mes' => null,
        'q_tot_ant' => null,
        'q_tot_ger' => null,
        'deduc' => null,
        'v_for' => null,
        'v_tot_ded' => null,
        'v_liq_for' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'safra' => true,
        'ref' => true,
        'for_dia' => false,
        'q_tot_mes' => true,
        'q_tot_ant' => true,
        'q_tot_ger' => true,
        'deduc' => false,
        'v_for' => true,
        'v_tot_ded' => true,
        'v_liq_for' => true
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
        'safra' => 'safra',
        'ref' => 'ref',
        'for_dia' => 'forDia',
        'q_tot_mes' => 'qTotMes',
        'q_tot_ant' => 'qTotAnt',
        'q_tot_ger' => 'qTotGer',
        'deduc' => 'deduc',
        'v_for' => 'vFor',
        'v_tot_ded' => 'vTotDed',
        'v_liq_for' => 'vLiqFor'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'safra' => 'setSafra',
        'ref' => 'setRef',
        'for_dia' => 'setForDia',
        'q_tot_mes' => 'setQTotMes',
        'q_tot_ant' => 'setQTotAnt',
        'q_tot_ger' => 'setQTotGer',
        'deduc' => 'setDeduc',
        'v_for' => 'setVFor',
        'v_tot_ded' => 'setVTotDed',
        'v_liq_for' => 'setVLiqFor'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'safra' => 'getSafra',
        'ref' => 'getRef',
        'for_dia' => 'getForDia',
        'q_tot_mes' => 'getQTotMes',
        'q_tot_ant' => 'getQTotAnt',
        'q_tot_ger' => 'getQTotGer',
        'deduc' => 'getDeduc',
        'v_for' => 'getVFor',
        'v_tot_ded' => 'getVTotDed',
        'v_liq_for' => 'getVLiqFor'
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
        $this->setIfExists('safra', $data ?? [], null);
        $this->setIfExists('ref', $data ?? [], null);
        $this->setIfExists('for_dia', $data ?? [], null);
        $this->setIfExists('q_tot_mes', $data ?? [], null);
        $this->setIfExists('q_tot_ant', $data ?? [], null);
        $this->setIfExists('q_tot_ger', $data ?? [], null);
        $this->setIfExists('deduc', $data ?? [], null);
        $this->setIfExists('v_for', $data ?? [], null);
        $this->setIfExists('v_tot_ded', $data ?? [], null);
        $this->setIfExists('v_liq_for', $data ?? [], null);
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

        if ($this->container['safra'] === null) {
            $invalidProperties[] = "'safra' can't be null";
        }
        if ((mb_strlen($this->container['safra']) > 9)) {
            $invalidProperties[] = "invalid value for 'safra', the character length must be smaller than or equal to 9.";
        }

        if ((mb_strlen($this->container['safra']) < 4)) {
            $invalidProperties[] = "invalid value for 'safra', the character length must be bigger than or equal to 4.";
        }

        if ($this->container['ref'] === null) {
            $invalidProperties[] = "'ref' can't be null";
        }
        if ($this->container['for_dia'] === null) {
            $invalidProperties[] = "'for_dia' can't be null";
        }
        if ($this->container['q_tot_mes'] === null) {
            $invalidProperties[] = "'q_tot_mes' can't be null";
        }
        if ($this->container['q_tot_ant'] === null) {
            $invalidProperties[] = "'q_tot_ant' can't be null";
        }
        if ($this->container['q_tot_ger'] === null) {
            $invalidProperties[] = "'q_tot_ger' can't be null";
        }
        if ($this->container['v_for'] === null) {
            $invalidProperties[] = "'v_for' can't be null";
        }
        if ($this->container['v_tot_ded'] === null) {
            $invalidProperties[] = "'v_tot_ded' can't be null";
        }
        if ($this->container['v_liq_for'] === null) {
            $invalidProperties[] = "'v_liq_for' can't be null";
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
     * Gets safra
     *
     * @return string
     */
    public function getSafra()
    {
        return $this->container['safra'];
    }

    /**
     * Sets safra
     *
     * @param string $safra Identificação da safra.
     *
     * @return self
     */
    public function setSafra($safra)
    {
        if (is_null($safra)) {
            array_push($this->openAPINullablesSetToNull, 'safra');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('safra', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($safra) && (mb_strlen($safra) > 9)) {
            throw new \InvalidArgumentException('invalid length for $safra when calling NfeSefazCana., must be smaller than or equal to 9.');
        }
        if (!is_null($safra) && (mb_strlen($safra) < 4)) {
            throw new \InvalidArgumentException('invalid length for $safra when calling NfeSefazCana., must be bigger than or equal to 4.');
        }

        $this->container['safra'] = $safra;

        return $this;
    }

    /**
     * Gets ref
     *
     * @return string
     */
    public function getRef()
    {
        return $this->container['ref'];
    }

    /**
     * Sets ref
     *
     * @param string $ref Mês e Ano de Referência, formato: MM/AAAA.
     *
     * @return self
     */
    public function setRef($ref)
    {
        if (is_null($ref)) {
            array_push($this->openAPINullablesSetToNull, 'ref');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ref', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ref'] = $ref;

        return $this;
    }

    /**
     * Gets for_dia
     *
     * @return \NuvemFiscal\Model\NfeSefazForDia[]
     */
    public function getForDia()
    {
        return $this->container['for_dia'];
    }

    /**
     * Sets for_dia
     *
     * @param \NuvemFiscal\Model\NfeSefazForDia[] $for_dia for_dia
     *
     * @return self
     */
    public function setForDia($for_dia)
    {
        if (is_null($for_dia)) {
            throw new \InvalidArgumentException('non-nullable for_dia cannot be null');
        }
        $this->container['for_dia'] = $for_dia;

        return $this;
    }

    /**
     * Gets q_tot_mes
     *
     * @return float
     */
    public function getQTotMes()
    {
        return $this->container['q_tot_mes'];
    }

    /**
     * Sets q_tot_mes
     *
     * @param float $q_tot_mes Total do mês.
     *
     * @return self
     */
    public function setQTotMes($q_tot_mes)
    {
        if (is_null($q_tot_mes)) {
            array_push($this->openAPINullablesSetToNull, 'q_tot_mes');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('q_tot_mes', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['q_tot_mes'] = $q_tot_mes;

        return $this;
    }

    /**
     * Gets q_tot_ant
     *
     * @return float
     */
    public function getQTotAnt()
    {
        return $this->container['q_tot_ant'];
    }

    /**
     * Sets q_tot_ant
     *
     * @param float $q_tot_ant Total Anterior.
     *
     * @return self
     */
    public function setQTotAnt($q_tot_ant)
    {
        if (is_null($q_tot_ant)) {
            array_push($this->openAPINullablesSetToNull, 'q_tot_ant');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('q_tot_ant', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['q_tot_ant'] = $q_tot_ant;

        return $this;
    }

    /**
     * Gets q_tot_ger
     *
     * @return float
     */
    public function getQTotGer()
    {
        return $this->container['q_tot_ger'];
    }

    /**
     * Sets q_tot_ger
     *
     * @param float $q_tot_ger Total Geral.
     *
     * @return self
     */
    public function setQTotGer($q_tot_ger)
    {
        if (is_null($q_tot_ger)) {
            array_push($this->openAPINullablesSetToNull, 'q_tot_ger');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('q_tot_ger', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['q_tot_ger'] = $q_tot_ger;

        return $this;
    }

    /**
     * Gets deduc
     *
     * @return \NuvemFiscal\Model\NfeSefazDeduc[]|null
     */
    public function getDeduc()
    {
        return $this->container['deduc'];
    }

    /**
     * Sets deduc
     *
     * @param \NuvemFiscal\Model\NfeSefazDeduc[]|null $deduc deduc
     *
     * @return self
     */
    public function setDeduc($deduc)
    {
        if (is_null($deduc)) {
            throw new \InvalidArgumentException('non-nullable deduc cannot be null');
        }
        $this->container['deduc'] = $deduc;

        return $this;
    }

    /**
     * Gets v_for
     *
     * @return float
     */
    public function getVFor()
    {
        return $this->container['v_for'];
    }

    /**
     * Sets v_for
     *
     * @param float $v_for Valor  dos fornecimentos.
     *
     * @return self
     */
    public function setVFor($v_for)
    {
        if (is_null($v_for)) {
            array_push($this->openAPINullablesSetToNull, 'v_for');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('v_for', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['v_for'] = $v_for;

        return $this;
    }

    /**
     * Gets v_tot_ded
     *
     * @return float
     */
    public function getVTotDed()
    {
        return $this->container['v_tot_ded'];
    }

    /**
     * Sets v_tot_ded
     *
     * @param float $v_tot_ded Valor Total das Deduções.
     *
     * @return self
     */
    public function setVTotDed($v_tot_ded)
    {
        if (is_null($v_tot_ded)) {
            array_push($this->openAPINullablesSetToNull, 'v_tot_ded');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('v_tot_ded', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['v_tot_ded'] = $v_tot_ded;

        return $this;
    }

    /**
     * Gets v_liq_for
     *
     * @return float
     */
    public function getVLiqFor()
    {
        return $this->container['v_liq_for'];
    }

    /**
     * Sets v_liq_for
     *
     * @param float $v_liq_for Valor Líquido dos fornecimentos.
     *
     * @return self
     */
    public function setVLiqFor($v_liq_for)
    {
        if (is_null($v_liq_for)) {
            array_push($this->openAPINullablesSetToNull, 'v_liq_for');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('v_liq_for', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['v_liq_for'] = $v_liq_for;

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


