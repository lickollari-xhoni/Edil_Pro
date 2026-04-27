# Usa un'immagine PHP ufficiale con Apache
FROM php:8.2-apache

# Installa le dipendenze di sistema e le estensioni PHP necessarie per Laravel
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    git \
    curl

# Installa estensioni PHP
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Abilita il modulo Apache Rewrite
RUN a2enmod rewrite

# Installa Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Imposta la cartella di lavoro
WORKDIR /var/www/html

# Copia i file del progetto
COPY . .

# Installa le dipendenze PHP
RUN composer install --no-dev --optimize-autoloader

# Cambia i permessi per Laravel
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Cambia la Document Root di Apache a /public
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Esponi la porta 80
EXPOSE 80

# Comando di avvio
CMD ["apache2-foreground"]