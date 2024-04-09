CREATE DATABASE ex3

CREATE TABLE Produtos (
    id_produto SERIAL PRIMARY KEY NOT NULL,
    nome_produto VARCHAR(100),
    qtde INT NOT NULL,
    valor DECIMAL(7,2)
)

DROP TABLE Produtos

SELECT * FROM Produtos
INSERT INTO Produtos
VALUES (DEFAULT, 'MOUSE','10','45.00')
