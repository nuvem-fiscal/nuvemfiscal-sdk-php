# # DceSefazIde

## Propriedades

Nome | Tipo | Descrição | Comentários
------------ | ------------- | ------------- | -------------
**c_uf** | **int** | Código da UF de emissão e autorização da DCe.  Código da UF de emissão e autorização do Documento Fiscal. Utilizar a  Tabela do IBGE de código de unidades da federação. |
**c_dc** | **string** | Código numérico que compõe a Chave de Acesso.  Código aleatório gerado pelo emitente, com o objetivo de evitar acessos indevidos ao documento.    *Geramos automaticamente quando nenhum valor é informado.* | [optional]
**mod** | **int** | Modelo da DCe.  Utilizar o código 99 para identificação da DCe. | [optional]
**serie** | **int** | Série do documento fiscal.  Informar a série do documento fiscal (informar zero para série única). |
**n_dc** | **int** | Número do documento fiscal.  Número que identifica o documento fiscal 1 a 999999999. |
**dh_emi** | **\DateTime** | Data e hora de emissão do documento fiscal.  Formato UTC (AAAA-MM-DDThh:mm:ssTZD, onde TZD &#x3D; +hh:mm ou -hh:mm). |
**tp_emis** | **int** | Forma de emissão do Documento Fiscal.  * 1 - Normal (não contingência)  * 9 - Contingência off-line da DCe |
**tp_emit** | **int** | Tipo do Emitente da DCe.  * 0 - App Fisco  * 1 - Marketplace  * 2 - Emissor próprio  * 3 - Transportadora  * 4 - ECT |
**n_site_autoriz** | **int** | Identificação do número do Site do Autorizador de recepção da DCe.  Se o autorizador da DCe possuir apenas um site deverá ser informado com Zero (0), em caso de Autorizador trabalhar com múltiplos sites indicar o número do site para qual foi endereçada a DCE (1 a 9).  Observação: o ambiente autorizador que trabalhar com mais de um Site deverá divulgar para cada endereço de site qual número correspondente de nSiteAutoriz o contribuinte pode usar. |
**c_dv** | **int** | Digito verificador da chave de acesso.  Informar o dígito de controle da chave de acesso documento fiscal, que deve ser calculado com a aplicação do algoritmo módulo 11 (base 2,9) da chave de acesso.    *Geramos automaticamente quando nenhum valor é informado.* | [optional]
**tp_amb** | **int** | Tipo do Ambiente:  * 1 - Produção  * 2 - Homologação | [optional]
**ver_proc** | **string** | Versão do processo de emissão.  Informar a versão do aplicativo emissor de DCe. |

[[Voltar à lista de DTOs]](../../README.md#models) [[Voltar à lista de API]](../../README.md#endpoints) [[Voltar ao README]](../../README.md)
