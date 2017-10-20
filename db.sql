CREATE DATABASE sprungchat;
USE sprungchat;
CREATE TABLE messages(
	id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(20) NOT NULL,
    content VARCHAR(140) NOT NULL
);

CREATE TABLE access_log(
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	ip VARCHAR(45),
	browser VARCHAR(100),
	referer VARCHAR(100),
	query VARCHAR(45)
);