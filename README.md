# Cothema PHP Math API

[![Integrity check](https://github.com/cothema/math-php-api/workflows/Integrity%20check/badge.svg)](https://github.com/cothema/math-php-api/actions?query=workflow%3A%22Integrity+check%22)
[![Codecov](https://codecov.io/gh/cothema/math-php-api/branch/master/graph/badge.svg)](https://codecov.io/gh/mathematicator-core/calculator)
[![License: MIT](https://img.shields.io/badge/License-MIT-brightgreen.svg)](./LICENSE)

This package is REST API for Math requests.

## REST API Documentation

### Endpoints
| Method | URL | Description |
| --- | --- | --- |
| GET | /v1/search/?q=:query | Solves query and returns response |
| GET | /v1/ping | Returns actual server time |

## Usage

### Cloud: our public API (recommended)

The easiest way to use is to use our public API.

**Terms of service:** [https://cothema.com/terms](https://cothema.com/terms)

**Public API:** [https://math-php.herokuapp.com/](https://math-php.herokuapp.com/)

#### Pricing
Our cloud API is temporarily **free of charge**.

### Hosted solution

You can also download the source code of this repository and
run it on your own server or e.g. cloud service.


## Development

**This package is based on:**
- [Mathematicator](https://mathematicator.com/) packages:
[mathematicator-core/search](https://github.com/mathematicator-core/search)
- [Symfony 5 framework](https://symfony.com/)
- [Codeception Testing framework](https://codeception.com/)

### Via Docker (Recommended)
**Start project:**

```bash
docker-compose -f docker/docker-compose.dev.yml up -d
```

### Without Docker
**Start project:**

```bash
composer install
symfony server:start
```

**Run tests:**
```bash
php vendor/bin/codecept run
```

## Contributions

Feel free create new issues and send pull requests.
All pull requests should contain complete unit tests.

We follow standards:
[PSR-1](https://www.php-fig.org/psr/psr-1/),
[PSR-4](https://www.php-fig.org/psr/psr-4/),
[PSR-12](https://www.php-fig.org/psr/psr-12/)

We recommend to use [PHPStorm](https://www.jetbrains.com/phpstorm/) IDE.


### Dev notes
This project is determined for end usage as REST API, so we tend to
use only the latest package versions.

Rest API should be infinitely back-compatible for its major version.

### Project responsibility

**This repository can/should contain:**

- Thin API layer as a proxy for query solver repositories.
- API restrictions / limits (not implemented)
- API authentication (not implemented)
- API billing logic (not implemented)
- Store data in a database

**This repository should NOT contain:**

- Query tokenization
- Query solution logic (e.g. calculations)
