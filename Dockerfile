FROM php:7.2-apache

# Instalar PDO y PDO MySQL
RUN docker-php-ext-install pdo pdo_mysql

# Copiar el código de la aplicación
COPY ./src /var/www/html
