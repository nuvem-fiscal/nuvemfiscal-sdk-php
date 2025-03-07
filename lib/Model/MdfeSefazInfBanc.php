<?php
/**
 * MdfeSefazInfBanc
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
 * MdfeSefazInfBanc Class Doc Comment
 *
 * @category Class
 * @description Informações bancárias.
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class MdfeSefazInfBanc implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MdfeSefazInfBanc';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cod_banco' => 'string',
        'cod_agencia' => 'string',
        'cnpjipef' => 'string',
        'pix' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'cod_banco' => null,
        'cod_agencia' => null,
        'cnpjipef' => null,
        'pix' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'cod_banco' => true,
        'cod_agencia' => true,
        'cnpjipef' => true,
        'pix' => true
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
        'cod_banco' => 'codBanco',
        'cod_agencia' => 'codAgencia',
        'cnpjipef' => 'CNPJIPEF',
        'pix' => 'PIX'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cod_banco' => 'setCodBanco',
        'cod_agencia' => 'setCodAgencia',
        'cnpjipef' => 'setCnpjipef',
        'pix' => 'setPix'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cod_banco' => 'getCodBanco',
        'cod_agencia' => 'getCodAgencia',
        'cnpjipef' => 'getCnpjipef',
        'pix' => 'getPix'
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
        $this->setIfExists('cod_banco', $data ?? [], null);
        $this->setIfExists('cod_agencia', $data ?? [], null);
        $this->setIfExists('cnpjipef', $data ?? [], null);
        $this->setIfExists('pix', $data ?? [], null);
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

        if (!is_null($this->container['cod_banco']) && (mb_strlen($this->container['cod_banco']) > 5)) {
            $invalidProperties[] = "invalid value for 'cod_banco', the character length must be smaller than or equal to 5.";
        }

        if (!is_null($this->container['cod_banco']) && (mb_strlen($this->container['cod_banco']) < 3)) {
            $invalidProperties[] = "invalid value for 'cod_banco', the character length must be bigger than or equal to 3.";
        }

        if (!is_null($this->container['cod_agencia']) && (mb_strlen($this->container['cod_agencia']) > 10)) {
            $invalidProperties[] = "invalid value for 'cod_agencia', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['cod_agencia']) && (mb_strlen($this->container['cod_agencia']) < 1)) {
            $invalidProperties[] = "invalid value for 'cod_agencia', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['pix']) && (mb_strlen($this->container['pix']) > 60)) {
            $invalidProperties[] = "invalid value for 'pix', the character length must be smaller than or equal to 60.";
        }

        if (!is_null($this->container['pix']) && (mb_strlen($this->container['pix']) < 2)) {
            $invalidProperties[] = "invalid value for 'pix', the character length must be bigger than or equal to 2.";
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
     * Gets cod_banco
     *
     * @return string|null
     */
    public function getCodBanco()
    {
        return $this->container['cod_banco'];
    }

    /**
     * Sets cod_banco
     *
     * @param string|null $cod_banco Número do banco.
     *
     * @return self
     */
    public function setCodBanco($cod_banco)
    {
        if (is_null($cod_banco)) {
            array_push($this->openAPINullablesSetToNull, 'cod_banco');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('cod_banco', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($cod_banco) && (mb_strlen($cod_banco) > 5)) {
            throw new \InvalidArgumentException('invalid length for $cod_banco when calling MdfeSefazInfBanc., must be smaller than or equal to 5.');
        }
        if (!is_null($cod_banco) && (mb_strlen($cod_banco) < 3)) {
            throw new \InvalidArgumentException('invalid length for $cod_banco when calling MdfeSefazInfBanc., must be bigger than or equal to 3.');
        }

        $this->container['cod_banco'] = $cod_banco;

        return $this;
    }

    /**
     * Gets cod_agencia
     *
     * @return string|null
     */
    public function getCodAgencia()
    {
        return $this->container['cod_agencia'];
    }

    /**
     * Sets cod_agencia
     *
     * @param string|null $cod_agencia Número da agência bancária.
     *
     * @return self
     */
    public function setCodAgencia($cod_agencia)
    {
        if (is_null($cod_agencia)) {
            array_push($this->openAPINullablesSetToNull, 'cod_agencia');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('cod_agencia', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($cod_agencia) && (mb_strlen($cod_agencia) > 10)) {
            throw new \InvalidArgumentException('invalid length for $cod_agencia when calling MdfeSefazInfBanc., must be smaller than or equal to 10.');
        }
        if (!is_null($cod_agencia) && (mb_strlen($cod_agencia) < 1)) {
            throw new \InvalidArgumentException('invalid length for $cod_agencia when calling MdfeSefazInfBanc., must be bigger than or equal to 1.');
        }

        $this->container['cod_agencia'] = $cod_agencia;

        return $this;
    }

    /**
     * Gets cnpjipef
     *
     * @return string|null
     */
    public function getCnpjipef()
    {
        return $this->container['cnpjipef'];
    }

    /**
     * Sets cnpjipef
     *
     * @param string|null $cnpjipef Número do CNPJ da Instituição de Pagamento Eletrônico do Frete.  Informar os zeros não significativos.
     *
     * @return self
     */
    public function setCnpjipef($cnpjipef)
    {
        if (is_null($cnpjipef)) {
            array_push($this->openAPINullablesSetToNull, 'cnpjipef');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('cnpjipef', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['cnpjipef'] = $cnpjipef;

        return $this;
    }

    /**
     * Gets pix
     *
     * @return string|null
     */
    public function getPix()
    {
        return $this->container['pix'];
    }

    /**
     * Sets pix
     *
     * @param string|null $pix Chave PIX.  Informar a chave PIX para recebimento do frete.  Pode ser email, CPF/ CNPJ (somente numeros), Telefone com a seguinte formatação (+5599999999999) ou a chave aleatória gerada pela instituição.
     *
     * @return self
     */
    public function setPix($pix)
    {
        if (is_null($pix)) {
            array_push($this->openAPINullablesSetToNull, 'pix');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('pix', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($pix) && (mb_strlen($pix) > 60)) {
            throw new \InvalidArgumentException('invalid length for $pix when calling MdfeSefazInfBanc., must be smaller than or equal to 60.');
        }
        if (!is_null($pix) && (mb_strlen($pix) < 2)) {
            throw new \InvalidArgumentException('invalid length for $pix when calling MdfeSefazInfBanc., must be bigger than or equal to 2.');
        }

        $this->container['pix'] = $pix;

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


