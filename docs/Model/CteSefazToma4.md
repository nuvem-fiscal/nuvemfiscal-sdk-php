# # CteSefazToma4

## Propriedades

Nome | Tipo | Descrição | Comentários
------------ | ------------- | ------------- | -------------
**toma** | **int** | Tomador do Serviço.  Preencher com:  * 4 - Outros  Obs: Informar os dados cadastrais do tomador do serviço. |
**cnpj** | **string** | Número do CNPJ.  Em caso de empresa não estabelecida no Brasil, será informado o CNPJ com zeros.  Informar os zeros não significativos. | [optional]
**cpf** | **string** | Número do CPF.  Informar os zeros não significativos. | [optional]
**ie** | **string** | Inscrição Estadual.  Informar a IE do tomador ou ISENTO se tomador é contribuinte do ICMS isento de inscrição no cadastro de contribuintes do ICMS. Caso o tomador não seja contribuinte do ICMS não informar o conteúdo. | [optional]
**x_nome** | **string** | Razão Social ou Nome. |
**x_fant** | **string** | Nome Fantasia. | [optional]
**fone** | **string** | Telefone. | [optional]
**ender_toma** | [**\NuvemFiscal\Model\CteSefazEndereco**](CteSefazEndereco.md) |  |
**email** | **string** | Endereço de email. | [optional]

[[Voltar à lista de DTOs]](../../README.md#models) [[Voltar à lista de API]](../../README.md#endpoints) [[Voltar ao README]](../../README.md)
