create database projeto_php;
use projeto_php;

create table cliente(
cod_cliente int not null auto_increment primary key,
nome varchar(255),
telefone varchar (255),
endereco varchar(255),
email varchar(255),
idade int,
salario double);

select * from cliente;

create table Matricula_Escolar(
cod_aluno int not null auto_increment primary key,
nome_aluno varchar (255),
curso varchar (255),
turma varchar (255),
periodo varchar (255),
sexo varchar (255),
endereco_aluno varchar (255));

drop table Matricula_Escolar;
select * from Matricula_Escolar;