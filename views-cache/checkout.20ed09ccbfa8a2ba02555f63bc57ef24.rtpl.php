<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- checkout section  -->
<section class="checkout-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 order-2 order-lg-1">
                <form action="/checkout" class="checkout-form" method="post" name="checkout">
                    <div class="cf-title">Endereço de Entrega</div>
                    <div class="row address-inputs">

                        <?php if( $error != '' ){ ?>

                        <div class="alert alert-danger">
                            <?php echo htmlspecialchars( $error, ENT_COMPAT, 'UTF-8', FALSE ); ?>

                        </div>
                        <?php } ?>



                        <div class="col-md-12">
                            <input id="billing_address_1" name="desaddress" placeholder="Endereço e Logradouro"
                                   type="text" value="<?php echo htmlspecialchars( $address["desaddress"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">

                            <input id="billing_district" name="desdistrict" placeholder="Bairro" type="text"
                                   value="<?php echo htmlspecialchars( $address["desdistrict"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">

                            <input class="input-text " id="billing_address_1" name="desnumber" placeholder="Número"
                                   type="text" value="<?php echo htmlspecialchars( $address["desnumber"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">

                            <input id="billing_address_2" name="descomplement" placeholder="Complemento (Opcional)"
                                   type="text" value="<?php echo htmlspecialchars( $address["descomplement"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>
                        <div class="col-md-6">
                            <input id="billing_city" name="descity" placeholder="Cidade" type="text"
                                   value="<?php echo htmlspecialchars( $address["descity"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>
                        <div class="col-md-6">
                            <input id="billing_state" name="desstate" placeholder="Estado" type="text"
                                   value="<?php echo htmlspecialchars( $address["desstate"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>
                        <div class="col-md-6">
                            <input id="billing_cep_1" name="zipcode" placeholder="CEP 00000-000" type="text"
                                   value="<?php echo htmlspecialchars( $address["deszipcode"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>
                        <div class="col-md-6">
                            <input id="billing_state" name="descountry" placeholder="País" type="text"
                                   value="<?php echo htmlspecialchars( $address["descountry"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>
                    </div>

                    <div class="alert alert-danger">
                        Certifique-se de preencher todos os campos corretamente.
                    </div>


                    <div class="cf-title">PAGAMENTO</div>
                    <ul class="payment-list">


                    </ul>
                    <button class="site-btn submit-order-btn" data-value="Place order" id="place_order"
                            name="woocommerce_checkout_place_order" value="Continuar">CONTINUAR
                    </button>
                </form>
            </div>
            <div class="col-lg-5 order-1 order-lg-2">
                <div class="checkout-cart">
                    <h3>Seus Produtos</h3>
                    <ul class="product-list">
                        <?php $counter1=-1;  if( isset($products) && ( is_array($products) || $products instanceof Traversable ) && sizeof($products) ) foreach( $products as $key1 => $value1 ){ $counter1++; ?>

                        <li>
                            <div class="pl-thumb"><img alt="" src="<?php echo htmlspecialchars( $value1["desphoto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"></div>
                            <h6><?php echo htmlspecialchars( $value1["desproduct"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h6>
                            <p>Qtd: <?php echo htmlspecialchars( $value1["nrqtd"], ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
                        </li>
                    </ul>
                    <?php } ?>

                    <ul class="price-list">
                        <li>Subtotal<span>R$ <?php echo formatPrice($cart["vlsubtotal"]); ?></span></li>
                        <li>Frete<span>R$ <?php echo formatPrice($cart["vlfreight"]); ?></span></li>
                        <li class="total">Total do Pedido<span>R$ <?php echo formatPrice($cart["vltotal"]); ?></span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- checkout section end -->