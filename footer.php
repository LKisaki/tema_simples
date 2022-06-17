<footer>
    <section class="metodologia">
        <div class="center">
            <h2>Conheça nossa Metodologia</h2>
            <p>O que acha de fazermos o que mais gostamos de fazer? Conversar!<br />Entre em contato por e-mail ou telefone.</p>
            <a href="/contato">Entrar Contato</a>
        </div>
    </section>
    <div class="center">
        <div class="col-footer">
            <h2>Suporte</h2>
            <a href="">Contato</a>
            <a href="">FAQ</a>
        </div>
        <div class="col-footer">
            <h2>Suporte</h2>
            <a href="">Contato</a>
            <a href="">FAQ</a>
        </div>
        <div class="col-footer">
            <h2>Suporte</h2>
            <a href="">Contato</a>
            <a href="">FAQ</a>
        </div>
        <div style="width: 40%;text-align: right;" class="col-footer">
            <img src="<?php echo get_theme_root_uri('tema_wordpress', 'themes/tema_wordpress/images/logo-footer.png'); ?>" />
        </div>
    </div>
</footer>

<script src="<?php echo get_theme_root_uri('tema_wordpress', 'themes/tema_wordpress/js/jquery.js'); ?>"></script>
<script src="<?php echo get_theme_root_uri('tema_wordpress', 'themes/tema_wordpress/js/slick.min.js'); ?>"></script>
<script src="<?php echo get_theme_root_uri('tema_wordpress', 'themes/tema_wordpress/js/autowrite.js'); ?>"></script>
<script type="text/javascript">
    $('section.clientes-slider .slider-container').slick({
        dots: true,
        arrows: false,
        infinite: false,
        speed: 1000,
        slidesToShow: 4,
        autoplay: true,
        centerMode: false,
        autoplaySpeed: 3000,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 2
            }
        }]
    });

    $('section.depoimentos .depoimentos-box').slick({
        dots: true,
        arrows: false,
        infinite: true,
        speed: 1000,
        slidesToShow: 1,
        centerMode: false
    });
</script>
<script>
    //Menu responsivo.
    $('.menu-mobile i').click(function() {
        $('.menu-mobile').find('ul').slideToggle();
    })
</script>
</body>

</html>