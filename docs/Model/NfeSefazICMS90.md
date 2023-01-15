# # NfeSefazICMS90

## Propriedades

Nome | Tipo | Descrição | Comentários
------------ | ------------- | ------------- | -------------
**orig** | **int** | Origem da mercadoria:  * 0 - Nacional, exceto as indicadas nos códigos 3, 4, 5 e 8;  * 1 - Estrangeira - Importação direta, exceto a indicada no código 6;  * 2 - Estrangeira - Adquirida no mercado interno, exceto a indicada no código 7;  * 3 - Nacional, mercadoria ou bem com Conteúdo de Importação superior a 40%% e inferior ou igual a 70%%;  * 4 - Nacional, cuja produção tenha sido feita em conformidade com os processos produtivos básicos de que tratam as legislações citadas nos Ajustes;  * 5 - Nacional, mercadoria ou bem com Conteúdo de Importação inferior ou igual a 40%%;  * 6 - Estrangeira - Importação direta, sem similar nacional, constante em lista da CAMEX e gás natural;  * 7 - Estrangeira - Adquirida no mercado interno, sem similar nacional, constante lista CAMEX e gás natural;  * 8 - Nacional, mercadoria ou bem com Conteúdo de Importação superior a 70%%. |
**cst** | **string** | Tributção pelo ICMS  * 90 - Outras |
**mod_bc** | **int** | Modalidade de determinação da BC do ICMS:  * 0 - Margem Valor Agregado (%%)  * 1 - Pauta (valor)  * 2 - Preço Tabelado Máximo (valor)  * 3 - Valor da Operação | [optional]
**v_bc** | **float** | Valor da BC do ICMS. | [optional]
**p_red_bc** | **float** | Percentual de redução da BC. | [optional]
**p_icms** | **float** | Alíquota do ICMS. | [optional]
**v_icms** | **float** | Valor do ICMS. | [optional]
**v_bcfcp** | **float** | Valor da Base de cálculo do FCP. | [optional]
**p_fcp** | **float** | Percentual de ICMS relativo ao Fundo de Combate à Pobreza (FCP). | [optional]
**v_fcp** | **float** | Valor do ICMS relativo ao Fundo de Combate à Pobreza (FCP). | [optional]
**mod_bcst** | **int** | Modalidade de determinação da BC do ICMS ST:  * 0 - Preço tabelado ou máximo  sugerido  * 1 - Lista Negativa (valor)  * 2 - Lista Positiva (valor)  * 3 - Lista Neutra (valor)  * 4 - Margem Valor Agregado (%%)  * 5 - Pauta (valor)  * 6 - Valor da Operação | [optional]
**p_mvast** | **float** | Percentual da Margem de Valor Adicionado ICMS ST. | [optional]
**p_red_bcst** | **float** | Percentual de redução da BC ICMS ST. | [optional]
**v_bcst** | **float** | Valor da BC do ICMS ST. | [optional]
**p_icmsst** | **float** | Alíquota do ICMS ST. | [optional]
**v_icmsst** | **float** | Valor do ICMS ST. | [optional]
**v_bcfcpst** | **float** | Valor da Base de cálculo do FCP. | [optional]
**p_fcpst** | **float** | Percentual de FCP retido por substituição tributária. | [optional]
**v_fcpst** | **float** | Valor do FCP retido por substituição tributária. | [optional]
**v_icms_deson** | **float** | Valor do ICMS de desoneração. | [optional]
**mot_des_icms** | **int** | Motivo da desoneração do ICMS:3-Uso na agropecuária  * 9 - Outros  * 12 - Fomento agropecuário | [optional]
**v_icmsst_deson** | **float** | Valor do ICMS-ST desonerado. | [optional]
**mot_des_icmsst** | **int** | Motivo da desoneração do ICMS-ST: 3-Uso na agropecuária  * 9 - Outros  * 12 - Fomento agropecuário | [optional]

[[Voltar à lista de DTOs]](../../README.md#models) [[Voltar à lista de API]](../../README.md#endpoints) [[Voltar ao README]](../../README.md)
