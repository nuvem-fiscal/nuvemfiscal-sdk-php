# # NfeSefazICMS20

## Propriedades

Nome | Tipo | Descrição | Comentários
------------ | ------------- | ------------- | -------------
**orig** | **int** | Origem da mercadoria:  * 0 - Nacional, exceto as indicadas nos códigos 3, 4, 5 e 8;  * 1 - Estrangeira - Importação direta, exceto a indicada no código 6;  * 2 - Estrangeira - Adquirida no mercado interno, exceto a indicada no código 7;  * 3 - Nacional, mercadoria ou bem com Conteúdo de Importação superior a 40%% e inferior ou igual a 70%%;  * 4 - Nacional, cuja produção tenha sido feita em conformidade com os processos produtivos básicos de que tratam as legislações citadas nos Ajustes;  * 5 - Nacional, mercadoria ou bem com Conteúdo de Importação inferior ou igual a 40%%;  * 6 - Estrangeira - Importação direta, sem similar nacional, constante em lista da CAMEX e gás natural;  * 7 - Estrangeira - Adquirida no mercado interno, sem similar nacional, constante lista CAMEX e gás natural;  * 8 - Nacional, mercadoria ou bem com Conteúdo de Importação superior a 70%%. |
**cst** | **string** | Tributção pelo ICMS  * 20 - Com redução de base de cálculo |
**mod_bc** | **int** | Modalidade de determinação da BC do ICMS:  * 0 - Margem Valor Agregado (%%)  * 1 - Pauta (valor)  * 2 - Preço Tabelado Máximo (valor)  * 3 - Valor da Operação |
**p_red_bc** | **float** | Percentual de redução da BC. |
**v_bc** | **float** | Valor da BC do ICMS. |
**p_icms** | **float** | Alíquota do ICMS. |
**v_icms** | **float** | Valor do ICMS. |
**v_bcfcp** | **float** | Valor da Base de cálculo do FCP. | [optional]
**p_fcp** | **float** | Percentual de ICMS relativo ao Fundo de Combate à Pobreza (FCP). | [optional]
**v_fcp** | **float** | Valor do ICMS relativo ao Fundo de Combate à Pobreza (FCP). | [optional]
**v_icms_deson** | **float** | Valor do ICMS de desoneração. | [optional]
**mot_des_icms** | **int** | Motivo da desoneração do ICMS:3-Uso na agropecuária  * 9 - Outros  * 12 - Fomento agropecuário | [optional]
**ind_deduz_deson** | **int** | Indica se o valor do ICMS desonerado (vICMSDeson) deduz do valor do item (vProd):  * 0 - Valor do ICMS desonerado (vICMSDeson) não deduz do valor do item (vProd) / total da NF-e  * 1 - Valor do ICMS desonerado (vICMSDeson) deduz do valor do item (vProd) / total da NF-e | [optional]

[[Voltar à lista de DTOs]](../../README.md#models) [[Voltar à lista de API]](../../README.md#endpoints) [[Voltar ao README]](../../README.md)
