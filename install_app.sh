#!/bin/bash

cp .env.example .env
docker stop $(docker ps -sq)
docker-compose up -d
docker-compose exec app composer install
docker-compose exec app npm install
docker-compose exec app npm run prod
docker-compose exec app php artisan migrate