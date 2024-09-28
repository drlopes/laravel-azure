# A wrapper around python's packages for interacting with Azure services for Laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/drlopes/laravel-azure.svg?style=flat-square)](https://packagist.org/packages/drlopes/laravel-azure)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/drlopes/laravel-azure/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/drlopes/laravel-azure/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/drlopes/laravel-azure/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/drlopes/laravel-azure/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/drlopes/laravel-azure.svg?style=flat-square)](https://packagist.org/packages/drlopes/laravel-azure)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/laravel-azure.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/laravel-azure)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require drlopes/laravel-azure
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="laravel-azure-migrations"
php artisan migrate
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

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="laravel-azure-views"
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
