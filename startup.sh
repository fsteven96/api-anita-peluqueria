#!/bin/bash

cd /home/site/wwwroot

# Opcional: limpiar y recompilar cachés de Laravel
php artisan config:clear
php artisan route:clear
php artisan view:clear
php artisan config:cache

# Servir Laravel desde la carpeta /public en el puerto 8080
php -S 0.0.0.0:8080 -t public
