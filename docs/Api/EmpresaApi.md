# NuvemFiscal\EmpresaApi

Todas as URIs relativas a https://api.nuvemfiscal.com.br, exceto se a operação definir outra URI base.

| Método | Endpoint | Descrição |
| ------------- | ------------- | ------------- |
| [**alterarConfigCte()**](EmpresaApi.md#alterarConfigCte) | **PUT** /empresas/{cpf_cnpj}/cte | Alterar configuração de CT-e |
| [**alterarConfigMdfe()**](EmpresaApi.md#alterarConfigMdfe) | **PUT** /empresas/{cpf_cnpj}/mdfe | Alterar configuração de MDF-e |
| [**alterarConfigNfce()**](EmpresaApi.md#alterarConfigNfce) | **PUT** /empresas/{cpf_cnpj}/nfce | Alterar configuração de NFC-e |
| [**alterarConfigNfe()**](EmpresaApi.md#alterarConfigNfe) | **PUT** /empresas/{cpf_cnpj}/nfe | Alterar configuração de NF-e |
| [**alterarConfigNfse()**](EmpresaApi.md#alterarConfigNfse) | **PUT** /empresas/{cpf_cnpj}/nfse | Alterar configuração de NFS-e |
| [**atualizarEmpresa()**](EmpresaApi.md#atualizarEmpresa) | **PUT** /empresas/{cpf_cnpj} | Alterar empresa |
| [**baixarLogotipoEmpresa()**](EmpresaApi.md#baixarLogotipoEmpresa) | **GET** /empresas/{cpf_cnpj}/logotipo | Baixar logotipo |
| [**cadastrarCertificadoEmpresa()**](EmpresaApi.md#cadastrarCertificadoEmpresa) | **PUT** /empresas/{cpf_cnpj}/certificado | Cadastrar certificado |
| [**consultarCertificadoEmpresa()**](EmpresaApi.md#consultarCertificadoEmpresa) | **GET** /empresas/{cpf_cnpj}/certificado | Consultar certificado |
| [**consultarConfigCte()**](EmpresaApi.md#consultarConfigCte) | **GET** /empresas/{cpf_cnpj}/cte | Consultar configuração de CT-e |
| [**consultarConfigMdfe()**](EmpresaApi.md#consultarConfigMdfe) | **GET** /empresas/{cpf_cnpj}/mdfe | Consultar configuração de MDF-e |
| [**consultarConfigNfce()**](EmpresaApi.md#consultarConfigNfce) | **GET** /empresas/{cpf_cnpj}/nfce | Consultar configuração de NFC-e |
| [**consultarConfigNfe()**](EmpresaApi.md#consultarConfigNfe) | **GET** /empresas/{cpf_cnpj}/nfe | Consultar configuração de NF-e |
| [**consultarConfigNfse()**](EmpresaApi.md#consultarConfigNfse) | **GET** /empresas/{cpf_cnpj}/nfse | Consultar configuração de NFS-e |
| [**consultarEmpresa()**](EmpresaApi.md#consultarEmpresa) | **GET** /empresas/{cpf_cnpj} | Consultar empresa |
| [**criarEmpresa()**](EmpresaApi.md#criarEmpresa) | **POST** /empresas | Cadastrar empresa |
| [**enviarCertificadoEmpresa()**](EmpresaApi.md#enviarCertificadoEmpresa) | **PUT** /empresas/{cpf_cnpj}/certificado/upload | Upload de certificado |
| [**enviarLogotipoEmpresa()**](EmpresaApi.md#enviarLogotipoEmpresa) | **PUT** /empresas/{cpf_cnpj}/logotipo | Enviar logotipo |
| [**excluirCertificadoEmpresa()**](EmpresaApi.md#excluirCertificadoEmpresa) | **DELETE** /empresas/{cpf_cnpj}/certificado | Deletar certificado |
| [**excluirEmpresa()**](EmpresaApi.md#excluirEmpresa) | **DELETE** /empresas/{cpf_cnpj} | Deletar empresa |
| [**excluirLogotipoEmpresa()**](EmpresaApi.md#excluirLogotipoEmpresa) | **DELETE** /empresas/{cpf_cnpj}/logotipo | Deletar logotipo |
| [**listarEmpresas()**](EmpresaApi.md#listarEmpresas) | **GET** /empresas | Listar empresas |


## `alterarConfigCte()`

```php
alterarConfigCte($cpf_cnpj, $body): \NuvemFiscal\Model\EmpresaConfigCte
```

Alterar configuração de CT-e

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


$apiInstance = new NuvemFiscal\Api\EmpresaApi(
    // Se quiser usar um client http customizado, passe um client que implemente `GuzzleHttp\ClientInterface`.
    // Isso é opcional, `GuzzleHttp\Client` será usado por padrão.
    new GuzzleHttp\Client(),
    $config
);
$cpf_cnpj = 'cpf_cnpj_example'; // string | CPF ou CNPJ da empresa.  Utilize o valor sem máscara.
$body = new \NuvemFiscal\Model\EmpresaConfigCte(); // \NuvemFiscal\Model\EmpresaConfigCte

try {
    $result = $apiInstance->alterarConfigCte($cpf_cnpj, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmpresaApi->alterarConfigCte: ', $e->getMessage(), PHP_EOL;
}
```

### Parâmetros

| Nome | Tipo | Descrição  | Notas |
| ------------- | ------------- | ------------- | ------------- |
| **cpf_cnpj** | **string**| CPF ou CNPJ da empresa.  Utilize o valor sem máscara. | |
| **body** | [**\NuvemFiscal\Model\EmpresaConfigCte**](../Model/EmpresaConfigCte.md)|  | |

### Tipo do retorno

[**\NuvemFiscal\Model\EmpresaConfigCte**](../Model/EmpresaConfigCte.md)

### Autorização

[jwt](../../README.md#jwt), [oauth2](../../README.md#oauth2)

### Headers HTTP da requisição

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Voltar ao topo]](#) [[Back to API list]](../../README.md#endpoints)
[[Voltar à lista de DTOs]](../../README.md#models)
[[Voltar ao README]](../../README.md)

## `alterarConfigMdfe()`

```php
alterarConfigMdfe($cpf_cnpj, $body): \NuvemFiscal\Model\EmpresaConfigMdfe
```

Alterar configuração de MDF-e

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


$apiInstance = new NuvemFiscal\Api\EmpresaApi(
    // Se quiser usar um client http customizado, passe um client que implemente `GuzzleHttp\ClientInterface`.
    // Isso é opcional, `GuzzleHttp\Client` será usado por padrão.
    new GuzzleHttp\Client(),
    $config
);
$cpf_cnpj = 'cpf_cnpj_example'; // string | CPF ou CNPJ da empresa.  Utilize o valor sem máscara.
$body = new \NuvemFiscal\Model\EmpresaConfigMdfe(); // \NuvemFiscal\Model\EmpresaConfigMdfe

try {
    $result = $apiInstance->alterarConfigMdfe($cpf_cnpj, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmpresaApi->alterarConfigMdfe: ', $e->getMessage(), PHP_EOL;
}
```

### Parâmetros

| Nome | Tipo | Descrição  | Notas |
| ------------- | ------------- | ------------- | ------------- |
| **cpf_cnpj** | **string**| CPF ou CNPJ da empresa.  Utilize o valor sem máscara. | |
| **body** | [**\NuvemFiscal\Model\EmpresaConfigMdfe**](../Model/EmpresaConfigMdfe.md)|  | |

### Tipo do retorno

[**\NuvemFiscal\Model\EmpresaConfigMdfe**](../Model/EmpresaConfigMdfe.md)

### Autorização

[jwt](../../README.md#jwt), [oauth2](../../README.md#oauth2)

### Headers HTTP da requisição

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Voltar ao topo]](#) [[Back to API list]](../../README.md#endpoints)
[[Voltar à lista de DTOs]](../../README.md#models)
[[Voltar ao README]](../../README.md)

## `alterarConfigNfce()`

```php
alterarConfigNfce($cpf_cnpj, $body): \NuvemFiscal\Model\EmpresaConfigNfce
```

Alterar configuração de NFC-e

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


$apiInstance = new NuvemFiscal\Api\EmpresaApi(
    // Se quiser usar um client http customizado, passe um client que implemente `GuzzleHttp\ClientInterface`.
    // Isso é opcional, `GuzzleHttp\Client` será usado por padrão.
    new GuzzleHttp\Client(),
    $config
);
$cpf_cnpj = 'cpf_cnpj_example'; // string | CPF ou CNPJ da empresa.  Utilize o valor sem máscara.
$body = new \NuvemFiscal\Model\EmpresaConfigNfce(); // \NuvemFiscal\Model\EmpresaConfigNfce

try {
    $result = $apiInstance->alterarConfigNfce($cpf_cnpj, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmpresaApi->alterarConfigNfce: ', $e->getMessage(), PHP_EOL;
}
```

### Parâmetros

| Nome | Tipo | Descrição  | Notas |
| ------------- | ------------- | ------------- | ------------- |
| **cpf_cnpj** | **string**| CPF ou CNPJ da empresa.  Utilize o valor sem máscara. | |
| **body** | [**\NuvemFiscal\Model\EmpresaConfigNfce**](../Model/EmpresaConfigNfce.md)|  | |

### Tipo do retorno

[**\NuvemFiscal\Model\EmpresaConfigNfce**](../Model/EmpresaConfigNfce.md)

### Autorização

[jwt](../../README.md#jwt), [oauth2](../../README.md#oauth2)

### Headers HTTP da requisição

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Voltar ao topo]](#) [[Back to API list]](../../README.md#endpoints)
[[Voltar à lista de DTOs]](../../README.md#models)
[[Voltar ao README]](../../README.md)

## `alterarConfigNfe()`

```php
alterarConfigNfe($cpf_cnpj, $body): \NuvemFiscal\Model\EmpresaConfigNfe
```

Alterar configuração de NF-e

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


$apiInstance = new NuvemFiscal\Api\EmpresaApi(
    // Se quiser usar um client http customizado, passe um client que implemente `GuzzleHttp\ClientInterface`.
    // Isso é opcional, `GuzzleHttp\Client` será usado por padrão.
    new GuzzleHttp\Client(),
    $config
);
$cpf_cnpj = 'cpf_cnpj_example'; // string | CPF ou CNPJ da empresa.  Utilize o valor sem máscara.
$body = new \NuvemFiscal\Model\EmpresaConfigNfe(); // \NuvemFiscal\Model\EmpresaConfigNfe

try {
    $result = $apiInstance->alterarConfigNfe($cpf_cnpj, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmpresaApi->alterarConfigNfe: ', $e->getMessage(), PHP_EOL;
}
```

### Parâmetros

| Nome | Tipo | Descrição  | Notas |
| ------------- | ------------- | ------------- | ------------- |
| **cpf_cnpj** | **string**| CPF ou CNPJ da empresa.  Utilize o valor sem máscara. | |
| **body** | [**\NuvemFiscal\Model\EmpresaConfigNfe**](../Model/EmpresaConfigNfe.md)|  | |

### Tipo do retorno

[**\NuvemFiscal\Model\EmpresaConfigNfe**](../Model/EmpresaConfigNfe.md)

### Autorização

[jwt](../../README.md#jwt), [oauth2](../../README.md#oauth2)

### Headers HTTP da requisição

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Voltar ao topo]](#) [[Back to API list]](../../README.md#endpoints)
[[Voltar à lista de DTOs]](../../README.md#models)
[[Voltar ao README]](../../README.md)

## `alterarConfigNfse()`

```php
alterarConfigNfse($cpf_cnpj, $body): \NuvemFiscal\Model\EmpresaConfigNfse
```

Alterar configuração de NFS-e

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


$apiInstance = new NuvemFiscal\Api\EmpresaApi(
    // Se quiser usar um client http customizado, passe um client que implemente `GuzzleHttp\ClientInterface`.
    // Isso é opcional, `GuzzleHttp\Client` será usado por padrão.
    new GuzzleHttp\Client(),
    $config
);
$cpf_cnpj = 'cpf_cnpj_example'; // string | CPF ou CNPJ da empresa.  Utilize o valor sem máscara.
$body = new \NuvemFiscal\Model\EmpresaConfigNfse(); // \NuvemFiscal\Model\EmpresaConfigNfse

try {
    $result = $apiInstance->alterarConfigNfse($cpf_cnpj, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmpresaApi->alterarConfigNfse: ', $e->getMessage(), PHP_EOL;
}
```

### Parâmetros

| Nome | Tipo | Descrição  | Notas |
| ------------- | ------------- | ------------- | ------------- |
| **cpf_cnpj** | **string**| CPF ou CNPJ da empresa.  Utilize o valor sem máscara. | |
| **body** | [**\NuvemFiscal\Model\EmpresaConfigNfse**](../Model/EmpresaConfigNfse.md)|  | |

### Tipo do retorno

[**\NuvemFiscal\Model\EmpresaConfigNfse**](../Model/EmpresaConfigNfse.md)

### Autorização

[jwt](../../README.md#jwt), [oauth2](../../README.md#oauth2)

### Headers HTTP da requisição

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Voltar ao topo]](#) [[Back to API list]](../../README.md#endpoints)
[[Voltar à lista de DTOs]](../../README.md#models)
[[Voltar ao README]](../../README.md)

## `atualizarEmpresa()`

```php
atualizarEmpresa($cpf_cnpj, $body): \NuvemFiscal\Model\Empresa
```

Alterar empresa

Altera o cadastro de uma empresa (emitente/prestador) que esteja associada a sua conta.  Nesse método, por tratar-se de um PUT, caso algum campo não seja informado, o valor dele será apagado.

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


$apiInstance = new NuvemFiscal\Api\EmpresaApi(
    // Se quiser usar um client http customizado, passe um client que implemente `GuzzleHttp\ClientInterface`.
    // Isso é opcional, `GuzzleHttp\Client` será usado por padrão.
    new GuzzleHttp\Client(),
    $config
);
$cpf_cnpj = 'cpf_cnpj_example'; // string | CPF ou CNPJ da empresa.  Utilize o valor sem máscara.
$body = new \NuvemFiscal\Model\Empresa(); // \NuvemFiscal\Model\Empresa

try {
    $result = $apiInstance->atualizarEmpresa($cpf_cnpj, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmpresaApi->atualizarEmpresa: ', $e->getMessage(), PHP_EOL;
}
```

### Parâmetros

| Nome | Tipo | Descrição  | Notas |
| ------------- | ------------- | ------------- | ------------- |
| **cpf_cnpj** | **string**| CPF ou CNPJ da empresa.  Utilize o valor sem máscara. | |
| **body** | [**\NuvemFiscal\Model\Empresa**](../Model/Empresa.md)|  | |

### Tipo do retorno

[**\NuvemFiscal\Model\Empresa**](../Model/Empresa.md)

### Autorização

[jwt](../../README.md#jwt), [oauth2](../../README.md#oauth2)

### Headers HTTP da requisição

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Voltar ao topo]](#) [[Back to API list]](../../README.md#endpoints)
[[Voltar à lista de DTOs]](../../README.md#models)
[[Voltar ao README]](../../README.md)

## `baixarLogotipoEmpresa()`

```php
baixarLogotipoEmpresa($cpf_cnpj): \SplFileObject
```

Baixar logotipo

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


$apiInstance = new NuvemFiscal\Api\EmpresaApi(
    // Se quiser usar um client http customizado, passe um client que implemente `GuzzleHttp\ClientInterface`.
    // Isso é opcional, `GuzzleHttp\Client` será usado por padrão.
    new GuzzleHttp\Client(),
    $config
);
$cpf_cnpj = 'cpf_cnpj_example'; // string | CPF ou CNPJ da empresa.  Utilize o valor sem máscara.

try {
    $result = $apiInstance->baixarLogotipoEmpresa($cpf_cnpj);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmpresaApi->baixarLogotipoEmpresa: ', $e->getMessage(), PHP_EOL;
}
```

### Parâmetros

| Nome | Tipo | Descrição  | Notas |
| ------------- | ------------- | ------------- | ------------- |
| **cpf_cnpj** | **string**| CPF ou CNPJ da empresa.  Utilize o valor sem máscara. | |

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

## `cadastrarCertificadoEmpresa()`

```php
cadastrarCertificadoEmpresa($cpf_cnpj, $body): \NuvemFiscal\Model\EmpresaCertificado
```

Cadastrar certificado

Cadastre ou atualize um certificado digital e vincule a sua empresa, para que possa iniciar a emissão de notas.  * No parâmetro `certificado`, envie o binário do certificado digital (.pfx ou .p12) codificado em **base64**.

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


$apiInstance = new NuvemFiscal\Api\EmpresaApi(
    // Se quiser usar um client http customizado, passe um client que implemente `GuzzleHttp\ClientInterface`.
    // Isso é opcional, `GuzzleHttp\Client` será usado por padrão.
    new GuzzleHttp\Client(),
    $config
);
$cpf_cnpj = 'cpf_cnpj_example'; // string | CPF ou CNPJ da empresa.  Utilize o valor sem máscara.
$body = new \NuvemFiscal\Model\EmpresaPedidoCadastroCertificado(); // \NuvemFiscal\Model\EmpresaPedidoCadastroCertificado

try {
    $result = $apiInstance->cadastrarCertificadoEmpresa($cpf_cnpj, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmpresaApi->cadastrarCertificadoEmpresa: ', $e->getMessage(), PHP_EOL;
}
```

### Parâmetros

| Nome | Tipo | Descrição  | Notas |
| ------------- | ------------- | ------------- | ------------- |
| **cpf_cnpj** | **string**| CPF ou CNPJ da empresa.  Utilize o valor sem máscara. | |
| **body** | [**\NuvemFiscal\Model\EmpresaPedidoCadastroCertificado**](../Model/EmpresaPedidoCadastroCertificado.md)|  | |

### Tipo do retorno

[**\NuvemFiscal\Model\EmpresaCertificado**](../Model/EmpresaCertificado.md)

### Autorização

[jwt](../../README.md#jwt), [oauth2](../../README.md#oauth2)

### Headers HTTP da requisição

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Voltar ao topo]](#) [[Back to API list]](../../README.md#endpoints)
[[Voltar à lista de DTOs]](../../README.md#models)
[[Voltar ao README]](../../README.md)

## `consultarCertificadoEmpresa()`

```php
consultarCertificadoEmpresa($cpf_cnpj): \NuvemFiscal\Model\EmpresaCertificado
```

Consultar certificado

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


$apiInstance = new NuvemFiscal\Api\EmpresaApi(
    // Se quiser usar um client http customizado, passe um client que implemente `GuzzleHttp\ClientInterface`.
    // Isso é opcional, `GuzzleHttp\Client` será usado por padrão.
    new GuzzleHttp\Client(),
    $config
);
$cpf_cnpj = 'cpf_cnpj_example'; // string | CPF ou CNPJ da empresa.  Utilize o valor sem máscara.

try {
    $result = $apiInstance->consultarCertificadoEmpresa($cpf_cnpj);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmpresaApi->consultarCertificadoEmpresa: ', $e->getMessage(), PHP_EOL;
}
```

### Parâmetros

| Nome | Tipo | Descrição  | Notas |
| ------------- | ------------- | ------------- | ------------- |
| **cpf_cnpj** | **string**| CPF ou CNPJ da empresa.  Utilize o valor sem máscara. | |

### Tipo do retorno

[**\NuvemFiscal\Model\EmpresaCertificado**](../Model/EmpresaCertificado.md)

### Autorização

[jwt](../../README.md#jwt), [oauth2](../../README.md#oauth2)

### Headers HTTP da requisição

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Voltar ao topo]](#) [[Back to API list]](../../README.md#endpoints)
[[Voltar à lista de DTOs]](../../README.md#models)
[[Voltar ao README]](../../README.md)

## `consultarConfigCte()`

```php
consultarConfigCte($cpf_cnpj): \NuvemFiscal\Model\EmpresaConfigCte
```

Consultar configuração de CT-e

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


$apiInstance = new NuvemFiscal\Api\EmpresaApi(
    // Se quiser usar um client http customizado, passe um client que implemente `GuzzleHttp\ClientInterface`.
    // Isso é opcional, `GuzzleHttp\Client` será usado por padrão.
    new GuzzleHttp\Client(),
    $config
);
$cpf_cnpj = 'cpf_cnpj_example'; // string | CPF ou CNPJ da empresa.  Utilize o valor sem máscara.

try {
    $result = $apiInstance->consultarConfigCte($cpf_cnpj);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmpresaApi->consultarConfigCte: ', $e->getMessage(), PHP_EOL;
}
```

### Parâmetros

| Nome | Tipo | Descrição  | Notas |
| ------------- | ------------- | ------------- | ------------- |
| **cpf_cnpj** | **string**| CPF ou CNPJ da empresa.  Utilize o valor sem máscara. | |

### Tipo do retorno

[**\NuvemFiscal\Model\EmpresaConfigCte**](../Model/EmpresaConfigCte.md)

### Autorização

[jwt](../../README.md#jwt), [oauth2](../../README.md#oauth2)

### Headers HTTP da requisição

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Voltar ao topo]](#) [[Back to API list]](../../README.md#endpoints)
[[Voltar à lista de DTOs]](../../README.md#models)
[[Voltar ao README]](../../README.md)

## `consultarConfigMdfe()`

```php
consultarConfigMdfe($cpf_cnpj): \NuvemFiscal\Model\EmpresaConfigMdfe
```

Consultar configuração de MDF-e

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


$apiInstance = new NuvemFiscal\Api\EmpresaApi(
    // Se quiser usar um client http customizado, passe um client que implemente `GuzzleHttp\ClientInterface`.
    // Isso é opcional, `GuzzleHttp\Client` será usado por padrão.
    new GuzzleHttp\Client(),
    $config
);
$cpf_cnpj = 'cpf_cnpj_example'; // string | CPF ou CNPJ da empresa.  Utilize o valor sem máscara.

try {
    $result = $apiInstance->consultarConfigMdfe($cpf_cnpj);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmpresaApi->consultarConfigMdfe: ', $e->getMessage(), PHP_EOL;
}
```

### Parâmetros

| Nome | Tipo | Descrição  | Notas |
| ------------- | ------------- | ------------- | ------------- |
| **cpf_cnpj** | **string**| CPF ou CNPJ da empresa.  Utilize o valor sem máscara. | |

### Tipo do retorno

[**\NuvemFiscal\Model\EmpresaConfigMdfe**](../Model/EmpresaConfigMdfe.md)

### Autorização

[jwt](../../README.md#jwt), [oauth2](../../README.md#oauth2)

### Headers HTTP da requisição

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Voltar ao topo]](#) [[Back to API list]](../../README.md#endpoints)
[[Voltar à lista de DTOs]](../../README.md#models)
[[Voltar ao README]](../../README.md)

## `consultarConfigNfce()`

```php
consultarConfigNfce($cpf_cnpj): \NuvemFiscal\Model\EmpresaConfigNfce
```

Consultar configuração de NFC-e

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


$apiInstance = new NuvemFiscal\Api\EmpresaApi(
    // Se quiser usar um client http customizado, passe um client que implemente `GuzzleHttp\ClientInterface`.
    // Isso é opcional, `GuzzleHttp\Client` será usado por padrão.
    new GuzzleHttp\Client(),
    $config
);
$cpf_cnpj = 'cpf_cnpj_example'; // string | CPF ou CNPJ da empresa.  Utilize o valor sem máscara.

try {
    $result = $apiInstance->consultarConfigNfce($cpf_cnpj);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmpresaApi->consultarConfigNfce: ', $e->getMessage(), PHP_EOL;
}
```

### Parâmetros

| Nome | Tipo | Descrição  | Notas |
| ------------- | ------------- | ------------- | ------------- |
| **cpf_cnpj** | **string**| CPF ou CNPJ da empresa.  Utilize o valor sem máscara. | |

### Tipo do retorno

[**\NuvemFiscal\Model\EmpresaConfigNfce**](../Model/EmpresaConfigNfce.md)

### Autorização

[jwt](../../README.md#jwt), [oauth2](../../README.md#oauth2)

### Headers HTTP da requisição

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Voltar ao topo]](#) [[Back to API list]](../../README.md#endpoints)
[[Voltar à lista de DTOs]](../../README.md#models)
[[Voltar ao README]](../../README.md)

## `consultarConfigNfe()`

```php
consultarConfigNfe($cpf_cnpj): \NuvemFiscal\Model\EmpresaConfigNfe
```

Consultar configuração de NF-e

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


$apiInstance = new NuvemFiscal\Api\EmpresaApi(
    // Se quiser usar um client http customizado, passe um client que implemente `GuzzleHttp\ClientInterface`.
    // Isso é opcional, `GuzzleHttp\Client` será usado por padrão.
    new GuzzleHttp\Client(),
    $config
);
$cpf_cnpj = 'cpf_cnpj_example'; // string | CPF ou CNPJ da empresa.  Utilize o valor sem máscara.

try {
    $result = $apiInstance->consultarConfigNfe($cpf_cnpj);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmpresaApi->consultarConfigNfe: ', $e->getMessage(), PHP_EOL;
}
```

### Parâmetros

| Nome | Tipo | Descrição  | Notas |
| ------------- | ------------- | ------------- | ------------- |
| **cpf_cnpj** | **string**| CPF ou CNPJ da empresa.  Utilize o valor sem máscara. | |

### Tipo do retorno

[**\NuvemFiscal\Model\EmpresaConfigNfe**](../Model/EmpresaConfigNfe.md)

### Autorização

[jwt](../../README.md#jwt), [oauth2](../../README.md#oauth2)

### Headers HTTP da requisição

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Voltar ao topo]](#) [[Back to API list]](../../README.md#endpoints)
[[Voltar à lista de DTOs]](../../README.md#models)
[[Voltar ao README]](../../README.md)

## `consultarConfigNfse()`

```php
consultarConfigNfse($cpf_cnpj): \NuvemFiscal\Model\EmpresaConfigNfse
```

Consultar configuração de NFS-e

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


$apiInstance = new NuvemFiscal\Api\EmpresaApi(
    // Se quiser usar um client http customizado, passe um client que implemente `GuzzleHttp\ClientInterface`.
    // Isso é opcional, `GuzzleHttp\Client` será usado por padrão.
    new GuzzleHttp\Client(),
    $config
);
$cpf_cnpj = 'cpf_cnpj_example'; // string | CPF ou CNPJ da empresa.  Utilize o valor sem máscara.

try {
    $result = $apiInstance->consultarConfigNfse($cpf_cnpj);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmpresaApi->consultarConfigNfse: ', $e->getMessage(), PHP_EOL;
}
```

### Parâmetros

| Nome | Tipo | Descrição  | Notas |
| ------------- | ------------- | ------------- | ------------- |
| **cpf_cnpj** | **string**| CPF ou CNPJ da empresa.  Utilize o valor sem máscara. | |

### Tipo do retorno

[**\NuvemFiscal\Model\EmpresaConfigNfse**](../Model/EmpresaConfigNfse.md)

### Autorização

[jwt](../../README.md#jwt), [oauth2](../../README.md#oauth2)

### Headers HTTP da requisição

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Voltar ao topo]](#) [[Back to API list]](../../README.md#endpoints)
[[Voltar à lista de DTOs]](../../README.md#models)
[[Voltar ao README]](../../README.md)

## `consultarEmpresa()`

```php
consultarEmpresa($cpf_cnpj): \NuvemFiscal\Model\Empresa
```

Consultar empresa

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


$apiInstance = new NuvemFiscal\Api\EmpresaApi(
    // Se quiser usar um client http customizado, passe um client que implemente `GuzzleHttp\ClientInterface`.
    // Isso é opcional, `GuzzleHttp\Client` será usado por padrão.
    new GuzzleHttp\Client(),
    $config
);
$cpf_cnpj = 'cpf_cnpj_example'; // string | CPF ou CNPJ da empresa.  Utilize o valor sem máscara.

try {
    $result = $apiInstance->consultarEmpresa($cpf_cnpj);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmpresaApi->consultarEmpresa: ', $e->getMessage(), PHP_EOL;
}
```

### Parâmetros

| Nome | Tipo | Descrição  | Notas |
| ------------- | ------------- | ------------- | ------------- |
| **cpf_cnpj** | **string**| CPF ou CNPJ da empresa.  Utilize o valor sem máscara. | |

### Tipo do retorno

[**\NuvemFiscal\Model\Empresa**](../Model/Empresa.md)

### Autorização

[jwt](../../README.md#jwt), [oauth2](../../README.md#oauth2)

### Headers HTTP da requisição

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Voltar ao topo]](#) [[Back to API list]](../../README.md#endpoints)
[[Voltar à lista de DTOs]](../../README.md#models)
[[Voltar ao README]](../../README.md)

## `criarEmpresa()`

```php
criarEmpresa($body): \NuvemFiscal\Model\Empresa
```

Cadastrar empresa

Cadastre uma nova empresa (emitente ou prestador) à sua conta.

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


$apiInstance = new NuvemFiscal\Api\EmpresaApi(
    // Se quiser usar um client http customizado, passe um client que implemente `GuzzleHttp\ClientInterface`.
    // Isso é opcional, `GuzzleHttp\Client` será usado por padrão.
    new GuzzleHttp\Client(),
    $config
);
$body = new \NuvemFiscal\Model\Empresa(); // \NuvemFiscal\Model\Empresa

try {
    $result = $apiInstance->criarEmpresa($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmpresaApi->criarEmpresa: ', $e->getMessage(), PHP_EOL;
}
```

### Parâmetros

| Nome | Tipo | Descrição  | Notas |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\NuvemFiscal\Model\Empresa**](../Model/Empresa.md)|  | |

### Tipo do retorno

[**\NuvemFiscal\Model\Empresa**](../Model/Empresa.md)

### Autorização

[jwt](../../README.md#jwt), [oauth2](../../README.md#oauth2)

### Headers HTTP da requisição

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Voltar ao topo]](#) [[Back to API list]](../../README.md#endpoints)
[[Voltar à lista de DTOs]](../../README.md#models)
[[Voltar ao README]](../../README.md)

## `enviarCertificadoEmpresa()`

```php
enviarCertificadoEmpresa($cpf_cnpj, $input): \NuvemFiscal\Model\EmpresaCertificado
```

Upload de certificado

Cadastre ou atualize um certificado digital e vincule a sua empresa, para que possa iniciar a emissão de notas.  * Utilize o `content-type` igual a `multipart/form-data`.  * No parâmetro `file`, envie o binário do arquivo (.pfx ou .p12) do certificado digital.  * No parâmetro `password`, envie a senha do certificado.

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


$apiInstance = new NuvemFiscal\Api\EmpresaApi(
    // Se quiser usar um client http customizado, passe um client que implemente `GuzzleHttp\ClientInterface`.
    // Isso é opcional, `GuzzleHttp\Client` será usado por padrão.
    new GuzzleHttp\Client(),
    $config
);
$cpf_cnpj = 'cpf_cnpj_example'; // string | CPF ou CNPJ da empresa.  Utilize o valor sem máscara.
$input = "/path/to/file.txt"; // \SplFileObject

try {
    $result = $apiInstance->enviarCertificadoEmpresa($cpf_cnpj, $input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmpresaApi->enviarCertificadoEmpresa: ', $e->getMessage(), PHP_EOL;
}
```

### Parâmetros

| Nome | Tipo | Descrição  | Notas |
| ------------- | ------------- | ------------- | ------------- |
| **cpf_cnpj** | **string**| CPF ou CNPJ da empresa.  Utilize o valor sem máscara. | |
| **input** | **\SplFileObject****\SplFileObject**|  | [optional] |

### Tipo do retorno

[**\NuvemFiscal\Model\EmpresaCertificado**](../Model/EmpresaCertificado.md)

### Autorização

[jwt](../../README.md#jwt), [oauth2](../../README.md#oauth2)

### Headers HTTP da requisição

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Voltar ao topo]](#) [[Back to API list]](../../README.md#endpoints)
[[Voltar à lista de DTOs]](../../README.md#models)
[[Voltar ao README]](../../README.md)

## `enviarLogotipoEmpresa()`

```php
enviarLogotipoEmpresa($cpf_cnpj, $input)
```

Enviar logotipo

Cadastre ou atualize um logotipo e vincule a sua empresa.    **Restrições:**  * Tipos de mídia (MIME) suportados: `image/png` e `image/jpeg`  * Tamanho máximo do arquivo: 200 KB    **Cenários de uso:**  * Quero que minhas notas sejam impressas com esse logotipo.  * Quero trocar o logotipo utilizado em minhas impressões.

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


$apiInstance = new NuvemFiscal\Api\EmpresaApi(
    // Se quiser usar um client http customizado, passe um client que implemente `GuzzleHttp\ClientInterface`.
    // Isso é opcional, `GuzzleHttp\Client` será usado por padrão.
    new GuzzleHttp\Client(),
    $config
);
$cpf_cnpj = 'cpf_cnpj_example'; // string | CPF ou CNPJ da empresa.  Utilize o valor sem máscara.
$input = "/path/to/file.txt"; // \SplFileObject

try {
    $apiInstance->enviarLogotipoEmpresa($cpf_cnpj, $input);
} catch (Exception $e) {
    echo 'Exception when calling EmpresaApi->enviarLogotipoEmpresa: ', $e->getMessage(), PHP_EOL;
}
```

### Parâmetros

| Nome | Tipo | Descrição  | Notas |
| ------------- | ------------- | ------------- | ------------- |
| **cpf_cnpj** | **string**| CPF ou CNPJ da empresa.  Utilize o valor sem máscara. | |
| **input** | **\SplFileObject****\SplFileObject**|  | [optional] |

### Tipo do retorno

void (empty response body)

### Autorização

[jwt](../../README.md#jwt), [oauth2](../../README.md#oauth2)

### Headers HTTP da requisição

- **Content-Type**: `multipart/form-data`
- **Accept**: Not defined

[[Voltar ao topo]](#) [[Back to API list]](../../README.md#endpoints)
[[Voltar à lista de DTOs]](../../README.md#models)
[[Voltar ao README]](../../README.md)

## `excluirCertificadoEmpresa()`

```php
excluirCertificadoEmpresa($cpf_cnpj)
```

Deletar certificado

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


$apiInstance = new NuvemFiscal\Api\EmpresaApi(
    // Se quiser usar um client http customizado, passe um client que implemente `GuzzleHttp\ClientInterface`.
    // Isso é opcional, `GuzzleHttp\Client` será usado por padrão.
    new GuzzleHttp\Client(),
    $config
);
$cpf_cnpj = 'cpf_cnpj_example'; // string | CPF ou CNPJ da empresa.  Utilize o valor sem máscara.

try {
    $apiInstance->excluirCertificadoEmpresa($cpf_cnpj);
} catch (Exception $e) {
    echo 'Exception when calling EmpresaApi->excluirCertificadoEmpresa: ', $e->getMessage(), PHP_EOL;
}
```

### Parâmetros

| Nome | Tipo | Descrição  | Notas |
| ------------- | ------------- | ------------- | ------------- |
| **cpf_cnpj** | **string**| CPF ou CNPJ da empresa.  Utilize o valor sem máscara. | |

### Tipo do retorno

void (empty response body)

### Autorização

[jwt](../../README.md#jwt), [oauth2](../../README.md#oauth2)

### Headers HTTP da requisição

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Voltar ao topo]](#) [[Back to API list]](../../README.md#endpoints)
[[Voltar à lista de DTOs]](../../README.md#models)
[[Voltar ao README]](../../README.md)

## `excluirEmpresa()`

```php
excluirEmpresa($cpf_cnpj)
```

Deletar empresa

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


$apiInstance = new NuvemFiscal\Api\EmpresaApi(
    // Se quiser usar um client http customizado, passe um client que implemente `GuzzleHttp\ClientInterface`.
    // Isso é opcional, `GuzzleHttp\Client` será usado por padrão.
    new GuzzleHttp\Client(),
    $config
);
$cpf_cnpj = 'cpf_cnpj_example'; // string | CPF ou CNPJ da empresa.  Utilize o valor sem máscara.

try {
    $apiInstance->excluirEmpresa($cpf_cnpj);
} catch (Exception $e) {
    echo 'Exception when calling EmpresaApi->excluirEmpresa: ', $e->getMessage(), PHP_EOL;
}
```

### Parâmetros

| Nome | Tipo | Descrição  | Notas |
| ------------- | ------------- | ------------- | ------------- |
| **cpf_cnpj** | **string**| CPF ou CNPJ da empresa.  Utilize o valor sem máscara. | |

### Tipo do retorno

void (empty response body)

### Autorização

[jwt](../../README.md#jwt), [oauth2](../../README.md#oauth2)

### Headers HTTP da requisição

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Voltar ao topo]](#) [[Back to API list]](../../README.md#endpoints)
[[Voltar à lista de DTOs]](../../README.md#models)
[[Voltar ao README]](../../README.md)

## `excluirLogotipoEmpresa()`

```php
excluirLogotipoEmpresa($cpf_cnpj)
```

Deletar logotipo

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


$apiInstance = new NuvemFiscal\Api\EmpresaApi(
    // Se quiser usar um client http customizado, passe um client que implemente `GuzzleHttp\ClientInterface`.
    // Isso é opcional, `GuzzleHttp\Client` será usado por padrão.
    new GuzzleHttp\Client(),
    $config
);
$cpf_cnpj = 'cpf_cnpj_example'; // string | CPF ou CNPJ da empresa.  Utilize o valor sem máscara.

try {
    $apiInstance->excluirLogotipoEmpresa($cpf_cnpj);
} catch (Exception $e) {
    echo 'Exception when calling EmpresaApi->excluirLogotipoEmpresa: ', $e->getMessage(), PHP_EOL;
}
```

### Parâmetros

| Nome | Tipo | Descrição  | Notas |
| ------------- | ------------- | ------------- | ------------- |
| **cpf_cnpj** | **string**| CPF ou CNPJ da empresa.  Utilize o valor sem máscara. | |

### Tipo do retorno

void (empty response body)

### Autorização

[jwt](../../README.md#jwt), [oauth2](../../README.md#oauth2)

### Headers HTTP da requisição

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Voltar ao topo]](#) [[Back to API list]](../../README.md#endpoints)
[[Voltar à lista de DTOs]](../../README.md#models)
[[Voltar ao README]](../../README.md)

## `listarEmpresas()`

```php
listarEmpresas($top, $skip, $inlinecount, $cpf_cnpj): \NuvemFiscal\Model\EmpresaListagem
```

Listar empresas

Retorna a lista das empresas associadas à sua conta. As empresas são retornadas ordenadas pela data da criação, com as mais recentes aparecendo primeiro.

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


$apiInstance = new NuvemFiscal\Api\EmpresaApi(
    // Se quiser usar um client http customizado, passe um client que implemente `GuzzleHttp\ClientInterface`.
    // Isso é opcional, `GuzzleHttp\Client` será usado por padrão.
    new GuzzleHttp\Client(),
    $config
);
$top = 10; // int | Limite no número de objetos a serem retornados pela API, entre 1 e 100.
$skip = 0; // int | Quantidade de objetos que serão ignorados antes da lista começar a ser retornada.
$inlinecount = false; // bool | Inclui no JSON de resposta, na propriedade `@count`, o número total de registros que o filtro retornaria, independente dos filtros de paginação.
$cpf_cnpj = 'cpf_cnpj_example'; // string | Filtrar pelo CPF ou CNPJ da empresa.    *Utilize o valor sem máscara*.

try {
    $result = $apiInstance->listarEmpresas($top, $skip, $inlinecount, $cpf_cnpj);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmpresaApi->listarEmpresas: ', $e->getMessage(), PHP_EOL;
}
```

### Parâmetros

| Nome | Tipo | Descrição  | Notas |
| ------------- | ------------- | ------------- | ------------- |
| **top** | **int**| Limite no número de objetos a serem retornados pela API, entre 1 e 100. | [optional] [default to 10] |
| **skip** | **int**| Quantidade de objetos que serão ignorados antes da lista começar a ser retornada. | [optional] [default to 0] |
| **inlinecount** | **bool**| Inclui no JSON de resposta, na propriedade &#x60;@count&#x60;, o número total de registros que o filtro retornaria, independente dos filtros de paginação. | [optional] [default to false] |
| **cpf_cnpj** | **string**| Filtrar pelo CPF ou CNPJ da empresa.    *Utilize o valor sem máscara*. | [optional] |

### Tipo do retorno

[**\NuvemFiscal\Model\EmpresaListagem**](../Model/EmpresaListagem.md)

### Autorização

[jwt](../../README.md#jwt), [oauth2](../../README.md#oauth2)

### Headers HTTP da requisição

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Voltar ao topo]](#) [[Back to API list]](../../README.md#endpoints)
[[Voltar à lista de DTOs]](../../README.md#models)
[[Voltar ao README]](../../README.md)
