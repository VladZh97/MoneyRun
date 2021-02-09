<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <a href="" class="footer__logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/logo-footer.png" alt="logo footer">
                </a>
            </div>
        </div>
        <div class="footer__menu1">
            <div class="row">
                <div class="col-md-3 footer__item">
                    <ul>
                        <li><a href="<?= get_permalink( 19 )?>">Główna</a></li>
                        <li><a href="<?= get_permalink( 5 )?>">O nas</a></li>
                        <li><a href="<?= get_permalink( 7 )?>">Oferta</a></li>
                    </ul>
                </div>
                <div class="col-md-3 footer__item">
                    <ul>
                        <li><a href="<?= get_permalink( 9 )?>">Jak działamy</a></li>
                        <li><a href="<?= get_permalink( 13 )?>">Sterfa pośrednika</a></li>
                        <li><a href="<?= get_permalink( 15 )?>">Strefa inwestora</a></li>
                    </ul>
                </div>
                <div class="col-md-3 footer__item">
                    <ul>
                        <li><a href="<?= get_permalink( 11 )?>">Złóz wniosek</a></li>
                        <li><a href="<?= get_permalink( 300 )?>">Blog</a></li>
                        <li><a href="<?= get_home_url();?>/#opinie">Opinie</a></li>
                    </ul>
                </div>
                <div class="col-md-3 footer__item">
                    <ul>
                        <li><a href="<?= get_permalink( 17 )?>">Kontakt</a></li>
                        <li>
                            Money Run sp. z o.o.<br>
                            NIP: 6772443048<br>
                            KRS: 0000779961<br>
                            REGON: 383011596<br>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer__menu2">
            <div class="row">
                <div class="col-md-3 footer__policy">
                    <a href="<?= get_permalink( 348 )?>">Regulamin</a>
                </div>
                <div class="col-md-3 footer__policy">
                    <a href="<?= get_permalink( 3 )?>">Polityka prywatności</a>
                </div>
                <div class="col-md-3 footer__policy d-flex">
                    <a href="<?php the_field('face', 17)?>" class="footer__ico"  target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/fb-footer.png" alt="fbico">
                    </a>
                    <a href="<?php the_field('linked', 17)?>" class="footer__ico"  target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/linked-footer.png" alt="fbico">
                    </a>
                    <a href="<?php the_field('yt', 300)?>" class="footer__ico"  target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/yt-footer.png" alt="fbico">
                    </a>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-12">
                <div class="footer__kivi">
                    Design and develpment <a href="http://kivikivi.pl" target="_blank">kivikivi.pl</a>
                </div>
            </div>
        </div>
    </div>
</footer>


<?php wp_footer(); ?>
<script>var privacylink = "<?php echo get_page_link(3) ?>";</script>
</body>

</html>