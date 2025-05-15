# # EmpresaConfigNfseRegTrib

## Propriedades

Nome | Tipo | Descrição | Comentários
------------ | ------------- | ------------- | -------------
**op_simp_nac** | **int** | Situação perante o Simples Nacional:  * 1 - Não Optante;  * 2 - Optante - Microempreendedor Individual (MEI);  * 3 - Optante - Microempresa ou Empresa de Pequeno Porte (ME/EPP). | [optional]
**reg_ap_trib_sn** | **int** | Opção para que o contribuinte optante pelo Simples Nacional ME/EPP (opSimpNac &#x3D; 3) possa indicar, ao emitir o documento fiscal, em qual regime de apuração os tributos federais e municipal estão inseridos, caso tenha ultrapassado algum sublimite ou limite definido para o Simples Nacional.  * 1 – Regime de apuração dos tributos federais e municipal pelo SN;  * 2 – Regime de apuração dos tributos federais pelo SN e ISSQN  por fora do SN conforme respectiva legislação municipal do tributo;  * 3 – Regime de apuração dos tributos federais e municipal por fora do SN conforme respectivas legilações federal e municipal de cada tributo. | [optional]
**reg_esp_trib** | **int** | Regime Especial de Tributação (Padrão Nacional):  * 0 - Nenhum;  * 1 - Ato Cooperado (Cooperativa);  * 2 - Estimativa;  * 3 - Microempresa Municipal;  * 4 - Notário ou Registrador;  * 5 - Profissional Autônomo;  * 6 - Sociedade de Profissionais.    **Comportamento:**   - Quando o envio for feito para o Ambiente Nacional, o valor é utilizado     exatamente como se apresenta, sem qualquer transformação ou mapeamento.   - Quando o envio for feito diretamente para a prefeitura, o valor será     convertido internamente pela Nuvem Fiscal para o código correspondente     esperado pela prefeitura, **se essa conversão for possível**.     **Observação:** Em algumas prefeituras, existem códigos específicos que não têm   correspondência direta no padrão nacional. Para lidar com esses casos, utilize   o campo &#x60;prest.regTrib.regEspTrib&#x60; diretamente no endpoint de emissão de NFS-e. | [optional]

[[Voltar à lista de DTOs]](../../README.md#models) [[Voltar à lista de API]](../../README.md#endpoints) [[Voltar ao README]](../../README.md)
