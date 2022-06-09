use exercicio;

delimiter |
create procedure nome_numero2 (nome varchar (50), num int)
begin
    declare cont int;
    set cont = 1;
    while cont <= num do
        select nome as "", ",", cont;
        set cont = cont + 1;
    end while;
end;|

call nome_numero2 ("Alda", 3);