# Nuvem Fiscal: SDK para PHP

Biblioteca para uso da API da [Nuvem Fiscal](https://www.nuvemfiscal.com.br) com [PHP](https://www.php.net). 
Consultar também a [documentação oficial da Nuvem Fiscal](https://dev.nuvemfiscal.com.br/docs).

## Instalação e uso

### Requisitos

PHP 7.4 ou posterior.

### Composer

Para instalar os bindings via [Composer](https://getcomposer.org/), adicione o seguinte ao `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/nuvem-fiscal/nuvemfiscal-sdk-php.git"
    }
  ],
  "require": {
    "nuvem-fiscal/nuvemfiscal-sdk-php": "*@dev"
  }
}
```

Então execute `composer install`

### Instalação manual

Baixe os arquivos e inclue o `autoload.php`:

```php
<?php
require_once('/path/to/NuvemFiscal/vendor/autoload.php');
```

## Guia rápido

Siga os [passos para instalação](#installation--usage) e então execute o seguinte:

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

## Endpoints da API

Todas as URIs são relativas a *https://api.nuvemfiscal.com.br*

Classe | Método | Endpoint | Descrição
------------ | ------------- | ------------- | -------------
*CepApi* | [**consultarCep**](docs/Api/CepApi.md#consultarcep) | **GET** /cep/{Cep} | Consultar endereço através do CEP
*CnpjApi* | [**consultarCnpj**](docs/Api/CnpjApi.md#consultarcnpj) | **GET** /cnpj/{Cnpj} | Consultar dados do CNPJ
*CnpjApi* | [**listarCnpj**](docs/Api/CnpjApi.md#listarcnpj) | **GET** /cnpj | Listar estabelecimentos ativos a partir da base de CNPJ
*ContaApi* | [**consultarCotaConta**](docs/Api/ContaApi.md#consultarcotaconta) | **GET** /conta/cotas/{nome} | Consultar o limite de uso e o consumo de uma cota específica.
*ContaApi* | [**listarCotasConta**](docs/Api/ContaApi.md#listarcotasconta) | **GET** /conta/cotas | Consultar os limites de uso e consumo de todas as cotas existentes.
*CteApi* | [**baixarPdfCancelamentoCte**](docs/Api/CteApi.md#baixarpdfcancelamentocte) | **GET** /cte/{id}/cancelamento/pdf | Baixar PDF do cancelamento
*CteApi* | [**baixarPdfCartaCorrecaoCte**](docs/Api/CteApi.md#baixarpdfcartacorrecaocte) | **GET** /cte/{id}/carta-correcao/pdf | Baixar PDF da carta de correção
*CteApi* | [**baixarPdfCte**](docs/Api/CteApi.md#baixarpdfcte) | **GET** /cte/{id}/pdf | Baixar PDF do DACTE
*CteApi* | [**baixarPdfEventoCte**](docs/Api/CteApi.md#baixarpdfeventocte) | **GET** /cte/eventos/{id}/pdf | Baixar PDF do evento
*CteApi* | [**baixarPdfInutilizacaoCte**](docs/Api/CteApi.md#baixarpdfinutilizacaocte) | **GET** /cte/inutilizacoes/{id}/pdf | Baixar PDF da inutilização
*CteApi* | [**baixarXmlCancelamentoCte**](docs/Api/CteApi.md#baixarxmlcancelamentocte) | **GET** /cte/{id}/cancelamento/xml | Baixar XML do cancelamento
*CteApi* | [**baixarXmlCartaCorrecaoCte**](docs/Api/CteApi.md#baixarxmlcartacorrecaocte) | **GET** /cte/{id}/carta-correcao/xml | Baixar XML da carta de correção
*CteApi* | [**baixarXmlCte**](docs/Api/CteApi.md#baixarxmlcte) | **GET** /cte/{id}/xml | Baixar XML do CT-e processado
*CteApi* | [**baixarXmlEventoCte**](docs/Api/CteApi.md#baixarxmleventocte) | **GET** /cte/eventos/{id}/xml | Baixar XML do evento
*CteApi* | [**baixarXmlInutilizacaoCte**](docs/Api/CteApi.md#baixarxmlinutilizacaocte) | **GET** /cte/inutilizacoes/{id}/xml | Baixar XML da inutilização
*CteApi* | [**cancelarCte**](docs/Api/CteApi.md#cancelarcte) | **POST** /cte/{id}/cancelamento | Cancelar um CT-e autorizado
*CteApi* | [**consultarCancelamentoCte**](docs/Api/CteApi.md#consultarcancelamentocte) | **GET** /cte/{id}/cancelamento | Consultar o cancelamento do CT-e
*CteApi* | [**consultarCartaCorrecaoCte**](docs/Api/CteApi.md#consultarcartacorrecaocte) | **GET** /cte/{id}/carta-correcao | Consultar a solicitação de correção do CT-e
*CteApi* | [**consultarCte**](docs/Api/CteApi.md#consultarcte) | **GET** /cte/{id} | Consultar CT-e
*CteApi* | [**consultarEventoCte**](docs/Api/CteApi.md#consultareventocte) | **GET** /cte/eventos/{id} | Consultar evento
*CteApi* | [**consultarInutilizacaoCte**](docs/Api/CteApi.md#consultarinutilizacaocte) | **GET** /cte/inutilizacoes/{id} | Consultar a inutilização de sequência de numeração
*CteApi* | [**consultarLoteCte**](docs/Api/CteApi.md#consultarlotecte) | **GET** /cte/lotes/{id} | Consultar lote de CT-e
*CteApi* | [**consultarStatusSefazCte**](docs/Api/CteApi.md#consultarstatussefazcte) | **GET** /cte/sefaz/status | Consulta do Status do Serviço na SEFAZ Autorizadora
*CteApi* | [**criarCartaCorrecaoCte**](docs/Api/CteApi.md#criarcartacorrecaocte) | **POST** /cte/{id}/carta-correcao | Solicitar correção do CT-e
*CteApi* | [**emitirCte**](docs/Api/CteApi.md#emitircte) | **POST** /cte | Emitir CT-e
*CteApi* | [**emitirLoteCte**](docs/Api/CteApi.md#emitirlotecte) | **POST** /cte/lotes | Emitir lote de CT-e
*CteApi* | [**inutilizarNumeracaoCte**](docs/Api/CteApi.md#inutilizarnumeracaocte) | **POST** /cte/inutilizacoes | Inutilizar uma sequência de numeração de CT-e
*CteApi* | [**listarCte**](docs/Api/CteApi.md#listarcte) | **GET** /cte | Listar CT-e
*CteApi* | [**listarLotesCte**](docs/Api/CteApi.md#listarlotescte) | **GET** /cte/lotes | Listar lotes de CT-e
*EmpresaApi* | [**alterarConfigCte**](docs/Api/EmpresaApi.md#alterarconfigcte) | **PUT** /empresas/{cpf_cnpj}/cte | Alterar configuração de CT-e
*EmpresaApi* | [**alterarConfigMdfe**](docs/Api/EmpresaApi.md#alterarconfigmdfe) | **PUT** /empresas/{cpf_cnpj}/mdfe | Alterar configuração de MDF-e
*EmpresaApi* | [**alterarConfigNfce**](docs/Api/EmpresaApi.md#alterarconfignfce) | **PUT** /empresas/{cpf_cnpj}/nfce | Alterar configuração de NFC-e
*EmpresaApi* | [**alterarConfigNfe**](docs/Api/EmpresaApi.md#alterarconfignfe) | **PUT** /empresas/{cpf_cnpj}/nfe | Alterar configuração de NF-e
*EmpresaApi* | [**alterarConfigNfse**](docs/Api/EmpresaApi.md#alterarconfignfse) | **PUT** /empresas/{cpf_cnpj}/nfse | Alterar configuração de NFS-e
*EmpresaApi* | [**atualizarEmpresa**](docs/Api/EmpresaApi.md#atualizarempresa) | **PUT** /empresas/{cpf_cnpj} | Alterar empresa
*EmpresaApi* | [**cadastrarCertificadoEmpresa**](docs/Api/EmpresaApi.md#cadastrarcertificadoempresa) | **PUT** /empresas/{cpf_cnpj}/certificado | Cadastrar certificado
*EmpresaApi* | [**consultarCertificadoEmpresa**](docs/Api/EmpresaApi.md#consultarcertificadoempresa) | **GET** /empresas/{cpf_cnpj}/certificado | Consultar certificado
*EmpresaApi* | [**consultarConfigCte**](docs/Api/EmpresaApi.md#consultarconfigcte) | **GET** /empresas/{cpf_cnpj}/cte | Consultar configuração de CT-e
*EmpresaApi* | [**consultarConfigMdfe**](docs/Api/EmpresaApi.md#consultarconfigmdfe) | **GET** /empresas/{cpf_cnpj}/mdfe | Consultar configuração de MDF-e
*EmpresaApi* | [**consultarConfigNfce**](docs/Api/EmpresaApi.md#consultarconfignfce) | **GET** /empresas/{cpf_cnpj}/nfce | Consultar configuração de NFC-e
*EmpresaApi* | [**consultarConfigNfe**](docs/Api/EmpresaApi.md#consultarconfignfe) | **GET** /empresas/{cpf_cnpj}/nfe | Consultar configuração de NF-e
*EmpresaApi* | [**consultarConfigNfse**](docs/Api/EmpresaApi.md#consultarconfignfse) | **GET** /empresas/{cpf_cnpj}/nfse | Consultar configuração de NFS-e
*EmpresaApi* | [**consultarEmpresa**](docs/Api/EmpresaApi.md#consultarempresa) | **GET** /empresas/{cpf_cnpj} | Consultar empresa
*EmpresaApi* | [**criarEmpresa**](docs/Api/EmpresaApi.md#criarempresa) | **POST** /empresas | Cadastrar empresa
*EmpresaApi* | [**enviarCertificadoEmpresa**](docs/Api/EmpresaApi.md#enviarcertificadoempresa) | **PUT** /empresas/{cpf_cnpj}/certificado/upload | Upload de certificado
*EmpresaApi* | [**excluirCertificadoEmpresa**](docs/Api/EmpresaApi.md#excluircertificadoempresa) | **DELETE** /empresas/{cpf_cnpj}/certificado | Deletar certificado
*EmpresaApi* | [**excluirEmpresa**](docs/Api/EmpresaApi.md#excluirempresa) | **DELETE** /empresas/{cpf_cnpj} | Deletar empresa
*EmpresaApi* | [**listarEmpresas**](docs/Api/EmpresaApi.md#listarempresas) | **GET** /empresas | Listar empresas
*MdfeApi* | [**baixarPdfCancelamentoMdfe**](docs/Api/MdfeApi.md#baixarpdfcancelamentomdfe) | **GET** /mdfe/{id}/cancelamento/pdf | Baixar PDF do cancelamento
*MdfeApi* | [**baixarPdfEncerramentoMdfe**](docs/Api/MdfeApi.md#baixarpdfencerramentomdfe) | **GET** /mdfe/{id}/encerramento/pdf | Baixar PDF do encerramento
*MdfeApi* | [**baixarPdfEventoMdfe**](docs/Api/MdfeApi.md#baixarpdfeventomdfe) | **GET** /mdfe/eventos/{id}/pdf | Baixar PDF do evento
*MdfeApi* | [**baixarPdfMdfe**](docs/Api/MdfeApi.md#baixarpdfmdfe) | **GET** /mdfe/{id}/pdf | Baixar PDF do DAMDFE
*MdfeApi* | [**baixarXmlCancelamentoMdfe**](docs/Api/MdfeApi.md#baixarxmlcancelamentomdfe) | **GET** /mdfe/{id}/cancelamento/xml | Baixar XML do cancelamento
*MdfeApi* | [**baixarXmlEncerramentoMdfe**](docs/Api/MdfeApi.md#baixarxmlencerramentomdfe) | **GET** /mdfe/{id}/encerramento/xml | Baixar XML do encerramento
*MdfeApi* | [**baixarXmlEventoMdfe**](docs/Api/MdfeApi.md#baixarxmleventomdfe) | **GET** /mdfe/eventos/{id}/xml | Baixar XML do evento
*MdfeApi* | [**baixarXmlMdfe**](docs/Api/MdfeApi.md#baixarxmlmdfe) | **GET** /mdfe/{id}/xml | Baixar XML do MDF-e processado
*MdfeApi* | [**cancelarMdfe**](docs/Api/MdfeApi.md#cancelarmdfe) | **POST** /mdfe/{id}/cancelamento | Cancelar um MDF-e autorizado
*MdfeApi* | [**consultarCancelamentoMdfe**](docs/Api/MdfeApi.md#consultarcancelamentomdfe) | **GET** /mdfe/{id}/cancelamento | Consultar o cancelamento do MDF-e
*MdfeApi* | [**consultarEncerramentoMdfe**](docs/Api/MdfeApi.md#consultarencerramentomdfe) | **GET** /mdfe/{id}/encerramento | Consultar encerramento do MDF-e
*MdfeApi* | [**consultarEventoMdfe**](docs/Api/MdfeApi.md#consultareventomdfe) | **GET** /mdfe/eventos/{id} | Consultar evento do MDF-e
*MdfeApi* | [**consultarLoteMdfe**](docs/Api/MdfeApi.md#consultarlotemdfe) | **GET** /mdfe/lotes/{id} | Consultar lote de MDF-e
*MdfeApi* | [**consultarMdfe**](docs/Api/MdfeApi.md#consultarmdfe) | **GET** /mdfe/{id} | Consultar manifesto
*MdfeApi* | [**consultarStatusSefazMdfe**](docs/Api/MdfeApi.md#consultarstatussefazmdfe) | **GET** /mdfe/sefaz/status | Consulta do Status do Serviço na SEFAZ Autorizadora
*MdfeApi* | [**emitirLoteMdfe**](docs/Api/MdfeApi.md#emitirlotemdfe) | **POST** /mdfe/lotes | Emitir lote de MDF-e
*MdfeApi* | [**emitirMdfe**](docs/Api/MdfeApi.md#emitirmdfe) | **POST** /mdfe | Emitir MDF-e
*MdfeApi* | [**encerrarMdfe**](docs/Api/MdfeApi.md#encerrarmdfe) | **POST** /mdfe/{id}/encerramento | Encerrar um MDF-e autorizado
*MdfeApi* | [**incluirCondutorMdfe**](docs/Api/MdfeApi.md#incluircondutormdfe) | **POST** /mdfe/{id}/inclusao-condutor | Incluir um condutor em um MDF-e autorizado
*MdfeApi* | [**incluirDfeMdfe**](docs/Api/MdfeApi.md#incluirdfemdfe) | **POST** /mdfe/{id}/inclusao-dfe | Incluir um DF-e em um MDF-e autorizado
*MdfeApi* | [**listarLotesMdfe**](docs/Api/MdfeApi.md#listarlotesmdfe) | **GET** /mdfe/lotes | Listar lotes de MDF-e
*MdfeApi* | [**listarMdfe**](docs/Api/MdfeApi.md#listarmdfe) | **GET** /mdfe | Listar MDF-e
*NfceApi* | [**baixarEscPosNfce**](docs/Api/NfceApi.md#baixarescposnfce) | **GET** /nfce/{id}/escpos | Comandos ESC/POS para impressão do DANFCE
*NfceApi* | [**baixarPdfCancelamentoNfce**](docs/Api/NfceApi.md#baixarpdfcancelamentonfce) | **GET** /nfce/{id}/cancelamento/pdf | Baixar PDF do cancelamento
*NfceApi* | [**baixarPdfEventoNfce**](docs/Api/NfceApi.md#baixarpdfeventonfce) | **GET** /nfce/eventos/{id}/pdf | Baixar PDF do evento
*NfceApi* | [**baixarPdfInutilizacaoNfce**](docs/Api/NfceApi.md#baixarpdfinutilizacaonfce) | **GET** /nfce/inutilizacoes/{id}/pdf | Baixar PDF da inutilização
*NfceApi* | [**baixarPdfNfce**](docs/Api/NfceApi.md#baixarpdfnfce) | **GET** /nfce/{id}/pdf | Baixar PDF do DANFCE
*NfceApi* | [**baixarXmlCancelamentoNfce**](docs/Api/NfceApi.md#baixarxmlcancelamentonfce) | **GET** /nfce/{id}/cancelamento/xml | Baixar XML do cancelamento
*NfceApi* | [**baixarXmlEventoNfce**](docs/Api/NfceApi.md#baixarxmleventonfce) | **GET** /nfce/eventos/{id}/xml | Baixar XML do evento
*NfceApi* | [**baixarXmlInutilizacaoNfce**](docs/Api/NfceApi.md#baixarxmlinutilizacaonfce) | **GET** /nfce/inutilizacoes/{id}/xml | Baixar XML da inutilização
*NfceApi* | [**baixarXmlNfce**](docs/Api/NfceApi.md#baixarxmlnfce) | **GET** /nfce/{id}/xml | Baixar XML da NFC-e processada
*NfceApi* | [**baixarXmlNfceNota**](docs/Api/NfceApi.md#baixarxmlnfcenota) | **GET** /nfce/{id}/xml/nota | Baixar XML da NFC-e
*NfceApi* | [**baixarXmlNfceProtocolo**](docs/Api/NfceApi.md#baixarxmlnfceprotocolo) | **GET** /nfce/{id}/xml/protocolo | Baixar XML do Protocolo da SEFAZ
*NfceApi* | [**cancelarNfce**](docs/Api/NfceApi.md#cancelarnfce) | **POST** /nfce/{id}/cancelamento | Cancelar uma NFC-e autorizada
*NfceApi* | [**consultarCancelamentoNfce**](docs/Api/NfceApi.md#consultarcancelamentonfce) | **GET** /nfce/{id}/cancelamento | Consultar o cancelamento da NFC-e
*NfceApi* | [**consultarEventoNfce**](docs/Api/NfceApi.md#consultareventonfce) | **GET** /nfce/eventos/{id} | Consultar evento
*NfceApi* | [**consultarInutilizacaoNfce**](docs/Api/NfceApi.md#consultarinutilizacaonfce) | **GET** /nfce/inutilizacoes/{id} | Consultar a inutilização de sequência de numeração
*NfceApi* | [**consultarLoteNfce**](docs/Api/NfceApi.md#consultarlotenfce) | **GET** /nfce/lotes/{id} | Consultar lote de NFC-e
*NfceApi* | [**consultarNfce**](docs/Api/NfceApi.md#consultarnfce) | **GET** /nfce/{id} | Consultar NFC-e
*NfceApi* | [**consultarStatusSefazNfce**](docs/Api/NfceApi.md#consultarstatussefaznfce) | **GET** /nfce/sefaz/status | Consulta do Status do Serviço na SEFAZ Autorizadora
*NfceApi* | [**emitirLoteNfce**](docs/Api/NfceApi.md#emitirlotenfce) | **POST** /nfce/lotes | Emitir lote de NFC-e
*NfceApi* | [**emitirNfce**](docs/Api/NfceApi.md#emitirnfce) | **POST** /nfce | Emitir NFC-e
*NfceApi* | [**inutilizarNumeracaoNfce**](docs/Api/NfceApi.md#inutilizarnumeracaonfce) | **POST** /nfce/inutilizacoes | Inutilizar uma sequência de numeração de NFC-e
*NfceApi* | [**listarEventosNfce**](docs/Api/NfceApi.md#listareventosnfce) | **GET** /nfce/eventos | Listar eventos
*NfceApi* | [**listarLotesNfce**](docs/Api/NfceApi.md#listarlotesnfce) | **GET** /nfce/lotes | Listar lotes de NFC-e
*NfceApi* | [**listarNfce**](docs/Api/NfceApi.md#listarnfce) | **GET** /nfce | Listar NFC-e
*NfceApi* | [**sincronizarNfce**](docs/Api/NfceApi.md#sincronizarnfce) | **POST** /nfce/{id}/sincronizar | Sincroniza dados na NFC-e a partir da SEFAZ
*NfeApi* | [**baixarPdfCancelamentoNfe**](docs/Api/NfeApi.md#baixarpdfcancelamentonfe) | **GET** /nfe/{id}/cancelamento/pdf | Baixar PDF do cancelamento
*NfeApi* | [**baixarPdfCartaCorrecaoNfe**](docs/Api/NfeApi.md#baixarpdfcartacorrecaonfe) | **GET** /nfe/{id}/carta-correcao/pdf | Baixar PDF da carta de correção
*NfeApi* | [**baixarPdfEventoNfe**](docs/Api/NfeApi.md#baixarpdfeventonfe) | **GET** /nfe/eventos/{id}/pdf | Baixar PDF do evento
*NfeApi* | [**baixarPdfInutilizacaoNfe**](docs/Api/NfeApi.md#baixarpdfinutilizacaonfe) | **GET** /nfe/inutilizacoes/{id}/pdf | Baixar PDF da inutilização
*NfeApi* | [**baixarPdfNfe**](docs/Api/NfeApi.md#baixarpdfnfe) | **GET** /nfe/{id}/pdf | Baixar PDF do DANFE
*NfeApi* | [**baixarXmlCancelamentoNfe**](docs/Api/NfeApi.md#baixarxmlcancelamentonfe) | **GET** /nfe/{id}/cancelamento/xml | Baixar XML do cancelamento
*NfeApi* | [**baixarXmlCartaCorrecaoNfe**](docs/Api/NfeApi.md#baixarxmlcartacorrecaonfe) | **GET** /nfe/{id}/carta-correcao/xml | Baixar XML da carta de correção
*NfeApi* | [**baixarXmlEventoNfe**](docs/Api/NfeApi.md#baixarxmleventonfe) | **GET** /nfe/eventos/{id}/xml | Baixar XML do evento
*NfeApi* | [**baixarXmlInutilizacaoNfe**](docs/Api/NfeApi.md#baixarxmlinutilizacaonfe) | **GET** /nfe/inutilizacoes/{id}/xml | Baixar XML da inutilização
*NfeApi* | [**baixarXmlNfe**](docs/Api/NfeApi.md#baixarxmlnfe) | **GET** /nfe/{id}/xml | Baixar XML da NF-e processada
*NfeApi* | [**baixarXmlNfeNota**](docs/Api/NfeApi.md#baixarxmlnfenota) | **GET** /nfe/{id}/xml/nota | Baixar XML da NF-e
*NfeApi* | [**baixarXmlNfeProtocolo**](docs/Api/NfeApi.md#baixarxmlnfeprotocolo) | **GET** /nfe/{id}/xml/protocolo | Baixar XML do Protocolo da SEFAZ
*NfeApi* | [**cancelarNfe**](docs/Api/NfeApi.md#cancelarnfe) | **POST** /nfe/{id}/cancelamento | Cancelar uma NF-e autorizada
*NfeApi* | [**consultarCancelamentoNfe**](docs/Api/NfeApi.md#consultarcancelamentonfe) | **GET** /nfe/{id}/cancelamento | Consultar o cancelamento da NF-e
*NfeApi* | [**consultarCartaCorrecaoNfe**](docs/Api/NfeApi.md#consultarcartacorrecaonfe) | **GET** /nfe/{id}/carta-correcao | Consultar a solicitação de correção da NF-e
*NfeApi* | [**consultarEventoNfe**](docs/Api/NfeApi.md#consultareventonfe) | **GET** /nfe/eventos/{id} | Consultar evento
*NfeApi* | [**consultarInutilizacaoNfe**](docs/Api/NfeApi.md#consultarinutilizacaonfe) | **GET** /nfe/inutilizacoes/{id} | Consultar a inutilização de sequência de numeração
*NfeApi* | [**consultarLoteNfe**](docs/Api/NfeApi.md#consultarlotenfe) | **GET** /nfe/lotes/{id} | Consultar lote de NF-e
*NfeApi* | [**consultarNfe**](docs/Api/NfeApi.md#consultarnfe) | **GET** /nfe/{id} | Consultar NF-e
*NfeApi* | [**consultarStatusSefazNfe**](docs/Api/NfeApi.md#consultarstatussefaznfe) | **GET** /nfe/sefaz/status | Consulta do Status do Serviço na SEFAZ Autorizadora
*NfeApi* | [**criarCartaCorrecaoNfe**](docs/Api/NfeApi.md#criarcartacorrecaonfe) | **POST** /nfe/{id}/carta-correcao | Solicitar correção da NF-e
*NfeApi* | [**emitirLoteNfe**](docs/Api/NfeApi.md#emitirlotenfe) | **POST** /nfe/lotes | Emitir lote de NF-e
*NfeApi* | [**emitirNfe**](docs/Api/NfeApi.md#emitirnfe) | **POST** /nfe | Emitir NF-e
*NfeApi* | [**inutilizarNumeracaoNfe**](docs/Api/NfeApi.md#inutilizarnumeracaonfe) | **POST** /nfe/inutilizacoes | Inutilizar uma sequência de numeração de NF-e
*NfeApi* | [**listarEventosNfe**](docs/Api/NfeApi.md#listareventosnfe) | **GET** /nfe/eventos | Listar eventos
*NfeApi* | [**listarLotesNfe**](docs/Api/NfeApi.md#listarlotesnfe) | **GET** /nfe/lotes | Listar lotes de NF-e
*NfeApi* | [**listarNfe**](docs/Api/NfeApi.md#listarnfe) | **GET** /nfe | Listar NF-e
*NfeApi* | [**sincronizarNfe**](docs/Api/NfeApi.md#sincronizarnfe) | **POST** /nfe/{id}/sincronizar | Sincroniza dados na NF-e a partir da SEFAZ
*NfseApi* | [**baixarPdfNfse**](docs/Api/NfseApi.md#baixarpdfnfse) | **GET** /nfse/{id}/pdf | Baixar PDF do DANFSE
*NfseApi* | [**baixarXmlDps**](docs/Api/NfseApi.md#baixarxmldps) | **GET** /nfse/{id}/xml/dps | Baixar XML da DPS
*NfseApi* | [**baixarXmlNfse**](docs/Api/NfseApi.md#baixarxmlnfse) | **GET** /nfse/{id}/xml | Baixar XML da NFS-e processada
*NfseApi* | [**cancelarNfse**](docs/Api/NfseApi.md#cancelarnfse) | **POST** /nfse/{id}/cancelamento | Cancelar uma NFS-e autorizada
*NfseApi* | [**consultarCancelamentoNfse**](docs/Api/NfseApi.md#consultarcancelamentonfse) | **GET** /nfse/{id}/cancelamento | Consultar o cancelamento da NFS-e
*NfseApi* | [**consultarLoteNfse**](docs/Api/NfseApi.md#consultarlotenfse) | **GET** /nfse/lotes/{id} | Consultar lote de NFS-e
*NfseApi* | [**consultarNfse**](docs/Api/NfseApi.md#consultarnfse) | **GET** /nfse/{id} | Consultar NFS-e
*NfseApi* | [**emitirLoteNfse**](docs/Api/NfseApi.md#emitirlotenfse) | **POST** /nfse/lotes | Emitir lote de NFS-e
*NfseApi* | [**emitirLoteNfseDps**](docs/Api/NfseApi.md#emitirlotenfsedps) | **POST** /nfse/dps/lotes | Emitir lote de NFS-e
*NfseApi* | [**emitirNfse**](docs/Api/NfseApi.md#emitirnfse) | **POST** /nfse | Emitir NFS-e
*NfseApi* | [**emitirNfseDps**](docs/Api/NfseApi.md#emitirnfsedps) | **POST** /nfse/dps | Emitir NFS-e
*NfseApi* | [**listarLotesNfse**](docs/Api/NfseApi.md#listarlotesnfse) | **GET** /nfse/lotes | Listar lotes de NFS-e
*NfseApi* | [**listarNfse**](docs/Api/NfseApi.md#listarnfse) | **GET** /nfse | Listar NFS-e

## Documentação dos DTOs

- [AtvEvento](docs/Model/AtvEvento.md)
- [BeneficioMunicipal](docs/Model/BeneficioMunicipal.md)
- [CServ](docs/Model/CServ.md)
- [CepEndereco](docs/Model/CepEndereco.md)
- [CnpjCnae](docs/Model/CnpjCnae.md)
- [CnpjCnaeSecundario](docs/Model/CnpjCnaeSecundario.md)
- [CnpjEmpresa](docs/Model/CnpjEmpresa.md)
- [CnpjEndereco](docs/Model/CnpjEndereco.md)
- [CnpjListagem](docs/Model/CnpjListagem.md)
- [CnpjMotivoSituacaoCadastral](docs/Model/CnpjMotivoSituacaoCadastral.md)
- [CnpjMunicipio](docs/Model/CnpjMunicipio.md)
- [CnpjNaturezaJuridica](docs/Model/CnpjNaturezaJuridica.md)
- [CnpjOpcaoSimei](docs/Model/CnpjOpcaoSimei.md)
- [CnpjOpcaoSimples](docs/Model/CnpjOpcaoSimples.md)
- [CnpjPais](docs/Model/CnpjPais.md)
- [CnpjPorteEmpresa](docs/Model/CnpjPorteEmpresa.md)
- [CnpjSituacaoCadastral](docs/Model/CnpjSituacaoCadastral.md)
- [CnpjSituacaoEspecial](docs/Model/CnpjSituacaoEspecial.md)
- [CnpjTelefone](docs/Model/CnpjTelefone.md)
- [ComExterior](docs/Model/ComExterior.md)
- [ContaCota](docs/Model/ContaCota.md)
- [ContaCotaListagem](docs/Model/ContaCotaListagem.md)
- [CteCartaCorrecao](docs/Model/CteCartaCorrecao.md)
- [CteInfCorrecao](docs/Model/CteInfCorrecao.md)
- [CtePedidoCancelamento](docs/Model/CtePedidoCancelamento.md)
- [CtePedidoCartaCorrecao](docs/Model/CtePedidoCartaCorrecao.md)
- [CtePedidoEmissao](docs/Model/CtePedidoEmissao.md)
- [CtePedidoEmissaoLote](docs/Model/CtePedidoEmissaoLote.md)
- [CteSefazAereo](docs/Model/CteSefazAereo.md)
- [CteSefazAquav](docs/Model/CteSefazAquav.md)
- [CteSefazAutXML](docs/Model/CteSefazAutXML.md)
- [CteSefazBalsa](docs/Model/CteSefazBalsa.md)
- [CteSefazCobr](docs/Model/CteSefazCobr.md)
- [CteSefazComData](docs/Model/CteSefazComData.md)
- [CteSefazComHora](docs/Model/CteSefazComHora.md)
- [CteSefazComp](docs/Model/CteSefazComp.md)
- [CteSefazCompl](docs/Model/CteSefazCompl.md)
- [CteSefazDest](docs/Model/CteSefazDest.md)
- [CteSefazDetCont](docs/Model/CteSefazDetCont.md)
- [CteSefazDetContInfDoc](docs/Model/CteSefazDetContInfDoc.md)
- [CteSefazDetContInfDocInfNF](docs/Model/CteSefazDetContInfDocInfNF.md)
- [CteSefazDetContInfDocInfNFe](docs/Model/CteSefazDetContInfDocInfNFe.md)
- [CteSefazDocAnt](docs/Model/CteSefazDocAnt.md)
- [CteSefazDup](docs/Model/CteSefazDup.md)
- [CteSefazDuto](docs/Model/CteSefazDuto.md)
- [CteSefazEmiDocAnt](docs/Model/CteSefazEmiDocAnt.md)
- [CteSefazEmiOcc](docs/Model/CteSefazEmiOcc.md)
- [CteSefazEmit](docs/Model/CteSefazEmit.md)
- [CteSefazEndeEmi](docs/Model/CteSefazEndeEmi.md)
- [CteSefazEnderFer](docs/Model/CteSefazEnderFer.md)
- [CteSefazEndereco](docs/Model/CteSefazEndereco.md)
- [CteSefazEntrega](docs/Model/CteSefazEntrega.md)
- [CteSefazExped](docs/Model/CteSefazExped.md)
- [CteSefazFat](docs/Model/CteSefazFat.md)
- [CteSefazFerroEnv](docs/Model/CteSefazFerroEnv.md)
- [CteSefazFerrov](docs/Model/CteSefazFerrov.md)
- [CteSefazFluxo](docs/Model/CteSefazFluxo.md)
- [CteSefazICMS00](docs/Model/CteSefazICMS00.md)
- [CteSefazICMS20](docs/Model/CteSefazICMS20.md)
- [CteSefazICMS45](docs/Model/CteSefazICMS45.md)
- [CteSefazICMS60](docs/Model/CteSefazICMS60.md)
- [CteSefazICMS90](docs/Model/CteSefazICMS90.md)
- [CteSefazICMSOutraUF](docs/Model/CteSefazICMSOutraUF.md)
- [CteSefazICMSSN](docs/Model/CteSefazICMSSN.md)
- [CteSefazICMSUFFim](docs/Model/CteSefazICMSUFFim.md)
- [CteSefazIdDocAnt](docs/Model/CteSefazIdDocAnt.md)
- [CteSefazIdDocAntEle](docs/Model/CteSefazIdDocAntEle.md)
- [CteSefazIdDocAntPap](docs/Model/CteSefazIdDocAntPap.md)
- [CteSefazIde](docs/Model/CteSefazIde.md)
- [CteSefazImp](docs/Model/CteSefazImp.md)
- [CteSefazInfCTeMultimodal](docs/Model/CteSefazInfCTeMultimodal.md)
- [CteSefazInfCTeNorm](docs/Model/CteSefazInfCTeNorm.md)
- [CteSefazInfCTeSupl](docs/Model/CteSefazInfCTeSupl.md)
- [CteSefazInfCarga](docs/Model/CteSefazInfCarga.md)
- [CteSefazInfCte](docs/Model/CteSefazInfCte.md)
- [CteSefazInfCteAnu](docs/Model/CteSefazInfCteAnu.md)
- [CteSefazInfCteComp](docs/Model/CteSefazInfCteComp.md)
- [CteSefazInfCteImp](docs/Model/CteSefazInfCteImp.md)
- [CteSefazInfCteSub](docs/Model/CteSefazInfCteSub.md)
- [CteSefazInfDoc](docs/Model/CteSefazInfDoc.md)
- [CteSefazInfGlobalizado](docs/Model/CteSefazInfGlobalizado.md)
- [CteSefazInfModal](docs/Model/CteSefazInfModal.md)
- [CteSefazInfNF](docs/Model/CteSefazInfNF.md)
- [CteSefazInfNFe](docs/Model/CteSefazInfNFe.md)
- [CteSefazInfOutros](docs/Model/CteSefazInfOutros.md)
- [CteSefazInfQ](docs/Model/CteSefazInfQ.md)
- [CteSefazInfSeg](docs/Model/CteSefazInfSeg.md)
- [CteSefazInfServVinc](docs/Model/CteSefazInfServVinc.md)
- [CteSefazInfSolicNFF](docs/Model/CteSefazInfSolicNFF.md)
- [CteSefazInfTotAP](docs/Model/CteSefazInfTotAP.md)
- [CteSefazLacUnidCarga](docs/Model/CteSefazLacUnidCarga.md)
- [CteSefazLacUnidTransp](docs/Model/CteSefazLacUnidTransp.md)
- [CteSefazLacre](docs/Model/CteSefazLacre.md)
- [CteSefazMultimodal](docs/Model/CteSefazMultimodal.md)
- [CteSefazNatCarga](docs/Model/CteSefazNatCarga.md)
- [CteSefazNoInter](docs/Model/CteSefazNoInter.md)
- [CteSefazNoPeriodo](docs/Model/CteSefazNoPeriodo.md)
- [CteSefazObsCont](docs/Model/CteSefazObsCont.md)
- [CteSefazObsFisco](docs/Model/CteSefazObsFisco.md)
- [CteSefazOcc](docs/Model/CteSefazOcc.md)
- [CteSefazPass](docs/Model/CteSefazPass.md)
- [CteSefazPeri](docs/Model/CteSefazPeri.md)
- [CteSefazReceb](docs/Model/CteSefazReceb.md)
- [CteSefazRefNF](docs/Model/CteSefazRefNF.md)
- [CteSefazRem](docs/Model/CteSefazRem.md)
- [CteSefazRespTec](docs/Model/CteSefazRespTec.md)
- [CteSefazRodo](docs/Model/CteSefazRodo.md)
- [CteSefazSeg](docs/Model/CteSefazSeg.md)
- [CteSefazSemData](docs/Model/CteSefazSemData.md)
- [CteSefazSemHora](docs/Model/CteSefazSemHora.md)
- [CteSefazTarifa](docs/Model/CteSefazTarifa.md)
- [CteSefazToma3](docs/Model/CteSefazToma3.md)
- [CteSefazToma4](docs/Model/CteSefazToma4.md)
- [CteSefazTomaICMS](docs/Model/CteSefazTomaICMS.md)
- [CteSefazTrafMut](docs/Model/CteSefazTrafMut.md)
- [CteSefazUnidCarga](docs/Model/CteSefazUnidCarga.md)
- [CteSefazUnidadeTransp](docs/Model/CteSefazUnidadeTransp.md)
- [CteSefazVPrest](docs/Model/CteSefazVPrest.md)
- [CteSefazVeicNovos](docs/Model/CteSefazVeicNovos.md)
- [DPS](docs/Model/DPS.md)
- [Dfe](docs/Model/Dfe.md)
- [DfeAutorEvento](docs/Model/DfeAutorEvento.md)
- [DfeAutorizacao](docs/Model/DfeAutorizacao.md)
- [DfeCancelamento](docs/Model/DfeCancelamento.md)
- [DfeCartaCorrecao](docs/Model/DfeCartaCorrecao.md)
- [DfeEvento](docs/Model/DfeEvento.md)
- [DfeEventoListagem](docs/Model/DfeEventoListagem.md)
- [DfeInutilizacao](docs/Model/DfeInutilizacao.md)
- [DfeListagem](docs/Model/DfeListagem.md)
- [DfeLote](docs/Model/DfeLote.md)
- [DfeLoteListagem](docs/Model/DfeLoteListagem.md)
- [DfePedidoInutilizacao](docs/Model/DfePedidoInutilizacao.md)
- [DfeRecibo](docs/Model/DfeRecibo.md)
- [DfeSefazStatus](docs/Model/DfeSefazStatus.md)
- [DfeSincronizacao](docs/Model/DfeSincronizacao.md)
- [DocDedRed](docs/Model/DocDedRed.md)
- [DocNFNFS](docs/Model/DocNFNFS.md)
- [DocOutNFSe](docs/Model/DocOutNFSe.md)
- [Empresa](docs/Model/Empresa.md)
- [EmpresaCertificado](docs/Model/EmpresaCertificado.md)
- [EmpresaConfigCte](docs/Model/EmpresaConfigCte.md)
- [EmpresaConfigMdfe](docs/Model/EmpresaConfigMdfe.md)
- [EmpresaConfigNfce](docs/Model/EmpresaConfigNfce.md)
- [EmpresaConfigNfceSefaz](docs/Model/EmpresaConfigNfceSefaz.md)
- [EmpresaConfigNfe](docs/Model/EmpresaConfigNfe.md)
- [EmpresaConfigNfse](docs/Model/EmpresaConfigNfse.md)
- [EmpresaConfigNfseRegTrib](docs/Model/EmpresaConfigNfseRegTrib.md)
- [EmpresaConfigPrefeitura](docs/Model/EmpresaConfigPrefeitura.md)
- [EmpresaConfigRps](docs/Model/EmpresaConfigRps.md)
- [EmpresaEndereco](docs/Model/EmpresaEndereco.md)
- [EmpresaListagem](docs/Model/EmpresaListagem.md)
- [EmpresaPedidoCadastroCertificado](docs/Model/EmpresaPedidoCadastroCertificado.md)
- [EnderExt](docs/Model/EnderExt.md)
- [EnderExtSimples](docs/Model/EnderExtSimples.md)
- [EnderNac](docs/Model/EnderNac.md)
- [Endereco](docs/Model/Endereco.md)
- [EnderecoSimples](docs/Model/EnderecoSimples.md)
- [ExigSuspensa](docs/Model/ExigSuspensa.md)
- [ExploracaoRodoviaria](docs/Model/ExploracaoRodoviaria.md)
- [InfDPS](docs/Model/InfDPS.md)
- [InfoCompl](docs/Model/InfoCompl.md)
- [InfoDedRed](docs/Model/InfoDedRed.md)
- [InfoFornecDocDedRed](docs/Model/InfoFornecDocDedRed.md)
- [InfoIntermediario](docs/Model/InfoIntermediario.md)
- [InfoObra](docs/Model/InfoObra.md)
- [InfoPrestador](docs/Model/InfoPrestador.md)
- [InfoTomador](docs/Model/InfoTomador.md)
- [InfoTributacao](docs/Model/InfoTributacao.md)
- [InfoValores](docs/Model/InfoValores.md)
- [ListaDocDedRed](docs/Model/ListaDocDedRed.md)
- [LocPrest](docs/Model/LocPrest.md)
- [LocacaoSublocacao](docs/Model/LocacaoSublocacao.md)
- [MdfeDocumentoVinculado](docs/Model/MdfeDocumentoVinculado.md)
- [MdfeEncerramento](docs/Model/MdfeEncerramento.md)
- [MdfeInclusaoCondutor](docs/Model/MdfeInclusaoCondutor.md)
- [MdfeInclusaoDfe](docs/Model/MdfeInclusaoDfe.md)
- [MdfePedidoCancelamento](docs/Model/MdfePedidoCancelamento.md)
- [MdfePedidoEmissao](docs/Model/MdfePedidoEmissao.md)
- [MdfePedidoEmissaoLote](docs/Model/MdfePedidoEmissaoLote.md)
- [MdfePedidoEncerramento](docs/Model/MdfePedidoEncerramento.md)
- [MdfePedidoInclusaoCondutor](docs/Model/MdfePedidoInclusaoCondutor.md)
- [MdfePedidoInclusaoDfe](docs/Model/MdfePedidoInclusaoDfe.md)
- [MdfeSefazAereo](docs/Model/MdfeSefazAereo.md)
- [MdfeSefazAquav](docs/Model/MdfeSefazAquav.md)
- [MdfeSefazAutXML](docs/Model/MdfeSefazAutXML.md)
- [MdfeSefazComp](docs/Model/MdfeSefazComp.md)
- [MdfeSefazCondutor](docs/Model/MdfeSefazCondutor.md)
- [MdfeSefazDisp](docs/Model/MdfeSefazDisp.md)
- [MdfeSefazEmit](docs/Model/MdfeSefazEmit.md)
- [MdfeSefazEndeEmi](docs/Model/MdfeSefazEndeEmi.md)
- [MdfeSefazFerrov](docs/Model/MdfeSefazFerrov.md)
- [MdfeSefazIde](docs/Model/MdfeSefazIde.md)
- [MdfeSefazInfANTT](docs/Model/MdfeSefazInfANTT.md)
- [MdfeSefazInfAdic](docs/Model/MdfeSefazInfAdic.md)
- [MdfeSefazInfBanc](docs/Model/MdfeSefazInfBanc.md)
- [MdfeSefazInfCIOT](docs/Model/MdfeSefazInfCIOT.md)
- [MdfeSefazInfCTe](docs/Model/MdfeSefazInfCTe.md)
- [MdfeSefazInfContratante](docs/Model/MdfeSefazInfContratante.md)
- [MdfeSefazInfContrato](docs/Model/MdfeSefazInfContrato.md)
- [MdfeSefazInfDoc](docs/Model/MdfeSefazInfDoc.md)
- [MdfeSefazInfEmbComb](docs/Model/MdfeSefazInfEmbComb.md)
- [MdfeSefazInfEntregaParcial](docs/Model/MdfeSefazInfEntregaParcial.md)
- [MdfeSefazInfLocalCarrega](docs/Model/MdfeSefazInfLocalCarrega.md)
- [MdfeSefazInfLocalDescarrega](docs/Model/MdfeSefazInfLocalDescarrega.md)
- [MdfeSefazInfLotacao](docs/Model/MdfeSefazInfLotacao.md)
- [MdfeSefazInfMDFe](docs/Model/MdfeSefazInfMDFe.md)
- [MdfeSefazInfMDFeSupl](docs/Model/MdfeSefazInfMDFeSupl.md)
- [MdfeSefazInfMDFeTransp](docs/Model/MdfeSefazInfMDFeTransp.md)
- [MdfeSefazInfMDFeTranspPeri](docs/Model/MdfeSefazInfMDFeTranspPeri.md)
- [MdfeSefazInfModal](docs/Model/MdfeSefazInfModal.md)
- [MdfeSefazInfMunCarrega](docs/Model/MdfeSefazInfMunCarrega.md)
- [MdfeSefazInfMunDescarga](docs/Model/MdfeSefazInfMunDescarga.md)
- [MdfeSefazInfNFe](docs/Model/MdfeSefazInfNFe.md)
- [MdfeSefazInfNFePeri](docs/Model/MdfeSefazInfNFePeri.md)
- [MdfeSefazInfPag](docs/Model/MdfeSefazInfPag.md)
- [MdfeSefazInfPercurso](docs/Model/MdfeSefazInfPercurso.md)
- [MdfeSefazInfPrazo](docs/Model/MdfeSefazInfPrazo.md)
- [MdfeSefazInfResp](docs/Model/MdfeSefazInfResp.md)
- [MdfeSefazInfSeg](docs/Model/MdfeSefazInfSeg.md)
- [MdfeSefazInfSolicNFF](docs/Model/MdfeSefazInfSolicNFF.md)
- [MdfeSefazInfTermCarreg](docs/Model/MdfeSefazInfTermCarreg.md)
- [MdfeSefazInfTermDescarreg](docs/Model/MdfeSefazInfTermDescarreg.md)
- [MdfeSefazInfUnidCargaVazia](docs/Model/MdfeSefazInfUnidCargaVazia.md)
- [MdfeSefazInfUnidTranspVazia](docs/Model/MdfeSefazInfUnidTranspVazia.md)
- [MdfeSefazLacRodo](docs/Model/MdfeSefazLacRodo.md)
- [MdfeSefazLacUnidCarga](docs/Model/MdfeSefazLacUnidCarga.md)
- [MdfeSefazLacUnidTransp](docs/Model/MdfeSefazLacUnidTransp.md)
- [MdfeSefazLacres](docs/Model/MdfeSefazLacres.md)
- [MdfeSefazPeri](docs/Model/MdfeSefazPeri.md)
- [MdfeSefazProdPred](docs/Model/MdfeSefazProdPred.md)
- [MdfeSefazProp](docs/Model/MdfeSefazProp.md)
- [MdfeSefazRespTec](docs/Model/MdfeSefazRespTec.md)
- [MdfeSefazRodo](docs/Model/MdfeSefazRodo.md)
- [MdfeSefazSeg](docs/Model/MdfeSefazSeg.md)
- [MdfeSefazTot](docs/Model/MdfeSefazTot.md)
- [MdfeSefazTrem](docs/Model/MdfeSefazTrem.md)
- [MdfeSefazUnidCarga](docs/Model/MdfeSefazUnidCarga.md)
- [MdfeSefazUnidadeTransp](docs/Model/MdfeSefazUnidadeTransp.md)
- [MdfeSefazVag](docs/Model/MdfeSefazVag.md)
- [MdfeSefazValePed](docs/Model/MdfeSefazValePed.md)
- [MdfeSefazVeicReboque](docs/Model/MdfeSefazVeicReboque.md)
- [MdfeSefazVeicReboqueProp](docs/Model/MdfeSefazVeicReboqueProp.md)
- [MdfeSefazVeicTracao](docs/Model/MdfeSefazVeicTracao.md)
- [NfePedidoCancelamento](docs/Model/NfePedidoCancelamento.md)
- [NfePedidoCartaCorrecao](docs/Model/NfePedidoCartaCorrecao.md)
- [NfePedidoEmissao](docs/Model/NfePedidoEmissao.md)
- [NfePedidoEmissaoLote](docs/Model/NfePedidoEmissaoLote.md)
- [NfeSefazAdi](docs/Model/NfeSefazAdi.md)
- [NfeSefazArma](docs/Model/NfeSefazArma.md)
- [NfeSefazAutXML](docs/Model/NfeSefazAutXML.md)
- [NfeSefazAvulsa](docs/Model/NfeSefazAvulsa.md)
- [NfeSefazCIDE](docs/Model/NfeSefazCIDE.md)
- [NfeSefazCOFINS](docs/Model/NfeSefazCOFINS.md)
- [NfeSefazCOFINSAliq](docs/Model/NfeSefazCOFINSAliq.md)
- [NfeSefazCOFINSNT](docs/Model/NfeSefazCOFINSNT.md)
- [NfeSefazCOFINSOutr](docs/Model/NfeSefazCOFINSOutr.md)
- [NfeSefazCOFINSQtde](docs/Model/NfeSefazCOFINSQtde.md)
- [NfeSefazCOFINSST](docs/Model/NfeSefazCOFINSST.md)
- [NfeSefazCana](docs/Model/NfeSefazCana.md)
- [NfeSefazCard](docs/Model/NfeSefazCard.md)
- [NfeSefazCobr](docs/Model/NfeSefazCobr.md)
- [NfeSefazComb](docs/Model/NfeSefazComb.md)
- [NfeSefazCompra](docs/Model/NfeSefazCompra.md)
- [NfeSefazDI](docs/Model/NfeSefazDI.md)
- [NfeSefazDeduc](docs/Model/NfeSefazDeduc.md)
- [NfeSefazDest](docs/Model/NfeSefazDest.md)
- [NfeSefazDet](docs/Model/NfeSefazDet.md)
- [NfeSefazDetExport](docs/Model/NfeSefazDetExport.md)
- [NfeSefazDetPag](docs/Model/NfeSefazDetPag.md)
- [NfeSefazDup](docs/Model/NfeSefazDup.md)
- [NfeSefazEmit](docs/Model/NfeSefazEmit.md)
- [NfeSefazEncerrante](docs/Model/NfeSefazEncerrante.md)
- [NfeSefazEnderEmi](docs/Model/NfeSefazEnderEmi.md)
- [NfeSefazEndereco](docs/Model/NfeSefazEndereco.md)
- [NfeSefazExportInd](docs/Model/NfeSefazExportInd.md)
- [NfeSefazExporta](docs/Model/NfeSefazExporta.md)
- [NfeSefazFat](docs/Model/NfeSefazFat.md)
- [NfeSefazForDia](docs/Model/NfeSefazForDia.md)
- [NfeSefazICMS](docs/Model/NfeSefazICMS.md)
- [NfeSefazICMS00](docs/Model/NfeSefazICMS00.md)
- [NfeSefazICMS10](docs/Model/NfeSefazICMS10.md)
- [NfeSefazICMS20](docs/Model/NfeSefazICMS20.md)
- [NfeSefazICMS30](docs/Model/NfeSefazICMS30.md)
- [NfeSefazICMS40](docs/Model/NfeSefazICMS40.md)
- [NfeSefazICMS51](docs/Model/NfeSefazICMS51.md)
- [NfeSefazICMS60](docs/Model/NfeSefazICMS60.md)
- [NfeSefazICMS70](docs/Model/NfeSefazICMS70.md)
- [NfeSefazICMS90](docs/Model/NfeSefazICMS90.md)
- [NfeSefazICMSPart](docs/Model/NfeSefazICMSPart.md)
- [NfeSefazICMSSN101](docs/Model/NfeSefazICMSSN101.md)
- [NfeSefazICMSSN102](docs/Model/NfeSefazICMSSN102.md)
- [NfeSefazICMSSN201](docs/Model/NfeSefazICMSSN201.md)
- [NfeSefazICMSSN202](docs/Model/NfeSefazICMSSN202.md)
- [NfeSefazICMSSN500](docs/Model/NfeSefazICMSSN500.md)
- [NfeSefazICMSSN900](docs/Model/NfeSefazICMSSN900.md)
- [NfeSefazICMSST](docs/Model/NfeSefazICMSST.md)
- [NfeSefazICMSTot](docs/Model/NfeSefazICMSTot.md)
- [NfeSefazICMSUFDest](docs/Model/NfeSefazICMSUFDest.md)
- [NfeSefazII](docs/Model/NfeSefazII.md)
- [NfeSefazIPINT](docs/Model/NfeSefazIPINT.md)
- [NfeSefazIPITrib](docs/Model/NfeSefazIPITrib.md)
- [NfeSefazISSQN](docs/Model/NfeSefazISSQN.md)
- [NfeSefazISSQNtot](docs/Model/NfeSefazISSQNtot.md)
- [NfeSefazIde](docs/Model/NfeSefazIde.md)
- [NfeSefazImposto](docs/Model/NfeSefazImposto.md)
- [NfeSefazImpostoDevol](docs/Model/NfeSefazImpostoDevol.md)
- [NfeSefazImpostoDevolIPI](docs/Model/NfeSefazImpostoDevolIPI.md)
- [NfeSefazInfAdic](docs/Model/NfeSefazInfAdic.md)
- [NfeSefazInfAdicObsCont](docs/Model/NfeSefazInfAdicObsCont.md)
- [NfeSefazInfAdicObsFisco](docs/Model/NfeSefazInfAdicObsFisco.md)
- [NfeSefazInfIntermed](docs/Model/NfeSefazInfIntermed.md)
- [NfeSefazInfNFe](docs/Model/NfeSefazInfNFe.md)
- [NfeSefazInfNFeSupl](docs/Model/NfeSefazInfNFeSupl.md)
- [NfeSefazInfProdEmb](docs/Model/NfeSefazInfProdEmb.md)
- [NfeSefazInfProdNFF](docs/Model/NfeSefazInfProdNFF.md)
- [NfeSefazInfRespTec](docs/Model/NfeSefazInfRespTec.md)
- [NfeSefazInfSolicNFF](docs/Model/NfeSefazInfSolicNFF.md)
- [NfeSefazIpi](docs/Model/NfeSefazIpi.md)
- [NfeSefazLacres](docs/Model/NfeSefazLacres.md)
- [NfeSefazLocal](docs/Model/NfeSefazLocal.md)
- [NfeSefazMed](docs/Model/NfeSefazMed.md)
- [NfeSefazNFref](docs/Model/NfeSefazNFref.md)
- [NfeSefazObsCont](docs/Model/NfeSefazObsCont.md)
- [NfeSefazObsFisco](docs/Model/NfeSefazObsFisco.md)
- [NfeSefazObsItem](docs/Model/NfeSefazObsItem.md)
- [NfeSefazPIS](docs/Model/NfeSefazPIS.md)
- [NfeSefazPISAliq](docs/Model/NfeSefazPISAliq.md)
- [NfeSefazPISNT](docs/Model/NfeSefazPISNT.md)
- [NfeSefazPISOutr](docs/Model/NfeSefazPISOutr.md)
- [NfeSefazPISQtde](docs/Model/NfeSefazPISQtde.md)
- [NfeSefazPISST](docs/Model/NfeSefazPISST.md)
- [NfeSefazPag](docs/Model/NfeSefazPag.md)
- [NfeSefazProcRef](docs/Model/NfeSefazProcRef.md)
- [NfeSefazProd](docs/Model/NfeSefazProd.md)
- [NfeSefazRastro](docs/Model/NfeSefazRastro.md)
- [NfeSefazRefECF](docs/Model/NfeSefazRefECF.md)
- [NfeSefazRefNF](docs/Model/NfeSefazRefNF.md)
- [NfeSefazRefNFP](docs/Model/NfeSefazRefNFP.md)
- [NfeSefazRetTransp](docs/Model/NfeSefazRetTransp.md)
- [NfeSefazRetTrib](docs/Model/NfeSefazRetTrib.md)
- [NfeSefazTotal](docs/Model/NfeSefazTotal.md)
- [NfeSefazTransp](docs/Model/NfeSefazTransp.md)
- [NfeSefazTransporta](docs/Model/NfeSefazTransporta.md)
- [NfeSefazVeicProd](docs/Model/NfeSefazVeicProd.md)
- [NfeSefazVeiculo](docs/Model/NfeSefazVeiculo.md)
- [NfeSefazVol](docs/Model/NfeSefazVol.md)
- [Nfse](docs/Model/Nfse.md)
- [NfseCancelamento](docs/Model/NfseCancelamento.md)
- [NfseDpsPedidoEmissao](docs/Model/NfseDpsPedidoEmissao.md)
- [NfseListagem](docs/Model/NfseListagem.md)
- [NfseLoteDpsPedidoEmissao](docs/Model/NfseLoteDpsPedidoEmissao.md)
- [NfseMensagemRetorno](docs/Model/NfseMensagemRetorno.md)
- [NfsePedidoCancelamento](docs/Model/NfsePedidoCancelamento.md)
- [NfsePedidoEmissao](docs/Model/NfsePedidoEmissao.md)
- [Rps](docs/Model/Rps.md)
- [RpsDados](docs/Model/RpsDados.md)
- [RpsDadosConstrucaoCivil](docs/Model/RpsDadosConstrucaoCivil.md)
- [RpsDadosIntermediario](docs/Model/RpsDadosIntermediario.md)
- [RpsDadosPrestador](docs/Model/RpsDadosPrestador.md)
- [RpsDadosServico](docs/Model/RpsDadosServico.md)
- [RpsDadosTomador](docs/Model/RpsDadosTomador.md)
- [RpsDadosTomadorEndereco](docs/Model/RpsDadosTomadorEndereco.md)
- [RpsIdentificacao](docs/Model/RpsIdentificacao.md)
- [RpsIdentificacaoPrestador](docs/Model/RpsIdentificacaoPrestador.md)
- [RpsLote](docs/Model/RpsLote.md)
- [RpsLoteListagem](docs/Model/RpsLoteListagem.md)
- [RpsPedidoEmissao](docs/Model/RpsPedidoEmissao.md)
- [RpsPedidoEmissaoLote](docs/Model/RpsPedidoEmissaoLote.md)
- [RpsServicoValores](docs/Model/RpsServicoValores.md)
- [Serv](docs/Model/Serv.md)
- [Substituicao](docs/Model/Substituicao.md)
- [TribFederal](docs/Model/TribFederal.md)
- [TribMunicipal](docs/Model/TribMunicipal.md)
- [TribOutrosPisCofins](docs/Model/TribOutrosPisCofins.md)
- [TribTotal](docs/Model/TribTotal.md)
- [TribTotalMonet](docs/Model/TribTotalMonet.md)
- [TribTotalPercent](docs/Model/TribTotalPercent.md)
- [VDescCondIncond](docs/Model/VDescCondIncond.md)
- [VServPrest](docs/Model/VServPrest.md)

## Autorização

### jwt

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header



### oauth2

- **Tipo**: `OAuth`
- **Flow**: `application`
- **URL de autorização**: `https://auth.nuvemfiscal.com.br/oauth/token`
- **Scopes**: 
    - **conta**: 
    - **empresa**: 
    - **cep**: 
    - **cnpj**: 
    - **mdfe**: 
    - **cte**: 
    - **nfse**: 
    - **nfe**: 


## Sobre este package

- Versão da API: `2.8.1`
    - Versão do package: `2.5.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
