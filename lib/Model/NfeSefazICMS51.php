<?php
/**
 * NfeSefazICMS51
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
 * NfeSefazICMS51 Class Doc Comment
 *
 * @category Class
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class NfeSefazICMS51 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NfeSefazICMS51';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'orig' => 'int',
        'cst' => 'string',
        'mod_bc' => 'int',
        'p_red_bc' => 'float',
        'v_bc' => 'float',
        'p_icms' => 'float',
        'v_icmsop' => 'float',
        'p_dif' => 'float',
        'v_icms_dif' => 'float',
        'v_icms' => 'float',
        'v_bcfcp' => 'float',
        'p_fcp' => 'float',
        'v_fcp' => 'float',
        'p_fcp_dif' => 'float',
        'v_fcp_dif' => 'float',
        'v_fcp_efet' => 'float'
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
        'cst' => null,
        'mod_bc' => null,
        'p_red_bc' => null,
        'v_bc' => null,
        'p_icms' => null,
        'v_icmsop' => null,
        'p_dif' => null,
        'v_icms_dif' => null,
        'v_icms' => null,
        'v_bcfcp' => null,
        'p_fcp' => null,
        'v_fcp' => null,
        'p_fcp_dif' => null,
        'v_fcp_dif' => null,
        'v_fcp_efet' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'orig' => false,
		'cst' => false,
		'mod_bc' => false,
		'p_red_bc' => false,
		'v_bc' => false,
		'p_icms' => false,
		'v_icmsop' => false,
		'p_dif' => false,
		'v_icms_dif' => false,
		'v_icms' => false,
		'v_bcfcp' => false,
		'p_fcp' => false,
		'v_fcp' => false,
		'p_fcp_dif' => false,
		'v_fcp_dif' => false,
		'v_fcp_efet' => false
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
        'cst' => 'CST',
        'mod_bc' => 'modBC',
        'p_red_bc' => 'pRedBC',
        'v_bc' => 'vBC',
        'p_icms' => 'pICMS',
        'v_icmsop' => 'vICMSOp',
        'p_dif' => 'pDif',
        'v_icms_dif' => 'vICMSDif',
        'v_icms' => 'vICMS',
        'v_bcfcp' => 'vBCFCP',
        'p_fcp' => 'pFCP',
        'v_fcp' => 'vFCP',
        'p_fcp_dif' => 'pFCPDif',
        'v_fcp_dif' => 'vFCPDif',
        'v_fcp_efet' => 'vFCPEfet'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'orig' => 'setOrig',
        'cst' => 'setCst',
        'mod_bc' => 'setModBc',
        'p_red_bc' => 'setPRedBc',
        'v_bc' => 'setVBc',
        'p_icms' => 'setPIcms',
        'v_icmsop' => 'setVIcmsop',
        'p_dif' => 'setPDif',
        'v_icms_dif' => 'setVIcmsDif',
        'v_icms' => 'setVIcms',
        'v_bcfcp' => 'setVBcfcp',
        'p_fcp' => 'setPFcp',
        'v_fcp' => 'setVFcp',
        'p_fcp_dif' => 'setPFcpDif',
        'v_fcp_dif' => 'setVFcpDif',
        'v_fcp_efet' => 'setVFcpEfet'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'orig' => 'getOrig',
        'cst' => 'getCst',
        'mod_bc' => 'getModBc',
        'p_red_bc' => 'getPRedBc',
        'v_bc' => 'getVBc',
        'p_icms' => 'getPIcms',
        'v_icmsop' => 'getVIcmsop',
        'p_dif' => 'getPDif',
        'v_icms_dif' => 'getVIcmsDif',
        'v_icms' => 'getVIcms',
        'v_bcfcp' => 'getVBcfcp',
        'p_fcp' => 'getPFcp',
        'v_fcp' => 'getVFcp',
        'p_fcp_dif' => 'getPFcpDif',
        'v_fcp_dif' => 'getVFcpDif',
        'v_fcp_efet' => 'getVFcpEfet'
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
        $this->setIfExists('cst', $data ?? [], null);
        $this->setIfExists('mod_bc', $data ?? [], null);
        $this->setIfExists('p_red_bc', $data ?? [], null);
        $this->setIfExists('v_bc', $data ?? [], null);
        $this->setIfExists('p_icms', $data ?? [], null);
        $this->setIfExists('v_icmsop', $data ?? [], null);
        $this->setIfExists('p_dif', $data ?? [], null);
        $this->setIfExists('v_icms_dif', $data ?? [], null);
        $this->setIfExists('v_icms', $data ?? [], null);
        $this->setIfExists('v_bcfcp', $data ?? [], null);
        $this->setIfExists('p_fcp', $data ?? [], null);
        $this->setIfExists('v_fcp', $data ?? [], null);
        $this->setIfExists('p_fcp_dif', $data ?? [], null);
        $this->setIfExists('v_fcp_dif', $data ?? [], null);
        $this->setIfExists('v_fcp_efet', $data ?? [], null);
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
        if ($this->container['cst'] === null) {
            $invalidProperties[] = "'cst' can't be null";
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
     * @param int $orig Origem da mercadoria:  0 - Nacional, exceto as indicadas nos códigos 3, 4, 5 e 8;  1 - Estrangeira - Importação direta, exceto a indicada no código 6;  2 - Estrangeira - Adquirida no mercado interno, exceto a indicada no código 7;  3 - Nacional, mercadoria ou bem com Conteúdo de Importação superior a 40%% e inferior ou igual a 70%%;  4 - Nacional, cuja produção tenha sido feita em conformidade com os processos produtivos básicos de que tratam as legislações citadas nos Ajustes;  5 - Nacional, mercadoria ou bem com Conteúdo de Importação inferior ou igual a 40%%;  6 - Estrangeira - Importação direta, sem similar nacional, constante em lista da CAMEX e gás natural;  7 - Estrangeira - Adquirida no mercado interno, sem similar nacional, constante lista CAMEX e gás natural;  8 - Nacional, mercadoria ou bem com Conteúdo de Importação superior a 70%%.
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
     * @param string $cst Tributção pelo ICMS  20 - Com redução de base de cálculo.
     *
     * @return self
     */
    public function setCst($cst)
    {

        if (is_null($cst)) {
            throw new \InvalidArgumentException('non-nullable cst cannot be null');
        }

        $this->container['cst'] = $cst;

        return $this;
    }

    /**
     * Gets mod_bc
     *
     * @return int|null
     */
    public function getModBc()
    {
        return $this->container['mod_bc'];
    }

    /**
     * Sets mod_bc
     *
     * @param int|null $mod_bc Modalidade de determinação da BC do ICMS:  0 - Margem Valor Agregado (%%);  1 - Pauta (valor);  2 - Preço Tabelado Máximo (valor);  3 - Valor da Operação.
     *
     * @return self
     */
    public function setModBc($mod_bc)
    {

        if (is_null($mod_bc)) {
            throw new \InvalidArgumentException('non-nullable mod_bc cannot be null');
        }

        $this->container['mod_bc'] = $mod_bc;

        return $this;
    }

    /**
     * Gets p_red_bc
     *
     * @return float|null
     */
    public function getPRedBc()
    {
        return $this->container['p_red_bc'];
    }

    /**
     * Sets p_red_bc
     *
     * @param float|null $p_red_bc Percentual de redução da BC.
     *
     * @return self
     */
    public function setPRedBc($p_red_bc)
    {

        if (is_null($p_red_bc)) {
            throw new \InvalidArgumentException('non-nullable p_red_bc cannot be null');
        }

        $this->container['p_red_bc'] = $p_red_bc;

        return $this;
    }

    /**
     * Gets v_bc
     *
     * @return float|null
     */
    public function getVBc()
    {
        return $this->container['v_bc'];
    }

    /**
     * Sets v_bc
     *
     * @param float|null $v_bc Valor da BC do ICMS.
     *
     * @return self
     */
    public function setVBc($v_bc)
    {

        if (is_null($v_bc)) {
            throw new \InvalidArgumentException('non-nullable v_bc cannot be null');
        }

        $this->container['v_bc'] = $v_bc;

        return $this;
    }

    /**
     * Gets p_icms
     *
     * @return float|null
     */
    public function getPIcms()
    {
        return $this->container['p_icms'];
    }

    /**
     * Sets p_icms
     *
     * @param float|null $p_icms Alíquota do imposto.
     *
     * @return self
     */
    public function setPIcms($p_icms)
    {

        if (is_null($p_icms)) {
            throw new \InvalidArgumentException('non-nullable p_icms cannot be null');
        }

        $this->container['p_icms'] = $p_icms;

        return $this;
    }

    /**
     * Gets v_icmsop
     *
     * @return float|null
     */
    public function getVIcmsop()
    {
        return $this->container['v_icmsop'];
    }

    /**
     * Sets v_icmsop
     *
     * @param float|null $v_icmsop Valor do ICMS da Operação.
     *
     * @return self
     */
    public function setVIcmsop($v_icmsop)
    {

        if (is_null($v_icmsop)) {
            throw new \InvalidArgumentException('non-nullable v_icmsop cannot be null');
        }

        $this->container['v_icmsop'] = $v_icmsop;

        return $this;
    }

    /**
     * Gets p_dif
     *
     * @return float|null
     */
    public function getPDif()
    {
        return $this->container['p_dif'];
    }

    /**
     * Sets p_dif
     *
     * @param float|null $p_dif Percentual do diferemento.
     *
     * @return self
     */
    public function setPDif($p_dif)
    {

        if (is_null($p_dif)) {
            throw new \InvalidArgumentException('non-nullable p_dif cannot be null');
        }

        $this->container['p_dif'] = $p_dif;

        return $this;
    }

    /**
     * Gets v_icms_dif
     *
     * @return float|null
     */
    public function getVIcmsDif()
    {
        return $this->container['v_icms_dif'];
    }

    /**
     * Sets v_icms_dif
     *
     * @param float|null $v_icms_dif Valor do ICMS da diferido.
     *
     * @return self
     */
    public function setVIcmsDif($v_icms_dif)
    {

        if (is_null($v_icms_dif)) {
            throw new \InvalidArgumentException('non-nullable v_icms_dif cannot be null');
        }

        $this->container['v_icms_dif'] = $v_icms_dif;

        return $this;
    }

    /**
     * Gets v_icms
     *
     * @return float|null
     */
    public function getVIcms()
    {
        return $this->container['v_icms'];
    }

    /**
     * Sets v_icms
     *
     * @param float|null $v_icms Valor do ICMS.
     *
     * @return self
     */
    public function setVIcms($v_icms)
    {

        if (is_null($v_icms)) {
            throw new \InvalidArgumentException('non-nullable v_icms cannot be null');
        }

        $this->container['v_icms'] = $v_icms;

        return $this;
    }

    /**
     * Gets v_bcfcp
     *
     * @return float|null
     */
    public function getVBcfcp()
    {
        return $this->container['v_bcfcp'];
    }

    /**
     * Sets v_bcfcp
     *
     * @param float|null $v_bcfcp Valor da Base de cálculo do FCP.
     *
     * @return self
     */
    public function setVBcfcp($v_bcfcp)
    {

        if (is_null($v_bcfcp)) {
            throw new \InvalidArgumentException('non-nullable v_bcfcp cannot be null');
        }

        $this->container['v_bcfcp'] = $v_bcfcp;

        return $this;
    }

    /**
     * Gets p_fcp
     *
     * @return float|null
     */
    public function getPFcp()
    {
        return $this->container['p_fcp'];
    }

    /**
     * Sets p_fcp
     *
     * @param float|null $p_fcp Percentual de ICMS relativo ao Fundo de Combate à Pobreza (FCP).
     *
     * @return self
     */
    public function setPFcp($p_fcp)
    {

        if (is_null($p_fcp)) {
            throw new \InvalidArgumentException('non-nullable p_fcp cannot be null');
        }

        $this->container['p_fcp'] = $p_fcp;

        return $this;
    }

    /**
     * Gets v_fcp
     *
     * @return float|null
     */
    public function getVFcp()
    {
        return $this->container['v_fcp'];
    }

    /**
     * Sets v_fcp
     *
     * @param float|null $v_fcp Valor do ICMS relativo ao Fundo de Combate à Pobreza (FCP).
     *
     * @return self
     */
    public function setVFcp($v_fcp)
    {

        if (is_null($v_fcp)) {
            throw new \InvalidArgumentException('non-nullable v_fcp cannot be null');
        }

        $this->container['v_fcp'] = $v_fcp;

        return $this;
    }

    /**
     * Gets p_fcp_dif
     *
     * @return float|null
     */
    public function getPFcpDif()
    {
        return $this->container['p_fcp_dif'];
    }

    /**
     * Sets p_fcp_dif
     *
     * @param float|null $p_fcp_dif Percentual do diferimento do ICMS relativo ao Fundo de Combate à Pobreza (FCP).
     *
     * @return self
     */
    public function setPFcpDif($p_fcp_dif)
    {

        if (is_null($p_fcp_dif)) {
            throw new \InvalidArgumentException('non-nullable p_fcp_dif cannot be null');
        }

        $this->container['p_fcp_dif'] = $p_fcp_dif;

        return $this;
    }

    /**
     * Gets v_fcp_dif
     *
     * @return float|null
     */
    public function getVFcpDif()
    {
        return $this->container['v_fcp_dif'];
    }

    /**
     * Sets v_fcp_dif
     *
     * @param float|null $v_fcp_dif Valor do ICMS relativo ao Fundo de Combate à Pobreza (FCP) diferido.
     *
     * @return self
     */
    public function setVFcpDif($v_fcp_dif)
    {

        if (is_null($v_fcp_dif)) {
            throw new \InvalidArgumentException('non-nullable v_fcp_dif cannot be null');
        }

        $this->container['v_fcp_dif'] = $v_fcp_dif;

        return $this;
    }

    /**
     * Gets v_fcp_efet
     *
     * @return float|null
     */
    public function getVFcpEfet()
    {
        return $this->container['v_fcp_efet'];
    }

    /**
     * Sets v_fcp_efet
     *
     * @param float|null $v_fcp_efet Valor efetivo do ICMS relativo ao Fundo de Combate à Pobreza (FCP).
     *
     * @return self
     */
    public function setVFcpEfet($v_fcp_efet)
    {

        if (is_null($v_fcp_efet)) {
            throw new \InvalidArgumentException('non-nullable v_fcp_efet cannot be null');
        }

        $this->container['v_fcp_efet'] = $v_fcp_efet;

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


