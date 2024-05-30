#!/bin/sh
composer install
php artisan migrate:fresh --seed