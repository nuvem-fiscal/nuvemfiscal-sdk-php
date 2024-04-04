# # NfeSefazCard

## Propriedades

Nome | Tipo | Descrição | Comentários
------------ | ------------- | ------------- | -------------
**tp_integra** | **int** | Tipo de Integração do processo de pagamento com o sistema de automação da empresa:  * 1 - Pagamento integrado com o sistema de automação da empresa (Ex.: equipamento TEF, Comércio Eletrônico, POS Integrado)  * 2 - Pagamento não integrado com o sistema de automação da empresa (Ex.: equipamento POS Simples) |
**cnpj** | **string** | CNPJ da instituição de pagamento. | [optional]
**t_band** | **string** | Bandeira da operadora de cartão. | [optional]
**c_aut** | **string** | Número de autorização da operação com cartões, PIX, boletos e outros pagamentos eletrônicos. | [optional]
**cnpj_receb** | **string** | CNPJ do beneficiário do pagamento. | [optional]
**id_term_pag** | **string** | Identificador do terminal de pagamento. | [optional]

[[Voltar à lista de DTOs]](../../README.md#models) [[Voltar à lista de API]](../../README.md#endpoints) [[Voltar ao README]](../../README.md)
