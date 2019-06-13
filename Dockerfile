FROM php:7.2-apache
RUN a2enmod rewrite
WORKDIR /var/www/html