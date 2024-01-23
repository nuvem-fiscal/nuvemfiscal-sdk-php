<?php
/**
 * MdfeSefazAquav
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
 * MdfeSefazAquav Class Doc Comment
 *
 * @category Class
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class MdfeSefazAquav implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MdfeSefazAquav';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'irin' => 'string',
        'tp_emb' => 'string',
        'c_embar' => 'string',
        'x_embar' => 'string',
        'n_viag' => 'string',
        'c_prt_emb' => 'string',
        'c_prt_dest' => 'string',
        'prt_trans' => 'string',
        'tp_nav' => 'int',
        'inf_term_carreg' => '\NuvemFiscal\Model\MdfeSefazInfTermCarreg[]',
        'inf_term_descarreg' => '\NuvemFiscal\Model\MdfeSefazInfTermDescarreg[]',
        'inf_emb_comb' => '\NuvemFiscal\Model\MdfeSefazInfEmbComb[]',
        'inf_unid_carga_vazia' => '\NuvemFiscal\Model\MdfeSefazInfUnidCargaVazia[]',
        'inf_unid_transp_vazia' => '\NuvemFiscal\Model\MdfeSefazInfUnidTranspVazia[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'irin' => null,
        'tp_emb' => null,
        'c_embar' => null,
        'x_embar' => null,
        'n_viag' => null,
        'c_prt_emb' => null,
        'c_prt_dest' => null,
        'prt_trans' => null,
        'tp_nav' => null,
        'inf_term_carreg' => null,
        'inf_term_descarreg' => null,
        'inf_emb_comb' => null,
        'inf_unid_carga_vazia' => null,
        'inf_unid_transp_vazia' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'irin' => true,
        'tp_emb' => true,
        'c_embar' => true,
        'x_embar' => true,
        'n_viag' => true,
        'c_prt_emb' => true,
        'c_prt_dest' => true,
        'prt_trans' => true,
        'tp_nav' => true,
        'inf_term_carreg' => false,
        'inf_term_descarreg' => false,
        'inf_emb_comb' => false,
        'inf_unid_carga_vazia' => false,
        'inf_unid_transp_vazia' => false
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
        'irin' => 'irin',
        'tp_emb' => 'tpEmb',
        'c_embar' => 'cEmbar',
        'x_embar' => 'xEmbar',
        'n_viag' => 'nViag',
        'c_prt_emb' => 'cPrtEmb',
        'c_prt_dest' => 'cPrtDest',
        'prt_trans' => 'prtTrans',
        'tp_nav' => 'tpNav',
        'inf_term_carreg' => 'infTermCarreg',
        'inf_term_descarreg' => 'infTermDescarreg',
        'inf_emb_comb' => 'infEmbComb',
        'inf_unid_carga_vazia' => 'infUnidCargaVazia',
        'inf_unid_transp_vazia' => 'infUnidTranspVazia'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'irin' => 'setIrin',
        'tp_emb' => 'setTpEmb',
        'c_embar' => 'setCEmbar',
        'x_embar' => 'setXEmbar',
        'n_viag' => 'setNViag',
        'c_prt_emb' => 'setCPrtEmb',
        'c_prt_dest' => 'setCPrtDest',
        'prt_trans' => 'setPrtTrans',
        'tp_nav' => 'setTpNav',
        'inf_term_carreg' => 'setInfTermCarreg',
        'inf_term_descarreg' => 'setInfTermDescarreg',
        'inf_emb_comb' => 'setInfEmbComb',
        'inf_unid_carga_vazia' => 'setInfUnidCargaVazia',
        'inf_unid_transp_vazia' => 'setInfUnidTranspVazia'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'irin' => 'getIrin',
        'tp_emb' => 'getTpEmb',
        'c_embar' => 'getCEmbar',
        'x_embar' => 'getXEmbar',
        'n_viag' => 'getNViag',
        'c_prt_emb' => 'getCPrtEmb',
        'c_prt_dest' => 'getCPrtDest',
        'prt_trans' => 'getPrtTrans',
        'tp_nav' => 'getTpNav',
        'inf_term_carreg' => 'getInfTermCarreg',
        'inf_term_descarreg' => 'getInfTermDescarreg',
        'inf_emb_comb' => 'getInfEmbComb',
        'inf_unid_carga_vazia' => 'getInfUnidCargaVazia',
        'inf_unid_transp_vazia' => 'getInfUnidTranspVazia'
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
        $this->setIfExists('irin', $data ?? [], null);
        $this->setIfExists('tp_emb', $data ?? [], null);
        $this->setIfExists('c_embar', $data ?? [], null);
        $this->setIfExists('x_embar', $data ?? [], null);
        $this->setIfExists('n_viag', $data ?? [], null);
        $this->setIfExists('c_prt_emb', $data ?? [], null);
        $this->setIfExists('c_prt_dest', $data ?? [], null);
        $this->setIfExists('prt_trans', $data ?? [], null);
        $this->setIfExists('tp_nav', $data ?? [], null);
        $this->setIfExists('inf_term_carreg', $data ?? [], null);
        $this->setIfExists('inf_term_descarreg', $data ?? [], null);
        $this->setIfExists('inf_emb_comb', $data ?? [], null);
        $this->setIfExists('inf_unid_carga_vazia', $data ?? [], null);
        $this->setIfExists('inf_unid_transp_vazia', $data ?? [], null);
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

        if ($this->container['irin'] === null) {
            $invalidProperties[] = "'irin' can't be null";
        }
        if ((mb_strlen($this->container['irin']) > 10)) {
            $invalidProperties[] = "invalid value for 'irin', the character length must be smaller than or equal to 10.";
        }

        if ((mb_strlen($this->container['irin']) < 1)) {
            $invalidProperties[] = "invalid value for 'irin', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['tp_emb'] === null) {
            $invalidProperties[] = "'tp_emb' can't be null";
        }
        if ($this->container['c_embar'] === null) {
            $invalidProperties[] = "'c_embar' can't be null";
        }
        if ((mb_strlen($this->container['c_embar']) > 10)) {
            $invalidProperties[] = "invalid value for 'c_embar', the character length must be smaller than or equal to 10.";
        }

        if ((mb_strlen($this->container['c_embar']) < 1)) {
            $invalidProperties[] = "invalid value for 'c_embar', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['x_embar'] === null) {
            $invalidProperties[] = "'x_embar' can't be null";
        }
        if ((mb_strlen($this->container['x_embar']) > 60)) {
            $invalidProperties[] = "invalid value for 'x_embar', the character length must be smaller than or equal to 60.";
        }

        if ((mb_strlen($this->container['x_embar']) < 1)) {
            $invalidProperties[] = "invalid value for 'x_embar', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['n_viag'] === null) {
            $invalidProperties[] = "'n_viag' can't be null";
        }
        if ($this->container['c_prt_emb'] === null) {
            $invalidProperties[] = "'c_prt_emb' can't be null";
        }
        if ((mb_strlen($this->container['c_prt_emb']) > 5)) {
            $invalidProperties[] = "invalid value for 'c_prt_emb', the character length must be smaller than or equal to 5.";
        }

        if ((mb_strlen($this->container['c_prt_emb']) < 1)) {
            $invalidProperties[] = "invalid value for 'c_prt_emb', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['c_prt_dest'] === null) {
            $invalidProperties[] = "'c_prt_dest' can't be null";
        }
        if ((mb_strlen($this->container['c_prt_dest']) > 5)) {
            $invalidProperties[] = "invalid value for 'c_prt_dest', the character length must be smaller than or equal to 5.";
        }

        if ((mb_strlen($this->container['c_prt_dest']) < 1)) {
            $invalidProperties[] = "invalid value for 'c_prt_dest', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['prt_trans']) && (mb_strlen($this->container['prt_trans']) > 60)) {
            $invalidProperties[] = "invalid value for 'prt_trans', the character length must be smaller than or equal to 60.";
        }

        if (!is_null($this->container['prt_trans']) && (mb_strlen($this->container['prt_trans']) < 1)) {
            $invalidProperties[] = "invalid value for 'prt_trans', the character length must be bigger than or equal to 1.";
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
     * Gets irin
     *
     * @return string
     */
    public function getIrin()
    {
        return $this->container['irin'];
    }

    /**
     * Sets irin
     *
     * @param string $irin Irin do navio sempre deverá ser informado.
     *
     * @return self
     */
    public function setIrin($irin)
    {
        if (is_null($irin)) {
            array_push($this->openAPINullablesSetToNull, 'irin');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('irin', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($irin) && (mb_strlen($irin) > 10)) {
            throw new \InvalidArgumentException('invalid length for $irin when calling MdfeSefazAquav., must be smaller than or equal to 10.');
        }
        if (!is_null($irin) && (mb_strlen($irin) < 1)) {
            throw new \InvalidArgumentException('invalid length for $irin when calling MdfeSefazAquav., must be bigger than or equal to 1.');
        }

        $this->container['irin'] = $irin;

        return $this;
    }

    /**
     * Gets tp_emb
     *
     * @return string
     */
    public function getTpEmb()
    {
        return $this->container['tp_emb'];
    }

    /**
     * Sets tp_emb
     *
     * @param string $tp_emb Código do tipo de embarcação.  Preencher com código da Tabela de Tipo de Embarcação definida no Ministério dos Transportes.
     *
     * @return self
     */
    public function setTpEmb($tp_emb)
    {
        if (is_null($tp_emb)) {
            array_push($this->openAPINullablesSetToNull, 'tp_emb');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tp_emb', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['tp_emb'] = $tp_emb;

        return $this;
    }

    /**
     * Gets c_embar
     *
     * @return string
     */
    public function getCEmbar()
    {
        return $this->container['c_embar'];
    }

    /**
     * Sets c_embar
     *
     * @param string $c_embar Código da embarcação.
     *
     * @return self
     */
    public function setCEmbar($c_embar)
    {
        if (is_null($c_embar)) {
            array_push($this->openAPINullablesSetToNull, 'c_embar');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('c_embar', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($c_embar) && (mb_strlen($c_embar) > 10)) {
            throw new \InvalidArgumentException('invalid length for $c_embar when calling MdfeSefazAquav., must be smaller than or equal to 10.');
        }
        if (!is_null($c_embar) && (mb_strlen($c_embar) < 1)) {
            throw new \InvalidArgumentException('invalid length for $c_embar when calling MdfeSefazAquav., must be bigger than or equal to 1.');
        }

        $this->container['c_embar'] = $c_embar;

        return $this;
    }

    /**
     * Gets x_embar
     *
     * @return string
     */
    public function getXEmbar()
    {
        return $this->container['x_embar'];
    }

    /**
     * Sets x_embar
     *
     * @param string $x_embar Nome da embarcação.
     *
     * @return self
     */
    public function setXEmbar($x_embar)
    {
        if (is_null($x_embar)) {
            array_push($this->openAPINullablesSetToNull, 'x_embar');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('x_embar', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($x_embar) && (mb_strlen($x_embar) > 60)) {
            throw new \InvalidArgumentException('invalid length for $x_embar when calling MdfeSefazAquav., must be smaller than or equal to 60.');
        }
        if (!is_null($x_embar) && (mb_strlen($x_embar) < 1)) {
            throw new \InvalidArgumentException('invalid length for $x_embar when calling MdfeSefazAquav., must be bigger than or equal to 1.');
        }

        $this->container['x_embar'] = $x_embar;

        return $this;
    }

    /**
     * Gets n_viag
     *
     * @return string
     */
    public function getNViag()
    {
        return $this->container['n_viag'];
    }

    /**
     * Sets n_viag
     *
     * @param string $n_viag Número da Viagem.
     *
     * @return self
     */
    public function setNViag($n_viag)
    {
        if (is_null($n_viag)) {
            array_push($this->openAPINullablesSetToNull, 'n_viag');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('n_viag', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['n_viag'] = $n_viag;

        return $this;
    }

    /**
     * Gets c_prt_emb
     *
     * @return string
     */
    public function getCPrtEmb()
    {
        return $this->container['c_prt_emb'];
    }

    /**
     * Sets c_prt_emb
     *
     * @param string $c_prt_emb Código do Porto de Embarque.  Preencher de acordo com Tabela de Portos definida no Ministério dos Transportes.
     *
     * @return self
     */
    public function setCPrtEmb($c_prt_emb)
    {
        if (is_null($c_prt_emb)) {
            array_push($this->openAPINullablesSetToNull, 'c_prt_emb');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('c_prt_emb', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($c_prt_emb) && (mb_strlen($c_prt_emb) > 5)) {
            throw new \InvalidArgumentException('invalid length for $c_prt_emb when calling MdfeSefazAquav., must be smaller than or equal to 5.');
        }
        if (!is_null($c_prt_emb) && (mb_strlen($c_prt_emb) < 1)) {
            throw new \InvalidArgumentException('invalid length for $c_prt_emb when calling MdfeSefazAquav., must be bigger than or equal to 1.');
        }

        $this->container['c_prt_emb'] = $c_prt_emb;

        return $this;
    }

    /**
     * Gets c_prt_dest
     *
     * @return string
     */
    public function getCPrtDest()
    {
        return $this->container['c_prt_dest'];
    }

    /**
     * Sets c_prt_dest
     *
     * @param string $c_prt_dest Código do Porto de Destino.  Preencher de acordo com Tabela de Portos definida no Ministério dos Transportes.
     *
     * @return self
     */
    public function setCPrtDest($c_prt_dest)
    {
        if (is_null($c_prt_dest)) {
            array_push($this->openAPINullablesSetToNull, 'c_prt_dest');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('c_prt_dest', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($c_prt_dest) && (mb_strlen($c_prt_dest) > 5)) {
            throw new \InvalidArgumentException('invalid length for $c_prt_dest when calling MdfeSefazAquav., must be smaller than or equal to 5.');
        }
        if (!is_null($c_prt_dest) && (mb_strlen($c_prt_dest) < 1)) {
            throw new \InvalidArgumentException('invalid length for $c_prt_dest when calling MdfeSefazAquav., must be bigger than or equal to 1.');
        }

        $this->container['c_prt_dest'] = $c_prt_dest;

        return $this;
    }

    /**
     * Gets prt_trans
     *
     * @return string|null
     */
    public function getPrtTrans()
    {
        return $this->container['prt_trans'];
    }

    /**
     * Sets prt_trans
     *
     * @param string|null $prt_trans Porto de Transbordo.
     *
     * @return self
     */
    public function setPrtTrans($prt_trans)
    {
        if (is_null($prt_trans)) {
            array_push($this->openAPINullablesSetToNull, 'prt_trans');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('prt_trans', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($prt_trans) && (mb_strlen($prt_trans) > 60)) {
            throw new \InvalidArgumentException('invalid length for $prt_trans when calling MdfeSefazAquav., must be smaller than or equal to 60.');
        }
        if (!is_null($prt_trans) && (mb_strlen($prt_trans) < 1)) {
            throw new \InvalidArgumentException('invalid length for $prt_trans when calling MdfeSefazAquav., must be bigger than or equal to 1.');
        }

        $this->container['prt_trans'] = $prt_trans;

        return $this;
    }

    /**
     * Gets tp_nav
     *
     * @return int|null
     */
    public function getTpNav()
    {
        return $this->container['tp_nav'];
    }

    /**
     * Sets tp_nav
     *
     * @param int|null $tp_nav Tipo de Navegação.  Preencher com:  * 0 - Interior  * 1 - Cabotagem
     *
     * @return self
     */
    public function setTpNav($tp_nav)
    {
        if (is_null($tp_nav)) {
            array_push($this->openAPINullablesSetToNull, 'tp_nav');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tp_nav', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['tp_nav'] = $tp_nav;

        return $this;
    }

    /**
     * Gets inf_term_carreg
     *
     * @return \NuvemFiscal\Model\MdfeSefazInfTermCarreg[]|null
     */
    public function getInfTermCarreg()
    {
        return $this->container['inf_term_carreg'];
    }

    /**
     * Sets inf_term_carreg
     *
     * @param \NuvemFiscal\Model\MdfeSefazInfTermCarreg[]|null $inf_term_carreg inf_term_carreg
     *
     * @return self
     */
    public function setInfTermCarreg($inf_term_carreg)
    {
        if (is_null($inf_term_carreg)) {
            throw new \InvalidArgumentException('non-nullable inf_term_carreg cannot be null');
        }
        $this->container['inf_term_carreg'] = $inf_term_carreg;

        return $this;
    }

    /**
     * Gets inf_term_descarreg
     *
     * @return \NuvemFiscal\Model\MdfeSefazInfTermDescarreg[]|null
     */
    public function getInfTermDescarreg()
    {
        return $this->container['inf_term_descarreg'];
    }

    /**
     * Sets inf_term_descarreg
     *
     * @param \NuvemFiscal\Model\MdfeSefazInfTermDescarreg[]|null $inf_term_descarreg inf_term_descarreg
     *
     * @return self
     */
    public function setInfTermDescarreg($inf_term_descarreg)
    {
        if (is_null($inf_term_descarreg)) {
            throw new \InvalidArgumentException('non-nullable inf_term_descarreg cannot be null');
        }
        $this->container['inf_term_descarreg'] = $inf_term_descarreg;

        return $this;
    }

    /**
     * Gets inf_emb_comb
     *
     * @return \NuvemFiscal\Model\MdfeSefazInfEmbComb[]|null
     */
    public function getInfEmbComb()
    {
        return $this->container['inf_emb_comb'];
    }

    /**
     * Sets inf_emb_comb
     *
     * @param \NuvemFiscal\Model\MdfeSefazInfEmbComb[]|null $inf_emb_comb inf_emb_comb
     *
     * @return self
     */
    public function setInfEmbComb($inf_emb_comb)
    {
        if (is_null($inf_emb_comb)) {
            throw new \InvalidArgumentException('non-nullable inf_emb_comb cannot be null');
        }
        $this->container['inf_emb_comb'] = $inf_emb_comb;

        return $this;
    }

    /**
     * Gets inf_unid_carga_vazia
     *
     * @return \NuvemFiscal\Model\MdfeSefazInfUnidCargaVazia[]|null
     */
    public function getInfUnidCargaVazia()
    {
        return $this->container['inf_unid_carga_vazia'];
    }

    /**
     * Sets inf_unid_carga_vazia
     *
     * @param \NuvemFiscal\Model\MdfeSefazInfUnidCargaVazia[]|null $inf_unid_carga_vazia inf_unid_carga_vazia
     *
     * @return self
     */
    public function setInfUnidCargaVazia($inf_unid_carga_vazia)
    {
        if (is_null($inf_unid_carga_vazia)) {
            throw new \InvalidArgumentException('non-nullable inf_unid_carga_vazia cannot be null');
        }
        $this->container['inf_unid_carga_vazia'] = $inf_unid_carga_vazia;

        return $this;
    }

    /**
     * Gets inf_unid_transp_vazia
     *
     * @return \NuvemFiscal\Model\MdfeSefazInfUnidTranspVazia[]|null
     */
    public function getInfUnidTranspVazia()
    {
        return $this->container['inf_unid_transp_vazia'];
    }

    /**
     * Sets inf_unid_transp_vazia
     *
     * @param \NuvemFiscal\Model\MdfeSefazInfUnidTranspVazia[]|null $inf_unid_transp_vazia inf_unid_transp_vazia
     *
     * @return self
     */
    public function setInfUnidTranspVazia($inf_unid_transp_vazia)
    {
        if (is_null($inf_unid_transp_vazia)) {
            throw new \InvalidArgumentException('non-nullable inf_unid_transp_vazia cannot be null');
        }
        $this->container['inf_unid_transp_vazia'] = $inf_unid_transp_vazia;

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


