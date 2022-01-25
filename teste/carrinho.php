<?php require_once('includes/header.php'); ?>

<main>
    <div class="container mb-5">
        <nav aria-label="breadcrumb ">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php"><i class="bi bi-house-door text-primary me-2"></i>Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Carrinho</li>
            </ol>
        </nav>
    </div>
    
    <section class="container">
        <h2>Carrinho</h2>
        <div class="underscore-title mb-5"></div>

        <div>
            <table class="table table-carrinho bg-white rounded-4">
                <thead>
                    <tr class="bg-neutro">
                        <th scope="col"></th>
                        <th scope="col">Produto</th>
                        <th scope="col">Preço</th>
                        <th scope="col">Quantidade</th>
                        <th scope="col">Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"><i class="bi bi-x-circle-fill me-2"></i><img src="/images/img01.png" width="40px" alt=""> </th>
                        <td><a href="#" class="text-primary">Apple Iphone 12 64gb</a></td>
                        <td><i class="bi bi-currency-dollar me-2">1.200</i></td>
                        <td>1</td>
                        <td><i class="bi bi-currency-dollar me-2">1.200</i></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="row align-items-md-center mb-5">
            <div class="col-6 col-md-2">
                <form class="search-area bg-white rounded-3 p-3">
                    <input class="bg-white w-100" placeholder="Código do Cupom" aria-label="search">
                </form>
            </div>
            <div class="col-6 col-md-2 ps-0">
                <button class="btn-carrinho bg-transparent d-block mx-auto mx-md-0 text-nowrap h-100 w-100">Aplicar Cupom</button>
            </div>
            <div class="col-md-4 offset-md-4 mt-5 mt-md-0 d-md-flex justify-content-md-end">
                <button class="btn-carrinho bg-transparent mx-auto d-block mx-md-0 text-nowrap ">Atualizar carrinho</button>
            </div>
        </div>

        <div class="row py-5">
            <div class="col-md-5 col-12 offset-md-7">
                <h3 class="mb-4">Total no carrinho</h3>
                <div class="row bg-white rounded-top py-4">
                    <div class="col-3">
                        <h4>Subtotal</h4>
                    </div>
                    <div class="col-9">
                        <i class="bi bi-currency-dollar me-2">1.200</i>
                    </div>
                </div>
                <div class="row bg-white py-4">
                    <div class="col-3">
                        <h4>Envio</h4>
                    </div>
                    <div class="col-9">
                        <p>
                            Envio grátis<br>
                            As opções de envio serão actualizadas<br>
                            durante a finalização da compra.<br>
                            <a href="#" class="text-primary">Calcular custos de envio</a>
                        </p>
                    </div>
                </div>
                <div class="row bg-white py-4">
                    <div class="col-3">
                        <h4>Total</h4>
                    </div>
                    <div class="col-9">
                        <i class="bi bi-currency-dollar fw-bold me-2">1.200</i>
                    </div>
                </div>
                <button class="btn-finalizar w-100 mt-3 py-3 ">Finalizar compra</button>

            </div>
        </div>

    </section>
    




</main>






<?php require_once('includes/footer.php'); ?>