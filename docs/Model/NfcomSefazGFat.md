# # NfcomSefazGFat

## Propriedades

Nome | Tipo | Descrição | Comentários
------------ | ------------- | ------------- | -------------
**compet_fat** | **string** | Ano e mês referência do faturamento (AAAAMM). |
**d_venc_fat** | **\DateTime** | Data de vencimento da fatura.  Formato AAAA-MM-DD. |
**d_per_uso_ini** | **\DateTime** | Período de uso inicial.  Formato AAAA-MM-DD. | [optional]
**d_per_uso_fim** | **\DateTime** | Período de uso final.  Formato AAAA-MM-DD. | [optional]
**cod_barras** | **string** | Linha digitável do código de barras. |
**cod_deb_auto** | **string** | Código de autorização débito em conta. | [optional]
**cod_banco** | **string** | Número do banco para débito em conta. | [optional]
**cod_agencia** | **string** | Número da agência bancária para débito em conta. | [optional]
**ender_corresp** | [**\NuvemFiscal\Model\NfcomSefazEndeEmi**](NfcomSefazEndeEmi.md) |  | [optional]
**g_pix** | [**\NuvemFiscal\Model\NfcomSefazGPIX**](NfcomSefazGPIX.md) |  | [optional]

[[Voltar à lista de DTOs]](../../README.md#models) [[Voltar à lista de API]](../../README.md#endpoints) [[Voltar ao README]](../../README.md)
