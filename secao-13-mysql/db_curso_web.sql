-- Active: 1668601960583@@127.0.0.1@3306@db_curso_web
-- ###### Seleciona um banco ######
use db_curso_web;


-- ###### CREATE TABLE em bancos ######
create table db_curso_web.tb_cursos (
    id_curso int not null,
    imagem_curso varchar(100) not null,
    nome_curso char(50) not null,
    resumo text null,
    data_cadastro datetime not null,
    ativo boolean default true,
    investimento float(8,2) default 0
);

CREATE TABLE db_curso_web.tb_alunos (
	id_aluno int,
	nome varchar(255) default NULL,
	idade int default NULL,
	interesse varchar(255) default NULL,
	email varchar(255) default NULL,
	estado varchar(255) default NULL
);

CREATE TABLE db_curso_web.tb_cursos (
  id_curso INT(11) NOT NULL,
  imagem_curso VARCHAR(100) NOT NULL,
  nome_curso CHAR(50) NOT NULL,
  resumo TEXT NULL,
  data_cadastro DATETIME NOT NULL,
  ativo BOOLEAN DEFAULT 1,
  investimento FLOAT(8,2) DEFAULT 0,
  carga_horaria INT(5) NULL  
);


-- ###### Exibir tabelas no banco ######
show tables;


-- ###### DROP em tabelas ######
drop table db_curso_web.tb_cursos;

drop table db_curso_web.tb_alunos;


-- ###### TRUNCATE em tabelas ######
truncate tb_cursos;

truncate tb_alunos;


-- ###### RENAME em tabelas ######
rename table db_curso_web.tb_cursos_teste to db_curso_web.tb_cursos;


-- ###### ALTER TEBLE em colunas ######
alter table db_curso_web.tb_cursos add column carga_horaria int(5) not null;

alter table db_curso_web.tb_cursos change carga_hora carga_horaria int(5) null;

alter table db_curso_web.tb_cursos drop carga_horaria;


-- ###### INSERT em tabelas ######
insert into tb_cursos(ativo, carga_horaria, data_cadastro, id_curso, imagem_curso, investimento, nome_curso, resumo) values (1, 15, '2018-07-27 00:00:00', 1, 'curso_node.jpg', 550.75, 'Curso Completo NodeJS e MongoDB', 'Cria aplicações back-end incriveis com a plataforma NodeJS e o banco de dados MongoDB');

insert into tb_cursos(ativo, carga_horaria, data_cadastro, id_curso, imagem_curso, investimento, nome_curso, resumo) values (1, 35, '2018-07-27 12:25:35', 2, 'curso_angular.jpg', 575.86, 'Web Completo com JS, TS e Angular', 'Aprenda a criar aplicações front-end incríveis com Javascript, TypeScript e Angular');

INSERT INTO tb_alunos (`id_aluno`,`nome`,`idade`,`interesse`,`email`,`estado`) VALUES (1,"Jorden",47,"Esporte","vel.mauris.Integer@nec.net","DF"),(2,"Lacey",59,"Jogos","ligula.eu.enim@egetlaoreetposuere.com","SC"),(3,"Lillith",48,"Saúde","Curabitur@atvelitCras.org","MA"),(4,"Zephania",63,"Saúde","erat.vitae@loremtristiquealiquet.net","RS"),(5,"Scarlett",95,"Informática","facilisis.Suspendisse.commodo@placeratCrasdictum.org","MS"),(6,"Nash",39,"Música","Aliquam@Maurisquisturpis.org","BA"),(7,"Indigo",62,"Informática","mus.Proin@laoreet.co.uk","GO"),(8,"Bernard",77,"Esporte","ut@Craspellentesque.net","PA"),(9,"Cheyenne",78,"Música","vel.pede@liberoduinec.co.uk","PR"),(10,"Nerea",88,"Música","non@facilisisvitae.edu","PB"),(11,"Lucius",57,"Esporte","eu.erat@interdum.ca","PE"),(12,"Fallon",38,"Saúde","risus@Etiamimperdietdictum.net","MT"),(13,"Steven",35,"Música","tellus@netus.org","CE"),(14,"Paul",37,"Música","sollicitudin.adipiscing@magnaCras.edu","GO"),(15,"Bradley",31,"Música","massa.Vestibulum@vitaesemperegestas.com","AP"),(16,"Jeanette",46,"Informática","vitae@accumsannequeet.co.uk","MG"),(17,"Craig",40,"Informática","magna.et.ipsum@tellusid.edu","MS"),(18,"Maia",94,"Esporte","ac@tempusnon.co.uk","PB"),(19,"Harriet",16,"Jogos","ante.ipsum@maurissitamet.com","AL"),(20,"Finn",99,"Informática","metus.vitae@vitaerisusDuis.com","MT"),(21,"Rafael",71,"Esporte","adipiscing.elit.Etiam@vel.edu","MG"),(22,"Cynthia",85,"Esporte","Donec.nibh.Quisque@Sed.org","RN"),(23,"Evelyn",13,"Informática","lacus.Aliquam.rutrum@etrutrumeu.edu","MA"),(24,"Sybil",39,"Saúde","semper@nuncsed.com","ES"),(25,"Uriel",10,"Esporte","semper.pretium.neque@eumetusIn.ca","PB");

INSERT INTO tb_alunos (`id_aluno`,`nome`,`idade`,`interesse`,`email`,`estado`) VALUES (26,"Dakota",99,"Esporte","ipsum@etrutrumnon.co.uk","PB"),(27,"Stewart",31,"Saúde","natoque.penatibus.et@inhendrerit.org","CE"),(28,"Cruz",96,"Saúde","Cum.sociis.natoque@elementumloremut.org","RS"),(29,"Kadeem",57,"Informática","consectetuer@faucibusleoin.net","MS"),(30,"Wyatt",36,"Música","feugiat.non@dolorsitamet.net","SC"),(31,"Griffith",28,"Jogos","Lorem@elementumsem.com","RO"),(32,"Yvette",39,"Saúde","mauris@dignissim.com","RO"),(33,"Burton",14,"Esporte","leo.elementum.sem@arcuVestibulumante.edu","SC"),(34,"Tatum",4,"Saúde","eget.lacus@nequeInornare.com","PA"),(35,"Graham",88,"Informática","ac@necurna.com","ES"),(36,"Aretha",37,"Esporte","malesuada.augue@Nunc.com","ES"),(37,"Sloane",5,"Saúde","parturient@purusMaecenaslibero.net","CE"),(38,"Uriel",81,"Saúde","Praesent.interdum@enimnon.net","AL"),(39,"Cameran",61,"Esporte","sem.consequat@senectus.com","PR"),(40,"Chiquita",8,"Jogos","nisl.Quisque@utodio.co.uk","MA"),(41,"Tanek",40,"Esporte","nonummy@lectusNullamsuscipit.org","AL"),(42,"Bruno",3,"Jogos","semper.Nam@atpretium.ca","DF"),(43,"Winter",14,"Jogos","Quisque.nonummy@dolorNulla.ca","RS"),(44,"Jacob",82,"Música","nec.eleifend.non@sapien.ca","RR"),(45,"Kuame",98,"Esporte","placerat@ametorci.ca","PR"),(46,"Orli",74,"Saúde","eu.erat.semper@dolorsitamet.co.uk","ES"),(47,"Amber",24,"Informática","eleifend.non@quamvelsapien.org","AL"),(48,"Roary",77,"Saúde","quis.pede.Suspendisse@Duisa.com","SE"),(49,"Octavius",28,"Jogos","euismod.in.dolor@posuere.edu","PA"),(50,"Isabella",54,"Informática","eu@euarcuMorbi.ca","RR");

INSERT INTO tb_alunos (`id_aluno`,`nome`,`idade`,`interesse`,`email`,`estado`) VALUES (51,"Driscoll",70,"Informática","sem@malesuada.com","SP"),(52,"Brendan",45,"Informática","arcu.et.pede@magna.com","SC"),(53,"Quon",18,"Informática","elit@adipiscingnon.org","AP"),(54,"Rajah",48,"Informática","magna.tellus@Quisquefringilla.org","RJ"),(55,"Lewis",32,"Informática","faucibus@vulputate.com","PA"),(56,"Ronan",34,"Esporte","tellus.non@eleifend.com","CE"),(57,"Baxter",72,"Esporte","enim.sit@urnanec.ca","DF"),(58,"Kyla",6,"Esporte","facilisis.eget@sociosquadlitora.net","AM"),(59,"Ava",54,"Jogos","velit@acmattis.edu","RN"),(60,"Leonard",59,"Música","fermentum.arcu@consequatenim.ca","MS"),(61,"Byron",17,"Música","Pellentesque.habitant.morbi@sapienNunc.edu","MT"),(62,"Roary",52,"Jogos","nec.eleifend.non@velvenenatis.org","GO"),(63,"Amery",89,"Informática","mauris.aliquam.eu@Proindolor.net","PA"),(64,"Adele",40,"Saúde","scelerisque@velvenenatisvel.com","RR"),(65,"Ronan",14,"Saúde","posuere.cubilia@Donecnonjusto.co.uk","RJ"),(66,"Marny",53,"Saúde","convallis.in.cursus@blanditatnisi.com","PA"),(67,"Camden",31,"Música","magna@mauriseu.edu","RJ"),(68,"Yoko",13,"Música","dolor@vehiculaet.com","AM"),(69,"Ina",71,"Informática","gravida.sagittis@tempusscelerisquelorem.com","AL"),(70,"Tyler",3,"Esporte","Proin.dolor.Nulla@nascetur.org","PI"),(71,"Destiny",19,"Saúde","augue.id@elementum.edu","MG"),(72,"Glenna",82,"Jogos","dui@interdumligula.ca","AP"),(73,"Buffy",55,"Esporte","dictum.eu@placeratvelitQuisque.net","MA"),(74,"Hashim",27,"Música","est.congue@enim.org","MA"),(75,"Hiram",67,"Saúde","nunc.sit.amet@nibhPhasellus.co.uk","RN");

INSERT INTO tb_alunos (`id_aluno`,`nome`,`idade`,`interesse`,`email`,`estado`) VALUES (76,"Kenneth",50,"Esporte","a.nunc.In@Integermollis.edu","AL"),(77,"Ariel",9,"Jogos","Etiam.vestibulum.massa@egestas.edu","PA"),(78,"Barrett",24,"Informática","fringilla.mi@liberoIntegerin.com","PA"),(79,"Kato",25,"Música","cursus.in.hendrerit@eu.org","BA"),(80,"Lance",50,"Saúde","Nullam@necurna.net","CE"),(81,"Porter",50,"Jogos","ultrices.mauris@nequesed.org","PA"),(82,"Zeus",26,"Informática","hymenaeos@Integereu.net","RR"),(83,"Oleg",36,"Informática","Nam@morbitristiquesenectus.ca","AL"),(84,"Erin",25,"Saúde","ligula@Nullam.edu","TO"),(85,"Wade",61,"Esporte","odio.Aliquam.vulputate@egestas.edu","MS"),(86,"Ross",92,"Música","tortor.at.risus@ac.edu","DF"),(87,"Martina",24,"Música","Cras@lacusAliquam.com","MS"),(88,"Rowan",75,"Saúde","erat@afelisullamcorper.com","RO"),(89,"Aristotle",22,"Esporte","at.auctor@Utnecurna.net","PI"),(90,"Bernard",24,"Saúde","placerat.orci.lacus@vitaesemperegestas.edu","RJ"),(91,"Teegan",9,"Música","id@Fuscealiquam.co.uk","DF"),(92,"Graiden",7,"Jogos","ante.dictum@nibhAliquam.co.uk","AL"),(93,"Alec",50,"Música","vestibulum.neque.sed@nislQuisque.co.uk","PE"),(94,"Savannah",61,"Jogos","odio.a.purus@nequeSedeget.co.uk","ES"),(95,"Rafael",45,"Informática","a@dolorsit.net","PB"),(96,"Clementine",32,"Saúde","dictum@Aliquamerat.edu","RS"),(97,"Tasha",53,"Esporte","in@justoProin.co.uk","AC"),(98,"Hector",83,"Música","Class.aptent@et.co.uk","AM"),(99,"Tara",95,"Jogos","Donec.porttitor.tellus@nonfeugiat.co.uk","DF"),(100,"Charissa",50,"Informática","orci@elementumduiquis.ca","AP");

INSERT INTO tb_cursos(id_curso, imagem_curso, nome_curso, resumo, data_cadastro, ativo, investimento, carga_horaria) VALUES (1, 'curso_node.jpg', 'Curso Completo do Desenvolvedor NodeJS e MongoDB', 'Resumo do curso de NodeJS', '2018-01-01', 1, 159.99, 15), (2, 'curso_react_native.jpg', 'Multiplataforma Android/IOS com React e Redux', 'Resumo do curso de React Native', '2018-02-01', 1, 204.99, 37), (3, 'angular.jpg', 'Desenvolvimento WEB com ES6, TypeScript e Angular', 'Resumo do curso de ES6, TypeScript e Angular', '2018-03-01', 1, 579.99, 31), (4, 'web_completo_2.jpg', 'Web Completo 2.0', 'Resumo do curso de Web Completo 2.0', '2018-04-01', 1, 579.99, 59), (5, 'linux.jpg', 'Introdução ao GNU/Linux', 'Resumo do curso de GNU/Linux', '2018-05-01', 0, 0, 1);


-- ###### SELECT em tabelas ######

-- Consultando dados:
select * from tb_cursos;
select * from tb_alunos;

select id_curso, nome_curso, carga_horaria, investimento from tb_cursos;

-- Filtros co operadores lógicos e de comparação:
select * from tb_cursos;
select * from tb_alunos;

select * from tb_alunos
where interesse = 'Informática'
and (estado = 'PE' or idade <= 40);

-- Filtros com operador BETWEEN e lógico:
select * from tb_cursos;
select * from tb_alunos;

select * from tb_alunos
where interesse = 'Informática'
and idade between 18 and 40;

-- Filtros com operador IN:
select * from tb_cursos;
select * from tb_alunos;

select id_aluno, nome, idade, interesse, email, estado from tb_alunos
where interesse in ('Jogos', 'Esporte', 'Música');

select * from tb_alunos
where interesse not in ('Jogos', 'Esporte', 'Música');

-- Filtros com operador LIKE:
select * from tb_cursos;
select * from tb_alunos;

select id_aluno, nome, idade, interesse, email, estado
from tb_alunos
where nome like '%ve%';

select * from tb_alunos
where nome like ('_ve%');

select id_aluno, nome, idade, interesse, email, estado 
from tb_alunos
where nome like ('_ru_');

-- Ordenando resultados:
select * from tb_cursos;
select * from tb_alunos;

select * from tb_alunos
where idade between 18 and 59
order by nome asc;

select * from tb_alunos
where idade between 18 and 59
order by idade desc, nome asc, estado asc;

-- Limitando retorno:
select * from tb_cursos;
select * from tb_alunos;

select * from tb_alunos
order by id_aluno desc
limit 25;

select * from tb_alunos
limit 4
offset 0;

select * from tb_alunos
limit 0,4;

-- Funções de agregação (MAX, MIN, AGV):
select * from tb_cursos;
select * from tb_alunos;

select min(investimento) as 'Valor mínimo' from tb_cursos
where ativo = true;

select max(investimento) as 'Valor mínimo' from tb_cursos
where ativo = true;

select avg(investimento) as 'Valor médio'
from tb_cursos
where ativo = true;

-- Funções de agregação - SUM e COUNT:
select * from tb_cursos;
select * from tb_alunos;

select sum(investimento) from tb_cursos
where ativo = true;

select count(*) from tb_cursos
where ativo = true;

-- Agrupando seleção de registros (GROUP BY):
select * from tb_cursos;
select * from tb_alunos;

select interesse as Interesse, count(*) as Registros from tb_alunos
group by interesse;

select estado as Estado, count(*) as 'Total por Estado' from tb_alunos
group by estado;

-- Filtrando seleções agrupadas (HAVING):
select * from tb_cursos;
select * from tb_alunos;

select estado as Estado, count(estado) as Total from tb_alunos
group by estado
having Total > 5;

select estado as Estado, count(estado) as Total_Estado
from tb_alunos
group by Estado
having Estado in ('MG', 'SP');

select estado as Estado, count(estado) as Total_Estado
from tb_alunos
group by Estado
having estado in ('CE', 'SC') and Total_Estado > 4;

select estado as Estado, count(estado) as Total_Estado
from tb_alunos
where interesse != 'Esporte'
group by Estado
having Total_Estado > 3;


-- ###### UPDATE em tabelas ######

--  Atualizando registros (UPDATE):
select * from tb_cursos;
select * from tb_alunos;

update tb_alunos
set nome = 'João'
where id_aluno = 13;

update tb_alunos
set interesse = 'Saúde'
where idade >= 80;

update tb_alunos
set nome = 'José', idade = 25, email = 'jose@gmail.com'
where id_aluno = 18;

update tb_alunos
set nome = 'Maria'
where idade between 18 and 25 and estado = 'PA';


-- ###### DELETE em tabelas ######

-- Excluindo registros (DELETE):
select * from tb_cursos;
select * from tb_alunos;

delete from tb_alunos
where id_aluno = 5;

delete from tb_alunos 
where idade in (10, 18, 22, 28, 34) 
and interesse = 'Esporte';
