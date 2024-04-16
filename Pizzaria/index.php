<?php
include 'functions.php';
?>
<?= template_header ('Limas Pizza')?>

<div class="content text-center">
    <h2 style="color: #F1A204;"> Bem-vindo ao universo da Lima's Pizza, onde cada mordida é uma celebração da arte de fazer pizza.</h2>
    <p>Na Lima's Pizza, cada fatia é uma experiência de sabor, onde cada mordida é um convite para uma jornada de delícias artesanais. 
        <br>Celebre a paixão pela pizza com ingredientes frescos, sabores autênticos e uma massa que derrete na boca. 
        Sinta o calor, saboreie a tradição e entregue-se à perfeição em cada pedaço. 
       </p>
    
       <div id="carouselExample" class="carousel slide" style="max-width: 800px; margin: 0 auto;">
    <div class="carousel-inner" style="width:800px; height: 500px;"> <!-- Altura aumentada para 600px -->
        <div class="carousel-item active">
            <img src="img/carrossel1.jpg" class="d-block w-100" style="max-width: 800px; height: 500px; object-fit: cover;" alt="...">
        </div>
        <div class="carousel-item"> 
            <img src="img/carrossel2.jpg" class="d-block w-100" style="max-width: 800px; height: 500px; object-fit: cover;" alt="...">
        </div>
        <div class="carousel-item">
            <img src="img/carrossel3.jpg" class="d-block w-100" style="max-width: 800px; height: 500px; object-fit: cover;" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
</div>
<div class="content text-center">
    <h2  style="color: #F1A204;">Pizzas em destaque</h2>
    
    <div class="row mt-5">
        <!-- Cards superiores -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="img/carrossel1.jpg" class="card-img-top" alt="Imagem do Card 1"  style="width:315px; height: 222px;">
                <div class="card-body">
                    <h5 class="card-title">Pizza de Calabresa</h5>
                    <p class="card-text">
A pizza calabresa é uma opção clássica, com calabresa defumada e temperada, que se destaca pelo sabor intenso e combinação de queijo e molho de tomate.</p>
                    <a href="create.php" class="btn btn-primary">Realizar Pedido</a> 
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="img/pizzafrango.jpg" class="card-img-top" alt="Imagem do Card 1" style="width:315px; height: 222px;">
                <div class="card-body">
                    <h5 class="card-title">Pizza de Frango com Catupiry</h5>
                    <p class="card-text">

                    A pizza de frango com catupiry apresenta uma mistura de frango desfiado e cremoso queijo catupiry, proporcionando uma experiência saborosa e reconfortante.
                  </p>
                    <a href="create.php" class="btn btn-primary">Realizar Pedido</a> 
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="img/romeu.jpg" class="card-img-top" alt="Imagem do Card 3" style="width:315px; height: 222px;">
                <div class="card-body">
                    <h5 class="card-title">Pizza Romeu e Julieta</h5>
                    <p class="card-text">
Uma fusão única de queijo muçarela e goiabada, combinando o salgado e o doce em uma explosão de sabores irresistível. 
Uma homenagem à clássica história de amor, em cada pedaço.</p>
<a href="create.php" class="btn btn-primary">Realizar Pedido</a> 
                </div>
            </div>
        </div>
    </div>


<?= template_footer()?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
