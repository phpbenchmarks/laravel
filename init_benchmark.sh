#!/usr/bin/env bash

function clearCache() {
    sudo /bin/rm -rf bootstrap/cache/*
    sudo /bin/chmod -R 777 bootstrap/cache

    php artisan clear-compiled
    php artisan view:clear
    php artisan route:clear
    php artisan config:clear
    php artisan cache:clear
}

function init() {
    clearCache
    composer install --no-dev --classmap-authoritative
    clearCache
    php artisan config:cache
    php artisan route:cache
    php artisan optimize --force

    return 0;
}
