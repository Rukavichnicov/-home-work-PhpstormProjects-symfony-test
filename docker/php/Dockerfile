FROM php:8.3-fpm

RUN apt-get update

#liblary for extension pgsql
RUN apt-get install -y libpq-dev

#liblary for extension xsl
RUN apt-get install -y libxslt1-dev

#liblary for extension zip
RUN apt-get install -y libzip-dev

#extensions
RUN docker-php-ext-install \
    intl \
    pcntl \
    sockets \
    shmop \
    sysvmsg \
    sysvsem \
    sysvshm \
    opcache \
    zip \
    exif \
    calendar \
    bcmath \
    gettext \
    pdo_pgsql \
    pgsql \
    xsl

# Установка xdebug
RUN pecl install xdebug-3.3.1 && docker-php-ext-enable xdebug

# Установка composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer --version=2.7.1
RUN mkdir /.composer
RUN chmod -R 777 /.composer