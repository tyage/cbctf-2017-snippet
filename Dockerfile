FROM php:7.0-apache

RUN set -x && \
  apt update && \
  apt install zlib1g-dev && \
  docker-php-ext-install zip

COPY 000-default.conf /etc/apache2/sites-enabled/000-default.conf
COPY src /var/www/html/
