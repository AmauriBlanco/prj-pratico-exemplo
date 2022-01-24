<?php require_once('includes/header.php'); ?>

    <section>
        <div id="carouselExampleCaptions" class="carousel slide carousel-home" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button class="active indicators" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" aria-current="true" aria-label="Slide 1"></button>
                <button class="mx-3" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button class="indicators" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/banner.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-lg-block text-start">
                        <h1 class="carousel-text">Tecnologia acessível <br> num só sítio</h5>
                        <button class="btn-grey  mt-4">Ver mais</button>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/banner.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-lg-block text-start">
                        <h1 class="carousel-text">Tecnologia acessível<br> num só sítio</h5>
                        <button class="btn-grey mt-4">Ver mais</button>
                 </div>
                </div>
                <div class="carousel-item">
                    <img src="images/banner.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-lg-block text-start">
                        <h1 class="carousel-text">Tecnologia acessível<br> num só sítio</h5>
                        <button class="btn-grey mt-4">Ver mais</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container my-5">
        <h2 class="mt-5 text-gradiente">Novidades</h2>
        <div class="underscore-title mb-5"></div>

        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4  g-4 mb-5 mt-1">
                <?php for ($i = 0; $i < 4; $i++) {
                    require('includes/components/produto-item.php');
                }
                ?>
            </div>
        </div>
    </section>
       
    

    <section class="container-fluid bg-image">
        <div class="section-image text-white p-5">
            <div class="container py-5">
                <h3 class="fs-2">Segurnaça na compra, no <br> seu conforto</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere maiores sunt incidunt magni sapiente? Distinctio harum enim quos cumque quis aliquid eaque, autem quod ad ab sit mollitia architecto accusantium.</p>
            </div>
        </div>
    </section>

    <section class="container categoria mb-5">
            <h2 class="text-gradiente">Comprar por categoria</h2>
            <div class="underscore-title mb-5"></div>
            <div class="row row-cols-md-3 row-cols-1 gx-0">
                <?php for ($i = 0; $i < 3; $i++) {
                        require('includes/components/categoria-item.php');
                    }
                ?>
            </div>
    </section>

    <section class="container mt-5">
        <h2 class="mt-5 text-gradiente">Promoção</h2>
        <div class="underscore-title mb-5"></div>

        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4  g-4 mb-5 mt-1">
                <?php for ($i = 0; $i < 4; $i++) {
                    require('includes/components/produto-item.php');
                }
                ?>
            </div>
        </div>
    </section>

<?php require_once('includes/footer.php'); ?>