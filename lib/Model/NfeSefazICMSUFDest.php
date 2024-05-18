<?php
/**
 * NfeSefazICMSUFDest
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
 * NfeSefazICMSUFDest Class Doc Comment
 *
 * @category Class
 * @description Grupo a ser informado nas vendas interestarduais para consumidor final, não contribuinte de ICMS.
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class NfeSefazICMSUFDest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NfeSefazICMSUFDest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'v_bcuf_dest' => 'float',
        'v_bcfcpuf_dest' => 'float',
        'p_fcpuf_dest' => 'float',
        'p_icmsuf_dest' => 'float',
        'p_icms_inter' => 'float',
        'p_icms_inter_part' => 'float',
        'v_fcpuf_dest' => 'float',
        'v_icmsuf_dest' => 'float',
        'v_icmsuf_remet' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'v_bcuf_dest' => null,
        'v_bcfcpuf_dest' => null,
        'p_fcpuf_dest' => null,
        'p_icmsuf_dest' => null,
        'p_icms_inter' => null,
        'p_icms_inter_part' => null,
        'v_fcpuf_dest' => null,
        'v_icmsuf_dest' => null,
        'v_icmsuf_remet' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'v_bcuf_dest' => true,
        'v_bcfcpuf_dest' => true,
        'p_fcpuf_dest' => true,
        'p_icmsuf_dest' => true,
        'p_icms_inter' => true,
        'p_icms_inter_part' => true,
        'v_fcpuf_dest' => true,
        'v_icmsuf_dest' => true,
        'v_icmsuf_remet' => true
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
        'v_bcuf_dest' => 'vBCUFDest',
        'v_bcfcpuf_dest' => 'vBCFCPUFDest',
        'p_fcpuf_dest' => 'pFCPUFDest',
        'p_icmsuf_dest' => 'pICMSUFDest',
        'p_icms_inter' => 'pICMSInter',
        'p_icms_inter_part' => 'pICMSInterPart',
        'v_fcpuf_dest' => 'vFCPUFDest',
        'v_icmsuf_dest' => 'vICMSUFDest',
        'v_icmsuf_remet' => 'vICMSUFRemet'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'v_bcuf_dest' => 'setVBcufDest',
        'v_bcfcpuf_dest' => 'setVBcfcpufDest',
        'p_fcpuf_dest' => 'setPFcpufDest',
        'p_icmsuf_dest' => 'setPIcmsufDest',
        'p_icms_inter' => 'setPIcmsInter',
        'p_icms_inter_part' => 'setPIcmsInterPart',
        'v_fcpuf_dest' => 'setVFcpufDest',
        'v_icmsuf_dest' => 'setVIcmsufDest',
        'v_icmsuf_remet' => 'setVIcmsufRemet'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'v_bcuf_dest' => 'getVBcufDest',
        'v_bcfcpuf_dest' => 'getVBcfcpufDest',
        'p_fcpuf_dest' => 'getPFcpufDest',
        'p_icmsuf_dest' => 'getPIcmsufDest',
        'p_icms_inter' => 'getPIcmsInter',
        'p_icms_inter_part' => 'getPIcmsInterPart',
        'v_fcpuf_dest' => 'getVFcpufDest',
        'v_icmsuf_dest' => 'getVIcmsufDest',
        'v_icmsuf_remet' => 'getVIcmsufRemet'
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
        $this->setIfExists('v_bcuf_dest', $data ?? [], null);
        $this->setIfExists('v_bcfcpuf_dest', $data ?? [], null);
        $this->setIfExists('p_fcpuf_dest', $data ?? [], null);
        $this->setIfExists('p_icmsuf_dest', $data ?? [], null);
        $this->setIfExists('p_icms_inter', $data ?? [], null);
        $this->setIfExists('p_icms_inter_part', $data ?? [], null);
        $this->setIfExists('v_fcpuf_dest', $data ?? [], null);
        $this->setIfExists('v_icmsuf_dest', $data ?? [], null);
        $this->setIfExists('v_icmsuf_remet', $data ?? [], null);
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

        if (!is_null($this->container['v_bcfcpuf_dest']) && ($this->container['v_bcfcpuf_dest'] < 0)) {
            $invalidProperties[] = "invalid value for 'v_bcfcpuf_dest', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['p_fcpuf_dest']) && ($this->container['p_fcpuf_dest'] < 0)) {
            $invalidProperties[] = "invalid value for 'p_fcpuf_dest', must be bigger than or equal to 0.";
        }

        if ($this->container['p_icmsuf_dest'] === null) {
            $invalidProperties[] = "'p_icmsuf_dest' can't be null";
        }
        if (($this->container['p_icmsuf_dest'] < 0)) {
            $invalidProperties[] = "invalid value for 'p_icmsuf_dest', must be bigger than or equal to 0.";
        }

        if ($this->container['p_icms_inter'] === null) {
            $invalidProperties[] = "'p_icms_inter' can't be null";
        }
        if (($this->container['p_icms_inter'] < 0)) {
            $invalidProperties[] = "invalid value for 'p_icms_inter', must be bigger than or equal to 0.";
        }

        if ($this->container['p_icms_inter_part'] === null) {
            $invalidProperties[] = "'p_icms_inter_part' can't be null";
        }
        if (($this->container['p_icms_inter_part'] < 0)) {
            $invalidProperties[] = "invalid value for 'p_icms_inter_part', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['v_fcpuf_dest']) && ($this->container['v_fcpuf_dest'] < 0)) {
            $invalidProperties[] = "invalid value for 'v_fcpuf_dest', must be bigger than or equal to 0.";
        }

        if ($this->container['v_icmsuf_dest'] === null) {
            $invalidProperties[] = "'v_icmsuf_dest' can't be null";
        }
        if (($this->container['v_icmsuf_dest'] < 0)) {
            $invalidProperties[] = "invalid value for 'v_icmsuf_dest', must be bigger than or equal to 0.";
        }

        if ($this->container['v_icmsuf_remet'] === null) {
            $invalidProperties[] = "'v_icmsuf_remet' can't be null";
        }
        if (($this->container['v_icmsuf_remet'] < 0)) {
            $invalidProperties[] = "invalid value for 'v_icmsuf_remet', must be bigger than or equal to 0.";
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
     * @param float $v_bcuf_dest Valor da Base de Cálculo do ICMS na UF do destinatário.
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
            throw new \InvalidArgumentException('invalid value for $v_bcuf_dest when calling NfeSefazICMSUFDest., must be bigger than or equal to 0.');
        }

        $this->container['v_bcuf_dest'] = $v_bcuf_dest;

        return $this;
    }

    /**
     * Gets v_bcfcpuf_dest
     *
     * @return float|null
     */
    public function getVBcfcpufDest()
    {
        return $this->container['v_bcfcpuf_dest'];
    }

    /**
     * Sets v_bcfcpuf_dest
     *
     * @param float|null $v_bcfcpuf_dest Valor da Base de Cálculo do FCP na UF do destinatário.
     *
     * @return self
     */
    public function setVBcfcpufDest($v_bcfcpuf_dest)
    {
        if (is_null($v_bcfcpuf_dest)) {
            array_push($this->openAPINullablesSetToNull, 'v_bcfcpuf_dest');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('v_bcfcpuf_dest', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($v_bcfcpuf_dest) && ($v_bcfcpuf_dest < 0)) {
            throw new \InvalidArgumentException('invalid value for $v_bcfcpuf_dest when calling NfeSefazICMSUFDest., must be bigger than or equal to 0.');
        }

        $this->container['v_bcfcpuf_dest'] = $v_bcfcpuf_dest;

        return $this;
    }

    /**
     * Gets p_fcpuf_dest
     *
     * @return float|null
     */
    public function getPFcpufDest()
    {
        return $this->container['p_fcpuf_dest'];
    }

    /**
     * Sets p_fcpuf_dest
     *
     * @param float|null $p_fcpuf_dest Percentual adicional inserido na alíquota interna da UF de destino, relativo ao Fundo de Combate à Pobreza (FCP) naquela UF.
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
            throw new \InvalidArgumentException('invalid value for $p_fcpuf_dest when calling NfeSefazICMSUFDest., must be bigger than or equal to 0.');
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
     * @param float $p_icmsuf_dest Alíquota adotada nas operações internas na UF do destinatário para o produto / mercadoria.
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
            throw new \InvalidArgumentException('invalid value for $p_icmsuf_dest when calling NfeSefazICMSUFDest., must be bigger than or equal to 0.');
        }

        $this->container['p_icmsuf_dest'] = $p_icmsuf_dest;

        return $this;
    }

    /**
     * Gets p_icms_inter
     *
     * @return float
     */
    public function getPIcmsInter()
    {
        return $this->container['p_icms_inter'];
    }

    /**
     * Sets p_icms_inter
     *
     * @param float $p_icms_inter Alíquota interestadual das UF envolvidas:  * 4%% alíquota interestadual para produtos importados  * 7%% para os Estados de origem do Sul e Sudeste (exceto ES), destinado para os Estados do Norte e Nordeste  ou ES  * 12%% para os demais casos.
     *
     * @return self
     */
    public function setPIcmsInter($p_icms_inter)
    {
        if (is_null($p_icms_inter)) {
            array_push($this->openAPINullablesSetToNull, 'p_icms_inter');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('p_icms_inter', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($p_icms_inter) && ($p_icms_inter < 0)) {
            throw new \InvalidArgumentException('invalid value for $p_icms_inter when calling NfeSefazICMSUFDest., must be bigger than or equal to 0.');
        }

        $this->container['p_icms_inter'] = $p_icms_inter;

        return $this;
    }

    /**
     * Gets p_icms_inter_part
     *
     * @return float
     */
    public function getPIcmsInterPart()
    {
        return $this->container['p_icms_inter_part'];
    }

    /**
     * Sets p_icms_inter_part
     *
     * @param float $p_icms_inter_part Percentual de partilha para a UF do destinatário:  * 40%% em 2016  * 60%% em 2017  * 80%% em 2018  * 100%% a partir de 2019.
     *
     * @return self
     */
    public function setPIcmsInterPart($p_icms_inter_part)
    {
        if (is_null($p_icms_inter_part)) {
            array_push($this->openAPINullablesSetToNull, 'p_icms_inter_part');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('p_icms_inter_part', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($p_icms_inter_part) && ($p_icms_inter_part < 0)) {
            throw new \InvalidArgumentException('invalid value for $p_icms_inter_part when calling NfeSefazICMSUFDest., must be bigger than or equal to 0.');
        }

        $this->container['p_icms_inter_part'] = $p_icms_inter_part;

        return $this;
    }

    /**
     * Gets v_fcpuf_dest
     *
     * @return float|null
     */
    public function getVFcpufDest()
    {
        return $this->container['v_fcpuf_dest'];
    }

    /**
     * Sets v_fcpuf_dest
     *
     * @param float|null $v_fcpuf_dest Valor do ICMS relativo ao Fundo de Combate à Pobreza (FCP) da UF de destino.
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
            throw new \InvalidArgumentException('invalid value for $v_fcpuf_dest when calling NfeSefazICMSUFDest., must be bigger than or equal to 0.');
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
     * @param float $v_icmsuf_dest Valor do ICMS de partilha para a UF do destinatário.
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
            throw new \InvalidArgumentException('invalid value for $v_icmsuf_dest when calling NfeSefazICMSUFDest., must be bigger than or equal to 0.');
        }

        $this->container['v_icmsuf_dest'] = $v_icmsuf_dest;

        return $this;
    }

    /**
     * Gets v_icmsuf_remet
     *
     * @return float
     */
    public function getVIcmsufRemet()
    {
        return $this->container['v_icmsuf_remet'];
    }

    /**
     * Sets v_icmsuf_remet
     *
     * @param float $v_icmsuf_remet Valor do ICMS de partilha para a UF do remetente. Nota: A partir de 2019, este valor será zero.
     *
     * @return self
     */
    public function setVIcmsufRemet($v_icmsuf_remet)
    {
        if (is_null($v_icmsuf_remet)) {
            array_push($this->openAPINullablesSetToNull, 'v_icmsuf_remet');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('v_icmsuf_remet', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($v_icmsuf_remet) && ($v_icmsuf_remet < 0)) {
            throw new \InvalidArgumentException('invalid value for $v_icmsuf_remet when calling NfeSefazICMSUFDest., must be bigger than or equal to 0.');
        }

        $this->container['v_icmsuf_remet'] = $v_icmsuf_remet;

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


