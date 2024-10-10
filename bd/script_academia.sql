create database if not exists academia;
use academia;


create table alunos(
	id int auto_increment primary key,
    nome varchar(100),
    email varchar(100),
    telefone varchar(20),
    data_nascimento date,
    genero enum("Masculino", "Feminino", "Outros"),
    data_cadastro timestamp default current_timestamp
);

create table professores(
	id int auto_increment primary key,
    nome varchar(100),
    email varchar(100),
    telefone varchar(20),
	data_nascimento date,
    especialidade varchar(100),
    data_contratacao timestamp default current_timestamp,
    genero enum("Masculino", "Feminino", "Outros")
);

create table treinos(
	id int auto_increment primary key,
    descricao varchar(255),
    data timestamp default current_timestamp,

    aluno_id int,
    constraint treinos_aluno_id foreign key (aluno_id) references alunos(id),
    
    professor_id int,
    constraint treinos_professor_id foreign key (professor_id) references professores(id)
);
