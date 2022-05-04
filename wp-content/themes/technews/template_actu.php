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
  <div class='actuTitle'>
    <h1><?= get_the_title() ?></h1>
  </div>


  <?php if ($the_query->have_posts()) : ?>
		<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>  


    <section id="actualite">

    <div class='article'>
      <div class='articleTitle'>
        <h2><?php the_title(); ?></h2>
      </div>
      <div class='articleDate'>
        <p>Le <?= get_the_date(); ?> à <?= get_the_time(); ?></p>
      </div>

      <div class='articleImg'>
        <?php 
          if ( has_post_thumbnail() ) {
            the_post_thumbnail('medium_large');
        }?>
      </div>


      <div class='articleContent'>
        <p><?= the_excerpt(); ?></p>
      </div>


      <button class='articleButton'  onclick="window.location.href='<?php echo get_permalink(get_the_ID()) ?>'"> 
        Voir plus 
      </button>
      
      
    </div>
    </section>            
		<?php endwhile; ?>
	    <?php wp_reset_postdata(); ?>
    <?php endif; ?>
    
</div>

<?php get_footer(); ?>