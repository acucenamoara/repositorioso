create database db_fornecedores;
use db_fornecedores;

create table tb_estados (
est_codigo int not null auto_increment,
est_estado varchar(45) not null,
primary key(est_codigo)
);
insert into tb_estados 
	(est_estado)
	values
		('Acre'),
		('Alagoas'), 
		('Amapá'), 
		('Amazonas'),
		('Bahia'), 
		('Ceará'), 
		('Espírito Santo'), 
		('Goiás'),
		('Maranhão'), 
		('Mato Grosso'), 
		('Mato Grosso do Sul'), 
		('Minas Gerais'),
		('Pará'), 
		('Paraíba'),
		('Paraná'), 
		('Pernambuco'),  
		('Piauí'), 
		('Rio de Janeiro'), 
		('Rio Grande do Norte'), 
		('Rio Grande do Sul'), 
		('Rondônia'), 
		('Roraima'), 
		('Piauí'), 
		('Santa Catarina'), 
		('São Paulo'),
		('Sergipe'), 
		('Tocantins'), 
		('Distrito Federal'); 

create table tb_fornecedores (
for_codigo int null auto_increment ,
for_email varchar(45) not null,
for_nomeemp varchar(45) not null,
for_descricao varchar(200) not null,
for_telefone varchar(45) not null,
primary key(for_codigo),
foreign key (for_est_codigo) references tb_estados(est_codigo),
for_est_codigo int not null
);
insert into tb_fornecedores 
	(for_nomeemp,	for_telefone, 		for_email, 		for_descricao, 	for_est_codigo)
	values
	('Pipoca loka', 	'01125374512', 	'pipipopo@gmail.com', 'Fornecedor de pipoca', 1),
	('Mundo kids', 			'25125400400', 	'blibli@gmail.com', 'fornecedor de brinquedos infantis', 3),	
	('Good vibes', 		'00121927955', 	'andrezinhasograu777@gmail.com', 'fornecedor de chá', 2),
	('ASmakes', 		'00121927955', 	 'asmakes@gmail.com', 'fornecedor de maquiagem', 3);	
	
