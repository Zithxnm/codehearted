# 1. Use PHP 8.2 with Apache
FROM php:8.2-apache

# 2. Install Linux packages (PostgreSQL drivers, Unzip, Git)
RUN apt-get update && apt-get install -y \
    libpq-dev \
    libzip-dev \
    unzip \
    git \
    curl \
    && docker-php-ext-install pdo pdo_pgsql zip

# 3. Install Node.js (Required for Vite/CSS)
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs

# 4. Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# 5. Configure Apache to look at the /public folder
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf

# 6. Enable Apache Mod Rewrite (for Laravel routes)
RUN a2enmod rewrite

# 7. Copy your website code
WORKDIR /var/www/html
COPY . .

# 8. Install PHP Dependencies
RUN composer install --no-dev --optimize-autoloader

# 9. Install JS Dependencies & Build CSS
RUN npm install
RUN npm run build

# 10. Fix Permissions (Crucial for storage)
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

CMD php artisan migrate --force && php artisan db:seed --force && apache2-foreground
