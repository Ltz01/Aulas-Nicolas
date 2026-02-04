create database livraria;

use livraria;

CREATE TABLE livros (
id INT AUTO_INCREMENT PRIMARY KEY,
titulo VARCHAR(150) NOT NULL,
autor VARCHAR(150),
ano INT,
categoria VARCHAR(50),
quantidade INT
);

select * from livros

