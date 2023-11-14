CREATE DATABASE IF NOT EXISTS f32;
USE f32;

SELECT "Creating new tables" AS MESSAGE;

CREATE TABLE IF NOT EXISTS products (
    product_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    product_name VARCHAR(50) NOT NULL,
    product_price DECIMAL (10, 2) NOT NULL

);

CREATE TABLE IF NOT EXISTS orders (
	order_id VARCHAR(50) PRIMARY KEY,
	name VARCHAR(100),
	email VARCHAR(50),
	Adidas_Black_Tee INT UNSIGNED NOT NULL,
    Adidas_Black_Track_Pants INT UNSIGNED NOT NULL,
    Adidas_Astir_Shoes INT UNSIGNED NOT NULL,
    Adidas_Chroma_White_Shoes INT UNSIGNED NOT NULL,
	total DECIMAL (10, 2) NOT NULL
);

SELECT "Filling product table" AS MESSAGE;
INSERT IGNORE INTO f32.products (product_id, product_name, product_price) VALUES
    (1, "Adidas Black Tee", 35.90),
    (2, "Adidas Black Track Pants", 60.00),
    (3, "Adidas Astir Shoes", 109.00),
	(4, "Adidas Chroma White Shoes", 159.00);