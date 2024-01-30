# # NfcomSefazAssinante

## Propriedades

Nome | Tipo | Descrição | Comentários
------------ | ------------- | ------------- | -------------
**i_cod_assinante** | **string** | Código único de Identificação do assinante. |
**tp_assinante** | **int** | Tipo de assinante.  * 1 - Comercial  * 2 - Industrial  * 3 - Residencial/Pessoa Física  * 4 - Produtor Rural  * 5 - Órgão da administração pública estadual direta e suas fundações e autarquias, quando mantidas pelo poder público estadual e regidas por normas de direito público, nos termos do Convênio ICMS 107/95  * 6 - Prestador de serviço de telecomunicação responsável pelo recolhimento do imposto incidente sobre a cessão dos meios de rede do prestador do serviço ao usuário final, nos termos do Convênio ICMS 17/13  * 7 - Missões Diplomáticas, Repartições Consulares e Organismos Internacionais, nos termos do Convênio ICMS 158/94  * 8 - Igrejas e Templos de qualquer natureza  * 99 - Outros não especificados anteriormente |
**tp_serv_util** | **int** | Tipo de serviço utilizado.  * 1 - Telefonia  * 2 - Comunicação de dados  * 3 - TV por Assinatura  * 4 - Provimento de acesso à Internet  * 5 - Multimídia  * 6 - Outros  * 7 - Varios |
**n_contrato** | **string** | Número do Contrato do assinante. | [optional]
**d_contrato_ini** | **\DateTime** | Data de início do contrato.  Formato AAAA-MM-DD. | [optional]
**d_contrato_fim** | **\DateTime** | Data de término do contrato.  Formato AAAA-MM-DD. | [optional]
**nro_term_princ** | **string** | Número do Terminal Principal do serviço contratado.  Em se tratando de plano de prestação de serviço telefônico corporativo, familiar ou similares, informar o número do terminal telefônico principal do plano. | [optional]
**c_uf_princ** | **int** | Código da UF de habilitação do terminal.  Utilizar a  Tabela do IBGE de código de unidades da federação. | [optional]
**nro_term_adic** | **string** | Número dos Terminais adicionais do serviço contratado. | [optional]
**c_uf_adic** | **int** | Código da UF de habilitação do terminal. | [optional]

[[Voltar à lista de DTOs]](../../README.md#models) [[Voltar à lista de API]](../../README.md#endpoints) [[Voltar ao README]](../../README.md)
