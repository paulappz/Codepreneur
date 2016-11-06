# WakaOndo

## First Run
To run the app:
```bash
cd server 
composer install
php artisan migrate
php artisan db:seed
php artisan serve
```

## Available API Endpoints
- GET /areas
- GET /places
- GET /places/id