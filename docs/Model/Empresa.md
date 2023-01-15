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

[[Voltar à lista de DTOs]](../../README.md#models) [[Voltar à lista de API]](../../README.md#endpoints) [[Voltar ao README]](../../README.md)
