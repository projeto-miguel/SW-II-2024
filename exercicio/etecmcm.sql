CREATE DATABASE etecmcm;

USE etecmcm;

CREATE TABLE Alunos (
    id int PRIMARY KEY AUTO_INCREMENT,
    nome varchar(255),
    email varchar(255)
);

CREATE TABLE cursos (
    id int PRIMARY KEY AUTO_INCREMENT,
    nome varchar(255),
    fk_Alunos_id int
);
 
ALTER TABLE cursos ADD CONSTRAINT FK_cursos_2
    FOREIGN KEY (fk_Alunos_id)
    REFERENCES Alunos (id)
    ON DELETE RESTRICT;