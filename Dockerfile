FROM php:7.4-fpm

RUN apt update \
    && apt install -y \
        libjpeg-progs \
        djvulibre-bin \
        imagemagick \
        libmagickwand-dev \
    && pecl install imagick \
    && docker-php-ext-enable imagick
