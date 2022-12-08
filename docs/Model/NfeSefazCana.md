# # NfeSefazCana

## Propriedades

Nome | Tipo | Descrição | Comentários
------------ | ------------- | ------------- | -------------
**safra** | **string** | Identificação da safra. |
**ref** | **string** | Mês e Ano de Referência, formato: MM/AAAA. |
**for_dia** | [**\NuvemFiscal\Model\NfeSefazForDia[]**](NfeSefazForDia.md) | Fornecimentos diários. |
**q_tot_mes** | **float** | Total do mês. |
**q_tot_ant** | **float** | Total Anterior. |
**q_tot_ger** | **float** | Total Geral. |
**deduc** | [**\NuvemFiscal\Model\NfeSefazDeduc[]**](NfeSefazDeduc.md) | Deduções - Taxas e Contribuições. | [optional]
**v_for** | **float** | Valor  dos fornecimentos. |
**v_tot_ded** | **float** | Valor Total das Deduções. |
**v_liq_for** | **float** | Valor Líquido dos fornecimentos. |

[[Voltar à lista de DTOs]](../../README.md#models) [[Voltar à lista de API]](../../README.md#endpoints) [[Voltar ao README]](../../README.md)
