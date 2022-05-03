<?php /* Template Name: page d'accueil */ ?>

<?php 

  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

  $args = array(
    'paged'		=> $paged,
    'post_type' => array('metier'),
    'posts_per_page' => 3,
    'orderby' => 'parent'
    );

  $the_query = new WP_Query($args);

    
  $args2 = array(
    'paged'		=> $paged,
    'post_type' => 'actualite',
    'posts_per_page' => 2,
    'orderby'=> 'date',
  
    );

  $the_query2 = new WP_Query($args2);


  $args3 = array(
    'paged'		=> $paged,
    'post_type' => array('Temoignage'),
    'posts_per_page' => 3,
    'orderby' => 'parent'
    );

  $the_query3 = new WP_Query($args3);
 

?>



<?php get_header(); ?>

<div id="main">


  <h1><?= get_the_title() ?></h1>
  <?= the_content() ?>

  <section id="boxActuality">
  <?php $actudiv = 0; ?>

  <h2><?= get_the_title(12); ?></h2>

  <?php if ($the_query2->have_posts()) : ?>
		<?php while ($the_query2->have_posts()) : $the_query2->the_post(); ?>  
    


      <div class = <?php if ( $actudiv == 0 ) {?> leftAlign <?php $actudiv = 1; } else {?> rightAlign" <?php $actudiv = 0; } ?>>

        <?php 
          if ( has_post_thumbnail() ) {
            the_post_thumbnail('medium');

        }?>
        

          <div>
            <h2><?php the_title(); ?></h2>
            
            <p><?= the_excerpt(); ?></p>
            <a href="<?= get_permalink(get_the_ID()) ?>">voir plus</a>
          </div>

      </div>
                                
		<?php endwhile; ?>
	    <?php wp_reset_postdata(); ?>
    <?php endif; ?>

    <a href="<?php echo get_permalink(12) ; ?>">
      Voir plus d'actualités
    </a>

  </section>

  
  <section id="metier">

  <h2><?= get_the_title(16); ?></h2>

    <?php if ($the_query->have_posts()) : ?>
      <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>  

      <a href="<?php echo get_permalink($post) ; ?>">
      <div class=''>
        <?php 
          if ( has_post_thumbnail() ) {
            the_post_thumbnail('thumbnail');
            
        }?>
      </div>
        
      <div class=''>
        <h3><?php the_title(); ?></h3>
      </div>

      </a>                        
      <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      <?php endif; ?>


    <a href="<?php echo get_permalink(16) ; ?>">
      Voir plus de métiers
    </a>
    
  </section>

  <section id="">
    
  <h2><?= get_the_title(9); ?></h2>
    <?php if ($the_query3->have_posts()) : ?>
		<?php while ($the_query3->have_posts()) : $the_query3->the_post(); ?>  
    
    


    
        <div class ="temoin">
            <?php 
              if ( has_post_thumbnail() ) {
                the_post_thumbnail('thumbnail');
            }?>

          <div>
            <p><?= the_excerpt(); ?></p>
            
          </div>
          
        </div>
     

              
                      
		<?php endwhile; ?>
	    <?php wp_reset_postdata(); ?>
    <?php endif; ?>

    <a href="<?php echo get_permalink(9) ; ?>">
      Voir plus de témoignages
    </a>
  
  </section>
  
  
</div>

<?php get_footer(); ?>