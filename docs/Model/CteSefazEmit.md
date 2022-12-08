# # CteSefazEmit

## Propriedades

Nome | Tipo | Descrição | Comentários
------------ | ------------- | ------------- | -------------
**cnpj** | **string** | CNPJ do emitente.  Informar zeros não significativos.  Obrigatório caso o emitente seja pessoa jurídica. | [optional]
**cpf** | **string** | CPF do emitente.  Informar zeros não significativos.    Usar com série específica 920-969 para emitente pessoa física com inscrição estadual.  Obrigatorio caso o emitente seja pessoa física. | [optional]
**ie** | **string** | Inscrição Estadual do Emitente.  A IE do emitente somente ficará sem informação para o caso do Regime Especial da NFF (tpEmis&#x3D;3).  Caso não seja informado, será utilizado o do cadastro da empresa. | [optional]
**iest** | **string** | Inscrição Estadual do Substituto Tributário. | [optional]
**x_nome** | **string** | Razão social ou Nome do emitente.  Caso não seja informado, será utilizado o do cadastro da empresa. | [optional]
**x_fant** | **string** | Nome fantasia.  Caso não seja informado, será utilizado o do cadastro da empresa. | [optional]
**ender_emit** | [**\NuvemFiscal\Model\CteSefazEndeEmi**](CteSefazEndeEmi.md) |  | [optional]
**crt** | **int** | Código do Regime Tributário.  Informar: 1&#x3D;Simples Nacional;   2&#x3D;Simples Nacional, excesso sublimite de receita bruta;  3&#x3D;Regime Normal. | [optional]

[[Voltar à lista de DTOs]](../../README.md#models) [[Voltar à lista de API]](../../README.md#endpoints) [[Voltar ao README]](../../README.md)
