# # HttpRequestDebug

## Propriedades

Nome | Tipo | Descrição | Comentários
------------ | ------------- | ------------- | -------------
**id** | **string** | Identificador interno da requisição HTTP.    Esse identificador pode ser utilizado no endpoint  &lt;a href&#x3D;\&quot;#tag/Debug/operation/DebugHttpRequestContent\&quot;&gt;Corpo da Requisição HTTP&lt;/a&gt; ou &lt;a href&#x3D;\&quot;#tag/Debug/operation/DebugHttpResponseContent\&quot;&gt;Corpo da Resposta HTTP&lt;/a&gt;  para obter o conteúdo enviado ou recebido na comunicação com o autorizador. | [optional]
**method** | **string** | Método HTTP utilizado (ex: &#39;POST&#39;). | [optional]
**uri** | **string** | URI do serviço externo (SEFAZ, prefeitura, etc.). | [optional]
**headers** | **string** | Cabeçalhos HTTP enviados na requisição, no formato bruto. | [optional]
**response_status_code** | **int** | Código de status HTTP retornado (ex: 200, 403). | [optional]
**response_status_reason** | **string** | Motivo ou descrição do status HTTP retornado. | [optional]
**response_headers** | **string** | Cabeçalhos retornados na resposta, no formato bruto. | [optional]
**response_time** | **int** | Tempo de resposta do serviço externo, em milissegundos. | [optional]

[[Voltar à lista de DTOs]](../../README.md#models) [[Voltar à lista de API]](../../README.md#endpoints) [[Voltar ao README]](../../README.md)
