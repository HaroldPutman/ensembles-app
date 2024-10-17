#!/bin/bash
# Stop on the first sign of an error
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
# Based on https://laravel.com/docs/10.x/deployment#optimization
php artisan cache:clear
php artisan config:cache
php artisan route:cache
php artisan view:cache

printf '%s\n' "${PWD##*/}" > public/version.txt

# Point the server to the new files
rm -f /home/charle41/public_html && ln -sf $PWD/public /home/charle41/public_html

echo "Activation complete."
