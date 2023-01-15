<?php
/**
 * CteSefazAquav
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
 * CteSefazAquav Class Doc Comment
 *
 * @category Class
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CteSefazAquav implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CteSefazAquav';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'v_prest' => 'float',
        'v_afrmm' => 'float',
        'x_navio' => 'string',
        'balsa' => '\NuvemFiscal\Model\CteSefazBalsa[]',
        'n_viag' => 'string',
        'direc' => 'string',
        'irin' => 'string',
        'det_cont' => '\NuvemFiscal\Model\CteSefazDetCont[]',
        'tp_nav' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'v_prest' => null,
        'v_afrmm' => null,
        'x_navio' => null,
        'balsa' => null,
        'n_viag' => null,
        'direc' => null,
        'irin' => null,
        'det_cont' => null,
        'tp_nav' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'v_prest' => false,
		'v_afrmm' => false,
		'x_navio' => false,
		'balsa' => false,
		'n_viag' => false,
		'direc' => false,
		'irin' => false,
		'det_cont' => false,
		'tp_nav' => false
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
        'v_prest' => 'vPrest',
        'v_afrmm' => 'vAFRMM',
        'x_navio' => 'xNavio',
        'balsa' => 'balsa',
        'n_viag' => 'nViag',
        'direc' => 'direc',
        'irin' => 'irin',
        'det_cont' => 'detCont',
        'tp_nav' => 'tpNav'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'v_prest' => 'setVPrest',
        'v_afrmm' => 'setVAfrmm',
        'x_navio' => 'setXNavio',
        'balsa' => 'setBalsa',
        'n_viag' => 'setNViag',
        'direc' => 'setDirec',
        'irin' => 'setIrin',
        'det_cont' => 'setDetCont',
        'tp_nav' => 'setTpNav'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'v_prest' => 'getVPrest',
        'v_afrmm' => 'getVAfrmm',
        'x_navio' => 'getXNavio',
        'balsa' => 'getBalsa',
        'n_viag' => 'getNViag',
        'direc' => 'getDirec',
        'irin' => 'getIrin',
        'det_cont' => 'getDetCont',
        'tp_nav' => 'getTpNav'
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
        $this->setIfExists('v_prest', $data ?? [], null);
        $this->setIfExists('v_afrmm', $data ?? [], null);
        $this->setIfExists('x_navio', $data ?? [], null);
        $this->setIfExists('balsa', $data ?? [], null);
        $this->setIfExists('n_viag', $data ?? [], null);
        $this->setIfExists('direc', $data ?? [], null);
        $this->setIfExists('irin', $data ?? [], null);
        $this->setIfExists('det_cont', $data ?? [], null);
        $this->setIfExists('tp_nav', $data ?? [], null);
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

        if ($this->container['v_prest'] === null) {
            $invalidProperties[] = "'v_prest' can't be null";
        }
        if ($this->container['v_afrmm'] === null) {
            $invalidProperties[] = "'v_afrmm' can't be null";
        }
        if ($this->container['x_navio'] === null) {
            $invalidProperties[] = "'x_navio' can't be null";
        }
        if ($this->container['direc'] === null) {
            $invalidProperties[] = "'direc' can't be null";
        }
        if ($this->container['irin'] === null) {
            $invalidProperties[] = "'irin' can't be null";
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
     * Gets v_prest
     *
     * @return float
     */
    public function getVPrest()
    {
        return $this->container['v_prest'];
    }

    /**
     * Sets v_prest
     *
     * @param float $v_prest Valor da Prestação Base de Cálculo do AFRMM.
     *
     * @return self
     */
    public function setVPrest($v_prest)
    {

        if (is_null($v_prest)) {
            throw new \InvalidArgumentException('non-nullable v_prest cannot be null');
        }

        $this->container['v_prest'] = $v_prest;

        return $this;
    }

    /**
     * Gets v_afrmm
     *
     * @return float
     */
    public function getVAfrmm()
    {
        return $this->container['v_afrmm'];
    }

    /**
     * Sets v_afrmm
     *
     * @param float $v_afrmm AFRMM (Adicional de Frete para Renovação da Marinha Mercante).
     *
     * @return self
     */
    public function setVAfrmm($v_afrmm)
    {

        if (is_null($v_afrmm)) {
            throw new \InvalidArgumentException('non-nullable v_afrmm cannot be null');
        }

        $this->container['v_afrmm'] = $v_afrmm;

        return $this;
    }

    /**
     * Gets x_navio
     *
     * @return string
     */
    public function getXNavio()
    {
        return $this->container['x_navio'];
    }

    /**
     * Sets x_navio
     *
     * @param string $x_navio Identificação do Navio.
     *
     * @return self
     */
    public function setXNavio($x_navio)
    {

        if (is_null($x_navio)) {
            throw new \InvalidArgumentException('non-nullable x_navio cannot be null');
        }

        $this->container['x_navio'] = $x_navio;

        return $this;
    }

    /**
     * Gets balsa
     *
     * @return \NuvemFiscal\Model\CteSefazBalsa[]|null
     */
    public function getBalsa()
    {
        return $this->container['balsa'];
    }

    /**
     * Sets balsa
     *
     * @param \NuvemFiscal\Model\CteSefazBalsa[]|null $balsa balsa
     *
     * @return self
     */
    public function setBalsa($balsa)
    {

        if (is_null($balsa)) {
            throw new \InvalidArgumentException('non-nullable balsa cannot be null');
        }

        $this->container['balsa'] = $balsa;

        return $this;
    }

    /**
     * Gets n_viag
     *
     * @return string|null
     */
    public function getNViag()
    {
        return $this->container['n_viag'];
    }

    /**
     * Sets n_viag
     *
     * @param string|null $n_viag Número da Viagem.
     *
     * @return self
     */
    public function setNViag($n_viag)
    {

        if (is_null($n_viag)) {
            throw new \InvalidArgumentException('non-nullable n_viag cannot be null');
        }

        $this->container['n_viag'] = $n_viag;

        return $this;
    }

    /**
     * Gets direc
     *
     * @return string
     */
    public function getDirec()
    {
        return $this->container['direc'];
    }

    /**
     * Sets direc
     *
     * @param string $direc Direção.  Preencher com: N-Norte, L-Leste, S-Sul, O-Oeste.
     *
     * @return self
     */
    public function setDirec($direc)
    {

        if (is_null($direc)) {
            throw new \InvalidArgumentException('non-nullable direc cannot be null');
        }

        $this->container['direc'] = $direc;

        return $this;
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
            throw new \InvalidArgumentException('non-nullable irin cannot be null');
        }

        $this->container['irin'] = $irin;

        return $this;
    }

    /**
     * Gets det_cont
     *
     * @return \NuvemFiscal\Model\CteSefazDetCont[]|null
     */
    public function getDetCont()
    {
        return $this->container['det_cont'];
    }

    /**
     * Sets det_cont
     *
     * @param \NuvemFiscal\Model\CteSefazDetCont[]|null $det_cont det_cont
     *
     * @return self
     */
    public function setDetCont($det_cont)
    {

        if (is_null($det_cont)) {
            throw new \InvalidArgumentException('non-nullable det_cont cannot be null');
        }

        $this->container['det_cont'] = $det_cont;

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
            throw new \InvalidArgumentException('non-nullable tp_nav cannot be null');
        }

        $this->container['tp_nav'] = $tp_nav;

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


