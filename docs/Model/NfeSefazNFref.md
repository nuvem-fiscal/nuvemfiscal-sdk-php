# # NfeSefazNFref

## Propriedades

Nome | Tipo | Descrição | Comentários
------------ | ------------- | ------------- | -------------
**ref_nfe** | **string** | Chave de acesso das NF-e referenciadas. Chave de acesso compostas por Código da UF (tabela do IBGE) + AAMM da emissão + CNPJ do Emitente + modelo, série e número da NF-e Referenciada + Código Numérico + DV. | [optional]
**ref_nf** | [**\NuvemFiscal\Model\NfeSefazRefNF**](NfeSefazRefNF.md) |  | [optional]
**ref_nfp** | [**\NuvemFiscal\Model\NfeSefazRefNFP**](NfeSefazRefNFP.md) |  | [optional]
**ref_cte** | **string** | Utilizar esta TAG para referenciar um CT-e emitido anteriormente, vinculada a NF-e atual. | [optional]
**ref_ecf** | [**\NuvemFiscal\Model\NfeSefazRefECF**](NfeSefazRefECF.md) |  | [optional]

[[Voltar à lista de DTOs]](../../README.md#models) [[Voltar à lista de API]](../../README.md#endpoints) [[Voltar ao README]](../../README.md)
