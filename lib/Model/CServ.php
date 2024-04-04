<?php
/**
 * CServ
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
 * CServ Class Doc Comment
 *
 * @category Class
 * @description Grupo de informações relativas ao código do serviço prestado.
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CServ implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CServ';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'c_trib_nac' => 'string',
        'c_trib_mun' => 'string',
        'cnae' => 'string',
        'x_desc_serv' => 'string',
        'c_nbs' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'c_trib_nac' => null,
        'c_trib_mun' => null,
        'cnae' => null,
        'x_desc_serv' => null,
        'c_nbs' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'c_trib_nac' => true,
        'c_trib_mun' => true,
        'cnae' => true,
        'x_desc_serv' => true,
        'c_nbs' => true
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
        'c_trib_nac' => 'cTribNac',
        'c_trib_mun' => 'cTribMun',
        'cnae' => 'CNAE',
        'x_desc_serv' => 'xDescServ',
        'c_nbs' => 'cNBS'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'c_trib_nac' => 'setCTribNac',
        'c_trib_mun' => 'setCTribMun',
        'cnae' => 'setCnae',
        'x_desc_serv' => 'setXDescServ',
        'c_nbs' => 'setCNbs'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'c_trib_nac' => 'getCTribNac',
        'c_trib_mun' => 'getCTribMun',
        'cnae' => 'getCnae',
        'x_desc_serv' => 'getXDescServ',
        'c_nbs' => 'getCNbs'
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
        $this->setIfExists('c_trib_nac', $data ?? [], null);
        $this->setIfExists('c_trib_mun', $data ?? [], null);
        $this->setIfExists('cnae', $data ?? [], null);
        $this->setIfExists('x_desc_serv', $data ?? [], null);
        $this->setIfExists('c_nbs', $data ?? [], null);
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

        if ($this->container['c_trib_nac'] === null) {
            $invalidProperties[] = "'c_trib_nac' can't be null";
        }
        if ($this->container['x_desc_serv'] === null) {
            $invalidProperties[] = "'x_desc_serv' can't be null";
        }
        if ((mb_strlen($this->container['x_desc_serv']) > 2000)) {
            $invalidProperties[] = "invalid value for 'x_desc_serv', the character length must be smaller than or equal to 2000.";
        }

        if ((mb_strlen($this->container['x_desc_serv']) < 1)) {
            $invalidProperties[] = "invalid value for 'x_desc_serv', the character length must be bigger than or equal to 1.";
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
     * Gets c_trib_nac
     *
     * @return string
     */
    public function getCTribNac()
    {
        return $this->container['c_trib_nac'];
    }

    /**
     * Sets c_trib_nac
     *
     * @param string $c_trib_nac Código de tributação nacional do ISSQN:  Regra de formação - 6 dígitos numéricos sendo: 2 para Item (LC 116/2003), 2 para Subitem (LC 116/2003) e 2 para Desdobro Nacional.
     *
     * @return self
     */
    public function setCTribNac($c_trib_nac)
    {
        if (is_null($c_trib_nac)) {
            array_push($this->openAPINullablesSetToNull, 'c_trib_nac');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('c_trib_nac', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['c_trib_nac'] = $c_trib_nac;

        return $this;
    }

    /**
     * Gets c_trib_mun
     *
     * @return string|null
     */
    public function getCTribMun()
    {
        return $this->container['c_trib_mun'];
    }

    /**
     * Sets c_trib_mun
     *
     * @param string|null $c_trib_mun Código de tributação municipal do ISSQN.
     *
     * @return self
     */
    public function setCTribMun($c_trib_mun)
    {
        if (is_null($c_trib_mun)) {
            array_push($this->openAPINullablesSetToNull, 'c_trib_mun');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('c_trib_mun', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['c_trib_mun'] = $c_trib_mun;

        return $this;
    }

    /**
     * Gets cnae
     *
     * @return string|null
     */
    public function getCnae()
    {
        return $this->container['cnae'];
    }

    /**
     * Sets cnae
     *
     * @param string|null $cnae Código CNAE (Classificação Nacional de Atividades Econômicas).
     *
     * @return self
     */
    public function setCnae($cnae)
    {
        if (is_null($cnae)) {
            array_push($this->openAPINullablesSetToNull, 'cnae');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('cnae', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['cnae'] = $cnae;

        return $this;
    }

    /**
     * Gets x_desc_serv
     *
     * @return string
     */
    public function getXDescServ()
    {
        return $this->container['x_desc_serv'];
    }

    /**
     * Sets x_desc_serv
     *
     * @param string $x_desc_serv Descrição completa do serviço prestado.    Os caracteres acentuados poderão ser alterados para caracteres sem acentuação.
     *
     * @return self
     */
    public function setXDescServ($x_desc_serv)
    {
        if (is_null($x_desc_serv)) {
            array_push($this->openAPINullablesSetToNull, 'x_desc_serv');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('x_desc_serv', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($x_desc_serv) && (mb_strlen($x_desc_serv) > 2000)) {
            throw new \InvalidArgumentException('invalid length for $x_desc_serv when calling CServ., must be smaller than or equal to 2000.');
        }
        if (!is_null($x_desc_serv) && (mb_strlen($x_desc_serv) < 1)) {
            throw new \InvalidArgumentException('invalid length for $x_desc_serv when calling CServ., must be bigger than or equal to 1.');
        }

        $this->container['x_desc_serv'] = $x_desc_serv;

        return $this;
    }

    /**
     * Gets c_nbs
     *
     * @return string|null
     */
    public function getCNbs()
    {
        return $this->container['c_nbs'];
    }

    /**
     * Sets c_nbs
     *
     * @param string|null $c_nbs Código NBS (Nomenclatura Brasileira de Serviços, Intangíveis e outras Operações que produzam Variações no Patrimônio) correspondente ao serviço prestado.
     *
     * @return self
     */
    public function setCNbs($c_nbs)
    {
        if (is_null($c_nbs)) {
            array_push($this->openAPINullablesSetToNull, 'c_nbs');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('c_nbs', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['c_nbs'] = $c_nbs;

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


