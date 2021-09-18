<h1 align="center">Laravel - Laravel 7 CRUD 1</h1>

This app is created to make the website with CRUD method based on famous PHP framework, Laravel. This app is used with Laravel as PHP framework, and MySQL as store database. [More about Laravel](https://en.wikipedia.org/wiki/Laravel)

## Built With

[![Laravel](https://img.shields.io/badge/Laravel-7.x-red.svg?style=rounded-square)](https://laravel.com/docs/7.x)


## Requirements

1. <a href="https://laravel.com/docs/7.x">Laravel 7.x</a>
4. Web Server (ex. localhost)

## How to run the app ?

1. Download this Project or you can type git clone https://github.com/akbarsaladin36/laravel-crud-1.git
2. Turn on Web Server and MySQL can using Third-party tool like xampp, etc. 
2. Open app's directory in CMD or Terminal
3. Type `composer install`.
4. Type `cp .env.example .env` or `copy .env.example .env`.
5. Type `php artisan key:generate` to generate laravel application key.
6. Type `php artisan migrate` to migrate all table in database from .sql file.
7. Type `php artisan serve` to activate the server.
8. Type `http://localhost:8000` to open the url server on your browser.

## Set up .env file

Open .env file on your favorite code editor, and copy paste this code below :

```
DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=laravel7_crud_1 OR <YOUR DATABASE NAME>
DB_USERNAME=root
DB_PASSWORD=
```

## Feature

1. Get All Data
2. Get One Data from User
3. Create, Edit and Delete Data from User

## License

© [Muhammad Akbar Saladin Siregar](https://github.com/akbarsaladin36/)
