# # MdfeSefazInfMDFe

## Propriedades

Nome | Tipo | Descrição | Comentários
------------ | ------------- | ------------- | -------------
**versao** | **string** | Versão do leiaute.  Ex: \&quot;3.00\&quot;. |
**id** | **string** | Identificador da tag a ser assinada.  Informar a chave de acesso do MDF-e e precedida do literal \&quot;MDFe\&quot;. | [optional]
**ide** | [**\NuvemFiscal\Model\MdfeSefazIde**](MdfeSefazIde.md) |  |
**emit** | [**\NuvemFiscal\Model\MdfeSefazEmit**](MdfeSefazEmit.md) |  |
**inf_modal** | [**\NuvemFiscal\Model\MdfeSefazInfModal**](MdfeSefazInfModal.md) |  |
**inf_doc** | [**\NuvemFiscal\Model\MdfeSefazInfDoc**](MdfeSefazInfDoc.md) |  |
**seg** | [**\NuvemFiscal\Model\MdfeSefazSeg[]**](MdfeSefazSeg.md) | Informações de Seguro da Carga. | [optional]
**prod_pred** | [**\NuvemFiscal\Model\MdfeSefazProdPred**](MdfeSefazProdPred.md) |  | [optional]
**tot** | [**\NuvemFiscal\Model\MdfeSefazTot**](MdfeSefazTot.md) |  |
**lacres** | [**\NuvemFiscal\Model\MdfeSefazLacres[]**](MdfeSefazLacres.md) | Lacres do MDF-e.  Preechimento opcional para os modais Rodoviário e Ferroviário. | [optional]
**aut_xml** | [**\NuvemFiscal\Model\MdfeSefazAutXML[]**](MdfeSefazAutXML.md) | Autorizados para download do XML do DF-e.  Informar CNPJ ou CPF. Preencher os zeros não significativos. | [optional]
**inf_adic** | [**\NuvemFiscal\Model\MdfeSefazInfAdic**](MdfeSefazInfAdic.md) |  | [optional]
**inf_resp_tec** | [**\NuvemFiscal\Model\MdfeSefazRespTec**](MdfeSefazRespTec.md) |  | [optional]
**inf_solic_nff** | [**\NuvemFiscal\Model\MdfeSefazInfSolicNFF**](MdfeSefazInfSolicNFF.md) |  | [optional]

[[Voltar à lista de DTOs]](../../README.md#models) [[Voltar à lista de API]](../../README.md#endpoints) [[Voltar ao README]](../../README.md)
