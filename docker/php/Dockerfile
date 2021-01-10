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

ARG PSR_VERSION=0.7.0
ARG PHALCON_VERSION=4.0.2
ARG PHALCON_EXT_PATH=php7/64bits

RUN set -xe && \
  # Download PSR, see https://github.com/jbboehr/php-psr
  curl -LO https://github.com/jbboehr/php-psr/archive/v${PSR_VERSION}.tar.gz && \
  tar xzf ${PWD}/v${PSR_VERSION}.tar.gz && \
  # Download Phalcon
  curl -LO https://github.com/phalcon/cphalcon/archive/v${PHALCON_VERSION}.tar.gz && \
  tar xzf ${PWD}/v${PHALCON_VERSION}.tar.gz && \
  docker-php-ext-install -j $(getconf _NPROCESSORS_ONLN) \
  ${PWD}/php-psr-${PSR_VERSION} \
  ${PWD}/cphalcon-${PHALCON_VERSION}/build/${PHALCON_EXT_PATH} \
  && \
  # Remove all temp files
  rm -r \
  ${PWD}/v${PSR_VERSION}.tar.gz \
  ${PWD}/php-psr-${PSR_VERSION} \
  ${PWD}/v${PHALCON_VERSION}.tar.gz \
  ${PWD}/cphalcon-${PHALCON_VERSION} \
  && \
  php -m

ENV timezone=America/Araguaina

RUN ln -snf /usr/share/zoneinfo/${timezone} /etc/localtime && \
  echo ${timezone} > /etc/timezone && \
  rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /var/cache/*
