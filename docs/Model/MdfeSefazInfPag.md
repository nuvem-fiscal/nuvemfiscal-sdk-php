# # MdfeSefazInfPag

## Propriedades

Nome | Tipo | Descrição | Comentários
------------ | ------------- | ------------- | -------------
**x_nome** | **string** | Razão social ou Nome do respnsável pelo pagamento. | [optional]
**cpf** | **string** | Número do CPF do responsável pelo pgto.  Informar os zeros não significativos. | [optional]
**cnpj** | **string** | Número do CNPJ do responsável pelo pgto.  Informar os zeros não significativos. | [optional]
**id_estrangeiro** | **string** | Identificador do responsável pelo pgto em caso de ser estrangeiro. | [optional]
**comp** | [**\NuvemFiscal\Model\MdfeSefazComp[]**](MdfeSefazComp.md) | Componentes do Pagamentoi do Frete. |
**v_contrato** | **float** | Valor Total do Contrato. |
**ind_alto_desemp** | **int** | Indicador de operação de transporte de alto desempenho.  Operação de transporte com utilização de veículos de frotas dedicadas ou fidelizadas.  Preencher com “1” para indicar operação de transporte de alto desempenho, demais casos não informar a tag. | [optional]
**ind_pag** | **int** | Indicador da Forma de Pagamento:0-Pagamento à Vista;1-Pagamento à Prazo;. |
**v_adiant** | **float** | Valor do Adiantamento (usar apenas em pagamento à Prazo. | [optional]
**ind_antecipa_adiant** | **int** | Indicador para declarar concordância em antecipar o adiantamento.  Informar a tag somente se for autorizado antecipar o adiantamento. | [optional]
**inf_prazo** | [**\NuvemFiscal\Model\MdfeSefazInfPrazo[]**](MdfeSefazInfPrazo.md) | Informações do pagamento a prazo.  Informar somente se indPag for à Prazo. | [optional]
**tp_antecip** | **int** | Tipo de Permissão em relação a antecipação das parcelas.  0 - Não permite antecipar    1 - Permite antecipar as parcelas    2 - Permite antecipar as parcelas mediante confirmação. | [optional]
**inf_banc** | [**\NuvemFiscal\Model\MdfeSefazInfBanc**](MdfeSefazInfBanc.md) |  |

[[Voltar à lista de DTOs]](../../README.md#models) [[Voltar à lista de API]](../../README.md#endpoints) [[Voltar ao README]](../../README.md)
