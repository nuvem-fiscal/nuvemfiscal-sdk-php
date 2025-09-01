# # CteSefazDuto

## Propriedades

Nome | Tipo | Descrição | Comentários
------------ | ------------- | ------------- | -------------
**v_tar** | **float** | Valor da tarifa. | [optional]
**d_ini** | **\DateTime** | Data de Início da prestação do serviço. |
**d_fim** | **\DateTime** | Data de Fim da prestação do serviço. |
**class_duto** | **int** | Classificação do Dutoviário.  Informar: 1 - Gasoduto 2 - Mineroduto 3 - Oleoduto. | [optional]
**tp_contratacao** | **int** | Tipo de contratação do serviço de transporte (apenas para gasoduto).  Informar:  * 0 - Ponta a ponto  * 1 - Capacidade de Entrada  * 2 - Capacidade de Saida | [optional]
**cod_ponto_entrada** | **string** | Código do Ponto de Entrada. | [optional]
**cod_ponto_saida** | **string** | Código do Ponto de Saída. | [optional]
**n_contrato** | **string** | Número do Contrato de Capacidade. | [optional]

[[Voltar à lista de DTOs]](../../README.md#models) [[Voltar à lista de API]](../../README.md#endpoints) [[Voltar ao README]](../../README.md)
