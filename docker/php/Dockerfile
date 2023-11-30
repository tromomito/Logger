FROM php:8.1-fpm

RUN apt-get update \
    && apt-get install -y --no-install-recommends -f git iproute2 \
    && rm -rf /var/lib/apt/lists/* \
    && apt-get clean

COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

RUN usermod -o -u 1000 -g www-data www-data \
    && groupmod -o -g 1000 www-data \
    && chmod 777 /var/www;

WORKDIR /opt/project
