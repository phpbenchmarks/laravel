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

clearCache
composer install --no-dev --classmap-authoritative
clearCache
php artisan config:cache
php artisan route:cache

chmod -R 777 bootstrap/cache
