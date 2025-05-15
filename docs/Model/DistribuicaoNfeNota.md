# # DistribuicaoNfeNota

## Propriedades

Nome | Tipo | Descrição | Comentários
------------ | ------------- | ------------- | -------------
**chave_acesso** | **string** | Chave de Acesso da NF-e. | [optional]
**numero_protocolo** | **string** | Número do protocolo de autorização. | [optional]
**tipo_nfe** | **int** | Tipo da NF-e (0 - entrada; 1 - saída). | [optional]
**data_emissao** | **\DateTime** | Data e hora da emissão do documento fiscal. | [optional]
**valor_nfe** | **float** | Valor total da NF-e. | [optional]
**digest_value** | **string** | Digest Value da NF-e processada. Utilizado para conferir a integridade da NF-e original. | [optional]
**emitente_cpf_cnpj** | **string** | CPF/CNPJ do emitente. | [optional]
**emitente_nome_razao_social** | **string** | Nome ou Razão Social do emitente. | [optional]
**emitente_inscricao_estadual** | **string** | Inscrição Estadual do emitente. | [optional]

[[Voltar à lista de DTOs]](../../README.md#models) [[Voltar à lista de API]](../../README.md#endpoints) [[Voltar ao README]](../../README.md)
