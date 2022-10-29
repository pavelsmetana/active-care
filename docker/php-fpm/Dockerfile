FROM php:8.1.1-fpm

RUN apt-get update

RUN docker-php-ext-install mysqli pdo pdo_mysql

RUN docker-php-ext-install pcntl

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN pecl install xdebug

COPY ./user-config.ini $PHP_INI_DIR/conf.d/
COPY ./xdebug.ini $PHP_INI_DIR/conf.d/

