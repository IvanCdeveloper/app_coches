# Usar la imagen oficial de PHP con Apache como base
FROM php:8.1-apache

# Actualizar paquetes del sistema
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql

# Copiar el código de la aplicación al contenedor
COPY . /var/www/html/

# Asignar permisos adecuados
RUN chown -R www-data:www-data /var/www/html

# Exponer el puerto 80 para el servidor web
EXPOSE 80

# Ejecutar el script de inicialización al arrancar el contenedor
CMD php /var/www/html/init.php && apache2-foreground