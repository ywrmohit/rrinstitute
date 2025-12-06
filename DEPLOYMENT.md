# Deployment Guide - RR Institute

## Prerequisites

Before deploying to production, ensure you have:

- [ ] Production server with PHP 8.2+ installed
- [ ] MySQL/MariaDB database
- [ ] Composer installed
- [ ] Node.js and NPM installed
- [ ] Redis installed (recommended for caching)
- [ ] SSL certificate configured
- [ ] Domain DNS configured

## Initial Server Setup

### 1. Clone Repository

```bash
cd /var/www
git clone https://github.com/yourusername/rrinstitute.git
cd rrinstitute
```

### 2. Set File Permissions

```bash
sudo chown -R www-data:www-data /var/www/rrinstitute
sudo chmod -R 755 /var/www/rrinstitute
sudo chmod -R 775 storage bootstrap/cache
```

### 3. Install Dependencies

```bash
composer install --optimize-autoloader --no-dev
npm ci
npm run build
```

### 4. Environment Configuration

```bash
cp .env.production.example .env
php artisan key:generate
```

Edit `.env` with your production values:
- Database credentials
- Mail configuration
- APP_URL
- Redis configuration

### 5. Database Setup

```bash
php artisan migrate --force
```

### 6. Optimize Application

```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan optimize
```

## Web Server Configuration

### Nginx Configuration

Create `/etc/nginx/sites-available/rrinstitute`:

```nginx
server {
    listen 80;
    listen [::]:80;
    server_name www.rrinstitute.co.in rrinstitute.co.in;
    return 301 https://www.rrinstitute.co.in$request_uri;
}

server {
    listen 443 ssl http2;
    listen [::]:443 ssl http2;
    server_name www.rrinstitute.co.in;
    root /var/www/rrinstitute/public;

    # SSL Configuration
    ssl_certificate /path/to/ssl/certificate.crt;
    ssl_certificate_key /path/to/ssl/private.key;
    ssl_protocols TLSv1.2 TLSv1.3;
    ssl_ciphers HIGH:!aNULL:!MD5;

    # Security Headers
    add_header X-Frame-Options "SAMEORIGIN" always;
    add_header X-Content-Type-Options "nosniff" always;
    add_header X-XSS-Protection "1; mode=block" always;
    add_header Referrer-Policy "strict-origin-when-cross-origin" always;

    index index.php;

    charset utf-8;

    # Gzip Compression
    gzip on;
    gzip_vary on;
    gzip_types text/plain text/css text/xml text/javascript application/x-javascript application/xml+rss application/json;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location = /favicon.ico { access_log off; log_not_found off; }
    location = /robots.txt  { access_log off; log_not_found off; }

    error_page 404 /index.php;

    location ~ \.php$ {
        fastcgi_pass unix:/var/run/php/php8.2-fpm.sock;
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        include fastcgi_params;
    }

    location ~ /\.(?!well-known).* {
        deny all;
    }
}
```

Enable the site:

```bash
sudo ln -s /etc/nginx/sites-available/rrinstitute /etc/nginx/sites-enabled/
sudo nginx -t
sudo systemctl reload nginx
```

## SSL Certificate (Let's Encrypt)

```bash
sudo apt install certbot python3-certbot-nginx
sudo certbot --nginx -d www.rrinstitute.co.in -d rrinstitute.co.in
```

## Automated Deployments

### Make deploy script executable

```bash
chmod +x deploy.sh
```

### Deploy

```bash
./deploy.sh
```

## Monitoring & Maintenance

### Set up Cron for Laravel Scheduler

```bash
crontab -e
```

Add:
```
* * * * * cd /var/www/rrinstitute && php artisan schedule:run >> /dev/null 2>&1
```

### Log Rotation

Laravel handles daily log rotation automatically when using the `daily` channel.

### Database Backups

Set up automated backups:

```bash
# Create backup script
sudo nano /usr/local/bin/backup-rrinstitute.sh
```

```bash
#!/bin/bash
BACKUP_DIR="/var/backups/rrinstitute"
DATE=$(date +%Y%m%d_%H%M%S)
mkdir -p $BACKUP_DIR

# Database backup
mysqldump -u username -p'password' database_name > $BACKUP_DIR/db_$DATE.sql

# Compress
gzip $BACKUP_DIR/db_$DATE.sql

# Keep only last 30 days
find $BACKUP_DIR -name "*.gz" -mtime +30 -delete
```

Make executable and add to crontab:
```bash
chmod +x /usr/local/bin/backup-rrinstitute.sh
crontab -e
# Add: 0 2 * * * /usr/local/bin/backup-rrinstitute.sh
```

## Troubleshooting

### Clear all caches
```bash
php artisan optimize:clear
```

### Check logs
```bash
tail -f storage/logs/laravel.log
```

### Restart services
```bash
sudo systemctl restart nginx
sudo systemctl restart php8.2-fpm
```

## Post-Deployment Checklist

- [ ] Verify homepage loads correctly
- [ ] Test all course pages
- [ ] Submit contact form
- [ ] Verify email delivery
- [ ] Check error pages (404, 500)
- [ ] Test mobile responsiveness
- [ ] Verify SSL certificate
- [ ] Check sitemap.xml accessibility
- [ ] Submit sitemap to Google Search Console
- [ ] Set up uptime monitoring
- [ ] Configure error tracking (Sentry, etc.)
