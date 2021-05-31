CREATE DATABASE chat_b7web;
USE chat_b7web;

CREATE TABLE users(
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    pass VARCHAR(255)NOT NULL
);
ALTER TABLE users ADD COLUMN loginhash VARCHAR(25);
CREATE TABLE groups(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL
);

CREATE TABLE messages(
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_user INT NOT NULL,
    id_group INT NOT NULL,
    date_msg DATETIME NOT NULL,
    msg TEXT NOT NULL
);