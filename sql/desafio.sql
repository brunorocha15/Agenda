create database loja;
use loja;

create table usuario(
	id_usuario int not null auto_increment,
    nome varchar(30),
    sobrenome varchar(30),
    login varchar(30) unique,
    senha varchar(32),
    primary key (id_usuario)
);

create table produto(
	id_produto int not null auto_increment,
    fk_usuario int not null,
    titulo varchar(45),
    descricao text,
    data_validade date,
    primary key (id_prod),
    foreign key (fk_usuario) references usuario(id_usuario)
);
