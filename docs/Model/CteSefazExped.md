# # CteSefazExped

## Propriedades

Nome | Tipo | Descrição | Comentários
------------ | ------------- | ------------- | -------------
**cnpj** | **string** | Número do CNPJ.  Em caso de empresa não estabelecida no Brasil, será informado o CNPJ com zeros.              Informar os zeros não significativos. | [optional]
**cpf** | **string** | Número do CPF.  Informar os zeros não significativos. | [optional]
**ie** | **string** | Inscrição Estadual.  Informar a IE do expedidor ou ISENTO se expedidor é contribuinte do ICMS isento de inscrição no cadastro de contribuintes do ICMS. Caso o expedidor não seja contribuinte do ICMS não informar a tag. | [optional]
**x_nome** | **string** | Razão Social ou Nome. |
**fone** | **string** | Telefone. | [optional]
**ender_exped** | [**\NuvemFiscal\Model\CteSefazEndereco**](CteSefazEndereco.md) |  |
**email** | **string** | Endereço de email. | [optional]

[[Voltar à lista de DTOs]](../../README.md#models) [[Voltar à lista de API]](../../README.md#endpoints) [[Voltar ao README]](../../README.md)
