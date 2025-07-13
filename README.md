## Project Description

This is an inventory management system where products, stocks, sales can be managed and financial reports can be viewed.


## Requirements

PHP >= 8.2
Laravel 12.x
Composer
Node.js and NPM
MySQL
Laravel Jetstream (with Livewire stack)
Laravel Livewire

## Installation

1. Clone the Repository
git clone https://github.com/snigdho991/inventory-system
cd ecommerce-app

2. Install Dependencies
composer install
npm install && npm run dev

3. Configure Environment
Copy .env.example to .env:
cp .env.example .env

Update the following in your .env:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ecommerce
DB_USERNAME=root
DB_PASSWORD=

4. Generate App Key
php artisan key:generate

5. Run Migrations
php artisan migrate

6. Run Tinker and Generate Test Users
php artisan tinker
    >>> \App\Models\User::create(['name'=>'Test User', 'email'=>'test@example.com', 'password'=>bcrypt('password')])

7. Serve the App
php artisan serve


## Testing
Email: test@example.com
Password: password
