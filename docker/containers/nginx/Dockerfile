ARG NGINX_VERSION=1.17

FROM nginx:${NGINX_VERSION}-alpine

EXPOSE 80

WORKDIR /var/www/acme

RUN apk --update add curl \
    php7 \
    php7-curl \
    php7-openssl \
    php7-iconv \
    php7-json \
    php7-mbstring \
    php7-phar \
    php7-dom \
    php7-xml \
    php7-xmlwriter \
    php7-tokenizer

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer

COPY ./ ./

RUN composer install -on

COPY ./docker/containers/nginx/vhost.conf /etc/nginx/conf.d

CMD ["nginx", "-g", "daemon off;"]
