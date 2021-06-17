# Laravel package to store historical data

[![Latest Version on Packagist](https://img.shields.io/packagist/v/kirschbaum-development/laravel-socialite-cognito.svg?style=flat-square)](https://packagist.org/packages/kirschbaum-development/laravel-socialite-cognito)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/kirschbaum-development/laravel-socialite-cognito/run-tests?label=tests)](https://github.com/kirschbaum-development/laravel-socialite-cognito/actions?query=workflow%3ATests+branch%3Amaster)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/kirschbaum-development/laravel-socialite-cognito/Check%20&%20fix%20styling?label=code%20style)](https://github.com/kirschbaum-development/laravel-socialite-cognito/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/kirschbaum-development/laravel-socialite-cognito.svg?style=flat-square)](https://packagist.org/packages/kirschbaum-development/laravel-socialite-cognito)

This package is a custom AWS Cognito driver for Laravel Socialite. 

## Installation

You can install the package via composer:

```bash
composer require kirschbaum-development/laravel-socialite-cognito
```

## Usage
Once you install the package, add the next config values in you `config/services.php` configuration file:

```php
'cognito' => [
    'base_uri' => env('COGNITO_URI'),
    'client_id' => env('COGNITO_CLIENT_ID'),
    'client_secret' => env('COGNITO_CLIENT_SECRET'),
    'redirect' => env('COGNITO_REDIRECT_URI'),
],
```

Then, you can use the driver as you would use it in the Laravel Socialite's official [documentation](https://laravel.com/docs/8.x/socialite). Use `cognito` keyword when you want to instantiate the driver:

```php
$user = Socialite::driver('cognito')->user();
```

The default scopes are:
```php
$scopes = [
    'openid',
    'profile',
    'aws.cognito.signin.user.admin',
];
```
You can add more scopes or override the default ones by using `scopes` or `setScopes` methods like the official documentation shows ([link](https://laravel.com/docs/8.x/socialite#access-scopes))

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

If you discover any security related issues, please email guette@kirschbaumdevelopment.com or nathan@kirschbaumdevelopment.com instead of using the issue tracker.


## Sponsorship

Development of this package is sponsored by Kirschbaum Development Group, a developer driven company focused on problem solving, team building, and community. Learn more [about us](https://kirschbaumdevelopment.com) or [join us](https://careers.kirschbaumdevelopment.com)!

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
