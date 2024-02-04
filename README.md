
## Install Laravel
[Install](https://laravel.com/docs#creating-a-laravel-project)
composer create-project laravel/laravel example-app

## Install IDE-Helper

[Github](https://github.com/barryvdh/laravel-ide-helper)
composer require --dev -w barryvdh/laravel-ide-helper
php artisan ide-helper:generate - PHPDoc generation for Laravel Facades
php artisan ide-helper:models -M - PHPDocs for models

Add following line to composer.json 
"@php artisan ide-helper:generate"


## Install Breeze
[Laravel](https://laravel.com/docs/#starter-kits#laravel-breeze-installation)
composer require laravel/breeze --dev

## Install Inertia with Vue
[Install](https://laravel.com/docs/10.x/starter-kits#breeze-and-inertia)
php artisan breeze:install
php artisan migrate
npm install
npm run dev
