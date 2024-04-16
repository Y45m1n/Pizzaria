--1
SELECT 
    contatos.*, 
    clientes.*
FROM 
    contatos
INNER JOIN 
    clientes ON contatos.email = email_clientes;

--2
SELECT c.id_contatos, ip.id_item, ip.pizza, ip.quantidade, dp.tamanho, dp.preco
FROM contatos c
JOIN itens_pedido ip ON c.id_contatos = ip.id_contatos
JOIN detalhesPizza dp ON ip.pizza = dp.pizza;

--3
SELECT f.nome AS funcionario, f.funcao AS atribuicao
FROM funcionario f
INNER JOIN areas_trabalho a ON f.id_area = a.id_area;

--4




