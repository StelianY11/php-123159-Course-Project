CREATE DATABASE books;
CREATE USER 'books_user'@'localhost' IDENTIFIED BY '54321';
GRANT ALL PRIVILEGES ON books.* TO 'books_user'@'localhost';
FLUSH PRIVILEGES;

ALTER TABLE `users`
ADD COLUMN `is_admin` ENUM('0', '1') NOT NULL DEFAULT '0';
