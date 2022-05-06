
<footer>
    <nav class="navFooter"><?php 
      
      wp_nav_menu ( array (
        'theme_location' => 'menufooter' ,
        'menu_class' => 'menuFooter', // classe CSS pour customiser mon menu
        ) ); 

      ?>
    </nav>
    <div id="footerContent">
        <div id="boxtechNews">
            <div class="techTitle">
                <h2>Technews</h2>
                
                <div class="contactTech">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br /> Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s</p>
                    <a href="mailto:<?= $GLOBALS['mail'] ?>"><i class="fa-solid fa-envelope"></i><?= $GLOBALS['mail'] ?></a>
                </div>
            </div>
            <div>
                <div class="ligneFooter"></div>
            </div>

            <div class="suivezFooter">
                <h3>Suivez-nous sur les réseaux !</h3>
                <div class="reseauFooter">

                    <?php if($GLOBALS['facebook'] !== null) {?>
                        <div class="roundFooter">
                            <a href="<?= $GLOBALS['facebook'] ?>" class="fa-brands fa-facebook-f" target="_blank"></a>
                        </div>
                    <?php }
                    if($GLOBALS['twitter'] !== null) {?>
                        <div class="roundFooter">
                            <a href="<?= $GLOBALS['twitter'] ?>" class="fa-brands fa-twitter" target="_blank"></a>
                        </div>
                    <?php }
                    if($GLOBALS['linkedin'] !== null) {?>
                        <div class="roundFooter">
                            <a href="<?= $GLOBALS['linkedin'] ?>" class="fa-brands fa-linkedin" target="_blank"></a>
                        </div>
                    <?php } 
                    if($GLOBALS['instagram'] !== null) {?>
                        <div class="roundFooter">
                            <a href="<?= $GLOBALS['instagram'] ?>" class="fa-brands fa-instagram" target="_blank"></a>
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
    </div>
</footer>
</div>
</body>
<script src="http://localhost/test/wp-content/themes/technews/assets/js/app.js"></script>
</html>