# # TribOutrosPisCofins

## Propriedades

Nome | Tipo | Descrição | Comentários
------------ | ------------- | ------------- | -------------
**cst** | **string** | Código de Situação Tributária do PIS/COFINS (CST):  * 00 - Nenhum  * 01 - Operação Tributável com Alíquota Básica  * 02 - Operação Tributável com Alíquota Diferenciada  * 03 - Operação Tributável com Alíquota por Unidade de Medida de Produto  * 04 - Operação Tributável monofásica - Revenda a Alíquota Zero  * 05 - Operação Tributável por Substituição Tributária  * 06 - Operação Tributável a Alíquota Zero  * 07 - Operação Tributável da Contribuição  * 08 - Operação sem Incidência da Contribuição  * 09 - Operação com Suspensão da Contribuição |
**v_bc_pis_cofins** | **float** | Valor da Base de Cálculo do PIS/COFINS (R$). | [optional]
**p_aliq_pis** | **float** | Valor da Alíquota do PIS (%%). | [optional]
**p_aliq_cofins** | **float** | Valor da Alíquota da COFINS (%%). | [optional]
**v_pis** | **float** | Valor monetário do PIS (R$). | [optional]
**v_cofins** | **float** | Valor monetário do COFINS (R$). | [optional]
**tp_ret_pis_cofins** | **int** | Tipo de retencao do Pis/Cofins:  * 1 - Retido  * 2 - Não Retido | [optional]

[[Voltar à lista de DTOs]](../../README.md#models) [[Voltar à lista de API]](../../README.md#endpoints) [[Voltar ao README]](../../README.md)
