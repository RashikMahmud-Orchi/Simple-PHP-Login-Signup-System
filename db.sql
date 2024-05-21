USE orchi;

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


