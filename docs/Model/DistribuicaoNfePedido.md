# # DistribuicaoNfePedido

## Propriedades

Nome | Tipo | Descrição | Comentários
------------ | ------------- | ------------- | -------------
**cpf_cnpj** | **string** | CPF ou CNPJ da empresa.    *Utilize o valor sem máscara*. |
**ambiente** | **string** | Identificação do Ambiente. |
**uf_autor** | **string** | Sigla da UF do autor. | [optional]
**tipo_consulta** | **string** | Tipo de consulta.   Valores possíveis: * &#x60;dist-nsu&#x60; - Consulta pelo último NSU recebido. * &#x60;cons-nsu&#x60; - Consulta por um NSU específico. * &#x60;cons-chave&#x60; - Consulta pela chave de acesso da NF-e. |
**dist_nsu** | **int** | Distribuição de conjunto de DF-e a partir do NSU informado.    *Obrigatório quando \&quot;tipo_consulta\&quot; for \&quot;dist-nsu\&quot;.* | [optional]
**cons_nsu** | **int** | Consulta DF-e vinculado ao NSU informado.    *Obrigatório quando \&quot;tipo_consulta\&quot; for \&quot;cons-nsu\&quot;.* | [optional]
**cons_chave** | **string** | Consulta de NF-e por chave de acesso informada.    *Obrigatório quando \&quot;tipo_consulta\&quot; for \&quot;cons-chave\&quot;.* | [optional]

[[Voltar à lista de DTOs]](../../README.md#models) [[Voltar à lista de API]](../../README.md#endpoints) [[Voltar ao README]](../../README.md)
