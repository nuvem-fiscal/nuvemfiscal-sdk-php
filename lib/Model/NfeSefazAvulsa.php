<?php
/**
 * NfeSefazAvulsa
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
 * NfeSefazAvulsa Class Doc Comment
 *
 * @category Class
 * @description Emissão de avulsa, informar os dados do Fisco emitente.
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class NfeSefazAvulsa implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NfeSefazAvulsa';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cnpj' => 'string',
        'x_orgao' => 'string',
        'matr' => 'string',
        'x_agente' => 'string',
        'fone' => 'string',
        'uf' => 'string',
        'n_dar' => 'string',
        'd_emi' => '\DateTime',
        'v_dar' => 'float',
        'rep_emi' => 'string',
        'd_pag' => '\DateTime'
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
        'x_orgao' => null,
        'matr' => null,
        'x_agente' => null,
        'fone' => null,
        'uf' => null,
        'n_dar' => null,
        'd_emi' => 'date',
        'v_dar' => null,
        'rep_emi' => null,
        'd_pag' => 'date'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'cnpj' => true,
        'x_orgao' => true,
        'matr' => true,
        'x_agente' => true,
        'fone' => true,
        'uf' => true,
        'n_dar' => true,
        'd_emi' => true,
        'v_dar' => true,
        'rep_emi' => true,
        'd_pag' => true
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
        'x_orgao' => 'xOrgao',
        'matr' => 'matr',
        'x_agente' => 'xAgente',
        'fone' => 'fone',
        'uf' => 'UF',
        'n_dar' => 'nDAR',
        'd_emi' => 'dEmi',
        'v_dar' => 'vDAR',
        'rep_emi' => 'repEmi',
        'd_pag' => 'dPag'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cnpj' => 'setCnpj',
        'x_orgao' => 'setXOrgao',
        'matr' => 'setMatr',
        'x_agente' => 'setXAgente',
        'fone' => 'setFone',
        'uf' => 'setUf',
        'n_dar' => 'setNDar',
        'd_emi' => 'setDEmi',
        'v_dar' => 'setVDar',
        'rep_emi' => 'setRepEmi',
        'd_pag' => 'setDPag'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cnpj' => 'getCnpj',
        'x_orgao' => 'getXOrgao',
        'matr' => 'getMatr',
        'x_agente' => 'getXAgente',
        'fone' => 'getFone',
        'uf' => 'getUf',
        'n_dar' => 'getNDar',
        'd_emi' => 'getDEmi',
        'v_dar' => 'getVDar',
        'rep_emi' => 'getRepEmi',
        'd_pag' => 'getDPag'
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
        $this->setIfExists('x_orgao', $data ?? [], null);
        $this->setIfExists('matr', $data ?? [], null);
        $this->setIfExists('x_agente', $data ?? [], null);
        $this->setIfExists('fone', $data ?? [], null);
        $this->setIfExists('uf', $data ?? [], null);
        $this->setIfExists('n_dar', $data ?? [], null);
        $this->setIfExists('d_emi', $data ?? [], null);
        $this->setIfExists('v_dar', $data ?? [], null);
        $this->setIfExists('rep_emi', $data ?? [], null);
        $this->setIfExists('d_pag', $data ?? [], null);
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
        if ((mb_strlen($this->container['cnpj']) > 14)) {
            $invalidProperties[] = "invalid value for 'cnpj', the character length must be smaller than or equal to 14.";
        }

        if ($this->container['x_orgao'] === null) {
            $invalidProperties[] = "'x_orgao' can't be null";
        }
        if ((mb_strlen($this->container['x_orgao']) > 60)) {
            $invalidProperties[] = "invalid value for 'x_orgao', the character length must be smaller than or equal to 60.";
        }

        if ((mb_strlen($this->container['x_orgao']) < 1)) {
            $invalidProperties[] = "invalid value for 'x_orgao', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['matr'] === null) {
            $invalidProperties[] = "'matr' can't be null";
        }
        if ((mb_strlen($this->container['matr']) > 60)) {
            $invalidProperties[] = "invalid value for 'matr', the character length must be smaller than or equal to 60.";
        }

        if ((mb_strlen($this->container['matr']) < 1)) {
            $invalidProperties[] = "invalid value for 'matr', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['x_agente'] === null) {
            $invalidProperties[] = "'x_agente' can't be null";
        }
        if ((mb_strlen($this->container['x_agente']) > 60)) {
            $invalidProperties[] = "invalid value for 'x_agente', the character length must be smaller than or equal to 60.";
        }

        if ((mb_strlen($this->container['x_agente']) < 1)) {
            $invalidProperties[] = "invalid value for 'x_agente', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['uf'] === null) {
            $invalidProperties[] = "'uf' can't be null";
        }
        if (!is_null($this->container['n_dar']) && (mb_strlen($this->container['n_dar']) > 60)) {
            $invalidProperties[] = "invalid value for 'n_dar', the character length must be smaller than or equal to 60.";
        }

        if (!is_null($this->container['n_dar']) && (mb_strlen($this->container['n_dar']) < 1)) {
            $invalidProperties[] = "invalid value for 'n_dar', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['v_dar']) && ($this->container['v_dar'] < 0)) {
            $invalidProperties[] = "invalid value for 'v_dar', must be bigger than or equal to 0.";
        }

        if ($this->container['rep_emi'] === null) {
            $invalidProperties[] = "'rep_emi' can't be null";
        }
        if ((mb_strlen($this->container['rep_emi']) > 60)) {
            $invalidProperties[] = "invalid value for 'rep_emi', the character length must be smaller than or equal to 60.";
        }

        if ((mb_strlen($this->container['rep_emi']) < 1)) {
            $invalidProperties[] = "invalid value for 'rep_emi', the character length must be bigger than or equal to 1.";
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
     * @param string $cnpj CNPJ do Órgão emissor.
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
            throw new \InvalidArgumentException('invalid length for $cnpj when calling NfeSefazAvulsa., must be smaller than or equal to 14.');
        }

        $this->container['cnpj'] = $cnpj;

        return $this;
    }

    /**
     * Gets x_orgao
     *
     * @return string
     */
    public function getXOrgao()
    {
        return $this->container['x_orgao'];
    }

    /**
     * Sets x_orgao
     *
     * @param string $x_orgao Órgão emitente.
     *
     * @return self
     */
    public function setXOrgao($x_orgao)
    {
        if (is_null($x_orgao)) {
            array_push($this->openAPINullablesSetToNull, 'x_orgao');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('x_orgao', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($x_orgao) && (mb_strlen($x_orgao) > 60)) {
            throw new \InvalidArgumentException('invalid length for $x_orgao when calling NfeSefazAvulsa., must be smaller than or equal to 60.');
        }
        if (!is_null($x_orgao) && (mb_strlen($x_orgao) < 1)) {
            throw new \InvalidArgumentException('invalid length for $x_orgao when calling NfeSefazAvulsa., must be bigger than or equal to 1.');
        }

        $this->container['x_orgao'] = $x_orgao;

        return $this;
    }

    /**
     * Gets matr
     *
     * @return string
     */
    public function getMatr()
    {
        return $this->container['matr'];
    }

    /**
     * Sets matr
     *
     * @param string $matr Matrícula do agente.
     *
     * @return self
     */
    public function setMatr($matr)
    {
        if (is_null($matr)) {
            array_push($this->openAPINullablesSetToNull, 'matr');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('matr', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($matr) && (mb_strlen($matr) > 60)) {
            throw new \InvalidArgumentException('invalid length for $matr when calling NfeSefazAvulsa., must be smaller than or equal to 60.');
        }
        if (!is_null($matr) && (mb_strlen($matr) < 1)) {
            throw new \InvalidArgumentException('invalid length for $matr when calling NfeSefazAvulsa., must be bigger than or equal to 1.');
        }

        $this->container['matr'] = $matr;

        return $this;
    }

    /**
     * Gets x_agente
     *
     * @return string
     */
    public function getXAgente()
    {
        return $this->container['x_agente'];
    }

    /**
     * Sets x_agente
     *
     * @param string $x_agente Nome do agente.
     *
     * @return self
     */
    public function setXAgente($x_agente)
    {
        if (is_null($x_agente)) {
            array_push($this->openAPINullablesSetToNull, 'x_agente');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('x_agente', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($x_agente) && (mb_strlen($x_agente) > 60)) {
            throw new \InvalidArgumentException('invalid length for $x_agente when calling NfeSefazAvulsa., must be smaller than or equal to 60.');
        }
        if (!is_null($x_agente) && (mb_strlen($x_agente) < 1)) {
            throw new \InvalidArgumentException('invalid length for $x_agente when calling NfeSefazAvulsa., must be bigger than or equal to 1.');
        }

        $this->container['x_agente'] = $x_agente;

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
     * Gets uf
     *
     * @return string
     */
    public function getUf()
    {
        return $this->container['uf'];
    }

    /**
     * Sets uf
     *
     * @param string $uf Sigla da Unidade da Federação.
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
     * Gets n_dar
     *
     * @return string|null
     */
    public function getNDar()
    {
        return $this->container['n_dar'];
    }

    /**
     * Sets n_dar
     *
     * @param string|null $n_dar Número do Documento de Arrecadação de Receita.
     *
     * @return self
     */
    public function setNDar($n_dar)
    {
        if (is_null($n_dar)) {
            array_push($this->openAPINullablesSetToNull, 'n_dar');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('n_dar', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($n_dar) && (mb_strlen($n_dar) > 60)) {
            throw new \InvalidArgumentException('invalid length for $n_dar when calling NfeSefazAvulsa., must be smaller than or equal to 60.');
        }
        if (!is_null($n_dar) && (mb_strlen($n_dar) < 1)) {
            throw new \InvalidArgumentException('invalid length for $n_dar when calling NfeSefazAvulsa., must be bigger than or equal to 1.');
        }

        $this->container['n_dar'] = $n_dar;

        return $this;
    }

    /**
     * Gets d_emi
     *
     * @return \DateTime|null
     */
    public function getDEmi()
    {
        return $this->container['d_emi'];
    }

    /**
     * Sets d_emi
     *
     * @param \DateTime|null $d_emi Data de emissão do DAR (AAAA-MM-DD).
     *
     * @return self
     */
    public function setDEmi($d_emi)
    {
        if (is_null($d_emi)) {
            array_push($this->openAPINullablesSetToNull, 'd_emi');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('d_emi', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['d_emi'] = $d_emi;

        return $this;
    }

    /**
     * Gets v_dar
     *
     * @return float|null
     */
    public function getVDar()
    {
        return $this->container['v_dar'];
    }

    /**
     * Sets v_dar
     *
     * @param float|null $v_dar Valor Total constante no DAR.
     *
     * @return self
     */
    public function setVDar($v_dar)
    {
        if (is_null($v_dar)) {
            array_push($this->openAPINullablesSetToNull, 'v_dar');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('v_dar', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($v_dar) && ($v_dar < 0)) {
            throw new \InvalidArgumentException('invalid value for $v_dar when calling NfeSefazAvulsa., must be bigger than or equal to 0.');
        }

        $this->container['v_dar'] = $v_dar;

        return $this;
    }

    /**
     * Gets rep_emi
     *
     * @return string
     */
    public function getRepEmi()
    {
        return $this->container['rep_emi'];
    }

    /**
     * Sets rep_emi
     *
     * @param string $rep_emi Repartição Fiscal emitente.
     *
     * @return self
     */
    public function setRepEmi($rep_emi)
    {
        if (is_null($rep_emi)) {
            array_push($this->openAPINullablesSetToNull, 'rep_emi');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('rep_emi', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($rep_emi) && (mb_strlen($rep_emi) > 60)) {
            throw new \InvalidArgumentException('invalid length for $rep_emi when calling NfeSefazAvulsa., must be smaller than or equal to 60.');
        }
        if (!is_null($rep_emi) && (mb_strlen($rep_emi) < 1)) {
            throw new \InvalidArgumentException('invalid length for $rep_emi when calling NfeSefazAvulsa., must be bigger than or equal to 1.');
        }

        $this->container['rep_emi'] = $rep_emi;

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
     * @param \DateTime|null $d_pag Data de pagamento do DAR (AAAA-MM-DD).
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


