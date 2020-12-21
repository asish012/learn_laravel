
# Environment setup
- PHP
  > brew install php
  > brew link php
- Composer
- Laravel
  > composer global require laravel/installer
  > Put ~/.composer/vendor/bin directory in your PATH
- Laravel valet
  > valet install
- PhpStorm
- Postman
- NodeJs
- DBngin

# Start a project
> laravel new peoplefinder
> cd peoplefinder
> valet link

# Create model
- Create a model, migration, seeder, and controller
> php artisan make:model Person -mfsc
- Create a database table for your model
> php artisan migrate

# Auto-generate random data into the database with Seeder
- Create seeder
> php artisan make:seed PersonTableSeeder
- Populate table with seeded data
> php artisan db:seed

# Controller
- Add business logic in Controller
> php artisan make:controller PersonController

# REST
- Change in api:
  - Route::apiResource('/person', 'App\Http\Controllers\PersonController');

# REST response with Resource
> php artisan make:resource PersonResource
> php artisan make:resource PersonResourceCollection --collection
> 

# List all routes
> php artisan route:list

# HELP
- Findout port conflict:
  > lsof -n -P -i | grep [PORT]