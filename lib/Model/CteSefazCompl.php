<?php
/**
 * CteSefazCompl
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
 * CteSefazCompl Class Doc Comment
 *
 * @category Class
 * @description Dados complementares do CT-e para fins operacionais ou comerciais.
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CteSefazCompl implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CteSefazCompl';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'x_carac_ad' => 'string',
        'x_carac_ser' => 'string',
        'x_emi' => 'string',
        'fluxo' => '\NuvemFiscal\Model\CteSefazFluxo',
        'entrega' => '\NuvemFiscal\Model\CteSefazEntrega',
        'orig_calc' => 'string',
        'dest_calc' => 'string',
        'x_obs' => 'string',
        'obs_cont' => '\NuvemFiscal\Model\CteSefazObsCont[]',
        'obs_fisco' => '\NuvemFiscal\Model\CteSefazObsFisco[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'x_carac_ad' => null,
        'x_carac_ser' => null,
        'x_emi' => null,
        'fluxo' => null,
        'entrega' => null,
        'orig_calc' => null,
        'dest_calc' => null,
        'x_obs' => null,
        'obs_cont' => null,
        'obs_fisco' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'x_carac_ad' => true,
        'x_carac_ser' => true,
        'x_emi' => true,
        'fluxo' => false,
        'entrega' => false,
        'orig_calc' => true,
        'dest_calc' => true,
        'x_obs' => true,
        'obs_cont' => false,
        'obs_fisco' => false
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
        'x_carac_ad' => 'xCaracAd',
        'x_carac_ser' => 'xCaracSer',
        'x_emi' => 'xEmi',
        'fluxo' => 'fluxo',
        'entrega' => 'Entrega',
        'orig_calc' => 'origCalc',
        'dest_calc' => 'destCalc',
        'x_obs' => 'xObs',
        'obs_cont' => 'ObsCont',
        'obs_fisco' => 'ObsFisco'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'x_carac_ad' => 'setXCaracAd',
        'x_carac_ser' => 'setXCaracSer',
        'x_emi' => 'setXEmi',
        'fluxo' => 'setFluxo',
        'entrega' => 'setEntrega',
        'orig_calc' => 'setOrigCalc',
        'dest_calc' => 'setDestCalc',
        'x_obs' => 'setXObs',
        'obs_cont' => 'setObsCont',
        'obs_fisco' => 'setObsFisco'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'x_carac_ad' => 'getXCaracAd',
        'x_carac_ser' => 'getXCaracSer',
        'x_emi' => 'getXEmi',
        'fluxo' => 'getFluxo',
        'entrega' => 'getEntrega',
        'orig_calc' => 'getOrigCalc',
        'dest_calc' => 'getDestCalc',
        'x_obs' => 'getXObs',
        'obs_cont' => 'getObsCont',
        'obs_fisco' => 'getObsFisco'
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
        $this->setIfExists('x_carac_ad', $data ?? [], null);
        $this->setIfExists('x_carac_ser', $data ?? [], null);
        $this->setIfExists('x_emi', $data ?? [], null);
        $this->setIfExists('fluxo', $data ?? [], null);
        $this->setIfExists('entrega', $data ?? [], null);
        $this->setIfExists('orig_calc', $data ?? [], null);
        $this->setIfExists('dest_calc', $data ?? [], null);
        $this->setIfExists('x_obs', $data ?? [], null);
        $this->setIfExists('obs_cont', $data ?? [], null);
        $this->setIfExists('obs_fisco', $data ?? [], null);
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

        if (!is_null($this->container['x_carac_ad']) && (mb_strlen($this->container['x_carac_ad']) > 15)) {
            $invalidProperties[] = "invalid value for 'x_carac_ad', the character length must be smaller than or equal to 15.";
        }

        if (!is_null($this->container['x_carac_ad']) && (mb_strlen($this->container['x_carac_ad']) < 1)) {
            $invalidProperties[] = "invalid value for 'x_carac_ad', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['x_carac_ser']) && (mb_strlen($this->container['x_carac_ser']) > 30)) {
            $invalidProperties[] = "invalid value for 'x_carac_ser', the character length must be smaller than or equal to 30.";
        }

        if (!is_null($this->container['x_carac_ser']) && (mb_strlen($this->container['x_carac_ser']) < 1)) {
            $invalidProperties[] = "invalid value for 'x_carac_ser', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['x_emi']) && (mb_strlen($this->container['x_emi']) > 20)) {
            $invalidProperties[] = "invalid value for 'x_emi', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['x_emi']) && (mb_strlen($this->container['x_emi']) < 1)) {
            $invalidProperties[] = "invalid value for 'x_emi', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['orig_calc']) && (mb_strlen($this->container['orig_calc']) > 40)) {
            $invalidProperties[] = "invalid value for 'orig_calc', the character length must be smaller than or equal to 40.";
        }

        if (!is_null($this->container['orig_calc']) && (mb_strlen($this->container['orig_calc']) < 2)) {
            $invalidProperties[] = "invalid value for 'orig_calc', the character length must be bigger than or equal to 2.";
        }

        if (!is_null($this->container['dest_calc']) && (mb_strlen($this->container['dest_calc']) > 40)) {
            $invalidProperties[] = "invalid value for 'dest_calc', the character length must be smaller than or equal to 40.";
        }

        if (!is_null($this->container['dest_calc']) && (mb_strlen($this->container['dest_calc']) < 2)) {
            $invalidProperties[] = "invalid value for 'dest_calc', the character length must be bigger than or equal to 2.";
        }

        if (!is_null($this->container['x_obs']) && (mb_strlen($this->container['x_obs']) > 2000)) {
            $invalidProperties[] = "invalid value for 'x_obs', the character length must be smaller than or equal to 2000.";
        }

        if (!is_null($this->container['x_obs']) && (mb_strlen($this->container['x_obs']) < 1)) {
            $invalidProperties[] = "invalid value for 'x_obs', the character length must be bigger than or equal to 1.";
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
     * Gets x_carac_ad
     *
     * @return string|null
     */
    public function getXCaracAd()
    {
        return $this->container['x_carac_ad'];
    }

    /**
     * Sets x_carac_ad
     *
     * @param string|null $x_carac_ad Característica adicional do transporte.  Texto livre:  REENTREGA  DEVOLUÇÃO  REFATURAMENTO  etc.
     *
     * @return self
     */
    public function setXCaracAd($x_carac_ad)
    {
        if (is_null($x_carac_ad)) {
            array_push($this->openAPINullablesSetToNull, 'x_carac_ad');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('x_carac_ad', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($x_carac_ad) && (mb_strlen($x_carac_ad) > 15)) {
            throw new \InvalidArgumentException('invalid length for $x_carac_ad when calling CteSefazCompl., must be smaller than or equal to 15.');
        }
        if (!is_null($x_carac_ad) && (mb_strlen($x_carac_ad) < 1)) {
            throw new \InvalidArgumentException('invalid length for $x_carac_ad when calling CteSefazCompl., must be bigger than or equal to 1.');
        }

        $this->container['x_carac_ad'] = $x_carac_ad;

        return $this;
    }

    /**
     * Gets x_carac_ser
     *
     * @return string|null
     */
    public function getXCaracSer()
    {
        return $this->container['x_carac_ser'];
    }

    /**
     * Sets x_carac_ser
     *
     * @param string|null $x_carac_ser Característica adicional do serviço.  Texto livre:  ENTREGA EXPRESSA  LOGÍSTICA REVERSA  CONVENCIONAL  EMERGENCIAL  etc.
     *
     * @return self
     */
    public function setXCaracSer($x_carac_ser)
    {
        if (is_null($x_carac_ser)) {
            array_push($this->openAPINullablesSetToNull, 'x_carac_ser');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('x_carac_ser', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($x_carac_ser) && (mb_strlen($x_carac_ser) > 30)) {
            throw new \InvalidArgumentException('invalid length for $x_carac_ser when calling CteSefazCompl., must be smaller than or equal to 30.');
        }
        if (!is_null($x_carac_ser) && (mb_strlen($x_carac_ser) < 1)) {
            throw new \InvalidArgumentException('invalid length for $x_carac_ser when calling CteSefazCompl., must be bigger than or equal to 1.');
        }

        $this->container['x_carac_ser'] = $x_carac_ser;

        return $this;
    }

    /**
     * Gets x_emi
     *
     * @return string|null
     */
    public function getXEmi()
    {
        return $this->container['x_emi'];
    }

    /**
     * Sets x_emi
     *
     * @param string|null $x_emi Funcionário emissor do CTe.
     *
     * @return self
     */
    public function setXEmi($x_emi)
    {
        if (is_null($x_emi)) {
            array_push($this->openAPINullablesSetToNull, 'x_emi');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('x_emi', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($x_emi) && (mb_strlen($x_emi) > 20)) {
            throw new \InvalidArgumentException('invalid length for $x_emi when calling CteSefazCompl., must be smaller than or equal to 20.');
        }
        if (!is_null($x_emi) && (mb_strlen($x_emi) < 1)) {
            throw new \InvalidArgumentException('invalid length for $x_emi when calling CteSefazCompl., must be bigger than or equal to 1.');
        }

        $this->container['x_emi'] = $x_emi;

        return $this;
    }

    /**
     * Gets fluxo
     *
     * @return \NuvemFiscal\Model\CteSefazFluxo|null
     */
    public function getFluxo()
    {
        return $this->container['fluxo'];
    }

    /**
     * Sets fluxo
     *
     * @param \NuvemFiscal\Model\CteSefazFluxo|null $fluxo fluxo
     *
     * @return self
     */
    public function setFluxo($fluxo)
    {
        if (is_null($fluxo)) {
            throw new \InvalidArgumentException('non-nullable fluxo cannot be null');
        }
        $this->container['fluxo'] = $fluxo;

        return $this;
    }

    /**
     * Gets entrega
     *
     * @return \NuvemFiscal\Model\CteSefazEntrega|null
     */
    public function getEntrega()
    {
        return $this->container['entrega'];
    }

    /**
     * Sets entrega
     *
     * @param \NuvemFiscal\Model\CteSefazEntrega|null $entrega entrega
     *
     * @return self
     */
    public function setEntrega($entrega)
    {
        if (is_null($entrega)) {
            throw new \InvalidArgumentException('non-nullable entrega cannot be null');
        }
        $this->container['entrega'] = $entrega;

        return $this;
    }

    /**
     * Gets orig_calc
     *
     * @return string|null
     */
    public function getOrigCalc()
    {
        return $this->container['orig_calc'];
    }

    /**
     * Sets orig_calc
     *
     * @param string|null $orig_calc Município de origem para efeito de cálculo do frete.
     *
     * @return self
     */
    public function setOrigCalc($orig_calc)
    {
        if (is_null($orig_calc)) {
            array_push($this->openAPINullablesSetToNull, 'orig_calc');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('orig_calc', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($orig_calc) && (mb_strlen($orig_calc) > 40)) {
            throw new \InvalidArgumentException('invalid length for $orig_calc when calling CteSefazCompl., must be smaller than or equal to 40.');
        }
        if (!is_null($orig_calc) && (mb_strlen($orig_calc) < 2)) {
            throw new \InvalidArgumentException('invalid length for $orig_calc when calling CteSefazCompl., must be bigger than or equal to 2.');
        }

        $this->container['orig_calc'] = $orig_calc;

        return $this;
    }

    /**
     * Gets dest_calc
     *
     * @return string|null
     */
    public function getDestCalc()
    {
        return $this->container['dest_calc'];
    }

    /**
     * Sets dest_calc
     *
     * @param string|null $dest_calc Município de destino para efeito de cálculo do frete.
     *
     * @return self
     */
    public function setDestCalc($dest_calc)
    {
        if (is_null($dest_calc)) {
            array_push($this->openAPINullablesSetToNull, 'dest_calc');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('dest_calc', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($dest_calc) && (mb_strlen($dest_calc) > 40)) {
            throw new \InvalidArgumentException('invalid length for $dest_calc when calling CteSefazCompl., must be smaller than or equal to 40.');
        }
        if (!is_null($dest_calc) && (mb_strlen($dest_calc) < 2)) {
            throw new \InvalidArgumentException('invalid length for $dest_calc when calling CteSefazCompl., must be bigger than or equal to 2.');
        }

        $this->container['dest_calc'] = $dest_calc;

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
     * @param string|null $x_obs Observações Gerais.
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
        if (!is_null($x_obs) && (mb_strlen($x_obs) > 2000)) {
            throw new \InvalidArgumentException('invalid length for $x_obs when calling CteSefazCompl., must be smaller than or equal to 2000.');
        }
        if (!is_null($x_obs) && (mb_strlen($x_obs) < 1)) {
            throw new \InvalidArgumentException('invalid length for $x_obs when calling CteSefazCompl., must be bigger than or equal to 1.');
        }

        $this->container['x_obs'] = $x_obs;

        return $this;
    }

    /**
     * Gets obs_cont
     *
     * @return \NuvemFiscal\Model\CteSefazObsCont[]|null
     */
    public function getObsCont()
    {
        return $this->container['obs_cont'];
    }

    /**
     * Sets obs_cont
     *
     * @param \NuvemFiscal\Model\CteSefazObsCont[]|null $obs_cont obs_cont
     *
     * @return self
     */
    public function setObsCont($obs_cont)
    {
        if (is_null($obs_cont)) {
            throw new \InvalidArgumentException('non-nullable obs_cont cannot be null');
        }
        $this->container['obs_cont'] = $obs_cont;

        return $this;
    }

    /**
     * Gets obs_fisco
     *
     * @return \NuvemFiscal\Model\CteSefazObsFisco[]|null
     */
    public function getObsFisco()
    {
        return $this->container['obs_fisco'];
    }

    /**
     * Sets obs_fisco
     *
     * @param \NuvemFiscal\Model\CteSefazObsFisco[]|null $obs_fisco obs_fisco
     *
     * @return self
     */
    public function setObsFisco($obs_fisco)
    {
        if (is_null($obs_fisco)) {
            throw new \InvalidArgumentException('non-nullable obs_fisco cannot be null');
        }
        $this->container['obs_fisco'] = $obs_fisco;

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


