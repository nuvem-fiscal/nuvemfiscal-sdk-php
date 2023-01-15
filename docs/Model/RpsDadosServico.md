# # RpsDadosServico

## Propriedades

Nome | Tipo | Descrição | Comentários
------------ | ------------- | ------------- | -------------
**iss_retido** | **bool** | Reter ISSQN. | [optional] [default to false]
**responsavel_retencao** | **int** | Responsável pela retenção:  * 0 - Prestador;  * 1 - Tomador;  * 2 - Intermediário. | [optional]
**item_lista_servico** | **string** | Código do item da lista de serviço, geralmente segue a LC116, podendo variar de acordo com a prefeitura.    Você pode encontrar esse dado no portal da prefeitura, em uma nota emitida ou junto ao contador. |
**codigo_cnae** | **string** | Código CNAE (Classificação Nacional de Atividades Econômicas). | [optional]
**codigo_tributacao_municipio** | **string** | Código de tributação do município. | [optional]
**discriminacao** | **string** | Detalhamento do serviço prestado. |
**codigo_municipio** | **string** | Código IBGE do município de prestação do serviço.  Caso não informado, será considerado o município do prestador. | [optional]
**codigo_pais** | **string** | Código do país de prestação do serviço. | [optional]
**tipo_tributacao** | **int** | Tipo de Tributação do Serviço:  * 1 - Isento de ISS  * 2 - Imune  * 3 - Não Incidência no Município  * 4 - Não Tributável  * 5 - Retido  * 6 - Tributável Dentro do Município  * 7 - Tributável Fora do Município  * 8 - Tributável Dentro do Município pelo tomador | [optional]
**exigibilidade_iss** | **int** | Exigibilidade do ISS:  * 1 - Exigível  * 2 - Não Incidência  * 3 - Isenção  * 4 - Exportação  * 5 - Imunidade  * 6 - Suspenso por Decisão Judicial  * 7 - Suspenso por Processo Administrativo | [optional]
**codigo_municipio_incidencia** | **string** | Código IBGE do município de incidência do ISSQN. | [optional]
**numero_processo** | **string** | Número do Processo de Suspensão da Exigibilidade. | [optional]
**unidade** | **string** | Unidade do serviço prestado. | [optional]
**quantidade** | **float** | Quantidade dos serviços prestados. | [optional]
**valores** | [**\NuvemFiscal\Model\RpsServicoValores**](RpsServicoValores.md) |  |

[[Voltar à lista de DTOs]](../../README.md#models) [[Voltar à lista de API]](../../README.md#endpoints) [[Voltar ao README]](../../README.md)
