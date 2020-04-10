FROM php:7.3.16-apache
ADD . /code

RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
