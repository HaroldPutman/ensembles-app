#!/bin/bash
set -e

# Based on https://dev.to/kenean50/automate-your-laravel-app-deployment-with-github-actions-2g7j

echo "Deployment started ..."

## Attempt to avoid build failures due to running out of memory (https://github.com/vitejs/vite/issues/2433)
export NODE_OPTIONS=--max-old-space-size=32768

# Enter maintenance mode or return true
# if already is in maintenance mode
(php artisan down) || true

# Pull the latest version of the app
git pull origin main

# Install composer dependencies
composer install --no-dev --no-interaction --prefer-dist --optimize-autoloader

# Clear the old cache
php artisan clear-compiled

# Recreate cache
php artisan optimize

# Clear the config cache
php artisan config:clear

# Compile npm assets
npm run build

# Run database migrations
php artisan migrate --force

# Exit maintenance mode
php artisan up

echo "Deployment finished!"
