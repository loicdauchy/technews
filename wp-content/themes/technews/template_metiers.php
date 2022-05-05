<?php /* Template Name: page métier */ ?>

<?php 

  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

  $args = array(
    'paged'		=> $paged,
    'post_type' => 'metier',
    'posts_per_page' => 8
    );

  $the_query = new WP_Query($args);

?>

<?php get_header(); ?>

<div id="main">
  <h1><?= get_the_title() ?></h1>

  <?php if ($the_query->have_posts()) : ?>
		<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>  
              <a href="<?= get_permalink(get_the_ID()) ?>">
                <div>
                  <?php
                    if ( has_post_thumbnail() ) { // Vérifies qu'une miniature est associée à l'article.
                      the_post_thumbnail('thumbnail', array('class' => 'test'));
                    }
                    else{?>
                    <a href="<?= get_permalink(get_the_ID()) ?>">voir plus</a>
                    <?php }?>
                  <h2><?php the_title(); ?></h2>
                  <br><br>
                </div>
              </a>
                      
	  <?php endwhile; ?>
      <div id="navigation">
      <?php 
      
        $GLOBALS['wp_query']->max_num_pages = $the_query->max_num_pages;
        the_posts_pagination( array(
          'mid_size' => 8,
          'prev_text' => '<',
          'next_text' => '>'
        ));              

      ?>
    </div>

      <?php wp_reset_postdata(); ?>
  <?php endif; ?>
  

</div>
<?php get_footer(); ?>