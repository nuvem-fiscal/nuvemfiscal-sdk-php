# # CteSefazInfOutros

## Propriedades

Nome | Tipo | Descrição | Comentários
------------ | ------------- | ------------- | -------------
**tp_doc** | **string** | Tipo de documento originário.  Preencher com:  * 00 - Declaração  * 10 - Dutoviário  * 59 - CF-e SAT  * 65 - NFC-e  * 99 - Outros |
**desc_outros** | **string** | Descrição do documento. | [optional]
**n_doc** | **string** | Número. | [optional]
**d_emi** | **\DateTime** | Data de Emissão.  Formato AAAA-MM-DD. | [optional]
**v_doc_fisc** | **float** | Valor do documento. | [optional]
**d_prev** | **\DateTime** | Data prevista de entrega.  Formato AAAA-MM-DD. | [optional]
**inf_unid_carga** | [**\NuvemFiscal\Model\CteSefazUnidCarga[]**](CteSefazUnidCarga.md) |  | [optional]
**inf_unid_transp** | [**\NuvemFiscal\Model\CteSefazUnidadeTransp[]**](CteSefazUnidadeTransp.md) |  | [optional]

[[Voltar à lista de DTOs]](../../README.md#models) [[Voltar à lista de API]](../../README.md#endpoints) [[Voltar ao README]](../../README.md)
