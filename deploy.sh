#!/bin/bash

# Production Deployment Script for RR Institute
# This script automates the deployment process

set -e  # Exit on error

echo "🚀 Starting deployment..."

# 1. Pull latest code
echo "📥 Pulling latest code from repository..."
git pull origin main

# 2. Install/Update Composer dependencies
echo "📦 Installing Composer dependencies..."
composer install --optimize-autoloader --no-dev

# 3. Install/Update NPM dependencies and build assets
echo "🎨 Building frontend assets..."
npm ci
npm run build

# 4. Run database migrations
echo "🗄️  Running database migrations..."
php artisan migrate --force

# 5. Clear all caches
echo "🧹 Clearing caches..."
php artisan optimize:clear

# 6. Optimize for production
echo "⚡ Optimizing application..."
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan optimize

# 7. Set proper permissions
echo "🔐 Setting file permissions..."
chmod -R 755 storage bootstrap/cache
chmod 644 .env

# 8. Restart queue workers (if using queues)
# Uncomment if you're using queue workers
# echo "🔄 Restarting queue workers..."
# php artisan queue:restart

# 9. Restart PHP-FPM (adjust service name as needed)
# Uncomment and adjust based on your server setup
# echo "🔄 Restarting PHP-FPM..."
# sudo systemctl restart php8.2-fpm

echo "✅ Deployment completed successfully!"
echo "🎉 Application is now live!"

# Optional: Send deployment notification
# curl -X POST "https://your-slack-webhook-url" \
#   -H 'Content-Type: application/json' \
#   -d '{"text":"RR Institute deployed successfully!"}'
