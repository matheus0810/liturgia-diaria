#!/usr/bin/env bash
# Instalar PHP e dependências
curl -sS https://getcomposer.org/installer | php
composer install --no-dev --prefer-dist --optimize-autoloader

# Executar a aplicação na porta correta
php artisan serve --host=0.0.0.0 --port=$PORT
