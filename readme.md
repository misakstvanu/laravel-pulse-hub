1. Install Pulse
    
```bash
composer require laravel/pulse
```
2. Install

```bash
composer require misakstvanu/laravel-pulse-hub
```
3. Publish
```bash
php artisan vendor:publish --tag="pulse-migrations"
```
4. Set up env
```dotenv
PULSE_DB_CONNECTION=pulse
PULSE_DB_HOST=mariadb
PULSE_DB_PORT=3306
PULSE_DB_DATABASE=pulse-hub
PULSE_DB_USERNAME=local_user
PULSE_DB_PASSWORD=local_pass
PULSE_DB_PREFIX=app_
```