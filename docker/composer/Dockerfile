#FROM php:5-fpm
FROM php:7.0.22-cli
MAINTAINER Diego Gullo <diego_gullo@bizmate.biz>

RUN apt-get update && apt-get install -y ssh git zip
#RUN apt-get update && apt-get install -y  libcurl4-gnutls-dev git zip \
#	libfreetype6-dev libmcrypt-dev libicu-dev libpq-dev \
#	&& docker-php-ext-install curl \
#	&& docker-php-ext-install mysqli pdo_mysql \
#	&& docker-php-ext-install -j$(nproc) mcrypt \
#	&& apt-get clean \
#    && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*
#
RUN curl --silent --show-error https://getcomposer.org/installer | php \
	&& mkdir -p /usr/local/bin \
	&& mv composer.phar /usr/local/bin/composer \
	&& chmod +x  /usr/local/bin/composer

RUN mkdir -p ~/.ssh && ssh-keyscan -H gitlab.com >> ~/.ssh/known_hosts
RUN mkdir -p /home/composer && chmod 777 /home/composer
