# # DfeRequisicaoDebug

## Propriedades

Nome | Tipo | Descrição | Comentários
------------ | ------------- | ------------- | -------------
**created_at** | **\DateTime** | Data e hora da criação da requisição, representada no formato UTC (Tempo Universal Coordenado).  O valor é retornado no padrão ISO 8601, incluindo o deslocamento de fuso horário &#39;Z&#39; no final.    Exemplo: \&quot;2025-04-15T14:16:47.775Z\&quot; | [optional]
**tipo** | **string** | Tipo da operação realizada na requisição para o autorizador.  Pode assumir um dos seguintes valores:  - &#39;envio_lote&#39;      : envio do lote de documentos fiscais para autorização;  - &#39;consulta_lote&#39;   : consulta do processamento do lote;  - &#39;cons_sit_dfe&#39;    : consulta de situação individual de um DFe.    Esse campo indica a natureza da interação com a SEFAZ ou prefeitura,  e é útil para fins de rastreamento e diagnóstico do fluxo. | [optional]
**lote_id** | **string** | Identificador do lote vinculado à requisição. | [optional]
**codigo_status** | **int** | Código de status retornado pela SEFAZ/prefeitura. | [optional]
**motivo_status** | **string** | Motivo associado ao status retornado. | [optional]
**http_request** | [**\NuvemFiscal\Model\HttpRequestDebug**](HttpRequestDebug.md) |  | [optional]

[[Voltar à lista de DTOs]](../../README.md#models) [[Voltar à lista de API]](../../README.md#endpoints) [[Voltar ao README]](../../README.md)
