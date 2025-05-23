<?php
/**
 * DceSefazInfDCe
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
 * DceSefazInfDCe Class Doc Comment
 *
 * @category Class
 * @description Informações da DCe.
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class DceSefazInfDCe implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DceSefazInfDCe';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'versao' => 'string',
        'id' => 'string',
        'ide' => '\NuvemFiscal\Model\DceSefazIde',
        'emit' => '\NuvemFiscal\Model\DceSefazEmit',
        'fisco' => '\NuvemFiscal\Model\DceSefazFisco',
        'marketplace' => '\NuvemFiscal\Model\DceSefazMarketplace',
        'transportadora' => '\NuvemFiscal\Model\DceSefazTransportadora',
        'ect' => '\NuvemFiscal\Model\DceSefazECT',
        'dest' => '\NuvemFiscal\Model\DceSefazDest',
        'aut_xml' => '\NuvemFiscal\Model\DceSefazAutXML[]',
        'det' => '\NuvemFiscal\Model\DceSefazDet[]',
        'total' => '\NuvemFiscal\Model\DceSefazTotal',
        'transp' => '\NuvemFiscal\Model\DceSefazTransp',
        'inf_adic' => '\NuvemFiscal\Model\DceSefazInfAdic',
        'inf_dec' => '\NuvemFiscal\Model\DceSefazInfDec'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'versao' => null,
        'id' => null,
        'ide' => null,
        'emit' => null,
        'fisco' => null,
        'marketplace' => null,
        'transportadora' => null,
        'ect' => null,
        'dest' => null,
        'aut_xml' => null,
        'det' => null,
        'total' => null,
        'transp' => null,
        'inf_adic' => null,
        'inf_dec' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'versao' => true,
        'id' => true,
        'ide' => false,
        'emit' => false,
        'fisco' => false,
        'marketplace' => false,
        'transportadora' => false,
        'ect' => false,
        'dest' => false,
        'aut_xml' => false,
        'det' => false,
        'total' => false,
        'transp' => false,
        'inf_adic' => false,
        'inf_dec' => false
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
        'versao' => 'versao',
        'id' => 'Id',
        'ide' => 'ide',
        'emit' => 'emit',
        'fisco' => 'Fisco',
        'marketplace' => 'Marketplace',
        'transportadora' => 'Transportadora',
        'ect' => 'ECT',
        'dest' => 'dest',
        'aut_xml' => 'autXML',
        'det' => 'det',
        'total' => 'total',
        'transp' => 'transp',
        'inf_adic' => 'infAdic',
        'inf_dec' => 'infDec'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'versao' => 'setVersao',
        'id' => 'setId',
        'ide' => 'setIde',
        'emit' => 'setEmit',
        'fisco' => 'setFisco',
        'marketplace' => 'setMarketplace',
        'transportadora' => 'setTransportadora',
        'ect' => 'setEct',
        'dest' => 'setDest',
        'aut_xml' => 'setAutXml',
        'det' => 'setDet',
        'total' => 'setTotal',
        'transp' => 'setTransp',
        'inf_adic' => 'setInfAdic',
        'inf_dec' => 'setInfDec'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'versao' => 'getVersao',
        'id' => 'getId',
        'ide' => 'getIde',
        'emit' => 'getEmit',
        'fisco' => 'getFisco',
        'marketplace' => 'getMarketplace',
        'transportadora' => 'getTransportadora',
        'ect' => 'getEct',
        'dest' => 'getDest',
        'aut_xml' => 'getAutXml',
        'det' => 'getDet',
        'total' => 'getTotal',
        'transp' => 'getTransp',
        'inf_adic' => 'getInfAdic',
        'inf_dec' => 'getInfDec'
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
        $this->setIfExists('versao', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('ide', $data ?? [], null);
        $this->setIfExists('emit', $data ?? [], null);
        $this->setIfExists('fisco', $data ?? [], null);
        $this->setIfExists('marketplace', $data ?? [], null);
        $this->setIfExists('transportadora', $data ?? [], null);
        $this->setIfExists('ect', $data ?? [], null);
        $this->setIfExists('dest', $data ?? [], null);
        $this->setIfExists('aut_xml', $data ?? [], null);
        $this->setIfExists('det', $data ?? [], null);
        $this->setIfExists('total', $data ?? [], null);
        $this->setIfExists('transp', $data ?? [], null);
        $this->setIfExists('inf_adic', $data ?? [], null);
        $this->setIfExists('inf_dec', $data ?? [], null);
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

        if ($this->container['versao'] === null) {
            $invalidProperties[] = "'versao' can't be null";
        }
        if ($this->container['ide'] === null) {
            $invalidProperties[] = "'ide' can't be null";
        }
        if ($this->container['emit'] === null) {
            $invalidProperties[] = "'emit' can't be null";
        }
        if ($this->container['dest'] === null) {
            $invalidProperties[] = "'dest' can't be null";
        }
        if (!is_null($this->container['aut_xml']) && (count($this->container['aut_xml']) > 10)) {
            $invalidProperties[] = "invalid value for 'aut_xml', number of items must be less than or equal to 10.";
        }

        if ($this->container['det'] === null) {
            $invalidProperties[] = "'det' can't be null";
        }
        if ((count($this->container['det']) > 999)) {
            $invalidProperties[] = "invalid value for 'det', number of items must be less than or equal to 999.";
        }

        if ((count($this->container['det']) < 1)) {
            $invalidProperties[] = "invalid value for 'det', number of items must be greater than or equal to 1.";
        }

        if ($this->container['total'] === null) {
            $invalidProperties[] = "'total' can't be null";
        }
        if ($this->container['transp'] === null) {
            $invalidProperties[] = "'transp' can't be null";
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
     * Gets versao
     *
     * @return string
     */
    public function getVersao()
    {
        return $this->container['versao'];
    }

    /**
     * Sets versao
     *
     * @param string $versao Versão do leiaute.
     *
     * @return self
     */
    public function setVersao($versao)
    {
        if (is_null($versao)) {
            array_push($this->openAPINullablesSetToNull, 'versao');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('versao', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['versao'] = $versao;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id Identificador da tag a ser assinada.  Informar a chave de acesso precedida do literal \"DCe\".    *Geramos automaticamente quando nenhum valor é informado.*
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            array_push($this->openAPINullablesSetToNull, 'id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets ide
     *
     * @return \NuvemFiscal\Model\DceSefazIde
     */
    public function getIde()
    {
        return $this->container['ide'];
    }

    /**
     * Sets ide
     *
     * @param \NuvemFiscal\Model\DceSefazIde $ide ide
     *
     * @return self
     */
    public function setIde($ide)
    {
        if (is_null($ide)) {
            throw new \InvalidArgumentException('non-nullable ide cannot be null');
        }
        $this->container['ide'] = $ide;

        return $this;
    }

    /**
     * Gets emit
     *
     * @return \NuvemFiscal\Model\DceSefazEmit
     */
    public function getEmit()
    {
        return $this->container['emit'];
    }

    /**
     * Sets emit
     *
     * @param \NuvemFiscal\Model\DceSefazEmit $emit emit
     *
     * @return self
     */
    public function setEmit($emit)
    {
        if (is_null($emit)) {
            throw new \InvalidArgumentException('non-nullable emit cannot be null');
        }
        $this->container['emit'] = $emit;

        return $this;
    }

    /**
     * Gets fisco
     *
     * @return \NuvemFiscal\Model\DceSefazFisco|null
     */
    public function getFisco()
    {
        return $this->container['fisco'];
    }

    /**
     * Sets fisco
     *
     * @param \NuvemFiscal\Model\DceSefazFisco|null $fisco fisco
     *
     * @return self
     */
    public function setFisco($fisco)
    {
        if (is_null($fisco)) {
            throw new \InvalidArgumentException('non-nullable fisco cannot be null');
        }
        $this->container['fisco'] = $fisco;

        return $this;
    }

    /**
     * Gets marketplace
     *
     * @return \NuvemFiscal\Model\DceSefazMarketplace|null
     */
    public function getMarketplace()
    {
        return $this->container['marketplace'];
    }

    /**
     * Sets marketplace
     *
     * @param \NuvemFiscal\Model\DceSefazMarketplace|null $marketplace marketplace
     *
     * @return self
     */
    public function setMarketplace($marketplace)
    {
        if (is_null($marketplace)) {
            throw new \InvalidArgumentException('non-nullable marketplace cannot be null');
        }
        $this->container['marketplace'] = $marketplace;

        return $this;
    }

    /**
     * Gets transportadora
     *
     * @return \NuvemFiscal\Model\DceSefazTransportadora|null
     */
    public function getTransportadora()
    {
        return $this->container['transportadora'];
    }

    /**
     * Sets transportadora
     *
     * @param \NuvemFiscal\Model\DceSefazTransportadora|null $transportadora transportadora
     *
     * @return self
     */
    public function setTransportadora($transportadora)
    {
        if (is_null($transportadora)) {
            throw new \InvalidArgumentException('non-nullable transportadora cannot be null');
        }
        $this->container['transportadora'] = $transportadora;

        return $this;
    }

    /**
     * Gets ect
     *
     * @return \NuvemFiscal\Model\DceSefazECT|null
     */
    public function getEct()
    {
        return $this->container['ect'];
    }

    /**
     * Sets ect
     *
     * @param \NuvemFiscal\Model\DceSefazECT|null $ect ect
     *
     * @return self
     */
    public function setEct($ect)
    {
        if (is_null($ect)) {
            throw new \InvalidArgumentException('non-nullable ect cannot be null');
        }
        $this->container['ect'] = $ect;

        return $this;
    }

    /**
     * Gets dest
     *
     * @return \NuvemFiscal\Model\DceSefazDest
     */
    public function getDest()
    {
        return $this->container['dest'];
    }

    /**
     * Sets dest
     *
     * @param \NuvemFiscal\Model\DceSefazDest $dest dest
     *
     * @return self
     */
    public function setDest($dest)
    {
        if (is_null($dest)) {
            throw new \InvalidArgumentException('non-nullable dest cannot be null');
        }
        $this->container['dest'] = $dest;

        return $this;
    }

    /**
     * Gets aut_xml
     *
     * @return \NuvemFiscal\Model\DceSefazAutXML[]|null
     */
    public function getAutXml()
    {
        return $this->container['aut_xml'];
    }

    /**
     * Sets aut_xml
     *
     * @param \NuvemFiscal\Model\DceSefazAutXML[]|null $aut_xml aut_xml
     *
     * @return self
     */
    public function setAutXml($aut_xml)
    {
        if (is_null($aut_xml)) {
            throw new \InvalidArgumentException('non-nullable aut_xml cannot be null');
        }

        if ((count($aut_xml) > 10)) {
            throw new \InvalidArgumentException('invalid value for $aut_xml when calling DceSefazInfDCe., number of items must be less than or equal to 10.');
        }
        $this->container['aut_xml'] = $aut_xml;

        return $this;
    }

    /**
     * Gets det
     *
     * @return \NuvemFiscal\Model\DceSefazDet[]
     */
    public function getDet()
    {
        return $this->container['det'];
    }

    /**
     * Sets det
     *
     * @param \NuvemFiscal\Model\DceSefazDet[] $det det
     *
     * @return self
     */
    public function setDet($det)
    {
        if (is_null($det)) {
            throw new \InvalidArgumentException('non-nullable det cannot be null');
        }

        if ((count($det) > 999)) {
            throw new \InvalidArgumentException('invalid value for $det when calling DceSefazInfDCe., number of items must be less than or equal to 999.');
        }
        if ((count($det) < 1)) {
            throw new \InvalidArgumentException('invalid length for $det when calling DceSefazInfDCe., number of items must be greater than or equal to 1.');
        }
        $this->container['det'] = $det;

        return $this;
    }

    /**
     * Gets total
     *
     * @return \NuvemFiscal\Model\DceSefazTotal
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param \NuvemFiscal\Model\DceSefazTotal $total total
     *
     * @return self
     */
    public function setTotal($total)
    {
        if (is_null($total)) {
            throw new \InvalidArgumentException('non-nullable total cannot be null');
        }
        $this->container['total'] = $total;

        return $this;
    }

    /**
     * Gets transp
     *
     * @return \NuvemFiscal\Model\DceSefazTransp
     */
    public function getTransp()
    {
        return $this->container['transp'];
    }

    /**
     * Sets transp
     *
     * @param \NuvemFiscal\Model\DceSefazTransp $transp transp
     *
     * @return self
     */
    public function setTransp($transp)
    {
        if (is_null($transp)) {
            throw new \InvalidArgumentException('non-nullable transp cannot be null');
        }
        $this->container['transp'] = $transp;

        return $this;
    }

    /**
     * Gets inf_adic
     *
     * @return \NuvemFiscal\Model\DceSefazInfAdic|null
     */
    public function getInfAdic()
    {
        return $this->container['inf_adic'];
    }

    /**
     * Sets inf_adic
     *
     * @param \NuvemFiscal\Model\DceSefazInfAdic|null $inf_adic inf_adic
     *
     * @return self
     */
    public function setInfAdic($inf_adic)
    {
        if (is_null($inf_adic)) {
            throw new \InvalidArgumentException('non-nullable inf_adic cannot be null');
        }
        $this->container['inf_adic'] = $inf_adic;

        return $this;
    }

    /**
     * Gets inf_dec
     *
     * @return \NuvemFiscal\Model\DceSefazInfDec|null
     */
    public function getInfDec()
    {
        return $this->container['inf_dec'];
    }

    /**
     * Sets inf_dec
     *
     * @param \NuvemFiscal\Model\DceSefazInfDec|null $inf_dec inf_dec
     *
     * @return self
     */
    public function setInfDec($inf_dec)
    {
        if (is_null($inf_dec)) {
            throw new \InvalidArgumentException('non-nullable inf_dec cannot be null');
        }
        $this->container['inf_dec'] = $inf_dec;

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


