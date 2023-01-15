# # CteSefazAquav

## Propriedades

Nome | Tipo | Descrição | Comentários
------------ | ------------- | ------------- | -------------
**v_prest** | **float** | Valor da Prestação Base de Cálculo do AFRMM. |
**v_afrmm** | **float** | AFRMM (Adicional de Frete para Renovação da Marinha Mercante). |
**x_navio** | **string** | Identificação do Navio. |
**balsa** | [**\NuvemFiscal\Model\CteSefazBalsa[]**](CteSefazBalsa.md) |  | [optional]
**n_viag** | **string** | Número da Viagem. | [optional]
**direc** | **string** | Direção.  Preencher com: N-Norte, L-Leste, S-Sul, O-Oeste. |
**irin** | **string** | Irin do navio sempre deverá ser informado. |
**det_cont** | [**\NuvemFiscal\Model\CteSefazDetCont[]**](CteSefazDetCont.md) |  | [optional]
**tp_nav** | **int** | Tipo de Navegação.  Preencher com:  * 0 - Interior  * 1 - Cabotagem | [optional]

[[Voltar à lista de DTOs]](../../README.md#models) [[Voltar à lista de API]](../../README.md#endpoints) [[Voltar ao README]](../../README.md)
