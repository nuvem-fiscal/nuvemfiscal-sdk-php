# # MdfeSefazAereo

## Propriedades

Nome | Tipo | Descrição | Comentários
------------ | ------------- | ------------- | -------------
**nac** | **string** | Marca da Nacionalidade da aeronave. |
**matr** | **string** | Marca de Matrícula da aeronave. |
**n_voo** | **string** | Número do Voo.  Formato &#x3D; AB1234, sendo AB a designação da empresa e 1234 o número do voo. Quando não for possível incluir as marcas de nacionalidade e matrícula sem hífen. |
**c_aer_emb** | **string** | Aeródromo de Embarque.  O código de três letras IATA do aeroporto de partida deverá ser incluído como primeira anotação. Quando não for possível, utilizar a sigla OACI. |
**c_aer_des** | **string** | Aeródromo de Destino.  O código de três letras IATA do aeroporto de destino deverá ser incluído como primeira anotação. Quando não for possível, utilizar a sigla OACI. |
**d_voo** | **\DateTime** | Data do Voo.  Formato AAAA-MM-DD. |

[[Voltar à lista de DTOs]](../../README.md#models) [[Voltar à lista de API]](../../README.md#endpoints) [[Voltar ao README]](../../README.md)
