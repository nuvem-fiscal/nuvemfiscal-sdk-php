# # NfeSefazTransp

## Propriedades

Nome | Tipo | Descrição | Comentários
------------ | ------------- | ------------- | -------------
**mod_frete** | **int** | Modalidade do frete  0- Contratação do Frete por conta do Remetente (CIF);  1- Contratação do Frete por conta do destinatário/remetente (FOB);  2- Contratação do Frete por conta de terceiros;  3- Transporte próprio por conta do remetente;  4- Transporte próprio por conta do destinatário;  9- Sem Ocorrência de transporte. |
**transporta** | [**\NuvemFiscal\Model\NfeSefazTransporta**](NfeSefazTransporta.md) |  | [optional]
**ret_transp** | [**\NuvemFiscal\Model\NfeSefazRetTransp**](NfeSefazRetTransp.md) |  | [optional]
**veic_transp** | [**\NuvemFiscal\Model\NfeSefazVeiculo**](NfeSefazVeiculo.md) |  | [optional]
**reboque** | [**\NuvemFiscal\Model\NfeSefazVeiculo[]**](NfeSefazVeiculo.md) | Dados do reboque/Dolly (v2.0). | [optional]
**vagao** | **string** | Identificação do vagão (v2.0). | [optional]
**balsa** | **string** | Identificação da balsa (v2.0). | [optional]
**vol** | [**\NuvemFiscal\Model\NfeSefazVol[]**](NfeSefazVol.md) | Dados dos volumes. | [optional]

[[Voltar à lista de DTOs]](../../README.md#models) [[Voltar à lista de API]](../../README.md#endpoints) [[Voltar ao README]](../../README.md)
