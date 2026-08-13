FROM php:8.4-cli-bookworm

RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    libicu-dev \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    && docker-php-ext-install \
    pdo_mysql \
    mbstring \
    exif \
    pcntl \
    bcmath \
    intl \
    zip \
    gd \
    && rm -rf /var/lib/apt/lists/*

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html
COPY . .

RUN composer install --optimize-autoloader --no-dev --no-interaction

RUN chmod -R 775 storage bootstrap/cache

EXPOSE 8080

CMD ["sh", "-c", "php artisan serve --host=0.0.0.0 --port=${PORT:-8080} & sleep 3 && php artisan migrate --force && wait"]