
use exercicio;


delimiter |
create procedure idad (idade int)
begin
    if idade < 16 then
        select "Não pode votar";
    elseif   idade <= 18 and idade >= 16 then
        select "Vota se quiser";
    elseif idade > 18 then
        select "Voto obrigatório";
    end if;
end;|


call idad (19);