<?php
/**
 * NfeSefazLocal
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
 * NfeSefazLocal Class Doc Comment
 *
 * @category Class
 * @description Identificação do local de retirada/entrega (informar apenas quando for diferente do endereço do remetente/destinatário)
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class NfeSefazLocal implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NfeSefazLocal';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cnpj' => 'string',
        'cpf' => 'string',
        'x_nome' => 'string',
        'x_lgr' => 'string',
        'nro' => 'string',
        'x_cpl' => 'string',
        'x_bairro' => 'string',
        'c_mun' => 'string',
        'x_mun' => 'string',
        'uf' => 'string',
        'cep' => 'string',
        'c_pais' => 'string',
        'x_pais' => 'string',
        'fone' => 'string',
        'email' => 'string',
        'ie' => 'string'
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
        'x_nome' => null,
        'x_lgr' => null,
        'nro' => null,
        'x_cpl' => null,
        'x_bairro' => null,
        'c_mun' => null,
        'x_mun' => null,
        'uf' => null,
        'cep' => null,
        'c_pais' => null,
        'x_pais' => null,
        'fone' => null,
        'email' => null,
        'ie' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'cnpj' => true,
        'cpf' => true,
        'x_nome' => true,
        'x_lgr' => true,
        'nro' => true,
        'x_cpl' => true,
        'x_bairro' => true,
        'c_mun' => true,
        'x_mun' => true,
        'uf' => true,
        'cep' => true,
        'c_pais' => true,
        'x_pais' => true,
        'fone' => true,
        'email' => true,
        'ie' => true
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
        'x_nome' => 'xNome',
        'x_lgr' => 'xLgr',
        'nro' => 'nro',
        'x_cpl' => 'xCpl',
        'x_bairro' => 'xBairro',
        'c_mun' => 'cMun',
        'x_mun' => 'xMun',
        'uf' => 'UF',
        'cep' => 'CEP',
        'c_pais' => 'cPais',
        'x_pais' => 'xPais',
        'fone' => 'fone',
        'email' => 'email',
        'ie' => 'IE'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cnpj' => 'setCnpj',
        'cpf' => 'setCpf',
        'x_nome' => 'setXNome',
        'x_lgr' => 'setXLgr',
        'nro' => 'setNro',
        'x_cpl' => 'setXCpl',
        'x_bairro' => 'setXBairro',
        'c_mun' => 'setCMun',
        'x_mun' => 'setXMun',
        'uf' => 'setUf',
        'cep' => 'setCep',
        'c_pais' => 'setCPais',
        'x_pais' => 'setXPais',
        'fone' => 'setFone',
        'email' => 'setEmail',
        'ie' => 'setIe'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cnpj' => 'getCnpj',
        'cpf' => 'getCpf',
        'x_nome' => 'getXNome',
        'x_lgr' => 'getXLgr',
        'nro' => 'getNro',
        'x_cpl' => 'getXCpl',
        'x_bairro' => 'getXBairro',
        'c_mun' => 'getCMun',
        'x_mun' => 'getXMun',
        'uf' => 'getUf',
        'cep' => 'getCep',
        'c_pais' => 'getCPais',
        'x_pais' => 'getXPais',
        'fone' => 'getFone',
        'email' => 'getEmail',
        'ie' => 'getIe'
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
        $this->setIfExists('x_nome', $data ?? [], null);
        $this->setIfExists('x_lgr', $data ?? [], null);
        $this->setIfExists('nro', $data ?? [], null);
        $this->setIfExists('x_cpl', $data ?? [], null);
        $this->setIfExists('x_bairro', $data ?? [], null);
        $this->setIfExists('c_mun', $data ?? [], null);
        $this->setIfExists('x_mun', $data ?? [], null);
        $this->setIfExists('uf', $data ?? [], null);
        $this->setIfExists('cep', $data ?? [], null);
        $this->setIfExists('c_pais', $data ?? [], null);
        $this->setIfExists('x_pais', $data ?? [], null);
        $this->setIfExists('fone', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('ie', $data ?? [], null);
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

        if ($this->container['x_lgr'] === null) {
            $invalidProperties[] = "'x_lgr' can't be null";
        }
        if ((mb_strlen($this->container['x_lgr']) > 60)) {
            $invalidProperties[] = "invalid value for 'x_lgr', the character length must be smaller than or equal to 60.";
        }

        if ((mb_strlen($this->container['x_lgr']) < 2)) {
            $invalidProperties[] = "invalid value for 'x_lgr', the character length must be bigger than or equal to 2.";
        }

        if ($this->container['nro'] === null) {
            $invalidProperties[] = "'nro' can't be null";
        }
        if ((mb_strlen($this->container['nro']) > 60)) {
            $invalidProperties[] = "invalid value for 'nro', the character length must be smaller than or equal to 60.";
        }

        if ((mb_strlen($this->container['nro']) < 1)) {
            $invalidProperties[] = "invalid value for 'nro', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['x_cpl']) && (mb_strlen($this->container['x_cpl']) > 60)) {
            $invalidProperties[] = "invalid value for 'x_cpl', the character length must be smaller than or equal to 60.";
        }

        if (!is_null($this->container['x_cpl']) && (mb_strlen($this->container['x_cpl']) < 1)) {
            $invalidProperties[] = "invalid value for 'x_cpl', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['x_bairro'] === null) {
            $invalidProperties[] = "'x_bairro' can't be null";
        }
        if ((mb_strlen($this->container['x_bairro']) > 60)) {
            $invalidProperties[] = "invalid value for 'x_bairro', the character length must be smaller than or equal to 60.";
        }

        if ((mb_strlen($this->container['x_bairro']) < 2)) {
            $invalidProperties[] = "invalid value for 'x_bairro', the character length must be bigger than or equal to 2.";
        }

        if ($this->container['c_mun'] === null) {
            $invalidProperties[] = "'c_mun' can't be null";
        }
        if ($this->container['x_mun'] === null) {
            $invalidProperties[] = "'x_mun' can't be null";
        }
        if ((mb_strlen($this->container['x_mun']) > 60)) {
            $invalidProperties[] = "invalid value for 'x_mun', the character length must be smaller than or equal to 60.";
        }

        if ((mb_strlen($this->container['x_mun']) < 2)) {
            $invalidProperties[] = "invalid value for 'x_mun', the character length must be bigger than or equal to 2.";
        }

        if ($this->container['uf'] === null) {
            $invalidProperties[] = "'uf' can't be null";
        }
        if (!is_null($this->container['x_pais']) && (mb_strlen($this->container['x_pais']) > 60)) {
            $invalidProperties[] = "invalid value for 'x_pais', the character length must be smaller than or equal to 60.";
        }

        if (!is_null($this->container['x_pais']) && (mb_strlen($this->container['x_pais']) < 2)) {
            $invalidProperties[] = "invalid value for 'x_pais', the character length must be bigger than or equal to 2.";
        }

        if (!is_null($this->container['email']) && (mb_strlen($this->container['email']) > 60)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be smaller than or equal to 60.";
        }

        if (!is_null($this->container['email']) && (mb_strlen($this->container['email']) < 1)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['ie']) && (mb_strlen($this->container['ie']) > 14)) {
            $invalidProperties[] = "invalid value for 'ie', the character length must be smaller than or equal to 14.";
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
     * @param string|null $cnpj CNPJ.
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
            throw new \InvalidArgumentException('invalid length for $cnpj when calling NfeSefazLocal., must be smaller than or equal to 14.');
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
     * @param string|null $cpf CPF (v2.0).
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
            throw new \InvalidArgumentException('invalid length for $cpf when calling NfeSefazLocal., must be smaller than or equal to 11.');
        }

        $this->container['cpf'] = $cpf;

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
     * @param string|null $x_nome Razão Social ou Nome do Expedidor/Recebedor.
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
            throw new \InvalidArgumentException('invalid length for $x_nome when calling NfeSefazLocal., must be smaller than or equal to 60.');
        }
        if (!is_null($x_nome) && (mb_strlen($x_nome) < 2)) {
            throw new \InvalidArgumentException('invalid length for $x_nome when calling NfeSefazLocal., must be bigger than or equal to 2.');
        }

        $this->container['x_nome'] = $x_nome;

        return $this;
    }

    /**
     * Gets x_lgr
     *
     * @return string
     */
    public function getXLgr()
    {
        return $this->container['x_lgr'];
    }

    /**
     * Sets x_lgr
     *
     * @param string $x_lgr Logradouro.
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
            throw new \InvalidArgumentException('invalid length for $x_lgr when calling NfeSefazLocal., must be smaller than or equal to 60.');
        }
        if (!is_null($x_lgr) && (mb_strlen($x_lgr) < 2)) {
            throw new \InvalidArgumentException('invalid length for $x_lgr when calling NfeSefazLocal., must be bigger than or equal to 2.');
        }

        $this->container['x_lgr'] = $x_lgr;

        return $this;
    }

    /**
     * Gets nro
     *
     * @return string
     */
    public function getNro()
    {
        return $this->container['nro'];
    }

    /**
     * Sets nro
     *
     * @param string $nro Número.
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
            throw new \InvalidArgumentException('invalid length for $nro when calling NfeSefazLocal., must be smaller than or equal to 60.');
        }
        if (!is_null($nro) && (mb_strlen($nro) < 1)) {
            throw new \InvalidArgumentException('invalid length for $nro when calling NfeSefazLocal., must be bigger than or equal to 1.');
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
     * @param string|null $x_cpl Complemento.
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
            throw new \InvalidArgumentException('invalid length for $x_cpl when calling NfeSefazLocal., must be smaller than or equal to 60.');
        }
        if (!is_null($x_cpl) && (mb_strlen($x_cpl) < 1)) {
            throw new \InvalidArgumentException('invalid length for $x_cpl when calling NfeSefazLocal., must be bigger than or equal to 1.');
        }

        $this->container['x_cpl'] = $x_cpl;

        return $this;
    }

    /**
     * Gets x_bairro
     *
     * @return string
     */
    public function getXBairro()
    {
        return $this->container['x_bairro'];
    }

    /**
     * Sets x_bairro
     *
     * @param string $x_bairro Bairro.
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
            throw new \InvalidArgumentException('invalid length for $x_bairro when calling NfeSefazLocal., must be smaller than or equal to 60.');
        }
        if (!is_null($x_bairro) && (mb_strlen($x_bairro) < 2)) {
            throw new \InvalidArgumentException('invalid length for $x_bairro when calling NfeSefazLocal., must be bigger than or equal to 2.');
        }

        $this->container['x_bairro'] = $x_bairro;

        return $this;
    }

    /**
     * Gets c_mun
     *
     * @return string
     */
    public function getCMun()
    {
        return $this->container['c_mun'];
    }

    /**
     * Sets c_mun
     *
     * @param string $c_mun Código do município (utilizar a tabela do IBGE).
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
     * @return string
     */
    public function getXMun()
    {
        return $this->container['x_mun'];
    }

    /**
     * Sets x_mun
     *
     * @param string $x_mun Nome do município.
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
            throw new \InvalidArgumentException('invalid length for $x_mun when calling NfeSefazLocal., must be smaller than or equal to 60.');
        }
        if (!is_null($x_mun) && (mb_strlen($x_mun) < 2)) {
            throw new \InvalidArgumentException('invalid length for $x_mun when calling NfeSefazLocal., must be bigger than or equal to 2.');
        }

        $this->container['x_mun'] = $x_mun;

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
     * @param string $uf Sigla da UF.
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
     * @param string|null $cep CEP.
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
     * Gets c_pais
     *
     * @return string|null
     */
    public function getCPais()
    {
        return $this->container['c_pais'];
    }

    /**
     * Sets c_pais
     *
     * @param string|null $c_pais Código de Pais.
     *
     * @return self
     */
    public function setCPais($c_pais)
    {
        if (is_null($c_pais)) {
            array_push($this->openAPINullablesSetToNull, 'c_pais');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('c_pais', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['c_pais'] = $c_pais;

        return $this;
    }

    /**
     * Gets x_pais
     *
     * @return string|null
     */
    public function getXPais()
    {
        return $this->container['x_pais'];
    }

    /**
     * Sets x_pais
     *
     * @param string|null $x_pais Nome do país.
     *
     * @return self
     */
    public function setXPais($x_pais)
    {
        if (is_null($x_pais)) {
            array_push($this->openAPINullablesSetToNull, 'x_pais');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('x_pais', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($x_pais) && (mb_strlen($x_pais) > 60)) {
            throw new \InvalidArgumentException('invalid length for $x_pais when calling NfeSefazLocal., must be smaller than or equal to 60.');
        }
        if (!is_null($x_pais) && (mb_strlen($x_pais) < 2)) {
            throw new \InvalidArgumentException('invalid length for $x_pais when calling NfeSefazLocal., must be bigger than or equal to 2.');
        }

        $this->container['x_pais'] = $x_pais;

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
     * @param string|null $fone Telefone, preencher com Código DDD + número do telefone , nas operações com exterior é permtido informar o código do país + código da localidade + número do telefone.
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
     * @param string|null $email Informar o e-mail do expedidor/Recebedor. O campo pode ser utilizado para informar o e-mail de recepção da NF-e indicada pelo expedidor.
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
            throw new \InvalidArgumentException('invalid length for $email when calling NfeSefazLocal., must be smaller than or equal to 60.');
        }
        if (!is_null($email) && (mb_strlen($email) < 1)) {
            throw new \InvalidArgumentException('invalid length for $email when calling NfeSefazLocal., must be bigger than or equal to 1.');
        }

        $this->container['email'] = $email;

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
     * @param string|null $ie Inscrição Estadual (v2.0).
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
            throw new \InvalidArgumentException('invalid length for $ie when calling NfeSefazLocal., must be smaller than or equal to 14.');
        }

        $this->container['ie'] = $ie;

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


