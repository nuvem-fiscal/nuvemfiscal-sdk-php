<?php
/**
 * NfcomSefazDet
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
 * NfcomSefazDet Class Doc Comment
 *
 * @category Class
 * @description Detalhamento de Produtos e Serviços.
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class NfcomSefazDet implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NfcomSefazDet';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'n_item' => 'int',
        'ch_nf_com_ant' => 'string',
        'n_item_ant' => 'string',
        'ind_nf_com_ant_papel_fat_central' => 'int',
        'prod' => '\NuvemFiscal\Model\NfcomSefazProd',
        'imposto' => '\NuvemFiscal\Model\NfcomSefazImposto',
        'g_proc_ref' => '\NuvemFiscal\Model\NfcomSefazGProcRef',
        'g_ressarc' => '\NuvemFiscal\Model\NfcomSefazGRessarc',
        'inf_ad_prod' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'n_item' => null,
        'ch_nf_com_ant' => null,
        'n_item_ant' => null,
        'ind_nf_com_ant_papel_fat_central' => null,
        'prod' => null,
        'imposto' => null,
        'g_proc_ref' => null,
        'g_ressarc' => null,
        'inf_ad_prod' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'n_item' => true,
        'ch_nf_com_ant' => true,
        'n_item_ant' => true,
        'ind_nf_com_ant_papel_fat_central' => true,
        'prod' => false,
        'imposto' => false,
        'g_proc_ref' => false,
        'g_ressarc' => false,
        'inf_ad_prod' => true
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
        'n_item' => 'nItem',
        'ch_nf_com_ant' => 'chNFComAnt',
        'n_item_ant' => 'nItemAnt',
        'ind_nf_com_ant_papel_fat_central' => 'indNFComAntPapelFatCentral',
        'prod' => 'prod',
        'imposto' => 'imposto',
        'g_proc_ref' => 'gProcRef',
        'g_ressarc' => 'gRessarc',
        'inf_ad_prod' => 'infAdProd'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'n_item' => 'setNItem',
        'ch_nf_com_ant' => 'setChNfComAnt',
        'n_item_ant' => 'setNItemAnt',
        'ind_nf_com_ant_papel_fat_central' => 'setIndNfComAntPapelFatCentral',
        'prod' => 'setProd',
        'imposto' => 'setImposto',
        'g_proc_ref' => 'setGProcRef',
        'g_ressarc' => 'setGRessarc',
        'inf_ad_prod' => 'setInfAdProd'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'n_item' => 'getNItem',
        'ch_nf_com_ant' => 'getChNfComAnt',
        'n_item_ant' => 'getNItemAnt',
        'ind_nf_com_ant_papel_fat_central' => 'getIndNfComAntPapelFatCentral',
        'prod' => 'getProd',
        'imposto' => 'getImposto',
        'g_proc_ref' => 'getGProcRef',
        'g_ressarc' => 'getGRessarc',
        'inf_ad_prod' => 'getInfAdProd'
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
        $this->setIfExists('n_item', $data ?? [], null);
        $this->setIfExists('ch_nf_com_ant', $data ?? [], null);
        $this->setIfExists('n_item_ant', $data ?? [], null);
        $this->setIfExists('ind_nf_com_ant_papel_fat_central', $data ?? [], null);
        $this->setIfExists('prod', $data ?? [], null);
        $this->setIfExists('imposto', $data ?? [], null);
        $this->setIfExists('g_proc_ref', $data ?? [], null);
        $this->setIfExists('g_ressarc', $data ?? [], null);
        $this->setIfExists('inf_ad_prod', $data ?? [], null);
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

        if ($this->container['n_item'] === null) {
            $invalidProperties[] = "'n_item' can't be null";
        }
        if (($this->container['n_item'] > 9999)) {
            $invalidProperties[] = "invalid value for 'n_item', must be smaller than or equal to 9999.";
        }

        if (($this->container['n_item'] < 1)) {
            $invalidProperties[] = "invalid value for 'n_item', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['ch_nf_com_ant']) && (mb_strlen($this->container['ch_nf_com_ant']) > 44)) {
            $invalidProperties[] = "invalid value for 'ch_nf_com_ant', the character length must be smaller than or equal to 44.";
        }

        if ($this->container['prod'] === null) {
            $invalidProperties[] = "'prod' can't be null";
        }
        if ($this->container['imposto'] === null) {
            $invalidProperties[] = "'imposto' can't be null";
        }
        if (!is_null($this->container['inf_ad_prod']) && (mb_strlen($this->container['inf_ad_prod']) > 500)) {
            $invalidProperties[] = "invalid value for 'inf_ad_prod', the character length must be smaller than or equal to 500.";
        }

        if (!is_null($this->container['inf_ad_prod']) && (mb_strlen($this->container['inf_ad_prod']) < 1)) {
            $invalidProperties[] = "invalid value for 'inf_ad_prod', the character length must be bigger than or equal to 1.";
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
     * Gets n_item
     *
     * @return int
     */
    public function getNItem()
    {
        return $this->container['n_item'];
    }

    /**
     * Sets n_item
     *
     * @param int $n_item Número do item da NFCom.
     *
     * @return self
     */
    public function setNItem($n_item)
    {
        if (is_null($n_item)) {
            array_push($this->openAPINullablesSetToNull, 'n_item');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('n_item', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($n_item) && ($n_item > 9999)) {
            throw new \InvalidArgumentException('invalid value for $n_item when calling NfcomSefazDet., must be smaller than or equal to 9999.');
        }
        if (!is_null($n_item) && ($n_item < 1)) {
            throw new \InvalidArgumentException('invalid value for $n_item when calling NfcomSefazDet., must be bigger than or equal to 1.');
        }

        $this->container['n_item'] = $n_item;

        return $this;
    }

    /**
     * Gets ch_nf_com_ant
     *
     * @return string|null
     */
    public function getChNfComAnt()
    {
        return $this->container['ch_nf_com_ant'];
    }

    /**
     * Sets ch_nf_com_ant
     *
     * @param string|null $ch_nf_com_ant Chave de Acesso da NFCom anterior.  Informar chave de acesso de referencia anterior  TAG OPCIONAL, DEVE SER INFORMADA APENAS NOS CASOS PREVISTOS DE NOTA ANTERIOR REFERENCIADA.
     *
     * @return self
     */
    public function setChNfComAnt($ch_nf_com_ant)
    {
        if (is_null($ch_nf_com_ant)) {
            array_push($this->openAPINullablesSetToNull, 'ch_nf_com_ant');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ch_nf_com_ant', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($ch_nf_com_ant) && (mb_strlen($ch_nf_com_ant) > 44)) {
            throw new \InvalidArgumentException('invalid length for $ch_nf_com_ant when calling NfcomSefazDet., must be smaller than or equal to 44.');
        }

        $this->container['ch_nf_com_ant'] = $ch_nf_com_ant;

        return $this;
    }

    /**
     * Gets n_item_ant
     *
     * @return string|null
     */
    public function getNItemAnt()
    {
        return $this->container['n_item_ant'];
    }

    /**
     * Sets n_item_ant
     *
     * @param string|null $n_item_ant Número do item da NFCom anterior.  Informar nro do item da chave de acesso de referencia anterior  TAG OPCIONAL, DEVE SER INFORMADA APENAS NOS CASOS PREVISTOS DE NOTA ANTERIOR REFERENCIADA.
     *
     * @return self
     */
    public function setNItemAnt($n_item_ant)
    {
        if (is_null($n_item_ant)) {
            array_push($this->openAPINullablesSetToNull, 'n_item_ant');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('n_item_ant', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['n_item_ant'] = $n_item_ant;

        return $this;
    }

    /**
     * Gets ind_nf_com_ant_papel_fat_central
     *
     * @return int|null
     */
    public function getIndNfComAntPapelFatCentral()
    {
        return $this->container['ind_nf_com_ant_papel_fat_central'];
    }

    /**
     * Sets ind_nf_com_ant_papel_fat_central
     *
     * @param int|null $ind_nf_com_ant_papel_fat_central Indicador de Nota anterior em papel no faturamento centralizado.  Informa que a NFCom Anterior de Faturamento centralizado não é eletrônica.
     *
     * @return self
     */
    public function setIndNfComAntPapelFatCentral($ind_nf_com_ant_papel_fat_central)
    {
        if (is_null($ind_nf_com_ant_papel_fat_central)) {
            array_push($this->openAPINullablesSetToNull, 'ind_nf_com_ant_papel_fat_central');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ind_nf_com_ant_papel_fat_central', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ind_nf_com_ant_papel_fat_central'] = $ind_nf_com_ant_papel_fat_central;

        return $this;
    }

    /**
     * Gets prod
     *
     * @return \NuvemFiscal\Model\NfcomSefazProd
     */
    public function getProd()
    {
        return $this->container['prod'];
    }

    /**
     * Sets prod
     *
     * @param \NuvemFiscal\Model\NfcomSefazProd $prod prod
     *
     * @return self
     */
    public function setProd($prod)
    {
        if (is_null($prod)) {
            throw new \InvalidArgumentException('non-nullable prod cannot be null');
        }
        $this->container['prod'] = $prod;

        return $this;
    }

    /**
     * Gets imposto
     *
     * @return \NuvemFiscal\Model\NfcomSefazImposto
     */
    public function getImposto()
    {
        return $this->container['imposto'];
    }

    /**
     * Sets imposto
     *
     * @param \NuvemFiscal\Model\NfcomSefazImposto $imposto imposto
     *
     * @return self
     */
    public function setImposto($imposto)
    {
        if (is_null($imposto)) {
            throw new \InvalidArgumentException('non-nullable imposto cannot be null');
        }
        $this->container['imposto'] = $imposto;

        return $this;
    }

    /**
     * Gets g_proc_ref
     *
     * @return \NuvemFiscal\Model\NfcomSefazGProcRef|null
     */
    public function getGProcRef()
    {
        return $this->container['g_proc_ref'];
    }

    /**
     * Sets g_proc_ref
     *
     * @param \NuvemFiscal\Model\NfcomSefazGProcRef|null $g_proc_ref g_proc_ref
     *
     * @return self
     */
    public function setGProcRef($g_proc_ref)
    {
        if (is_null($g_proc_ref)) {
            throw new \InvalidArgumentException('non-nullable g_proc_ref cannot be null');
        }
        $this->container['g_proc_ref'] = $g_proc_ref;

        return $this;
    }

    /**
     * Gets g_ressarc
     *
     * @return \NuvemFiscal\Model\NfcomSefazGRessarc|null
     */
    public function getGRessarc()
    {
        return $this->container['g_ressarc'];
    }

    /**
     * Sets g_ressarc
     *
     * @param \NuvemFiscal\Model\NfcomSefazGRessarc|null $g_ressarc g_ressarc
     *
     * @return self
     */
    public function setGRessarc($g_ressarc)
    {
        if (is_null($g_ressarc)) {
            throw new \InvalidArgumentException('non-nullable g_ressarc cannot be null');
        }
        $this->container['g_ressarc'] = $g_ressarc;

        return $this;
    }

    /**
     * Gets inf_ad_prod
     *
     * @return string|null
     */
    public function getInfAdProd()
    {
        return $this->container['inf_ad_prod'];
    }

    /**
     * Sets inf_ad_prod
     *
     * @param string|null $inf_ad_prod Informações adicionais do produto (norma referenciada, informações complementares, etc).
     *
     * @return self
     */
    public function setInfAdProd($inf_ad_prod)
    {
        if (is_null($inf_ad_prod)) {
            array_push($this->openAPINullablesSetToNull, 'inf_ad_prod');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('inf_ad_prod', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($inf_ad_prod) && (mb_strlen($inf_ad_prod) > 500)) {
            throw new \InvalidArgumentException('invalid length for $inf_ad_prod when calling NfcomSefazDet., must be smaller than or equal to 500.');
        }
        if (!is_null($inf_ad_prod) && (mb_strlen($inf_ad_prod) < 1)) {
            throw new \InvalidArgumentException('invalid length for $inf_ad_prod when calling NfcomSefazDet., must be bigger than or equal to 1.');
        }

        $this->container['inf_ad_prod'] = $inf_ad_prod;

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


