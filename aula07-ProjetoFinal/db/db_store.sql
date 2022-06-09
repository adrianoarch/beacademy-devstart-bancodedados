CREATE DATABASE db_store;

--Selecionar e entrar no banco de dados --
USE db_store;

CREATE TABLE tb_category (
    id INT(11) NOT NULL AUTO_INCREMENT,
    name VARCHAR(30) NOT NULL,
    description VARCHAR(100) NOT NULL,
    PRIMARY KEY (id)
    );

-- Inserir dados na tabela --
INSERT INTO tb_category (name, description)
VALUES 
('Informática', 'Produtos para informática e acessórios'),
('Escritório', 'Produtos para escritório'),
('Eletronicos', 'TVs, Som portátil, caixas de som, etc');