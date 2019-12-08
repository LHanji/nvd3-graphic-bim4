CREATE TABLE jogo(
    id_jogo bigint not null PRIMARY KEY AUTO_INCREMENT,
	red_dead float null,
    call_of_duty float null,
    gta float null,
    star_wars float null,
    fortnite float null,
    lol float null,
    cs_go float null,
    pubg_lite float null,
    pubg float null,
    minecraft float null
);

--Valores a serem inseridos
insert into jogo(call_of_duty,cs_go,fortnite,gta,lol,minecraft,pubg,pubg_lite,red_dead,star_wars)
VALUES(194.808,78.047,95.759,190.612,92.495,50.955,61.999,76.830,311.368,179.496)