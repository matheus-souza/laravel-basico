FROM php:7.1-apache
MAINTAINER Matheus Henrique de Souza "mh.matheussouza@gmail.com"

RUN apt-get update && \
    apt-get install -y git \
      zlib1g-dev \
      vim && \
      docker-php-ext-install zip && \
      curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

COPY 000-default.conf /etc/apache2/sites-available/000-default.conf
