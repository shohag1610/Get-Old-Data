# Make Command to Modify Database

A Laravel-based application for updating product active status by Command line interface

## Features

-   Update Product active status through Command line
-   Product:Socks those are older than two years will be inactive.

## Requirements

-   PHP 8.1 or higher
-   Composer
-   SQlite

## Installation Instructions

### Step 1: Clone the Repository

Clone the repository and navigate to the project directory:

```bash
git clone <https://github.com/shohag1610/Update-Active-Status-Of-Products.git>
cd <CreateCommandToUpdateData>
```

### Step 2: Install Dependencies

Run the following command to install PHP dependencies:

```bash
composer install
```

### Step 3: Configure Environment

Copy the .env.example file and update the configurations for your database:

```bash
cp .env.example .env
```

Update the following lines in the .env file:

```env
DB_CONNECTION=sqlite
# DB_HOST=127.0.0.1
# DB_PORT=3306
# DB_DATABASE=laravel
# DB_USERNAME=root
# DB_PASSWORD=
```

### Step 4: Run Database Migrations

Set up the database structure by running:

```bash
php artisan migrate
```

### Step 5: Seed the Database

Seed the database with default user and items:

```bash
php artisan db:seed
```

### Step 6: Start the Application

Open your browser and navigate to:

http://localhost:8000

### Step 7: Open command promote and run the command

```bash
php artisan products:deactivate-old-socks
```

You will see a messege showing the number of product set inactive

## Technologies Used

-   **Backend:** Laravel
-   **Database:** SQLite
