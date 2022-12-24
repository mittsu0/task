#!/bin/bash
set -e

composer install
#フロントエンドのAuth関連ファイルを生成
npm install
php artisan config:cache
php artisan migrate --force
php artisan serve --host 0.0.0.0
