CREATE DATABASE books;
CREATE USER 'books_user'@'localhost' IDENTIFIED BY '54321';
GRANT ALL PRIVILEGES ON books.* TO 'books_user'@'localhost';
FLUSH PRIVILEGES;