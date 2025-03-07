<?php
/**
 * NfeSefazDest
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
 * NfeSefazDest Class Doc Comment
 *
 * @category Class
 * @description Identificação do Destinatário.
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class NfeSefazDest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NfeSefazDest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cnpj' => 'string',
        'cpf' => 'string',
        'id_estrangeiro' => 'string',
        'x_nome' => 'string',
        'ender_dest' => '\NuvemFiscal\Model\NfeSefazEndereco',
        'ind_ie_dest' => 'int',
        'ie' => 'string',
        'isuf' => 'string',
        'im' => 'string',
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
        'cnpj' => null,
        'cpf' => null,
        'id_estrangeiro' => null,
        'x_nome' => null,
        'ender_dest' => null,
        'ind_ie_dest' => null,
        'ie' => null,
        'isuf' => null,
        'im' => null,
        'email' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'cnpj' => true,
        'cpf' => true,
        'id_estrangeiro' => true,
        'x_nome' => true,
        'ender_dest' => false,
        'ind_ie_dest' => true,
        'ie' => true,
        'isuf' => true,
        'im' => true,
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
        'cnpj' => 'CNPJ',
        'cpf' => 'CPF',
        'id_estrangeiro' => 'idEstrangeiro',
        'x_nome' => 'xNome',
        'ender_dest' => 'enderDest',
        'ind_ie_dest' => 'indIEDest',
        'ie' => 'IE',
        'isuf' => 'ISUF',
        'im' => 'IM',
        'email' => 'email'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cnpj' => 'setCnpj',
        'cpf' => 'setCpf',
        'id_estrangeiro' => 'setIdEstrangeiro',
        'x_nome' => 'setXNome',
        'ender_dest' => 'setEnderDest',
        'ind_ie_dest' => 'setIndIeDest',
        'ie' => 'setIe',
        'isuf' => 'setIsuf',
        'im' => 'setIm',
        'email' => 'setEmail'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cnpj' => 'getCnpj',
        'cpf' => 'getCpf',
        'id_estrangeiro' => 'getIdEstrangeiro',
        'x_nome' => 'getXNome',
        'ender_dest' => 'getEnderDest',
        'ind_ie_dest' => 'getIndIeDest',
        'ie' => 'getIe',
        'isuf' => 'getIsuf',
        'im' => 'getIm',
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
        $this->setIfExists('cnpj', $data ?? [], null);
        $this->setIfExists('cpf', $data ?? [], null);
        $this->setIfExists('id_estrangeiro', $data ?? [], null);
        $this->setIfExists('x_nome', $data ?? [], null);
        $this->setIfExists('ender_dest', $data ?? [], null);
        $this->setIfExists('ind_ie_dest', $data ?? [], null);
        $this->setIfExists('ie', $data ?? [], null);
        $this->setIfExists('isuf', $data ?? [], null);
        $this->setIfExists('im', $data ?? [], null);
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

        if (!is_null($this->container['cnpj']) && (mb_strlen($this->container['cnpj']) > 14)) {
            $invalidProperties[] = "invalid value for 'cnpj', the character length must be smaller than or equal to 14.";
        }

        if (!is_null($this->container['cpf']) && (mb_strlen($this->container['cpf']) > 11)) {
            $invalidProperties[] = "invalid value for 'cpf', the character length must be smaller than or equal to 11.";
        }

        if (!is_null($this->container['x_nome']) && (mb_strlen($this->container['x_nome']) > 60)) {
            $invalidProperties[] = "invalid value for 'x_nome', the character length must be smaller than or equal to 60.";
        }

        if (!is_null($this->container['x_nome']) && (mb_strlen($this->container['x_nome']) < 2)) {
            $invalidProperties[] = "invalid value for 'x_nome', the character length must be bigger than or equal to 2.";
        }

        if ($this->container['ind_ie_dest'] === null) {
            $invalidProperties[] = "'ind_ie_dest' can't be null";
        }
        if (!is_null($this->container['ie']) && (mb_strlen($this->container['ie']) > 14)) {
            $invalidProperties[] = "invalid value for 'ie', the character length must be smaller than or equal to 14.";
        }

        if (!is_null($this->container['im']) && (mb_strlen($this->container['im']) > 15)) {
            $invalidProperties[] = "invalid value for 'im', the character length must be smaller than or equal to 15.";
        }

        if (!is_null($this->container['im']) && (mb_strlen($this->container['im']) < 1)) {
            $invalidProperties[] = "invalid value for 'im', the character length must be bigger than or equal to 1.";
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
     * Gets cnpj
     *
     * @return string|null
     */
    public function getCnpj()
    {
        return $this->container['cnpj'];
    }

    /**
     * Sets cnpj
     *
     * @param string|null $cnpj Número do CNPJ.
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
        if (!is_null($cnpj) && (mb_strlen($cnpj) > 14)) {
            throw new \InvalidArgumentException('invalid length for $cnpj when calling NfeSefazDest., must be smaller than or equal to 14.');
        }

        $this->container['cnpj'] = $cnpj;

        return $this;
    }

    /**
     * Gets cpf
     *
     * @return string|null
     */
    public function getCpf()
    {
        return $this->container['cpf'];
    }

    /**
     * Sets cpf
     *
     * @param string|null $cpf Número do CPF.
     *
     * @return self
     */
    public function setCpf($cpf)
    {
        if (is_null($cpf)) {
            array_push($this->openAPINullablesSetToNull, 'cpf');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('cpf', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($cpf) && (mb_strlen($cpf) > 11)) {
            throw new \InvalidArgumentException('invalid length for $cpf when calling NfeSefazDest., must be smaller than or equal to 11.');
        }

        $this->container['cpf'] = $cpf;

        return $this;
    }

    /**
     * Gets id_estrangeiro
     *
     * @return string|null
     */
    public function getIdEstrangeiro()
    {
        return $this->container['id_estrangeiro'];
    }

    /**
     * Sets id_estrangeiro
     *
     * @param string|null $id_estrangeiro Identificador do destinatário, em caso de comprador estrangeiro.
     *
     * @return self
     */
    public function setIdEstrangeiro($id_estrangeiro)
    {
        if (is_null($id_estrangeiro)) {
            array_push($this->openAPINullablesSetToNull, 'id_estrangeiro');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('id_estrangeiro', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['id_estrangeiro'] = $id_estrangeiro;

        return $this;
    }

    /**
     * Gets x_nome
     *
     * @return string|null
     */
    public function getXNome()
    {
        return $this->container['x_nome'];
    }

    /**
     * Sets x_nome
     *
     * @param string|null $x_nome Razão Social ou nome do destinatário.
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
            throw new \InvalidArgumentException('invalid length for $x_nome when calling NfeSefazDest., must be smaller than or equal to 60.');
        }
        if (!is_null($x_nome) && (mb_strlen($x_nome) < 2)) {
            throw new \InvalidArgumentException('invalid length for $x_nome when calling NfeSefazDest., must be bigger than or equal to 2.');
        }

        $this->container['x_nome'] = $x_nome;

        return $this;
    }

    /**
     * Gets ender_dest
     *
     * @return \NuvemFiscal\Model\NfeSefazEndereco|null
     */
    public function getEnderDest()
    {
        return $this->container['ender_dest'];
    }

    /**
     * Sets ender_dest
     *
     * @param \NuvemFiscal\Model\NfeSefazEndereco|null $ender_dest ender_dest
     *
     * @return self
     */
    public function setEnderDest($ender_dest)
    {
        if (is_null($ender_dest)) {
            throw new \InvalidArgumentException('non-nullable ender_dest cannot be null');
        }
        $this->container['ender_dest'] = $ender_dest;

        return $this;
    }

    /**
     * Gets ind_ie_dest
     *
     * @return int
     */
    public function getIndIeDest()
    {
        return $this->container['ind_ie_dest'];
    }

    /**
     * Sets ind_ie_dest
     *
     * @param int $ind_ie_dest Indicador da IE do destinatário:  * 1 - Contribuinte ICMSpagamento à vista  * 2 - Contribuinte isento de inscrição  * 9 - Não Contribuinte
     *
     * @return self
     */
    public function setIndIeDest($ind_ie_dest)
    {
        if (is_null($ind_ie_dest)) {
            array_push($this->openAPINullablesSetToNull, 'ind_ie_dest');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ind_ie_dest', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ind_ie_dest'] = $ind_ie_dest;

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
     * @param string|null $ie Inscrição Estadual (obrigatório nas operações com contribuintes do ICMS).
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
            throw new \InvalidArgumentException('invalid length for $ie when calling NfeSefazDest., must be smaller than or equal to 14.');
        }

        $this->container['ie'] = $ie;

        return $this;
    }

    /**
     * Gets isuf
     *
     * @return string|null
     */
    public function getIsuf()
    {
        return $this->container['isuf'];
    }

    /**
     * Sets isuf
     *
     * @param string|null $isuf Inscrição na SUFRAMA (Obrigatório nas operações com as áreas com benefícios de incentivos fiscais sob controle da SUFRAMA) PL_005d - 11/08/09 - alterado para aceitar 8 ou 9 dígitos.
     *
     * @return self
     */
    public function setIsuf($isuf)
    {
        if (is_null($isuf)) {
            array_push($this->openAPINullablesSetToNull, 'isuf');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('isuf', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['isuf'] = $isuf;

        return $this;
    }

    /**
     * Gets im
     *
     * @return string|null
     */
    public function getIm()
    {
        return $this->container['im'];
    }

    /**
     * Sets im
     *
     * @param string|null $im Inscrição Municipal do tomador do serviço.
     *
     * @return self
     */
    public function setIm($im)
    {
        if (is_null($im)) {
            array_push($this->openAPINullablesSetToNull, 'im');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('im', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($im) && (mb_strlen($im) > 15)) {
            throw new \InvalidArgumentException('invalid length for $im when calling NfeSefazDest., must be smaller than or equal to 15.');
        }
        if (!is_null($im) && (mb_strlen($im) < 1)) {
            throw new \InvalidArgumentException('invalid length for $im when calling NfeSefazDest., must be bigger than or equal to 1.');
        }

        $this->container['im'] = $im;

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
     * @param string|null $email Informar o e-mail do destinatário. O campo pode ser utilizado para informar o e-mail  de recepção da NF-e indicada pelo destinatário.
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
            throw new \InvalidArgumentException('invalid length for $email when calling NfeSefazDest., must be smaller than or equal to 60.');
        }
        if (!is_null($email) && (mb_strlen($email) < 1)) {
            throw new \InvalidArgumentException('invalid length for $email when calling NfeSefazDest., must be bigger than or equal to 1.');
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


