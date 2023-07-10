-- ###### Projeto Loja Virtual ######

-- Criando o banco
create database db_loja_virtual;
use db_loja_virtual;

-- Exibe os DBs existentes
show databases;

-- Exibe as tabelas do banco em execução
show tables;

-- Exclui tabelas do banco
drop table tb_produtos;
drop table tb_desc_tecnicas;
drop table tb_imagens;

-- Criando as tabelas
create table tb_produtos (
	id_produto int not null primary key auto_increment,
    produto varchar(200) not null,
    valor float(8,2) not null
);

create table tb_desc_tecnicas (
	id_desc_tecnica int not null primary key auto_increment,
    id_produto int not null,
    desc_tecnica text not null,
    foreign key(id_produto) references tb_produtos(id_produto)
);

CREATE TABLE tb_imagens (
    id_imagem INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    id_produto INT NOT NULL,
    url_imagem VARCHAR(200) NOT NULL,
    FOREIGN KEY (id_produto) REFERENCES tb_produtos(id_produto)
);

create table tb_clientes (
	id_cliente int not null primary key auto_increment,
    nome varchar(100) not null,
    idade int(3) not null
);

create table tb_pedidos (
	id_pedido int not null primary key auto_increment,
    id_cliente int not null,
    data_hora datetime not null default current_timestamp,
    foreign key (id_cliente) references tb_clientes(id_cliente)
);

create table tb_pedidos_produtos (
	id_pedido int not null,
    id_produto int not null,
    foreign key (id_pedido) references tb_pedidos(id_pedido),
    foreign key (id_produto) references tb_produtos(id_produto)
);

-- Outros comandos
desc tb_clientes;
truncate tb_clientes;

-- Exibe os produtos das tabelas
select * from tb_produtos;
select * from tb_desc_tecnicas;
select * from tb_imagens;
select * from tb_clientes;
select * from tb_pedidos;
select * from tb_pedidos_produtos;

-- Relacionamento Um para Um - Populano tabelas
INSERT INTO tb_produtos(produto, valor) VALUES ('Notebook Dell Inspiron Ultrafino Intel Core i7, 16GB RAM e 240GB SSD', 3500.00);
INSERT INTO tb_produtos(produto, valor) VALUES ('Smart TV LED 40" Samsung Full HD 2 HDMI 1 USB Wi-Fi Integrado', 1475.54);
INSERT INTO tb_produtos(produto, valor) VALUES ('Smartphone LG K10 Dual Chip Android 7.0 4G Wi-Fi Câmera de 13MP', 629.99);
insert into tb_produtos(produto, valor) values ('HD Externo portátil Seagate Expansion 1TB USB 3.0', 274.90);

INSERT INTO tb_desc_tecnicas(id_produto, desc_tecnica) VALUES (1, 'O novo Inspiron Dell oferece um design elegante e tela infinita que amplia seus sentidos, mantendo a sofisticação e medidas compactas...');
INSERT INTO tb_desc_tecnicas(id_produto, desc_tecnica) VALUES (2, 'A smart TV da Samsung possui tela de 40" e oferece resolução Full HD, imagens duas vezes melhores que TVs HDs padrão...');
INSERT INTO tb_desc_tecnicas(id_produto, desc_tecnica) VALUES (3, 'Saia da mesmice. O smartphone LG está mais divertido, rápido, fácil, cheio de selfies e com tela HD de incríveis 5,3"...');

-- Relacionamento Um para Muitos
INSERT INTO tb_imagens(id_produto, url_imagem) VALUES (1, 'notebook_1.jpg'), (1, 'notebook_2.jpg'), (1, 'notebook_3.jpg');
INSERT INTO tb_imagens(id_produto, url_imagem) VALUES (2, 'smarttv_1.jpg'), (2, 'smarttv_2.jpg');
INSERT INTO tb_imagens(id_produto, url_imagem) VALUES (3, 'smartphone_1.jpg');

-- Relacionamentos Muitos para Muitos
INSERT INTO tb_clientes(nome, idade) VALUES('Jorge', 29);
INSERT INTO tb_clientes(nome, idade) VALUES('Jamilton', 30);
INSERT INTO tb_clientes(nome, idade, sexo, endereco) VALUES
	('Luiza Flávia Stefany Barbosa', 69, 'D', 'Travessa José Pinto, 975, Jangurussu, Fortaleza, CE'), 
    ('Rayssa Milena Pires', 47, 'D', 'Travessa Jurumenha, 499, Coophamat, Campo Grande, estado, MS'), 
    ('Bianca Débora Ferreira', 21, 'D', 'Praça Doutor Afrodísio Vidigal, 752, Paraíso, São Paulo, SP'), 
    ('Caio Luan Miguel Almeida', 73, 'D', 'Rua Pingo de Ouro, 665, Setor Morada do Sol, Goiânia, GO'), 
    ('Eduardo Sérgio Erick Galvão', 49, 'D', 'Rua Altair, 920, Maraponga, Fortaleza, CE'), 
    ('Felipe Luiz Ribeiro', 43, 'D', 'Travessa Santa Isabel, 602, Vitória, Rio Branco, AC'), 
    ('Filipe Ian Figueiredo', 19, 'D', 'Quadra 1407 Sul Alameda Cajueiro, 608, Plano Diretor Sul, Palmas, TO'), 
    ('Mariana Sophia Alves', 39, 'D', 'Rua Monte Colina, 865, Monte Alegre, Camboriú, SC');

INSERT INTO tb_pedidos(id_cliente) VALUES(1);
INSERT INTO tb_pedidos(id_cliente) VALUES(1);
INSERT INTO tb_pedidos(id_cliente) VALUES(2);

INSERT INTO tb_pedidos_produtos(id_pedido, id_produto) VALUES(2,3);
INSERT INTO tb_pedidos_produtos(id_pedido, id_produto) VALUES(3,1);
INSERT INTO tb_pedidos_produtos(id_pedido, id_produto) VALUES(1, 2);
INSERT INTO tb_pedidos_produtos(id_pedido, id_produto) VALUES(1, 3);

-- Junção à esquerda (LEFT JOIN)
	select * from tb_produtos;
	select * from tb_desc_tecnicas;
	select * from tb_imagens;
	select * from tb_clientes;
	select * from tb_pedidos;
	select * from tb_pedidos_produtos;

select * from tb_clientes 
left join tb_pedidos on (tb_clientes.id_cliente = tb_pedidos.id_cliente);

select * from tb_produtos
left join tb_imagens on (tb_produtos.id_produto = tb_imagens.id_produto);

-- Junção à direita (RIGHT JOIN)
select * from tb_clientes
right join tb_pedidos on (tb_clientes.id_cliente = tb_pedidos.id_cliente);

-- Junção interna (INNER JOIN)
select * from tb_pedidos 
left join tb_pedidos_produtos on (tb_pedidos.id_pedido = tb_pedidos_produtos.id_pedido);

SELECT * FROM tb_pedidos 
LEFT JOIN tb_pedidos_produtos ON (tb_pedidos.id_pedido = tb_pedidos_produtos.id_pedido) 
LEFT JOIN tb_produtos ON (tb_pedidos_produtos.id_produto = tb_produtos.id_produto);

SELECT * FROM tb_pedidos 
RIGHT JOIN tb_pedidos_produtos ON (tb_pedidos.id_pedido = tb_pedidos_produtos.id_pedido) 
LEFT JOIN tb_produtos ON (tb_pedidos_produtos.id_produto = tb_produtos.id_produto);

SELECT * FROM tb_pedidos 
INNER JOIN tb_pedidos_produtos ON (tb_pedidos.id_pedido = tb_pedidos_produtos.id_pedido);

SELECT * FROM tb_pedidos 
INNER JOIN tb_pedidos_produtos ON (tb_pedidos.id_pedido = tb_pedidos_produtos.id_pedido) 
INNER JOIN tb_produtos ON (tb_pedidos_produtos.id_produto = tb_produtos.id_produto);

-- Apelidando tabelas (ALIAS)
select * from tb_produtos as p
left join tb_desc_tecnicas as dt on (p.id_produto = dt.id_produto);

select  
	p.id_produto,
    p.produto,
    p.valor,
    dt.desc_tecnica
from tb_produtos as p
left join tb_desc_tecnicas as dt on (p.id_produto = dt.id_produto)
where p.valor >= 500
order by p.valor asc;
