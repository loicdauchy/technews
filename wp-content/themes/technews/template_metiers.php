<?php /* Template Name: page métier */ ?>

<?php 

  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

  $args = array(
    'paged'		=> $paged,
    'post_type' => 'metier',
    'posts_per_page' => 3
    );

  $the_query = new WP_Query($args);

?>

<?php get_header(); ?>

<div id="main">
  <h1><?= get_the_title() ?></h1>
  <?= the_content() ?>

  <?php if ($the_query->have_posts()) : ?>
		<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>  
              <div>
                <h2><?php the_title(); ?></h2>
                <?php
                  if ( has_post_thumbnail() ) { // Vérifies qu'une miniature est associée à l'article.
                    the_post_thumbnail();
                  }
                ?>
                <p><?= the_excerpt(); ?></p>
                <a href="<?= get_permalink(get_the_ID()) ?>">voir plus</a>
                <br><br>
              </div>
                      
	<?php endwhile; ?>
    <?php the_posts_pagination() ?>

    <?php wp_reset_postdata(); ?>
  <?php endif; ?>
  

</div>
<?php get_footer(); ?>