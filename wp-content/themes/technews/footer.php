<?php 

  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

  $args = array(
    'paged'		=> $paged,
    'post_type' => 'contact'
    );

  $the_query = new WP_Query($args);

?>

<footer id="footer">
	<nav id="navFooter"><?php 
      
      wp_nav_menu ( array (
        'theme_location' => 'menufooter' ,
        'menu_class' => 'menuFooter', // classe CSS pour customiser mon menu
        ) ); 

      ?>
	</nav>
	<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>  
		<div id="firstBlock">
			<div id="firstBlockLeft">
				<h2>Technews</h2>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
				<div id="mailDiv">
					<i class="fa-solid fa-envelope"></i>
					<a href="<?php the_field('mail') ?>"><?php the_field('mail') ?></a>
				</div>
			</div>
			<div id="firstBlockRight">

			</div>
		</div>
		<div id="SecondBlock">

		</div>
	<?php endwhile ?>
</footer>
</div>
</body>
</html>