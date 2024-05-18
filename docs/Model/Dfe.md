# # Dfe

## Propriedades

Nome | Tipo | Descrição | Comentários
------------ | ------------- | ------------- | -------------
**id** | **string** | ID único gerado pela Nuvem Fiscal para este documento. | [optional]
**ambiente** | **string** |  | [optional]
**created_at** | **\DateTime** | Data/hora em que o documento foi criado na Nuvem Fiscal. Representado no formato &lt;a href&#x3D;\&quot;https://en.wikipedia.org/wiki/ISO_8601\&quot; target&#x3D;\&quot;blank\&quot;&gt;&#x60;ISO 8601&#x60;&lt;/a&gt;. | [optional]
**status** | **string** | * &#x60;pendente&#x60;: o pedido de emissão do documento foi recebido pela Nuvem Fiscal e está na fila de processamento.  * &#x60;autorizado&#x60;, &#x60;rejeitado&#x60; ou &#x60;denegado&#x60;: o documento foi transmitido para a SEFAZ, que retornou um desses status.  * &#x60;cancelado&#x60;: um evento de cancelamento foi homologado pela SEFAZ e associado ao documento.  * &#x60;encerrado&#x60;: um evento de encerramento foi homologado pela SEFAZ e associado a um MDF-e.  * &#x60;erro&#x60;: status próprio da Nuvem Fiscal que significa, na maioria das vezes, que houve algum erro que impediu a transmissão do documento para a SEFAZ (erros de validação, erros interno do servidor, timeouts, etc). | [optional]
**referencia** | **string** | Seu identificador único para este documento. Opcional, ajuda a evitar o envio duplicado de um mesmo documento. | [optional]
**data_emissao** | **\DateTime** |  | [optional]
**modelo** | **int** |  | [optional]
**serie** | **int** |  | [optional]
**numero** | **int** |  | [optional]
**tipo_emissao** | **int** |  | [optional]
**valor_total** | **float** |  | [optional]
**chave** | **string** | Chave de acesso do DF-e. | [optional]
**autorizacao** | [**\NuvemFiscal\Model\DfeAutorizacao**](DfeAutorizacao.md) |  | [optional]

[[Voltar à lista de DTOs]](../../README.md#models) [[Voltar à lista de API]](../../README.md#endpoints) [[Voltar ao README]](../../README.md)
