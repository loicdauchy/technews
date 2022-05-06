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

<div id="metierPage">

  <div class='metierPageTitle'>
    <h1><?= get_the_title() ?></h1>
  </div>

  <?php if ($the_query->have_posts()) : ?>
		<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>  
    <div class="Ndivmain">
              <a href="<?= get_permalink(get_the_ID()) ?>">
                
                  <?php
                    if ( has_post_thumbnail() ) {
                      the_post_thumbnail('medium-large', array('class' => 'test'));
                    }
                    else{?>
                    <a href="<?= get_permalink(get_the_ID()) ?>">voir plus</a>
                    <?php }?>
                  <h2><?php the_title(); ?></h2>
                  <br><br>
                
              </a>
      </div>
	  <?php endwhile; ?>

    


      <?php wp_reset_postdata(); ?>
  <?php endif; ?>

</div>
<div id="navigation">
      <?php 
      
        $GLOBALS['wp_query']->max_num_pages = $the_query->max_num_pages;
        the_posts_pagination( array(
          // 'current' => 0,
          'mid_size' => 0,
          'end_size' => 0,
          'show_all' =>false,
          'prev_text' => '<',
          'next_text' => '>',
          'screen_reader_text' => ' '
        ));              

      ?>
    </div>
<?php get_footer(); ?>