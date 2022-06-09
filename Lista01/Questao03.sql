use exercicio;

delimiter |
create procedure questa3 (matricula int)
begin
    select d.nome, t.ano, t.horario, t.periodo 
    from professor p, disciplina d, turma t
    where p.matric = matricula and t.professor = p.matric and t.disciplina = d.codigodisc;
end;|

call questa3 (2020);