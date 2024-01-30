<?php
/**
 * NfcomSefazProd
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
 * NfcomSefazProd Class Doc Comment
 *
 * @category Class
 * @description Dados do Produto ou Serviço.
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class NfcomSefazProd implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NfcomSefazProd';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'c_prod' => 'string',
        'x_prod' => 'string',
        'c_class' => 'string',
        'cfop' => 'string',
        'cnpjld' => 'string',
        'u_med' => 'int',
        'q_faturada' => 'float',
        'v_item' => 'float',
        'v_desc' => 'float',
        'v_outro' => 'float',
        'v_prod' => 'float',
        'd_expiracao' => '\DateTime',
        'ind_devolucao' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'c_prod' => null,
        'x_prod' => null,
        'c_class' => null,
        'cfop' => null,
        'cnpjld' => null,
        'u_med' => null,
        'q_faturada' => null,
        'v_item' => null,
        'v_desc' => null,
        'v_outro' => null,
        'v_prod' => null,
        'd_expiracao' => 'date',
        'ind_devolucao' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'c_prod' => true,
        'x_prod' => true,
        'c_class' => true,
        'cfop' => true,
        'cnpjld' => true,
        'u_med' => true,
        'q_faturada' => true,
        'v_item' => true,
        'v_desc' => true,
        'v_outro' => true,
        'v_prod' => true,
        'd_expiracao' => true,
        'ind_devolucao' => true
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
        'c_prod' => 'cProd',
        'x_prod' => 'xProd',
        'c_class' => 'cClass',
        'cfop' => 'CFOP',
        'cnpjld' => 'CNPJLD',
        'u_med' => 'uMed',
        'q_faturada' => 'qFaturada',
        'v_item' => 'vItem',
        'v_desc' => 'vDesc',
        'v_outro' => 'vOutro',
        'v_prod' => 'vProd',
        'd_expiracao' => 'dExpiracao',
        'ind_devolucao' => 'indDevolucao'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'c_prod' => 'setCProd',
        'x_prod' => 'setXProd',
        'c_class' => 'setCClass',
        'cfop' => 'setCfop',
        'cnpjld' => 'setCnpjld',
        'u_med' => 'setUMed',
        'q_faturada' => 'setQFaturada',
        'v_item' => 'setVItem',
        'v_desc' => 'setVDesc',
        'v_outro' => 'setVOutro',
        'v_prod' => 'setVProd',
        'd_expiracao' => 'setDExpiracao',
        'ind_devolucao' => 'setIndDevolucao'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'c_prod' => 'getCProd',
        'x_prod' => 'getXProd',
        'c_class' => 'getCClass',
        'cfop' => 'getCfop',
        'cnpjld' => 'getCnpjld',
        'u_med' => 'getUMed',
        'q_faturada' => 'getQFaturada',
        'v_item' => 'getVItem',
        'v_desc' => 'getVDesc',
        'v_outro' => 'getVOutro',
        'v_prod' => 'getVProd',
        'd_expiracao' => 'getDExpiracao',
        'ind_devolucao' => 'getIndDevolucao'
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
        $this->setIfExists('c_prod', $data ?? [], null);
        $this->setIfExists('x_prod', $data ?? [], null);
        $this->setIfExists('c_class', $data ?? [], null);
        $this->setIfExists('cfop', $data ?? [], null);
        $this->setIfExists('cnpjld', $data ?? [], null);
        $this->setIfExists('u_med', $data ?? [], null);
        $this->setIfExists('q_faturada', $data ?? [], null);
        $this->setIfExists('v_item', $data ?? [], null);
        $this->setIfExists('v_desc', $data ?? [], null);
        $this->setIfExists('v_outro', $data ?? [], null);
        $this->setIfExists('v_prod', $data ?? [], null);
        $this->setIfExists('d_expiracao', $data ?? [], null);
        $this->setIfExists('ind_devolucao', $data ?? [], null);
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

        if ($this->container['c_prod'] === null) {
            $invalidProperties[] = "'c_prod' can't be null";
        }
        if ((mb_strlen($this->container['c_prod']) > 60)) {
            $invalidProperties[] = "invalid value for 'c_prod', the character length must be smaller than or equal to 60.";
        }

        if ((mb_strlen($this->container['c_prod']) < 1)) {
            $invalidProperties[] = "invalid value for 'c_prod', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['x_prod'] === null) {
            $invalidProperties[] = "'x_prod' can't be null";
        }
        if ((mb_strlen($this->container['x_prod']) > 120)) {
            $invalidProperties[] = "invalid value for 'x_prod', the character length must be smaller than or equal to 120.";
        }

        if ((mb_strlen($this->container['x_prod']) < 1)) {
            $invalidProperties[] = "invalid value for 'x_prod', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['c_class'] === null) {
            $invalidProperties[] = "'c_class' can't be null";
        }
        if ((mb_strlen($this->container['c_class']) > 7)) {
            $invalidProperties[] = "invalid value for 'c_class', the character length must be smaller than or equal to 7.";
        }

        if ((mb_strlen($this->container['c_class']) < 7)) {
            $invalidProperties[] = "invalid value for 'c_class', the character length must be bigger than or equal to 7.";
        }

        if ($this->container['u_med'] === null) {
            $invalidProperties[] = "'u_med' can't be null";
        }
        if ($this->container['q_faturada'] === null) {
            $invalidProperties[] = "'q_faturada' can't be null";
        }
        if ($this->container['v_item'] === null) {
            $invalidProperties[] = "'v_item' can't be null";
        }
        if ($this->container['v_prod'] === null) {
            $invalidProperties[] = "'v_prod' can't be null";
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
     * Gets c_prod
     *
     * @return string
     */
    public function getCProd()
    {
        return $this->container['c_prod'];
    }

    /**
     * Sets c_prod
     *
     * @param string $c_prod Código do produto ou serviço.
     *
     * @return self
     */
    public function setCProd($c_prod)
    {
        if (is_null($c_prod)) {
            array_push($this->openAPINullablesSetToNull, 'c_prod');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('c_prod', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($c_prod) && (mb_strlen($c_prod) > 60)) {
            throw new \InvalidArgumentException('invalid length for $c_prod when calling NfcomSefazProd., must be smaller than or equal to 60.');
        }
        if (!is_null($c_prod) && (mb_strlen($c_prod) < 1)) {
            throw new \InvalidArgumentException('invalid length for $c_prod when calling NfcomSefazProd., must be bigger than or equal to 1.');
        }

        $this->container['c_prod'] = $c_prod;

        return $this;
    }

    /**
     * Gets x_prod
     *
     * @return string
     */
    public function getXProd()
    {
        return $this->container['x_prod'];
    }

    /**
     * Sets x_prod
     *
     * @param string $x_prod Descrição do produto ou serviço.
     *
     * @return self
     */
    public function setXProd($x_prod)
    {
        if (is_null($x_prod)) {
            array_push($this->openAPINullablesSetToNull, 'x_prod');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('x_prod', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($x_prod) && (mb_strlen($x_prod) > 120)) {
            throw new \InvalidArgumentException('invalid length for $x_prod when calling NfcomSefazProd., must be smaller than or equal to 120.');
        }
        if (!is_null($x_prod) && (mb_strlen($x_prod) < 1)) {
            throw new \InvalidArgumentException('invalid length for $x_prod when calling NfcomSefazProd., must be bigger than or equal to 1.');
        }

        $this->container['x_prod'] = $x_prod;

        return $this;
    }

    /**
     * Gets c_class
     *
     * @return string
     */
    public function getCClass()
    {
        return $this->container['c_class'];
    }

    /**
     * Sets c_class
     *
     * @param string $c_class Código de classificação.  Tabela de Classificação de Item da NFCom (validar por RV).
     *
     * @return self
     */
    public function setCClass($c_class)
    {
        if (is_null($c_class)) {
            array_push($this->openAPINullablesSetToNull, 'c_class');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('c_class', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($c_class) && (mb_strlen($c_class) > 7)) {
            throw new \InvalidArgumentException('invalid length for $c_class when calling NfcomSefazProd., must be smaller than or equal to 7.');
        }
        if (!is_null($c_class) && (mb_strlen($c_class) < 7)) {
            throw new \InvalidArgumentException('invalid length for $c_class when calling NfcomSefazProd., must be bigger than or equal to 7.');
        }

        $this->container['c_class'] = $c_class;

        return $this;
    }

    /**
     * Gets cfop
     *
     * @return string|null
     */
    public function getCfop()
    {
        return $this->container['cfop'];
    }

    /**
     * Sets cfop
     *
     * @param string|null $cfop CFOP.  Utilizar Tabela de CFOP.
     *
     * @return self
     */
    public function setCfop($cfop)
    {
        if (is_null($cfop)) {
            array_push($this->openAPINullablesSetToNull, 'cfop');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('cfop', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['cfop'] = $cfop;

        return $this;
    }

    /**
     * Gets cnpjld
     *
     * @return string|null
     */
    public function getCnpjld()
    {
        return $this->container['cnpjld'];
    }

    /**
     * Sets cnpjld
     *
     * @param string|null $cnpjld CNPJ da operadora LD.  Informar o CNPJ da operadora LD que irá lançar o item de cofaturamento em nota do tipo faturamento 2.
     *
     * @return self
     */
    public function setCnpjld($cnpjld)
    {
        if (is_null($cnpjld)) {
            array_push($this->openAPINullablesSetToNull, 'cnpjld');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('cnpjld', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['cnpjld'] = $cnpjld;

        return $this;
    }

    /**
     * Gets u_med
     *
     * @return int
     */
    public function getUMed()
    {
        return $this->container['u_med'];
    }

    /**
     * Sets u_med
     *
     * @param int $u_med Unidade Básica de Medida.  * 1 - Minuto  * 2 - MB  * 3 - GB  * 4 - UN
     *
     * @return self
     */
    public function setUMed($u_med)
    {
        if (is_null($u_med)) {
            array_push($this->openAPINullablesSetToNull, 'u_med');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('u_med', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['u_med'] = $u_med;

        return $this;
    }

    /**
     * Gets q_faturada
     *
     * @return float
     */
    public function getQFaturada()
    {
        return $this->container['q_faturada'];
    }

    /**
     * Sets q_faturada
     *
     * @param float $q_faturada Quantidade Faturada.  Informar a quantidade de comercialização do produto .
     *
     * @return self
     */
    public function setQFaturada($q_faturada)
    {
        if (is_null($q_faturada)) {
            array_push($this->openAPINullablesSetToNull, 'q_faturada');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('q_faturada', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['q_faturada'] = $q_faturada;

        return $this;
    }

    /**
     * Gets v_item
     *
     * @return float
     */
    public function getVItem()
    {
        return $this->container['v_item'];
    }

    /**
     * Sets v_item
     *
     * @param float $v_item Valor unitário do item.
     *
     * @return self
     */
    public function setVItem($v_item)
    {
        if (is_null($v_item)) {
            array_push($this->openAPINullablesSetToNull, 'v_item');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('v_item', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['v_item'] = $v_item;

        return $this;
    }

    /**
     * Gets v_desc
     *
     * @return float|null
     */
    public function getVDesc()
    {
        return $this->container['v_desc'];
    }

    /**
     * Sets v_desc
     *
     * @param float|null $v_desc Valor do Desconto.
     *
     * @return self
     */
    public function setVDesc($v_desc)
    {
        if (is_null($v_desc)) {
            array_push($this->openAPINullablesSetToNull, 'v_desc');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('v_desc', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['v_desc'] = $v_desc;

        return $this;
    }

    /**
     * Gets v_outro
     *
     * @return float|null
     */
    public function getVOutro()
    {
        return $this->container['v_outro'];
    }

    /**
     * Sets v_outro
     *
     * @param float|null $v_outro Outras despesas acessórias.
     *
     * @return self
     */
    public function setVOutro($v_outro)
    {
        if (is_null($v_outro)) {
            array_push($this->openAPINullablesSetToNull, 'v_outro');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('v_outro', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['v_outro'] = $v_outro;

        return $this;
    }

    /**
     * Gets v_prod
     *
     * @return float
     */
    public function getVProd()
    {
        return $this->container['v_prod'];
    }

    /**
     * Sets v_prod
     *
     * @param float $v_prod Valor total do item.
     *
     * @return self
     */
    public function setVProd($v_prod)
    {
        if (is_null($v_prod)) {
            array_push($this->openAPINullablesSetToNull, 'v_prod');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('v_prod', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['v_prod'] = $v_prod;

        return $this;
    }

    /**
     * Gets d_expiracao
     *
     * @return \DateTime|null
     */
    public function getDExpiracao()
    {
        return $this->container['d_expiracao'];
    }

    /**
     * Sets d_expiracao
     *
     * @param \DateTime|null $d_expiracao Data de expiração de crédito.  Formato AAAA-MM-DD.
     *
     * @return self
     */
    public function setDExpiracao($d_expiracao)
    {
        if (is_null($d_expiracao)) {
            array_push($this->openAPINullablesSetToNull, 'd_expiracao');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('d_expiracao', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['d_expiracao'] = $d_expiracao;

        return $this;
    }

    /**
     * Gets ind_devolucao
     *
     * @return int|null
     */
    public function getIndDevolucao()
    {
        return $this->container['ind_devolucao'];
    }

    /**
     * Sets ind_devolucao
     *
     * @param int|null $ind_devolucao Indicador de devolução do valor do item.  * 1 - Devolução do valor do item
     *
     * @return self
     */
    public function setIndDevolucao($ind_devolucao)
    {
        if (is_null($ind_devolucao)) {
            array_push($this->openAPINullablesSetToNull, 'ind_devolucao');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ind_devolucao', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ind_devolucao'] = $ind_devolucao;

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

