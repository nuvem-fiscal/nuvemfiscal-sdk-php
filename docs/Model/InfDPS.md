# # InfDPS

## Propriedades

Nome | Tipo | Descrição | Comentários
------------ | ------------- | ------------- | -------------
**tp_amb** | **int** | Identificação do Ambiente:  * 1 - Produção  * 2 - Homologação | [optional]
**dh_emi** | **\DateTime** | Data e hora da emissão do DPS. Data e hora no formato UTC (Universal Coordinated Time): AAAA-MM-DDThh:mm:ssTZD. |
**ver_aplic** | **string** | Versão do aplicativo que gerou o DPS. | [optional]
**d_compet** | **\DateTime** | Data em que se iniciou a prestação do serviço: Dia, mês e ano (AAAAMMDD). |
**subst** | [**\NuvemFiscal\Model\Substituicao**](Substituicao.md) |  | [optional]
**prest** | [**\NuvemFiscal\Model\InfoPrestador**](InfoPrestador.md) |  |
**toma** | [**\NuvemFiscal\Model\InfoTomador**](InfoTomador.md) |  | [optional]
**interm** | [**\NuvemFiscal\Model\InfoIntermediario**](InfoIntermediario.md) |  | [optional]
**serv** | [**\NuvemFiscal\Model\Serv**](Serv.md) |  |
**valores** | [**\NuvemFiscal\Model\InfoValores**](InfoValores.md) |  |

[[Voltar à lista de DTOs]](../../README.md#models) [[Voltar à lista de API]](../../README.md#endpoints) [[Voltar ao README]](../../README.md)
