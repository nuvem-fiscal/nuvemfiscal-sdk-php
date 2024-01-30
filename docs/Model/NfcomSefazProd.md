# # NfcomSefazProd

## Propriedades

Nome | Tipo | Descrição | Comentários
------------ | ------------- | ------------- | -------------
**c_prod** | **string** | Código do produto ou serviço. |
**x_prod** | **string** | Descrição do produto ou serviço. |
**c_class** | **string** | Código de classificação.  Tabela de Classificação de Item da NFCom (validar por RV). |
**cfop** | **string** | CFOP.  Utilizar Tabela de CFOP. | [optional]
**cnpjld** | **string** | CNPJ da operadora LD.  Informar o CNPJ da operadora LD que irá lançar o item de cofaturamento em nota do tipo faturamento 2. | [optional]
**u_med** | **int** | Unidade Básica de Medida.  * 1 - Minuto  * 2 - MB  * 3 - GB  * 4 - UN |
**q_faturada** | **float** | Quantidade Faturada.  Informar a quantidade de comercialização do produto . |
**v_item** | **float** | Valor unitário do item. |
**v_desc** | **float** | Valor do Desconto. | [optional]
**v_outro** | **float** | Outras despesas acessórias. | [optional]
**v_prod** | **float** | Valor total do item. |
**d_expiracao** | **\DateTime** | Data de expiração de crédito.  Formato AAAA-MM-DD. | [optional]
**ind_devolucao** | **int** | Indicador de devolução do valor do item.  * 1 - Devolução do valor do item | [optional]

[[Voltar à lista de DTOs]](../../README.md#models) [[Voltar à lista de API]](../../README.md#endpoints) [[Voltar ao README]](../../README.md)
