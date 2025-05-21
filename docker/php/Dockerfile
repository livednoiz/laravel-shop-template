FROM php:8.3-fpm

# Systemabhängige Tools und Extensions
RUN apt-get update && apt-get install -y \
    nano zip unzip curl git libzip-dev libpng-dev libonig-dev libxml2-dev \
    && docker-php-ext-install pdo_mysql zip mbstring exif pcntl

# Composer installieren
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Arbeitsverzeichnis
WORKDIR /var/www/html

# Benutzer setzen (Standard ist root)
RUN usermod -u 1000 www-data \
    && groupmod -g 1000 www-data

# Setze Besitzer
RUN chown -R www-data:www-data /var/www/html
