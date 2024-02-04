# Laravel starter Application

DO NOT USE this project to start a laravel application!


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
npm install
npm run dev


## Install Laravel Pulse
[Install](https://laravel.com/docs/pulse#installation)
composer require laravel/pulse
php artisan vendor:publish --provider="Laravel\Pulse\PulseServiceProvider"


## Install Laravel Filament
[Install](https://filamentphp.com/docs/3.x/panels/installation#installation)
composer require filament/filament:"^3.2" -W
 
php artisan filament:install --panels


## Install Vuetify
[Install](https://medium.com/@horaceh/laravel-jetstream-inertia-and-vuetify-8aa2ab3c1e41)
npm install vuetify

Update resources/js/app.js

// Vuetify
import '@mdi/font/css/materialdesignicons.css'
import 'vuetify/styles'
import { createVuetify } from 'vuetify'
import * as components from 'vuetify/components'
import * as directives from 'vuetify/directives'

const vuetify = createVuetify({
    components,
    directives
})

.use(vuetify)







## Migrate
php artisan migrate
