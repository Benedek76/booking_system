#FROM php:7.4-cli
#COPY . /usr/src/myapp
#WORKDIR /usr/src/myapp
#CMD [ "php", "./index.php" ]

FROM php:7.4-apache
RUN docker-php-ext-install mysqli

RUN apt-get update && apt-get install -y \
    git \
    curl \
    zip \
    unzip

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer