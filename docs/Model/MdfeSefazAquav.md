# # MdfeSefazAquav

## Propriedades

Nome | Tipo | Descrição | Comentários
------------ | ------------- | ------------- | -------------
**irin** | **string** | Irin do navio sempre deverá ser informado. |
**tp_emb** | **string** | Código do tipo de embarcação.  Preencher com código da Tabela de Tipo de Embarcação definida no Ministério dos Transportes. |
**c_embar** | **string** | Código da embarcação. |
**x_embar** | **string** | Nome da embarcação. |
**n_viag** | **string** | Número da Viagem. |
**c_prt_emb** | **string** | Código do Porto de Embarque.  Preencher de acordo com Tabela de Portos definida no Ministério dos Transportes. |
**c_prt_dest** | **string** | Código do Porto de Destino.  Preencher de acordo com Tabela de Portos definida no Ministério dos Transportes. |
**prt_trans** | **string** | Porto de Transbordo. | [optional]
**tp_nav** | **int** | Tipo de Navegação.  Preencher com:  * 0 - Interior  * 1 - Cabotagem | [optional]
**inf_term_carreg** | [**\NuvemFiscal\Model\MdfeSefazInfTermCarreg[]**](MdfeSefazInfTermCarreg.md) |  | [optional]
**inf_term_descarreg** | [**\NuvemFiscal\Model\MdfeSefazInfTermDescarreg[]**](MdfeSefazInfTermDescarreg.md) |  | [optional]
**inf_emb_comb** | [**\NuvemFiscal\Model\MdfeSefazInfEmbComb[]**](MdfeSefazInfEmbComb.md) |  | [optional]
**inf_unid_carga_vazia** | [**\NuvemFiscal\Model\MdfeSefazInfUnidCargaVazia[]**](MdfeSefazInfUnidCargaVazia.md) |  | [optional]
**inf_unid_transp_vazia** | [**\NuvemFiscal\Model\MdfeSefazInfUnidTranspVazia[]**](MdfeSefazInfUnidTranspVazia.md) |  | [optional]
**mmsi** | **string** | Maritime Mobile Service Identify.  Preencher com o MMSI (Maritime Mobile Service Identify) fornecido pela ANATEL ou autoridade de telecomunicações de origem da embarcação. | [optional]

[[Voltar à lista de DTOs]](../../README.md#models) [[Voltar à lista de API]](../../README.md#endpoints) [[Voltar ao README]](../../README.md)
