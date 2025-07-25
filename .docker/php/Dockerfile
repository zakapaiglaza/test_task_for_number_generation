FROM php:8.3-cli

# mix
RUN apt-get update \
  && apt-get install -y libzip-dev unzip \
  && docker-php-ext-install pdo_mysql zip \
  && apt-get clean \
  && rm -rf /var/lib/apt/lists/*


RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
  && php composer-setup.php \
  && php -r "unlink('composer-setup.php');" \
  && mv composer.phar /usr/local/bin/composer

WORKDIR /var/www
COPY . .

RUN mkdir -p /var/www/storage /var/www/bootstrap/cache

RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache \
  && chmod -R 775 /var/www/storage /var/www/bootstrap/cache

RUN test -f /var/www/composer.json && composer install --optimize-autoloader --no-dev || echo "No composer.json found, skipping composer install"

CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=5173"]

EXPOSE 5173