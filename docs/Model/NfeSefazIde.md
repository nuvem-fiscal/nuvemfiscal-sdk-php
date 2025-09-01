# # NfeSefazIde

## Propriedades

Nome | Tipo | Descrição | Comentários
------------ | ------------- | ------------- | -------------
**c_uf** | **int** | Código da UF do emitente do Documento Fiscal. Utilizar a Tabela do IBGE. |
**c_nf** | **string** | Código numérico que compõe a Chave de Acesso. Número aleatório gerado pelo emitente para cada NF-e.    *Geramos automaticamente quando nenhum valor é informado.* | [optional]
**nat_op** | **string** | Descrição da Natureza da Operação. |
**mod** | **int** | Código do modelo do Documento Fiscal:  * 55 - NF-e  * 65 - NFC-e | [optional]
**serie** | **int** | Série do Documento Fiscal:  * Série normal 0-889  * Avulsa Fisco 890-899  * SCAN 900-999 |
**n_nf** | **int** | Número do Documento Fiscal. |
**dh_emi** | **\DateTime** | Data e Hora de emissão do Documento Fiscal (AAAA-MM-DDThh:mm:ssTZD) ex.: 2012-09-01T13:00:00-03:00. |
**dh_sai_ent** | **\DateTime** | Data e Hora da saída ou de entrada da mercadoria / produto (AAAA-MM-DDTHH:mm:ssTZD). | [optional]
**tp_nf** | **int** | Tipo do Documento Fiscal:  * 0 - Entrada  * 1 - Saída |
**id_dest** | **int** | Identificador de Local de destino da operação:  * 1 - Interna  * 2 - Interestadual  * 3 - Exterior |
**c_mun_fg** | **string** | Código do Município de Ocorrência do Fato Gerador (utilizar a tabela do IBGE). |
**c_mun_fgibs** | **string** | Informar o município de ocorrência do fato gerador do fato gerador do IBS / CBS.  Campo preenchido somente quando “indPres &#x3D; 5 (Operação presencial, fora do estabelecimento) ”, e não tiver endereço do destinatário (Grupo: E05) ou local de entrega (Grupo: G01). | [optional]
**tp_imp** | **int** | Formato de impressão do DANFE:  * 0 - Sem DANFE  * 1 - DANFe Retrato  * 2 - DANFe Paisagem  * 3 - DANFe Simplificado  * 4 - DANFe NFC-e  * 5 - DANFe NFC-e em mensagem eletrônica |
**tp_emis** | **int** | Forma de emissão da NF-e  * 1 - Normal  * 2 - Contingência FS  * 3 - Regime Especial NFF (NT 2021.002)  * 4 - Contingência DPEC  * 5 - Contingência FSDA  * 6 - Contingência SVC - AN  * 7 - Contingência SVC - RS  * 9 - Contingência off-line NFC-e |
**c_dv** | **int** | Digito Verificador da Chave de Acesso da NF-e.    *Geramos automaticamente quando nenhum valor é informado.* | [optional]
**tp_amb** | **int** | Identificação do Ambiente:  * 1 - Produção  * 2 - Homologação | [optional]
**fin_nfe** | **int** | Finalidade da emissão da NF-e:  * 1 - NFe normal  * 2 - NFe complementar  * 3 - NFe de ajuste  * 4 - Devolução/Retorno  * 5 - Nota de crédito  * 6 - Nota de débito |
**tp_nf_debito** | **string** | Tipo de Nota de Débito:  * 01 - Transferência de créditos para Cooperativas  * 02 - Anulação de Crédito por Saídas Imunes/Isentas  * 03 - Débitos de notas fiscais não processadas na apuração  * 04 - Multa e juros  * 05 - Transferência de crédito de sucessão | [optional]
**tp_nf_credito** | **string** | Tipo de Nota de Crédito. | [optional]
**ind_final** | **int** | Indica operação com consumidor final:  * 0 - Não  * 1 - Consumidor Final |
**ind_pres** | **int** | Indicador de presença do comprador no estabelecimento comercial no momento da operação:  * 0 - Não se aplica (ex.: Nota Fiscal complementar ou de ajuste)  * 1 - Operação presencial  * 2 - Não presencial, internet  * 3 - Não presencial, teleatendimento  * 4 - NFC-e entrega em domicílio  * 5 - Operação presencial, fora do estabelecimento  * 9 - Não presencial, outros |
**ind_intermed** | **int** | Indicador de intermediador/marketplace  * 0 - Operação sem intermediador (em site ou plataforma própria)  * 1 - Operação em site ou plataforma de terceiros (intermediadores/marketplace) | [optional]
**proc_emi** | **int** | Processo de emissão utilizado com a seguinte codificação:  * 0 - emissão de NF-e com aplicativo do contribuinte  * 1 - emissão de NF-e avulsa pelo Fisco  * 2 - emissão de NF-e avulsa, pelo contribuinte com seu certificado digital, através do site  do Fisco  * 3 - emissão de NF-e pelo contribuinte com aplicativo fornecido pelo Fisco |
**ver_proc** | **string** | versão do aplicativo utilizado no processo de  emissão. |
**dh_cont** | **\DateTime** | Informar a data e hora de entrada em contingência contingência no formato  (AAAA-MM-DDThh:mm:ssTZD) ex.: 2012-09-01T13:00:00-03:00. | [optional]
**x_just** | **string** | Informar a Justificativa da entrada. | [optional]
**n_fref** | [**\NuvemFiscal\Model\NfeSefazNFref[]**](NfeSefazNFref.md) |  | [optional]
**g_compra_gov** | [**\NuvemFiscal\Model\NfeSefazCompraGov**](NfeSefazCompraGov.md) |  | [optional]
**g_pag_antecipado** | [**\NuvemFiscal\Model\NfeSefazGPagAntecipado**](NfeSefazGPagAntecipado.md) |  | [optional]

[[Voltar à lista de DTOs]](../../README.md#models) [[Voltar à lista de API]](../../README.md#endpoints) [[Voltar ao README]](../../README.md)
