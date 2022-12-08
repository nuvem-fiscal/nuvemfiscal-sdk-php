# # NfeSefazICMSST

## Propriedades

Nome | Tipo | Descrição | Comentários
------------ | ------------- | ------------- | -------------
**orig** | **int** | Origem da mercadoria:  0 - Nacional, exceto as indicadas nos códigos 3, 4, 5 e 8;  1 - Estrangeira - Importação direta, exceto a indicada no código 6;  2 - Estrangeira - Adquirida no mercado interno, exceto a indicada no código 7;  3 - Nacional, mercadoria ou bem com Conteúdo de Importação superior a 40%% e inferior ou igual a 70%%;  4 - Nacional, cuja produção tenha sido feita em conformidade com os processos produtivos básicos de que tratam as legislações citadas nos Ajustes;  5 - Nacional, mercadoria ou bem com Conteúdo de Importação inferior ou igual a 40%%;  6 - Estrangeira - Importação direta, sem similar nacional, constante em lista da CAMEX e gás natural;  7 - Estrangeira - Adquirida no mercado interno, sem similar nacional, constante lista CAMEX e gás natural;  8 - Nacional, mercadoria ou bem com Conteúdo de Importação superior a 70%%. |
**cst** | **string** | Tributção pelo ICMS  41-Não Tributado.  60-Cobrado anteriormente por substituição tributária. |
**v_bcst_ret** | **float** | Informar o valor da BC do ICMS ST retido na UF remetente. |
**p_st** | **float** | Aliquota suportada pelo consumidor final. | [optional]
**v_icms_substituto** | **float** | Valor do ICMS Próprio do Substituto cobrado em operação anterior. | [optional]
**v_icmsst_ret** | **float** | Informar o valor do ICMS ST retido na UF remetente (iv2.0)). |
**v_bcfcpst_ret** | **float** | Informar o valor da Base de Cálculo do FCP retido anteriormente por ST. | [optional]
**p_fcpst_ret** | **float** | Percentual relativo ao Fundo de Combate à Pobreza (FCP) retido por substituição tributária. | [optional]
**v_fcpst_ret** | **float** | Valor do ICMS relativo ao Fundo de Combate à Pobreza (FCP) retido por substituição tributária. | [optional]
**v_bcst_dest** | **float** | Informar o valor da BC do ICMS ST da UF destino. |
**v_icmsst_dest** | **float** | Informar o valor da BC do ICMS ST da UF destino (v2.0). |
**p_red_bc_efet** | **float** | Percentual de redução da base de cálculo efetiva. | [optional]
**v_bc_efet** | **float** | Valor da base de cálculo efetiva. | [optional]
**p_icms_efet** | **float** | Alíquota do ICMS efetivo. | [optional]
**v_icms_efet** | **float** | Valor do ICMS efetivo. | [optional]

[[Voltar à lista de DTOs]](../../README.md#models) [[Voltar à lista de API]](../../README.md#endpoints) [[Voltar ao README]](../../README.md)
