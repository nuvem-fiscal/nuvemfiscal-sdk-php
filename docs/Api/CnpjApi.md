# NuvemFiscal\CnpjApi

Todas as URIs relativas a https://api.nuvemfiscal.com.br, exceto se a operação definir outra URI base.

| Método | Endpoint | Descrição |
| ------------- | ------------- | ------------- |
| [**consultarCnpj()**](CnpjApi.md#consultarCnpj) | **GET** /cnpj/{Cnpj} | Consultar dados do CNPJ |
| [**listarCnpj()**](CnpjApi.md#listarCnpj) | **GET** /cnpj | Listar estabelecimentos ativos a partir da base de CNPJ |


## `consultarCnpj()`

```php
consultarCnpj($cnpj): \NuvemFiscal\Model\CnpjEmpresa
```

Consultar dados do CNPJ

### Exemplo

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configurar authorização via API key: jwt
$config = NuvemFiscal\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NuvemFiscal\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configurar access token OAuth2 para autorização: oauth2
$config = NuvemFiscal\Configuration::getDefaultConfiguration()->setAccessToken('SEU_ACCESS_TOKEN');


$apiInstance = new NuvemFiscal\Api\CnpjApi(
    // Se quiser usar um client http customizado, passe um client que implemente `GuzzleHttp\ClientInterface`.
    // Isso é opcional, `GuzzleHttp\Client` será usado por padrão.
    new GuzzleHttp\Client(),
    $config
);
$cnpj = 'cnpj_example'; // string | CNPJ sem máscara.

try {
    $result = $apiInstance->consultarCnpj($cnpj);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CnpjApi->consultarCnpj: ', $e->getMessage(), PHP_EOL;
}
```

### Parâmetros

| Nome | Tipo | Descrição  | Notas |
| ------------- | ------------- | ------------- | ------------- |
| **cnpj** | **string**| CNPJ sem máscara. | |

### Tipo do retorno

[**\NuvemFiscal\Model\CnpjEmpresa**](../Model/CnpjEmpresa.md)

### Autorização

[jwt](../../README.md#jwt), [oauth2](../../README.md#oauth2)

### Headers HTTP da requisição

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Voltar ao topo]](#) [[Back to API list]](../../README.md#endpoints)
[[Voltar à lista de DTOs]](../../README.md#models)
[[Voltar ao README]](../../README.md)

## `listarCnpj()`

```php
listarCnpj($cnae_principal, $municipio, $natureza_juridica, $top, $skip): \NuvemFiscal\Model\CnpjListagem
```

Listar estabelecimentos ativos a partir da base de CNPJ

Retorna uma lista de estabelecimentos de acordo com os critérios de busca utilizados.  Somente serão retornados estabelecimentos com situação cadastral \"Ativa\".

### Exemplo

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configurar authorização via API key: jwt
$config = NuvemFiscal\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NuvemFiscal\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configurar access token OAuth2 para autorização: oauth2
$config = NuvemFiscal\Configuration::getDefaultConfiguration()->setAccessToken('SEU_ACCESS_TOKEN');


$apiInstance = new NuvemFiscal\Api\CnpjApi(
    // Se quiser usar um client http customizado, passe um client que implemente `GuzzleHttp\ClientInterface`.
    // Isso é opcional, `GuzzleHttp\Client` será usado por padrão.
    new GuzzleHttp\Client(),
    $config
);
$cnae_principal = 'cnae_principal_example'; // string | Filtro pelo código CNAE da atividade principal do estabelecimento.  Utilize o valor sem máscara.
$municipio = 'municipio_example'; // string | Filtro pelo código IBGE ou TOM (Tabela de Órgãos e Municípios) do município do estabelecimento.  Utilize o valor sem máscara.
$natureza_juridica = 'natureza_juridica_example'; // string | Filtro pela natureza jurídica do estabelecimento   Utilize o valor de quatro dígitos sem máscara.
$top = 56; // int | Limite no número de objetos a serem retornados pela API, entre 1 e 100.  Valor padrão: `10`.
$skip = 56; // int | Quantidade de objetos que serão ignorados antes da lista começar a ser retornada.

try {
    $result = $apiInstance->listarCnpj($cnae_principal, $municipio, $natureza_juridica, $top, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CnpjApi->listarCnpj: ', $e->getMessage(), PHP_EOL;
}
```

### Parâmetros

| Nome | Tipo | Descrição  | Notas |
| ------------- | ------------- | ------------- | ------------- |
| **cnae_principal** | **string**| Filtro pelo código CNAE da atividade principal do estabelecimento.  Utilize o valor sem máscara. | |
| **municipio** | **string**| Filtro pelo código IBGE ou TOM (Tabela de Órgãos e Municípios) do município do estabelecimento.  Utilize o valor sem máscara. | |
| **natureza_juridica** | **string**| Filtro pela natureza jurídica do estabelecimento   Utilize o valor de quatro dígitos sem máscara. | |
| **top** | **int**| Limite no número de objetos a serem retornados pela API, entre 1 e 100.  Valor padrão: &#x60;10&#x60;. | [optional] |
| **skip** | **int**| Quantidade de objetos que serão ignorados antes da lista começar a ser retornada. | [optional] |

### Tipo do retorno

[**\NuvemFiscal\Model\CnpjListagem**](../Model/CnpjListagem.md)

### Autorização

[jwt](../../README.md#jwt), [oauth2](../../README.md#oauth2)

### Headers HTTP da requisição

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Voltar ao topo]](#) [[Back to API list]](../../README.md#endpoints)
[[Voltar à lista de DTOs]](../../README.md#models)
[[Voltar ao README]](../../README.md)
