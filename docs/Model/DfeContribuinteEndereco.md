# # DfeContribuinteEndereco

## Propriedades

Nome | Tipo | Descrição | Comentários
------------ | ------------- | ------------- | -------------
**logradouro** | **string** | Logradouro. |
**numero** | **string** | Número. |
**complemento** | **string** | Complemento. | [optional]
**bairro** | **string** | Bairro. |
**codigo_municipio** | **string** | Código do município (utilizar a tabela do IBGE), informar 9999999 para operações com o exterior. |
**nome_municipio** | **string** | Nome do município, informar EXTERIOR para operações com o exterior. |
**uf** | **string** | Sigla da UF, informar EX para operações com o exterior. |
**cep** | **string** | CEP. | [optional]
**codigo_pais** | **string** | Código de Pais. | [optional]
**pais** | **string** | Nome do país. | [optional]
**fone** | **string** | Telefone, preencher com Código DDD + número do telefone , nas operações com exterior é permtido informar o código do país + código da localidade + número do telefone. | [optional]

[[Voltar à lista de DTOs]](../../README.md#models) [[Voltar à lista de API]](../../README.md#endpoints) [[Voltar ao README]](../../README.md)
