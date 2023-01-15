# # NfeSefazICMSSN500

## Propriedades

Nome | Tipo | Descrição | Comentários
------------ | ------------- | ------------- | -------------
**orig** | **int** | Origem da mercadoria:  * 0 - Nacional, exceto as indicadas nos códigos 3, 4, 5 e 8;  * 1 - Estrangeira - Importação direta, exceto a indicada no código 6;  * 2 - Estrangeira - Adquirida no mercado interno, exceto a indicada no código 7;  * 3 - Nacional, mercadoria ou bem com Conteúdo de Importação superior a 40%% e inferior ou igual a 70%%;  * 4 - Nacional, cuja produção tenha sido feita em conformidade com os processos produtivos básicos de que tratam as legislações citadas nos Ajustes;  * 5 - Nacional, mercadoria ou bem com Conteúdo de Importação inferior ou igual a 40%%;  * 6 - Estrangeira - Importação direta, sem similar nacional, constante em lista da CAMEX e gás natural;  * 7 - Estrangeira - Adquirida no mercado interno, sem similar nacional, constante lista CAMEX e gás natural;  * 8 - Nacional, mercadoria ou bem com Conteúdo de Importação superior a 70%%. |
**csosn** | **string** | * 500 - ICMS cobrado anterirmente por substituição tributária (substituído) ou por antecipação  (v.2.0). |
**v_bcst_ret** | **float** | Valor da BC do ICMS ST retido anteriormente (v2.0). | [optional]
**p_st** | **float** | Aliquota suportada pelo consumidor final. | [optional]
**v_icms_substituto** | **float** | Valor do ICMS próprio do substituto. | [optional]
**v_icmsst_ret** | **float** | Valor do ICMS ST retido anteriormente  (v2.0). | [optional]
**v_bcfcpst_ret** | **float** | Valor da Base de cálculo do FCP retido anteriormente. | [optional]
**p_fcpst_ret** | **float** | Percentual de FCP retido anteriormente por substituição tributária. | [optional]
**v_fcpst_ret** | **float** | Valor do FCP retido por substituição tributária. | [optional]
**p_red_bc_efet** | **float** | Percentual de redução da base de cálculo efetiva. | [optional]
**v_bc_efet** | **float** | Valor da base de cálculo efetiva. | [optional]
**p_icms_efet** | **float** | Alíquota do ICMS efetiva. | [optional]
**v_icms_efet** | **float** | Valor do ICMS efetivo. | [optional]

[[Voltar à lista de DTOs]](../../README.md#models) [[Voltar à lista de API]](../../README.md#endpoints) [[Voltar ao README]](../../README.md)
