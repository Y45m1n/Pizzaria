CREATE TABLE contatos (
    id_contato SERIAL PRIMARY KEY NOT NULL,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    cel INT NOT NULL,
    tipo VARCHAR(10) NOT NULL,
    pizza VARCHAR(100) NOT NULL, -- Aumentei o tamanho para 100
    cadastro DATE NOT NULL
);
CREATE TABLE clientes (
  
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    endereco VARCHAR(100) NOT NULL,
    cpf VARCHAR(100) PRIMARY KEY NOT NULL
);


CREATE TABLE itens_pedido (
    id_item SERIAL PRIMARY KEY NOT NULL,
    id_contato INT NOT NULL,
    pizza VARCHAR(100) NOT NULL,
    quantidade INT NOT NULL,
    FOREIGN KEY (id_contato) REFERENCES contato(id_contato),
    FOREIGN KEY (pizza) REFERENCES detalhesPizza(pizza)
);


CREATE TABLE funcionario (
   id_funcionario SERIAL PRIMARY KEY NOT NULL,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    funcao VARCHAR(100) NOT NULL,
    cpf VARCHAR(100) PRIMARY KEY NOT NULL
);

DROP TABLE clientes


INSERT INTO clientes (nome, email, endereco, cpf) VALUES
('yasmin', 'yas@yas', 'sao paulo', '2143231431');
INSERT INTO clientes (nome, email, endereco, cpf) VALUES
('rhenan', 'rhe@rhe', 'rio', '53345646');