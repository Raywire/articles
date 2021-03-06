[![Build Status](https://travis-ci.org/Raywire/articles.svg?branch=develop)](https://travis-ci.org/Raywire/articles)
[![Maintainability](https://api.codeclimate.com/v1/badges/53ec8d6000b71e4c1fe3/maintainability)](https://codeclimate.com/github/Raywire/articles/maintainability)
[![Test Coverage](https://api.codeclimate.com/v1/badges/53ec8d6000b71e4c1fe3/test_coverage)](https://codeclimate.com/github/Raywire/articles/test_coverage)

## Title
Articles

## Description
This is a poor developer's REST API for articles

## Running the API
It's very simple to get the API up and running. First, create the database (and database user if necessary) and add them to the .env file.

```env
DB_DATABASE=your_db_name
DB_USERNAME=your_db_user
DB_PASSWORD=your_password
```

Then install, migrate, seed, and run the server:

```php
composer install
php artisan migrate
php artisan db:seed
php artisan serve
```

## Running the Tests
```php
composer test
```

## API Documentation
View all endpoints on [API Docs](https://documenter.getpostman.com/view/6831940/SVSHtWEL?version=latest).

## License

The Laravel framework is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
