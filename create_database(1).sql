CREATE DATABASE books;
CREATE USER 'books_user'@'localhost' IDENTIFIED BY '123456';
GRANT ALL PRIVILEGES ON books.* TO 'books_user'@'localhost';
FLUSH PRIVILEGES;