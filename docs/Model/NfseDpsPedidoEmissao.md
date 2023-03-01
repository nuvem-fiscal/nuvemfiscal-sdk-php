# # NfseDpsPedidoEmissao

## Propriedades

Nome | Tipo | Descrição | Comentários
------------ | ------------- | ------------- | -------------
**provedor** | **string** | Default: &#x60;\&quot;padrao\&quot;&#x60;    Identificação do provedor para transmissão da DPS:   * &#x60;\&quot;padrao\&quot;&#x60;: Provedor padrão da prefeitura.   * &#x60;\&quot;nacional\&quot;&#x60;: Ambiente de Dados Nacional (ADN) do &lt;a href&#x3D;\&quot;https://www.gov.br/nfse/pt-br\&quot; target&#x3D;\&quot;blank\&quot;&gt;Sistema Nacional NFS-e&lt;/a&gt;. | [optional]
**ambiente** | **string** | Identificação do Ambiente. |
**referencia** | **string** | Seu identificador único para este documento. Opcional, ajuda a evitar o envio duplicado de um mesmo documento. | [optional]
**inf_dps** | [**\NuvemFiscal\Model\InfDPS**](InfDPS.md) |  |

[[Voltar à lista de DTOs]](../../README.md#models) [[Voltar à lista de API]](../../README.md#endpoints) [[Voltar ao README]](../../README.md)
