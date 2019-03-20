# docker-php
Docker-Compose: Docker + Apache 2.4 + PHP 5.5.9 + Laravel 5.2 + MariaDB + PhpMyAdmin + Composer

### Browser
http://localhost - php app

http://localhost:9901 - pma 

### Docker
How to go into php-container

`docker exec -it web_php /bin/bash`

List of containers:
* web-php
* web-db
* web-pma

### Laravel 5.2
If you need to change version of laravel, or make your build go into docker web_php and run this command from **var** folder

`/var# php composer.phar create-project --prefer-dist laravel/laravel www "5.2.*"`
