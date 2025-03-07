<?php
/**
 * CteSefazDest
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
 * CteSefazDest Class Doc Comment
 *
 * @category Class
 * @description Informações do Destinatário do CT-e.  Poderá não ser informado para os CT-e de redespacho intermediário e serviço vinculado a multimodal. Nos demais casos deverá sempre ser informado.
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CteSefazDest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CteSefazDest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cnpj' => 'string',
        'cpf' => 'string',
        'ie' => 'string',
        'x_nome' => 'string',
        'fone' => 'string',
        'isuf' => 'string',
        'ender_dest' => '\NuvemFiscal\Model\CteSefazEndereco',
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
        'ie' => null,
        'x_nome' => null,
        'fone' => null,
        'isuf' => null,
        'ender_dest' => null,
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
        'ie' => true,
        'x_nome' => true,
        'fone' => true,
        'isuf' => true,
        'ender_dest' => false,
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
        'ie' => 'IE',
        'x_nome' => 'xNome',
        'fone' => 'fone',
        'isuf' => 'ISUF',
        'ender_dest' => 'enderDest',
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
        'ie' => 'setIe',
        'x_nome' => 'setXNome',
        'fone' => 'setFone',
        'isuf' => 'setIsuf',
        'ender_dest' => 'setEnderDest',
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
        'ie' => 'getIe',
        'x_nome' => 'getXNome',
        'fone' => 'getFone',
        'isuf' => 'getIsuf',
        'ender_dest' => 'getEnderDest',
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
        $this->setIfExists('ie', $data ?? [], null);
        $this->setIfExists('x_nome', $data ?? [], null);
        $this->setIfExists('fone', $data ?? [], null);
        $this->setIfExists('isuf', $data ?? [], null);
        $this->setIfExists('ender_dest', $data ?? [], null);
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

        if ($this->container['x_nome'] === null) {
            $invalidProperties[] = "'x_nome' can't be null";
        }
        if ((mb_strlen($this->container['x_nome']) > 60)) {
            $invalidProperties[] = "invalid value for 'x_nome', the character length must be smaller than or equal to 60.";
        }

        if ((mb_strlen($this->container['x_nome']) < 2)) {
            $invalidProperties[] = "invalid value for 'x_nome', the character length must be bigger than or equal to 2.";
        }

        if ($this->container['ender_dest'] === null) {
            $invalidProperties[] = "'ender_dest' can't be null";
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
     * @param string|null $cnpj Número do CNPJ.  Em caso de empresa não estabelecida no Brasil, será informado o CNPJ com zeros.  Informar os zeros não significativos.
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
     * @param string|null $cpf Número do CPF.  Informar os zeros não significativos.
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
        $this->container['cpf'] = $cpf;

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
     * @param string|null $ie Inscrição Estadual.  Informar a IE do destinatário ou ISENTO se destinatário é contribuinte do ICMS isento de inscrição no cadastro de contribuintes do ICMS. Caso o destinatário não seja contribuinte do ICMS não informar o conteúdo.
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
     * @param string $x_nome Razão Social ou Nome do destinatário.
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
            throw new \InvalidArgumentException('invalid length for $x_nome when calling CteSefazDest., must be smaller than or equal to 60.');
        }
        if (!is_null($x_nome) && (mb_strlen($x_nome) < 2)) {
            throw new \InvalidArgumentException('invalid length for $x_nome when calling CteSefazDest., must be bigger than or equal to 2.');
        }

        $this->container['x_nome'] = $x_nome;

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
     * @param string|null $fone Telefone.
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
     * @param string|null $isuf Inscrição na SUFRAMA.  (Obrigatório nas operações com as áreas com benefícios de incentivos fiscais sob controle da SUFRAMA).
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
     * Gets ender_dest
     *
     * @return \NuvemFiscal\Model\CteSefazEndereco
     */
    public function getEnderDest()
    {
        return $this->container['ender_dest'];
    }

    /**
     * Sets ender_dest
     *
     * @param \NuvemFiscal\Model\CteSefazEndereco $ender_dest ender_dest
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
     * @param string|null $email Endereço de email.
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
            throw new \InvalidArgumentException('invalid length for $email when calling CteSefazDest., must be smaller than or equal to 60.');
        }
        if (!is_null($email) && (mb_strlen($email) < 1)) {
            throw new \InvalidArgumentException('invalid length for $email when calling CteSefazDest., must be bigger than or equal to 1.');
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


