create database loja; 
use loja;
create table tbProduto(
id int auto_increment primary key,
nome varchar(50),
quantidade int, 
preco_unitario decimal(10, 2),
caminho_img varchar(300)
);

create table tbPedido(
id int auto_increment primary key,
nome varchar(50),
quantidade int, 
preco_unitario decimal(10, 2)
);

create table tbTotal(
total decimal(10, 2)
);
