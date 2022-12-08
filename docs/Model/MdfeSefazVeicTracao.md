# # MdfeSefazVeicTracao

## Propriedades

Nome | Tipo | Descrição | Comentários
------------ | ------------- | ------------- | -------------
**c_int** | **string** | Código interno do veículo. | [optional]
**placa** | **string** | Placa do veículo. |
**renavam** | **string** | RENAVAM do veículo. | [optional]
**tara** | **int** | Tara em KG. |
**cap_kg** | **int** | Capacidade em KG. | [optional]
**cap_m3** | **int** | Capacidade em M3. | [optional]
**prop** | [**\NuvemFiscal\Model\MdfeSefazProp**](MdfeSefazProp.md) |  | [optional]
**condutor** | [**\NuvemFiscal\Model\MdfeSefazCondutor[]**](MdfeSefazCondutor.md) | Informações do(s) Condutor(es) do veículo. |
**tp_rod** | **string** | Tipo de Rodado.  Preencher com:           01 - Truck;           02 - Toco;           03 - Cavalo Mecânico;           04 - VAN;           05 - Utilitário;           06 - Outros. |
**tp_car** | **string** | Tipo de Carroceria.  Preencher com:           00 - não aplicável;           01 - Aberta;           02 - Fechada/Baú;           03 - Granelera;           04 - Porta Container;           05 - Sider. |
**uf** | **string** | UF em que veículo está licenciado.  Sigla da UF de licenciamento do veículo. | [optional]

[[Voltar à lista de DTOs]](../../README.md#models) [[Voltar à lista de API]](../../README.md#endpoints) [[Voltar ao README]](../../README.md)
