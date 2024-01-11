CREATE TABLE Books(
    book_id INT auto_increment NOT NULL,
    google_books_apis VARCHAR(50) NOT NULL,
    PRIMARY KEY(book_id)
);

CREATE TABLE Category(
    category_id INT auto_increment NOT NULL,
    category_name VARCHAR(50) NOT NULL,
    PRIMARY KEY(book_id)
);