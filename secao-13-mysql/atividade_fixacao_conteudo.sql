show tables;
desc tb_clientes;
desc tb_pedidos_produtos;
desc tb_pedidos;
desc tb_produtos;

select * from tb_clientes
where idade >= 29
order by idade asc;

alter table tb_clientes
add column sexo char(1) not null;

alter table tb_clientes
add column endereco varchar(150);

update tb_clientes
set sexo = 'M'
where id_cliente in (1,2,3,6,7);

update tb_clientes
set sexo = 'F'
where id_cliente between 4 and 5 
or id_cliente between 8 and 10;

update tb_clientes
set sexo = 'F'
where id_cliente in (3, 4, 10);

select tc.id_cliente, tc.nome, tc.idade, 
	   tpd.produto, tpd.valor
from tb_clientes tc
inner join tb_pedidos tp on (tc.id_cliente = tp.id_cliente)
inner join tb_pedidos_produtos tpp on (tp.id_pedido = tpp.id_pedido)
left join tb_produtos tpd on (tpp.id_produto = tpd.id_produto);