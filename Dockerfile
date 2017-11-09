FROM php:7.0-apache

RUN set -x && \
  apt update && \
  apt install zlib1g-dev && \
  docker-php-ext-install zip

COPY . /var/www/html/
