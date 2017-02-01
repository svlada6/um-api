## Simple API project with auth and account creation

Api is based on dingo/jwt/laravel-cors/swaggervel packages

## Install

req: docker demon if You wish to use docker
  
clone project

run "docker-compose up" in project folder

do "composer install", "php artisan key:generate", "php artisan jwt:generate"

run "php artisan migrate" to generate user tables

check api documentation on http://localhost/api/docs

consume api