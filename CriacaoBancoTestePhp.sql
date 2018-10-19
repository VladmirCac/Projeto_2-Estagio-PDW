
create database teste_php;

create table teste_php.autor(
	codigoAutor int not null auto_increment,
    nomeAutor varchar(300) not null,
    primary key (codigoAutor)
    );

create table teste_php.usuario(
	codigoUsuario int not null auto_increment,
    nomeUsuario varchar(100) not null,
    loginUsuario varchar(30) not null unique,
    senhaUsuario varchar(30) not null,
    primary key (codigoUsuario)
    );
    
insert into teste_php.autor (nomeAutor) 
	values ('MACHADO DE ASSIS'),
		   ('ARIANO SUASSUNTA'),
           ('JOSE LINS DO REGO'),
           ('JOAO UBALDO RIBEIRO')
           ;

insert into teste_php.usuario (nomeUsuario, loginUsuario, senhaUsuario)
	values ('vladmir', 'admin', '123');	
            
			
		