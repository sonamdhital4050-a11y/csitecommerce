CREATE DATABASE IF NOT EXISTS csitecommerce;

use csitecommerce;

CREATE TABLE IF NOT EXISTS users(
uid int AUTO_INCREMENT PRIMARY key,
name varchar(100),
email varchar(100) UNIQUE,
password varchar(100),
gender ENUM("male","female","others"),
role SET("admin","user"),
image varchar(100),
created_at datetime,
updated_at datetime
);