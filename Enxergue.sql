use enxergue;

CREATE TABLE Empresa (
    ID_Empresa INT NOT NULL AUTO_INCREMENT,
    Nome VARCHAR (50),
    Avaliacao INT,
    Atendimento VARCHAR (100),
    Data_Admissao TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
    Ativo TINYINT(1) DEFAULT 1 NOT NULL,
    CNPJ VARCHAR(10),
    primary key (ID_Empresa)
);

create table endereço (
	ID_Endereco int,
    Pais varchar (50),
    Estado varchar (50),
	Cidade varchar (50),
    Bairro varchar (50),
    Rua varchar (100),
    Numero varchar (10),
    Complemento varchar (50)
);


insert into Empresa (Nome, atendimento,cnpj, data_admissao) values ("Óticas Giovani", "Das 9hs ao meio dia", 1234345687, current_timestamp());

select*from empresa;

truncate table empresa;

drop table empresa;



