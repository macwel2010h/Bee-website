CREATE DATABASE IF NOT EXISTS bee_website_db;

USE bee_website_db;

CREATE TABLE users (
    user_id INT PRIMARY KEY AUTO_INCREMENT UNIQUE,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    email VARCHAR(256) NOT NULL UNIQUE,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(50) NOT NULL
);