# Define la imagen base que utilizarás (por ejemplo, una imagen de PHP)
FROM php:8.0-apache

# Etiqueta del autor
LABEL maintainer="ABEL <camilosol123@gmail.com>"

# Directorio de trabajo en el contenedor
WORKDIR /var/www/html

# Instala extensiones de PHP y otras dependencias necesarias
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    && docker-php-ext-install pdo pdo_mysql

# Habilita el módulo de Apache mod_rewrite para URLs amigables
RUN a2enmod rewrite

# Copia los archivos de tu aplicación CodeIgniter al directorio de trabajo
COPY . .

# Expon el puerto 80 para el servidor web Apache
EXPOSE 80

# Comando para iniciar el servidor web Apache
CMD ["apache2-foreground"]
