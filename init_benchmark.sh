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
    local pwd=$(pwd)
    local langEn="$pwd/vendor/phpbenchmarks/laravel-common/Resources/lang/en/phpbenchmarks.php"
    local langEnGb="$pwd/vendor/phpbenchmarks/laravel-common/Resources/lang/en_GB/phpbenchmarks.php"
    local langFrFr="$pwd/vendor/phpbenchmarks/laravel-common/Resources/lang/fr_FR/phpbenchmarks.php"

    if [ -L "$pwd/resources/lang/en/phpbenchmarks.php" ]; then
        rm "$pwd/resources/lang/en/phpbenchmarks.php"
    fi
    ln -s "$langEn" resources/lang/en

    if [ -L "$pwd/resources/lang/en_GB/phpbenchmarks.php" ]; then
        rm "$pwd/resources/lang/en_GB/phpbenchmarks.php"
    fi
    ln -s "$langEnGb" resources/lang/en_GB

    if [ -L "$pwd/resources/lang/fr_FR/phpbenchmarks.php" ]; then
        rm "$pwd/resources/lang/fr_FR/phpbenchmarks.php"
    fi
    ln -s "$langFrFr" resources/lang/fr_FR

    clearCache
    composer install --no-dev --classmap-authoritative
    clearCache
    php artisan config:cache
    php artisan route:cache
    php artisan optimize --force

    return 0;
}
