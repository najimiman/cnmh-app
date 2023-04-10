# Lab - Scaffolding

## Travail à faire 

- Installation de infyom
- Personnalisation des templates vers notre prototype

## Création du projet laravel vide 

````bash
composer create-project laravel/laravel lab-scaffolding
````

## Installation de infyom

Add following packages into composer.json while using it with Laravel 9.


```json
 "require": {
     "infyomlabs/laravel-generator": "^6.0",
     "infyomlabs/adminlte-templates": "^6.0",
     "doctrine/dbal": "^3.6"
 }
 ```

 ```bash
composer update
php artisan vendor:publish --provider="InfyOm\Generator\InfyOmGeneratorServiceProvider"
php artisan infyom:publish --localized
```

fixe error at RouteServiceProvider file 


```bash
composer require infyomlabs/laravel-ui-adminlte
php artisan ui adminlte --auth
npm install
# npm install laravel-mix --save-dev # fixe error
npm run dev
```

## Custom Templates
````
php artisan vendor:publish --tag=laravel-generator-templates
php artisan vendor:publish --tag=adminlte-templates
php artisan vendor:publish --tag=adminlte-views
````


## Création de la base de données 
 - voir lab-database-laravel

## Génération de code

```bash
php artisan infyom:scaffold Project --fromTable --table=projects
php artisan infyom:scaffold Task --fromTable --table=tasks
php artisan infyom:scaffold Member --fromTable --table=members

php artisan infyom:scaffold Project --fieldsFile --views=index,show

```

## skip

````bash
php artisan infyom:scaffold Project --skip=migration --fieldsFile .\resources\model_schemas\Project.json --views=index,show 
````

You can specify any file from the following list:

migration
model
controllers
api_controller
scaffold_controller
scaffold_requests
routes
api_routes
scaffold_routes
views
tests
menu
dump-autoload


## Start app

to start the application run 

````bash
npm run dev
````
in another console 

````bash
php artisan serve
````

## Références 
- https://infyom.com/open-source/laravelgenerator/docs/10.0/installation
- https://github.com/InfyOmLabs/laravel-generator
- https://laravel.com/docs/10.x/packages