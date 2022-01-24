<?php require_once('includes/header.php'); ?>

<main>
    <div class="container">
        <h2 class="fs-1">Finalizar compras</h2>
        <div class="underscore-title mb-5"></div>
        <div class="alert bg-alert-blue d-flex rounded" role="alert">
            <span class="blue-bar rounded-start"></span>
            <i class="bi bi-exclamation-circle mx-3"></i>
            <p class="pe-3">Tem um cupom de desconto? <a href="#" class="text-blue">Clique aqui e indique o código do seu cupom de desconto</a></p>
        </div>
    </div>
    <section class="container cadastro-section">
        <div class="row">
            <div class="col-md-8 col-12 px-5">
                <h3>Cadastro da compra </h3>
                <form class="row g-4">
                    <div class="col-md-6">
                        <label for="cadastroNome" class="form-label">Nome <span class="text-primary">*</span></label>
                        <input type="text" class="form-control form-control-lg rounded-5" id="cadastroNome">
                    </div>
                    <div class="col-md-6">
                        <label for="cadastroSobrenome" class="form-label">Sobrenome <span class="text-primary">*</span></label>
                        <input type="text" class="form-control form-control-lg rounded-5" id="cadastroSobrenome">
                    </div>
                    <div class="col-12">
                        <label for="cadastroEmpresa" class="form-label">Nome da Empresa (opcional)</label>
                        <input type="text" class="form-control form-control-lg rounded-5" id="cadastroEmpresa">
                    </div>
                    <div class="col-12">
                        <label for="cadastroEndereco" class="form-label">Endereço<span class="text-primary">*</span></label>
                        <input type="text" class="form-control form-control-lg rounded-5" id="cadastroEndereco" placeholder="Nome da rua e numero">
                        <input type="text" class="form-control form-control-lg rounded-5 mt-3" id="cadastroEndereco2" placeholder="Nome da rua e numero secundario (opcional)">
                    </div>
                    <div class="col-12">
                        <label for="cadastroCidade" class="form-label">Cidade<span class="text-primary">*</span></label>
                        <input type="text" class="form-control form-control-lg rounded-5" id="cadastroCidade">
                    </div>
                    <div class="col-12">
                        <label for="cadastroCep" class="form-label">CEP<span class="text-primary">*</span></label>
                        <input type="text" class="form-control form-control-lg rounded-5" id="cadastroCep">
                    </div>
                    <div class="col-12">
                        <label for="cadastroTel" class="form-label">Telefone<span class="text-primary">*</span></label>
                        <input type="number" class="form-control form-control-lg rounded-5" id="cadastroTel">
                    </div>
                    <div class="col-12">
                        <label for="cadastroEmail" class="form-label">E-mail<span class="text-primary">*</span></label>
                        <input type="email" class="form-control form-control-lg rounded-5" id="cadastroEmail">
                    </div>
                </form>
                <div class="my-5">
                    <div class="form-check d-flex justify-content-between ps-0 mb-3">
                        <label class="form-check-label fs-3" for="enderecoEnvio">
                            Enviar para um endereço diferente?
                        </label>
                        <input class="form-check-input me-md-3 mt-2 " type="checkbox" id="enderecoEnvio">
                    </div>
                    <div class="mt-5 mb-3">
                        <label for="cadastroObservacao" class="form-label">Observações(opcional)</label>
                        <textarea class="form-control rounded-5" id="cadastroObservacao" rows="5"></textarea>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-check mb-5">
                        <input class="form-check-input me-0 me-md-3 " type="checkbox" value="" id="cadastroNewsletters">
                        <label class="form-check-label" for="cadastroNewsletters">
                            Sim, aceito receber newsletters e outros conteúdos promocionais <br>ocasionalmente (opcional)
                        </label>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-12">
                <h3>A sua encomenda</h3>
                <div class="mt-4 bg-white rounded p-4">
                    <div class="row">
                        <div class="col-6 mb-5">
                            <p class="fw-bold">Produto</p>
                        </div>
                        <div class="col-6">
                            <p class="fw-bold">Subtotal</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <p>Apple iPhone 12 64GB</p>
                        </div>
                        <div class="col-6">
                            <p><i class="bi bi-currency-dollar me-2">1.200</i></p>
                        </div>
                    </div>
                </div>
                <div class="mt-2 bg-white rounded p-4">
                    <div class="row">
                        <div class="col-5 mb-5">
                            <p class="fw-bold">Subtotal</p>
                        </div>
                        <div class="col-6">
                            <p><i class="bi bi-currency-dollar me-2">1.200</i></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5 mb-5">
                            <p class="fw-bold">Envio</p>
                        </div>
                        <div class="col-6">
                            <p>Envio grátis</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5">
                            <p class="fw-bold">Total</p>
                        </div>
                        <div class="col-6">
                            <p><i class="bi bi-currency-dollar me-2 fw-bold">1.200</i></p>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-4 my-5 rounded">
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="radio" name="formaPagamento" id="pagamentoTransferencia" checked>
                        <label class="form-check-label" for="pagamentoTransferencia">
                            Tranferência bancária
                        </label>
                    </div>
                    <p class="my-3">
                        Efectue o seu pagamento por transferência bancária ou depósito directo na nossa conta. Por favor indique o n.º da encomenda como referência da transferência ou depósito. A sua encomenda não será enviada até confirmação do montante na nossa conta.
                    </p>
                    <div class="form-check mt-5">
                        <input class="form-check-input" type="radio" name="formaPagamento" id="pagamentoCredito" >
                        <label class="form-check-label" for="pagamentoCredito">
                            Cartão de crédito
                        </label>
                        <span class="ms-5"><img src="/images/visa.png" alt=""></span>
                        <span><img src="/images/master.png" alt=""></span>
                        <span><img src="/images/amex.png" alt=""></span>
                    </div>
                </div>
                <div class="bg-white p-4 rounded">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="infoProdutos">
                        <label class="form-check-label" for="infoProdutos">
                            Quero receber emails exclusivos com descontos e informações de produtos (opcional)
                        </label>
                    </div>
                    <p class="my-4">
                        Os seus dados pessoais serão utilizados para processar a sua encomenda, para melhorar a sua experiência em toda a loja e para os propósitos descritos na nossa <a href="#" class="text-primary fw-bold"> política de privacidade</a>.
                    </p>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="termos">
                        <label class="form-check-label" for="termos">
                            Eu li e aceito os <a href="#" class="text-primary fw-bold">termos e condições</a> da loja *
                        </label>
                    </div>
                    <button class="btn-card w-100 py-3 mt-2">Finalizar encomenda</button>
                </div>
            </div>
        </div>
    </section>
    





</main>



<?php require_once('includes/footer.php'); ?>