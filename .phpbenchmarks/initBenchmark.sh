#!/usr/bin/env bash

set -e

function clearCache() {
    rm -rf bootstrap/cache/*
    chmod -R 777 bootstrap/cache

    php artisan clear-compiled
    php artisan view:clear
    php artisan route:clear
    php artisan config:clear
    php artisan cache:clear

    if [ -d "storage/framework/sessions" ]; then
        rm -rf storage/framework/sessions
    fi
    mkdir storage/framework/sessions
}

composer install --no-dev --classmap-authoritative
clearCache
php artisan config:cache
php artisan route:cache

pwd=$(pwd)
langEn="$pwd/vendor/phpbenchmarks/laravel-common/Resources/lang/en/phpbenchmarks.php"
langEnGb="$pwd/vendor/phpbenchmarks/laravel-common/Resources/lang/en_GB/phpbenchmarks.php"
langFrFr="$pwd/vendor/phpbenchmarks/laravel-common/Resources/lang/fr_FR/phpbenchmarks.php"

if [ -L "$pwd/resources/lang/en/phpbenchmarks.php" ]; then
    rm "$pwd/resources/lang/en/phpbenchmarks.php"
fi
ln -s "$langEn" resources/lang/en/phpbenchmarks.php

if [ -L "$pwd/resources/lang/en_GB/phpbenchmarks.php" ]; then
    rm "$pwd/resources/lang/en_GB/phpbenchmarks.php"
fi
ln -s "$langEnGb" resources/lang/en_GB

if [ -L "$pwd/resources/lang/fr_FR/phpbenchmarks.php" ]; then
    rm "$pwd/resources/lang/fr_FR/phpbenchmarks.php"
fi
ln -s "$langFrFr" resources/lang/fr_FR
