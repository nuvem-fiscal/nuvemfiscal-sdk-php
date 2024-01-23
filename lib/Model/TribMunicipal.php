<?php
/**
 * TribMunicipal
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
 * TribMunicipal Class Doc Comment
 *
 * @category Class
 * @description Grupo de informações relacionados ao Imposto Sobre Serviços de Qualquer Natureza - ISSQN.
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class TribMunicipal implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TribMunicipal';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'trib_issqn' => 'int',
        'c_loc_incid' => 'string',
        'c_pais_result' => 'string',
        'bm' => '\NuvemFiscal\Model\BeneficioMunicipal',
        'exig_susp' => '\NuvemFiscal\Model\ExigSuspensa',
        'tp_imunidade' => 'int',
        'v_bc' => 'float',
        'p_aliq' => 'float',
        'v_issqn' => 'float',
        'tp_ret_issqn' => 'int',
        'v_liq' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'trib_issqn' => null,
        'c_loc_incid' => null,
        'c_pais_result' => null,
        'bm' => null,
        'exig_susp' => null,
        'tp_imunidade' => null,
        'v_bc' => null,
        'p_aliq' => null,
        'v_issqn' => null,
        'tp_ret_issqn' => null,
        'v_liq' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'trib_issqn' => true,
        'c_loc_incid' => true,
        'c_pais_result' => true,
        'bm' => false,
        'exig_susp' => false,
        'tp_imunidade' => true,
        'v_bc' => true,
        'p_aliq' => true,
        'v_issqn' => true,
        'tp_ret_issqn' => true,
        'v_liq' => true
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
        'trib_issqn' => 'tribISSQN',
        'c_loc_incid' => 'cLocIncid',
        'c_pais_result' => 'cPaisResult',
        'bm' => 'BM',
        'exig_susp' => 'exigSusp',
        'tp_imunidade' => 'tpImunidade',
        'v_bc' => 'vBC',
        'p_aliq' => 'pAliq',
        'v_issqn' => 'vISSQN',
        'tp_ret_issqn' => 'tpRetISSQN',
        'v_liq' => 'vLiq'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'trib_issqn' => 'setTribIssqn',
        'c_loc_incid' => 'setCLocIncid',
        'c_pais_result' => 'setCPaisResult',
        'bm' => 'setBm',
        'exig_susp' => 'setExigSusp',
        'tp_imunidade' => 'setTpImunidade',
        'v_bc' => 'setVBc',
        'p_aliq' => 'setPAliq',
        'v_issqn' => 'setVIssqn',
        'tp_ret_issqn' => 'setTpRetIssqn',
        'v_liq' => 'setVLiq'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'trib_issqn' => 'getTribIssqn',
        'c_loc_incid' => 'getCLocIncid',
        'c_pais_result' => 'getCPaisResult',
        'bm' => 'getBm',
        'exig_susp' => 'getExigSusp',
        'tp_imunidade' => 'getTpImunidade',
        'v_bc' => 'getVBc',
        'p_aliq' => 'getPAliq',
        'v_issqn' => 'getVIssqn',
        'tp_ret_issqn' => 'getTpRetIssqn',
        'v_liq' => 'getVLiq'
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
        $this->setIfExists('trib_issqn', $data ?? [], null);
        $this->setIfExists('c_loc_incid', $data ?? [], null);
        $this->setIfExists('c_pais_result', $data ?? [], null);
        $this->setIfExists('bm', $data ?? [], null);
        $this->setIfExists('exig_susp', $data ?? [], null);
        $this->setIfExists('tp_imunidade', $data ?? [], null);
        $this->setIfExists('v_bc', $data ?? [], null);
        $this->setIfExists('p_aliq', $data ?? [], null);
        $this->setIfExists('v_issqn', $data ?? [], null);
        $this->setIfExists('tp_ret_issqn', $data ?? [], null);
        $this->setIfExists('v_liq', $data ?? [], null);
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

        if ($this->container['trib_issqn'] === null) {
            $invalidProperties[] = "'trib_issqn' can't be null";
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
     * Gets trib_issqn
     *
     * @return int
     */
    public function getTribIssqn()
    {
        return $this->container['trib_issqn'];
    }

    /**
     * Sets trib_issqn
     *
     * @param int $trib_issqn Tributação do ISSQN sobre o serviço prestado:  * 1 - Operação tributável  * 2 - Exportação de serviço  * 3 - Não Incidência  * 4 - Imunidade
     *
     * @return self
     */
    public function setTribIssqn($trib_issqn)
    {
        if (is_null($trib_issqn)) {
            array_push($this->openAPINullablesSetToNull, 'trib_issqn');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('trib_issqn', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['trib_issqn'] = $trib_issqn;

        return $this;
    }

    /**
     * Gets c_loc_incid
     *
     * @return string|null
     */
    public function getCLocIncid()
    {
        return $this->container['c_loc_incid'];
    }

    /**
     * Sets c_loc_incid
     *
     * @param string|null $c_loc_incid Código do município de incidência do ISSQN (tabela do IBGE).    Caso o envio seja pelo Sistema Nacional NFS-e, essa propriedade é ignorada e o município de incidência do ISSQN é determinado automaticamente pela SEFIN nacional, conforme regras do aspecto espacial da lei complementar federal (LC 116/03) que são válidas para todos os municípios.
     *
     * @return self
     */
    public function setCLocIncid($c_loc_incid)
    {
        if (is_null($c_loc_incid)) {
            array_push($this->openAPINullablesSetToNull, 'c_loc_incid');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('c_loc_incid', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['c_loc_incid'] = $c_loc_incid;

        return $this;
    }

    /**
     * Gets c_pais_result
     *
     * @return string|null
     */
    public function getCPaisResult()
    {
        return $this->container['c_pais_result'];
    }

    /**
     * Sets c_pais_result
     *
     * @param string|null $c_pais_result Código do país onde se verficou o resultado da prestação do serviço para o caso de Exportação de Serviço.(Tabela de Países ISO).
     *
     * @return self
     */
    public function setCPaisResult($c_pais_result)
    {
        if (is_null($c_pais_result)) {
            array_push($this->openAPINullablesSetToNull, 'c_pais_result');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('c_pais_result', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['c_pais_result'] = $c_pais_result;

        return $this;
    }

    /**
     * Gets bm
     *
     * @return \NuvemFiscal\Model\BeneficioMunicipal|null
     */
    public function getBm()
    {
        return $this->container['bm'];
    }

    /**
     * Sets bm
     *
     * @param \NuvemFiscal\Model\BeneficioMunicipal|null $bm bm
     *
     * @return self
     */
    public function setBm($bm)
    {
        if (is_null($bm)) {
            throw new \InvalidArgumentException('non-nullable bm cannot be null');
        }
        $this->container['bm'] = $bm;

        return $this;
    }

    /**
     * Gets exig_susp
     *
     * @return \NuvemFiscal\Model\ExigSuspensa|null
     */
    public function getExigSusp()
    {
        return $this->container['exig_susp'];
    }

    /**
     * Sets exig_susp
     *
     * @param \NuvemFiscal\Model\ExigSuspensa|null $exig_susp exig_susp
     *
     * @return self
     */
    public function setExigSusp($exig_susp)
    {
        if (is_null($exig_susp)) {
            throw new \InvalidArgumentException('non-nullable exig_susp cannot be null');
        }
        $this->container['exig_susp'] = $exig_susp;

        return $this;
    }

    /**
     * Gets tp_imunidade
     *
     * @return int|null
     */
    public function getTpImunidade()
    {
        return $this->container['tp_imunidade'];
    }

    /**
     * Sets tp_imunidade
     *
     * @param int|null $tp_imunidade Identificação da Imunidade do ISSQN - somente para o caso de Imunidade:  * 0 - Imunidade (tipo não informado na nota de origem)  * 1 - Patrimônio, renda ou serviços, uns dos outros (CF88, Art 150, VI, a)  * 2 - Templos de qualquer culto (CF88, Art 150, VI, b)  * 3 - Patrimônio, renda ou serviços dos partidos políticos, inclusive suas fundações, das entidades sindicais dos trabalhadores, das instituições de educação e de assistência social, sem fins lucrativos, atendidos os requisitos da lei (CF88, Art 150, VI, c)  * 4 - Livros, jornais, periódicos e o papel destinado a sua impressão (CF88, Art 150, VI, d)
     *
     * @return self
     */
    public function setTpImunidade($tp_imunidade)
    {
        if (is_null($tp_imunidade)) {
            array_push($this->openAPINullablesSetToNull, 'tp_imunidade');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tp_imunidade', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['tp_imunidade'] = $tp_imunidade;

        return $this;
    }

    /**
     * Gets v_bc
     *
     * @return float|null
     */
    public function getVBc()
    {
        return $this->container['v_bc'];
    }

    /**
     * Sets v_bc
     *
     * @param float|null $v_bc Valor da Base de Cálculo do ISSQN (R$).    Caso você não informe esse campo, vamos calculá-lo automaticamente.    **Atenção**: Para emissões pelo Sistema Nacional NFS-e, esse campo é ignorado e o valor é determinado automaticamente pela SEFIN nacional.
     *
     * @return self
     */
    public function setVBc($v_bc)
    {
        if (is_null($v_bc)) {
            array_push($this->openAPINullablesSetToNull, 'v_bc');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('v_bc', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['v_bc'] = $v_bc;

        return $this;
    }

    /**
     * Gets p_aliq
     *
     * @return float|null
     */
    public function getPAliq()
    {
        return $this->container['p_aliq'];
    }

    /**
     * Sets p_aliq
     *
     * @param float|null $p_aliq Valor da alíquota (%%) do serviço prestado relativo ao município sujeito ativo (município de incidência) do ISSQN.    **Observações**:  * Se o município de incidência pertence ao Sistema Nacional NFS-e a alíquota estará parametrizada e, portanto, será fornecida pelo sistema.  * Se o município de incidência não pertence ao Sistema Nacional NFS-e a alíquota não estará parametrizada e, por isso, deverá ser fornecida pelo emitente.
     *
     * @return self
     */
    public function setPAliq($p_aliq)
    {
        if (is_null($p_aliq)) {
            array_push($this->openAPINullablesSetToNull, 'p_aliq');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('p_aliq', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['p_aliq'] = $p_aliq;

        return $this;
    }

    /**
     * Gets v_issqn
     *
     * @return float|null
     */
    public function getVIssqn()
    {
        return $this->container['v_issqn'];
    }

    /**
     * Sets v_issqn
     *
     * @param float|null $v_issqn Valor do ISSQN (R$).    Caso você não informe esse campo, vamos calculá-lo automaticamente.    **Atenção**: Para emissões pelo Sistema Nacional NFS-e, esse campo é ignorado e o valor é determinado automaticamente pela SEFIN nacional.
     *
     * @return self
     */
    public function setVIssqn($v_issqn)
    {
        if (is_null($v_issqn)) {
            array_push($this->openAPINullablesSetToNull, 'v_issqn');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('v_issqn', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['v_issqn'] = $v_issqn;

        return $this;
    }

    /**
     * Gets tp_ret_issqn
     *
     * @return int|null
     */
    public function getTpRetIssqn()
    {
        return $this->container['tp_ret_issqn'];
    }

    /**
     * Sets tp_ret_issqn
     *
     * @param int|null $tp_ret_issqn Tipo de retencao do ISSQN:  * 1 - Não Retido  * 2 - Retido pelo Tomador  * 3 - Retido pelo Intermediario
     *
     * @return self
     */
    public function setTpRetIssqn($tp_ret_issqn)
    {
        if (is_null($tp_ret_issqn)) {
            array_push($this->openAPINullablesSetToNull, 'tp_ret_issqn');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tp_ret_issqn', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['tp_ret_issqn'] = $tp_ret_issqn;

        return $this;
    }

    /**
     * Gets v_liq
     *
     * @return float|null
     */
    public function getVLiq()
    {
        return $this->container['v_liq'];
    }

    /**
     * Sets v_liq
     *
     * @param float|null $v_liq Valor Líquido (R$).    Caso você não informe esse campo, vamos calculá-lo automaticamente.    **Atenção**: Para emissões pelo Sistema Nacional NFS-e, esse campo é ignorado e o valor é determinado automaticamente pela SEFIN nacional.
     *
     * @return self
     */
    public function setVLiq($v_liq)
    {
        if (is_null($v_liq)) {
            array_push($this->openAPINullablesSetToNull, 'v_liq');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('v_liq', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['v_liq'] = $v_liq;

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


