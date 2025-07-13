## Project Description

This is an inventory management system where products, stocks, sales can be managed and financial reports can be viewed.


## Requirements

PHP >= 8.2 <br>
Laravel 12.x <br>
Composer <br>
Node.js and NPM <br>
MySQL <br>
Laravel Jetstream (with Livewire stack) <br>
Laravel Livewire <br>

## Installation

1. Clone the Repository <br>
git clone https://github.com/snigdho991/inventory-system <br>
cd ecommerce-app

2. Install Dependencies <br>
composer install <br>
npm install && npm run dev

3. Configure Environment <br>
Copy .env.example to .env: <br>

Update the following in your .env:
DB_CONNECTION=mysql <br>
DB_HOST=127.0.0.1 <br>
DB_PORT=3306 <br>
DB_DATABASE=ecommerce <br>
DB_USERNAME=root <br>
DB_PASSWORD=

4. Generate App Key <br>
php artisan key:generate

5. Run Migrations <br>
php artisan migrate

6. Run Tinker and Generate Test Users <br>
php artisan tinker <br>
    >>> \App\Models\User::create(['name'=>'Test User', 'email'=>'test@example.com', 'password'=>bcrypt('password')])

7. Serve the application- <br>
php artisan serve


## Testing
Email: test@example.com <br>
Password: password
