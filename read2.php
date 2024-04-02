<?php
include 'functions.php';
// Conectar ao banco de dados PostgreSQL
$pdo = pdo_connect_pgsql();
// Obter a página via solicitação GET (parâmetro URL: page), se não existir, defina a página como 1 por padrão
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;
// Número de registros para mostrar em cada página
$records_per_page = 5;
// Preparar a instrução SQL para selecionar os nomes dos clientes e das pizzas
$stmt = $pdo->prepare('SELECT nome, pizza FROM contatos ORDER BY pizza OFFSET :offset LIMIT :limit');
$stmt->bindValue(':offset', ($page - 1) * $records_per_page, PDO::PARAM_INT);
$stmt->bindValue(':limit', $records_per_page, PDO::PARAM_INT);
$stmt->execute();
// Buscar os registros para exibi-los em nosso modelo.
$orders = $stmt->fetchAll(PDO::FETCH_ASSOC);
// Obter o número total de contatos, isso é para determinar se deve haver um botão de próxima e anterior
$num_contacts = $pdo->query('SELECT COUNT(*) FROM contatos')->fetchColumn();
?>

<?=template_header('Visualizar Pedidos')?>

<div class="content read">
    <h2>Pedidos Filtrados pela Pizza</h2>
    <table>
        <thead>
            <tr>
               
                <th>Pizza</th>
                <th>Nome do Cliente</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($orders as $order): ?>
            <tr>
               
                <td><?=$order['pizza']?></td>
                <td><?=$order['nome']?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?=template_footer()?>
