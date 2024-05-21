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
CREATE TABLE Users(
   User_ID INT AUTO_INCREMENT PRIMARY KEY,
    Email VARCHAR(255),
    Password VARCHAR(255)
);

CREATE TABLE Contact(
    Contact_ID INT AUTO_INCREMENT PRIMARY KEY,
    User_ID INT,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50),
    phone_number VARCHAR(20),
    address VARCHAR(255),
    birth_date DATE,
    registration_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (User_ID) REFERENCES Users(User_ID) ON DELETE CASCADE );
   

CREATE TABLE Orders(
    Order_ID INT AUTO_INCREMENT PRIMARY KEY,
    User_ID INT,
    order_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    total_amount DECIMAL(10, 2) ,
    total_cost DECIMAL(10, 2),
    FOREIGN KEY(User_ID) REFERENCES Users(User_ID) ON DELETE CASCADE
);
    ```
![ER-Diagram](https://github.com/RashikMahmud-Orchi/Simple-PHP-Login-Signup-System/assets/107617728/890fcbb3-a434-4694-b40f-813b83c60e09)

3. **Configure database connection:**
    - Open `cred.php` and update the database configuration with your credentials.

    ```php
    // cred.php
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

- **Signup:** Go to the signup page and create a new account by providing an email and password and all other crerdentials
  ![2](https://github.com/RashikMahmud-Orchi/Simple-PHP-Login-Signup-System/assets/107617728/72bd2c60-e4d6-44e0-9c6b-67f132b78a40)
- **Login:** Use the credentials you signed up with to log in.
 ![Home page](https://github.com/RashikMahmud-Orchi/Simple-PHP-Login-Signup-System/assets/107617728/fe8c3d11-9696-4f5d-860d-c10cc5e50b41)

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
