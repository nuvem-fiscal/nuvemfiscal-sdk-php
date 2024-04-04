# # NfeSefazDetPag

## Propriedades

Nome | Tipo | Descrição | Comentários
------------ | ------------- | ------------- | -------------
**ind_pag** | **int** | Indicador da Forma de Pagamento:0-Pagamento à Vista  * 1 - Pagamento à Prazo | [optional]
**t_pag** | **string** | Forma de Pagamento:. |
**x_pag** | **string** | Descrição do Meio de Pagamento. | [optional]
**v_pag** | **float** | Valor do Pagamento. Esta tag poderá ser omitida quando a tag tPag&#x3D;90 (Sem Pagamento), caso contrário deverá ser preenchida. |
**d_pag** | **\DateTime** | Data do Pagamento. | [optional]
**cnpj_pag** | **string** | CNPJ transacional do pagamento - Preencher informando o CNPJ do estabelecimento onde o pagamento foi processado/transacionado/recebido quando a emissão do documento fiscal ocorrer em estabelecimento distinto. | [optional]
**uf_pag** | **string** | UF do CNPJ do estabelecimento onde o pagamento foi processado/transacionado/recebido. | [optional]
**card** | [**\NuvemFiscal\Model\NfeSefazCard**](NfeSefazCard.md) |  | [optional]

[[Voltar à lista de DTOs]](../../README.md#models) [[Voltar à lista de API]](../../README.md#endpoints) [[Voltar ao README]](../../README.md)
