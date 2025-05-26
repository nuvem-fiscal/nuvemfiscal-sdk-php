# # CServ

## Propriedades

Nome | Tipo | Descrição | Comentários
------------ | ------------- | ------------- | -------------
**c_trib_nac** | **string** | Código de tributação nacional do ISSQN.  - **Ambiente Nacional**: O código deve conter exatamente 6 dígitos numéricos, sendo 2 para Item (LC 116/2003), 2 para Subitem (LC 116/2003) e 2 para Desdobro Nacional. Exemplo: &#x60;010701&#x60;.  - **Envio direto para a Prefeitura**: Em muitos municípios, continua sendo exigido apenas o código conforme a LC 116/2003, totalizando 4 dígitos numéricos (2 para Item e 2 para Subitem). Exemplo: &#x60;0107&#x60;. |
**c_trib_mun** | **string** | Código de tributação municipal do ISSQN. | [optional]
**cnae** | **string** | Código CNAE (Classificação Nacional de Atividades Econômicas). | [optional]
**x_desc_serv** | **string** | Descrição completa do serviço prestado.    Os caracteres acentuados poderão ser alterados para caracteres sem acentuação. |
**c_nbs** | **string** | Código NBS (Nomenclatura Brasileira de Serviços, Intangíveis e outras Operações que produzam Variações no Patrimônio) correspondente ao serviço prestado. | [optional]

[[Voltar à lista de DTOs]](../../README.md#models) [[Voltar à lista de API]](../../README.md#endpoints) [[Voltar ao README]](../../README.md)
