FROM php:7.0.6-fpm

RUN apt-get update && apt-get install -y zlib1g-dev && apt-get install -y zip && apt-get install -y libpng-dev \
    && apt-get install -y git \
    && docker-php-ext-install zip \
    && docker-php-ext-install pdo_mysql \
    && docker-php-ext-install json \
    && docker-php-ext-install gd
