# # NfeSefazComb

## Propriedades

Nome | Tipo | Descrição | Comentários
------------ | ------------- | ------------- | -------------
**c_prod_anp** | **int** | Código de produto da ANP. codificação de produtos do SIMP (http://www.anp.gov.br). |
**desc_anp** | **string** | Descrição do Produto conforme ANP. Utilizar a descrição de produtos do Sistema de Informações de Movimentação de Produtos - SIMP (http://www.anp.gov.br/simp/). |
**p_glp** | **float** | Percentual do GLP derivado do petróleo no produto GLP (cProdANP&#x3D;210203001). Informar em número decimal o percentual do GLP derivado de petróleo no produto GLP. Valores 0 a 100. | [optional]
**p_gnn** | **float** | Percentual de gás natural nacional - GLGNn para o produto GLP (cProdANP&#x3D;210203001). Informar em número decimal o percentual do Gás Natural Nacional - GLGNn para o produto GLP. Valores de 0 a 100. | [optional]
**p_gni** | **float** | Percentual de gás natural importado GLGNi para o produto GLP (cProdANP&#x3D;210203001). Informar em número deciaml o percentual do Gás Natural Importado - GLGNi para o produto GLP. Valores de 0 a 100. | [optional]
**v_part** | **float** | Valor de partida (cProdANP&#x3D;210203001). Deve ser informado neste campo o valor por quilograma sem ICMS. | [optional]
**codif** | **string** | Código de autorização / registro do CODIF. Informar apenas quando a UF utilizar o CODIF (Sistema de Controle do    Diferimento do Imposto nas Operações com AEAC - Álcool Etílico Anidro Combustível). | [optional]
**q_temp** | **float** | Quantidade de combustível  faturada à temperatura ambiente.  Informar quando a quantidade  faturada informada no campo  qCom (I10) tiver sido ajustada para  uma temperatura diferente da  ambiente. | [optional]
**uf_cons** | **string** | Sigla da UF de Consumo. |
**cide** | [**\NuvemFiscal\Model\NfeSefazCIDE**](NfeSefazCIDE.md) |  | [optional]
**encerrante** | [**\NuvemFiscal\Model\NfeSefazEncerrante**](NfeSefazEncerrante.md) |  | [optional]
**p_bio** | **float** | Percentual do índice de mistura do Biodiesel (B100) no Óleo Diesel B instituído pelo órgão regulamentador. | [optional]
**orig_comb** | [**\NuvemFiscal\Model\NfeSefazOrigComb[]**](NfeSefazOrigComb.md) |  | [optional]

[[Voltar à lista de DTOs]](../../README.md#models) [[Voltar à lista de API]](../../README.md#endpoints) [[Voltar ao README]](../../README.md)
