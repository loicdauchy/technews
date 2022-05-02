<?php /* Template Name: page d'actualité */ ?>

<?php 

  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

  $args = array(
    'paged'		=> $paged,
    'post_type' => 'actualite'
    );

  $the_query = new WP_Query($args);

?>

<?php get_header(); ?>

<div id="actupage">
  <h1><?= get_the_title() ?></h1>
  <?= the_content() ?>

  <?php if ($the_query->have_posts()) : ?>
		<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
      <div>
        <?php
            if ( has_post_thumbnail() ) { // Vérifies qu'une miniature est associée à l'article.
            the_post_thumbnail('thumbnail', array('class' => 'test'));
            }
        ?>
        <div>
          <h2><?php the_title(); ?></h2>        
          <p><?= the_excerpt(); ?></p>
          <a href="<?= get_permalink(get_the_ID()) ?>">voir plus</a>
        </div>
      </div>                
		<?php endwhile; ?>
	    <?php wp_reset_postdata(); ?>
    <?php endif; ?>
    <?php the_posts_pagination() ?>

</div>

<?php get_footer(); ?>