# # CnpjEndereco

## Propriedades

Nome | Tipo | Descrição | Comentários
------------ | ------------- | ------------- | -------------
**tipo_logradouro** | **string** | Descrição do tipo de logradouro. | [optional]
**logradouro** | **string** | Nome do logradouro onde se localiza o estabelecimento. | [optional]
**numero** | **string** | Número onde se localiza o estabelecimento. Quando não houver  preenchimento do número haverá ‘S/N’. | [optional]
**complemento** | **string** | Complemento para o endereço de localização do estabelecimento. | [optional]
**bairro** | **string** | Bairro onde se localiza o estabelecimento. | [optional]
**cep** | **string** | Código de endereçamento postal referente ao logradouro no qual o  estabelecimento esta localizado. | [optional]
**uf** | **string** | Sigla da unidade da federação em que se encontra o estabelecimento. | [optional]
**municipio** | [**\NuvemFiscal\Model\CnpjMunicipio**](CnpjMunicipio.md) |  | [optional]

[[Voltar à lista de DTOs]](../../README.md#models) [[Voltar à lista de API]](../../README.md#endpoints) [[Voltar ao README]](../../README.md)
