FROM phpdockerio/php:8.4-fpm

RUN apt-get update \
    && apt-get -y --no-install-recommends install \
    php8.4-mysql \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*