# # DistribuicaoNfePedidoManifestacao

## Propriedades

Nome | Tipo | Descrição | Comentários
------------ | ------------- | ------------- | -------------
**cpf_cnpj** | **string** | CPF ou CNPJ do autor do evento.    *Utilize o valor sem máscara*. |
**ambiente** | **string** | Identificação do Ambiente. |
**chave_acesso** | **string** | Chave de Acesso da NF-e. |
**tipo_evento** | **string** | Tipo do evento de manifestação do destinatário.    Valores disponíveis:  * &#x60;210200&#x60; - Confirmação da operação;  * &#x60;210210&#x60; - Ciência da operação;  * &#x60;210220&#x60; - Desconhecimento da operação;  * &#x60;210240&#x60; - Operação não realizada. |
**justificativa** | **string** | Justificativa para o desconhecimento ou não-realização da operação.    **Nota**: Campo obrigatório para o evento &#x60;210240&#x60; (operação não realizada). | [optional]

[[Voltar à lista de DTOs]](../../README.md#models) [[Voltar à lista de API]](../../README.md#endpoints) [[Voltar ao README]](../../README.md)
