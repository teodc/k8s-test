ARG PHP_VERSION=7.3

FROM php:${PHP_VERSION}-fpm-alpine

EXPOSE 9000

WORKDIR /app/acme

RUN apk --update add curl
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer

COPY ./ ./

RUN composer install -on

CMD ["php-fpm"]
