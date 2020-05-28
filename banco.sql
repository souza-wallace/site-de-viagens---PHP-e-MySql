create database site;
use site;

create table cadastro(
id_cadastro int primary key auto_increment,
nome varchar(55) not null,
email varchar(55) unicode not null,
senha varchar(20) not null,
data_nasc date not null,
telefone varchar(12) not null unique 
);

create table viagens(
id_viagem int primary key auto_increment,
lugar varchar(30) not null,
preco float(10,2) not null,
data_viagem date not null
);

create table news( 
id_email int primary key auto_increment,
email varchar(50) not null unique
);

insert into viagens 
(lugar,preco,data_viagem)values
('Arraial Do Cabo',250, '2020-12-10'
);
insert into viagens 
(lugar,preco,data_viagem)values
('Rio De Janeiro',350, '2020-9-10'
);
insert into viagens 
(lugar,preco,data_viagem)values
('Campos do Jordão',130, '2020-7-10'
);
create table imagens(
id_imagem int primary key auto_increment,
nome varchar(20),
tamanho int(15),https://github.com/souza-wallace/site-de-viagens---PHP-e-MySql
tp_dado mediumblob,
tp_img varchar(12)
);

select *from viagens;