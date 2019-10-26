#!/bin/bash

cp .env.example .env
cd docker
cp .env.example .env
docker stop $(docker ps -sq)
docker-compose up -d nginx mysql
docker-compose exec workspace composer install
docker-compose exec workspace yarn install
docker-compose exec workspace yarn run prod
docker-compose exec workspace php artisan migrate
docker-compose exec workspace php artisan storage:link