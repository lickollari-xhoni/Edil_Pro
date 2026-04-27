# --- STAGE 1: Build degli asset con Node ---
FROM node:20 as build-assets
WORKDIR /app
COPY package*.json ./
RUN npm install
COPY . .
RUN npm run build

# --- STAGE 2: Ambiente PHP ---
FROM php:8.2-apache

# Installazione dipendenze di sistema e PHP
RUN apt-get update && apt-get install -y \
    libpng-dev libonig-dev libxml2-dev libpq-dev \
    zip unzip git curl \
    && docker-php-ext-install pdo_mysql pdo_pgsql mbstring exif pcntl bcmath gd

# Abilita mod_rewrite per Laravel
RUN a2enmod rewrite

# Installazione Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Copia i file del progetto
COPY . .
# Copia la build degli asset dallo stage precedente
COPY --from=build-assets /app/public/build ./public/build

# Installazione dipendenze PHP
RUN composer install --no-dev --optimize-autoloader

# Configurazione permessi
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Configurazione Apache DocumentRoot
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Ottimizzazione cache Laravel
RUN php artisan config:cache && php artisan route:cache && php artisan view:cache

EXPOSE 80
CMD ["apache2-foreground"]