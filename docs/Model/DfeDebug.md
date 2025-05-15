# # DfeDebug

## Propriedades

Nome | Tipo | Descrição | Comentários
------------ | ------------- | ------------- | -------------
**id** | **string** | Identificador do documento fiscal. | [optional]
**tipo** | **string** | Tipo do documento: nfe, nfce, mdfe, nfse, etc. | [optional]
**created_at** | **\DateTime** | Data e hora da criação do documento, representada no formato UTC (Tempo Universal Coordenado).  O valor é retornado no padrão ISO 8601, incluindo o deslocamento de fuso horário &#39;Z&#39; no final.    Exemplo: \&quot;2025-04-15T14:16:47.775Z\&quot; | [optional]
**requisicoes** | [**\NuvemFiscal\Model\DfeRequisicaoDebug[]**](DfeRequisicaoDebug.md) | Lista de requisições feitas ao autorizador durante o processamento. | [optional]

[[Voltar à lista de DTOs]](../../README.md#models) [[Voltar à lista de API]](../../README.md#endpoints) [[Voltar ao README]](../../README.md)
