<?php if (!class_exists('Rain\Tpl')) {
    exit;
} ?><!-- Footer section -->
<section class="footer-section">
    <div class="container">
        <div class="footer-logo text-center">
            <a href="index.html"><h2 class="text-white">Ecommerce</h2></a>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="footer-widget about-widget">
                    <h2>Sobre</h2>
                    <p>Loja de venda de celulares feita para estudo pelo curso da Udemy da Hcode. Utilizado PHP 7.</p>
                    <img src="../custom/site/img/cards.png" alt="">
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="footer-widget about-widget">
                    <h2>Categorias</h2>
                    <ul>
                        <?php require $this->checkTemplate("categories-menu"); ?>

                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="footer-widget contact-widget">
                    <h2>Redes Sociais</h2>
                    <div class="social-links">
                        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="contato.html" class="facebook"><i class="fa fa-envelope-open"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="footer-widget about-widget">
                    <h2>Administrador</h2>
                    <ul>
                        <li><a href="/admin/login" target="_blanket"><h2>Admin</h2></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="social-links-warp">
        <div class="container">

            <p class="text-white text-center mt-2">Feito por <a href="https://alexsanderfer.github.io/portfolio/">
                    Alexsander Fernandes</a> <i class="fa fa-heart-o" aria-hidden="true"></i></p>

        </div>
    </div>
</section>
<!-- Footer section end -->


<!--====== Javascripts & Jquery ======-->
<script src="custom/site/js/jquery-3.2.1.min.js"></script>
<script src="custom/site/js/bootstrap.min.js"></script>
<script src="custom/site/js/jquery.slicknav.min.js"></script>
<script src="custom/site/js/owl.carousel.min.js"></script>
<script src="custom/site/js/jquery.nicescroll.min.js"></script>
<script src="custom/site/js/jquery.zoom.min.js"></script>
<script src="custom/site/js/jquery-ui.min.js"></script>
<script src="custom/site/js/main.js"></script>

</body>
</html>
