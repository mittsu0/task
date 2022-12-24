#!/bin/bash
set -e

composer install
#フロントエンドのAuth関連ファイルを生成
npm install
php artisan config:clear
php artisan cache:clear
php artisan migrate --force
php artisan serve --host 0.0.0.0
