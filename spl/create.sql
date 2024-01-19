CREATE TABLE Category(
    category_id INT auto_increment NOT NULL,
    category_name VARCHAR(50) NOT NULL,
    PRIMARY KEY(category_id)
);

CREATE TABLE Administrators(
    administrators_id  INT auto_increment NOT NULL,
    password VARCHAR(50) NOT NULL,
    administrators_name  VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    registration_date DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL,
    update_date DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    last_access_date  DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL,
    PRIMARY KEY(administrators_id)
);

CREATE TABLE Users(
    user_id  VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL,
    user_name  VARCHAR(50) NOT NULL,
    gender INT NOT NULL,
    birth DATE NOT NULL,
    mail VARCHAR(50) NOT NULL,
    tel VARCHAR(20) NOT NULL, 
    registration_date DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL,
    update_date DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    last_access_date  DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY(user_id)
);

CREATE TABLE RegisteredBooks(
    user_id VARCHAR(50) NOT NULL,
    book_id VARCHAR(50) NOT NULL,
    category_id INT NOT NULL,
    favorite INT DEFAULT 0 NOT NULL,
    Possession INT DEFAULT 0 NOT NULL,
    purchase_date DATETIME,
    Purchase_amount INT,
    PRIMARY KEY(user_id,book_id,category_id),
    FOREIGN KEY(user_id) REFERENCES Users(user_id),
    FOREIGN KEY(category_id) REFERENCES Category(category_id)
);