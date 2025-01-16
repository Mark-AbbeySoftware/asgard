# Laravel-Modules

| **Laravel**  |  **laravel-modules** |
|---|---|
| 5.4  | ^1.0  |
| 5.5  | ^2.0  |
| 5.6  | ^3.0  |
| 5.7  | ^4.0  |
| 5.8  | ^5.0  |
| 6.0  | ^6.0  |
| 7.0  | ^7.0 |
| 8.0  | ^8.0 |

`mpba/laravel-modules` is a Laravel package which created to manage your large Laravel app using modules. Module is like a Laravel package, it has some views, controllers or models. This package is supported and tested in Laravel 8.

This package is a re-published, re-organised and maintained version of [pingpong/modules](https://github.com/pingpong-labs/modules), which not maintained anymore. 

With one big added bonus that the original package didn't have: **tests**.

Find out why you should use this package in the article: [Writing modular applications with laravel-modules](https://mpba.com/blog/writing-modular-applications-with-laravel-modules).

## Install

To install through Composer, by run the following command:

``` bash
composer require mpba/laravel-modules
```

The package will automatically register a service provider and alias.

Optionally, publish the package's configuration file by running:

``` bash
php artisan vendor:publish --provider="mpba\Modules\LaravelModulesServiceProvider"
```

### Autoloading

By default, the module classes are not loaded automatically. this will cause and exception to be thrown
You can autoload your modules using `psr-4`. For example:

``` json
{
  "autoload": {
    "psr-4": {
      "App\\": "app/",
      "Modules\\": "modules/"
    }
  }
}
```

**Tip: don't forget to run `composer dump-autoload` afterwards.**

## Documentation

You'll find installation instructions and full documentation on

## Credits

- [Nicolas Widart](https://github.com/nwidart)
- [gravitano](https://github.com/gravitano)
- [All Contributors](../../contributors)

## About Mark Gregory

Mark Gregory is a freelance web developer specialising on the Laravel framework. View all my packages [on my website](https://mpba.com/), or visit [my website](https://mpba.com).


## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
