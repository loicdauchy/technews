<footer id="footer">
	footer

	<nav>
      <?php 
      
      wp_nav_menu ( array (
        'theme_location' => 'menufooter' ,
        'menu_class' => 'menufooter', // classe CSS pour customiser mon menu
        ) ); 

      ?>
    </nav>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>