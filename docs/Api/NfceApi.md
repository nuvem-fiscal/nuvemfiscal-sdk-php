# NuvemFiscal\NfceApi

Todas as URIs relativas a https://api.nuvemfiscal.com.br, exceto se a operação definir outra URI base.

| Método | Endpoint | Descrição |
| ------------- | ------------- | ------------- |
| [**baixarPdfNfce()**](NfceApi.md#baixarPdfNfce) | **GET** /nfce/{id}/pdf | Baixar PDF do DANFCE |
| [**baixarXmlCancelamentoNfce()**](NfceApi.md#baixarXmlCancelamentoNfce) | **GET** /nfce/{id}/cancelamento/xml | Baixar XML do cancelamento |
| [**baixarXmlInutilizacaoNfce()**](NfceApi.md#baixarXmlInutilizacaoNfce) | **GET** /nfce/inutilizacoes/{id}/xml | Baixar XML da inutilização |
| [**baixarXmlNfce()**](NfceApi.md#baixarXmlNfce) | **GET** /nfce/{id}/xml | Baixar XML da NFC-e processada |
| [**cancelarNfce()**](NfceApi.md#cancelarNfce) | **POST** /nfce/{id}/cancelamento | Cancelar uma NFC-e autorizada |
| [**consultarCancelamentoNfce()**](NfceApi.md#consultarCancelamentoNfce) | **GET** /nfce/{id}/cancelamento | Consultar o cancelamento da NFC-e |
| [**consultarInutilizacaoNfce()**](NfceApi.md#consultarInutilizacaoNfce) | **GET** /nfce/inutilizacoes/{id} | Consultar a inutilização de sequência de numeração |
| [**consultarLoteNfce()**](NfceApi.md#consultarLoteNfce) | **GET** /nfce/lotes/{id} | Consultar lote de NFC-e |
| [**consultarNfce()**](NfceApi.md#consultarNfce) | **GET** /nfce/{id} | Consultar NFC-e |
| [**consultarStatusSefazNfce()**](NfceApi.md#consultarStatusSefazNfce) | **GET** /nfce/sefaz/status | Consulta do Status do Serviço na SEFAZ Autorizadora |
| [**emitirLoteNfce()**](NfceApi.md#emitirLoteNfce) | **POST** /nfce/lotes | Emitir lote de NFC-e |
| [**emitirNfce()**](NfceApi.md#emitirNfce) | **POST** /nfce | Emitir NFC-e |
| [**inutilizarNumeracaoNfce()**](NfceApi.md#inutilizarNumeracaoNfce) | **POST** /nfce/inutilizacoes | Inutilizar uma sequência de numeração de NFC-e |
| [**listarLotesNfce()**](NfceApi.md#listarLotesNfce) | **GET** /nfce/lotes | Listar lotes de NFC-e |
| [**listarNfce()**](NfceApi.md#listarNfce) | **GET** /nfce | Listar NFC-e |


## `baixarPdfNfce()`

```php
baixarPdfNfce($id): \SplFileObject
```

Baixar PDF do DANFCE

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


$apiInstance = new NuvemFiscal\Api\NfceApi(
    // Se quiser usar um client http customizado, passe um client que implemente `GuzzleHttp\ClientInterface`.
    // Isso é opcional, `GuzzleHttp\Client` será usado por padrão.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID único da NFC-e gerado pela Nuvem Fiscal.

try {
    $result = $apiInstance->baixarPdfNfce($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NfceApi->baixarPdfNfce: ', $e->getMessage(), PHP_EOL;
}
```

### Parâmetros

| Nome | Tipo | Descrição  | Notas |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID único da NFC-e gerado pela Nuvem Fiscal. | |

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

## `baixarXmlCancelamentoNfce()`

```php
baixarXmlCancelamentoNfce($id): \SplFileObject
```

Baixar XML do cancelamento

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


$apiInstance = new NuvemFiscal\Api\NfceApi(
    // Se quiser usar um client http customizado, passe um client que implemente `GuzzleHttp\ClientInterface`.
    // Isso é opcional, `GuzzleHttp\Client` será usado por padrão.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID único da NFC-e gerado pela Nuvem Fiscal.

try {
    $result = $apiInstance->baixarXmlCancelamentoNfce($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NfceApi->baixarXmlCancelamentoNfce: ', $e->getMessage(), PHP_EOL;
}
```

### Parâmetros

| Nome | Tipo | Descrição  | Notas |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID único da NFC-e gerado pela Nuvem Fiscal. | |

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

## `baixarXmlInutilizacaoNfce()`

```php
baixarXmlInutilizacaoNfce($id): \SplFileObject
```

Baixar XML da inutilização

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


$apiInstance = new NuvemFiscal\Api\NfceApi(
    // Se quiser usar um client http customizado, passe um client que implemente `GuzzleHttp\ClientInterface`.
    // Isso é opcional, `GuzzleHttp\Client` será usado por padrão.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID único do evento gerado pela Nuvem Fiscal.

try {
    $result = $apiInstance->baixarXmlInutilizacaoNfce($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NfceApi->baixarXmlInutilizacaoNfce: ', $e->getMessage(), PHP_EOL;
}
```

### Parâmetros

| Nome | Tipo | Descrição  | Notas |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID único do evento gerado pela Nuvem Fiscal. | |

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

## `baixarXmlNfce()`

```php
baixarXmlNfce($id): \SplFileObject
```

Baixar XML da NFC-e processada

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


$apiInstance = new NuvemFiscal\Api\NfceApi(
    // Se quiser usar um client http customizado, passe um client que implemente `GuzzleHttp\ClientInterface`.
    // Isso é opcional, `GuzzleHttp\Client` será usado por padrão.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID único da NFC-e gerado pela Nuvem Fiscal.

try {
    $result = $apiInstance->baixarXmlNfce($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NfceApi->baixarXmlNfce: ', $e->getMessage(), PHP_EOL;
}
```

### Parâmetros

| Nome | Tipo | Descrição  | Notas |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID único da NFC-e gerado pela Nuvem Fiscal. | |

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

## `cancelarNfce()`

```php
cancelarNfce($id, $body): \NuvemFiscal\Model\DfeCancelamento
```

Cancelar uma NFC-e autorizada

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


$apiInstance = new NuvemFiscal\Api\NfceApi(
    // Se quiser usar um client http customizado, passe um client que implemente `GuzzleHttp\ClientInterface`.
    // Isso é opcional, `GuzzleHttp\Client` será usado por padrão.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID único da NFC-e gerado pela Nuvem Fiscal.
$body = new \NuvemFiscal\Model\NfePedidoCancelamento(); // \NuvemFiscal\Model\NfePedidoCancelamento

try {
    $result = $apiInstance->cancelarNfce($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NfceApi->cancelarNfce: ', $e->getMessage(), PHP_EOL;
}
```

### Parâmetros

| Nome | Tipo | Descrição  | Notas |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID único da NFC-e gerado pela Nuvem Fiscal. | |
| **body** | [**\NuvemFiscal\Model\NfePedidoCancelamento**](../Model/NfePedidoCancelamento.md)|  | |

### Tipo do retorno

[**\NuvemFiscal\Model\DfeCancelamento**](../Model/DfeCancelamento.md)

### Autorização

[jwt](../../README.md#jwt), [oauth2](../../README.md#oauth2)

### Headers HTTP da requisição

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Voltar ao topo]](#) [[Back to API list]](../../README.md#endpoints)
[[Voltar à lista de DTOs]](../../README.md#models)
[[Voltar ao README]](../../README.md)

## `consultarCancelamentoNfce()`

```php
consultarCancelamentoNfce($id): \NuvemFiscal\Model\DfeCancelamento
```

Consultar o cancelamento da NFC-e

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


$apiInstance = new NuvemFiscal\Api\NfceApi(
    // Se quiser usar um client http customizado, passe um client que implemente `GuzzleHttp\ClientInterface`.
    // Isso é opcional, `GuzzleHttp\Client` será usado por padrão.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID único da NFC-e gerado pela Nuvem Fiscal.

try {
    $result = $apiInstance->consultarCancelamentoNfce($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NfceApi->consultarCancelamentoNfce: ', $e->getMessage(), PHP_EOL;
}
```

### Parâmetros

| Nome | Tipo | Descrição  | Notas |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID único da NFC-e gerado pela Nuvem Fiscal. | |

### Tipo do retorno

[**\NuvemFiscal\Model\DfeCancelamento**](../Model/DfeCancelamento.md)

### Autorização

[jwt](../../README.md#jwt), [oauth2](../../README.md#oauth2)

### Headers HTTP da requisição

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Voltar ao topo]](#) [[Back to API list]](../../README.md#endpoints)
[[Voltar à lista de DTOs]](../../README.md#models)
[[Voltar ao README]](../../README.md)

## `consultarInutilizacaoNfce()`

```php
consultarInutilizacaoNfce($id): \NuvemFiscal\Model\DfeInutilizacao
```

Consultar a inutilização de sequência de numeração

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


$apiInstance = new NuvemFiscal\Api\NfceApi(
    // Se quiser usar um client http customizado, passe um client que implemente `GuzzleHttp\ClientInterface`.
    // Isso é opcional, `GuzzleHttp\Client` será usado por padrão.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID único do evento gerado pela Nuvem Fiscal.

try {
    $result = $apiInstance->consultarInutilizacaoNfce($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NfceApi->consultarInutilizacaoNfce: ', $e->getMessage(), PHP_EOL;
}
```

### Parâmetros

| Nome | Tipo | Descrição  | Notas |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID único do evento gerado pela Nuvem Fiscal. | |

### Tipo do retorno

[**\NuvemFiscal\Model\DfeInutilizacao**](../Model/DfeInutilizacao.md)

### Autorização

[jwt](../../README.md#jwt), [oauth2](../../README.md#oauth2)

### Headers HTTP da requisição

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Voltar ao topo]](#) [[Back to API list]](../../README.md#endpoints)
[[Voltar à lista de DTOs]](../../README.md#models)
[[Voltar ao README]](../../README.md)

## `consultarLoteNfce()`

```php
consultarLoteNfce($id): \NuvemFiscal\Model\DfeLote
```

Consultar lote de NFC-e

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


$apiInstance = new NuvemFiscal\Api\NfceApi(
    // Se quiser usar um client http customizado, passe um client que implemente `GuzzleHttp\ClientInterface`.
    // Isso é opcional, `GuzzleHttp\Client` será usado por padrão.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID único do lote gerado pela Nuvem Fiscal.

try {
    $result = $apiInstance->consultarLoteNfce($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NfceApi->consultarLoteNfce: ', $e->getMessage(), PHP_EOL;
}
```

### Parâmetros

| Nome | Tipo | Descrição  | Notas |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID único do lote gerado pela Nuvem Fiscal. | |

### Tipo do retorno

[**\NuvemFiscal\Model\DfeLote**](../Model/DfeLote.md)

### Autorização

[jwt](../../README.md#jwt), [oauth2](../../README.md#oauth2)

### Headers HTTP da requisição

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Voltar ao topo]](#) [[Back to API list]](../../README.md#endpoints)
[[Voltar à lista de DTOs]](../../README.md#models)
[[Voltar ao README]](../../README.md)

## `consultarNfce()`

```php
consultarNfce($id): \NuvemFiscal\Model\Dfe
```

Consultar NFC-e

Consulta os detalhes de uma NFC-e já existente. Forneça o ID único obtido de uma requisição de emissão ou de listagem de notas e a Nuvem Fiscal irá retornar as informações da nota correspondente.

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


$apiInstance = new NuvemFiscal\Api\NfceApi(
    // Se quiser usar um client http customizado, passe um client que implemente `GuzzleHttp\ClientInterface`.
    // Isso é opcional, `GuzzleHttp\Client` será usado por padrão.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID único da NFC-e gerado pela Nuvem Fiscal.

try {
    $result = $apiInstance->consultarNfce($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NfceApi->consultarNfce: ', $e->getMessage(), PHP_EOL;
}
```

### Parâmetros

| Nome | Tipo | Descrição  | Notas |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID único da NFC-e gerado pela Nuvem Fiscal. | |

### Tipo do retorno

[**\NuvemFiscal\Model\Dfe**](../Model/Dfe.md)

### Autorização

[jwt](../../README.md#jwt), [oauth2](../../README.md#oauth2)

### Headers HTTP da requisição

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Voltar ao topo]](#) [[Back to API list]](../../README.md#endpoints)
[[Voltar à lista de DTOs]](../../README.md#models)
[[Voltar ao README]](../../README.md)

## `consultarStatusSefazNfce()`

```php
consultarStatusSefazNfce($cpf_cnpj): \NuvemFiscal\Model\DfeSefazStatus
```

Consulta do Status do Serviço na SEFAZ Autorizadora

Consulta do status do serviço prestado pelo Portal da Secretaria de Fazenda Estadual.    A Nuvem Fiscal mantém a última consulta em cache por 5 minutos, evitando sobrecarregar desnecessariamente os servidores da SEFAZ (conforme orientação do MOC - versão 7.0, item 5.5.3). Dessa forma, você poderá chamar esse endpoint quantas vezes quiser, sem preocupar-se em ter o seu CNPJ bloqueado por consumo indevido (Rejeição 656).

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


$apiInstance = new NuvemFiscal\Api\NfceApi(
    // Se quiser usar um client http customizado, passe um client que implemente `GuzzleHttp\ClientInterface`.
    // Isso é opcional, `GuzzleHttp\Client` será usado por padrão.
    new GuzzleHttp\Client(),
    $config
);
$cpf_cnpj = 'cpf_cnpj_example'; // string | CPF/CNPJ do emitente.  Utilize o valor sem máscara.

try {
    $result = $apiInstance->consultarStatusSefazNfce($cpf_cnpj);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NfceApi->consultarStatusSefazNfce: ', $e->getMessage(), PHP_EOL;
}
```

### Parâmetros

| Nome | Tipo | Descrição  | Notas |
| ------------- | ------------- | ------------- | ------------- |
| **cpf_cnpj** | **string**| CPF/CNPJ do emitente.  Utilize o valor sem máscara. | |

### Tipo do retorno

[**\NuvemFiscal\Model\DfeSefazStatus**](../Model/DfeSefazStatus.md)

### Autorização

[jwt](../../README.md#jwt), [oauth2](../../README.md#oauth2)

### Headers HTTP da requisição

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Voltar ao topo]](#) [[Back to API list]](../../README.md#endpoints)
[[Voltar à lista de DTOs]](../../README.md#models)
[[Voltar ao README]](../../README.md)

## `emitirLoteNfce()`

```php
emitirLoteNfce($body): \NuvemFiscal\Model\DfeLote
```

Emitir lote de NFC-e

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


$apiInstance = new NuvemFiscal\Api\NfceApi(
    // Se quiser usar um client http customizado, passe um client que implemente `GuzzleHttp\ClientInterface`.
    // Isso é opcional, `GuzzleHttp\Client` será usado por padrão.
    new GuzzleHttp\Client(),
    $config
);
$body = new \NuvemFiscal\Model\NfePedidoEmissaoLote(); // \NuvemFiscal\Model\NfePedidoEmissaoLote

try {
    $result = $apiInstance->emitirLoteNfce($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NfceApi->emitirLoteNfce: ', $e->getMessage(), PHP_EOL;
}
```

### Parâmetros

| Nome | Tipo | Descrição  | Notas |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\NuvemFiscal\Model\NfePedidoEmissaoLote**](../Model/NfePedidoEmissaoLote.md)|  | |

### Tipo do retorno

[**\NuvemFiscal\Model\DfeLote**](../Model/DfeLote.md)

### Autorização

[jwt](../../README.md#jwt), [oauth2](../../README.md#oauth2)

### Headers HTTP da requisição

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Voltar ao topo]](#) [[Back to API list]](../../README.md#endpoints)
[[Voltar à lista de DTOs]](../../README.md#models)
[[Voltar ao README]](../../README.md)

## `emitirNfce()`

```php
emitirNfce($body): \NuvemFiscal\Model\Dfe
```

Emitir NFC-e

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


$apiInstance = new NuvemFiscal\Api\NfceApi(
    // Se quiser usar um client http customizado, passe um client que implemente `GuzzleHttp\ClientInterface`.
    // Isso é opcional, `GuzzleHttp\Client` será usado por padrão.
    new GuzzleHttp\Client(),
    $config
);
$body = new \NuvemFiscal\Model\NfePedidoEmissao(); // \NuvemFiscal\Model\NfePedidoEmissao

try {
    $result = $apiInstance->emitirNfce($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NfceApi->emitirNfce: ', $e->getMessage(), PHP_EOL;
}
```

### Parâmetros

| Nome | Tipo | Descrição  | Notas |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\NuvemFiscal\Model\NfePedidoEmissao**](../Model/NfePedidoEmissao.md)|  | |

### Tipo do retorno

[**\NuvemFiscal\Model\Dfe**](../Model/Dfe.md)

### Autorização

[jwt](../../README.md#jwt), [oauth2](../../README.md#oauth2)

### Headers HTTP da requisição

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Voltar ao topo]](#) [[Back to API list]](../../README.md#endpoints)
[[Voltar à lista de DTOs]](../../README.md#models)
[[Voltar ao README]](../../README.md)

## `inutilizarNumeracaoNfce()`

```php
inutilizarNumeracaoNfce($body): \NuvemFiscal\Model\DfeInutilizacao
```

Inutilizar uma sequência de numeração de NFC-e

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


$apiInstance = new NuvemFiscal\Api\NfceApi(
    // Se quiser usar um client http customizado, passe um client que implemente `GuzzleHttp\ClientInterface`.
    // Isso é opcional, `GuzzleHttp\Client` será usado por padrão.
    new GuzzleHttp\Client(),
    $config
);
$body = new \NuvemFiscal\Model\DfePedidoInutilizacao(); // \NuvemFiscal\Model\DfePedidoInutilizacao

try {
    $result = $apiInstance->inutilizarNumeracaoNfce($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NfceApi->inutilizarNumeracaoNfce: ', $e->getMessage(), PHP_EOL;
}
```

### Parâmetros

| Nome | Tipo | Descrição  | Notas |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\NuvemFiscal\Model\DfePedidoInutilizacao**](../Model/DfePedidoInutilizacao.md)|  | |

### Tipo do retorno

[**\NuvemFiscal\Model\DfeInutilizacao**](../Model/DfeInutilizacao.md)

### Autorização

[jwt](../../README.md#jwt), [oauth2](../../README.md#oauth2)

### Headers HTTP da requisição

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Voltar ao topo]](#) [[Back to API list]](../../README.md#endpoints)
[[Voltar à lista de DTOs]](../../README.md#models)
[[Voltar ao README]](../../README.md)

## `listarLotesNfce()`

```php
listarLotesNfce($cpf_cnpj, $ambiente, $top, $skip, $inlinecount, $referencia): \NuvemFiscal\Model\DfeLoteListagem
```

Listar lotes de NFC-e

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


$apiInstance = new NuvemFiscal\Api\NfceApi(
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
    $result = $apiInstance->listarLotesNfce($cpf_cnpj, $ambiente, $top, $skip, $inlinecount, $referencia);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NfceApi->listarLotesNfce: ', $e->getMessage(), PHP_EOL;
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

[**\NuvemFiscal\Model\DfeLoteListagem**](../Model/DfeLoteListagem.md)

### Autorização

[jwt](../../README.md#jwt), [oauth2](../../README.md#oauth2)

### Headers HTTP da requisição

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Voltar ao topo]](#) [[Back to API list]](../../README.md#endpoints)
[[Voltar à lista de DTOs]](../../README.md#models)
[[Voltar ao README]](../../README.md)

## `listarNfce()`

```php
listarNfce($cpf_cnpj, $ambiente, $top, $skip, $inlinecount, $referencia, $chave): \NuvemFiscal\Model\DfeListagem
```

Listar NFC-e

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


$apiInstance = new NuvemFiscal\Api\NfceApi(
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
    $result = $apiInstance->listarNfce($cpf_cnpj, $ambiente, $top, $skip, $inlinecount, $referencia, $chave);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NfceApi->listarNfce: ', $e->getMessage(), PHP_EOL;
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

[**\NuvemFiscal\Model\DfeListagem**](../Model/DfeListagem.md)

### Autorização

[jwt](../../README.md#jwt), [oauth2](../../README.md#oauth2)

### Headers HTTP da requisição

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Voltar ao topo]](#) [[Back to API list]](../../README.md#endpoints)
[[Voltar à lista de DTOs]](../../README.md#models)
[[Voltar ao README]](../../README.md)
