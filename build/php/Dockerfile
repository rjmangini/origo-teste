FROM php:7.4-fpm-alpine3.13

ENV TZ=America/Sao_Paulo

RUN apk add --update --no-cache \
    # Dependencies for gd \
    freetype-dev libjpeg-turbo-dev libpng-dev \
    # Dependancy for intl \
    icu-libs libintl \
    # Dependancy for zip \
    libzip \
    # Misc tools \
    git patch

RUN apk add --update --no-cache nodejs npm

RUN apk add --update --no-cache --virtual .docker-php-global-dependancies \
    # Build dependency for gettext \
    gettext-dev \
    # Build dependency for gmp \
    gmp-dev \
    # Build dependency for intl \
    icu-dev \
    # Build dependency for mbstring \
    oniguruma-dev \
    # Build dependencies for XML part \
    libxml2-dev ldb-dev \
    # Build dependencies for Zip \
    libzip-dev \
    # Build dependancies for Pecl \
    autoconf g++ make \
    # Build dependancy for APCu \
    pcre-dev \
    # Misc build dependancy \
    wget vim

RUN docker-php-ext-configure bcmath --enable-bcmath && \
    docker-php-ext-configure gd --enable-gd --with-freetype --with-jpeg && \
    docker-php-ext-configure gettext && \
    docker-php-ext-configure gmp && \
    docker-php-ext-configure intl --enable-intl && \
    docker-php-ext-configure mbstring --enable-mbstring && \
    docker-php-ext-configure opcache --enable-opcache && \
    docker-php-ext-configure pcntl --enable-pcntl && \
    docker-php-ext-configure soap && \
    docker-php-ext-configure zip && \
    docker-php-ext-install bcmath gd gettext gmp intl mbstring opcache pcntl soap zip && \
    docker-php-ext-install mbstring tokenizer mysqli pdo_mysql sockets && \
    php -m

RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

# Install composer
RUN wget https://getcomposer.org/download/2.1.5/composer.phar -O /usr/local/bin/composer && \
    chmod a+rx /usr/local/bin/composer    

RUN chown -R www-data:www-data /var/www/html/
RUN chmod -R 755 /var/www/html/
COPY ./laravel-schedule /usr/local/bin/laravel-schedule
COPY ./entry.sh /usr/local/bin/entry.sh
RUN chmod a+x /usr/local/bin/laravel-schedule
RUN chmod a+x /usr/local/bin/entry.sh

RUN echo 'memory_limit = 1024M' > /usr/local/etc/php/php.ini

RUN echo '* * * * * /usr/local/bin/laravel-schedule' > /etc/crontabs/root

ENTRYPOINT ["/usr/local/bin/entry.sh"]