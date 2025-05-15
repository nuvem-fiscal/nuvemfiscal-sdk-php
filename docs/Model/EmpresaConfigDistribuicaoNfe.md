# # EmpresaConfigDistribuicaoNfe

## Propriedades

Nome | Tipo | Descrição | Comentários
------------ | ------------- | ------------- | -------------
**distribuicao_automatica** | **bool** | Indica se a distribuição automática está habilitada.    Quando ativada, a API da Nuvem Fiscal realizará automaticamente pedidos de  distribuição de notas fiscais eletrônicas (NF-e) utilizando o último NSU.    A frequência dessas distribuições é controlada pelo campo &#x60;distribuicao_intervalo_horas&#x60;,  cujo valor padrão é 24 horas (uma vez ao dia). | [optional] [default to false]
**distribuicao_intervalo_horas** | **int** | Define o intervalo mínimo, em horas, entre distribuições automáticas de documentos.    Esse valor determina com que frequência a API da Nuvem Fiscal executará novas  requisições automáticas de distribuição de notas fiscais eletrônicas (NF-e).    Deve ser um valor entre 1 e 24. Por exemplo, se configurado como 4, uma nova  tentativa de distribuição só será feita se pelo menos 4 horas tiverem se passado  desde a última requisição.    Esse campo só é relevante quando &#x60;distribuicao_automatica&#x60; estiver habilitado. | [optional]
**ciencia_automatica** | **bool** | Indica se a manifestação de Ciência da Operação (210210) deve ser feita  automaticamente pela API.    Caso habilitada, a manifestação de ciência será realizada para notas  recebidas por qualquer forma de consulta ou modo de distribuição (manual ou automático). | [optional] [default to false]
**ambiente** | **string** | Indica se a empresa irá emitir em produção ou homologação. |

[[Voltar à lista de DTOs]](../../README.md#models) [[Voltar à lista de API]](../../README.md#endpoints) [[Voltar ao README]](../../README.md)
