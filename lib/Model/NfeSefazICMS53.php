<?php
/**
 * NfeSefazICMS53
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
 * NfeSefazICMS53 Class Doc Comment
 *
 * @category Class
 * @description Tributação monofásica sobre combustíveis com recolhimento diferido.
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class NfeSefazICMS53 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NfeSefazICMS53';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'orig' => 'int',
        'cst' => 'string',
        'q_bc_mono' => 'float',
        'ad_rem_icms' => 'float',
        'v_icms_mono_op' => 'float',
        'p_dif' => 'float',
        'v_icms_mono_dif' => 'float',
        'v_icms_mono' => 'float',
        'q_bc_mono_dif' => 'float',
        'ad_rem_icms_dif' => 'float'
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
        'q_bc_mono' => null,
        'ad_rem_icms' => null,
        'v_icms_mono_op' => null,
        'p_dif' => null,
        'v_icms_mono_dif' => null,
        'v_icms_mono' => null,
        'q_bc_mono_dif' => null,
        'ad_rem_icms_dif' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'orig' => true,
        'cst' => true,
        'q_bc_mono' => true,
        'ad_rem_icms' => true,
        'v_icms_mono_op' => true,
        'p_dif' => true,
        'v_icms_mono_dif' => true,
        'v_icms_mono' => true,
        'q_bc_mono_dif' => true,
        'ad_rem_icms_dif' => true
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
        'q_bc_mono' => 'qBCMono',
        'ad_rem_icms' => 'adRemICMS',
        'v_icms_mono_op' => 'vICMSMonoOp',
        'p_dif' => 'pDif',
        'v_icms_mono_dif' => 'vICMSMonoDif',
        'v_icms_mono' => 'vICMSMono',
        'q_bc_mono_dif' => 'qBCMonoDif',
        'ad_rem_icms_dif' => 'adRemICMSDif'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'orig' => 'setOrig',
        'cst' => 'setCst',
        'q_bc_mono' => 'setQBcMono',
        'ad_rem_icms' => 'setAdRemIcms',
        'v_icms_mono_op' => 'setVIcmsMonoOp',
        'p_dif' => 'setPDif',
        'v_icms_mono_dif' => 'setVIcmsMonoDif',
        'v_icms_mono' => 'setVIcmsMono',
        'q_bc_mono_dif' => 'setQBcMonoDif',
        'ad_rem_icms_dif' => 'setAdRemIcmsDif'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'orig' => 'getOrig',
        'cst' => 'getCst',
        'q_bc_mono' => 'getQBcMono',
        'ad_rem_icms' => 'getAdRemIcms',
        'v_icms_mono_op' => 'getVIcmsMonoOp',
        'p_dif' => 'getPDif',
        'v_icms_mono_dif' => 'getVIcmsMonoDif',
        'v_icms_mono' => 'getVIcmsMono',
        'q_bc_mono_dif' => 'getQBcMonoDif',
        'ad_rem_icms_dif' => 'getAdRemIcmsDif'
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
        $this->setIfExists('q_bc_mono', $data ?? [], null);
        $this->setIfExists('ad_rem_icms', $data ?? [], null);
        $this->setIfExists('v_icms_mono_op', $data ?? [], null);
        $this->setIfExists('p_dif', $data ?? [], null);
        $this->setIfExists('v_icms_mono_dif', $data ?? [], null);
        $this->setIfExists('v_icms_mono', $data ?? [], null);
        $this->setIfExists('q_bc_mono_dif', $data ?? [], null);
        $this->setIfExists('ad_rem_icms_dif', $data ?? [], null);
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
        if (!is_null($this->container['q_bc_mono']) && ($this->container['q_bc_mono'] < 0)) {
            $invalidProperties[] = "invalid value for 'q_bc_mono', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['ad_rem_icms']) && ($this->container['ad_rem_icms'] < 0)) {
            $invalidProperties[] = "invalid value for 'ad_rem_icms', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['v_icms_mono_op']) && ($this->container['v_icms_mono_op'] < 0)) {
            $invalidProperties[] = "invalid value for 'v_icms_mono_op', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['p_dif']) && ($this->container['p_dif'] > 1E+2)) {
            $invalidProperties[] = "invalid value for 'p_dif', must be smaller than or equal to 1E+2.";
        }

        if (!is_null($this->container['p_dif']) && ($this->container['p_dif'] < 0)) {
            $invalidProperties[] = "invalid value for 'p_dif', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['v_icms_mono_dif']) && ($this->container['v_icms_mono_dif'] < 0)) {
            $invalidProperties[] = "invalid value for 'v_icms_mono_dif', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['v_icms_mono']) && ($this->container['v_icms_mono'] < 0)) {
            $invalidProperties[] = "invalid value for 'v_icms_mono', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['q_bc_mono_dif']) && ($this->container['q_bc_mono_dif'] < 0)) {
            $invalidProperties[] = "invalid value for 'q_bc_mono_dif', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['ad_rem_icms_dif']) && ($this->container['ad_rem_icms_dif'] < 0)) {
            $invalidProperties[] = "invalid value for 'ad_rem_icms_dif', must be bigger than or equal to 0.";
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
     * @param string $cst Tributção pelo ICMS  * 53 - Tributação monofásica sobre combustíveis com recolhimento diferido
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
     * Gets q_bc_mono
     *
     * @return float|null
     */
    public function getQBcMono()
    {
        return $this->container['q_bc_mono'];
    }

    /**
     * Sets q_bc_mono
     *
     * @param float|null $q_bc_mono Quantidade tributada.
     *
     * @return self
     */
    public function setQBcMono($q_bc_mono)
    {
        if (is_null($q_bc_mono)) {
            array_push($this->openAPINullablesSetToNull, 'q_bc_mono');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('q_bc_mono', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($q_bc_mono) && ($q_bc_mono < 0)) {
            throw new \InvalidArgumentException('invalid value for $q_bc_mono when calling NfeSefazICMS53., must be bigger than or equal to 0.');
        }

        $this->container['q_bc_mono'] = $q_bc_mono;

        return $this;
    }

    /**
     * Gets ad_rem_icms
     *
     * @return float|null
     */
    public function getAdRemIcms()
    {
        return $this->container['ad_rem_icms'];
    }

    /**
     * Sets ad_rem_icms
     *
     * @param float|null $ad_rem_icms Alíquota ad rem do imposto.
     *
     * @return self
     */
    public function setAdRemIcms($ad_rem_icms)
    {
        if (is_null($ad_rem_icms)) {
            array_push($this->openAPINullablesSetToNull, 'ad_rem_icms');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ad_rem_icms', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($ad_rem_icms) && ($ad_rem_icms < 0)) {
            throw new \InvalidArgumentException('invalid value for $ad_rem_icms when calling NfeSefazICMS53., must be bigger than or equal to 0.');
        }

        $this->container['ad_rem_icms'] = $ad_rem_icms;

        return $this;
    }

    /**
     * Gets v_icms_mono_op
     *
     * @return float|null
     */
    public function getVIcmsMonoOp()
    {
        return $this->container['v_icms_mono_op'];
    }

    /**
     * Sets v_icms_mono_op
     *
     * @param float|null $v_icms_mono_op Valor do ICMS da operação.
     *
     * @return self
     */
    public function setVIcmsMonoOp($v_icms_mono_op)
    {
        if (is_null($v_icms_mono_op)) {
            array_push($this->openAPINullablesSetToNull, 'v_icms_mono_op');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('v_icms_mono_op', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($v_icms_mono_op) && ($v_icms_mono_op < 0)) {
            throw new \InvalidArgumentException('invalid value for $v_icms_mono_op when calling NfeSefazICMS53., must be bigger than or equal to 0.');
        }

        $this->container['v_icms_mono_op'] = $v_icms_mono_op;

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
            array_push($this->openAPINullablesSetToNull, 'p_dif');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('p_dif', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($p_dif) && ($p_dif > 1E+2)) {
            throw new \InvalidArgumentException('invalid value for $p_dif when calling NfeSefazICMS53., must be smaller than or equal to 1E+2.');
        }
        if (!is_null($p_dif) && ($p_dif < 0)) {
            throw new \InvalidArgumentException('invalid value for $p_dif when calling NfeSefazICMS53., must be bigger than or equal to 0.');
        }

        $this->container['p_dif'] = $p_dif;

        return $this;
    }

    /**
     * Gets v_icms_mono_dif
     *
     * @return float|null
     */
    public function getVIcmsMonoDif()
    {
        return $this->container['v_icms_mono_dif'];
    }

    /**
     * Sets v_icms_mono_dif
     *
     * @param float|null $v_icms_mono_dif Valor do ICMS diferido.
     *
     * @return self
     */
    public function setVIcmsMonoDif($v_icms_mono_dif)
    {
        if (is_null($v_icms_mono_dif)) {
            array_push($this->openAPINullablesSetToNull, 'v_icms_mono_dif');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('v_icms_mono_dif', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($v_icms_mono_dif) && ($v_icms_mono_dif < 0)) {
            throw new \InvalidArgumentException('invalid value for $v_icms_mono_dif when calling NfeSefazICMS53., must be bigger than or equal to 0.');
        }

        $this->container['v_icms_mono_dif'] = $v_icms_mono_dif;

        return $this;
    }

    /**
     * Gets v_icms_mono
     *
     * @return float|null
     */
    public function getVIcmsMono()
    {
        return $this->container['v_icms_mono'];
    }

    /**
     * Sets v_icms_mono
     *
     * @param float|null $v_icms_mono Valor do ICMS próprio devido.
     *
     * @return self
     */
    public function setVIcmsMono($v_icms_mono)
    {
        if (is_null($v_icms_mono)) {
            array_push($this->openAPINullablesSetToNull, 'v_icms_mono');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('v_icms_mono', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($v_icms_mono) && ($v_icms_mono < 0)) {
            throw new \InvalidArgumentException('invalid value for $v_icms_mono when calling NfeSefazICMS53., must be bigger than or equal to 0.');
        }

        $this->container['v_icms_mono'] = $v_icms_mono;

        return $this;
    }

    /**
     * Gets q_bc_mono_dif
     *
     * @return float|null
     */
    public function getQBcMonoDif()
    {
        return $this->container['q_bc_mono_dif'];
    }

    /**
     * Sets q_bc_mono_dif
     *
     * @param float|null $q_bc_mono_dif Quantidade tributada diferida.  OBS: Campo revogado pela NT2023.001v1.20
     *
     * @return self
     */
    public function setQBcMonoDif($q_bc_mono_dif)
    {
        if (is_null($q_bc_mono_dif)) {
            array_push($this->openAPINullablesSetToNull, 'q_bc_mono_dif');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('q_bc_mono_dif', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($q_bc_mono_dif) && ($q_bc_mono_dif < 0)) {
            throw new \InvalidArgumentException('invalid value for $q_bc_mono_dif when calling NfeSefazICMS53., must be bigger than or equal to 0.');
        }

        $this->container['q_bc_mono_dif'] = $q_bc_mono_dif;

        return $this;
    }

    /**
     * Gets ad_rem_icms_dif
     *
     * @return float|null
     */
    public function getAdRemIcmsDif()
    {
        return $this->container['ad_rem_icms_dif'];
    }

    /**
     * Sets ad_rem_icms_dif
     *
     * @param float|null $ad_rem_icms_dif Alíquota ad rem do imposto diferido.  OBS: Campo revogado pela NT2023.001v1.20
     *
     * @return self
     */
    public function setAdRemIcmsDif($ad_rem_icms_dif)
    {
        if (is_null($ad_rem_icms_dif)) {
            array_push($this->openAPINullablesSetToNull, 'ad_rem_icms_dif');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ad_rem_icms_dif', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($ad_rem_icms_dif) && ($ad_rem_icms_dif < 0)) {
            throw new \InvalidArgumentException('invalid value for $ad_rem_icms_dif when calling NfeSefazICMS53., must be bigger than or equal to 0.');
        }

        $this->container['ad_rem_icms_dif'] = $ad_rem_icms_dif;

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


