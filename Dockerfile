FROM php:8.2-apache

# Instala dependências do sistema e as extensões PHP
RUN apt-get update && apt-get install -y libicu-dev \
    && docker-php-ext-install intl mysqli pdo_mysql