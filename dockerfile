FROM php:8.2-apache

RUN a2enmod rewrite

RUN docker-php-ext-install mysqli pdo pdo_mysql

RUN apt-get update && apt-get install -y apache2

WORKDIR /var/www/html

COPY php/ ./
