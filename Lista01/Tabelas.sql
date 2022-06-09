/* essas tabelas irão servir para responder as questões de 1 à 6, da primeira lista*/

create schema exercicio;

use exercicio;

create table Aluno(
Matr int not null primary key,
nome varchar (30) not null,
cpf bigint not null unique,
data_nascimento date,
endereco varchar(30),
cidade varchar(30),
email varchar(29)
);


insert into aluno values(20130101,"João Pedro", 100000, '1998-02-01', null, 'Caico', "joaopedro@ifrn.edu.br");
insert into aluno values(20130102, "Felipe", 11111111111 , '1995-05-01', "Rua Pedro II", 'Jucurutu', "felipe@ifrn.edu.br");
insert into aluno values(20130103, "Emanuel", 100002, '1997-12-01', null, 'Jardim', "emanuel@ifrn.edu.br");
insert into aluno values(20130105, "Marieta", 100013, '1999-02-02', null, 'Natal', "marieta@ifrn.edu.br");

update aluno set endereco="Av. Presidente Lula, 13" where matr=20130101;
-- update aluno set endereco="Endereco nao informado" where endereco is null;



create table Disciplina(
CodigoDisc int not null primary key,
nome varchar(20) not null, 
carga_horaria int
);


insert into disciplina values(1010, "Banco de Dados",null);
insert into disciplina values(1012, "Algoritmos", 120);
insert into disciplina values(1014, "Autoria Web", 90);


create table Professor(
Matric int not null primary key,
nome varchar(30),
cpf bigint not null unique, 
titulação varchar(20),
endereco varchar(30),
cidade varchar(15),
salario int
);


insert into professor values(2020, "Geam", 222333, "mestrado", null, "patos", 2000.00);
insert into professor values(2030, "Marcal", 889988, "mestrado", null, "Jardim", 2000.00);
insert into professor values(2040, "Luiz", 445566, "mestrado", null, "Natal", 2000.00);

-- update professor set salario=salario+(salario*0.1) where nome="Marcal" or nome="Luiz";


create table Turma(
CodigoTurma int not null primary key, 
Disciplina int not null,
Professor int not null, 
ano int, 
horario varchar(20),
periodo int,
foreign key(Disciplina) references disciplina(CodigoDisc),
foreign key(Professor) references Professor(Matric)
);


insert into turma values(10, 1010, 2020,2013, "8:50-10:20", 6);
insert into turma values(20, 1012, 2030,2013, "10:30-11:55", 4);
insert into turma values(30, 1014, 2020,2013, "8:50-10:20", 3);
insert into turma values(39, 1014, 2040,2013, "8:50-10:20", 3);



create table Matricula(
Aluno int not null, 
Turma int not null, 
Disciplina int not null, 
Professor int not null,
ano int,
totalFaltas int,
nota1 real,
nota2 real, 
nota3 real,
primary key(Aluno,Turma,Disciplina,Professor),
foreign key (Aluno) references Aluno(Matr),
foreign key (Turma) references Turma(codigoturma),
foreign key (disciplina) references disciplina(codigodisc),
foreign key (professor) references professor(matric)
);


insert into matricula values(20130101,10,1010,2020,2013,null,null,null,null);
insert into matricula values(20130102,10,1010,2020,2013,null,null,null,null);
insert into matricula values(20130103,10,1010,2020,2013,10,null,null,null);
insert into matricula values(20130105,10,1010,2020,2013,null,null,null,null);
insert into matricula values(20130101,30,1014,2020,2013,null,null,null,null);
insert into matricula values(20130102,30,1014,2020,2013,30,null,null,null);
insert into matricula values(20130103,30,1014,2020,2013,null,null,null,null);
insert into matricula values(20130105,30,1014,2020,2013,null,null,null,null);
insert into matricula values(20130101,20,1012,2030,2013,5,null,null,null);
insert into matricula values(20130102,20,1012,2030,2013,10,null,null,null);
insert into matricula values(20130103,20,1012,2030,2013,15,null,null,null);
insert into matricula values(20130105,20,1012,2030,2013,4,null,null,null);


update matricula set nota1=5 where Disciplina=1010;
update matricula set totalfaltas=40 where aluno=20130101 or aluno=20130103;
update matricula set totalfaltas=28 where aluno=20130102 or aluno=20130105;
update matricula set nota2=10,nota3=8 where aluno=20130101 and Disciplina=1010;
update matricula set nota1=3,nota2=8,nota3=9 where aluno=20130101 and Disciplina=1012;
update matricula set nota1=9.5,nota2=8,nota3=7.7 where aluno=20130101 and Disciplina=1014;
update matricula set nota1=9,nota2=9,nota3=9 where aluno=20130102;
update matricula set nota1=5,nota2=5,nota3=5 where aluno=20130103 or aluno=20130105;


-- delete from matricula where aluno=20130105;
-- delete from matricula where disciplina=1014 and professor=2020;