# # DistribuicaoNfeEvento

## Propriedades

Nome | Tipo | Descrição | Comentários
------------ | ------------- | ------------- | -------------
**id** | **string** | ID único gerado pela Nuvem Fiscal para este evento. | [optional]
**created_at** | **\DateTime** | Data/hora em que o evento foi criado na Nuvem Fiscal. Representado no formato &lt;a href&#x3D;\&quot;https://en.wikipedia.org/wiki/ISO_8601\&quot; target&#x3D;\&quot;blank\&quot;&gt;&#x60;ISO 8601&#x60;&lt;/a&gt;. | [optional]
**ambiente** | **string** | Identificação do ambiente. | [optional]
**status** | **string** | Status do Evento. | [optional]
**cpf_cnpj_autor** | **string** | CPF/CNPJ do autor do evento. | [optional]
**chave_acesso** | **string** | Chave de Acesso do documento vinculado ao evento. | [optional]
**tipo_evento** | **string** | Tipo do evento vinculado. | [optional]
**data_evento** | **\DateTime** | Data e hora do Evento. | [optional]
**numero_sequencial** | **int** | Sequencial do evento para o mesmo tipo de evento. | [optional]
**justificativa** | **string** | Justificativa para o desconhecimento ou não-realização da operação. | [optional]
**data_registro** | **\DateTime** | Data e hora do registro do evento pela SEFAZ. | [optional]
**codigo_status** | **int** | Código do status de registro do evento. | [optional]
**motivo_status** | **string** | Descrição literal do status do registro do evento. | [optional]
**numero_protocolo** | **string** | Número do Protocolo de registro do evento. | [optional]

[[Voltar à lista de DTOs]](../../README.md#models) [[Voltar à lista de API]](../../README.md#endpoints) [[Voltar ao README]](../../README.md)
