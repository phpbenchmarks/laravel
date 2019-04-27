<?php

declare(strict_types=1);

namespace AbstractComponentConfiguration;

abstract class AbstractComponentConfiguration
{
    public static function getComponentType(): int
    {
        return 2;
    }

    public static function getComponentName(): string
    {
        return 'Laravel';
    }

    public static function getComponentSlug(): string
    {
        return 'laravel';
    }

    public static function isPhp56Enabled(): bool
    {
        return false;
    }

    public static function isPhp70Enabled(): bool
    {
        return false;
    }

    public static function isPhp71Enabled(): bool
    {
        return true;
    }

    public static function isPhp72Enabled(): bool
    {
        return true;
    }

    public static function isPhp73Enabled(): bool
    {
        return true;
    }

    public static function getBenchmarkUrl(): string
    {
        return 'index.php/benchmark/rest';
    }

    public static function getCoreDependencyName(): string
    {
        return 'laravel/framework';
    }

    public static function getCoreDependencyMajorVersion(): int
    {
        return 5;
    }

    public static function getCoreDependencyMinorVersion(): int
    {
        return 8;
    }

    public static function getCoreDependencyPatchVersion(): int
    {
        return 14;
    }

    public static function getBenchmarkType(): int
    {
        return 3;
    }

    public static function getSourceCodeUrls(): array
    {
        return [
            'route' => 'https://github.com/phpbenchmarks/laravel-common/blob/laravel_5_rest-api/Http/routes.php',
            'controller' => 'https://github.com/phpbenchmarks/laravel-common/blob/laravel_5_rest-api/Http/Controllers/RestApiController.php',
            'randomizeLanguageDispatchEvent' => 'https://github.com/phpbenchmarks/laravel-common/blob/laravel_5_rest-api/Http/Controllers/RestApiController.php',
            'randomizeLanguageEventListener' => 'https://github.com/phpbenchmarks/laravel-common/blob/laravel_5_rest-api/Events/DefineLang.php',
            'translations' => 'https://github.com/phpbenchmarks/laravel-common/blob/laravel_5_rest-api/Resources/lang/en_GB/phpbenchmarks.php',
            'translate' => 'https://github.com/phpbenchmarks/laravel-common/blob/laravel_5_rest-api/Transformer/RestApiTransformer.php',
            'serialize' => 'https://github.com/phpbenchmarks/laravel-common/blob/laravel_5_rest-api/Transformer/RestApiTransformer.php'
        ];
    }
}