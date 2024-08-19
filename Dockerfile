FROM php:8.2.11-fpm

RUN cd /tmp && curl -sS https://getcomposer.org/installer | php && mv composer.phar /usr/local/bin/composer

RUN apt-get update && apt-get -y install apt-utils nano wget dialog vim && apt-get -y install --fix-missing \
    build-essential \
    git \
    curl \
    libcurl4 \
    libcurl4-openssl-dev \
    zlib1g-dev \
    libzip-dev \
    zip \
    libbz2-dev \
    locales \
    libmcrypt-dev \
    libicu-dev \
    libonig-dev \
    libxml2-dev

RUN docker-php-ext-install pdo pdo_mysql intl zip

RUN docker-php-ext-enable pdo pdo_mysql intl zip

# Install Postgre PDO
# RUN apt-get install -y libpq-dev \
#     && docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql \
#     && docker-php-ext-install pdo pdo_pgsql pgsql

COPY . /var/www/magabwa.devnull.my.id

RUN chown -R www-data:www-data /var/www/magabwa.devnull.my.id
RUN chmod -R 755 /var/www/magabwa.devnull.my.id/storage
RUN chmod -R 755 /var/www/magabwa.devnull.my.id/bootstrap/cache

CMD ["php-fpm"]
