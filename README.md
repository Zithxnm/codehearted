# CodeHearted

##  Quick Setup Guide

### Pre-Requisites:
[Composer](https://getcomposer.org/download/)\
[Node.js and npm](https://nodejs.org/en/download)

Follow these steps to get the project running on your local machine.

### 1. Clone the Repository
Open your terminal and run:
```bash
git clone https://github.com/Zithxnm/codehearted.git
cd codehearted
```

### 2. Install Backend Dependencies (PHP)
Install the required PHP libraries using Composer:
```bash
composer install
```

### 3. Install Frontend Dependencies (JS)
Install the required JavaScript libraries using NPM:
```bash
npm install
```

### 4. Configure Environment
Create your local environment file by copying the example:
```bash
cp .env.example .env
```

#### Generate the application secutiry key:
```bash
php artisan key:generate
```

### 5. Set Up Database
1. Open phpMyAdmin in your browser
2. Create a new, empty database named codehearted_db
3. Open the .env file in the project folder and update the database settings:
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=codehearted_db
DB_USERNAME=root
DB_PASSWORD=
```

### 6. Run Migrations
```bash
php artisan migrate
```

### 7. Start the application
#### Terminal 1:
```bash
php artisan serve
```
#### Terminal 2:
```bash
npm run dev
```






