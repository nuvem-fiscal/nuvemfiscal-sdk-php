# # CteSefazCompl

## Propriedades

Nome | Tipo | Descrição | Comentários
------------ | ------------- | ------------- | -------------
**x_carac_ad** | **string** | Característica adicional do transporte.  Texto livre:  REENTREGA; DEVOLUÇÃO; REFATURAMENTO; etc. | [optional]
**x_carac_ser** | **string** | Característica adicional do serviço.  Texto livre:             ENTREGA EXPRESSA; LOGÍSTICA REVERSA; CONVENCIONAL; EMERGENCIAL; etc. | [optional]
**x_emi** | **string** | Funcionário emissor do CTe. | [optional]
**fluxo** | [**\NuvemFiscal\Model\CteSefazFluxo**](CteSefazFluxo.md) |  | [optional]
**entrega** | [**\NuvemFiscal\Model\CteSefazEntrega**](CteSefazEntrega.md) |  | [optional]
**orig_calc** | **string** | Município de origem para efeito de cálculo do frete. | [optional]
**dest_calc** | **string** | Município de destino para efeito de cálculo do frete. | [optional]
**x_obs** | **string** | Observações Gerais. | [optional]
**obs_cont** | [**\NuvemFiscal\Model\CteSefazObsCont[]**](CteSefazObsCont.md) | Campo de uso livre do contribuinte.  Informar o nome do campo no atributo xCampo e o conteúdo do campo no XTexto. | [optional]
**obs_fisco** | [**\NuvemFiscal\Model\CteSefazObsFisco[]**](CteSefazObsFisco.md) | Campo de uso livre do contribuinte.  Informar o nome do campo no atributo xCampo e o conteúdo do campo no XTexto. | [optional]

[[Voltar à lista de DTOs]](../../README.md#models) [[Voltar à lista de API]](../../README.md#endpoints) [[Voltar ao README]](../../README.md)
