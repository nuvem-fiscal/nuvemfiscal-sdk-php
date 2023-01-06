# NuvemFiscal\ContaApi

Todas as URIs relativas a https://api.nuvemfiscal.com.br, exceto se a operação definir outra URI base.

| Método | Endpoint | Descrição |
| ------------- | ------------- | ------------- |
| [**consultarCotaConta()**](ContaApi.md#consultarCotaConta) | **GET** /conta/cotas/{nome} | Consultar o limite de uso e o consumo de uma cota específica. |
| [**listarCotasConta()**](ContaApi.md#listarCotasConta) | **GET** /conta/cotas | Consultar os limites de uso e consumo de todas as cotas existentes. |


## `consultarCotaConta()`

```php
consultarCotaConta($nome): \NuvemFiscal\Model\ContaCota
```

Consultar o limite de uso e o consumo de uma cota específica.

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


$apiInstance = new NuvemFiscal\Api\ContaApi(
    // Se quiser usar um client http customizado, passe um client que implemente `GuzzleHttp\ClientInterface`.
    // Isso é opcional, `GuzzleHttp\Client` será usado por padrão.
    new GuzzleHttp\Client(),
    $config
);
$nome = 'nome_example'; // string | Nome da cota a ser consultada.

try {
    $result = $apiInstance->consultarCotaConta($nome);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContaApi->consultarCotaConta: ', $e->getMessage(), PHP_EOL;
}
```

### Parâmetros

| Nome | Tipo | Descrição  | Notas |
| ------------- | ------------- | ------------- | ------------- |
| **nome** | **string**| Nome da cota a ser consultada. | |

### Tipo do retorno

[**\NuvemFiscal\Model\ContaCota**](../Model/ContaCota.md)

### Autorização

[jwt](../../README.md#jwt), [oauth2](../../README.md#oauth2)

### Headers HTTP da requisição

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Voltar ao topo]](#) [[Back to API list]](../../README.md#endpoints)
[[Voltar à lista de DTOs]](../../README.md#models)
[[Voltar ao README]](../../README.md)

## `listarCotasConta()`

```php
listarCotasConta(): \NuvemFiscal\Model\ContaCotaListagem
```

Consultar os limites de uso e consumo de todas as cotas existentes.

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


$apiInstance = new NuvemFiscal\Api\ContaApi(
    // Se quiser usar um client http customizado, passe um client que implemente `GuzzleHttp\ClientInterface`.
    // Isso é opcional, `GuzzleHttp\Client` será usado por padrão.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listarCotasConta();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContaApi->listarCotasConta: ', $e->getMessage(), PHP_EOL;
}
```

### Parâmetros

Este endpoint não usa parâmetros.

### Tipo do retorno

[**\NuvemFiscal\Model\ContaCotaListagem**](../Model/ContaCotaListagem.md)

### Autorização

[jwt](../../README.md#jwt), [oauth2](../../README.md#oauth2)

### Headers HTTP da requisição

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Voltar ao topo]](#) [[Back to API list]](../../README.md#endpoints)
[[Voltar à lista de DTOs]](../../README.md#models)
[[Voltar ao README]](../../README.md)
