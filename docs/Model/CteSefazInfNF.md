# # CteSefazInfNF

## Propriedades

Nome | Tipo | Descrição | Comentários
------------ | ------------- | ------------- | -------------
**n_roma** | **string** | Número do Romaneio da NF. | [optional]
**n_ped** | **string** | Número do Pedido da NF. | [optional]
**mod** | **string** | Modelo da Nota Fiscal.  Preencher com:  * 01 - NF Modelo 01/1A e Avulsa  * 04 - NF de Produtor |
**serie** | **string** | Série. |
**n_doc** | **string** | Número. |
**d_emi** | **\DateTime** | Data de Emissão.  Formato AAAA-MM-DD. |
**v_bc** | **float** | Valor da Base de Cálculo do ICMS. |
**v_icms** | **float** | Valor Total do ICMS. |
**v_bcst** | **float** | Valor da Base de Cálculo do ICMS ST. |
**v_st** | **float** | Valor Total do ICMS ST. |
**v_prod** | **float** | Valor Total dos Produtos. |
**v_nf** | **float** | Valor Total da NF. |
**n_cfop** | **string** | CFOP Predominante.  CFOP da NF ou, na existência de mais de um, predominância pelo critério de valor econômico. |
**n_peso** | **float** | Peso total em Kg. | [optional]
**pin** | **string** | PIN SUFRAMA.  PIN atribuído pela SUFRAMA para a operação. | [optional]
**d_prev** | **\DateTime** | Data prevista de entrega.  Formato AAAA-MM-DD. | [optional]
**inf_unid_carga** | [**\NuvemFiscal\Model\CteSefazUnidCarga[]**](CteSefazUnidCarga.md) |  | [optional]
**inf_unid_transp** | [**\NuvemFiscal\Model\CteSefazUnidadeTransp[]**](CteSefazUnidadeTransp.md) |  | [optional]

[[Voltar à lista de DTOs]](../../README.md#models) [[Voltar à lista de API]](../../README.md#endpoints) [[Voltar ao README]](../../README.md)
