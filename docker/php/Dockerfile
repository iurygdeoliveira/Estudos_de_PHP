FROM php:7.4.9-fpm-alpine

RUN apk update
RUN apk upgrade 
RUN apk add autoconf g++ libtool make 
RUN apk add libmcrypt-dev oniguruma-dev
RUN apk add php7-pdo
RUN apk add php7-curl
RUN apk add php7-amqp
RUN apk add php7-bcmath
RUN apk add php7-openssl
RUN apk add php7-zip
RUN apk add php7-bz2
RUN apk add php7-gettext
RUN apk add php7-fileinfo
RUN apk add php7-tokenizer
RUN apk add php7-gmp
RUN apk add php7-mcrypt
RUN apk add php7-calendar
RUN apk add php7-cli
RUN apk add php7-memcached
RUN apk add icu-dev libxml2-dev
RUN docker-php-ext-install pdo_mysql 
RUN docker-php-ext-install intl
RUN docker-php-ext-install opcache
RUN docker-php-ext-install json
RUN docker-php-ext-install mbstring
RUN docker-php-ext-install sockets

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
