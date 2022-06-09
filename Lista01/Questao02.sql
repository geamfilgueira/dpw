
use exercicio;

delimiter |
create procedure procedimento11 ()
begin
    select a.nome, m.nota1
    from matricula m, aluno a
    where a.matr = m.aluno and m.nota1=(select min(m.nota1) from matricula m);
end;
|

call procedimento11 ();