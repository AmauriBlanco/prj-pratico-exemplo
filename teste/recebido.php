<?php require_once('includes/header.php'); ?>

<main>
    <div class="container mb-5">
        <nav aria-label="breadcrumb ">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php"><i class="bi bi-house-door text-primary me-2"></i>Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Finalizar Compras</li>
            </ol>
        </nav>
    </div>
    <section class="container">
        <h2>Encomenda Recebida</h2>
        <div class="underscore-title mb-5"></div>
        <h3 class="text-primary">Obrigado. A sua encomenda foi recebida.</h3>
        <div class="bg-paper">
            <div class="px-5 my-4">
                <p class="text-muted">NÚMERO DA ENTREGA</p>
                <P>194</P>
            </div>
            <hr>
            <div class="px-5 my-4">
                <p class="text-muted">DATA</p>
                <P>Outubro 21, 2021</P>
            </div>
            <hr>
            <div class="px-5 my-4">
                <p class="text-muted">EMAIL</p>
                <P>janedoe@email.com</P>
            </div>
            <hr>
            <div class="px-5 my-4">
                <p class="text-muted">TOTAL</p>
                <P><i class="bi bi-currency-dollar me-2">693</i></P>
            </div>
            <hr>
            <div class="px-5 my-4">
                <p class="text-muted">FORMA DE PAGAMENTO</p>
                <P>Transferência bancária</P>
            </div>
        </div>
        <h3 class="mb-2 mt-5">Os nossos dados bancários.</h3>
        <div class="bg-paper">
            <div class="px-5 my-4">
                <p class="text-muted">BANCO</p>
                <P>Novo Banco</P>
            </div>
            <hr>
            <div class="px-5 my-4">
                <p class="text-muted">NÚMERO DA CONTA BANCÁRIA</p>
                <P>0000 0000 0000 0000 0000 0</P>
            </div>
            <hr>
            <div class="px-5 my-4">
                <p class="text-muted">IBAM</p>
                <P>PT50 0000 0000 0000 0000 0000 0</P>
            </div>
        </div>


        <div>
            <h3 class="mb-3">Detalhes da encomenda</h3>
            <div class="row bg-white rounded-5 px-4 py-1 mb-1">
                <div class="col-8 fw-bold detalhes-encomenda">
                    <p>
                        Produto
                    </p>
                    <a href="#" class="text-primary fw-normal">Apple iPhone 12 64GB</a>
                </div>
                <div class="col-4 detalhes-encomenda">
                    <p class="fw-bold">
                        Total
                    </p>
                    <p>
                        <i class="bi bi-currency-dollar me-2">1.2000</i>
                    </p>
                </div>
            </div>
            <div class="row bg-white rounded-5 px-4 py-1 mb-1">
                <div class="col-8 fw-bold detalhes-encomenda">
                    <p>
                        Subtotal
                    </p>
                    <p>
                        Envio
                    </p>
                    <p>
                        Forma de pagamento
                    </p>
                    <p>
                        Total
                    </p>
                </div>
                <div class="col-4 detalhes-encomenda">
                    <p>
                        <i class="bi bi-currency-dollar me-2">1.2000</i>
                    </p>
                    <p>
                        Envio grátis
                    </p>
                    <p>
                        Transferência bancária
                    </p>
                    <p>
                        <i class="bi bi-currency-dollar me-2">1.2000</i>
                    </p>
                </div>
            </div>
           

            <div class="row enderecos">
                <div class="col-md-6 col-12">
                    <h3 class="mb-4">Endereço de cadastro</h3>
                    <p>César Cardoso</p>
                    <p>Rua da Portela</p>
                    <p>4810-511 São Paulo</p>
                    <p class="mb-2">(99)99999-9999</p>
                    <p>cesarsilvacardoso@gmail.com</p>
                </div>
                <div class="col-md-6 col-12 mt-5 mt-md-0">
                    <h3 class="mb-4">Endereço de envio</h3>
                    <p>inflight IT, Lda.</p>
                    <p>César Cardoso</p>
                    <p>Av. Park - Parque da Ciência e Tecnologia, S.A</p>
                    <p>4805-017 São Paulo</p>
                </div>
            </div>



        </div>
    </section>
</main>



<?php require_once('includes/footer.php'); ?>