# # NfeSefazDest

## Propriedades

Nome | Tipo | Descrição | Comentários
------------ | ------------- | ------------- | -------------
**cnpj** | **string** | Número do CNPJ. | [optional]
**cpf** | **string** | Número do CPF. | [optional]
**id_estrangeiro** | **string** | Identificador do destinatário, em caso de comprador estrangeiro. | [optional]
**x_nome** | **string** | Razão Social ou nome do destinatário. | [optional]
**ender_dest** | [**\NuvemFiscal\Model\NfeSefazEndereco**](NfeSefazEndereco.md) |  | [optional]
**ind_ie_dest** | **int** | Indicador da IE do destinatário:  * 1 - Contribuinte ICMSpagamento à vista  * 2 - Contribuinte isento de inscrição  * 9 - Não Contribuinte |
**ie** | **string** | Inscrição Estadual (obrigatório nas operações com contribuintes do ICMS). | [optional]
**isuf** | **string** | Inscrição na SUFRAMA (Obrigatório nas operações com as áreas com benefícios de incentivos fiscais sob controle da SUFRAMA) PL_005d - 11/08/09 - alterado para aceitar 8 ou 9 dígitos. | [optional]
**im** | **string** | Inscrição Municipal do tomador do serviço. | [optional]
**email** | **string** | Informar o e-mail do destinatário. O campo pode ser utilizado para informar o e-mail  de recepção da NF-e indicada pelo destinatário. | [optional]

[[Voltar à lista de DTOs]](../../README.md#models) [[Voltar à lista de API]](../../README.md#endpoints) [[Voltar ao README]](../../README.md)
