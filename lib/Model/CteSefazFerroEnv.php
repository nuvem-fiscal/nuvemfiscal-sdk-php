<?php
/**
 * CteSefazFerroEnv
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
 * CteSefazFerroEnv Class Doc Comment
 *
 * @category Class
 * @description Informações das Ferrovias Envolvidas.
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CteSefazFerroEnv implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CteSefazFerroEnv';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cnpj' => 'string',
        'c_int' => 'string',
        'ie' => 'string',
        'x_nome' => 'string',
        'ender_ferro' => '\NuvemFiscal\Model\CteSefazEnderFer'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'cnpj' => null,
        'c_int' => null,
        'ie' => null,
        'x_nome' => null,
        'ender_ferro' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'cnpj' => true,
        'c_int' => true,
        'ie' => true,
        'x_nome' => true,
        'ender_ferro' => false
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
        'cnpj' => 'CNPJ',
        'c_int' => 'cInt',
        'ie' => 'IE',
        'x_nome' => 'xNome',
        'ender_ferro' => 'enderFerro'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cnpj' => 'setCnpj',
        'c_int' => 'setCInt',
        'ie' => 'setIe',
        'x_nome' => 'setXNome',
        'ender_ferro' => 'setEnderFerro'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cnpj' => 'getCnpj',
        'c_int' => 'getCInt',
        'ie' => 'getIe',
        'x_nome' => 'getXNome',
        'ender_ferro' => 'getEnderFerro'
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
        $this->setIfExists('cnpj', $data ?? [], null);
        $this->setIfExists('c_int', $data ?? [], null);
        $this->setIfExists('ie', $data ?? [], null);
        $this->setIfExists('x_nome', $data ?? [], null);
        $this->setIfExists('ender_ferro', $data ?? [], null);
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

        if ($this->container['cnpj'] === null) {
            $invalidProperties[] = "'cnpj' can't be null";
        }
        if (!is_null($this->container['c_int']) && (mb_strlen($this->container['c_int']) > 10)) {
            $invalidProperties[] = "invalid value for 'c_int', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['c_int']) && (mb_strlen($this->container['c_int']) < 1)) {
            $invalidProperties[] = "invalid value for 'c_int', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['ie']) && (mb_strlen($this->container['ie']) > 14)) {
            $invalidProperties[] = "invalid value for 'ie', the character length must be smaller than or equal to 14.";
        }

        if ($this->container['x_nome'] === null) {
            $invalidProperties[] = "'x_nome' can't be null";
        }
        if ((mb_strlen($this->container['x_nome']) > 60)) {
            $invalidProperties[] = "invalid value for 'x_nome', the character length must be smaller than or equal to 60.";
        }

        if ((mb_strlen($this->container['x_nome']) < 2)) {
            $invalidProperties[] = "invalid value for 'x_nome', the character length must be bigger than or equal to 2.";
        }

        if ($this->container['ender_ferro'] === null) {
            $invalidProperties[] = "'ender_ferro' can't be null";
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
     * Gets cnpj
     *
     * @return string
     */
    public function getCnpj()
    {
        return $this->container['cnpj'];
    }

    /**
     * Sets cnpj
     *
     * @param string $cnpj Número do CNPJ.  Informar o CNPJ da Ferrovia Envolvida. Caso a Ferrovia envolvida não seja inscrita no CNPJ o campo deverá preenchido com zeros.  Informar os zeros não significativos.
     *
     * @return self
     */
    public function setCnpj($cnpj)
    {
        if (is_null($cnpj)) {
            array_push($this->openAPINullablesSetToNull, 'cnpj');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('cnpj', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['cnpj'] = $cnpj;

        return $this;
    }

    /**
     * Gets c_int
     *
     * @return string|null
     */
    public function getCInt()
    {
        return $this->container['c_int'];
    }

    /**
     * Sets c_int
     *
     * @param string|null $c_int Código interno da Ferrovia envolvida.  Uso da transportadora.
     *
     * @return self
     */
    public function setCInt($c_int)
    {
        if (is_null($c_int)) {
            array_push($this->openAPINullablesSetToNull, 'c_int');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('c_int', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($c_int) && (mb_strlen($c_int) > 10)) {
            throw new \InvalidArgumentException('invalid length for $c_int when calling CteSefazFerroEnv., must be smaller than or equal to 10.');
        }
        if (!is_null($c_int) && (mb_strlen($c_int) < 1)) {
            throw new \InvalidArgumentException('invalid length for $c_int when calling CteSefazFerroEnv., must be bigger than or equal to 1.');
        }

        $this->container['c_int'] = $c_int;

        return $this;
    }

    /**
     * Gets ie
     *
     * @return string|null
     */
    public function getIe()
    {
        return $this->container['ie'];
    }

    /**
     * Sets ie
     *
     * @param string|null $ie Inscrição Estadual.
     *
     * @return self
     */
    public function setIe($ie)
    {
        if (is_null($ie)) {
            array_push($this->openAPINullablesSetToNull, 'ie');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ie', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($ie) && (mb_strlen($ie) > 14)) {
            throw new \InvalidArgumentException('invalid length for $ie when calling CteSefazFerroEnv., must be smaller than or equal to 14.');
        }

        $this->container['ie'] = $ie;

        return $this;
    }

    /**
     * Gets x_nome
     *
     * @return string
     */
    public function getXNome()
    {
        return $this->container['x_nome'];
    }

    /**
     * Sets x_nome
     *
     * @param string $x_nome Razão Social ou Nome.
     *
     * @return self
     */
    public function setXNome($x_nome)
    {
        if (is_null($x_nome)) {
            array_push($this->openAPINullablesSetToNull, 'x_nome');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('x_nome', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($x_nome) && (mb_strlen($x_nome) > 60)) {
            throw new \InvalidArgumentException('invalid length for $x_nome when calling CteSefazFerroEnv., must be smaller than or equal to 60.');
        }
        if (!is_null($x_nome) && (mb_strlen($x_nome) < 2)) {
            throw new \InvalidArgumentException('invalid length for $x_nome when calling CteSefazFerroEnv., must be bigger than or equal to 2.');
        }

        $this->container['x_nome'] = $x_nome;

        return $this;
    }

    /**
     * Gets ender_ferro
     *
     * @return \NuvemFiscal\Model\CteSefazEnderFer
     */
    public function getEnderFerro()
    {
        return $this->container['ender_ferro'];
    }

    /**
     * Sets ender_ferro
     *
     * @param \NuvemFiscal\Model\CteSefazEnderFer $ender_ferro ender_ferro
     *
     * @return self
     */
    public function setEnderFerro($ender_ferro)
    {
        if (is_null($ender_ferro)) {
            throw new \InvalidArgumentException('non-nullable ender_ferro cannot be null');
        }
        $this->container['ender_ferro'] = $ender_ferro;

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


