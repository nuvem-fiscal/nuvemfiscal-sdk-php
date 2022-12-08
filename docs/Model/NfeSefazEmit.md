# # NfeSefazEmit

## Propriedades

Nome | Tipo | Descrição | Comentários
------------ | ------------- | ------------- | -------------
**cnpj** | **string** | Número do CNPJ do emitente.  Obrigatório caso o emitente seja pessoa jurídica. | [optional]
**cpf** | **string** | Número do CPF do emitente.  Obrigatorio caso o emitente seja pessoa física. | [optional]
**x_nome** | **string** | Razão Social ou Nome do emitente.  Caso não seja informado, será utilizado o do cadastro da empresa. | [optional]
**x_fant** | **string** | Nome fantasia.  Caso não seja informado, será utilizado o do cadastro da empresa. | [optional]
**ender_emit** | [**\NuvemFiscal\Model\NfeSefazEnderEmi**](NfeSefazEnderEmi.md) |  | [optional]
**ie** | **string** | Inscrição Estadual do Emitente.  Caso não seja informado, será utilizado o do cadastro da empresa. | [optional]
**iest** | **string** | Inscricao Estadual do Substituto Tributário.  Caso não seja informado, será utilizado o do cadastro da empresa. | [optional]
**im** | **string** | Inscrição Municipal.  Caso não seja informado, será utilizado o do cadastro da empresa. | [optional]
**cnae** | **string** | CNAE Fiscal.  Caso não seja informado, será utilizado o do cadastro da empresa. | [optional]
**crt** | **int** | Código de Regime Tributário.   Este campo será obrigatoriamente preenchido com:  1 – Simples Nacional;  2 – Simples Nacional – excesso de sublimite de receita bruta;  3 – Regime Normal.  Caso não seja informado, será utilizado o do cadastro da empresa. | [optional]

[[Voltar à lista de DTOs]](../../README.md#models) [[Voltar à lista de API]](../../README.md#endpoints) [[Voltar ao README]](../../README.md)
