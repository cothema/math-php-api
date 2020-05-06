# Cothema PHP Math API

[![Integrity check](https://github.com/cothema/math-php-api/workflows/Integrity%20check/badge.svg)](https://github.com/cothema/math-php-api/actions?query=workflow%3A%22Integrity+check%22)
[![codecov](https://codecov.io/gh/cothema/math-php-api/branch/master/graph/badge.svg)](https://codecov.io/gh/mathematicator-core/calculator)
[![License: MIT](https://img.shields.io/badge/License-MIT-brightgreen.svg)](https://opensource.org/licenses/MIT)

This package is REST API for Math requests.

## Contributions

Feel free create new issues and send pull requests.
All pull requests should contain complete unit tests.

We follow standards:
[PSR-1](https://www.php-fig.org/psr/psr-1/),
[PSR-4](https://www.php-fig.org/psr/psr-4/),
[PSR-12](https://www.php-fig.org/psr/psr-12/)

We recommend to use [PHPStorm](https://www.jetbrains.com/phpstorm/) IDE.

## Development

**This package is based on:**
- [Mathematicator](https://mathematicator.com/) packages:
[mathematicator-core/search](https://github.com/mathematicator-core/search)
- [Symfony 5 framework](https://symfony.com/)
- [Codeception Testing framework](https://codeception.com/)

### With Docker (Recommended)
**Start project run in terminal:**

```bash
docker-compose -f docker/docker-compose.dev.yml up -d
```

### Without Docker
**Start project run in terminal:**

```bash
composer install
symfony server:start
```

**Run tests:**
```bash
php vendor/bin/codecept run
```

### Dev notes
This project is determined for end usage as REST API, so we tend to
use only the latest package versions.

Rest API should be infinitely back-compatible for its major version.
