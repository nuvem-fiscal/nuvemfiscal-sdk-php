<?php
/**
 * MdfeSefazInfMDFe
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
 * MdfeSefazInfMDFe Class Doc Comment
 *
 * @category Class
 * @description Informações do MDF-e.
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class MdfeSefazInfMDFe implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MdfeSefazInfMDFe';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'versao' => 'string',
        'id' => 'string',
        'ide' => '\NuvemFiscal\Model\MdfeSefazIde',
        'emit' => '\NuvemFiscal\Model\MdfeSefazEmit',
        'inf_modal' => '\NuvemFiscal\Model\MdfeSefazInfModal',
        'inf_doc' => '\NuvemFiscal\Model\MdfeSefazInfDoc',
        'seg' => '\NuvemFiscal\Model\MdfeSefazSeg[]',
        'prod_pred' => '\NuvemFiscal\Model\MdfeSefazProdPred',
        'tot' => '\NuvemFiscal\Model\MdfeSefazTot',
        'lacres' => '\NuvemFiscal\Model\MdfeSefazLacres[]',
        'aut_xml' => '\NuvemFiscal\Model\MdfeSefazAutXML[]',
        'inf_adic' => '\NuvemFiscal\Model\MdfeSefazInfAdic',
        'inf_resp_tec' => '\NuvemFiscal\Model\MdfeSefazRespTec',
        'inf_solic_nff' => '\NuvemFiscal\Model\MdfeSefazInfSolicNFF'
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
        'inf_modal' => null,
        'inf_doc' => null,
        'seg' => null,
        'prod_pred' => null,
        'tot' => null,
        'lacres' => null,
        'aut_xml' => null,
        'inf_adic' => null,
        'inf_resp_tec' => null,
        'inf_solic_nff' => null
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
        'inf_modal' => false,
        'inf_doc' => false,
        'seg' => false,
        'prod_pred' => false,
        'tot' => false,
        'lacres' => false,
        'aut_xml' => false,
        'inf_adic' => false,
        'inf_resp_tec' => false,
        'inf_solic_nff' => false
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
        'inf_modal' => 'infModal',
        'inf_doc' => 'infDoc',
        'seg' => 'seg',
        'prod_pred' => 'prodPred',
        'tot' => 'tot',
        'lacres' => 'lacres',
        'aut_xml' => 'autXML',
        'inf_adic' => 'infAdic',
        'inf_resp_tec' => 'infRespTec',
        'inf_solic_nff' => 'infSolicNFF'
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
        'inf_modal' => 'setInfModal',
        'inf_doc' => 'setInfDoc',
        'seg' => 'setSeg',
        'prod_pred' => 'setProdPred',
        'tot' => 'setTot',
        'lacres' => 'setLacres',
        'aut_xml' => 'setAutXml',
        'inf_adic' => 'setInfAdic',
        'inf_resp_tec' => 'setInfRespTec',
        'inf_solic_nff' => 'setInfSolicNff'
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
        'inf_modal' => 'getInfModal',
        'inf_doc' => 'getInfDoc',
        'seg' => 'getSeg',
        'prod_pred' => 'getProdPred',
        'tot' => 'getTot',
        'lacres' => 'getLacres',
        'aut_xml' => 'getAutXml',
        'inf_adic' => 'getInfAdic',
        'inf_resp_tec' => 'getInfRespTec',
        'inf_solic_nff' => 'getInfSolicNff'
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
        $this->setIfExists('inf_modal', $data ?? [], null);
        $this->setIfExists('inf_doc', $data ?? [], null);
        $this->setIfExists('seg', $data ?? [], null);
        $this->setIfExists('prod_pred', $data ?? [], null);
        $this->setIfExists('tot', $data ?? [], null);
        $this->setIfExists('lacres', $data ?? [], null);
        $this->setIfExists('aut_xml', $data ?? [], null);
        $this->setIfExists('inf_adic', $data ?? [], null);
        $this->setIfExists('inf_resp_tec', $data ?? [], null);
        $this->setIfExists('inf_solic_nff', $data ?? [], null);
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
        if ($this->container['inf_modal'] === null) {
            $invalidProperties[] = "'inf_modal' can't be null";
        }
        if ($this->container['inf_doc'] === null) {
            $invalidProperties[] = "'inf_doc' can't be null";
        }
        if ($this->container['tot'] === null) {
            $invalidProperties[] = "'tot' can't be null";
        }
        if (!is_null($this->container['aut_xml']) && (count($this->container['aut_xml']) > 10)) {
            $invalidProperties[] = "invalid value for 'aut_xml', number of items must be less than or equal to 10.";
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
     * @param string $versao Versão do leiaute.  Ex: \"3.00\".
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
     * @param string|null $id Identificador da tag a ser assinada.  Informar a chave de acesso do MDF-e e precedida do literal \"MDFe\".    *Geramos automaticamente quando nenhum valor é informado.*
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
     * @return \NuvemFiscal\Model\MdfeSefazIde
     */
    public function getIde()
    {
        return $this->container['ide'];
    }

    /**
     * Sets ide
     *
     * @param \NuvemFiscal\Model\MdfeSefazIde $ide ide
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
     * @return \NuvemFiscal\Model\MdfeSefazEmit
     */
    public function getEmit()
    {
        return $this->container['emit'];
    }

    /**
     * Sets emit
     *
     * @param \NuvemFiscal\Model\MdfeSefazEmit $emit emit
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
     * Gets inf_modal
     *
     * @return \NuvemFiscal\Model\MdfeSefazInfModal
     */
    public function getInfModal()
    {
        return $this->container['inf_modal'];
    }

    /**
     * Sets inf_modal
     *
     * @param \NuvemFiscal\Model\MdfeSefazInfModal $inf_modal inf_modal
     *
     * @return self
     */
    public function setInfModal($inf_modal)
    {
        if (is_null($inf_modal)) {
            throw new \InvalidArgumentException('non-nullable inf_modal cannot be null');
        }
        $this->container['inf_modal'] = $inf_modal;

        return $this;
    }

    /**
     * Gets inf_doc
     *
     * @return \NuvemFiscal\Model\MdfeSefazInfDoc
     */
    public function getInfDoc()
    {
        return $this->container['inf_doc'];
    }

    /**
     * Sets inf_doc
     *
     * @param \NuvemFiscal\Model\MdfeSefazInfDoc $inf_doc inf_doc
     *
     * @return self
     */
    public function setInfDoc($inf_doc)
    {
        if (is_null($inf_doc)) {
            throw new \InvalidArgumentException('non-nullable inf_doc cannot be null');
        }
        $this->container['inf_doc'] = $inf_doc;

        return $this;
    }

    /**
     * Gets seg
     *
     * @return \NuvemFiscal\Model\MdfeSefazSeg[]|null
     */
    public function getSeg()
    {
        return $this->container['seg'];
    }

    /**
     * Sets seg
     *
     * @param \NuvemFiscal\Model\MdfeSefazSeg[]|null $seg seg
     *
     * @return self
     */
    public function setSeg($seg)
    {
        if (is_null($seg)) {
            throw new \InvalidArgumentException('non-nullable seg cannot be null');
        }
        $this->container['seg'] = $seg;

        return $this;
    }

    /**
     * Gets prod_pred
     *
     * @return \NuvemFiscal\Model\MdfeSefazProdPred|null
     */
    public function getProdPred()
    {
        return $this->container['prod_pred'];
    }

    /**
     * Sets prod_pred
     *
     * @param \NuvemFiscal\Model\MdfeSefazProdPred|null $prod_pred prod_pred
     *
     * @return self
     */
    public function setProdPred($prod_pred)
    {
        if (is_null($prod_pred)) {
            throw new \InvalidArgumentException('non-nullable prod_pred cannot be null');
        }
        $this->container['prod_pred'] = $prod_pred;

        return $this;
    }

    /**
     * Gets tot
     *
     * @return \NuvemFiscal\Model\MdfeSefazTot
     */
    public function getTot()
    {
        return $this->container['tot'];
    }

    /**
     * Sets tot
     *
     * @param \NuvemFiscal\Model\MdfeSefazTot $tot tot
     *
     * @return self
     */
    public function setTot($tot)
    {
        if (is_null($tot)) {
            throw new \InvalidArgumentException('non-nullable tot cannot be null');
        }
        $this->container['tot'] = $tot;

        return $this;
    }

    /**
     * Gets lacres
     *
     * @return \NuvemFiscal\Model\MdfeSefazLacres[]|null
     */
    public function getLacres()
    {
        return $this->container['lacres'];
    }

    /**
     * Sets lacres
     *
     * @param \NuvemFiscal\Model\MdfeSefazLacres[]|null $lacres lacres
     *
     * @return self
     */
    public function setLacres($lacres)
    {
        if (is_null($lacres)) {
            throw new \InvalidArgumentException('non-nullable lacres cannot be null');
        }
        $this->container['lacres'] = $lacres;

        return $this;
    }

    /**
     * Gets aut_xml
     *
     * @return \NuvemFiscal\Model\MdfeSefazAutXML[]|null
     */
    public function getAutXml()
    {
        return $this->container['aut_xml'];
    }

    /**
     * Sets aut_xml
     *
     * @param \NuvemFiscal\Model\MdfeSefazAutXML[]|null $aut_xml aut_xml
     *
     * @return self
     */
    public function setAutXml($aut_xml)
    {
        if (is_null($aut_xml)) {
            throw new \InvalidArgumentException('non-nullable aut_xml cannot be null');
        }

        if ((count($aut_xml) > 10)) {
            throw new \InvalidArgumentException('invalid value for $aut_xml when calling MdfeSefazInfMDFe., number of items must be less than or equal to 10.');
        }
        $this->container['aut_xml'] = $aut_xml;

        return $this;
    }

    /**
     * Gets inf_adic
     *
     * @return \NuvemFiscal\Model\MdfeSefazInfAdic|null
     */
    public function getInfAdic()
    {
        return $this->container['inf_adic'];
    }

    /**
     * Sets inf_adic
     *
     * @param \NuvemFiscal\Model\MdfeSefazInfAdic|null $inf_adic inf_adic
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
     * Gets inf_resp_tec
     *
     * @return \NuvemFiscal\Model\MdfeSefazRespTec|null
     */
    public function getInfRespTec()
    {
        return $this->container['inf_resp_tec'];
    }

    /**
     * Sets inf_resp_tec
     *
     * @param \NuvemFiscal\Model\MdfeSefazRespTec|null $inf_resp_tec inf_resp_tec
     *
     * @return self
     */
    public function setInfRespTec($inf_resp_tec)
    {
        if (is_null($inf_resp_tec)) {
            throw new \InvalidArgumentException('non-nullable inf_resp_tec cannot be null');
        }
        $this->container['inf_resp_tec'] = $inf_resp_tec;

        return $this;
    }

    /**
     * Gets inf_solic_nff
     *
     * @return \NuvemFiscal\Model\MdfeSefazInfSolicNFF|null
     */
    public function getInfSolicNff()
    {
        return $this->container['inf_solic_nff'];
    }

    /**
     * Sets inf_solic_nff
     *
     * @param \NuvemFiscal\Model\MdfeSefazInfSolicNFF|null $inf_solic_nff inf_solic_nff
     *
     * @return self
     */
    public function setInfSolicNff($inf_solic_nff)
    {
        if (is_null($inf_solic_nff)) {
            throw new \InvalidArgumentException('non-nullable inf_solic_nff cannot be null');
        }
        $this->container['inf_solic_nff'] = $inf_solic_nff;

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


