# # Nfse

## Propriedades

Nome | Tipo | Descrição | Comentários
------------ | ------------- | ------------- | -------------
**id** | **string** | ID único da nota gerado automaticamente pela Nuvem Fiscal. | [optional]
**created_at** | **\DateTime** |  | [optional]
**status** | **string** |  | [optional]
**numero** | **string** |  | [optional]
**codigo_verificacao** | **string** |  | [optional]
**link_url** | **string** |  | [optional]
**data_emissao** | **\DateTime** |  | [optional]
**ambiente** | **string** |  | [optional]
**referencia** | **string** |  | [optional]
**dps** | [**\NuvemFiscal\Model\DPS**](DPS.md) |  | [optional]
**cancelamento** | [**\NuvemFiscal\Model\NfseCancelamento**](NfseCancelamento.md) |  | [optional]
**mensagens** | [**\NuvemFiscal\Model\NfseMensagemRetorno[]**](NfseMensagemRetorno.md) |  | [optional]
**rps** | [**\NuvemFiscal\Model\Rps**](Rps.md) |  | [optional]

[[Voltar à lista de DTOs]](../../README.md#models) [[Voltar à lista de API]](../../README.md#endpoints) [[Voltar ao README]](../../README.md)
