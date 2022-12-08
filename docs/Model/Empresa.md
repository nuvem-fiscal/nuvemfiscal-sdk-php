# # Empresa

## Propriedades

Nome | Tipo | Descrição | Comentários
------------ | ------------- | ------------- | -------------
**cpf_cnpj** | **string** | CPF ou CNPJ da empresa.  Utilize o valor sem máscara. |
**created_at** | **\DateTime** | Data e hora que o objeto foi criado.  A Nuvem Fiscal gerencia esse campo automaticamente. | [optional]
**updated_at** | **\DateTime** | Data e hora que o objeto foi alterado pela última vez.  A Nuvem Fiscal gerencia esse campo automaticamente. | [optional]
**inscricao_estadual** | **string** | Inscrição estadual da empresa. | [optional]
**inscricao_municipal** | **string** | Inscrição municipal da empresa. | [optional]
**nome_razao_social** | **string** | Razão social da empresa. |
**nome_fantasia** | **string** | Nome fantasia da empresa. | [optional]
**fone** | **string** | Telefone da empresa. | [optional]
**email** | **string** | Email da empresa. |
**endereco** | [**\NuvemFiscal\Model\EmpresaEndereco**](EmpresaEndereco.md) |  |
**optante_simples_nacional** | **bool** | Optante pelo simples nacional. | [optional]
**regime_tributacao** | **int** | Regime Tributário da Empresa:  0 - Nenhum  1 - Simples Nacional  2 - Simples Nacional - Excesso  3 - Normal - Lucro Presumido  4 - Normal - Lucro Real |
**regime_especial_tributacao** | **int** | Regime especial de tributação da Empresa:  0 - Sem Regime Tributário Especial  1 - Micro Empresa Municipal  2 - Estimativa  3 - Sociedade de Profissionais  4 - Cooperativa  5 - Microempresário Individual - MEI  6 - Microempresa ou Pequeno Porte - ME EPP |
**incentivo_fiscal** | **bool** | Indicador se a empresa possui algum tipo de incentivo fiscal. | [optional]
**incentivador_cultural** | **bool** | Indicador se a empresa é um incentivador cultural. | [optional]

[[Voltar à lista de DTOs]](../../README.md#models) [[Voltar à lista de API]](../../README.md#endpoints) [[Voltar ao README]](../../README.md)
