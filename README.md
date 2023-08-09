# Caddy / FrankenPHP issue

This sample should help to reproduces an issue with frankenphp/caddy. On sending request data to PHP, it's truncated somewhere.

> I'm just using frankenphp for a simple Symfony-based API application. One of these REST endpoints receives larger JSON data as POST request.
>
> Unfortunately the 3964. and all following characters are truncated from the php://input which results into an invalid JSON string.
>
> By using the Symfony CLI web-server / php -s I don't see that strange behavior. I ported the application from Nginx/PHP-FPM to frankenphp. The previous setup works as expected, too.
>
> So, not sure, if this is a issue in caddy and/or frankenphp implementation or some strange configuration fuckup.
>
>https://github.com/dunglas/frankenphp/issues/182


## Files

* `Dockerfile` to build frankenphp/php container
* `Caddyfile` simplest possible setup for frankenphp
* `docker-compose.yml` start a simple test environment
* `public/index.php` simple php script just to receive request data and deserializes json data to an array
* `test.sh` send `request.json` via curl to server to demonstrate that issue


## How to setup

    docker compose build

## How to reproduce

    ./test.sh

**It's broken...**

NOW: Remove exactly **ONE** character in `request.json` and re-run `./test.sh` - it's working!
