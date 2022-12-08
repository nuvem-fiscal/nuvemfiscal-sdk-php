# # NfeSefazICMSSN202

## Propriedades

Nome | Tipo | Descrição | Comentários
------------ | ------------- | ------------- | -------------
**orig** | **int** | Origem da mercadoria:  0 - Nacional, exceto as indicadas nos códigos 3, 4, 5 e 8;  1 - Estrangeira - Importação direta, exceto a indicada no código 6;  2 - Estrangeira - Adquirida no mercado interno, exceto a indicada no código 7;  3 - Nacional, mercadoria ou bem com Conteúdo de Importação superior a 40%% e inferior ou igual a 70%%;  4 - Nacional, cuja produção tenha sido feita em conformidade com os processos produtivos básicos de que tratam as legislações citadas nos Ajustes;  5 - Nacional, mercadoria ou bem com Conteúdo de Importação inferior ou igual a 40%%;  6 - Estrangeira - Importação direta, sem similar nacional, constante em lista da CAMEX e gás natural;  7 - Estrangeira - Adquirida no mercado interno, sem similar nacional, constante lista CAMEX e gás natural;  8 - Nacional, mercadoria ou bem com Conteúdo de Importação superior a 70%%. |
**csosn** | **string** | 202- Tributada pelo Simples Nacional sem permissão de crédito e com cobrança do ICMS por Substituição Tributária;  203-  Isenção do ICMS nos Simples Nacional para faixa de receita bruta e com cobrança do ICMS por Substituição Tributária (v.2.0). |
**mod_bcst** | **int** | Modalidade de determinação da BC do ICMS ST:  0 – Preço tabelado ou máximo  sugerido;  1 - Lista Negativa (valor);  2 - Lista Positiva (valor);  3 - Lista Neutra (valor);  4 - Margem Valor Agregado (%%);  5 - Pauta (valor). (v2.0)  6 - Valor da Operação. |
**p_mvast** | **float** | Percentual da Margem de Valor Adicionado ICMS ST (v2.0). | [optional]
**p_red_bcst** | **float** | Percentual de redução da BC ICMS ST  (v2.0). | [optional]
**v_bcst** | **float** | Valor da BC do ICMS ST (v2.0). |
**p_icmsst** | **float** | Alíquota do ICMS ST (v2.0). |
**v_icmsst** | **float** | Valor do ICMS ST (v2.0). |
**v_bcfcpst** | **float** | Valor da Base de cálculo do FCP. | [optional]
**p_fcpst** | **float** | Percentual de FCP retido por substituição tributária. | [optional]
**v_fcpst** | **float** | Valor do FCP retido por substituição tributária. | [optional]

[[Voltar à lista de DTOs]](../../README.md#models) [[Voltar à lista de API]](../../README.md#endpoints) [[Voltar ao README]](../../README.md)
