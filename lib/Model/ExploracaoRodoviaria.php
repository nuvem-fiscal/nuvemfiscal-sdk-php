<?php
/**
 * ExploracaoRodoviaria
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
 * ExploracaoRodoviaria Class Doc Comment
 *
 * @category Class
 * @description Grupo de informações relativas a pedágio.
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ExploracaoRodoviaria implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ExploracaoRodoviaria';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'categ_veic' => 'string',
        'n_eixos' => 'string',
        'rodagem' => 'int',
        'sentido' => 'string',
        'placa' => 'string',
        'cod_acesso_ped' => 'string',
        'cod_contrato' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'categ_veic' => null,
        'n_eixos' => null,
        'rodagem' => null,
        'sentido' => null,
        'placa' => null,
        'cod_acesso_ped' => null,
        'cod_contrato' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'categ_veic' => true,
        'n_eixos' => true,
        'rodagem' => true,
        'sentido' => true,
        'placa' => true,
        'cod_acesso_ped' => true,
        'cod_contrato' => true
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
        'categ_veic' => 'categVeic',
        'n_eixos' => 'nEixos',
        'rodagem' => 'rodagem',
        'sentido' => 'sentido',
        'placa' => 'placa',
        'cod_acesso_ped' => 'codAcessoPed',
        'cod_contrato' => 'codContrato'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'categ_veic' => 'setCategVeic',
        'n_eixos' => 'setNEixos',
        'rodagem' => 'setRodagem',
        'sentido' => 'setSentido',
        'placa' => 'setPlaca',
        'cod_acesso_ped' => 'setCodAcessoPed',
        'cod_contrato' => 'setCodContrato'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'categ_veic' => 'getCategVeic',
        'n_eixos' => 'getNEixos',
        'rodagem' => 'getRodagem',
        'sentido' => 'getSentido',
        'placa' => 'getPlaca',
        'cod_acesso_ped' => 'getCodAcessoPed',
        'cod_contrato' => 'getCodContrato'
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
        $this->setIfExists('categ_veic', $data ?? [], null);
        $this->setIfExists('n_eixos', $data ?? [], null);
        $this->setIfExists('rodagem', $data ?? [], null);
        $this->setIfExists('sentido', $data ?? [], null);
        $this->setIfExists('placa', $data ?? [], null);
        $this->setIfExists('cod_acesso_ped', $data ?? [], null);
        $this->setIfExists('cod_contrato', $data ?? [], null);
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

        if ($this->container['categ_veic'] === null) {
            $invalidProperties[] = "'categ_veic' can't be null";
        }
        if ($this->container['n_eixos'] === null) {
            $invalidProperties[] = "'n_eixos' can't be null";
        }
        if ($this->container['rodagem'] === null) {
            $invalidProperties[] = "'rodagem' can't be null";
        }
        if ($this->container['sentido'] === null) {
            $invalidProperties[] = "'sentido' can't be null";
        }
        if ($this->container['placa'] === null) {
            $invalidProperties[] = "'placa' can't be null";
        }
        if ($this->container['cod_acesso_ped'] === null) {
            $invalidProperties[] = "'cod_acesso_ped' can't be null";
        }
        if ($this->container['cod_contrato'] === null) {
            $invalidProperties[] = "'cod_contrato' can't be null";
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
     * Gets categ_veic
     *
     * @return string
     */
    public function getCategVeic()
    {
        return $this->container['categ_veic'];
    }

    /**
     * Sets categ_veic
     *
     * @param string $categ_veic Categorias de veículos para cobrança:  * 00 - Categoria de veículos (tipo não informado na nota de origem)  * 01 - Automóvel, caminhonete e furgão  * 02 - Caminhão leve, ônibus, caminhão trator e furgão  * 03 - Automóvel e caminhonete com semireboque  * 04 - Caminhão, caminhão-trator, caminhão-trator com semi-reboque e ônibus  * 05 - Automóvel e caminhonete com reboque  * 06 - Caminhão com reboque  * 07 - Caminhão trator com semi-reboque  * 08 - Motocicletas, motonetas e bicicletas motorizadas  * 09 - Veículo especial  * 10 - Veículo Isento
     *
     * @return self
     */
    public function setCategVeic($categ_veic)
    {
        if (is_null($categ_veic)) {
            array_push($this->openAPINullablesSetToNull, 'categ_veic');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('categ_veic', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['categ_veic'] = $categ_veic;

        return $this;
    }

    /**
     * Gets n_eixos
     *
     * @return string
     */
    public function getNEixos()
    {
        return $this->container['n_eixos'];
    }

    /**
     * Sets n_eixos
     *
     * @param string $n_eixos Número de eixos para fins de cobrança.
     *
     * @return self
     */
    public function setNEixos($n_eixos)
    {
        if (is_null($n_eixos)) {
            array_push($this->openAPINullablesSetToNull, 'n_eixos');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('n_eixos', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['n_eixos'] = $n_eixos;

        return $this;
    }

    /**
     * Gets rodagem
     *
     * @return int
     */
    public function getRodagem()
    {
        return $this->container['rodagem'];
    }

    /**
     * Sets rodagem
     *
     * @param int $rodagem Tipo de rodagem.
     *
     * @return self
     */
    public function setRodagem($rodagem)
    {
        if (is_null($rodagem)) {
            array_push($this->openAPINullablesSetToNull, 'rodagem');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('rodagem', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['rodagem'] = $rodagem;

        return $this;
    }

    /**
     * Gets sentido
     *
     * @return string
     */
    public function getSentido()
    {
        return $this->container['sentido'];
    }

    /**
     * Sets sentido
     *
     * @param string $sentido Placa do veículo.
     *
     * @return self
     */
    public function setSentido($sentido)
    {
        if (is_null($sentido)) {
            array_push($this->openAPINullablesSetToNull, 'sentido');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('sentido', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['sentido'] = $sentido;

        return $this;
    }

    /**
     * Gets placa
     *
     * @return string
     */
    public function getPlaca()
    {
        return $this->container['placa'];
    }

    /**
     * Sets placa
     *
     * @param string $placa Placa do veículo.
     *
     * @return self
     */
    public function setPlaca($placa)
    {
        if (is_null($placa)) {
            array_push($this->openAPINullablesSetToNull, 'placa');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('placa', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['placa'] = $placa;

        return $this;
    }

    /**
     * Gets cod_acesso_ped
     *
     * @return string
     */
    public function getCodAcessoPed()
    {
        return $this->container['cod_acesso_ped'];
    }

    /**
     * Sets cod_acesso_ped
     *
     * @param string $cod_acesso_ped Código de acesso gerado automaticamente pelo sistema emissor da concessionária.
     *
     * @return self
     */
    public function setCodAcessoPed($cod_acesso_ped)
    {
        if (is_null($cod_acesso_ped)) {
            array_push($this->openAPINullablesSetToNull, 'cod_acesso_ped');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('cod_acesso_ped', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['cod_acesso_ped'] = $cod_acesso_ped;

        return $this;
    }

    /**
     * Gets cod_contrato
     *
     * @return string
     */
    public function getCodContrato()
    {
        return $this->container['cod_contrato'];
    }

    /**
     * Sets cod_contrato
     *
     * @param string $cod_contrato Código de contrato gerado automaticamente pelo sistema nacional no cadastro da concessionária.
     *
     * @return self
     */
    public function setCodContrato($cod_contrato)
    {
        if (is_null($cod_contrato)) {
            array_push($this->openAPINullablesSetToNull, 'cod_contrato');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('cod_contrato', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['cod_contrato'] = $cod_contrato;

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


