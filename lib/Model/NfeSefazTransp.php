<?php
/**
 * NfeSefazTransp
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
 * NfeSefazTransp Class Doc Comment
 *
 * @category Class
 * @description Dados dos transportes da NF-e.
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class NfeSefazTransp implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NfeSefazTransp';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'mod_frete' => 'int',
        'transporta' => '\NuvemFiscal\Model\NfeSefazTransporta',
        'ret_transp' => '\NuvemFiscal\Model\NfeSefazRetTransp',
        'veic_transp' => '\NuvemFiscal\Model\NfeSefazVeiculo',
        'reboque' => '\NuvemFiscal\Model\NfeSefazVeiculo[]',
        'vagao' => 'string',
        'balsa' => 'string',
        'vol' => '\NuvemFiscal\Model\NfeSefazVol[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'mod_frete' => null,
        'transporta' => null,
        'ret_transp' => null,
        'veic_transp' => null,
        'reboque' => null,
        'vagao' => null,
        'balsa' => null,
        'vol' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'mod_frete' => false,
		'transporta' => false,
		'ret_transp' => false,
		'veic_transp' => false,
		'reboque' => false,
		'vagao' => false,
		'balsa' => false,
		'vol' => false
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
        'mod_frete' => 'modFrete',
        'transporta' => 'transporta',
        'ret_transp' => 'retTransp',
        'veic_transp' => 'veicTransp',
        'reboque' => 'reboque',
        'vagao' => 'vagao',
        'balsa' => 'balsa',
        'vol' => 'vol'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'mod_frete' => 'setModFrete',
        'transporta' => 'setTransporta',
        'ret_transp' => 'setRetTransp',
        'veic_transp' => 'setVeicTransp',
        'reboque' => 'setReboque',
        'vagao' => 'setVagao',
        'balsa' => 'setBalsa',
        'vol' => 'setVol'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'mod_frete' => 'getModFrete',
        'transporta' => 'getTransporta',
        'ret_transp' => 'getRetTransp',
        'veic_transp' => 'getVeicTransp',
        'reboque' => 'getReboque',
        'vagao' => 'getVagao',
        'balsa' => 'getBalsa',
        'vol' => 'getVol'
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
        $this->setIfExists('mod_frete', $data ?? [], null);
        $this->setIfExists('transporta', $data ?? [], null);
        $this->setIfExists('ret_transp', $data ?? [], null);
        $this->setIfExists('veic_transp', $data ?? [], null);
        $this->setIfExists('reboque', $data ?? [], null);
        $this->setIfExists('vagao', $data ?? [], null);
        $this->setIfExists('balsa', $data ?? [], null);
        $this->setIfExists('vol', $data ?? [], null);
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

        if ($this->container['mod_frete'] === null) {
            $invalidProperties[] = "'mod_frete' can't be null";
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
     * Gets mod_frete
     *
     * @return int
     */
    public function getModFrete()
    {
        return $this->container['mod_frete'];
    }

    /**
     * Sets mod_frete
     *
     * @param int $mod_frete Modalidade do frete  * 0 - Contratação do Frete por conta do Remetente (CIF)  * 1 - Contratação do Frete por conta do destinatário/remetente (FOB)  * 2 - Contratação do Frete por conta de terceiros  * 3 - Transporte próprio por conta do remetente  * 4 - Transporte próprio por conta do destinatário  * 9 - Sem Ocorrência de transporte
     *
     * @return self
     */
    public function setModFrete($mod_frete)
    {

        if (is_null($mod_frete)) {
            throw new \InvalidArgumentException('non-nullable mod_frete cannot be null');
        }

        $this->container['mod_frete'] = $mod_frete;

        return $this;
    }

    /**
     * Gets transporta
     *
     * @return \NuvemFiscal\Model\NfeSefazTransporta|null
     */
    public function getTransporta()
    {
        return $this->container['transporta'];
    }

    /**
     * Sets transporta
     *
     * @param \NuvemFiscal\Model\NfeSefazTransporta|null $transporta transporta
     *
     * @return self
     */
    public function setTransporta($transporta)
    {

        if (is_null($transporta)) {
            throw new \InvalidArgumentException('non-nullable transporta cannot be null');
        }

        $this->container['transporta'] = $transporta;

        return $this;
    }

    /**
     * Gets ret_transp
     *
     * @return \NuvemFiscal\Model\NfeSefazRetTransp|null
     */
    public function getRetTransp()
    {
        return $this->container['ret_transp'];
    }

    /**
     * Sets ret_transp
     *
     * @param \NuvemFiscal\Model\NfeSefazRetTransp|null $ret_transp ret_transp
     *
     * @return self
     */
    public function setRetTransp($ret_transp)
    {

        if (is_null($ret_transp)) {
            throw new \InvalidArgumentException('non-nullable ret_transp cannot be null');
        }

        $this->container['ret_transp'] = $ret_transp;

        return $this;
    }

    /**
     * Gets veic_transp
     *
     * @return \NuvemFiscal\Model\NfeSefazVeiculo|null
     */
    public function getVeicTransp()
    {
        return $this->container['veic_transp'];
    }

    /**
     * Sets veic_transp
     *
     * @param \NuvemFiscal\Model\NfeSefazVeiculo|null $veic_transp veic_transp
     *
     * @return self
     */
    public function setVeicTransp($veic_transp)
    {

        if (is_null($veic_transp)) {
            throw new \InvalidArgumentException('non-nullable veic_transp cannot be null');
        }

        $this->container['veic_transp'] = $veic_transp;

        return $this;
    }

    /**
     * Gets reboque
     *
     * @return \NuvemFiscal\Model\NfeSefazVeiculo[]|null
     */
    public function getReboque()
    {
        return $this->container['reboque'];
    }

    /**
     * Sets reboque
     *
     * @param \NuvemFiscal\Model\NfeSefazVeiculo[]|null $reboque reboque
     *
     * @return self
     */
    public function setReboque($reboque)
    {

        if (is_null($reboque)) {
            throw new \InvalidArgumentException('non-nullable reboque cannot be null');
        }

        $this->container['reboque'] = $reboque;

        return $this;
    }

    /**
     * Gets vagao
     *
     * @return string|null
     */
    public function getVagao()
    {
        return $this->container['vagao'];
    }

    /**
     * Sets vagao
     *
     * @param string|null $vagao Identificação do vagão (v2.0).
     *
     * @return self
     */
    public function setVagao($vagao)
    {

        if (is_null($vagao)) {
            throw new \InvalidArgumentException('non-nullable vagao cannot be null');
        }

        $this->container['vagao'] = $vagao;

        return $this;
    }

    /**
     * Gets balsa
     *
     * @return string|null
     */
    public function getBalsa()
    {
        return $this->container['balsa'];
    }

    /**
     * Sets balsa
     *
     * @param string|null $balsa Identificação da balsa (v2.0).
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
     * Gets vol
     *
     * @return \NuvemFiscal\Model\NfeSefazVol[]|null
     */
    public function getVol()
    {
        return $this->container['vol'];
    }

    /**
     * Sets vol
     *
     * @param \NuvemFiscal\Model\NfeSefazVol[]|null $vol vol
     *
     * @return self
     */
    public function setVol($vol)
    {

        if (is_null($vol)) {
            throw new \InvalidArgumentException('non-nullable vol cannot be null');
        }

        $this->container['vol'] = $vol;

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


