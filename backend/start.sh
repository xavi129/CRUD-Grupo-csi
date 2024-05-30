#!/bin/sh
composer install --no-dev
php artisan migrate:fresh --seed
/usr/bin/supervisord -n -c /etc/supervisord.conf