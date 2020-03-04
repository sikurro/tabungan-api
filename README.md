
## Setting API Laravel
    0. create database
    1. buat project laravel -> composer create-project --prefer-dist laravel/laravel blog
    2. copy env.example -> .env #ubah settingan
        * test laravel -> php artisan serve
        * add Helper
    3. composer update
    4. composer dump-autoload
    5. php artisan key:generate
    6. php artisan passport:install
    7. php artisan migrate
    8. php artisan db:seed #optional
        * modif file database/seed/*.php

* create + setting env
* add passport + setting
* add helper
* modif handler


## Setting UP API
0. create database
1. create project laravel via composer
2. setting .env => copy .env_example -> .env
3. test running laravel
4. install laravel passport -> https://ekaprasasti.com/laravel-passport-authentication/ | https://laravel.com/docs/6.x/passport#installation
5. Buat API Routes
6. Buat AuthController
    * login
    * register
    * user
    * logout
7. Manage Api Route
8. TEST - API
9. Add Helper + Modify Handler