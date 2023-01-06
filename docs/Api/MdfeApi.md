# NuvemFiscal\MdfeApi

Todas as URIs relativas a https://api.nuvemfiscal.com.br, exceto se a operação definir outra URI base.

| Método | Endpoint | Descrição |
| ------------- | ------------- | ------------- |
| [**baixarXmlCancelamentoMdfe()**](MdfeApi.md#baixarXmlCancelamentoMdfe) | **GET** /mdfe/{id}/cancelamento/xml | Baixar XML do cancelamento |
| [**baixarXmlEncerramentoMdfe()**](MdfeApi.md#baixarXmlEncerramentoMdfe) | **GET** /mdfe/{id}/encerramento/xml | Baixar XML do encerramento |
| [**baixarXmlEventoMdfe()**](MdfeApi.md#baixarXmlEventoMdfe) | **GET** /mdfe/eventos/{id}/xml | Baixar XML do evento |
| [**baixarXmlMdfe()**](MdfeApi.md#baixarXmlMdfe) | **GET** /mdfe/{id}/xml | Baixar XML do MDF-e processado |
| [**cancelarMdfe()**](MdfeApi.md#cancelarMdfe) | **POST** /mdfe/{id}/cancelamento | Cancelar um MDF-e autorizado |
| [**consultarCancelamentoMdfe()**](MdfeApi.md#consultarCancelamentoMdfe) | **GET** /mdfe/{id}/cancelamento | Consultar o cancelamento do MDF-e |
| [**consultarEncerramentoMdfe()**](MdfeApi.md#consultarEncerramentoMdfe) | **GET** /mdfe/{id}/encerramento | Consultar encerramento do MDF-e |
| [**consultarEventoMdfe()**](MdfeApi.md#consultarEventoMdfe) | **GET** /mdfe/eventos/{id} | Consultar evento do MDF-e |
| [**consultarLoteMdfe()**](MdfeApi.md#consultarLoteMdfe) | **GET** /mdfe/lotes/{id} | Consultar lote de MDF-e |
| [**consultarMdfe()**](MdfeApi.md#consultarMdfe) | **GET** /mdfe/{id} | Consultar manifesto |
| [**consultarStatusSefazMdfe()**](MdfeApi.md#consultarStatusSefazMdfe) | **GET** /mdfe/sefaz/status | Consulta do Status do Serviço na SEFAZ Autorizadora |
| [**emitirLoteMdfe()**](MdfeApi.md#emitirLoteMdfe) | **POST** /mdfe/lotes | Emitir lote de MDF-e |
| [**emitirMdfe()**](MdfeApi.md#emitirMdfe) | **POST** /mdfe | Emitir MDF-e |
| [**encerrarMdfe()**](MdfeApi.md#encerrarMdfe) | **POST** /mdfe/{id}/encerramento | Encerrar um MDF-e autorizado |
| [**incluirCondutorMdfe()**](MdfeApi.md#incluirCondutorMdfe) | **POST** /mdfe/{id}/inclusao-condutor | Incluir um condutor em um MDF-e autorizado |
| [**incluirDfeMdfe()**](MdfeApi.md#incluirDfeMdfe) | **POST** /mdfe/{id}/inclusao-dfe | Incluir um DF-e em um MDF-e autorizado |
| [**listarLotesMdfe()**](MdfeApi.md#listarLotesMdfe) | **GET** /mdfe/lotes | Listar lotes de MDF-e |
| [**listarMdfe()**](MdfeApi.md#listarMdfe) | **GET** /mdfe | Listar MDF-e |


## `baixarXmlCancelamentoMdfe()`

```php
baixarXmlCancelamentoMdfe($id): \SplFileObject
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


$apiInstance = new NuvemFiscal\Api\MdfeApi(
    // Se quiser usar um client http customizado, passe um client que implemente `GuzzleHttp\ClientInterface`.
    // Isso é opcional, `GuzzleHttp\Client` será usado por padrão.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID único do MDF-e gerado pela Nuvem Fiscal.

try {
    $result = $apiInstance->baixarXmlCancelamentoMdfe($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MdfeApi->baixarXmlCancelamentoMdfe: ', $e->getMessage(), PHP_EOL;
}
```

### Parâmetros

| Nome | Tipo | Descrição  | Notas |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID único do MDF-e gerado pela Nuvem Fiscal. | |

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

## `baixarXmlEncerramentoMdfe()`

```php
baixarXmlEncerramentoMdfe($id): \SplFileObject
```

Baixar XML do encerramento

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


$apiInstance = new NuvemFiscal\Api\MdfeApi(
    // Se quiser usar um client http customizado, passe um client que implemente `GuzzleHttp\ClientInterface`.
    // Isso é opcional, `GuzzleHttp\Client` será usado por padrão.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID único do MDF-e gerado pela Nuvem Fiscal.

try {
    $result = $apiInstance->baixarXmlEncerramentoMdfe($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MdfeApi->baixarXmlEncerramentoMdfe: ', $e->getMessage(), PHP_EOL;
}
```

### Parâmetros

| Nome | Tipo | Descrição  | Notas |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID único do MDF-e gerado pela Nuvem Fiscal. | |

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

## `baixarXmlEventoMdfe()`

```php
baixarXmlEventoMdfe($id): \SplFileObject
```

Baixar XML do evento

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


$apiInstance = new NuvemFiscal\Api\MdfeApi(
    // Se quiser usar um client http customizado, passe um client que implemente `GuzzleHttp\ClientInterface`.
    // Isso é opcional, `GuzzleHttp\Client` será usado por padrão.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID único do evento gerado pela Nuvem Fiscal.

try {
    $result = $apiInstance->baixarXmlEventoMdfe($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MdfeApi->baixarXmlEventoMdfe: ', $e->getMessage(), PHP_EOL;
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

## `baixarXmlMdfe()`

```php
baixarXmlMdfe($id): \SplFileObject
```

Baixar XML do MDF-e processado

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


$apiInstance = new NuvemFiscal\Api\MdfeApi(
    // Se quiser usar um client http customizado, passe um client que implemente `GuzzleHttp\ClientInterface`.
    // Isso é opcional, `GuzzleHttp\Client` será usado por padrão.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID único do MDF-e gerado pela Nuvem Fiscal.

try {
    $result = $apiInstance->baixarXmlMdfe($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MdfeApi->baixarXmlMdfe: ', $e->getMessage(), PHP_EOL;
}
```

### Parâmetros

| Nome | Tipo | Descrição  | Notas |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID único do MDF-e gerado pela Nuvem Fiscal. | |

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

## `cancelarMdfe()`

```php
cancelarMdfe($id, $body): \NuvemFiscal\Model\DfeCancelamento
```

Cancelar um MDF-e autorizado

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


$apiInstance = new NuvemFiscal\Api\MdfeApi(
    // Se quiser usar um client http customizado, passe um client que implemente `GuzzleHttp\ClientInterface`.
    // Isso é opcional, `GuzzleHttp\Client` será usado por padrão.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID único do MDF-e gerado pela Nuvem Fiscal.
$body = new \NuvemFiscal\Model\MdfePedidoCancelamento(); // \NuvemFiscal\Model\MdfePedidoCancelamento | Dados do cancelamento.

try {
    $result = $apiInstance->cancelarMdfe($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MdfeApi->cancelarMdfe: ', $e->getMessage(), PHP_EOL;
}
```

### Parâmetros

| Nome | Tipo | Descrição  | Notas |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID único do MDF-e gerado pela Nuvem Fiscal. | |
| **body** | [**\NuvemFiscal\Model\MdfePedidoCancelamento**](../Model/MdfePedidoCancelamento.md)| Dados do cancelamento. | |

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

## `consultarCancelamentoMdfe()`

```php
consultarCancelamentoMdfe($id): \NuvemFiscal\Model\DfeCancelamento
```

Consultar o cancelamento do MDF-e

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


$apiInstance = new NuvemFiscal\Api\MdfeApi(
    // Se quiser usar um client http customizado, passe um client que implemente `GuzzleHttp\ClientInterface`.
    // Isso é opcional, `GuzzleHttp\Client` será usado por padrão.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID único do MDF-e gerado pela Nuvem Fiscal.

try {
    $result = $apiInstance->consultarCancelamentoMdfe($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MdfeApi->consultarCancelamentoMdfe: ', $e->getMessage(), PHP_EOL;
}
```

### Parâmetros

| Nome | Tipo | Descrição  | Notas |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID único do MDF-e gerado pela Nuvem Fiscal. | |

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

## `consultarEncerramentoMdfe()`

```php
consultarEncerramentoMdfe($id): \NuvemFiscal\Model\MdfeEncerramento
```

Consultar encerramento do MDF-e

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


$apiInstance = new NuvemFiscal\Api\MdfeApi(
    // Se quiser usar um client http customizado, passe um client que implemente `GuzzleHttp\ClientInterface`.
    // Isso é opcional, `GuzzleHttp\Client` será usado por padrão.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID único do MDF-e gerado pela Nuvem Fiscal.

try {
    $result = $apiInstance->consultarEncerramentoMdfe($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MdfeApi->consultarEncerramentoMdfe: ', $e->getMessage(), PHP_EOL;
}
```

### Parâmetros

| Nome | Tipo | Descrição  | Notas |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID único do MDF-e gerado pela Nuvem Fiscal. | |

### Tipo do retorno

[**\NuvemFiscal\Model\MdfeEncerramento**](../Model/MdfeEncerramento.md)

### Autorização

[jwt](../../README.md#jwt), [oauth2](../../README.md#oauth2)

### Headers HTTP da requisição

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Voltar ao topo]](#) [[Back to API list]](../../README.md#endpoints)
[[Voltar à lista de DTOs]](../../README.md#models)
[[Voltar ao README]](../../README.md)

## `consultarEventoMdfe()`

```php
consultarEventoMdfe($id): \NuvemFiscal\Model\DfeEvento
```

Consultar evento do MDF-e

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


$apiInstance = new NuvemFiscal\Api\MdfeApi(
    // Se quiser usar um client http customizado, passe um client que implemente `GuzzleHttp\ClientInterface`.
    // Isso é opcional, `GuzzleHttp\Client` será usado por padrão.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID único do evento gerado pela Nuvem Fiscal.

try {
    $result = $apiInstance->consultarEventoMdfe($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MdfeApi->consultarEventoMdfe: ', $e->getMessage(), PHP_EOL;
}
```

### Parâmetros

| Nome | Tipo | Descrição  | Notas |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID único do evento gerado pela Nuvem Fiscal. | |

### Tipo do retorno

[**\NuvemFiscal\Model\DfeEvento**](../Model/DfeEvento.md)

### Autorização

[jwt](../../README.md#jwt), [oauth2](../../README.md#oauth2)

### Headers HTTP da requisição

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Voltar ao topo]](#) [[Back to API list]](../../README.md#endpoints)
[[Voltar à lista de DTOs]](../../README.md#models)
[[Voltar ao README]](../../README.md)

## `consultarLoteMdfe()`

```php
consultarLoteMdfe($id): \NuvemFiscal\Model\DfeLote
```

Consultar lote de MDF-e

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


$apiInstance = new NuvemFiscal\Api\MdfeApi(
    // Se quiser usar um client http customizado, passe um client que implemente `GuzzleHttp\ClientInterface`.
    // Isso é opcional, `GuzzleHttp\Client` será usado por padrão.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID único do lote gerado pela Nuvem Fiscal.

try {
    $result = $apiInstance->consultarLoteMdfe($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MdfeApi->consultarLoteMdfe: ', $e->getMessage(), PHP_EOL;
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

## `consultarMdfe()`

```php
consultarMdfe($id): \NuvemFiscal\Model\Dfe
```

Consultar manifesto

Consulta os detalhes de um manifesto já existente. Forneça o ID único obtido de uma requisição de emissão ou de listagem de manifestos e a Nuvem Fiscal irá retornar as informações do manifesto correspondente.

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


$apiInstance = new NuvemFiscal\Api\MdfeApi(
    // Se quiser usar um client http customizado, passe um client que implemente `GuzzleHttp\ClientInterface`.
    // Isso é opcional, `GuzzleHttp\Client` será usado por padrão.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID único do MDF-e gerado pela Nuvem Fiscal.

try {
    $result = $apiInstance->consultarMdfe($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MdfeApi->consultarMdfe: ', $e->getMessage(), PHP_EOL;
}
```

### Parâmetros

| Nome | Tipo | Descrição  | Notas |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID único do MDF-e gerado pela Nuvem Fiscal. | |

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

## `consultarStatusSefazMdfe()`

```php
consultarStatusSefazMdfe($cpf_cnpj): \NuvemFiscal\Model\DfeSefazStatus
```

Consulta do Status do Serviço na SEFAZ Autorizadora

Consulta do status do serviço prestado pelo Portal da Secretaria de Fazenda Estadual.    A Nuvem Fiscal mantém a última consulta em cache por 5 minutos, evitando sobrecarregar desnecessariamente os servidores da SEFAZ (conforme orientação do MOC - versão 3.0.0a, item 4.6.3). Dessa forma, você poderá chamar esse endpoint quantas vezes quiser, sem preocupar-se em ter o seu CNPJ bloqueado por consumo indevido (Rejeição 656).

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


$apiInstance = new NuvemFiscal\Api\MdfeApi(
    // Se quiser usar um client http customizado, passe um client que implemente `GuzzleHttp\ClientInterface`.
    // Isso é opcional, `GuzzleHttp\Client` será usado por padrão.
    new GuzzleHttp\Client(),
    $config
);
$cpf_cnpj = 'cpf_cnpj_example'; // string | CPF/CNPJ do emitente.  Utilize o valor sem máscara.

try {
    $result = $apiInstance->consultarStatusSefazMdfe($cpf_cnpj);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MdfeApi->consultarStatusSefazMdfe: ', $e->getMessage(), PHP_EOL;
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

## `emitirLoteMdfe()`

```php
emitirLoteMdfe($body): \NuvemFiscal\Model\DfeLote
```

Emitir lote de MDF-e

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


$apiInstance = new NuvemFiscal\Api\MdfeApi(
    // Se quiser usar um client http customizado, passe um client que implemente `GuzzleHttp\ClientInterface`.
    // Isso é opcional, `GuzzleHttp\Client` será usado por padrão.
    new GuzzleHttp\Client(),
    $config
);
$body = new \NuvemFiscal\Model\MdfePedidoEmissaoLote(); // \NuvemFiscal\Model\MdfePedidoEmissaoLote

try {
    $result = $apiInstance->emitirLoteMdfe($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MdfeApi->emitirLoteMdfe: ', $e->getMessage(), PHP_EOL;
}
```

### Parâmetros

| Nome | Tipo | Descrição  | Notas |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\NuvemFiscal\Model\MdfePedidoEmissaoLote**](../Model/MdfePedidoEmissaoLote.md)|  | |

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

## `emitirMdfe()`

```php
emitirMdfe($body): \NuvemFiscal\Model\Dfe
```

Emitir MDF-e

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


$apiInstance = new NuvemFiscal\Api\MdfeApi(
    // Se quiser usar um client http customizado, passe um client que implemente `GuzzleHttp\ClientInterface`.
    // Isso é opcional, `GuzzleHttp\Client` será usado por padrão.
    new GuzzleHttp\Client(),
    $config
);
$body = new \NuvemFiscal\Model\MdfePedidoEmissao(); // \NuvemFiscal\Model\MdfePedidoEmissao

try {
    $result = $apiInstance->emitirMdfe($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MdfeApi->emitirMdfe: ', $e->getMessage(), PHP_EOL;
}
```

### Parâmetros

| Nome | Tipo | Descrição  | Notas |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\NuvemFiscal\Model\MdfePedidoEmissao**](../Model/MdfePedidoEmissao.md)|  | |

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

## `encerrarMdfe()`

```php
encerrarMdfe($id, $body): \NuvemFiscal\Model\MdfeEncerramento
```

Encerrar um MDF-e autorizado

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


$apiInstance = new NuvemFiscal\Api\MdfeApi(
    // Se quiser usar um client http customizado, passe um client que implemente `GuzzleHttp\ClientInterface`.
    // Isso é opcional, `GuzzleHttp\Client` será usado por padrão.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID único do MDF-e gerado pela Nuvem Fiscal.
$body = new \NuvemFiscal\Model\MdfePedidoEncerramento(); // \NuvemFiscal\Model\MdfePedidoEncerramento

try {
    $result = $apiInstance->encerrarMdfe($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MdfeApi->encerrarMdfe: ', $e->getMessage(), PHP_EOL;
}
```

### Parâmetros

| Nome | Tipo | Descrição  | Notas |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID único do MDF-e gerado pela Nuvem Fiscal. | |
| **body** | [**\NuvemFiscal\Model\MdfePedidoEncerramento**](../Model/MdfePedidoEncerramento.md)|  | |

### Tipo do retorno

[**\NuvemFiscal\Model\MdfeEncerramento**](../Model/MdfeEncerramento.md)

### Autorização

[jwt](../../README.md#jwt), [oauth2](../../README.md#oauth2)

### Headers HTTP da requisição

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Voltar ao topo]](#) [[Back to API list]](../../README.md#endpoints)
[[Voltar à lista de DTOs]](../../README.md#models)
[[Voltar ao README]](../../README.md)

## `incluirCondutorMdfe()`

```php
incluirCondutorMdfe($id, $body): \NuvemFiscal\Model\MdfeInclusaoCondutor
```

Incluir um condutor em um MDF-e autorizado

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


$apiInstance = new NuvemFiscal\Api\MdfeApi(
    // Se quiser usar um client http customizado, passe um client que implemente `GuzzleHttp\ClientInterface`.
    // Isso é opcional, `GuzzleHttp\Client` será usado por padrão.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID único do MDF-e gerado pela Nuvem Fiscal.
$body = new \NuvemFiscal\Model\MdfePedidoInclusaoCondutor(); // \NuvemFiscal\Model\MdfePedidoInclusaoCondutor

try {
    $result = $apiInstance->incluirCondutorMdfe($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MdfeApi->incluirCondutorMdfe: ', $e->getMessage(), PHP_EOL;
}
```

### Parâmetros

| Nome | Tipo | Descrição  | Notas |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID único do MDF-e gerado pela Nuvem Fiscal. | |
| **body** | [**\NuvemFiscal\Model\MdfePedidoInclusaoCondutor**](../Model/MdfePedidoInclusaoCondutor.md)|  | |

### Tipo do retorno

[**\NuvemFiscal\Model\MdfeInclusaoCondutor**](../Model/MdfeInclusaoCondutor.md)

### Autorização

[jwt](../../README.md#jwt), [oauth2](../../README.md#oauth2)

### Headers HTTP da requisição

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Voltar ao topo]](#) [[Back to API list]](../../README.md#endpoints)
[[Voltar à lista de DTOs]](../../README.md#models)
[[Voltar ao README]](../../README.md)

## `incluirDfeMdfe()`

```php
incluirDfeMdfe($id, $body): \NuvemFiscal\Model\MdfeInclusaoDfe
```

Incluir um DF-e em um MDF-e autorizado

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


$apiInstance = new NuvemFiscal\Api\MdfeApi(
    // Se quiser usar um client http customizado, passe um client que implemente `GuzzleHttp\ClientInterface`.
    // Isso é opcional, `GuzzleHttp\Client` será usado por padrão.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID único do MDF-e gerado pela Nuvem Fiscal.
$body = new \NuvemFiscal\Model\MdfePedidoInclusaoDfe(); // \NuvemFiscal\Model\MdfePedidoInclusaoDfe

try {
    $result = $apiInstance->incluirDfeMdfe($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MdfeApi->incluirDfeMdfe: ', $e->getMessage(), PHP_EOL;
}
```

### Parâmetros

| Nome | Tipo | Descrição  | Notas |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID único do MDF-e gerado pela Nuvem Fiscal. | |
| **body** | [**\NuvemFiscal\Model\MdfePedidoInclusaoDfe**](../Model/MdfePedidoInclusaoDfe.md)|  | |

### Tipo do retorno

[**\NuvemFiscal\Model\MdfeInclusaoDfe**](../Model/MdfeInclusaoDfe.md)

### Autorização

[jwt](../../README.md#jwt), [oauth2](../../README.md#oauth2)

### Headers HTTP da requisição

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Voltar ao topo]](#) [[Back to API list]](../../README.md#endpoints)
[[Voltar à lista de DTOs]](../../README.md#models)
[[Voltar ao README]](../../README.md)

## `listarLotesMdfe()`

```php
listarLotesMdfe($cpf_cnpj, $ambiente, $top, $skip, $referencia): \NuvemFiscal\Model\DfeLoteListagem
```

Listar lotes de MDF-e

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


$apiInstance = new NuvemFiscal\Api\MdfeApi(
    // Se quiser usar um client http customizado, passe um client que implemente `GuzzleHttp\ClientInterface`.
    // Isso é opcional, `GuzzleHttp\Client` será usado por padrão.
    new GuzzleHttp\Client(),
    $config
);
$cpf_cnpj = 'cpf_cnpj_example'; // string | Filtrar pelo CPF ou CNPJ do emitente.  Utilize o valor sem máscara.
$ambiente = 'ambiente_example'; // string | Identificação do Ambiente.  Valores aceitos: homologacao, producao
$top = 56; // int | Limite no número de objetos a serem retornados pela API, entre 1 e 100.  Valor padrão: `10`.
$skip = 56; // int | Quantidade de objetos que serão ignorados antes da lista começar a ser retornada.
$referencia = 'referencia_example'; // string

try {
    $result = $apiInstance->listarLotesMdfe($cpf_cnpj, $ambiente, $top, $skip, $referencia);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MdfeApi->listarLotesMdfe: ', $e->getMessage(), PHP_EOL;
}
```

### Parâmetros

| Nome | Tipo | Descrição  | Notas |
| ------------- | ------------- | ------------- | ------------- |
| **cpf_cnpj** | **string**| Filtrar pelo CPF ou CNPJ do emitente.  Utilize o valor sem máscara. | |
| **ambiente** | **string**| Identificação do Ambiente.  Valores aceitos: homologacao, producao | |
| **top** | **int**| Limite no número de objetos a serem retornados pela API, entre 1 e 100.  Valor padrão: &#x60;10&#x60;. | [optional] |
| **skip** | **int**| Quantidade de objetos que serão ignorados antes da lista começar a ser retornada. | [optional] |
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

## `listarMdfe()`

```php
listarMdfe($cpf_cnpj, $ambiente, $top, $skip, $referencia, $chave): \NuvemFiscal\Model\DfeListagem
```

Listar MDF-e

Retorna a lista de manifestos de acordo com os critérios de busca utilizados. Os manifestos são retornados ordenados pela data da criação, com os mais recentes aparecendo primeiro.

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


$apiInstance = new NuvemFiscal\Api\MdfeApi(
    // Se quiser usar um client http customizado, passe um client que implemente `GuzzleHttp\ClientInterface`.
    // Isso é opcional, `GuzzleHttp\Client` será usado por padrão.
    new GuzzleHttp\Client(),
    $config
);
$cpf_cnpj = 'cpf_cnpj_example'; // string | Filtrar pelo CPF ou CNPJ do emitente.  Utilize o valor sem máscara.
$ambiente = 'ambiente_example'; // string | Identificação do Ambiente.  Valores aceitos: homologacao, producao
$top = 56; // int | Limite no número de objetos a serem retornados pela API, entre 1 e 100.  Valor padrão: `10`.
$skip = 56; // int | Quantidade de objetos que serão ignorados antes da lista começar a ser retornada.
$referencia = 'referencia_example'; // string
$chave = 'chave_example'; // string | Chave de acesso do DF-e.

try {
    $result = $apiInstance->listarMdfe($cpf_cnpj, $ambiente, $top, $skip, $referencia, $chave);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MdfeApi->listarMdfe: ', $e->getMessage(), PHP_EOL;
}
```

### Parâmetros

| Nome | Tipo | Descrição  | Notas |
| ------------- | ------------- | ------------- | ------------- |
| **cpf_cnpj** | **string**| Filtrar pelo CPF ou CNPJ do emitente.  Utilize o valor sem máscara. | |
| **ambiente** | **string**| Identificação do Ambiente.  Valores aceitos: homologacao, producao | |
| **top** | **int**| Limite no número de objetos a serem retornados pela API, entre 1 e 100.  Valor padrão: &#x60;10&#x60;. | [optional] |
| **skip** | **int**| Quantidade de objetos que serão ignorados antes da lista começar a ser retornada. | [optional] |
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
