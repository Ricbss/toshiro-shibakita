CREATE TABLE alunos (
    aluno_id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(50) NOT NULL,
    sobrenome VARCHAR(50) NOT NULL,
    endereco VARCHAR(100),
    cidade VARCHAR(50),
    host VARCHAR(50)
);
