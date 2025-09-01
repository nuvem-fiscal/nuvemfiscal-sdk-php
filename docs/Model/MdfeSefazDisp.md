# # MdfeSefazDisp

## Propriedades

Nome | Tipo | Descrição | Comentários
------------ | ------------- | ------------- | -------------
**cnpj_forn** | **string** | CNPJ da empresa fornecedora do Vale-Pedágio.  * CNPJ da Empresa Fornecedora do Vale-Pedágio, ou seja, empresa que fornece ao Responsável pelo Pagamento do Vale-Pedágio os dispositivos do Vale-Pedágio.  * Informar os zeros não significativos. |
**cnpjpg** | **string** | CNPJ do responsável pelo pagamento do Vale-Pedágio.  * responsável pelo pagamento do Vale Pedágio. Informar somente quando o responsável não for o emitente do MDF-e.  * Informar os zeros não significativos. | [optional]
**cpfpg** | **string** | CNPJ do responsável pelo pagamento do Vale-Pedágio.  Informar os zeros não significativos. | [optional]
**n_compra** | **string** | Identificador do vale pedagio obrigatório - IDVPO. | [optional]
**v_vale_ped** | **float** | Valor do Vale-Pedagio.  Valor do Vale-Pedágio obrigatório necessário à livre circulação, desde a origem da operação de transporte até o destino, do transportador contratado. |
**tp_vale_ped** | **string** | Tipo do Vale Pedagio.  * 01 - TAG; 04 - Leitura de placa (pela placa de identificação veicular) | [optional]

[[Voltar à lista de DTOs]](../../README.md#models) [[Voltar à lista de API]](../../README.md#endpoints) [[Voltar ao README]](../../README.md)
