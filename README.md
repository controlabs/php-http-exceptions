# php-http-exceptions

PHP HTTP Exceptions

[![Build Status](https://travis-ci.org/controlabs/php-http-exceptions.svg?branch=master)](https://travis-ci.org/controlabs/php-http-exceptions)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/controlabs/php-http-exceptions/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/controlabs/php-http-exceptions/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/controlabs/php-http-exceptions/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/controlabs/php-http-exceptions/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/controlabs/php-http-exceptions/badges/build.png?b=master)](https://scrutinizer-ci.com/g/controlabs/php-http-exceptions/build-status/master)
[![Code Intelligence Status](https://scrutinizer-ci.com/g/controlabs/php-http-exceptions/badges/code-intelligence.svg?b=master)](https://scrutinizer-ci.com/code-intelligence)
[![PHPStan](https://img.shields.io/badge/PHPStan-enabled-brightgreen.svg?style=flat)](https://github.com/phpstan/phpstan)

[![License](https://poser.pugx.org/controlabs/http-exceptions/license)](https://packagist.org/packages/controlabs/http-exceptions)
[![Latest Stable Version](https://poser.pugx.org/controlabs/http-exceptions/v/stable)](https://packagist.org/packages/controlabs/http-exceptions)
[![Latest Unstable Version](https://poser.pugx.org/controlabs/http-exceptions/v/unstable)](https://packagist.org/packages/controlabs/http-exceptions)
[![composer.lock](https://poser.pugx.org/controlabs/http-exceptions/composerlock)](https://packagist.org/packages/controlabs/http-exceptions)
[![Total Downloads](https://poser.pugx.org/controlabs/http-exceptions/downloads)](https://packagist.org/packages/controlabs/http-exceptions)

## Installation

`composer require controlabs/http-exceptions`

## Usage

```php
use Controlabs\Http\Exception\BadRequest;
```

Throws an Bad Request exception:

```php
throw new BadRequest();
```

Throws an exception with a custom message:

```php
throw new BadRequest("I'm gonna make him an offer he can't refuse.");
```

Response (it can return in JSON or ARRAY format):

```php
try {
} catch (BadRequest $e) {
    $e->response()->toArray();
    // or
    $e->response()->toJson();
}
```


## License

This software is open source, licensed under the The MIT License (MIT). See [LICENSE](https://github.com/controlabs/php-http-exceptions/blob/master/LICENSE) for details.
