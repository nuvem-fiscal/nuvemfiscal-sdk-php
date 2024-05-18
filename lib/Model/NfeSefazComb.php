<?php
/**
 * NfeSefazComb
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
 * NfeSefazComb Class Doc Comment
 *
 * @category Class
 * @description Informar apenas para operações com combustíveis líquidos.
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class NfeSefazComb implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NfeSefazComb';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'c_prod_anp' => 'int',
        'desc_anp' => 'string',
        'p_glp' => 'float',
        'p_gnn' => 'float',
        'p_gni' => 'float',
        'v_part' => 'float',
        'codif' => 'string',
        'q_temp' => 'float',
        'uf_cons' => 'string',
        'cide' => '\NuvemFiscal\Model\NfeSefazCIDE',
        'encerrante' => '\NuvemFiscal\Model\NfeSefazEncerrante',
        'p_bio' => 'float',
        'orig_comb' => '\NuvemFiscal\Model\NfeSefazOrigComb[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'c_prod_anp' => null,
        'desc_anp' => null,
        'p_glp' => null,
        'p_gnn' => null,
        'p_gni' => null,
        'v_part' => null,
        'codif' => null,
        'q_temp' => null,
        'uf_cons' => null,
        'cide' => null,
        'encerrante' => null,
        'p_bio' => null,
        'orig_comb' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'c_prod_anp' => true,
        'desc_anp' => true,
        'p_glp' => true,
        'p_gnn' => true,
        'p_gni' => true,
        'v_part' => true,
        'codif' => true,
        'q_temp' => true,
        'uf_cons' => true,
        'cide' => false,
        'encerrante' => false,
        'p_bio' => true,
        'orig_comb' => false
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
        'c_prod_anp' => 'cProdANP',
        'desc_anp' => 'descANP',
        'p_glp' => 'pGLP',
        'p_gnn' => 'pGNn',
        'p_gni' => 'pGNi',
        'v_part' => 'vPart',
        'codif' => 'CODIF',
        'q_temp' => 'qTemp',
        'uf_cons' => 'UFCons',
        'cide' => 'CIDE',
        'encerrante' => 'encerrante',
        'p_bio' => 'pBio',
        'orig_comb' => 'origComb'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'c_prod_anp' => 'setCProdAnp',
        'desc_anp' => 'setDescAnp',
        'p_glp' => 'setPGlp',
        'p_gnn' => 'setPGnn',
        'p_gni' => 'setPGni',
        'v_part' => 'setVPart',
        'codif' => 'setCodif',
        'q_temp' => 'setQTemp',
        'uf_cons' => 'setUfCons',
        'cide' => 'setCide',
        'encerrante' => 'setEncerrante',
        'p_bio' => 'setPBio',
        'orig_comb' => 'setOrigComb'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'c_prod_anp' => 'getCProdAnp',
        'desc_anp' => 'getDescAnp',
        'p_glp' => 'getPGlp',
        'p_gnn' => 'getPGnn',
        'p_gni' => 'getPGni',
        'v_part' => 'getVPart',
        'codif' => 'getCodif',
        'q_temp' => 'getQTemp',
        'uf_cons' => 'getUfCons',
        'cide' => 'getCide',
        'encerrante' => 'getEncerrante',
        'p_bio' => 'getPBio',
        'orig_comb' => 'getOrigComb'
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
        $this->setIfExists('c_prod_anp', $data ?? [], null);
        $this->setIfExists('desc_anp', $data ?? [], null);
        $this->setIfExists('p_glp', $data ?? [], null);
        $this->setIfExists('p_gnn', $data ?? [], null);
        $this->setIfExists('p_gni', $data ?? [], null);
        $this->setIfExists('v_part', $data ?? [], null);
        $this->setIfExists('codif', $data ?? [], null);
        $this->setIfExists('q_temp', $data ?? [], null);
        $this->setIfExists('uf_cons', $data ?? [], null);
        $this->setIfExists('cide', $data ?? [], null);
        $this->setIfExists('encerrante', $data ?? [], null);
        $this->setIfExists('p_bio', $data ?? [], null);
        $this->setIfExists('orig_comb', $data ?? [], null);
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

        if ($this->container['c_prod_anp'] === null) {
            $invalidProperties[] = "'c_prod_anp' can't be null";
        }
        if (($this->container['c_prod_anp'] > 999999999)) {
            $invalidProperties[] = "invalid value for 'c_prod_anp', must be smaller than or equal to 999999999.";
        }

        if (($this->container['c_prod_anp'] < 0)) {
            $invalidProperties[] = "invalid value for 'c_prod_anp', must be bigger than or equal to 0.";
        }

        if ($this->container['desc_anp'] === null) {
            $invalidProperties[] = "'desc_anp' can't be null";
        }
        if ((mb_strlen($this->container['desc_anp']) > 95)) {
            $invalidProperties[] = "invalid value for 'desc_anp', the character length must be smaller than or equal to 95.";
        }

        if ((mb_strlen($this->container['desc_anp']) < 2)) {
            $invalidProperties[] = "invalid value for 'desc_anp', the character length must be bigger than or equal to 2.";
        }

        if (!is_null($this->container['p_glp']) && ($this->container['p_glp'] > 1E+2)) {
            $invalidProperties[] = "invalid value for 'p_glp', must be smaller than or equal to 1E+2.";
        }

        if (!is_null($this->container['p_glp']) && ($this->container['p_glp'] < 0)) {
            $invalidProperties[] = "invalid value for 'p_glp', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['p_gnn']) && ($this->container['p_gnn'] > 1E+2)) {
            $invalidProperties[] = "invalid value for 'p_gnn', must be smaller than or equal to 1E+2.";
        }

        if (!is_null($this->container['p_gnn']) && ($this->container['p_gnn'] < 0)) {
            $invalidProperties[] = "invalid value for 'p_gnn', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['p_gni']) && ($this->container['p_gni'] > 1E+2)) {
            $invalidProperties[] = "invalid value for 'p_gni', must be smaller than or equal to 1E+2.";
        }

        if (!is_null($this->container['p_gni']) && ($this->container['p_gni'] < 0)) {
            $invalidProperties[] = "invalid value for 'p_gni', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['v_part']) && ($this->container['v_part'] < 0)) {
            $invalidProperties[] = "invalid value for 'v_part', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['q_temp']) && ($this->container['q_temp'] < 0)) {
            $invalidProperties[] = "invalid value for 'q_temp', must be bigger than or equal to 0.";
        }

        if ($this->container['uf_cons'] === null) {
            $invalidProperties[] = "'uf_cons' can't be null";
        }
        if (!is_null($this->container['p_bio']) && ($this->container['p_bio'] > 1E+2)) {
            $invalidProperties[] = "invalid value for 'p_bio', must be smaller than or equal to 1E+2.";
        }

        if (!is_null($this->container['p_bio']) && ($this->container['p_bio'] <= 0)) {
            $invalidProperties[] = "invalid value for 'p_bio', must be bigger than 0.";
        }

        if (!is_null($this->container['orig_comb']) && (count($this->container['orig_comb']) > 30)) {
            $invalidProperties[] = "invalid value for 'orig_comb', number of items must be less than or equal to 30.";
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
     * Gets c_prod_anp
     *
     * @return int
     */
    public function getCProdAnp()
    {
        return $this->container['c_prod_anp'];
    }

    /**
     * Sets c_prod_anp
     *
     * @param int $c_prod_anp Código de produto da ANP. codificação de produtos do SIMP (http://www.anp.gov.br).
     *
     * @return self
     */
    public function setCProdAnp($c_prod_anp)
    {
        if (is_null($c_prod_anp)) {
            array_push($this->openAPINullablesSetToNull, 'c_prod_anp');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('c_prod_anp', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($c_prod_anp) && ($c_prod_anp > 999999999)) {
            throw new \InvalidArgumentException('invalid value for $c_prod_anp when calling NfeSefazComb., must be smaller than or equal to 999999999.');
        }
        if (!is_null($c_prod_anp) && ($c_prod_anp < 0)) {
            throw new \InvalidArgumentException('invalid value for $c_prod_anp when calling NfeSefazComb., must be bigger than or equal to 0.');
        }

        $this->container['c_prod_anp'] = $c_prod_anp;

        return $this;
    }

    /**
     * Gets desc_anp
     *
     * @return string
     */
    public function getDescAnp()
    {
        return $this->container['desc_anp'];
    }

    /**
     * Sets desc_anp
     *
     * @param string $desc_anp Descrição do Produto conforme ANP. Utilizar a descrição de produtos do Sistema de Informações de Movimentação de Produtos - SIMP (http://www.anp.gov.br/simp/).
     *
     * @return self
     */
    public function setDescAnp($desc_anp)
    {
        if (is_null($desc_anp)) {
            array_push($this->openAPINullablesSetToNull, 'desc_anp');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('desc_anp', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($desc_anp) && (mb_strlen($desc_anp) > 95)) {
            throw new \InvalidArgumentException('invalid length for $desc_anp when calling NfeSefazComb., must be smaller than or equal to 95.');
        }
        if (!is_null($desc_anp) && (mb_strlen($desc_anp) < 2)) {
            throw new \InvalidArgumentException('invalid length for $desc_anp when calling NfeSefazComb., must be bigger than or equal to 2.');
        }

        $this->container['desc_anp'] = $desc_anp;

        return $this;
    }

    /**
     * Gets p_glp
     *
     * @return float|null
     */
    public function getPGlp()
    {
        return $this->container['p_glp'];
    }

    /**
     * Sets p_glp
     *
     * @param float|null $p_glp Percentual do GLP derivado do petróleo no produto GLP (cProdANP=210203001). Informar em número decimal o percentual do GLP derivado de petróleo no produto GLP. Valores 0 a 100.
     *
     * @return self
     */
    public function setPGlp($p_glp)
    {
        if (is_null($p_glp)) {
            array_push($this->openAPINullablesSetToNull, 'p_glp');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('p_glp', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($p_glp) && ($p_glp > 1E+2)) {
            throw new \InvalidArgumentException('invalid value for $p_glp when calling NfeSefazComb., must be smaller than or equal to 1E+2.');
        }
        if (!is_null($p_glp) && ($p_glp < 0)) {
            throw new \InvalidArgumentException('invalid value for $p_glp when calling NfeSefazComb., must be bigger than or equal to 0.');
        }

        $this->container['p_glp'] = $p_glp;

        return $this;
    }

    /**
     * Gets p_gnn
     *
     * @return float|null
     */
    public function getPGnn()
    {
        return $this->container['p_gnn'];
    }

    /**
     * Sets p_gnn
     *
     * @param float|null $p_gnn Percentual de gás natural nacional - GLGNn para o produto GLP (cProdANP=210203001). Informar em número decimal o percentual do Gás Natural Nacional - GLGNn para o produto GLP. Valores de 0 a 100.
     *
     * @return self
     */
    public function setPGnn($p_gnn)
    {
        if (is_null($p_gnn)) {
            array_push($this->openAPINullablesSetToNull, 'p_gnn');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('p_gnn', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($p_gnn) && ($p_gnn > 1E+2)) {
            throw new \InvalidArgumentException('invalid value for $p_gnn when calling NfeSefazComb., must be smaller than or equal to 1E+2.');
        }
        if (!is_null($p_gnn) && ($p_gnn < 0)) {
            throw new \InvalidArgumentException('invalid value for $p_gnn when calling NfeSefazComb., must be bigger than or equal to 0.');
        }

        $this->container['p_gnn'] = $p_gnn;

        return $this;
    }

    /**
     * Gets p_gni
     *
     * @return float|null
     */
    public function getPGni()
    {
        return $this->container['p_gni'];
    }

    /**
     * Sets p_gni
     *
     * @param float|null $p_gni Percentual de gás natural importado GLGNi para o produto GLP (cProdANP=210203001). Informar em número deciaml o percentual do Gás Natural Importado - GLGNi para o produto GLP. Valores de 0 a 100.
     *
     * @return self
     */
    public function setPGni($p_gni)
    {
        if (is_null($p_gni)) {
            array_push($this->openAPINullablesSetToNull, 'p_gni');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('p_gni', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($p_gni) && ($p_gni > 1E+2)) {
            throw new \InvalidArgumentException('invalid value for $p_gni when calling NfeSefazComb., must be smaller than or equal to 1E+2.');
        }
        if (!is_null($p_gni) && ($p_gni < 0)) {
            throw new \InvalidArgumentException('invalid value for $p_gni when calling NfeSefazComb., must be bigger than or equal to 0.');
        }

        $this->container['p_gni'] = $p_gni;

        return $this;
    }

    /**
     * Gets v_part
     *
     * @return float|null
     */
    public function getVPart()
    {
        return $this->container['v_part'];
    }

    /**
     * Sets v_part
     *
     * @param float|null $v_part Valor de partida (cProdANP=210203001). Deve ser informado neste campo o valor por quilograma sem ICMS.
     *
     * @return self
     */
    public function setVPart($v_part)
    {
        if (is_null($v_part)) {
            array_push($this->openAPINullablesSetToNull, 'v_part');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('v_part', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($v_part) && ($v_part < 0)) {
            throw new \InvalidArgumentException('invalid value for $v_part when calling NfeSefazComb., must be bigger than or equal to 0.');
        }

        $this->container['v_part'] = $v_part;

        return $this;
    }

    /**
     * Gets codif
     *
     * @return string|null
     */
    public function getCodif()
    {
        return $this->container['codif'];
    }

    /**
     * Sets codif
     *
     * @param string|null $codif Código de autorização / registro do CODIF. Informar apenas quando a UF utilizar o CODIF (Sistema de Controle do    Diferimento do Imposto nas Operações com AEAC - Álcool Etílico Anidro Combustível).
     *
     * @return self
     */
    public function setCodif($codif)
    {
        if (is_null($codif)) {
            array_push($this->openAPINullablesSetToNull, 'codif');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('codif', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['codif'] = $codif;

        return $this;
    }

    /**
     * Gets q_temp
     *
     * @return float|null
     */
    public function getQTemp()
    {
        return $this->container['q_temp'];
    }

    /**
     * Sets q_temp
     *
     * @param float|null $q_temp Quantidade de combustível  faturada à temperatura ambiente.  Informar quando a quantidade  faturada informada no campo  qCom (I10) tiver sido ajustada para  uma temperatura diferente da  ambiente.
     *
     * @return self
     */
    public function setQTemp($q_temp)
    {
        if (is_null($q_temp)) {
            array_push($this->openAPINullablesSetToNull, 'q_temp');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('q_temp', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($q_temp) && ($q_temp < 0)) {
            throw new \InvalidArgumentException('invalid value for $q_temp when calling NfeSefazComb., must be bigger than or equal to 0.');
        }

        $this->container['q_temp'] = $q_temp;

        return $this;
    }

    /**
     * Gets uf_cons
     *
     * @return string
     */
    public function getUfCons()
    {
        return $this->container['uf_cons'];
    }

    /**
     * Sets uf_cons
     *
     * @param string $uf_cons Sigla da UF de Consumo.
     *
     * @return self
     */
    public function setUfCons($uf_cons)
    {
        if (is_null($uf_cons)) {
            array_push($this->openAPINullablesSetToNull, 'uf_cons');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('uf_cons', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['uf_cons'] = $uf_cons;

        return $this;
    }

    /**
     * Gets cide
     *
     * @return \NuvemFiscal\Model\NfeSefazCIDE|null
     */
    public function getCide()
    {
        return $this->container['cide'];
    }

    /**
     * Sets cide
     *
     * @param \NuvemFiscal\Model\NfeSefazCIDE|null $cide cide
     *
     * @return self
     */
    public function setCide($cide)
    {
        if (is_null($cide)) {
            throw new \InvalidArgumentException('non-nullable cide cannot be null');
        }
        $this->container['cide'] = $cide;

        return $this;
    }

    /**
     * Gets encerrante
     *
     * @return \NuvemFiscal\Model\NfeSefazEncerrante|null
     */
    public function getEncerrante()
    {
        return $this->container['encerrante'];
    }

    /**
     * Sets encerrante
     *
     * @param \NuvemFiscal\Model\NfeSefazEncerrante|null $encerrante encerrante
     *
     * @return self
     */
    public function setEncerrante($encerrante)
    {
        if (is_null($encerrante)) {
            throw new \InvalidArgumentException('non-nullable encerrante cannot be null');
        }
        $this->container['encerrante'] = $encerrante;

        return $this;
    }

    /**
     * Gets p_bio
     *
     * @return float|null
     */
    public function getPBio()
    {
        return $this->container['p_bio'];
    }

    /**
     * Sets p_bio
     *
     * @param float|null $p_bio Percentual do índice de mistura do Biodiesel (B100) no Óleo Diesel B instituído pelo órgão regulamentador.
     *
     * @return self
     */
    public function setPBio($p_bio)
    {
        if (is_null($p_bio)) {
            array_push($this->openAPINullablesSetToNull, 'p_bio');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('p_bio', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($p_bio) && ($p_bio > 1E+2)) {
            throw new \InvalidArgumentException('invalid value for $p_bio when calling NfeSefazComb., must be smaller than or equal to 1E+2.');
        }
        if (!is_null($p_bio) && ($p_bio <= 0)) {
            throw new \InvalidArgumentException('invalid value for $p_bio when calling NfeSefazComb., must be bigger than 0.');
        }

        $this->container['p_bio'] = $p_bio;

        return $this;
    }

    /**
     * Gets orig_comb
     *
     * @return \NuvemFiscal\Model\NfeSefazOrigComb[]|null
     */
    public function getOrigComb()
    {
        return $this->container['orig_comb'];
    }

    /**
     * Sets orig_comb
     *
     * @param \NuvemFiscal\Model\NfeSefazOrigComb[]|null $orig_comb orig_comb
     *
     * @return self
     */
    public function setOrigComb($orig_comb)
    {
        if (is_null($orig_comb)) {
            throw new \InvalidArgumentException('non-nullable orig_comb cannot be null');
        }

        if ((count($orig_comb) > 30)) {
            throw new \InvalidArgumentException('invalid value for $orig_comb when calling NfeSefazComb., number of items must be less than or equal to 30.');
        }
        $this->container['orig_comb'] = $orig_comb;

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


