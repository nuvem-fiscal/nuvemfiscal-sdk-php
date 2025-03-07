<?php
/**
 * NfeSefazICMS10
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
 * NfeSefazICMS10 Class Doc Comment
 *
 * @category Class
 * @description Tributação pelo ICMS  * 10 - Tributada e com cobrança do ICMS por substituição tributária
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class NfeSefazICMS10 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NfeSefazICMS10';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'orig' => 'int',
        'cst' => 'string',
        'mod_bc' => 'int',
        'v_bc' => 'float',
        'p_icms' => 'float',
        'v_icms' => 'float',
        'v_bcfcp' => 'float',
        'p_fcp' => 'float',
        'v_fcp' => 'float',
        'mod_bcst' => 'int',
        'p_mvast' => 'float',
        'p_red_bcst' => 'float',
        'v_bcst' => 'float',
        'p_icmsst' => 'float',
        'v_icmsst' => 'float',
        'v_bcfcpst' => 'float',
        'p_fcpst' => 'float',
        'v_fcpst' => 'float',
        'v_icmsst_deson' => 'float',
        'mot_des_icmsst' => 'int'
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
        'v_bc' => null,
        'p_icms' => null,
        'v_icms' => null,
        'v_bcfcp' => null,
        'p_fcp' => null,
        'v_fcp' => null,
        'mod_bcst' => null,
        'p_mvast' => null,
        'p_red_bcst' => null,
        'v_bcst' => null,
        'p_icmsst' => null,
        'v_icmsst' => null,
        'v_bcfcpst' => null,
        'p_fcpst' => null,
        'v_fcpst' => null,
        'v_icmsst_deson' => null,
        'mot_des_icmsst' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'orig' => true,
        'cst' => true,
        'mod_bc' => true,
        'v_bc' => true,
        'p_icms' => true,
        'v_icms' => true,
        'v_bcfcp' => true,
        'p_fcp' => true,
        'v_fcp' => true,
        'mod_bcst' => true,
        'p_mvast' => true,
        'p_red_bcst' => true,
        'v_bcst' => true,
        'p_icmsst' => true,
        'v_icmsst' => true,
        'v_bcfcpst' => true,
        'p_fcpst' => true,
        'v_fcpst' => true,
        'v_icmsst_deson' => true,
        'mot_des_icmsst' => true
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
        'orig' => 'orig',
        'cst' => 'CST',
        'mod_bc' => 'modBC',
        'v_bc' => 'vBC',
        'p_icms' => 'pICMS',
        'v_icms' => 'vICMS',
        'v_bcfcp' => 'vBCFCP',
        'p_fcp' => 'pFCP',
        'v_fcp' => 'vFCP',
        'mod_bcst' => 'modBCST',
        'p_mvast' => 'pMVAST',
        'p_red_bcst' => 'pRedBCST',
        'v_bcst' => 'vBCST',
        'p_icmsst' => 'pICMSST',
        'v_icmsst' => 'vICMSST',
        'v_bcfcpst' => 'vBCFCPST',
        'p_fcpst' => 'pFCPST',
        'v_fcpst' => 'vFCPST',
        'v_icmsst_deson' => 'vICMSSTDeson',
        'mot_des_icmsst' => 'motDesICMSST'
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
        'v_bc' => 'setVBc',
        'p_icms' => 'setPIcms',
        'v_icms' => 'setVIcms',
        'v_bcfcp' => 'setVBcfcp',
        'p_fcp' => 'setPFcp',
        'v_fcp' => 'setVFcp',
        'mod_bcst' => 'setModBcst',
        'p_mvast' => 'setPMvast',
        'p_red_bcst' => 'setPRedBcst',
        'v_bcst' => 'setVBcst',
        'p_icmsst' => 'setPIcmsst',
        'v_icmsst' => 'setVIcmsst',
        'v_bcfcpst' => 'setVBcfcpst',
        'p_fcpst' => 'setPFcpst',
        'v_fcpst' => 'setVFcpst',
        'v_icmsst_deson' => 'setVIcmsstDeson',
        'mot_des_icmsst' => 'setMotDesIcmsst'
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
        'v_bc' => 'getVBc',
        'p_icms' => 'getPIcms',
        'v_icms' => 'getVIcms',
        'v_bcfcp' => 'getVBcfcp',
        'p_fcp' => 'getPFcp',
        'v_fcp' => 'getVFcp',
        'mod_bcst' => 'getModBcst',
        'p_mvast' => 'getPMvast',
        'p_red_bcst' => 'getPRedBcst',
        'v_bcst' => 'getVBcst',
        'p_icmsst' => 'getPIcmsst',
        'v_icmsst' => 'getVIcmsst',
        'v_bcfcpst' => 'getVBcfcpst',
        'p_fcpst' => 'getPFcpst',
        'v_fcpst' => 'getVFcpst',
        'v_icmsst_deson' => 'getVIcmsstDeson',
        'mot_des_icmsst' => 'getMotDesIcmsst'
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
        $this->setIfExists('v_bc', $data ?? [], null);
        $this->setIfExists('p_icms', $data ?? [], null);
        $this->setIfExists('v_icms', $data ?? [], null);
        $this->setIfExists('v_bcfcp', $data ?? [], null);
        $this->setIfExists('p_fcp', $data ?? [], null);
        $this->setIfExists('v_fcp', $data ?? [], null);
        $this->setIfExists('mod_bcst', $data ?? [], null);
        $this->setIfExists('p_mvast', $data ?? [], null);
        $this->setIfExists('p_red_bcst', $data ?? [], null);
        $this->setIfExists('v_bcst', $data ?? [], null);
        $this->setIfExists('p_icmsst', $data ?? [], null);
        $this->setIfExists('v_icmsst', $data ?? [], null);
        $this->setIfExists('v_bcfcpst', $data ?? [], null);
        $this->setIfExists('p_fcpst', $data ?? [], null);
        $this->setIfExists('v_fcpst', $data ?? [], null);
        $this->setIfExists('v_icmsst_deson', $data ?? [], null);
        $this->setIfExists('mot_des_icmsst', $data ?? [], null);
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
        if ($this->container['mod_bc'] === null) {
            $invalidProperties[] = "'mod_bc' can't be null";
        }
        if ($this->container['v_bc'] === null) {
            $invalidProperties[] = "'v_bc' can't be null";
        }
        if (($this->container['v_bc'] < 0)) {
            $invalidProperties[] = "invalid value for 'v_bc', must be bigger than or equal to 0.";
        }

        if ($this->container['p_icms'] === null) {
            $invalidProperties[] = "'p_icms' can't be null";
        }
        if (($this->container['p_icms'] < 0)) {
            $invalidProperties[] = "invalid value for 'p_icms', must be bigger than or equal to 0.";
        }

        if ($this->container['v_icms'] === null) {
            $invalidProperties[] = "'v_icms' can't be null";
        }
        if (($this->container['v_icms'] < 0)) {
            $invalidProperties[] = "invalid value for 'v_icms', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['v_bcfcp']) && ($this->container['v_bcfcp'] < 0)) {
            $invalidProperties[] = "invalid value for 'v_bcfcp', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['p_fcp']) && ($this->container['p_fcp'] < 0)) {
            $invalidProperties[] = "invalid value for 'p_fcp', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['v_fcp']) && ($this->container['v_fcp'] < 0)) {
            $invalidProperties[] = "invalid value for 'v_fcp', must be bigger than or equal to 0.";
        }

        if ($this->container['mod_bcst'] === null) {
            $invalidProperties[] = "'mod_bcst' can't be null";
        }
        if (!is_null($this->container['p_mvast']) && ($this->container['p_mvast'] < 0)) {
            $invalidProperties[] = "invalid value for 'p_mvast', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['p_red_bcst']) && ($this->container['p_red_bcst'] < 0)) {
            $invalidProperties[] = "invalid value for 'p_red_bcst', must be bigger than or equal to 0.";
        }

        if ($this->container['v_bcst'] === null) {
            $invalidProperties[] = "'v_bcst' can't be null";
        }
        if (($this->container['v_bcst'] < 0)) {
            $invalidProperties[] = "invalid value for 'v_bcst', must be bigger than or equal to 0.";
        }

        if ($this->container['p_icmsst'] === null) {
            $invalidProperties[] = "'p_icmsst' can't be null";
        }
        if (($this->container['p_icmsst'] < 0)) {
            $invalidProperties[] = "invalid value for 'p_icmsst', must be bigger than or equal to 0.";
        }

        if ($this->container['v_icmsst'] === null) {
            $invalidProperties[] = "'v_icmsst' can't be null";
        }
        if (($this->container['v_icmsst'] < 0)) {
            $invalidProperties[] = "invalid value for 'v_icmsst', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['v_bcfcpst']) && ($this->container['v_bcfcpst'] < 0)) {
            $invalidProperties[] = "invalid value for 'v_bcfcpst', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['p_fcpst']) && ($this->container['p_fcpst'] < 0)) {
            $invalidProperties[] = "invalid value for 'p_fcpst', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['v_fcpst']) && ($this->container['v_fcpst'] < 0)) {
            $invalidProperties[] = "invalid value for 'v_fcpst', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['v_icmsst_deson']) && ($this->container['v_icmsst_deson'] < 0)) {
            $invalidProperties[] = "invalid value for 'v_icmsst_deson', must be bigger than or equal to 0.";
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
            array_push($this->openAPINullablesSetToNull, 'orig');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('orig', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
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
     * @param string $cst * 10 - Tributada e com cobrança do ICMS por substituição tributária
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
     * Gets mod_bc
     *
     * @return int
     */
    public function getModBc()
    {
        return $this->container['mod_bc'];
    }

    /**
     * Sets mod_bc
     *
     * @param int $mod_bc Modalidade de determinação da BC do ICMS:  * 0 - Margem Valor Agregado (%%)  * 1 - Pauta (valor)  * 2 - Preço Tabelado Máximo (valor)  * 3 - Valor da Operação
     *
     * @return self
     */
    public function setModBc($mod_bc)
    {
        if (is_null($mod_bc)) {
            array_push($this->openAPINullablesSetToNull, 'mod_bc');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('mod_bc', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['mod_bc'] = $mod_bc;

        return $this;
    }

    /**
     * Gets v_bc
     *
     * @return float
     */
    public function getVBc()
    {
        return $this->container['v_bc'];
    }

    /**
     * Sets v_bc
     *
     * @param float $v_bc Valor da BC do ICMS.
     *
     * @return self
     */
    public function setVBc($v_bc)
    {
        if (is_null($v_bc)) {
            array_push($this->openAPINullablesSetToNull, 'v_bc');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('v_bc', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($v_bc) && ($v_bc < 0)) {
            throw new \InvalidArgumentException('invalid value for $v_bc when calling NfeSefazICMS10., must be bigger than or equal to 0.');
        }

        $this->container['v_bc'] = $v_bc;

        return $this;
    }

    /**
     * Gets p_icms
     *
     * @return float
     */
    public function getPIcms()
    {
        return $this->container['p_icms'];
    }

    /**
     * Sets p_icms
     *
     * @param float $p_icms Alíquota do ICMS.
     *
     * @return self
     */
    public function setPIcms($p_icms)
    {
        if (is_null($p_icms)) {
            array_push($this->openAPINullablesSetToNull, 'p_icms');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('p_icms', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($p_icms) && ($p_icms < 0)) {
            throw new \InvalidArgumentException('invalid value for $p_icms when calling NfeSefazICMS10., must be bigger than or equal to 0.');
        }

        $this->container['p_icms'] = $p_icms;

        return $this;
    }

    /**
     * Gets v_icms
     *
     * @return float
     */
    public function getVIcms()
    {
        return $this->container['v_icms'];
    }

    /**
     * Sets v_icms
     *
     * @param float $v_icms Valor do ICMS.
     *
     * @return self
     */
    public function setVIcms($v_icms)
    {
        if (is_null($v_icms)) {
            array_push($this->openAPINullablesSetToNull, 'v_icms');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('v_icms', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($v_icms) && ($v_icms < 0)) {
            throw new \InvalidArgumentException('invalid value for $v_icms when calling NfeSefazICMS10., must be bigger than or equal to 0.');
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
            array_push($this->openAPINullablesSetToNull, 'v_bcfcp');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('v_bcfcp', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($v_bcfcp) && ($v_bcfcp < 0)) {
            throw new \InvalidArgumentException('invalid value for $v_bcfcp when calling NfeSefazICMS10., must be bigger than or equal to 0.');
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
            array_push($this->openAPINullablesSetToNull, 'p_fcp');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('p_fcp', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($p_fcp) && ($p_fcp < 0)) {
            throw new \InvalidArgumentException('invalid value for $p_fcp when calling NfeSefazICMS10., must be bigger than or equal to 0.');
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
            array_push($this->openAPINullablesSetToNull, 'v_fcp');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('v_fcp', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($v_fcp) && ($v_fcp < 0)) {
            throw new \InvalidArgumentException('invalid value for $v_fcp when calling NfeSefazICMS10., must be bigger than or equal to 0.');
        }

        $this->container['v_fcp'] = $v_fcp;

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
     * @param int $mod_bcst Modalidade de determinação da BC do ICMS ST:  * 0 - Preço tabelado ou máximo  sugerido  * 1 - Lista Negativa (valor)  * 2 - Lista Positiva (valor)  * 3 - Lista Neutra (valor)  * 4 - Margem Valor Agregado (%%)  * 5 - Pauta (valor)  * 6 - Valor da Operação
     *
     * @return self
     */
    public function setModBcst($mod_bcst)
    {
        if (is_null($mod_bcst)) {
            array_push($this->openAPINullablesSetToNull, 'mod_bcst');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('mod_bcst', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
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
     * @param float|null $p_mvast Percentual da Margem de Valor Adicionado ICMS ST.
     *
     * @return self
     */
    public function setPMvast($p_mvast)
    {
        if (is_null($p_mvast)) {
            array_push($this->openAPINullablesSetToNull, 'p_mvast');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('p_mvast', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($p_mvast) && ($p_mvast < 0)) {
            throw new \InvalidArgumentException('invalid value for $p_mvast when calling NfeSefazICMS10., must be bigger than or equal to 0.');
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
     * @param float|null $p_red_bcst Percentual de redução da BC ICMS ST.
     *
     * @return self
     */
    public function setPRedBcst($p_red_bcst)
    {
        if (is_null($p_red_bcst)) {
            array_push($this->openAPINullablesSetToNull, 'p_red_bcst');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('p_red_bcst', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($p_red_bcst) && ($p_red_bcst < 0)) {
            throw new \InvalidArgumentException('invalid value for $p_red_bcst when calling NfeSefazICMS10., must be bigger than or equal to 0.');
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
     * @param float $v_bcst Valor da BC do ICMS ST.
     *
     * @return self
     */
    public function setVBcst($v_bcst)
    {
        if (is_null($v_bcst)) {
            array_push($this->openAPINullablesSetToNull, 'v_bcst');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('v_bcst', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($v_bcst) && ($v_bcst < 0)) {
            throw new \InvalidArgumentException('invalid value for $v_bcst when calling NfeSefazICMS10., must be bigger than or equal to 0.');
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
     * @param float $p_icmsst Alíquota do ICMS ST.
     *
     * @return self
     */
    public function setPIcmsst($p_icmsst)
    {
        if (is_null($p_icmsst)) {
            array_push($this->openAPINullablesSetToNull, 'p_icmsst');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('p_icmsst', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($p_icmsst) && ($p_icmsst < 0)) {
            throw new \InvalidArgumentException('invalid value for $p_icmsst when calling NfeSefazICMS10., must be bigger than or equal to 0.');
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
     * @param float $v_icmsst Valor do ICMS ST.
     *
     * @return self
     */
    public function setVIcmsst($v_icmsst)
    {
        if (is_null($v_icmsst)) {
            array_push($this->openAPINullablesSetToNull, 'v_icmsst');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('v_icmsst', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($v_icmsst) && ($v_icmsst < 0)) {
            throw new \InvalidArgumentException('invalid value for $v_icmsst when calling NfeSefazICMS10., must be bigger than or equal to 0.');
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
     * @param float|null $v_bcfcpst Valor da Base de cálculo do FCP retido por substituicao tributaria.
     *
     * @return self
     */
    public function setVBcfcpst($v_bcfcpst)
    {
        if (is_null($v_bcfcpst)) {
            array_push($this->openAPINullablesSetToNull, 'v_bcfcpst');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('v_bcfcpst', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($v_bcfcpst) && ($v_bcfcpst < 0)) {
            throw new \InvalidArgumentException('invalid value for $v_bcfcpst when calling NfeSefazICMS10., must be bigger than or equal to 0.');
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
            array_push($this->openAPINullablesSetToNull, 'p_fcpst');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('p_fcpst', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($p_fcpst) && ($p_fcpst < 0)) {
            throw new \InvalidArgumentException('invalid value for $p_fcpst when calling NfeSefazICMS10., must be bigger than or equal to 0.');
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
            array_push($this->openAPINullablesSetToNull, 'v_fcpst');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('v_fcpst', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($v_fcpst) && ($v_fcpst < 0)) {
            throw new \InvalidArgumentException('invalid value for $v_fcpst when calling NfeSefazICMS10., must be bigger than or equal to 0.');
        }

        $this->container['v_fcpst'] = $v_fcpst;

        return $this;
    }

    /**
     * Gets v_icmsst_deson
     *
     * @return float|null
     */
    public function getVIcmsstDeson()
    {
        return $this->container['v_icmsst_deson'];
    }

    /**
     * Sets v_icmsst_deson
     *
     * @param float|null $v_icmsst_deson Valor do ICMS-ST desonerado.
     *
     * @return self
     */
    public function setVIcmsstDeson($v_icmsst_deson)
    {
        if (is_null($v_icmsst_deson)) {
            array_push($this->openAPINullablesSetToNull, 'v_icmsst_deson');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('v_icmsst_deson', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($v_icmsst_deson) && ($v_icmsst_deson < 0)) {
            throw new \InvalidArgumentException('invalid value for $v_icmsst_deson when calling NfeSefazICMS10., must be bigger than or equal to 0.');
        }

        $this->container['v_icmsst_deson'] = $v_icmsst_deson;

        return $this;
    }

    /**
     * Gets mot_des_icmsst
     *
     * @return int|null
     */
    public function getMotDesIcmsst()
    {
        return $this->container['mot_des_icmsst'];
    }

    /**
     * Sets mot_des_icmsst
     *
     * @param int|null $mot_des_icmsst Motivo da desoneração do ICMS-ST: 3-Uso na agropecuária  * 9 - Outros  * 12 - Fomento agropecuário
     *
     * @return self
     */
    public function setMotDesIcmsst($mot_des_icmsst)
    {
        if (is_null($mot_des_icmsst)) {
            array_push($this->openAPINullablesSetToNull, 'mot_des_icmsst');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('mot_des_icmsst', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['mot_des_icmsst'] = $mot_des_icmsst;

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


