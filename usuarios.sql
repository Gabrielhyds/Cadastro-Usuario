CREATE DATABASE usuarios;
USE usuarios;

CREATE TABLE usuarios(
	id INT AUTO_INCREMENT,
	nome VARCHAR(50),
	email VARCHAR(50),
	profissao VARCHAR(50),
	PRIMARY KEY(id)
);