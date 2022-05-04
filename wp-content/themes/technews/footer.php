<?php 

  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

  $args = array(
    'paged'		=> $paged,
    'post_type' => 'contact'
    );

  $the_query = new WP_Query($args);

?>

<footer>
    <nav class="navFooter"><?php 
      
      wp_nav_menu ( array (
        'theme_location' => 'menufooter' ,
        'menu_class' => 'menuFooter', // classe CSS pour customiser mon menu
        ) ); 

      ?>
    </nav>
    <div id="footerContent">
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
        <div id="boxtechNews">
            <div id="techTitle">
                <h2>Technews</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br /> Lorem Ipsum has been
                    the industry's standard dummy text ever since the 1500s</p>
                <div class="contactTech">
                    <a href="mailto:<?php the_field('mail') ?>"><i
                            class="fa-solid fa-envelope"></i><?php the_field('mail') ?></a>
                </div>
            </div>
            <div>
                <div class="ligneFooter"></div>
            </div>

            <div class="suivezFooter">
                <h3>Suivez-nous sur les réseaux !</h3>
                <div class="reseauFooter">
                    <?php if(get_field('facebook')!='') {?>
                    <div class="roundFooter">
                        <a href="<?php the_field('facebook') ?>" class="fa-brands fa-facebook-f" target="_blank"></a>
                    </div>
                    <?php }
                        if(get_field('twitter')!='') {?>
                    <div class="roundFooter">
                        <a href="<?php the_field('twitter') ?>" class="fa-brands fa-twitter" target="_blank"></a>
                    </div>
                    <?php }
                        if(get_field('linkedin')!='') {?>
                    <div class="roundFooter">
                        <a href="<?php the_field('linkedin') ?>" class="fa-brands fa-linkedin" target="_blank"></a>
                    </div>
                    <?php } 
                        if(get_field('instagram')!='') {?>
                    <div class="roundFooter">
                        <a href="<?php the_field('instagram') ?>" class="fa-brands fa-instagram" target="_blank"></a>
                    </div>
                    <?php } ?>
                </div>
                <a class="politique" href="">Politique de Confidentialité</a>
            </div>
        </div>
        <div class="mentionFooter">
            <div class="boxDesigne">
                <p class="designe">Designed with <i class="fa-solid fa-heart"></i>

                    by FuturDev</p>
            </div>
            <h4>Copyright &copy 2022 TechNews</h4>
            <a href="">Mentions Légales</a>
        </div>
    </div>
    <?php endwhile ?>
    <?php wp_reset_postdata(); ?>
    </div>
</footer>
</div>
</body>
<script src="http://localhost/test/wp-content/themes/technews/assets/js/app.js"></script>
</html>