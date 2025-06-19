FROM php:8.1-apache

RUN a2enmod rewrite
RUN chown -R www-data:www-data /var/www/html
RUN docker-php-ext-install mysqli

# Opcional: copiar um arquivo customizado para configurar o AllowOverride
COPY apache-config.conf /etc/apache2/sites-available/000-default.conf