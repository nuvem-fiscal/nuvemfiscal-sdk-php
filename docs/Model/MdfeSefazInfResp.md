# # MdfeSefazInfResp

## Propriedades

Nome | Tipo | Descrição | Comentários
------------ | ------------- | ------------- | -------------
**resp_seg** | **int** | Responsável pelo seguro.  Preencher com:                 1- Emitente do MDF-e;    22 - Responsável pela contratação do serviço de transporte (contratante)       Dados obrigatórios apenas no modal Rodoviário, depois da lei 11.442/07. Para os demais modais esta informação é opcional. |
**cnpj** | **string** | Número do CNPJ do responsável pelo seguro.  Obrigatório apenas se responsável pelo seguro for (2) responsável pela contratação do transporte - pessoa jurídica. | [optional]
**cpf** | **string** | Número do CPF do responsável pelo seguro.  Obrigatório apenas se responsável pelo seguro for (2) responsável pela contratação do transporte - pessoa física. | [optional]

[[Voltar à lista de DTOs]](../../README.md#models) [[Voltar à lista de API]](../../README.md#endpoints) [[Voltar ao README]](../../README.md)
