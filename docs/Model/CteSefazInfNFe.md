# # CteSefazInfNFe

## Propriedades

Nome | Tipo | Descrição | Comentários
------------ | ------------- | ------------- | -------------
**chave** | **string** | Chave de acesso da NF-e. |
**pin** | **string** | PIN SUFRAMA.  PIN atribuído pela SUFRAMA para a operação. | [optional]
**d_prev** | **\DateTime** | Data prevista de entrega.  Formato AAAA-MM-DD. | [optional]
**inf_unid_carga** | [**\NuvemFiscal\Model\CteSefazUnidCarga[]**](CteSefazUnidCarga.md) | Informações das Unidades de Carga (Containeres/ULD/Outros).  Dispositivo de carga utilizada (Unit Load Device - ULD) significa todo tipo de contêiner de carga, vagão, contêiner de avião, palete de aeronave com rede ou palete de aeronave com rede sobre um iglu. | [optional]
**inf_unid_transp** | [**\NuvemFiscal\Model\CteSefazUnidadeTransp[]**](CteSefazUnidadeTransp.md) | Informações das Unidades de Transporte (Carreta/Reboque/Vagão).  Deve ser preenchido com as informações das unidades de transporte utilizadas. | [optional]

[[Voltar à lista de DTOs]](../../README.md#models) [[Voltar à lista de API]](../../README.md#endpoints) [[Voltar ao README]](../../README.md)
