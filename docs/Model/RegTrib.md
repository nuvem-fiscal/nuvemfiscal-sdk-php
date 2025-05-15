# # RegTrib

## Propriedades

Nome | Tipo | Descrição | Comentários
------------ | ------------- | ------------- | -------------
**reg_esp_trib** | **int** | Regime Especial de Tributação da Prefeitura.    Campo opcional utilizado no momento da emissão da NFS-e para informar  diretamente o código de regime especial de tributação esperado pela  prefeitura.    **Comportamento:**  - Ao preencher este campo, o valor será inserido diretamente no XML    da NFS-e, sem qualquer conversão pela Nuvem Fiscal.  - Esse campo sobrescreve o valor configurado previamente nas    configurações de NFS-e da empresa.  - É especialmente útil quando a prefeitura utiliza códigos próprios que    não existem no padrão nacional (como valores diferentes dos listados    de 0 a 6).    **Cenários de uso:**  - Quando a prefeitura exige um código que não pode ser representado    pelos valores do padrão nacional.  - Quando houver necessidade de enviar o código exato esperado pela    prefeitura, sem depender da lógica de conversão automática da Nuvem Fiscal.    **Atenção**: Para emissões pelo Sistema Nacional NFS-e, esse campo é ignorado. | [optional]

[[Voltar à lista de DTOs]](../../README.md#models) [[Voltar à lista de API]](../../README.md#endpoints) [[Voltar ao README]](../../README.md)
