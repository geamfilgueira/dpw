
use exercicio;

delimiter |
create procedure procedimento43 (matricula int, nome varchar (30), cpf bigint, data_nascimento date, endereco varchar (30),cidade varchar(30), email varchar (29))
begin
    insert aluno values (matricula, nome, cpf, data_nascimento, endereco, cidade, email);
end; |


call procedimento43 (2346, "jose", 2324, '01/01/2014', "rua das laranjeiras", "jardim", "akljfk@kfln");

