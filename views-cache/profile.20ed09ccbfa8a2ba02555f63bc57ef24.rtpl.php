<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- checkout section  -->
<section class="checkout-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 order-2 order-lg-1">
                <form action="/profile" class="checkout-form" method="post">
                    <div class="cf-title">Minha Conta</div>
                    <div class="row address-inputs">

                        <div class="col-md-12">
                            <input id="desperson" name="desperson" placeholder="Nome Completo" type="text"
                                   value="<?php echo htmlspecialchars( $user["desperson"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">

                            <input id="deslogin" name="deslogin" placeholder="Seu Login" type="text"
                                   value="<?php echo htmlspecialchars( $user["deslogin"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">

                            <input id="desemail" name="desemail" placeholder="Email" type="text"
                                   value="<?php echo htmlspecialchars( $user["desemail"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">

                            <input id="nrphone" name="nrphone" placeholder="Telefone" type="text"
                                   value="<?php echo htmlspecialchars( $user["nrphone"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>
                    </div>
                    <button class="site-btn submit-order-btn">SALVAR</button>
                </form>
            </div>
            <div class="col-lg-6 order-1 order-lg-2">
                <?php if( $profileMsg != '' ){ ?>

                <div class="alert alert-success">
                    <?php echo htmlspecialchars( $profileMsg, ENT_COMPAT, 'UTF-8', FALSE ); ?>

                </div>
                <?php } ?>


                <?php if( $profileError ){ ?>

                <div class="alert alert-danger" role="alert">
                    <?php echo htmlspecialchars( $profileError, ENT_COMPAT, 'UTF-8', FALSE ); ?>

                </div>
                <?php } ?>


                <ul class="price-list">
                    <a href="/profile/change-password">
                        <li>Alterar Senha</li>
                    </a>
                    <a href="/profile/orders">
                        <li>Meus Pedidos</li>
                    </a>
                    <a href="/logout">
                        <li>Sair</li>
                    </a>
                </ul>
            </div>


        </div>
    </div>
</section>
<!-- checkout section end -->