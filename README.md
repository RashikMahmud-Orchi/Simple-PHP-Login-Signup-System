# Simple PHP Login Signup System

Welcome to the Simple PHP Login Signup System repository! This project provides a straightforward implementation of a login and signup system using PHP and MySQL.

## Features

- User registration with email and password
- User login with email and password
- Password hashing for security
- Basic session management
- Form validation with error messages (using regex for validation)

## Requirements

- PHP 
- MySQL 
- A web server (e.g., Apache, Nginx)
- Composer (for dependency management, if needed)

## Installation

1. **Clone the repository:**
    ```bash
    git clone https://github.com/yourusername/Simple-PHP-Login-Signup-System.git
    cd Simple-PHP-Login-Signup-System
    ```

2. **Database setup:**
    - Create a new MySQL database.
    - Import the `database.sql` file into your MySQL database. This file contains the necessary table structure.

    ```sql
    CREATE DATABASE your_database_name;
    USE your_database_name;
    SOURCE path/to/database.sql;
    ```

3. **Configure database connection:**
    - Open `config.php` and update the database configuration with your credentials.

    ```php
    // config.php
    $dbHost = 'localhost';
    $dbUsername = 'your_username';
    $dbPassword = 'your_password';
    $dbName = 'your_database_name';
    ```

4. **Start the server:**
    - If you're using a local server setup, make sure your server is running and navigate to the project directory in your browser.

    ```bash
    php -S localhost:8000
    ```

5. **Access the application:**
    - Open your web browser and go to `http://localhost:8000`.

## Usage

- **Signup:** Go to the signup page and create a new account by providing an email and password.
- **Login:** Use the credentials you signed up with to log in.

## Project Structure

```plaintext
Simple-PHP-Login-Signup-System/
│
├── config.php           # Database configuration
├── index.php            # Homepage
├── login.php            # Login page
├── signup.php           # Signup page
├── welcome.php          # Welcome page after login
├── database.sql         # Database structure file
└── README.md            # Project documentation
