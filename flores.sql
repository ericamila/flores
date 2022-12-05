create database atvflores;

use atvflores;

create table flores(
codigo int not null auto_increment,
nome varchar(45),
quantidade int,
primary key (codigo));

insert into flores (nome, quantidade) values ('Crisântemo', 7);
insert into flores (nome, quantidade) values ('Girassol', 2);
insert into flores (nome, quantidade) values ('Jasmim', 10);
insert into flores (nome, quantidade) values ('Margarida', 5);
insert into flores (nome, quantidade) values ('Amor-perfeito', 9);

select * from flores;
