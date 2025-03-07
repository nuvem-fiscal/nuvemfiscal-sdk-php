# NuvemFiscal\EmailApi

Todas as URIs relativas a https://api.nuvemfiscal.com.br, exceto se a operação definir outra URI base.

| Método | Endpoint | Descrição |
| ------------- | ------------- | ------------- |
| [**consultarEmail()**](EmailApi.md#consultarEmail) | **GET** /emails/{id} | Consultar e-mail |
| [**listarEmails()**](EmailApi.md#listarEmails) | **GET** /emails | Listar e-mails |


## `consultarEmail()`

```php
consultarEmail($id): \NuvemFiscal\Model\Email
```

Consultar e-mail

Obtém informações detalhadas sobre o envio de um email. Este endpoint  permite rastrear todos os eventos relacionados ao email, como envio,  entrega, falhas e outros eventos relevantes.    Com este endpoint, é possível ter uma visão completa do ciclo de vida  de um email enviado, permitindo que os usuários acompanhem e analisem  o status e o histórico de eventos do email. Isso é particularmente  útil para identificar problemas de entrega e entender o comportamento  do email ao longo do tempo.

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


$apiInstance = new NuvemFiscal\Api\EmailApi(
    // Se quiser usar um client http customizado, passe um client que implemente `GuzzleHttp\ClientInterface`.
    // Isso é opcional, `GuzzleHttp\Client` será usado por padrão.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID único do e-mail.    Esse parâmetro é obtido após o envio do email por qualquer endpoint da  API da Nuvem Fiscal que realize disparos de email.    Exemplos:  * <a href=\"#tag/Nfe/operation/EnviarEmailNfe\">Envio de XML e PDF de NF-e</a>.  * <a href=\"#tag/Nfce/operation/EnviarEmailNfce\">Envio de XML e PDF de NFC-e</a>.

try {
    $result = $apiInstance->consultarEmail($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->consultarEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parâmetros

| Nome | Tipo | Descrição  | Notas |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID único do e-mail.    Esse parâmetro é obtido após o envio do email por qualquer endpoint da  API da Nuvem Fiscal que realize disparos de email.    Exemplos:  * &lt;a href&#x3D;\&quot;#tag/Nfe/operation/EnviarEmailNfe\&quot;&gt;Envio de XML e PDF de NF-e&lt;/a&gt;.  * &lt;a href&#x3D;\&quot;#tag/Nfce/operation/EnviarEmailNfce\&quot;&gt;Envio de XML e PDF de NFC-e&lt;/a&gt;. | |

### Tipo do retorno

[**\NuvemFiscal\Model\Email**](../Model/Email.md)

### Autorização

[jwt](../../README.md#jwt), [oauth2](../../README.md#oauth2)

### Headers HTTP da requisição

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Voltar ao topo]](#) [[Back to API list]](../../README.md#endpoints)
[[Voltar à lista de DTOs]](../../README.md#models)
[[Voltar ao README]](../../README.md)

## `listarEmails()`

```php
listarEmails($cpf_cnpj, $top, $skip, $inlinecount, $undelivered, $email): \NuvemFiscal\Model\EmailListagem
```

Listar e-mails

Retorna a lista dos emails associadas à sua conta. Os e-emails são  retornados ordenados pela data da criação, com os mais recentes  aparecendo primeiro.

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


$apiInstance = new NuvemFiscal\Api\EmailApi(
    // Se quiser usar um client http customizado, passe um client que implemente `GuzzleHttp\ClientInterface`.
    // Isso é opcional, `GuzzleHttp\Client` será usado por padrão.
    new GuzzleHttp\Client(),
    $config
);
$cpf_cnpj = 'cpf_cnpj_example'; // string | Filtra pelo CPF ou CNPJ da empresa.    *Utilize o valor sem máscara*.
$top = 10; // int | Limite no número de objetos a serem retornados pela API, entre 1 e 100.
$skip = 0; // int | Quantidade de objetos que serão ignorados antes da lista começar a ser retornada.
$inlinecount = false; // bool | Inclui no JSON de resposta, na propriedade `@count`, o número total de registros que o filtro retornaria, independente dos filtros de paginação.
$undelivered = True; // bool | Filtra apenas emails com problemas de entrega.
$email = 'email_example'; // string | Filtra pelo endereço de e-mail do destinatário para qual o email foi enviado.

try {
    $result = $apiInstance->listarEmails($cpf_cnpj, $top, $skip, $inlinecount, $undelivered, $email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->listarEmails: ', $e->getMessage(), PHP_EOL;
}
```

### Parâmetros

| Nome | Tipo | Descrição  | Notas |
| ------------- | ------------- | ------------- | ------------- |
| **cpf_cnpj** | **string**| Filtra pelo CPF ou CNPJ da empresa.    *Utilize o valor sem máscara*. | |
| **top** | **int**| Limite no número de objetos a serem retornados pela API, entre 1 e 100. | [optional] [default to 10] |
| **skip** | **int**| Quantidade de objetos que serão ignorados antes da lista começar a ser retornada. | [optional] [default to 0] |
| **inlinecount** | **bool**| Inclui no JSON de resposta, na propriedade &#x60;@count&#x60;, o número total de registros que o filtro retornaria, independente dos filtros de paginação. | [optional] [default to false] |
| **undelivered** | **bool**| Filtra apenas emails com problemas de entrega. | [optional] |
| **email** | **string**| Filtra pelo endereço de e-mail do destinatário para qual o email foi enviado. | [optional] |

### Tipo do retorno

[**\NuvemFiscal\Model\EmailListagem**](../Model/EmailListagem.md)

### Autorização

[jwt](../../README.md#jwt), [oauth2](../../README.md#oauth2)

### Headers HTTP da requisição

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Voltar ao topo]](#) [[Back to API list]](../../README.md#endpoints)
[[Voltar à lista de DTOs]](../../README.md#models)
[[Voltar ao README]](../../README.md)
