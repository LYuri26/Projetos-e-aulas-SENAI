CREATE DATABASE Agendamento;
USE Agendamento;
CREATE TABLE agendamentos (
id INT(11) NOT NULL AUTO_INCREMENT,
nome VARCHAR(50) NOT NULL,
data DATE NOT NULL,
hora_inicio TIME NOT NULL,
hora_termino TIME NOT NULL,
quantidade_alunos INT(11) NOT NULL,
curso VARCHAR(50) NOT NULL,
PRIMARY KEY (id)
);


CREATE TABLE cancelamentos (
  id INT PRIMARY KEY AUTO_INCREMENT,
  id_reserva INT NOT NULL,
  motivo TEXT NOT NULL
);