use exercicio;
delimiter |
create procedure operac (a int, b int, cod int)
begin
    declare op double;
    if cod = 1 then
        set op = (a + b);
        select op;
    elseif cod = 2 then
        set op = (a - b);
        select op;
    elseif cod = 3 then
        set op = (a/b);
        select op;
    elseif cod = 4 then
        set op = (a * b);
        select op;
    end if;
end;|

call operac (6, 7, 1);