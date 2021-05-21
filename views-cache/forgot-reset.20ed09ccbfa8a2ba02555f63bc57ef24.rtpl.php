<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>Esqueceu a Senha?</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="/forgot/reset" class="login" id="login-form-wrap" method="post">
                    <input name="code" type="hidden" value="<?php echo htmlspecialchars( $code, ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                    <h2>Olá <?php echo htmlspecialchars( $name, ENT_COMPAT, 'UTF-8', FALSE ); ?>, digite uma nova senha:</h2>
                    <p class="form-row form-row-first">
                        <label for="password">Nova senha <span class="required">*</span>
                        </label>
                        <input class="input-text" id="password" name="password" style="width:350px" type="password">
                    </p>
                    <div class="clear"></div>
                    <p class="form-row">
                        <input class="button" name="login" type="submit" value="Enviar">

                    </p>

                    <div class="clear"></div>
                </form>
            </div>
        </div>
    </div>
</div>