# # EmpresaConfigDistribuicaoNfe

## Propriedades

Nome | Tipo | Descrição | Comentários
------------ | ------------- | ------------- | -------------
**distribuicao_automatica** | **bool** | Indica se a distribuição automática está habilitada.    Nesse modo, a API da Nuvem Fiscal irá realizar pedidos de distribuição  pelo último NSU de forma automática a cada 1 hora. | [optional] [default to false]
**ciencia_automatica** | **bool** | Indica se a manifestação de Ciência da Operação (210210) deve ser feita  automaticamente pela API.    Caso habilitada, a manifestação de ciência será realizada para notas  recebidas por qualquer forma de consulta ou modo de distribuição (manual ou automático). | [optional] [default to false]
**ambiente** | **string** | Indica se a empresa irá emitir em produção ou homologação. |

[[Voltar à lista de DTOs]](../../README.md#models) [[Voltar à lista de API]](../../README.md#endpoints) [[Voltar ao README]](../../README.md)
