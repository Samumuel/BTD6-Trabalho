CREATE TABLE btd6 (
    id int AUTO_INCREMENT NOT NULL,
    tipo varchar(10) NOT NULL,
    nome varchar (50) NOT NULL,
    classe varchar(15) NOT NULL,
    valor varchar (4) NOT NULL,
    alcance varchar (70) NOT NULL,
    funcao varchar (20),
    area varchar (10),
    PRIMARY KEY (id)
);

ALTER TABLE btd6
MODIFY nome VARCHAR(70) NULL;
