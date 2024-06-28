# # DistribuicaoNfeDocumento

## Propriedades

Nome | Tipo | Descrição | Comentários
------------ | ------------- | ------------- | -------------
**id** | **string** | ID único gerado pela Nuvem Fiscal para identificar o documento. |
**created_at** | **\DateTime** | Data/hora em que o documento foi criado na Nuvem Fiscal. Representado no formato &lt;a href&#x3D;\&quot;https://en.wikipedia.org/wiki/ISO_8601\&quot; target&#x3D;\&quot;blank\&quot;&gt;&#x60;ISO 8601&#x60;&lt;/a&gt;. | [optional]
**nsu** | **int** | NSU do documento fiscal. | [optional]
**schema** | **string** | Identificação do Schema XML que será utilizado para validar o XML existente no conteúdo da tag docZip. Vai identificar o tipo do documento e sua versão. Exemplos: resNFe_v1.00.xsd, procNFe_v3.10.xsd, resEvento_1.00.xsd, procEventoNFe_v1.00.xsd. |
**tipo_documento** | **string** | Tipo do documento de interesse da pessoa ou empresa. | [optional]
**chave_acesso** | **string** | Chave de Acesso da NF-e. | [optional]
**resumo** | **bool** | Indica se o documento distribuído está em sua forma resumida. | [optional]
**tipo_evento** | **string** | Tipo do evento. | [optional]
**numero_sequencial** | **int** | Número sequencial do evento para o mesmo tipo de evento. | [optional]
**data_evento** | **\DateTime** | Data e hora do evento. | [optional]
**data_recebimento** | **\DateTime** | Data e hora de autorização do evento. | [optional]
**numero_protocolo** | **string** | Número do protocolo de autorização. | [optional]
**tipo_nfe** | **int** | Tipo da NF-e (0 - entrada; 1 - saída). | [optional]
**valor_nfe** | **float** | Valor total da NF-e. | [optional]
**digest_value** | **string** | Digest Value da NF-e processada. Utilizado para conferir a integridade da NF-e original. | [optional]
**emitente_cpf_cnpj** | **string** | CPF/CNPJ do emitente. | [optional]
**emitente_nome_razao_social** | **string** | Nome ou Razão Social do emitente. | [optional]
**emitente_inscricao_estadual** | **string** | Inscrição Estadual do emitente. | [optional]

[[Voltar à lista de DTOs]](../../README.md#models) [[Voltar à lista de API]](../../README.md#endpoints) [[Voltar ao README]](../../README.md)
