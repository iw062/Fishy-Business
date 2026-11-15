-- Run once in MySQL Workbench. Adjust database name if needed.

CREATE TABLE IF NOT EXISTS proj3users (
 id INT AUTO_INCREMENT PRIMARY KEY,
 username VARCHAR(50) NOT NULL UNIQUE,
 password_hash VARCHAR(255) NOT NULL,
 first_name VARCHAR(80) NOT NULL,
 last_name VARCHAR(80) NOT NULL
);
