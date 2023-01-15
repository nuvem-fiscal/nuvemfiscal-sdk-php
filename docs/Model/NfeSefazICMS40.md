# # NfeSefazICMS40

## Propriedades

Nome | Tipo | Descrição | Comentários
------------ | ------------- | ------------- | -------------
**orig** | **int** | Origem da mercadoria:  * 0 - Nacional, exceto as indicadas nos códigos 3, 4, 5 e 8;  * 1 - Estrangeira - Importação direta, exceto a indicada no código 6;  * 2 - Estrangeira - Adquirida no mercado interno, exceto a indicada no código 7;  * 3 - Nacional, mercadoria ou bem com Conteúdo de Importação superior a 40%% e inferior ou igual a 70%%;  * 4 - Nacional, cuja produção tenha sido feita em conformidade com os processos produtivos básicos de que tratam as legislações citadas nos Ajustes;  * 5 - Nacional, mercadoria ou bem com Conteúdo de Importação inferior ou igual a 40%%;  * 6 - Estrangeira - Importação direta, sem similar nacional, constante em lista da CAMEX e gás natural;  * 7 - Estrangeira - Adquirida no mercado interno, sem similar nacional, constante lista CAMEX e gás natural;  * 8 - Nacional, mercadoria ou bem com Conteúdo de Importação superior a 70%%. |
**cst** | **string** | Tributação pelo ICMS  * 40 - Isenta  * 41 - Não tributada  * 50 - Suspensão  * 51 - Diferimento |
**v_icms_deson** | **float** | O valor do ICMS será informado apenas nas operações com veículos beneficiados com a desoneração condicional do ICMS. | [optional]
**mot_des_icms** | **int** | Este campo será preenchido quando o campo anterior estiver preenchido.  Informar o motivo da desoneração:  * 1 - Táxi  * 3 - Produtor Agropecuário  * 4 - Frotista/Locadora  * 5 - Diplomático/Consular  * 6 - Utilitários e Motocicletas da Amazônia Ocidental e Áreas de Livre Comércio (Resolução 714/88 e 790/94 - CONTRAN e suas alterações)  * 7 - SUFRAMA  * 8 - Venda a órgão Público  * 9 - Outros  * 10 - Deficiente Condutor  * 11 - Deficiente não condutor  * 16 - Olimpíadas Rio 2016  * 90 - Solicitado pelo Fisco | [optional]

[[Voltar à lista de DTOs]](../../README.md#models) [[Voltar à lista de API]](../../README.md#endpoints) [[Voltar ao README]](../../README.md)
