DROP DATABASE if EXISTS starlysis;
CREATE DATABASE starlysis; 

USE starlysis;

CREATE TABLE usuarios(
id_usuario INT PRIMARY KEY AUTO_INCREMENT,
nome_usuario VARCHAR (50),
email VARCHAR (100),
senha VARCHAR (8),
cpf VARCHAR (11),
nota_compra VARCHAR(10),
tipo_conta INT
);

 

CREATE TABLE projetos (
id_projeto INT PRIMARY KEY AUTO_INCREMENT,
id_usuario INT,
titulo VARCHAR (50),
descricao VARCHAR (200),
nome_arquivo VARCHAR (20),
CONSTRAINT fk_id_usuario FOREIGN KEY (id_usuario) REFERENCES usuarios (id_usuario)
);
CREATE TABLE imagens (
id_imagem INT PRIMARY KEY AUTO_INCREMENT,
id_projeto INT,
nome_imagem VARCHAR(20),
CONSTRAINT fk_id_projeto FOREIGN KEY (id_projeto) REFERENCES projetos (id_projeto)
);