<?php /* Template Name: page témoignage */ ?>
<?php 

  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

  $args = array(
    'paged'		=> $paged,
    'post_type' => 'Temoignage'
    );

  $the_query = new WP_Query($args);

?>


<?php get_header(); ?>

<div id="main">
  <h1><?= get_the_title() ?></h1>
  <?= the_content() ?>

  <?php if ($the_query->have_posts()) : ?>
		<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>  
            
                <h2><?php the_title(); ?></h2>
                <p><?= the_content(); ?></p>
                
                      
		<?php endwhile; ?>
	    <?php wp_reset_postdata(); ?>
    <?php endif; ?>
</div>

<?php get_footer(); ?>