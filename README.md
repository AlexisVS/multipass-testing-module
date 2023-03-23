# This is the module for all testing purpose

[![Latest Version on Packagist](https://img.shields.io/packagist/v/alexisvs/multipass-testing-module.svg?style=flat-square)](https://packagist.org/packages/alexisvs/multipass-testing-module)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/alexisvs/multipass-testing-module/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/alexisvs/multipass-testing-module/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/alexisvs/multipass-testing-module/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/alexisvs/multipass-testing-module/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/alexisvs/multipass-testing-module.svg?style=flat-square)](https://packagist.org/packages/alexisvs/multipass-testing-module)


## Installation

You can install the package via composer:

```bash
composer require alexisvs/multipass-testing-module
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="multipass-testing-module-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="multipass-testing-module-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="multipass-testing-module-views"
```

## Usage

```php
$multipassTestingModule = new AlexisVS\MultipassTestingModule();
echo $multipassTestingModule->echoPhrase('Hello, AlexisVS!');
```

## Testing

```bash
composer test
```

## Migrations

The migration system is really simple, you have two choices for the naming convention:

1.  ``2022_10_12_000000_create_users_table.php`` : directly add timestamp and the rest of the file : _create_XXX_table
2.  ``create_users_table.php``                   : At the migration process the app will add automatically a timsestamp.
                                                   If you don't have any relationship in your migration this case is better.


## Seeders

For seeding you application with the module, 
your file name need to follow a naming convention:

``TableName_v0_0_0_Seeder.php``

1.  TableName : pascal case

2.  _         : separator

3.  v0_0_0    : v + version of the seeder or module what you want ( I preconise to follow module version ) : It's usefull because maybe you have model relationShip and 
            you need to seed data before an another seeder. This versionning system allow you to do that.
            
4.  _         : separator

5.  _Seeder   : end of seeder file

Like this you seeder is correct and you can choose the order of our seeder by table.

Maybe if the need arises, I will add :

``ModuleName _ TableName _ v0_0_0 _ Seeder``


## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [AlexisVS](https://github.com/AlexisVS)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
