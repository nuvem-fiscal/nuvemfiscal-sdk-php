<?php
/**
 * NfcomSefazGRessarc
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
 * NfcomSefazGRessarc Class Doc Comment
 *
 * @category Class
 * @description Grupo de Informações detalhadas de item de cClass de Ressarcimento.
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class NfcomSefazGRessarc implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NfcomSefazGRessarc';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'tp_ressarc' => 'int',
        'd_ref' => '\DateTime',
        'n_processo' => 'string',
        'n_prot_reclama' => 'string',
        'x_obs' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'tp_ressarc' => null,
        'd_ref' => 'date',
        'n_processo' => null,
        'n_prot_reclama' => null,
        'x_obs' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'tp_ressarc' => true,
        'd_ref' => true,
        'n_processo' => true,
        'n_prot_reclama' => true,
        'x_obs' => true
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
        'tp_ressarc' => 'tpRessarc',
        'd_ref' => 'dRef',
        'n_processo' => 'nProcesso',
        'n_prot_reclama' => 'nProtReclama',
        'x_obs' => 'xObs'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'tp_ressarc' => 'setTpRessarc',
        'd_ref' => 'setDRef',
        'n_processo' => 'setNProcesso',
        'n_prot_reclama' => 'setNProtReclama',
        'x_obs' => 'setXObs'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'tp_ressarc' => 'getTpRessarc',
        'd_ref' => 'getDRef',
        'n_processo' => 'getNProcesso',
        'n_prot_reclama' => 'getNProtReclama',
        'x_obs' => 'getXObs'
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
        $this->setIfExists('tp_ressarc', $data ?? [], null);
        $this->setIfExists('d_ref', $data ?? [], null);
        $this->setIfExists('n_processo', $data ?? [], null);
        $this->setIfExists('n_prot_reclama', $data ?? [], null);
        $this->setIfExists('x_obs', $data ?? [], null);
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

        if ($this->container['tp_ressarc'] === null) {
            $invalidProperties[] = "'tp_ressarc' can't be null";
        }
        if ($this->container['d_ref'] === null) {
            $invalidProperties[] = "'d_ref' can't be null";
        }
        if (!is_null($this->container['n_processo']) && (mb_strlen($this->container['n_processo']) > 60)) {
            $invalidProperties[] = "invalid value for 'n_processo', the character length must be smaller than or equal to 60.";
        }

        if (!is_null($this->container['n_processo']) && (mb_strlen($this->container['n_processo']) < 1)) {
            $invalidProperties[] = "invalid value for 'n_processo', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['n_prot_reclama']) && (mb_strlen($this->container['n_prot_reclama']) > 60)) {
            $invalidProperties[] = "invalid value for 'n_prot_reclama', the character length must be smaller than or equal to 60.";
        }

        if (!is_null($this->container['n_prot_reclama']) && (mb_strlen($this->container['n_prot_reclama']) < 1)) {
            $invalidProperties[] = "invalid value for 'n_prot_reclama', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['x_obs']) && (mb_strlen($this->container['x_obs']) > 100)) {
            $invalidProperties[] = "invalid value for 'x_obs', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['x_obs']) && (mb_strlen($this->container['x_obs']) < 15)) {
            $invalidProperties[] = "invalid value for 'x_obs', the character length must be bigger than or equal to 15.";
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
     * Gets tp_ressarc
     *
     * @return int
     */
    public function getTpRessarc()
    {
        return $this->container['tp_ressarc'];
    }

    /**
     * Sets tp_ressarc
     *
     * @param int $tp_ressarc Tipo de Ressarcimento.  * 1 - Cobrança Indevida  * 2 - Interrupção  * 99 - Outros
     *
     * @return self
     */
    public function setTpRessarc($tp_ressarc)
    {
        if (is_null($tp_ressarc)) {
            array_push($this->openAPINullablesSetToNull, 'tp_ressarc');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tp_ressarc', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['tp_ressarc'] = $tp_ressarc;

        return $this;
    }

    /**
     * Gets d_ref
     *
     * @return \DateTime
     */
    public function getDRef()
    {
        return $this->container['d_ref'];
    }

    /**
     * Sets d_ref
     *
     * @param \DateTime $d_ref Data de referencia.  Formato AAAA-MM-DD.
     *
     * @return self
     */
    public function setDRef($d_ref)
    {
        if (is_null($d_ref)) {
            array_push($this->openAPINullablesSetToNull, 'd_ref');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('d_ref', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['d_ref'] = $d_ref;

        return $this;
    }

    /**
     * Gets n_processo
     *
     * @return string|null
     */
    public function getNProcesso()
    {
        return $this->container['n_processo'];
    }

    /**
     * Sets n_processo
     *
     * @param string|null $n_processo Número do Processo.
     *
     * @return self
     */
    public function setNProcesso($n_processo)
    {
        if (is_null($n_processo)) {
            array_push($this->openAPINullablesSetToNull, 'n_processo');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('n_processo', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($n_processo) && (mb_strlen($n_processo) > 60)) {
            throw new \InvalidArgumentException('invalid length for $n_processo when calling NfcomSefazGRessarc., must be smaller than or equal to 60.');
        }
        if (!is_null($n_processo) && (mb_strlen($n_processo) < 1)) {
            throw new \InvalidArgumentException('invalid length for $n_processo when calling NfcomSefazGRessarc., must be bigger than or equal to 1.');
        }

        $this->container['n_processo'] = $n_processo;

        return $this;
    }

    /**
     * Gets n_prot_reclama
     *
     * @return string|null
     */
    public function getNProtReclama()
    {
        return $this->container['n_prot_reclama'];
    }

    /**
     * Sets n_prot_reclama
     *
     * @param string|null $n_prot_reclama Número do protocolo de reclamação.
     *
     * @return self
     */
    public function setNProtReclama($n_prot_reclama)
    {
        if (is_null($n_prot_reclama)) {
            array_push($this->openAPINullablesSetToNull, 'n_prot_reclama');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('n_prot_reclama', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($n_prot_reclama) && (mb_strlen($n_prot_reclama) > 60)) {
            throw new \InvalidArgumentException('invalid length for $n_prot_reclama when calling NfcomSefazGRessarc., must be smaller than or equal to 60.');
        }
        if (!is_null($n_prot_reclama) && (mb_strlen($n_prot_reclama) < 1)) {
            throw new \InvalidArgumentException('invalid length for $n_prot_reclama when calling NfcomSefazGRessarc., must be bigger than or equal to 1.');
        }

        $this->container['n_prot_reclama'] = $n_prot_reclama;

        return $this;
    }

    /**
     * Gets x_obs
     *
     * @return string|null
     */
    public function getXObs()
    {
        return $this->container['x_obs'];
    }

    /**
     * Sets x_obs
     *
     * @param string|null $x_obs Observações sobre o processo de ressarcimento.
     *
     * @return self
     */
    public function setXObs($x_obs)
    {
        if (is_null($x_obs)) {
            array_push($this->openAPINullablesSetToNull, 'x_obs');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('x_obs', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($x_obs) && (mb_strlen($x_obs) > 100)) {
            throw new \InvalidArgumentException('invalid length for $x_obs when calling NfcomSefazGRessarc., must be smaller than or equal to 100.');
        }
        if (!is_null($x_obs) && (mb_strlen($x_obs) < 15)) {
            throw new \InvalidArgumentException('invalid length for $x_obs when calling NfcomSefazGRessarc., must be bigger than or equal to 15.');
        }

        $this->container['x_obs'] = $x_obs;

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


