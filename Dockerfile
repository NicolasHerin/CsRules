FROM php:7.4-alpine
RUN apk add git bash
WORKDIR /var/www
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer
CMD [ "php" ]
