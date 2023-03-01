# # Empresa

## Propriedades

Nome | Tipo | Descrição | Comentários
------------ | ------------- | ------------- | -------------
**cpf_cnpj** | **string** | CPF ou CNPJ da empresa.  Utilize o valor sem máscara. |
**created_at** | **\DateTime** | Data/hora em que o objeto foi criado na Nuvem Fiscal. Representado no formato &lt;a href&#x3D;\&quot;https://en.wikipedia.org/wiki/ISO_8601\&quot; target&#x3D;\&quot;blank\&quot;&gt;&#x60;ISO 8601&#x60;&lt;/a&gt;.    A Nuvem Fiscal gerencia esse campo automaticamente. Caso algum valor seja enviado, ele será ignorado. | [optional]
**updated_at** | **\DateTime** | Data e hora que o objeto foi alterado pela última vez na Nuvem Fiscal. Representado no formato &lt;a href&#x3D;\&quot;https://en.wikipedia.org/wiki/ISO_8601\&quot; target&#x3D;\&quot;blank\&quot;&gt;&#x60;ISO 8601&#x60;&lt;/a&gt;.    A Nuvem Fiscal gerencia esse campo automaticamente. Caso algum valor seja enviado, ele será ignorado. | [optional]
**inscricao_estadual** | **string** | Inscrição estadual da empresa. | [optional]
**inscricao_municipal** | **string** | Inscrição municipal da empresa. | [optional]
**nome_razao_social** | **string** | Razão social da empresa. |
**nome_fantasia** | **string** | Nome fantasia da empresa. | [optional]
**fone** | **string** | Telefone da empresa. | [optional]
**email** | **string** | Email da empresa. |
**endereco** | [**\NuvemFiscal\Model\EmpresaEndereco**](EmpresaEndereco.md) |  |

[[Voltar à lista de DTOs]](../../README.md#models) [[Voltar à lista de API]](../../README.md#endpoints) [[Voltar ao README]](../../README.md)
