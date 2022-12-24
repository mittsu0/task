#!/bin/bash
set -e

composer install
php artisan config:clear
php artisan cache:clear
php artisan migrate --force
php artisan db:seed --force
php artisan serve --host 0.0.0.0
