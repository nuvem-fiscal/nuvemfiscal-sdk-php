# NuvemFiscal\DistribuioNFEApi

Todas as URIs relativas a https://api.nuvemfiscal.com.br, exceto se a operação definir outra URI base.

| Método | Endpoint | Descrição |
| ------------- | ------------- | ------------- |
| [**baixarXmlDocumentoDistribuicaoNfe()**](DistribuioNFEApi.md#baixarXmlDocumentoDistribuicaoNfe) | **GET** /distribuicao/nfe/documentos/{id}/xml | Baixar XML do documento |
| [**consultarDistribuicaoNfe()**](DistribuioNFEApi.md#consultarDistribuicaoNfe) | **GET** /distribuicao/nfe/{id} | Consultar distribuição |
| [**consultarDocumentoDistribuicaoNfe()**](DistribuioNFEApi.md#consultarDocumentoDistribuicaoNfe) | **GET** /distribuicao/nfe/documentos/{id} | Consultar documento |
| [**consultarManifestacaoNfe()**](DistribuioNFEApi.md#consultarManifestacaoNfe) | **GET** /distribuicao/nfe/manifestacoes/{id} | Consultar manifestação |
| [**gerarDistribuicaoNfe()**](DistribuioNFEApi.md#gerarDistribuicaoNfe) | **POST** /distribuicao/nfe | Distribuir documentos |
| [**listarDistribuicaoNfe()**](DistribuioNFEApi.md#listarDistribuicaoNfe) | **GET** /distribuicao/nfe | Listar distribuições |
| [**listarDocumentoDistribuicaoNfe()**](DistribuioNFEApi.md#listarDocumentoDistribuicaoNfe) | **GET** /distribuicao/nfe/documentos | Listar documentos |
| [**listarManifestacaoNfe()**](DistribuioNFEApi.md#listarManifestacaoNfe) | **GET** /distribuicao/nfe/manifestacoes | Listar Manifestações |
| [**manifestarNfe()**](DistribuioNFEApi.md#manifestarNfe) | **POST** /distribuicao/nfe/manifestacoes | Manifestar nota |


## `baixarXmlDocumentoDistribuicaoNfe()`

```php
baixarXmlDocumentoDistribuicaoNfe($id): \SplFileObject
```

Baixar XML do documento

Utilize esse endpoint para obter o XML das informações resumidas ou documento fiscal de interesse da pessoa ou empresa interessada.

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


$apiInstance = new NuvemFiscal\Api\DistribuioNFEApi(
    // Se quiser usar um client http customizado, passe um client que implemente `GuzzleHttp\ClientInterface`.
    // Isso é opcional, `GuzzleHttp\Client` será usado por padrão.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID único do documento gerado pela Nuvem Fiscal.

try {
    $result = $apiInstance->baixarXmlDocumentoDistribuicaoNfe($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistribuioNFEApi->baixarXmlDocumentoDistribuicaoNfe: ', $e->getMessage(), PHP_EOL;
}
```

### Parâmetros

| Nome | Tipo | Descrição  | Notas |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID único do documento gerado pela Nuvem Fiscal. | |

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

## `consultarDistribuicaoNfe()`

```php
consultarDistribuicaoNfe($id): \NuvemFiscal\Model\DistribuicaoNfe
```

Consultar distribuição

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


$apiInstance = new NuvemFiscal\Api\DistribuioNFEApi(
    // Se quiser usar um client http customizado, passe um client que implemente `GuzzleHttp\ClientInterface`.
    // Isso é opcional, `GuzzleHttp\Client` será usado por padrão.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID único da distribuição de NF-e gerada pela Nuvem Fiscal.

try {
    $result = $apiInstance->consultarDistribuicaoNfe($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistribuioNFEApi->consultarDistribuicaoNfe: ', $e->getMessage(), PHP_EOL;
}
```

### Parâmetros

| Nome | Tipo | Descrição  | Notas |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID único da distribuição de NF-e gerada pela Nuvem Fiscal. | |

### Tipo do retorno

[**\NuvemFiscal\Model\DistribuicaoNfe**](../Model/DistribuicaoNfe.md)

### Autorização

[jwt](../../README.md#jwt), [oauth2](../../README.md#oauth2)

### Headers HTTP da requisição

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Voltar ao topo]](#) [[Back to API list]](../../README.md#endpoints)
[[Voltar à lista de DTOs]](../../README.md#models)
[[Voltar ao README]](../../README.md)

## `consultarDocumentoDistribuicaoNfe()`

```php
consultarDocumentoDistribuicaoNfe($id): \NuvemFiscal\Model\DistribuicaoNfeDocumento
```

Consultar documento

Utilize esse endpoint para obter as informações resumidas ou documento fiscal de interesse da pessoa ou empresa interessada.

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


$apiInstance = new NuvemFiscal\Api\DistribuioNFEApi(
    // Se quiser usar um client http customizado, passe um client que implemente `GuzzleHttp\ClientInterface`.
    // Isso é opcional, `GuzzleHttp\Client` será usado por padrão.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID único do documento gerado pela Nuvem Fiscal.

try {
    $result = $apiInstance->consultarDocumentoDistribuicaoNfe($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistribuioNFEApi->consultarDocumentoDistribuicaoNfe: ', $e->getMessage(), PHP_EOL;
}
```

### Parâmetros

| Nome | Tipo | Descrição  | Notas |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID único do documento gerado pela Nuvem Fiscal. | |

### Tipo do retorno

[**\NuvemFiscal\Model\DistribuicaoNfeDocumento**](../Model/DistribuicaoNfeDocumento.md)

### Autorização

[jwt](../../README.md#jwt), [oauth2](../../README.md#oauth2)

### Headers HTTP da requisição

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Voltar ao topo]](#) [[Back to API list]](../../README.md#endpoints)
[[Voltar à lista de DTOs]](../../README.md#models)
[[Voltar ao README]](../../README.md)

## `consultarManifestacaoNfe()`

```php
consultarManifestacaoNfe($id): \NuvemFiscal\Model\DistribuicaoNfeEvento
```

Consultar manifestação

Consulta os detalhes de uma manifestação de NF-e já existente. Forneça o ID único obtido de uma requisição de manifestação ou de listagem de manifestações e a Nuvem Fiscal irá retornar as informações da manifestação correspondente.

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


$apiInstance = new NuvemFiscal\Api\DistribuioNFEApi(
    // Se quiser usar um client http customizado, passe um client que implemente `GuzzleHttp\ClientInterface`.
    // Isso é opcional, `GuzzleHttp\Client` será usado por padrão.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID único da manifestação gerado pela Nuvem Fiscal.

try {
    $result = $apiInstance->consultarManifestacaoNfe($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistribuioNFEApi->consultarManifestacaoNfe: ', $e->getMessage(), PHP_EOL;
}
```

### Parâmetros

| Nome | Tipo | Descrição  | Notas |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID único da manifestação gerado pela Nuvem Fiscal. | |

### Tipo do retorno

[**\NuvemFiscal\Model\DistribuicaoNfeEvento**](../Model/DistribuicaoNfeEvento.md)

### Autorização

[jwt](../../README.md#jwt), [oauth2](../../README.md#oauth2)

### Headers HTTP da requisição

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Voltar ao topo]](#) [[Back to API list]](../../README.md#endpoints)
[[Voltar à lista de DTOs]](../../README.md#models)
[[Voltar ao README]](../../README.md)

## `gerarDistribuicaoNfe()`

```php
gerarDistribuicaoNfe($body): \NuvemFiscal\Model\DistribuicaoNfe
```

Distribuir documentos

Gera um pedido de distribuição de Documentos Fiscais Eletrônicos (DF-e)  para um determinado CNPJ. Este endpoint permite que o destinatário  obtenha os documentos fiscais emitidos contra o seu CNPJ utilizando  três formas de consulta: *dist-nsu*, *cons-nsu* e *cons-chave*.    **Comportamento Assíncrono**    No retorno, existe a propriedade `status` no JSON que poderá assumir um  dos seguintes valores: *processando*, *concluido* ou *erro*. Caso o status  seja retornado com o valor *processando*, significa que a solicitação está  sendo realizada de forma assíncrona pela API. Nesse caso, o usuário deverá  adotar um fluxo que consiste em requisitar periodicamente o endpoint de  consulta de pedido de distribuição até que a API retorne o pedido com um  status indicando o fim do processamento (concluido ou erro).

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


$apiInstance = new NuvemFiscal\Api\DistribuioNFEApi(
    // Se quiser usar um client http customizado, passe um client que implemente `GuzzleHttp\ClientInterface`.
    // Isso é opcional, `GuzzleHttp\Client` será usado por padrão.
    new GuzzleHttp\Client(),
    $config
);
$body = new \NuvemFiscal\Model\DistribuicaoNfePedido(); // \NuvemFiscal\Model\DistribuicaoNfePedido

try {
    $result = $apiInstance->gerarDistribuicaoNfe($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistribuioNFEApi->gerarDistribuicaoNfe: ', $e->getMessage(), PHP_EOL;
}
```

### Parâmetros

| Nome | Tipo | Descrição  | Notas |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\NuvemFiscal\Model\DistribuicaoNfePedido**](../Model/DistribuicaoNfePedido.md)|  | |

### Tipo do retorno

[**\NuvemFiscal\Model\DistribuicaoNfe**](../Model/DistribuicaoNfe.md)

### Autorização

[jwt](../../README.md#jwt), [oauth2](../../README.md#oauth2)

### Headers HTTP da requisição

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Voltar ao topo]](#) [[Back to API list]](../../README.md#endpoints)
[[Voltar à lista de DTOs]](../../README.md#models)
[[Voltar ao README]](../../README.md)

## `listarDistribuicaoNfe()`

```php
listarDistribuicaoNfe($cpf_cnpj, $ambiente, $top, $skip, $inlinecount): \NuvemFiscal\Model\DistribuicaoNfeListagem
```

Listar distribuições

Retorna a lista de distribuições de NF-e de acordo com os critérios de busca utilizados. As distribuições são retornadas ordenadas pela data da criação, com as mais recentes aparecendo primeiro.

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


$apiInstance = new NuvemFiscal\Api\DistribuioNFEApi(
    // Se quiser usar um client http customizado, passe um client que implemente `GuzzleHttp\ClientInterface`.
    // Isso é opcional, `GuzzleHttp\Client` será usado por padrão.
    new GuzzleHttp\Client(),
    $config
);
$cpf_cnpj = 'cpf_cnpj_example'; // string | Filtrar pelo CPF ou CNPJ da pessoa ou empresa interessada.    Utilize o valor sem máscara.
$ambiente = 'ambiente_example'; // string | Identificação do Ambiente.    Valores aceitos: homologacao, producao
$top = 10; // int | Limite no número de objetos a serem retornados pela API, entre 1 e 100.
$skip = 0; // int | Quantidade de objetos que serão ignorados antes da lista começar a ser retornada.
$inlinecount = false; // bool | Inclui no JSON de resposta, na propriedade `@count`, o número total de registros que o filtro retornaria, independente dos filtros de paginação.

try {
    $result = $apiInstance->listarDistribuicaoNfe($cpf_cnpj, $ambiente, $top, $skip, $inlinecount);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistribuioNFEApi->listarDistribuicaoNfe: ', $e->getMessage(), PHP_EOL;
}
```

### Parâmetros

| Nome | Tipo | Descrição  | Notas |
| ------------- | ------------- | ------------- | ------------- |
| **cpf_cnpj** | **string**| Filtrar pelo CPF ou CNPJ da pessoa ou empresa interessada.    Utilize o valor sem máscara. | |
| **ambiente** | **string**| Identificação do Ambiente.    Valores aceitos: homologacao, producao | |
| **top** | **int**| Limite no número de objetos a serem retornados pela API, entre 1 e 100. | [optional] [default to 10] |
| **skip** | **int**| Quantidade de objetos que serão ignorados antes da lista começar a ser retornada. | [optional] [default to 0] |
| **inlinecount** | **bool**| Inclui no JSON de resposta, na propriedade &#x60;@count&#x60;, o número total de registros que o filtro retornaria, independente dos filtros de paginação. | [optional] [default to false] |

### Tipo do retorno

[**\NuvemFiscal\Model\DistribuicaoNfeListagem**](../Model/DistribuicaoNfeListagem.md)

### Autorização

[jwt](../../README.md#jwt), [oauth2](../../README.md#oauth2)

### Headers HTTP da requisição

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Voltar ao topo]](#) [[Back to API list]](../../README.md#endpoints)
[[Voltar à lista de DTOs]](../../README.md#models)
[[Voltar ao README]](../../README.md)

## `listarDocumentoDistribuicaoNfe()`

```php
listarDocumentoDistribuicaoNfe($cpf_cnpj, $ambiente, $top, $skip, $inlinecount, $tipo_documento, $forma_distribuicao, $chave_acesso): \NuvemFiscal\Model\DistribuicaoNfeDocumentoListagem
```

Listar documentos

Retorna a lista de documentos fiscais eletrônicos de interesse da pessoa ou empresa de acordo com os critérios de busca utilizados. Os documentos são retornadas ordenados pela data da criação, com os mais recentes aparecendo primeiro.

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


$apiInstance = new NuvemFiscal\Api\DistribuioNFEApi(
    // Se quiser usar um client http customizado, passe um client que implemente `GuzzleHttp\ClientInterface`.
    // Isso é opcional, `GuzzleHttp\Client` será usado por padrão.
    new GuzzleHttp\Client(),
    $config
);
$cpf_cnpj = 'cpf_cnpj_example'; // string | Filtrar pelo CPF ou CNPJ da pessoa ou empresa interessada.    Utilize o valor sem máscara.
$ambiente = 'ambiente_example'; // string | Identificação do Ambiente.    Valores aceitos: homologacao, producao
$top = 10; // int | Limite no número de objetos a serem retornados pela API, entre 1 e 100.
$skip = 0; // int | Quantidade de objetos que serão ignorados antes da lista começar a ser retornada.
$inlinecount = false; // bool | Inclui no JSON de resposta, na propriedade `@count`, o número total de registros que o filtro retornaria, independente dos filtros de paginação.
$tipo_documento = 'tipo_documento_example'; // string | Filtrar pelo tipo do documento de interesse da pessoa ou empresa.    Valores aceitos: `nota`, `evento`
$forma_distribuicao = 'forma_distribuicao_example'; // string | Filtrar por documentos que foram distribuídos em sua forma resumida ou completa.    Valores aceitos: `resumida`, `completa`
$chave_acesso = 'chave_acesso_example'; // string | Filtrar pela chave de acesso da NF-e.

try {
    $result = $apiInstance->listarDocumentoDistribuicaoNfe($cpf_cnpj, $ambiente, $top, $skip, $inlinecount, $tipo_documento, $forma_distribuicao, $chave_acesso);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistribuioNFEApi->listarDocumentoDistribuicaoNfe: ', $e->getMessage(), PHP_EOL;
}
```

### Parâmetros

| Nome | Tipo | Descrição  | Notas |
| ------------- | ------------- | ------------- | ------------- |
| **cpf_cnpj** | **string**| Filtrar pelo CPF ou CNPJ da pessoa ou empresa interessada.    Utilize o valor sem máscara. | |
| **ambiente** | **string**| Identificação do Ambiente.    Valores aceitos: homologacao, producao | |
| **top** | **int**| Limite no número de objetos a serem retornados pela API, entre 1 e 100. | [optional] [default to 10] |
| **skip** | **int**| Quantidade de objetos que serão ignorados antes da lista começar a ser retornada. | [optional] [default to 0] |
| **inlinecount** | **bool**| Inclui no JSON de resposta, na propriedade &#x60;@count&#x60;, o número total de registros que o filtro retornaria, independente dos filtros de paginação. | [optional] [default to false] |
| **tipo_documento** | **string**| Filtrar pelo tipo do documento de interesse da pessoa ou empresa.    Valores aceitos: &#x60;nota&#x60;, &#x60;evento&#x60; | [optional] |
| **forma_distribuicao** | **string**| Filtrar por documentos que foram distribuídos em sua forma resumida ou completa.    Valores aceitos: &#x60;resumida&#x60;, &#x60;completa&#x60; | [optional] |
| **chave_acesso** | **string**| Filtrar pela chave de acesso da NF-e. | [optional] |

### Tipo do retorno

[**\NuvemFiscal\Model\DistribuicaoNfeDocumentoListagem**](../Model/DistribuicaoNfeDocumentoListagem.md)

### Autorização

[jwt](../../README.md#jwt), [oauth2](../../README.md#oauth2)

### Headers HTTP da requisição

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Voltar ao topo]](#) [[Back to API list]](../../README.md#endpoints)
[[Voltar à lista de DTOs]](../../README.md#models)
[[Voltar ao README]](../../README.md)

## `listarManifestacaoNfe()`

```php
listarManifestacaoNfe($cpf_cnpj, $ambiente, $top, $skip, $inlinecount): \NuvemFiscal\Model\ManifestacaoNfeListagem
```

Listar Manifestações

Retorna a lista de manifestações de NF-e de acordo com os critérios de busca utilizados. As manifestações são retornadas ordenadas pela data da criação, com as mais recentes aparecendo primeiro.

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


$apiInstance = new NuvemFiscal\Api\DistribuioNFEApi(
    // Se quiser usar um client http customizado, passe um client que implemente `GuzzleHttp\ClientInterface`.
    // Isso é opcional, `GuzzleHttp\Client` será usado por padrão.
    new GuzzleHttp\Client(),
    $config
);
$cpf_cnpj = 'cpf_cnpj_example'; // string | Filtrar pelo CPF ou CNPJ do autor do evento.    Utilize o valor sem máscara.
$ambiente = 'ambiente_example'; // string | Identificação do Ambiente.    Valores aceitos: homologacao, producao
$top = 10; // int | Limite no número de objetos a serem retornados pela API, entre 1 e 100.
$skip = 0; // int | Quantidade de objetos que serão ignorados antes da lista começar a ser retornada.
$inlinecount = false; // bool | Inclui no JSON de resposta, na propriedade `@count`, o número total de registros que o filtro retornaria, independente dos filtros de paginação.

try {
    $result = $apiInstance->listarManifestacaoNfe($cpf_cnpj, $ambiente, $top, $skip, $inlinecount);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistribuioNFEApi->listarManifestacaoNfe: ', $e->getMessage(), PHP_EOL;
}
```

### Parâmetros

| Nome | Tipo | Descrição  | Notas |
| ------------- | ------------- | ------------- | ------------- |
| **cpf_cnpj** | **string**| Filtrar pelo CPF ou CNPJ do autor do evento.    Utilize o valor sem máscara. | |
| **ambiente** | **string**| Identificação do Ambiente.    Valores aceitos: homologacao, producao | |
| **top** | **int**| Limite no número de objetos a serem retornados pela API, entre 1 e 100. | [optional] [default to 10] |
| **skip** | **int**| Quantidade de objetos que serão ignorados antes da lista começar a ser retornada. | [optional] [default to 0] |
| **inlinecount** | **bool**| Inclui no JSON de resposta, na propriedade &#x60;@count&#x60;, o número total de registros que o filtro retornaria, independente dos filtros de paginação. | [optional] [default to false] |

### Tipo do retorno

[**\NuvemFiscal\Model\ManifestacaoNfeListagem**](../Model/ManifestacaoNfeListagem.md)

### Autorização

[jwt](../../README.md#jwt), [oauth2](../../README.md#oauth2)

### Headers HTTP da requisição

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Voltar ao topo]](#) [[Back to API list]](../../README.md#endpoints)
[[Voltar à lista de DTOs]](../../README.md#models)
[[Voltar ao README]](../../README.md)

## `manifestarNfe()`

```php
manifestarNfe($body): \NuvemFiscal\Model\DistribuicaoNfeEvento
```

Manifestar nota

O processo de manifestação do destinatário permite que os destinatários  de Notas Fiscais Eletrônicas (NF-e) registrem formalmente sua posição em  relação às operações descritas nesses documentos fiscais. Ele envolve  eventos que indicam se a operação foi confirmada, desconhecida ou  não realizada.    Os seguintes tipos de manifestação são suportados pela NF-e:  * **Confirmação da Operação (210200)**: Manifestação do destinatário confirmando que a operação descrita na NF-e ocorreu exatamente como informado na NF-e. Esse evento libera a possibilidade de download da NF-e pelo destinatário e impede que a empresa emitente cancele a NF-e após a confirmação.  * **Ciência da Operação (210210)**: Declara que o destinatário tem ciência da existência da NF-e, mas ainda não possui elementos suficientes para manifestar-se conclusivamente. Este é um evento opcional que pode ser usado pelo destinatário para indicar que está ciente da NF-e enquanto coleta mais informações. Esse evento libera a possibilidade de download da NF-e pelo destinatário.  * **Desconhecimento da Operação (210220)**: Manifestação do destinatário declarando que a operação descrita da NF-e não foi por ele solicitada.  * **Operação não Realizada (210240)**: Manifestação do destinatário reconhecendo sua participação na operação descrita na NF-e, mas declarando que a operação não ocorreu ou não se efetivou como informado nesta NF-e.

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


$apiInstance = new NuvemFiscal\Api\DistribuioNFEApi(
    // Se quiser usar um client http customizado, passe um client que implemente `GuzzleHttp\ClientInterface`.
    // Isso é opcional, `GuzzleHttp\Client` será usado por padrão.
    new GuzzleHttp\Client(),
    $config
);
$body = new \NuvemFiscal\Model\DistribuicaoNfePedidoManifestacao(); // \NuvemFiscal\Model\DistribuicaoNfePedidoManifestacao | Contém os dados do pedido para manifestação do destinatário.

try {
    $result = $apiInstance->manifestarNfe($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistribuioNFEApi->manifestarNfe: ', $e->getMessage(), PHP_EOL;
}
```

### Parâmetros

| Nome | Tipo | Descrição  | Notas |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\NuvemFiscal\Model\DistribuicaoNfePedidoManifestacao**](../Model/DistribuicaoNfePedidoManifestacao.md)| Contém os dados do pedido para manifestação do destinatário. | |

### Tipo do retorno

[**\NuvemFiscal\Model\DistribuicaoNfeEvento**](../Model/DistribuicaoNfeEvento.md)

### Autorização

[jwt](../../README.md#jwt), [oauth2](../../README.md#oauth2)

### Headers HTTP da requisição

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Voltar ao topo]](#) [[Back to API list]](../../README.md#endpoints)
[[Voltar à lista de DTOs]](../../README.md#models)
[[Voltar ao README]](../../README.md)
