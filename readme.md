## Simple API project with auth and account creation

Api is based on dingo/jwt/laravel-cors/swaggervel packages

## Install

req: docker demon if You wish to use docker
  
clone project

run "docker-compose up" in project folder

do "composer install"

copy .env.example to .env and if You use docker set "DB_HOST=mysql"

run "php artisan key:generate", "php artisan jwt:generate"

run "php artisan migrate" to generate user tables

check api documentation on http://um-api.dev/api/docs

consume api
![alt text](https://raw.githubusercontent.com/urukalo/um-api/master/public/um-api.png "api/docs screen-shoot")
