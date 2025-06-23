# startup.sh
#!/bin/bash
cd /home/site/wwwroot
php artisan config:cache
php artisan route:cache
php artisan migrate --force
php -S 0.0.0.0:8000 -t public
