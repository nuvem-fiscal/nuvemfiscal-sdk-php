# # MdfeSefazEmit

## Propriedades

Nome | Tipo | Descrição | Comentários
------------ | ------------- | ------------- | -------------
**cnpj** | **string** | CNPJ do emitente.  Informar zeros não significativos.  Obrigatório caso o emitente seja pessoa jurídica. | [optional]
**cpf** | **string** | CPF do emitente.  Informar zeros não significativos.  Usar com série específica 920-969 para emitente pessoa física com inscrição estadual.  Poderá ser usado também para emissão do Regime Especial da Nota Fiscal Fácil.  Obrigatorio caso o emitente seja pessoa física. | [optional]
**ie** | **string** | Inscrição Estadual do emitemte.  Caso não seja informado, será utilizado o do cadastro da empresa. | [optional]
**x_nome** | **string** | Razão social ou Nome do emitente.  Caso não seja informado, será utilizado o do cadastro da empresa. | [optional]
**x_fant** | **string** | Nome fantasia do emitente.  Caso não seja informado, será utilizado o do cadastro da empresa. | [optional]
**ender_emit** | [**\NuvemFiscal\Model\MdfeSefazEndeEmi**](MdfeSefazEndeEmi.md) |  | [optional]

[[Voltar à lista de DTOs]](../../README.md#models) [[Voltar à lista de API]](../../README.md#endpoints) [[Voltar ao README]](../../README.md)
