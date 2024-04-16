<?php
include 'functions.php';
$pdo = pdo_connect_pgsql();
$msg = '';
// Verifica se os dados POST não estão vazios
if (!empty($_POST)) {
    // Se os dados POST não estiverem vazios, insere um novo registro
    // Configura as variáveis que serão inserid_contatoas. Devemos verificar se as variáveis POST existem e, se não existirem, podemos atribuir um valor padrão a elas.
    $id_contato = isset($_POST['id_contato']) && !empty($_POST['id_contato']) && $_POST['id_contato'] != 'auto' ? $_POST['id_contato'] : NULL;
    // Verifica se a variável POST "nome" existe, se não existir, atribui o valor padrão para vazio, basicamente o mesmo para todas as variáveis
    $nome = isset($_POST['nome']) ? $_POST['nome'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $cel = isset($_POST['cel']) ? $_POST['cel'] : '';
    $pizza = isset($_POST['pizza']) ? $_POST['pizza'] : '';
    $tipo = isset($_POST['tipo']) ? $_POST['tipo'] : '';
    $cadastro = isset($_POST['cadastro']) ? $_POST['cadastro'] : date('Y-m-d H:i:s');
    // Insere um novo registro na tabela contacts
 // Preparar a instrução SQL
$stmt = $pdo->prepare('INSERT INTO contatos (id_contato, nome, email, cel, tipo, pizza, cadastro) VALUES (?, ?, ?, ?, ?, ?, ?)');
$stmt->execute([$id_contato, $nome, $email, $cel, $tipo, $pizza, $cadastro]);
// Mensagem de saída
$msg = 'Pedido Realizado com Sucesso!';

}
?>
<?=template_header('Cadastro de Pedidos')?>

<div class="content update">
    <h2>Registrar Pedido</h2>
    <form action="create.php" method="post">
        <label for="id_contato">ID</label>
        <input type="text" name="id_contato" placeholder="" value="" id_contato="id_contato">
        <label for="nome">Nome</label>
        <input type="text" name="nome" placeholder="Seu Nome" id_contato="nome">
        <label for="email">Email</label>
        <input type="text" name="email" placeholder="seuemail@seuprovedor.com.br" id_contato="email">
        <label for="cel">Celular</label>
        <input type="text" name="cel" placeholder="(XX) X.XXXX-XXXX" id_contato="cel">
        <label for="cadastro">Data do Pedido</label>
        <input type="datetime-local" name="cadastro" value="<?=date('Y-m-d\TH:i')?>" id_contato="cadastro">
        <label for="tipo">Tipo de Pizza</label>
        <select name="tipo" id="tipo">
            <option value="salgado">Salgado</option>
            <option value="doce">Doce</option>
        </select>
        <button type="button" id="btn_pizza">Pizza</button>
        <div id="pizza_salgado" style="display: none;">
    <label for="pizza_salgado">Pizza Salgada</label>
    <select name="pizza" id="pizza_salgado">
        <option value="Calabresa">Calabresa</option>
        <option value="Mussarela">Mussarela</option>
        <option value="Frango com Catupiry">Frango com Catupiry</option>
        <option value="4 Queijos">4 Queijos</option>
        <option value="Lombo">Lombo</option>
    </select>
</div>
<div id="pizza_doce" style="display: none;">
    <label for="pizza_doce">Pizza Doce</label>
    <select name="pizza_doce" id="pizza_doce">
        <option value="Romeu e Julieta">Romeu e Julieta</option>
        <option value="Chocolate com Banana">Chocolate com Banana</option>
        <option value="Sorvete">Sorvete</option>
        <option value="Ouro Branco">Ouro Branco</option>
        <option value="MM's">MM's</option>
    </select>
</div>

        <br>
        <div class="center">
            <input type="submit" value="Criar">
        </div> 
    </form>
  
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php endif; ?>
</div>

<?=template_footer()?>
<script>
    document.getElementById('btn_pizza').addEventListener('click', function() {
        var tipo = document.getElementById('tipo').value;
        if (tipo === 'salgado') {
            document.getElementById('pizza_salgado').style.display = 'block';
            document.getElementById('pizza_doce').style.display = 'none';
        } else {
            document.getElementById('pizza_salgado').style.display = 'none';
            document.getElementById('pizza_doce').style.display = 'block';
        }
    });
</script>
