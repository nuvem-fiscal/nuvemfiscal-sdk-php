# # NfeSefazDI

## Propriedades

Nome | Tipo | Descrição | Comentários
------------ | ------------- | ------------- | -------------
**n_di** | **string** | Número do Documento de Importação (DI, DSI, DIRE, DUImp) (NT2011/004). |
**d_di** | **\DateTime** | Data de registro da DI/DSI/DA (AAAA-MM-DD). |
**x_loc_desemb** | **string** | Local do desembaraço aduaneiro. |
**uf_desemb** | **string** | UF onde ocorreu o desembaraço aduaneiro. |
**d_desemb** | **\DateTime** | Data do desembaraço aduaneiro (AAAA-MM-DD). |
**tp_via_transp** | **int** | Via de transporte internacional informada na DI ou na Declaração Única de Importação (DUImp):  * 1 - Maritima  * 2 - Fluvial  * 3 - Lacustre  * 4 - Aerea  * 5 - Postal  * 6 - Ferroviaria  * 7 - Rodoviaria  * 8 - Conduto  * 9 - Meios Proprios  * 10 - Entrada/Saida Ficta  * 11 - Courier  * 12 - Em maos  * 13 - Por reboque |
**v_afrmm** | **float** | Valor Adicional ao frete para renovação de marinha mercante. | [optional]
**tp_intermedio** | **int** | Forma de Importação quanto a intermediação  * 1 - por conta propria  * 2 - por conta e ordem  * 3 - encomenda |
**cnpj** | **string** | CNPJ do adquirente ou do encomendante. | [optional]
**cpf** | **string** | CPF do adquirente ou do encomendante. | [optional]
**uf_terceiro** | **string** | Sigla da UF do adquirente ou do encomendante. | [optional]
**c_exportador** | **string** | Código do exportador (usado nos sistemas internos de informação do emitente da NF-e). |
**adi** | [**\NuvemFiscal\Model\NfeSefazAdi[]**](NfeSefazAdi.md) |  |

[[Voltar à lista de DTOs]](../../README.md#models) [[Voltar à lista de API]](../../README.md#endpoints) [[Voltar ao README]](../../README.md)
