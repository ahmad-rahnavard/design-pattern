# Design Patterns in PHP

:link: [A Laracast Tutorial](https://laracasts.com/series/design-patterns-in-php)

Some methods of design pattern by Jeffrey Way.

Including:

- Decorator pattern
- Adaptor pattern
- Template pattern
- Strategy pattern
- Chain of responsibilities pattern
- Specifications pattern (using hard code)
- Specifications pattern (using database)
- Observer pattern

## Usage

After installing dependencies by composer

```
composer install
```

You need to run each php file in the `App` directory.

e.g. @icn-camera

```bash
php App/1-Decorator.php
```

And for the `6-Specifications-1` and `7-Specifications-2.php` you need to run the test by PhpUnit:

```bash
vendor/bin/phpunit
```