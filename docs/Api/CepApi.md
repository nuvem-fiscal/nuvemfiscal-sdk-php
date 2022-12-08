# NuvemFiscal\CepApi

Todas as URIs relativas a https://api.nuvemfiscal.com.br, exceto se a operação definir outra URI base.

| Método | Endpoint | Descrição |
| ------------- | ------------- | ------------- |
| [**consultarCep()**](CepApi.md#consultarCep) | **GET** /cep/{Cep} | Consultar endereço através do CEP |


## `consultarCep()`

```php
consultarCep($cep): \NuvemFiscal\Model\CepEndereco
```

Consultar endereço através do CEP

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


$apiInstance = new NuvemFiscal\Api\CepApi(
    // Se quiser usar um client http customizado, passe um client que implemente `GuzzleHttp\ClientInterface`.
    // Isso é opcional, `GuzzleHttp\Client` será usado por padrão.
    new GuzzleHttp\Client(),
    $config
);
$cep = 'cep_example'; // string | CEP sem máscara.

try {
    $result = $apiInstance->consultarCep($cep);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CepApi->consultarCep: ', $e->getMessage(), PHP_EOL;
}
```

### Parâmetros

| Nome | Tipo | Descrição  | Notas |
| ------------- | ------------- | ------------- | ------------- |
| **cep** | **string**| CEP sem máscara. | |

### Tipo do retorno

[**\NuvemFiscal\Model\CepEndereco**](../Model/CepEndereco.md)

### Autorização

[jwt](../../README.md#jwt), [oauth2](../../README.md#oauth2)

### Headers HTTP da requisição

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Voltar ao topo]](#) [[Back to API list]](../../README.md#endpoints)
[[Voltar à lista de DTOs]](../../README.md#models)
[[Voltar ao README]](../../README.md)
