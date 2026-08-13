FROM richarvey/nginx-php-fpm:3.1.6

WORKDIR /var/www/html

# Copy application files
COPY . /var/www/html

# Laravel needs these directories writable
RUN chmod -R 755 /var/www/html/storage /var/www/html/bootstrap/cache

# Environment to skip composer during base image build if desired
ENV SKIP_COMPOSER=1
ENV WEBROOT=/var/www/html/public
ENV PHP_ERRORS_STDERR=1
ENV RUN_SCRIPTS=1
ENV REAL_IP_HEADER=1

ENV COMPOSER_ALLOW_SUPERUSER=1

# Install composer dependencies (can be overridden at build-time by setting SKIP_COMPOSER)
RUN if [ "$SKIP_COMPOSER" != "1" ]; then composer install --no-dev --optimize-autoloader --no-interaction --prefer-dist; fi

EXPOSE 80

CMD ["/start.sh"]
