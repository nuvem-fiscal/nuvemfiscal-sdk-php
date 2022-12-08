# # MdfeSefazInfNFe

## Propriedades

Nome | Tipo | Descrição | Comentários
------------ | ------------- | ------------- | -------------
**ch_nfe** | **string** | Nota Fiscal Eletrônica. |
**seg_cod_barra** | **string** | Segundo código de barras. | [optional]
**ind_reentrega** | **int** | Indicador de Reentrega. | [optional]
**inf_unid_transp** | [**\NuvemFiscal\Model\MdfeSefazUnidadeTransp[]**](MdfeSefazUnidadeTransp.md) | Informações das Unidades de Transporte (Carreta/Reboque/Vagão).  Deve ser preenchido com as informações das unidades de transporte utilizadas. | [optional]
**peri** | [**\NuvemFiscal\Model\MdfeSefazInfNFePeri[]**](MdfeSefazInfNFePeri.md) | Preenchido quando for  transporte de produtos classificados pela ONU como perigosos. | [optional]

[[Voltar à lista de DTOs]](../../README.md#models) [[Voltar à lista de API]](../../README.md#endpoints) [[Voltar ao README]](../../README.md)
