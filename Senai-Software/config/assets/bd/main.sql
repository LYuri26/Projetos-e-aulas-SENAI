use biblioteca;
DROP TRIGGER IF EXISTS delete_agendamento;
DROP TABLE IF EXISTS cancelamentos;
DROP TABLE IF EXISTS users;
DROP TABLE IF EXISTS agendamentos;
DROP TABLE IF EXISTS superusuario;
DROP TABLE IF EXISTS cadastro;

CREATE TABLE cadastro (
  id INT(20) NOT NULL AUTO_INCREMENT,
  nome VARCHAR(255) NOT NULL,
  codigo VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  senha VARCHAR(255) NOT NULL,
  checksenha VARCHAR(255) NOT NULL,
  PRIMARY KEY (id),
  UNIQUE KEY (senha)
);

CREATE TABLE superusuario (
  id INT(11) NOT NULL AUTO_INCREMENT,
  login VARCHAR(255) NOT NULL,
  codigo VARCHAR(255) NOT NULL,
  email varchar(255) NOT NULL,
  senha VARCHAR(255) NOT NULL,
  PRIMARY KEY (id)
);

CREATE TABLE users (
  id INT(11) NOT NULL AUTO_INCREMENT,
  login VARCHAR(255) NOT NULL,
  codigo VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  senha VARCHAR(255) NOT NULL,
  PRIMARY KEY (id),
  foreign key (senha) REFERENCES cadastro(senha)
);

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
  id INT (50),
  nome VARCHAR(50) NOT NULL PRIMARY KEY,
  motivo VARCHAR(100) NOT NULL
);

DELIMITER //
CREATE TRIGGER delete_agendamento
AFTER INSERT ON cancelamentos
FOR EACH ROW
BEGIN
  DELETE FROM agendamentos
  WHERE id = NEW.id AND nome = NEW.nome;
END //
DELIMITER ;

INSERT INTO cancelamentos VALUES (1, "Lenon Yuri", "Não haverá aula amanhã.");
show tables;
select * from users;
select * from agendamentos;
select * from cancelamentos;
select * from superusuario;
select * from cadastro;
show triggers;

insert into superusuario (login, senha) VALUES ('admin', 'admin123');

/*insert into users (login, senha) VALUES ('usuarioteste', '12345678');*/
