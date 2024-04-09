<?php
include 'functions.php';
?>
<?= template_header ('Limas Pizza')?>

<div class="content text-center">
    <h2>Home</h2>
    <p>Sejam Bem-Vindos!</p>
    
    <div id="carouselExample" class="carousel slide" style="max-width: 600px; margin: 0 auto;">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/carrossel1.jpg" class="d-block w-100" style="max-width: 600px; height: 400px; object-fit: cover;" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/carrossel2.jpg" class="d-block w-100" style="max-width: 600px; height: 400px; object-fit: cover;" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/carrossel3.jpg" class="d-block w-100" style="max-width: 600px; height: 400px; object-fit: cover;" alt="...">
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

<?= template_footer()?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
