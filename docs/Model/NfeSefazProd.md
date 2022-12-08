# # NfeSefazProd

## Propriedades

Nome | Tipo | Descrição | Comentários
------------ | ------------- | ------------- | -------------
**c_prod** | **string** | Código do produto ou serviço. Preencher com CFOP caso se trate de itens não relacionados com mercadorias/produto e que o contribuinte não possua codificação própria  Formato ”CFOP9999”. |
**c_ean** | **string** | GTIN (Global Trade Item Number) do produto, antigo código EAN ou código de barras. |
**c_barra** | **string** | Codigo de barras diferente do padrão GTIN. | [optional]
**x_prod** | **string** | Descrição do produto ou serviço. |
**ncm** | **string** | Código NCM (8 posições), será permitida a informação do gênero (posição do capítulo do NCM) quando a operação não for de comércio exterior (importação/exportação) ou o produto não seja tributado pelo IPI. Em caso de item de serviço ou item que não tenham produto (Ex. transferência de crédito, crédito do ativo imobilizado, etc.), informar o código 00 (zeros) (v2.0). |
**nve** | **string[]** | Nomenclatura de Valor aduaneio e Estatístico. | [optional]
**cest** | **string** | Codigo especificador da Substuicao Tributaria - CEST, que identifica a mercadoria sujeita aos regimes de  substituicao tributária e de antecipação do recolhimento  do imposto. | [optional]
**ind_escala** | **string** |  | [optional]
**cnpj_fab** | **string** | CNPJ do Fabricante da Mercadoria, obrigatório para produto em escala NÃO relevante. | [optional]
**c_benef** | **string** |  | [optional]
**extipi** | **string** | Código EX TIPI (3 posições). | [optional]
**cfop** | **string** | Cfop. |
**u_com** | **string** | Unidade comercial. |
**q_com** | **float** | Quantidade Comercial  do produto, alterado para aceitar de 0 a 4 casas decimais e 11 inteiros. |
**v_un_com** | **float** | Valor unitário de comercialização  - alterado para aceitar 0 a 10 casas decimais e 11 inteiros. |
**v_prod** | **float** | Valor bruto do produto ou serviço. |
**c_ean_trib** | **string** | GTIN (Global Trade Item Number) da unidade tributável, antigo código EAN ou código de barras. |
**c_barra_trib** | **string** | Código de barras da unidade tributável diferente do padrão GTIN. | [optional]
**u_trib** | **string** | Unidade Tributável. |
**q_trib** | **float** | Quantidade Tributável - alterado para aceitar de 0 a 4 casas decimais e 11 inteiros. |
**v_un_trib** | **float** | Valor unitário de tributação - - alterado para aceitar 0 a 10 casas decimais e 11 inteiros. |
**v_frete** | **float** | Valor Total do Frete. | [optional]
**v_seg** | **float** | Valor Total do Seguro. | [optional]
**v_desc** | **float** | Valor do Desconto. | [optional]
**v_outro** | **float** | Outras despesas acessórias. | [optional]
**ind_tot** | **int** | Este campo deverá ser preenchido com:   0 – o valor do item (vProd) não compõe o valor total da NF-e (vProd)   1  – o valor do item (vProd) compõe o valor total da NF-e (vProd). |
**di** | [**\NuvemFiscal\Model\NfeSefazDI[]**](NfeSefazDI.md) | Delcaração de Importação  (NT 2011/004). | [optional]
**det_export** | [**\NuvemFiscal\Model\NfeSefazDetExport[]**](NfeSefazDetExport.md) | Detalhe da exportação. | [optional]
**x_ped** | **string** | pedido de compra - Informação de interesse do emissor para controle do B2B. | [optional]
**n_item_ped** | **int** | Número do Item do Pedido de Compra - Identificação do número do item do pedido de Compra. | [optional]
**n_fci** | **string** | Número de controle da FCI - Ficha de Conteúdo de Importação. | [optional]
**rastro** | [**\NuvemFiscal\Model\NfeSefazRastro[]**](NfeSefazRastro.md) |  | [optional]
**inf_prod_nff** | [**\NuvemFiscal\Model\NfeSefazInfProdNFF**](NfeSefazInfProdNFF.md) |  | [optional]
**inf_prod_emb** | [**\NuvemFiscal\Model\NfeSefazInfProdEmb**](NfeSefazInfProdEmb.md) |  | [optional]
**veic_prod** | [**\NuvemFiscal\Model\NfeSefazVeicProd**](NfeSefazVeicProd.md) |  | [optional]
**med** | [**\NuvemFiscal\Model\NfeSefazMed**](NfeSefazMed.md) |  | [optional]
**arma** | [**\NuvemFiscal\Model\NfeSefazArma[]**](NfeSefazArma.md) | Armamentos. | [optional]
**comb** | [**\NuvemFiscal\Model\NfeSefazComb**](NfeSefazComb.md) |  | [optional]
**n_recopi** | **string** | Número do RECOPI. | [optional]

[[Voltar à lista de DTOs]](../../README.md#models) [[Voltar à lista de API]](../../README.md#endpoints) [[Voltar ao README]](../../README.md)
