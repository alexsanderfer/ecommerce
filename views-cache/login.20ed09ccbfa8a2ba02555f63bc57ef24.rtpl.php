<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Contact section -->
<section class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 contact-info">
                <?php if( $error != ''  ){ ?>

                <div class="alert alert-danger">
                    <?php echo htmlspecialchars( $error, ENT_COMPAT, 'UTF-8', FALSE ); ?>

                </div>
                <?php } ?>

                <h3>FAÇA O SEU LOGIN</h3>
                <form action="/login" class="contact-form" id="login-form-wrap" method="post">
                    <input id="login" name="login" placeholder="Login*" type="text">
                    <input id="senha" name="password" placeholder="Senha*" type="password">
                    <a class="esqueci-senha" href="/forgot" id="esqueci-senha">Esqueci a senha</a><br>
                    <button class="site-btn" value="Login">LOGIN</button>
                </form>
            </div>
            <div class="col-lg-6 contact-info">
                <?php if( $error != ''  ){ ?>

                <div class="alert alert-danger">
                    <?php echo htmlspecialchars( $error, ENT_COMPAT, 'UTF-8', FALSE ); ?>

                </div>
                <?php } ?>

                <h3>CRIE A SUA CONTA</h3>
                <form action="/register" class="contact-form" id="register-form-wrap" method="post">
                    <input id="nome" name="name" placeholder="Nome Completo*" type="text" value="">
                    <input id="login" name="login" placeholder="Login*" type="text" value="">
                    <input id="email" name="email" placeholder="Email*" type="email" value="">
                    <input id="phone" name="phone" placeholder="Telefone*" type="text" value="">
                    <input id="senha" name="password" placeholder="Senha*" type="password">
                    <button class="site-btn" name="login" type="submit" value="Criar Conta">CRIAR CONTA</button>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Contact section end -->
<br>