#!/bin/bash
set -e

# Based on https://www.toptal.com/laravel/laravel-zero-downtime-deployment
echo "Activation started ..."

BASE_DIR=$(dirname "$PWD")


# Install composer dependencies
composer install --no-dev --no-interaction --prefer-dist --optimize-autoloader

# Make links to persistent files
ln -sf $BASE_DIR/.env ./
ln -sf $BASE_DIR/storage ./

# Run database migrations
php artisan migrate --no-interaction --force

# Run optimization commands for laravel
php artisan optimize
php artisan cache:clear
php artisan route:cache
php artisan view:clear
php artisan config:cache


echo "Activation complete."
