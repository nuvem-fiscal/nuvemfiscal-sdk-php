<?php
/**
 * NfeSefazICMSSN202
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
 * Versão do documento OpenAPI: 1.2.2
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
 * NfeSefazICMSSN202 Class Doc Comment
 *
 * @category Class
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class NfeSefazICMSSN202 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NfeSefazICMSSN202';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'orig' => 'int',
        'csosn' => 'string',
        'mod_bcst' => 'int',
        'p_mvast' => 'float',
        'p_red_bcst' => 'float',
        'v_bcst' => 'float',
        'p_icmsst' => 'float',
        'v_icmsst' => 'float',
        'v_bcfcpst' => 'float',
        'p_fcpst' => 'float',
        'v_fcpst' => 'float'
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
        'mod_bcst' => null,
        'p_mvast' => null,
        'p_red_bcst' => null,
        'v_bcst' => null,
        'p_icmsst' => null,
        'v_icmsst' => null,
        'v_bcfcpst' => null,
        'p_fcpst' => null,
        'v_fcpst' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'orig' => false,
		'csosn' => false,
		'mod_bcst' => false,
		'p_mvast' => false,
		'p_red_bcst' => false,
		'v_bcst' => false,
		'p_icmsst' => false,
		'v_icmsst' => false,
		'v_bcfcpst' => false,
		'p_fcpst' => false,
		'v_fcpst' => false
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
        'mod_bcst' => 'modBCST',
        'p_mvast' => 'pMVAST',
        'p_red_bcst' => 'pRedBCST',
        'v_bcst' => 'vBCST',
        'p_icmsst' => 'pICMSST',
        'v_icmsst' => 'vICMSST',
        'v_bcfcpst' => 'vBCFCPST',
        'p_fcpst' => 'pFCPST',
        'v_fcpst' => 'vFCPST'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'orig' => 'setOrig',
        'csosn' => 'setCsosn',
        'mod_bcst' => 'setModBcst',
        'p_mvast' => 'setPMvast',
        'p_red_bcst' => 'setPRedBcst',
        'v_bcst' => 'setVBcst',
        'p_icmsst' => 'setPIcmsst',
        'v_icmsst' => 'setVIcmsst',
        'v_bcfcpst' => 'setVBcfcpst',
        'p_fcpst' => 'setPFcpst',
        'v_fcpst' => 'setVFcpst'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'orig' => 'getOrig',
        'csosn' => 'getCsosn',
        'mod_bcst' => 'getModBcst',
        'p_mvast' => 'getPMvast',
        'p_red_bcst' => 'getPRedBcst',
        'v_bcst' => 'getVBcst',
        'p_icmsst' => 'getPIcmsst',
        'v_icmsst' => 'getVIcmsst',
        'v_bcfcpst' => 'getVBcfcpst',
        'p_fcpst' => 'getPFcpst',
        'v_fcpst' => 'getVFcpst'
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
        $this->setIfExists('mod_bcst', $data ?? [], null);
        $this->setIfExists('p_mvast', $data ?? [], null);
        $this->setIfExists('p_red_bcst', $data ?? [], null);
        $this->setIfExists('v_bcst', $data ?? [], null);
        $this->setIfExists('p_icmsst', $data ?? [], null);
        $this->setIfExists('v_icmsst', $data ?? [], null);
        $this->setIfExists('v_bcfcpst', $data ?? [], null);
        $this->setIfExists('p_fcpst', $data ?? [], null);
        $this->setIfExists('v_fcpst', $data ?? [], null);
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
        if ($this->container['mod_bcst'] === null) {
            $invalidProperties[] = "'mod_bcst' can't be null";
        }
        if ($this->container['v_bcst'] === null) {
            $invalidProperties[] = "'v_bcst' can't be null";
        }
        if ($this->container['p_icmsst'] === null) {
            $invalidProperties[] = "'p_icmsst' can't be null";
        }
        if ($this->container['v_icmsst'] === null) {
            $invalidProperties[] = "'v_icmsst' can't be null";
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
     * @param string $csosn 202- Tributada pelo Simples Nacional sem permissão de crédito e com cobrança do ICMS por Substituição Tributária;  203-  Isenção do ICMS nos Simples Nacional para faixa de receita bruta e com cobrança do ICMS por Substituição Tributária (v.2.0).
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
     * Gets mod_bcst
     *
     * @return int
     */
    public function getModBcst()
    {
        return $this->container['mod_bcst'];
    }

    /**
     * Sets mod_bcst
     *
     * @param int $mod_bcst Modalidade de determinação da BC do ICMS ST:  0 – Preço tabelado ou máximo  sugerido;  1 - Lista Negativa (valor);  2 - Lista Positiva (valor);  3 - Lista Neutra (valor);  4 - Margem Valor Agregado (%%);  5 - Pauta (valor). (v2.0)  6 - Valor da Operação.
     *
     * @return self
     */
    public function setModBcst($mod_bcst)
    {

        if (is_null($mod_bcst)) {
            throw new \InvalidArgumentException('non-nullable mod_bcst cannot be null');
        }

        $this->container['mod_bcst'] = $mod_bcst;

        return $this;
    }

    /**
     * Gets p_mvast
     *
     * @return float|null
     */
    public function getPMvast()
    {
        return $this->container['p_mvast'];
    }

    /**
     * Sets p_mvast
     *
     * @param float|null $p_mvast Percentual da Margem de Valor Adicionado ICMS ST (v2.0).
     *
     * @return self
     */
    public function setPMvast($p_mvast)
    {

        if (is_null($p_mvast)) {
            throw new \InvalidArgumentException('non-nullable p_mvast cannot be null');
        }

        $this->container['p_mvast'] = $p_mvast;

        return $this;
    }

    /**
     * Gets p_red_bcst
     *
     * @return float|null
     */
    public function getPRedBcst()
    {
        return $this->container['p_red_bcst'];
    }

    /**
     * Sets p_red_bcst
     *
     * @param float|null $p_red_bcst Percentual de redução da BC ICMS ST  (v2.0).
     *
     * @return self
     */
    public function setPRedBcst($p_red_bcst)
    {

        if (is_null($p_red_bcst)) {
            throw new \InvalidArgumentException('non-nullable p_red_bcst cannot be null');
        }

        $this->container['p_red_bcst'] = $p_red_bcst;

        return $this;
    }

    /**
     * Gets v_bcst
     *
     * @return float
     */
    public function getVBcst()
    {
        return $this->container['v_bcst'];
    }

    /**
     * Sets v_bcst
     *
     * @param float $v_bcst Valor da BC do ICMS ST (v2.0).
     *
     * @return self
     */
    public function setVBcst($v_bcst)
    {

        if (is_null($v_bcst)) {
            throw new \InvalidArgumentException('non-nullable v_bcst cannot be null');
        }

        $this->container['v_bcst'] = $v_bcst;

        return $this;
    }

    /**
     * Gets p_icmsst
     *
     * @return float
     */
    public function getPIcmsst()
    {
        return $this->container['p_icmsst'];
    }

    /**
     * Sets p_icmsst
     *
     * @param float $p_icmsst Alíquota do ICMS ST (v2.0).
     *
     * @return self
     */
    public function setPIcmsst($p_icmsst)
    {

        if (is_null($p_icmsst)) {
            throw new \InvalidArgumentException('non-nullable p_icmsst cannot be null');
        }

        $this->container['p_icmsst'] = $p_icmsst;

        return $this;
    }

    /**
     * Gets v_icmsst
     *
     * @return float
     */
    public function getVIcmsst()
    {
        return $this->container['v_icmsst'];
    }

    /**
     * Sets v_icmsst
     *
     * @param float $v_icmsst Valor do ICMS ST (v2.0).
     *
     * @return self
     */
    public function setVIcmsst($v_icmsst)
    {

        if (is_null($v_icmsst)) {
            throw new \InvalidArgumentException('non-nullable v_icmsst cannot be null');
        }

        $this->container['v_icmsst'] = $v_icmsst;

        return $this;
    }

    /**
     * Gets v_bcfcpst
     *
     * @return float|null
     */
    public function getVBcfcpst()
    {
        return $this->container['v_bcfcpst'];
    }

    /**
     * Sets v_bcfcpst
     *
     * @param float|null $v_bcfcpst Valor da Base de cálculo do FCP.
     *
     * @return self
     */
    public function setVBcfcpst($v_bcfcpst)
    {

        if (is_null($v_bcfcpst)) {
            throw new \InvalidArgumentException('non-nullable v_bcfcpst cannot be null');
        }

        $this->container['v_bcfcpst'] = $v_bcfcpst;

        return $this;
    }

    /**
     * Gets p_fcpst
     *
     * @return float|null
     */
    public function getPFcpst()
    {
        return $this->container['p_fcpst'];
    }

    /**
     * Sets p_fcpst
     *
     * @param float|null $p_fcpst Percentual de FCP retido por substituição tributária.
     *
     * @return self
     */
    public function setPFcpst($p_fcpst)
    {

        if (is_null($p_fcpst)) {
            throw new \InvalidArgumentException('non-nullable p_fcpst cannot be null');
        }

        $this->container['p_fcpst'] = $p_fcpst;

        return $this;
    }

    /**
     * Gets v_fcpst
     *
     * @return float|null
     */
    public function getVFcpst()
    {
        return $this->container['v_fcpst'];
    }

    /**
     * Sets v_fcpst
     *
     * @param float|null $v_fcpst Valor do FCP retido por substituição tributária.
     *
     * @return self
     */
    public function setVFcpst($v_fcpst)
    {

        if (is_null($v_fcpst)) {
            throw new \InvalidArgumentException('non-nullable v_fcpst cannot be null');
        }

        $this->container['v_fcpst'] = $v_fcpst;

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


