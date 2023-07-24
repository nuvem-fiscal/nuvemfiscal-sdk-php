# # CnpjEmpresa

## Propriedades

Nome | Tipo | Descrição | Comentários
------------ | ------------- | ------------- | -------------
**cnpj** | **string** | Número de inscrição do CNPJ. | [optional]
**razao_social** | **string** | Nome empresarial da pessoa jurídica. | [optional]
**nome_fantasia** | **string** | Corresponde ao nome fantasia. | [optional]
**data_inicio_atividade** | **\DateTime** | Data de início da atividade. | [optional]
**matriz** | **bool** | Indicador de matriz/filial:  * &#x60;true&#x60; - É matriz  * &#x60;false&#x60; - É filial | [optional]
**natureza_juridica** | [**\NuvemFiscal\Model\CnpjNaturezaJuridica**](CnpjNaturezaJuridica.md) |  | [optional]
**capital_social** | **float** | Capital social da empresa. | [optional]
**porte** | [**\NuvemFiscal\Model\CnpjPorteEmpresa**](CnpjPorteEmpresa.md) |  | [optional]
**ente_federativo_responsavel** | **string** | O ente federativo responsável é preenchido para os casos de órgãos e  entidades do grupo de natureza jurídica 1XXX. Para as demais naturezas,  este atributo fica em branco. | [optional]
**situacao_cadastral** | [**\NuvemFiscal\Model\CnpjSituacaoCadastral**](CnpjSituacaoCadastral.md) |  | [optional]
**motivo_situacao_cadastral** | [**\NuvemFiscal\Model\CnpjMotivoSituacaoCadastral**](CnpjMotivoSituacaoCadastral.md) |  | [optional]
**nome_da_cidade_no_exterior** | **string** | Nome da cidade no exterior. | [optional]
**pais** | [**\NuvemFiscal\Model\CnpjPais**](CnpjPais.md) |  | [optional]
**atividade_principal** | [**\NuvemFiscal\Model\CnpjCnae**](CnpjCnae.md) |  | [optional]
**atividades_secundarias** | [**\NuvemFiscal\Model\CnpjCnaeSecundario[]**](CnpjCnaeSecundario.md) |  | [optional]
**endereco** | [**\NuvemFiscal\Model\CnpjEndereco**](CnpjEndereco.md) |  | [optional]
**telefones** | [**\NuvemFiscal\Model\CnpjTelefone[]**](CnpjTelefone.md) |  | [optional]
**email** | **string** | E-mail do contribuinte. | [optional]
**situacao_especial** | [**\NuvemFiscal\Model\CnpjSituacaoEspecial**](CnpjSituacaoEspecial.md) |  | [optional]
**simples** | [**\NuvemFiscal\Model\CnpjOpcaoSimples**](CnpjOpcaoSimples.md) |  | [optional]
**simei** | [**\NuvemFiscal\Model\CnpjOpcaoSimei**](CnpjOpcaoSimei.md) |  | [optional]
**socios** | [**\NuvemFiscal\Model\CnpjSocio[]**](CnpjSocio.md) |  | [optional]

[[Voltar à lista de DTOs]](../../README.md#models) [[Voltar à lista de API]](../../README.md#endpoints) [[Voltar ao README]](../../README.md)
