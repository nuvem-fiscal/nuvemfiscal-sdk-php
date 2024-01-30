# # NfcomSefazDet

## Propriedades

Nome | Tipo | Descrição | Comentários
------------ | ------------- | ------------- | -------------
**n_item** | **int** | Número do item da NFCom. |
**ch_nf_com_ant** | **string** | Chave de Acesso da NFCom anterior.  Informar chave de acesso de referencia anterior  TAG OPCIONAL, DEVE SER INFORMADA APENAS NOS CASOS PREVISTOS DE NOTA ANTERIOR REFERENCIADA. | [optional]
**n_item_ant** | **string** | Número do item da NFCom anterior.  Informar nro do item da chave de acesso de referencia anterior  TAG OPCIONAL, DEVE SER INFORMADA APENAS NOS CASOS PREVISTOS DE NOTA ANTERIOR REFERENCIADA. | [optional]
**prod** | [**\NuvemFiscal\Model\NfcomSefazProd**](NfcomSefazProd.md) |  |
**imposto** | [**\NuvemFiscal\Model\NfcomSefazImposto**](NfcomSefazImposto.md) |  |
**g_proc_ref** | [**\NuvemFiscal\Model\NfcomSefazGProcRef**](NfcomSefazGProcRef.md) |  | [optional]
**g_ressarc** | [**\NuvemFiscal\Model\NfcomSefazGRessarc**](NfcomSefazGRessarc.md) |  | [optional]
**inf_ad_prod** | **string** | Informações adicionais do produto (norma referenciada, informações complementares, etc). | [optional]

[[Voltar à lista de DTOs]](../../README.md#models) [[Voltar à lista de API]](../../README.md#endpoints) [[Voltar ao README]](../../README.md)
