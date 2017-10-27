<p align="center">
  <img src="http://www.phpbenchmarks.com/images/logo_github.png">
  <br>
  <a href="http://www.phpbenchmarks.com" target="_blank">www.phpbenchmarks.com</a>
</p>

## What is www.phpbenchmarks.com ?

You will find lot of benchmarks for PHP frameworks, ORM and libs here.

You can compare results between Apache Bench and Siege, PHP 5.6 to 7.2 and versions of your favorites PHP code.

## What is this repository ?

It's benchmark source code for almost all Laravel versions.

You can find how we benchmark it [here](http://www.phpbenchmarks.com/en/benchmark-protocol).

## Laravel

You can find all Laravel benchmarks [here](http://www.phpbenchmarks.com/fr/benchmark/apache-bench/php-7.1/select-version/laravel.html).

## Installation

```php
# app/Http/routes.php
require(__DIR__ . '/../../vendor/phpbenchmarks/laravel/Http/routes.php');
```

```php
# config/app.php
    'providers' => [
        PhpBenchmarksLaravel\Providers\RestApiProvider::class
    ]
```

```php
# app/Http/Controllers/HelloWorldController.php
namespace App\Http\Controllers;

class HelloWorldController extends \PhpBenchmarksLaravel\Http\Controllers\HelloWorldController
{
}

```

```php
# app/Http/Controllers/RestController.php
namespace App\Http\Controllers;

class RestController extends \PhpBenchmarksLaravel\Http\Controllers\RestController
{
}
```

```bash
mkdir resources/lang/en_GB
touch resources/lang/en_GB/.gitkeep

mkdir resources/lang/fr_FR
touch resources/lang/fr_FR/.gitkeep
```
