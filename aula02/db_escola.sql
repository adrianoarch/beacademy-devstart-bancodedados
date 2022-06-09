-- Para criar um banco de dados --
CREATE DATABASE db_escola;

-- selecionar o banco de dados --
USE db_escola;

-- Criar tabela --
CREATE TABLE tb_professor (
    id INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    cpf CHAR(11) NOT NULL,
    email VARCHAR(255) NOT NULL,
    senha VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
);

-- Criar tabela --
CREATE TABLE tb_aluno (
    id INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    cpf CHAR(11) NOT NULL,
    matricula VARCHAR(8) NOT NULL,
    email VARCHAR(255) NOT NULL,
    senha VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
);