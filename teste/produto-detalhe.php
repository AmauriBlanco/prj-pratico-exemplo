<?php require_once('includes/header.php'); ?>

<main>
    <div class="container mb-5">
        <nav aria-label="breadcrumb ">
            <ol class="breadcrumb">
                <li class="breadcrumb-item fw-bold"><a href="index.php"><i class="bi bi-house-door text-primary me-2 fw-bold"></i>Home</a></li>
                <li class="breadcrumb-item active text-primary fw-bold"><a href="">Apple</a></li>
                <li class="breadcrumb-item"  aria-current="page">Apple iPhone 12 64gb</li>
            </ol>
        </nav>
    </div>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-5">
                    <div id="carouselExampleIndicators" class="carousel slide carousel-fade carousel-detalhe">
                        <ol class="carousel-indicators">
                            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"><img src="/images/img01.png" class="d-block img-fluid" alt="..."></li>
                            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"><img src="/images/img02.png" class="d-block img-fluid" alt="..."></li>
                            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"><img src="/images/img03.png" class="d-block img-fluid" alt="..."></li>
                            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"><img src="/images/img04.png" class="d-block img-fluid" alt="..."></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="/images/img01.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                 <img src="/images/img02.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="/images/img03.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="/images/img04.png" class="d-block w-100" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 detalhe-iphone ms-lg-4">
                    <h2 class="mb-4 fw-bold">Apple iPhone 12 64gb</h2>
                    <i class="bi bi-currency-dollar me-2">1.200</i>
                    <form class="color-select">
                        <label for="colorSelect" class="d-block text-muted mb-2">Cor</label>
                        <select class="col-4 form-select-lg border-0" id="colorSelect" aria-label="Default select example">
                            <option selected>Preto</option>
                            <option value="1">Azul</option>
                            <option value="2">Dourado</option>
                            <option value="3">Brando</option>
                        </select>
                    </form>
                    <div class="my-3 row">
                        <input class="ms-3 col-1 rounded-3 border-0" placeholder="1" type="number">
                        <button class="col-3 ms-2 btn-card">Adicionar</button>
                    </div>
                    <div class="categoria-prod">
                        <p class="text-muted">Ref: N/D</p>
                        <p class="text-muted">Categoria: <a href="#" class="text-primary">Apple</a></p>
                    </div>
                </div>

            </div>
            <div class="row categoria-descricao">
                <div class="col-5">
                    <div class="d-flex justify-content-between">
                        <p>Descrição</p>
                        <i class="bi bi-caret-right"></i>
                    </div>
                    <hr>
                    <p class="text-muted">Informação adicional</p>
                    <hr>
                    <p class="text-muted">Avaliações(0)</p>
                    <hr>
                </div>
                <div class="col-md-6 col-7 ms-lg-4">
                    <h3 class="mb-4">Descrição</h3>
                    <p>
                        Ecrã diagonal: 15,5 cm (6.1″), 2532×1170 pixels, OLED. Modelo de processador: A14. Armazenamento interno: 64 GB. Câmara traseira: 12MP, dupla. SO instalado: iOS 14. Iva incluído.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="container">
        <h2 class="mt-5 fs-1">Produtos relacionados</h2>
        <div class="underscore-title mb-5"></div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4  g-4 mt-1 relacionados-detalhe">
            <?php for ($i = 0; $i < 4; $i++) {
                require('includes/components/produto-item.php');
            }
            ?>
        </div>
    </section>

</main>






<?php require_once('includes/footer.php'); ?>