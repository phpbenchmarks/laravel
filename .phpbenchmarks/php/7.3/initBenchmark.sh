#!/usr/bin/env bash

set -e

function clearCache() {
    rm -rf bootstrap/cache/*
    chmod -R 777 bootstrap/cache

    # No need to clean view cache as no view are compiled
    # and the view service provider is not loaded
    # No need to clean session folder as no session
    # are created during benchmark
    php artisan clear-compiled
    php artisan route:clear
    php artisan config:clear
    php artisan cache:clear

}

rm -rf bootstrap/cache/*
composer install --no-dev --classmap-authoritative --ansi
clearCache
php artisan optimize
