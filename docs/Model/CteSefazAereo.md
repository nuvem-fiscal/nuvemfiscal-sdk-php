# # CteSefazAereo

## Propriedades

Nome | Tipo | Descrição | Comentários
------------ | ------------- | ------------- | -------------
**n_minu** | **int** | Número da Minuta.  Documento que precede o CT-e, assinado pelo expedidor, espécie de pedido de serviço. | [optional]
**n_oca** | **string** | Número Operacional do Conhecimento Aéreo.  Representa o número de controle comumente utilizado pelo conhecimento aéreo composto por uma sequência numérica de onze dígitos. Os três primeiros dígitos representam um código que os operadores de transporte aéreo associados à IATA possuem. Em seguida um número de série de sete dígitos determinados pelo operador de transporte aéreo. Para finalizar, um dígito verificador, que é um sistema de módulo sete imponderado o qual divide o número de série do conhecimento aéreo por sete e usa o resto como dígito de verificação. | [optional]
**d_prev_aereo** | **\DateTime** | Data prevista da entrega.  Formato AAAA-MM-DD. |
**nat_carga** | [**\NuvemFiscal\Model\CteSefazNatCarga**](CteSefazNatCarga.md) |  |
**tarifa** | [**\NuvemFiscal\Model\CteSefazTarifa**](CteSefazTarifa.md) |  |
**peri** | [**\NuvemFiscal\Model\CteSefazPeri[]**](CteSefazPeri.md) |  | [optional]

[[Voltar à lista de DTOs]](../../README.md#models) [[Voltar à lista de API]](../../README.md#endpoints) [[Voltar ao README]](../../README.md)
