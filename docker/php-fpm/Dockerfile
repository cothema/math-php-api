FROM php:7.4-fpm-alpine
COPY wait-for-it.sh /usr/bin/wait-for-it
RUN chmod +x /usr/bin/wait-for-it
RUN apk --update --no-cache add git

# Installs
RUN docker-php-ext-install \
    bcmath \
    pdo_mysql

# HOTFIX: Notice: iconv(): Wrong charset, conversion from `UTF-8' to `ASCII//TRANSLIT//IGNORE' is not allowed
# https://github.com/docker-library/php/issues/240
RUN apk add gnu-libiconv --update-cache --repository http://dl-cdn.alpinelinux.org/alpine/edge/community/ --allow-untrusted
ENV LD_PRELOAD /usr/lib/preloadable_libiconv.so php
# end: HOTFIX

COPY --from=composer /usr/bin/composer /usr/bin/composer
WORKDIR /var/www
CMD composer install ; wait-for-it database:3306 -- bin/console doctrine:migrations:migrate ;  php-fpm
EXPOSE 9000
