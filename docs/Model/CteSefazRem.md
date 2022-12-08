# # CteSefazRem

## Propriedades

Nome | Tipo | Descrição | Comentários
------------ | ------------- | ------------- | -------------
**cnpj** | **string** | Número do CNPJ.  Em caso de empresa não estabelecida no Brasil, será informado o CNPJ com zeros.              Informar os zeros não significativos. | [optional]
**cpf** | **string** | Número do CPF.  Informar os zeros não significativos. | [optional]
**ie** | **string** | Inscrição Estadual.  Informar a IE do remetente ou ISENTO se remetente é contribuinte do ICMS isento de inscrição no cadastro de contribuintes do ICMS. Caso o remetente não seja contribuinte do ICMS não informar a tag. | [optional]
**x_nome** | **string** | Razão social ou nome do remetente. |
**x_fant** | **string** | Nome fantasia. | [optional]
**fone** | **string** | Telefone. | [optional]
**ender_reme** | [**\NuvemFiscal\Model\CteSefazEndereco**](CteSefazEndereco.md) |  |
**email** | **string** | Endereço de email. | [optional]

[[Voltar à lista de DTOs]](../../README.md#models) [[Voltar à lista de API]](../../README.md#endpoints) [[Voltar ao README]](../../README.md)
