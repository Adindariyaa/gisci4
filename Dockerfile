# Use the official PHP 8.1 image with an included Apache server
FROM php:8.1-apache

# 1. Install system dependencies and required PHP extensions for CodeIgniter 4
# This includes 'intl' for internationalization and 'mysqli' for database connections.
RUN apt-get update && apt-get install -y \
    libicu-dev \
    libzip-dev \
    unzip \
    && docker-php-ext-configure intl \
    && docker-php-ext-install intl mysqli pdo pdo_mysql zip

# 2. Install Composer (the PHP package manager)
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# 3. Set the working directory inside the container
WORKDIR /var/www/html

# 4. Copy your application source code into the container
COPY . .

# 5. Run composer install to get all PHP dependencies for production
RUN composer install --no-interaction --no-dev --optimize-autoloader

# 6. Configure Apache to use CodeIgniter's "public" directory as the web root
# This also enables 'mod_rewrite' for clean URLs (e.g., no 'index.php').
RUN echo "<VirtualHost *:80>\n  DocumentRoot /var/www/html/public\n  <Directory /var/www/html/public>\n    AllowOverride All\n    Require all granted\n  </Directory>\n</VirtualHost>" > /etc/apache2/sites-available/000-default.conf \
    && a2enmod rewrite

# 7. Set the correct file permissions for CodeIgniter's writable directory
RUN chown -R www-data:www-data /var/www/html/writable