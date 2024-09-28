# A wrapper around python's packages for interacting with Azure services within Laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/drlopes/laravel-azure.svg?style=flat-square)](https://packagist.org/packages/drlopes/laravel-azure)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/drlopes/laravel-azure/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/drlopes/laravel-azure/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/drlopes/laravel-azure/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/drlopes/laravel-azure/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/drlopes/laravel-azure.svg?style=flat-square)](https://packagist.org/packages/drlopes/laravel-azure)

Microsoft no longer supports the Azure SDK for PHP. This package leverages Python's packages to work with Azure services and provides a set of convenient PHP classes to interact with them from within Laravel.

## Requirements

- Python 3.6 or higher. You can download it [here](https://www.python.org/downloads/).

## Installation

You can install the package via composer:

```bash
composer require drlopes/laravel-azure
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-azure-config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$laravelAzure = new DRLopes\LaravelAzure();
echo $laravelAzure->echoPhrase('Hello, DRLopes!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Daniel Lopes](https://github.com/drlopes)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
