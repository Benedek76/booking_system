FROM php:7.4-apache
RUN docker-php-ext-install mysqli

RUN apt-get update && apt-get install -y \
    git \
    curl \
    zip \
    unzip



RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN ln -s /etc/apache2/mods-available/rewrite.load /etc/apache2/mods-enabled/rewrite.load

COPY config/apache/000-default.conf /etc/apache2/sites-available/000-default.conf

RUN apt-get update && apt-get install -y \
    mc \


