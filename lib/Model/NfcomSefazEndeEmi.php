<?php
/**
 * NfcomSefazEndeEmi
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
 * NfcomSefazEndeEmi Class Doc Comment
 *
 * @category Class
 * @description Endereço do emitente.    *Caso não seja informado, será utilizado o do cadastro da empresa.*
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class NfcomSefazEndeEmi implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NfcomSefazEndeEmi';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'x_lgr' => 'string',
        'nro' => 'string',
        'x_cpl' => 'string',
        'x_bairro' => 'string',
        'c_mun' => 'string',
        'x_mun' => 'string',
        'cep' => 'string',
        'uf' => 'string',
        'fone' => 'string',
        'email' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'x_lgr' => null,
        'nro' => null,
        'x_cpl' => null,
        'x_bairro' => null,
        'c_mun' => null,
        'x_mun' => null,
        'cep' => null,
        'uf' => null,
        'fone' => null,
        'email' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'x_lgr' => true,
        'nro' => true,
        'x_cpl' => true,
        'x_bairro' => true,
        'c_mun' => true,
        'x_mun' => true,
        'cep' => true,
        'uf' => true,
        'fone' => true,
        'email' => true
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
        'x_lgr' => 'xLgr',
        'nro' => 'nro',
        'x_cpl' => 'xCpl',
        'x_bairro' => 'xBairro',
        'c_mun' => 'cMun',
        'x_mun' => 'xMun',
        'cep' => 'CEP',
        'uf' => 'UF',
        'fone' => 'fone',
        'email' => 'email'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'x_lgr' => 'setXLgr',
        'nro' => 'setNro',
        'x_cpl' => 'setXCpl',
        'x_bairro' => 'setXBairro',
        'c_mun' => 'setCMun',
        'x_mun' => 'setXMun',
        'cep' => 'setCep',
        'uf' => 'setUf',
        'fone' => 'setFone',
        'email' => 'setEmail'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'x_lgr' => 'getXLgr',
        'nro' => 'getNro',
        'x_cpl' => 'getXCpl',
        'x_bairro' => 'getXBairro',
        'c_mun' => 'getCMun',
        'x_mun' => 'getXMun',
        'cep' => 'getCep',
        'uf' => 'getUf',
        'fone' => 'getFone',
        'email' => 'getEmail'
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
        $this->setIfExists('x_lgr', $data ?? [], null);
        $this->setIfExists('nro', $data ?? [], null);
        $this->setIfExists('x_cpl', $data ?? [], null);
        $this->setIfExists('x_bairro', $data ?? [], null);
        $this->setIfExists('c_mun', $data ?? [], null);
        $this->setIfExists('x_mun', $data ?? [], null);
        $this->setIfExists('cep', $data ?? [], null);
        $this->setIfExists('uf', $data ?? [], null);
        $this->setIfExists('fone', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
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

        if (!is_null($this->container['x_lgr']) && (mb_strlen($this->container['x_lgr']) > 60)) {
            $invalidProperties[] = "invalid value for 'x_lgr', the character length must be smaller than or equal to 60.";
        }

        if (!is_null($this->container['x_lgr']) && (mb_strlen($this->container['x_lgr']) < 2)) {
            $invalidProperties[] = "invalid value for 'x_lgr', the character length must be bigger than or equal to 2.";
        }

        if (!is_null($this->container['nro']) && (mb_strlen($this->container['nro']) > 60)) {
            $invalidProperties[] = "invalid value for 'nro', the character length must be smaller than or equal to 60.";
        }

        if (!is_null($this->container['nro']) && (mb_strlen($this->container['nro']) < 1)) {
            $invalidProperties[] = "invalid value for 'nro', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['x_cpl']) && (mb_strlen($this->container['x_cpl']) > 60)) {
            $invalidProperties[] = "invalid value for 'x_cpl', the character length must be smaller than or equal to 60.";
        }

        if (!is_null($this->container['x_cpl']) && (mb_strlen($this->container['x_cpl']) < 1)) {
            $invalidProperties[] = "invalid value for 'x_cpl', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['x_bairro']) && (mb_strlen($this->container['x_bairro']) > 60)) {
            $invalidProperties[] = "invalid value for 'x_bairro', the character length must be smaller than or equal to 60.";
        }

        if (!is_null($this->container['x_bairro']) && (mb_strlen($this->container['x_bairro']) < 2)) {
            $invalidProperties[] = "invalid value for 'x_bairro', the character length must be bigger than or equal to 2.";
        }

        if (!is_null($this->container['x_mun']) && (mb_strlen($this->container['x_mun']) > 60)) {
            $invalidProperties[] = "invalid value for 'x_mun', the character length must be smaller than or equal to 60.";
        }

        if (!is_null($this->container['x_mun']) && (mb_strlen($this->container['x_mun']) < 2)) {
            $invalidProperties[] = "invalid value for 'x_mun', the character length must be bigger than or equal to 2.";
        }

        if (!is_null($this->container['email']) && (mb_strlen($this->container['email']) > 60)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be smaller than or equal to 60.";
        }

        if (!is_null($this->container['email']) && (mb_strlen($this->container['email']) < 1)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be bigger than or equal to 1.";
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
     * Gets x_lgr
     *
     * @return string|null
     */
    public function getXLgr()
    {
        return $this->container['x_lgr'];
    }

    /**
     * Sets x_lgr
     *
     * @param string|null $x_lgr Logradouro.    *Caso não seja informado, será utilizado o do cadastro da empresa.*
     *
     * @return self
     */
    public function setXLgr($x_lgr)
    {
        if (is_null($x_lgr)) {
            array_push($this->openAPINullablesSetToNull, 'x_lgr');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('x_lgr', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($x_lgr) && (mb_strlen($x_lgr) > 60)) {
            throw new \InvalidArgumentException('invalid length for $x_lgr when calling NfcomSefazEndeEmi., must be smaller than or equal to 60.');
        }
        if (!is_null($x_lgr) && (mb_strlen($x_lgr) < 2)) {
            throw new \InvalidArgumentException('invalid length for $x_lgr when calling NfcomSefazEndeEmi., must be bigger than or equal to 2.');
        }

        $this->container['x_lgr'] = $x_lgr;

        return $this;
    }

    /**
     * Gets nro
     *
     * @return string|null
     */
    public function getNro()
    {
        return $this->container['nro'];
    }

    /**
     * Sets nro
     *
     * @param string|null $nro Número.    *Caso não seja informado, será utilizado o do cadastro da empresa.*
     *
     * @return self
     */
    public function setNro($nro)
    {
        if (is_null($nro)) {
            array_push($this->openAPINullablesSetToNull, 'nro');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('nro', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($nro) && (mb_strlen($nro) > 60)) {
            throw new \InvalidArgumentException('invalid length for $nro when calling NfcomSefazEndeEmi., must be smaller than or equal to 60.');
        }
        if (!is_null($nro) && (mb_strlen($nro) < 1)) {
            throw new \InvalidArgumentException('invalid length for $nro when calling NfcomSefazEndeEmi., must be bigger than or equal to 1.');
        }

        $this->container['nro'] = $nro;

        return $this;
    }

    /**
     * Gets x_cpl
     *
     * @return string|null
     */
    public function getXCpl()
    {
        return $this->container['x_cpl'];
    }

    /**
     * Sets x_cpl
     *
     * @param string|null $x_cpl Complemento.    *Caso não seja informado, será utilizado o do cadastro da empresa.*
     *
     * @return self
     */
    public function setXCpl($x_cpl)
    {
        if (is_null($x_cpl)) {
            array_push($this->openAPINullablesSetToNull, 'x_cpl');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('x_cpl', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($x_cpl) && (mb_strlen($x_cpl) > 60)) {
            throw new \InvalidArgumentException('invalid length for $x_cpl when calling NfcomSefazEndeEmi., must be smaller than or equal to 60.');
        }
        if (!is_null($x_cpl) && (mb_strlen($x_cpl) < 1)) {
            throw new \InvalidArgumentException('invalid length for $x_cpl when calling NfcomSefazEndeEmi., must be bigger than or equal to 1.');
        }

        $this->container['x_cpl'] = $x_cpl;

        return $this;
    }

    /**
     * Gets x_bairro
     *
     * @return string|null
     */
    public function getXBairro()
    {
        return $this->container['x_bairro'];
    }

    /**
     * Sets x_bairro
     *
     * @param string|null $x_bairro Bairro.    *Caso não seja informado, será utilizado o do cadastro da empresa.*
     *
     * @return self
     */
    public function setXBairro($x_bairro)
    {
        if (is_null($x_bairro)) {
            array_push($this->openAPINullablesSetToNull, 'x_bairro');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('x_bairro', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($x_bairro) && (mb_strlen($x_bairro) > 60)) {
            throw new \InvalidArgumentException('invalid length for $x_bairro when calling NfcomSefazEndeEmi., must be smaller than or equal to 60.');
        }
        if (!is_null($x_bairro) && (mb_strlen($x_bairro) < 2)) {
            throw new \InvalidArgumentException('invalid length for $x_bairro when calling NfcomSefazEndeEmi., must be bigger than or equal to 2.');
        }

        $this->container['x_bairro'] = $x_bairro;

        return $this;
    }

    /**
     * Gets c_mun
     *
     * @return string|null
     */
    public function getCMun()
    {
        return $this->container['c_mun'];
    }

    /**
     * Sets c_mun
     *
     * @param string|null $c_mun Código do município (utilizar a tabela do IBGE).    *Caso não seja informado, será utilizado o do cadastro da empresa.*
     *
     * @return self
     */
    public function setCMun($c_mun)
    {
        if (is_null($c_mun)) {
            array_push($this->openAPINullablesSetToNull, 'c_mun');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('c_mun', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['c_mun'] = $c_mun;

        return $this;
    }

    /**
     * Gets x_mun
     *
     * @return string|null
     */
    public function getXMun()
    {
        return $this->container['x_mun'];
    }

    /**
     * Sets x_mun
     *
     * @param string|null $x_mun Nome do município.    *Caso não seja informado, será utilizado o do cadastro da empresa.*
     *
     * @return self
     */
    public function setXMun($x_mun)
    {
        if (is_null($x_mun)) {
            array_push($this->openAPINullablesSetToNull, 'x_mun');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('x_mun', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($x_mun) && (mb_strlen($x_mun) > 60)) {
            throw new \InvalidArgumentException('invalid length for $x_mun when calling NfcomSefazEndeEmi., must be smaller than or equal to 60.');
        }
        if (!is_null($x_mun) && (mb_strlen($x_mun) < 2)) {
            throw new \InvalidArgumentException('invalid length for $x_mun when calling NfcomSefazEndeEmi., must be bigger than or equal to 2.');
        }

        $this->container['x_mun'] = $x_mun;

        return $this;
    }

    /**
     * Gets cep
     *
     * @return string|null
     */
    public function getCep()
    {
        return $this->container['cep'];
    }

    /**
     * Sets cep
     *
     * @param string|null $cep CEP.  Informar zeros não significativos.    *Caso não seja informado, será utilizado o do cadastro da empresa.*
     *
     * @return self
     */
    public function setCep($cep)
    {
        if (is_null($cep)) {
            array_push($this->openAPINullablesSetToNull, 'cep');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('cep', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['cep'] = $cep;

        return $this;
    }

    /**
     * Gets uf
     *
     * @return string|null
     */
    public function getUf()
    {
        return $this->container['uf'];
    }

    /**
     * Sets uf
     *
     * @param string|null $uf Sigla da UF.    *Caso não seja informado, será utilizado o do cadastro da empresa.*
     *
     * @return self
     */
    public function setUf($uf)
    {
        if (is_null($uf)) {
            array_push($this->openAPINullablesSetToNull, 'uf');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('uf', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['uf'] = $uf;

        return $this;
    }

    /**
     * Gets fone
     *
     * @return string|null
     */
    public function getFone()
    {
        return $this->container['fone'];
    }

    /**
     * Sets fone
     *
     * @param string|null $fone Telefone.    *Caso não seja informado, será utilizado o do cadastro da empresa.*
     *
     * @return self
     */
    public function setFone($fone)
    {
        if (is_null($fone)) {
            array_push($this->openAPINullablesSetToNull, 'fone');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('fone', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['fone'] = $fone;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email Endereço de E-mail.
     *
     * @return self
     */
    public function setEmail($email)
    {
        if (is_null($email)) {
            array_push($this->openAPINullablesSetToNull, 'email');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('email', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($email) && (mb_strlen($email) > 60)) {
            throw new \InvalidArgumentException('invalid length for $email when calling NfcomSefazEndeEmi., must be smaller than or equal to 60.');
        }
        if (!is_null($email) && (mb_strlen($email) < 1)) {
            throw new \InvalidArgumentException('invalid length for $email when calling NfcomSefazEndeEmi., must be bigger than or equal to 1.');
        }

        $this->container['email'] = $email;

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


