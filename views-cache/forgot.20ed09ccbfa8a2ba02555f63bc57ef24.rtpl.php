<?php if (!class_exists('Rain\Tpl')) {
    exit;
} ?><!-- Contact section -->
<section class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 contact-info">
                <h3>Recuperar senha</h3>
                <form class="contact-form" method="post" action="/forgot">
                    <input type="email" id="email" name="email" placeholder="Seu e-mail">
                    <button class="site-btn mb-5" value="Enviar" name="login">ENVIAR</button>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Contact section end -->