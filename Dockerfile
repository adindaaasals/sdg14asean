FROM php:7.4-apache

# Install required libraries
RUN apt-get update && apt-get install -y \
    libssl1.0-dev \
    && docker-php-ext-install pdo_mysql

COPY . /var/www/html/
