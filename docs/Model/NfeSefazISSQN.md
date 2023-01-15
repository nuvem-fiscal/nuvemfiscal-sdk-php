# # NfeSefazISSQN

## Propriedades

Nome | Tipo | Descrição | Comentários
------------ | ------------- | ------------- | -------------
**v_bc** | **float** | Valor da BC do ISSQN. |
**v_aliq** | **float** | Alíquota do ISSQN. |
**v_issqn** | **float** | Valor da do ISSQN. |
**c_mun_fg** | **string** | Informar o município de ocorrência do fato gerador do ISSQN. Utilizar a Tabela do IBGE (Anexo VII - Tabela de UF, Município e País). “Atenção, não vincular com os campos B12, C10 ou E10” v2.0. |
**c_list_serv** | **string** | Informar o Item da lista de serviços da LC 116/03 em que se classifica o serviço. |
**v_deducao** | **float** | Valor dedução para redução da base de cálculo. | [optional]
**v_outro** | **float** | Valor outras retenções. | [optional]
**v_desc_incond** | **float** | Valor desconto incondicionado. | [optional]
**v_desc_cond** | **float** | Valor desconto condicionado. | [optional]
**v_iss_ret** | **float** | Valor Retenção ISS. | [optional]
**ind_iss** | **int** | Exibilidade do ISS:1-Exigível  * 2 - Não incidente  * 3 - Isenção  * 4 - Exportação  * 5 - Imunidade  * 6 - Exig.Susp. Judicial  * 7 - Exig.Susp. ADM |
**c_servico** | **string** | Código do serviço prestado dentro do município. | [optional]
**c_mun** | **string** | Código do Município de Incidência do Imposto. | [optional]
**c_pais** | **string** | Código de Pais. | [optional]
**n_processo** | **string** | Número do Processo administrativo ou judicial de suspenção do processo. | [optional]
**ind_incentivo** | **int** | Indicador de Incentivo Fiscal. 1&#x3D;Sim  * 2 - Não |

[[Voltar à lista de DTOs]](../../README.md#models) [[Voltar à lista de API]](../../README.md#endpoints) [[Voltar ao README]](../../README.md)
