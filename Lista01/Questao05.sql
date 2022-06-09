use exercicio;

delimiter |
create procedure procedimento08 (matricula int, nome varchar (30), cpf bigint, titulaçao varchar (20), endereco varchar (30), cidade varchar(15), salario int)
begin
    insert aluno values (matricula, nome, cpf, titulação, endereco,cidade, salario);
end; |

