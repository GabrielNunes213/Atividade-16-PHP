CREATE DATABASE banco16_Gabriel;

USE banco16_Gabriel;

CREATE TABLE tabela_pessoas(
    id_pessoa INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    nome_pessoa VARCHAR(45),
    telefone_pessoa BIGINT(15),
    email_pessoa VARCHAR(45)
);

SELECT * FROM tabela_pessoas;