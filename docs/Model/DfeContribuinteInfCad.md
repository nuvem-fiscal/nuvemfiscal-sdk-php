# # DfeContribuinteInfCad

## Propriedades

Nome | Tipo | Descrição | Comentários
------------ | ------------- | ------------- | -------------
**ie** | **string** | Número da Inscrição Estadual do contribuinte. |
**cnpj** | **string** | Número do CNPJ  do contribuinte. | [optional]
**cpf** | **string** | Número do CPF do contribuinte. | [optional]
**uf** | **string** | Sigla da UF de localização do contribuinte. Em algumas situações, a UF de localização pode ser diferente da UF consultada. Ex. IE de Substituto Tributário. |
**situacao_cadastral** | **int** | Situação cadastral do contribuinte:  * 0 - não habilitado  * 1 - habilitado |
**indicador_nfe** | **int** | Indicador de contribuinte credenciado a emitir NF-e.  * 0 - Não credenciado para emissão da NF-e  * 1 - Credenciado  * 2 - Credenciado com obrigatoriedade para todas operações  * 3 - Credenciado com obrigatoriedade parcial  * 4 - a SEFAZ não fornece a informação  Este indicador significa apenas que o contribuinte é credenciado para emitir NF-e na SEFAZ consultada. |
**indicador_cte** | **int** | Indicador de contribuinte credenciado a emitir CT-e.  * 0 - Não credenciado para emissão da CT-e  * 1 - Credenciado  * 2 - Credenciado com obrigatoriedade para todas operações  * 3 - Credenciado com obrigatoriedade parcial  * 4 - a SEFAZ não fornece a informação  Este indicador significa apenas que o contribuinte é credenciado para emitir CT-e na SEFAZ consultada. |
**nome_razao_social** | **string** | Razão Social ou nome do contribuinte. |
**nome_fantasia** | **string** | Razão Social ou nome do contribuinte. | [optional]
**regime_apuracao_icms** | **string** | Regime de Apuração do ICMS. | [optional]
**cnae** | **string** | CNAE Fiscal do contribuinte. | [optional]
**data_inicio_atividade** | **\DateTime** | Data de início de atividades do contribuinte. | [optional]
**data_situacao_cadastral** | **\DateTime** | Data da última modificação da situação cadastral do contribuinte. | [optional]
**data_fim_atividade** | **\DateTime** | Data de ocorrência da baixa do contribuinte. | [optional]
**ie_unica** | **string** | Inscrição Estadual Única. | [optional]
**ie_atual** | **string** | Inscrição Estadual atual. | [optional]
**endereco** | [**\NuvemFiscal\Model\DfeContribuinteEndereco**](DfeContribuinteEndereco.md) |  | [optional]

[[Voltar à lista de DTOs]](../../README.md#models) [[Voltar à lista de API]](../../README.md#endpoints) [[Voltar ao README]](../../README.md)
