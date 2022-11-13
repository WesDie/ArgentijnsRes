CREATE TABLE Users (
    user_id int PRIMARY KEY AUTO_INCREMENT NOT NULL,
    firstname varchar(255),
    lastname varchar(255),
    phonenumber int(10),
    email varchar(255),
    role varchar(255)
    );

CREATE TABLE Products (
    product_id int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
    name varchar(255),
    cost_price decimal(8,2),
    selling_price decimal(8,2),
    category varchar(255)
    );
    
CREATE TABLE Orders (
    order_id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    user_id int(11) NOT NULL,
    product_id int(11) NOT NULL,
    quantity int(11),
    status varchar(255),
    category varchar(255),
    FOREIGN KEY (product_id) REFERENCES Products(product_id),
    FOREIGN KEY (user_id) REFERENCES Users(user_id)
    );
    
CREATE TABLE Reservations (
    reservation_id int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
    user_id int(11) NOT NULL,
    name varchar(255),
    tablenumber int(11),
    date_and_time datetime
    );