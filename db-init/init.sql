CREATE DATBASE IF NOT EXISTS dbname;

USE dbname;

CREATE TABLE IF NOT EXISTS users (
	id INT PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(50) NOT NULL,
	email-id VARCHAR(50) NOT NULL
);

INSERT INTO users (name, email-id) VALUES
	('user1', 'user1.example.com'),
	('user2', 'user2.example.com');
