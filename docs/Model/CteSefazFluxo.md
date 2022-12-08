# # CteSefazFluxo

## Propriedades

Nome | Tipo | Descrição | Comentários
------------ | ------------- | ------------- | -------------
**x_orig** | **string** | Sigla ou código interno da Filial/Porto/Estação/ Aeroporto de Origem.  Observações para o modal aéreo:                - Preenchimento obrigatório para o modal aéreo.                - O código de três letras IATA do aeroporto de partida deverá ser incluído como primeira anotação. Quando não for possível, utilizar a sigla OACI. | [optional]
**pass** | [**\NuvemFiscal\Model\CteSefazPass[]**](CteSefazPass.md) |  | [optional]
**x_dest** | **string** | Sigla ou código interno da Filial/Porto/Estação/Aeroporto de Destino.  Observações para o modal aéreo:                - Preenchimento obrigatório para o modal aéreo.                - Deverá ser incluído o código de três letras IATA do aeroporto de destino. Quando não for possível, utilizar a sigla OACI. | [optional]
**x_rota** | **string** | Código da Rota de Entrega. | [optional]

[[Voltar à lista de DTOs]](../../README.md#models) [[Voltar à lista de API]](../../README.md#endpoints) [[Voltar ao README]](../../README.md)
