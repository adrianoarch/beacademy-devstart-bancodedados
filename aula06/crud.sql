USE db_escola;

--Inserir dados na tabela --
INSERT INTO tb_professor (nome, cpf, email, senha)
VALUES ('João', '12345678901', 'john@email.com', '123');


--Inserir múltiplos dados na tabela --
INSERT INTO tb_professor (nome, cpf, email, senha)
VALUES
('Maria', '12345678902', 'maria1@email.com', '321'),
('Lisa', '12345678903', 'lisa@email.com', '123'),
('Pedro', '12345678904', 'pedro@email.com', '321'),
('Ane', '12345678905', 'ana@email.com', '123');

--Excluir dados na tabela --
DELETE FROM tb_professor WHERE id = 1;

-- Update dados na tabela --
UPDATE tb_professor SET nome = 'Adriano de Oliveira' WHERE id = 3;

-- Selecionar TODOS * dados da tabela --
SELECT * FROM tb_professor;

-- Selecionar todos os dados de apenas um registro --
SELECT * FROM tb_professor WHERE id = 1;

-- Selecionar alguns dados de todos os professores --
SELECT nome, cpf FROM tb_professor;