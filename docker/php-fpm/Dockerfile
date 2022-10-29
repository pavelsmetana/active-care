FROM php:8.1.1-fpm

RUN apt-get update

RUN docker-php-ext-install mysqli pdo pdo_mysql

RUN docker-php-ext-install pcntl

COPY ./user-config.ini $PHP_INI_DIR/conf.d/

