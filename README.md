# What I Did

```bash
Lumen (7.1.3) (Laravel Components ^7.0)
```

1. composer create-project laravel/lumen [project_name] --prefer-dist
```
composer create-project laravel/lumen todoLumen --prefer-dist
```
2. cd [project_name]
```
cd todoLumen
```
3. php artisan make:migration [action_name]
```
php artisan make:migration create_role_master_table
```
4. php artisan migrate
5. php artisan make:migration [action_name]  --table=[table_name]
```
php artisan make:migration add_pk_to_role_master_table --table=role_master
```
6. php artisan migrate
7. php -S localhost:8000 -t ./public
8. php artisan make:seed [seeder_name]
```
php artisan make:seed UsersTableSeeder
```
9. php artisan db:seed

## Err Note
