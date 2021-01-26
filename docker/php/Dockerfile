FROM php:7.4.11-fpm-alpine

RUN apk update
RUN apk upgrade 
RUN apk add --no-cache autoconf g++ linux-headers libtool make 
RUN apk add --no-cache libmcrypt-dev oniguruma-dev
RUN apk add --no-cache php7-pdo php7-curl php7-bcmath php7-openssl php7-zip php7-bz2 php7-gettext php7-fileinfo php7-tokenizer php7-gmp php7-mcrypt php7-calendar php7-cli php7-memcached icu-dev libxml2-dev

RUN docker-php-ext-install pdo_mysql intl opcache json mbstring sockets

RUN apk add --no-cache $PHPIZE_DEPS \
    && pecl install xdebug-2.9.0 \
    && docker-php-ext-enable xdebug

ENV timezone=America/Araguaina

RUN ln -snf /usr/share/zoneinfo/${timezone} /etc/localtime && \
    echo ${timezone} > /etc/timezone && \
    rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /var/cache/*
