use exercicio;
delimiter |
create procedure procedimento6()
begin
    select d.nome, count(m.Aluno), sum(m.totalFaltas) 
    from matricula m, disciplina d
    where d.codigodisc = m.disciplina
    group by d.nome
    having sum(m.totalFaltas) > 30;
end;|

call procedimento6();