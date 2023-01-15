# # RpsPedidoEmissao

## Propriedades

Nome | Tipo | Descrição | Comentários
------------ | ------------- | ------------- | -------------
**referencia** | **string** | Seu identificador único para este documento. Opcional, ajuda a evitar o envio duplicado de um mesmo documento. | [optional]
**data_emissao** | **\DateTime** | Data e Hora de Emissão do RPS, no formato AAAA-MM-DDTHH:MM:SSTZD.  Caso não informado, será considerada a data/hora da requisição à API da Nuvem Fiscal. | [optional]
**competencia** | **\DateTime** | Competência do RPS, no formato AAAA-MM-DD.  Caso não informado, será considerada a data da requisição à API da Nuvem Fiscal. | [optional]
**natureza_tributacao** | **int** | Natureza da tributação:  * 1 - Simples Nacional;  * 2 - Fixo;  * 3 - Depósito em juízo;  * 4 - Exigibilidade suspensa por decisão judicial;  * 5 - Exigibilidade suspensa por procedimento administrativo;  * 6 - Isenção parcial. | [optional]
**prestador** | [**\NuvemFiscal\Model\RpsIdentificacaoPrestador**](RpsIdentificacaoPrestador.md) |  |
**tomador** | [**\NuvemFiscal\Model\RpsDadosTomador**](RpsDadosTomador.md) |  |
**intermediario** | [**\NuvemFiscal\Model\RpsDadosIntermediario**](RpsDadosIntermediario.md) |  | [optional]
**construcao_civil** | [**\NuvemFiscal\Model\RpsDadosConstrucaoCivil**](RpsDadosConstrucaoCivil.md) |  | [optional]
**servicos** | [**\NuvemFiscal\Model\RpsDadosServico[]**](RpsDadosServico.md) |  |
**outras_informacoes** | **string** | Informações adicionais ao documento. | [optional]

[[Voltar à lista de DTOs]](../../README.md#models) [[Voltar à lista de API]](../../README.md#endpoints) [[Voltar ao README]](../../README.md)
