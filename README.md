# Caddy / FrankenPHP issue

This sample should help to reproduces an issue with frankenphp/caddy. On sending request data to PHP, it's truncated somewhere.

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
