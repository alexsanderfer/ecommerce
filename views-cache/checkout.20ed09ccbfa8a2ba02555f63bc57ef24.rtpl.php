<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- checkout section  -->
<section class="checkout-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 order-2 order-lg-1">
                <form class="checkout-form" action="/checkout" method="post" name="checkout">
                    <div class="cf-title">Endereço de Entrega</div>
                    <div class="row address-inputs">

                        <?php if( $error != '' ){ ?>

                        <div class="alert alert-danger">
                            <?php echo htmlspecialchars( $error, ENT_COMPAT, 'UTF-8', FALSE ); ?>

                        </div>
                        <?php } ?>


                        <div class="col-md-12">
                            <input type="text" placeholder="Endereço e Logradouro" value="<?php echo htmlspecialchars( $address["desaddress"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"
                                   id="billing_address_1" name="desaddress">

                            <input type="text" placeholder="Bairro" value="<?php echo htmlspecialchars( $address["desdistrict"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" id="billing_district"
                                   name="desdistrict">

                            <input type="text" value="" placeholder="Número" id="billing_address_1"
                                   name="desnumber" class="input-text ">

                            <input type="text" placeholder="Complemento (Opcional)" value="<?php echo htmlspecialchars( $address["descomplement"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"
                                   id="billing_address_2" name="descomplement">
                        </div>
                        <div class="col-md-6">
                            <input type="text" placeholder="Cidade" value="<?php echo htmlspecialchars( $address["descity"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" id="billing_city"
                                   name="descity">
                        </div>
                        <div class="col-md-6">
                            <input type="text" placeholder="Estado" id="billing_state" name="desstate"
                                   value="<?php echo htmlspecialchars( $address["desstate"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>
                        <div class="col-md-6">
                            <input type="text" placeholder="CEP 00000-000" value="<?php echo htmlspecialchars( $cart["deszipcode"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" id="billing_cep_1"
                                   name="zipcode">
                        </div>
                        <div class="col-md-6">
                            <input type="text" placeholder="País" id="billing_state" name="descountry"
                                   value="<?php echo htmlspecialchars( $address["descountry"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>
                    </div>
                    <div class="cf-title">PAGAMENTO</div>
                    <ul class="payment-list">

                        <!-- PayPal Logo -->
                        <table border="0" cellpadding="10" cellspacing="0" align="center">
                            <tbody>
                            <tr>
                                <td align="center"></td>
                            </tr>
                            <tr>
                            </tr>
                            </tbody>
                        </table><!-- PayPal Logo -->

                        <li><img src="/custom/site/img/pagseguro.png" alt="">PagSeguro -<span style="color: red">Indisponível</span>
                        </li>

                        <li><img src="/custom/site/img/cards.png" alt=""> -<span style="color: red">Indisponível</span>
                        </li>

                        <li><input type="radio" checked="checked" id="method-paypal" name="payment-method" value="2">
                            <a href="" title="Pague com PayPal"><img src="https://www.paypalobjects.com/webstatic/mktg/Logo/pp-logo-100px.png"
                                 border="0" alt="PayPal Logo"/></a>
                        </li>

                        <li> >> Escolha o método de pagamento</li>
                    </ul>
                    <button class="site-btn submit-order-btn" data-value="Place order" value="Continuar"
                            id="place_order" name="woocommerce_checkout_place_order">CONTINUAR
                    </button>
                </form>
            </div>
            <div class="col-lg-5 order-1 order-lg-2">
                <div class="checkout-cart">
                    <h3>Seus Produtos</h3>
                    <ul class="product-list">
                        <?php $counter1=-1;  if( isset($products) && ( is_array($products) || $products instanceof Traversable ) && sizeof($products) ) foreach( $products as $key1 => $value1 ){ $counter1++; ?>

                        <li>
                            <div class="pl-thumb"><img src="<?php echo htmlspecialchars( $value1["desphoto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" alt=""></div>
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