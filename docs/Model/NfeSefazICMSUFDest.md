# # NfeSefazICMSUFDest

## Propriedades

Nome | Tipo | Descrição | Comentários
------------ | ------------- | ------------- | -------------
**v_bcuf_dest** | **float** | Valor da Base de Cálculo do ICMS na UF do destinatário. |
**v_bcfcpuf_dest** | **float** | Valor da Base de Cálculo do FCP na UF do destinatário. | [optional]
**p_fcpuf_dest** | **float** | Percentual adicional inserido na alíquota interna da UF de destino, relativo ao Fundo de Combate à Pobreza (FCP) naquela UF. | [optional]
**p_icmsuf_dest** | **float** | Alíquota adotada nas operações internas na UF do destinatário para o produto / mercadoria. |
**p_icms_inter** | **float** | Alíquota interestadual das UF envolvidas:  * 4%% alíquota interestadual para produtos importados  * 7%% para os Estados de origem do Sul e Sudeste (exceto ES), destinado para os Estados do Norte e Nordeste  ou ES  * 12%% para os demais casos. |
**p_icms_inter_part** | **float** | Percentual de partilha para a UF do destinatário:  * 40%% em 2016  * 60%% em 2017  * 80%% em 2018  * 100%% a partir de 2019. |
**v_fcpuf_dest** | **float** | Valor do ICMS relativo ao Fundo de Combate à Pobreza (FCP) da UF de destino. | [optional]
**v_icmsuf_dest** | **float** | Valor do ICMS de partilha para a UF do destinatário. |
**v_icmsuf_remet** | **float** | Valor do ICMS de partilha para a UF do remetente. Nota: A partir de 2019, este valor será zero. |

[[Voltar à lista de DTOs]](../../README.md#models) [[Voltar à lista de API]](../../README.md#endpoints) [[Voltar ao README]](../../README.md)
