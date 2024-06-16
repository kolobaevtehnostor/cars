# Используем образ PHP с установленным расширением для работы с Laravel
FROM php:8.1-fpm

# Установка зависимостей
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip

# Установка расширений PHP
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd soap

# Установка Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Add user for laravel application
RUN groupadd -g 1000 www && useradd -u 1000 -ms /bin/bash -g www www

# Change current user to www
USER www

# Expose port 9000 and start php-fpm server
EXPOSE 9000

CMD ["php-fpm"]

WORKDIR /var/www/html/laravel

# # Открытие порта для веб-сервера
# EXPOSE 80

# # Запуск веб-сервера PHP-FPM
# CMD ["php-fpm"]