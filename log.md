- laravel new sandy
- cd sandy
- composer require laravel/ui --dev
- php artisan ui vue --auth
- npm install && npm run dev

php artisan make:model Assistant
php artisan make:migration create_assistant_table
php artisan migrate

php artisan make:Controller