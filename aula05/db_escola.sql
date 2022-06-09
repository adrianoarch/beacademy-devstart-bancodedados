-- Para criar um banco de dados --
CREATE DATABASE db_escola;

-- selecionar o banco de dados --
USE db_escola;

-- deletar tabela --
DROP TABLE tb_professor;

-- Criar tabela --
CREATE TABLE tb_professor (
    id INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    cpf CHAR(11) UNIQUE NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    senha VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
);

-- Criar tabela --
CREATE TABLE tb_aluno (
    id INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    cpf CHAR(11) UNIQUE NOT NULL,
    matricula VARCHAR(8) UNIQUE NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    senha VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE tb_curso (
    id INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE tb_disciplina (
    id INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    curso_id INT NOT NULL,
    professor_id INT NOT NULL,
    PRIMARY KEY (id)
);

-- Inserir dados na tabela --
INSERT INTO tb_professor (nome, cpf, email, senha) 
VALUES ('Adriano', '12345678901', 'professor@email.com', '123');

INSERT INTO tb_professor (nome, cpf, email, senha)
VALUES ('Ane', '12345678902', 'maria@email.com', '321');

-- Selecionar dados --
SELECT * FROM tb_professor;