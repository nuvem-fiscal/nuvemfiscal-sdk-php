# # CteSimpSefazUnidadeTranspSimp

## Propriedades

Nome | Tipo | Descrição | Comentários
------------ | ------------- | ------------- | -------------
**tp_unid_transp** | **int** | Tipo da Unidade de Transporte.  * 1 - Rodoviário Tração  * 2 - Rodoviário Reboque  * 3 - Navio  * 4 - Balsa  * 5 - Aeronave  * 6 - Vagão  * 7 - Outros |
**id_unid_transp** | **string** | Identificação da Unidade de Transporte.  Informar a identificação conforme o tipo de unidade de transporte.  Por exemplo: para rodoviário tração ou reboque deverá preencher com a placa do veículo. |
**lac_unid_transp** | [**\NuvemFiscal\Model\CteSimpSefazLacUnidTranspSimp[]**](CteSimpSefazLacUnidTranspSimp.md) |  | [optional]
**inf_unid_carga** | [**\NuvemFiscal\Model\CteSimpSefazUnidCargaSimp[]**](CteSimpSefazUnidCargaSimp.md) |  | [optional]
**qtd_rat** | **float** | Quantidade rateada (Peso,Volume). | [optional]

[[Voltar à lista de DTOs]](../../README.md#models) [[Voltar à lista de API]](../../README.md#endpoints) [[Voltar ao README]](../../README.md)
