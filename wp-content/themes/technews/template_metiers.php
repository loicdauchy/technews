<?php /* Template Name: page métier */ ?>

<?php 

  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

  $args = array(
    'paged'		=> $paged,
    'post_type' => 'metier'
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
                <p><?= the_excerpt(); ?></p>
                <a href="<?= get_permalink(get_the_ID()) ?>">Fiche métier</a>
                      
		<?php endwhile; ?>
	    <?php wp_reset_postdata(); ?>
    <?php endif; ?>
</div>

<?php get_footer(); ?>