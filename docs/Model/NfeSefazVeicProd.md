# # NfeSefazVeicProd

## Propriedades

Nome | Tipo | Descrição | Comentários
------------ | ------------- | ------------- | -------------
**tp_op** | **int** | Tipo da Operação (1 - Venda concessionária; 2 - Faturamento direto; 3 - Venda direta; 0 - Outros). |
**chassi** | **string** | Chassi do veículo - VIN (código-identificação-veículo). |
**c_cor** | **string** | Cor do veículo (código de cada montadora). |
**x_cor** | **string** | Descrição da cor. |
**pot** | **string** | Potência máxima do motor do veículo em cavalo vapor (CV). (potência-veículo). |
**cilin** | **string** | Capacidade voluntária do motor expressa em centímetros cúbicos (CC). (cilindradas). |
**peso_l** | **string** | Peso líquido. |
**peso_b** | **string** | Peso bruto. |
**n_serie** | **string** | Serial (série). |
**tp_comb** | **string** | Tipo de combustível-Tabela RENAVAM: 01-Álcool  * 02 - Gasolina  * 03 - Diesel  * 16 - Álcool/Gas  * 17 - Gas./Álcool/GNV  * 18 - Gasolina/Elétrico |
**n_motor** | **string** | Número do motor. |
**cmt** | **string** | CMT-Capacidade Máxima de Tração - em Toneladas 4 casas decimais. |
**dist** | **string** | Distância entre eixos. |
**ano_mod** | **int** | Ano Modelo de Fabricação. |
**ano_fab** | **int** | Ano de Fabricação. |
**tp_pint** | **string** | Tipo de pintura. |
**tp_veic** | **int** | Tipo de veículo (utilizar tabela RENAVAM). |
**esp_veic** | **int** | Espécie de veículo (utilizar tabela RENAVAM). |
**vin** | **string** | Informa-se o veículo tem VIN (chassi) remarcado.  * R-Remarcado  * N-NormalVIN |
**cond_veic** | **int** | Condição do veículo (1 - acabado; 2 - inacabado; 3 - semi-acabado). |
**c_mod** | **string** | Código Marca Modelo (utilizar tabela RENAVAM). |
**c_cor_denatran** | **string** | Código da Cor Segundo as regras de pré-cadastro do DENATRAN: 01-AMARELO  * 02 - AZUL  * 03 - BEGE  * 04 - BRANCA  * 05 - CINZA  * 06 - DOURADA  * 07 - GRENA  * 08 - LARANJA  * 09 - MARROM  * 10 - PRATA  * 11 - PRETA  * 12 - ROSA  * 13 - ROXA  * 14 - VERDE  * 15 - VERMELHA  * 16 - FANTASIA |
**lota** | **int** | Quantidade máxima de permitida de passageiros sentados, inclusive motorista. |
**tp_rest** | **int** | Restrição  * 0 - Não há  * 1 - Alienação Fiduciária  * 2 - Arrendamento Mercantil  * 3 - Reserva de Domínio  * 4 - Penhor de Veículos  * 9 - outras |

[[Voltar à lista de DTOs]](../../README.md#models) [[Voltar à lista de API]](../../README.md#endpoints) [[Voltar ao README]](../../README.md)
