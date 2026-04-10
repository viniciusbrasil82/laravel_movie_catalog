#!/bin/sh

echo "Aguardando banco subir..."
sleep 10
cd follow55

echo "Rodando migrations..."
php artisan migrate --force

echo "Rodando seed..."
php artisan db:seed --force
