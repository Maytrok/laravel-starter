
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


