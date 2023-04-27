# IDGOB.PE PHP SDK

## 1. Instalación:

```
composer require idgobpe-sdk/php
```

## 2. Gestor de dependecias

[Packagist](https://packagist.org/packages/idgobpe-sdk/php)

## 3. Configuración

### ACR disponibles

```
Constants::ACR_ONE_FACTOR
Constants::ACR_TWO_FACTOR
Constants::ACR_CERTIFICATE_DNIE
Constants::ACR_CERTIFICATE_TOKEN
Constants::ACR_CERTIFICATE_DNIE_LEGACY
Constants::ACR_CERTIFICATE_TOKEN_LEGACY
```

### Prompt disponibles

```
Constants::PROMPT_NONE
Constants::PROMPT_LOGIN
Constants::PROMPT_CONSENT
```

### Scope disponibles

```
Constants::SCOPE_PROFILE
Constants::SCOPE_EMAIL
Constants::SCOPE_PHONE
Constants::SCOPE_OFFLINE_ACCESS
```

## 4. Documentación de OpenID Connect

[https://openid.net/specs/openid-connect-core-1_0.html](https://openid.net/specs/openid-connect-core-1_0.html)