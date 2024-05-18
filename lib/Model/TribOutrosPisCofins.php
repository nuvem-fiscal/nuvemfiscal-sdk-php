<?php
/**
 * TribOutrosPisCofins
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
 * TribOutrosPisCofins Class Doc Comment
 *
 * @category Class
 * @description Grupo de informações dos tributos PIS/COFINS.
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class TribOutrosPisCofins implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TribOutrosPisCofins';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cst' => 'string',
        'v_bc_pis_cofins' => 'float',
        'p_aliq_pis' => 'float',
        'p_aliq_cofins' => 'float',
        'v_pis' => 'float',
        'v_cofins' => 'float',
        'tp_ret_pis_cofins' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'cst' => null,
        'v_bc_pis_cofins' => null,
        'p_aliq_pis' => null,
        'p_aliq_cofins' => null,
        'v_pis' => null,
        'v_cofins' => null,
        'tp_ret_pis_cofins' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'cst' => true,
        'v_bc_pis_cofins' => true,
        'p_aliq_pis' => true,
        'p_aliq_cofins' => true,
        'v_pis' => true,
        'v_cofins' => true,
        'tp_ret_pis_cofins' => true
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
        'cst' => 'CST',
        'v_bc_pis_cofins' => 'vBCPisCofins',
        'p_aliq_pis' => 'pAliqPis',
        'p_aliq_cofins' => 'pAliqCofins',
        'v_pis' => 'vPis',
        'v_cofins' => 'vCofins',
        'tp_ret_pis_cofins' => 'tpRetPisCofins'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cst' => 'setCst',
        'v_bc_pis_cofins' => 'setVBcPisCofins',
        'p_aliq_pis' => 'setPAliqPis',
        'p_aliq_cofins' => 'setPAliqCofins',
        'v_pis' => 'setVPis',
        'v_cofins' => 'setVCofins',
        'tp_ret_pis_cofins' => 'setTpRetPisCofins'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cst' => 'getCst',
        'v_bc_pis_cofins' => 'getVBcPisCofins',
        'p_aliq_pis' => 'getPAliqPis',
        'p_aliq_cofins' => 'getPAliqCofins',
        'v_pis' => 'getVPis',
        'v_cofins' => 'getVCofins',
        'tp_ret_pis_cofins' => 'getTpRetPisCofins'
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
        $this->setIfExists('cst', $data ?? [], null);
        $this->setIfExists('v_bc_pis_cofins', $data ?? [], null);
        $this->setIfExists('p_aliq_pis', $data ?? [], null);
        $this->setIfExists('p_aliq_cofins', $data ?? [], null);
        $this->setIfExists('v_pis', $data ?? [], null);
        $this->setIfExists('v_cofins', $data ?? [], null);
        $this->setIfExists('tp_ret_pis_cofins', $data ?? [], null);
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

        if ($this->container['cst'] === null) {
            $invalidProperties[] = "'cst' can't be null";
        }
        if (!is_null($this->container['v_bc_pis_cofins']) && ($this->container['v_bc_pis_cofins'] < 0)) {
            $invalidProperties[] = "invalid value for 'v_bc_pis_cofins', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['p_aliq_pis']) && ($this->container['p_aliq_pis'] < 0)) {
            $invalidProperties[] = "invalid value for 'p_aliq_pis', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['p_aliq_cofins']) && ($this->container['p_aliq_cofins'] < 0)) {
            $invalidProperties[] = "invalid value for 'p_aliq_cofins', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['v_pis']) && ($this->container['v_pis'] < 0)) {
            $invalidProperties[] = "invalid value for 'v_pis', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['v_cofins']) && ($this->container['v_cofins'] < 0)) {
            $invalidProperties[] = "invalid value for 'v_cofins', must be bigger than or equal to 0.";
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
     * Gets cst
     *
     * @return string
     */
    public function getCst()
    {
        return $this->container['cst'];
    }

    /**
     * Sets cst
     *
     * @param string $cst Código de Situação Tributária do PIS/COFINS (CST):  * 00 - Nenhum  * 01 - Operação Tributável com Alíquota Básica  * 02 - Operação Tributável com Alíquota Diferenciada  * 03 - Operação Tributável com Alíquota por Unidade de Medida de Produto  * 04 - Operação Tributável monofásica - Revenda a Alíquota Zero  * 05 - Operação Tributável por Substituição Tributária  * 06 - Operação Tributável a Alíquota Zero  * 07 - Operação Tributável da Contribuição  * 08 - Operação sem Incidência da Contribuição  * 09 - Operação com Suspensão da Contribuição
     *
     * @return self
     */
    public function setCst($cst)
    {
        if (is_null($cst)) {
            array_push($this->openAPINullablesSetToNull, 'cst');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('cst', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['cst'] = $cst;

        return $this;
    }

    /**
     * Gets v_bc_pis_cofins
     *
     * @return float|null
     */
    public function getVBcPisCofins()
    {
        return $this->container['v_bc_pis_cofins'];
    }

    /**
     * Sets v_bc_pis_cofins
     *
     * @param float|null $v_bc_pis_cofins Valor da Base de Cálculo do PIS/COFINS (R$).
     *
     * @return self
     */
    public function setVBcPisCofins($v_bc_pis_cofins)
    {
        if (is_null($v_bc_pis_cofins)) {
            array_push($this->openAPINullablesSetToNull, 'v_bc_pis_cofins');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('v_bc_pis_cofins', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($v_bc_pis_cofins) && ($v_bc_pis_cofins < 0)) {
            throw new \InvalidArgumentException('invalid value for $v_bc_pis_cofins when calling TribOutrosPisCofins., must be bigger than or equal to 0.');
        }

        $this->container['v_bc_pis_cofins'] = $v_bc_pis_cofins;

        return $this;
    }

    /**
     * Gets p_aliq_pis
     *
     * @return float|null
     */
    public function getPAliqPis()
    {
        return $this->container['p_aliq_pis'];
    }

    /**
     * Sets p_aliq_pis
     *
     * @param float|null $p_aliq_pis Valor da Alíquota do PIS (%%).
     *
     * @return self
     */
    public function setPAliqPis($p_aliq_pis)
    {
        if (is_null($p_aliq_pis)) {
            array_push($this->openAPINullablesSetToNull, 'p_aliq_pis');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('p_aliq_pis', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($p_aliq_pis) && ($p_aliq_pis < 0)) {
            throw new \InvalidArgumentException('invalid value for $p_aliq_pis when calling TribOutrosPisCofins., must be bigger than or equal to 0.');
        }

        $this->container['p_aliq_pis'] = $p_aliq_pis;

        return $this;
    }

    /**
     * Gets p_aliq_cofins
     *
     * @return float|null
     */
    public function getPAliqCofins()
    {
        return $this->container['p_aliq_cofins'];
    }

    /**
     * Sets p_aliq_cofins
     *
     * @param float|null $p_aliq_cofins Valor da Alíquota da COFINS (%%).
     *
     * @return self
     */
    public function setPAliqCofins($p_aliq_cofins)
    {
        if (is_null($p_aliq_cofins)) {
            array_push($this->openAPINullablesSetToNull, 'p_aliq_cofins');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('p_aliq_cofins', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($p_aliq_cofins) && ($p_aliq_cofins < 0)) {
            throw new \InvalidArgumentException('invalid value for $p_aliq_cofins when calling TribOutrosPisCofins., must be bigger than or equal to 0.');
        }

        $this->container['p_aliq_cofins'] = $p_aliq_cofins;

        return $this;
    }

    /**
     * Gets v_pis
     *
     * @return float|null
     */
    public function getVPis()
    {
        return $this->container['v_pis'];
    }

    /**
     * Sets v_pis
     *
     * @param float|null $v_pis Valor monetário do PIS (R$).
     *
     * @return self
     */
    public function setVPis($v_pis)
    {
        if (is_null($v_pis)) {
            array_push($this->openAPINullablesSetToNull, 'v_pis');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('v_pis', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($v_pis) && ($v_pis < 0)) {
            throw new \InvalidArgumentException('invalid value for $v_pis when calling TribOutrosPisCofins., must be bigger than or equal to 0.');
        }

        $this->container['v_pis'] = $v_pis;

        return $this;
    }

    /**
     * Gets v_cofins
     *
     * @return float|null
     */
    public function getVCofins()
    {
        return $this->container['v_cofins'];
    }

    /**
     * Sets v_cofins
     *
     * @param float|null $v_cofins Valor monetário do COFINS (R$).
     *
     * @return self
     */
    public function setVCofins($v_cofins)
    {
        if (is_null($v_cofins)) {
            array_push($this->openAPINullablesSetToNull, 'v_cofins');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('v_cofins', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($v_cofins) && ($v_cofins < 0)) {
            throw new \InvalidArgumentException('invalid value for $v_cofins when calling TribOutrosPisCofins., must be bigger than or equal to 0.');
        }

        $this->container['v_cofins'] = $v_cofins;

        return $this;
    }

    /**
     * Gets tp_ret_pis_cofins
     *
     * @return int|null
     */
    public function getTpRetPisCofins()
    {
        return $this->container['tp_ret_pis_cofins'];
    }

    /**
     * Sets tp_ret_pis_cofins
     *
     * @param int|null $tp_ret_pis_cofins Tipo de retencao do Pis/Cofins:  * 1 - Retido  * 2 - Não Retido
     *
     * @return self
     */
    public function setTpRetPisCofins($tp_ret_pis_cofins)
    {
        if (is_null($tp_ret_pis_cofins)) {
            array_push($this->openAPINullablesSetToNull, 'tp_ret_pis_cofins');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tp_ret_pis_cofins', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['tp_ret_pis_cofins'] = $tp_ret_pis_cofins;

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


