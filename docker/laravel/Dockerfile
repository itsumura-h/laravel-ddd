FROM php:7.3-fpm

RUN apt update && \
    apt upgrade -y && \
    apt install -y \
        zlib1g-dev \
        zip \
        unzip \
        mariadb-client
# mysql
RUN docker-php-ext-install pdo_mysql
# compose install
WORKDIR /var/www/app
RUN curl -sS https://getcomposer.org/installer | php
RUN chmod 755 composer.phar
RUN mv composer.phar /usr/local/bin
RUN ln -s /usr/local/bin/composer.phar /usr/local/bin/composer
