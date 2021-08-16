FROM php:7.3.16-apache
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli && a2enmod rewrite
RUN apt-get update && apt-get upgrade -y