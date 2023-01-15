# NuvemFiscal\NfseApi

Todas as URIs relativas a https://api.nuvemfiscal.com.br, exceto se a operação definir outra URI base.

| Método | Endpoint | Descrição |
| ------------- | ------------- | ------------- |
| [**baixarPdfNfse()**](NfseApi.md#baixarPdfNfse) | **GET** /nfse/{id}/pdf | Baixar PDF do DANFSE |
| [**baixarXmlNfse()**](NfseApi.md#baixarXmlNfse) | **GET** /nfse/{id}/xml | Baixar XML da NFS-e processada |
| [**cancelarNfse()**](NfseApi.md#cancelarNfse) | **POST** /nfse/{id}/cancelamento | Cancelar uma NFS-e autorizada |
| [**consultarCancelamentoNfse()**](NfseApi.md#consultarCancelamentoNfse) | **GET** /nfse/{id}/cancelamento | Consultar o cancelamento da NFS-e |
| [**consultarLoteNfse()**](NfseApi.md#consultarLoteNfse) | **GET** /nfse/lotes/{id} | Consultar lote de NFS-e |
| [**consultarNfse()**](NfseApi.md#consultarNfse) | **GET** /nfse/{id} | Consultar NFS-e |
| [**emitirLoteNfse()**](NfseApi.md#emitirLoteNfse) | **POST** /nfse/lotes | Emitir lote de NFS-e |
| [**emitirLoteNfseDps()**](NfseApi.md#emitirLoteNfseDps) | **POST** /nfse/dps/lotes | Emitir lote de NFS-e |
| [**emitirNfse()**](NfseApi.md#emitirNfse) | **POST** /nfse | Emitir NFS-e |
| [**emitirNfseDps()**](NfseApi.md#emitirNfseDps) | **POST** /nfse/dps | Emitir NFS-e |
| [**listarLotesNfse()**](NfseApi.md#listarLotesNfse) | **GET** /nfse/lotes | Listar lotes de NFS-e |
| [**listarNfse()**](NfseApi.md#listarNfse) | **GET** /nfse | Listar NFS-e |


## `baixarPdfNfse()`

```php
baixarPdfNfse($id): \SplFileObject
```

Baixar PDF do DANFSE

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


$apiInstance = new NuvemFiscal\Api\NfseApi(
    // Se quiser usar um client http customizado, passe um client que implemente `GuzzleHttp\ClientInterface`.
    // Isso é opcional, `GuzzleHttp\Client` será usado por padrão.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID único da NFS-e gerado pela Nuvem Fiscal.

try {
    $result = $apiInstance->baixarPdfNfse($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NfseApi->baixarPdfNfse: ', $e->getMessage(), PHP_EOL;
}
```

### Parâmetros

| Nome | Tipo | Descrição  | Notas |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID único da NFS-e gerado pela Nuvem Fiscal. | |

### Tipo do retorno

**\SplFileObject**

### Autorização

[jwt](../../README.md#jwt), [oauth2](../../README.md#oauth2)

### Headers HTTP da requisição

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Voltar ao topo]](#) [[Back to API list]](../../README.md#endpoints)
[[Voltar à lista de DTOs]](../../README.md#models)
[[Voltar ao README]](../../README.md)

## `baixarXmlNfse()`

```php
baixarXmlNfse($id): \SplFileObject
```

Baixar XML da NFS-e processada

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


$apiInstance = new NuvemFiscal\Api\NfseApi(
    // Se quiser usar um client http customizado, passe um client que implemente `GuzzleHttp\ClientInterface`.
    // Isso é opcional, `GuzzleHttp\Client` será usado por padrão.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID único da NFS-e gerado pela Nuvem Fiscal.

try {
    $result = $apiInstance->baixarXmlNfse($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NfseApi->baixarXmlNfse: ', $e->getMessage(), PHP_EOL;
}
```

### Parâmetros

| Nome | Tipo | Descrição  | Notas |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID único da NFS-e gerado pela Nuvem Fiscal. | |

### Tipo do retorno

**\SplFileObject**

### Autorização

[jwt](../../README.md#jwt), [oauth2](../../README.md#oauth2)

### Headers HTTP da requisição

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Voltar ao topo]](#) [[Back to API list]](../../README.md#endpoints)
[[Voltar à lista de DTOs]](../../README.md#models)
[[Voltar ao README]](../../README.md)

## `cancelarNfse()`

```php
cancelarNfse($id, $body): \NuvemFiscal\Model\NfseCancelamento
```

Cancelar uma NFS-e autorizada

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


$apiInstance = new NuvemFiscal\Api\NfseApi(
    // Se quiser usar um client http customizado, passe um client que implemente `GuzzleHttp\ClientInterface`.
    // Isso é opcional, `GuzzleHttp\Client` será usado por padrão.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID único da NFS-e gerado pela Nuvem Fiscal.
$body = new \NuvemFiscal\Model\NfsePedidoCancelamento(); // \NuvemFiscal\Model\NfsePedidoCancelamento

try {
    $result = $apiInstance->cancelarNfse($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NfseApi->cancelarNfse: ', $e->getMessage(), PHP_EOL;
}
```

### Parâmetros

| Nome | Tipo | Descrição  | Notas |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID único da NFS-e gerado pela Nuvem Fiscal. | |
| **body** | [**\NuvemFiscal\Model\NfsePedidoCancelamento**](../Model/NfsePedidoCancelamento.md)|  | [optional] |

### Tipo do retorno

[**\NuvemFiscal\Model\NfseCancelamento**](../Model/NfseCancelamento.md)

### Autorização

[jwt](../../README.md#jwt), [oauth2](../../README.md#oauth2)

### Headers HTTP da requisição

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Voltar ao topo]](#) [[Back to API list]](../../README.md#endpoints)
[[Voltar à lista de DTOs]](../../README.md#models)
[[Voltar ao README]](../../README.md)

## `consultarCancelamentoNfse()`

```php
consultarCancelamentoNfse($id): \NuvemFiscal\Model\NfseCancelamento
```

Consultar o cancelamento da NFS-e

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


$apiInstance = new NuvemFiscal\Api\NfseApi(
    // Se quiser usar um client http customizado, passe um client que implemente `GuzzleHttp\ClientInterface`.
    // Isso é opcional, `GuzzleHttp\Client` será usado por padrão.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID único da NFS-e gerado pela Nuvem Fiscal.

try {
    $result = $apiInstance->consultarCancelamentoNfse($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NfseApi->consultarCancelamentoNfse: ', $e->getMessage(), PHP_EOL;
}
```

### Parâmetros

| Nome | Tipo | Descrição  | Notas |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID único da NFS-e gerado pela Nuvem Fiscal. | |

### Tipo do retorno

[**\NuvemFiscal\Model\NfseCancelamento**](../Model/NfseCancelamento.md)

### Autorização

[jwt](../../README.md#jwt), [oauth2](../../README.md#oauth2)

### Headers HTTP da requisição

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Voltar ao topo]](#) [[Back to API list]](../../README.md#endpoints)
[[Voltar à lista de DTOs]](../../README.md#models)
[[Voltar ao README]](../../README.md)

## `consultarLoteNfse()`

```php
consultarLoteNfse($id): \NuvemFiscal\Model\RpsLote
```

Consultar lote de NFS-e

Consulta os detalhes de um lote já existente. Forneça o ID único obtido de uma requisição de emissão ou de listagem de lotes e a Nuvem Fiscal irá retornar as informações do lote correspondente.

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


$apiInstance = new NuvemFiscal\Api\NfseApi(
    // Se quiser usar um client http customizado, passe um client que implemente `GuzzleHttp\ClientInterface`.
    // Isso é opcional, `GuzzleHttp\Client` será usado por padrão.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID único do lote gerado pela Nuvem Fiscal.

try {
    $result = $apiInstance->consultarLoteNfse($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NfseApi->consultarLoteNfse: ', $e->getMessage(), PHP_EOL;
}
```

### Parâmetros

| Nome | Tipo | Descrição  | Notas |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID único do lote gerado pela Nuvem Fiscal. | |

### Tipo do retorno

[**\NuvemFiscal\Model\RpsLote**](../Model/RpsLote.md)

### Autorização

[jwt](../../README.md#jwt), [oauth2](../../README.md#oauth2)

### Headers HTTP da requisição

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Voltar ao topo]](#) [[Back to API list]](../../README.md#endpoints)
[[Voltar à lista de DTOs]](../../README.md#models)
[[Voltar ao README]](../../README.md)

## `consultarNfse()`

```php
consultarNfse($id): \NuvemFiscal\Model\Nfse
```

Consultar NFS-e

Consulta os detalhes de uma NFS-e já existente. Forneça o ID único obtido de uma requisição de criação ou de listagem de notas e a Nuvem Fiscal irá retornar as informações da nota correspondente.

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


$apiInstance = new NuvemFiscal\Api\NfseApi(
    // Se quiser usar um client http customizado, passe um client que implemente `GuzzleHttp\ClientInterface`.
    // Isso é opcional, `GuzzleHttp\Client` será usado por padrão.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID único da NFS-e gerado pela Nuvem Fiscal.

try {
    $result = $apiInstance->consultarNfse($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NfseApi->consultarNfse: ', $e->getMessage(), PHP_EOL;
}
```

### Parâmetros

| Nome | Tipo | Descrição  | Notas |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID único da NFS-e gerado pela Nuvem Fiscal. | |

### Tipo do retorno

[**\NuvemFiscal\Model\Nfse**](../Model/Nfse.md)

### Autorização

[jwt](../../README.md#jwt), [oauth2](../../README.md#oauth2)

### Headers HTTP da requisição

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Voltar ao topo]](#) [[Back to API list]](../../README.md#endpoints)
[[Voltar à lista de DTOs]](../../README.md#models)
[[Voltar ao README]](../../README.md)

## `emitirLoteNfse()`

```php
emitirLoteNfse($body): \NuvemFiscal\Model\RpsLote
```

Emitir lote de NFS-e

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


$apiInstance = new NuvemFiscal\Api\NfseApi(
    // Se quiser usar um client http customizado, passe um client que implemente `GuzzleHttp\ClientInterface`.
    // Isso é opcional, `GuzzleHttp\Client` será usado por padrão.
    new GuzzleHttp\Client(),
    $config
);
$body = new \NuvemFiscal\Model\RpsPedidoEmissaoLote(); // \NuvemFiscal\Model\RpsPedidoEmissaoLote

try {
    $result = $apiInstance->emitirLoteNfse($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NfseApi->emitirLoteNfse: ', $e->getMessage(), PHP_EOL;
}
```

### Parâmetros

| Nome | Tipo | Descrição  | Notas |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\NuvemFiscal\Model\RpsPedidoEmissaoLote**](../Model/RpsPedidoEmissaoLote.md)|  | |

### Tipo do retorno

[**\NuvemFiscal\Model\RpsLote**](../Model/RpsLote.md)

### Autorização

[jwt](../../README.md#jwt), [oauth2](../../README.md#oauth2)

### Headers HTTP da requisição

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Voltar ao topo]](#) [[Back to API list]](../../README.md#endpoints)
[[Voltar à lista de DTOs]](../../README.md#models)
[[Voltar ao README]](../../README.md)

## `emitirLoteNfseDps()`

```php
emitirLoteNfseDps($body): \NuvemFiscal\Model\RpsLote
```

Emitir lote de NFS-e

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


$apiInstance = new NuvemFiscal\Api\NfseApi(
    // Se quiser usar um client http customizado, passe um client que implemente `GuzzleHttp\ClientInterface`.
    // Isso é opcional, `GuzzleHttp\Client` será usado por padrão.
    new GuzzleHttp\Client(),
    $config
);
$body = new \NuvemFiscal\Model\NfseLoteDpsPedidoEmissao(); // \NuvemFiscal\Model\NfseLoteDpsPedidoEmissao

try {
    $result = $apiInstance->emitirLoteNfseDps($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NfseApi->emitirLoteNfseDps: ', $e->getMessage(), PHP_EOL;
}
```

### Parâmetros

| Nome | Tipo | Descrição  | Notas |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\NuvemFiscal\Model\NfseLoteDpsPedidoEmissao**](../Model/NfseLoteDpsPedidoEmissao.md)|  | |

### Tipo do retorno

[**\NuvemFiscal\Model\RpsLote**](../Model/RpsLote.md)

### Autorização

[jwt](../../README.md#jwt), [oauth2](../../README.md#oauth2)

### Headers HTTP da requisição

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Voltar ao topo]](#) [[Back to API list]](../../README.md#endpoints)
[[Voltar à lista de DTOs]](../../README.md#models)
[[Voltar ao README]](../../README.md)

## `emitirNfse()`

```php
emitirNfse($body): \NuvemFiscal\Model\Nfse
```

Emitir NFS-e

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


$apiInstance = new NuvemFiscal\Api\NfseApi(
    // Se quiser usar um client http customizado, passe um client que implemente `GuzzleHttp\ClientInterface`.
    // Isso é opcional, `GuzzleHttp\Client` será usado por padrão.
    new GuzzleHttp\Client(),
    $config
);
$body = new \NuvemFiscal\Model\NfsePedidoEmissao(); // \NuvemFiscal\Model\NfsePedidoEmissao

try {
    $result = $apiInstance->emitirNfse($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NfseApi->emitirNfse: ', $e->getMessage(), PHP_EOL;
}
```

### Parâmetros

| Nome | Tipo | Descrição  | Notas |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\NuvemFiscal\Model\NfsePedidoEmissao**](../Model/NfsePedidoEmissao.md)|  | |

### Tipo do retorno

[**\NuvemFiscal\Model\Nfse**](../Model/Nfse.md)

### Autorização

[jwt](../../README.md#jwt), [oauth2](../../README.md#oauth2)

### Headers HTTP da requisição

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Voltar ao topo]](#) [[Back to API list]](../../README.md#endpoints)
[[Voltar à lista de DTOs]](../../README.md#models)
[[Voltar ao README]](../../README.md)

## `emitirNfseDps()`

```php
emitirNfseDps($body): \NuvemFiscal\Model\Nfse
```

Emitir NFS-e

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


$apiInstance = new NuvemFiscal\Api\NfseApi(
    // Se quiser usar um client http customizado, passe um client que implemente `GuzzleHttp\ClientInterface`.
    // Isso é opcional, `GuzzleHttp\Client` será usado por padrão.
    new GuzzleHttp\Client(),
    $config
);
$body = new \NuvemFiscal\Model\NfseDpsPedidoEmissao(); // \NuvemFiscal\Model\NfseDpsPedidoEmissao

try {
    $result = $apiInstance->emitirNfseDps($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NfseApi->emitirNfseDps: ', $e->getMessage(), PHP_EOL;
}
```

### Parâmetros

| Nome | Tipo | Descrição  | Notas |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\NuvemFiscal\Model\NfseDpsPedidoEmissao**](../Model/NfseDpsPedidoEmissao.md)|  | |

### Tipo do retorno

[**\NuvemFiscal\Model\Nfse**](../Model/Nfse.md)

### Autorização

[jwt](../../README.md#jwt), [oauth2](../../README.md#oauth2)

### Headers HTTP da requisição

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Voltar ao topo]](#) [[Back to API list]](../../README.md#endpoints)
[[Voltar à lista de DTOs]](../../README.md#models)
[[Voltar ao README]](../../README.md)

## `listarLotesNfse()`

```php
listarLotesNfse($cpf_cnpj, $ambiente, $top, $skip, $inlinecount, $referencia): \NuvemFiscal\Model\RpsLoteListagem
```

Listar lotes de NFS-e

Retorna a lista dos lotes de acordo com os critérios de busca utilizados. Os lotes são retornados ordenados pela data da criação, com os mais recentes aparecendo primeiro.

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


$apiInstance = new NuvemFiscal\Api\NfseApi(
    // Se quiser usar um client http customizado, passe um client que implemente `GuzzleHttp\ClientInterface`.
    // Isso é opcional, `GuzzleHttp\Client` será usado por padrão.
    new GuzzleHttp\Client(),
    $config
);
$cpf_cnpj = 'cpf_cnpj_example'; // string | Filtrar pelo CPF ou CNPJ do emitente.  Utilize o valor sem máscara.
$ambiente = 'ambiente_example'; // string | Identificação do Ambiente.    Valores aceitos: homologacao, producao
$top = 10; // int | Limite no número de objetos a serem retornados pela API, entre 1 e 100.
$skip = 0; // int | Quantidade de objetos que serão ignorados antes da lista começar a ser retornada.
$inlinecount = false; // bool | Inclui no JSON de resposta, na propriedade `@count`, o número total de registros que o filtro retornaria, independente dos filtros de paginação.
$referencia = 'referencia_example'; // string

try {
    $result = $apiInstance->listarLotesNfse($cpf_cnpj, $ambiente, $top, $skip, $inlinecount, $referencia);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NfseApi->listarLotesNfse: ', $e->getMessage(), PHP_EOL;
}
```

### Parâmetros

| Nome | Tipo | Descrição  | Notas |
| ------------- | ------------- | ------------- | ------------- |
| **cpf_cnpj** | **string**| Filtrar pelo CPF ou CNPJ do emitente.  Utilize o valor sem máscara. | |
| **ambiente** | **string**| Identificação do Ambiente.    Valores aceitos: homologacao, producao | |
| **top** | **int**| Limite no número de objetos a serem retornados pela API, entre 1 e 100. | [optional] [default to 10] |
| **skip** | **int**| Quantidade de objetos que serão ignorados antes da lista começar a ser retornada. | [optional] [default to 0] |
| **inlinecount** | **bool**| Inclui no JSON de resposta, na propriedade &#x60;@count&#x60;, o número total de registros que o filtro retornaria, independente dos filtros de paginação. | [optional] [default to false] |
| **referencia** | **string**|  | [optional] |

### Tipo do retorno

[**\NuvemFiscal\Model\RpsLoteListagem**](../Model/RpsLoteListagem.md)

### Autorização

[jwt](../../README.md#jwt), [oauth2](../../README.md#oauth2)

### Headers HTTP da requisição

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Voltar ao topo]](#) [[Back to API list]](../../README.md#endpoints)
[[Voltar à lista de DTOs]](../../README.md#models)
[[Voltar ao README]](../../README.md)

## `listarNfse()`

```php
listarNfse($cpf_cnpj, $ambiente, $top, $skip, $inlinecount, $referencia, $chave): \NuvemFiscal\Model\NfseListagem
```

Listar NFS-e

Retorna a lista de notas de acordo com os critérios de busca utilizados. As notas são retornadas ordenadas pela data da criação, com as mais recentes aparecendo primeiro.

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


$apiInstance = new NuvemFiscal\Api\NfseApi(
    // Se quiser usar um client http customizado, passe um client que implemente `GuzzleHttp\ClientInterface`.
    // Isso é opcional, `GuzzleHttp\Client` será usado por padrão.
    new GuzzleHttp\Client(),
    $config
);
$cpf_cnpj = 'cpf_cnpj_example'; // string | Filtrar pelo CPF ou CNPJ do emitente.    Utilize o valor sem máscara.
$ambiente = 'ambiente_example'; // string | Identificação do Ambiente.    Valores aceitos: homologacao, producao
$top = 10; // int | Limite no número de objetos a serem retornados pela API, entre 1 e 100.
$skip = 0; // int | Quantidade de objetos que serão ignorados antes da lista começar a ser retornada.
$inlinecount = false; // bool | Inclui no JSON de resposta, na propriedade `@count`, o número total de registros que o filtro retornaria, independente dos filtros de paginação.
$referencia = 'referencia_example'; // string
$chave = 'chave_example'; // string | Chave de acesso do DF-e.

try {
    $result = $apiInstance->listarNfse($cpf_cnpj, $ambiente, $top, $skip, $inlinecount, $referencia, $chave);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NfseApi->listarNfse: ', $e->getMessage(), PHP_EOL;
}
```

### Parâmetros

| Nome | Tipo | Descrição  | Notas |
| ------------- | ------------- | ------------- | ------------- |
| **cpf_cnpj** | **string**| Filtrar pelo CPF ou CNPJ do emitente.    Utilize o valor sem máscara. | |
| **ambiente** | **string**| Identificação do Ambiente.    Valores aceitos: homologacao, producao | |
| **top** | **int**| Limite no número de objetos a serem retornados pela API, entre 1 e 100. | [optional] [default to 10] |
| **skip** | **int**| Quantidade de objetos que serão ignorados antes da lista começar a ser retornada. | [optional] [default to 0] |
| **inlinecount** | **bool**| Inclui no JSON de resposta, na propriedade &#x60;@count&#x60;, o número total de registros que o filtro retornaria, independente dos filtros de paginação. | [optional] [default to false] |
| **referencia** | **string**|  | [optional] |
| **chave** | **string**| Chave de acesso do DF-e. | [optional] |

### Tipo do retorno

[**\NuvemFiscal\Model\NfseListagem**](../Model/NfseListagem.md)

### Autorização

[jwt](../../README.md#jwt), [oauth2](../../README.md#oauth2)

### Headers HTTP da requisição

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Voltar ao topo]](#) [[Back to API list]](../../README.md#endpoints)
[[Voltar à lista de DTOs]](../../README.md#models)
[[Voltar ao README]](../../README.md)
