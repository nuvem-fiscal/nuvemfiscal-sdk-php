# # Dfe

## Propriedades

Nome | Tipo | Descrição | Comentários
------------ | ------------- | ------------- | -------------
**id** | **string** | ID único gerado pela Nuvem Fiscal para este documento. | [optional]
**ambiente** | **string** |  | [optional]
**created_at** | **\DateTime** | Data/hora em que o documento foi criado na Nuvem Fiscal. Representado no formato &lt;a href&#x3D;\&quot;https://en.wikipedia.org/wiki/ISO_8601\&quot; target&#x3D;\&quot;blank\&quot;&gt;&#x60;ISO 8601&#x60;&lt;/a&gt;. | [optional]
**status** | **string** |  | [optional]
**referencia** | **string** | Seu identificador único para este documento. Opcional, ajuda a evitar o envio duplicado de um mesmo documento. | [optional]
**data_emissao** | **\DateTime** |  | [optional]
**modelo** | **int** |  | [optional]
**serie** | **int** |  | [optional]
**numero** | **int** |  | [optional]
**valor_total** | **float** |  | [optional]
**chave** | **string** | Chave de acesso do DF-e. | [optional]
**autorizacao** | [**\NuvemFiscal\Model\DfeAutorizacao**](DfeAutorizacao.md) |  | [optional]

[[Voltar à lista de DTOs]](../../README.md#models) [[Voltar à lista de API]](../../README.md#endpoints) [[Voltar ao README]](../../README.md)
