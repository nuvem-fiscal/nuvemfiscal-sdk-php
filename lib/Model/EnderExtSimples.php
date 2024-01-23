<?php
/**
 * EnderExtSimples
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
 * EnderExtSimples Class Doc Comment
 *
 * @category Class
 * @description Grupo de informações específicas de endereço no exterior.
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EnderExtSimples implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EnderExtSimples';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'c_end_post' => 'string',
        'x_cidade' => 'string',
        'x_est_prov_reg' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'c_end_post' => null,
        'x_cidade' => null,
        'x_est_prov_reg' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'c_end_post' => true,
        'x_cidade' => true,
        'x_est_prov_reg' => true
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
        'c_end_post' => 'cEndPost',
        'x_cidade' => 'xCidade',
        'x_est_prov_reg' => 'xEstProvReg'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'c_end_post' => 'setCEndPost',
        'x_cidade' => 'setXCidade',
        'x_est_prov_reg' => 'setXEstProvReg'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'c_end_post' => 'getCEndPost',
        'x_cidade' => 'getXCidade',
        'x_est_prov_reg' => 'getXEstProvReg'
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
        $this->setIfExists('c_end_post', $data ?? [], null);
        $this->setIfExists('x_cidade', $data ?? [], null);
        $this->setIfExists('x_est_prov_reg', $data ?? [], null);
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

        if ($this->container['c_end_post'] === null) {
            $invalidProperties[] = "'c_end_post' can't be null";
        }
        if ((mb_strlen($this->container['c_end_post']) > 11)) {
            $invalidProperties[] = "invalid value for 'c_end_post', the character length must be smaller than or equal to 11.";
        }

        if ((mb_strlen($this->container['c_end_post']) < 1)) {
            $invalidProperties[] = "invalid value for 'c_end_post', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['x_cidade'] === null) {
            $invalidProperties[] = "'x_cidade' can't be null";
        }
        if ((mb_strlen($this->container['x_cidade']) > 60)) {
            $invalidProperties[] = "invalid value for 'x_cidade', the character length must be smaller than or equal to 60.";
        }

        if ((mb_strlen($this->container['x_cidade']) < 1)) {
            $invalidProperties[] = "invalid value for 'x_cidade', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['x_est_prov_reg'] === null) {
            $invalidProperties[] = "'x_est_prov_reg' can't be null";
        }
        if ((mb_strlen($this->container['x_est_prov_reg']) > 60)) {
            $invalidProperties[] = "invalid value for 'x_est_prov_reg', the character length must be smaller than or equal to 60.";
        }

        if ((mb_strlen($this->container['x_est_prov_reg']) < 1)) {
            $invalidProperties[] = "invalid value for 'x_est_prov_reg', the character length must be bigger than or equal to 1.";
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
     * Gets c_end_post
     *
     * @return string
     */
    public function getCEndPost()
    {
        return $this->container['c_end_post'];
    }

    /**
     * Sets c_end_post
     *
     * @param string $c_end_post Código alfanumérico do Endereçamento Postal no exterior do prestador do serviço.
     *
     * @return self
     */
    public function setCEndPost($c_end_post)
    {
        if (is_null($c_end_post)) {
            array_push($this->openAPINullablesSetToNull, 'c_end_post');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('c_end_post', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($c_end_post) && (mb_strlen($c_end_post) > 11)) {
            throw new \InvalidArgumentException('invalid length for $c_end_post when calling EnderExtSimples., must be smaller than or equal to 11.');
        }
        if (!is_null($c_end_post) && (mb_strlen($c_end_post) < 1)) {
            throw new \InvalidArgumentException('invalid length for $c_end_post when calling EnderExtSimples., must be bigger than or equal to 1.');
        }

        $this->container['c_end_post'] = $c_end_post;

        return $this;
    }

    /**
     * Gets x_cidade
     *
     * @return string
     */
    public function getXCidade()
    {
        return $this->container['x_cidade'];
    }

    /**
     * Sets x_cidade
     *
     * @param string $x_cidade Nome da cidade no exterior do prestador do serviço.
     *
     * @return self
     */
    public function setXCidade($x_cidade)
    {
        if (is_null($x_cidade)) {
            array_push($this->openAPINullablesSetToNull, 'x_cidade');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('x_cidade', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($x_cidade) && (mb_strlen($x_cidade) > 60)) {
            throw new \InvalidArgumentException('invalid length for $x_cidade when calling EnderExtSimples., must be smaller than or equal to 60.');
        }
        if (!is_null($x_cidade) && (mb_strlen($x_cidade) < 1)) {
            throw new \InvalidArgumentException('invalid length for $x_cidade when calling EnderExtSimples., must be bigger than or equal to 1.');
        }

        $this->container['x_cidade'] = $x_cidade;

        return $this;
    }

    /**
     * Gets x_est_prov_reg
     *
     * @return string
     */
    public function getXEstProvReg()
    {
        return $this->container['x_est_prov_reg'];
    }

    /**
     * Sets x_est_prov_reg
     *
     * @param string $x_est_prov_reg Estado, província ou região da cidade no exterior do prestador do serviço.
     *
     * @return self
     */
    public function setXEstProvReg($x_est_prov_reg)
    {
        if (is_null($x_est_prov_reg)) {
            array_push($this->openAPINullablesSetToNull, 'x_est_prov_reg');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('x_est_prov_reg', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($x_est_prov_reg) && (mb_strlen($x_est_prov_reg) > 60)) {
            throw new \InvalidArgumentException('invalid length for $x_est_prov_reg when calling EnderExtSimples., must be smaller than or equal to 60.');
        }
        if (!is_null($x_est_prov_reg) && (mb_strlen($x_est_prov_reg) < 1)) {
            throw new \InvalidArgumentException('invalid length for $x_est_prov_reg when calling EnderExtSimples., must be bigger than or equal to 1.');
        }

        $this->container['x_est_prov_reg'] = $x_est_prov_reg;

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


