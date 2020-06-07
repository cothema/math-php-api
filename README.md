<h1 align="center">
    Cothema PHP Math API
</h1>

<p align="center">
    <a href="https://mathematicator.com" target="_blank">
        <img src="https://avatars2.githubusercontent.com/u/8172572?s=100&v=4">
    </a>
</p>

[![Integrity check](https://github.com/cothema/math-php-api/workflows/Integrity%20check/badge.svg)](https://github.com/cothema/math-php-api/actions?query=workflow%3A%22Integrity+check%22)
[![Codecov](https://codecov.io/gh/cothema/math-php-api/branch/master/graph/badge.svg)](https://codecov.io/gh/mathematicator-core/calculator)
[![License: MIT](https://img.shields.io/badge/License-MIT-brightgreen.svg)](./LICENSE)
[![PHPStan Enabled](https://img.shields.io/badge/PHPStan-enabled%20L8-brightgreen.svg?style=flat)](https://phpstan.org/)

This package is REST API for Math requests.

We provide a third-party REST API wrapper for [Mathematicator Search engine](https://github.com/mathematicator-core/search) based on [Mathematicator Framework](https://github.com/mathematicator-core).

**This package has 2 main ways how to use it:**
- **Install it on your server**
- Use our hosted **Cloud API service**

**You can call the API in these ways:**
- **Build your own frontend** (e.g. in [React](https://reactjs.org/) or [Angular](https://angular.io/)) that calls this REST API
- **Call the API from your backend services**

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

## Mathematicator Framework tools structure

⚠️ **Warning: Mathematicator Framework is a third-party toolset**, so we do not guarantee its functionality if you will not use our API package.

The biggest advantage is that you can choose which layer best fits
your needs and start build on the top of it, immediately, without the need
to create everything by yourself. Our tools are tested for bugs
and tuned for performance, so you can save a significant amount
of your time, money, and effort.

Framework tend to be modular as much as possible, so you should be able
to create an extension on each layer and its sublayers.

**Mathematicator framework layers** ordered from the most concrete
one to the most abstract one:

<table>
    <tr>
        <td>
            <b>
            <a href="https://github.com/mathematicator-core/search">
                Search
            </a>
            </b>
        </td>
        <td>
            Modular search engine layer that calls its sublayers
            and creates user interface.
        </td>
    </tr>
    <tr>
        <td>
            <b>
            <a href="https://github.com/mathematicator-core/vizualizator">
                Vizualizator
            </a>
            </b>
        </td>
        <td>
            Elegant graphic visualizer that can render to
            SVG, PNG, JPG and Base64.<br />
            <u>Extensions:</u>
            <b>
            <a href="https://github.com/mathematicator-core/mandelbrot-set">
                Mandelbrot set generator
            </a>
            </b>
        </td>
    </tr>
    <tr>
        <td>
            <b>
            <a href="https://github.com/mathematicator-core/calculator">
                Calculator
            </a>
            </b>
        </td>
        <td>
            Modular advance calculations layer.
            <br />
            <u>Extensions:</u>
            <b>
            <a href="https://github.com/mathematicator-core/integral-solver">
                Integral Solver
            </a>,
            <a href="https://github.com/mathematicator-core/statistic">
                Statistics
            </a>
            </b>
        </td>
    </tr>
    <tr>
        <td>
            <b>
            <a href="https://github.com/mathematicator-core/engine">
                Engine
            </a>
            </b>
        </td>
        <td>
            Core logic layer that maintains basic controllers,
            DAOs, translator, common exceptions, routing etc.
        </td>
    </tr>
    <tr>
        <td>
            <b>
            <a href="https://github.com/mathematicator-core/tokenizer">
                Tokenizer
            </a>
            </b>
        </td>
        <td>
            Tokenizer that can convert string (user input / LaTeX) to numbers
            and operators.
        </td>
    </tr>
    <tr>
        <td>
            <b>
            <a href="https://github.com/mathematicator-core/numbers">
                Numbers
            </a>
            </b>
        </td>
        <td>
            Fast & secure storage for numbers with arbitrary precision.
            It supports Human string and LaTeX output and basic conversions.
        </td>
    </tr>
</table>
