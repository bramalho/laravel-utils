# Laravel Utils Package

[![Latest Stable Version](https://poser.pugx.org/bramalho/laravel-utils/v/stable)](https://packagist.org/packages/bramalho/laravel-utils)
[![Total Downloads](https://poser.pugx.org/bramalho/laravel-utils/downloads)](https://packagist.org/packages/bramalho/laravel-utils)
[![License](https://poser.pugx.org/bramalho/laravel-utils/license)](https://packagist.org/packages/bramalho/laravel-utils)

Laravel Utils is a package that provide several base classes for your project:
* Repository

## Installation
Install the package
```sh
composer require bramalho/laravel-utils
```

Add the service provider in `config/app.php`

```php
BRamalho\LaravelUtils\LaravelUtilsServiceProvider::class,
```

Publish the configs
```sh
php artisan vendor:publish --provider 'BRamalho\LaravelUtils\LaravelUtilsServiceProvider'
```

## Usage

### Repository
Extend any of your Repository CLasses with Repository
```php
<?php

namespace App\Repositories;

use App\User;
use BRamalho\LaravelUtils\Repository;

class UserRepository extends Repository
{
    public function __construct(User $model)
    {
        parent::__construct($model);
    }
}
```

## License
The **Laravel Utils** is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
