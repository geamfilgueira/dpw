create schema Semanacul;

use Semanacul;

create table Sematec(
	id_turma int primary key,
    nome_guerra varchar(30),
    nota1 int,
    nota2 int,
    nota3 int,
    media float,
    data_ap date
);

select * from Sematec;
