use exercicio;


delimiter |
create procedure p1 (matricula int)
begin 
    delete from turma where professor = matricula;
End;|

call p1 (2040);



