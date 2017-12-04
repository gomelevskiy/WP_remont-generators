
<!-- FOOTER start -->
<!-- FOOTER start -->
<footer>
    <div class="footer-content-bg">
        <a class="scrollup" href="#header">Go To Top</a>
        <div class="container clearfix">
            <div class="four columns m-bot-25">
                <div class="clearfix">
                    <a href="/" class="logo-footer clearfix" rel="home" title="Home"><?php the_field('logo_name',6); ?></a>
                </div>
                <p><?php the_field('text_about',6); ?></p>
                <a class="right r-m-plus" href="<?php the_field('link_footer',6); ?>">
                    <span class="bold">Узнать</span> больше
                </a>
            </div>
            <div class="four columns m-bot-25">
                <h3 class="caption"><span class="bold">УСЛУГИ</span></h3>
                <?php
                wp_nav_menu( array(
                    'menu_class'=>'footer-menu-category',
                    'theme_location'=>'footer_left'
                ) );
                ?>
            </div>
            <div class="four columns m-bot-25">
                <h3 class="caption"><span class="bold">РЕМОНТ ГЕНЕРАТОРОВ</span></h3>
                <?php
                wp_nav_menu( array(
                    'menu_class'=>'footer-menu-category',
                    'theme_location'=>'footer_right'
                ) );
                ?>
            </div>
            <div class="four columns m-bot-25">
                <h3 class="caption"><span class="bold">КОНТАКТЫ</span></h3>
                <div title="Location" class="icon_loc"><?php the_field('address',6); ?></div>
                <div title="Phone" class="icon_phone"><?php the_field('tel_1',6); ?><br><?php the_field('tel_2',6); ?><br><?php the_field('tel_3',6); ?><br><?php the_field('tel_4',6); ?></div>
                <div title="Email" class="icon_mail"><a href="mailto:<?php the_field('email',6); ?>"><?php the_field('email',6); ?></a></div>
            </div>
        </div>
    </div>
    <div class="footer-copyright-bg">
        <div class="container clearfix">
            <div class="eight columns">
                <nav class="clearfix" id="footer-nav">
                    <?php
                    wp_nav_menu( array(
                        'menu_class'=>'footer-menu',
                        'theme_location'=>'main'
                    ) );
                    ?>
                </nav>
            </div>
            <div class="eight columns right-text">
                Copyright &copy; <a class="author" href="http://kokomarket.net">KOKOMARKET</a>
            </div>
        </div>
    </div>
</footer>

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter41352494 = new Ya.Metrika({
                    id:41352494,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/41352494" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

</body>

</html>