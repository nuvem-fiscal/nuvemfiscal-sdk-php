<?php
/**
 * NfeSefazICMSSN500
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
 * OpenAPI Generator version: 6.2.0
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
 * NfeSefazICMSSN500 Class Doc Comment
 *
 * @category Class
 * @description Tributação do ICMS pelo SIMPLES NACIONAL,CRT&#x3D;1 - Simples Nacional e CSOSN&#x3D;500 (v.2.0).
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class NfeSefazICMSSN500 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NfeSefazICMSSN500';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'orig' => 'int',
        'csosn' => 'string',
        'v_bcst_ret' => 'float',
        'p_st' => 'float',
        'v_icms_substituto' => 'float',
        'v_icmsst_ret' => 'float',
        'v_bcfcpst_ret' => 'float',
        'p_fcpst_ret' => 'float',
        'v_fcpst_ret' => 'float',
        'p_red_bc_efet' => 'float',
        'v_bc_efet' => 'float',
        'p_icms_efet' => 'float',
        'v_icms_efet' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'orig' => null,
        'csosn' => null,
        'v_bcst_ret' => null,
        'p_st' => null,
        'v_icms_substituto' => null,
        'v_icmsst_ret' => null,
        'v_bcfcpst_ret' => null,
        'p_fcpst_ret' => null,
        'v_fcpst_ret' => null,
        'p_red_bc_efet' => null,
        'v_bc_efet' => null,
        'p_icms_efet' => null,
        'v_icms_efet' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'orig' => false,
		'csosn' => false,
		'v_bcst_ret' => false,
		'p_st' => false,
		'v_icms_substituto' => false,
		'v_icmsst_ret' => false,
		'v_bcfcpst_ret' => false,
		'p_fcpst_ret' => false,
		'v_fcpst_ret' => false,
		'p_red_bc_efet' => false,
		'v_bc_efet' => false,
		'p_icms_efet' => false,
		'v_icms_efet' => false
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
        'orig' => 'orig',
        'csosn' => 'CSOSN',
        'v_bcst_ret' => 'vBCSTRet',
        'p_st' => 'pST',
        'v_icms_substituto' => 'vICMSSubstituto',
        'v_icmsst_ret' => 'vICMSSTRet',
        'v_bcfcpst_ret' => 'vBCFCPSTRet',
        'p_fcpst_ret' => 'pFCPSTRet',
        'v_fcpst_ret' => 'vFCPSTRet',
        'p_red_bc_efet' => 'pRedBCEfet',
        'v_bc_efet' => 'vBCEfet',
        'p_icms_efet' => 'pICMSEfet',
        'v_icms_efet' => 'vICMSEfet'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'orig' => 'setOrig',
        'csosn' => 'setCsosn',
        'v_bcst_ret' => 'setVBcstRet',
        'p_st' => 'setPSt',
        'v_icms_substituto' => 'setVIcmsSubstituto',
        'v_icmsst_ret' => 'setVIcmsstRet',
        'v_bcfcpst_ret' => 'setVBcfcpstRet',
        'p_fcpst_ret' => 'setPFcpstRet',
        'v_fcpst_ret' => 'setVFcpstRet',
        'p_red_bc_efet' => 'setPRedBcEfet',
        'v_bc_efet' => 'setVBcEfet',
        'p_icms_efet' => 'setPIcmsEfet',
        'v_icms_efet' => 'setVIcmsEfet'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'orig' => 'getOrig',
        'csosn' => 'getCsosn',
        'v_bcst_ret' => 'getVBcstRet',
        'p_st' => 'getPSt',
        'v_icms_substituto' => 'getVIcmsSubstituto',
        'v_icmsst_ret' => 'getVIcmsstRet',
        'v_bcfcpst_ret' => 'getVBcfcpstRet',
        'p_fcpst_ret' => 'getPFcpstRet',
        'v_fcpst_ret' => 'getVFcpstRet',
        'p_red_bc_efet' => 'getPRedBcEfet',
        'v_bc_efet' => 'getVBcEfet',
        'p_icms_efet' => 'getPIcmsEfet',
        'v_icms_efet' => 'getVIcmsEfet'
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
        $this->setIfExists('orig', $data ?? [], null);
        $this->setIfExists('csosn', $data ?? [], null);
        $this->setIfExists('v_bcst_ret', $data ?? [], null);
        $this->setIfExists('p_st', $data ?? [], null);
        $this->setIfExists('v_icms_substituto', $data ?? [], null);
        $this->setIfExists('v_icmsst_ret', $data ?? [], null);
        $this->setIfExists('v_bcfcpst_ret', $data ?? [], null);
        $this->setIfExists('p_fcpst_ret', $data ?? [], null);
        $this->setIfExists('v_fcpst_ret', $data ?? [], null);
        $this->setIfExists('p_red_bc_efet', $data ?? [], null);
        $this->setIfExists('v_bc_efet', $data ?? [], null);
        $this->setIfExists('p_icms_efet', $data ?? [], null);
        $this->setIfExists('v_icms_efet', $data ?? [], null);
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

        if ($this->container['orig'] === null) {
            $invalidProperties[] = "'orig' can't be null";
        }
        if ($this->container['csosn'] === null) {
            $invalidProperties[] = "'csosn' can't be null";
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
     * Gets orig
     *
     * @return int
     */
    public function getOrig()
    {
        return $this->container['orig'];
    }

    /**
     * Sets orig
     *
     * @param int $orig Origem da mercadoria:  * 0 - Nacional, exceto as indicadas nos códigos 3, 4, 5 e 8;  * 1 - Estrangeira - Importação direta, exceto a indicada no código 6;  * 2 - Estrangeira - Adquirida no mercado interno, exceto a indicada no código 7;  * 3 - Nacional, mercadoria ou bem com Conteúdo de Importação superior a 40%% e inferior ou igual a 70%%;  * 4 - Nacional, cuja produção tenha sido feita em conformidade com os processos produtivos básicos de que tratam as legislações citadas nos Ajustes;  * 5 - Nacional, mercadoria ou bem com Conteúdo de Importação inferior ou igual a 40%%;  * 6 - Estrangeira - Importação direta, sem similar nacional, constante em lista da CAMEX e gás natural;  * 7 - Estrangeira - Adquirida no mercado interno, sem similar nacional, constante lista CAMEX e gás natural;  * 8 - Nacional, mercadoria ou bem com Conteúdo de Importação superior a 70%%.
     *
     * @return self
     */
    public function setOrig($orig)
    {

        if (is_null($orig)) {
            throw new \InvalidArgumentException('non-nullable orig cannot be null');
        }

        $this->container['orig'] = $orig;

        return $this;
    }

    /**
     * Gets csosn
     *
     * @return string
     */
    public function getCsosn()
    {
        return $this->container['csosn'];
    }

    /**
     * Sets csosn
     *
     * @param string $csosn * 500 - ICMS cobrado anterirmente por substituição tributária (substituído) ou por antecipação  (v.2.0).
     *
     * @return self
     */
    public function setCsosn($csosn)
    {

        if (is_null($csosn)) {
            throw new \InvalidArgumentException('non-nullable csosn cannot be null');
        }

        $this->container['csosn'] = $csosn;

        return $this;
    }

    /**
     * Gets v_bcst_ret
     *
     * @return float|null
     */
    public function getVBcstRet()
    {
        return $this->container['v_bcst_ret'];
    }

    /**
     * Sets v_bcst_ret
     *
     * @param float|null $v_bcst_ret Valor da BC do ICMS ST retido anteriormente (v2.0).
     *
     * @return self
     */
    public function setVBcstRet($v_bcst_ret)
    {

        if (is_null($v_bcst_ret)) {
            throw new \InvalidArgumentException('non-nullable v_bcst_ret cannot be null');
        }

        $this->container['v_bcst_ret'] = $v_bcst_ret;

        return $this;
    }

    /**
     * Gets p_st
     *
     * @return float|null
     */
    public function getPSt()
    {
        return $this->container['p_st'];
    }

    /**
     * Sets p_st
     *
     * @param float|null $p_st Aliquota suportada pelo consumidor final.
     *
     * @return self
     */
    public function setPSt($p_st)
    {

        if (is_null($p_st)) {
            throw new \InvalidArgumentException('non-nullable p_st cannot be null');
        }

        $this->container['p_st'] = $p_st;

        return $this;
    }

    /**
     * Gets v_icms_substituto
     *
     * @return float|null
     */
    public function getVIcmsSubstituto()
    {
        return $this->container['v_icms_substituto'];
    }

    /**
     * Sets v_icms_substituto
     *
     * @param float|null $v_icms_substituto Valor do ICMS próprio do substituto.
     *
     * @return self
     */
    public function setVIcmsSubstituto($v_icms_substituto)
    {

        if (is_null($v_icms_substituto)) {
            throw new \InvalidArgumentException('non-nullable v_icms_substituto cannot be null');
        }

        $this->container['v_icms_substituto'] = $v_icms_substituto;

        return $this;
    }

    /**
     * Gets v_icmsst_ret
     *
     * @return float|null
     */
    public function getVIcmsstRet()
    {
        return $this->container['v_icmsst_ret'];
    }

    /**
     * Sets v_icmsst_ret
     *
     * @param float|null $v_icmsst_ret Valor do ICMS ST retido anteriormente  (v2.0).
     *
     * @return self
     */
    public function setVIcmsstRet($v_icmsst_ret)
    {

        if (is_null($v_icmsst_ret)) {
            throw new \InvalidArgumentException('non-nullable v_icmsst_ret cannot be null');
        }

        $this->container['v_icmsst_ret'] = $v_icmsst_ret;

        return $this;
    }

    /**
     * Gets v_bcfcpst_ret
     *
     * @return float|null
     */
    public function getVBcfcpstRet()
    {
        return $this->container['v_bcfcpst_ret'];
    }

    /**
     * Sets v_bcfcpst_ret
     *
     * @param float|null $v_bcfcpst_ret Valor da Base de cálculo do FCP retido anteriormente.
     *
     * @return self
     */
    public function setVBcfcpstRet($v_bcfcpst_ret)
    {

        if (is_null($v_bcfcpst_ret)) {
            throw new \InvalidArgumentException('non-nullable v_bcfcpst_ret cannot be null');
        }

        $this->container['v_bcfcpst_ret'] = $v_bcfcpst_ret;

        return $this;
    }

    /**
     * Gets p_fcpst_ret
     *
     * @return float|null
     */
    public function getPFcpstRet()
    {
        return $this->container['p_fcpst_ret'];
    }

    /**
     * Sets p_fcpst_ret
     *
     * @param float|null $p_fcpst_ret Percentual de FCP retido anteriormente por substituição tributária.
     *
     * @return self
     */
    public function setPFcpstRet($p_fcpst_ret)
    {

        if (is_null($p_fcpst_ret)) {
            throw new \InvalidArgumentException('non-nullable p_fcpst_ret cannot be null');
        }

        $this->container['p_fcpst_ret'] = $p_fcpst_ret;

        return $this;
    }

    /**
     * Gets v_fcpst_ret
     *
     * @return float|null
     */
    public function getVFcpstRet()
    {
        return $this->container['v_fcpst_ret'];
    }

    /**
     * Sets v_fcpst_ret
     *
     * @param float|null $v_fcpst_ret Valor do FCP retido por substituição tributária.
     *
     * @return self
     */
    public function setVFcpstRet($v_fcpst_ret)
    {

        if (is_null($v_fcpst_ret)) {
            throw new \InvalidArgumentException('non-nullable v_fcpst_ret cannot be null');
        }

        $this->container['v_fcpst_ret'] = $v_fcpst_ret;

        return $this;
    }

    /**
     * Gets p_red_bc_efet
     *
     * @return float|null
     */
    public function getPRedBcEfet()
    {
        return $this->container['p_red_bc_efet'];
    }

    /**
     * Sets p_red_bc_efet
     *
     * @param float|null $p_red_bc_efet Percentual de redução da base de cálculo efetiva.
     *
     * @return self
     */
    public function setPRedBcEfet($p_red_bc_efet)
    {

        if (is_null($p_red_bc_efet)) {
            throw new \InvalidArgumentException('non-nullable p_red_bc_efet cannot be null');
        }

        $this->container['p_red_bc_efet'] = $p_red_bc_efet;

        return $this;
    }

    /**
     * Gets v_bc_efet
     *
     * @return float|null
     */
    public function getVBcEfet()
    {
        return $this->container['v_bc_efet'];
    }

    /**
     * Sets v_bc_efet
     *
     * @param float|null $v_bc_efet Valor da base de cálculo efetiva.
     *
     * @return self
     */
    public function setVBcEfet($v_bc_efet)
    {

        if (is_null($v_bc_efet)) {
            throw new \InvalidArgumentException('non-nullable v_bc_efet cannot be null');
        }

        $this->container['v_bc_efet'] = $v_bc_efet;

        return $this;
    }

    /**
     * Gets p_icms_efet
     *
     * @return float|null
     */
    public function getPIcmsEfet()
    {
        return $this->container['p_icms_efet'];
    }

    /**
     * Sets p_icms_efet
     *
     * @param float|null $p_icms_efet Alíquota do ICMS efetiva.
     *
     * @return self
     */
    public function setPIcmsEfet($p_icms_efet)
    {

        if (is_null($p_icms_efet)) {
            throw new \InvalidArgumentException('non-nullable p_icms_efet cannot be null');
        }

        $this->container['p_icms_efet'] = $p_icms_efet;

        return $this;
    }

    /**
     * Gets v_icms_efet
     *
     * @return float|null
     */
    public function getVIcmsEfet()
    {
        return $this->container['v_icms_efet'];
    }

    /**
     * Sets v_icms_efet
     *
     * @param float|null $v_icms_efet Valor do ICMS efetivo.
     *
     * @return self
     */
    public function setVIcmsEfet($v_icms_efet)
    {

        if (is_null($v_icms_efet)) {
            throw new \InvalidArgumentException('non-nullable v_icms_efet cannot be null');
        }

        $this->container['v_icms_efet'] = $v_icms_efet;

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


