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
        <div class="row mb-5">
            <div class="col">
                <form class="search-area rounded-3 p-3">
                    <input  placeholder="Código do Cupom" aria-label="search">
                </form>
            </div>
            <div class="col">
                <button class="btn-card bg-transparent text-dark fw-bold">Aplicar Cupom</button>
            </div>
            <div class="col offset-lg-5">
                <button class="btn-card bg-transparent text-dark fw-bold">Atualizar carrinho</button>
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
                <div class="row bg-white rounded-bottom py-4">
                    <div class="col-3">
                        <h4>Total</h4>
                    </div>
                    <div class="col-9">
                        <i class="bi bi-currency-dollar fw-bold me-2">1.200</i>
                    </div>
                </div>
                <button class="btn-card w-100 mt-3">Finalizar compra</button>

            </div>
        </div>

    </section>
    




</main>






<?php require_once('includes/footer.php'); ?>