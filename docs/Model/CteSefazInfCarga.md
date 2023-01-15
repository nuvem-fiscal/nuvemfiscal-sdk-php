# # CteSefazInfCarga

## Propriedades

Nome | Tipo | Descrição | Comentários
------------ | ------------- | ------------- | -------------
**v_carga** | **float** | Valor total da carga.  Dever ser informado para todos os modais, com exceção para o Dutoviário. | [optional]
**pro_pred** | **string** | Produto predominante.  Informar a descrição do produto predominante. |
**x_out_cat** | **string** | Outras características da carga.  \&quot;FRIA\&quot;, \&quot;GRANEL\&quot;, \&quot;REFRIGERADA\&quot;, \&quot;Medidas: 12X12X12\&quot;. | [optional]
**inf_q** | [**\NuvemFiscal\Model\CteSefazInfQ[]**](CteSefazInfQ.md) |  |
**v_carga_averb** | **float** | Valor da Carga para efeito de averbação.  Normalmente igual ao valor declarado da mercadoria, diferente por exemplo, quando a mercadoria transportada é isenta de tributos nacionais para exportação, onde é preciso averbar um valor maior, pois no caso de indenização, o valor a ser pago será maior. | [optional]

[[Voltar à lista de DTOs]](../../README.md#models) [[Voltar à lista de API]](../../README.md#endpoints) [[Voltar ao README]](../../README.md)
