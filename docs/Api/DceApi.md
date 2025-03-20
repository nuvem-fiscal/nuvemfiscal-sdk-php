# NuvemFiscal\DceApi

Todas as URIs relativas a https://api.nuvemfiscal.com.br, exceto se a operação definir outra URI base.

| Método | Endpoint | Descrição |
| ------------- | ------------- | ------------- |
| [**baixarPdfDce()**](DceApi.md#baixarPdfDce) | **GET** /dce/{id}/pdf | Baixar PDF do DACE |
| [**baixarXmlCancelamentoDce()**](DceApi.md#baixarXmlCancelamentoDce) | **GET** /dce/{id}/cancelamento/xml | Baixar XML do cancelamento |
| [**baixarXmlDce()**](DceApi.md#baixarXmlDce) | **GET** /dce/{id}/xml | Baixar XML da DC-e processada |
| [**baixarXmlDceDeclaracao()**](DceApi.md#baixarXmlDceDeclaracao) | **GET** /dce/{id}/xml/declaracao | Baixar XML da DC-e |
| [**baixarXmlDceProtocolo()**](DceApi.md#baixarXmlDceProtocolo) | **GET** /dce/{id}/xml/protocolo | Baixar XML do Protocolo da SEFAZ |
| [**cancelarDce()**](DceApi.md#cancelarDce) | **POST** /dce/{id}/cancelamento | Cancelar uma DC-e autorizada |
| [**consultarCancelamentoDce()**](DceApi.md#consultarCancelamentoDce) | **GET** /dce/{id}/cancelamento | Consultar o cancelamento da DC-e |
| [**consultarDce()**](DceApi.md#consultarDce) | **GET** /dce/{id} | Consultar DC-e |
| [**consultarStatusSefazDce()**](DceApi.md#consultarStatusSefazDce) | **GET** /dce/sefaz/status | Consulta do Status do Serviço na SEFAZ Autorizadora |
| [**emitirDce()**](DceApi.md#emitirDce) | **POST** /dce | Emitir DC-e |
| [**listarDce()**](DceApi.md#listarDce) | **GET** /dce | Listar DC-e |


## `baixarPdfDce()`

```php
baixarPdfDce($id): \SplFileObject
```

Baixar PDF do DACE

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


$apiInstance = new NuvemFiscal\Api\DceApi(
    // Se quiser usar um client http customizado, passe um client que implemente `GuzzleHttp\ClientInterface`.
    // Isso é opcional, `GuzzleHttp\Client` será usado por padrão.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID único da DC-e gerado pela Nuvem Fiscal.

try {
    $result = $apiInstance->baixarPdfDce($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DceApi->baixarPdfDce: ', $e->getMessage(), PHP_EOL;
}
```

### Parâmetros

| Nome | Tipo | Descrição  | Notas |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID único da DC-e gerado pela Nuvem Fiscal. | |

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

## `baixarXmlCancelamentoDce()`

```php
baixarXmlCancelamentoDce($id): \SplFileObject
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


$apiInstance = new NuvemFiscal\Api\DceApi(
    // Se quiser usar um client http customizado, passe um client que implemente `GuzzleHttp\ClientInterface`.
    // Isso é opcional, `GuzzleHttp\Client` será usado por padrão.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID único da DC-e gerada pela Nuvem Fiscal.

try {
    $result = $apiInstance->baixarXmlCancelamentoDce($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DceApi->baixarXmlCancelamentoDce: ', $e->getMessage(), PHP_EOL;
}
```

### Parâmetros

| Nome | Tipo | Descrição  | Notas |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID único da DC-e gerada pela Nuvem Fiscal. | |

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

## `baixarXmlDce()`

```php
baixarXmlDce($id): \SplFileObject
```

Baixar XML da DC-e processada

Utilize esse endpoint para obter o XML da DC-e enviada para a SEFAZ, complementado com a informação do protocolo de autorização de uso (TAG raiz `dceProc`).    O XML só estará disponível nesse endpoint caso a DC-e tenha sido autorizada pela SEFAZ. Para obter o XML nos demais casos, utilize o endpoint `GET /dce/{id}/xml/declaracao`.

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


$apiInstance = new NuvemFiscal\Api\DceApi(
    // Se quiser usar um client http customizado, passe um client que implemente `GuzzleHttp\ClientInterface`.
    // Isso é opcional, `GuzzleHttp\Client` será usado por padrão.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID único da DC-e gerada pela Nuvem Fiscal.

try {
    $result = $apiInstance->baixarXmlDce($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DceApi->baixarXmlDce: ', $e->getMessage(), PHP_EOL;
}
```

### Parâmetros

| Nome | Tipo | Descrição  | Notas |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID único da DC-e gerada pela Nuvem Fiscal. | |

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

## `baixarXmlDceDeclaracao()`

```php
baixarXmlDceDeclaracao($id): \SplFileObject
```

Baixar XML da DC-e

Utilize esse endpoint para obter o XML da DC-e enviada para a SEFAZ.    O XML estará disponível nesse endpoint mesmo em casos que a declaração tenha sido rejeitada.

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


$apiInstance = new NuvemFiscal\Api\DceApi(
    // Se quiser usar um client http customizado, passe um client que implemente `GuzzleHttp\ClientInterface`.
    // Isso é opcional, `GuzzleHttp\Client` será usado por padrão.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID único da DC-e gerada pela Nuvem Fiscal.

try {
    $result = $apiInstance->baixarXmlDceDeclaracao($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DceApi->baixarXmlDceDeclaracao: ', $e->getMessage(), PHP_EOL;
}
```

### Parâmetros

| Nome | Tipo | Descrição  | Notas |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID único da DC-e gerada pela Nuvem Fiscal. | |

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

## `baixarXmlDceProtocolo()`

```php
baixarXmlDceProtocolo($id): \SplFileObject
```

Baixar XML do Protocolo da SEFAZ

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


$apiInstance = new NuvemFiscal\Api\DceApi(
    // Se quiser usar um client http customizado, passe um client que implemente `GuzzleHttp\ClientInterface`.
    // Isso é opcional, `GuzzleHttp\Client` será usado por padrão.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID único da DC-e gerada pela Nuvem Fiscal.

try {
    $result = $apiInstance->baixarXmlDceProtocolo($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DceApi->baixarXmlDceProtocolo: ', $e->getMessage(), PHP_EOL;
}
```

### Parâmetros

| Nome | Tipo | Descrição  | Notas |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID único da DC-e gerada pela Nuvem Fiscal. | |

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

## `cancelarDce()`

```php
cancelarDce($id, $body): \NuvemFiscal\Model\DfeCancelamento
```

Cancelar uma DC-e autorizada

**Informações adicionais**:  - Cota: <a href=\"/docs/limites#dfe-eventos\">dfe-eventos</a>  - Consumo: 1 unidade por requisição.

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


$apiInstance = new NuvemFiscal\Api\DceApi(
    // Se quiser usar um client http customizado, passe um client que implemente `GuzzleHttp\ClientInterface`.
    // Isso é opcional, `GuzzleHttp\Client` será usado por padrão.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID único da DC-e gerada pela Nuvem Fiscal.
$body = new \NuvemFiscal\Model\DcePedidoCancelamento(); // \NuvemFiscal\Model\DcePedidoCancelamento

try {
    $result = $apiInstance->cancelarDce($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DceApi->cancelarDce: ', $e->getMessage(), PHP_EOL;
}
```

### Parâmetros

| Nome | Tipo | Descrição  | Notas |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID único da DC-e gerada pela Nuvem Fiscal. | |
| **body** | [**\NuvemFiscal\Model\DcePedidoCancelamento**](../Model/DcePedidoCancelamento.md)|  | [optional] |

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

## `consultarCancelamentoDce()`

```php
consultarCancelamentoDce($id): \NuvemFiscal\Model\DfeCancelamento
```

Consultar o cancelamento da DC-e

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


$apiInstance = new NuvemFiscal\Api\DceApi(
    // Se quiser usar um client http customizado, passe um client que implemente `GuzzleHttp\ClientInterface`.
    // Isso é opcional, `GuzzleHttp\Client` será usado por padrão.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID único da DC-e gerada pela Nuvem Fiscal.

try {
    $result = $apiInstance->consultarCancelamentoDce($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DceApi->consultarCancelamentoDce: ', $e->getMessage(), PHP_EOL;
}
```

### Parâmetros

| Nome | Tipo | Descrição  | Notas |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID único da DC-e gerada pela Nuvem Fiscal. | |

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

## `consultarDce()`

```php
consultarDce($id): \NuvemFiscal\Model\Dfe
```

Consultar DC-e

Consulta os detalhes de uma DC-e já existente. Forneça o ID único obtido de uma requisição de emissão ou de listagem de DC-e e a Nuvem Fiscal irá retornar as informações da DC-e correspondente.

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


$apiInstance = new NuvemFiscal\Api\DceApi(
    // Se quiser usar um client http customizado, passe um client que implemente `GuzzleHttp\ClientInterface`.
    // Isso é opcional, `GuzzleHttp\Client` será usado por padrão.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID único da DC-e gerada pela Nuvem Fiscal.

try {
    $result = $apiInstance->consultarDce($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DceApi->consultarDce: ', $e->getMessage(), PHP_EOL;
}
```

### Parâmetros

| Nome | Tipo | Descrição  | Notas |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID único da DC-e gerada pela Nuvem Fiscal. | |

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

## `consultarStatusSefazDce()`

```php
consultarStatusSefazDce($cpf_cnpj, $autorizador): \NuvemFiscal\Model\DfeSefazStatus
```

Consulta do Status do Serviço na SEFAZ Autorizadora

Consulta do status do serviço prestado pelo Portal da Secretaria de Fazenda Estadual.    A Nuvem Fiscal mantém a última consulta em cache por 5 minutos, evitando sobrecarregar desnecessariamente os servidores da SEFAZ.

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


$apiInstance = new NuvemFiscal\Api\DceApi(
    // Se quiser usar um client http customizado, passe um client que implemente `GuzzleHttp\ClientInterface`.
    // Isso é opcional, `GuzzleHttp\Client` será usado por padrão.
    new GuzzleHttp\Client(),
    $config
);
$cpf_cnpj = 'cpf_cnpj_example'; // string | CPF/CNPJ do emitente.  Utilize o valor sem máscara.
$autorizador = 'autorizador_example'; // string | Ambiente Autorizador.    Autorizadores disponíveis: `AN`.    *Caso não seja informado, será utilizado o ambiente autorizador da UF do emitente.*

try {
    $result = $apiInstance->consultarStatusSefazDce($cpf_cnpj, $autorizador);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DceApi->consultarStatusSefazDce: ', $e->getMessage(), PHP_EOL;
}
```

### Parâmetros

| Nome | Tipo | Descrição  | Notas |
| ------------- | ------------- | ------------- | ------------- |
| **cpf_cnpj** | **string**| CPF/CNPJ do emitente.  Utilize o valor sem máscara. | |
| **autorizador** | **string**| Ambiente Autorizador.    Autorizadores disponíveis: &#x60;AN&#x60;.    *Caso não seja informado, será utilizado o ambiente autorizador da UF do emitente.* | [optional] |

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

## `emitirDce()`

```php
emitirDce($body): \NuvemFiscal\Model\Dfe
```

Emitir DC-e

**Informações adicionais**:  - Cota: <a href=\"/docs/limites#dfe-eventos\">dfe-eventos</a>  - Consumo: 1 unidade por requisição.

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


$apiInstance = new NuvemFiscal\Api\DceApi(
    // Se quiser usar um client http customizado, passe um client que implemente `GuzzleHttp\ClientInterface`.
    // Isso é opcional, `GuzzleHttp\Client` será usado por padrão.
    new GuzzleHttp\Client(),
    $config
);
$body = new \NuvemFiscal\Model\DcePedidoEmissao(); // \NuvemFiscal\Model\DcePedidoEmissao

try {
    $result = $apiInstance->emitirDce($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DceApi->emitirDce: ', $e->getMessage(), PHP_EOL;
}
```

### Parâmetros

| Nome | Tipo | Descrição  | Notas |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\NuvemFiscal\Model\DcePedidoEmissao**](../Model/DcePedidoEmissao.md)|  | |

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

## `listarDce()`

```php
listarDce($cpf_cnpj, $ambiente, $top, $skip, $inlinecount, $referencia, $chave, $serie): \NuvemFiscal\Model\DfeListagem
```

Listar DC-e

Retorna a lista de DC-e de acordo com os critérios de busca utilizados. As DC-e são retornadas ordenadas pela data da criação, com as mais recentes aparecendo primeiro.

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


$apiInstance = new NuvemFiscal\Api\DceApi(
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
$referencia = 'referencia_example'; // string | Seu identificador único para o documento.
$chave = 'chave_example'; // string | Chave de acesso do DF-e.
$serie = 'serie_example'; // string | Série do DF-e.

try {
    $result = $apiInstance->listarDce($cpf_cnpj, $ambiente, $top, $skip, $inlinecount, $referencia, $chave, $serie);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DceApi->listarDce: ', $e->getMessage(), PHP_EOL;
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
| **referencia** | **string**| Seu identificador único para o documento. | [optional] |
| **chave** | **string**| Chave de acesso do DF-e. | [optional] |
| **serie** | **string**| Série do DF-e. | [optional] |

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
