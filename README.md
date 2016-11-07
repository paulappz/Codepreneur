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
- GET `/api/v1/areas`
    Retrieves list of all areas with places
- GET `/api/v1/areas/:id`
    Retrieves an area by id with places
- GET `/api/v1/places`
    Retrieves list of places with views
- GET `/api/v1/places/:id`
    Retrieves a place with views by id
