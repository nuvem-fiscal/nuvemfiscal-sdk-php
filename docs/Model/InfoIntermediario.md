# # InfoIntermediario

## Propriedades

Nome | Tipo | Descrição | Comentários
------------ | ------------- | ------------- | -------------
**cnpj** | **string** | Número do CNPJ. | [optional]
**cpf** | **string** | Número do CPF. | [optional]
**nif** | **string** | Número de Identificação Fiscal fornecido por órgão de administração tributária no exterior. | [optional]
**c_nao_nif** | **int** | Motivo para não informação do NIF:  * 0 - Não informado na nota de origem  * 1 - Dispensado do NIF  * 2 - Não exigência do NIF | [optional]
**caepf** | **string** | Número do Cadastro de Atividade Econômica da Pessoa Física (CAEPF). | [optional]
**im** | **string** | Número da inscrição municipal. | [optional]
**ie** | **string** | Número da inscrição estadual.    **Atenção**: Para emissões pelo Sistema Nacional NFS-e, esse campo é ignorado. | [optional]
**x_nome** | **string** | Nome/Nome Empresarial. |
**end** | [**\NuvemFiscal\Model\Endereco**](Endereco.md) |  | [optional]
**fone** | **string** | Número do telefone do prestador:  Preencher com o Código DDD + número do telefone.  Nas operações com exterior é permitido informar o código do país + código da localidade + número do telefone). | [optional]
**email** | **string** | * E-mail | [optional]

[[Voltar à lista de DTOs]](../../README.md#models) [[Voltar à lista de API]](../../README.md#endpoints) [[Voltar ao README]](../../README.md)
