# # NfcomSefazIde

## Propriedades

Nome | Tipo | Descrição | Comentários
------------ | ------------- | ------------- | -------------
**c_uf** | **int** | Código da UF de emissão e autorização da NFCom.  Código da UF de emissão e autorização do Documento Fiscal. Utilizar a  Tabela do IBGE de código de unidades da federação. |
**tp_amb** | **int** | Tipo do Ambiente:  * 1 - Produção  * 2 - Homologação | [optional]
**mod** | **int** | Modelo da NFCom.  Utilizar o código 62 para identificação da NFCom. | [optional]
**serie** | **int** | Série do documento fiscal.  Informar a série do documento fiscal (informar zero para série única). |
**n_nf** | **int** | Número do documento fiscal.  Número que identifica o documento fiscal 1 a 999999999. |
**c_nf** | **string** | Código numérico que compõe a Chave de Acesso.  Código aleatório gerado pelo emitente, com o objetivo de evitar acessos indevidos ao documento.    *Geramos automaticamente quando nenhum valor é informado.* | [optional]
**c_dv** | **int** | Digito verificador da chave de acesso.  Informar o dígito  de controle da chave de acesso documento fiscal, que deve ser calculado com a aplicação do algoritmo módulo 11 (base 2,9) da chave de acesso.    *Geramos automaticamente quando nenhum valor é informado.* | [optional]
**dh_emi** | **\DateTime** | Data e hora de emissão do documento fiscal.  Formato AAAA-MM-DDTHH:MM:DD TZD. |
**tp_emis** | **int** | Forma de emissão do Documento Fiscal.  * 1 - Normal  * 2 - Contingência |
**n_site_autoriz** | **int** | Identificação do número do Site do Autorizador de recepção da NFCom.  Se o autorizador da NFCom possuir apenas um site deverá ser informado com Zero (0), em caso de Autorizador trabalhar com múltiplos sites indicar o número do site para qual foi endereçada a NFCOM (1 a 9).  Observação: o ambiente autorizador que trabalhar com mais de um Site deverá divulgar para cada endereço de site qual número correspondente de nSiteAutoriz o contribuinte pode usar. |
**c_mun_fg** | **string** | Código do município de ocorrência do fato gerador. |
**fin_nf_com** | **int** | Finalidade de emissão da NFCom.  * 0 - NFCom Normal  * 3 - NFCom de Substituição  * 4 - NFCom de Ajuste |
**tp_fat** | **int** | Tipo de Faturamento da NFCom.  * 0 - Faturamento Normal  * 1 - Faturamento centralizado  * 2 - Cofaturamento |
**ver_proc** | **string** | Versão do processo de emissão.  Informar a versão do aplicativo emissor de NFCom. |
**ind_pre_pago** | **int** | Indicador de serviço pré-pago.  * 1 - Serviço pré-pago (informar a tag somente se a nota for referente a um serviço exclusivamente pré-pago) | [optional]
**ind_cessao_meios_rede** | **int** | Indicador de Sessão de Meios de Rede.  Uma vez informado (valor &#x3D; 1), essa tag dispensa geração do grupo Fatura.  Apenas para notas dos tipos Normal e Substituição com tipo de faturamento normal. | [optional]
**ind_nota_entrada** | **int** | Indicador de nota de entrada.  * 1 - Informar quando for nota de ajuste e possuir itens com CFOP de entrada | [optional]
**dh_cont** | **\DateTime** | Data e Hora da entrada em contingência.  Informar a data e hora no formato AAAA-MM-DDTHH:MM:SS. | [optional]
**x_just** | **string** | Justificativa da entrada em contingência. | [optional]

[[Voltar à lista de DTOs]](../../README.md#models) [[Voltar à lista de API]](../../README.md#endpoints) [[Voltar ao README]](../../README.md)
