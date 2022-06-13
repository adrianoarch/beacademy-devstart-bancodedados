CREATE DATABASE db_store;

--Selecionar e entrar no banco de dados --
USE db_store;

CREATE TABLE tb_category (
    id INT(11) NOT NULL AUTO_INCREMENT,
    name VARCHAR(30) NOT NULL,
    description VARCHAR(100) NOT NULL,
    PRIMARY KEY (id)
    );

CREATE TABLE tb_product (
    id INT(11) NOT NULL AUTO_INCREMENT,
    name VARCHAR(30) NOT NULL,
    description VARCHAR(100) NOT NULL,
    photo VARCHAR(255) NOT NULL,
    price FLOAT(5,2) NOT NULL,
    category_id INT(11) NOT NULL,
    quantity INT(5) NOT NULL,
    created_at DATETIME NOT NULL,
    PRIMARY KEY (id)
    );


-- Inserir dados na tabela --
INSERT INTO tb_category (name, description)
VALUES 
('Informática', 'Produtos para informática e acessórios'),
('Escritório', 'Produtos para escritório'),
('Eletronicos', 'TVs, Som portátil, caixas de som, etc');

INSERT INTO tb_product (name, description, photo, price, category_id, quantity, created_at)
VALUES
('Mouse', 'Mouse sem fio', 'https://unsplash.com/photos/Ox7mSmsljkc', '50.00', '1', '10', NOW()),
('Teclado', 'Teclado sem fio', 'https://unsplash.com/photos/KYw1eUx1J7Y', '80.00', '1', '10', NOW()),
('Monitor', 'Monitor 21.5 polegadas', 'https://m.media-amazon.com/images/I/61leuCv8MZL._AC_SL1000_.jpg', '550.00', '1', '10', NOW()),
('Impressora', 'Impressora Tanque de tinta', 'https://images-americanas.b2w.io/produtos/01/00/img7/01/00/item/134204/9/134204931SZ.jpg', '999.00', '1', '5', NOW()),
('Processador Intel I5', 'Processador Intel I5 9ª geração', 'https://m.media-amazon.com/images/I/6110pa-yuJL._AC_SL1000_.jpg', '950.00', '1', '5', NOW());

