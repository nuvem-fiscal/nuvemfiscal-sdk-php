# # MdfeSefazInfCTe

## Propriedades

Nome | Tipo | Descrição | Comentários
------------ | ------------- | ------------- | -------------
**ch_cte** | **string** | Conhecimento Eletrônico - Chave de Acesso. |
**seg_cod_barra** | **string** | Segundo código de barras. | [optional]
**ind_reentrega** | **int** | Indicador de Reentrega. | [optional]
**inf_unid_transp** | [**\NuvemFiscal\Model\MdfeSefazUnidadeTransp[]**](MdfeSefazUnidadeTransp.md) | Informações das Unidades de Transporte (Carreta/Reboque/Vagão).  Deve ser preenchido com as informações das unidades de transporte utilizadas. | [optional]
**peri** | [**\NuvemFiscal\Model\MdfeSefazPeri[]**](MdfeSefazPeri.md) | Preenchido quando for  transporte de produtos classificados pela ONU como perigosos. | [optional]
**inf_entrega_parcial** | [**\NuvemFiscal\Model\MdfeSefazInfEntregaParcial**](MdfeSefazInfEntregaParcial.md) |  | [optional]

[[Voltar à lista de DTOs]](../../README.md#models) [[Voltar à lista de API]](../../README.md#endpoints) [[Voltar ao README]](../../README.md)
