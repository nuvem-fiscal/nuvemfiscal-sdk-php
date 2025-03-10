<?php
/**
 * NfeSefazDetPag
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
 * NfeSefazDetPag Class Doc Comment
 *
 * @category Class
 * @description Grupo de detalhamento da forma de pagamento.
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class NfeSefazDetPag implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NfeSefazDetPag';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'ind_pag' => 'int',
        't_pag' => 'string',
        'x_pag' => 'string',
        'v_pag' => 'float',
        'd_pag' => '\DateTime',
        'cnpj_pag' => 'string',
        'uf_pag' => 'string',
        'card' => '\NuvemFiscal\Model\NfeSefazCard'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'ind_pag' => null,
        't_pag' => null,
        'x_pag' => null,
        'v_pag' => null,
        'd_pag' => 'date',
        'cnpj_pag' => null,
        'uf_pag' => null,
        'card' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'ind_pag' => true,
        't_pag' => true,
        'x_pag' => true,
        'v_pag' => true,
        'd_pag' => true,
        'cnpj_pag' => true,
        'uf_pag' => true,
        'card' => false
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
        'ind_pag' => 'indPag',
        't_pag' => 'tPag',
        'x_pag' => 'xPag',
        'v_pag' => 'vPag',
        'd_pag' => 'dPag',
        'cnpj_pag' => 'CNPJPag',
        'uf_pag' => 'UFPag',
        'card' => 'card'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ind_pag' => 'setIndPag',
        't_pag' => 'setTPag',
        'x_pag' => 'setXPag',
        'v_pag' => 'setVPag',
        'd_pag' => 'setDPag',
        'cnpj_pag' => 'setCnpjPag',
        'uf_pag' => 'setUfPag',
        'card' => 'setCard'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ind_pag' => 'getIndPag',
        't_pag' => 'getTPag',
        'x_pag' => 'getXPag',
        'v_pag' => 'getVPag',
        'd_pag' => 'getDPag',
        'cnpj_pag' => 'getCnpjPag',
        'uf_pag' => 'getUfPag',
        'card' => 'getCard'
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
        $this->setIfExists('ind_pag', $data ?? [], null);
        $this->setIfExists('t_pag', $data ?? [], null);
        $this->setIfExists('x_pag', $data ?? [], null);
        $this->setIfExists('v_pag', $data ?? [], null);
        $this->setIfExists('d_pag', $data ?? [], null);
        $this->setIfExists('cnpj_pag', $data ?? [], null);
        $this->setIfExists('uf_pag', $data ?? [], null);
        $this->setIfExists('card', $data ?? [], null);
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

        if ($this->container['t_pag'] === null) {
            $invalidProperties[] = "'t_pag' can't be null";
        }
        if (!is_null($this->container['x_pag']) && (mb_strlen($this->container['x_pag']) > 60)) {
            $invalidProperties[] = "invalid value for 'x_pag', the character length must be smaller than or equal to 60.";
        }

        if (!is_null($this->container['x_pag']) && (mb_strlen($this->container['x_pag']) < 2)) {
            $invalidProperties[] = "invalid value for 'x_pag', the character length must be bigger than or equal to 2.";
        }

        if ($this->container['v_pag'] === null) {
            $invalidProperties[] = "'v_pag' can't be null";
        }
        if (($this->container['v_pag'] < 0)) {
            $invalidProperties[] = "invalid value for 'v_pag', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['cnpj_pag']) && (mb_strlen($this->container['cnpj_pag']) > 14)) {
            $invalidProperties[] = "invalid value for 'cnpj_pag', the character length must be smaller than or equal to 14.";
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
     * Gets ind_pag
     *
     * @return int|null
     */
    public function getIndPag()
    {
        return $this->container['ind_pag'];
    }

    /**
     * Sets ind_pag
     *
     * @param int|null $ind_pag Indicador da Forma de Pagamento:0-Pagamento à Vista  * 1 - Pagamento à Prazo
     *
     * @return self
     */
    public function setIndPag($ind_pag)
    {
        if (is_null($ind_pag)) {
            array_push($this->openAPINullablesSetToNull, 'ind_pag');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ind_pag', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ind_pag'] = $ind_pag;

        return $this;
    }

    /**
     * Gets t_pag
     *
     * @return string
     */
    public function getTPag()
    {
        return $this->container['t_pag'];
    }

    /**
     * Sets t_pag
     *
     * @param string $t_pag Forma de Pagamento:.
     *
     * @return self
     */
    public function setTPag($t_pag)
    {
        if (is_null($t_pag)) {
            array_push($this->openAPINullablesSetToNull, 't_pag');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('t_pag', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['t_pag'] = $t_pag;

        return $this;
    }

    /**
     * Gets x_pag
     *
     * @return string|null
     */
    public function getXPag()
    {
        return $this->container['x_pag'];
    }

    /**
     * Sets x_pag
     *
     * @param string|null $x_pag Descrição do Meio de Pagamento.
     *
     * @return self
     */
    public function setXPag($x_pag)
    {
        if (is_null($x_pag)) {
            array_push($this->openAPINullablesSetToNull, 'x_pag');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('x_pag', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($x_pag) && (mb_strlen($x_pag) > 60)) {
            throw new \InvalidArgumentException('invalid length for $x_pag when calling NfeSefazDetPag., must be smaller than or equal to 60.');
        }
        if (!is_null($x_pag) && (mb_strlen($x_pag) < 2)) {
            throw new \InvalidArgumentException('invalid length for $x_pag when calling NfeSefazDetPag., must be bigger than or equal to 2.');
        }

        $this->container['x_pag'] = $x_pag;

        return $this;
    }

    /**
     * Gets v_pag
     *
     * @return float
     */
    public function getVPag()
    {
        return $this->container['v_pag'];
    }

    /**
     * Sets v_pag
     *
     * @param float $v_pag Valor do Pagamento. Esta tag poderá ser omitida quando a tag tPag=90 (Sem Pagamento), caso contrário deverá ser preenchida.
     *
     * @return self
     */
    public function setVPag($v_pag)
    {
        if (is_null($v_pag)) {
            array_push($this->openAPINullablesSetToNull, 'v_pag');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('v_pag', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($v_pag) && ($v_pag < 0)) {
            throw new \InvalidArgumentException('invalid value for $v_pag when calling NfeSefazDetPag., must be bigger than or equal to 0.');
        }

        $this->container['v_pag'] = $v_pag;

        return $this;
    }

    /**
     * Gets d_pag
     *
     * @return \DateTime|null
     */
    public function getDPag()
    {
        return $this->container['d_pag'];
    }

    /**
     * Sets d_pag
     *
     * @param \DateTime|null $d_pag Data do Pagamento.
     *
     * @return self
     */
    public function setDPag($d_pag)
    {
        if (is_null($d_pag)) {
            array_push($this->openAPINullablesSetToNull, 'd_pag');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('d_pag', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['d_pag'] = $d_pag;

        return $this;
    }

    /**
     * Gets cnpj_pag
     *
     * @return string|null
     */
    public function getCnpjPag()
    {
        return $this->container['cnpj_pag'];
    }

    /**
     * Sets cnpj_pag
     *
     * @param string|null $cnpj_pag CNPJ transacional do pagamento - Preencher informando o CNPJ do estabelecimento onde o pagamento foi processado/transacionado/recebido quando a emissão do documento fiscal ocorrer em estabelecimento distinto.
     *
     * @return self
     */
    public function setCnpjPag($cnpj_pag)
    {
        if (is_null($cnpj_pag)) {
            array_push($this->openAPINullablesSetToNull, 'cnpj_pag');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('cnpj_pag', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($cnpj_pag) && (mb_strlen($cnpj_pag) > 14)) {
            throw new \InvalidArgumentException('invalid length for $cnpj_pag when calling NfeSefazDetPag., must be smaller than or equal to 14.');
        }

        $this->container['cnpj_pag'] = $cnpj_pag;

        return $this;
    }

    /**
     * Gets uf_pag
     *
     * @return string|null
     */
    public function getUfPag()
    {
        return $this->container['uf_pag'];
    }

    /**
     * Sets uf_pag
     *
     * @param string|null $uf_pag UF do CNPJ do estabelecimento onde o pagamento foi processado/transacionado/recebido.
     *
     * @return self
     */
    public function setUfPag($uf_pag)
    {
        if (is_null($uf_pag)) {
            array_push($this->openAPINullablesSetToNull, 'uf_pag');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('uf_pag', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['uf_pag'] = $uf_pag;

        return $this;
    }

    /**
     * Gets card
     *
     * @return \NuvemFiscal\Model\NfeSefazCard|null
     */
    public function getCard()
    {
        return $this->container['card'];
    }

    /**
     * Sets card
     *
     * @param \NuvemFiscal\Model\NfeSefazCard|null $card card
     *
     * @return self
     */
    public function setCard($card)
    {
        if (is_null($card)) {
            throw new \InvalidArgumentException('non-nullable card cannot be null');
        }
        $this->container['card'] = $card;

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


