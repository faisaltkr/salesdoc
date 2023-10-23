<a href="https://aimeos.org/">
    <img src="https://cdn.nationalevacaturebank.nl/vacature/logo/d09b2305-db4b-4eb5-8e8d-e7d05e2956b9/1000x1000" alt="Aimeos logo" title="Aimeos"/>
</a>

### Download Zip File

### Unzip File to your server dir

### Create a Database named 'salesdoc' and connect with your mysql credentials

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=salesdoc
DB_USERNAME=example_username
DB_PASSWORD=example_password
```

## Install Packages and Libraries

```
composer install
```

## Migrate database
## Seed tables for sample data
```
php artisan migrate --seed
```

## Local Deploying
```
php artisan serve
```
## End Point

### Create sales
```
[GET] : http://127.0.0.1:8000/api/sales
Expected Parameters : lead_id, relation_id
```

### Sample Code

    > GET /api/sales?lead_id=1
    > Host: localhost:8000
    > Accept: application/json

### Sample Response

    {
        "success": "Row inserted successfully",
        "data": {
            "first_name": "Dixie Fisher",
            "last_name": "Ulises Monahan V",
            "postcode": 784928,
            "city": "Kirstenside",
            "updated_at": "2023-10-22T02:08:53.000000Z",
            "created_at": "2023-10-22T02:08:53.000000Z",
            "id": 2
        }
    }