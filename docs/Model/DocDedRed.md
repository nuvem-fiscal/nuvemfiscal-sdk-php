# # DocDedRed

## Propriedades

Nome | Tipo | Descrição | Comentários
------------ | ------------- | ------------- | -------------
**ch_nfse** | **string** | Chave de Acesso da NFS-e (Padrão Nacional). | [optional]
**ch_nfe** | **string** | Chave de Acesso da NF-e. | [optional]
**nfse_mun** | [**\NuvemFiscal\Model\DocOutNFSe**](DocOutNFSe.md) |  | [optional]
**nfnfs** | [**\NuvemFiscal\Model\DocNFNFS**](DocNFNFS.md) |  | [optional]
**n_doc_fisc** | **string** | Número de documento fiscal. | [optional]
**n_doc** | **string** | Número de documento não fiscal. | [optional]
**tp_ded_red** | **int** | Identificação da Dedução/Redução:  * 1 - Alimentação e bebidas/frigobar  * 2 - Materiais  * 3 - Produção externa  * 4 - Reembolso de despesas  * 5 - Repasse consorciado  * 6 - Repasse plano de saúde  * 7 - Serviços  * 8 - Subempreitada de mão de obra  * 99 - Outras deduções |
**x_desc_out_ded** | **string** | Descrição da Dedução/Redução quando a opção é \&quot;99 - Outras Deduções\&quot;. | [optional]
**dt_emi_doc** | **\DateTime** | Data da emissão do documento dedutível. Ano, mês e dia (AAAA-MM-DD). |
**v_dedutivel_redutivel** | **float** | Valor monetário total dedutível/redutível no documento informado (R$).  Este é o valor total no documento informado que é passível de dedução/redução. |
**v_deducao_reducao** | **float** | Valor monetário utilizado para dedução/redução do valor do serviço da NFS-e que está sendo emitida (R$).  Deve ser menor ou igual ao valor deduzível/redutível (vDedutivelRedutivel). |
**fornec** | [**\NuvemFiscal\Model\InfoFornecDocDedRed**](InfoFornecDocDedRed.md) |  | [optional]

[[Voltar à lista de DTOs]](../../README.md#models) [[Voltar à lista de API]](../../README.md#endpoints) [[Voltar ao README]](../../README.md)
